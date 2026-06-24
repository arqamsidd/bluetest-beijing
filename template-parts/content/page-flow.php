
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
                              <a href="<?php echo _u('a30012e','link'); ?>" aria-current="page" class="product-list_single w-inline-block" data-link="a30012e">
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
                        <a href="<?php echo _u('a30012e','link'); ?>" aria-current="page" class="product-list_single w-inline-block" data-link="a30012e">
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
    <div class="flow-hero-outer hero-logo">
      <div class="bg-container">
        <div data-autoplay="true" data-loop="true" data-wf-ignore="true" class="bg-video w-background-video w-background-video-atom"><video id="d735d71e-501e-a65f-96b8-9e6d7baf6a9c-video" autoplay="" loop="" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/videos/a003_01222033_c126-1_poster.0000000.jpg?v=1781609300'); " muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
            <source src="<?php echo _u('i-64cf08b','iframe'); ?>" data-wf-ignore="true" data-iframe="i-64cf08b">
            <source src="<?php echo _u('i-69677271','iframe'); ?>" data-wf-ignore="true" data-iframe="i-69677271">
          </video></div>
        <div class="overlay-flow"></div>
        <div class="overlay-flow black"></div>
      </div>
      <div class="padding-global">
        <div class="w-embed">
          <style>
.floflow{
  background-image: repeating-linear-gradient(
    144deg,
    #6ccbff 0%,
    #1477ff 18%,
    #6ccbff 36%
  );
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
  -webkit-text-fill-color: transparent;
  display: inline-block;
  background-size: 320% 100%;
  background-position: 0% 50%;
  animation:
    floflowPos 7s linear infinite alternate,
    floflowSize 5.5s ease-in-out infinite;
  will-change: background-position, background-size;
}
@keyframes floflowPos{
  from { background-position: 0% 50%; }
  to   { background-position: 100% 50%; }
}
@keyframes floflowSize{
  0%   { background-size: 310% 100%; }
  50%  { background-size: 340% 100%; }
  100% { background-size: 310% 100%; }
}
@media (prefers-reduced-motion: reduce){
  .floflow{ animation: none; }
}
</style>
        </div>
        <div class="flow-centered">
          <h1 class="flow-h1" data-textarea="tan1fab0f1e"><?php echo _u('tan1fab0f1e', 'textarea'); ?></h1>
          <div data-textarea="ta1c7919e6"><?php echo _u('ta1c7919e6', 'textarea'); ?></div>
          <div class="spacer-medium"></div>
          <div class="horizontal-split-buttons">
            <a href="<?php echo _u('a38b72420','link'); ?>" target="_blank" class="button is-icon w-inline-block" data-link="a38b72420">
              <div data-text="t7f274abe"><?php echo _u('t7f274abe','text'); ?></div>
              <div class="icon-1x1-small w-embed"><svg aria-hidden="true" fill="currentColor" role="img" viewBox="0 0 20 21" xmlns="http://www.w3.org/2000/svg">
                  <title>Arrow Right</title>
                  <polygon points="16.172 9 10.101 2.929 11.515 1.515 20 10 19.293 10.707 11.515 18.485 10.101 17.071 16.172 11 0 11 0 9">
                </polygon></svg></div>
            </a>
            <a href="<?php echo _u('a38b72420','link'); ?>" target="_blank" class="button is-text w-inline-block" data-link="a38b72420">
              <div data-text="t47d76f39"><?php echo _u('t47d76f39','text'); ?></div>
              <div class="icon-1x1-small w-embed"><svg aria-hidden="true" fill="currentColor" role="img" viewBox="0 0 20 21" xmlns="http://www.w3.org/2000/svg">
                  <title>Arrow Right</title>
                  <polygon points="16.172 9 10.101 2.929 11.515 1.515 20 10 19.293 10.707 11.515 18.485 10.101 17.071 16.172 11 0 11 0 9">
                </polygon></svg></div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="text-image">
      <div class="padding-global">
        <div class="container-large">
          <div class="text-image_inner"><img src="<?php echo udesly_get_image(_u('in2a5582ec', 'img'))->src ?>" loading="lazy" width="Auto" sizes="(max-width: 3239px) 100vw, 3239px" alt="<?php echo udesly_get_image(_u('in2a5582ec', 'img'))->alt ?>" srcset="<?php echo udesly_get_image(_u('in2a5582ec', 'img'))->srcset ?>" class="text-image_img contain" data-img="in2a5582ec">
            <div class="text-image_text">
              <h2 class="heading-style-h3" data-text="tn7a5a5373"><?php echo _u('tn7a5a5373','text'); ?></h2>
              <div data-textarea="ta1a28a5ed"><?php echo _u('ta1a28a5ed', 'textarea'); ?></div>
              <div class="text-image_text_bottom">
                <a href="<?php echo _u('a38b72420','link'); ?>" target="_blank" class="button is-icon w-inline-block" data-link="a38b72420">
                  <div data-text="t7f274abe"><?php echo _u('t7f274abe','text'); ?></div>
                  <div class="icon-1x1-small w-embed"><svg aria-hidden="true" fill="currentColor" role="img" viewBox="0 0 20 21" xmlns="http://www.w3.org/2000/svg">
                      <title>Arrow Right</title>
                      <polygon points="16.172 9 10.101 2.929 11.515 1.515 20 10 19.293 10.707 11.515 18.485 10.101 17.071 16.172 11 0 11 0 9">
                    </polygon></svg></div>
                </a>
                <a href="<?php echo _u('a38b72420','link'); ?>" target="_blank" class="button is-text w-inline-block" data-link="a38b72420">
                  <div data-text="tn6a5a1594"><?php echo _u('tn6a5a1594','text'); ?></div>
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
    <div class="text-image nopadding">
      <div class="padding-global">
        <div class="container-large">
          <div class="text-image_inner reversed">
            <div class="text-image_text">
              <h2 class="heading-style-h3" data-text="t53dd8abb"><?php echo _u('t53dd8abb','text'); ?></h2>
              <div data-textarea="tan756999b9"><?php echo _u('tan756999b9', 'textarea'); ?></div>
              <div class="text-image_text_bottom">
                <a href="<?php echo _u('a38b72420','link'); ?>" target="_blank" class="button is-icon w-inline-block" data-link="a38b72420">
                  <div data-text="t7f274abe"><?php echo _u('t7f274abe','text'); ?></div>
                  <div class="icon-1x1-small w-embed"><svg aria-hidden="true" fill="currentColor" role="img" viewBox="0 0 20 21" xmlns="http://www.w3.org/2000/svg">
                      <title>Arrow Right</title>
                      <polygon points="16.172 9 10.101 2.929 11.515 1.515 20 10 19.293 10.707 11.515 18.485 10.101 17.071 16.172 11 0 11 0 9">
                    </polygon></svg></div>
                </a>
                <a href="<?php echo _u('a38b72420','link'); ?>" target="_blank" class="button is-text w-inline-block" data-link="a38b72420">
                  <div data-text="tn6a5a1594"><?php echo _u('tn6a5a1594','text'); ?></div>
                  <div class="icon-1x1-small w-embed"><svg aria-hidden="true" fill="currentColor" role="img" viewBox="0 0 20 21" xmlns="http://www.w3.org/2000/svg">
                      <title>Arrow Right</title>
                      <polygon points="16.172 9 10.101 2.929 11.515 1.515 20 10 19.293 10.707 11.515 18.485 10.101 17.071 16.172 11 0 11 0 9">
                    </polygon></svg></div>
                </a>
              </div>
            </div><img src="<?php echo udesly_get_image(_u('in695673f9', 'img'))->src ?>" loading="lazy" width="1619.5" id="w-node-d122dede-fe58-ab42-e5c8-f66d84a608cb-82e9a24e" alt="<?php echo udesly_get_image(_u('in695673f9', 'img'))->alt ?>" srcset="<?php echo udesly_get_image(_u('in695673f9', 'img'))->srcset ?>" sizes="(max-width: 1919px) 100vw, 1620px" class="text-image_img contain" data-img="in695673f9">
          </div>
        </div>
      </div>
    </div>
    <div class="text-image">
      <div class="padding-global">
        <div class="container-large">
          <div class="text-image_inner"><img src="<?php echo udesly_get_image(_u('i617431a7', 'img'))->src ?>" loading="lazy" width="Auto" sizes="(max-width: 1828px) 100vw, 1828px" alt="<?php echo udesly_get_image(_u('i617431a7', 'img'))->alt ?>" srcset="<?php echo udesly_get_image(_u('i617431a7', 'img'))->srcset ?>" class="text-image_img contain" data-img="i617431a7">
            <div class="text-image_text">
              <h2 class="heading-style-h3" data-text="t360ac5cd"><?php echo _u('t360ac5cd','text'); ?></h2>
              <div data-textarea="tan5dd223a8"><?php echo _u('tan5dd223a8', 'textarea'); ?></div>
              <div class="text-image_text_bottom">
                <a href="<?php echo _u('a38b72420','link'); ?>" target="_blank" class="button is-icon w-inline-block" data-link="a38b72420">
                  <div data-text="t7f274abe"><?php echo _u('t7f274abe','text'); ?></div>
                  <div class="icon-1x1-small w-embed"><svg aria-hidden="true" fill="currentColor" role="img" viewBox="0 0 20 21" xmlns="http://www.w3.org/2000/svg">
                      <title>Arrow Right</title>
                      <polygon points="16.172 9 10.101 2.929 11.515 1.515 20 10 19.293 10.707 11.515 18.485 10.101 17.071 16.172 11 0 11 0 9">
                    </polygon></svg></div>
                </a>
                <a href="<?php echo _u('a38b72420','link'); ?>" target="_blank" class="button is-text w-inline-block" data-link="a38b72420">
                  <div data-text="tn6a5a1594"><?php echo _u('tn6a5a1594','text'); ?></div>
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
    <div class="text-image nopadding">
      <div class="padding-global">
        <div class="container-large">
          <div class="text-image_inner reversed">
            <div class="text-image_text">
              <h2 class="heading-style-h3" data-text="tn1c94cca8"><?php echo _u('tn1c94cca8','text'); ?></h2>
              <div data-textarea="ta5ed64cec"><?php echo _u('ta5ed64cec', 'textarea'); ?></div>
              <div class="text-image_text_bottom">
                <a href="<?php echo _u('a38b72420','link'); ?>" target="_blank" class="button is-icon w-inline-block" data-link="a38b72420">
                  <div data-text="t7f274abe"><?php echo _u('t7f274abe','text'); ?></div>
                  <div class="icon-1x1-small w-embed"><svg aria-hidden="true" fill="currentColor" role="img" viewBox="0 0 20 21" xmlns="http://www.w3.org/2000/svg">
                      <title>Arrow Right</title>
                      <polygon points="16.172 9 10.101 2.929 11.515 1.515 20 10 19.293 10.707 11.515 18.485 10.101 17.071 16.172 11 0 11 0 9">
                    </polygon></svg></div>
                </a>
                <a href="<?php echo _u('a38b72420','link'); ?>" target="_blank" class="button is-text w-inline-block" data-link="a38b72420">
                  <div data-text="tn6a5a1594"><?php echo _u('tn6a5a1594','text'); ?></div>
                  <div class="icon-1x1-small w-embed"><svg aria-hidden="true" fill="currentColor" role="img" viewBox="0 0 20 21" xmlns="http://www.w3.org/2000/svg">
                      <title>Arrow Right</title>
                      <polygon points="16.172 9 10.101 2.929 11.515 1.515 20 10 19.293 10.707 11.515 18.485 10.101 17.071 16.172 11 0 11 0 9">
                    </polygon></svg></div>
                </a>
              </div>
            </div><img src="<?php echo udesly_get_image(_u('i727302d8', 'img'))->src ?>" loading="lazy" width="1619.5" id="w-node-_2bf23151-75e6-6410-426e-d3c8b11d49b7-82e9a24e" alt="<?php echo udesly_get_image(_u('i727302d8', 'img'))->alt ?>" srcset="<?php echo udesly_get_image(_u('i727302d8', 'img'))->srcset ?>" sizes="(max-width: 1919px) 100vw, 1620px" class="text-image_img contain" data-img="i727302d8">
          </div>
        </div>
      </div>
    </div>
    <div class="solutions-slider">
      <div class="padding-global">
        <div class="container-large padding-section-medium nopad-not">
          <h2 animated="" class="heading-style-h1 max-width-xlarge" data-text="t33feec7a"><?php echo _u('t33feec7a','text'); ?></h2>
          <div class="solutions-container">
            <div class="swiper-slides-container">
              <div class="collection_featured swiper product-swiper">
                <div class="swiper-wrapper">
                  <div class="collection_featured-item swiper-slide">
                    <div class="industry-slider-card">
                      <div class="industry-card_image special"><img src="<?php echo udesly_get_image(_u('i304ba998', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i304ba998', 'img'))->alt ?>" class="industry-slider-card_img contain" data-img="i304ba998" srcset="<?php echo udesly_get_image(_u('i304ba998', 'img'))->srcset ?>">
                        <div class="industry-card_tags less"></div>
                      </div>
                      <div class="industry-slider-card_content">
                        <h3 class="heading-style-h3 xs" data-text="tn3d61f3a7"><?php echo _u('tn3d61f3a7','text'); ?></h3>
                        <div data-textarea="ta75a6bce2"><?php echo _u('ta75a6bce2', 'textarea'); ?></div>
                        <div class="industry-card_buttons">
                          <a href="<?php echo _u('a38b72420','link'); ?>" target="_blank" class="button is-icon w-inline-block" data-link="a38b72420">
                            <div data-text="tn5230a9d2"><?php echo _u('tn5230a9d2','text'); ?></div>
                            <div class="icon-1x1-small w-embed"><svg aria-hidden="true" fill="currentColor" role="img" viewBox="0 0 20 21" xmlns="http://www.w3.org/2000/svg">
                                <title>Arrow Right</title>
                                <polygon points="16.172 9 10.101 2.929 11.515 1.515 20 10 19.293 10.707 11.515 18.485 10.101 17.071 16.172 11 0 11 0 9">
                              </polygon></svg></div>
                          </a>
                          <a href="<?php echo _u('a6d8705da','link'); ?>" target="_blank" class="button is-text w-inline-block" data-link="a6d8705da">
                            <div data-text="t31997f7f"><?php echo _u('t31997f7f','text'); ?></div>
                            <div class="icon-1x1-small w-embed"><svg aria-hidden="true" fill="currentColor" role="img" viewBox="0 0 20 21" xmlns="http://www.w3.org/2000/svg">
                                <title>Arrow Right</title>
                                <polygon points="16.172 9 10.101 2.929 11.515 1.515 20 10 19.293 10.707 11.515 18.485 10.101 17.071 16.172 11 0 11 0 9">
                              </polygon></svg></div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="collection_featured-item swiper-slide">
                    <div class="industry-slider-card special smaller">
                      <div class="industry-card_image special"><img src="<?php echo udesly_get_image(_u('i5cabc4d1', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i5cabc4d1', 'img'))->alt ?>" class="industry-slider-card_img contain" data-img="i5cabc4d1" srcset="<?php echo udesly_get_image(_u('i5cabc4d1', 'img'))->srcset ?>">
                        <div class="industry-card_tags less"></div>
                      </div>
                      <div class="industry-slider-card_content">
                        <h3 class="heading-style-h3 xs" data-text="tn2b325077"><?php echo _u('tn2b325077','text'); ?></h3>
                        <div data-textarea="ta7c920f40"><?php echo _u('ta7c920f40', 'textarea'); ?></div>
                        <div class="industry-card_buttons">
                          <a href="<?php echo _u('a38b72420','link'); ?>" target="_blank" class="button is-icon w-inline-block" data-link="a38b72420">
                            <div data-text="tn5230a9d2"><?php echo _u('tn5230a9d2','text'); ?></div>
                            <div class="icon-1x1-small w-embed"><svg aria-hidden="true" fill="currentColor" role="img" viewBox="0 0 20 21" xmlns="http://www.w3.org/2000/svg">
                                <title>Arrow Right</title>
                                <polygon points="16.172 9 10.101 2.929 11.515 1.515 20 10 19.293 10.707 11.515 18.485 10.101 17.071 16.172 11 0 11 0 9">
                              </polygon></svg></div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="collection_featured-item swiper-slide">
                    <div class="industry-slider-card smaller">
                      <div class="industry-card_image special"><img src="<?php echo udesly_get_image(_u('in47b9c51f', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in47b9c51f', 'img'))->alt ?>" class="industry-slider-card_img contain" data-img="in47b9c51f" srcset="<?php echo udesly_get_image(_u('in47b9c51f', 'img'))->srcset ?>">
                        <div class="industry-card_tags less"></div>
                      </div>
                      <div class="industry-slider-card_content">
                        <h3 class="heading-style-h3 xs" data-text="t3af3161b"><?php echo _u('t3af3161b','text'); ?></h3>
                        <div data-textarea="tan1f72bfa3"><?php echo _u('tan1f72bfa3', 'textarea'); ?></div>
                        <div class="industry-card_buttons">
                          <a href="<?php echo _u('a38b72420','link'); ?>" target="_blank" class="button is-icon w-inline-block" data-link="a38b72420">
                            <div data-text="tn5230a9d2"><?php echo _u('tn5230a9d2','text'); ?></div>
                            <div class="icon-1x1-small w-embed"><svg aria-hidden="true" fill="currentColor" role="img" viewBox="0 0 20 21" xmlns="http://www.w3.org/2000/svg">
                                <title>Arrow Right</title>
                                <polygon points="16.172 9 10.101 2.929 11.515 1.515 20 10 19.293 10.707 11.515 18.485 10.101 17.071 16.172 11 0 11 0 9">
                              </polygon></svg></div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="collection_featured-item swiper-slide">
                    <div class="industry-slider-card smaller">
                      <div class="industry-card_image special"><img src="<?php echo udesly_get_image(_u('in22f21b41', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in22f21b41', 'img'))->alt ?>" class="industry-slider-card_img contain" data-img="in22f21b41" srcset="<?php echo udesly_get_image(_u('in22f21b41', 'img'))->srcset ?>">
                        <div class="industry-card_tags less"></div>
                      </div>
                      <div class="industry-slider-card_content">
                        <h3 class="heading-style-h3 xs" data-text="t404aa883"><?php echo _u('t404aa883','text'); ?></h3>
                        <div data-textarea="ta739a3541"><?php echo _u('ta739a3541', 'textarea'); ?></div>
                        <div class="industry-card_buttons">
                          <a href="<?php echo _u('a38b72420','link'); ?>" target="_blank" class="button is-icon w-inline-block" data-link="a38b72420">
                            <div data-text="tn5230a9d2"><?php echo _u('tn5230a9d2','text'); ?></div>
                            <div class="icon-1x1-small w-embed"><svg aria-hidden="true" fill="currentColor" role="img" viewBox="0 0 20 21" xmlns="http://www.w3.org/2000/svg">
                                <title>Arrow Right</title>
                                <polygon points="16.172 9 10.101 2.929 11.515 1.515 20 10 19.293 10.707 11.515 18.485 10.101 17.071 16.172 11 0 11 0 9">
                              </polygon></svg></div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="collection_featured-item swiper-slide">
                    <div class="industry-slider-card smaller">
                      <div class="industry-card_image special"><img src="<?php echo udesly_get_image(_u('i5e885a53', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i5e885a53', 'img'))->alt ?>" class="industry-slider-card_img contain" data-img="i5e885a53" srcset="<?php echo udesly_get_image(_u('i5e885a53', 'img'))->srcset ?>">
                        <div class="industry-card_tags less"></div>
                      </div>
                      <div class="industry-slider-card_content">
                        <h3 class="heading-style-h3 xs" data-text="tn4e689ae4"><?php echo _u('tn4e689ae4','text'); ?></h3>
                        <div data-textarea="ta34f54c74"><?php echo _u('ta34f54c74', 'textarea'); ?></div>
                        <div class="industry-card_buttons">
                          <a href="<?php echo _u('a38b72420','link'); ?>" target="_blank" class="button is-icon w-inline-block" data-link="a38b72420">
                            <div data-text="tn5230a9d2"><?php echo _u('tn5230a9d2','text'); ?></div>
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
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="grtid-features">
      <div class="padding-global">
        <div class="container-large">
          <div class="grid-four">
            <div class="singel-feature">
              <div><img src="<?php echo udesly_get_image(_u('in33268177', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in33268177', 'img'))->alt ?>" class="icon-image" data-img="in33268177" srcset="<?php echo udesly_get_image(_u('in33268177', 'img'))->srcset ?>">
                <div class="spacer-medium"></div>
              </div>
              <h4 data-text="t6a5f720f"><?php echo _u('t6a5f720f','text'); ?></h4>
              <div class="spacer-small"></div>
              <div data-textarea="tan1730d0bf"><?php echo _u('tan1730d0bf', 'textarea'); ?></div>
            </div>
            <div class="singel-feature">
              <div><img src="<?php echo udesly_get_image(_u('in1520d62', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in1520d62', 'img'))->alt ?>" class="icon-image" data-img="in1520d62" srcset="<?php echo udesly_get_image(_u('in1520d62', 'img'))->srcset ?>">
                <div class="spacer-medium"></div>
              </div>
              <h4 data-text="tn2b325077"><?php echo _u('tn2b325077','text'); ?></h4>
              <div class="spacer-small"></div>
              <div data-textarea="ta6ef60c11"><?php echo _u('ta6ef60c11', 'textarea'); ?></div>
            </div>
            <div class="singel-feature">
              <div><img src="<?php echo udesly_get_image(_u('in62d1186e', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in62d1186e', 'img'))->alt ?>" class="icon-image" data-img="in62d1186e" srcset="<?php echo udesly_get_image(_u('in62d1186e', 'img'))->srcset ?>">
                <div class="spacer-medium"></div>
              </div>
              <h4 data-text="tn3d61f3a7"><?php echo _u('tn3d61f3a7','text'); ?></h4>
              <div class="spacer-small"></div>
              <div data-textarea="ta2371c363"><?php echo _u('ta2371c363', 'textarea'); ?></div>
            </div>
            <div class="singel-feature">
              <div><img src="<?php echo udesly_get_image(_u('i2dcaf416', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i2dcaf416', 'img'))->alt ?>" class="icon-image" data-img="i2dcaf416" srcset="<?php echo udesly_get_image(_u('i2dcaf416', 'img'))->srcset ?>">
                <div class="spacer-medium"></div>
              </div>
              <h4 data-text="t6656d0f7"><?php echo _u('t6656d0f7','text'); ?></h4>
              <div class="spacer-small"></div>
              <div data-textarea="tan37179808"><?php echo _u('tan37179808', 'textarea'); ?></div>
            </div>
            <div class="singel-feature">
              <div><img src="<?php echo udesly_get_image(_u('i9b47d1c', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i9b47d1c', 'img'))->alt ?>" class="icon-image" data-img="i9b47d1c" srcset="<?php echo udesly_get_image(_u('i9b47d1c', 'img'))->srcset ?>">
                <div class="spacer-medium"></div>
              </div>
              <h4 data-text="tn5252e05d"><?php echo _u('tn5252e05d','text'); ?></h4>
              <div class="spacer-small"></div>
              <div data-textarea="ta6706447b"><?php echo _u('ta6706447b', 'textarea'); ?></div>
            </div>
            <div class="singel-feature">
              <div><img src="<?php echo udesly_get_image(_u('ief1a117', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('ief1a117', 'img'))->alt ?>" class="icon-image" data-img="ief1a117" srcset="<?php echo udesly_get_image(_u('ief1a117', 'img'))->srcset ?>">
                <div class="spacer-medium"></div>
              </div>
              <h4 data-text="t4df49753"><?php echo _u('t4df49753','text'); ?></h4>
              <div class="spacer-small"></div>
              <div data-textarea="ta1e045df7"><?php echo _u('ta1e045df7', 'textarea'); ?></div>
            </div>
            <div class="singel-feature">
              <div><img src="<?php echo udesly_get_image(_u('in722bbf85', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in722bbf85', 'img'))->alt ?>" class="icon-image" data-img="in722bbf85" srcset="<?php echo udesly_get_image(_u('in722bbf85', 'img'))->srcset ?>">
                <div class="spacer-medium"></div>
              </div>
              <h4 data-text="t26e03afc"><?php echo _u('t26e03afc','text'); ?></h4>
              <div class="spacer-small"></div>
              <div data-textarea="tan43c7890e"><?php echo _u('tan43c7890e', 'textarea'); ?></div>
            </div>
            <div class="singel-feature">
              <div><img src="<?php echo udesly_get_image(_u('in3707575f', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in3707575f', 'img'))->alt ?>" class="icon-image" data-img="in3707575f" srcset="<?php echo udesly_get_image(_u('in3707575f', 'img'))->srcset ?>">
                <div class="spacer-medium"></div>
              </div>
              <h4 data-text="tn4f30a083"><?php echo _u('tn4f30a083','text'); ?></h4>
              <div class="spacer-small"></div>
              <div data-textarea="tan5a648851"><?php echo _u('tan5a648851', 'textarea'); ?></div>
            </div>
            <div class="singel-feature">
              <div><img src="<?php echo udesly_get_image(_u('in512c951', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in512c951', 'img'))->alt ?>" class="icon-image" data-img="in512c951" srcset="<?php echo udesly_get_image(_u('in512c951', 'img'))->srcset ?>">
                <div class="spacer-medium"></div>
              </div>
              <h4 data-text="tn78e719c3"><?php echo _u('tn78e719c3','text'); ?></h4>
              <div class="spacer-small"></div>
              <div data-textarea="ta4676a21d"><?php echo _u('ta4676a21d', 'textarea'); ?></div>
            </div>
            <div class="singel-feature">
              <div><img src="<?php echo udesly_get_image(_u('i51635d89', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i51635d89', 'img'))->alt ?>" class="icon-image" data-img="i51635d89" srcset="<?php echo udesly_get_image(_u('i51635d89', 'img'))->srcset ?>">
                <div class="spacer-medium"></div>
              </div>
              <h4 data-text="tn41b28cb3"><?php echo _u('tn41b28cb3','text'); ?></h4>
              <div class="spacer-small"></div>
              <div data-textarea="ta193c6b89"><?php echo _u('ta193c6b89', 'textarea'); ?></div>
            </div>
            <div class="singel-feature">
              <div><img src="<?php echo udesly_get_image(_u('in71234959', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in71234959', 'img'))->alt ?>" class="icon-image" data-img="in71234959" srcset="<?php echo udesly_get_image(_u('in71234959', 'img'))->srcset ?>">
                <div class="spacer-medium"></div>
              </div>
              <h4 data-text="t37887d91"><?php echo _u('t37887d91','text'); ?></h4>
              <div class="spacer-small"></div>
              <div data-textarea="ta4505a28b"><?php echo _u('ta4505a28b', 'textarea'); ?></div>
            </div>
            <div class="singel-feature">
              <div><img src="<?php echo udesly_get_image(_u('in3b46ab0a', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in3b46ab0a', 'img'))->alt ?>" class="icon-image" data-img="in3b46ab0a" srcset="<?php echo udesly_get_image(_u('in3b46ab0a', 'img'))->srcset ?>">
                <div class="spacer-medium"></div>
              </div>
              <h4 data-text="t6eb04aca"><?php echo _u('t6eb04aca','text'); ?></h4>
              <div class="spacer-small"></div>
              <div data-textarea="ta21010cce"><?php echo _u('ta21010cce', 'textarea'); ?></div>
            </div>
          </div>
          <div class="spacer-huge"></div>
        </div>
      </div>
    </div>
    <div class="grtid-features">
      <div class="padding-global">
        <div class="container-large">
          <h2 animated="" class="heading-style-h1 max-width-xlarge" data-text="tn4ffa7943"><?php echo _u('tn4ffa7943','text'); ?></h2>
          <div class="spacer-large"></div>
          <div class="grid-four">
            <div class="singel-feature">
              <div><img src="<?php echo udesly_get_image(_u('i708c6498', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i708c6498', 'img'))->alt ?>" class="icon-image" data-img="i708c6498" srcset="<?php echo udesly_get_image(_u('i708c6498', 'img'))->srcset ?>">
                <div class="spacer-medium"></div>
              </div>
              <h4 data-text="tn42d6e8f"><?php echo _u('tn42d6e8f','text'); ?></h4>
              <div class="spacer-small"></div>
              <div data-textarea="ta6e83da12"><?php echo _u('ta6e83da12', 'textarea'); ?></div>
            </div>
            <div class="singel-feature">
              <div><img src="<?php echo udesly_get_image(_u('in3c9ac438', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in3c9ac438', 'img'))->alt ?>" class="icon-image" data-img="in3c9ac438" srcset="<?php echo udesly_get_image(_u('in3c9ac438', 'img'))->srcset ?>">
                <div class="spacer-medium"></div>
              </div>
              <h4 data-text="t7acfffdb"><?php echo _u('t7acfffdb','text'); ?></h4>
              <div class="spacer-small"></div>
              <div data-textarea="ta73353616"><?php echo _u('ta73353616', 'textarea'); ?></div>
            </div>
            <div class="singel-feature">
              <div><img src="<?php echo udesly_get_image(_u('i2c961ab1', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i2c961ab1', 'img'))->alt ?>" class="icon-image" data-img="i2c961ab1" srcset="<?php echo udesly_get_image(_u('i2c961ab1', 'img'))->srcset ?>">
                <div class="spacer-medium"></div>
              </div>
              <h4 data-text="tn46b1220b"><?php echo _u('tn46b1220b','text'); ?></h4>
              <div class="spacer-small"></div>
              <div data-textarea="tad46355"><?php echo _u('tad46355', 'textarea'); ?></div>
            </div>
            <div class="singel-feature">
              <div><img src="<?php echo udesly_get_image(_u('i2dcaf416', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i2dcaf416', 'img'))->alt ?>" class="icon-image" data-img="i2dcaf416" srcset="<?php echo udesly_get_image(_u('i2dcaf416', 'img'))->srcset ?>">
                <div class="spacer-medium"></div>
              </div>
              <h4 data-text="t6656d0f7"><?php echo _u('t6656d0f7','text'); ?></h4>
              <div class="spacer-small"></div>
              <div data-textarea="tan71652b28"><?php echo _u('tan71652b28', 'textarea'); ?></div>
            </div>
            <div class="singel-feature">
              <div><img src="<?php echo udesly_get_image(_u('in60ea45eb', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in60ea45eb', 'img'))->alt ?>" class="icon-image" data-img="in60ea45eb" srcset="<?php echo udesly_get_image(_u('in60ea45eb', 'img'))->srcset ?>">
                <div class="spacer-medium"></div>
              </div>
              <h4 data-text="t5fc1e975"><?php echo _u('t5fc1e975','text'); ?></h4>
              <div class="spacer-small"></div>
              <div data-textarea="tan19a8fcf7"><?php echo _u('tan19a8fcf7', 'textarea'); ?></div>
            </div>
            <div class="singel-feature">
              <div>
                <div><img src="<?php echo udesly_get_image(_u('inb5c2410', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('inb5c2410', 'img'))->alt ?>" class="icon-image" data-img="inb5c2410" srcset="<?php echo udesly_get_image(_u('inb5c2410', 'img'))->srcset ?>"></div>
                <div class="spacer-medium"></div>
              </div>
              <h4 data-text="t4ae095ed"><?php echo _u('t4ae095ed','text'); ?></h4>
              <div class="spacer-small"></div>
              <div data-textarea="tan6940624b"><?php echo _u('tan6940624b', 'textarea'); ?></div>
            </div>
            <div class="singel-feature">
              <div><img src="<?php echo udesly_get_image(_u('i5773b795', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i5773b795', 'img'))->alt ?>" class="icon-image" data-img="i5773b795" srcset="<?php echo udesly_get_image(_u('i5773b795', 'img'))->srcset ?>">
                <div class="spacer-medium"></div>
              </div>
              <h4 data-text="t26c0c129"><?php echo _u('t26c0c129','text'); ?></h4>
              <div class="spacer-small"></div>
              <div data-textarea="tan655471ce"><?php echo _u('tan655471ce', 'textarea'); ?></div>
            </div>
          </div>
          <div class="spacer-huge"></div>
        </div>
      </div>
    </div>
    <div class="grtid-features">
      <div class="padding-global">
        <div class="container-large">
          <h2 animated="" class="heading-style-h1 max-width-xlarge" data-text="tn595cbc9c"><?php echo _u('tn595cbc9c','text'); ?></h2>
          <div class="spacer-large"></div>
          <div class="grid-four">
            <div class="singel-feature">
              <div><img src="<?php echo udesly_get_image(_u('in4672cb40', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in4672cb40', 'img'))->alt ?>" class="icon-image" data-img="in4672cb40" srcset="<?php echo udesly_get_image(_u('in4672cb40', 'img'))->srcset ?>">
                <div class="spacer-medium"></div>
              </div>
              <h4 data-text="t7e3e86f4"><?php echo _u('t7e3e86f4','text'); ?></h4>
              <div class="spacer-small"></div>
              <div data-textarea="tan3be31d6c"><?php echo _u('tan3be31d6c', 'textarea'); ?></div>
            </div>
            <div class="singel-feature">
              <div><img src="<?php echo udesly_get_image(_u('in31541b00', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in31541b00', 'img'))->alt ?>" class="icon-image" data-img="in31541b00" srcset="<?php echo udesly_get_image(_u('in31541b00', 'img'))->srcset ?>">
                <div class="spacer-medium"></div>
              </div>
              <h4 data-text="tn555951a6"><?php echo _u('tn555951a6','text'); ?></h4>
              <div class="spacer-small"></div>
              <div data-textarea="ta5e203a00"><?php echo _u('ta5e203a00', 'textarea'); ?></div>
            </div>
            <div class="singel-feature">
              <div><img src="<?php echo udesly_get_image(_u('in1f31ea6d', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in1f31ea6d', 'img'))->alt ?>" class="icon-image" data-img="in1f31ea6d" srcset="<?php echo udesly_get_image(_u('in1f31ea6d', 'img'))->srcset ?>">
                <div class="spacer-medium"></div>
              </div>
              <h4 data-text="tn4b1709d3"><?php echo _u('tn4b1709d3','text'); ?></h4>
              <div class="spacer-small"></div>
              <div data-textarea="tand482fca"><?php echo _u('tand482fca', 'textarea'); ?></div>
            </div>
          </div>
          <div class="spacer-huge"></div>
        </div>
      </div>
    </div>
    <div class="text-image nopadding">
      <div class="padding-global">
        <div class="container-large">
          <div class="text-image_inner reversed">
            <div class="text-image_text">
              <h2 class="heading-style-h3" data-text="tn1672cac"><?php echo _u('tn1672cac','text'); ?></h2>
              <div data-textarea="tan3cc1b793"><?php echo _u('tan3cc1b793', 'textarea'); ?></div>
              <div class="text-image_text_bottom">
                <a href="<?php echo _u('a38b72420','link'); ?>" target="_blank" class="button is-icon w-inline-block" data-link="a38b72420">
                  <div data-text="t7f274abe"><?php echo _u('t7f274abe','text'); ?></div>
                  <div class="icon-1x1-small w-embed"><svg aria-hidden="true" fill="currentColor" role="img" viewBox="0 0 20 21" xmlns="http://www.w3.org/2000/svg">
                      <title>Arrow Right</title>
                      <polygon points="16.172 9 10.101 2.929 11.515 1.515 20 10 19.293 10.707 11.515 18.485 10.101 17.071 16.172 11 0 11 0 9">
                    </polygon></svg></div>
                </a>
                <a href="<?php echo _u('a6084ccde','link'); ?>" target="_blank" class="button is-text w-inline-block" data-link="a6084ccde">
                  <div data-text="tn6a5a1594"><?php echo _u('tn6a5a1594','text'); ?></div>
                  <div class="icon-1x1-small w-embed"><svg aria-hidden="true" fill="currentColor" role="img" viewBox="0 0 20 21" xmlns="http://www.w3.org/2000/svg">
                      <title>Arrow Right</title>
                      <polygon points="16.172 9 10.101 2.929 11.515 1.515 20 10 19.293 10.707 11.515 18.485 10.101 17.071 16.172 11 0 11 0 9">
                    </polygon></svg></div>
                </a>
              </div>
            </div><img src="<?php echo udesly_get_image(_u('in422aa84b', 'img'))->src ?>" loading="lazy" width="1619.5" id="w-node-_2cc132c3-583b-2a89-2925-e22582840974-82e9a24e" alt="<?php echo udesly_get_image(_u('in422aa84b', 'img'))->alt ?>" srcset="<?php echo udesly_get_image(_u('in422aa84b', 'img'))->srcset ?>" sizes="(max-width: 1919px) 100vw, 1620px" class="text-image_img" data-img="in422aa84b">
          </div>
          <div class="spacer-huge"></div>
          <div fs-table-element="table" fs-table-instance="fs-table" class="fs-table_instance flowtable">
            <table class="fs-table_table">
              <tbody class="fs-table_body">
                <tr class="fs-table_row">
                  <td class="fs-table_cell thead topleft" data-text="t521782dd"><?php echo _u('t521782dd','text'); ?></td>
                  <td class="fs-table_cell thead" data-text="t14592"><?php echo _u('t14592','text'); ?></td>
                  <td class="fs-table_cell thead" data-text="t1447e"><?php echo _u('t1447e','text'); ?></td>
                  <td class="fs-table_cell thead" data-text="tn73260898"><?php echo _u('tn73260898','text'); ?></td>
                  <td class="fs-table_cell thead" data-text="t71acd259"><?php echo _u('t71acd259','text'); ?></td>
                  <td class="fs-table_cell thead topright" data-text="t6f0592bd"><?php echo _u('t6f0592bd','text'); ?></td>
                </tr>
                <tr class="fs-table_row">
                  <td class="fs-table_cell thead" data-text="t7611d338"><?php echo _u('t7611d338','text'); ?></td>
                  <td class="fs-table_cell"><img src="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->alt ?>" class="checkbox" data-img="in4a32ce36" srcset="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->srcset ?>"></td>
                  <td class="fs-table_cell"><img src="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->alt ?>" class="checkbox" data-img="in4a32ce36" srcset="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->srcset ?>"></td>
                  <td class="fs-table_cell"></td>
                  <td class="fs-table_cell"></td>
                  <td class="fs-table_cell"></td>
                </tr>
                <tr class="fs-table_row">
                  <td class="fs-table_cell thead" data-text="t714602bb"><?php echo _u('t714602bb','text'); ?></td>
                  <td class="fs-table_cell"><img src="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->alt ?>" class="checkbox" data-img="in4a32ce36" srcset="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->srcset ?>"></td>
                  <td class="fs-table_cell"><img src="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->alt ?>" class="checkbox" data-img="in4a32ce36" srcset="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->srcset ?>"></td>
                  <td class="fs-table_cell"><img src="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->alt ?>" class="checkbox" data-img="in4a32ce36" srcset="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->srcset ?>"></td>
                  <td class="fs-table_cell"></td>
                  <td class="fs-table_cell"></td>
                </tr>
                <tr class="fs-table_row">
                  <td class="fs-table_cell thead" data-text="t3365b73f"><?php echo _u('t3365b73f','text'); ?></td>
                  <td class="fs-table_cell"><img src="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->alt ?>" class="checkbox" data-img="in4a32ce36" srcset="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->srcset ?>"></td>
                  <td class="fs-table_cell"><img src="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->alt ?>" class="checkbox" data-img="in4a32ce36" srcset="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->srcset ?>"></td>
                  <td class="fs-table_cell"></td>
                  <td class="fs-table_cell"></td>
                  <td class="fs-table_cell"></td>
                </tr>
                <tr class="fs-table_row">
                  <td class="fs-table_cell thead" data-text="t3d685428"><?php echo _u('t3d685428','text'); ?></td>
                  <td class="fs-table_cell"><img src="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->alt ?>" class="checkbox" data-img="in4a32ce36" srcset="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->srcset ?>"></td>
                  <td class="fs-table_cell"><img src="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->alt ?>" class="checkbox" data-img="in4a32ce36" srcset="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->srcset ?>"></td>
                  <td class="fs-table_cell"><img src="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->alt ?>" class="checkbox" data-img="in4a32ce36" srcset="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->srcset ?>"></td>
                  <td class="fs-table_cell"><img src="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->alt ?>" class="checkbox" data-img="in4a32ce36" srcset="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->srcset ?>"></td>
                  <td class="fs-table_cell"><img src="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->alt ?>" class="checkbox" data-img="in4a32ce36" srcset="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->srcset ?>"></td>
                </tr>
                <tr class="fs-table_row">
                  <td class="fs-table_cell thead" data-text="tn14d95f69"><?php echo _u('tn14d95f69','text'); ?></td>
                  <td class="fs-table_cell"><img src="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->alt ?>" class="checkbox" data-img="in4a32ce36" srcset="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->srcset ?>"></td>
                  <td class="fs-table_cell"><img src="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->alt ?>" class="checkbox" data-img="in4a32ce36" srcset="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->srcset ?>"></td>
                  <td class="fs-table_cell"></td>
                  <td class="fs-table_cell"><img src="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->alt ?>" class="checkbox" data-img="in4a32ce36" srcset="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->srcset ?>"></td>
                  <td class="fs-table_cell"></td>
                </tr>
                <tr class="fs-table_row">
                  <td class="fs-table_cell thead" data-text="t409b57f1"><?php echo _u('t409b57f1','text'); ?></td>
                  <td class="fs-table_cell"><img src="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->alt ?>" class="checkbox" data-img="in4a32ce36" srcset="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->srcset ?>"></td>
                  <td class="fs-table_cell"><img src="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->alt ?>" class="checkbox" data-img="in4a32ce36" srcset="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->srcset ?>"></td>
                  <td class="fs-table_cell"></td>
                  <td class="fs-table_cell"><img src="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->alt ?>" class="checkbox" data-img="in4a32ce36" srcset="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->srcset ?>"></td>
                  <td class="fs-table_cell"></td>
                </tr>
                <tr class="fs-table_row">
                  <td class="fs-table_cell thead" data-text="tn772e5bcb"><?php echo _u('tn772e5bcb','text'); ?></td>
                  <td class="fs-table_cell"><img src="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->alt ?>" class="checkbox" data-img="in4a32ce36" srcset="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->srcset ?>"></td>
                  <td class="fs-table_cell"><img src="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->alt ?>" class="checkbox" data-img="in4a32ce36" srcset="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->srcset ?>"></td>
                  <td class="fs-table_cell"></td>
                  <td class="fs-table_cell"><img src="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->alt ?>" class="checkbox" data-img="in4a32ce36" srcset="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->srcset ?>"></td>
                  <td class="fs-table_cell"></td>
                </tr>
                <tr class="fs-table_row">
                  <td class="fs-table_cell thead" data-text="tn57ece812"><?php echo _u('tn57ece812','text'); ?></td>
                  <td class="fs-table_cell"><img src="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->alt ?>" class="checkbox" data-img="in4a32ce36" srcset="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->srcset ?>"></td>
                  <td class="fs-table_cell"><img src="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->alt ?>" class="checkbox" data-img="in4a32ce36" srcset="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->srcset ?>"></td>
                  <td class="fs-table_cell"><img src="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->alt ?>" class="checkbox" data-img="in4a32ce36" srcset="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->srcset ?>"></td>
                  <td class="fs-table_cell"><img src="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->alt ?>" class="checkbox" data-img="in4a32ce36" srcset="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->srcset ?>"></td>
                  <td class="fs-table_cell"></td>
                </tr>
                <tr class="fs-table_row">
                  <td class="fs-table_cell thead" data-text="t6884bf3c"><?php echo _u('t6884bf3c','text'); ?></td>
                  <td class="fs-table_cell"><img src="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->alt ?>" class="checkbox" data-img="in4a32ce36" srcset="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->srcset ?>"></td>
                  <td class="fs-table_cell"><img src="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->alt ?>" class="checkbox" data-img="in4a32ce36" srcset="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->srcset ?>"></td>
                  <td class="fs-table_cell"><img src="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->alt ?>" class="checkbox" data-img="in4a32ce36" srcset="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->srcset ?>"></td>
                  <td class="fs-table_cell"><img src="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->alt ?>" class="checkbox" data-img="in4a32ce36" srcset="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->srcset ?>"></td>
                  <td class="fs-table_cell"></td>
                </tr>
                <tr class="fs-table_row">
                  <td class="fs-table_cell thead" data-text="tn4c928cf4"><?php echo _u('tn4c928cf4','text'); ?></td>
                  <td class="fs-table_cell"><img src="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->alt ?>" class="checkbox" data-img="in4a32ce36" srcset="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->srcset ?>"></td>
                  <td class="fs-table_cell"><img src="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->alt ?>" class="checkbox" data-img="in4a32ce36" srcset="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->srcset ?>"></td>
                  <td class="fs-table_cell"></td>
                  <td class="fs-table_cell"><img src="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->alt ?>" class="checkbox" data-img="in4a32ce36" srcset="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->srcset ?>"></td>
                  <td class="fs-table_cell"></td>
                </tr>
                <tr class="fs-table_row">
                  <td class="fs-table_cell thead" data-text="tn4fef0531"><?php echo _u('tn4fef0531','text'); ?></td>
                  <td class="fs-table_cell"><img src="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->alt ?>" class="checkbox" data-img="in4a32ce36" srcset="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->srcset ?>"></td>
                  <td class="fs-table_cell"><img src="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->alt ?>" class="checkbox" data-img="in4a32ce36" srcset="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->srcset ?>"></td>
                  <td class="fs-table_cell"></td>
                  <td class="fs-table_cell"><img src="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->alt ?>" class="checkbox" data-img="in4a32ce36" srcset="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->srcset ?>"></td>
                  <td class="fs-table_cell"></td>
                </tr>
                <tr class="fs-table_row">
                  <td class="fs-table_cell thead" data-text="t28b1c2"><?php echo _u('t28b1c2','text'); ?></td>
                  <td class="fs-table_cell"><img src="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->alt ?>" class="checkbox" data-img="in4a32ce36" srcset="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->srcset ?>"></td>
                  <td class="fs-table_cell"><img src="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->alt ?>" class="checkbox" data-img="in4a32ce36" srcset="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->srcset ?>"></td>
                  <td class="fs-table_cell"></td>
                  <td class="fs-table_cell"></td>
                  <td class="fs-table_cell"><img src="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->alt ?>" class="checkbox" data-img="in4a32ce36" srcset="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->srcset ?>"></td>
                </tr>
                <tr class="fs-table_row">
                  <td class="fs-table_cell thead bottomleft" data-text="tn13331d72"><?php echo _u('tn13331d72','text'); ?></td>
                  <td class="fs-table_cell"><img src="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->alt ?>" class="checkbox" data-img="in4a32ce36" srcset="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->srcset ?>"></td>
                  <td class="fs-table_cell"><img src="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->alt ?>" class="checkbox" data-img="in4a32ce36" srcset="<?php echo udesly_get_image(_u('in4a32ce36', 'img'))->srcset ?>"></td>
                  <td class="fs-table_cell"></td>
                  <td class="fs-table_cell"></td>
                  <td class="fs-table_cell bottomright"></td>
                </tr>
              </tbody>
            </table>
            <div class="table-scroll">
              <hr class="hr">
              <div class="lottie-animation" data-w-id="45023fe8-ea51-d33b-1dd2-3c8fef8a4dce" data-animation-type="lottie" data-src="<?php echo get_template_directory_uri(); ?>/assets/documents/arrow-jump-down-lottie.json?v=1781609300" data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-default-duration="0" data-duration="0" data-loading="eager"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="spacer-huge"></div>
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
                    <form id="wf-form-Newsletter-Form" name="wf-form-Newsletter-Form" data-name="Newsletter Form" method="get" data-wf-page-id="69850ed0e70c2b5882e9a24e" data-wf-element-id="5aa72e8c-cce9-d6df-7eb7-db2c069442ea" data-ajax-action="contact"><label for="email">Email Address</label><input class="text-field w-input" maxlength="256" name="contact[email]" data-name="Email" placeholder="Email" type="email" id="email" required=""><input type="submit" data-wait="Please wait..." class="submit-button w-button" value="Subscribe"><?php udesly_honeypot_field() ?></form>
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
  
  