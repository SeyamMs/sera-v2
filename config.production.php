<?php

return [


    'production' => true,
    'baseUrl' => $baseUrl = 'https://seyamms.github.io/sera-v2',

    'collections' => [
        'paths' => [
            [
                'filename' => '{filename}',
                'title' => 'إيجاد حلول لإدارة الطاقة الشخصية للمستهلكين',
                'sections' => [
                    [
                        'type' => 'right-text',
                        'data' => [
                            'title' => 'نبذة عن التحدي',
                            'description' => 'ذوو الإعاقة هم فئة من فئات المجتمع المتعددة، لهم احتياجاتهم التي  تتطلب وجود بعض المعايير والمقومات الخاصة، ومن ذلك حاجتهم لارتداء ثياب ملائمة بمعايير صحية ونفسية وجمالية تُلبي متطلباتهم، تكمن المشكلة في عدم قدرة ذوي الإعاقة الحصول على هذه الثياب لندرتها، وفي سبيل إتاحتها للجميع خاصة ذوي الإعاقات الشديدة، فإن قضية هذا التحدي تتمحور حول إيجاد حلول ابتكارية لتوفير ملابس تُناسب نمط  حياتهم.',
                            'image' => 'bg-[url("https://seyamms.github.io/sera-v2/assets/images/paths/main.jpg")]'
                        ],
                    ]
                ],
            ],
        ]
    ],

    'asset' => fn($page, $source) => $baseUrl . str($source)->start('/assets/'),


];
