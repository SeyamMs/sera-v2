@php
    $paths = [
        [
            'title' => 'بداية فترة التسجيل',
            'date' => '18',
            'month' => 'اغسطس',
            'inverted' => true,
        ],
        [
            'title' => 'نهاية فترة التسجيل',
            'date' => '31',
            'month' => 'اغسطس',
            'inverted' => false,
        ],
        [
            'title' => 'الفرز والترشيح',
            'date' => '01 - 03',
            'month' => 'سبتمبر',
            'inverted' => false,
        ],
        [
            'title' => 'إقامة إلكتراثون',
            'date' => '05 - 07',
            'month' => 'سبتمبر',
            'inverted' => true,
        ],
        [
            'title' => 'التحكيم وتكريم الفائزين',
            'date' => '07',
            'month' => 'سبتمبر',
            'inverted' => false,
        ],
    ];
@endphp

<section
    class="relative flex items-center min-h-screen overflow-hidden bg-white"
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
                رحلة إلكتراثون
            </h2>


            <div class="grid grid-cols-8 gap-6">

                @foreach ($paths as $index => $path)
                    <div class="md:col-span-5 col-span-8 {{ $loop->even ? 'md:col-end-9' : '' }}">
                        <div
                            class="{{ $path['inverted'] ? 'bg-[#230C44]' : 'bg-[#ECECECCC]' }} rounded-3xl flex items-center overflow-hidden md:p-6 p-4 md:gap-6 gap-4"
                            x-show="shown"
                            x-transition:enter-end="opacity-100 translate-x-0"
                            x-transition:enter-start="opacity-0 {{ $loop->even ? '-translate-x-10' : 'translate-x-10' }}"
                            x-transition:enter="transition transform ease-out duration-300 delay-[{{ $loop->iteration * 300 + 300 }}ms]"
                            x-transition:leave-end="opacity-0 {{ $loop->even ? '-translate-x-10' : 'translate-x-10' }}"
                            x-transition:leave-start="opacity-100 translate-x-0"
                            x-transition:leave="transition transform ease-in duration-300"
                        >

                            <div
                                class="size-16 rounded-xl flex flex-col items-center justify-center {{ $path['inverted'] ? 'bg-white' : 'bg-[#230C44]' }}"
                                x-show="shown"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:enter-start="opacity-0 -translate-y-10"
                                x-transition:enter="transition transform ease-out duration-300 delay-[{{ $loop->iteration * 300 + 500 }}ms]"
                                x-transition:leave-end="opacity-0 -translate-y-10"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave="transition transform ease-in duration-300"
                            >
                                <span
                                    class="font-bold leading-6 {{ str($path['date'])->contains('-') ? 'text-[16px]' : 'text-[26px]' }} {{ $path['inverted'] ? 'text-[#230C44]' : 'text-white' }}"
                                >
                                    {{ $path['date'] }}
                                </span>
                                <span
                                    class="text-[16px] font-bold {{ $path['inverted'] ? 'text-[#230C44]' : 'text-white' }}"
                                >
                                    {{ $path['month'] }}
                                </span>
                            </div>

                            <h3
                                class="{{ $path['inverted'] ? 'text-white' : 'text-[#1B1B1B]' }} xl:text-[34px] md:text-[24px] sm:text-[20px] text-[18px] leading-[50px] font-semibold text-center"
                                x-show="shown"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:enter-start="opacity-0 -translate-y-10"
                                x-transition:enter="transition transform ease-out duration-300 delay-[{{ $loop->iteration * 300 + 600 }}ms]"
                                x-transition:leave-end="opacity-0 -translate-y-10"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave="transition transform ease-in duration-300"
                            >
                                {!! $path['title'] !!}
                            </h3>
                        </div>
                    </div>
                @endforeach

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
