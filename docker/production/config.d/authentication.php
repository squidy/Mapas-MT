<?php
// creating base url
$prot_part = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] ? 'https://' : 'http://';
//added @ for HTTP_HOST undefined in Tests
$host_part = @$_SERVER['HTTP_HOST'] . dirname($_SERVER['SCRIPT_NAME']);
if(substr($host_part,-1) !== '/') $host_part .= '/';
$_APP_BASE_URL = $prot_part . $host_part;

return [
    'auth.provider' => 'OpauthAuthentik',
    'auth.config' => [
		'login_url' => env('MTLOGIN_LOGIN_URL', 'login_url'),
		'logout_url' => env('MTLOGIN_LOGOUT_URL', 'logout_url'),
		'client_id' => env('MTLOGIN_CLIENT_ID', 'client_id'),
		'client_secret' => env('MTLOGIN_CLIEN_SECRET', 'client_secret'),
	        'redirect_uri' => env('MTLOGIN_REDIRECT_URI', 'redirect_uri'),
        	'scope' => 'openid profile email',
	        'auth_endpoint' => '/auth',
	        'token_endpoint' => '/token',
	        'user_info_endpoint' => '/userinfo'

    ],
];
