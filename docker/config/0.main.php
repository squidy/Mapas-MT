<?php
use MapasCulturais\i;

return [
    'base.url' => env('BASE_URL', ''),
    'app.siteName' => env('SITE_NAME', i::__('Mapas Culturais')),
    'app.siteDescription' => "O Mapas MT é uma plataforma colaborativa que reúne informações sobre agentes, espaços, eventos, projetos culturais e oportunidades",
    'themes.active' => env('ACTIVE_THEME', 'MapasCulturais\Themes\BaseV2'),

    'app.mode' => env('APP_MODE', APPMODE_PRODUCTION),
    'doctrine.isDev' => env('DOCTRINE_ISDEV', env('APP_MODE', APPMODE_PRODUCTION) == APPMODE_DEVELOPMENT),

    'app.lcode' => env('APP_LCODE', 'pt_BR'),
    'app.defaultCountry' => env('APP_DEFAULT_COUNTRY', "BR"),
    'app.currency' => env('APP_CURRENCY', 'BRL'),
    'app.verifiedSealsIds' => explode(',', env('VERIFIED_SEALS', '1')),

    'homeHeader.banner' => 'img/banner-faq.png',
    'homeHeader.bannerLink' => 'https://mapas.mt.gov.br/perguntas-frequentes/',
    'homeHeader.downloadableLink' => false,

//    'homeHeader.secondBanner' => 'img/banner-tributacao.png',
//    'homeHeader.secondBannerLink' => 'https://mapacultural.pa.gov.br/files/project/1278/parecer-impostos.pdf',
//    'homeHeader.secondDownloadableLink' => true,


    /* Valor do header Access-Control-Allow-Origin da api de leitura. */
    'api.accessControlAllowOrigin' => env('API_ACCESS_CONTROL_ALLOW_ORIGIN', '*'),

    /** função para sanitizar o nome do arquivo */
    'app.sanitize_filename_function' => function($filename) {
        return $filename;
    },

    /*
    Define valores de inicialização do PHP para rotas específicas

    para usar como variável de ambiente deve ser passado um json 
    ex: [{"API agent/find":{"memory_limit":"1024M"}}]

    configurando via PHP:
    ex:
    ```
    [
        'API agent/find' => [
            'memory_limit' => '1024M',
            'max_execution_time' => -1
        ],
        'API *' => [
            'memory_limit' => '256M',
            'max_execution_time' => -1
        ],
    ]
    ```
    */
    'ini.set' => json_decode(env('PHP_INI_SET', '[]')),

    /*Define mensagem padrão :
        Ex: 'Precisa de ajuda? Clique para falar com nossa equipe de suporte por chat. Ou envie um email para ',

    */
    'footer.supportMessage' => '',

];
