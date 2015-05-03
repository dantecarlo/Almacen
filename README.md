# Almacen
Trabajo para Ingenieria de software 2, modulo - almacen

# CakePHP Application Skeleton

[![Build Status](https://api.travis-ci.org/cakephp/app.png)](https://travis-ci.org/cakephp/app)
[![License](https://poser.pugx.org/cakephp/app/license.svg)](https://packagist.org/packages/cakephp/app)

A skeleton for creating applications with [CakePHP](http://cakephp.org) 3.0.

## Installation

Step 1: Open terminal.

Step 2: Type cd /var/www/html

Step 3: Type this command to download CakePHP:

$ sudo wget https://codeload.github.com/cakephp/cakephp/legacy.zip/2.5.2

where 2.5.2 is the latest stable version of CakePHP.

Step 4: It will be downloaded in zip format. To extract it type this command:

$ sudo unzip 2.5.2

Step 5: Rename extracted folder.

$ mv cakephp-cakephp-736e999/ cake

where cakephp-cakephp-736e999 is the name of extracted folder.

To run CakePHP on browser use this path localhost/cake.


Step 6: Go to cake folder.

$ cd cake

And change permissions to app/tmp folder.

$ sudo chown -R root:www-data app/tmp

$ sudo chmod -R 775 app/tmp

Step 7: To make script writable perform these steps:

$ apache2ctl -M

If you see mod_rewrite in the list shown then script is writable. If not then to enable it type this command:

$ a2enmod rewrite

Step 8: Type cd /etc/apache2

$ sudo nano  apache2.conf

Set these lines in the file:

<Directory /var/www>
  Option Indexes FollowSymlinks
  AllowOverride All
  Required all granted
</Directory>

Press ctrl+x, then press y and enter to save the file.

sudo nano/etc/apache2/httpd.conf

<Directory />
  Options FollowSymLinks
  AllowOverride All
</Directory>

Enabling mod_rewrite

$ sudo a2enmod rewrite


$sudo nano /etc/apache2/sites-avaliable/default.conf (AllOverride None to AllOverride All)

<Directory />
  Options FollowSymLinks
  AllowOverride All
</Directory>
<Directory /var/www>
  Options Indexes FollowSymLinks MultiViews
  AllowOverride All
  Order Allow,Deny
  Allow from all
</Directory>

Restart apache:

$ sudo service apache2 restart

$ apt-get install php5-pgsql

$ sudo service apache2 restart


## Configuration
Configure Debug Kit
Step 1
Ensure require is present in composer.json. This will install the plugin into Plugin/DebugKit:
{
    "require": {
        "cakephp/debug_kit": "2.2.*"
    }
}
STEP 2:

Then, in your app/Config/bootstrap.php, add (or un-comment) the following line:

CakePlugin::load('DebugKit');

STEP 3: Ensure debug is 1 or more

In your Config/core.php file, make sure this line:

Configure::write('debug', 2);
has a value of 1 or 2. (read more about debug mode here)

Login

$ psql -U cakeuser -d cakedb
And finally in psql console, set password

Postgress:
cakedb=> \password cakeuser
Enter new password: secret
Enter it again: secret
In Cakephp root, rename the file Config\database.php.default to Config\database.php. Change the $default variable as below :-

public $default = array(
    'datasource' => 'Database/Postgres',
    'persistent' => false,
    'host' => 'localhost',
    'login' => 'cakeuser',
    'password' => 'secret',
    'database' => 'cakedb',
    'prefix' => '',
    //'encoding' => 'utf8',
);


Step 3: To remove the salt and seed error shown on top of the localhost/cake page we have to edit core.php file.

$ sudo nano core.php

Find this section and replace both the strings with any random strings or you can use these strings also.

/* A random string used in security hashing methods. */

Configure::write(‘Security.salt’, ‘fvjhdj8fvn85grg73fbrvfn9fjFGfnhvt758nADG‘);

/* A random numeric string (digits only) used to encrypt/decrypt strings. */

Configure::write(‘Security.cipherSeed’, ‘55857485748594575784348784787475‘);

Then press ctrl+x, press y and enter to save file.

Refresh localhost/cake page. And its done.
