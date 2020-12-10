FROM debian:buster

RUN apt-get -y update \
	&& apt-get -y install apt-utils \
	&& apt-get -y install gnupg \
	&& apt-get -y install curl \
	&& apt-get -y install nginx \
	&& apt-get -y install mariadb-server mariadb-client \
	&& apt-get -y install php \
	&& apt-get -y install php-mysql \
	&& apt-get -y install php7.3 php7.3-fpm php7.3-mysql \
	&& apt-get -y install php-mbstring \
	&& apt-get -y install vim 


RUN curl -LO https://files.phpmyadmin.net/phpMyAdmin/5.0.1/phpMyAdmin-5.0.1-all-languages.tar.gz \
	&& tar xzvf phpMyAdmin-5.0.1-all-languages.tar.gz \
	&& mv phpMyAdmin-5.0.1-all-languages /var/www/html/phpMyAdmin \
	&& rm phpMyAdmin-5.0.1-all-languages.tar.gz \
	&& mkdir /var/www/html/phpMyAdmin/tmp \
	&& chmod 777 /var/www/html/phpMyAdmin/tmp

RUN cd /tmp \
	&& curl -LO https://wordpress.org/latest.tar.gz \
	&& tar xzvf latest.tar.gz \
	&& mkdir /var/www/html/wordpress \
	&& cp -a /tmp/wordpress/. /var/www/html/wordpress \
	&& chown -R www-data:www-data /var/www/

COPY /srcs/nginx.conf /etc/nginx/sites-available
COPY /srcs/config.inc.php /var/www/html/phpMyAdmin/
RUN ln -s /etc/nginx/sites-available/nginx.conf /etc/nginx/sites-enabled/ \
	&& rm /var/www/html/*.html \
	&& chown -R www-data /var/www/* \
	&& chmod -R 755 /var/www/*

RUN rm -rf /etc/nginx/sites-enabled/default \
	&& mkdir ./ssl-certificate
COPY /srcs/mkcert ./ssl-certificate/
RUN chmod +x ./ssl-certificate/mkcert && ./ssl-certificate/mkcert -install && ./ssl-certificate/mkcert localhost.com

EXPOSE 80 443

COPY srcs/config_sql.sh ./
CMD /bin/bash ./config_sql.sh && sleep infinity 
