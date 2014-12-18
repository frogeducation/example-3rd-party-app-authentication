<?php
/**
 * SAML 2.0 remote IdP metadata for simpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote
 */

$metadata['https://federation-misc.frogosdev.co.uk/saml2/idp/metadata.php'] = array(
    'metadata-set' => 'saml20-idp-remote',
    'entityid' => 'https://federation-misc.frogosdev.co.uk/saml2/idp/metadata.php',
    'SingleSignOnService' => array(
        0 => array(
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://federation-misc.frogosdev.co.uk/saml2/idp/SSOService.php',
        ),
    ),
    'SingleLogoutService' => array(
        0 => array(
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://federation-misc.frogosdev.co.uk/saml2/idp/SingleLogoutService.php',
        ),
    ),
    'certData' => 'MIIDfzCCAmegAwIBAgIJAKnl9D1Rgap3MA0GCSqGSIb3DQEBBQUAMFYxCzAJBgNVBAYTAlVLMRAwDgYDVQQHDAdIYWxpZmF4MRYwFAYDVQQKDA1Gcm9ndHJhZGUgTHRkMR0wGwYDVQQDDBRzYW1sc3AuZnJvZ3RyYWRlLmNvbTAeFw0xMjA5MjgxMDQ0MzdaFw0yMjA5MjgxMDQ0MzdaMFYxCzAJBgNVBAYTAlVLMRAwDgYDVQQHDAdIYWxpZmF4MRYwFAYDVQQKDA1Gcm9ndHJhZGUgTHRkMR0wGwYDVQQDDBRzYW1sc3AuZnJvZ3RyYWRlLmNvbTCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBAOK9U0iYHhsRxrH1Q7Auz8kMR+oLN7HzLiyLiqSJK6RpPj5VZ83nO5EE6Jaws2uzeuRSQ5lNTk2PtlWqv2r0oXkMmVvFXozY/sPRWNH04XwMXiyv7cjjwBBhvj4vcrZ9ysQEg2I9iZ88QCj6n9SUpwyfsWmeEppgmPwoXCTP6w4IhOV5XOjTL87NB609lT1sLANy9uSr/RK3Wzqb+WKGemF8itEmmnbkU9p6yLmsSxVyQK2l35DU6JpFiLTkzuy1FLB6/M7HBrzaxsXzhzys+WiznH+DqQFMgLi2VcPzqZxMVtfMxKl/AOlTIt+XQ5XHshl6mrbCZUqUYToDEBG23vcCAwEAAaNQME4wHQYDVR0OBBYEFJWPPbP4N3wMT8PuLD9q6Z6eaFzNMB8GA1UdIwQYMBaAFJWPPbP4N3wMT8PuLD9q6Z6eaFzNMAwGA1UdEwQFMAMBAf8wDQYJKoZIhvcNAQEFBQADggEBAGuN+ABo0bi22aC9AXEoKKKXFsp9P85plgcyvlkWKXrRu7iC7C3d6TfP36OmflxaibFuBTf6KfzkgOXTj2A/z1uP9lKvIDZ3FzjYNHi68rz1N2SVuXcUxDPvsGzeSBy1SaUzlAyYBtBKqntZBfxlH5EZ1T9yNfnbmhCMlr/e45ILf8BGdkaNz/TdYhepkhQ77DU2D6bNyq345B4zGb6wOg1fQEMv8bC8Ylt0wIBgJYSrOkCipWKNqCLL+GbYD1+sNn8e+W2h3o9J482BzxVRw9V2DFR6/9I54rzI4bvZKcXk6imGhO+577qzZgffQnaI/SgjPVJIBuWxL3JJ+86COAc=',
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
);
