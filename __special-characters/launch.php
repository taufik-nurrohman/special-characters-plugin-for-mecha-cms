<?php

$speak = Config::speak();

Config::merge('DASHBOARD.languages.MTE', array(
    'plugin_special_character' => Mecha::A($speak->plugin_special_character)
));

Weapon::add('shell_after', function() {
    echo Asset::stylesheet('cabinet/plugins/' . File::B(__DIR__) . '/assets/shell/button.css');
}, 20);

Weapon::add('SHIPMENT_REGION_BOTTOM', function() {
    echo Asset::javascript('cabinet/plugins/' . File::B(__DIR__) . '/assets/sword/button.js');
}, 20);