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
                معلومات وإحصائيات
            </h2>

            <div class="md:gap-8 grid grid-cols-6 gap-6">
                <div class="md:col-span-3 col-span-6">
                    <div
                        class="md:px-6 px-4 md:py-10 py-6 bg-[#FFFFFF26] h-full justify-start rounded-3xl flex flex-col md:gap-12 gap-6 overflow-hidden shadow-sm"
                        x-show="shown"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:enter-start="opacity-0 -translate-y-10"
                        x-transition:enter="transition transform ease-out duration-300 delay-[600ms]"
                        x-transition:leave-end="opacity-0 -translate-y-10"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave="transition transform ease-in duration-300"
                    >
                        <p
                            class="lg:text-[24px] md:text-[20px] text-[16px] font-semibold text-white"
                            x-show="shown"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:enter-start="opacity-0 -translate-y-10"
                            x-transition:enter="transition transform ease-out duration-300 delay-[700ms]"
                            x-transition:leave-end="opacity-0 -translate-y-10"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave="transition transform ease-in duration-300"
                        >
                            هناك فرص استثمارية كبيرة في سوق المولدات الكهربائية ذات الطاقة المتوسطة والعالية في المملكة،
                            حيث يبلغ حجم الاستثمار المتوقع 40 مليون دولار أمريكي وقدرة المحطة 750 ميجاواط سنوياً
                        </p>
                    </div>
                </div>

                <div class="md:col-span-3 col-span-6">
                    <div
                        class="md:px-6 px-4 md:py-10 py-6 bg-[#FFFFFF26] h-full justify-start rounded-3xl flex flex-col md:gap-12 gap-6 overflow-hidden shadow-sm"
                        x-show="shown"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:enter-start="opacity-0 -translate-y-10"
                        x-transition:enter="transition transform ease-out duration-300 delay-[900ms]"
                        x-transition:leave-end="opacity-0 -translate-y-10"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave="transition transform ease-in duration-300"
                    >
                        <p
                            class="lg:text-[24px] md:text-[20px] text-[16px] font-semibold text-white"
                            x-show="shown"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:enter-start="opacity-0 -translate-y-10"
                            x-transition:enter="transition transform ease-out duration-300 delay-[1000ms]"
                            x-transition:leave-end="opacity-0 -translate-y-10"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave="transition transform ease-in duration-300"
                        >
                            هناك إنتاج محلي محدود من المولدات المتوسطة والكبيرة الحجم في المملكة العربية السعودية(وزارة
                            الاستثمار،2020).
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
