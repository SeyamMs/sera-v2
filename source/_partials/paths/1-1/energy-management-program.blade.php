@php
    $programs = [
        'يعمل المركز السعودي لكفاءة الطاقة على عدة مبادرات تهدف إلى زيادة كفاءة وإدارة إنتاج واستهلاك الطاقة في القطاع الصناعي الذي يستهلك حوالي 48% من الطاقة الأولية في المملكة العربية السعودية.',
        ' أطلق المركز السعودي لكفاءة الطاقة برامج تركز على بناء القدرات والتوعية العامة لتعزيز كفاءة الطاقة واعتماد أنظمة إدارة الطاقة.',
        'لا تساعد هذه الحلول المستهلكين على إدارة استخدامهم للطاقة بشكل أكثر فعالية فحسب، بل تساهم أيضًا في تحقيق الأهداف الأوسع للدولة المتمثلة في تقليل الانبعاثات وتعزيز الاستدامة (المركز السعودي لكفاءة الطاقة،2024).',
    ];
@endphp

<section
    class="relative flex items-center md:min-h-[911px] sm:min-h-[640px] min-h-[472px] overflow-hidden bg-white"
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
                برنامج إدارة الطاقة
            </h2>


            <div class="xl:gap-16 md:gap-12 grid grid-cols-6 gap-8">

                @foreach ($programs as $program)
                    <div class="lg:col-span-2 md:col-span-3 col-span-6">
                        <div
                            class="md:px-6 px-4 xl:py-16 lg:py-12 md:py-10 py-6 bg-[#A6A6A626] rounded-3xl w-full h-full flex flex-col items-center md:gap-12 gap-6 overflow-hidden shadow-sm"
                            x-show="shown"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:enter-start="opacity-0 -translate-y-10"
                            x-transition:enter="transition transform ease-out duration-300 delay-[{{ $loop->iteration * 300 + 600 }}ms]"
                            x-transition:leave-end="opacity-0 -translate-y-10"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave="transition transform ease-in duration-300"
                        >
                            <div
                                class="bg-[#2E184D] flex items-center justify-center rounded-full lg:size-32 md:size-24 size-16"
                                x-show="shown"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:enter-start="opacity-0 -translate-y-10"
                                x-transition:enter="transition transform ease-out duration-300 delay-[{{ $loop->iteration * 300 + 700 }}ms]"
                                x-transition:leave-end="opacity-0 -translate-y-10"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave="transition transform ease-in duration-300"
                            >
                                <span
                                    class="font-bold text-white lg:text-[48px] md:text-[36px] text-[24px]"
                                    x-show="shown"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    x-transition:enter-start="opacity-0 -translate-y-10"
                                    x-transition:enter="transition transform ease-out duration-300 delay-[{{ $loop->iteration * 300 + 800 }}ms]"
                                    x-transition:leave-end="opacity-0 -translate-y-10"
                                    x-transition:leave-start="opacity-100 translate-y-0"
                                    x-transition:leave="transition transform ease-in duration-300"
                                >
                                    {{ str($loop->iteration)->padLeft(2, 0) }}
                                </span>
                            </div>

                            <p
                                class="lg:text-[24px] md:text-[20px] text-[18px] font-semibold text-black"
                                x-show="shown"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:enter-start="opacity-0 -translate-y-10"
                                x-transition:enter="transition transform ease-out duration-300 delay-[{{ $loop->iteration * 300 + 900 }}ms]"
                                x-transition:leave-end="opacity-0 -translate-y-10"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave="transition transform ease-in duration-300"
                            >
                                {{ $program }}
                            </p>
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
