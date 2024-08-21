<section
    class="relative flex min-h-[592px] items-center overflow-hidden bg-white"
    x-data="{ shown: false }"
    x-intersect.threshold.20="shown = true"
>
    <div class="container relative w-full h-full px-4 pt-16 pb-8 mx-auto">
        <div class="xl:gap-16 md:gap-12 grid grid-cols-6 gap-8">

            <div class="md:col-span-3 flex-grow col-span-6">
                <div class="md:gap-10 relative z-30 flex flex-col w-full h-full gap-6">
                    <div
                        class="md:px-6 px-4 md:py-10 py-6 bg-[#A6A6A626] rounded-3xl w-full h-full flex flex-col lg:gap-16 md:gap-12 gap-6 overflow-hidden shadow-sm"
                        x-show="shown"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:enter-start="opacity-0 -translate-y-10"
                        x-transition:enter="transition transform ease-out duration-300 delay-[600ms]"
                        x-transition:leave-end="opacity-0 -translate-y-10"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave="transition transform ease-in duration-300"
                    >
                        <h2
                            class="lg:text-[38px] md:text-[32px] text-[22px] font-bold text-black text-center"
                            x-show="shown"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:enter-start="opacity-0 -translate-y-10"
                            x-transition:enter="transition transform ease-out duration-300 delay-[300ms]"
                            x-transition:leave-end="opacity-0 -translate-y-10"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave="transition transform ease-in duration-300"
                        >
                            الروبوتات والأتمتة
                        </h2>

                        <p
                            class="lg:text-[24px] md:text-[20px] text-[18px] font-semibold text-justify text-black"
                            x-show="shown"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:enter-start="opacity-0 -translate-y-10"
                            x-transition:enter="transition transform ease-out duration-300 delay-[800ms]"
                            x-transition:leave-end="opacity-0 -translate-y-10"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave="transition transform ease-in duration-300"
                        >
                            يشغل مجال الروبوتات والأتمتة حيزًا كبيرًا من جدول أعمال الحكومة السعودية بما يتفق مع الجهود
                            والمبادرات واللوائح والإطار المؤسسي للذكاء الاصطناعي وإنترنت الأشياء والبيانات الضخمة. وسبق
                            أن أنشأت المملكة مؤسسات متخصّصة، مثل: الهيئة السعودية للبيانات والذكاء الاصطناعي والمركز
                            الوطني للذكاء الاصطناعي ومكتب إدارة البيانات الوطنية، كما اعتمدت إطارًا تنظيميًا لاستخدام
                            الروبوتات والأتمتة (اللوائح المؤقتة لحوكمة البيانات الوطنية والإطار التنظيمي لإنترنت
                            الأشياء)
                        </p>
                    </div>
                </div>
            </div>

            <div class="md:col-span-3 flex-grow col-span-6">
                <div class="rounded-3xl relative w-full h-full max-h-[600px] overflow-hidden">
                    <div
                        class="rounded-3xl relative z-10 w-full h-full overflow-hidden"
                        x-show="shown"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:enter-start="opacity-0 -translate-y-10"
                        x-transition:enter="transition transform ease-out duration-300 delay-[1100ms]"
                        x-transition:leave-end="opacity-0 -translate-y-10"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave="transition transform ease-in duration-300"
                    >

                        <img
                            class="object-cover object-center w-full h-full"
                            src="{{ $page->asset('images/paths/3-1/bot.jpg') }}"
                            alt="{{ str('images/paths/3-1/bot.jpg')->before('.')->afterLast('/') }}"
                        />

                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="bg-opacity-10 absolute top-0 left-0 z-0 w-full h-full">
        <img
            class="object-cover object-center w-full h-full"
            src="{{ $page->asset('images/circles-dark.svg') }}"
            alt="circles-dark"
        />
    </div>
</section>
