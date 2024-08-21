<section
    class="relative flex min-h-[433px] items-center overflow-hidden bg-[#230C44]"
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
                معلومات وإحصائيات متعلقة بالقضية
            </h2>

            <div class="md:gap-8 grid grid-cols-6 gap-6">
                <div class="md:col-span-4 col-span-6">
                    <div
                        class="md:px-6 px-4 md:py-10 py-6 bg-[#FFFFFF26] h-full justify-center rounded-3xl flex flex-col md:gap-12 gap-6 overflow-hidden shadow-sm"
                        x-show="shown"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:enter-start="opacity-0 -translate-y-10"
                        x-transition:enter="transition transform ease-out duration-300 delay-[600ms]"
                        x-transition:leave-end="opacity-0 -translate-y-10"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave="transition transform ease-in duration-300"
                    >
                        <h3
                            class="lg:text-[38px] md:text-[32px] text-[22px] font-bold text-white"
                            x-show="shown"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:enter-start="opacity-0 -translate-y-10"
                            x-transition:enter="transition transform ease-out duration-300 delay-[700ms]"
                            x-transition:leave-end="opacity-0 -translate-y-10"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave="transition transform ease-in duration-300"
                        >
                            البرنامج الوطني للطاقة المتجددة (NREP)
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
                            تركز هذه المبادرة الإستراتيجية طويلة المدى التي تم إطلاقها عام 2017 على تعظيم حصة مصادر
                            الطاقة المتجددة في مزيج الطاقة، ويهدف البرنامج إلى تحقيق التوازن في مزيج الطاقة المحلية
                            والوفاء بالالتزامات المتعلقة بتحقيق انبعاثات غاز ثاني أكسيد الكربون، ويخطط البرنامج الوطني
                            السعودي للطاقة المتجددة لتطوير أكثر من 35 مشروعا في جميع أنحاء المملكة بالتزامن مع النشر
                            التدريجي لقدرة 58.7 جيجاواط بحلول عام 2030 (وزارة الطاقة، 2021).
                        </p>
                    </div>
                </div>

                <div class="md:col-span-2 col-span-6">
                    <div class="flex items-center w-full h-full">
                        <div
                            class="rounded-3xl w-full overflow-hidden shadow-sm"
                            x-show="shown"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:enter-start="opacity-0 -translate-y-10"
                            x-transition:enter="transition transform ease-out duration-300 delay-[900ms]"
                            x-transition:leave-end="opacity-0 -translate-y-10"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave="transition transform ease-in duration-300"
                        >
                            <img
                                class="object-contain object-center w-full h-full"
                                src="{{ $page->asset('images/paths/2-2/info-and-stats-4.jpg') }}"
                                alt="info-and-stats-4"
                            />
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
