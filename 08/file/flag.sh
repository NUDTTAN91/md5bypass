#!/bin/bash

echo $FLAG > /flag

# sed -i "s/flag{text}/$FLAG/" /var/www/html/flag.php

# mysql -e "DROP DATABASE IF EXISTS ctftraining; CREATE DATABASE IF NOT EXISTS ctfbase_web;USE ctfbase_web;CREATE TABLE \`ctfbase_user\` (\`id\` int(11) NOT NULL AUTO_INCREMENT,\`username\` varchar(255) DEFAULT NULL,\`password\` varchar(255) DEFAULT NULL,PRIMARY KEY (\`id\`)) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;INSERT INTO \`ctfbase_user\`(username,password) VALUES ('fllllag','FlagIsNotHere');" -uroot -proot

export FLAG=not_flag
FLAG=not_flag

rm -f /flag.sh

