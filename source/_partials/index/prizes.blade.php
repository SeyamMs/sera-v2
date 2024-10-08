<section
    class="relative flex items-center md:min-h-[911px] sm:min-h-[640px] min-h-[472px] overflow-hidden bg-white"
    id="prizes-section"
    x-data="{ shown: false }"
    x-intersect.threshold.20="shown = true"
>
    <div class="lg:px-12 md:px-8 lg:py-20 md:py-16 relative z-10 w-full h-full px-4 py-12">
        <div class="flex flex-col gap-8">
            <div class="flex flex-col gap-2">
                <h2
                    class="lg:text-[48px] md:text-[32px] sm:text-[28px] text-[20px] max-w-screen-md mx-auto text-center font-medium text-[#1A1A1A]"
                    x-show="shown"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:enter-start="opacity-0 -translate-y-10"
                    x-transition:enter="transition transform ease-out duration-300 delay-[300ms]"
                    x-transition:leave-end="opacity-0 -translate-y-10"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave="transition transform ease-in duration-300"
                >
                    جوائز تتجاوز قيمتها
                    <span class="font-bold text-[#008000]">
                        100,000
                    </span>
                    ريال
                </h2>

                <h2
                    class="lg:text-[32px] md:text-[24px] sm:text-[18px] text-[14px] max-w-screen-md mx-auto text-center font-medium text-[#1A1A1A]"
                    x-show="shown"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:enter-start="opacity-0 -translate-y-10"
                    x-transition:enter="transition transform ease-out duration-300 delay-[500ms]"
                    x-transition:leave-end="opacity-0 -translate-y-10"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave="transition transform ease-in duration-300"
                >
                    بالإضافة إلى خدمات التوجيه والإرشاد مابعد الكتراثون
                </h2>
            </div>

            <div
                class="max-w-[834px] aspect-[834/503] mx-auto"
                x-show="shown"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:enter-start="opacity-0 -translate-y-10"
                x-transition:enter="transition transform ease-out duration-300 delay-[600ms]"
                x-transition:leave-end="opacity-0 -translate-y-10"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave="transition transform ease-in duration-300"
            >
                <div class="w-full h-full rounded-[40px] overflow-hidden">
                    <img
                        class="object-cover object-center w-full h-full"
                        src="{{ $page->asset('images/prizes-section.jpg') }}"
                        alt="prizes-section"
                    />
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
