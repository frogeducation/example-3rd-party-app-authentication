<?php
require_once '../vendor/autoload.php';

$as = new SimpleSAML_Auth_Simple('FrogFederation');
$as->requireAuth();

$attributes = $as->getAttributes();

?>
<!doctype html>
<html>
    <head>
        <title>Probably the simplest Service Provider in PHP</title>
    </head>
    <body>
        <h1>Example Web App</h1>
        <h2>Your attributes:</h2>
        <pre><?php print_r($attributes); ?></pre>
        <a href="/saml/module.php/core/authenticate.php?as=FrogFederation&logout">logout</a>
    </body>
</html>
