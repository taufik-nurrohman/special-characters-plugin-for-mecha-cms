<?php

Config::merge('DASHBOARD.languages.MTE', array(
    'plugin_special_character' => (array) $speak->plugin_special_character
));

Weapon::add('shell_after', function() {
    echo Asset::stylesheet(__DIR__ . DS . 'assets' . DS . 'shell' . DS . 'button.css');
}, 20);

Weapon::add('SHIPMENT_REGION_BOTTOM', function() {
    echo Asset::javascript(__DIR__ . DS . 'assets' . DS . 'sword' . DS . 'button.js');
}, 20);