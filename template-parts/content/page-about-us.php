
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
              <a href="<?php echo _u('a2f','link'); ?>" class="brand main-header w-nav-brand" data-link="a2f"><img sizes="(max-width: 673px) 98vw, 660px" srcset="<?php echo udesly_get_image(_u('in2a485a80', 'img'))->srcset ?>" alt="<?php echo udesly_get_image(_u('in2a485a80', 'img'))->alt ?>" src="<?php echo udesly_get_image(_u('in2a485a80', 'img'))->src ?>" loading="lazy" class="global-logo" data-img="in2a485a80"></a>
            </div>
            <div class="navigation-right">
              <nav role="navigation" class="nav-menu w-nav-menu">
                <a href="<?php echo _u('a2f','link'); ?>" class="navigation-link w-nav-link" data-text="t2268ff" data-link="a2f"><?php echo _u('t2268ff','text'); ?></a>
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
                <a href="<?php echo _u('a6084ccde','link'); ?>" aria-current="page" class="navigation-link w-nav-link" data-text="t645f0031" data-link="a6084ccde"><?php echo _u('t645f0031','text'); ?></a>
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
          <a href="<?php echo _u('a2f','link'); ?>" class="brand main-header w-nav-brand" data-link="a2f"><img sizes="(max-width: 673px) 98vw, 660px" srcset="<?php echo udesly_get_image(_u('in2a485a80', 'img'))->srcset ?>" alt="<?php echo udesly_get_image(_u('in2a485a80', 'img'))->alt ?>" src="<?php echo udesly_get_image(_u('in2a485a80', 'img'))->src ?>" class="flowbase-logo" data-img="in2a485a80"></a>
          <nav role="navigation" class="mobile-nav w-nav-menu">
            <a href="<?php echo _u('a2f','link'); ?>" class="mobile-nav-link w-nav-link" data-text="t2268ff" data-link="a2f"><?php echo _u('t2268ff','text'); ?></a>
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
            <a href="<?php echo _u('a6084ccde','link'); ?>" aria-current="page" class="mobile-nav-link w-nav-link" data-text="t645f0031" data-link="a6084ccde"><?php echo _u('t645f0031','text'); ?></a>
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
    <div class="text-hero">
      <div class="padding-global">
        <div class="container-large">
          <div class="text-hero_inner max-width-xlarge">
            <h1 data-textarea="tan3c629aa3"><?php echo _u('tan3c629aa3', 'textarea'); ?></h1>
            <div class="home-hero_inner_bottom_right">
              <a id="w-node-_998259f7-23c2-8bbe-0434-71e4c2d3976a-a47d98fb" href="<?php echo _u('a38b72420','link'); ?>" target="_blank" class="button is-icon w-inline-block" data-link="a38b72420">
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
    <div class="text-image">
      <div class="padding-global">
        <div class="container-large">
          <div class="text-image_inner"><img src="<?php echo udesly_get_image(_u('in27d4f9c', 'img'))->src ?>" loading="lazy" sizes="100vw" srcset="<?php echo udesly_get_image(_u('in27d4f9c', 'img'))->srcset ?>" alt="<?php echo udesly_get_image(_u('in27d4f9c', 'img'))->alt ?>" class="text-image_img about" data-img="in27d4f9c">
            <div class="text-image_text">
              <h2 class="heading-style-h3" data-text="tn7e03a020"><?php echo _u('tn7e03a020','text'); ?></h2>
              <div data-textarea="tan17dc5377"><?php echo _u('tan17dc5377', 'textarea'); ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="core-values">
      <div class="padding-global">
        <div class="container-large padding-section-medium">
          <div class="core-values_top">
            <h2 animated="" class="heading-style-h1 max-width-large" data-text="tn7099d7df"><?php echo _u('tn7099d7df','text'); ?></h2>
            <a href="<?php echo _u('a-4c0f1a30','link'); ?>" class="button is-icon gray text-weight-medium w-inline-block" data-link="a-4c0f1a30">
              <div data-text="tn1fdc48f8"><?php echo _u('tn1fdc48f8','text'); ?></div>
              <div class="icon-1x1-small w-embed"><svg aria-hidden="true" fill="currentColor" role="img" viewBox="0 0 20 21" xmlns="http://www.w3.org/2000/svg">
                  <title>Arrow Right</title>
                  <polygon points="16.172 9 10.101 2.929 11.515 1.515 20 10 19.293 10.707 11.515 18.485 10.101 17.071 16.172 11 0 11 0 9">
                </polygon></svg></div>
            </a>
          </div>
          <div class="solutions-container">
            <div class="swiper-slides-container">
              <div class="collection_featured swiper product-swiper">
                <div class="swiper-wrapper stretch">
                  <div class="collection_featured-item swiper-slide stretch">
                    <div class="core-values_card">
                      <div class="core-values-card_content">
                        <div class="solution-slider-icon w-embed"><svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="60" height="60" rx="5" fill="url(#paint0_linear_2127_968)"></rect>
                            <path d="M30.25 49.9938L27.1688 47.1888C16.225 37.265 9 30.6987 9 22.6875C9 16.1213 14.1425 11 20.6875 11C24.385 11 27.9338 12.7212 30.25 15.42C32.5662 12.7212 36.115 11 39.8125 11C46.3575 11 51.5 16.1213 51.5 22.6875C51.5 30.6987 44.275 37.265 33.3312 47.1888L30.25 49.9938Z" fill="white"></path>
                            <defs>
                              <linearGradient id="paint0_linear_2127_968" x1="1.2644e-06" y1="60" x2="60" y2="1.2644e-06" gradientUnits="userSpaceOnUse">
                                <stop offset="0.75" stop-color="#1477FF"></stop>
                                <stop offset="1" stop-color="#6CCBFF"></stop>
                              </linearGradient>
                            </defs>
                          </svg></div>
                        <h3 class="heading-style-h3" data-text="tn22a219ea"><?php echo _u('tn22a219ea','text'); ?></h3>
                        <div data-text="t6c95a197"><?php echo _u('t6c95a197','text'); ?></div>
                      </div>
                    </div>
                  </div>
                  <div class="collection_featured-item swiper-slide">
                    <div class="core-values_card">
                      <div class="core-values-card_content">
                        <div class="solution-slider-icon w-embed"><svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="60" height="60" rx="5" fill="url(#paint0_linear_2267_3137)"></rect>
                            <path d="M27.7083 11.583C19.7927 11.583 13.375 17.9345 13.375 25.7712C13.375 28.4462 14.1221 30.9491 15.4229 33.083" stroke="white" stroke-width="2.6875" stroke-linecap="round"></path>
                            <path d="M33.9779 27.7083V31.2917M39.3529 27.7083V31.2917M33.9779 13.375V16.9583M39.3529 13.375V16.9583M31.2904 19.6458H27.707M31.2904 25.0208H27.707M45.6237 19.6458H42.0404M45.6237 25.0208H42.0404M38.457 16.9583H34.8737C33.1842 16.9583 32.3403 16.9583 31.8153 17.4833C31.2904 18.0083 31.2904 18.8521 31.2904 20.5417V24.125C31.2904 25.8145 31.2904 26.6584 31.8153 27.1834C32.3403 27.7083 33.1842 27.7083 34.8737 27.7083H38.457C40.1466 27.7083 40.9904 27.7083 41.5154 27.1834C42.0404 26.6584 42.0404 25.8145 42.0404 24.125V20.5417C42.0404 18.8521 42.0404 18.0083 41.5154 17.4833C40.9904 16.9583 40.1466 16.9583 38.457 16.9583Z" stroke="white" stroke-width="2.6875" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M33.0853 42.042L32.8524 43.2012C32.6015 44.4679 32.4743 45.1004 32.1895 45.602C31.7505 46.3752 31.0397 46.9576 30.1953 47.236C29.6489 47.417 29.0003 47.417 27.7103 47.417C26.4203 47.417 25.7717 47.417 25.2253 47.2378C24.3805 46.959 23.6698 46.3759 23.2311 45.602C22.9463 45.1004 22.819 44.4679 22.5682 43.2012L22.3353 42.042M19.4382 38.6342C19.2733 38.1397 19.1909 37.8907 19.1999 37.69C19.21 37.4825 19.28 37.2824 19.4015 37.1139C19.523 36.9454 19.6907 36.8157 19.8843 36.7405C20.0706 36.667 20.3322 36.667 20.8518 36.667H34.5688C35.0902 36.667 35.35 36.667 35.5363 36.7387C35.7302 36.814 35.8981 36.944 36.0196 37.1129C36.141 37.2817 36.2109 37.4822 36.2207 37.69C36.2297 37.8907 36.1473 38.1379 35.9824 38.6342C35.6778 39.5498 35.5255 40.0085 35.2908 40.3793C34.7999 41.1544 34.0304 41.7117 33.1408 41.9363C32.7144 42.042 32.2343 42.042 31.2721 42.042H24.1485C23.1863 42.042 22.7044 42.042 22.2798 41.9345C21.3905 41.7103 20.621 41.1537 20.1298 40.3793C19.895 40.0085 19.7428 39.5498 19.4382 38.6342Z" stroke="white" stroke-width="2.6875"></path>
                            <defs>
                              <linearGradient id="paint0_linear_2267_3137" x1="1.2644e-06" y1="60" x2="60" y2="1.2644e-06" gradientUnits="userSpaceOnUse">
                                <stop offset="0.75" stop-color="#1477FF"></stop>
                                <stop offset="1" stop-color="#6CCBFF"></stop>
                              </linearGradient>
                            </defs>
                          </svg></div>
                        <h3 class="heading-style-h3" data-text="tn4028fe7b"><?php echo _u('tn4028fe7b','text'); ?></h3>
                        <div data-text="ta765286"><?php echo _u('ta765286','text'); ?></div>
                      </div>
                    </div>
                  </div>
                  <div class="collection_featured-item swiper-slide">
                    <div class="core-values_card">
                      <div class="core-values-card_content">
                        <div class="solution-slider-icon w-embed"><svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="60" height="60" rx="5" fill="url(#paint0_linear_2267_3138)"></rect>
                            <path d="M30 26.2C32.0156 26.2 33.9487 25.3993 35.374 23.974C36.7993 22.5487 37.6 20.6156 37.6 18.6C37.6 16.5844 36.7993 14.6513 35.374 13.226C33.9487 11.8007 32.0156 11 30 11C27.9844 11 26.0513 11.8007 24.626 13.226C23.2007 14.6513 22.4 16.5844 22.4 18.6C22.4 20.6156 23.2007 22.5487 24.626 23.974C26.0513 25.3993 27.9844 26.2 30 26.2ZM17.65 31.9C18.9098 31.9 20.118 31.3996 21.0088 30.5088C21.8996 29.618 22.4 28.4098 22.4 27.15C22.4 25.8902 21.8996 24.682 21.0088 23.7912C20.118 22.9004 18.9098 22.4 17.65 22.4C16.3902 22.4 15.182 22.9004 14.2912 23.7912C13.4004 24.682 12.9 25.8902 12.9 27.15C12.9 28.4098 13.4004 29.618 14.2912 30.5088C15.182 31.3996 16.3902 31.9 17.65 31.9ZM47.1 27.15C47.1 28.4098 46.5996 29.618 45.7088 30.5088C44.818 31.3996 43.6098 31.9 42.35 31.9C41.0902 31.9 39.882 31.3996 38.9912 30.5088C38.1004 29.618 37.6 28.4098 37.6 27.15C37.6 25.8902 38.1004 24.682 38.9912 23.7912C39.882 22.9004 41.0902 22.4 42.35 22.4C43.6098 22.4 44.818 22.9004 45.7088 23.7912C46.5996 24.682 47.1 25.8902 47.1 27.15ZM30 28.1C32.5196 28.1 34.9359 29.1009 36.7175 30.8825C38.4991 32.6641 39.5 35.0804 39.5 37.6V49H20.5V37.6C20.5 35.0804 21.5009 32.6641 23.2825 30.8825C25.0641 29.1009 27.4804 28.1 30 28.1ZM16.7 37.6C16.7 36.2833 16.89 35.0122 17.2472 33.8114L16.9242 33.838C15.2957 34.0168 13.7905 34.7905 12.6972 36.0107C11.6039 37.2309 10.9996 38.8117 11 40.45V49H16.7V37.6ZM49 49V40.45C49.0002 38.7559 48.3538 37.1256 47.1929 35.8919C46.0319 34.6581 44.4438 33.914 42.7528 33.8114C43.1081 35.0122 43.3 36.2833 43.3 37.6V49H49Z" fill="white"></path>
                            <defs>
                              <linearGradient id="paint0_linear_2267_3138" x1="1.2644e-06" y1="60" x2="60" y2="1.2644e-06" gradientUnits="userSpaceOnUse">
                                <stop offset="0.75" stop-color="#1477FF"></stop>
                                <stop offset="1" stop-color="#6CCBFF"></stop>
                              </linearGradient>
                            </defs>
                          </svg></div>
                        <h3 class="heading-style-h3" data-text="tn5f8a08f2"><?php echo _u('tn5f8a08f2','text'); ?></h3>
                        <div data-text="t798dfc7a"><?php echo _u('t798dfc7a','text'); ?></div>
                      </div>
                    </div>
                  </div>
                  <div class="collection_featured-item swiper-slide">
                    <div class="core-values_card">
                      <div class="core-values-card_content">
                        <div class="solution-slider-icon w-embed"><svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="60" height="60" rx="5" fill="url(#paint0_linear_627_2176)"></rect>
                            <path d="M12 15.6333L29.55 10V49C17.0137 43.8 12 33.8333 12 28.2V15.6333ZM47.1 15.6333L29.55 10V49C42.0863 43.8 47.1 33.8333 47.1 28.2V15.6333Z" fill="white"></path>
                            <defs>
                              <linearGradient id="paint0_linear_627_2176" x1="1.2644e-06" y1="60" x2="60" y2="1.2644e-06" gradientUnits="userSpaceOnUse">
                                <stop offset="0.75" stop-color="#1477FF"></stop>
                                <stop offset="1" stop-color="#6CCBFF"></stop>
                              </linearGradient>
                            </defs>
                          </svg></div>
                        <h3 class="heading-style-h3" data-text="t4d54e38"><?php echo _u('t4d54e38','text'); ?></h3>
                        <div data-text="tn34821390"><?php echo _u('tn34821390','text'); ?></div>
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
    <div class="achievements">
      <div class="padding-global">
        <div class="container-large padding-section-medium">
          <div class="achievements_top">
            <h2 animated="" class="heading-style-h1" data-text="t402194eb"><?php echo _u('t402194eb','text'); ?></h2>
            <a href="<?php echo _u('a38b72420','link'); ?>" target="_blank" class="button is-icon w-inline-block" data-link="a38b72420">
              <div data-text="t7f2746de"><?php echo _u('t7f2746de','text'); ?></div>
              <div class="icon-1x1-small w-embed"><svg aria-hidden="true" fill="currentColor" role="img" viewBox="0 0 20 21" xmlns="http://www.w3.org/2000/svg">
                  <title>Arrow Right</title>
                  <polygon points="16.172 9 10.101 2.929 11.515 1.515 20 10 19.293 10.707 11.515 18.485 10.101 17.071 16.172 11 0 11 0 9">
                </polygon></svg></div>
            </a>
          </div>
          <div class="achievements_inner">
            <div class="achievements_inner_left">
              <div class="achievements_row">
                <div class="achievement_single">
                  <div class="f-spacegrotesk text-weight-normal" data-text="t5f0cde9c"><?php echo _u('t5f0cde9c','text'); ?></div>
                  <div class="xl-nice-stuff text-color-blue" data-text="t18d1d6"><?php echo _u('t18d1d6','text'); ?></div>
                </div>
                <div class="achievement_single">
                  <div class="f-spacegrotesk text-weight-normal" data-text="t50fbf769"><?php echo _u('t50fbf769','text'); ?></div>
                  <div class="xl-nice-stuff text-color-blue" data-text="tc248"><?php echo _u('tc248','text'); ?></div>
                </div>
              </div>
              <div class="achievements_row second">
                <div class="achievement_single">
                  <div class="f-spacegrotesk text-weight-normal" data-text="t1892eaa5"><?php echo _u('t1892eaa5','text'); ?></div>
                  <div class="xl-nice-stuff text-color-blue" data-text="td50d"><?php echo _u('td50d','text'); ?></div>
                </div>
                <div class="achievement_single">
                  <div class="f-spacegrotesk text-weight-normal" data-text="t615754da"><?php echo _u('t615754da','text'); ?></div>
                  <div class="xl-nice-stuff text-color-blue" data-text="tc1ad"><?php echo _u('tc1ad','text'); ?></div>
                </div>
              </div>
            </div>
            <div class="achievements_inner_lright"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="cloneable-area">
      <div data-w-id="564db315-f414-5a1b-029d-f6ee972938a6" class="section expand">
        <div class="container sticky">
          <div class="wrapper">
            <div class="c-details">
              <h1 animated="" data-text="tn2dfd3460"><?php echo _u('tn2dfd3460','text'); ?></h1>
            </div>
            <div class="c-scrolling-content">
              <div class="_w-scrolling-content">
                <div class="c-scroll-track">
                  <div class="c-scrolling-item alternate">
                    <div class="c-scrolling-line">
                      <div class="scroll-indicator">
                        <div class="timeline-fixed-year" data-text="t1774be"><?php echo _u('t1774be','text'); ?></div>
                      </div>
                      <div class="scroll-line"></div>
                    </div>
                    <div class="c-scrolling-details alternate">
                      <h4 class="scroll-item-header" data-text="t1774be"><?php echo _u('t1774be','text'); ?></h4>
                      <p class="scroll-details" data-text="t7d933a41"><?php echo _u('t7d933a41','text'); ?></p>
                    </div>
                  </div>
                  <div class="c-scrolling-item">
                    <div class="c-scrolling-line">
                      <div class="scroll-indicator">
                        <div class="timeline-fixed-year" data-text="t1774bf"><?php echo _u('t1774bf','text'); ?></div>
                      </div>
                      <div class="scroll-line"></div>
                    </div>
                    <div class="c-scrolling-details">
                      <h4 class="scroll-item-header" data-text="t1774bf"><?php echo _u('t1774bf','text'); ?></h4>
                      <p class="scroll-details" data-text="tn6178c58e"><?php echo _u('tn6178c58e','text'); ?></p>
                    </div>
                  </div>
                  <div class="c-scrolling-item alternate">
                    <div class="c-scrolling-line">
                      <div class="scroll-indicator">
                        <div class="timeline-fixed-year" data-text="t1774c4"><?php echo _u('t1774c4','text'); ?></div>
                      </div>
                      <div class="scroll-line"></div>
                    </div>
                    <div class="c-scrolling-details alternate">
                      <h4 class="scroll-item-header" data-text="t1774c4"><?php echo _u('t1774c4','text'); ?></h4>
                      <p class="scroll-details" data-text="tn461da59a"><?php echo _u('tn461da59a','text'); ?></p>
                    </div>
                  </div>
                  <div class="c-scrolling-item">
                    <div class="c-scrolling-line">
                      <div class="scroll-indicator">
                        <div class="timeline-fixed-year" data-text="t1774c7"><?php echo _u('t1774c7','text'); ?></div>
                      </div>
                      <div class="scroll-line"></div>
                    </div>
                    <div class="c-scrolling-details">
                      <h4 class="scroll-item-header" data-text="t1774c7"><?php echo _u('t1774c7','text'); ?></h4>
                      <p class="scroll-details" data-text="tn114c34d"><?php echo _u('tn114c34d','text'); ?></p>
                    </div>
                  </div>
                  <div class="c-scrolling-item alternate">
                    <div class="c-scrolling-line">
                      <div class="scroll-indicator">
                        <div class="timeline-fixed-year" data-text="t1774df"><?php echo _u('t1774df','text'); ?></div>
                      </div>
                      <div class="scroll-line"></div>
                    </div>
                    <div class="c-scrolling-details alternate">
                      <h4 class="scroll-item-header" data-text="t1774df"><?php echo _u('t1774df','text'); ?></h4>
                      <p class="scroll-details" data-text="tn1eba5016"><?php echo _u('tn1eba5016','text'); ?></p>
                    </div>
                  </div>
                  <div class="c-scrolling-item">
                    <div class="c-scrolling-line">
                      <div class="scroll-indicator">
                        <div class="timeline-fixed-year" data-text="t1774e0"><?php echo _u('t1774e0','text'); ?></div>
                      </div>
                      <div class="scroll-line"></div>
                    </div>
                    <div class="c-scrolling-details">
                      <h4 class="scroll-item-header" data-text="t1774e0"><?php echo _u('t1774e0','text'); ?></h4>
                      <p class="scroll-details" data-text="tn1ffa7098"><?php echo _u('tn1ffa7098','text'); ?></p>
                    </div>
                  </div>
                  <div class="c-scrolling-item alternate">
                    <div class="c-scrolling-line">
                      <div class="scroll-indicator">
                        <div class="timeline-fixed-year" data-text="t1774e2"><?php echo _u('t1774e2','text'); ?></div>
                      </div>
                      <div class="scroll-line"></div>
                    </div>
                    <div class="c-scrolling-details alternate">
                      <h4 class="scroll-item-header" data-text="t1774e2"><?php echo _u('t1774e2','text'); ?></h4>
                      <p class="scroll-details" data-text="tn6fa3deb"><?php echo _u('tn6fa3deb','text'); ?></p>
                    </div>
                  </div>
                  <div class="c-scrolling-item">
                    <div class="c-scrolling-line">
                      <div class="scroll-indicator">
                        <div class="timeline-fixed-year" data-text="t1774e3"><?php echo _u('t1774e3','text'); ?></div>
                      </div>
                      <div class="scroll-line"></div>
                    </div>
                    <div class="c-scrolling-details">
                      <h4 class="scroll-item-header" data-text="t1774e3"><?php echo _u('t1774e3','text'); ?></h4>
                      <p class="scroll-details" data-text="t724df7d9"><?php echo _u('t724df7d9','text'); ?></p>
                    </div>
                  </div>
                  <div class="c-scrolling-item alternate">
                    <div class="c-scrolling-line">
                      <div class="scroll-indicator">
                        <div class="timeline-fixed-year" data-text="t1774e5"><?php echo _u('t1774e5','text'); ?></div>
                      </div>
                      <div class="scroll-line"></div>
                    </div>
                    <div class="c-scrolling-details alternate">
                      <h4 class="scroll-item-header" data-text="t1774e5"><?php echo _u('t1774e5','text'); ?></h4>
                      <p class="scroll-details" data-text="tn6d71b8cd"><?php echo _u('tn6d71b8cd','text'); ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="rounded-heading">
      <div class="padding-global">
        <div class="container-large">
          <div class="achievements_top">
            <h2 animated="" class="heading-style-h1" data-text="t7c7d190a"><?php echo _u('t7c7d190a','text'); ?></h2>
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
    <div class="text-image gray">
      <div class="padding-global">
        <div class="container-large">
          <div class="text-image_inner"><img src="<?php echo udesly_get_image(_u('i3ffcd410', 'img'))->src ?>" loading="lazy" sizes="100vw" srcset="<?php echo udesly_get_image(_u('i3ffcd410', 'img'))->srcset ?>" alt="<?php echo udesly_get_image(_u('i3ffcd410', 'img'))->alt ?>" class="text-image_img" data-img="i3ffcd410">
            <div class="text-image_text">
              <h2 class="heading-style-h3" data-text="tn654e4dcc"><?php echo _u('tn654e4dcc','text'); ?></h2>
              <div data-text="t5974848a"><?php echo _u('t5974848a','text'); ?></div>
              <div class="text-image_text_bottom">
                <a href="<?php echo _u('a38b72420','link'); ?>" target="_blank" class="button is-icon w-inline-block" data-link="a38b72420">
                  <div data-text="t7f274abe"><?php echo _u('t7f274abe','text'); ?></div>
                  <div class="icon-1x1-small w-embed"><svg aria-hidden="true" fill="currentColor" role="img" viewBox="0 0 20 21" xmlns="http://www.w3.org/2000/svg">
                      <title>Arrow Right</title>
                      <polygon points="16.172 9 10.101 2.929 11.515 1.515 20 10 19.293 10.707 11.515 18.485 10.101 17.071 16.172 11 0 11 0 9">
                    </polygon></svg></div>
                </a>
                <a href="<?php echo _u('a3e9d8061','link'); ?>" target="_blank" class="button is-text w-inline-block" data-link="a3e9d8061">
                  <div data-text="tn5716090"><?php echo _u('tn5716090','text'); ?></div>
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
              <h2 class="heading-style-h3" data-text="t7abc5a91"><?php echo _u('t7abc5a91','text'); ?></h2>
              <div data-text="tn691b22ed"><?php echo _u('tn691b22ed','text'); ?></div>
              <div class="text-image_text_bottom">
                <a href="<?php echo _u('a38b72420','link'); ?>" target="_blank" class="button is-icon w-inline-block" data-link="a38b72420">
                  <div data-text="t7f274abe"><?php echo _u('t7f274abe','text'); ?></div>
                  <div class="icon-1x1-small w-embed"><svg aria-hidden="true" fill="currentColor" role="img" viewBox="0 0 20 21" xmlns="http://www.w3.org/2000/svg">
                      <title>Arrow Right</title>
                      <polygon points="16.172 9 10.101 2.929 11.515 1.515 20 10 19.293 10.707 11.515 18.485 10.101 17.071 16.172 11 0 11 0 9">
                    </polygon></svg></div>
                </a>
                <a href="<?php echo _u('a-1db89ce9','link'); ?>" target="_blank" class="button is-text w-inline-block" data-link="a-1db89ce9">
                  <div data-text="tn3fbde6f6"><?php echo _u('tn3fbde6f6','text'); ?></div>
                  <div class="icon-1x1-small w-embed"><svg aria-hidden="true" fill="currentColor" role="img" viewBox="0 0 20 21" xmlns="http://www.w3.org/2000/svg">
                      <title>Arrow Right</title>
                      <polygon points="16.172 9 10.101 2.929 11.515 1.515 20 10 19.293 10.707 11.515 18.485 10.101 17.071 16.172 11 0 11 0 9">
                    </polygon></svg></div>
                </a>
              </div>
            </div><img src="<?php echo udesly_get_image(_u('in6978d1e7', 'img'))->src ?>" loading="lazy" id="w-node-_31587962-8e50-e8e5-d8ab-63f79cf79aa5-a47d98fb" sizes="100vw" alt="<?php echo udesly_get_image(_u('in6978d1e7', 'img'))->alt ?>" srcset="<?php echo udesly_get_image(_u('in6978d1e7', 'img'))->srcset ?>" class="text-image_img" data-img="in6978d1e7">
          </div>
        </div>
      </div>
    </div>
    <div class="rounded-heading-bottom">
      <div class="padding-global">
        <div class="container-large"></div>
      </div>
    </div>
    <div class="text-image margin-bottom">
      <div class="padding-global">
        <div class="container-large">
          <div class="text-image_inner"><img src="<?php echo udesly_get_image(_u('i6e30c915', 'img'))->src ?>" loading="lazy" sizes="100vw" srcset="<?php echo udesly_get_image(_u('i6e30c915', 'img'))->srcset ?>" alt="<?php echo udesly_get_image(_u('i6e30c915', 'img'))->alt ?>" class="text-image_img" data-img="i6e30c915">
            <div class="text-image_text">
              <h2 class="heading-style-h3" data-text="t773bd766"><?php echo _u('t773bd766','text'); ?></h2>
              <div data-textarea="ta5008de90"><?php echo _u('ta5008de90', 'textarea'); ?></div>
              <div class="text-image_text_bottom">
                <a href="<?php echo _u('a38b72420','link'); ?>" target="_blank" class="button is-icon w-inline-block" data-link="a38b72420">
                  <div data-text="t7f274abe"><?php echo _u('t7f274abe','text'); ?></div>
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
    <div id="adress"></div>
    <div class="locations-hq">
      <div class="padding-global">
        <div class="container-large">
          <h2 animated="" class="heading-style-h1" data-textarea="tan32efd137"><?php echo _u('tan32efd137', 'textarea'); ?></h2>
          <div class="location-hq_card">
            <div class="location-hq_left">
              <h3 data-text="t48c3c1ed"><?php echo _u('t48c3c1ed','text'); ?></h3>
              <div class="location-card_info" data-textarea="tan510a20b6"><?php echo _u('tan510a20b6', 'textarea'); ?></div>
              <a href="<?php echo _u('a37ee57a2','link'); ?>" class="icon-link text-weight-bold w-inline-block" data-link="a37ee57a2">
                <div class="code-embed w-embed"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="16" height="16" rx="2" fill="black"></rect>
                    <path d="M4.81 6.895C5.53 8.31 6.69 9.465 8.105 10.19L9.205 9.09C9.34 8.955 9.54 8.91 9.715 8.97C10.275 9.155 10.88 9.255 11.5 9.255C11.775 9.255 12 9.48 12 9.755V11.5C12 11.775 11.775 12 11.5 12C6.805 12 3 8.195 3 3.5C3 3.225 3.225 3 3.5 3H5.25C5.525 3 5.75 3.225 5.75 3.5C5.75 4.125 5.85 4.725 6.035 5.285C6.09 5.46 6.05 5.655 5.91 5.795L4.81 6.895Z" fill="white"></path>
                  </svg></div>
                <div data-text="t432ef84d"><?php echo _u('t432ef84d','text'); ?></div>
              </a>
            </div>
            <div class="location-hq_right">
              <div class="location-card_info text-align-right" data-textarea="ta734b06a"><?php echo _u('ta734b06a', 'textarea'); ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="branch-office">
      <div class="padding-global">
        <div class="container-large">
          <h2 class="heading-style-h3" data-textarea="ta845251a"><?php echo _u('ta845251a', 'textarea'); ?></h2>
          <div class="location-card-wrap">
            <div class="location-card">
              <div class="location-hq_left">
                <div class="location-card_info" data-textarea="taa2b3275"><?php echo _u('taa2b3275', 'textarea'); ?></div>
                <div class="location-card_links">
                  <a href="<?php echo _u('a58dda2a6','link'); ?>" class="icon-link text-color-blue w-inline-block" data-link="a58dda2a6">
                    <div class="code-embed w-embed"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="16" height="16" rx="2" fill="currentColor"></rect>
                        <path d="M4.81 6.895C5.53 8.31 6.69 9.465 8.105 10.19L9.205 9.09C9.34 8.955 9.54 8.91 9.715 8.97C10.275 9.155 10.88 9.255 11.5 9.255C11.775 9.255 12 9.48 12 9.755V11.5C12 11.775 11.775 12 11.5 12C6.805 12 3 8.195 3 3.5C3 3.225 3.225 3 3.5 3H5.25C5.525 3 5.75 3.225 5.75 3.5C5.75 4.125 5.85 4.725 6.035 5.285C6.09 5.46 6.05 5.655 5.91 5.795L4.81 6.895Z" fill="white"></path>
                      </svg></div>
                    <div data-text="tn612724d9"><?php echo _u('tn612724d9','text'); ?></div>
                  </a>
                  <a href="<?php echo _u('a58dd9ee5','link'); ?>" class="icon-link text-color-blue w-inline-block" data-link="a58dd9ee5">
                    <div class="code-embed w-embed"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="16" height="16" rx="2" fill="currentColor"></rect>
                        <path d="M4.81 6.895C5.53 8.31 6.69 9.465 8.105 10.19L9.205 9.09C9.34 8.955 9.54 8.91 9.715 8.97C10.275 9.155 10.88 9.255 11.5 9.255C11.775 9.255 12 9.48 12 9.755V11.5C12 11.775 11.775 12 11.5 12C6.805 12 3 8.195 3 3.5C3 3.225 3.225 3 3.5 3H5.25C5.525 3 5.75 3.225 5.75 3.5C5.75 4.125 5.85 4.725 6.035 5.285C6.09 5.46 6.05 5.655 5.91 5.795L4.81 6.895Z" fill="white"></path>
                      </svg></div>
                    <div data-text="tn6127289a"><?php echo _u('tn6127289a','text'); ?></div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="spacer-xlarge"></div>
          <h2 class="heading-style-h3" data-textarea="tan2c815854"><?php echo _u('tan2c815854', 'textarea'); ?></h2>
          <div class="location-card-wrap">
            <div class="location-card">
              <div class="location-hq_left">
                <div class="location-card_info" data-textarea="ta23b8397c"><?php echo _u('ta23b8397c', 'textarea'); ?></div>
                <div class="location-card_links">
                  <a href="<?php echo _u('a-1e4b22fd','link'); ?>" class="icon-link text-color-blue w-inline-block" data-link="a-1e4b22fd">
                    <div class="code-embed w-embed"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="16" height="16" rx="2" fill="currentColor"></rect>
                        <path d="M4.81 6.895C5.53 8.31 6.69 9.465 8.105 10.19L9.205 9.09C9.34 8.955 9.54 8.91 9.715 8.97C10.275 9.155 10.88 9.255 11.5 9.255C11.775 9.255 12 9.48 12 9.755V11.5C12 11.775 11.775 12 11.5 12C6.805 12 3 8.195 3 3.5C3 3.225 3.225 3 3.5 3H5.25C5.525 3 5.75 3.225 5.75 3.5C5.75 4.125 5.85 4.725 6.035 5.285C6.09 5.46 6.05 5.655 5.91 5.795L4.81 6.895Z" fill="white"></path>
                      </svg></div>
                    <div data-text="tn4143f964"><?php echo _u('tn4143f964','text'); ?></div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="distributor-network">
      <div class="padding-global">
        <div class="container-large">
          <h2 class="heading-style-h3" data-textarea="ta281bff9a"><?php echo _u('ta281bff9a', 'textarea'); ?></h2>
          <div class="spacer-medium"></div>
          <h3 class="heading-style-h5 text-color-blue" data-textarea="ta66275133"><?php echo _u('ta66275133', 'textarea'); ?></h3>
          <div class="dn-wrap">
            <div class="dn-card">
              <div class="location-hq_left">
                <div class="dn-card_country" data-text="t3e10537"><?php echo _u('t3e10537','text'); ?></div>
                <div class="location-card_info" data-textarea="tan5c6e7d6e"><?php echo _u('tan5c6e7d6e', 'textarea'); ?></div>
                <div class="location-card_links">
                  <a href="<?php echo _u('a-4b714285','link'); ?>" class="icon-link text-color-blue w-inline-block" data-link="a-4b714285">
                    <div class="code-embed w-embed"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="16" height="16" rx="2" fill="currentColor"></rect>
                        <path d="M4.81 6.895C5.53 8.31 6.69 9.465 8.105 10.19L9.205 9.09C9.34 8.955 9.54 8.91 9.715 8.97C10.275 9.155 10.88 9.255 11.5 9.255C11.775 9.255 12 9.48 12 9.755V11.5C12 11.775 11.775 12 11.5 12C6.805 12 3 8.195 3 3.5C3 3.225 3.225 3 3.5 3H5.25C5.525 3 5.75 3.225 5.75 3.5C5.75 4.125 5.85 4.725 6.035 5.285C6.09 5.46 6.05 5.655 5.91 5.795L4.81 6.895Z" fill="white"></path>
                      </svg></div>
                    <div data-text="t68be1abe"><?php echo _u('t68be1abe','text'); ?></div>
                  </a>
                </div>
              </div>
            </div>
            <div class="dn-card">
              <div class="location-hq_left">
                <div class="dn-card_country" data-text="t4383917"><?php echo _u('t4383917','text'); ?></div>
                <div class="location-card_info" data-textarea="tan65adaf78"><?php echo _u('tan65adaf78', 'textarea'); ?></div>
                <div class="location-card_links">
                  <a href="<?php echo _u('a2055a2e9','link'); ?>" class="icon-link text-color-blue w-inline-block" data-link="a2055a2e9">
                    <div class="code-embed w-embed"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="16" height="16" rx="2" fill="currentColor"></rect>
                        <path d="M4.81 6.895C5.53 8.31 6.69 9.465 8.105 10.19L9.205 9.09C9.34 8.955 9.54 8.91 9.715 8.97C10.275 9.155 10.88 9.255 11.5 9.255C11.775 9.255 12 9.48 12 9.755V11.5C12 11.775 11.775 12 11.5 12C6.805 12 3 8.195 3 3.5C3 3.225 3.225 3 3.5 3H5.25C5.525 3 5.75 3.225 5.75 3.5C5.75 4.125 5.85 4.725 6.035 5.285C6.09 5.46 6.05 5.655 5.91 5.795L4.81 6.895Z" fill="white"></path>
                      </svg></div>
                    <div data-text="tn2dc057f2"><?php echo _u('tn2dc057f2','text'); ?></div>
                  </a>
                </div>
              </div>
            </div>
            <div class="dn-card">
              <div class="location-hq_left">
                <div class="dn-card_country" data-text="t44093e6"><?php echo _u('t44093e6','text'); ?></div>
                <div class="location-card_info" data-textarea="tan3213b96"><?php echo _u('tan3213b96', 'textarea'); ?></div>
                <div class="location-card_links">
                  <a href="<?php echo _u('a-41b1e070','link'); ?>" class="icon-link text-color-blue w-inline-block" data-link="a-41b1e070">
                    <div class="code-embed w-embed"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="16" height="16" rx="2" fill="currentColor"></rect>
                        <path d="M4.81 6.895C5.53 8.31 6.69 9.465 8.105 10.19L9.205 9.09C9.34 8.955 9.54 8.91 9.715 8.97C10.275 9.155 10.88 9.255 11.5 9.255C11.775 9.255 12 9.48 12 9.755V11.5C12 11.775 11.775 12 11.5 12C6.805 12 3 8.195 3 3.5C3 3.225 3.225 3 3.5 3H5.25C5.525 3 5.75 3.225 5.75 3.5C5.75 4.125 5.85 4.725 6.035 5.285C6.09 5.46 6.05 5.655 5.91 5.795L4.81 6.895Z" fill="white"></path>
                      </svg></div>
                    <div data-text="tn2f036dcf"><?php echo _u('tn2f036dcf','text'); ?></div>
                  </a>
                </div>
              </div>
            </div>
            <div class="dn-card">
              <div class="location-hq_left">
                <div class="dn-card_country" data-text="t44093e6"><?php echo _u('t44093e6','text'); ?></div>
                <div class="location-card_info" data-textarea="tan66593915"><?php echo _u('tan66593915', 'textarea'); ?></div>
                <div class="location-card_links">
                  <a href="<?php echo _u('a-729f6d90','link'); ?>" class="icon-link text-color-blue w-inline-block" data-link="a-729f6d90">
                    <div class="code-embed w-embed"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="16" height="16" rx="2" fill="currentColor"></rect>
                        <path d="M4.81 6.895C5.53 8.31 6.69 9.465 8.105 10.19L9.205 9.09C9.34 8.955 9.54 8.91 9.715 8.97C10.275 9.155 10.88 9.255 11.5 9.255C11.775 9.255 12 9.48 12 9.755V11.5C12 11.775 11.775 12 11.5 12C6.805 12 3 8.195 3 3.5C3 3.225 3.225 3 3.5 3H5.25C5.525 3 5.75 3.225 5.75 3.5C5.75 4.125 5.85 4.725 6.035 5.285C6.09 5.46 6.05 5.655 5.91 5.795L4.81 6.895Z" fill="white"></path>
                      </svg></div>
                    <div data-text="tn1b68f309"><?php echo _u('tn1b68f309','text'); ?></div>
                  </a>
                </div>
              </div>
            </div>
            <div class="dn-card">
              <div class="location-hq_left">
                <div class="dn-card_country" data-text="t455108a"><?php echo _u('t455108a','text'); ?></div>
                <div class="location-card_info" data-textarea="tan387f5c4b"><?php echo _u('tan387f5c4b', 'textarea'); ?></div>
                <div class="location-card_links">
                  <a href="<?php echo _u('a-45b1c575','link'); ?>" class="icon-link text-color-blue w-inline-block" data-link="a-45b1c575">
                    <div class="code-embed w-embed"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="16" height="16" rx="2" fill="currentColor"></rect>
                        <path d="M4.81 6.895C5.53 8.31 6.69 9.465 8.105 10.19L9.205 9.09C9.34 8.955 9.54 8.91 9.715 8.97C10.275 9.155 10.88 9.255 11.5 9.255C11.775 9.255 12 9.48 12 9.755V11.5C12 11.775 11.775 12 11.5 12C6.805 12 3 8.195 3 3.5C3 3.225 3.225 3 3.5 3H5.25C5.525 3 5.75 3.225 5.75 3.5C5.75 4.125 5.85 4.725 6.035 5.285C6.09 5.46 6.05 5.655 5.91 5.795L4.81 6.895Z" fill="white"></path>
                      </svg></div>
                    <div data-text="tee62008"><?php echo _u('tee62008','text'); ?></div>
                  </a>
                </div>
              </div>
            </div>
            <div class="dn-card">
              <div class="location-hq_left">
                <div class="dn-card_country" data-text="tn6b207e18"><?php echo _u('tn6b207e18','text'); ?></div>
                <div class="location-card_info" data-textarea="tan76422fa7"><?php echo _u('tan76422fa7', 'textarea'); ?></div>
                <div class="location-card_links">
                  <a href="<?php echo _u('a68f358ee','link'); ?>" class="icon-link text-color-blue w-inline-block" data-link="a68f358ee">
                    <div class="code-embed w-embed"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="16" height="16" rx="2" fill="currentColor"></rect>
                        <path d="M4.81 6.895C5.53 8.31 6.69 9.465 8.105 10.19L9.205 9.09C9.34 8.955 9.54 8.91 9.715 8.97C10.275 9.155 10.88 9.255 11.5 9.255C11.775 9.255 12 9.48 12 9.755V11.5C12 11.775 11.775 12 11.5 12C6.805 12 3 8.195 3 3.5C3 3.225 3.225 3 3.5 3H5.25C5.525 3 5.75 3.225 5.75 3.5C5.75 4.125 5.85 4.725 6.035 5.285C6.09 5.46 6.05 5.655 5.91 5.795L4.81 6.895Z" fill="white"></path>
                      </svg></div>
                    <div data-text="t373cd5db"><?php echo _u('t373cd5db','text'); ?></div>
                  </a>
                  <a href="<?php echo _u('a-e5c6f09','link'); ?>" class="icon-link text-color-blue w-inline-block" data-link="a-e5c6f09">
                    <div class="code-embed w-embed"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="16" height="16" rx="2" fill="currentColor"></rect>
                        <path d="M4.81 6.895C5.53 8.31 6.69 9.465 8.105 10.19L9.205 9.09C9.34 8.955 9.54 8.91 9.715 8.97C10.275 9.155 10.88 9.255 11.5 9.255C11.775 9.255 12 9.48 12 9.755V11.5C12 11.775 11.775 12 11.5 12C6.805 12 3 8.195 3 3.5C3 3.225 3.225 3 3.5 3H5.25C5.525 3 5.75 3.225 5.75 3.5C5.75 4.125 5.85 4.725 6.035 5.285C6.09 5.46 6.05 5.655 5.91 5.795L4.81 6.895Z" fill="white"></path>
                      </svg></div>
                    <div data-text="t40083e2e"><?php echo _u('t40083e2e','text'); ?></div>
                  </a>
                </div>
              </div>
            </div>
            <div class="dn-card">
              <div class="location-hq_left">
                <div class="dn-card_country" data-text="t7e4a6b18"><?php echo _u('t7e4a6b18','text'); ?></div>
                <div class="location-card_info" data-textarea="ta2468d57e"><?php echo _u('ta2468d57e', 'textarea'); ?></div>
                <div class="location-card_links">
                  <a href="<?php echo _u('af5ad38f','link'); ?>" class="icon-link text-color-blue w-inline-block" data-link="af5ad38f">
                    <div class="code-embed w-embed"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="16" height="16" rx="2" fill="currentColor"></rect>
                        <path d="M4.81 6.895C5.53 8.31 6.69 9.465 8.105 10.19L9.205 9.09C9.34 8.955 9.54 8.91 9.715 8.97C10.275 9.155 10.88 9.255 11.5 9.255C11.775 9.255 12 9.48 12 9.755V11.5C12 11.775 11.775 12 11.5 12C6.805 12 3 8.195 3 3.5C3 3.225 3.225 3 3.5 3H5.25C5.525 3 5.75 3.225 5.75 3.5C5.75 4.125 5.85 4.725 6.035 5.285C6.09 5.46 6.05 5.655 5.91 5.795L4.81 6.895Z" fill="white"></path>
                      </svg></div>
                    <div data-text="t7bcb8e8c"><?php echo _u('t7bcb8e8c','text'); ?></div>
                  </a>
                  <a href="<?php echo _u('aedcbad7','link'); ?>" class="icon-link text-color-blue w-inline-block" data-link="aedcbad7">
                    <div class="code-embed w-embed"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="16" height="16" rx="2" fill="currentColor"></rect>
                        <path d="M4.81 6.895C5.53 8.31 6.69 9.465 8.105 10.19L9.205 9.09C9.34 8.955 9.54 8.91 9.715 8.97C10.275 9.155 10.88 9.255 11.5 9.255C11.775 9.255 12 9.48 12 9.755V11.5C12 11.775 11.775 12 11.5 12C6.805 12 3 8.195 3 3.5C3 3.225 3.225 3 3.5 3H5.25C5.525 3 5.75 3.225 5.75 3.5C5.75 4.125 5.85 4.725 6.035 5.285C6.09 5.46 6.05 5.655 5.91 5.795L4.81 6.895Z" fill="white"></path>
                      </svg></div>
                    <div data-text="tn1cb87636"><?php echo _u('tn1cb87636','text'); ?></div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="spacer-large"></div>
          <h3 class="heading-style-h5 text-color-blue" data-textarea="ta208744"><?php echo _u('ta208744', 'textarea'); ?></h3>
          <div class="dn-wrap">
            <div class="dn-card">
              <div class="location-hq_left">
                <div class="dn-card_country" data-text="tn7e188701"><?php echo _u('tn7e188701','text'); ?></div>
                <div class="location-card_info" data-textarea="ta5fc781d6"><?php echo _u('ta5fc781d6', 'textarea'); ?></div>
                <div class="location-card_links">
                  <a href="<?php echo _u('ab89824b','link'); ?>" class="icon-link text-color-blue w-inline-block" data-link="ab89824b">
                    <div class="code-embed w-embed"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="16" height="16" rx="2" fill="currentColor"></rect>
                        <path d="M4.81 6.895C5.53 8.31 6.69 9.465 8.105 10.19L9.205 9.09C9.34 8.955 9.54 8.91 9.715 8.97C10.275 9.155 10.88 9.255 11.5 9.255C11.775 9.255 12 9.48 12 9.755V11.5C12 11.775 11.775 12 11.5 12C6.805 12 3 8.195 3 3.5C3 3.225 3.225 3 3.5 3H5.25C5.525 3 5.75 3.225 5.75 3.5C5.75 4.125 5.85 4.725 6.035 5.285C6.09 5.46 6.05 5.655 5.91 5.795L4.81 6.895Z" fill="white"></path>
                      </svg></div>
                    <div data-text="tnc624a4a"><?php echo _u('tnc624a4a','text'); ?></div>
                  </a>
                </div>
              </div>
            </div>
            <div class="dn-card">
              <div class="location-hq_left">
                <div class="dn-card_country" data-text="t38b3ef78"><?php echo _u('t38b3ef78','text'); ?></div>
                <div class="location-card_info" data-textarea="ta3b134f23"><?php echo _u('ta3b134f23', 'textarea'); ?></div>
                <div class="location-card_links">
                  <a href="<?php echo _u('a6031c006','link'); ?>" class="icon-link text-color-blue w-inline-block" data-link="a6031c006">
                    <div class="code-embed w-embed"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="16" height="16" rx="2" fill="currentColor"></rect>
                        <path d="M4.81 6.895C5.53 8.31 6.69 9.465 8.105 10.19L9.205 9.09C9.34 8.955 9.54 8.91 9.715 8.97C10.275 9.155 10.88 9.255 11.5 9.255C11.775 9.255 12 9.48 12 9.755V11.5C12 11.775 11.775 12 11.5 12C6.805 12 3 8.195 3 3.5C3 3.225 3.225 3 3.5 3H5.25C5.525 3 5.75 3.225 5.75 3.5C5.75 4.125 5.85 4.725 6.035 5.285C6.09 5.46 6.05 5.655 5.91 5.795L4.81 6.895Z" fill="white"></path>
                      </svg></div>
                    <div data-text="tn25942bdb"><?php echo _u('tn25942bdb','text'); ?></div>
                  </a>
                  <a href="<?php echo _u('a-69e08c6f','link'); ?>" class="icon-link text-color-blue w-inline-block" data-link="a-69e08c6f">
                    <div class="code-embed w-embed"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="16" height="16" rx="2" fill="currentColor"></rect>
                        <path d="M4.81 6.895C5.53 8.31 6.69 9.465 8.105 10.19L9.205 9.09C9.34 8.955 9.54 8.91 9.715 8.97C10.275 9.155 10.88 9.255 11.5 9.255C11.775 9.255 12 9.48 12 9.755V11.5C12 11.775 11.775 12 11.5 12C6.805 12 3 8.195 3 3.5C3 3.225 3.225 3 3.5 3H5.25C5.525 3 5.75 3.225 5.75 3.5C5.75 4.125 5.85 4.725 6.035 5.285C6.09 5.46 6.05 5.655 5.91 5.795L4.81 6.895Z" fill="white"></path>
                      </svg></div>
                    <div data-text="t6d5faeac"><?php echo _u('t6d5faeac','text'); ?></div>
                  </a>
                </div>
              </div>
            </div>
            <div class="dn-card">
              <div class="location-hq_left">
                <div class="dn-card_country" data-text="t55f26475"><?php echo _u('t55f26475','text'); ?></div>
                <div class="location-card_info" data-textarea="ta3b134f23"><?php echo _u('ta3b134f23', 'textarea'); ?></div>
                <div class="location-card_links">
                  <a href="<?php echo _u('a6031c006','link'); ?>" class="icon-link text-color-blue w-inline-block" data-link="a6031c006">
                    <div class="code-embed w-embed"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="16" height="16" rx="2" fill="currentColor"></rect>
                        <path d="M4.81 6.895C5.53 8.31 6.69 9.465 8.105 10.19L9.205 9.09C9.34 8.955 9.54 8.91 9.715 8.97C10.275 9.155 10.88 9.255 11.5 9.255C11.775 9.255 12 9.48 12 9.755V11.5C12 11.775 11.775 12 11.5 12C6.805 12 3 8.195 3 3.5C3 3.225 3.225 3 3.5 3H5.25C5.525 3 5.75 3.225 5.75 3.5C5.75 4.125 5.85 4.725 6.035 5.285C6.09 5.46 6.05 5.655 5.91 5.795L4.81 6.895Z" fill="white"></path>
                      </svg></div>
                    <div data-text="tn25942bdb"><?php echo _u('tn25942bdb','text'); ?></div>
                  </a>
                  <a href="<?php echo _u('a-69e08c6f','link'); ?>" class="icon-link text-color-blue w-inline-block" data-link="a-69e08c6f">
                    <div class="code-embed w-embed"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="16" height="16" rx="2" fill="currentColor"></rect>
                        <path d="M4.81 6.895C5.53 8.31 6.69 9.465 8.105 10.19L9.205 9.09C9.34 8.955 9.54 8.91 9.715 8.97C10.275 9.155 10.88 9.255 11.5 9.255C11.775 9.255 12 9.48 12 9.755V11.5C12 11.775 11.775 12 11.5 12C6.805 12 3 8.195 3 3.5C3 3.225 3.225 3 3.5 3H5.25C5.525 3 5.75 3.225 5.75 3.5C5.75 4.125 5.85 4.725 6.035 5.285C6.09 5.46 6.05 5.655 5.91 5.795L4.81 6.895Z" fill="white"></path>
                      </svg></div>
                    <div data-text="t6d5faeac"><?php echo _u('t6d5faeac','text'); ?></div>
                  </a>
                </div>
              </div>
            </div>
            <div class="dn-card">
              <div class="location-hq_left">
                <div class="dn-card_country"></div>
                <div class="location-card_info"></div>
                <div class="location-card_links">
                  <a href="<?php echo _u('a23','link'); ?>" class="icon-link text-color-blue w-inline-block" data-link="a23">
                    <div class="code-embed w-embed"></div>
                    <div></div>
                  </a>
                </div>
              </div>
            </div>
            <div class="dn-card">
              <div class="location-hq_left">
                <div class="dn-card_country" data-text="t7de7743b"><?php echo _u('t7de7743b','text'); ?></div>
                <div class="location-card_info" data-textarea="ta5d788ee6"><?php echo _u('ta5d788ee6', 'textarea'); ?></div>
                <div class="location-card_links">
                  <a href="<?php echo _u('a-27772002','link'); ?>" class="icon-link text-color-blue w-inline-block" data-link="a-27772002">
                    <div class="code-embed w-embed"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="16" height="16" rx="2" fill="currentColor"></rect>
                        <path d="M4.81 6.895C5.53 8.31 6.69 9.465 8.105 10.19L9.205 9.09C9.34 8.955 9.54 8.91 9.715 8.97C10.275 9.155 10.88 9.255 11.5 9.255C11.775 9.255 12 9.48 12 9.755V11.5C12 11.775 11.775 12 11.5 12C6.805 12 3 8.195 3 3.5C3 3.225 3.225 3 3.5 3H5.25C5.525 3 5.75 3.225 5.75 3.5C5.75 4.125 5.85 4.725 6.035 5.285C6.09 5.46 6.05 5.655 5.91 5.795L4.81 6.895Z" fill="white"></path>
                      </svg></div>
                    <div data-text="tn3240c251"><?php echo _u('tn3240c251','text'); ?></div>
                  </a>
                </div>
              </div>
            </div>
            <div class="dn-card">
              <div class="location-hq_left">
                <div class="dn-card_country" data-text="t10096234"><?php echo _u('t10096234','text'); ?></div>
                <div class="location-card_info" data-textarea="ta3fd7315a"><?php echo _u('ta3fd7315a', 'textarea'); ?></div>
                <div class="location-card_links">
                  <a href="<?php echo _u('afb56837','link'); ?>" class="icon-link text-color-blue w-inline-block" data-link="afb56837">
                    <div class="code-embed w-embed"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="16" height="16" rx="2" fill="currentColor"></rect>
                        <path d="M4.81 6.895C5.53 8.31 6.69 9.465 8.105 10.19L9.205 9.09C9.34 8.955 9.54 8.91 9.715 8.97C10.275 9.155 10.88 9.255 11.5 9.255C11.775 9.255 12 9.48 12 9.755V11.5C12 11.775 11.775 12 11.5 12C6.805 12 3 8.195 3 3.5C3 3.225 3.225 3 3.5 3H5.25C5.525 3 5.75 3.225 5.75 3.5C5.75 4.125 5.85 4.725 6.035 5.285C6.09 5.46 6.05 5.655 5.91 5.795L4.81 6.895Z" fill="white"></path>
                      </svg></div>
                    <div data-text="tn64f316ee"><?php echo _u('tn64f316ee','text'); ?></div>
                  </a>
                </div>
              </div>
            </div>
            <div class="dn-card">
              <div class="location-hq_left">
                <div class="dn-card_country" data-text="t3fb4a39e"><?php echo _u('t3fb4a39e','text'); ?></div>
                <div class="location-card_info" data-textarea="ta297eedc5"><?php echo _u('ta297eedc5', 'textarea'); ?></div>
                <div class="location-card_links">
                  <a href="<?php echo _u('a4151b836','link'); ?>" class="icon-link text-color-blue w-inline-block" data-link="a4151b836">
                    <div class="code-embed w-embed"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="16" height="16" rx="2" fill="currentColor"></rect>
                        <path d="M4.81 6.895C5.53 8.31 6.69 9.465 8.105 10.19L9.205 9.09C9.34 8.955 9.54 8.91 9.715 8.97C10.275 9.155 10.88 9.255 11.5 9.255C11.775 9.255 12 9.48 12 9.755V11.5C12 11.775 11.775 12 11.5 12C6.805 12 3 8.195 3 3.5C3 3.225 3.225 3 3.5 3H5.25C5.525 3 5.75 3.225 5.75 3.5C5.75 4.125 5.85 4.725 6.035 5.285C6.09 5.46 6.05 5.655 5.91 5.795L4.81 6.895Z" fill="white"></path>
                      </svg></div>
                    <div data-text="tn7cc9054b"><?php echo _u('tn7cc9054b','text'); ?></div>
                  </a>
                </div>
                <div class="location-card_links">
                  <a href="<?php echo _u('a23','link'); ?>" class="icon-link text-color-blue w-inline-block" data-link="a23">
                    <div class="code-embed w-embed"></div>
                    <div></div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="spacer-large"></div>
          <h3 class="heading-style-h5 text-color-blue" data-textarea="ta292b6184"><?php echo _u('ta292b6184', 'textarea'); ?></h3>
          <div class="dn-wrap">
            <div class="dn-card">
              <div class="location-hq_left">
                <div class="location-card_info" data-textarea="tan1340fa36"><?php echo _u('tan1340fa36', 'textarea'); ?></div>
              </div>
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
                    <a href="<?php echo _u('a2f','link'); ?>" class="brand black w-nav-brand" data-link="a2f"><img sizes="(max-width: 673px) 98vw, 660px" srcset="<?php echo udesly_get_image(_u('in2a485a80', 'img'))->srcset ?>" alt="<?php echo udesly_get_image(_u('in2a485a80', 'img'))->alt ?>" src="<?php echo udesly_get_image(_u('in2a485a80', 'img'))->src ?>" loading="lazy" class="global-logo" data-img="in2a485a80"></a>
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
                        <a href="<?php echo _u('a2f','link'); ?>" class="footer-nav_link w-nav-link" data-text="t2268ff" data-link="a2f"><?php echo _u('t2268ff','text'); ?></a>
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
                    <form id="wf-form-Newsletter-Form" name="wf-form-Newsletter-Form" data-name="Newsletter Form" method="get" data-wf-page-id="6969ae0a029af9bfa47d98fb" data-wf-element-id="5aa72e8c-cce9-d6df-7eb7-db2c069442ea" data-ajax-action="contact"><label for="email">Email Address</label><input class="text-field w-input" maxlength="256" name="contact[email]" data-name="Email" placeholder="Email" type="email" id="email" required=""><input type="submit" data-wait="Please wait..." class="submit-button w-button" value="Subscribe"><?php udesly_honeypot_field() ?></form>
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
  
  