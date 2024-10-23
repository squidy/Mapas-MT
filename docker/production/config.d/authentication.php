<?php
// creating base url
$prot_part = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] ? 'https://' : 'http://';
//added @ for HTTP_HOST undefined in Tests
$host_part = @$_SERVER['HTTP_HOST'] . dirname($_SERVER['SCRIPT_NAME']);
if(substr($host_part,-1) !== '/') $host_part .= '/';
$_APP_BASE_URL = $prot_part . $host_part;

return [
//    'auth.provider' => 'Fake',
//    'auth.config' => [],

    'auth.provider' => '\MultipleLocalAuth\Provider',
    'auth.config' => array(
        'salt' => env('AUTH_SALT', null),
        'timeout' => '24 hours',

        'enableLoginByCPF' => env('AUTH_LOGIN_BY_CPF', true),
        'passwordMustHaveCapitalLetters' => env('AUTH_PASS_CAPITAL_LETTERS', true),
        'passwordMustHaveLowercaseLetters' => env('AUTH_PASS_LOWERCASE_LETTERS', true),
        'passwordMustHaveSpecialCharacters' => env('AUTH_PASS_SPECIAL_CHARS', true),
        'passwordMustHaveNumbers' => env('AUTH_PASS_NUMBERS', true),
        'minimumPasswordLength' => env('AUTH_PASS_LENGTH', 6),

        'google-recaptcha-secret' => env('GOOGLE_RECAPTCHA_SECRET', false),
        'google-recaptcha-sitekey' => env('GOOGLE_RECAPTCHA_SITEKEY', false),

        'sessionTime' => env('AUTH_SESSION_TIME', 7200), // int , tempo da sessao do usuario em segundos
        'numberloginAttemp' => env('AUTH_NUMBER_ATTEMPTS', 5), // tentativas de login antes de bloquear o usuario por X minutos
        'timeBlockedloginAttemp' => env('AUTH_BLOCK_TIME', 900), // tempo de bloqueio do usuario em segundos
        'statusCreateAgent' => env('STATUS_CREATE_AGENT', 0),

        'strategies' => [
            'Facebook' => array(
               'app_id' => env('AUTH_FACEBOOK_APP_ID', null),
               'app_secret' => env('AUTH_FACEBOOK_APP_SECRET', null),
               'scope' => env('AUTH_FACEBOOK_SCOPE', 'email')
            ),
            'LinkedIn' => array(
                'api_key' => env('AUTH_LINKEDIN_API_KEY', null),
                'secret_key' => env('AUTH_LINKEDIN_SECRET_KEY', null),
                'redirect_uri' => 'autenticacao/linkedin/oauth2callback',
                'scope' => env('AUTH_LINKEDIN_SCOPE', 'r_emailaddress')
            ),
            'Google' => array(
                'visible' => env('AUTH_GOOGLE_CLIENT_ID', false),
                'client_id' => env('AUTH_GOOGLE_CLIENT_ID', null),
                'client_secret' => env('AUTH_GOOGLE_CLIENT_SECRET', null),
                'redirect_uri' => $_APP_BASE_URL . 'autenticacao/google/oauth2callback',
                'scope' => env('AUTH_GOOGLE_SCOPE', 'email')
            ),
            'Twitter' => array(
                'app_id' => env('AUTH_TWITTER_APP_ID', null),
                'app_secret' => env('AUTH_TWITTER_APP_SECRET', null)
            ),
            'authentik' => array(
                'visible' => env('MTLOGIN_ENABLED', true),
                'login_url' => env('MTLOGIN_LOGIN_URL', null),
                'logout_url' => env('MTLOGIN_LOGOUT_URL', null),
                'client_id' => env('MTLOGIN_CLIENT_ID', null),
                'client_secret' => env('MTLOGIN_CLIEN_SECRET', null),
                'redirect_uri' => env('MTLOGIN_REDIRECT_URI', null),
                'scope' => env('MTLOGIN_SCOPE', null),
                'auth_endpoint' => env('MTLOGIN_ENDPOINT', null),
                'token_endpoint' => env('MTLOGIN_TOKEN', null),
                'user_info_endpoint' => env('MTLOGIN_USERINFO', null)
            ),
        ]
    ),

];

