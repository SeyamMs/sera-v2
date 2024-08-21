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
                معلومات وإحصائيات
            </h2>


            <div class="xl:gap-16 md:gap-12 grid grid-cols-6 gap-8">

                <div class="lg:col-span-2 md:col-span-3 col-span-6">
                    <div
                        class="md:px-6 px-4 xl:py-16 lg:py-12 md:py-10 py-6 bg-[#A6A6A626] rounded-3xl w-full h-full flex flex-col md:gap-12 gap-6 overflow-hidden shadow-sm"
                        x-show="shown"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:enter-start="opacity-0 -translate-y-10"
                        x-transition:enter="transition transform ease-out duration-300 delay-[600ms]"
                        x-transition:leave-end="opacity-0 -translate-y-10"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave="transition transform ease-in duration-300"
                    >
                        <div
                            class="aspect-[128/161] lg:w-[128px] md:w-[100px] w-[80px] mx-auto"
                            x-show="shown"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:enter-start="opacity-0 -translate-y-10"
                            x-transition:enter="transition transform ease-out duration-300 delay-[700ms]"
                            x-transition:leave-end="opacity-0 -translate-y-10"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave="transition transform ease-in duration-300"
                        >
                            <img
                                class="object-cover object-center w-full h-full"
                                src="{{ $page->asset('images/paths/1-1/info-and-stats-1.png') }}"
                                alt="info-and-stats-1"
                            />
                        </div>

                        <p
                            class="lg:text-[24px] md:text-[20px] text-[18px] font-semibold text-black"
                            x-show="shown"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:enter-start="opacity-0 -translate-y-10"
                            x-transition:enter="transition transform ease-out duration-300 delay-[800ms]"
                            x-transition:leave-end="opacity-0 -translate-y-10"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave="transition transform ease-in duration-300"
                        >
                            وفقًا لتقرير Salesforce، أن 80% من المستهلكين حول العالم يعتبروا التفاعل حول الخدمة التي
                            تقدمها أي شركة لا تقل أهمية عن منتجاتها وخدماتهاKelly James,2022)).
                        </p>
                    </div>
                </div>

                <div class="lg:col-span-2 md:col-span-3 col-span-6">
                    <div
                        class="md:px-6 px-4 xl:py-16 lg:py-12 md:py-10 py-6 bg-[#A6A6A626] rounded-3xl w-full h-full flex flex-col md:gap-12 gap-6 overflow-hidden shadow-sm"
                        x-show="shown"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:enter-start="opacity-0 -translate-y-10"
                        x-transition:enter="transition transform ease-out duration-300 delay-[900ms]"
                        x-transition:leave-end="opacity-0 -translate-y-10"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave="transition transform ease-in duration-300"
                    >
                        <div
                            class="aspect-[128/161] lg:w-[128px] md:w-[100px] w-[80px] mx-auto"
                            x-show="shown"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:enter-start="opacity-0 -translate-y-10"
                            x-transition:enter="transition transform ease-out duration-300 delay-[1000ms]"
                            x-transition:leave-end="opacity-0 -translate-y-10"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave="transition transform ease-in duration-300"
                        >
                            <img
                                class="object-cover object-center w-full h-full"
                                src="{{ $page->asset('images/paths/1-1/info-and-stats-2.png') }}"
                                alt="info-and-stats-2"
                            />
                        </div>

                        <p
                            class="lg:text-[24px] md:text-[20px] text-[18px] font-semibold text-black"
                            x-show="shown"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:enter-start="opacity-0 -translate-y-10"
                            x-transition:enter="transition transform ease-out duration-300 delay-[1100ms]"
                            x-transition:leave-end="opacity-0 -translate-y-10"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave="transition transform ease-in duration-300"
                        >
                            وفقا لاستطلاع رأي لشركة mckinsey موجه لعملاء المرافق السكنية في أمريكا الشمالية، شهدت
                            المرافق التي حافظت على الرضا الرقمي أو حسنته ارتفاعًا في رضا المستهلكين بشكل عام بمعدل
                            2%، في حين شهدت تلك التي انخفضت انخفاضًا بنسبة 1% mckinsey,2021)).
                        </p>
                    </div>
                </div>

                <div class="lg:col-span-2 md:col-span-3 col-span-6">
                    <div
                        class="md:px-6 px-4 xl:py-16 lg:py-12 md:py-10 py-6 bg-[#A6A6A626] rounded-3xl w-full h-full flex flex-col md:gap-12 gap-6 overflow-hidden shadow-sm"
                        x-show="shown"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:enter-start="opacity-0 -translate-y-10"
                        x-transition:enter="transition transform ease-out duration-300 delay-[1200ms]"
                        x-transition:leave-end="opacity-0 -translate-y-10"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave="transition transform ease-in duration-300"
                    >
                        <div
                            class="aspect-[128/161] lg:w-[128px] md:w-[100px] w-[80px] mx-auto"
                            x-show="shown"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:enter-start="opacity-0 -translate-y-10"
                            x-transition:enter="transition transform ease-out duration-300 delay-[1300ms]"
                            x-transition:leave-end="opacity-0 -translate-y-10"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave="transition transform ease-in duration-300"
                        >
                            <img
                                class="object-cover object-center w-full h-full"
                                src="{{ $page->asset('images/paths/1-1/info-and-stats-3.png') }}"
                                alt="info-and-stats-3"
                            />
                        </div>

                        <p
                            class="lg:text-[24px] md:text-[20px] text-[18px] font-semibold text-black"
                            x-show="shown"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:enter-start="opacity-0 -translate-y-10"
                            x-transition:enter="transition transform ease-out duration-300 delay-[1400ms]"
                            x-transition:leave-end="opacity-0 -translate-y-10"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave="transition transform ease-in duration-300"
                        >
                            اعتبارًا من عام 2023، تم تركيب ملايين العدادات الذكية، لتغطي جزءًا كبيرًا من المستهلكين في
                            جميع أنحاء المملكة العربية السعودية، تتيح العدادات الذكية المستهلكين من مراقبة استهلاكهم
                            للطاقة في الوقت الفعلي. تساعد هذه المبادرة في تقليل هدر الطاقة وتحسين دقة الفواتير
                            oxfordbusinessgroup,2023)).
                        </p>
                    </div>
                </div>

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
