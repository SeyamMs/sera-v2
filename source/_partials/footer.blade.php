<section
    class="overflow-hidden bg-white relative min-h-[301px]"
    x-data="{ shown: false }"
    x-intersect.threshold.20="shown = true"
>
    <div class="container relative z-10 px-2 pt-12 pb-6 mx-auto overflow-hidden">
        <div class="flex flex-col gap-12">
            <div class="md:gap-6 grid grid-cols-8 gap-2">
                <div class="md:col-span-2 col-span-4">
                    <div
                        class="flex items-center justify-center w-full p-4"
                        x-show="shown"
                        x-transition:enter="transition transform ease-out duration-300 delay-[300ms]"
                        x-transition:enter-start="opacity-0 -translate-y-10"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition transform ease-in duration-300"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 -translate-y-10"
                    >
                        <img
                            class="md:h-24 contrast-[5] brightness-[5] object-scale-down w-full h-16"
                            src="{{ $page->asset('images/white-logo.svg') }}"
                            alt="white-logo"
                        />
                    </div>
                </div>
                <div class="md:col-span-2 col-span-4">
                    <div
                        class="flex items-center justify-center w-full p-4"
                        x-show="shown"
                        x-transition:enter="transition transform ease-out duration-300 delay-[600ms]"
                        x-transition:enter-start="opacity-0 -translate-y-10"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition transform ease-in duration-300"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 -translate-y-10"
                    >
                        <img
                            class="md:h-24 contrast-[5] brightness-[5] object-scale-down w-full h-16"
                            src="{{ $page->asset('images/electrathon-logo.svg') }}"
                            alt="logo"
                        />
                    </div>
                </div>
                <div class="md:col-span-2 col-span-4">
                    <div
                        class="flex items-center justify-center w-full p-4"
                        x-show="shown"
                        x-transition:enter="transition transform ease-out duration-300 delay-[900ms]"
                        x-transition:enter-start="opacity-0 -translate-y-10"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition transform ease-in duration-300"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 -translate-y-10"
                    >
                        <img
                            class="md:h-24 contrast-[5] brightness-[5] object-scale-down w-full h-16"
                            src="{{ $page->asset('images/partners/arweqah-logo.png') }}"
                            alt="arweqah-logo"
                        />
                    </div>
                </div>
                <div class="md:col-span-2 col-span-4">
                    <div
                        class="flex items-center justify-center w-full p-4"
                        x-show="shown"
                        x-transition:enter="transition transform ease-out duration-300 delay-[1200ms]"
                        x-transition:enter-start="opacity-0 -translate-y-10"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition transform ease-in duration-300"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 -translate-y-10"
                    >
                        <img
                            class="md:h-24 contrast-[5] brightness-[5] object-scale-down w-full h-16"
                            src="{{ $page->asset('images/partners/samawah-logo.png') }}"
                            alt="samawah-logo"
                        />
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-6">
                <div
                    class="h-px w-full bg-[#ffffff20]"x-show="shown"
                    x-transition:enter="transition transform ease-out duration-300 delay-[1400ms]"
                    x-transition:enter-start="opacity-0 -translate-y-10"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition transform ease-in duration-300"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 -translate-y-10"
                ></div>

                <p
                    class="text-sm text-center text-white"
                    x-show="shown"
                    x-transition:enter="transition transform ease-out duration-300 delay-[1700ms]"
                    x-transition:enter-start="opacity-0 -translate-y-10"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition transform ease-in duration-300"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 -translate-y-10"
                >
                    جميع الحقوق محفوظة &copy;
                    <span
                        x-data
                        x-text="new Date().getFullYear()"
                    ></span>
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
</section>
