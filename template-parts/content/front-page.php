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
    <div class="navigation-wrap">
      <div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navigation w-nav">
        <div class="navigation-full">
          <div class="navigation-container">
            <div class="navigation-left">
              <a href="<?php echo _u('a2f','link'); ?>" aria-current="page" class="brand main-header w-nav-brand" data-link="a2f"><img sizes="(max-width: 673px) 98vw, 660px" srcset="<?php echo udesly_get_image(_u('in2a485a80', 'img'))->srcset ?>" alt="<?php echo udesly_get_image(_u('in2a485a80', 'img'))->alt ?>" src="<?php echo udesly_get_image(_u('in2a485a80', 'img'))->src ?>" loading="lazy" class="global-logo" data-img="in2a485a80"></a>
            </div>
            <div class="navigation-right">
              <nav role="navigation" class="nav-menu w-nav-menu">
                <a href="<?php echo _u('a2f','link'); ?>" aria-current="page" class="navigation-link w-nav-link" data-text="t2268ff" data-link="a2f"><?php echo _u('t2268ff','text'); ?></a>
                <div data-delay="150" data-hover="true" class="dropdown w-dropdown">
                  <div class="dropdown-toggle w-dropdown-toggle">
                    <div class="drop-arrow-plain w-icon-dropdown-toggle"></div>
                    <div data-text="tn37f9ca7c"><?php echo _u('tn37f9ca7c','text'); ?></div>
                  </div>
                  <nav class="dropdown-list w-dropdown-list">
                    <div class="dropdown-list-full-wrapper">
                      <div class="navigation-drop-container products">
                        <div class="product-menu-left"><img src="<?php echo udesly_get_image(_u('ind807e8b', 'img'))->src ?>" loading="lazy" sizes="100vw" srcset="<?php echo udesly_get_image(_u('ind807e8b', 'img'))->srcset ?>" alt="<?php echo udesly_get_image(_u('ind807e8b', 'img'))->alt ?>" class="product-menu_img" data-img="ind807e8b">
                          <div class="product-left_content">
                            <div class="heading-style-h3" data-text="tn7a5fd008"><?php echo _u('tn7a5fd008','text'); ?></div>
                          </div>
                        </div>
                        <div class="product-menu-right">
                          <div class="product-menu_chambers">
                            <div class="heading-style-h5" data-text="t592afcb5"><?php echo _u('t592afcb5','text'); ?></div>
                            <?php get_template_part('template-parts/query/chambers-sorted-by-name') ?>
                          </div>
                          <div class="product-menu_chambers">
                            <div class="heading-style-h5" data-text="t26c14b10"><?php echo _u('t26c14b10','text'); ?></div>
                            <div class="product-menu_list">
                              <a href="<?php echo _u('a-3ca85cd0','link'); ?>" class="product-list_single w-inline-block" data-link="a-3ca85cd0">
                                <div class="product-list_left"><img src="<?php echo udesly_get_image(_u('i20d365d', 'img'))->src ?>" loading="lazy" sizes="100vw" srcset="<?php echo udesly_get_image(_u('i20d365d', 'img'))->srcset ?>" alt="<?php echo udesly_get_image(_u('i20d365d', 'img'))->alt ?>" class="product-list_img" data-img="i20d365d"></div>
                                <div class="product-list_right">
                                  <div class="heading-style-h5 text-color-blue" data-text="t26c14b10"><?php echo _u('t26c14b10','text'); ?></div>
                                </div>
                              </a>
                              <a href="<?php echo _u('a30012e','link'); ?>" class="product-list_single w-inline-block" data-link="a30012e">
                                <div class="product-list_left flow"><img src="<?php echo udesly_get_image(_u('i4f04cb01', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i4f04cb01', 'img'))->alt ?>" class="product-list_img flow" data-img="i4f04cb01" srcset="<?php echo udesly_get_image(_u('i4f04cb01', 'img'))->srcset ?>"></div>
                                <div class="product-list_right flow">
                                  <div class="heading-style-h5 text-color-blue" data-text="tn1fab0f1e"><?php echo _u('tn1fab0f1e','text'); ?></div>
                                </div>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </nav>
                </div>
                <a href="<?php echo _u('a6084ccde','link'); ?>" class="navigation-link w-nav-link" data-text="t645f0031" data-link="a6084ccde"><?php echo _u('t645f0031','text'); ?></a>
                <div data-delay="150" data-hover="true" class="dropdown w-dropdown">
                  <div class="dropdown-toggle w-dropdown-toggle">
                    <div class="drop-arrow-plain w-icon-dropdown-toggle"></div>
                    <div data-text="tn2757d253"><?php echo _u('tn2757d253','text'); ?></div>
                  </div>
                  <nav class="dropdown-list w-dropdown-list">
                    <div class="dropdown-list-full-wrapper">
                      <div class="navigation-drop-container sectors">
                        <div class="heading-style-h3" data-text="tn4b05f9b3"><?php echo _u('tn4b05f9b3','text'); ?></div>
                        <div class="sectors-container">
                          <div class="swiper-slides-container">
                            <div class="collection_featured swiper product-swiper">
                              <div class="swiper-wrapper">
                                <a href="<?php echo _u('af54e711','link'); ?>" class="collection_featured-item swiper-slide w-inline-block" data-link="af54e711">
                                  <div class="sector_featured_image"><img src="<?php echo udesly_get_image(_u('in33e257ca', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in33e257ca', 'img'))->alt ?>" class="sector_featured_image-img" data-img="in33e257ca" srcset="<?php echo udesly_get_image(_u('in33e257ca', 'img'))->srcset ?>"></div>
                                  <div class="sector_slider_content">
                                    <div class="heading-style-h4 sectorcard-heading" data-text="tn758e945c"><?php echo _u('tn758e945c','text'); ?></div>
                                    <div class="global-icon-x-small sectorcard w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <mask id="mask0_2936_12501" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="16" height="16">
                                          <rect width="16" height="16" fill="currentColor"></rect>
                                        </mask>
                                        <g mask="url(#mask0_2936_12501)">
                                          <path d="M4.26146 11.9997L3.32812 11.0663L9.72813 4.66634H3.99479V3.33301H11.9948V11.333H10.6615V5.59967L4.26146 11.9997Z" fill="currentColor"></path>
                                        </g>
                                      </svg></div>
                                  </div>
                                </a>
                                <a href="<?php echo _u('a62655c97','link'); ?>" class="collection_featured-item swiper-slide w-inline-block" data-link="a62655c97">
                                  <div class="sector_featured_image"><img src="<?php echo udesly_get_image(_u('in44fbe393', 'img'))->src ?>" loading="lazy" sizes="100vw" srcset="<?php echo udesly_get_image(_u('in44fbe393', 'img'))->srcset ?>" alt="<?php echo udesly_get_image(_u('in44fbe393', 'img'))->alt ?>" class="sector_featured_image-img" data-img="in44fbe393"></div>
                                  <div class="sector_slider_content">
                                    <div class="heading-style-h4 sectorcard-heading" data-text="t3d2aa41a"><?php echo _u('t3d2aa41a','text'); ?></div>
                                    <div class="global-icon-x-small sectorcard w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <mask id="mask0_2936_12501" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="16" height="16">
                                          <rect width="16" height="16" fill="currentColor"></rect>
                                        </mask>
                                        <g mask="url(#mask0_2936_12501)">
                                          <path d="M4.26146 11.9997L3.32812 11.0663L9.72813 4.66634H3.99479V3.33301H11.9948V11.333H10.6615V5.59967L4.26146 11.9997Z" fill="currentColor"></path>
                                        </g>
                                      </svg></div>
                                  </div>
                                </a>
                                <a href="<?php echo _u('a5621714b','link'); ?>" class="collection_featured-item swiper-slide w-inline-block" data-link="a5621714b">
                                  <div class="sector_featured_image"><img src="<?php echo udesly_get_image(_u('in3e288117', 'img'))->src ?>" loading="lazy" sizes="100vw" srcset="<?php echo udesly_get_image(_u('in3e288117', 'img'))->srcset ?>" alt="<?php echo udesly_get_image(_u('in3e288117', 'img'))->alt ?>" class="sector_featured_image-img" data-img="in3e288117"></div>
                                  <div class="sector_slider_content">
                                    <div class="heading-style-h4 sectorcard-heading" data-text="tn3c25ad95"><?php echo _u('tn3c25ad95','text'); ?></div>
                                    <div class="global-icon-x-small sectorcard w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <mask id="mask0_2936_12501" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="16" height="16">
                                          <rect width="16" height="16" fill="currentColor"></rect>
                                        </mask>
                                        <g mask="url(#mask0_2936_12501)">
                                          <path d="M4.26146 11.9997L3.32812 11.0663L9.72813 4.66634H3.99479V3.33301H11.9948V11.333H10.6615V5.59967L4.26146 11.9997Z" fill="currentColor"></path>
                                        </g>
                                      </svg></div>
                                  </div>
                                </a>
                                <a href="<?php echo _u('a-5bffa1fd','link'); ?>" class="collection_featured-item swiper-slide w-inline-block" data-link="a-5bffa1fd">
                                  <div class="sector_featured_image"><img src="<?php echo udesly_get_image(_u('i38a3911a', 'img'))->src ?>" loading="lazy" sizes="100vw" srcset="<?php echo udesly_get_image(_u('i38a3911a', 'img'))->srcset ?>" alt="<?php echo udesly_get_image(_u('i38a3911a', 'img'))->alt ?>" class="sector_featured_image-img" data-img="i38a3911a"></div>
                                  <div class="sector_slider_content">
                                    <div class="heading-style-h4 sectorcard-heading" data-text="te063d77"><?php echo _u('te063d77','text'); ?></div>
                                    <div class="global-icon-x-small sectorcard w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <mask id="mask0_2936_12501" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="16" height="16">
                                          <rect width="16" height="16" fill="currentColor"></rect>
                                        </mask>
                                        <g mask="url(#mask0_2936_12501)">
                                          <path d="M4.26146 11.9997L3.32812 11.0663L9.72813 4.66634H3.99479V3.33301H11.9948V11.333H10.6615V5.59967L4.26146 11.9997Z" fill="currentColor"></path>
                                        </g>
                                      </svg></div>
                                  </div>
                                </a>
                                <a href="<?php echo _u('a-6999a2c2','link'); ?>" class="collection_featured-item swiper-slide w-inline-block" data-link="a-6999a2c2">
                                  <div class="sector_featured_image"><img src="<?php echo udesly_get_image(_u('i573004aa', 'img'))->src ?>" loading="lazy" sizes="100vw" srcset="<?php echo udesly_get_image(_u('i573004aa', 'img'))->srcset ?>" alt="<?php echo udesly_get_image(_u('i573004aa', 'img'))->alt ?>" class="sector_featured_image-img" data-img="i573004aa"></div>
                                  <div class="sector_slider_content">
                                    <div class="heading-style-h4 sectorcard-heading" data-text="tn73e4c4eb"><?php echo _u('tn73e4c4eb','text'); ?></div>
                                    <div class="global-icon-x-small sectorcard w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <mask id="mask0_2936_12501" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="16" height="16">
                                          <rect width="16" height="16" fill="currentColor"></rect>
                                        </mask>
                                        <g mask="url(#mask0_2936_12501)">
                                          <path d="M4.26146 11.9997L3.32812 11.0663L9.72813 4.66634H3.99479V3.33301H11.9948V11.333H10.6615V5.59967L4.26146 11.9997Z" fill="currentColor"></path>
                                        </g>
                                      </svg></div>
                                  </div>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </nav>
                </div>
                <a href="<?php echo _u('a63dd000','link'); ?>" class="navigation-link w-nav-link" data-text="t74af045" data-link="a63dd000"><?php echo _u('t74af045','text'); ?></a>
                <a href="<?php echo _u('a-1ef6e313','link'); ?>" class="navigation-link w-nav-link" data-text="t12b9612c" data-link="a-1ef6e313"><?php echo _u('t12b9612c','text'); ?></a>
                <a href="<?php echo _u('a2104e8b5','link'); ?>" class="navigation-link w-nav-link" data-text="t77e0f39e" data-link="a2104e8b5"><?php echo _u('t77e0f39e','text'); ?></a>
                <a href="<?php echo _u('a7c33cc01','link'); ?>" class="navigation-link w-nav-link" data-text="t462ff49" data-link="a7c33cc01"><?php echo _u('t462ff49','text'); ?></a>
              </nav>
              <a href="<?php echo _u('a38b72420','link'); ?>" class="button is-icon w-inline-block" data-link="a38b72420">
                <div data-text="t7f2746de"><?php echo _u('t7f2746de','text'); ?></div>
                <div class="icon-1x1-small w-embed"><svg aria-hidden="true" fill="currentColor" role="img" viewBox="0 0 20 21" xmlns="http://www.w3.org/2000/svg">
                    <title>Arrow Right</title>
                    <polygon points="16.172 9 10.101 2.929 11.515 1.515 20 10 19.293 10.707 11.515 18.485 10.101 17.071 16.172 11 0 11 0 9">
                  </polygon></svg></div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div data-animation="default" class="navigation-mob w-nav" data-easing2="ease-out" data-easing="ease-out" data-collapse="medium" role="banner" data-no-scroll="1" data-duration="400" data-doc-height="1">
        <div class="navigation-container-mob">
          <a href="<?php echo _u('a2f','link'); ?>" aria-current="page" class="brand main-header w-nav-brand" data-link="a2f"><img sizes="(max-width: 673px) 98vw, 660px" srcset="<?php echo udesly_get_image(_u('in2a485a80', 'img'))->srcset ?>" alt="<?php echo udesly_get_image(_u('in2a485a80', 'img'))->alt ?>" src="<?php echo udesly_get_image(_u('in2a485a80', 'img'))->src ?>" class="flowbase-logo" data-img="in2a485a80"></a>
          <nav role="navigation" class="mobile-nav w-nav-menu">
            <a href="<?php echo _u('a2f','link'); ?>" aria-current="page" class="mobile-nav-link w-nav-link" data-text="t2268ff" data-link="a2f"><?php echo _u('t2268ff','text'); ?></a>
            <div data-delay="0" data-hover="false" class="mobile-dropdown w-dropdown">
              <div class="mobile-toggle w-dropdown-toggle">
                <div class="w-icon-dropdown-toggle"></div>
                <div data-text="tn37f9ca7c"><?php echo _u('tn37f9ca7c','text'); ?></div>
              </div>
              <nav class="dropdown-list-mob w-dropdown-list">
                <div class="navigation-link-block-mob">
                  <div class="nav-content-wrap">
                    <div class="product-menu_chambers">
                      <div class="heading-style-h5" data-text="t592afcb5"><?php echo _u('t592afcb5','text'); ?></div>
                      <?php get_template_part('template-parts/query/chambers-sorted-by-name-v0') ?>
                    </div>
                    <div class="product-menu_chambers margin-top">
                      <div class="heading-style-h5" data-text="tn19111e0f"><?php echo _u('tn19111e0f','text'); ?></div>
                      <div class="product-menu_list">
                        <a href="<?php echo _u('a23','link'); ?>" class="product-list_single w-inline-block" data-link="a23">
                          <div class="product-list_left"><img src="<?php echo udesly_get_image(_u('i2665bca4', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i2665bca4', 'img'))->alt ?>" class="product-list_img" data-img="i2665bca4" srcset="<?php echo udesly_get_image(_u('i2665bca4', 'img'))->srcset ?>"></div>
                          <div class="product-list_right">
                            <div class="heading-style-h5 text-color-blue" data-text="t1e8b207"><?php echo _u('t1e8b207','text'); ?></div>
                            <div class="text-size-small" data-text="tn4ceb698b"><?php echo _u('tn4ceb698b','text'); ?></div>
                          </div>
                        </a>
                        <a href="<?php echo _u('a-3ca85cd0','link'); ?>" class="product-list_single w-inline-block" data-link="a-3ca85cd0">
                          <div class="product-list_left"><img src="<?php echo udesly_get_image(_u('i20d365d', 'img'))->src ?>" loading="lazy" sizes="100vw" srcset="<?php echo udesly_get_image(_u('i20d365d', 'img'))->srcset ?>" alt="<?php echo udesly_get_image(_u('i20d365d', 'img'))->alt ?>" class="product-list_img" data-img="i20d365d"></div>
                          <div class="product-list_right">
                            <div class="heading-style-h5 text-color-blue" data-text="t26c14b10"><?php echo _u('t26c14b10','text'); ?></div>
                            <div class="text-size-small" data-text="tn4ceb698b"><?php echo _u('tn4ceb698b','text'); ?></div>
                          </div>
                        </a>
                        <a href="<?php echo _u('a30012e','link'); ?>" class="product-list_single w-inline-block" data-link="a30012e">
                          <div class="product-list_left flow"><img src="<?php echo udesly_get_image(_u('i4f04cb01', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i4f04cb01', 'img'))->alt ?>" class="product-list_img flow" data-img="i4f04cb01" srcset="<?php echo udesly_get_image(_u('i4f04cb01', 'img'))->srcset ?>"></div>
                          <div class="product-list_right flow">
                            <div class="heading-style-h5 text-color-blue" data-text="tn1fab0f1e"><?php echo _u('tn1fab0f1e','text'); ?></div>
                            <div class="text-size-small" data-text="tn4ceb698b"><?php echo _u('tn4ceb698b','text'); ?></div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </nav>
            </div>
            <a href="<?php echo _u('a6084ccde','link'); ?>" class="mobile-nav-link w-nav-link" data-text="t645f0031" data-link="a6084ccde"><?php echo _u('t645f0031','text'); ?></a>
            <div data-delay="0" data-hover="false" class="mobile-dropdown w-dropdown">
              <div class="mobile-toggle w-dropdown-toggle">
                <div class="w-icon-dropdown-toggle"></div>
                <div data-text="tn2757d253"><?php echo _u('tn2757d253','text'); ?></div>
              </div>
              <nav class="dropdown-list-mob w-dropdown-list">
                <div class="navigation-link-block-mob">
                  <div class="nav-content-wrap mob">
                    <div class="sectors-container">
                      <div class="swiper-slides-container">
                        <div class="collection_featured swiper product-swiper">
                          <div class="swiper-wrapper">
                            <a href="<?php echo _u('af54e711','link'); ?>" class="collection_featured-item swiper-slide squared w-inline-block" data-link="af54e711">
                              <div class="sector_featured_image"><img src="<?php echo udesly_get_image(_u('in33e257ca', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in33e257ca', 'img'))->alt ?>" class="sector_featured_image-img" data-img="in33e257ca" srcset="<?php echo udesly_get_image(_u('in33e257ca', 'img'))->srcset ?>"></div>
                              <div class="sector_slider_content">
                                <div class="heading-style-h4 sectorcard-heading" data-text="tn758e945c"><?php echo _u('tn758e945c','text'); ?></div>
                                <div class="global-icon-x-small sectorcard w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <mask id="mask0_2936_12501" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="16" height="16">
                                      <rect width="16" height="16" fill="currentColor"></rect>
                                    </mask>
                                    <g mask="url(#mask0_2936_12501)">
                                      <path d="M4.26146 11.9997L3.32812 11.0663L9.72813 4.66634H3.99479V3.33301H11.9948V11.333H10.6615V5.59967L4.26146 11.9997Z" fill="currentColor"></path>
                                    </g>
                                  </svg></div>
                              </div>
                            </a>
                            <a href="<?php echo _u('a62655c97','link'); ?>" class="collection_featured-item swiper-slide squared w-inline-block" data-link="a62655c97">
                              <div class="sector_featured_image"><img src="<?php echo udesly_get_image(_u('in44fbe393', 'img'))->src ?>" loading="lazy" sizes="100vw" srcset="<?php echo udesly_get_image(_u('in44fbe393', 'img'))->srcset ?>" alt="<?php echo udesly_get_image(_u('in44fbe393', 'img'))->alt ?>" class="sector_featured_image-img" data-img="in44fbe393"></div>
                              <div class="sector_slider_content">
                                <div class="heading-style-h4 sectorcard-heading" data-text="t54fa3c0a"><?php echo _u('t54fa3c0a','text'); ?></div>
                                <div class="global-icon-x-small sectorcard w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <mask id="mask0_2936_12501" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="16" height="16">
                                      <rect width="16" height="16" fill="currentColor"></rect>
                                    </mask>
                                    <g mask="url(#mask0_2936_12501)">
                                      <path d="M4.26146 11.9997L3.32812 11.0663L9.72813 4.66634H3.99479V3.33301H11.9948V11.333H10.6615V5.59967L4.26146 11.9997Z" fill="currentColor"></path>
                                    </g>
                                  </svg></div>
                              </div>
                            </a>
                            <a href="<?php echo _u('a5621714b','link'); ?>" class="collection_featured-item swiper-slide squared w-inline-block" data-link="a5621714b">
                              <div class="sector_featured_image"><img src="<?php echo udesly_get_image(_u('in3e288117', 'img'))->src ?>" loading="lazy" sizes="100vw" srcset="<?php echo udesly_get_image(_u('in3e288117', 'img'))->srcset ?>" alt="<?php echo udesly_get_image(_u('in3e288117', 'img'))->alt ?>" class="sector_featured_image-img" data-img="in3e288117"></div>
                              <div class="sector_slider_content">
                                <div class="heading-style-h4 sectorcard-heading" data-text="tn3c25ad95"><?php echo _u('tn3c25ad95','text'); ?></div>
                                <div class="global-icon-x-small sectorcard w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <mask id="mask0_2936_12501" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="16" height="16">
                                      <rect width="16" height="16" fill="currentColor"></rect>
                                    </mask>
                                    <g mask="url(#mask0_2936_12501)">
                                      <path d="M4.26146 11.9997L3.32812 11.0663L9.72813 4.66634H3.99479V3.33301H11.9948V11.333H10.6615V5.59967L4.26146 11.9997Z" fill="currentColor"></path>
                                    </g>
                                  </svg></div>
                              </div>
                            </a>
                            <a href="<?php echo _u('a-5bffa1fd','link'); ?>" class="collection_featured-item swiper-slide squared w-inline-block" data-link="a-5bffa1fd">
                              <div class="sector_featured_image"><img src="<?php echo udesly_get_image(_u('in37fc47e4', 'img'))->src ?>" loading="lazy" sizes="100vw" srcset="<?php echo udesly_get_image(_u('in37fc47e4', 'img'))->srcset ?>" alt="<?php echo udesly_get_image(_u('in37fc47e4', 'img'))->alt ?>" class="sector_featured_image-img" data-img="in37fc47e4"></div>
                              <div class="sector_slider_content">
                                <div class="heading-style-h4 sectorcard-heading" data-text="te063d77"><?php echo _u('te063d77','text'); ?></div>
                                <div class="global-icon-x-small sectorcard w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <mask id="mask0_2936_12501" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="16" height="16">
                                      <rect width="16" height="16" fill="currentColor"></rect>
                                    </mask>
                                    <g mask="url(#mask0_2936_12501)">
                                      <path d="M4.26146 11.9997L3.32812 11.0663L9.72813 4.66634H3.99479V3.33301H11.9948V11.333H10.6615V5.59967L4.26146 11.9997Z" fill="currentColor"></path>
                                    </g>
                                  </svg></div>
                              </div>
                            </a>
                            <a href="<?php echo _u('a-6999a2c2','link'); ?>" class="collection_featured-item swiper-slide squared w-inline-block" data-link="a-6999a2c2">
                              <div class="sector_featured_image"><img src="<?php echo udesly_get_image(_u('i573004aa', 'img'))->src ?>" loading="lazy" sizes="100vw" srcset="<?php echo udesly_get_image(_u('i573004aa', 'img'))->srcset ?>" alt="<?php echo udesly_get_image(_u('i573004aa', 'img'))->alt ?>" class="sector_featured_image-img" data-img="i573004aa"></div>
                              <div class="sector_slider_content">
                                <div class="heading-style-h4 sectorcard-heading" data-text="tn73e4c4eb"><?php echo _u('tn73e4c4eb','text'); ?></div>
                                <div class="global-icon-x-small sectorcard w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <mask id="mask0_2936_12501" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="16" height="16">
                                      <rect width="16" height="16" fill="currentColor"></rect>
                                    </mask>
                                    <g mask="url(#mask0_2936_12501)">
                                      <path d="M4.26146 11.9997L3.32812 11.0663L9.72813 4.66634H3.99479V3.33301H11.9948V11.333H10.6615V5.59967L4.26146 11.9997Z" fill="currentColor"></path>
                                    </g>
                                  </svg></div>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </nav>
            </div>
            <a href="<?php echo _u('a23','link'); ?>" class="mobile-nav-link w-nav-link" data-text="t2cdea0c5" data-link="a23"><?php echo _u('t2cdea0c5','text'); ?></a>
            <a href="<?php echo _u('a-1ef6e313','link'); ?>" class="mobile-nav-link w-nav-link" data-text="t12b9612c" data-link="a-1ef6e313"><?php echo _u('t12b9612c','text'); ?></a>
            <a href="<?php echo _u('a23','link'); ?>" class="mobile-nav-link w-nav-link" data-text="t77e0f39e" data-link="a23"><?php echo _u('t77e0f39e','text'); ?></a>
            <a href="<?php echo _u('a23','link'); ?>" class="mobile-nav-link w-nav-link" data-text="t462ff49" data-link="a23"><?php echo _u('t462ff49','text'); ?></a>
            <a href="<?php echo _u('a23','link'); ?>" class="mobile-nav-link featured w-inline-block" data-link="a23">
              <div data-text="t7f2746de"><?php echo _u('t7f2746de','text'); ?></div>
              <div class="icon-1x1-small small w-embed"><svg aria-hidden="true" fill="currentColor" role="img" viewBox="0 0 20 21" xmlns="http://www.w3.org/2000/svg">
                  <title>Arrow Right</title>
                  <polygon points="16.172 9 10.101 2.929 11.515 1.515 20 10 19.293 10.707 11.515 18.485 10.101 17.071 16.172 11 0 11 0 9">
                </polygon></svg></div>
            </a>
          </nav>
          <div class="menu-mob w-nav-button">
            <div class="w-icon-nav-menu"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="home-hero hero-logo">
      <div class="fixed-bg">
        <div data-autoplay="true" data-loop="true" data-wf-ignore="true" class="fixed-bg_img video  w-background-video w-background-video-atom"><video id="eb13b5b7-4a61-62b5-9d27-aeccb1f456bc-video" autoplay="" loop="" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/videos/hf_20260327_092118_8cde4053-8a8c-4f51-8460-a46830e43c50_poster.0000000.jpg?v=1781609300'); " muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
            <source src="<?php echo _u('i44a45fb0','iframe'); ?>" data-wf-ignore="true" data-iframe="i44a45fb0">
            <source src="<?php echo _u('i-158944f6','iframe'); ?>" data-wf-ignore="true" data-iframe="i-158944f6">
          </video></div><img src="<?php echo udesly_get_image(_u('in38b8d9ca', 'img'))->src ?>" loading="lazy" sizes="100vw" srcset="<?php echo udesly_get_image(_u('in38b8d9ca', 'img'))->srcset ?>" alt="<?php echo udesly_get_image(_u('in38b8d9ca', 'img'))->alt ?>" class="fixed-bg_img hide" data-img="in38b8d9ca">
       
      </div>
      <div class="padding-global">
        <div class="container-large">
          <div class="home-hero_inner">
            <?php get_template_part('template-parts/query/news-first-where-featured-eq-true-sorted-by-date') ?>
            <div class="home-hero_inner_bottom">
              <h1 id="w-node-f63342d6-b741-59d5-d671-4036afa4cbd7-a74a0617" class="heading-style-h1 max-width-large" data-textarea="tan3f34f8cd"><?php echo _u('tan3f34f8cd', 'textarea'); ?></h1>
              <div id="w-node-ef37ad24-adfc-1f99-6a60-aadf382a6047-a74a0617" class="home-hero_inner_bottom_right">
                <a id="w-node-_7ab52ec4-f81e-6f35-3394-a7bfb37b745a-a74a0617" data-w-id="7ab52ec4-f81e-6f35-3394-a7bfb37b745a" href="<?php echo _u('a38b72420','link'); ?>" target="_blank" class="button is-icon hero w-inline-block" data-link="a38b72420">
                  <div data-text="t7f2746de"><?php echo _u('t7f2746de','text'); ?></div>
                  <div class="icon-1x1-small w-embed"><svg aria-hidden="true" fill="currentColor" role="img" viewBox="0 0 20 21" xmlns="http://www.w3.org/2000/svg">
                      <title>Arrow Right</title>
                      <polygon points="16.172 9 10.101 2.929 11.515 1.515 20 10 19.293 10.707 11.515 18.485 10.101 17.071 16.172 11 0 11 0 9">
                    </polygon></svg></div>
                </a>
                <a id="w-node-_82d62e21-1106-08bf-bd54-dadbe94bb6f4-a74a0617" href="<?php echo _u('a6084ccde','link'); ?>" class="button is-icon gray hero w-inline-block" data-link="a6084ccde">
                  <div data-text="t2a75535f"><?php echo _u('t2a75535f','text'); ?></div>
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
    </div>
    <div id="chamberheading" class="heading-text">
      <div class="padding-global">
        <div class="container-large padding-section-medium">
          <div class="heading-text_inner">
            <div class="heading-text_inner_top">
              <div class="pill-tag" data-text="tn7c09776b"><?php echo _u('tn7c09776b','text'); ?></div>
            </div>
            <div class="heading-text_inner_bottom">
              <h2 animated="" class="heading-style-h2 max-width-large" data-text="tn5ef5b055"><?php echo _u('tn5ef5b055','text'); ?></h2>
              <div class="heading-text_inner_bottom_right max-width-medium-small">
                <div data-text="t514e44cb"><?php echo _u('t514e44cb','text'); ?></div>
                <a href="<?php echo _u('a38b72420','link'); ?>" target="_blank" class="button is-icon w-inline-block" data-link="a38b72420">
                  <div data-text="t7f2746de"><?php echo _u('t7f2746de','text'); ?></div>
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
    </div>
    <div class="products-slider">
      <div class="padding-global">
        <div class="container-large">
          <div class="products-container">
            <div class="swiper-slides-container">
              <div class="swiper-button-prev chambers">
                <div class="code-embed w-embed"><svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M29.8946 14.4214L0.894561 14.4214M0.894561 14.4214L14.4214 27.9473M0.894561 14.4214L14.4214 0.894533" stroke="currentColor" stroke-width="2.5302" stroke-linejoin="bevel"></path>
                  </svg></div>
              </div>
              <div class="swiper-button-next chambers">
                <div class="code-embed w-embed"><svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 14.4205H29M29 14.4205L15.4732 0.894653M29 14.4205L15.4732 27.9474" stroke="currentColor" stroke-width="2.5302" stroke-linejoin="bevel"></path>
                  </svg></div>
              </div>
              <?php get_template_part('template-parts/query/chambers') ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sector-links">
      <div class="padding-global">
        <div class="container-large padding-section-medium">
          <div class="sector-links_inner">
            <div class="sector-links_left">
              <div class="pill-tag text-uppercase" data-text="tn28e2e128"><?php echo _u('tn28e2e128','text'); ?></div>
              <div class="sector-links-home">
                <a data-w-id="934a070b-b7f6-20ce-1324-417161adb971" href="<?php echo _u('af54e711','link'); ?>" class="sector-link-text one" data-text="t2738d3c4" data-link="af54e711"><?php echo _u('t2738d3c4','text'); ?></a>
                <a data-w-id="427dd185-1364-5c24-1ef2-2e4b16d440ee" href="<?php echo _u('a-5bffa1fd','link'); ?>" class="sector-link-text" data-text="t3da5904c" data-link="a-5bffa1fd"><?php echo _u('t3da5904c','text'); ?></a>
                <a data-w-id="5b887ae6-dc21-4cb3-3b45-83a1bec4e242" href="<?php echo _u('a5621714b','link'); ?>" class="sector-link-text" data-text="tn2e01e01e" data-link="a5621714b"><?php echo _u('tn2e01e01e','text'); ?></a>
                <a data-w-id="9b4a4497-41a9-78d2-9115-713724a0e41a" href="<?php echo _u('a-6999a2c2','link'); ?>" class="sector-link-text" data-text="tn73e4c4eb" data-link="a-6999a2c2"><?php echo _u('tn73e4c4eb','text'); ?></a>
                <a data-w-id="ba7be8ac-adb9-105d-5505-6a214ebc777d" href="<?php echo _u('a62655c97','link'); ?>" class="sector-link-text two" data-text="t39503ffa" data-link="a62655c97"><?php echo _u('t39503ffa','text'); ?></a>
              </div>
              <a href="<?php echo _u('a38b72420','link'); ?>" target="_blank" class="button is-icon w-inline-block" data-link="a38b72420">
                <div data-text="t7f2746de"><?php echo _u('t7f2746de','text'); ?></div>
                <div class="icon-1x1-small w-embed"><svg aria-hidden="true" fill="currentColor" role="img" viewBox="0 0 20 21" xmlns="http://www.w3.org/2000/svg">
                    <title>Arrow Right</title>
                    <polygon points="16.172 9 10.101 2.929 11.515 1.515 20 10 19.293 10.707 11.515 18.485 10.101 17.071 16.172 11 0 11 0 9">
                  </polygon></svg></div>
              </a>
            </div>
            <div id="w-node-_9ba1fb75-e581-3773-3074-f6dfffc988b2-a74a0617" class="sector-links_right"><img src="<?php echo udesly_get_image(_u('in5035a6fb', 'img'))->src ?>" loading="lazy" sizes="(max-width: 1202px) 100vw, 1202px" srcset="<?php echo udesly_get_image(_u('in5035a6fb', 'img'))->srcset ?>" alt="<?php echo udesly_get_image(_u('in5035a6fb', 'img'))->alt ?>" class="sector-link-img default leftcenter" data-img="in5035a6fb"><img src="<?php echo udesly_get_image(_u('in5035a6fb', 'img'))->src ?>" loading="lazy" sizes="(max-width: 1202px) 100vw, 1202px" srcset="<?php echo udesly_get_image(_u('in5035a6fb', 'img'))->srcset ?>" alt="<?php echo udesly_get_image(_u('in5035a6fb', 'img'))->alt ?>" class="sector-link-img one leftcenter" data-img="in5035a6fb"><img src="<?php echo udesly_get_image(_u('in44fbe393', 'img'))->src ?>" loading="lazy" sizes="(max-width: 672px) 100vw, 672px" srcset="<?php echo udesly_get_image(_u('in44fbe393', 'img'))->srcset ?>" alt="<?php echo udesly_get_image(_u('in44fbe393', 'img'))->alt ?>" class="sector-link-img two" data-img="in44fbe393"><img src="<?php echo udesly_get_image(_u('i38a3911a', 'img'))->src ?>" loading="lazy" sizes="(max-width: 3239px) 100vw, 3239px" srcset="<?php echo udesly_get_image(_u('i38a3911a', 'img'))->srcset ?>" alt="<?php echo udesly_get_image(_u('i38a3911a', 'img'))->alt ?>" class="sector-link-img three" data-img="i38a3911a"><img src="<?php echo udesly_get_image(_u('in37fc47e4', 'img'))->src ?>" loading="lazy" sizes="(max-width: 3239px) 100vw, 3239px" srcset="<?php echo udesly_get_image(_u('in37fc47e4', 'img'))->srcset ?>" alt="<?php echo udesly_get_image(_u('in37fc47e4', 'img'))->alt ?>" class="sector-link-img four" data-img="in37fc47e4"><img src="<?php echo udesly_get_image(_u('i50cae08b', 'img'))->src ?>" loading="lazy" sizes="(max-width: 2752px) 100vw, 2752px" srcset="<?php echo udesly_get_image(_u('i50cae08b', 'img'))->srcset ?>" alt="<?php echo udesly_get_image(_u('i50cae08b', 'img'))->alt ?>" class="sector-link-img five" data-img="i50cae08b"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="solutions-slider">
      <div class="padding-global">
        <div class="container-large padding-section-medium">
          <h2 animated="" class="heading-style-h1 max-width-large" data-text="t5dd343e4"><?php echo _u('t5dd343e4','text'); ?></h2>
          <div class="solutions-container">
            <div class="swiper-slides-container">
              <div class="collection_featured swiper product-swiper">
                <div class="swiper-wrapper">
                  <div class="collection_featured-item swiper-slide">
                    <div class="solution-slider-card"><img src="<?php echo udesly_get_image(_u('i65019140', 'img'))->src ?>" loading="lazy" sizes="(max-width: 3239px) 100vw, 3239px" srcset="<?php echo udesly_get_image(_u('i65019140', 'img'))->srcset ?>" alt="<?php echo udesly_get_image(_u('i65019140', 'img'))->alt ?>" class="solution-slider-card_img" data-img="i65019140">
                      <div class="solution-slider-card_content">
                        <div class="solution-slider-icon w-embed"><svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="1.96701e-06" y="5.78171e-06" width="45" height="45" rx="5" fill="white"></rect>
                            <path d="M24.7144 20.9282L26.5358 10L15 24.5709H22.2855L20.4641 35.4991L31.9999 20.9282H24.7144Z" stroke="#1477FF" stroke-width="2.18564" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg></div>
                        <h3 class="card-heading-fancy" data-text="t1897de6c"><?php echo _u('t1897de6c','text'); ?></h3>
                        <div data-text="tn2bfcb51c"><?php echo _u('tn2bfcb51c','text'); ?></div>
                      </div>
                    </div>
                  </div>
                  <div class="collection_featured-item swiper-slide">
                    <div class="solution-slider-card"><img src="<?php echo udesly_get_image(_u('in2c0a5b8b', 'img'))->src ?>" loading="lazy" sizes="(max-width: 3239px) 100vw, 3239px" srcset="<?php echo udesly_get_image(_u('in2c0a5b8b', 'img'))->srcset ?>" alt="<?php echo udesly_get_image(_u('in2c0a5b8b', 'img'))->alt ?>" class="solution-slider-card_img" data-img="in2c0a5b8b">
                      <div class="solution-slider-card_content">
                        <div class="solution-slider-icon w-embed"><svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="1.96701e-06" y="5.78171e-06" width="45" height="45" rx="5" fill="white"></rect>
                            <path d="M41 20H10.6755L7.5 25.5H4" stroke="#1477FF" stroke-width="3" stroke-linejoin="bevel"></path>
                          </svg></div>
                        <h3 class="card-heading-fancy" data-text="tn58145ff0"><?php echo _u('tn58145ff0','text'); ?></h3>
                        <div data-text="t43824123"><?php echo _u('t43824123','text'); ?></div>
                      </div>
                    </div>
                  </div>
                  <div class="collection_featured-item swiper-slide">
                    <div class="solution-slider-card"><img src="<?php echo udesly_get_image(_u('i70f37d99', 'img'))->src ?>" loading="lazy" sizes="(max-width: 3239px) 100vw, 3239px" srcset="<?php echo udesly_get_image(_u('i70f37d99', 'img'))->srcset ?>" alt="<?php echo udesly_get_image(_u('i70f37d99', 'img'))->alt ?>" class="solution-slider-card_img" data-img="i70f37d99">
                      <div class="solution-slider-card_content">
                        <div class="solution-slider-icon w-embed"><svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="1.96701e-06" y="5.78171e-06" width="45" height="45" rx="5" fill="white"></rect>
                            <g clip-path="url(#clip0_2235_969)">
                              <path d="M27 27C27 25.895 23.866 25 20 25M27 27C27 28.105 23.866 29 20 29C16.134 29 13 28.105 13 27M27 27V31.937C27 33.076 23.866 34 20 34C16.134 34 13 33.077 13 31.937V27M27 27C30.824 27 34 26.013 34 25V15M20 25C16.134 25 13 25.895 13 27M20 25C15.582 25 12 24.013 12 23V18M20 16C15.582 16 12 16.895 12 18M12 18C12 19.105 15.582 20 20 20C20 21.013 23.253 22 27.077 22C30.901 22 34 21.013 34 20M34 15C34 13.895 30.9 13 27.077 13C23.254 13 20.154 13.895 20.154 15M34 15C34 16.105 30.9 17 27.077 17C23.254 17 20.154 16.105 20.154 15M20.154 15V25.166" stroke="#1477FF" stroke-width="2"></path>
                            </g>
                            <defs>
                              <clipPath id="clip0_2235_969">
                                <rect width="24" height="24" fill="white" transform="translate(11 11)"></rect>
                              </clipPath>
                            </defs>
                          </svg></div>
                        <h3 class="card-heading-fancy" data-text="t18db5a9a"><?php echo _u('t18db5a9a','text'); ?></h3>
                        <div data-text="tn3d1560c2"><?php echo _u('tn3d1560c2','text'); ?></div>
                      </div>
                    </div>
                  </div>
                  <div class="collection_featured-item swiper-slide">
                    <div class="solution-slider-card"><img src="<?php echo udesly_get_image(_u('in6b2daa86', 'img'))->src ?>" loading="lazy" sizes="(max-width: 3239px) 100vw, 3239px" srcset="<?php echo udesly_get_image(_u('in6b2daa86', 'img'))->srcset ?>" alt="<?php echo udesly_get_image(_u('in6b2daa86', 'img'))->alt ?>" class="solution-slider-card_img" data-img="in6b2daa86">
                      <div class="solution-slider-card_content">
                        <div class="solution-slider-icon w-embed"><svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="1.96701e-06" y="5.78171e-06" width="45" height="45" rx="5" fill="white"></rect>
                            <path d="M21.9 32.8V30.6H30.7V22.79C30.7 20.645 29.9531 18.8256 28.4593 17.3318C26.9655 15.838 25.1457 15.0907 23 15.09C20.8543 15.0893 19.0349 15.8365 17.5418 17.3318C16.0487 18.8271 15.3015 20.6465 15.3 22.79V29.5H14.2C13.595 29.5 13.0773 29.2848 12.6468 28.8543C12.2163 28.4238 12.0007 27.9057 12 27.3V25.1C12 24.715 12.0964 24.3531 12.2893 24.0143C12.4822 23.6755 12.7524 23.4049 13.1 23.2025L13.1825 21.745C13.3292 20.4983 13.6914 19.3433 14.2693 18.28C14.8472 17.2167 15.5713 16.2908 16.4418 15.5025C17.3123 14.7142 18.3111 14.1 19.4382 13.66C20.5653 13.22 21.7526 13 23 13C24.2474 13 25.4299 13.22 26.5475 13.66C27.6651 14.1 28.6643 14.7098 29.545 15.4893C30.4257 16.2688 31.1499 17.1899 31.7175 18.2525C32.2851 19.3151 32.6518 20.4701 32.8175 21.7175L32.9 23.1475C33.2483 23.3125 33.5189 23.56 33.7118 23.89C33.9047 24.22 34.0007 24.5683 34 24.935V27.465C34 27.8317 33.9039 28.18 33.7118 28.51C33.5197 28.84 33.2491 29.0875 32.9 29.2525V30.6C32.9 31.205 32.6848 31.7231 32.2543 32.1543C31.8238 32.5855 31.3057 32.8007 30.7 32.8H21.9ZM19.7 25.1C19.3883 25.1 19.1273 24.9944 18.9168 24.7832C18.7063 24.572 18.6007 24.3109 18.6 24C18.5993 23.6891 18.7049 23.428 18.9168 23.2168C19.1287 23.0056 19.3898 22.9 19.7 22.9C20.0102 22.9 20.2716 23.0056 20.4843 23.2168C20.697 23.428 20.8022 23.6891 20.8 24C20.7978 24.3109 20.6922 24.5724 20.4832 24.7843C20.2742 24.9962 20.0131 25.1015 19.7 25.1ZM26.3 25.1C25.9883 25.1 25.7273 24.9944 25.5168 24.7832C25.3063 24.572 25.2007 24.3109 25.2 24C25.1993 23.6891 25.3049 23.428 25.5168 23.2168C25.7287 23.0056 25.9898 22.9 26.3 22.9C26.6102 22.9 26.8716 23.0056 27.0843 23.2168C27.297 23.428 27.4022 23.6891 27.4 24C27.3978 24.3109 27.2922 24.5724 27.0832 24.7843C26.8742 24.9962 26.6131 25.1015 26.3 25.1ZM16.4275 23.395C16.2992 21.4517 16.8858 19.7833 18.1875 18.39C19.4892 16.9967 21.1117 16.3 23.055 16.3C24.6867 16.3 26.1214 16.8177 27.3593 17.8532C28.5972 18.8887 29.3441 20.2138 29.6 21.8286C27.9317 21.8095 26.3964 21.36 24.9943 20.48C23.5922 19.6 22.5149 18.4083 21.7625 16.905C21.4692 18.3717 20.8506 19.6781 19.9068 20.8243C18.963 21.9705 17.8032 22.8274 16.4275 23.395Z" fill="#1477FF"></path>
                          </svg></div>
                        <h3 class="card-heading-fancy" data-text="tn61e4c2e4"><?php echo _u('tn61e4c2e4','text'); ?></h3>
                        <div data-text="tn50e56796"><?php echo _u('tn50e56796','text'); ?></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="solutions-slider_bottom">
            <a href="<?php echo _u('a38b72420','link'); ?>" target="_blank" class="button is-icon orange w-inline-block" data-link="a38b72420">
              <div data-text="t7f2746de"><?php echo _u('t7f2746de','text'); ?></div>
              <div class="icon-1x1-small w-embed"><svg aria-hidden="true" fill="currentColor" role="img" viewBox="0 0 20 21" xmlns="http://www.w3.org/2000/svg">
                  <title>Arrow Right</title>
                  <polygon points="16.172 9 10.101 2.929 11.515 1.515 20 10 19.293 10.707 11.515 18.485 10.101 17.071 16.172 11 0 11 0 9">
                </polygon></svg></div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="text-image gray">
      <div class="padding-global">
        <div class="container-large">
          <div class="text-image_inner"><img src="<?php echo udesly_get_image(_u('in33eb99ec', 'img'))->src ?>" loading="lazy" width="1000" height="1000" alt="<?php echo udesly_get_image(_u('in33eb99ec', 'img'))->alt ?>" srcset="<?php echo udesly_get_image(_u('in33eb99ec', 'img'))->srcset ?>" sizes="(max-width: 1919px) 100vw, 1000px" class="text-image_img" data-img="in33eb99ec">
            <div class="text-image_text">
              <h2 animated="" class="heading-style-h3" data-textarea="ta42505393"><?php echo _u('ta42505393', 'textarea'); ?></h2>
              <div data-textarea="tan5ce3283d"><?php echo _u('tan5ce3283d', 'textarea'); ?></div>
              <div class="text-image_text_bottom">
                <a href="<?php echo _u('a38b72420','link'); ?>" target="_blank" class="button is-icon w-inline-block" data-link="a38b72420">
                  <div data-text="t7f274abe"><?php echo _u('t7f274abe','text'); ?></div>
                  <div class="icon-1x1-small w-embed"><svg aria-hidden="true" fill="currentColor" role="img" viewBox="0 0 20 21" xmlns="http://www.w3.org/2000/svg">
                      <title>Arrow Right</title>
                      <polygon points="16.172 9 10.101 2.929 11.515 1.515 20 10 19.293 10.707 11.515 18.485 10.101 17.071 16.172 11 0 11 0 9">
                    </polygon></svg></div>
                </a>
                <a href="<?php echo _u('a6084ccde','link'); ?>" target="_blank" class="button is-text w-inline-block" data-link="a6084ccde">
                  <div data-text="t645f0031"><?php echo _u('t645f0031','text'); ?></div>
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
    </div>
    <div class="text-image gray">
      <div class="padding-global">
        <div class="container-large">
          <div class="text-image_inner reversed">
            <div class="text-image_text">
              <h2 animated="" class="heading-style-h3" data-text="tn21a3d66d"><?php echo _u('tn21a3d66d','text'); ?></h2>
              <div data-text="t6162b07c"><?php echo _u('t6162b07c','text'); ?></div>
              <div class="text-image_text_bottom">
                <a href="<?php echo _u('a38b72420','link'); ?>" target="_blank" class="button is-icon w-inline-block" data-link="a38b72420">
                  <div data-text="t7f274abe"><?php echo _u('t7f274abe','text'); ?></div>
                  <div class="icon-1x1-small w-embed"><svg aria-hidden="true" fill="currentColor" role="img" viewBox="0 0 20 21" xmlns="http://www.w3.org/2000/svg">
                      <title>Arrow Right</title>
                      <polygon points="16.172 9 10.101 2.929 11.515 1.515 20 10 19.293 10.707 11.515 18.485 10.101 17.071 16.172 11 0 11 0 9">
                    </polygon></svg></div>
                </a>
                <a href="<?php echo _u('a6084ccde','link'); ?>" target="_blank" class="button is-text w-inline-block" data-link="a6084ccde">
                  <div data-text="t645f0031"><?php echo _u('t645f0031','text'); ?></div>
                  <div class="icon-1x1-small w-embed"><svg aria-hidden="true" fill="currentColor" role="img" viewBox="0 0 20 21" xmlns="http://www.w3.org/2000/svg">
                      <title>Arrow Right</title>
                      <polygon points="16.172 9 10.101 2.929 11.515 1.515 20 10 19.293 10.707 11.515 18.485 10.101 17.071 16.172 11 0 11 0 9">
                    </polygon></svg></div>
                </a>
              </div>
            </div><img class="text-image_img" src="<?php echo udesly_get_image(_u('i65121668', 'img'))->src ?>" width="1000" height="1000" alt="<?php echo udesly_get_image(_u('i65121668', 'img'))->alt ?>" sizes="(max-width: 1919px) 100vw, 1000px" id="w-node-_7c1f9482-5e88-d8ee-0219-3cbb99d7e51b-a74a0617" loading="lazy" srcset="<?php echo udesly_get_image(_u('i65121668', 'img'))->srcset ?>" data-img="i65121668">
          </div>
        </div>
      </div>
    </div>
    <div class="news-loop">
      <div class="padding-global">
        <div class="container-large padding-section-medium">
          <div class="news-loop_inner">
            <div class="news-loop_top">
              <div class="pill-tag text-uppercase" data-text="t15227ab9"><?php echo _u('t15227ab9','text'); ?></div>
              <h2 animated="" class="heading-style-h2 max-width-large" data-text="tn2094398b"><?php echo _u('tn2094398b','text'); ?></h2>
            </div>
            <div class="news-loop_content">
              <?php get_template_part('template-parts/query/news-max-2-sorted-by-date') ?>
            </div>
            <div class="news-loop_bottom">
              <a href="<?php echo _u('a63dd000','link'); ?>" class="button is-icon w-inline-block" data-link="a63dd000">
                <div data-text="ta25edcb"><?php echo _u('ta25edcb','text'); ?></div>
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
    <div class="footer-wrap">
      <div class="padding-global">
        <div class="container-large padding-section-small">
          <div class="footer_inner">
            <div class="footer_top">
              <div class="footer_inner_left">
                <div class="footer_inner_left_menu">
                  <div class="footer_left_menu_top">
                    <div class="text-color-gray" data-text="tn64202ba3"><?php echo _u('tn64202ba3','text'); ?></div>
                    <a href="<?php echo _u('a2f','link'); ?>" aria-current="page" class="brand black w-nav-brand" data-link="a2f"><img sizes="(max-width: 673px) 98vw, 660px" srcset="<?php echo udesly_get_image(_u('in2a485a80', 'img'))->srcset ?>" alt="<?php echo udesly_get_image(_u('in2a485a80', 'img'))->alt ?>" src="<?php echo udesly_get_image(_u('in2a485a80', 'img'))->src ?>" loading="lazy" class="global-logo" data-img="in2a485a80"></a>
                    <div class="max-width-medium-small" data-textarea="tan61d0925a"><?php echo _u('tan61d0925a', 'textarea'); ?></div>
                  </div>
                  <div class="footer_left_menu_bottom">
                    <div class="text-color-gray" data-text="t1ed033d4"><?php echo _u('t1ed033d4','text'); ?></div>
                    <div class="max-width-medium-small" data-textarea="tan502daf24"><?php echo _u('tan502daf24', 'textarea'); ?></div>
                    <a href="<?php echo _u('a37ee57a2','link'); ?>" class="icon-link text-weight-bold w-inline-block" data-link="a37ee57a2">
                      <div class="code-embed w-embed"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect width="16" height="16" rx="2" fill="black"></rect>
                          <path d="M4.81 6.895C5.53 8.31 6.69 9.465 8.105 10.19L9.205 9.09C9.34 8.955 9.54 8.91 9.715 8.97C10.275 9.155 10.88 9.255 11.5 9.255C11.775 9.255 12 9.48 12 9.755V11.5C12 11.775 11.775 12 11.5 12C6.805 12 3 8.195 3 3.5C3 3.225 3.225 3 3.5 3H5.25C5.525 3 5.75 3.225 5.75 3.5C5.75 4.125 5.85 4.725 6.035 5.285C6.09 5.46 6.05 5.655 5.91 5.795L4.81 6.895Z" fill="white"></path>
                        </svg></div>
                      <div data-text="t432ef84d"><?php echo _u('t432ef84d','text'); ?></div>
                    </a>
                    <a href="<?php echo _u('a-2a20e0a8','link'); ?>" class="icon-link text-weight-bold w-inline-block" data-link="a-2a20e0a8">
                      <div class="code-embed w-embed"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect width="16" height="16" rx="2" fill="black"></rect>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M12.6669 4H3.33428C3.24588 4 3.16111 4.03512 3.0986 4.09762C3.03609 4.16013 3.00098 4.24491 3.00098 4.33331V11.666C3.00098 11.7544 3.03609 11.8392 3.0986 11.9017C3.16111 11.9642 3.24588 11.9993 3.33428 11.9993H12.6669C12.7553 11.9993 12.84 11.9642 12.9025 11.9017C12.965 11.8392 13.0002 11.7544 13.0002 11.666V4.33331C13.0002 4.24491 12.965 4.16013 12.9025 4.09762C12.84 4.03512 12.7553 4 12.6669 4ZM3.66759 11.3327V4.66661H12.3336V11.3327H3.66759Z" fill="white"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8824 4.58662L8.18616 8.58629C8.12571 8.63784 8.04883 8.6661 7.96939 8.66598C7.88994 8.66585 7.81316 8.63736 7.75286 8.58563L3.11591 4.58595C3.06429 4.54154 3.02751 4.48237 3.01053 4.41643C2.99355 4.35048 2.99717 4.28092 3.02092 4.21709C3.04466 4.15327 3.08738 4.09825 3.14334 4.05944C3.19929 4.02062 3.26579 3.99988 3.33389 4H12.6665C12.7345 4.00013 12.801 4.02111 12.8568 4.06011C12.9126 4.09911 12.9551 4.15426 12.9786 4.21815C13.0021 4.28203 13.0055 4.35159 12.9883 4.41747C12.9711 4.48334 12.9342 4.54237 12.8824 4.58662ZM11.7612 4.66661H4.23048L7.97151 7.89368L11.7612 4.66661Z" fill="white"></path>
                        </svg></div>
                      <div data-text="t43c65a60"><?php echo _u('t43c65a60','text'); ?></div>
                    </a>
                  </div>
                  <div class="footer_left_menu_bottom">
                    <div class="spacer-medium"></div>
                    <div class="text-color-gray" data-text="t3eb4f971"><?php echo _u('t3eb4f971','text'); ?></div>
                    <div class="flex-social">
                      <a href="<?php echo _u('a-3e222e29','link'); ?>" target="_blank" class="icon-link text-weight-bold w-inline-block" data-link="a-3e222e29"><img src="<?php echo udesly_get_image(_u('i4d206742', 'img'))->src ?>" loading="lazy" sizes="(max-width: 840px) 100vw, 840px" srcset="<?php echo udesly_get_image(_u('i4d206742', 'img'))->srcset ?>" alt="<?php echo udesly_get_image(_u('i4d206742', 'img'))->alt ?>" class="icon-1x1-medium" data-img="i4d206742"></a>
                      <a href="<?php echo _u('a2940ef2b','link'); ?>" target="_blank" class="icon-link text-weight-bold w-inline-block" data-link="a2940ef2b"><img src="<?php echo udesly_get_image(_u('i55b1d33b', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i55b1d33b', 'img'))->alt ?>" class="icon-1x1-medium" data-img="i55b1d33b" srcset="<?php echo udesly_get_image(_u('i55b1d33b', 'img'))->srcset ?>"></a>
                      <a href="<?php echo _u('a661946fd','link'); ?>" target="_blank" class="icon-link text-weight-bold w-inline-block" data-link="a661946fd"><img src="<?php echo udesly_get_image(_u('in83b9d6d', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in83b9d6d', 'img'))->alt ?>" class="icon-1x1-medium" data-img="in83b9d6d" srcset="<?php echo udesly_get_image(_u('in83b9d6d', 'img'))->srcset ?>"></a>
                      <a href="<?php echo _u('a-ed46480','link'); ?>" target="_blank" class="icon-link text-weight-bold w-inline-block" data-link="a-ed46480"><img src="<?php echo udesly_get_image(_u('i37ad5373', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i37ad5373', 'img'))->alt ?>" class="icon-1x1-medium" data-img="i37ad5373" srcset="<?php echo udesly_get_image(_u('i37ad5373', 'img'))->srcset ?>"></a>
                      <a href="<?php echo _u('a-150b0672','link'); ?>" target="_blank" class="icon-link text-weight-bold w-inline-block" data-link="a-150b0672"><img src="<?php echo udesly_get_image(_u('in33bb037c', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in33bb037c', 'img'))->alt ?>" class="icon-1x1-medium" data-img="in33bb037c" srcset="<?php echo udesly_get_image(_u('in33bb037c', 'img'))->srcset ?>"></a>
                    </div>
                  </div>
                </div>
                <div class="footer_inner_left_menu">
                  <div class="footer_left_menu_top">
                    <div class="text-color-gray" data-text="tn1a2819cc"><?php echo _u('tn1a2819cc','text'); ?></div>
                    <div data-animation="default" data-collapse="none" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="footer-nav_wrap w-nav">
                      <nav role="navigation" class="footer-nav w-nav-menu">
                        <a href="<?php echo _u('a2f','link'); ?>" aria-current="page" class="footer-nav_link w-nav-link" data-text="t2268ff" data-link="a2f"><?php echo _u('t2268ff','text'); ?></a>
                        <div data-hover="false" data-delay="0" class="dropdown-2 w-dropdown">
                          <div class="footer-nav_link dropdown w-dropdown-toggle">
                            <div data-text="tn37f9ca7c"><?php echo _u('tn37f9ca7c','text'); ?></div>
                            <div class="dd-icondiv"><img src="<?php echo udesly_get_image(_u('in4a40e5b7', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in4a40e5b7', 'img'))->alt ?>" data-img="in4a40e5b7" srcset="<?php echo udesly_get_image(_u('in4a40e5b7', 'img'))->srcset ?>"></div>
                          </div>
                          <nav class="footer-nav_dropdown w-dropdown-list">
                            <?php get_template_part('template-parts/query/chambers-sorted-by-name-v1') ?>
                          </nav>
                        </div>
                        <a href="<?php echo _u('a2eb955bb','link'); ?>" class="footer-nav_link w-nav-link" data-text="t645efc51" data-link="a2eb955bb"><?php echo _u('t645efc51','text'); ?></a>
                        <div data-hover="false" data-delay="0" class="dropdown-2 w-dropdown">
                          <div class="footer-nav_link dropdown w-dropdown-toggle">
                            <div data-text="tn2757d253"><?php echo _u('tn2757d253','text'); ?></div>
                            <div class="dd-icondiv"><img src="<?php echo udesly_get_image(_u('in4a40e5b7', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in4a40e5b7', 'img'))->alt ?>" data-img="in4a40e5b7" srcset="<?php echo udesly_get_image(_u('in4a40e5b7', 'img'))->srcset ?>"></div>
                          </div>
                          <nav class="footer-nav_dropdown w-dropdown-list">
                            <a href="<?php echo _u('af54e711','link'); ?>" class="footer-nav_link dropdown-child w-dropdown-link" data-text="tn530b3473" data-link="af54e711"><?php echo _u('tn530b3473','text'); ?></a>
                            <a href="<?php echo _u('a62655c97','link'); ?>" class="footer-nav_link dropdown-child w-dropdown-link" data-text="tn40b1d9e0" data-link="a62655c97"><?php echo _u('tn40b1d9e0','text'); ?></a>
                            <a href="<?php echo _u('a5621714b','link'); ?>" class="footer-nav_link dropdown-child w-dropdown-link" data-text="tn4b8f3e15" data-link="a5621714b"><?php echo _u('tn4b8f3e15','text'); ?></a>
                            <a href="<?php echo _u('a-5bffa1fd','link'); ?>" class="footer-nav_link dropdown-child w-dropdown-link" data-text="te063d77" data-link="a-5bffa1fd"><?php echo _u('te063d77','text'); ?></a>
                            <a href="<?php echo _u('a-6999a2c2','link'); ?>" class="footer-nav_link dropdown-child w-dropdown-link" data-text="tn73e4c4eb" data-link="a-6999a2c2"><?php echo _u('tn73e4c4eb','text'); ?></a>
                          </nav>
                        </div>
                        <a href="<?php echo _u('a63dd000','link'); ?>" class="footer-nav_link w-nav-link" data-text="t2cdea0c5" data-link="a63dd000"><?php echo _u('t2cdea0c5','text'); ?></a>
                        <a href="<?php echo _u('a2104e8b5','link'); ?>" class="footer-nav_link w-nav-link" data-text="tn7bc27f6b" data-link="a2104e8b5"><?php echo _u('tn7bc27f6b','text'); ?></a>
                        <a href="<?php echo _u('a48d7b347','link'); ?>" class="footer-nav_link w-nav-link" data-text="tn64104400" data-link="a48d7b347"><?php echo _u('tn64104400','text'); ?></a>
                        <a href="<?php echo _u('a-1ef6e313','link'); ?>" class="footer-nav_link w-nav-link" data-text="t12b9612c" data-link="a-1ef6e313"><?php echo _u('t12b9612c','text'); ?></a>
                        <a href="<?php echo _u('a-3ca85cd0','link'); ?>" class="footer-nav_link w-nav-link" data-text="t26c14b10" data-link="a-3ca85cd0"><?php echo _u('t26c14b10','text'); ?></a>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
              <div class="footer_inner_right">
                <div class="footer_newsletter max-width-medium-small">
                  <h6 class="heading-style-h3" data-text="t35c884dc"><?php echo _u('t35c884dc','text'); ?></h6>
                  <div data-text="tn6329b7f0"><?php echo _u('tn6329b7f0','text'); ?></div>
                  <div class="newsetter w-form">
                    <form id="wf-form-Newsletter-Form" name="wf-form-Newsletter-Form" data-name="Newsletter Form" method="get" data-wf-page-id="695d8a103a0ee4e2a74a0617" data-wf-element-id="5aa72e8c-cce9-d6df-7eb7-db2c069442ea" data-ajax-action="contact"><label for="email">Email Address</label><input class="text-field w-input" maxlength="256" name="contact[email]" data-name="Email" placeholder="Email" type="email" id="email" required=""><input type="submit" data-wait="Please wait..." class="submit-button w-button" value="Subscribe"><?php udesly_honeypot_field() ?></form>
                    <div class="w-form-done">
                      <div data-text="t5a0ea5a1"><?php echo _u('t5a0ea5a1','text'); ?></div>
                    </div>
                    <div class="w-form-fail">
                      <div data-text="tn7c112e99"><?php echo _u('tn7c112e99','text'); ?></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="footer_bottom">
              <ul role="list" class="footer_privacy_menu">
                <li>
                  <a href="<?php echo _u('a-1db89ce9','link'); ?>" class="unstyle" data-text="tn3fbde6f6" data-link="a-1db89ce9"><?php echo _u('tn3fbde6f6','text'); ?></a>
                </li>
                <li>
                  <a href="<?php echo _u('a3e9d8061','link'); ?>" class="unstyle" data-text="t64169e54" data-link="a3e9d8061"><?php echo _u('t64169e54','text'); ?></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  