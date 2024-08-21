<section
    class="relative flex min-h-[592px] items-center overflow-hidden bg-white"
    x-data="{ shown: false }"
    x-intersect.threshold.20="shown = true"
>
    <div class="container relative w-full h-full px-4 pt-16 pb-8 mx-auto">

        <div class="md:gap-12 flex flex-col gap-6">
            <h2
                class="lg:text-[48px] md:text-[36px] text-[26px] font-bold text-[#1A1A1A]"
                x-show="shown"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:enter-start="opacity-0 -translate-y-10"
                x-transition:enter="transition transform ease-out duration-300 delay-[300ms]"
                x-transition:leave-end="opacity-0 -translate-y-10"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave="transition transform ease-in duration-300"
            >
                التعريف بالمصطلحات العلمية​
            </h2>

            <div class="md:gap-8 grid grid-cols-6 gap-6">
                <div class="col-span-6">
                    <div
                        class="md:px-6 px-4 md:py-10 py-6 bg-[#F4F4F4] w-full h-full rounded-3xl flex flex-col md:gap-12 gap-6 overflow-hidden shadow-sm"
                        x-show="shown"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:enter-start="opacity-0 -translate-y-10"
                        x-transition:enter="transition transform ease-out duration-300 delay-[600ms]"
                        x-transition:leave-end="opacity-0 -translate-y-10"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave="transition transform ease-in duration-300"
                    >
                        <h3
                            class="lg:text-[36px] md:text-[30px] text-[20px] font-bold text-[#1B1B1B] text-center"
                            x-show="shown"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:enter-start="opacity-0 -translate-y-10"
                            x-transition:enter="transition transform ease-out duration-300 delay-[700ms]"
                            x-transition:leave-end="opacity-0 -translate-y-10"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave="transition transform ease-in duration-300"
                        >
                            السلامة الكهربائية
                        </h3>

                        <p
                            class="lg:text-[26px] md:text-[22px] text-[18px] font-medium text-[#1B1B1B]"
                            x-show="shown"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:enter-start="opacity-0 -translate-y-10"
                            x-transition:enter="transition transform ease-out duration-300 delay-[800ms]"
                            x-transition:leave-end="opacity-0 -translate-y-10"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave="transition transform ease-in duration-300"
                        >
                            عبارة عن مجموعة من الإجراءات والقواعد واللوائح التي تهدف إلى حماية الأشخاص والممتلكات من
                            المخاطر الكهربائية.

                        </p>

                        <p
                            class="lg:text-[26px] md:text-[22px] text-[18px] font-medium text-[#1B1B1B]"
                            x-show="shown"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:enter-start="opacity-0 -translate-y-10"
                            x-transition:enter="transition transform ease-out duration-300 delay-[900ms]"
                            x-transition:leave-end="opacity-0 -translate-y-10"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave="transition transform ease-in duration-300"
                        >
                            وتحدد قواعد السلامة الكهربائية طرق تركيب وتشغيل وصيانة معدات السلامة الكهربائية، بالإضافة
                            إلى توفير إرشادات واضحة للحد من الحوادث الناتجة عن الصدمات الكهربائية وكشف أعطال الكهرباء.
                        </p>

                        <p
                            class="lg:text-[26px] md:text-[22px] text-[18px] font-medium text-[#1B1B1B]"
                            x-show="shown"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:enter-start="opacity-0 -translate-y-10"
                            x-transition:enter="transition transform ease-out duration-300 delay-[1000ms]"
                            x-transition:leave-end="opacity-0 -translate-y-10"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave="transition transform ease-in duration-300"
                        >
                            ويوجد العديد من المنظمات الدولية التي تعمل على وضع معايير وقواعد السلامة الكهربائية مثل
                            اللجنة الدولية الكهروتقنية، والمنظمة الدولية للتوحيد القياسي، بالإضافة إلى وكالة السلامة
                            والصحة المهنية (قراءات عربية، 2024).

                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
