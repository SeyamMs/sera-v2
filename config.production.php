<?php

return [

    'production' => true,
    'baseUrl' => $baseUrl = 'https://seyamms.github.io/sera-v2',
    'asset' => fn($page, $source) => $baseUrl . str($source)->start('/assets/'),

];
