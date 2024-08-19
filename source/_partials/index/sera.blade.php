<section
    class="relative xl:min-h-[919px] lg:min-h-[1045px] md:min-h-[923px] sm:min-h-[729px] min-h-[960px] flex items-center overflow-hidden bg-[#230C44]"
    x-data="{ shown: false }"
    x-intersect.threshold.20="shown = true"
>
    <div class="lg:px-12 md:px-8 lg:py-20 md:py-16 relative z-10 w-full h-full px-4 py-12">
        <div class="flex flex-col items-center justify-center h-full">
            <div
                class="mb-14"
                x-show="shown"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:enter-start="opacity-0 -translate-y-10"
                x-transition:enter="transition transform ease-out duration-300 delay-[300ms]"
                x-transition:leave-end="opacity-0 -translate-y-10"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave="transition transform ease-in duration-300"
            >
                <img
                    class="object-scale-down w-full h-full"
                    src="{{ $page->asset('images/vertical-white-logo.svg') }}"
                    alt="vertical-white-logo"
                />
            </div>

            <div class="gap-9 flex flex-col max-w-screen-xl mx-auto mb-12">
                <p
                    class="lg:text-[28px] md:text-[22px] text-[16px] font-medium text-white text-center"
                    x-show="shown"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:enter-start="opacity-0 -translate-y-10"
                    x-transition:enter="transition transform ease-out duration-300 delay-[600ms]"
                    x-transition:leave-end="opacity-0 -translate-y-10"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave="transition transform ease-in duration-300"
                >
                    أنشئت الهيئة بقرار مجلس الوزراء رقم (٢٣٦) في ١٤٢٢/٨/٢٧هـ، الموافق ٢٠٠١/١١/١٢م وتقوم الهيئة بمهمة
                    تنظيم نشاط الكهرباء ويشمل ذلك توليد الكهرباء والإنتاج المزدوج من أي مصدر من مصادر الطاقة، ونقل
                    الكهرباء، وتوزيعها، والمتاجرة بها، وبيعها بالتجزئة، ونشاط المشتري الرئيس، وتبريد المناطق.
                </p>

                <p
                    class="lg:text-[28px] md:text-[22px] text-[16px] font-medium text-white text-center"
                    x-show="shown"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:enter-start="opacity-0 -translate-y-10"
                    x-transition:enter="transition transform ease-out duration-300 delay-[900ms]"
                    x-transition:leave-end="opacity-0 -translate-y-10"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave="transition transform ease-in duration-300"
                >
                    وينص التنظيم على أن تقوم الهيئة بتنظيم الخدمات والإشراف عليها في نطاق اختصاصها ومراقبة أدائها،
                    والتنسيق فيما بين المؤسسات والجهات ذات العلاقة وبين الأشخاص المرخص لهم،
                    لوضع الإطار التنظيمي والإجرائي اللازم لضمان مزاولة أنشطة الخدمات عند مستويات ذات جودة وموثوقية عالية
                    وتوفيرها للمستهلك بأسعار تنافسية معقولة تحقق العدالة بين المستهلكين.
                </p>
            </div>

            <div class="flex items-center h-20">
                <a
                    class="lg:text-3xl text-lg group hover:ring-8 hover:ring-opacity-60 hover:ring-white font-semibold rounded-full flex items-center justify-center py-2 px-6 h-20 hover:px-20 bg-white text-[#230C44]"
                    href="http://sera.gov.sa/ar/"
                    target="_blank"
                    x-show="shown"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:enter-start="opacity-0 -translate-y-10"
                    x-transition:enter="transition transform ease-out duration-300 delay-[1200ms]"
                    x-transition:leave-end="opacity-0 -translate-y-10"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave="transition transform ease-in duration-300"
                >
                    <span class="px-6">
                        اعرف المزيد
                    </span>
                </a>
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
