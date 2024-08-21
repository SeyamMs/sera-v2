<section
    class="relative bg-white lg:min-h-[533px] md:min-h-[400px] min-h-[360px]"
    x-data="{ shown: false }"
    x-intersect.threshold.20="shown = true"
>
    <div
        class="container w-full h-full p-4 px-4 pt-16 pb-8 mx-auto"
        x-show="shown"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:enter-start="opacity-0 -translate-y-10"
        x-transition:enter="transition transform ease-out duration-300 delay-[300ms]"
        x-transition:leave-end="opacity-0 -translate-y-10"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave="transition transform ease-in duration-300"
    >
        <div class="relative flex items-center rounded-[32px] overflow-hidden">
            <div class="lg:px-12 md:px-8 lg:py-20 md:py-16 relative z-10 w-full h-full px-4 py-12">
                <div class="lg:gap-14 md:gap-10 flex flex-col items-center justify-center h-full gap-6">

                    <div class="lg:gap-14 md:gap-10 flex items-center justify-center gap-6">
                        <div
                            class="aspect-[128/161] lg:w-[128px] md:w-[100px] w-[80px]"
                            x-show="shown"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:enter-start="opacity-0 -translate-y-10"
                            x-transition:enter="transition transform ease-out duration-300 delay-[600ms]"
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

                        <h2
                            class="lg:text-[48px] md:text-[40px] text-[34px] text-center font-semibold text-white"
                            x-show="shown"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:enter-start="opacity-0 -translate-y-10"
                            x-transition:enter="transition transform ease-out duration-300 delay-[700ms]"
                            x-transition:leave-end="opacity-0 -translate-y-10"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave="transition transform ease-in duration-300"
                        >
                            التقنيات الناشئة
                        </h2>
                    </div>

                    <div class="max-w-[1048px]">
                        <p
                            class="text-white font-medium lg:text-[28px] md:text-[22px] text-[18px] text-center"
                            x-show="shown"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:enter-start="opacity-0 -translate-y-10"
                            x-transition:enter="transition transform ease-out duration-300 delay-[800ms]"
                            x-transition:leave-end="opacity-0 -translate-y-10"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave="transition transform ease-in duration-300"
                        >
                            مصطلح يستخدم لوصف تقنية حديثة مبنية على نتائج أبحاث علمية ، أو تطوير على تقنية حالية، تتسم
                            بجانب
                            الإبداعي وبسرعة التطوير، والتي من المتوقع أن تكون متاحة في غضون السنوات الخمس إلى العشر
                            القادمة،
                            وعادة ما يكون لها تأثيرات اجتماعية أواقتصادية كبيرة (غسان النويمي،2020).
                        </p>
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
        </div>
    </div>
</section>
