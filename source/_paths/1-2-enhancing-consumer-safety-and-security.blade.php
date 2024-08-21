@php
    $title = 'تعزيز الأمن والسلامة لدى المستهلكين';
    $image = '/images/paths/1-2/main.jpg';
    $sections = [
        [
            'type' => '_partials.path.right-text',
            'data' => [
                'title' => 'نبذة عن التحدي',
                'image' => '/images/paths/1-2/brief.jpg',
                'description' =>
                    'تعد الطاقة بصفة عامة من المخاطر التي يمكن أن تهدد حياة الإنسان، لذلك يعد الاهتمام بأمن المستهلك من مخاطر الكهرباء من القضايا الرئيسية والتي تشمل تقنيات الكشف الاسلاك أو القواطع التالفة أو الوعي حول استخدامات الأجهزة مع الكهرباء وغيرها من القضايا التي تسهم في الوقاية من الحوادث الكهربائية وتحفز على إجراء الصيانة الدورية والتفتيش عن الأعطال قبل حدوث أي كوارث لا سمح الله.',
            ],
        ],
        [
            'type' => '_partials.path.left-list',
            'data' => [
                'title' => 'الأهداف',
                'image' => '/images/paths/1-2/goals.jpg',
                'list' => [
                    'الحد من الكوارث الناتجة عن الالتماسات الكهربائية والتي قد تسبب الحرائق في المباني لا سمح الله.',
                    'حماية المستهلكين وتقليل المخاطر والأضرار والحوادث الناتجة عن سوء استخدام الكهرباء.',
                    'الالتزام بمعايير السلامة العالية في استخدامات الطاقة، والحفاظ على أمن وسلامة المستهلك.',
                    'تحفيز المستهلك من للحرص على استخدام الكهرباء بما يتوافق مع المعايير الوطنية والدولية للأمن والسلامة.',
                ],
            ],
        ],
        [
            'type' => '_partials.path.right-list',
            'data' => [
                'title' => 'الفرص',
                'image' => '/images/paths/1-1/chances.jpg',
                'list' => [
                    'تطوير تقنيات السلامةللكشف المبكر عن الأعطال وتحسين إجراءات السلامة في الشبكة الكهربائية.',
                    'إنشاء خطوط دعم مخصصة لحالات الطوارئ المتعلقة بالكهرباء، وتقديم استجابات سريعة وفعالة للشكاوى.',
                    'إدخال تقنيات حديثة في عمليات الصيانة الدورية والفحص الوقائي، مثل استخدام الذكاء الاصطناعي للتنبؤ بالأعطال.',
                    'منصات توفر إرشادات واضحة لاستخدامات السليمة للكهرباء وأدوات الكشف السريع قبل حدوث المشكلة لا قدر الله.',
                ],
            ],
        ],
    ];
@endphp

@extends('_layouts.main')


@section('body')
    @include('_partials.path.header')

    @include('_partials.path.main', ['title' => $title, 'image' => $image])

    @foreach ($sections as $section)
        @include($section['type'], ['data' => $section['data']])
    @endforeach

    @include('_partials.paths.1-2.idioms')
    @include('_partials.paths.1-2.emerging-techs')
    @include('_partials.paths.1-2.info-and-stats-1')
    @include('_partials.paths.1-2.info-and-stats-2')
    @include('_partials.paths.1-2.key-questions')
    @include('_partials.paths.1-2.references')
@endsection
