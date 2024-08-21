@php
    $title = 'حلول ابتكارية للمولدات الاحتياطية وتخزين الكهرباء';
    $image = '/images/paths/2-1/main.jpg';
    $sections = [
        [
            'type' => '_partials.path.right-text',
            'data' => [
                'title' => 'نبذة عن التحدي',
                'image' => '/images/paths/2-1/brief.jpg',
                'description' =>
                    'ينتشر استخدام المولدات الاحتياطية في المجتمع بين فئات محدودة في أوقات المواسم (مثل مواسم الحج والعمرة وبعض الفعاليات المقامة في المملكة)، بالإضافة إلى مساهمتها في حل إشكالية حالات الطوارئ أو انقطاع التيار الكهربائي، مع وجود خطورة عند استخدامها بطريقة غير صحيحة. هناك تحديات بسبب اعتمادها على الوقود الأحفوري الذي يسبب الانبعاثات الكربونية وانخفاض الكفاءة. لذلك، ظهرت الحاجة إلى تطوير حلول ابتكارية لتحسين أداء المولدات الاحتياطية وجعلها أكثر كفاءة واستدامة، وتطوير نظم تخزين متقدمة وفعالة لتلبية الطلب المتزايد على الطاقة.',
            ],
        ],
        [
            'type' => '_partials.path.left-list',
            'data' => [
                'title' => 'الأهداف',
                'image' => '/images/paths/2-1/goals.jpg',
                'list' => [
                    'تحسين كفاءة المولدات الاحتياطية وتطوير تقنيات جديدة لزيادة كفاءة استهلاك الوقود والطاقة.',
                    'تعزيز استخدام مصادر الطاقة المتجددة مثل الطاقة الشمسية أو الرياح كمصادر طاقة للمولدات الاحتياطية، مما يقلل من الاعتماد على الوقود الأحفوري.',
                    'تطوير أنظمة أكثر موثوقية وأمانًا للمولدات الاحتياطية، وتحد من المخاطر وتضمن استمرارية التشغيل في حالات الطوارئ.',
                    'تطوير تقنيات تعمل على تخزين كمية عالية من الطاقة بكفاءة وفعالية بشكل آمن.',
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

    @include('_partials.paths.2-1.idioms-1')
    @include('_partials.paths.1-2.emerging-techs')
    @include('_partials.paths.2-1.idioms-2')
    @include('_partials.paths.2-1.info-and-stats-1')
    @include('_partials.paths.2-1.info-and-stats-2')
    @include('_partials.paths.2-1.key-questions')
    @include('_partials.paths.2-1.references')
@endsection
