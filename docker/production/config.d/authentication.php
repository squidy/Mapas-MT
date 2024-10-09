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
//		'login_url' => 'https://dev.login.mt.gov.br/auth/realms/mt-realm/protocol/openid-connect',
		'login_url' => 'https://login.mt.gov.br/auth/realms/mt-realm/protocol/openid-connect',
//		'logout_url' => 'https://dev.login.mt.gov.br/auth/realms/mt-realm/protocol/openid-connect/logout',
		'logout_url' => 'https://mapas.mt.gov.br',
		'client_id' => 'sistema-secel-mapas',
		'client_secret' => 'IzrBXE9kh88gZzTOmbVunnmQsdj9cYSX',
	        'redirect_uri' => 'https://mapas.mt.gov.br/autenticacao/authentik/oauth2callback',
        	'scope' => 'openid profile email',
	        'auth_endpoint' => '/auth',
	        'token_endpoint' => '/token',
	        'user_info_endpoint' => '/userinfo'

    ],
];
