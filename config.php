<?php

return [

    'production' => false,
    'baseUrl' => $baseUrl = 'http://localhost:8000',

    'title' => 'إلكتراثون 2024',
    'description' => 'فعالية محفزة للابتكار، تهدف إلى استكشاف حلول إبداعية للتحديات التي تواجه قطاع الكهرباء.',
    'keywords' => [
        'إلكتراثون',
        'هاكاثون',
        'الكهرباء',
        'دمج الطاقة',
    ],

    'collections' => [
        'paths' => [
            'path' => 'paths',
        ]
    ],

    'asset' => fn($page, $source) => $baseUrl . str($source)->start('/assets/'),

];
