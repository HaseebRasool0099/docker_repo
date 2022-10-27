FROM ubuntu
#FROM wordpress:latest


ENV DEBIAN_FRONTEND noninteractive

RUN apt-get update -y
RUN apt-get install apache2 -y
RUN apt-get install php -y
#ADD index.php /var/www/html
RUN apt-get install php-mysql -y
ADD dir.conf /etc/apache2/mods-enabled
#copy wp-admin/*  /var/www/html  
#copy wp-comments-post.php /var/www/html
#copy wp-include /var/www/html

ADD index.php var/www/html
ADD wp-config.php /var/www/html
ADD wp-admin /var/www/html/wp-admin
ADD wp-content  /var/www/html/wp-content
ADD wp-includes /var/www/html/wp-includes
ADD readme.html /var/www/html
ADD wp-activate.php /var/www/html
ADD wp-blog-header.php /var/www/html
ADD wp-config-sample.php /var/www/html
ADD wp-cron.php /var/www/html
ADD wp-links-opml.php /var/www/html
ADD wp-login.php /var/www/html
ADD wp-settings.php /var/www/html
ADD wp-trackback.php /var/www/html
ADD license.txt /var/www/html
ADD wp-comments-post.php /var/www/html
ADD wp-load.php /var/www/html
ADD wp-mail.php /var/www/html
ADD wp-signup.php /var/www/html
ADD xmlrpc.php /var/www/html






#copy wp-includes/load.php /var/www/html
#copy wp-blog-header.php /var/www/html
#copy wp-load.php /var/www/html
#ADD index.php /var/www/html

CMD apachectl -D FOREGROUND
