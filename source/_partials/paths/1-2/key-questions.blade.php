<section
    class="relative flex items-center 2xl:min-h-[730px] xl:min-h-[730px] lg:min-h-[680px] md:min-h-[540px] sm:min-h-[460px] min-h-[380px] overflow-hidden bg-white"
    id="prizes-section"
    x-data="{ shown: false }"
    x-intersect.threshold.20="shown = true"
>
    <div class="lg:px-12 md:px-8 lg:py-20 md:py-16 relative z-10 w-full h-full px-4 py-12">
        <div class="flex flex-col gap-8">
            <h2
                class="lg:text-[69px] md:text-[56px] sm:text-[48px] text-[36px] text-center font-bold text-[#1A1A1A]"
                x-show="shown"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:enter-start="opacity-0 -translate-y-10"
                x-transition:enter="transition transform ease-out duration-300 delay-[300ms]"
                x-transition:leave-end="opacity-0 -translate-y-10"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave="transition transform ease-in duration-300"
            >
                أسئلة مفتاحية
            </h2>

            <div
                class="max-w-[1048px] bg-white rounded-3xl mx-auto overflow-hidden p-4"
                x-show="shown"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:enter-start="opacity-0 -translate-y-10"
                x-transition:enter="transition transform ease-out duration-300 delay-[600ms]"
                x-transition:leave-end="opacity-0 -translate-y-10"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave="transition transform ease-in duration-300"
            >
                <img
                    class="object-scale-down object-center w-full h-full"
                    src="{{ $page->asset('images/paths/1-2/key-questions.jpg') }}"
                    alt="key-questions"
                />
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
