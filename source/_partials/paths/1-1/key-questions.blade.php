<section
    class="relative flex lg:min-h-[533px] md:min-h-[400px] min-h-[360px] items-center overflow-hidden bg-[#230C44]"
    x-data="{ shown: false }"
    x-intersect.threshold.20="shown = true"
>
    <div class="lg:px-12 md:px-8 lg:py-20 md:py-16 relative z-10 w-full h-full px-4 py-12">
        <div class="lg:gap-14 md:gap-10 flex flex-col items-center justify-center h-full gap-6">

            <h2
                class="lg:text-[48px] md:text-[40px] text-[34px] text-center font-semibold text-white"
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
                class="max-w-[1048px] bg-white rounded-3xl overflow-hidden p-4"
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
                    src="{{ $page->asset('images/paths/1-1/key-questions.jpg') }}"
                    alt="key-questions"
                />
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
