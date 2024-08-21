@php
    $paths = [
        [
            'special' => false,
            'title' => 'تعزيز رضا المستهلك',
            'image' => 'images/paths-1.jpg',
            'col_class' => '',
            'wrapper_class' => 'lg:ml-0 ml-auto mr-auto',
            'challenges' => [
                [
                    'title' => 'تحسين تجربة المستهلك',
                    'link' => '/paths/1-1-improving-consumer-experience',
                ],
                [
                    'title' => 'تعزيز أمن وسلامة المستهلكين لخدمات الكهرباء',
                    'link' => '/paths/1-2-enhancing-consumer-safety-and-security',
                ],
            ],
        ],
        [
            'special' => false,
            'title' => 'دمج الطاقة المتجددة',
            'image' => 'images/paths-2.jpg',
            'col_class' => '',
            'wrapper_class' => 'xl:mr-auto lg:mr-0 ml-auto mr-auto',
            'challenges' => [
                [
                    'title' => 'حلول ابتكارية للمولدات الاحتياطية وتخزين الطاقة',
                    'link' => '/paths/2-1-innovative-solutions-for-backup-generators-and-energy-storage',
                ],
                [
                    'title' => 'دمج مصادر الطاقة المتجددة والطاقة التقليدية',
                    'link' => '/paths/2-2-efficient-integration-of-renewable-and-non-renewable-energy-sources',
                ],
            ],
        ],
        [
            'special' => true,
            'title' => 'تبني التقنيات الناشئة',
            'image' => 'images/paths-3.jpg',
            'col_class' => '',
            'wrapper_class' => 'xl:mr-0 xl:ml-auto lg:ml-0 ml-auto mr-auto',
            'challenges' => [
                [
                    'title' =>
                        'هذا المسار للمشاركين الذين لديهم حل ابتكاري يعالج تحدي في قطاع الكهرباء غير التحديات التي تم ذكرها في مسار تعزيز رضا المستهلك أو مسار دمج الطاقة المتجددة، ويتضمن استخدام أحد التقنيات الناشئة',
                    'link' => '/paths/3-1-emerging-technologies',
                ],
            ],
        ],
    ];
@endphp

<section
    class="relative flex xl:min-h-[1179px] lg:min-h-[1849px] md:min-h-[2712px] sm:min-h-[2186px] min-h-[2102px] items-center overflow-hidden bg-[#230C44]"
    id="paths-section"
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
                المسارات والتحديات
            </h2>

            <div class="grid grid-cols-6 gap-6">

                @foreach ($paths as $index => $path)
                    <div class="xl:col-span-2 lg:col-span-3 col-span-6 {{ $path['col_class'] }}">
                        <div
                            class="bg-[#FFFFFF26] rounded-3xl max-w-md flex flex-col h-full overflow-hidden md:pt-8 pt-4 {{ $path['wrapper_class'] }}"
                            x-show="shown"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:enter-start="opacity-0 -translate-y-10"
                            x-transition:enter="transition transform ease-out duration-300 delay-[{{ $loop->iteration * 300 + 300 }}ms]"
                            x-transition:leave-end="opacity-0 -translate-y-10"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave="transition transform ease-in duration-300"
                        >
                            <h3
                                class="text-white lg:text-[44px] md:text-[40px] text-[32px] leading-[50px] font-semibold text-center"
                                x-show="shown"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:enter-start="opacity-0 -translate-y-10"
                                x-transition:enter="transition transform ease-out duration-300 delay-[{{ $loop->iteration * 300 + 500 }}ms]"
                                x-transition:leave-end="opacity-0 -translate-y-10"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave="transition transform ease-in duration-300"
                            >
                                {!! $path['title'] !!}
                            </h3>
                            <div class="md:px-8 md:py-10 w-full px-4 py-6 mx-auto">
                                <div
                                    class="w-full flex aspect-square h-full max-w-[308px] mx-auto rounded-[33px] overflow-hidden"
                                    x-show="shown"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    x-transition:enter-start="opacity-0 -translate-y-10"
                                    x-transition:enter="transition transform ease-out duration-300 delay-[{{ $loop->iteration * 300 + 700 }}ms]"
                                    x-transition:leave-end="opacity-0 -translate-y-10"
                                    x-transition:leave-start="opacity-100 translate-y-0"
                                    x-transition:leave="transition transform ease-in duration-300"
                                >
                                    <img
                                        class="object-cover object-center w-full h-full"
                                        src="{{ $page->asset($path['image']) }}"
                                        alt="{{ str($path['image'])->before('.')->after('/') }}"
                                    />
                                </div>
                            </div>
                            <div class="md:gap-8 md:px-8 md:pt-8 md:pb-10 flex flex-col gap-4 px-4 pt-2 mb-6">


                                @if ($path['special'])
                                    <h4
                                        class="text-2xl text-[#FFFFFF99] font-semibold"
                                        x-show="shown"
                                        x-transition:enter-end="opacity-100 translate-x-0"
                                        x-transition:enter-start="opacity-0 translate-x-10"
                                        x-transition:enter="transition transform ease-out duration-300 delay-[{{ $loop->iteration * 300 + 1000 }}ms]"
                                        x-transition:leave-end="opacity-0 translate-x-10"
                                        x-transition:leave-start="opacity-100 translate-x-0"
                                        x-transition:leave="transition transform ease-in duration-300"
                                    >
                                        لديك حل ابتكاري؟
                                    </h4>
                                    @foreach ($path['challenges'] as $index => $challenge)
                                        <div
                                            class="px-4 py-6 bg-white rounded-lg"
                                            x-show="shown"
                                            x-transition:enter-end="opacity-100 translate-x-0"
                                            x-transition:enter-start="opacity-0 translate-x-10"
                                            x-transition:enter="transition transform ease-out duration-300 delay-[{{ $loop->parent->iteration * 300 + 1000 + $loop->iteration * 200 }}ms]"
                                            x-transition:leave-end="opacity-0 translate-x-10"
                                            x-transition:leave-start="opacity-100 translate-x-0"
                                            x-transition:leave="transition transform ease-in duration-300"
                                        >
                                            <p
                                                class="xl:text-[18px] 2xl:text-[20px] lg:text-[16px] font-semibold text-center text-[#230C44]"
                                                x-show="shown"
                                                x-transition:enter-end="opacity-100 translate-x-0"
                                                x-transition:enter-start="opacity-0 translate-x-10"
                                                x-transition:enter="transition transform ease-out duration-300 delay-[{{ $loop->parent->iteration * 300 + 1000 + $loop->iteration * 400 }}ms]"
                                                x-transition:leave-end="opacity-0 translate-x-10"
                                                x-transition:leave-start="opacity-100 translate-x-0"
                                                x-transition:leave="transition transform ease-in duration-300"
                                            >
                                                {{ $challenge['title'] }}
                                            </p>
                                        </div>
                                    @endforeach
                                @else
                                    <h4
                                        class="text-2xl text-[#FFFFFF99] font-semibold"
                                        x-show="shown"
                                        x-transition:enter-end="opacity-100 translate-x-0"
                                        x-transition:enter-start="opacity-0 translate-x-10"
                                        x-transition:enter="transition transform ease-out duration-300 delay-[{{ $loop->iteration * 300 + 1000 }}ms]"
                                        x-transition:leave-end="opacity-0 translate-x-10"
                                        x-transition:leave-start="opacity-100 translate-x-0"
                                        x-transition:leave="transition transform ease-in duration-300"
                                    >
                                        إختر التحدي وشاهد التفاصيل
                                    </h4>
                                    @foreach ($path['challenges'] as $index => $challenge)
                                        <a
                                            class="group gap-4 bg-white hover:ring-8 hover:ring-opacity-60 hover:ring-white font-semibold rounded-full flex items-center justify-start p-2 h-20 text-[#230C44]"
                                            href="{{ $page->baseUrl }}{{ $challenge['link'] }}"
                                            x-show="shown"
                                            x-transition:enter-end="opacity-100 translate-x-0"
                                            x-transition:enter-start="opacity-0 translate-x-10"
                                            x-transition:enter="transition transform ease-out duration-300 delay-[{{ $loop->parent->iteration * 300 + 1000 + $loop->iteration * 100 }}ms]"
                                            x-transition:leave-end="opacity-0 translate-x-10"
                                            x-transition:leave-start="opacity-100 translate-x-0"
                                            x-transition:leave="transition transform ease-in duration-300"
                                        >
                                            <div
                                                class="flex items-center justify-center size-[70px] flex-shrink-0 rounded-full bg-[#230C44]"
                                                x-show="shown"
                                                x-transition:enter-end="opacity-100 translate-x-0"
                                                x-transition:enter-start="opacity-0 translate-x-10"
                                                x-transition:enter="transition transform ease-out duration-300 delay-[{{ $loop->parent->iteration * 300 + 1000 + $loop->iteration * 200 }}ms]"
                                                x-transition:leave-end="opacity-0 translate-x-10"
                                                x-transition:leave-start="opacity-100 translate-x-0"
                                                x-transition:leave="transition transform ease-in duration-300"
                                            >
                                                <span
                                                    class="text-white text-[26px] font-bold"
                                                    x-show="shown"
                                                    x-transition:enter-end="opacity-100 translate-x-0"
                                                    x-transition:enter-start="opacity-0 translate-x-10"
                                                    x-transition:enter="transition transform ease-out duration-300 delay-[{{ $loop->parent->iteration * 300 + 1000 + $loop->iteration * 300 }}ms]"
                                                    x-transition:leave-end="opacity-0 translate-x-10"
                                                    x-transition:leave-start="opacity-100 translate-x-0"
                                                    x-transition:leave="transition transform ease-in duration-300"
                                                >
                                                    {{ str($loop->iteration)->padLeft(2, 0) }}
                                                </span>
                                            </div>
                                            <span
                                                class="xl:text-[18px] 2xl:text-[20px] lg:text-[16px] max-w-64"
                                                x-show="shown"
                                                x-transition:enter-end="opacity-100 translate-x-0"
                                                x-transition:enter-start="opacity-0 translate-x-10"
                                                x-transition:enter="transition transform ease-out duration-300 delay-[{{ $loop->parent->iteration * 300 + 1000 + $loop->iteration * 400 }}ms]"
                                                x-transition:leave-end="opacity-0 translate-x-10"
                                                x-transition:leave-start="opacity-100 translate-x-0"
                                                x-transition:leave="transition transform ease-in duration-300"
                                            >
                                                {{ $challenge['title'] }}
                                            </span>
                                        </a>
                                    @endforeach
                                @endif



                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    {{-- <div
        class="absolute top-0 left-0 z-0 w-full h-full bg-no-repeat bg-center bg-opacity-10 bg-[url('https://seyamms.github.io/sera-v2/assets/images/circles.svg')]">
    </div> --}}
</section>
