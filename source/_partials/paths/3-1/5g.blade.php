<section
    class="relative flex min-h-[592px] items-center overflow-hidden bg-[#230C44]"
    x-data="{ shown: false }"
    x-intersect.threshold.20="shown = true"
>
    <div class="container relative w-full h-full px-4 pt-16 pb-8 mx-auto">
        <div class="xl:gap-16 md:gap-12 grid grid-cols-6 gap-8">
            <div class="md:col-span-2 flex-grow col-span-6">
                <div class="rounded-3xl relative w-full h-full max-h-[600px] overflow-hidden">
                    <div
                        class="rounded-3xl relative z-10 w-full h-full overflow-hidden"
                        x-show="shown"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:enter-start="opacity-0 -translate-y-10"
                        x-transition:enter="transition transform ease-out duration-300 delay-[1100ms]"
                        x-transition:leave-end="opacity-0 -translate-y-10"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave="transition transform ease-in duration-300"
                    >

                        <img
                            class="object-cover object-center w-full h-full"
                            src="{{ $page->asset('images/paths/3-1/5g.jpg') }}"
                            alt="{{ str('images/paths/3-1/5g.jpg')->before('.')->afterLast('/') }}"
                        />

                    </div>
                </div>
            </div>

            <div class="md:col-span-4 flex-grow col-span-6">
                <div class="md:gap-10 relative z-30 flex flex-col w-full h-full gap-6">
                    <div
                        class="md:px-6 px-4 md:py-10 py-6 bg-[#FFFFFF26] rounded-3xl w-full h-full flex flex-col lg:gap-16 md:gap-12 gap-6 overflow-hidden shadow-sm"
                        x-show="shown"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:enter-start="opacity-0 -translate-y-10"
                        x-transition:enter="transition transform ease-out duration-300 delay-[600ms]"
                        x-transition:leave-end="opacity-0 -translate-y-10"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave="transition transform ease-in duration-300"
                    >
                        <h2
                            class="lg:text-[38px] md:text-[32px] text-[22px] font-bold text-white text-center"
                            x-show="shown"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:enter-start="opacity-0 -translate-y-10"
                            x-transition:enter="transition transform ease-out duration-300 delay-[300ms]"
                            x-transition:leave-end="opacity-0 -translate-y-10"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave="transition transform ease-in duration-300"
                        >
                            السياسات التقنية القائمة على تقنية الجيل الخامس
                        </h2>

                        <p
                            class="lg:text-[24px] md:text-[20px] text-[18px] font-semibold text-justify text-white"
                            x-show="shown"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:enter-start="opacity-0 -translate-y-10"
                            x-transition:enter="transition transform ease-out duration-300 delay-[800ms]"
                            x-transition:leave-end="opacity-0 -translate-y-10"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave="transition transform ease-in duration-300"
                        >
                            يتمثّل أحد الركائز الاستراتيجية لاستراتيجية الطيف الترددي 2025 في تعزيز الاستخدامات التجارية
                            والابتكارية (Drive 5G+)، حيث أنها ستزيد نشر شبكة 5G+، بما يجعل المملكة في مصاف الدول الرائدة
                            في فتح المجال أمام التطبيقات وحالات الاستخدام المبتكرة عالية الأداء بالاستفادة من تقنية
                            الجيل الخامس. مع التركيز على منح الجهات المشغّلة فرصة الوصول الفوري والكافي إلى الطيف
                            الترددي بالشكل الذي يُمكّنهم من تحقيق أهداف جودة الخدمة من حيث توفّر خدمات الاتصالات
                            المتنقلة وتكلفتها وتغطيتها، وذلك بهدف نشر شبكات خاصة من الجيل الخامس لجميع مجالات القطاعات."
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="bg-opacity-10 absolute top-0 left-0 z-0 w-full h-full">
        <img
            class="object-cover object-center w-full h-full"
            src="{{ $page->asset('images/sera-section.jpg') }}"
            alt="sera-section"
        />
    </div>
</section>
