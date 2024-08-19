@php
    $terms = [
        'أن يكون عـمر المشـارك أكثـر من 18 سنة.',
        'أن يكون صاحب الفكرة سعودي الجنسية أو مقيماً في المملكة العربية السعوديـة.',
        'الموافقة على مشاركة البيانات الشخصية مع الهيئة السعودية لتنظيم الكهرباء وشركائها.',
        'أن تكون الفكرة واقعية وقابلة للتطبيق مع إمكانية تحويلها إلى مشروع استثماري.',
        'الموافقة على استخدام اسم المشارك وصورته الشخصية للإعلان في وسائل الإعلام المختلفة ووسائل التواصل الاجتماعي من قبل فريق العمل.',
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
                الشروط والأحكام
            </h2>


            <div class="max-w-none prose">
                <ul class="marker:text-[#1A1A1A] space-y-4 md:space-y-6">
                    @foreach ($terms as $index => $term)
                        <li
                            class="xl:text-2xl lg:text-xl md:text-lg text-base tracking-wide text-[#1A1A1A]"
                            x-show="shown"
                            x-transition:enter="transition transform ease-out duration-300 origin-right delay-[{{ $loop->iteration * 300 + 300 }}ms]"
                            x-transition:enter-start="opacity-0 translate-x-10 rotate-12"
                            x-transition:enter-end="opacity-100 translate-x-0 rotate-0"
                            x-transition:leave="transition transform ease-in duration-300"
                            x-transition:leave-start="opacity-100 translate-x-0"
                            x-transition:leave-end="opacity-0 translate-x-10"
                        >
                            {{ $term }}
                        </li>
                    @endforeach
                </ul>
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
