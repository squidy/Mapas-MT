<?php
$config_plugins = [
    'plugins' => [
        'MultipleLocalAuth' => [ 'namespace' => 'MultipleLocalAuth' ],
	'RecreatePCacheOnLogin' => [ 'namespace' => 'RecreatePCacheOnLogin' ],
	'AdminLoginAsUser' => [ 'namespace' => 'AdminLoginAsUser' ],
	'Accessibility' => [ 'namespace' => 'Accessibility' ],
        'SpamDetector' => [
            'namespace' => 'SpamDetector',
            'config' => [
                // suas configurações personalizadas abaixo, por exemplo:
                'terms' => ['compra', 'minecraft', 'venda', 'download'],
                'termsBlock' => ['citotec', 'apk']
            ]
        ]
    ]
];

return $config_plugins;
