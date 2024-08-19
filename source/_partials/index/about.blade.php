<section
    class="relative flex items-center min-h-[1140px] xl:min-h-[713px] lg:min-h-[812px] md:min-h-[744px] sm:min-h-[960px] overflow-hidden bg-white"
    id="about-section"
    x-data="{ shown: false }"
    x-intersect.threshold.20="shown = true"
>
    <div class="lg:px-12 md:px-8 lg:py-20 md:py-16 relative w-full h-full px-4 py-12">
        <div class="md:gap-16 grid grid-cols-6 gap-12">
            <div class="md:col-span-3 col-span-6">
                <div class="relative z-30 flex flex-col gap-10">
                    <div class="flex flex-col gap-8">
                        <h2
                            class="lg:text-[70px] md:text-[62px] text-[48px] font-semibold text-[#1A1A1A]"
                            x-show="shown"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:enter-start="opacity-0 -translate-y-10"
                            x-transition:enter="transition transform ease-out duration-300 delay-[300ms]"
                            x-transition:leave-end="opacity-0 -translate-y-10"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave="transition transform ease-in duration-300"
                        >
                            عن إلكتراثون 2024
                        </h2>

                        <div class="flex flex-col gap-4">
                            <p
                                class="lg:text-[34px] md:text-[28px] text-[24px] text-justify text-[#1A1A1A]"
                                x-show="shown"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:enter-start="opacity-0 -translate-y-10"
                                x-transition:enter="transition transform ease-out duration-300 delay-[600ms]"
                                x-transition:leave-end="opacity-0 -translate-y-10"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave="transition transform ease-in duration-300"
                            >
                                إلكتراثون الهيئة السعودية لتنظيم الكهرباء
                                (SERA)
                                منافسة وطنية للمبتكرين والمطورين
                                والمهتمين في قطاع الكهرباء، بهدف إيجاد إلى التكامل لإيجاد حلول إبداعية للتحديات التي
                                تواجه هذا
                                القطاع.
                            </p>
                        </div>
                    </div>

                    <div class="h-16">
                        <button
                            class="lg:text-2xl text-lg group hover:bg-gray-100 hover:ring-8 hover:ring-opacity-60 hover:ring-gray-300 font-semibold rounded-full inline-flex items-center justify-center p-2 h-20 hover:px-20 bg-[#230C44] text-white hover:text-[#230C44]"
                            data-tf-popup="Z2f34azw"
                            x-show="shown"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:enter-start="opacity-0 -translate-y-10"
                            x-transition:enter="transition transform ease-out duration-300 delay-[900ms]"
                            x-transition:leave-end="opacity-0 -translate-y-10"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave="transition transform ease-in duration-300"
                        >
                            <span class="px-6">
                                سجل الان
                            </span>
                            <div
                                class="group-hover:hidden flex items-center justify-center size-[60px] rounded-full bg-[#F5F9FA]">
                                <img
                                    src="{{ $page->asset('images/icons/lamp-dark.svg') }}"
                                    alt="lamp-dark"
                                />
                            </div>
                        </button>
                    </div>
                </div>
            </div>

            <div class="md:col-span-3 flex-grow col-span-6">
                <div class="rounded-3xl relative w-full h-full min-h-[500px] max-h-[700px] pt-1 overflow-hidden">
                    <div
                        class="absolute top-0 left-0 z-10 w-[255px] h-[124px]"
                        x-show="shown"
                        x-transition:enter-end="opacity-100 translate-x-0"
                        x-transition:enter-start="opacity-0 -translate-x-10"
                        x-transition:enter="transition transform ease-out duration-300 delay-[1500ms]"
                        x-transition:leave-end="opacity-0 -translate-x-10"
                        x-transition:leave-start="opacity-100 translate-x-0"
                        x-transition:leave="transition transform ease-in duration-300"
                    >
                        <img
                            class="object-cover object-left-top w-full h-full"
                            src="{{ $page->asset('images/saudi-flag.png') }}"
                            alt="saudi-flag"
                        />
                    </div>
                    <div
                        class="rounded-3xl relative w-full h-full overflow-hidden"
                        x-show="shown"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:enter-start="opacity-0 -translate-y-10"
                        x-transition:enter="transition transform ease-out duration-300 delay-[1200ms]"
                        x-transition:leave-end="opacity-0 -translate-y-10"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave="transition transform ease-in duration-300"
                    >
                        <div class="absolute top-0 left-0 z-0 w-full h-full">
                            <img
                                class="object-cover object-center w-full h-full lg:object-[70%] md:object-[60%]"
                                src="{{ $page->asset('images/about-section.jpg') }}"
                                alt="about-section"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
