#!/bin/sh

test_error()
{
    if [[ $? != "0" ]]; then
        echo $1
        exit 1
    fi
}

curl -sS https://getcomposer.org/installer | php
test_error "Couldn't Download Composer"
php composer.phar install
test_error "Composer Install Failed"
rm -f composer.phar

cd vendor/simplesamlphp/simplesamlphp/
mkdir {config,metadata}
cp config-templates/{config,authsources}.php config/
cp metadata-templates/saml20-idp-remote.php metadata/
cd ../../../www
ln -s ../vendor/simplesamlphp/simplesamlphp/www .

