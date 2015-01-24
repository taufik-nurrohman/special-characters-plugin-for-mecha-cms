<?php

if(strpos($config->url_current, $config->url . '/' . $config->manager->slug . '/') === 0) {

    Weapon::add('unit_composer_1_after', function() use($config) {
        $speak = Config::speak();
        echo '<span class="hidden" id="sc-modal-trigger"></span><div class="modal" id="sc-modal" data-trigger="#sc-modal-trigger" data-button-title="' . $speak->plugin_sc_title_button . '"><h3 class="modal-header">' . $speak->plugin_sc_title_modal . '</h3><a class="modal-close-x" href="#"><i class="fa fa-times-circle"></i></a><div class="modal-content"><div class="modal-content-inner" id="sc-modal-container"></div></div><div class="modal-footer"><button class="btn btn-construct modal-close"><i class="fa fa-check-circle"></i> ' . $speak->cancel . '</button></div></div>';
    });

    Weapon::add('shell_after', function() {
        echo Asset::stylesheet('cabinet/plugins/' . basename(__DIR__) . '/shell/map.css');
    });

    Weapon::add('SHIPMENT_REGION_BOTTOM', function() {
        echo Asset::javascript('cabinet/plugins/' . basename(__DIR__) . '/sword/map.js');
    });

}