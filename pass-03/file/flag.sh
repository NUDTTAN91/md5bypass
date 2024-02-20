#!/bin/sh

echo $FLAG > /var/www/html/flag.txt

export FLAG=NO_FLAG
FLAG=NO_FLAG

rm -rf /flag.sh

