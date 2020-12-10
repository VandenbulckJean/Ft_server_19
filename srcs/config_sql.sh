service mysql restart
mysql -u root -e "CREATE DATABASE wordpress;"
mysql -u root -e "CREATE USER 'jvanden-'@'localhost' IDENTIFIED BY 'jvanden-';"
mysql -u root -e "GRANT ALL PRIVILEGES ON wordpress.* TO 'jvanden-'@'localhost';"
mysql -u root -e "FLUSH PRIVILEGES;"
service nginx start
service php7.3-fpm start
service mysql restart
