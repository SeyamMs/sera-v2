<section
    class="relative flex min-h-[700px] items-center overflow-hidden bg-[#230C44]"
    x-data="{ shown: false }"
    x-intersect.threshold.20="shown = true"
>
    <div class="container relative w-full h-full px-4 pt-16 pb-8 mx-auto">

        <div class="md:gap-12 flex flex-col gap-6">
            <h2
                class="lg:text-[48px] md:text-[36px] text-[26px] font-bold text-white text-center"
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
                        class="md:px-6 px-4 md:py-10 py-6 bg-[#FFFFFF26] h-full rounded-3xl flex flex-col md:gap-12 gap-6 overflow-hidden shadow-sm"
                        x-show="shown"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:enter-start="opacity-0 -translate-y-10"
                        x-transition:enter="transition transform ease-out duration-300 delay-[600ms]"
                        x-transition:leave-end="opacity-0 -translate-y-10"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave="transition transform ease-in duration-300"
                    >
                        <h3
                            class="lg:text-[38px] md:text-[32px] text-[22px] font-bold text-white text-center"
                            x-show="shown"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:enter-start="opacity-0 -translate-y-10"
                            x-transition:enter="transition transform ease-out duration-300 delay-[700ms]"
                            x-transition:leave-end="opacity-0 -translate-y-10"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave="transition transform ease-in duration-300"
                        >
                            كفاءة الطاقة
                        </h3>

                        <p
                            class="lg:text-[24px] md:text-[20px] text-[16px] font-semibold text-white"
                            x-show="shown"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:enter-start="opacity-0 -translate-y-10"
                            x-transition:enter="transition transform ease-out duration-300 delay-[800ms]"
                            x-transition:leave-end="opacity-0 -translate-y-10"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave="transition transform ease-in duration-300"
                        >
                            هي العملية التي تتضمن استخدام كمية أقل من الطاقة الكهربائية للحصول على المنتج نفسه أو الخدمة
                            ذاتها من خلال الترشيد عبر القيام بمجموعة من الاجراءات والوسائل الهدف منها خفض استهلاك الطاقة
                            وتحسين كفاءة استخدامها بما لا يؤثر على مستوى أداء الخدمة الكهربائية (هيئة تنظيم قطاع المعادن
                            والطاقة بالمملكة الأردنية الهاشمية، 2024).
                        </p>
                    </div>
                </div>

                <div class="md:col-span-3 col-span-6">
                    <div
                        class="md:px-6 px-4 md:py-10 py-6 bg-[#FFFFFF26] h-full rounded-3xl flex flex-col md:gap-12 gap-6 overflow-hidden shadow-sm"
                        x-show="shown"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:enter-start="opacity-0 -translate-y-10"
                        x-transition:enter="transition transform ease-out duration-300 delay-[900ms]"
                        x-transition:leave-end="opacity-0 -translate-y-10"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave="transition transform ease-in duration-300"
                    >
                        <h3
                            class="lg:text-[38px] md:text-[32px] text-[22px] font-bold text-white text-center"
                            x-show="shown"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:enter-start="opacity-0 -translate-y-10"
                            x-transition:enter="transition transform ease-out duration-300 delay-[1000ms]"
                            x-transition:leave-end="opacity-0 -translate-y-10"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave="transition transform ease-in duration-300"
                        >
                            تخزين الطاقة
                        </h3>

                        <p
                            class="lg:text-[24px] md:text-[20px] text-[16px] font-semibold text-white"
                            x-show="shown"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:enter-start="opacity-0 -translate-y-10"
                            x-transition:enter="transition transform ease-out duration-300 delay-[1100ms]"
                            x-transition:leave-end="opacity-0 -translate-y-10"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave="transition transform ease-in duration-300"
                        >
                            •يشير إلى تجميع الطاقة في وقت واحد لاستخدامها لاحقا في الأوقات التي تعاني من تقلبات في
                            معدلات الطلب على الطاقة، أو التي تعاني نقصا في إنتاجها باستخدام البطاريات أو بطاريات تخزينية
                            قابلة للشحن، يمكن لأجهزة التخزين توفير الطاقة بأشكال عديدة (مثل الكيميائية أو الحركية أو
                            الحرارية) وتحويلها مرة أخرى إلى أشكال مفيدة من الطاقة مثل الكهرباء  (أكاديمية الطاقة
                            الألمانية،2022)
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
