<?php
namespace MapasMT;

use MapasCulturais\App;


// class Theme extends \Subsite\Theme {
class Theme extends \MapasCulturais\Themes\BaseV2\Theme {
 
    static function getThemeFolder() {
        return __DIR__;
    }

    function _init() {
        parent::_init();

        $app = App::i();

         // Manifest do five icon
        $app->hook('GET(site.webmanifest)', function() use ($app) {
            /** @var \MapasCulturais\Controller $this */
            $this->json([
                'icons' => [
                    [ 'src' => $app->view->asset('img/favicon.192.png', false), 'type' => 'image/png', 'sizes' => '192x192' ],
                    [ 'src' => $app->view->asset('img/favicon.512.png', false), 'type' => 'image/png', 'sizes' => '512x512' ],
                ],
            ]);
        });

        $app->hook('template(<<*>>.<<*>>.body):after', function(){
            $this->part('tawkto--script');
        });
    }

    // protected function _publishAssets() {

    //     // $this->jsObject['assets']['logo-instituicao'] = $this->asset('img/logo-instituicao.png', false);

    //     // $this->enqueueScript('app', 'hide-fields', 'js/hide-fields.js');
    // }
}
