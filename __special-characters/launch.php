<?php

$speak = Config::speak();

Config::merge('DASHBOARD.languages.MTE', array(
    'plugin_sc_title_modal' => $speak->plugin_sc_title_modal,
    'plugin_sc_title_button' => $speak->plugin_sc_title_button
));

Weapon::add('shell_after', function() {
    echo Asset::stylesheet('cabinet/plugins/' . basename(__DIR__) . '/shell/map.css');
}, 11);

Weapon::add('SHIPMENT_REGION_BOTTOM', function() {
    echo Asset::javascript('cabinet/plugins/' . basename(__DIR__) . '/sword/map.js');
}, 11);