<section
    class="relative flex min-h-[592px] items-center overflow-hidden bg-white"
    x-data="{ shown: false }"
    x-intersect.threshold.20="shown = true"
>
    <div class="container relative w-full h-full px-4 pt-16 pb-6 mx-auto">
        <div class="xl:gap-16 md:gap-12 grid grid-cols-6 gap-8">

            <div class="md:col-span-3 flex-grow col-span-6">
                <div
                    class="rounded-3xl relative w-full 2xl:pl-36 xl:pl-20 lg:pl-12 h-full max-h-[700px] overflow-hidden">
                    <div
                        class="rounded-3xl relative w-full h-full overflow-hidden"
                        x-show="shown"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:enter-start="opacity-0 -translate-y-10"
                        x-transition:enter="transition transform ease-out duration-300 delay-[1100ms]"
                        x-transition:leave-end="opacity-0 -translate-y-10"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave="transition transform ease-in duration-300"
                    >

                        <img
                            class="object-cover object-center w-full h-full lg:object-[70%] md:object-[60%]"
                            src="{{ $page->asset('images/about-section.png') }}"
                            alt="about-section"
                        />

                    </div>
                </div>
            </div>

            <div class="md:col-span-3 col-span-6">
                <div class="md:gap-10 relative z-30 flex flex-col gap-6">
                    <h2
                        class="lg:text-[48px] md:text-[36px] text-[28px] font-semibold text-[#1A1A1A]"
                        x-show="shown"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:enter-start="opacity-0 -translate-y-10"
                        x-transition:enter="transition transform ease-out duration-300 delay-[300ms]"
                        x-transition:leave-end="opacity-0 -translate-y-10"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave="transition transform ease-in duration-300"
                    >
                        نبذة عن التحدي
                    </h2>

                    <div
                        class="md:px-6 px-4 md:py-10 py-6 bg-[#EBEBEBCC] rounded-[14px] overflow-hidden shadow-sm"
                        x-show="shown"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:enter-start="opacity-0 -translate-y-10"
                        x-transition:enter="transition transform ease-out duration-300 delay-[600ms]"
                        x-transition:leave-end="opacity-0 -translate-y-10"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave="transition transform ease-in duration-300"
                    >
                        <p
                            class="lg:text-[26px] md:text-[24px] text-[18px] text-justify text-[#1A1A1A]"
                            x-show="shown"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:enter-start="opacity-0 -translate-y-10"
                            x-transition:enter="transition transform ease-out duration-300 delay-[800ms]"
                            x-transition:leave-end="opacity-0 -translate-y-10"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave="transition transform ease-in duration-300"
                        >
                            ذوو الإعاقة هم فئة من فئات المجتمع المتعددة، لهم احتياجاتهم التي تتطلب وجود بعض المعايير
                            والمقومات الخاصة، ومن ذلك حاجتهم لارتداء ثياب ملائمة بمعايير صحية ونفسية وجمالية تُلبي
                            متطلباتهم، تكمن المشكلة في عدم قدرة ذوي الإعاقة الحصول على هذه الثياب لندرتها، وفي سبيل
                            إتاحتها للجميع خاصة ذوي الإعاقات الشديدة، فإن قضية هذا التحدي تتمحور حول إيجاد حلول
                            ابتكارية لتوفير ملابس تُناسب نمط حياتهم.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
