<?php

    require __DIR__ . '/vendor/autoload.php';

    $animals = [
        \App\Animals\Fish::class => 5,
        \App\Animals\Zebra::class => 1
    ];

    foreach ($animals as $key => $value) {
        for ($i = 0; $i < $value; $i++) {
            $object = new $key($key . ($i + 1));
            echo $object->getName() . ' ' . $object->noise() . ' ' ;
        }
    }