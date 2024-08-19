<section
    class="relative flex items-center min-h-[908px] overflow-hidden bg-white"
    id="goals-section"
    x-data="{ shown: false }"
    x-intersect.threshold.20="shown = true"
>
    <div class="lg:px-12 md:px-8 lg:py-20 md:py-16 relative z-10 w-full h-full px-4 py-12">
        <div class="md:gap-16 grid grid-cols-6 gap-12">
            <div class="md:col-span-3 flex-grow col-span-6">
                <div class="rounded-3xl relative w-full h-full min-h-[400px] max-h-[700px] overflow-hidden">
                    <div
                        class="absolute top-8 right-10 z-10 w-[240px] h-[80px] bg-no-repeat bg-center bg-contain bg-[url('https://seyamms.github.io/sera-v2/assets/images/white-logo.svg')]"
                        x-show="shown"
                        x-transition:enter-end="opacity-100 translate-x-0"
                        x-transition:enter-start="opacity-0 translate-x-10"
                        x-transition:enter="transition transform ease-out duration-300 delay-[1000ms]"
                        x-transition:leave-end="opacity-0 translate-x-10"
                        x-transition:leave-start="opacity-100 translate-x-0"
                        x-transition:leave="transition transform ease-in duration-300"
                    >
                    </div>
                    <div
                        class="rounded-3xl relative w-full h-full overflow-hidden"
                        x-show="shown"
                        x-transition:enter-end="opacity-100 translate-x-0"
                        x-transition:enter-start="opacity-0 translate-x-10"
                        x-transition:enter="transition transform ease-out duration-300 delay-[600ms]"
                        x-transition:leave-end="opacity-0 translate-x-10"
                        x-transition:leave-start="opacity-100 translate-x-0"
                        x-transition:leave="transition transform ease-in duration-300"
                    >
                        <video
                            class="absolute top-0 left-0 z-0 object-cover w-full h-full"
                            poster="{{ $page->asset('videos/goals-section.jpg') }}"
                            autoplay
                            muted
                            loop
                        >
                            <source
                                src="{{ $page->asset('videos/goals-section.mp4') }}"
                                type="video/mp4"
                            />
                        </video>

                    </div>
                </div>
            </div>

            <div class="md:col-span-3 col-span-6">
                <div class="relative z-30 flex flex-col gap-10">
                    <div class="flex flex-col gap-16">
                        <h2
                            class="lg:text-[80px] md:text-[72px] text-[40px] font-semibold text-[#1A1A1A]"
                            x-show="shown"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:enter-start="opacity-0 -translate-y-10"
                            x-transition:enter="transition transform ease-out duration-300 delay-[300ms]"
                            x-transition:leave-end="opacity-0 -translate-y-10"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave="transition transform ease-in duration-300"
                        >
                            أهداف الهاكاثون
                        </h2>

                        <div class="flex flex-col gap-16">
                            <div class="flex items-start max-w-md gap-6">
                                <div class="flex items-center justify-center">
                                    <h3
                                        class="font-medium text-4xl text-[#1A1A1A33]"
                                        x-show="shown"
                                        x-transition:enter-end="opacity-100 translate-x-0"
                                        x-transition:enter-start="opacity-0 translate-x-10"
                                        x-transition:enter="transition transform ease-out duration-300 delay-[600ms]"
                                        x-transition:leave-end="opacity-0 translate-x-10"
                                        x-transition:leave-start="opacity-100 translate-x-0"
                                        x-transition:leave="transition transform ease-in duration-300"
                                    >
                                        01
                                    </h3>
                                </div>
                                <div class="flex flex-col gap-5">
                                    <h3
                                        class="font-medium md:text-5xl text-3xl text-[#1A1A1A]"
                                        x-show="shown"
                                        x-transition:enter-end="opacity-100 translate-x-0"
                                        x-transition:enter-start="opacity-0 translate-x-10"
                                        x-transition:enter="transition transform ease-out duration-300 delay-[700ms]"
                                        x-transition:leave-end="opacity-0 translate-x-10"
                                        x-transition:leave-start="opacity-100 translate-x-0"
                                        x-transition:leave="transition transform ease-in duration-300"
                                    >
                                        التعزيز والتمكين
                                    </h3>
                                    <h4
                                        class="font-normal md:text-xl text-lg text-[#1A1A1A] text-justify"
                                        x-show="shown"
                                        x-transition:enter-end="opacity-100 translate-x-0"
                                        x-transition:enter-start="opacity-0 translate-x-10"
                                        x-transition:enter="transition transform ease-out duration-300 delay-[800ms]"
                                        x-transition:leave-end="opacity-0 translate-x-10"
                                        x-transition:leave-start="opacity-100 translate-x-0"
                                        x-transition:leave="transition transform ease-in duration-300"
                                    >
                                        تمكين وتعزيز الاستثمار في قطاع الكهرباء.
                                    </h4>
                                </div>
                            </div>

                            <div class="flex items-start max-w-md gap-6">
                                <div class="flex items-center justify-center">
                                    <h3
                                        class="font-medium text-4xl text-[#1A1A1A33]"
                                        x-show="shown"
                                        x-transition:enter-end="opacity-100 translate-x-0"
                                        x-transition:enter-start="opacity-0 translate-x-10"
                                        x-transition:enter="transition transform ease-out duration-300 delay-[1100ms]"
                                        x-transition:leave-end="opacity-0 translate-x-10"
                                        x-transition:leave-start="opacity-100 translate-x-0"
                                        x-transition:leave="transition transform ease-in duration-300"
                                    >
                                        02
                                    </h3>
                                </div>
                                <div class="flex flex-col gap-5">
                                    <h3
                                        class="font-medium md:text-5xl text-3xl text-[#1A1A1A]"
                                        x-show="shown"
                                        x-transition:enter-end="opacity-100 translate-x-0"
                                        x-transition:enter-start="opacity-0 translate-x-10"
                                        x-transition:enter="transition transform ease-out duration-300 delay-[1200ms]"
                                        x-transition:leave-end="opacity-0 translate-x-10"
                                        x-transition:leave-start="opacity-100 translate-x-0"
                                        x-transition:leave="transition transform ease-in duration-300"
                                    >
                                        الابتكار
                                    </h3>
                                    <h4
                                        class="font-normal md:text-xl text-lg text-[#1A1A1A] text-justify"
                                        x-show="shown"
                                        x-transition:enter-end="opacity-100 translate-x-0"
                                        x-transition:enter-start="opacity-0 translate-x-10"
                                        x-transition:enter="transition transform ease-out duration-300 delay-[1300ms]"
                                        x-transition:leave-end="opacity-0 translate-x-10"
                                        x-transition:leave-start="opacity-100 translate-x-0"
                                        x-transition:leave="transition transform ease-in duration-300"
                                    >
                                        ابتكار حلول مستدامة للتحديات في قطاع الكهرباء وإبراز دور أفراد المجتمع في حل
                                        التحديات.
                                    </h4>
                                </div>
                            </div>

                            <div class="flex items-start max-w-md gap-6">
                                <div class="flex items-center justify-center">
                                    <h3
                                        class="font-medium text-4xl text-[#1A1A1A33]"
                                        x-show="shown"
                                        x-transition:enter-end="opacity-100 translate-x-0"
                                        x-transition:enter-start="opacity-0 translate-x-10"
                                        x-transition:enter="transition transform ease-out duration-300 delay-[1600ms]"
                                        x-transition:leave-end="opacity-0 translate-x-10"
                                        x-transition:leave-start="opacity-100 translate-x-0"
                                        x-transition:leave="transition transform ease-in duration-300"
                                    >
                                        03
                                    </h3>
                                </div>
                                <div class="flex flex-col gap-5">
                                    <h3
                                        class="font-medium md:text-5xl text-3xl text-[#1A1A1A]"
                                        x-show="shown"
                                        x-transition:enter-end="opacity-100 translate-x-0"
                                        x-transition:enter-start="opacity-0 translate-x-10"
                                        x-transition:enter="transition transform ease-out duration-300 delay-[1700ms]"
                                        x-transition:leave-end="opacity-0 translate-x-10"
                                        x-transition:leave-start="opacity-100 translate-x-0"
                                        x-transition:leave="transition transform ease-in duration-300"
                                    >
                                        الاستدامة
                                    </h3>
                                    <h4
                                        class="font-normal md:text-xl text-lg text-[#1A1A1A] text-justify"
                                        x-show="shown"
                                        x-transition:enter-end="opacity-100 translate-x-0"
                                        x-transition:enter-start="opacity-0 translate-x-10"
                                        x-transition:enter="transition transform ease-out duration-300 delay-[1800ms]"
                                        x-transition:leave-end="opacity-0 translate-x-10"
                                        x-transition:leave-start="opacity-100 translate-x-0"
                                        x-transition:leave="transition transform ease-in duration-300"
                                    >
                                        إيجاد كيانات استثمارية في قطاع الكهرباء.
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="md:block hidden h-20"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="absolute top-0 left-0 z-0 w-full h-full">
        <img
            class="object-cover object-center w-full h-full"
            src="{{ $page->asset('images/circles-dark.svg') }}"
            alt="circles-dark"
        />
    </div>
</section>
