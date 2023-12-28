<?php
$routes = $config['routes'];

$list = [
    'lpg/audiovisual' => 1086,
    'lpg/musica' => 1084,
    'lpg/circo' => 1082,
    'lpg/danca' => 1080,
    'lpg/teatro' => 1078,
    'lpg/cultura-alimentar' => 1076,
    'lpg/culturas-populares' => 1074,
    'lpg/museus-e-memoriais' => 1072,
    'lpg/patrimonio-material' => 1070,
    'lpg/patrimonio-imaterial' => 1068,
    'lpg/moda-e-design' => 1066,
    'lpg/livro-e-leitura' => 1064,
    'lpg/culturas-indigenas' => 1062,
    'lpg/cultura-urbana-e-periferica' => 1060,
    'lpg/cultura-gospel' => 1058,
    'lpg/cultura-afrobrasileira' => 1056,
    'lpg/artesanato' => 1054,
    'lpg/pontos-e-pontoes' => 1052,
    'lpg/cultura-digital' => 1050,
    'lpg/artes-visuais' => 1048,

    'lpg/audiovisual-formacao-festivais' => 1122,
    'lpg/audiovisual-salas-de-cinema' => 1120,
    'lpg/audiovisual-cineclubes-e-itinerantes' => 1124,

    'lpg/audiovisual-licenciamento-de-obras-e-apoio' => 1134,
    
];

foreach($list as $route => $id) {
    $routes['shortcuts'][$route] = ['opportunity', 'single', [$id]];
}

return ['routes' => $routes];