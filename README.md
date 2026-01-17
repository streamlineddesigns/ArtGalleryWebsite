## The following is an overview of the tech stack and dependencies used by this application
Laravel - PHP MVC Framework  
PHP - Controllers / Back end scripting  
Eloquent ORM - The Models / Simplified SQL Database access  
Bootstrap - Front End Responsive libary  
Vue - Used in the views  
JavaScript - Used in the views  
HTML5 - Used in the views  
CSS3 - Used in the views  

## SSH Into The Server
run `ssh root@ipaddressofyourserver` and type in password when prompted unless using ssh keys then you'll login automatically

## Web User Setup
run `sudo useradd web`  
run `sudo passwd web` and set the password for web when prompted  

## Clone Repository
run `cd /var/www`  
run `git clone https://github.com/streamlineddesigns/ArtGalleryWebsite.git` and enter git username/password when prompted  

## Laravel Setup
run `cd ArtGalleryWebsite`  

run `composer install`  
if that command outputs an error that says "Command composer not found"  
then run `sudo apt install composer` & run `composer install` after composer's installed  
if that outputs an error related to php dependencies issues such as "ext-dom"  or "ext-curl"
then run `sudo apt-get update && sudo apt install php-xml php-curl` & run `composer install` after php-xml is installed  

run `npm install --only=prod`
if not installed on server run `sudo apt install npm` and try again

run `php artisan storage:link`  
run `chmod -R 777 storage bootstrap/cache`  
run `cp .env.example .env`  
run `php artisan key:generate`  
run `cd ../`  
run `chown -R web:www-data ArtGalleryWebsite`  
run `cd ArtGalleryWebsite/public`  
run `chown root:root .htaccess`  

## Apache Setup
run `sudo a2enmod rewrite`  
run `sudo service apache2 restart`  
run `cd /etc/apache2/sites-available`  
run `cp 000-default.conf ArtGalleryWebsite.conf`  
run `sudo nano ArtGalleryWebsite.conf`  
change `DocumentRoot` value to `/var/www/ArtGalleryWebsite/public`  
set `ServerName` to `www.WEBSITENAMEHERE.com` or add it after ServerAdmin line  
after that add `ServerAlias www.WEBSITENAMEHERE.com`  
Change `Directory` as follows  
```
<Directory /var/www/ArtGalleryWebsite/public/>
    Options Indexes FollowSymLinks MultiViews
    AllowOverride All
    Order allow,deny
    allow from all
    Require all granted
</Directory>
```
hit `Ctl + x` while in editor to exit and write updates to file  
hit `y` when prompted and `enter` afterwards when it tells you what filename it's saving as 

## Database Setup
run `mysql -u root` to login to mysql
run `create database ArtGalleryWebsite`  
run `CREATE USER 'ArtGalleryWebsite'@'localhost' IDENTIFIED BY 'NEWPASSWORDHERE';`  
run `grant all privileges on *.* to 'ArtGalleryWebsite'@'localhost';`  
run `flush privileges;`  
run `nano .env` and update database info and when you're done, `CTRL+X` out to exit and enter `y` when prompted  
run `php artisan migrate` to have the database schema created  
run `php artisan db:seed` to load the database with seed data. ONLY NECESSARY IF YOU'RE NOT LOADING IN SQLDUMP There is a Color, and User seeder that will run  
run `cd /var/www/ArtGalleryWebsite`;  
run `mysql -u ArtGalleryWebsite -p ArtGalleryWebsite < ./database/migrations/ArtGalleryWebsite.sql -f` to populate the database with the rest of the data  

## Host Setup
run `sudo nano /etc/hosts`  
add `127.0.0.1 ArtGalleryWebsite`  
hit `Ctl + x` while in editor to exit and write updates to file  
hit `y` when prompted and `enter` afterwards when it tells you what filename it's saving as  

## Enable The Website
run `sudo a2ensite ArtGalleryWebsite.conf`  
run `sudo a2dissite 000-default`  
run `sudo service apache2 restart`  
visit server ip address to confirm website is working  

## Setup Domain Name
Every provider will have a different way of going about this, however, I'll use godaddy as an example
You'll log into the account that has the domain name "ArtGalleryWebsite" and go into your dns settings for that domain
and you'll create a new "a name" record that maps the domain name to your servers IP address. Then you'll set the ttl
and save. After "time til live", ArtGalleryWebsite will be accessible by domain name instead of just ip.

## Pulling New Changes From Git  
run `cd /var/www/ArtGalleryWebsite`  
run `git pull origin master`  
run `cd ../`  
run `chown -R web:www-data ArtGalleryWebsite`  
run `cd ArtGalleryWebsite`  
run `chmod -R 777 storage bootstrap/cache`  
run `cd public`  
run `chown root:root .htaccess`  
run `cd /var/www`
run `chown root:root ArtGalleryWebsite`

## Other + References
add ssl certificates from hosting provider  
This is pretty straightforward. You purchase the certificates, generate some info on the server that your provider will ask for
then they typically give you a few ssl related files that need to be placed on the web server. (crt,key,pem,etc)

make sure text compression is enabled(mod_deflate)  
https://devops.ionos.com/tutorials/how-to-configure-mod_deflate-for-apache-on-centos-7/

make sure http2 is setup(needs ssl certs on server first) 
this resource also outlines how your apache config file should be altered to support ssl & http2. Just make sure virtual host for 443 gets appended to ArtGalleryWebsite.conf and that the Directory portion is added to it, and ssl cert & key locations are correct  
https://www.howtoforge.com/how-to-enable-http-2-in-apache/
