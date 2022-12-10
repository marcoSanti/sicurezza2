FROM ubuntu:20.04
ARG DEBIAN_FRONTEND=noninteractive
RUN  apt-get update \
    && apt-get -y install \
		  iputils-ping \
		  iproute2 \
		  net-tools \
		  dnsutils \
		  apache2 \
		  php7.4 libapache2-mod-php7.4 \
    && apt-get clean
CMD [ "/bin/bash" ]

