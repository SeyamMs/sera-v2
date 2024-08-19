@php
    $paths = [
        [
            'title' => 'التقنيون والمهندسون <br/> والمتخصصون في قطاع الكهرباء',
            'image' => 'images/targets-1.jpg',
            'col_class' => '',
            'wrapper_class' => 'lg:ml-0 ml-auto mr-auto',
        ],
        [
            'title' => 'الرواد ومطوري الأعمال',
            'image' => 'images/targets-2.jpg',
            'col_class' => 'xl:order-none lg:order-last',
            'wrapper_class' => 'xl:ml-auto lg:ml-0 ml-auto mr-auto',
        ],
        [
            'title' => 'الباحثون والطلاب الجامعيين',
            'image' => 'images/targets-3.jpg',
            'col_class' => '',
            'wrapper_class' => 'lg:mr-0 ml-auto mr-auto',
        ],
    ];
@endphp

<section
    class="relative flex items-center xl:min-h-[919px] lg:min-h-[1513px] md:min-h-[1934px] sm:min-h-[1464px] min-h-[1536px] overflow-hidden bg-white"
    x-data="{ shown: false }"
    x-intersect.threshold.20="shown = true"
>
    <div class="lg:px-12 md:px-8 lg:py-20 md:py-16 relative z-10 w-full h-full px-4 py-12">
        <div class="md:gap-14 flex flex-col gap-8">

            <h2
                class="lg:text-[94px] md:text-[84px] text-[48px] text-center font-semibold text-[#1A1A1A]"
                x-show="shown"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:enter-start="opacity-0 -translate-y-10"
                x-transition:enter="transition transform ease-out duration-300 delay-[300ms]"
                x-transition:leave-end="opacity-0 -translate-y-10"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave="transition transform ease-in duration-300"
            >
                الفئات المستهدفة
            </h2>

            <div class="grid grid-cols-6 gap-8">

                @foreach ($paths as $index => $path)
                    <div class="xl:col-span-2 lg:col-span-3 col-span-6 {{ $path['col_class'] }}">
                        <div
                            class="rounded-3xl w-full h-full lg:min-h-[562px] md:min-h-[520px] min-h-[400px] relative flex items-end justify-start overflow-hidden {{ $path['wrapper_class'] }}">

                            <div class="relatve xl:px-6 lg:px-3 md:px-4 md:py-8 sm:px-6 sm:py-10 z-10 px-4 py-8">
                                <h3
                                    class="text-white lg:text-[32px] md:text-[30px] sm:text-[26px] text-[22px] leading-[45px] font-semibold text-start"
                                    x-show="shown"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    x-transition:enter-start="opacity-0 -translate-y-10"
                                    x-transition:enter="transition transform ease-out duration-300 delay-[{{ $loop->iteration * 800 }}ms]"
                                    x-transition:leave-end="opacity-0 -translate-y-10"
                                    x-transition:leave-start="opacity-100 translate-y-0"
                                    x-transition:leave="transition transform ease-in duration-300"
                                >
                                    {!! $path['title'] !!}
                                </h3>
                            </div>

                            <div
                                class=" absolute z-0 flex w-full h-full"
                                x-show="shown"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:enter-start="opacity-0 -translate-y-10"
                                x-transition:enter="transition transform ease-out duration-300 delay-[{{ $loop->iteration * 600 }}ms]"
                                x-transition:leave-end="opacity-0 -translate-y-10"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave="transition transform ease-in duration-300"
                            >
                                <img
                                    class="object-cover object-center w-full h-full"
                                    src="{{ $page->asset($path['image']) }}"
                                    alt="{{ str($path['image'])->before('.')->after('/') }}"
                                />
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <div
        class="absolute top-0 left-0 z-0 w-full h-full bg-no-repeat bg-center bg-opacity-10 bg-[url('https://seyamms.github.io/sera-v2/assets/images/circles.svg')]">
    </div>
</section>
