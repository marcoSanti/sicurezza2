<html lang="en">

<head>
  <title>Accesso area protetta</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="theme-color" content="#33b5e5">
  <meta charset="utf-8">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


  <link rel="stylesheet" href="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/css/dist/mdb5/standard/core.min.css">


  <link rel='stylesheet' id='roboto-subset.css-css' href='https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/css/mdb5/fonts/roboto-subset.css?ver=3.9.0-update.5' type='text/css' media='all' />

  <style>
    #navbarNotification::after {
      content: none !important;
    }


    #main-navbar .badge {
      position: absolute;
      font-size: .6rem;
      margin-top: -.1rem;
      margin-left: -.5rem;
      padding: .2em .45em;
    }


    #main-navbar .nav-link {
      color: rgba(0, 0, 0, .55) !important;
      font-size: 1rem !important;
      font-weight: 400;
    }

    #main-navbar .nav-link :hover {
      color: rgb(76, 76, 76);
    }



    [aria-labelledby=new-mdb-technologies-dropdown] li {
      background-color: rgb(255, 255, 255) !important;
    }

    [aria-labelledby=new-mdb-technologies-dropdown] li :hover {
      background-color: #EEEEEE !important;
      box-shadow: none !important;
    }

    [aria-labelledby=userDropdown] a {
      background-color: rgb(255, 255, 255) !important;
      box-shadow: none !important;
    }

    [aria-labelledby=userDropdown] a:hover {
      background-color: #EEEEEE !important;
    }

    #navbarNotificationContent a {
      background-color: rgb(255, 255, 255) !important;
      box-shadow: none !important;
    }

    #navbarNotificationContent a:hover {
      background-color: #EEEEEE !important;
    }

    .dropdown-item-pseudo-focus {
      background-color: rgba(0, 0, 0, 0.05) !important;
      box-shadow: none !important;
    }

    .docs-pills {
      border-radius: 0.5rem;
    }

    .docs-pills pre[class*="language-"] {
      border-bottom-right-radius: 0.5rem;
      border-bottom-left-radius: 0.5rem;
    }

    .docs-pills .btn-copy-code,
    .docs-tab-content .export-to-snippet {
      position: absolute;
      top: 16px;
      right: 16px;
      box-shadow: none !important;
      color: #616161 !important;
      background-color: transparent !important;
      padding: 6px 15px !important;
    }

    @media (max-width: 576px) {

      [id^=dpl-],
      [class^=dpl-],
      .mobile-hidden {
        display: none !important;
      }
    }
  </style>
  <style>
    #mdb-sidenav .sidenav-collapse,
    .sidenav .rotate-icon {
      transition-property: none;
    }

    #mdb-sidenav .fas {
      color: #9FA6B2;
    }

    #mdb-sidenav a {
      color: #4B5563;
    }

    #mdb-sidenav a.active {
      background-color: rgba(18, 102, 241, .05);
    }

    #mdb-sidenav .sidenav-item {
      margin-left: 5px;
      margin-right: 5px;
    }

    #mdb-sidenav .sidenav-item:first-child {
      margin-top: 4px;
    }

    #mdb-sidenav .sidenav-item:last-child {
      margin-bottom: 4px;
    }

    #mdb-sidenav-toggler {
      display: none;
      background-color: transparent;
    }

    .mdb-docs-layout {
      padding-left: 240px;
    }

    @media (max-width: 1440px) {
      #mdb-sidenav-toggler {
        display: unset;
      }

      #mdb-sidenav {
        transform: translate(-100%);
      }

      .mdb-docs-layout {
        padding-left: 0px;
      }
    }

    .sidenav-icon {
      color: #9fa6b2;
      height: 14px;
    }
  </style>



</head>

<body>

  <!-- Section: Design Block -->
  <div class="background-radial-gradient overflow-hidden" style="height:100%">
    <style>
      .background-radial-gradient {
        background-color: hsl(218, 41%, 15%);
        background-image: radial-gradient(650px circle at 0% 0%,
            hsl(218, 41%, 35%) 15%,
            hsl(218, 41%, 30%) 35%,
            hsl(218, 41%, 20%) 75%,
            hsl(218, 41%, 19%) 80%,
            transparent 100%),
          radial-gradient(1250px circle at 100% 100%,
            hsl(218, 41%, 45%) 15%,
            hsl(218, 41%, 30%) 35%,
            hsl(218, 41%, 20%) 75%,
            hsl(218, 41%, 19%) 80%,
            transparent 100%);
      }

      #radius-shape-1 {
        height: 220px;
        width: 220px;
        top: -60px;
        left: -130px;
        background: radial-gradient(#44006b, #ad1fff);
        overflow: hidden;
      }

      #radius-shape-2 {
        border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
        bottom: -60px;
        right: -110px;
        width: 300px;
        height: 300px;
        background: radial-gradient(#44006b, #ad1fff);
        overflow: hidden;
      }

      .bg-glass {
        background-color: hsla(0, 0%, 100%, 0.9) !important;
        backdrop-filter: saturate(200%) blur(25px);
      }
    </style>

    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
      <div class="row gx-lg-5 align-items-center mb-5">
        <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">

          <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
            <img src="https://www.unito.it/sites/all/themes/bsunito/img/logo_new_2022.svg" style="margin-left:9em" />
          </p>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
          <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
          <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

          <div class="card bg-glass">
            <div class="card-body px-4 py-5 px-md-5">
              <form method="post" action="./protected/">
                <h1 class="my-5 display-5 fw-bold ls-tight">
                  Login to protected service
                </h1>

                <!-- Email input -->
                <div class="alert alert-info">
                  A certificate is required to log in and will be asked after login button is pressed.
                </div>

                <?php
                if (isset($_GET["err"])) {
                ?>
                  <div class="alert alert-danger">
                   The password and the certificate provided are not matching!
                  </div>
                <?php
                }
                ?>
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4" name="password" class="form-control" />
                  <label class="form-label" for="form3Example4">Password</label>
                </div>


                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">
                  Login
                </button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Section: Design Block -->

</body>

</html>