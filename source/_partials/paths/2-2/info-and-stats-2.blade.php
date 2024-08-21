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
                <div class="col-span-6">
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
                                src="{{ $page->asset('images/paths/1-1/info-and-stats-3.png') }}"
                                alt="info-and-stats-3"
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
                            أدى دمج استخدامات الطاقة الشمسية بالمضخات الحرارية إلى خفض فواتير الطاقة بنسب متفاوتة تتراوح
                            بين 62% و84% خلال عام 2022، في 3 بلدان ألمانيا، إسبانيا، إيطاليا .
                            <br>
                            يؤدي الدمج بين تركيبات الطاقة الشمسية والمضخات الحرارية في الاستخدامات المنزلية إلى وفورات
                            تفوق الاعتماد لكل منها على حدة بجانب أن تحقيق التكامل بين التقنيات يوفر المزيد من إمدادات
                            الكهرباء بما يكفي لتلبية الطلب(وكالة الطاقة الشمسية بأوروبا،2023).
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
