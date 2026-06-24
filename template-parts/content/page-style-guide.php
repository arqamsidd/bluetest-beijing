
  <div class="page-wrapper">
    <div class="global-styles w-embed">
      <style>
/* Make text look crisper and more legible in all browsers */
body {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
}
/* Focus state style for keyboard navigation for the focusable elements */
*[tabindex]:focus-visible,
  input[type="file"]:focus-visible {
   outline: 0.125rem solid #4d65ff;
   outline-offset: 0.125rem;
}
/* Set color style to inherit */
.inherit-color * {
    color: inherit;
}
/* Get rid of top margin on first element in any rich text element */
.w-richtext > :not(div):first-child, .w-richtext > div:first-child > :first-child {
  margin-top: 0 !important;
}
/* Get rid of bottom margin on last element in any rich text element */
.w-richtext>:last-child, .w-richtext ol li:last-child, .w-richtext ul li:last-child {
	margin-bottom: 0 !important;
}
/* Make sure containers never lose their center alignment */
.container-medium,.container-small, .container-large {
	margin-right: auto !important;
  margin-left: auto !important;
}
/* 
Make the following elements inherit typography styles from the parent and not have hardcoded values. 
Important: You will not be able to style for example "All Links" in Designer with this CSS applied.
Uncomment this CSS to use it in the project. Leave this message for future hand-off.
*/
/*
a,
.w-input,
.w-select,
.w-tab-link,
.w-nav-link,
.w-dropdown-btn,
.w-dropdown-toggle,
.w-dropdown-link {
  color: inherit;
  text-decoration: inherit;
  font-size: inherit;
}
*/
/* Apply "..." after 3 lines of text */
.text-style-3lines {
	display: -webkit-box;
	overflow: hidden;
	-webkit-line-clamp: 3;
	-webkit-box-orient: vertical;
}
/* Apply "..." after 2 lines of text */
.text-style-2lines {
	display: -webkit-box;
	overflow: hidden;
	-webkit-line-clamp: 2;
	-webkit-box-orient: vertical;
}
/* These classes are never overwritten */
.hide {
  display: none !important;
}
@media screen and (max-width: 991px) {
    .hide, .hide-tablet {
        display: none !important;
    }
}
  @media screen and (max-width: 767px) {
    .hide-mobile-landscape{
      display: none !important;
    }
}
  @media screen and (max-width: 479px) {
    .hide-mobile{
      display: none !important;
    }
}
.margin-0 {
  margin: 0rem !important;
}
.padding-0 {
  padding: 0rem !important;
}
.spacing-clean {
padding: 0rem !important;
margin: 0rem !important;
}
.margin-top {
  margin-right: 0rem !important;
  margin-bottom: 0rem !important;
  margin-left: 0rem !important;
}
.padding-top {
  padding-right: 0rem !important;
  padding-bottom: 0rem !important;
  padding-left: 0rem !important;
}
.margin-right {
  margin-top: 0rem !important;
  margin-bottom: 0rem !important;
  margin-left: 0rem !important;
}
.padding-right {
  padding-top: 0rem !important;
  padding-bottom: 0rem !important;
  padding-left: 0rem !important;
}
.margin-bottom {
  margin-top: 0rem !important;
  margin-right: 0rem !important;
  margin-left: 0rem !important;
}
.padding-bottom {
  padding-top: 0rem !important;
  padding-right: 0rem !important;
  padding-left: 0rem !important;
}
.margin-left {
  margin-top: 0rem !important;
  margin-right: 0rem !important;
  margin-bottom: 0rem !important;
}
.padding-left {
  padding-top: 0rem !important;
  padding-right: 0rem !important;
  padding-bottom: 0rem !important;
}
.margin-horizontal {
  margin-top: 0rem !important;
  margin-bottom: 0rem !important;
}
.padding-horizontal {
  padding-top: 0rem !important;
  padding-bottom: 0rem !important;
}
.margin-vertical {
  margin-right: 0rem !important;
  margin-left: 0rem !important;
}
.padding-vertical {
  padding-right: 0rem !important;
  padding-left: 0rem !important;
}
.footer-nav_link .w-icon-dropdown-toggle{
  transition: 0.3s ease all;
}
.footer-nav_link.w--open .w-icon-dropdown-toggle{
  transform: rotate(180deg);
}
@media(min-width: 1024px){
.productcard-slider .swiper-slide {
  transition: transform 0.5s;
  transition-timing-function: ease-out;
  transform-origin: bottom left;
  transform: scale(0.85);
  opacity: 0.6;
}
.productcard-slider .swiper-slide.swiper-slide-prev {
  transform-origin: bottom right;
}
.productcard-slider .swiper-slide .product-slider-card_stats {
  opacity: 0;
  transition: 0.8s ease all;
}
.productcard-slider .swiper-slide.swiper-slide-active {
  opacity: 1;
  transform: scale(1);
}
.productcard-slider .swiper-slide.swiper-slide-prev {
  opacity: 1;
  transform: scale(1);
}
.productcard-slider .swiper-slide.swiper-slide-active .product-slider-card_stats {
  opacity: 1;
}
}
.swiper-button-prev.chambers{
  top: 125px;
  left: unset;
  right: 50px;
}
.swiper-button-next.chambers{
  top: 125px;;
  left:unset;
  right: 0;
}
.swiper-button-prev.chambers::after{
  all: unset;
}
.swiper-button-next.chambers::after{
  all: unset;
}
.accessories-loop_wrap::before, .accessories-loop_wrap::after{
all: unset;
}
.is-list-active .accessories-category {
  color: #1477ff;
}
.scroll-indicator{
  position: relative;
}
.scroll-indicator .timeline-fixed-year{
  position: absolute;
  top: -28px;
  left: 50%;
  transform: translateX(-50%);
}
.c-scrolling-item.alternate .scroll-indicator .timeline-fixed-year{
  top: unset;
  bottom: -28px;
}
.scroll-indicator{
  position: relative;
}
.scroll-indicator:before{
  content: '';
  display: block;
  width: 2px;
  height: 40px;
  background: black;
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  top: 26px;
}
.c-scrolling-item.alternate .scroll-indicator:before{
  top: unset;
  bottom: 26px;
}
.w-col{
padding: 0;}
.marquee_outer{
  width: 100%;
}
.marquee_wrap{
  display: flex;
  width: 200vw;          
  will-change: transform;
  animation: marqueeMove 18s linear infinite;
  transform: translate3d(0,0,0);
}
@keyframes marqueeMove{
  from { transform: translate3d(0,0,0); }
  to   { transform: translate3d(-50%,0,0); }
}
/*
.marquee_outer:hover .marquee_wrap{
  animation-play-state: paused;
}
*/
.footer-wrap .w-dropdown-list.w--open{
max-height: 500px;
}
.w-dropdown-toggle.w--open .dd-icondiv img{
	transform: rotate(180deg);
}
.w--nav-dropdown-toggle-open .w-icon-dropdown-toggle{
	transition: 0.3s ease transform;
}
.w--nav-dropdown-toggle-open.w--open .w-icon-dropdown-toggle{
	transform: rotate(180deg);	
}
.w-dropdown-toggle .dd-icondiv img{
	transition: 0.3s ease transform;
}
.product-card-stats .w-richtext {
  display: flex;
  justify-content: flex-start;
  align-items: flex-start;
  gap: 12px;
  flex-wrap: wrap;
  margin-top: 12px;
}
.product-card-stats .w-richtext:before, .product-card-stats .w-richtext:after{
  all: unset;
}
.product-card-stats .w-richtext li{
  background-color: var(--blue);
  color: var(--base-color-neutral--white);
  border-radius: 50px;
  padding: 4px 10px;
  font-family: Space Grotesk, sans-serif;
  font-size: .875rem;
  font-weight: 500;
  line-height: 1;
  display: inline-block;
}
/*
.w-nav-overlay{
	background: rgba(0,0,0,0.5);
}*/
.mobile-toggle.w--open{
	background: #edf1f4;
}
 .navigation-mob  .w-nav-overlay{
    height: 90vh !important;
    overflow-y: auto !important;
    overflow-x: hidden !important;
    -webkit-overflow-scrolling: touch;
    overscroll-behavior: contain;
  }
.flowtable .fs-table_row:nth-child(odd) td{
  background-color: var(--gray);
}
.w-richtext figure.w-richtext-align-floatright img, .w-richtext figure.w-richtext-align-floatleft img{
max-width: 300px;
}
@media (max-width: 480px){
  .w-richtext figure.w-richtext-align-floatright , .w-richtext figure.w-richtext-align-floatleft {
    float: unset;
    clear: both;
  }
}
.db-loop-tags .db-tag::after{
  content: ", ";
}
.db-loop-tags .w-dyn-item:nth-last-child(1)  .db-tag::after{
  content: "";
}
.db-cateogry::before{
  content: 'Category: ';
  color: #1477ff;
}
.db-filter-tag .w-dyn-item .db-filtertag::after{
  content: ',';
}
.db-filter-tag .w-dyn-item:nth-last-child(1) .db-filtertag::after{
  content: '';
}
</style>
    </div>
    <div class="fs-styleguide_component">
      <header class="fs-styleguide_header">
        <div class="padding-global padding-section-large">
          <div class="container-large">
            <div class="fs-styleguide_header-block">
              <div id="w-node-b224ec27-30fa-be84-48bf-7ed471542af3-a74a061a" class="fs-styleguide_hero-label" data-text="tn4def0671"><?php echo _u('tn4def0671','text'); ?></div>
              <h1 class="fs-styleguide_heading-header" data-text="tn7aba473"><?php echo _u('tn7aba473','text'); ?></h1>
              <div class="max-width-medium">
                <p class="text-size-medium" data-text="t70b585d0"><?php echo _u('t70b585d0','text'); ?></p>
              </div>
            </div>
          </div>
        </div>
      </header>
      <section class="fs-styleguide_classes">
        <section class="fs-styleguide_structure">
          <div class="padding-global padding-section-large">
            <div class="container-large">
              <div class="fs-styleguide_section is-vertical">
                <div class="fs-styleguide_section-header">
                  <h2 class="fs-styleguide_heading-medium" data-text="t3ae1b639"><?php echo _u('t3ae1b639','text'); ?></h2>
                  <p class="text-size-medium" data-textarea="ta24021488"><?php echo _u('ta24021488', 'textarea'); ?></p>
                </div>
                <div class="fs-styleguide_item-wrapper">
                  <div class="fs-styleguide_1-col">
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="t329acb55"><?php echo _u('t329acb55','text'); ?></div>
                      <div class="page-wrapper">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="t3a80a47f"><?php echo _u('t3a80a47f','text'); ?></div>
                      <main class="main-wrapper">
                        <div class="fs-styleguide_empty-box"></div>
                      </main>
                    </div>
                    <div class="fs-styleguide_item is-stretch">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627ca17-a74a061a" class="fs-styleguide_label" data-text="tn28522f45"><?php echo _u('tn28522f45','text'); ?></div>
                      <div class="container-small">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_item is-stretch">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627ca1c-a74a061a" class="fs-styleguide_label" data-text="t135fca41"><?php echo _u('t135fca41','text'); ?></div>
                      <div class="container-medium">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_item is-stretch">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627ca21-a74a061a" class="fs-styleguide_label" data-text="tn28ba0911"><?php echo _u('tn28ba0911','text'); ?></div>
                      <div class="container-large">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_item is-stretch">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627ca26-a74a061a" class="fs-styleguide_label" data-text="t10e9acdf"><?php echo _u('t10e9acdf','text'); ?></div>
                      <div class="padding-global">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_item is-stretch">
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627ca2c-a74a061a" class="fs-styleguide_label" data-text="tn5efc9c9d"><?php echo _u('tn5efc9c9d','text'); ?></div>
                        <div class="padding-section-small">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                    </div>
                    <div class="fs-styleguide_item is-stretch">
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627ca32-a74a061a" class="fs-styleguide_label" data-text="t74bc8c99"><?php echo _u('t74bc8c99','text'); ?></div>
                        <div class="padding-section-medium">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                    </div>
                    <div class="fs-styleguide_item is-stretch">
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627ca38-a74a061a" class="fs-styleguide_label" data-text="tn5f647669"><?php echo _u('tn5f647669','text'); ?></div>
                        <div class="padding-section-large">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_row">
                        <div class="fs-styleguide_label" data-text="tn8f47bdc"><?php echo _u('tn8f47bdc','text'); ?></div>
                      </div>
                      <div class="button-group">
                        <div class="fs-styleguide_empty-box"></div>
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="fs-styleguide_headings">
          <div class="padding-global padding-section-large">
            <div class="container-large">
              <div class="fs-styleguide_section">
                <div class="fs-styleguide_section-header">
                  <h2 class="fs-styleguide_heading-medium" data-text="tn3e9d592f"><?php echo _u('tn3e9d592f','text'); ?></h2>
                  <p class="text-size-medium" data-textarea="taea6062"><?php echo _u('taea6062', 'textarea'); ?></p>
                </div>
                <div class="fs-styleguide_item-wrapper">
                  <div class="fs-styleguide_1-col">
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label is-tag" data-text="t8e9"><?php echo _u('t8e9','text'); ?></div>
                      <h1 data-text="tn4f1619c4"><?php echo _u('tn4f1619c4','text'); ?></h1>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn362a6a30"><?php echo _u('tn362a6a30','text'); ?></div>
                      <h1 class="heading-style-h1" data-text="tn4f1619c4"><?php echo _u('tn4f1619c4','text'); ?></h1>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label is-tag" data-text="t8ea"><?php echo _u('t8ea','text'); ?></div>
                      <h2 data-text="t606ad71e"><?php echo _u('t606ad71e','text'); ?></h2>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn362a6a2f"><?php echo _u('tn362a6a2f','text'); ?></div>
                      <h2 class="heading-style-h2" data-text="t606ad71e"><?php echo _u('t606ad71e','text'); ?></h2>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label is-tag" data-text="t8eb"><?php echo _u('t8eb','text'); ?></div>
                      <h3 data-text="td743a9b"><?php echo _u('td743a9b','text'); ?></h3>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn362a6a2e"><?php echo _u('tn362a6a2e','text'); ?></div>
                      <h3 class="heading-style-h3" data-text="td743a9b"><?php echo _u('td743a9b','text'); ?></h3>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label is-tag" data-text="t8ec"><?php echo _u('t8ec','text'); ?></div>
                      <h4 data-text="t2014e52b"><?php echo _u('t2014e52b','text'); ?></h4>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn362a6a2d"><?php echo _u('tn362a6a2d','text'); ?></div>
                      <h4 class="heading-style-h4" data-text="t2014e52b"><?php echo _u('t2014e52b','text'); ?></h4>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label is-tag" data-text="t8ed"><?php echo _u('t8ed','text'); ?></div>
                      <h5 data-text="tn643be8ae"><?php echo _u('tn643be8ae','text'); ?></h5>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn362a6a2c"><?php echo _u('tn362a6a2c','text'); ?></div>
                      <h5 class="heading-style-h5" data-text="tn643be8ae"><?php echo _u('tn643be8ae','text'); ?></h5>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label is-tag" data-text="t8ee"><?php echo _u('t8ee','text'); ?></div>
                      <h6 data-text="tn61518f78"><?php echo _u('tn61518f78','text'); ?></h6>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn362a6a2b"><?php echo _u('tn362a6a2b','text'); ?></div>
                      <h6 class="heading-style-h6" data-text="tn61518f78"><?php echo _u('tn61518f78','text'); ?></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="fs-styleguide_other-tags">
          <div class="padding-global padding-section-large">
            <div class="container-large">
              <div class="fs-styleguide_section">
                <div class="fs-styleguide_section-header">
                  <h2 class="fs-styleguide_heading-medium" data-text="te88725e"><?php echo _u('te88725e','text'); ?></h2>
                  <p class="text-size-medium" data-textarea="tan22da9155"><?php echo _u('tan22da9155', 'textarea'); ?></p>
                </div>
                <div class="fs-styleguide_item-wrapper">
                  <div class="fs-styleguide_2-col">
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label is-tag" data-text="tn1a178f3c"><?php echo _u('tn1a178f3c','text'); ?></div>
                      <p data-textarea="taff56e0c"><?php echo _u('taff56e0c', 'textarea'); ?></p>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label is-tag" data-text="t63e805a"><?php echo _u('t63e805a','text'); ?></div>
                      <a href="<?php echo _u('a23','link'); ?>" data-text="t47b903a" data-link="a23"><?php echo _u('t47b903a','text'); ?></a>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label is-tag" data-text="tn353c8b0a"><?php echo _u('tn353c8b0a','text'); ?></div>
                      <blockquote data-text="t7a61e105"><?php echo _u('t7a61e105','text'); ?></blockquote>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label is-tag" data-text="t30eeb903"><?php echo _u('t30eeb903','text'); ?></div>
                      <ol role="list">
                        <li data-text="tn6aeb2b17"><?php echo _u('tn6aeb2b17','text'); ?></li>
                        <li data-text="tn6aeb2b17"><?php echo _u('tn6aeb2b17','text'); ?></li>
                        <li data-text="tn6aeb2b17"><?php echo _u('tn6aeb2b17','text'); ?></li>
                      </ol>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label is-tag" data-text="tn73afc0b6"><?php echo _u('tn73afc0b6','text'); ?></div>
                      <ul role="list">
                        <li data-text="tn6aeb2b17"><?php echo _u('tn6aeb2b17','text'); ?></li>
                        <li data-text="tn6aeb2b17"><?php echo _u('tn6aeb2b17','text'); ?></li>
                        <li data-text="tn6aeb2b17"><?php echo _u('tn6aeb2b17','text'); ?></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="fs-styleguide_text-classes">
          <div class="padding-global padding-section-large">
            <div class="container-large">
              <div class="fs-styleguide_section">
                <div class="fs-styleguide_section-header">
                  <h2 class="fs-styleguide_heading-medium" data-text="tn77cc77cd"><?php echo _u('tn77cc77cd','text'); ?></h2>
                  <p class="text-size-medium" data-textarea="tan681e9125"><?php echo _u('tan681e9125', 'textarea'); ?></p>
                </div>
                <div class="fs-styleguide_item-wrapper">
                  <div class="fs-styleguide_item-header">
                    <h3 class="text-weight-semibold" data-text="tn73a8f021"><?php echo _u('tn73a8f021','text'); ?></h3>
                  </div>
                  <div class="fs-styleguide_3-col">
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn75d7fcf1"><?php echo _u('tn75d7fcf1','text'); ?></div>
                      <p class="text-size-large" data-textarea="tan6aeb2b17"><?php echo _u('tan6aeb2b17', 'textarea'); ?></p>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn4340bddf"><?php echo _u('tn4340bddf','text'); ?></div>
                      <p class="text-size-medium" data-textarea="tan79834566"><?php echo _u('tan79834566', 'textarea'); ?></p>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn1c283d90"><?php echo _u('tn1c283d90','text'); ?></div>
                      <p data-textarea="tan2e25c045"><?php echo _u('tan2e25c045', 'textarea'); ?></p>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn75702325"><?php echo _u('tn75702325','text'); ?></div>
                      <p class="text-size-small" data-textarea="ta3e2b742c"><?php echo _u('ta3e2b742c', 'textarea'); ?></p>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn6f243f54"><?php echo _u('tn6f243f54','text'); ?></div>
                      <p class="text-size-tiny" data-textarea="ta3e2b742c"><?php echo _u('ta3e2b742c', 'textarea'); ?></p>
                    </div>
                  </div>
                </div>
                <div class="fs-styleguide_item-wrapper">
                  <div class="fs-styleguide_item-header">
                    <h3 class="text-weight-semibold" data-text="tnda6ccb"><?php echo _u('tnda6ccb','text'); ?></h3>
                  </div>
                  <div class="fs-styleguide_3-col">
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn613aa0e9"><?php echo _u('tn613aa0e9','text'); ?></div>
                      <p class="text-style-strikethrough" data-textarea="tan613aa0e9"><?php echo _u('tan613aa0e9', 'textarea'); ?></p>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn1e09a194"><?php echo _u('tn1e09a194','text'); ?></div>
                      <p class="text-style-italic" data-textarea="tan1e09a194"><?php echo _u('tan1e09a194', 'textarea'); ?></p>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn5b95aa51"><?php echo _u('tn5b95aa51','text'); ?></div>
                      <p class="text-style-muted" data-textarea="tan5b95aa51"><?php echo _u('tan5b95aa51', 'textarea'); ?></p>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn576c60ba"><?php echo _u('tn576c60ba','text'); ?></div>
                      <p class="text-style-allcaps" data-textarea="tan576c60ba"><?php echo _u('tan576c60ba', 'textarea'); ?></p>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn15bdc639"><?php echo _u('tn15bdc639','text'); ?></div>
                      <p class="text-style-nowrap" data-textarea="tan15bdc639"><?php echo _u('tan15bdc639', 'textarea'); ?></p>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="t4f9fb336"><?php echo _u('t4f9fb336','text'); ?></div>
                      <p class="text-style-link" data-textarea="ta4f9fb336"><?php echo _u('ta4f9fb336', 'textarea'); ?></p>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn5b5d5d40"><?php echo _u('tn5b5d5d40','text'); ?></div>
                      <p class="text-style-quote" data-textarea="ta1108a7df"><?php echo _u('ta1108a7df', 'textarea'); ?></p>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn7c513db7"><?php echo _u('tn7c513db7','text'); ?></div>
                      <div id="w-node-_5d224905-8a1e-1460-7532-d38cb7ec37c1-a74a061a" class="fs-styleguide_message" data-text="t13a852e2"><?php echo _u('t13a852e2','text'); ?></div>
                      <p class="text-style-2lines" data-textarea="tan1da0aff5"><?php echo _u('tan1da0aff5', 'textarea'); ?></p>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn7a9c6518"><?php echo _u('tn7a9c6518','text'); ?></div>
                      <div id="w-node-_40538c8c-870b-b365-34c4-2a06f0f8567d-a74a061a" class="fs-styleguide_message" data-text="t13a852e2"><?php echo _u('t13a852e2','text'); ?></div>
                      <p class="text-style-3lines" data-textarea="ta7116bef8"><?php echo _u('ta7116bef8', 'textarea'); ?></p>
                    </div>
                  </div>
                </div>
                <div class="fs-styleguide_item-wrapper">
                  <div class="fs-styleguide_item-header">
                    <h3 class="text-weight-semibold" data-text="tn6156a2f8"><?php echo _u('tn6156a2f8','text'); ?></h3>
                  </div>
                  <div class="fs-styleguide_3-col">
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn6542b3f8"><?php echo _u('tn6542b3f8','text'); ?></div>
                      <div class="text-weight-xbold" data-text="tn6542b3f8"><?php echo _u('tn6542b3f8','text'); ?></div>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="t704ee01a"><?php echo _u('t704ee01a','text'); ?></div>
                      <div class="text-weight-bold" data-text="t704ee01a"><?php echo _u('t704ee01a','text'); ?></div>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn399389f8"><?php echo _u('tn399389f8','text'); ?></div>
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cb45-a74a061a" class="text-weight-semibold" data-text="tn399389f8"><?php echo _u('tn399389f8','text'); ?></div>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn55b3dc36"><?php echo _u('tn55b3dc36','text'); ?></div>
                      <div class="text-weight-medium" data-text="tn55b3dc36"><?php echo _u('tn55b3dc36','text'); ?></div>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn536baec4"><?php echo _u('tn536baec4','text'); ?></div>
                      <div class="text-weight-normal" data-text="tn536baec4"><?php echo _u('tn536baec4','text'); ?></div>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn65e8bddf"><?php echo _u('tn65e8bddf','text'); ?></div>
                      <div class="text-weight-light" data-text="tn65e8bddf"><?php echo _u('tn65e8bddf','text'); ?></div>
                    </div>
                  </div>
                </div>
                <div class="fs-styleguide_item-wrapper">
                  <div class="fs-styleguide_item-header">
                    <h3 class="text-weight-semibold" data-text="tn4799cc3d"><?php echo _u('tn4799cc3d','text'); ?></h3>
                  </div>
                  <div class="fs-styleguide_3-col">
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="t91bde6f"><?php echo _u('t91bde6f','text'); ?></div>
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cb5e-a74a061a" class="text-align-left" data-text="t91bde6f"><?php echo _u('t91bde6f','text'); ?></div>
                    </div>
                    <div class="fs-styleguide_item is-stretch">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cb61-a74a061a" class="fs-styleguide_label" data-text="t224610bd"><?php echo _u('t224610bd','text'); ?></div>
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cb63-a74a061a" class="text-align-center" data-text="t224610bd"><?php echo _u('t224610bd','text'); ?></div>
                    </div>
                    <div class="fs-styleguide_item is-stretch">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cb66-a74a061a" class="fs-styleguide_label" data-text="t1ab650b4"><?php echo _u('t1ab650b4','text'); ?></div>
                      <div class="text-align-right" data-text="t1ab650b4"><?php echo _u('t1ab650b4','text'); ?></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="fs-styleguide_buttons">
          <div class="padding-global padding-section-large">
            <div class="container-large">
              <div class="fs-styleguide_section">
                <div class="fs-styleguide_section-header">
                  <h2 class="fs-styleguide_heading-medium" data-text="t719b5761"><?php echo _u('t719b5761','text'); ?></h2>
                  <p class="text-size-medium" data-textarea="tan200347a9"><?php echo _u('tan200347a9', 'textarea'); ?></p>
                </div>
                <div class="fs-styleguide_3-col">
                  <div class="fs-styleguide_item">
                    <div class="fs-styleguide_label" data-text="tn521dd8ce"><?php echo _u('tn521dd8ce','text'); ?></div>
                    <a href="<?php echo _u('a23','link'); ?>" class="button w-button" data-text="t7f2746de" data-link="a23"><?php echo _u('t7f2746de','text'); ?></a>
                  </div>
                  <div class="fs-styleguide_item">
                    <div class="fs-styleguide_row">
                      <div class="fs-styleguide_label" data-text="tn521dd8ce"><?php echo _u('tn521dd8ce','text'); ?></div>
                      <div class="fs-styleguide_label" data-text="tn4de6515c"><?php echo _u('tn4de6515c','text'); ?></div>
                    </div>
                    <a href="<?php echo _u('a23','link'); ?>" class="button is-small w-button" data-text="tn8fb26a5" data-link="a23"><?php echo _u('tn8fb26a5','text'); ?></a>
                  </div>
                  <div class="fs-styleguide_item">
                    <div class="fs-styleguide_row">
                      <div class="fs-styleguide_label" data-text="tn521dd8ce"><?php echo _u('tn521dd8ce','text'); ?></div>
                      <div class="fs-styleguide_label" data-text="tn4e4e2b28"><?php echo _u('tn4e4e2b28','text'); ?></div>
                    </div>
                    <a href="<?php echo _u('a23','link'); ?>" class="button is-large w-button" data-text="tn8fb26a5" data-link="a23"><?php echo _u('tn8fb26a5','text'); ?></a>
                  </div>
                  <div class="fs-styleguide_item">
                    <div class="fs-styleguide_row">
                      <div class="fs-styleguide_label" data-text="tn521dd8ce"><?php echo _u('tn521dd8ce','text'); ?></div>
                      <div class="fs-styleguide_label" data-text="tn35398b6f"><?php echo _u('tn35398b6f','text'); ?></div>
                    </div>
                    <a href="<?php echo _u('a23','link'); ?>" class="button is-secondary w-button" data-text="tn8fb26a5" data-link="a23"><?php echo _u('tn8fb26a5','text'); ?></a>
                  </div>
                  <div class="fs-styleguide_item">
                    <div class="fs-styleguide_row">
                      <div class="fs-styleguide_label" data-text="tn521dd8ce"><?php echo _u('tn521dd8ce','text'); ?></div>
                      <div class="fs-styleguide_label" data-text="t795c03f0"><?php echo _u('t795c03f0','text'); ?></div>
                    </div>
                    <a href="<?php echo _u('a23','link'); ?>" class="button is-text w-button" data-text="tn8fb26a5" data-link="a23"><?php echo _u('tn8fb26a5','text'); ?></a>
                  </div>
                  <div class="fs-styleguide_item">
                    <div class="fs-styleguide_row">
                      <div class="fs-styleguide_label" data-text="tn521dd8ce"><?php echo _u('tn521dd8ce','text'); ?></div>
                      <div class="fs-styleguide_label" data-text="t7956fb3c"><?php echo _u('t7956fb3c','text'); ?></div>
                    </div>
                    <a href="<?php echo _u('a23','link'); ?>" class="button is-icon w-inline-block" data-link="a23">
                      <div data-text="tn8fb26a5"><?php echo _u('tn8fb26a5','text'); ?></div>
                      <div class="icon-1x1-small w-embed"><svg aria-hidden="true" fill="currentColor" role="img" viewBox="0 0 20 21" xmlns="http://www.w3.org/2000/svg">
                          <title>Arrow Right</title>
                          <polygon points="16.172 9 10.101 2.929 11.515 1.515 20 10 19.293 10.707 11.515 18.485 10.101 17.071 16.172 11 0 11 0 9">
                        </polygon></svg></div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="fs-styleguide_colors">
          <div class="padding-global padding-section-large">
            <div class="container-large">
              <div class="fs-styleguide_section">
                <div class="fs-styleguide_section-header">
                  <h2 class="fs-styleguide_heading-medium" data-text="t78a3a990"><?php echo _u('t78a3a990','text'); ?></h2>
                  <p class="text-size-medium" data-textarea="tane3ab416"><?php echo _u('tane3ab416', 'textarea'); ?></p>
                </div>
                <div class="fs-styleguide_item-wrapper">
                  <div class="fs-styleguide_item-header">
                    <h3 class="text-weight-semibold" data-text="tn1c74483d"><?php echo _u('tn1c74483d','text'); ?></h3>
                  </div>
                  <div class="fs-styleguide_3-col">
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn6dc74f08"><?php echo _u('tn6dc74f08','text'); ?></div>
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cbb8-a74a061a" class="text-color-primary" data-text="tn6dc74f08"><?php echo _u('tn6dc74f08','text'); ?></div>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn6bdd44d3"><?php echo _u('tn6bdd44d3','text'); ?></div>
                      <div id="w-node-_10f2c43c-a260-85fe-8152-fa69d59bcb15-a74a061a" class="text-color-gray" data-text="tn6bdd44d3"><?php echo _u('tn6bdd44d3','text'); ?></div>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="t23e32eea"><?php echo _u('t23e32eea','text'); ?></div>
                      <div class="text-color-secondary" data-text="t23e32eea"><?php echo _u('t23e32eea','text'); ?></div>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tb1fdf0"><?php echo _u('tb1fdf0','text'); ?></div>
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cbc2-a74a061a" class="background-color-primary">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cbc3-a74a061a" class="text-color-alternate" data-text="tb1fdf0"><?php echo _u('tb1fdf0','text'); ?></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="fs-styleguide_item-wrapper">
                  <div class="fs-styleguide_item-header">
                    <h3 class="text-weight-semibold" data-text="t62f36ca2"><?php echo _u('t62f36ca2','text'); ?></h3>
                  </div>
                  <div class="fs-styleguide_3-col">
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn65d4c7"><?php echo _u('tn65d4c7','text'); ?></div>
                      <div class="fs-styleguide_background">
                        <div class="background-color-primary">
                          <div class="fs-styleguide_background-space"></div>
                        </div>
                      </div>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn4130e315"><?php echo _u('tn4130e315','text'); ?></div>
                      <div class="fs-styleguide_background">
                        <div class="background-color-secondary">
                          <div class="fs-styleguide_background-space"></div>
                        </div>
                      </div>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tncbf6e05"><?php echo _u('tncbf6e05','text'); ?></div>
                      <div class="fs-styleguide_background">
                        <div class="background-color-tertiary">
                          <div class="fs-styleguide_background-space"></div>
                        </div>
                      </div>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn6462140f"><?php echo _u('tn6462140f','text'); ?></div>
                      <div class="fs-styleguide_background">
                        <div class="background-color-alternate">
                          <div class="fs-styleguide_background-space"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="fs-styleguide_max-width">
          <div class="padding-global padding-section-large">
            <div class="container-large">
              <div class="fs-styleguide_section is-vertical">
                <div class="fs-styleguide_section-header">
                  <h2 class="fs-styleguide_heading-medium" data-text="tn389eee37"><?php echo _u('tn389eee37','text'); ?></h2>
                  <p class="text-size-medium" data-textarea="tan558c9913"><?php echo _u('tan558c9913', 'textarea'); ?></p>
                </div>
                <div class="fs-styleguide_item-wrapper">
                  <div class="fs-styleguide_1-col">
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tned2fdc1"><?php echo _u('tned2fdc1','text'); ?></div>
                      <div class="max-width-full">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="t3ce671b4"><?php echo _u('t3ce671b4','text'); ?></div>
                      <main class="max-width-full-tablet">
                        <div class="fs-styleguide_empty-box"></div>
                      </main>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn20151728"><?php echo _u('tn20151728','text'); ?></div>
                      <main class="max-width-full-mobile-portrait">
                        <div class="fs-styleguide_empty-box"></div>
                      </main>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="t2f386d1e"><?php echo _u('t2f386d1e','text'); ?></div>
                      <main class="max-width-full-mobile-landscape">
                        <div class="fs-styleguide_empty-box"></div>
                      </main>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn5dfc3175"><?php echo _u('tn5dfc3175','text'); ?></div>
                      <main class="max-width-xxlarge">
                        <div class="fs-styleguide_empty-box"></div>
                      </main>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="t7828f973"><?php echo _u('t7828f973','text'); ?></div>
                      <main class="max-width-xlarge">
                        <div class="fs-styleguide_empty-box"></div>
                      </main>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="t34bed18b"><?php echo _u('t34bed18b','text'); ?></div>
                      <main class="max-width-large">
                        <div class="fs-styleguide_empty-box"></div>
                      </main>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="t65024325"><?php echo _u('t65024325','text'); ?></div>
                      <main class="max-width-medium">
                        <div class="fs-styleguide_empty-box"></div>
                      </main>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="t559c3c5f"><?php echo _u('t559c3c5f','text'); ?></div>
                      <main class="max-width-medium-small">
                        <div class="fs-styleguide_empty-box"></div>
                      </main>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="t3526ab57"><?php echo _u('t3526ab57','text'); ?></div>
                      <main class="max-width-small">
                        <div class="fs-styleguide_empty-box"></div>
                      </main>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="t7890d33f"><?php echo _u('t7890d33f','text'); ?></div>
                      <main class="max-width-xsmall">
                        <div class="fs-styleguide_empty-box"></div>
                      </main>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn5d9457a9"><?php echo _u('tn5d9457a9','text'); ?></div>
                      <main class="max-width-xxsmall">
                        <div class="fs-styleguide_empty-box"></div>
                      </main>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="fs-styleguide_paddings">
          <div class="padding-global padding-section-large">
            <div class="container-large">
              <div class="fs-styleguide_section">
                <div class="fs-styleguide_section-header">
                  <h2 class="fs-styleguide_heading-medium" data-text="t31f1aaa2"><?php echo _u('t31f1aaa2','text'); ?></h2>
                  <p class="text-size-medium" data-textarea="tadb1fdd3"><?php echo _u('tadb1fdd3', 'textarea'); ?></p>
                </div>
                <div class="fs-styleguide_item-wrapper">
                  <div class="fs-styleguide_item-header">
                    <h3 class="text-weight-semibold" data-text="t109fc445"><?php echo _u('t109fc445','text'); ?></h3>
                  </div>
                  <div class="fs-styleguide_3-col is-align-start">
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cc31-a74a061a" class="fs-styleguide_label" data-text="t88e4367"><?php echo _u('t88e4367','text'); ?></div>
                      <div class="padding-bottom">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cc36-a74a061a" class="fs-styleguide_label" data-text="tn5987fe67"><?php echo _u('tn5987fe67','text'); ?></div>
                      <div class="padding-top">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cc3b-a74a061a" class="fs-styleguide_label" data-text="t2737b1b2"><?php echo _u('t2737b1b2','text'); ?></div>
                      <div class="padding-vertical">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cc40-a74a061a" class="fs-styleguide_label" data-text="t7e873760"><?php echo _u('t7e873760','text'); ?></div>
                      <div class="padding-horizontal">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cc45-a74a061a" class="fs-styleguide_label" data-text="t28846843"><?php echo _u('t28846843','text'); ?></div>
                      <div class="padding-left">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cc4a-a74a061a" class="fs-styleguide_label" data-text="tn17a0fea0"><?php echo _u('tn17a0fea0','text'); ?></div>
                      <div class="padding-right">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="fs-styleguide_item-wrapper">
                  <div class="fs-styleguide_item-header">
                    <h3 class="text-weight-semibold" data-text="tca50f07"><?php echo _u('tca50f07','text'); ?></h3>
                  </div>
                  <div class="fs-styleguide_2-col is-align-start">
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cc54-a74a061a" class="fs-styleguide_label" data-text="tn6b2e7e8c"><?php echo _u('tn6b2e7e8c','text'); ?></div>
                      <div class="padding-0">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cc59-a74a061a" class="fs-styleguide_label" data-text="t28881b3c"><?php echo _u('t28881b3c','text'); ?></div>
                      <div class="padding-tiny">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cc5e-a74a061a" class="fs-styleguide_label" data-text="tn5bb29bb5"><?php echo _u('tn5bb29bb5','text'); ?></div>
                      <div class="padding-xxsmall">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cc63-a74a061a" class="fs-styleguide_label" data-text="t2e4dc8cb"><?php echo _u('t2e4dc8cb','text'); ?></div>
                      <div class="padding-xsmall">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cc68-a74a061a" class="fs-styleguide_label" data-text="tn17912bb5"><?php echo _u('tn17912bb5','text'); ?></div>
                      <div class="padding-small">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cc6d-a74a061a" class="fs-styleguide_label" data-text="t1abf38b1"><?php echo _u('t1abf38b1','text'); ?></div>
                      <div class="padding-medium">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cc72-a74a061a" class="fs-styleguide_label" data-text="tn17f90581"><?php echo _u('tn17f90581','text'); ?></div>
                      <div class="padding-large">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cc77-a74a061a" class="fs-styleguide_label" data-text="t2de5eeff"><?php echo _u('t2de5eeff','text'); ?></div>
                      <div class="padding-xlarge">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cc7c-a74a061a" class="fs-styleguide_label" data-text="tn5c1a7581"><?php echo _u('tn5c1a7581','text'); ?></div>
                      <div class="padding-xxlarge">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cc81-a74a061a" class="fs-styleguide_label" data-text="t2882d2e7"><?php echo _u('t2882d2e7','text'); ?></div>
                      <div class="padding-huge">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cc86-a74a061a" class="fs-styleguide_label" data-text="tn174cb199"><?php echo _u('tn174cb199','text'); ?></div>
                      <div class="padding-xhuge">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                    <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cc8a-a74a061a" class="fs-styleguide_spacing">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cc8b-a74a061a" class="fs-styleguide_label" data-text="t2e9242e7"><?php echo _u('t2e9242e7','text'); ?></div>
                      <div class="padding-xxhuge">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cc90-a74a061a" class="fs-styleguide_label" data-text="t484f6124"><?php echo _u('t484f6124','text'); ?></div>
                      <div class="padding-custom1">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cc95-a74a061a" class="fs-styleguide_label" data-text="t484f6125"><?php echo _u('t484f6125','text'); ?></div>
                      <div class="padding-custom2">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cc9a-a74a061a" class="fs-styleguide_label" data-text="t484f6126"><?php echo _u('t484f6126','text'); ?></div>
                      <div class="padding-custom3">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="fs-styleguide_margins">
          <div class="padding-global padding-section-large">
            <div class="container-large">
              <div class="fs-styleguide_section">
                <div class="fs-styleguide_section-header">
                  <h2 class="fs-styleguide_heading-medium" data-text="tn6ac3379b"><?php echo _u('tn6ac3379b','text'); ?></h2>
                  <p class="text-size-medium" data-textarea="tan2063c60d"><?php echo _u('tan2063c60d', 'textarea'); ?></p>
                </div>
                <div class="fs-styleguide_item-wrapper">
                  <div class="fs-styleguide_item-header">
                    <h3 class="text-weight-semibold" data-text="t109fc445"><?php echo _u('t109fc445','text'); ?></h3>
                  </div>
                  <div class="fs-styleguide_3-col is-align-start">
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627ccaf-a74a061a" class="fs-styleguide_label" data-text="t7c565f2a"><?php echo _u('t7c565f2a','text'); ?></div>
                      <div class="margin-bottom">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627ccb4-a74a061a" class="fs-styleguide_label" data-text="t756c34b6"><?php echo _u('t756c34b6','text'); ?></div>
                      <div class="margin-top">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627ccb9-a74a061a" class="fs-styleguide_label" data-text="tn3698174b"><?php echo _u('tn3698174b','text'); ?></div>
                      <div class="margin-vertical">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627ccbe-a74a061a" class="fs-styleguide_label" data-text="t5585b9a3"><?php echo _u('t5585b9a3','text'); ?></div>
                      <div class="margin-horizontal">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627ccc3-a74a061a" class="fs-styleguide_label" data-text="t381698c6"><?php echo _u('t381698c6','text'); ?></div>
                      <div class="margin-left">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627ccc8-a74a061a" class="fs-styleguide_label" data-text="tn34ed1ec3"><?php echo _u('tn34ed1ec3','text'); ?></div>
                      <div class="margin-right">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="fs-styleguide_item-wrapper">
                  <div class="fs-styleguide_item-header">
                    <h3 class="text-weight-semibold" data-text="tca50f07"><?php echo _u('tca50f07','text'); ?></h3>
                  </div>
                  <div class="fs-styleguide_2-col is-align-start">
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627ccd2-a74a061a" class="fs-styleguide_label" data-text="te81d7d1"><?php echo _u('te81d7d1','text'); ?></div>
                      <div class="margin-0">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627ccd7-a74a061a" class="fs-styleguide_label" data-text="t381a4bbf"><?php echo _u('t381a4bbf','text'); ?></div>
                      <div class="margin-tiny">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627ccdc-a74a061a" class="fs-styleguide_label" data-text="tn56773f18"><?php echo _u('tn56773f18','text'); ?></div>
                      <div class="margin-xxsmall">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cce1-a74a061a" class="fs-styleguide_label" data-text="tn5dea1b72"><?php echo _u('tn5dea1b72','text'); ?></div>
                      <div class="margin-xsmall">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cce6-a74a061a" class="fs-styleguide_label" data-text="tn34dd4bd8"><?php echo _u('tn34dd4bd8','text'); ?></div>
                      <div class="margin-small">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cceb-a74a061a" class="fs-styleguide_label" data-text="tn7178ab8c"><?php echo _u('tn7178ab8c','text'); ?></div>
                      <div class="margin-medium">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627ccf0-a74a061a" class="fs-styleguide_label" data-text="tn354525a4"><?php echo _u('tn354525a4','text'); ?></div>
                      <div class="margin-large">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627ccf5-a74a061a" class="fs-styleguide_label" data-text="tn5e51f53e"><?php echo _u('tn5e51f53e','text'); ?></div>
                      <div class="margin-xlarge">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627ccfa-a74a061a" class="fs-styleguide_label" data-text="tn56df18e4"><?php echo _u('tn56df18e4','text'); ?></div>
                      <div class="margin-xxlarge">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627ccff-a74a061a" class="fs-styleguide_label" data-text="t3815036a"><?php echo _u('t3815036a','text'); ?></div>
                      <div class="margin-huge">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cd04-a74a061a" class="fs-styleguide_label" data-text="tn3498d1bc"><?php echo _u('tn3498d1bc','text'); ?></div>
                      <div class="margin-xhuge">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                    <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cd08-a74a061a" class="fs-styleguide_spacing">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cd09-a74a061a" class="fs-styleguide_label" data-text="tn5da5a156"><?php echo _u('tn5da5a156','text'); ?></div>
                      <div class="margin-xxhuge">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cd0e-a74a061a" class="fs-styleguide_label" data-text="t4d8abdc1"><?php echo _u('t4d8abdc1','text'); ?></div>
                      <div class="margin-custom1">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cd13-a74a061a" class="fs-styleguide_label" data-text="t4d8abdc2"><?php echo _u('t4d8abdc2','text'); ?></div>
                      <div class="margin-custom2">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cd18-a74a061a" class="fs-styleguide_label" data-text="t4d8abdc3"><?php echo _u('t4d8abdc3','text'); ?></div>
                      <div class="margin-custom3">
                        <div class="fs-styleguide_empty-box"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="fs-styleguide_spacers">
          <div class="padding-global padding-section-large">
            <div class="container-large">
              <div class="fs-styleguide_section">
                <div class="fs-styleguide_section-header">
                  <h2 class="fs-styleguide_heading-medium" data-text="tn14b69259"><?php echo _u('tn14b69259','text'); ?></h2>
                  <p class="text-size-medium" data-textarea="ta2b589346"><?php echo _u('ta2b589346', 'textarea'); ?></p>
                </div>
                <div class="fs-styleguide_item-wrapper">
                  <div class="fs-styleguide_1-col">
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_30684373-af34-3818-02a4-e58b3ffef3e5-a74a061a" class="fs-styleguide_label" data-text="tn3f117fff"><?php echo _u('tn3f117fff','text'); ?></div>
                      <div class="fs-styleguide_spacer-box">
                        <div class="spacer-tiny"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_30684373-af34-3818-02a4-e58b3ffef3ea-a74a061a" class="fs-styleguide_label" data-text="tn6809f29a"><?php echo _u('tn6809f29a','text'); ?></div>
                      <div class="fs-styleguide_spacer-box">
                        <div class="spacer-xxsmall"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_30684373-af34-3818-02a4-e58b3ffef3ef-a74a061a" class="fs-styleguide_label" data-text="t46ae1050"><?php echo _u('t46ae1050','text'); ?></div>
                      <div class="fs-styleguide_spacer-box">
                        <div class="spacer-xsmall"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_30684373-af34-3818-02a4-e58b3ffef3f4-a74a061a" class="fs-styleguide_label" data-text="t5cd50826"><?php echo _u('t5cd50826','text'); ?></div>
                      <div class="fs-styleguide_spacer-box">
                        <div class="spacer-small"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_30684373-af34-3818-02a4-e58b3ffef3f9-a74a061a" class="fs-styleguide_label" data-text="t331f8036"><?php echo _u('t331f8036','text'); ?></div>
                      <div class="fs-styleguide_spacer-box">
                        <div class="spacer-medium"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_30684373-af34-3818-02a4-e58b3ffef3fe-a74a061a" class="fs-styleguide_label" data-text="t5c6d2e5a"><?php echo _u('t5c6d2e5a','text'); ?></div>
                      <div class="fs-styleguide_spacer-box">
                        <div class="spacer-large"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_30684373-af34-3818-02a4-e58b3ffef403-a74a061a" class="fs-styleguide_label" data-text="t46463684"><?php echo _u('t46463684','text'); ?></div>
                      <div class="fs-styleguide_spacer-box">
                        <div class="spacer-xlarge"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_30684373-af34-3818-02a4-e58b3ffef408-a74a061a" class="fs-styleguide_label" data-text="tn6871cc66"><?php echo _u('tn6871cc66','text'); ?></div>
                      <div class="fs-styleguide_spacer-box">
                        <div class="spacer-xxlarge"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_30684373-af34-3818-02a4-e58b3ffef40d-a74a061a" class="fs-styleguide_label" data-text="tn3f16c854"><?php echo _u('tn3f16c854','text'); ?></div>
                      <div class="fs-styleguide_spacer-box">
                        <div class="spacer-huge"></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_spacing">
                      <div id="w-node-_30684373-af34-3818-02a4-e58b3ffef412-a74a061a" class="fs-styleguide_label" data-text="t5d198242"><?php echo _u('t5d198242','text'); ?></div>
                      <div class="fs-styleguide_spacer-box">
                        <div class="spacer-xhuge"></div>
                      </div>
                    </div>
                    <div id="w-node-_30684373-af34-3818-02a4-e58b3ffef416-a74a061a" class="fs-styleguide_spacing">
                      <div id="w-node-_30684373-af34-3818-02a4-e58b3ffef417-a74a061a" class="fs-styleguide_label" data-text="t46f28a6c"><?php echo _u('t46f28a6c','text'); ?></div>
                      <div class="fs-styleguide_spacer-box">
                        <div id="w-node-_30684373-af34-3818-02a4-e58b3ffef41a-a74a061a" class="spacer-xxhuge"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="fs-styleguide_spacing-all">
          <div class="fs-styleguide_spacing-sizes">
            <div class="margin-0"></div>
            <div class="margin-tiny"></div>
            <div class="margin-xxsmall"></div>
            <div class="margin-xsmall"></div>
            <div class="margin-small"></div>
            <div class="margin-medium"></div>
            <div class="margin-large"></div>
            <div class="margin-xlarge"></div>
            <div class="margin-xxlarge"></div>
            <div class="margin-huge"></div>
            <div class="margin-xhuge"></div>
            <div class="margin-xxhuge"></div>
            <div class="margin-custom1"></div>
            <div class="margin-custom2"></div>
            <div class="margin-custom3"></div>
            <div class="padding-0"></div>
            <div class="padding-tiny"></div>
            <div class="padding-xxsmall"></div>
            <div class="padding-xsmall"></div>
            <div class="padding-small"></div>
            <div class="padding-medium"></div>
            <div class="padding-large"></div>
            <div class="padding-xlarge"></div>
            <div class="padding-xxlarge"></div>
            <div class="padding-huge"></div>
            <div class="padding-xhuge"></div>
            <div class="padding-xxhuge"></div>
            <div class="padding-custom1"></div>
            <div class="padding-custom2"></div>
            <div class="padding-custom3"></div>
          </div>
          <div class="fs-styleguide_spacing-directions">
            <div class="margin-top"></div>
            <div class="margin-bottom"></div>
            <div class="margin-left"></div>
            <div class="margin-right"></div>
            <div class="margin-vertical"></div>
            <div class="margin-horizontal"></div>
            <div class="padding-top"></div>
            <div class="padding-bottom"></div>
            <div class="padding-left"></div>
            <div class="padding-right"></div>
            <div class="padding-vertical"></div>
            <div class="padding-horizontal"></div>
          </div>
        </div>
        <section class="fs-styleguide_icons">
          <div class="padding-global padding-section-large">
            <div class="container-large">
              <div class="fs-styleguide_section">
                <div class="fs-styleguide_section-header">
                  <h2 class="fs-styleguide_heading-medium" data-text="t43362fa"><?php echo _u('t43362fa','text'); ?></h2>
                  <p class="text-size-medium" data-textarea="ta99e72a8"><?php echo _u('ta99e72a8', 'textarea'); ?></p>
                </div>
                <div class="fs-styleguide_item-wrapper">
                  <div class="fs-styleguide_2-col">
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="t78b935b5"><?php echo _u('t78b935b5','text'); ?></div><img src="<?php echo udesly_get_image(_u('i317f733b', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i317f733b', 'img'))->alt ?>" class="icon-height-small" data-img="i317f733b" srcset="<?php echo udesly_get_image(_u('i317f733b', 'img'))->srcset ?>">
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn6c3efb79"><?php echo _u('tn6c3efb79','text'); ?></div><img src="<?php echo udesly_get_image(_u('i317f733b', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i317f733b', 'img'))->alt ?>" class="icon-height-medium" data-img="i317f733b" srcset="<?php echo udesly_get_image(_u('i317f733b', 'img'))->srcset ?>">
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="t78515be9"><?php echo _u('t78515be9','text'); ?></div><img src="<?php echo udesly_get_image(_u('i317f733b', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i317f733b', 'img'))->alt ?>" class="icon-height-large" data-img="i317f733b" srcset="<?php echo udesly_get_image(_u('i317f733b', 'img'))->srcset ?>">
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn581f1c30"><?php echo _u('tn581f1c30','text'); ?></div>
                      <div class="fs-styleguide_row">
                        <div class="icon-1x1-small w-embed"><svg aria-hidden="true" role="img" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <title>X icon</title>
                            <g>
                              <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path>
                            </g>
                          </svg></div>
                        <div class="icon-1x1-small w-embed"><svg aria-hidden="true" role="img" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <title>Facebook icon</title>
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path>
                          </svg></div>
                        <div class="icon-1x1-small w-embed"><svg aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>Instagram icon</title>
                            <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"></path>
                          </svg></div>
                        <div class="icon-1x1-small w-embed"><svg aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>LinkedIn icon</title>
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                          </svg></div>
                        <div class="icon-1x1-small w-embed"><svg aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>Slack icon</title>
                            <path d="M5.042 15.165a2.528 2.528 0 0 1-2.52 2.523A2.528 2.528 0 0 1 0 15.165a2.527 2.527 0 0 1 2.522-2.52h2.52v2.52zM6.313 15.165a2.527 2.527 0 0 1 2.521-2.52 2.527 2.527 0 0 1 2.521 2.52v6.313A2.528 2.528 0 0 1 8.834 24a2.528 2.528 0 0 1-2.521-2.522v-6.313zM8.834 5.042a2.528 2.528 0 0 1-2.521-2.52A2.528 2.528 0 0 1 8.834 0a2.528 2.528 0 0 1 2.521 2.522v2.52H8.834zM8.834 6.313a2.528 2.528 0 0 1 2.521 2.521 2.528 2.528 0 0 1-2.521 2.521H2.522A2.528 2.528 0 0 1 0 8.834a2.528 2.528 0 0 1 2.522-2.521h6.312zM18.956 8.834a2.528 2.528 0 0 1 2.522-2.521A2.528 2.528 0 0 1 24 8.834a2.528 2.528 0 0 1-2.522 2.521h-2.522V8.834zM17.688 8.834a2.528 2.528 0 0 1-2.523 2.521 2.527 2.527 0 0 1-2.52-2.521V2.522A2.527 2.527 0 0 1 15.165 0a2.528 2.528 0 0 1 2.523 2.522v6.312zM15.165 18.956a2.528 2.528 0 0 1 2.523 2.522A2.528 2.528 0 0 1 15.165 24a2.527 2.527 0 0 1-2.52-2.522v-2.522h2.52zM15.165 17.688a2.527 2.527 0 0 1-2.52-2.523 2.526 2.526 0 0 1 2.52-2.52h6.313A2.527 2.527 0 0 1 24 15.165a2.528 2.528 0 0 1-2.522 2.523h-6.313z"></path>
                          </svg></div>
                        <div class="icon-1x1-small w-embed"><svg aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>Dribbble icon</title>
                            <path d="M12 24C5.385 24 0 18.615 0 12S5.385 0 12 0s12 5.385 12 12-5.385 12-12 12zm10.12-10.358c-.35-.11-3.17-.953-6.384-.438 1.34 3.684 1.887 6.684 1.992 7.308 2.3-1.555 3.936-4.02 4.395-6.87zm-6.115 7.808c-.153-.9-.75-4.032-2.19-7.77l-.066.02c-5.79 2.015-7.86 6.025-8.04 6.4 1.73 1.358 3.92 2.166 6.29 2.166 1.42 0 2.77-.29 4-.814zm-11.62-2.58c.232-.4 3.045-5.055 8.332-6.765.135-.045.27-.084.405-.12-.26-.585-.54-1.167-.832-1.74C7.17 11.775 2.206 11.71 1.756 11.7l-.004.312c0 2.633.998 5.037 2.634 6.855zm-2.42-8.955c.46.008 4.683.026 9.477-1.248-1.698-3.018-3.53-5.558-3.8-5.928-2.868 1.35-5.01 3.99-5.676 7.17zM9.6 2.052c.282.38 2.145 2.914 3.822 6 3.645-1.365 5.19-3.44 5.373-3.702-1.81-1.61-4.19-2.586-6.795-2.586-.825 0-1.63.1-2.4.285zm10.335 3.483c-.218.29-1.935 2.493-5.724 4.04.24.49.47.985.68 1.486.08.18.15.36.22.53 3.41-.43 6.8.26 7.14.33-.02-2.42-.88-4.64-2.31-6.38z"></path>
                          </svg></div>
                        <div class="icon-1x1-small w-embed"><svg aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>Pinterest icon</title>
                            <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.162-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.401.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.354-.629-2.758-1.379l-.749 2.848c-.269 1.045-1.004 2.352-1.498 3.146 1.123.345 2.306.535 3.55.535 6.607 0 11.985-5.365 11.985-11.987C23.97 5.39 18.592.026 11.985.026L12.017 0z"></path>
                          </svg></div>
                        <div class="icon-1x1-small w-embed"><svg aria-hidden="true" role="img" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <title>YouTube icon</title>
                            <path d="M23.499 6.203a3.008 3.008 0 00-2.089-2.089c-1.87-.501-9.4-.501-9.4-.501s-7.509-.01-9.399.501a3.008 3.008 0 00-2.088 2.09A31.258 31.26 0 000 12.01a31.258 31.26 0 00.523 5.785 3.008 3.008 0 002.088 2.089c1.869.502 9.4.502 9.4.502s7.508 0 9.399-.502a3.008 3.008 0 002.089-2.09 31.258 31.26 0 00.5-5.784 31.258 31.26 0 00-.5-5.808zm-13.891 9.4V8.407l6.266 3.604z"></path>
                          </svg></div>
                        <div class="icon-1x1-small w-embed"><svg aria-hidden="true" fill="currentColor" role="img" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Arrow Right</title>
                            <polygon points="16.172 9 10.101 2.929 11.515 1.515 20 10 19.293 10.707 11.515 18.485 10.101 17.071 16.172 11 0 11 0 9">
                          </polygon></svg></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="t498f19cc"><?php echo _u('t498f19cc','text'); ?></div>
                      <div class="fs-styleguide_row">
                        <div class="icon-1x1-medium w-embed"><svg aria-hidden="true" role="img" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <title>X icon</title>
                            <g>
                              <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path>
                            </g>
                          </svg></div>
                        <div class="icon-1x1-medium w-embed"><svg aria-hidden="true" role="img" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <title>Facebook icon</title>
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path>
                          </svg></div>
                        <div class="icon-1x1-medium w-embed"><svg aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>Instagram icon</title>
                            <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"></path>
                          </svg></div>
                        <div class="icon-1x1-medium w-embed"><svg aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>LinkedIn icon</title>
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                          </svg></div>
                        <div class="icon-1x1-medium w-embed"><svg aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>Slack icon</title>
                            <path d="M5.042 15.165a2.528 2.528 0 0 1-2.52 2.523A2.528 2.528 0 0 1 0 15.165a2.527 2.527 0 0 1 2.522-2.52h2.52v2.52zM6.313 15.165a2.527 2.527 0 0 1 2.521-2.52 2.527 2.527 0 0 1 2.521 2.52v6.313A2.528 2.528 0 0 1 8.834 24a2.528 2.528 0 0 1-2.521-2.522v-6.313zM8.834 5.042a2.528 2.528 0 0 1-2.521-2.52A2.528 2.528 0 0 1 8.834 0a2.528 2.528 0 0 1 2.521 2.522v2.52H8.834zM8.834 6.313a2.528 2.528 0 0 1 2.521 2.521 2.528 2.528 0 0 1-2.521 2.521H2.522A2.528 2.528 0 0 1 0 8.834a2.528 2.528 0 0 1 2.522-2.521h6.312zM18.956 8.834a2.528 2.528 0 0 1 2.522-2.521A2.528 2.528 0 0 1 24 8.834a2.528 2.528 0 0 1-2.522 2.521h-2.522V8.834zM17.688 8.834a2.528 2.528 0 0 1-2.523 2.521 2.527 2.527 0 0 1-2.52-2.521V2.522A2.527 2.527 0 0 1 15.165 0a2.528 2.528 0 0 1 2.523 2.522v6.312zM15.165 18.956a2.528 2.528 0 0 1 2.523 2.522A2.528 2.528 0 0 1 15.165 24a2.527 2.527 0 0 1-2.52-2.522v-2.522h2.52zM15.165 17.688a2.527 2.527 0 0 1-2.52-2.523 2.526 2.526 0 0 1 2.52-2.52h6.313A2.527 2.527 0 0 1 24 15.165a2.528 2.528 0 0 1-2.522 2.523h-6.313z"></path>
                          </svg></div>
                        <div class="icon-1x1-medium w-embed"><svg aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>Dribbble icon</title>
                            <path d="M12 24C5.385 24 0 18.615 0 12S5.385 0 12 0s12 5.385 12 12-5.385 12-12 12zm10.12-10.358c-.35-.11-3.17-.953-6.384-.438 1.34 3.684 1.887 6.684 1.992 7.308 2.3-1.555 3.936-4.02 4.395-6.87zm-6.115 7.808c-.153-.9-.75-4.032-2.19-7.77l-.066.02c-5.79 2.015-7.86 6.025-8.04 6.4 1.73 1.358 3.92 2.166 6.29 2.166 1.42 0 2.77-.29 4-.814zm-11.62-2.58c.232-.4 3.045-5.055 8.332-6.765.135-.045.27-.084.405-.12-.26-.585-.54-1.167-.832-1.74C7.17 11.775 2.206 11.71 1.756 11.7l-.004.312c0 2.633.998 5.037 2.634 6.855zm-2.42-8.955c.46.008 4.683.026 9.477-1.248-1.698-3.018-3.53-5.558-3.8-5.928-2.868 1.35-5.01 3.99-5.676 7.17zM9.6 2.052c.282.38 2.145 2.914 3.822 6 3.645-1.365 5.19-3.44 5.373-3.702-1.81-1.61-4.19-2.586-6.795-2.586-.825 0-1.63.1-2.4.285zm10.335 3.483c-.218.29-1.935 2.493-5.724 4.04.24.49.47.985.68 1.486.08.18.15.36.22.53 3.41-.43 6.8.26 7.14.33-.02-2.42-.88-4.64-2.31-6.38z"></path>
                          </svg></div>
                        <div class="icon-1x1-medium w-embed"><svg aria-hidden="true" role="img" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <title>YouTube icon</title>
                            <path d="M23.499 6.203a3.008 3.008 0 00-2.089-2.089c-1.87-.501-9.4-.501-9.4-.501s-7.509-.01-9.399.501a3.008 3.008 0 00-2.088 2.09A31.258 31.26 0 000 12.01a31.258 31.26 0 00.523 5.785 3.008 3.008 0 002.088 2.089c1.869.502 9.4.502 9.4.502s7.508 0 9.399-.502a3.008 3.008 0 002.089-2.09 31.258 31.26 0 00.5-5.784 31.258 31.26 0 00-.5-5.808zm-13.891 9.4V8.407l6.266 3.604z"></path>
                          </svg></div>
                        <div class="icon-1x1-medium w-embed"><svg aria-hidden="true" fill="currentColor" role="img" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Arrow Right</title>
                            <polygon points="16.172 9 10.101 2.929 11.515 1.515 20 10 19.293 10.707 11.515 18.485 10.101 17.071 16.172 11 0 11 0 9">
                          </polygon></svg></div>
                      </div>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn5886f5fc"><?php echo _u('tn5886f5fc','text'); ?></div>
                      <div class="fs-styleguide_row">
                        <div class="icon-1x1-large w-embed"><svg aria-hidden="true" role="img" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <title>X icon</title>
                            <g>
                              <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path>
                            </g>
                          </svg></div>
                        <div class="icon-1x1-large w-embed"><svg aria-hidden="true" role="img" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <title>Facebook icon</title>
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path>
                          </svg></div>
                        <div class="icon-1x1-large w-embed"><svg aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>Instagram icon</title>
                            <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"></path>
                          </svg></div>
                        <div class="icon-1x1-large w-embed"><svg aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>LinkedIn icon</title>
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                          </svg></div>
                        <div class="icon-1x1-large w-embed"><svg aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>Slack icon</title>
                            <path d="M5.042 15.165a2.528 2.528 0 0 1-2.52 2.523A2.528 2.528 0 0 1 0 15.165a2.527 2.527 0 0 1 2.522-2.52h2.52v2.52zM6.313 15.165a2.527 2.527 0 0 1 2.521-2.52 2.527 2.527 0 0 1 2.521 2.52v6.313A2.528 2.528 0 0 1 8.834 24a2.528 2.528 0 0 1-2.521-2.522v-6.313zM8.834 5.042a2.528 2.528 0 0 1-2.521-2.52A2.528 2.528 0 0 1 8.834 0a2.528 2.528 0 0 1 2.521 2.522v2.52H8.834zM8.834 6.313a2.528 2.528 0 0 1 2.521 2.521 2.528 2.528 0 0 1-2.521 2.521H2.522A2.528 2.528 0 0 1 0 8.834a2.528 2.528 0 0 1 2.522-2.521h6.312zM18.956 8.834a2.528 2.528 0 0 1 2.522-2.521A2.528 2.528 0 0 1 24 8.834a2.528 2.528 0 0 1-2.522 2.521h-2.522V8.834zM17.688 8.834a2.528 2.528 0 0 1-2.523 2.521 2.527 2.527 0 0 1-2.52-2.521V2.522A2.527 2.527 0 0 1 15.165 0a2.528 2.528 0 0 1 2.523 2.522v6.312zM15.165 18.956a2.528 2.528 0 0 1 2.523 2.522A2.528 2.528 0 0 1 15.165 24a2.527 2.527 0 0 1-2.52-2.522v-2.522h2.52zM15.165 17.688a2.527 2.527 0 0 1-2.52-2.523 2.526 2.526 0 0 1 2.52-2.52h6.313A2.527 2.527 0 0 1 24 15.165a2.528 2.528 0 0 1-2.522 2.523h-6.313z"></path>
                          </svg></div>
                        <div class="icon-1x1-large w-embed"><svg aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>Dribbble icon</title>
                            <path d="M12 24C5.385 24 0 18.615 0 12S5.385 0 12 0s12 5.385 12 12-5.385 12-12 12zm10.12-10.358c-.35-.11-3.17-.953-6.384-.438 1.34 3.684 1.887 6.684 1.992 7.308 2.3-1.555 3.936-4.02 4.395-6.87zm-6.115 7.808c-.153-.9-.75-4.032-2.19-7.77l-.066.02c-5.79 2.015-7.86 6.025-8.04 6.4 1.73 1.358 3.92 2.166 6.29 2.166 1.42 0 2.77-.29 4-.814zm-11.62-2.58c.232-.4 3.045-5.055 8.332-6.765.135-.045.27-.084.405-.12-.26-.585-.54-1.167-.832-1.74C7.17 11.775 2.206 11.71 1.756 11.7l-.004.312c0 2.633.998 5.037 2.634 6.855zm-2.42-8.955c.46.008 4.683.026 9.477-1.248-1.698-3.018-3.53-5.558-3.8-5.928-2.868 1.35-5.01 3.99-5.676 7.17zM9.6 2.052c.282.38 2.145 2.914 3.822 6 3.645-1.365 5.19-3.44 5.373-3.702-1.81-1.61-4.19-2.586-6.795-2.586-.825 0-1.63.1-2.4.285zm10.335 3.483c-.218.29-1.935 2.493-5.724 4.04.24.49.47.985.68 1.486.08.18.15.36.22.53 3.41-.43 6.8.26 7.14.33-.02-2.42-.88-4.64-2.31-6.38z"></path>
                          </svg></div>
                        <div class="icon-1x1-large w-embed"><svg aria-hidden="true" role="img" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <title>YouTube icon</title>
                            <path d="M23.499 6.203a3.008 3.008 0 00-2.089-2.089c-1.87-.501-9.4-.501-9.4-.501s-7.509-.01-9.399.501a3.008 3.008 0 00-2.088 2.09A31.258 31.26 0 000 12.01a31.258 31.26 0 00.523 5.785 3.008 3.008 0 002.088 2.089c1.869.502 9.4.502 9.4.502s7.508 0 9.399-.502a3.008 3.008 0 002.089-2.09 31.258 31.26 0 00.5-5.784 31.258 31.26 0 00-.5-5.808zm-13.891 9.4V8.407l6.266 3.604z"></path>
                          </svg></div>
                        <div class="icon-1x1-large w-embed"><svg aria-hidden="true" fill="currentColor" role="img" viewBox="0 0 20 21" xmlns="http://www.w3.org/2000/svg">
                            <title>Arrow Right</title>
                            <polygon points="16.172 9 10.101 2.929 11.515 1.515 20 10 19.293 10.707 11.515 18.485 10.101 17.071 16.172 11 0 11 0 9">
                          </polygon></svg></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="fs-styleguide_utility-classes">
          <div class="padding-global padding-section-large">
            <div class="container-large">
              <div class="fs-styleguide_section">
                <div class="fs-styleguide_section-header">
                  <h2 class="fs-styleguide_heading-medium" data-text="tn5f19a7fa"><?php echo _u('tn5f19a7fa','text'); ?></h2>
                  <p class="text-size-medium" data-textarea="tan171f51ce"><?php echo _u('tan171f51ce', 'textarea'); ?></p>
                </div>
                <div class="fs-styleguide_item-wrapper">
                  <div class="fs-styleguide_4-col">
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="t30dd42"><?php echo _u('t30dd42','text'); ?></div>
                      <div class="hide"></div>
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cd6b-a74a061a" data-text="tbfe805a"><?php echo _u('tbfe805a','text'); ?></div>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn527642af"><?php echo _u('tn527642af','text'); ?></div>
                      <main class="hide-tablet">
                        <div class="fs-styleguide_empty-box"></div>
                      </main>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn3429a225"><?php echo _u('tn3429a225','text'); ?></div>
                      <main class="hide-mobile-portrait">
                        <div class="fs-styleguide_empty-box"></div>
                      </main>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn3f446785"><?php echo _u('tn3f446785','text'); ?></div>
                      <main class="hide-mobile-landscape">
                        <div class="fs-styleguide_empty-box"></div>
                      </main>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn5c729a59"><?php echo _u('tn5c729a59','text'); ?></div>
                      <main class="overflow-visible">
                        <div class="fs-styleguide_empty-box"></div>
                      </main>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn6d7ad22b"><?php echo _u('tn6d7ad22b','text'); ?></div>
                      <main class="overflow-hidden">
                        <div class="fs-styleguide_empty-box"></div>
                      </main>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="t21707c9a"><?php echo _u('t21707c9a','text'); ?></div>
                      <main class="overflow-auto">
                        <div class="fs-styleguide_empty-box"></div>
                      </main>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn5b038908"><?php echo _u('tn5b038908','text'); ?></div>
                      <main class="overflow-scroll">
                        <div class="fs-styleguide_empty-box"></div>
                      </main>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn2a4d3dad"><?php echo _u('tn2a4d3dad','text'); ?></div>
                      <main class="pointer-events-auto">
                        <div class="fs-styleguide_empty-box"></div>
                      </main>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn2a476c24"><?php echo _u('tn2a476c24','text'); ?></div>
                      <main id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cd98-a74a061a" class="pointer-events-none">
                        <div class="fs-styleguide_empty-box"></div>
                      </main>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="t61fd551"><?php echo _u('t61fd551','text'); ?></div>
                      <main class="layer"></main>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="t7387303f"><?php echo _u('t7387303f','text'); ?></div>
                      <main class="spacing-clean">
                        <div class="fs-styleguide_empty-box"></div>
                      </main>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="t325fa01d"><?php echo _u('t325fa01d','text'); ?></div>
                      <main class="align-center">
                        <div class="fs-styleguide_empty-box"></div>
                      </main>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="t5f060ba3"><?php echo _u('t5f060ba3','text'); ?></div>
                      <main class="z-index-1"></main>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="t5f060ba4"><?php echo _u('t5f060ba4','text'); ?></div>
                      <main class="z-index-2"></main>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn137213ef"><?php echo _u('tn137213ef','text'); ?></div>
                      <main class="inherit-color">
                        <div class="fs-styleguide_empty-box"></div>
                      </main>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="t43a4074"><?php echo _u('t43a4074','text'); ?></div>
                      <main class="aspect-ratio-square">
                        <div class="fs-styleguide_empty-box"></div>
                      </main>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="t39292932"><?php echo _u('t39292932','text'); ?></div>
                      <main class="aspect-ratio-portrait">
                        <div class="fs-styleguide_empty-box"></div>
                      </main>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="tn23dc7fc"><?php echo _u('tn23dc7fc','text'); ?></div>
                      <main class="aspect-ratio-landscape">
                        <div class="fs-styleguide_empty-box"></div>
                      </main>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="t1f228d6"><?php echo _u('t1f228d6','text'); ?></div>
                      <main class="aspect-ratio-widescreen">
                        <div class="fs-styleguide_empty-box"></div>
                      </main>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="fs-styleguide_webflow-elements">
          <div class="padding-global padding-section-large">
            <div class="container-large">
              <div class="fs-styleguide_section">
                <div class="fs-styleguide_section-header">
                  <h2 class="fs-styleguide_heading-medium" data-text="t7f8c94f5"><?php echo _u('t7f8c94f5','text'); ?></h2>
                  <p class="text-size-medium" data-textarea="ta61b8185"><?php echo _u('ta61b8185', 'textarea'); ?></p>
                </div>
                <div class="fs-styleguide_item-wrapper">
                  <div class="fs-styleguide_1-col">
                    <div class="fs-styleguide_item is-stretch">
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cdc7-a74a061a" class="fs-styleguide_label" data-text="tn708600be"><?php echo _u('tn708600be','text'); ?></div>
                      <p class="text-size-medium" data-textarea="tan1ab561c4"><?php echo _u('tan1ab561c4', 'textarea'); ?></p>
                      <div class="form_component w-form">
                        <form id="wf-form-Form" name="wf-form-Form" data-name="Form" method="get" class="form_form" data-wf-page-id="695d8a103a0ee4e2a74a061a" data-wf-element-id="32eadc24-e391-a089-abe0-fb5b6627cdca" data-ajax-action="contact"><label for="contact[email]">Email</label><input type="email" name="contact[email]" class="w-input" required="">
                          <div class="form_field-wrapper"><label for="First-Name-3" class="form_label">Text Input</label><input class="form_input w-input" maxlength="256" name="contact[first-name]" data-name="First Name" placeholder="First Name" type="text" id="First-Name-3"></div>
                          <div class="form_field-wrapper"><label for="Message-3" class="form_label">Text Area</label><textarea id="Message-3" name="contact[message]" maxlength="5000" data-name="Message" placeholder="Message" class="form_input is-text-area w-input"></textarea></div>
                          <div class="form_field-wrapper"><label for="contact[select]" class="form_label">Select field</label><select id="Select" name="contact[select]" data-name="Select" class="form_input is-select-input w-select">
                              <option value="">Select one...</option>
                              <option value="First">First Choice</option>
                              <option value="Second">Second Choice</option>
                              <option value="Third">Third Choice</option>
                            </select></div>
                          <div class="form_field-wrapper"><label for="email" class="form_label">Checkbox field</label><label class="w-checkbox form_checkbox">
                              <div class="w-checkbox-input w-checkbox-input--inputType-custom form_checkbox-icon w--redirected-checked"></div><input id="Checkbox" type="checkbox" name="contact[checkbox]" data-name="Checkbox" style="opacity:0;position:absolute;z-index:-1" checked=""><span for="Checkbox" class="form_checkbox-label w-form-label">Checkbox</span>
                            </label></div>
                          <div class="form_field-wrapper"><label for="email" class="form_label">Radio button</label><label class="form_radio w-radio"><input id="radio" type="radio" name="contact[radio]" data-name="Radio" class="w-form-formradioinput form_radio-icon w-radio-input" value="Radio"><span class="form_radio-label w-form-label" for="radio">Radio</span></label></div><input type="submit" data-wait="Please wait..." class="button is-form-submit w-button" value="Submit">
                        <?php udesly_honeypot_field() ?></form>
                        <div class="form_message-success w-form-done">
                          <div data-text="t5a0ea5a1"><?php echo _u('t5a0ea5a1','text'); ?></div>
                        </div>
                        <div class="form_message-error w-form-fail">
                          <div data-text="tn7c112e99"><?php echo _u('tn7c112e99','text'); ?></div>
                        </div>
                      </div>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="t41067ade"><?php echo _u('t41067ade','text'); ?></div>
                      <div class="text-rich-text w-richtext" data-richtext="rn5ab53fda"><?php echo _u('rn5ab53fda', 'richtext'); ?></div>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label" data-text="t5bd6f0e1"><?php echo _u('t5bd6f0e1','text'); ?></div>
                      <div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="nav_component w-nav">
                        <div class="padding-global">
                          <div class="nav_container">
                            <a href="<?php echo _u('a23','link'); ?>" class="nav_brand w-nav-brand" data-link="a23"><img src="<?php echo udesly_get_image(_u('in2a485a80', 'img'))->src ?>" loading="eager" sizes="(max-width: 673px) 98vw, 660px" srcset="<?php echo udesly_get_image(_u('in2a485a80', 'img'))->srcset ?>" alt="<?php echo udesly_get_image(_u('in2a485a80', 'img'))->alt ?>" class="nav_logo" data-img="in2a485a80"></a>
                            <div class="nav_island">
                              <nav role="navigation" class="nav-menu w-nav-menu">
                                <a href="<?php echo _u('a23','link'); ?>" class="navigation-link w-nav-link" data-text="tn37ac8366" data-link="a23"><?php echo _u('tn37ac8366','text'); ?></a>
                                <div data-delay="150" data-hover="true" class="dropdown w-dropdown">
                                  <div class="dropdown-toggle w-dropdown-toggle">
                                    <div class="drop-arrow-plain w-icon-dropdown-toggle"></div>
                                    <div data-text="t560f747e"><?php echo _u('t560f747e','text'); ?></div>
                                  </div>
                                  <nav class="dropdown-list w-dropdown-list">
                                    <div class="dropdown-list-full-wrapper">
                                      <div class="navigation-drop-container">
                                        <div class="navigation-column">
                                          <a href="<?php echo _u('a23','link'); ?>" class="navigation-link-block w-inline-block" data-link="a23">
                                            <div class="nav-content-wrap">
                                              <div class="nav-title" data-text="t3676085d"><?php echo _u('t3676085d','text'); ?></div>
                                              <div class="nav-link-details" data-text="t31731ab1"><?php echo _u('t31731ab1','text'); ?></div>
                                            </div>
                                          </a>
                                          <a href="<?php echo _u('a23','link'); ?>" class="navigation-link-block w-inline-block" data-link="a23">
                                            <div class="nav-content-wrap">
                                              <div class="nav-title" data-text="tn3fcc7298"><?php echo _u('tn3fcc7298','text'); ?></div>
                                              <div class="nav-link-details" data-text="t31731ab1"><?php echo _u('t31731ab1','text'); ?></div>
                                            </div>
                                          </a>
                                        </div>
                                        <div class="navigation-column">
                                          <a href="<?php echo _u('a23','link'); ?>" class="navigation-link-block w-inline-block" data-link="a23">
                                            <div class="nav-content-wrap">
                                              <div class="nav-title" data-text="t76790f29"><?php echo _u('t76790f29','text'); ?></div>
                                              <div class="nav-link-details" data-text="t31731ab1"><?php echo _u('t31731ab1','text'); ?></div>
                                            </div>
                                          </a>
                                          <a href="<?php echo _u('a23','link'); ?>" class="navigation-link-block w-inline-block" data-link="a23">
                                            <div class="nav-content-wrap">
                                              <div class="nav-title" data-text="t3d03eedd"><?php echo _u('t3d03eedd','text'); ?></div>
                                              <div class="nav-link-details" data-text="t31731ab1"><?php echo _u('t31731ab1','text'); ?></div>
                                            </div>
                                          </a>
                                        </div>
                                        <div class="navigation-column">
                                          <a href="<?php echo _u('a23','link'); ?>" class="navigation-link-block w-inline-block" data-link="a23">
                                            <div class="nav-content-wrap">
                                              <div class="nav-title" data-text="tn21e93442"><?php echo _u('tn21e93442','text'); ?></div>
                                              <div class="nav-link-details" data-text="t31731ab1"><?php echo _u('t31731ab1','text'); ?></div>
                                            </div>
                                          </a>
                                          <a href="<?php echo _u('a23','link'); ?>" class="navigation-link-block w-inline-block" data-link="a23">
                                            <div class="nav-content-wrap">
                                              <div class="nav-title" data-text="t6e5a2565"><?php echo _u('t6e5a2565','text'); ?></div>
                                              <div class="nav-link-details" data-text="t31731ab1"><?php echo _u('t31731ab1','text'); ?></div>
                                            </div>
                                          </a>
                                        </div>
                                        <div class="navigation-column">
                                          <a href="<?php echo _u('a23','link'); ?>" class="navigation-link-block w-inline-block" data-link="a23">
                                            <div class="nav-content-wrap">
                                              <div class="nav-title" data-text="t261f296a"><?php echo _u('t261f296a','text'); ?></div>
                                              <div class="nav-link-details" data-text="t31731ab1"><?php echo _u('t31731ab1','text'); ?></div>
                                            </div>
                                          </a>
                                        </div>
                                      </div>
                                      <div class="navigation-bottom-bar">
                                        <a href="<?php echo _u('a23','link'); ?>" class="large-link w-inline-block" data-link="a23">
                                          <div data-text="t4023228c"><?php echo _u('t4023228c','text'); ?></div>
                                        </a>
                                      </div>
                                    </div>
                                  </nav>
                                </div>
                                <div data-delay="150" data-hover="true" class="dropdown w-dropdown">
                                  <div class="dropdown-toggle w-dropdown-toggle">
                                    <div class="drop-arrow-plain w-icon-dropdown-toggle"></div>
                                    <div data-text="tn6bc46a0a"><?php echo _u('tn6bc46a0a','text'); ?></div>
                                  </div>
                                  <nav class="dropdown-list w-dropdown-list">
                                    <div class="dropdown-list-full-wrapper">
                                      <div class="navigation-drop-container">
                                        <div class="navigation-column">
                                          <a href="<?php echo _u('a23','link'); ?>" class="navigation-link-block w-inline-block" data-link="a23">
                                            <div class="nav-content-wrap">
                                              <div class="nav-title" data-text="t645f0031"><?php echo _u('t645f0031','text'); ?></div>
                                              <div class="nav-link-details" data-text="tn2ae076bb"><?php echo _u('tn2ae076bb','text'); ?></div>
                                            </div>
                                          </a>
                                        </div>
                                        <div class="navigation-column">
                                          <a href="<?php echo _u('a23','link'); ?>" class="navigation-link-block w-inline-block" data-link="a23">
                                            <div class="nav-content-wrap">
                                              <div class="nav-title" data-text="tn7bc27f6b"><?php echo _u('tn7bc27f6b','text'); ?></div>
                                              <div class="nav-link-details" data-text="tn2ae076bb"><?php echo _u('tn2ae076bb','text'); ?></div>
                                            </div>
                                          </a>
                                        </div>
                                        <div class="navigation-column">
                                          <a href="<?php echo _u('a23','link'); ?>" class="navigation-link-block w-inline-block" data-link="a23">
                                            <div class="nav-content-wrap">
                                              <div class="nav-title" data-text="tnac4f42e"><?php echo _u('tnac4f42e','text'); ?></div>
                                              <div class="nav-link-details" data-text="tn2ae076bb"><?php echo _u('tn2ae076bb','text'); ?></div>
                                            </div>
                                          </a>
                                        </div>
                                        <div class="navigation-column">
                                          <a href="<?php echo _u('a23','link'); ?>" class="navigation-link-block w-inline-block" data-link="a23">
                                            <div class="nav-content-wrap">
                                              <div class="nav-title" data-text="tn697be218"><?php echo _u('tn697be218','text'); ?></div>
                                              <div class="nav-link-details" data-text="tn2ae076bb"><?php echo _u('tn2ae076bb','text'); ?></div>
                                            </div>
                                          </a>
                                        </div>
                                      </div>
                                      <div class="navigation-bottom-bar">
                                        <a href="<?php echo _u('a23','link'); ?>" class="large-link w-inline-block" data-link="a23">
                                          <div data-text="tn38c02a80"><?php echo _u('tn38c02a80','text'); ?></div>
                                        </a>
                                      </div>
                                    </div>
                                  </nav>
                                </div>
                                <a href="<?php echo _u('a23','link'); ?>" class="navigation-link w-nav-link" data-text="tn697be218" data-link="a23"><?php echo _u('tn697be218','text'); ?></a>
                              </nav>
                              <a href="<?php echo _u('a6dd9473b','link'); ?>" target="_blank" class="global-button-primary w-inline-block" data-link="a6dd9473b">
                                <div data-text="tnd735a46"><?php echo _u('tnd735a46','text'); ?></div>
                                <div class="global-icon-x-small w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <mask id="mask0_2936_12501" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="16" height="16">
                                      <rect width="16" height="16" fill="currentColor"></rect>
                                    </mask>
                                    <g mask="url(#mask0_2936_12501)">
                                      <path d="M4.26146 11.9997L3.32812 11.0663L9.72813 4.66634H3.99479V3.33301H11.9948V11.333H10.6615V5.59967L4.26146 11.9997Z" fill="currentColor"></path>
                                    </g>
                                  </svg></div>
                              </a>
                              <nav role="navigation" class="nav_menu w-nav-menu">
                                <a href="<?php echo _u('a-70f306c','link'); ?>" class="nav_menu_link w-nav-link" data-text="tcd00fb4" data-link="a-70f306c"><?php echo _u('tcd00fb4','text'); ?></a>
                                <a href="<?php echo _u('a29975e27','link'); ?>" class="nav_menu_link w-nav-link" data-text="t201c0d38" data-link="a29975e27"><?php echo _u('t201c0d38','text'); ?></a>
                              </nav>
                              <div class="nav_button w-nav-button">
                                <div class="w-icon-nav-menu"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </section>
    </div>
  </div>
  
  