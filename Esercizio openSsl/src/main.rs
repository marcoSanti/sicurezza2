use openssl::{
    base64,
    rand::rand_bytes,
    symm::{decrypt, encrypt, Cipher},
};

use std::{
    env,
    fs::{self, File},
    io::{self, stdin, Write},
    process,
};

fn main() {
    let mut operation = String::new();
    let mut file_name_input = String::new();
    let mut file_name_output = String::new();
    let mut password = String::new();
    let mut i = 1;
    let args: Vec<String> = env::args().collect();
    let cipher = Cipher::aes_256_cbc();

    if args.len() == 1 {
        print_help();
    }

    while i < args.len() {
        if &args[i] == "-e" {
            operation = String::from("e");
        } else if &args[i] == "-d" {
            operation = String::from("d");
        } else if &args[i] == "-in" {
            i = i + 1;
            file_name_input = String::from(&args[i]);
        } else if &args[i] == "-out" {
            i = i + 1;
            file_name_output = String::from(&args[i]);
        } else {
            println!("Error: unknown command {}", args[i]);
            print_help();
        }

        i = i + 1;
    }

    print!("Insert secret key: ");
    io::stdout().flush().unwrap();
    stdin()
        .read_line(&mut password)
        .expect("Unable to obtain secret key!");

    if operation == "e" {
        fun_encrypt(file_name_input, file_name_output, password, cipher);
    } else {
        fun_decrypt(file_name_input, file_name_output, password, cipher);
    }
}

fn fun_encrypt(file_name_input: String, file_name_output: String, mut key: String, cipher: Cipher) {
    let contents_input = fs::read(file_name_input).expect("Unable to read file.");

    format_password(&mut key, cipher.key_len());

    //random IV
    let mut local_iv = vec![0x00; 16];
    rand_bytes(&mut local_iv).expect("Unable to generate random IV!");

    let mut ciphertext = encrypt(cipher, key.as_bytes(), Some(&local_iv), &contents_input)
        .expect("Unable encrypt file!");

    //print base64 of iv
    println!("File IV: {}", base64::encode_block(&local_iv));
    for iv_byte in local_iv {
        ciphertext.insert(0, iv_byte)
    }

    let mut out_file = File::create(file_name_output).expect("Unable to create output file!");
    match out_file.write_all(&ciphertext) {
        Ok(_r) => {
            println!("File encrypted!");
        }
        Err(r) => {
            println!("{}", r)
        }
    };
}

fn fun_decrypt(file_name_input: String, file_name_output: String, mut key: String, cipher: Cipher) {
    let mut local_iv = vec![0x00; 16];
    let mut i = 15;

    //key len adjustment to fit cipher requirements
    format_password(&mut key, cipher.key_len());

    let mut contents_input = fs::read(file_name_input).expect("Unable to read file.");

    //richiesto fare da 15 a 0 a causa di endianess (little endianess) della cpu
    while i < 16 {
        local_iv[15 - i] = contents_input.remove(0);
        i = i + 1;
    }

    //print base64 of iv
    println!("File IV: {}", base64::encode_block(&local_iv));

    let cleartext = decrypt(cipher, key.as_bytes(), Some(&local_iv), &contents_input)
        .expect("Unable to decode file!");

    let mut out_file = File::create(file_name_output).expect("Unable to reate output file!");
    match out_file.write_all(&cleartext) {
        Ok(_r) => {
            println!("File decrypted!")
        }
        Err(r) => {
            println!("{}", r)
        }
    }
}

fn format_password(psw: &mut String, len: usize) {
    while psw.len() > len {
        psw.pop();
    }
    while psw.len() < len {
        psw.push('0');
    }
}

fn print_help() {
    println!("Encrypt file with aes 256 cbc\nUsage is: openssl_exer [-e|-d] [-in] [-out]\n-e\tencrypt file\n-d\tdecrypt file\n-in\tinput file name\n-out\toutput file name\n\nBuild by Marco Edoardo Santimaria");
    process::exit(0x00);
}
