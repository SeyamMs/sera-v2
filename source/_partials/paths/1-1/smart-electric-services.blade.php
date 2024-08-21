@php
    $services = [
        [
            'order_class' => 'lg:order-1',
            'service' => 'تمكن المستهلكين من مراقبة استهلاكهم للطاقة بشكل لحظي أو دوري.',
        ],
        [
            'order_class' => 'lg:order-3',
            'service' => 'إتاحة التحكم عن بعد في أجهزة الاستهلاك الكهربائي.',
        ],
        [
            'order_class' => 'lg:order-5',
            'service' => 'الكشف السريع عن الأعطال في الشبكة الكهربائية.',
        ],
        [
            'order_class' => 'lg:order-2',
            'service' => 'تطبيق تعرفة مُتغيرة للطاقة حسب أوقات الذروة والذروة المنخفضة.',
        ],
        [
            'order_class' => 'lg:order-4',
            'service' => 'تقديم برامج إدارة الطلب؛ لتشجيع المستهلكين على تقليل استهلاكهم في أوقات الذروة.',
        ],
        [
            'order_class' => 'lg:order-6',
            'service' => 'دعم دمج مصادر الطاقة المتجددة، مثل الطاقة الشمسية، في الشبكة الكهربائية AMINERGY,2024)).',
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
                    خدمات الكهرباء الذكية
                </h2>

                <h3
                    class="lg:text-[26px] md:text-[22px] sm:text-[18px] text-[16px] font-medium max-w-[1140px] text-[#1B1B1B]"
                    x-show="shown"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:enter-start="opacity-0 -translate-y-10"
                    x-transition:enter="transition transform ease-out duration-300 delay-[400ms]"
                    x-transition:leave-end="opacity-0 -translate-y-10"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave="transition transform ease-in duration-300"
                >
                    هي مجموعة من الخدمات المُقدمة من شركة الكهرباء للمستهلكين، تقوم الشركة بتقديم خدمة العدادات الذكية
                    ومنصات التحكم الذكية لتحسين تجربة المستهلك، وتهدف إلى:
                </h3>
            </div>


            <div class="xl:gap-8 md:gap-6 grid grid-cols-6 gap-4">

                @foreach ($services as $service)
                    <div class="lg:col-span-3 col-span-6 {{ $service['order_class'] }}">
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
                    </div>
                @endforeach


            </div>
        </div>
    </div>

</section>
