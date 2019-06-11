<?php

return [
    'providers' => [
        "default" => env("FX_TRANSLATION", "bing"),

        "google" => [
            "url" => "http://translate.google.cn/translate_a/single"
        ],

        "bing" => [
            "url" => "https://cn.bing.com/ttranslatev3"
        ],
    ],
];