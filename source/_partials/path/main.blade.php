<section
    class="bg-primary-950 flex w-full min-h-[510px] overflow-hidden relative"
    x-data="{ shown: false, showFixed: window.scrollY > 410 }"
    x-intersect.threshold.20="shown = true"
    x-on:scroll.window="showFixed = window.scrollY > 410"
>
    <div
        class="fixed top-0 right-0 z-50 w-full"
        id="fixedNav"
        :class="{ 'bg-[#0F0F0F]': showFixed }"
    >
        <div class="lg:px-4 lg:py-6 container relative px-2 py-3 mx-auto">
            <div class="relative z-10 flex w-full">
                <div class="md:justify-between flex justify-center w-full gap-4">
                    <div
                        class="md:block hidden w-40"
                        x-show="shown"
                        x-transition:enter-end="opacity-100 translate-x-0"
                        x-transition:enter-start="opacity-0 translate-x-10"
                        x-transition:enter="transition transform ease-out duration-300 delay-[300ms]"
                        x-transition:leave-end="opacity-0 translate-x-10"
                        x-transition:leave-start="opacity-100 translate-x-0"
                        x-transition:leave="transition transform ease-in duration-300"
                    >
                        <img
                            class="object-scale-down w-full h-full"
                            src="{{ $page->asset('images/electrathon-logo.svg') }}"
                            alt="electrathod-logo"
                        />
                    </div>

                    <div
                        class="bg-opacity-15 backdrop-blur rounded-xl md:p-3 lg:p-4 flex p-2 bg-white"
                        x-show="shown"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:enter-start="opacity-0 -translate-y-10"
                        x-transition:enter="transition transform ease-out duration-300 delay-[900ms]"
                        x-transition:leave-end="opacity-0 -translate-y-10"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave="transition transform ease-in duration-300"
                    >
                        <div class="lg:gap-2 flex items-center gap-1">
                            <a
                                class="md:text-sm flex-shrink-0 p-2 text-xs text-white"
                                href="{{ $page->baseUrl }}/?to=about-section"
                            >
                                التعريف بالهاكاثون
                            </a>
                            <span class="md:block flex-shrink-0 hidden w-px h-4 bg-gray-100"></span>
                            <a
                                class="md:text-sm flex-shrink-0 p-2 text-xs text-white"
                                href="{{ $page->baseUrl }}/?to=goals-section"
                            >
                                الاهداف
                            </a>
                            <span class="md:block flex-shrink-0 hidden w-px h-4 bg-gray-100"></span>
                            <a
                                class="md:text-sm flex-shrink-0 p-2 text-xs text-white"
                                href="{{ $page->baseUrl }}/?to=paths-section"
                            >
                                المسارات
                            </a>
                            <span class="md:block flex-shrink-0 hidden w-px h-4 bg-gray-100"></span>
                            <a
                                class="md:text-sm flex-shrink-0 p-2 text-xs text-white"
                                href="{{ $page->baseUrl }}/?to=prizes-section"
                            >
                                الجوائز
                            </a>
                        </div>
                    </div>


                    <div class="lg:flex items-center hidden w-40 h-16">
                        <button
                            class="text-lg group hover:bg-[#6d5d8250] hover:ring-2 hover:ring-opacity-60 hover:ring-white font-semibold rounded-full flex items-center justify-between hover:justify-center p-1 h-16 w-full bg-white hover:text-white text-[#230C44]"
                            data-tf-popup="Z2f34azw"
                            x-show="shown"
                            x-transition:enter-end="opacity-100 translate-x-0"
                            x-transition:enter-start="opacity-0 -translate-x-10"
                            x-transition:enter="transition transform ease-out duration-300 delay-[600ms]"
                            x-transition:leave-end="opacity-0 -translate-x-10"
                            x-transition:leave-start="opacity-100 translate-x-0"
                            x-transition:leave="transition transform ease-in duration-300"
                        >
                            <span class="px-4">
                                سجل الان
                            </span>
                            <div
                                class="group-hover:hidden flex items-center justify-center size-[50px] rounded-full bg-[#230C44] group-hover:bg-[#F5F9FA]">
                                <img
                                    src="{{ $page->asset('images/icons/lamp-light.svg') }}"
                                    alt="lamp-light"
                                />
                            </div>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="fixed top-0 right-0 flex flex-col w-full min-h-[510px]">
        <div class="flex flex-col flex-grow w-full h-full">
            <div
                class="py-14 lg:px-12 md:px-8 relative z-10 flex items-end justify-center flex-grow w-full h-full px-4">
                <h1
                    class="lg:text-[70px] md:text-[48px] text-[36px] max-w-screen-md mx-auto text-center mb-8 font-semibold text-white"
                    x-show="shown"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:enter-start="opacity-0 -translate-y-10"
                    x-transition:enter="transition transform ease-out duration-300 delay-[1500ms]"
                    x-transition:leave-end="opacity-0 -translate-y-10"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave="transition transform ease-in duration-300"
                >
                    {{ $title }}
                </h1>

            </div>
        </div>

        <div class="absolute top-0 left-0 z-0 w-full h-full">
            <div class="bg-opacity-10 absolute top-0 left-0 z-0 w-full h-full">
                <img
                    class="object-cover object-center w-full h-full"
                    src="{{ $page->asset($image) }}"
                    alt="{{ str($image)->before('.')->afterLast('/') }}"
                />
            </div>
        </div>
        {{-- <div class="bg-black/40 absolute top-0 left-0 z-0 w-full h-full"></div> --}}
    </div>
</section>
