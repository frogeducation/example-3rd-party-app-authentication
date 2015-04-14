Example 3rd Party App Authentication
------------------------------------

This is an example PHP application authenticated using a FrogLearn user.

You can obtain the latest version of this code either using:  
a) git: `git clone https://github.com/frogeducation/example-3rd-party-app-authentication.git`  
b) download the code from here: [https://github.com/frogeducation/example-3rd-party-app-authentication/archive/master.zip][1] and extract

[1]: https://github.com/frogeducation/example-3rd-party-app-authentication/archive/master.zip

Reqirements
===========
PHP >= 5.3.3

PHP Extensions:  
\- curl  
\- dom  
\- gmp  
\- mcrypt  
\- openssl  

Automatic Setup
===============
Run the provided setup.sh:  
`./setup.sh`  
This is a shell script intended to be run on a Unix Box, which will automatically run all steps in the "Composer Setup" section.

Composer Setup
==============
To install using composer you need to do the following:

1. [Install Composer][2] by following the instructions [here][2]
2. Run `composer install` to download SimpleSAMLPHP and it's dependencies
3. Run the following commands:  
   `cd vendor/simplesamlphp/simplesamlphp/`  
   `mkdir {config,metadata}`  
   `cp config-templates/{config,authsources}.php config/`  
   `cp metadata-templates/saml20-idp-remote.php metadata/`  
   `cd ../../../www`  
   `ln -s ../vendor/simplesamlphp/simplesamlphp/www saml`

[2]: https://getcomposer.org/

Manual Setup 
============
1. Download SimpleSAMLPHP from [here][3] and extract at the root directory.  
      Arrange these packages so you have the following directory structure:  
      `<root_folder>/frog-federation`  
      `<root_folder>/simplesamlphp`  
      `<root_folder>/www`  
2. Create a symbolic link from simplesamlphp/www to www/saml e.g.  
      `cd www && ln -s ../simplesamlphp/www saml`
3. Update index.php to use the following:  
   `require_once '../simplesaml/lib/_autoload.php';`  
   rather than:  
   `require_once '../vendor/autoload.php';`
   
[3]: https://simplesamlphp.org/download

Getting Up & Running
====================
After the above, you need to create a virtual host in your webserver to point to `<root_folder>/www`.  

The next step is to configure SimpleSAMLPHP. We have provided example configuration files in the `frog-federation/config` and `frog-federation/metadata` folders. The least you should do is to secure your deployment by altering the following properties in `simplesamlphp/config/config.php`:  
\- `'baseurlpath'`: should be set to `'saml/'` in-line with the symbolic link created during the setup stage  
\- `'auth.adminpassword'`: should be changed as this is your admin authentication password  
\- `'admin.protectindexpage'`: should be set to true  
\- `'admin.protectmetadata'`: should be set to true  
\- `'secretsalt'`: should be changed from the default value  
\- `'technicalcontact_name'`: The name of the individual to contact upon issues  
\- `'technicalcontact_email'`: The e-mail address of the individual to contact upon issues  
Further documentation on the SimpleSAMLPHP config file can be found [here][4]

The two other files you need are `simplesamlphp/config/authsources.php` and `simplesamlphp/metadata/saml20-idp-remote.php`.  
The examples provided under `frog-federation/config/authsources.php` and `frog-federation/metadata/saml20-idp-remote.php` will work with the development federation provided by frog (mentioned later).  
To use these simply run the following:  
`cp frog-federation/config/authsources.php simplesamlphp/config/authsources.php`  
`cp frog-federation/metadata/saml20-idp-remote.php simplesamlphp/metadata/saml20-idp-remote.php`

***Please Note***: The authsources.php and saml20-idp-remote.php provided are for development against the frog **development** federation. When configuring your application against the production federation these will require changes. Please contact the Partners support team at FrogEducation to acquire these and setup your application against the production federation.

So that your app will work with the Frog Development Federation you will need to provided us with your metadata. To do this you need to do the following:

1. Go to the saml instance via your browser and login with the `'auth.adminpassword'` you setup earlier. This should be under https://your-domain.com/saml/
2. Go to https://your-domain.com/saml/module.php/saml/sp/metadata.php/FrogFederation?output=xhtml
3. Copy the code in the entry corresponding to “In simpleSAMLphp flat file format”
4. Send this code to the Partners support team at FrogEducation.

[4]: https://simplesamlphp.org/docs/1.13/simplesamlphp-install

Testing The App
===============
We have three boxes setup for you to develop against:  

Development Frog Federation: [https://federation-misc.frogosdev.co.uk/][5]  
Example Secondary School: [https://secondaryexternal-misc.frogtest.co.uk/][6]  
Example Primary School: [https://primaryexternal-misc.frogtest.co.uk/][7]  

In your browser go to: https://your-domain.com/  
Provided a correct server software setup this should run the provided index.php and re-direct you to a selection page on [https://federation-misc.frogosdev.co.uk/][5] which will look like the following:  

![](https://openmerchantaccount.com/img/frogeducation-simplesaml-development-discovery.png)

Select the type of FrogLearn instance you'd like to test login with, and you'll be transferred to the correct instance for authentication:

![](https://openmerchantaccount.com/img/frogeducation-simplesaml-development-froglearn.png)

We have provided 10 users for authentication with these boxes:  
These follow the pattern of:  

usernames: other1, other2, etc.  
password: other1pass, other2pass, etc.

With the users other1 to other10 being enabled for your testing purposes.

If you authenticate correctly you'll be redirected back to your test application with the user attributes provided:

![](https://openmerchantaccount.com/img/frogeducation-simplesaml-development-user-attributes.png)

[5]: https://federation-misc.frogosdev.co.uk/
[6]: https://secondaryexternal-misc.frogtest.co.uk/
[7]: https://primaryexternal-misc.frogtest.co.uk/
