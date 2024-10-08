@php
    $title = 'دمج مصادر الطاقة المتجددة والطاقة التقليدية';
    $image = '/images/paths/2-2/main.jpg';
    $sections = [
        [
            'type' => '_partials.path.right-text',
            'data' => [
                'title' => 'نبذة عن التحدي',
                'image' => '/images/paths/2-2/brief.jpg',
                'description' =>
                    'البحث عن تكامل الطاقة المتجددة مع الشبكة الكهربائية أحد العناصر الأساسية لتحقيق أهداف استدامة الطاقة وضمان استقرار إمدادات الكهرباء. ففي المملكة العربية السعودية، يعد استخدام مصادر الطاقة المتجددة مثل الطاقة الشمسية وطاقة الرياح جزء من رؤية 2030، لذلك تبرز الحاجة إلى تطوير ابتكارات لتحسين جودة إمداد الطاقة عبر مزيج من الطاقة المتجددة والتقليدية دون الاخلال في موثوقية واستقرار الشبكة الكهربائية العامة.',
            ],
        ],
        [
            'type' => '_partials.path.left-list',
            'data' => [
                'title' => 'الأهداف',
                'image' => '/images/paths/2-2/goals.jpg',
                'list' => [
                    'تطوير تقنيات تسهم في استقرار الشبكة عند دمج مصادر الطاقة المتجددة، وضمان توازن الإمدادات واستقرار الشبكة وموثوقيتها.',
                    'ابتكار حلول تعزز من فعالية دمج الطاقة المتجددة مع مصادر الطاقة غير المتجددة، بما في ذلك التحكم في التردد والجهد.',
                    'تحسين تحسين آلية دمج مصادر الطاقة المتجددة في شبكة الكهرباء وتوزيعها بفعالية.',
                    'استخدام التقنيات الناشئة لدمج الطاقة المتجددة بطريقة فعّالة وآمنة مع الحفاظ على موثوقية الشبكة الكهربائية وكفائتها.',
                ],
            ],
        ],
        [
            'type' => '_partials.path.right-list',
            'data' => [
                'title' => 'الفرص',
                'image' => '/images/paths/1-1/chances.jpg',
                'list' => [
                    'تحقيق التوازن بين تحسين الكفاءة وتقليل الانبعاثات للمولدات الاحتياطية مع الحفاظ على موثوقية التشغيل.',
                    'تطوير أنظمة تدمج بين المولدات الاحتياطية ومصادر الطاقة المتجددة مثل الطاقة الشمسية أو الرياح.',
                    'تقليل تكلفة المواد المستخدمة في تقنيات التخزين من خلال المولدات الاحتياطية بما لا يتعارض مع موثوقية وجودة الخدمة الكهربائية.',
                    'توفير تقنيات يمكن دمجها مع المولدات الاحتياطية تحقق الأمن والسلامة وتحد من مخاطرها.',
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

    @include('_partials.paths.2-2.idioms')
    @include('_partials.paths.1-2.emerging-techs')
    @include('_partials.paths.2-2.info-and-stats-1')
    @include('_partials.paths.2-2.info-and-stats-2')
    @include('_partials.paths.2-2.info-and-stats-3')
    @include('_partials.paths.2-2.info-and-stats-4')
    @include('_partials.paths.2-2.key-questions')
    @include('_partials.paths.2-2.references')
@endsection
