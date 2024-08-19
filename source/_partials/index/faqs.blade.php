@php
    $paths = [
        [
            'title' => '1. ما هو الإلكتراثون ؟',
            'answer' =>
                'إلكتراثون الهيئة السعودية لتنظيم الكهرباء (SERA) منافسة وطنية للمبتكرين والمطورين والمهتمين في قطاع الكهرباء، بهدف إيجاد إلى التكامل لإيجاد حلول إبداعية للتحديات التي تواجه هذا القطاع.',
        ],
        [
            'title' => '2. ما هي الهيئة السعودية لتنظيم الكهرباء؟',
            'answer' =>
                'تقوم الهيئة بمهمة تنظيم نشاط الكهرباء ويشمل ذلك توليد الكهرباء والإنتاج المزدوج من أي مصدر من مصادر الطاقة، ونقل الكهرباء، وتوزيعها، والمتاجرة بها، وبيعها بالتجزئة، ونشاط المشتري الرئيس، وتبريد المناطق. وينص التنظيم على أن تقوم الهيئة بتنظيم الخدمات والإشراف عليها في نطاق اختصاصها ومراقبة أدائها، والتنسيق فيما بين المؤسسات والجهات ذات العلاقة وبين الأشخاص المرخص لهم، لوضع الإطار التنظيمي والإجرائي اللازم لضمان مزاولة أنشطة الخدمات عند مستويات جودة وموثوقية عالية وتوفيرها للمستهلك بأسعار تنافسية معقولة تحقق العدالة بين المستهلكين',
        ],
        [
            'title' => '3. ما هي أهداف الكتراثون؟',
            'answer' =>
                'يهدف الكتراثون إلى العمل على رصد التحديات التي تواجه قطاع الكهرباء في المملكة، وإبراز وإشراك أفراد المجتمع لإبتكار حلول ذات طابع استثماري للتحديات، وأخيرًا إيجاد شركات استثمارية متنوعة ومستدامة.',
        ],
        [
            'title' => '4. ما هي اللغة المستخدمة في الإلكتراثون ؟',
            'answer' => 'اللغة العربية.',
        ],
        [
            'title' => '5. ما هي خطوات التسجيل في الإلكتراثون ؟',
            'answer' =>
                'بإمكانك التسجيل في الإلكتراثون  بعد الاطلاع على المسارات والتحديات الموجودة على المنصة، ثم بعد ذلك اختيار التحدي الذي تود المشاركة فيه، ثم تقديم حلك المبتكر بعد إضافة بيانات التواصل الخاص بك.',
        ],
        [
            'title' =>
                '6. لدي حل وفكرة استثمارية لتحدي في قطاع الكهرباء من خارج المسارات والتحديات المذكورة في المنصة، هل يمكنني المشاركة ؟',
            'answer' => 'نعم بالطبع، بإمكانك المشاركة بطرح فكرة جديدة ومبتكرة تخدم مجالًا غير موجود في الإلكتراثون .',
        ],
        [
            'title' => '7. هل بإمكاني التسجيل في جميع المسارات؟',
            'answer' => 'نعم، يمكنك التسجيل بأكثر من مسار، ولكن ستشارك بفكرة واحدة في حال تم ترشيحك.',
        ],
        [
            'title' => '8. هل يتطلب وجود فريق؟ وكم العدد المسموح لأعضاء الفريق الواحد؟',
            'answer' =>
                'يمكنك المشاركة في التحدي كفرد، ولكن بعد ترشح فكرتك لإلكتراثون لا بد من تكوين فريق من شخصين لذات الفكرة للمشاركة في الإلكتراثون .',
        ],
        [
            'title' => '9. هل يمكن تغيير أعضاء الفريق بعد التسجيل؟',
            'answer' =>
                'نعم يمكنك تغيير أعضاء الفريق بعد التسجيل، ولكن عند الترشح لابد لك من اختيار شخصين لتمثيل الفكرة والمشاركة في الكتراثون .',
        ],
        [
            'title' => '10. هل توجد رسوم تسجيل في الإلكتراثون ؟',
            'answer' => 'لا، لا توجد رسوم تسجيل.',
        ],
        [
            'title' => '11. هل يُشترط للاشتراك في الكتراثون العمل في جهة لها علاقة بمجال الكهرباء؟',
            'answer' => 'لا، لا يُشترط.',
        ],
    ];
@endphp

<section
    class="relative flex min-h-screen items-center overflow-hidden bg-[#230C44]"
    x-data="{ shown: false }"
    x-intersect.threshold.20="shown = true"
>
    <div class="lg:px-12 md:px-8 lg:py-20 md:py-16 relative z-10 w-full h-full px-4 py-12">
        <div class="md:gap-14 flex flex-col gap-8">

            <h2
                class="lg:text-[94px] md:text-[84px] text-[48px] text-center font-semibold text-white"
                x-show="shown"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:enter-start="opacity-0 -translate-y-10"
                x-transition:enter="transition transform ease-out duration-300 delay-[300ms]"
                x-transition:leave-end="opacity-0 -translate-y-10"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave="transition transform ease-in duration-300"
            >
                الاسئلة الشائعة
            </h2>

            <div class="md:gap-8 grid grid-cols-6 gap-4">

                @foreach ($paths as $index => $path)
                    <div class="md:col-span-3 col-span-6">
                        <div
                            class="rounded-3xl bg-[#FFFFFFCC] overflow-hidden"
                            x-data="{ open: false }"
                            :class="{ '!bg-[#FFFFFF]': open }"
                            x-show="shown"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:enter-start="opacity-0 -translate-y-10"
                            x-transition:enter="transition transform ease-out duration-300 delay-[{{ $loop->iteration * 100 + 300 }}ms]"
                            x-transition:leave-end="opacity-0 -translate-y-10"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave="transition transform ease-in duration-300"
                        >
                            <div
                                class="md:px-8 md:py-6 md:gap-8 flex items-center justify-between gap-4 px-4 py-3 cursor-pointer"
                                x-on:click="open = !open"
                            >
                                <h3
                                    class="text-[#1B1B1B] lg:text-[26px] md:text-[20px] text-[16px] font-semibold text-start">
                                    {!! $path['title'] !!}
                                </h3>
                                <div class="flex-shrink-0 p-4">
                                    <img
                                        src="{{ $page->asset('images/icons/plus.svg') }}"
                                        alt="plus"
                                    />
                                </div>
                            </div>
                            <div
                                class="md:px-8 md:py-4 px-4 py-2"
                                x-cloak
                                x-collapse
                                x-show="open"
                            >
                                <p class="md:text-lg text-base font-bold">
                                    {!! $path['answer'] !!}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <div class="absolute top-0 left-0 z-0 w-full h-full">
        <img
            class="object-cover object-center w-full h-full"
            src="{{ $page->asset('images/circles.svg') }}"
            alt="circles"
        />
    </div>
</section>
