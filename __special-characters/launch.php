<?php

$f = 'editor.button.' . ltrim(File::B(__DIR__), '_') . '.min.';

Config::merge('DASHBOARD.languages.MTE.plugin_special_characters', $speak->plugin_special_characters);

Weapon::add('shell_after', function() use($f) {
    echo Asset::stylesheet(__DIR__ . DS . 'assets' . DS . 'shell' . DS . 'button.css', "", 'shell/' . $f . 'css');
}, 20);

Weapon::add('SHIPMENT_REGION_BOTTOM', function() use($f) {
    echo Asset::javascript(__DIR__ . DS . 'assets' . DS . 'sword' . DS . 'button.js', "", 'sword/' . $f . 'js');
}, 20);