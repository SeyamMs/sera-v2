@php
    $partners1 = [
        // [
        //     'title' => 'الشريك الريادي',
        //     'inverted' => false,
        //     'partner' => 'monshaat-logo',
        //     'image' => 'images/partners/monshaat-logo.png',
        //     'url' => 'https://www.monshaat.gov.sa/ar',
        // ],
        [
            'title' => 'الشريك الريادي',
            'inverted' => false,
            'partner' => 'lunment-logo',
            'image' => 'images/partners/lunment-logo.png',
            'url' => 'https://lunment.net',
        ],
        // [
        //     'title' => 'الشريك الريادي',
        //     'inverted' => false,
        //     'partner' => 'dulani-logo',
        //     'image' => 'images/partners/dulani-logo.webp',
        //     'url' => 'https://www.dulani.gov.sa',
        // ],
    ];
    $partners2 = [
        [
            'title' => 'الشريك الفني',
            'inverted' => false,
            'partner' => 'arweqah-logo',
            'image' => 'images/partners/arweqah-logo.png',
            'url' => 'https://arweqah.sa',
        ],
        [
            'title' => 'الشريك الاعلامي',
            'inverted' => true,
            'partner' => 'samawah-logo',
            'image' => 'images/partners/samawah-logo.png',
            'url' => 'https://samawah.com.sa',
        ],
    ];
@endphp

<section
    class="relative flex items-center min-h-screen overflow-hidden bg-white"
    x-data="{ shown: false }"
    x-intersect.threshold.20="shown = true"
>
    <div class="lg:px-12 md:px-8 lg:py-20 md:py-16 relative w-full h-full px-4 py-12">
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
                الشركاء
            </h2>

            <div class="gap-14 flex flex-col">
                <div class="flex flex-wrap items-center justify-center max-w-screen-xl gap-12 mx-auto">
                    @foreach ($partners1 as $partner)
                        <a
                            class="flex"
                            href="{{ $partner['url'] }}"
                            target="_blank"
                            x-show="shown"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:enter-start="opacity-0 -translate-y-10"
                            x-transition:enter="transition transform ease-out duration-300 delay-[{{ $loop->iteration * 300 + 300 }}ms]"
                            x-transition:leave-end="opacity-0 -translate-y-10"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave="transition transform ease-in duration-300"
                        >
                            <div class="flex flex-col items-start justify-center flex-shrink-0 gap-6">
                                <h3 class="text-[22px] text-[#1B1B1B] font-bold">
                                    {{ $partner['title'] }}
                                </h3>
                                <div
                                    class="md:w-80 w-64 h-48 py-4 px-8 rounded-md {{ $partner['inverted'] ? 'bg-[#230C44] hover:bg-primary' : 'border border-gray-100 hover:bg-primary-100' }}">
                                    <img
                                        class="object-scale-down w-full h-full"
                                        src="{{ $page->asset($partner['image']) }}"
                                        alt="{{ $partner['partner'] }}"
                                    />
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>

                <div class="flex flex-wrap items-center justify-center max-w-screen-xl gap-12 mx-auto">
                    @foreach ($partners2 as $partner)
                        <a
                            class="flex"
                            href="{{ $partner['url'] }}"
                            target="_blank"
                            x-show="shown"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:enter-start="opacity-0 -translate-y-10"
                            x-transition:enter="transition transform ease-out duration-300 delay-[{{ $loop->iteration * 300 + 1200 }}ms]"
                            x-transition:leave-end="opacity-0 -translate-y-10"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave="transition transform ease-in duration-300"
                        >
                            <div class="flex flex-col items-start justify-center flex-shrink-0 gap-6">
                                <h3 class="text-[22px] text-[#1B1B1B] font-bold">
                                    {{ $partner['title'] }}
                                </h3>
                                <div
                                    class="md:w-80 w-64 h-48 py-4 rounded-md {{ $partner['inverted'] ? 'bg-[#230C44] hover:bg-primary px-16' : 'border border-gray-100 hover:bg-primary-100 px-8' }}">
                                    <img
                                        class="object-scale-down w-full h-full"
                                        src="{{ $page->asset($partner['image']) }}"
                                        alt="{{ $partner['partner'] }}"
                                    />
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>

                <div
                    class=""
                    x-show="shown"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:enter-start="opacity-0 -translate-y-10"
                    x-transition:enter="transition transform ease-out duration-300 delay-[1800ms]"
                    x-transition:leave-end="opacity-0 -translate-y-10"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave="transition transform ease-in duration-300"
                >
                    <p class="lg:text-[22px] md:text-[16px] text-[12px] font-bold text-center text-[#1B1B1B]">
                        بإشراف فريق ( البحث والابتكار )
                        <br />
                        بالهيئة السعودية لتنظيم الكهرباء
                    </p>
                </div>
            </div>

        </div>
    </div>


</section>
