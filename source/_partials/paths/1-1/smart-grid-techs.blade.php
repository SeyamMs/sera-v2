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
                    تقنيات الشبكة الذكية
                </h2>
            </div>


            <div class="xl:gap-8 md:gap-6 grid grid-cols-6 gap-4">

                <div class="lg:col-span-3 col-span-6">
                    <div
                        class="lg:ml-0 mr-auto ml-auto bg-[#00B4AE] p-4 rounded-full aspect-square 2xl:w-[620px] xl:w-[600px] lg:w-[450px] md:w-[520px] sm:w-[450px] w-[310px] flex flex-col items-center justify-center md:gap-8 gap-4 overflow-hidden shadow-sm"
                        x-show="shown"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:enter-start="opacity-0 -translate-y-10"
                        x-transition:enter="transition transform ease-out duration-300 delay-[600ms]"
                        x-transition:leave-end="opacity-0 -translate-y-10"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave="transition transform ease-in duration-300"
                    >
                        <div
                            class="aspect-square 2xl:w-48 xl:w-44 lg:w-32 md:w-36 sm:w-32 w-16"
                            x-show="shown"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:enter-start="opacity-0 -translate-y-10"
                            x-transition:enter="transition transform ease-out duration-300 delay-[700ms]"
                            x-transition:leave-end="opacity-0 -translate-y-10"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave="transition transform ease-in duration-300"
                        >
                            <img
                                class="object-scale-down object-center w-full h-full"
                                src="{{ $page->asset('images/paths/1-1/smart-grid-techs-1.png') }}"
                                alt="smart-grid-techs-1"
                            />
                        </div>

                        <div class="w-[500px]">
                            <p
                                class="xl:text-[26px] lg:text-[18px] md:text-[20px] sm:text-[18px] text-[12px] font-medium text-center text-black"
                                x-show="shown"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:enter-start="opacity-0 -translate-y-10"
                                x-transition:enter="transition transform ease-out duration-300 delay-[900ms]"
                                x-transition:leave-end="opacity-0 -translate-y-10"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave="transition transform ease-in duration-300"
                            >
                                تتيح هذه الأنظمة اتصال ثنائي الاتجاه بين مزودي
                                <br>
                                الطاقة والمستهلكين، مما يسمح بإدارة وكفاءة الطاقة
                                <br>
                                بشكل أفضل. فهي تساعد على تقليل استخدام
                                <br>
                                الطاقة أوقات الذروة، وتمنع انقطاع التيار الكهربائي،
                                <br>
                                وتوفر المال الذي تنفقه على فواتير الطاقة.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-3 col-span-6">
                    <div
                        class="lg:mr-0 mr-auto ml-auto bg-[#133F6C] p-4 rounded-full aspect-square 2xl:w-[620px] xl:w-[600px] lg:w-[450px] md:w-[520px] sm:w-[450px] w-[310px] flex flex-col items-center justify-center md:gap-8 gap-4 overflow-hidden shadow-sm"
                        x-show="shown"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:enter-start="opacity-0 -translate-y-10"
                        x-transition:enter="transition transform ease-out duration-300 delay-[1000ms]"
                        x-transition:leave-end="opacity-0 -translate-y-10"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave="transition transform ease-in duration-300"
                    >
                        <div
                            class="aspect-square 2xl:w-48 xl:w-44 lg:w-32 md:w-36 sm:w-32 w-16"
                            x-show="shown"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:enter-start="opacity-0 -translate-y-10"
                            x-transition:enter="transition transform ease-out duration-300 delay-[1100ms]"
                            x-transition:leave-end="opacity-0 -translate-y-10"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave="transition transform ease-in duration-300"
                        >
                            <img
                                class="object-scale-down object-center w-full h-full"
                                src="{{ $page->asset('images/paths/1-1/smart-grid-techs-2.png') }}"
                                alt="smart-grid-techs-2"
                            />
                        </div>

                        <div class="w-[500px]">
                            <p
                                class="xl:text-[26px] lg:text-[18px] md:text-[20px] sm:text-[18px] text-[12px] font-medium text-center text-white"
                                x-show="shown"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:enter-start="opacity-0 -translate-y-10"
                                x-transition:enter="transition transform ease-out duration-300 delay-[1200ms]"
                                x-transition:leave-end="opacity-0 -translate-y-10"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave="transition transform ease-in duration-300"
                            >
                                تعمل الشبكات الذكية على تمكين المستهلكين من
                                <br>
                                لعب دور نشط في إدارة استهلاكهم للطاقة، بتوفير
                                <br>
                                بيانات في الوقت الفعلي وتسعير مرن بناءً على
                                <br>
                                ساعات الذروة EcoMENA, 2024)).
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>
