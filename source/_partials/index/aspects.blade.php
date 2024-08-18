<section
    class="relative flex min-h-screen items-center overflow-hidden bg-[#230C44]"
    x-data="{ shown: false }"
    x-intersect.threshold.20="shown = true"
>
    <div class="lg:px-12 md:px-8 lg:py-20 md:py-16 relative z-10 w-full h-full px-4 py-12">
        <div class="md:gap-14 flex flex-col gap-8">

            <h2
                class="lg:text-[94px] md:text-[84px] text-[48px] text-center font-semibold text-white"
                x-show="shown"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:enter-start="opacity-0 -translate-y-10"
                x-transition:enter="transition transform ease-out duration-300 delay-[300ms]"
                x-transition:leave-end="opacity-0 -translate-y-10"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave="transition transform ease-in duration-300"
            >
                معايير التقييم
            </h2>

            <div class="xl:gap-32 lg:gap-24 md:gap-16 flex items-center justify-center gap-6">
                <div class="xl:gap-9 flex flex-col items-center gap-6">
                    <div
                        class="bg-white xl:size-28 p-2 flex-shrink-0 lg:size-24 md:size-20 size-18 rounded-[40px] flex items-center justify-center"
                        x-show="shown"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:enter-start="opacity-0 -translate-y-10"
                        x-transition:enter="transition transform ease-out duration-300 delay-[600ms]"
                        x-transition:leave-end="opacity-0 -translate-y-10"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave="transition transform ease-in duration-300"
                    >
                        <img
                            src="{{ $page->asset('images/icons/lamp-on.svg') }}"
                            alt="lamp-on"
                        />
                    </div>
                    <h3
                        class="xl:text-4xl lg:text-3xl md:text-2xl sm:text-lg flex-shrink-0 text-base font-semibold text-white"
                        x-show="shown"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:enter-start="opacity-0 -translate-y-10"
                        x-transition:enter="transition transform ease-out duration-300 delay-[800ms]"
                        x-transition:leave-end="opacity-0 -translate-y-10"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave="transition transform ease-in duration-300"
                    >
                        الابتكار
                    </h3>
                </div>

                <div class="xl:gap-9 flex flex-col items-center gap-6">
                    <div
                        class="bg-white xl:size-28 p-2 flex-shrink-0 lg:size-24 md:size-20 size-18 rounded-[40px] flex items-center justify-center"
                        x-show="shown"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:enter-start="opacity-0 -translate-y-10"
                        x-transition:enter="transition transform ease-out duration-300 delay-[1100ms]"
                        x-transition:leave-end="opacity-0 -translate-y-10"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave="transition transform ease-in duration-300"
                    >
                        <img
                            src="{{ $page->asset('images/icons/status-up.svg') }}"
                            alt="status-up"
                        />
                    </div>
                    <h3
                        class="xl:text-4xl lg:text-3xl md:text-2xl sm:text-lg flex-shrink-0 text-base font-semibold text-white"
                        x-show="shown"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:enter-start="opacity-0 -translate-y-10"
                        x-transition:enter="transition transform ease-out duration-300 delay-[1300ms]"
                        x-transition:leave-end="opacity-0 -translate-y-10"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave="transition transform ease-in duration-300"
                    >
                        جدوى الفكرة
                    </h3>
                </div>

                <div class="xl:gap-9 flex flex-col items-center gap-6">
                    <div
                        class="bg-white xl:size-28 p-2 flex-shrink-0 lg:size-24 md:size-20 size-18 rounded-[40px] flex items-center justify-center"
                        x-show="shown"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:enter-start="opacity-0 -translate-y-10"
                        x-transition:enter="transition transform ease-out duration-300 delay-[1600ms]"
                        x-transition:leave-end="opacity-0 -translate-y-10"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave="transition transform ease-in duration-300"
                    >
                        <img
                            src="{{ $page->asset('images/icons/profile-user.svg') }}"
                            alt="profile-user"
                        />
                    </div>
                    <h3
                        class="xl:text-4xl lg:text-3xl md:text-2xl sm:text-lg flex-shrink-0 text-base font-semibold text-white"
                        x-show="shown"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:enter-start="opacity-0 -translate-y-10"
                        x-transition:enter="transition transform ease-out duration-300 delay-[1800ms]"
                        x-transition:leave-end="opacity-0 -translate-y-10"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave="transition transform ease-in duration-300"
                    >
                        فريق العمل
                    </h3>
                </div>

            </div>
        </div>
    </div>

    <div class="absolute top-0 left-0 z-0 w-full h-full">
        <img
            class="object-cover object-center w-full h-full"
            src="{{ $page->asset('images/circles.svg') }}"
            alt="circles"
        />
    </div>
</section>
