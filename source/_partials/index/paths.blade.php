@php
    $paths = [
        [
            'title' => 'تعزيز <br /> رضا المستهلك',
            'image' => 'images/paths-1.jpg',
            'col_class' => '',
            'wrapper_class' => 'lg:ml-0 ml-auto mr-auto',
            'challenges' => [
                'إيجاد حلول لإدارة الطاقة الشخصية للمستهلكين',
                'تطوير منصات لتعزيز التفاعل والرضا لدى العملاء',
                'تصميم حلول مبتكرة لفوترة الطاقة وشفافية الاستخدام',
            ],
        ],
        [
            'title' => 'دمج <br /> الطاقة المتجددة',
            'image' => 'images/paths-2.jpg',
            'col_class' => 'xl:order-none lg:order-last',
            'wrapper_class' => 'xl:ml-auto lg:ml-0 ml-auto mr-auto',
            'challenges' => [
                'دمج مصادر الطاقة المتجددة بكفاءة في شبكة الطاقة الحالية',
                'تطوير تقنيات تخزين الطاقة لإدارة التقطع في مصادر الطاقة المتجددة',
                'تحقيق التوازن الأمثل بين الأحمال باستخدام مزيج من المصادر المتجددة وغير المتجددة',
                'تحقيق التوازن الأمثل بين الأحمال باستخدام مزيج من المصادر المتجددة وغير المتجددة',
            ],
        ],
        [
            'title' => 'إدارة البيانات <br /> الضخمة والتحليل',
            'image' => 'images/paths-3.jpg',
            'col_class' => '',
            'wrapper_class' => 'lg:mr-0 ml-auto mr-auto',
            'challenges' => [
                'أدوات لتحليل البيانات الكبيرة من الشبكات الكهربائية',
                'تقنيات لتجميع وتخزين البيانات بشكل آمن وفعال',
                'تطوير نظم لتحليل البيانات التنبؤية لتحسين أداء الشبكات',
            ],
        ],
    ];
@endphp

<section
    class="relative flex min-h-[1453px] items-center overflow-hidden bg-[#230C44]"
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
                            class="bg-[#FFFFFF26] rounded-3xl max-w-md flex flex-col overflow-hidden md:pt-8 pt-4 {{ $path['wrapper_class'] }}"
                            x-show="shown"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:enter-start="opacity-0 -translate-y-10"
                            x-transition:enter="transition transform ease-out duration-300 delay-[{{ $loop->iteration * 600 }}ms]"
                            x-transition:leave-end="opacity-0 -translate-y-10"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave="transition transform ease-in duration-300"
                        >
                            <h3
                                class="text-white lg:text-[44px] md:text-[40px] text-[32px] leading-[50px] font-semibold text-center"
                                x-show="shown"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:enter-start="opacity-0 -translate-y-10"
                                x-transition:enter="transition transform ease-out duration-300 delay-[{{ $loop->iteration * 800 }}ms]"
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
                                    x-transition:enter="transition transform ease-out duration-300 delay-[{{ $loop->iteration * 1000 }}ms]"
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
                                <h4
                                    class="text-2xl text-[#FFFFFF99] font-semibold"
                                    x-show="shown"
                                    x-transition:enter-end="opacity-100 translate-x-0"
                                    x-transition:enter-start="opacity-0 translate-x-10"
                                    x-transition:enter="transition transform ease-out duration-300 delay-[{{ $loop->iteration * 1200 }}ms]"
                                    x-transition:leave-end="opacity-0 translate-x-10"
                                    x-transition:leave-start="opacity-100 translate-x-0"
                                    x-transition:leave="transition transform ease-in duration-300"
                                >
                                    إختر المسار وشاهد التفاصيل
                                </h4>

                                @foreach ($path['challenges'] as $index => $challenge)
                                    <a
                                        class="group gap-4 bg-white hover:ring-8 hover:ring-opacity-60 hover:ring-white font-semibold rounded-full flex items-center justify-start p-2 h-20 text-[#230C44]"
                                        href="{{ $page->baseUrl }}/path"
                                        x-show="shown"
                                        x-transition:enter-end="opacity-100 translate-x-0"
                                        x-transition:enter-start="opacity-0 translate-x-10"
                                        x-transition:enter="transition transform ease-out duration-300 delay-[{{ $loop->parent->iteration * 1200 + $loop->iteration * 100 }}ms]"
                                        x-transition:leave-end="opacity-0 translate-x-10"
                                        x-transition:leave-start="opacity-100 translate-x-0"
                                        x-transition:leave="transition transform ease-in duration-300"
                                    >
                                        <div
                                            class="flex items-center justify-center size-[70px] flex-shrink-0 rounded-full bg-[#230C44]"
                                            x-show="shown"
                                            x-transition:enter-end="opacity-100 translate-x-0"
                                            x-transition:enter-start="opacity-0 translate-x-10"
                                            x-transition:enter="transition transform ease-out duration-300 delay-[{{ $loop->parent->iteration * 1200 + $loop->iteration * 200 }}ms]"
                                            x-transition:leave-end="opacity-0 translate-x-10"
                                            x-transition:leave-start="opacity-100 translate-x-0"
                                            x-transition:leave="transition transform ease-in duration-300"
                                        >
                                            <span
                                                class="text-white text-[26px] font-bold"
                                                x-show="shown"
                                                x-transition:enter-end="opacity-100 translate-x-0"
                                                x-transition:enter-start="opacity-0 translate-x-10"
                                                x-transition:enter="transition transform ease-out duration-300 delay-[{{ $loop->parent->iteration * 1200 + $loop->iteration * 300 }}ms]"
                                                x-transition:leave-end="opacity-0 translate-x-10"
                                                x-transition:leave-start="opacity-100 translate-x-0"
                                                x-transition:leave="transition transform ease-in duration-300"
                                            >
                                                {{ str($loop->iteration)->padLeft(2, 0) }}
                                            </span>
                                        </div>
                                        <span
                                            class="xl:text-[18px] 2xl:text-[20px] lg:text-[16px] text-justify max-w-64"
                                            x-show="shown"
                                            x-transition:enter-end="opacity-100 translate-x-0"
                                            x-transition:enter-start="opacity-0 translate-x-10"
                                            x-transition:enter="transition transform ease-out duration-300 delay-[{{ $loop->parent->iteration * 1200 + $loop->iteration * 400 }}ms]"
                                            x-transition:leave-end="opacity-0 translate-x-10"
                                            x-transition:leave-start="opacity-100 translate-x-0"
                                            x-transition:leave="transition transform ease-in duration-300"
                                        >
                                            {{ $challenge }}
                                        </span>
                                    </a>
                                @endforeach


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
