<section
    class="bg-primary-950 flex w-full min-h-[510px] overflow-hidden relative"
    x-data="{ shown: false, showFixed: window.scrollY > 410 }"
    x-intersect.threshold.20="shown = true"
    x-on:scroll.window="showFixed = window.scrollY > 410"
>

    <div class="fixed top-0 right-0 flex flex-col w-full min-h-[510px]">
        <div class="flex flex-col flex-grow w-full h-full">
            <div
                class="py-14 lg:px-12 md:px-8 md:items-end relative z-10 flex items-center justify-center flex-grow w-full h-full px-4">
                <h1
                    class="lg:text-[70px] md:text-[48px] text-[36px] max-w-screen-md mx-auto text-center font-semibold text-white"
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
