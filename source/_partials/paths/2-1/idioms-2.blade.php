<section
    class="relative flex min-h-[990px] items-center overflow-hidden bg-white"
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
                <div class="md:col-span-3 col-span-6">
                    <div
                        class="md:px-6 px-4 md:py-10 py-6 bg-[#F4F4F4] w-full rounded-3xl flex flex-col md:gap-12 gap-6 overflow-hidden shadow-sm"
                        x-show="shown"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:enter-start="opacity-0 -translate-y-10"
                        x-transition:enter="transition transform ease-out duration-300 delay-[600ms]"
                        x-transition:leave-end="opacity-0 -translate-y-10"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave="transition transform ease-in duration-300"
                    >
                        <div
                            class="aspect-square 2xl:w-48 xl:w-44 lg:w-32 md:w-36 sm:w-32 w-16 mx-auto"
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
                            هو مصدر للطاقة الكهربائية الآلية للسعة المطلوبة والمدة اللازمة لتشغيل المباني أو المواد
                            الخطرة أو أنظمة التهوية في حالة انقطاع الخدمة الكهربائية، أنظمة الطاقة الاحتياطية مطلوبة
                            للأحمال الكهربائية حيث يمكن أن يؤدي انقطاع الطاقة الأساسية إلى خلق مخاطر أو إعاقة عمليات
                            الإنقاذ أو عمليات مكافحة الحريق (كود البناء السعودي العام،2018).
                        </p>
                    </div>
                </div>

                <div class="md:col-span-3 col-span-6">
                    <div
                        class="md:px-6 px-4 md:py-10 py-6 bg-[#F4F4F4] w-full rounded-3xl flex flex-col md:gap-12 gap-6 overflow-hidden shadow-sm"
                        x-show="shown"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:enter-start="opacity-0 -translate-y-10"
                        x-transition:enter="transition transform ease-out duration-300 delay-[900ms]"
                        x-transition:leave-end="opacity-0 -translate-y-10"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave="transition transform ease-in duration-300"
                    >
                        <div
                            class="aspect-square 2xl:w-48 xl:w-44 lg:w-32 md:w-36 sm:w-32 w-16 mx-auto"
                            x-show="shown"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:enter-start="opacity-0 -translate-y-10"
                            x-transition:enter="transition transform ease-out duration-300 delay-[1000ms]"
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

                        <p
                            class="lg:text-[26px] md:text-[22px] text-[18px] font-medium text-[#1B1B1B]"
                            x-show="shown"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:enter-start="opacity-0 -translate-y-10"
                            x-transition:enter="transition transform ease-out duration-300 delay-[1100ms]"
                            x-transition:leave-end="opacity-0 -translate-y-10"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave="transition transform ease-in duration-300"
                        >
                            تواجه المولدات الاحتياطية في المملكة عدة تحديات رئيسية، أبرزها الاعتماد الكبير على الوقود
                            الأحفوري مما يؤدي إلى انبعاثات كربونية عالية وتأثيرات بيئية سلبية. الكفاءة المنخفضة في
                            استهلاك الوقود تزيد من التكاليف التشغيلية والبيئية. هناك أيضاً تحديات في الصيانة المستمرة
                            والاعتمادية، حيث قد تعاني المولدات من الفشل أو التعطل في أوقات الطوارئ. بالإضافة إلى ذلك،
                            توجد صعوبة في دمج هذه المولدات مع مصادر الطاقة المتجددة، وتواجه بعض الجهات تكاليف أولية
                            مرتفعة لتركيب حلول أكثر استدامة. كل هذه التحديات تتطلب حلولاً مبتكرة لتحسين كفاءة واستدامة
                            المولدات الاحتياطية بما يتماشى مع أهداف رؤية 2030 ecomena,2023)).

                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
