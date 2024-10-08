@php
    $title = 'تحسين تجربة المستهلك';
    $image = '/images/paths/1-1/main.jpg';
    $sections = [
        [
            'type' => '_partials.path.right-text',
            'data' => [
                'title' => 'نبذة عن التحدي',
                'image' => '/images/paths/1-1/brief.jpg',
                'description' =>
                    'مع ارتفاع الطلب على الطاقة حول العالم وتنوع المستهلكين لها، يتطلب الأمر توفير تجربة سلسة وموثوقة تتوافق مع تطلعات المستهلك، يشمل هذا تحسين مجموعة من العناصر الأساسية مثل ضمان توفر الكهرباء بشكل مستمر، تقديم خدمات نوعية، توفير تجربة مميزة لإدارة استهلاك الطاقة بشكل أكثر فعالية، منصات رقمية تخدم المستهلك مما يسهم في تطوير الخدمات المقدمة للمستهلكين في قطاع الكهرباء، وتعزيز مستوى رضاهم وتحسين تجربتهم مع الطاقة.',
            ],
        ],
        [
            'type' => '_partials.path.left-list',
            'data' => [
                'title' => 'الأهداف',
                'image' => '/images/paths/1-1/goals.jpg',
                'list' => [
                    'تزويد المستهلكين بأدوات وتقنيات تتيح لهم فهم ومراقبة وتحسين استهلاكهم للطاقة.',
                    'تقليل فواتير الكهرباء وتحسين كفاءة استهلاك الطاقة.',
                    'تعزيز رضا العملاء وتقديم معلومات واضحة وسهلة الوصول لها، حول استهلاك الطاقة وتفاصيل الفواتير.',
                    'تقديم خدمات مبتكرة وذات جودة عالية لتحسين تجربة المستهلك مع الطاقة.',
                ],
            ],
        ],
        [
            'type' => '_partials.path.right-list',
            'data' => [
                'title' => 'الفرص',
                'image' => '/images/paths/1-1/chances.jpg',
                'list' => [
                    'تشجيع المستهلكين على استخدام الحلول الجديدة وتبني ممارسات موفرة للطاقة.',
                    'تقديم أدوات مبتكرة تساعد المستهلك على الاستفادة من الطاقة بجودة وكفاءة وأقل تكلفة.',
                    'إنشاء منصات رقمية فعّالة وسهلة الاستخدام تسهل على المستهلك الاستفادة من الطاقة بطريقة مميزة مثل (إدارة الاستهلاك، تسهيل عملية الدفع وغيرها).',
                    'تعزيز الوعي حول الطاقة وابتكار طرق سهلة للوصول إلى الجهات ذات الاختصاص أو الخبراء.',
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

    @include('_partials.paths.1-1.idioms-1')
    @include('_partials.paths.1-1.idioms-2')
    @include('_partials.paths.1-1.emerging-techs')
    @include('_partials.paths.1-1.info-and-stats')
    @include('_partials.paths.1-1.smart-electric-services')
    @include('_partials.paths.1-1.smart-grid-techs')
    @include('_partials.paths.1-1.idioms-3')
    @include('_partials.paths.1-1.energy-management-program')
    @include('_partials.paths.1-1.key-questions')
    @include('_partials.paths.1-1.references')
@endsection
