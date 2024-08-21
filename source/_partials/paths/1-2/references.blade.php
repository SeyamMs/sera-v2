@php
    $references = [
        'الإدارة العامة للسلامة، 2014',
        'الجمعية الدولية لاقتصاديات الطاقة ( International Association for Energy Economics)، 2022',
        'شركة قراءات عربية، إدارة سلامة التمديدات الكهربائية، 2024',
        'غسان النويمي، 2020))، التقنيات الناشئة وأثرها على المكتبات: مفهومها وابرز التحديات واصعوبات، جامعة الملك عبد العزيز',
    ];
@endphp

<section
    class="relative flex items-center xl:min-h-[507px] lg:min-h-[517px] md:min-h-[495px] sm:min-h-[400px] min-h-[480px] overflow-hidden bg-[#230C44]"
    id="prizes-section"
    x-data="{ shown: false }"
    x-intersect.threshold.20="shown = true"
>
    <div class="lg:px-12 md:px-8 lg:py-20 md:py-16 relative z-10 w-full h-full px-4 py-12">
        <div class="flex flex-col gap-8">
            <h2
                class="lg:text-[69px] md:text-[56px] sm:text-[48px] text-[36px] text-center font-bold text-white"
                x-show="shown"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:enter-start="opacity-0 -translate-y-10"
                x-transition:enter="transition transform ease-out duration-300 delay-[300ms]"
                x-transition:leave-end="opacity-0 -translate-y-10"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave="transition transform ease-in duration-300"
            >
                المصادر والمراجع
            </h2>


            <div class="max-w-none prose">
                <ul class="marker:text-white md:space-y-6 space-y-4">
                    @foreach ($references as $index => $reference)
                        <li
                            class="xl:text-2xl lg:text-xl md:text-lg text-base tracking-wide text-white"
                            x-show="shown"
                            x-transition:enter="transition transform ease-out duration-300 origin-right delay-[{{ $loop->iteration * 100 + 300 }}ms]"
                            x-transition:enter-start="opacity-0 translate-x-10 rotate-12"
                            x-transition:enter-end="opacity-100 translate-x-0 rotate-0"
                            x-transition:leave="transition transform ease-in duration-300"
                            x-transition:leave-start="opacity-100 translate-x-0"
                            x-transition:leave-end="opacity-0 translate-x-10"
                        >
                            {{ $reference }}
                        </li>
                    @endforeach
                </ul>
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
