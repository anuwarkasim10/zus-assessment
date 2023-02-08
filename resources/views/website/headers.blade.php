@if (Request::path() !== 'products')
<style>
    ul>.sub-menu elementor-nav-menu--dropdown {
        width: max-content;
    }

    .active-page {
        color: #FFDC00 !important;
    }
</style>
<div data-elementor-type="header" data-elementor-id="396" class="elementor elementor-396 elementor-location-header">
    <section class="elementor-section elementor-top-section elementor-element elementor-element-3f19a3f elementor-hidden-desktop elementor-hidden-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3f19a3f" data-element_type="section" data-settings='{"background_background":"classic"}'>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-97bc101" data-id="97bc101" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-699d640 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="699d640" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1c89a8d" data-id="1c89a8d" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-bde16ba elementor-widget elementor-widget-theme-site-logo elementor-widget-image" data-id="bde16ba" data-element_type="widget" data-widget_type="theme-site-logo.default">
                                        <div class="elementor-widget-container">
                                            <style>
                                                /*! elementor - v3.6.6 - 08-06-2022 */
                                                .elementor-widget-image {
                                                    text-align: center;
                                                }

                                                .elementor-widget-image a {
                                                    display: inline-block;
                                                }

                                                .elementor-widget-image a img[src$=".svg"] {
                                                    width: 48px;
                                                }

                                                .elementor-widget-image img {
                                                    vertical-align: middle;
                                                    display: inline-block;
                                                }
                                            </style>
                                            <a href="{{ url('/') }}">
                                                <img width="220" height="124" src="{{ asset('website/images/SFF-LOGO.png') }}" class="attachment-full size-full" alt="" loading="lazy" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-836d71e" data-id="836d71e" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-14b5a51 elementor-hidden-desktop elementor-mobile-align-right elementor-widget elementor-widget-button" data-id="14b5a51" data-element_type="widget" data-widget_type="button.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">
                                                <!-- <a href="https://kkday.me/sffuob" target="_blank" class="elementor-button-link elementor-button elementor-size-xs" role="button"> -->
                                                <a href="https://kkday.me/KKday_SFF_website" target="_blank" class="elementor-button-link elementor-button elementor-size-xs" role="button">
                                                    <span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-text">BUY TICKETS</span>
                                                    </span>
                                                </a>
                                                <!--<a href="https://www.kkday.com/en-my/product/131399-singapore-food-festival-2022" class="elementor-button-link elementor-button elementor-size-xs" role="button">-->
                                                <!--  <span class="elementor-button-content-wrapper">-->
                                                <!--    <span class="elementor-button-text">BUY TICKETS</span>-->
                                                <!--  </span>-->
                                                <!--</a>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6b36ecc" data-id="6b36ecc" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-b8d1992 elementor-nav-menu__align-right elementor-nav-menu--stretch elementor-nav-menu--dropdown-mobile elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu" data-id="b8d1992" data-element_type="widget" data-settings='{"full_width":"stretch","_animation":"none","layout":"horizontal","submenu_icon":{"value":"&lt;i class=\"fas fa-caret-down\"&gt;&lt;\/i&gt;","library":"fa-solid"},"toggle":"burger"}' data-widget_type="nav-menu.default">
                                        <div class="elementor-widget-container">
                                            <link rel="stylesheet" href="{{ asset('website/css/elementor-pro-assets-css-widget-nav-menu.min.css') }}" />
                                            <style>
                                                ul li a {
                                                    display: block;
                                                    padding: 8px 25px;
                                                    color: #333;
                                                    text-decoration: none;
                                                }

                                                ul li a:hover {
                                                    color: #fff;
                                                    /* background: #939393; */
                                                    background: 'none';
                                                }

                                                ul li ul.elementor-nav-menu--dropdown {
                                                    min-width: 100%;
                                                    /* Set width of the elementor-nav-menu--dropdown */
                                                    background: #f2f2f2;
                                                    display: none;
                                                    position: absolute;
                                                    z-index: 999;
                                                    left: 0;
                                                }

                                                ul li:hover ul.elementor-nav-menu--dropdown {
                                                    display: block;
                                                    /* Display the elementor-nav-menu--dropdown */
                                                }

                                                ul li ul.elementor-nav-menu--dropdown li {
                                                    display: block;
                                                }


                                                @media (max-width: 600px) {

                                                    #menu-2-b8d1992 {
                                                        padding-left: 2%;
                                                    }

                                                    a#sff5,
                                                    a#sff7,
                                                    a#sff8 {
                                                        padding-left: 10%;
                                                    }
                                                }
                                            </style>
                                            <nav migration_allowed="1" migrated="0" role="navigation" class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-none navMobileCustom">
                                                <ul id="menu-1-b8d1992" class="elementor-nav-menu">
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-449">
                                                        <a href="{{ url('virtualmasterclass') }}" class="elementor-item menu-link">VIRTUAL MASTERCLASSES</a>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-389">
                                                        <a href="{{ url('enter-virtualmarketplace') }}" class="elementor-item menu-link">VIRTUAL MARKETPLACE</a>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4359">
                                                        <a href="{{ url('festivalvillage') }}" class="elementor-item menu-link">FESTIVAL VILLAGE</a>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-387">
                                                        <a href="{{ url('experiences') }}" class="elementor-item menu-link">EXPERIENCES &#9662;<span role="presentation" class="dropdown-menu-toggle"></span></a>
                                                        <ul class="sub-menu elementor-nav-menu--dropdown" style="width: max-content;">
                                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4440">
                                                                <a href="{{ url('experiences/tours') }}" class="elementor-sub-item elementor-item-anchor menu-link">TOURS<span role="presentation" class="dropdown-menu-toggle"></span></a>
                                                                <!-- <ul class="sub-menu elementor-nav-menu--dropdown">
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4441">
                                    <a href="{{ url('/') }}" class="elementor-sub-item menu-link">TOURS MAIN</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4383">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/tours-fruit-route/" class="elementor-sub-item menu-link">TOURS FRUIT ROUTE</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4384">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/tours-puzzle-picnic/" class="elementor-sub-item menu-link">TOURS PUZZLE PICNIC</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4385">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/tours-asia101/" class="elementor-sub-item menu-link">TOURS ASIA101</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4386">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/tours-hawkerwalk/" class="elementor-sub-item menu-link">TOURS Hawker walk</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4387">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/tours-ultimate-food-journey/" class="elementor-sub-item menu-link">TOURS ULTIMATE FOOD JOURNEY</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4479">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/tours-joo-chiat-food/" class="elementor-sub-item menu-link">TOURS joo chiat food</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4388">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/tour-spice-of-life/" class="elementor-sub-item menu-link">Tour SPICE OF LIFE LITTLE INDIA</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4389">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/tours-local-street-food/" class="elementor-sub-item menu-link">TOURS Local Street Food</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4390">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/tours-hawker-feast/" class="elementor-sub-item menu-link">TOURS HAWKER FEAST</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4391">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/tours-from-tank-to-tummy/" class="elementor-sub-item menu-link">TOURS FROM TANK TO TUMMY</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4392">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/tours-shrimp-farm-tour/" class="elementor-sub-item menu-link">TOURS NATURE&#8217;S HUG SHRIMP
                                      FARM TOUR &#038; TASTING</a>
                                  </li>
                                </ul> -->
                                                            </li>
                                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4439">
                                                                <a href="{{ url('experiences/workshops') }}" class="elementor-sub-item elementor-item-anchor menu-link">WORKSHOPS<span role="presentation" class="dropdown-menu-toggle"></span></a>
                                                                <!-- <ul class="sub-menu elementor-nav-menu--dropdown">
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4371">
                                    <a href="{{ url('/') }}" class="elementor-sub-item menu-link">WORKSHOP MAIN</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4393">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-who-crossed-the-road/" class="elementor-sub-item menu-link">Workshop WHO CROSSED THE ROAD</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4394">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-jeya-spices/" class="elementor-sub-item menu-link">Workshop SPICE BLENDING WITH JEYA
                                      SPICES</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4395">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-chicken-otah/" class="elementor-sub-item menu-link">Workshop THE MAKING OF CHICKEN
                                      OTAH</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4480">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-strawberry-shortcakes/" class="elementor-sub-item menu-link">Workshop Strawberry Shortcakes</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4396">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-local-delights/" class="elementor-sub-item menu-link">Workshop Local Delights</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4397">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-chocolate-appreciation/" class="elementor-sub-item menu-link">Workshop Chocolate Appreciation</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4398">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-chocolate-truffle-making/" class="elementor-sub-item menu-link">Workshop Chocolate Truffle
                                      Making</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4399">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-60s-comfort-food/" class="elementor-sub-item menu-link">Workshop 60s comfort food</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4400">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-iccc-icecream-making/" class="elementor-sub-item menu-link">Workshop iccc icecream making</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4401">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-udders-amoozing-experience/" class="elementor-sub-item menu-link">Workshop udders amoozing
                                      experience</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4402">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-kopi-socks-cold-brew/" class="elementor-sub-item menu-link">Workshop kopi socks cold brew</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4403">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-vagabond-spice-journey/" class="elementor-sub-item menu-link">Workshop vagabond spice journey</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4405">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-vegan-hawker-party/" class="elementor-sub-item menu-link">Workshop vegan hawker party</a>
                                  </li>
                                </ul> -->
                                                            </li>
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-445">
                                                                <a href="{{ url('experiences/restaurantpartners') }}" class="elementor-sub-item menu-link">RESTAURANT PARTNERS</a>
                                                            </li>
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-444">
                                                                <a href="{{ url('experiences/fringeevents') }}" class="elementor-sub-item menu-link">FRINGE EVENTS</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4362">
                                                        <a href="{{ url('stories') }}" class="elementor-item menu-link">STORIES</a>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4360">
                                                        <a href="{{ url('sponsor') }}" class="elementor-item menu-link">SPONSORS</a>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-388">
                                                        <a href="{{ url('faq') }}" class="elementor-item menu-link">FAQ</a>
                                                    </li>
                                                </ul>
                                            </nav>
                                            <div class="elementor-menu-toggle customToggle" role="button" tabindex="0" aria-label="Menu Toggle" aria-expanded="false">
                                                <i aria-hidden="true" role="presentation" class="elementor-menu-toggle__icon--open eicon-menu-bar"></i><i aria-hidden="true" role="presentation" class="elementor-menu-toggle__icon--close eicon-close"></i>
                                                <span class="elementor-screen-only">Menu</span>
                                            </div>
                                            <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container customDropdown" role="navigation" aria-hidden="true">
                                                <ul id="menu-2-b8d1992" class="elementor-nav-menu">
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-449">
                                                        <a href="{{ url('virtualmasterclass') }}" id="sff1" class="elementor-item menu-link" tabindex="-1">VIRTUAL MASTERCLASSES</a>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-389">
                                                        <a href="{{ url('enter-virtualmarketplace') }}" id="sff2" class="elementor-item menu-link" tabindex="-1">VIRTUAL MARKETPLACE</a>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4359">
                                                        <a href="{{ url('festivalvillage') }}" id="sff3" class="elementor-item menu-link" tabindex="-1">FESTIVAL VILLAGE</a>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-387">
                                                        <a href="{{ url('experiences') }}" id="sff4" class="elementor-item menu-link" aria-expanded="true" tabindex="-1">EXPERIENCES &#9662;<span role="presentation" class="dropdown-menu-toggle"></span></a>
                                                        <ul class="sub-menu elementor-nav-menu--dropdown dropdown-menu">
                                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4440">
                                                                <a href="{{ url('experiences/tours') }}" id="sff5" class="elementor-sub-item elementor-item-anchor menu-link" tabindex="-1">TOURS<span role="presentation" class="dropdown-menu-toggle"></span></a>
                                                                <!-- <ul class="sub-menu elementor-nav-menu--dropdown">
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4441">
                                    <a href="{{ url('comingsoon') }}" class="elementor-sub-item menu-link" tabindex="-1">TOURS MAIN</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4383">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/tours-fruit-route/" class="elementor-sub-item menu-link" tabindex="-1">TOURS FRUIT ROUTE</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4384">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/tours-puzzle-picnic/" class="elementor-sub-item menu-link" tabindex="-1">TOURS PUZZLE PICNIC</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4385">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/tours-asia101/" class="elementor-sub-item menu-link" tabindex="-1">TOURS ASIA101</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4386">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/tours-hawkerwalk/" class="elementor-sub-item menu-link" tabindex="-1">TOURS Hawker walk</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4387">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/tours-ultimate-food-journey/" class="elementor-sub-item menu-link" tabindex="-1">TOURS ULTIMATE FOOD JOURNEY</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4479">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/tours-joo-chiat-food/" class="elementor-sub-item menu-link" tabindex="-1">TOURS joo chiat food</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4388">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/tour-spice-of-life/" class="elementor-sub-item menu-link" tabindex="-1">Tour SPICE OF LIFE LITTLE INDIA</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4389">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/tours-local-street-food/" class="elementor-sub-item menu-link" tabindex="-1">TOURS Local Street Food</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4390">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/tours-hawker-feast/" class="elementor-sub-item menu-link" tabindex="-1">TOURS HAWKER FEAST</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4391">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/tours-from-tank-to-tummy/" class="elementor-sub-item menu-link" tabindex="-1">TOURS FROM TANK TO TUMMY</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4392">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/tours-shrimp-farm-tour/" class="elementor-sub-item menu-link" tabindex="-1">TOURS NATURE&#8217;S HUG SHRIMP
                                      FARM TOUR &#038; TASTING</a>
                                  </li>
                                </ul> -->
                                                            </li>
                                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4439">
                                                                <a href="{{ url('experiences/workshops') }}" id="sff6" class="elementor-sub-item elementor-item-anchor menu-link" tabindex="-1">WORKSHOPS<span role="presentation" class="dropdown-menu-toggle"></span></a>
                                                                <!-- <ul class="sub-menu elementor-nav-menu--dropdown">
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4371">
                                    <a href="{{ url('comingsoon') }}" class="elementor-sub-item menu-link" tabindex="-1">WORKSHOP MAIN</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4393">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-who-crossed-the-road/" class="elementor-sub-item menu-link" tabindex="-1">Workshop WHO CROSSED THE ROAD</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4394">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-jeya-spices/" class="elementor-sub-item menu-link" tabindex="-1">Workshop SPICE BLENDING WITH JEYA
                                      SPICES</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4395">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-chicken-otah/" class="elementor-sub-item menu-link" tabindex="-1">Workshop THE MAKING OF CHICKEN
                                      OTAH</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4480">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-strawberry-shortcakes/" class="elementor-sub-item menu-link" tabindex="-1">Workshop Strawberry Shortcakes</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4396">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-local-delights/" class="elementor-sub-item menu-link" tabindex="-1">Workshop Local Delights</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4397">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-chocolate-appreciation/" class="elementor-sub-item menu-link" tabindex="-1">Workshop Chocolate Appreciation</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4398">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-chocolate-truffle-making/" class="elementor-sub-item menu-link" tabindex="-1">Workshop Chocolate Truffle
                                      Making</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4399">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-60s-comfort-food/" class="elementor-sub-item menu-link" tabindex="-1">Workshop 60s comfort food</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4400">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-iccc-icecream-making/" class="elementor-sub-item menu-link" tabindex="-1">Workshop iccc icecream making</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4401">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-udders-amoozing-experience/" class="elementor-sub-item menu-link" tabindex="-1">Workshop udders amoozing
                                      experience</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4402">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-kopi-socks-cold-brew/" class="elementor-sub-item menu-link" tabindex="-1">Workshop kopi socks cold brew</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4403">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-vagabond-spice-journey/" class="elementor-sub-item menu-link" tabindex="-1">Workshop vagabond spice journey</a>
                                  </li>
                                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4405">
                                    <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-vegan-hawker-party/" class="elementor-sub-item menu-link" tabindex="-1">Workshop vegan hawker party</a>
                                  </li>
                                </ul> -->
                                                            </li>
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-445">
                                                                <a href="{{ url('experiences/restaurantpartners') }}" id="sff7" class="elementor-sub-item menu-link" tabindex="-1">RESTAURANT PARTNERS</a>
                                                            </li>
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-444">
                                                                <a href="{{ url('experiences/fringeevents') }}" id="sff8" class="elementor-sub-item menu-link" tabindex="-1">FRINGE EVENTS</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4362">
                                                        <a href="{{ url('experiences/tours') }}" id="sff5" class="elementor-sub-item elementor-item-anchor menu-link" tabindex="-1">&nbsp; TOURS<span role="presentation" class="dropdown-menu-toggle"></span></a>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4362">
                                                        <a href="{{ url('experiences/workshops') }}" id="sff5" class="elementor-sub-item elementor-item-anchor menu-link" tabindex="-1">&nbsp; WORKSHOPS<span role="presentation" class="dropdown-menu-toggle"></span></a>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-445">
                                                        <a href="{{ url('experiences/restaurantpartners') }}" id="sff7" class="elementor-sub-item menu-link" tabindex="-1">&nbsp; RESTAURANT PARTNERS</a>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-444">
                                                        <a href="{{ url('experiences/fringeevents') }}" id="sff8" class="elementor-sub-item menu-link" tabindex="-1">&nbsp; FRINGE EVENTS</a>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4362">
                                                        <a href="{{ url('stories') }}" class="elementor-item menu-link" id="sff9" tabindex="-1">STORIES</a>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4360">
                                                        <a href="{{ url('sponsor') }}" class="elementor-item menu-link" id="sff10" tabindex="-1">ORGANISERS AND PARTNERS</a>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-388">
                                                        <a href="{{ url('faq') }}" class="elementor-item menu-link" id="sff11" tabindex="-1">FAQ</a>
                                                    </li>
                                                </ul>
                                            </nav>

                                            <script>
                                                $('.elementor-element-b8d1992').on('click', function() {
                                                    if ($('.customToggle').attr('aria-expanded') == "false") {
                                                        $('.customToggle').attr('aria-expanded', true);
                                                        $('.customToggle').addClass('elementor-active');

                                                        $('.customDropdown').attr('aria-hidden', false);
                                                        $('.customDropdown').attr('style', 'top: 45px; width: 390px; left: -333.688px;');

                                                        var tabIndex = document.querySelectorAll('[tabindex]');
                                                        $('#sff1').attr('tabindex', "0");
                                                        $('#sff2').attr('tabindex', "0");
                                                        $('#sff3').attr('tabindex', "0");
                                                        $('#sff4').attr('tabindex', "0");
                                                        $('#sff5').attr('tabindex', "0");
                                                        $('#sff6').attr('tabindex', "0");
                                                        $('#sff7').attr('tabindex', "0");
                                                        $('#sff8').attr('tabindex', "0");
                                                        $('#sff9').attr('tabindex', "0");
                                                        $('#sff10').attr('tabindex', "0");
                                                        $('#sff11').attr('tabindex', "0");

                                                        $('#menu-2-b8d1992').attr('style', 'position: relative;');

                                                    } else if ($('.customToggle').attr('aria-expanded') == "true") {
                                                        $('.customToggle').attr('aria-expanded', false);
                                                        $('.customToggle').removeClass('elementor-active');

                                                        $('.customDropdown').attr('aria-hidden', true)
                                                        var tabIndex = document.querySelectorAll('[tabindex]');
                                                        $('#sff1').attr('tabindex', "-1");
                                                        $('#sff2').attr('tabindex', "-1");
                                                        $('#sff3').attr('tabindex', "-1");
                                                        $('#sff4').attr('tabindex', "-1");
                                                        $('#sff5').attr('tabindex', "-1");
                                                        $('#sff6').attr('tabindex', "-1");
                                                        $('#sff7').attr('tabindex', "-1");
                                                        $('#sff8').attr('tabindex', "-1");
                                                        $('#sff9').attr('tabindex', "-1");
                                                        $('#sff1-1').attr('tabindex', "-1");
                                                        $('#sff11').attr('tabindex', "-1");
                                                    }

                                                })
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <section class="elementor-section elementor-top-section elementor-element elementor-element-ef198b5 elementor-section-height-min-height elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="ef198b5" data-element_type="section" data-settings='{"background_background":"classic"}'>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-9bc5fb6" data-id="9bc5fb6" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-807d8be elementor-widget elementor-widget-theme-site-logo elementor-widget-image" data-id="807d8be" data-element_type="widget" data-widget_type="theme-site-logo.default">
                        <div class="elementor-widget-container">
                            <a href="{{ url('/') }}">
                                <img width="220" height="124" src="{{ asset('website/images/SFF-LOGO.png') }}" class="attachment-full size-full" alt="" loading="lazy" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-e76c7d1 elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile" data-id="e76c7d1" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-2ece62f elementor-hidden-desktop elementor-widget elementor-widget-button" data-id="2ece62f" data-element_type="widget" data-widget_type="button.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                                <!-- <a href="https://kkday.me/sffuob" target="_blank" class="elementor-button-link elementor-button elementor-size-sm" role="button"> -->
                                <a href="https://kkday.me/KKday_SFF_website" target="_blank" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                    <span class="elementor-button-content-wrapper">
                                        <span class="elementor-button-text">BUY TICKET</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-96f556c" data-id="96f556c" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-007aed3 elementor-nav-menu__align-right elementor-nav-menu--stretch elementor-nav-menu--dropdown-mobile elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu" data-id="007aed3" data-element_type="widget" data-settings='{"full_width":"stretch","_animation":"none","toggle_icon_hover_animation":"pulse","layout":"horizontal","submenu_icon":{"value":"&lt;i class=\"fas fa-caret-down\"&gt;&lt;\/i&gt;","library":"fa-solid"},"toggle":"burger"}' data-widget_type="nav-menu.default">
                        <div class="elementor-widget-container">
                            <style>
                                ul li a {
                                    display: block;
                                    padding: 8px 25px;
                                    color: #333;
                                    text-decoration: none;
                                }

                                ul li a:hover {
                                    color: #fff;
                                    /* background: #939393; */
                                    background: 'none';
                                }

                                ul li ul.elementor-nav-menu--dropdown {
                                    min-width: 100%;
                                    /* Set width of the elementor-nav-menu--dropdown */
                                    background: #f2f2f2;
                                    display: none;
                                    position: absolute;
                                    z-index: 999;
                                    left: 0;
                                }

                                ul li:hover ul.elementor-nav-menu--dropdown {
                                    display: block;
                                    /* Display the elementor-nav-menu--dropdown */
                                }

                                ul li ul.elementor-nav-menu--dropdown li {
                                    display: block;
                                }
                            </style>
                            <nav migration_allowed="1" style="
    width: max-content;
" elementor-sub-item elementor-item-anchor menu-link migrated="0" role="navigation" class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-none">
                                <ul id="menu-1-007aed3" class="elementor-nav-menu">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-449">

                                        <a href="{{ url('virtualmasterclass') }}" class="elementor-item menu-link {{ Request::path()  == 'virtualmasterclass' ? 'active-page' : '' }}">VIRTUAL MASTERCLASSES</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-389">
                                        <a href="{{ url('enter-virtualmarketplace') }}" class="elementor-item menu-link {{ Request::path()  == 'enter-virtualmarketplace' ? 'active-page' : '' }}">VIRTUAL MARKETPLACE</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4359">
                                        <a href="{{ url('festivalvillage') }}" class="elementor-item menu-link {{ Request::path()  == 'festivalvillage' ? 'active-page' : '' }}">FESTIVAL VILLAGE</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-387">
                                        <a href="{{ url('experiences') }}" class="elementor-item menu-link {{ Request::path()  == 'experiences' ? 'active-page' : '' }}">EXPERIENCES &#9662;<span role="presentation" class="dropdown-menu-toggle"></span></a>
                                        <ul class="sub-menu elementor-nav-menu--dropdown" style="width: max-content;">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4440">
                                                <a href="{{ url('experiences/tours') }}" class="elementor-sub-item elementor-item-anchor menu-link {{ Request::path()  == 'experiences/tours' ? 'active-page' : '' }}">TOURS<span role="presentation" class="dropdown-menu-toggle"></span></a>
                                                <!-- <ul class="sub-menu elementor-nav-menu--dropdown">
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4441">
                            <a href="{{ url('comingsoon') }}" class="elementor-sub-item menu-link">TOURS MAIN</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4383">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/tours-fruit-route/" class="elementor-sub-item menu-link">TOURS FRUIT ROUTE</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4384">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/tours-puzzle-picnic/" class="elementor-sub-item menu-link">TOURS PUZZLE PICNIC</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4385">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/tours-asia101/" class="elementor-sub-item menu-link">TOURS ASIA101</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4386">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/tours-hawkerwalk/" class="elementor-sub-item menu-link">TOURS Hawker walk</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4387">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/tours-ultimate-food-journey/" class="elementor-sub-item menu-link">TOURS ULTIMATE FOOD JOURNEY</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4479">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/tours-joo-chiat-food/" class="elementor-sub-item menu-link">TOURS joo chiat food</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4388">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/tour-spice-of-life/" class="elementor-sub-item menu-link">Tour SPICE OF LIFE LITTLE INDIA</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4389">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/tours-local-street-food/" class="elementor-sub-item menu-link">TOURS Local Street Food</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4390">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/tours-hawker-feast/" class="elementor-sub-item menu-link">TOURS HAWKER FEAST</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4391">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/tours-from-tank-to-tummy/" class="elementor-sub-item menu-link">TOURS FROM TANK TO TUMMY</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4392">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/tours-shrimp-farm-tour/" class="elementor-sub-item menu-link">TOURS NATURE&#8217;S HUG SHRIMP FARM TOUR
                              &#038; TASTING</a>
                          </li>
                        </ul> -->
                                            </li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4439">
                                                <a href="{{ url('experiences/workshops') }}" class="elementor-sub-item elementor-item-anchor menu-link {{ Request::path()  == 'experiences/workshops' ? 'active-page' : '' }}">WORKSHOPS<span role="presentation" class="dropdown-menu-toggle"></span></a>
                                                <!-- <ul class="sub-menu elementor-nav-menu--dropdown">
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4371">
                            <a href="{{ url('comingsoon') }}" class="elementor-sub-item menu-link">WORKSHOP MAIN</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4393">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-who-crossed-the-road/" class="elementor-sub-item menu-link">Workshop WHO CROSSED THE ROAD</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4394">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-jeya-spices/" class="elementor-sub-item menu-link">Workshop SPICE BLENDING WITH JEYA SPICES</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4395">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-chicken-otah/" class="elementor-sub-item menu-link">Workshop THE MAKING OF CHICKEN OTAH</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4480">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-strawberry-shortcakes/" class="elementor-sub-item menu-link">Workshop Strawberry Shortcakes</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4396">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-local-delights/" class="elementor-sub-item menu-link">Workshop Local Delights</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4397">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-chocolate-appreciation/" class="elementor-sub-item menu-link">Workshop Chocolate Appreciation</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4398">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-chocolate-truffle-making/" class="elementor-sub-item menu-link">Workshop Chocolate Truffle Making</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4399">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-60s-comfort-food/" class="elementor-sub-item menu-link">Workshop 60s comfort food</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4400">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-iccc-icecream-making/" class="elementor-sub-item menu-link">Workshop iccc icecream making</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4401">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-udders-amoozing-experience/" class="elementor-sub-item menu-link">Workshop udders amoozing experience</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4402">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-kopi-socks-cold-brew/" class="elementor-sub-item menu-link">Workshop kopi socks cold brew</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4403">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-vagabond-spice-journey/" class="elementor-sub-item menu-link">Workshop vagabond spice journey</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4405">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-vegan-hawker-party/" class="elementor-sub-item menu-link">Workshop vegan hawker party</a>
                          </li>
                        </ul> -->
                                            </li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-445">
                                                <a href="{{ url('experiences/restaurantpartners') }}" class="elementor-sub-item menu-link {{ Request::path()  == 'experiences/restaurantpartners' ? 'active-page' : '' }}">RESTAURANT PARTNERS</a>
                                            </li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-444">
                                                <a href="{{ url('experiences/fringeevents') }}" class="elementor-sub-item menu-link {{ Request::path()  == 'experiences/fringeevents' ? 'active-page' : '' }}">FRINGE EVENTS</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4362">
                                        <a href="{{ url('stories') }}" class="elementor-item menu-link {{ Request::path()  == 'stories' ? 'active-page' : '' }}">STORIES</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4360">
                                        <a href="{{ url('sponsor') }}" class="elementor-item menu-link {{ Request::path()  == 'sponsor' ? 'active-page' : '' }}">ORGANISERS AND PARTNERS</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-388">
                                        <a href="{{ url('faq') }}" class="elementor-item menu-link {{ Request::path()  == 'faq' ? 'active-page' : '' }}">FAQ</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="elementor-menu-toggle" role="button" tabindex="0" aria-label="Menu Toggle" aria-expanded="false">
                                <i aria-hidden="true" role="presentation" class="elementor-menu-toggle__icon--open elementor-animation-pulse eicon-menu-bar"></i><i aria-hidden="true" role="presentation" class="elementor-menu-toggle__icon--close elementor-animation-pulse eicon-close"></i>
                                <span class="elementor-screen-only">Menu</span>
                            </div>
                            <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" role="navigation" aria-hidden="true">
                                <ul id="menu-2-007aed3" class="elementor-nav-menu">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-449">
                                        <a href="{{ url('virtualmasterclass') }}" class="elementor-item menu-link {{ Request::path()  == 'virtualmasterclass' ? 'active-page' : '' }}" tabindex="-1">VIRTUAL MASTERCLASSES</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-389">
                                        <a href="{{ url('enter-virtualmarketplace') }}" class="elementor-item menu-link {{ Request::path()  == 'enter-virtualmarketplace' ? 'active-page' : '' }}" tabindex="-1">VIRTUAL MARKETPLACE</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4359">
                                        <a href="{{ url('festivalvillage') }}" class="elementor-item menu-link {{ Request::path()  == 'festivalvillage' ? 'active-page' : '' }}" tabindex="-1">FESTIVAL VILLAGE</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-387">
                                        <a href="{{ url('experiences') }}" class="elementor-item menu-link {{ Request::path()  == 'experiences' ? 'active-page' : '' }}" tabindex="-1">EXPERIENCES<span role="presentation" class="dropdown-menu-toggle"></span></a>
                                        <ul class="sub-menu elementor-nav-menu--dropdown">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4440">

                                                <a href="{{ url('experiences/tours') }}" class="elementor-sub-item elementor-item-anchor menu-link {{ Request::path()  == 'experiences/tours' ? 'active-page' : '' }}" tabindex="-1">TOURS<span role="presentation" class="dropdown-menu-toggle"></span></a>
                                                <!-- <ul class="sub-menu elementor-nav-menu--dropdown">
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4441">
                            <a href="{{ url('comingsoon') }}" class="elementor-sub-item menu-link" tabindex="-1">TOURS MAIN</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4383">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/tours-fruit-route/" class="elementor-sub-item menu-link" tabindex="-1">TOURS FRUIT ROUTE</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4384">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/tours-puzzle-picnic/" class="elementor-sub-item menu-link" tabindex="-1">TOURS PUZZLE PICNIC</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4385">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/tours-asia101/" class="elementor-sub-item menu-link" tabindex="-1">TOURS ASIA101</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4386">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/tours-hawkerwalk/" class="elementor-sub-item menu-link" tabindex="-1">TOURS Hawker walk</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4387">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/tours-ultimate-food-journey/" class="elementor-sub-item menu-link" tabindex="-1">TOURS ULTIMATE FOOD JOURNEY</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4479">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/tours-joo-chiat-food/" class="elementor-sub-item menu-link" tabindex="-1">TOURS joo chiat food</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4388">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/tour-spice-of-life/" class="elementor-sub-item menu-link" tabindex="-1">Tour SPICE OF LIFE LITTLE INDIA</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4389">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/tours-local-street-food/" class="elementor-sub-item menu-link" tabindex="-1">TOURS Local Street Food</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4390">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/tours-hawker-feast/" class="elementor-sub-item menu-link" tabindex="-1">TOURS HAWKER FEAST</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4391">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/tours-from-tank-to-tummy/" class="elementor-sub-item menu-link" tabindex="-1">TOURS FROM TANK TO TUMMY</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4392">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/tours-shrimp-farm-tour/" class="elementor-sub-item menu-link" tabindex="-1">TOURS NATURE&#8217;S HUG SHRIMP FARM TOUR
                              &#038; TASTING</a>
                          </li>
                        </ul> -->
                                            </li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4439">
                                                <a href="{{ url('experiences/workshops') }}" class="elementor-sub-item elementor-item-anchor menu-link {{ Request::path()  == 'experiences/workshops' ? 'active-page' : '' }}" tabindex="-1">WORKSHOPS<span role="presentation" class="dropdown-menu-toggle"></span></a>
                                                <!-- <ul class="sub-menu elementor-nav-menu--dropdown">
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4371">
                            <a href="{{ url('comingsoon') }}" class="elementor-sub-item menu-link" tabindex="-1">WORKSHOP MAIN</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4393">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-who-crossed-the-road/" class="elementor-sub-item menu-link" tabindex="-1">Workshop WHO CROSSED THE ROAD</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4394">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-jeya-spices/" class="elementor-sub-item menu-link" tabindex="-1">Workshop SPICE BLENDING WITH JEYA SPICES</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4395">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-chicken-otah/" class="elementor-sub-item menu-link" tabindex="-1">Workshop THE MAKING OF CHICKEN OTAH</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4480">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-strawberry-shortcakes/" class="elementor-sub-item menu-link" tabindex="-1">Workshop Strawberry Shortcakes</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4396">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-local-delights/" class="elementor-sub-item menu-link" tabindex="-1">Workshop Local Delights</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4397">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-chocolate-appreciation/" class="elementor-sub-item menu-link" tabindex="-1">Workshop Chocolate Appreciation</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4398">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-chocolate-truffle-making/" class="elementor-sub-item menu-link" tabindex="-1">Workshop Chocolate Truffle Making</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4399">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-60s-comfort-food/" class="elementor-sub-item menu-link" tabindex="-1">Workshop 60s comfort food</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4400">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-iccc-icecream-making/" class="elementor-sub-item menu-link" tabindex="-1">Workshop iccc icecream making</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4401">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-udders-amoozing-experience/" class="elementor-sub-item menu-link" tabindex="-1">Workshop udders amoozing experience</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4402">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-kopi-socks-cold-brew/" class="elementor-sub-item menu-link" tabindex="-1">Workshop kopi socks cold brew</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4403">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-vagabond-spice-journey/" class="elementor-sub-item menu-link" tabindex="-1">Workshop vagabond spice journey</a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4405">
                            <a href="https://www.staging.2vr360.online/sff_draft/v1/workshop-vegan-hawker-party/" class="elementor-sub-item menu-link" tabindex="-1">Workshop vegan hawker party</a>
                          </li>
                        </ul> -->
                                            </li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-445">
                                                <a href="{{ url('experiences/restaurantpartners') }}" class="elementor-sub-item menu-link {{ Request::path()  == 'experiences/restaurantpartners' ? 'active-page' : '' }}" tabindex="-1">RESTAURANT PARTNERS</a>
                                            </li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-444">
                                                <a href="{{ url('experiences/fringeevents') }}" class="elementor-sub-item menu-link {{ Request::path()  == 'experiences/fringeevents' ? 'active-page' : '' }}" tabindex="-1">FRINGE EVENTS</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4362">
                                        <a href="{{ url('stories') }}" class="elementor-item menu-link {{ Request::path()  == 'stories' ? 'active-page' : '' }}" tabindex="-1">STORIES</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4360">
                                        <a href="{{ url('sponsor') }}" class="elementor-item menu-link {{ Request::path()  == 'sponsor' ? 'active-page' : '' }}" tabindex="-1">SPONSORS</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-388">
                                        <a href="{{ url('faq') }}" class="elementor-item menu-link {{ Request::path()  == 'faq' ? 'active-page' : '' }}" tabindex="-1">FAQ</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


@else


@endif
