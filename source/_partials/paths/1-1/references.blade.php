@php
    $references = [
        'اكو مينا (EcoMENA)، 2024',
        'الشركة السعودية للكهرباء،2024',
        'المركز السعودي لكفاءة الطاقة،2024',
        'غسان النويمي، 2020))، التقنيات الناشئة وأثرها على المكتبات: مفهومها وابرز التحديات واصعوبات، جامعة الملك عبد العزيز',
        'محمد منتصر،2020',
        'شركة (Compass)، 2024',
        'شركة Mckinsey، 2021',
        'شركة Schneider Electric، 2024',
        'شركة tridenstechnology، 2023',
        'منصة AMINERGY، 2024',
        'منصة Statista، 2024',
        'مجموعة أكسفورد للأعمال(oxfordbusinessgroup)، 2023',
        'هيئة تنظيم قطاع المعادن والطاقة، 2024',
        'Kelly James,2022',
    ];
@endphp

<section
    class="relative flex items-center md:min-h-[911px] sm:min-h-[640px] min-h-[472px] overflow-hidden bg-white"
    id="prizes-section"
    x-data="{ shown: false }"
    x-intersect.threshold.20="shown = true"
>
    <div class="lg:px-12 md:px-8 lg:py-20 md:py-16 relative z-10 w-full h-full px-4 py-12">
        <div class="flex flex-col gap-8">
            <h2
                class="lg:text-[69px] md:text-[56px] sm:text-[48px] text-[36px] text-center font-bold text-[#1A1A1A]"
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
                <ul class="marker:text-[#1A1A1A] space-y-4 md:space-y-6">
                    @foreach ($references as $index => $reference)
                        <li
                            class="xl:text-2xl lg:text-xl md:text-lg text-base tracking-wide text-[#1A1A1A]"
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
            src="{{ $page->asset('images/circles-dark.svg') }}"
            alt="circles-dark"
        />
    </div>
</section>
