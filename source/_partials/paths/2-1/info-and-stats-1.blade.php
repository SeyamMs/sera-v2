@php
    $services1 = [
        [
            'service' =>
                'يتم تقسيم سوق مولدات الديزل في المملكة العربية السعودية حسب تصنيف الطاقة (أقل من 75 كيلو فولت أمبير، و75 كيلو فولت أمبير إلى 375 كيلو فولت أمبير، وما فوق 375 كيلو فولت أمبير)، والمستخدم النهائي (السكني والتجاري والصناعي)، والاستهلاك (الطاقة الاحتياطية، والطاقة الأولية / المستمرة ، وعندما يكون الطلب في أعلى مستوياته).',
        ],
        [
            'service' =>
                'من المتوقع أن ينمو سوق مولدات الديزل في المملكة العربية السعودية بمعدل نمو سنوي مركب يزيد عن 4.18٪ خلال الفترة 2020-2025.',
        ],
        [
            'service' =>
                'أدى تزايد عدد مشتركي الاتصالات إلى زيادة تركيب أبراج الاتصالات في المملكة العربية السعودية. وتتطلب هذه الأبراج مصدرًا مستمرًا للطاقة، وهو من المتوقع أن يخلق فرصًا كبيرة لنمو سوق مولدات الديزل.',
        ],
    ];

    $services2 = [
        [
            'service' =>
                'استحوذ القطاع الصناعي على الحصة الأكبر من إيرادات بيع مولدات الديزل في عام 2019 بسبب الطلب المتزايد على الطاقة.',
        ],
    ];
@endphp

<section
    class="relative flex items-center md:min-h-[911px] sm:min-h-[640px] min-h-[472px] overflow-hidden bg-white"
    id="prizes-section"
    x-data="{ shown: false }"
    x-intersect.threshold.20="shown = true"
>
    <div class="lg:px-12 md:px-8 lg:py-20 md:py-16 relative z-10 w-full h-full px-4 py-12">
        <div class="flex flex-col gap-12">
            <div class="flex flex-col gap-[22px]">
                <h2
                    class="lg:text-[48px] md:text-[40px] sm:text-[32px] text-[28px] font-semibold text-[#1A1A1A]"
                    x-show="shown"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:enter-start="opacity-0 -translate-y-10"
                    x-transition:enter="transition transform ease-out duration-300 delay-[300ms]"
                    x-transition:leave-end="opacity-0 -translate-y-10"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave="transition transform ease-in duration-300"
                >
                    معلومات وإحصائيات
                </h2>
            </div>


            <div class="xl:gap-8 md:gap-6 grid grid-cols-6 gap-4">

                <div class="md:col-span-3 col-span-6">
                    <div class="xl:gap-8 md:gap-6 flex flex-col gap-4">
                        @foreach ($services1 as $service)
                            <div
                                class="lg:px-10 lg:py-6 px-6 py-4 bg-[#EBEBEBCC] rounded-2xl w-full flex items-center md:gap-8 gap-4 overflow-hidden shadow-sm"
                                x-show="shown"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:enter-start="opacity-0 -translate-y-10"
                                x-transition:enter="transition transform ease-out duration-300 delay-[{{ $loop->iteration * 300 + 600 }}ms]"
                                x-transition:leave-end="opacity-0 -translate-y-10"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave="transition transform ease-in duration-300"
                            >
                                <div
                                    class="bg-[#2E184D] rounded-full px-4 py-3"
                                    x-show="shown"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    x-transition:enter-start="opacity-0 -translate-y-10"
                                    x-transition:enter="transition transform ease-out duration-300 delay-[{{ $loop->iteration * 300 + 700 }}ms]"
                                    x-transition:leave-end="opacity-0 -translate-y-10"
                                    x-transition:leave-start="opacity-100 translate-y-0"
                                    x-transition:leave="transition transform ease-in duration-300"
                                >
                                    <span
                                        class="font-bold text-white lg:text-[26px] md:text-[22px] text-[18px]"
                                        x-show="shown"
                                        x-transition:enter-end="opacity-100 translate-y-0"
                                        x-transition:enter-start="opacity-0 -translate-y-10"
                                        x-transition:enter="transition transform ease-out duration-300 delay-[{{ $loop->iteration * 300 + 800 }}ms]"
                                        x-transition:leave-end="opacity-0 -translate-y-10"
                                        x-transition:leave-start="opacity-100 translate-y-0"
                                        x-transition:leave="transition transform ease-in duration-300"
                                    >
                                        {{ str($loop->iteration)->padLeft(2, 0) }}
                                    </span>
                                </div>

                                <p
                                    class="lg:text-[26px] md:text-[18px] text-[14px] font-medium max-w-[460px] text-black"
                                    x-show="shown"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    x-transition:enter-start="opacity-0 -translate-y-10"
                                    x-transition:enter="transition transform ease-out duration-300 delay-[{{ $loop->iteration * 300 + 900 }}ms]"
                                    x-transition:leave-end="opacity-0 -translate-y-10"
                                    x-transition:leave-start="opacity-100 translate-y-0"
                                    x-transition:leave="transition transform ease-in duration-300"
                                >
                                    {{ $service['service'] }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="md:col-span-3 col-span-6">
                    <div class="xl:gap-8 md:gap-6 flex flex-col gap-4">
                        @foreach ($services2 as $service)
                            <div
                                class="lg:px-10 lg:py-6 px-6 py-4 bg-[#EBEBEBCC] rounded-2xl w-full flex items-center md:gap-8 gap-4 overflow-hidden shadow-sm"
                                x-show="shown"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:enter-start="opacity-0 -translate-y-10"
                                x-transition:enter="transition transform ease-out duration-300 delay-[{{ ($loop->iteration + 3) * 300 + 600 }}ms]"
                                x-transition:leave-end="opacity-0 -translate-y-10"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave="transition transform ease-in duration-300"
                            >
                                <div
                                    class="bg-[#2E184D] rounded-full px-4 py-3"
                                    x-show="shown"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    x-transition:enter-start="opacity-0 -translate-y-10"
                                    x-transition:enter="transition transform ease-out duration-300 delay-[{{ ($loop->iteration + 3) * 300 + 700 }}ms]"
                                    x-transition:leave-end="opacity-0 -translate-y-10"
                                    x-transition:leave-start="opacity-100 translate-y-0"
                                    x-transition:leave="transition transform ease-in duration-300"
                                >
                                    <span
                                        class="font-bold text-white lg:text-[26px] md:text-[22px] text-[18px]"
                                        x-show="shown"
                                        x-transition:enter-end="opacity-100 translate-y-0"
                                        x-transition:enter-start="opacity-0 -translate-y-10"
                                        x-transition:enter="transition transform ease-out duration-300 delay-[{{ ($loop->iteration + 3) * 300 + 800 }}ms]"
                                        x-transition:leave-end="opacity-0 -translate-y-10"
                                        x-transition:leave-start="opacity-100 translate-y-0"
                                        x-transition:leave="transition transform ease-in duration-300"
                                    >
                                        {{ str($loop->iteration + 3)->padLeft(2, 0) }}
                                    </span>
                                </div>

                                <p
                                    class="lg:text-[26px] md:text-[18px] text-[14px] font-medium max-w-[460px] text-black"
                                    x-show="shown"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    x-transition:enter-start="opacity-0 -translate-y-10"
                                    x-transition:enter="transition transform ease-out duration-300 delay-[{{ ($loop->iteration + 3) * 300 + 900 }}ms]"
                                    x-transition:leave-end="opacity-0 -translate-y-10"
                                    x-transition:leave-start="opacity-100 translate-y-0"
                                    x-transition:leave="transition transform ease-in duration-300"
                                >
                                    {{ $service['service'] }}
                                </p>
                            </div>
                        @endforeach

                        <div
                            class="rounded-3xl overflow-hidden shadow-sm bg-[#EBEBEBCC] w-full h-full"
                            x-show="shown"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:enter-start="opacity-0 -translate-y-10"
                            x-transition:enter="transition transform ease-out duration-300 delay-[2100ms]"
                            x-transition:leave-end="opacity-0 -translate-y-10"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave="transition transform ease-in duration-300"
                        >
                            <img
                                class="object-contain object-center w-full h-full"
                                src="{{ $page->asset('images/paths/2-1/info-and-stats-1.jpg') }}"
                                alt="info-and-stats-1"
                            />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>
