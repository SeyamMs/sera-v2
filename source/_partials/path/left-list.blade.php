<section
    class="relative flex min-h-[516px] items-center overflow-hidden bg-white"
    id="about-section"
    x-data="{ shown: false }"
    x-intersect.threshold.20="shown = true"
>
    <div class="container relative w-full h-full px-4 py-8 mx-auto">
        <div class="xl:gap-16 md:gap-12 grid grid-cols-6 gap-8">
            <div class="md:col-span-3 flex-grow col-span-6">
                <div
                    class="rounded-3xl relative w-full 2xl:pl-36 xl:pl-20 lg:pl-12 h-full max-h-[700px] overflow-hidden">
                    <div
                        class="rounded-3xl relative w-full h-full overflow-hidden"
                        x-show="shown"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:enter-start="opacity-0 -translate-y-10"
                        x-transition:enter="transition transform ease-out duration-300 delay-[300ms]"
                        x-transition:leave-end="opacity-0 -translate-y-10"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave="transition transform ease-in duration-300"
                    >

                        <img
                            class="object-cover object-center w-full h-full"
                            src="{{ $page->asset($data['image']) }}"
                            alt="{{ str($data['image'])->before('.')->afterLast('/') }}"
                        />

                    </div>
                </div>
            </div>

            <div class="md:col-span-3 col-span-6">
                <div class="md:gap-10 relative z-30 flex flex-col gap-6">
                    <h2
                        class="lg:text-[48px] md:text-[36px] text-[28px] font-semibold text-[#1A1A1A]"
                        x-show="shown"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:enter-start="opacity-0 -translate-y-10"
                        x-transition:enter="transition transform ease-out duration-300 delay-[600ms]"
                        x-transition:leave-end="opacity-0 -translate-y-10"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave="transition transform ease-in duration-300"
                    >
                        {{ $data['title'] }}
                    </h2>

                    <div class="flex flex-col gap-6">
                        @foreach ($data['list'] as $item)
                            <div
                                class="md:px-6 py-4 px-8 bg-[#EBEBEBCC] rounded-[14px] overflow-hidden shadow-sm"
                                x-show="shown"
                                x-transition:enter-end="opacity-100 translate-x-0"
                                x-transition:enter-start="opacity-0 -translate-x-10"
                                x-transition:enter="transition transform ease-out duration-300 delay-[{{ $loop->iteration * 300 + 300 }}ms]"
                                x-transition:leave-end="opacity-0 -translate-x-10"
                                x-transition:leave-start="opacity-100 translate-x-0"
                                x-transition:leave="transition transform ease-in duration-300"
                            >
                                <p
                                    class="lg:text-[26px] md:text-[24px] text-[18px] text-justify text-[#1A1A1A]"
                                    x-show="shown"
                                    x-transition:enter-end="opacity-100 translate-x-0"
                                    x-transition:enter-start="opacity-0 -translate-x-10"
                                    x-transition:enter="transition transform ease-out duration-300 delay-[{{ $loop->iteration * 300 + 500 }}ms]"
                                    x-transition:leave-end="opacity-0 -translate-x-10"
                                    x-transition:leave-start="opacity-100 translate-x-0"
                                    x-transition:leave="transition transform ease-in duration-300"
                                >
                                    {{ $item }}
                                </p>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
