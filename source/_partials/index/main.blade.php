<section
    class="relative flex flex-col h-screen min-h-[30rem] items-center overflow-hidden bg-primary-950"
    x-data="{ shown: false }"
    x-intersect.threshold.20="shown = true"
>
    {{-- fixed navbar --}}
    <div class="fixed w-full">
        <div class="lg:p-4 container relative p-2 mx-auto mb-8">
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
                            src="{{ $page->asset('images/white-logo.svg') }}"
                            alt="white-logo"
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
                            <button
                                class="md:text-sm flex-shrink-0 p-2 text-xs text-white"
                                x-data
                                x-on:click.prevent="$scroll('#about-section', {behavior: 'smooth', offset: -1})"
                            >
                                التعريف بالهاكاثون
                            </button>
                            <span class="md:block flex-shrink-0 hidden w-px h-4 bg-gray-100"></span>
                            <button
                                class="md:text-sm flex-shrink-0 p-2 text-xs text-white"
                                x-data
                                x-on:click.prevent="$scroll('#goals-section', {behavior: 'smooth', offset: -1})"
                            >
                                الاهداف
                            </button>
                            <span class="md:block flex-shrink-0 hidden w-px h-4 bg-gray-100"></span>
                            <button
                                class="md:text-sm flex-shrink-0 p-2 text-xs text-white"
                                x-data
                                x-on:click.prevent="$scroll('#paths-section', {behavior: 'smooth', offset: -1})"
                            >
                                المسارات
                            </button>
                            <span class="md:block flex-shrink-0 hidden w-px h-4 bg-gray-100"></span>
                            <button
                                class="md:text-sm flex-shrink-0 p-2 text-xs text-white"
                                x-data
                                x-on:click.prevent="$scroll('#prizes-section', {behavior: 'smooth', offset: -1})"
                            >
                                الجوائز
                            </button>
                            <div class="w-28 lg:flex items-center hidden h-8">
                                <button
                                    class="text-lg group hover:bg-[#6d5d8250] hover:ring-2 hover:ring-opacity-60 hover:ring-white font-semibold rounded-full flex items-center justify-between hover:justify-center p-1 h-8 w-28 bg-white hover:text-white text-[#230C44]"
                                    data-tf-popup="Z2f34azw"
                                >
                                    <div class="flex justify-center flex-grow">
                                        <span class="md:text-sm text-xs">
                                            انضم الينا
                                        </span>
                                    </div>
                                    <div
                                        class="group-hover:hidden flex shrink-0 items-center justify-center size-7 rounded-full bg-[#230C44]">
                                        <img
                                            class="w-4"
                                            src="{{ $page->asset('images/icons/lamp-light.svg') }}"
                                            alt="lamp-light"
                                        />
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div
                        class="md:block hidden w-40"
                        x-show="shown"
                        x-transition:enter-end="opacity-100 translate-x-0"
                        x-transition:enter-start="opacity-0 -translate-x-10"
                        x-transition:enter="transition transform ease-out duration-300 delay-[600ms]"
                        x-transition:leave-end="opacity-0 -translate-x-10"
                        x-transition:leave-start="opacity-100 translate-x-0"
                        x-transition:leave="transition transform ease-in duration-300"
                    >
                        <img
                            class="object-scale-down w-full h-full"
                            src="{{ $page->asset('images/electrathon-logo.svg') }}"
                            alt="electrathod-logo"
                        />
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- navbar --}}
    {{-- <div class="lg:p-4 container relative p-2 mx-auto mb-8">
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
                        src="{{ $page->asset('images/white-logo.svg') }}"
                        alt="white-logo"
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
                        <button
                            class="md:text-sm flex-shrink-0 p-2 text-xs text-white"
                            x-data
                            x-on:click.prevent="$scroll('#about-section', {behavior: 'smooth', offset: -1})"
                        >
                            التعريف بالهاكاثون
                        </button>
                        <span class="md:block flex-shrink-0 hidden w-px h-4 bg-gray-100"></span>
                        <button
                            class="md:text-sm flex-shrink-0 p-2 text-xs text-white"
                            x-data
                            x-on:click.prevent="$scroll('#goals-section', {behavior: 'smooth', offset: -1})"
                        >
                            الاهداف
                        </button>
                        <span class="md:block flex-shrink-0 hidden w-px h-4 bg-gray-100"></span>
                        <button
                            class="md:text-sm flex-shrink-0 p-2 text-xs text-white"
                            x-data
                            x-on:click.prevent="$scroll('#paths-section', {behavior: 'smooth', offset: -1})"
                        >
                            المسارات
                        </button>
                        <span class="md:block flex-shrink-0 hidden w-px h-4 bg-gray-100"></span>
                        <button
                            class="md:text-sm flex-shrink-0 p-2 text-xs text-white"
                            x-data
                            x-on:click.prevent="$scroll('#prizes-section', {behavior: 'smooth', offset: -1})"
                        >
                            الجوائز
                        </button>
                        <div class="w-28 lg:flex items-center hidden h-8">
                            <button
                                class="text-lg group hover:bg-[#6d5d8250] hover:ring-2 hover:ring-opacity-60 hover:ring-white font-semibold rounded-full flex items-center justify-between hover:justify-center p-1 h-8 w-28 bg-white hover:text-white text-[#230C44]"
                                data-tf-popup="Z2f34azw"
                            >
                                <div class="flex justify-center flex-grow">
                                    <span class="md:text-sm text-xs">
                                        انضم الينا
                                    </span>
                                </div>
                                <div
                                    class="group-hover:hidden flex shrink-0 items-center justify-center size-7 rounded-full bg-[#230C44]">
                                    <img
                                        class="w-4"
                                        src="{{ $page->asset('images/icons/lamp-light.svg') }}"
                                        alt="lamp-light"
                                    />
                                </div>
                            </button>
                        </div>
                    </div>
                </div>

                <div
                    class="md:block hidden w-40"
                    x-show="shown"
                    x-transition:enter-end="opacity-100 translate-x-0"
                    x-transition:enter-start="opacity-0 -translate-x-10"
                    x-transition:enter="transition transform ease-out duration-300 delay-[600ms]"
                    x-transition:leave-end="opacity-0 -translate-x-10"
                    x-transition:leave-start="opacity-100 translate-x-0"
                    x-transition:leave="transition transform ease-in duration-300"
                >
                    <img
                        class="object-scale-down w-full h-full"
                        src="{{ $page->asset('images/electrathon-logo.svg') }}"
                        alt="electrathod-logo"
                    />
                </div>
            </div>
        </div>

    </div> --}}

    {{-- main section --}}
    <div class="py-14 lg:px-12 md:px-8 relative z-10 w-full h-full px-4">
        <div class="flex flex-col items-start justify-end h-full">
            <div
                class="mb-6"
                x-show="shown"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:enter-start="opacity-0 -translate-y-10"
                x-transition:enter="transition transform ease-out duration-300 delay-[1200ms]"
                x-transition:leave-end="opacity-0 -translate-y-10"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave="transition transform ease-in duration-300"
            >
                <img
                    class="object-scale-down w-full h-full"
                    src="{{ $page->asset('images/white-logo.svg') }}"
                    alt="white-logo"
                />
            </div>

            <h1
                class="lg:text-[80px] md:text-[52px] text-[46px] mb-8 font-semibold text-white"
                x-show="shown"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:enter-start="opacity-0 -translate-y-10"
                x-transition:enter="transition transform ease-out duration-300 delay-[1500ms]"
                x-transition:leave-end="opacity-0 -translate-y-10"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave="transition transform ease-in duration-300"
            >
                إلكتراثون 2024
            </h1>

            <p
                class="lg:text-4xl max-w-3xl text-lg font-normal leading-10 text-white"
                x-show="shown"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:enter-start="opacity-0 -translate-y-10"
                x-transition:enter="transition transform ease-out duration-300 delay-[1800ms]"
                x-transition:leave-end="opacity-0 -translate-y-10"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave="transition transform ease-in duration-300"
            >
                فعالية محفزة للابتكار، تهدف إلى استكشاف حلول إبداعية للتحديات التي تواجه قطاع الكهرباء.
            </p>

        </div>
    </div>

    {{-- bg --}}
    <div class="bg-gradient-to-b from-primary-950 to-transparent absolute top-0 left-0 z-0 w-full h-full">
        <video
            class="object-cover w-full h-full"
            autoplay
            muted
            loop
        >
            <source
                src="{{ $page->asset('videos/main-section.mp4') }}"
                type="video/mp4"
            />
        </video>
    </div>
</section>
