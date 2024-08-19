<section class="relative overflow-hidden bg-white">
    <div class="md:gap-6 flex flex-col gap-3 py-6">
        <div
            class="embla"
            x-data="{ embla: null, disableClick: true }"
            x-init="() => {
                embla = EmblaCarousel($refs.viewport, { watchDrag: false, slidesToScroll: 2, startIndex: 0, loop: false, containScroll: false, direction: 'rtl' }, [EmblaCarousel.AutoPlay({ stopOnInteraction: false, stopOnFocusIn: false, delay: 3000 })])
            }"
        >
            <div x-ref="viewport">
                <div class="flex-nowrap md:gap-8 flex gap-4">
                    <div
                        class="border-s-[3px] px-1 flex-shrink-0 flex border-[#913AFF] bg-gradient-to-r from-[#913AFF52] to-[#913AFF0A]">
                        <h2 class="md:text-[54px] sm:text-5xl text-4xl font-medium">فاعلية محفزة</h2>
                    </div>

                    <div
                        class="border-s-[3px] px-1 flex-shrink-0 flex border-[#0F9DED] bg-gradient-to-r from-[#0F9DED52] to-[#0F9DED0A]">
                        <h2 class="md:text-[54px] sm:text-5xl text-4xl font-medium">إبتكر الأن</h2>
                    </div>

                    <div
                        class="border-s-[3px] px-1 flex-shrink-0 flex border-[#10D07F] bg-gradient-to-r from-[#10D07F52] to-[#10D07F0A]">
                        <h2 class="md:text-[54px] sm:text-5xl text-4xl font-medium">إستكشف الحلول</h2>
                    </div>

                    <div
                        class="border-s-[3px] px-1 flex-shrink-0 flex border-[#913AFF] bg-gradient-to-r from-[#913AFF52] to-[#913AFF0A]">
                        <h2 class="md:text-[54px] sm:text-5xl text-4xl font-medium">تحديات الكهرباء</h2>
                    </div>

                    <div
                        class="border-s-[3px] px-1 flex-shrink-0 flex border-[#0F9DED] bg-gradient-to-r from-[#0F9DED52] to-[#0F9DED0A]">
                        <h2 class="md:text-[54px] sm:text-5xl text-4xl font-medium">من اجل ممكلتنا</h2>
                    </div>

                    <div
                        class="border-s-[3px] px-1 flex-shrink-0 flex border-[#10D07F] bg-gradient-to-r from-[#10D07F52] to-[#10D07F0A]">
                        <h2 class="md:text-[54px] sm:text-5xl text-4xl font-medium">إلكتراثون 2024</h2>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="embla"
            x-data="{ embla: null, disableClick: true }"
            x-init="() => {
                embla = EmblaCarousel($refs.viewport, { watchDrag: false, slidesToScroll: 2, startIndex: 0, loop: false, containScroll: false, direction: 'ltr' }, [EmblaCarousel.AutoPlay({ stopOnInteraction: false, stopOnFocusIn: false, delay: 3000 })])
            }"
        >
            <div x-ref="viewport">
                <div class="md:gap-8 flex flex-row-reverse gap-4">
                    <div
                        class="border-s-[3px] px-1 flex-shrink-0 flex border-[#913AFF] bg-gradient-to-r from-[#913AFF52] to-[#913AFF0A]">
                        <h2 class="md:text-[54px] sm:text-5xl text-4xl font-medium">فاعلية محفزة</h2>
                    </div>

                    <div
                        class="border-s-[3px] px-1 flex-shrink-0 flex border-[#0F9DED] bg-gradient-to-r from-[#0F9DED52] to-[#0F9DED0A]">
                        <h2 class="md:text-[54px] sm:text-5xl text-4xl font-medium">إبتكر الأن</h2>
                    </div>

                    <div
                        class="border-s-[3px] px-1 flex-shrink-0 flex border-[#10D07F] bg-gradient-to-r from-[#10D07F52] to-[#10D07F0A]">
                        <h2 class="md:text-[54px] sm:text-5xl text-4xl font-medium">إستكشف الحلول</h2>
                    </div>

                    <div
                        class="border-s-[3px] px-1 flex-shrink-0 flex border-[#913AFF] bg-gradient-to-r from-[#913AFF52] to-[#913AFF0A]">
                        <h2 class="md:text-[54px] sm:text-5xl text-4xl font-medium">تحديات الكهرباء</h2>
                    </div>

                    <div
                        class="border-s-[3px] px-1 flex-shrink-0 flex border-[#0F9DED] bg-gradient-to-r from-[#0F9DED52] to-[#0F9DED0A]">
                        <h2 class="md:text-[54px] sm:text-5xl text-4xl font-medium">من اجل ممكلتنا</h2>
                    </div>

                    <div
                        class="border-s-[3px] px-1 flex-shrink-0 flex border-[#10D07F] bg-gradient-to-r from-[#10D07F52] to-[#10D07F0A]">
                        <h2 class="md:text-[54px] sm:text-5xl text-4xl font-medium">إلكتراثون 2024</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
