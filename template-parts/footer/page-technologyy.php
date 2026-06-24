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
document.addEventListener('DOMContentLoaded', () => {
const root = document.querySelector('.db-filter-left');
if (!root) return;
const btnCateg = root.querySelector('.db-filterby-btn.db-categ');
const btnTag
= root.querySelector('.db-filterby-btn.db-tag');
const boxCateg = root.querySelector('.db-filter-category');
const boxTag
= root.querySelector('.db-filter-tag');
if (!btnCateg || !btnTag || !boxCateg || !boxTag) return;
const setMode = (mode) => {
const isCategory = mode === 'category';
// Toggle active buttons
btnCateg.classList.toggle('active', isCategory);
btnTag.classList.toggle('active', !isCategory);
// Toggle panels
boxCateg.style.display = isCategory ? '' : 'none';
boxTag.style.display
= isCategory ? 'none' : '';
};
// Default state: category visible, tags hidden
setMode('category');
// Click handlers
btnCateg.addEventListener('click', (e) => {
e.preventDefault();
setMode('category');
});
btnTag.addEventListener('click', (e) => {
e.preventDefault();
setMode('tag');
});
});
</script>
<script>
document.addEventListener('DOMContentLoaded', () => {
const root = document.querySelector('.db-filter-layout');
const btnList = root?.querySelector('.db-layout-list');
const btnGrid = root?.querySelector('.db-layout-grid');
const loopWrap = document.querySelector('.db-loop_wrap'); // adjust if you have multiple
if (!root || !btnList || !btnGrid || !loopWrap) return;
const setLayout = (mode) => {
const isGrid = mode === 'grid';
btnList.classList.toggle('active', !isGrid);
btnGrid.classList.toggle('active', isGrid);
loopWrap.classList.toggle('is-grid', isGrid);
};
// Default
setLayout(btnGrid.classList.contains('active') ? 'grid' : 'list');
btnList.addEventListener('click', (e) => {
e.preventDefault();
setLayout('list');
});
btnGrid.addEventListener('click', (e) => {
e.preventDefault();
setLayout('grid');
});
});
</script>
<script>
// Client-side database filter (replaces the removed Finsweet fs-list).
// Facets: category (single radio, exact match), tags (checkboxes, OR), free-text search
// (substring across category/title/tag/description). Facets combine with AND.
document.addEventListener('DOMContentLoaded', () => {
  const form = document.querySelector('.db-filter-form');
  const loopWrap = document.querySelector('.db-loop_wrap');
  if (!form || !loopWrap) return;

  // Only the top-level technology cards (tag chips are also .w-dyn-item, so scope to direct children).
  const items = Array.from(loopWrap.querySelectorAll(':scope > .w-dyn-item'));
  const norm = (s) => (s || '').replace(/\s+/g, ' ').trim().toLowerCase();

  const index = items.map((item) => {
    const cat = norm(item.querySelector('[fs-list-field="category"]')?.textContent);
    const title = norm(item.querySelector('[fs-list-field="title"]')?.textContent);
    const desc = norm(item.querySelector('[fs-list-field="description"]')?.textContent);
    const tags = Array.from(item.querySelectorAll('[fs-list-field="tag"]')).map((t) => norm(t.textContent)).filter(Boolean);
    return { item, cat, tags, haystack: [cat, title, desc, tags.join(' ')].join(' ') };
  });

  const searchInput = form.querySelector('input[type="text"][fs-list-field]');

  // No-results message (shown when filters exclude everything).
  let emptyMsg = loopWrap.parentElement.querySelector('.db-no-results');
  if (!emptyMsg) {
    emptyMsg = document.createElement('div');
    emptyMsg.className = 'db-no-results w-dyn-empty';
    emptyMsg.style.display = 'none';
    emptyMsg.innerHTML = '<div>No items found.</div>';
    loopWrap.insertAdjacentElement('afterend', emptyMsg);
  }

  const apply = () => {
    const catRadio = form.querySelector('input[fs-list-field="category"]:checked');
    const selCat = catRadio ? norm(catRadio.getAttribute('fs-list-value')) : '';
    const selTags = Array.from(form.querySelectorAll('input[fs-list-field="tag"]:checked'))
      .map((c) => norm(c.getAttribute('fs-list-value'))).filter(Boolean);
    const q = norm(searchInput && searchInput.value);

    // Highlight the chosen filters (matches the live site's is-list-active state).
    form.querySelectorAll('input[fs-list-field="category"], input[fs-list-field="tag"]').forEach((input) => {
      const label = input.closest('.radio-button-field');
      if (label) label.classList.toggle('is-list-active', input.checked);
    });

    let visible = 0;
    index.forEach((rec) => {
      const okCat = !selCat || rec.cat === selCat;
      const okTags = !selTags.length || selTags.some((t) => rec.tags.includes(t));
      const okSearch = !q || rec.haystack.indexOf(q) !== -1;
      const show = okCat && okTags && okSearch;
      rec.item.style.display = show ? '' : 'none';
      if (show) visible++;
    });
    emptyMsg.style.display = visible ? 'none' : '';
  };

  // Filtering is live — never let the GET form reload the page (the stray required field is gone,
  // but pressing Enter in search would still submit).
  form.addEventListener('submit', (e) => e.preventDefault());
  form.addEventListener('change', apply);
  form.addEventListener('input', apply);

  // The "Category"/"Tags" toggles are also Finsweet "clear" buttons: reset selections on switch.
  const allCat = form.querySelector('input[fs-list-field="category"][fs-list-value=""]');
  const clearFilters = () => {
    form.querySelectorAll('input[fs-list-field="tag"]:checked').forEach((i) => { i.checked = false; });
    if (allCat) { allCat.checked = true; } // back to "All"
    else { form.querySelectorAll('input[fs-list-field="category"]:checked').forEach((i) => { i.checked = false; }); }
    apply();
  };
  form.querySelectorAll('.db-filterby-btn').forEach((btn) => btn.addEventListener('click', clearFilters));

  apply();
});
</script>