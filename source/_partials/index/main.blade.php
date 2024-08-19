<section
    class="relative flex flex-col h-screen min-h-[600px] items-center overflow-hidden bg-primary-950"
    x-data="{ shown: false, showFixed: window.scrollY > 115 }"
    x-intersect.threshold.20="shown = true"
>
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

    <div class="bg-gradient-to-b from-primary-950 to-transparent absolute top-0 left-0 z-0 w-full h-full">
        <video
            class="object-cover w-full h-full"
            poster="{{ $page->asset('videos/main-section.jpg') }}"
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
