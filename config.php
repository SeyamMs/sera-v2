<?php

return [

    'production' => false,
    'baseUrl' => $baseUrl = 'http://localhost:8000',
    'title' => 'SERA',
    'description' => 'SERA static website',

    'collections' => [
        'paths' => [
            'path' => 'paths',
        ]
    ],

    'asset' => fn($page, $source) => $baseUrl . str($source)->start('/assets/'),

];
