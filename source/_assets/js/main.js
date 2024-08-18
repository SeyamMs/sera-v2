import Alpine from "alpinejs";
import intersect from "@alpinejs/intersect";
import collapse from "@alpinejs/collapse";
import Toolkit from "@alpine-collective/toolkit";

import countdown from "./countdown.js";
Alpine.data("countdown", countdown);

window.Alpine = Alpine;

Alpine.plugin(intersect);
Alpine.plugin(collapse);
Alpine.plugin(Toolkit);

import EmblaCarousel from "embla-carousel";
import AutoScroll from "embla-carousel-auto-scroll";
import AutoPlay from "embla-carousel-autoplay";
window.EmblaCarousel = EmblaCarousel;
window.EmblaCarousel.AutoScroll = AutoScroll;
window.EmblaCarousel.AutoPlay = AutoPlay;

Alpine.start();

const OPTIONS = { loop: true, dragFree: true, direction: "rtl" };
