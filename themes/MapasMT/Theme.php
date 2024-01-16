<?php
namespace MapasMT;

use MapasCulturais\App;


class Theme extends \MapasCulturais\Themes\BaseV2\Theme {

    static function getThemeFolder() {
        return __DIR__;
    }

    function _init() {
        parent::_init();

        $app = App::i();

        $this->enqueueStyle("app-v2", "logo-footer", "css/logo-footer.css");

        $app->hook("template(<<*>>.<<*>>.main-footer-links):after", function(){
            $this->part("logo-footer");
        });


        $app->hook('template(<<*>>.<<*>>.body):after', function(){
            $this->part('scripts');
        });


        $app->hook('app.init:after', function () {
            $imagesList = [];
            $path = __DIR__."/assets/img/randHome/";
            $files = dir($path);

            while($_file = $files->read()){
                if ($_file != '.' && $_file != '..') {
                    $imagesList[] = "img/randHome/{$_file}";
                }
            }

            $files->close();

            $imagesList[] = 'img/home--intro.jpg';
            $imagesList[] = 'img/home--intro.jpg';
            $imagesList[] = 'img/home--intro.jpg';
            $imagesList[] = 'img/home--intro.jpg';
            $imagesList[] = 'img/home--intro.jpg';

            shuffle($imagesList);

            $this->config['module.home']['home-header'] = $imagesList[0];

        });
    }
}
