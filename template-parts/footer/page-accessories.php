<script type="text/javascript">var $ = window.jQuery;</script><script src="<?php echo get_template_directory_uri(); ?>/assets/js/webflow.js?v=1781609300" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/gsap.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/SplitText.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/ScrollTrigger.min.js" type="text/javascript"></script><!--
Swiper JS
-->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper-bundle.min.js"></script>
<script>
jQuery(function ($) {
$('.product-swiper').each(function (index) {
const el = this;
const $el = $(el);
// prevents double init (Webflow often runs scripts twice)
if ($el.data('swiperInit')) return;
$el.data('swiperInit', true);
const swiperClass = `swiper${index}`;
$el.addClass(swiperClass);
// remove any previously injected scrollbar inside this swiper
$el.children('.swiper-scrollbar').remove();
// create exactly one scrollbar
const $scrollbar = $(`<div class="swiper-scrollbar swiper-scrollbar${index}"></div>`);
$el.append($scrollbar);
new Swiper(el, {
slidesPerView: 'auto',
spaceBetween: 14,
grabCursor: true,
loop: false,
slideToClickedSlide: true,
scrollbar: { el: $scrollbar[0], draggable: true, hide: false },
watchOverflow: true,
observer: true,
observeParents: true,
});
});
// If these sliders exist on the page, init them safely too
if (document.querySelector('.productcard-slider')) {
new Swiper('.productcard-slider', {
slidesPerView: 'auto',
spaceBetween: 20,
grabCursor: true,
loop: true,
slideToClickedSlide: true,
navigation: { nextEl: '.chambers.swiper-button-next', prevEl: '.chambers.swiper-button-prev' },
watchOverflow: true,
observer: true,
observeParents: true,
});
}
if (document.querySelector('.accessory-slider')) {
new Swiper('.accessory-slider', {
slidesPerView: 1,
spaceBetween: 0,
grabCursor: true,
loop: true,
slideToClickedSlide: true,
navigation: false,
pagination: { el: '.swiper-pagination', clickable: true },
watchOverflow: true,
observer: true,
observeParents: true,
});
}
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
const logo
= document.querySelector('.hero-logo');
const headers = Array.from(document.querySelectorAll('.brand.main-header'));
if (!logo || !headers.length) return;
const MIN_VISIBLE_PX = 60;
const visiblePx = () => {
const r = logo.getBoundingClientRect();
return Math.max(0, Math.min(r.bottom, window.innerHeight) - Math.max(r.top, 0));
};
const update = () => {
const on = visiblePx() >= MIN_VISIBLE_PX;
headers.forEach(h => h.classList.toggle('white', on));
};
const io = new IntersectionObserver(update, { threshold: [0, 0.01, 0.1, 0.25, 0.5, 1] });
io.observe(logo);
update();
window.addEventListener('scroll', update, { passive: true });
window.addEventListener('resize', update);
});
</script>
<script>
// Client-side accessories filter (replaces the removed Finsweet fs-list). Single category facet:
// a radio group ("Show all" + one per category). Each accessory card carries one or more category
// chips (fs-list-field="category"), so a card matches when it has the selected category.
// No-ops on every page that doesn't render the accessories filter.
document.addEventListener('DOMContentLoaded', () => {
  const form = document.querySelector('.accessories-filter-form');
  const loopWrap = document.querySelector('.accessories-loop_wrap');
  if (!form || !loopWrap) return;

  const norm = (s) => (s || '').replace(/\s+/g, ' ').trim().toLowerCase();
  // Top-level cards only (category chips are also .w-dyn-item, so scope to direct children).
  const index = Array.from(loopWrap.querySelectorAll(':scope > .w-dyn-item')).map((item) => ({
    item,
    cats: Array.from(item.querySelectorAll('[fs-list-field="category"]')).map((c) => norm(c.textContent)).filter(Boolean),
  }));

  let emptyMsg = loopWrap.parentElement.querySelector('.accessories-no-results');
  if (!emptyMsg) {
    emptyMsg = document.createElement('div');
    emptyMsg.className = 'accessories-no-results w-dyn-empty';
    emptyMsg.style.display = 'none';
    emptyMsg.innerHTML = '<div>No items found.</div>';
    loopWrap.insertAdjacentElement('afterend', emptyMsg);
  }

  const apply = () => {
    const radio = form.querySelector('input[fs-list-field="category"]:checked');
    const selCat = radio ? norm(radio.getAttribute('fs-list-value')) : '';
    // Highlight the active radio's label (matches the live site's is-list-active state).
    form.querySelectorAll('input[fs-list-field="category"]').forEach((input) => {
      const label = input.closest('.radio-button-field');
      if (label) label.classList.toggle('is-list-active', input.checked);
    });
    let visible = 0;
    index.forEach((rec) => {
      const show = !selCat || rec.cats.includes(selCat);
      rec.item.style.display = show ? '' : 'none';
      if (show) visible++;
    });
    emptyMsg.style.display = visible ? 'none' : '';
  };

  form.addEventListener('submit', (e) => e.preventDefault()); // live filter — never reload
  form.addEventListener('change', apply);
  apply();
});
</script>
