<section
    class="relative flex min-h-screen items-center overflow-hidden bg-[#230C44]"
    id="about-section"
    x-data="{ shown: false }"
    x-intersect.threshold.20="shown = true"
>
    <div class="lg:px-12 md:px-8 lg:py-20 md:py-16 relative z-10 w-full h-full px-4 py-12">
        <div class="lg:gap-24 md:gap-16 sm:gap-10 flex flex-col items-center justify-center h-full gap-6">

            <h2
                class="lg:text-[70px] md:text-[56px] text-[44px] text-center font-semibold text-white"
                x-show="shown"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:enter-start="opacity-0 -translate-y-10"
                x-transition:enter="transition transform ease-out duration-300 delay-[300ms]"
                x-transition:leave-end="opacity-0 -translate-y-10"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave="transition transform ease-in duration-300"
            >
                العد التنازلي
            </h2>

            <div class="xl:gap-9 flex flex-col max-w-screen-xl gap-4 mx-auto">
                <div
                    class="xl:gap-14 lg:gap-8 md:gap-6 sm:gap-4 flex gap-0"
                    x-data="countdown(Date.parse('20 Aug 2024 00:00:00 +3'))"
                >
                    <div
                        class="bg-[#F4F4F4] xl:gap-4 sm:rounded-3xl rounded-none flex items-center justify-center lg:gap-3 md:gap-2 gap-1 xl:px-8 lg:px-6 md:px-4 px-2 xl:py-5 lg:py-4 md:py-3 py-2 shadow"
                        x-show="shown"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:enter-start="opacity-0 -translate-y-10"
                        x-transition:enter="transition transform ease-out duration-300 delay-[1200ms]"
                        x-transition:leave-end="opacity-0 -translate-y-10"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave="transition transform ease-in duration-300"
                    >
                        <h2
                            class="text-[#1B1B1B] xl:text-6xl lg:text-5xl md:text-3xl sm:text-xl text-sm font-extrabold text-center"
                            x-text="time().seconds"
                        ></h2>
                        <h3 class="xl:text-5xl lg:text-4xl md:text-2xl sm:text-lg text-xs font-medium text-[#1B1B1B]">
                            ثانية
                        </h3>
                    </div>

                    <div
                        class="bg-[#F4F4F4] xl:gap-4 sm:rounded-3xl rounded-none flex items-center justify-center lg:gap-3 md:gap-2 gap-1 xl:px-8 lg:px-6 md:px-4 px-2 xl:py-5 lg:py-4 md:py-3 py-2 shadow"
                        x-show="shown"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:enter-start="opacity-0 -translate-y-10"
                        x-transition:enter="transition transform ease-out duration-300 delay-[1000ms]"
                        x-transition:leave-end="opacity-0 -translate-y-10"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave="transition transform ease-in duration-300"
                    >
                        <h2
                            class="text-[#1B1B1B] xl:text-6xl lg:text-5xl md:text-3xl sm:text-xl text-sm font-extrabold text-center"
                            x-text="time().minutes"
                        ></h2>
                        <h3 class="xl:text-5xl lg:text-4xl md:text-2xl sm:text-lg text-xs font-medium text-[#1B1B1B]">
                            دقيقة
                        </h3>
                    </div>

                    <div
                        class="bg-[#F4F4F4] xl:gap-4 sm:rounded-3xl rounded-none flex items-center justify-center lg:gap-3 md:gap-2 gap-1 xl:px-8 lg:px-6 md:px-4 px-2 xl:py-5 lg:py-4 md:py-3 py-2 shadow"
                        x-show="shown"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:enter-start="opacity-0 -translate-y-10"
                        x-transition:enter="transition transform ease-out duration-300 delay-[800ms]"
                        x-transition:leave-end="opacity-0 -translate-y-10"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave="transition transform ease-in duration-300"
                    >
                        <h2
                            class="text-[#1B1B1B] xl:text-6xl lg:text-5xl md:text-3xl sm:text-xl text-sm font-extrabold text-center"
                            x-text="time().hours"
                        ></h2>
                        <h3 class="xl:text-5xl lg:text-4xl md:text-2xl sm:text-lg text-xs font-medium text-[#1B1B1B]">
                            ساعة
                        </h3>
                    </div>

                    <div
                        class="bg-[#F4F4F4] xl:gap-4 sm:rounded-3xl rounded-none flex items-center justify-center lg:gap-3 md:gap-2 gap-1 xl:px-8 lg:px-6 md:px-4 px-2 xl:py-5 lg:py-4 md:py-3 py-2 shadow"
                        x-show="shown"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:enter-start="opacity-0 -translate-y-10"
                        x-transition:enter="transition transform ease-out duration-300 delay-[600ms]"
                        x-transition:leave-end="opacity-0 -translate-y-10"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave="transition transform ease-in duration-300"
                    >
                        <h2
                            class="text-[#1B1B1B] xl:text-6xl lg:text-5xl md:text-3xl sm:text-xl text-sm font-extrabold text-center"
                            x-text="time().days"
                        ></h2>
                        <h3 class="xl:text-5xl lg:text-4xl md:text-2xl sm:text-lg text-xs font-medium text-[#1B1B1B]">
                            يوم
                        </h3>
                    </div>
                </div>

                <div class="flex items-center justify-center gap-3">
                    <div
                        class="xl:size-10 md:size-8 sm:size-6 size-4"
                        x-show="shown"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:enter-start="opacity-0 -translate-y-10"
                        x-transition:enter="transition transform ease-out duration-300 delay-[1500ms]"
                        x-transition:leave-end="opacity-0 -translate-y-10"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave="transition transform ease-in duration-300"
                    >
                        <img
                            src="{{ $page->asset('images/icons/location.svg') }}"
                            alt="location"
                        />
                    </div>
                    <h3
                        class="text-white font-bold xl:text-[32px] md:text-[28px] sm:text-[22px] text-[18px]"
                        x-show="shown"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:enter-start="opacity-0 -translate-y-10"
                        x-transition:enter="transition transform ease-out duration-300 delay-[1700ms]"
                        x-transition:leave-end="opacity-0 -translate-y-10"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave="transition transform ease-in duration-300"
                    >
                        مدينة الرياض
                    </h3>
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
