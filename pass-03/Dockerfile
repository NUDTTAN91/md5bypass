FROM nudttan91/base_image_nginx_php_73

LABEL Author="tan91"
LABEL GitHub="https://github.com/NUDTTAN91"
LABEL Blog="zxw-nudt.blog.csdn.net"

COPY html /var/www/html
COPY file /

RUN chmod 777 /flag.sh
RUN chmod -R 777 /var/www/html

