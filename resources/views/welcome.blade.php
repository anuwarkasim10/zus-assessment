@extends('layouts.website')

@section('title')
REAL FOODIES ONLY | SFF
@endsection

@section('page-custom-styles')

<link rel="stylesheet" href="{{ asset('website/css/elementor-css-post-1913.css') }}" />

<style>
    .btn-primary,
    .btn-primary:hover,
    .btn-primary:active,
    .btn-primary:visited {
        background-color: #6E3CE1 !important;
        color: white;
        border: none;
    }

    .btn {
        font-family: 'Fjalla';
    }

    #newsletterSubmit {
        background-color: #6E3CE1;
        padding-left: 50px;
        padding-right: 50px;
        font-family: 'Fjalla One';
        color: white;
        border: none;
        font-weight: 300px;
    }

    .elementor-section elementor-top-section elementor-element elementor-element-ced0f34 elementor-section-boxed elementor-section-height-default elementor-section-height-default {
        margin-top: -3px;
    }

    .elementor-1913 .elementor-element.elementor-element-ced0f34:not(.elementor-motion-effects-element-type-background),
    .elementor-1913 .elementor-element.elementor-element-ced0f34>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        margin-top: -3px;
    }

    @media only screen and (max-width: 600px) {
        .tick {
            width: 10%;
        }
    }

    @media (max-width: 767px) {
        .elementor-1913 .elementor-element.elementor-element-75cae3f2 {
            width: 281px;
            height: auto;
        }
    }

    .elementor-1913 .elementor-element.elementor-element-f94bf07:not(.elementor-motion-effects-element-type-background)>.elementor-widget-wrap,
    .elementor-1913 .elementor-element.elementor-element-f94bf07>.elementor-widget-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {

        background-image: none;
    }

    .carousel-control-prev-icon {
        background-image: url('https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/left.png') !important;
    }

    .carousel-control-next-icon {
        background-image: url('https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/right.png') !important;
    }
</style>

@endsection

@section('WebContent')

<div id="content" class="site-content">
    <div class="ast-container">
        <div data-elementor-type="wp-page" data-elementor-id="1913" class="elementor elementor-1913">
            <section class="container-fluid elementor-hidden-tablet elementor-hidden-mobile" style="background-color:#FF6E00; margin:0px 0px 0px 0px; padding:0px 0px 0px 0px;">
                <!-- <div class="container"> -->
                <!-- Desktop Hero Section -->
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/hero-1.jpeg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/hero-2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <a href="https://kkday.me/sffuob" target="_blank"><img src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/hero-3.jpg" class="d-block w-100" alt="...">

                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="https://kkday.me/tigerbeer_sff" target="_blank"><img src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/hero-4.jpg" class="d-block w-100" alt="...">

                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="https://singaporefoodfestival.sg/virtualmasterclasses/jayce-ho-juan-yi-jun" target="_blank">
                                <img src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/hero-5-1.jpg" class="d-block w-100" alt="...">

                            </a>
                        </div>
                        <div class="carousel-item">
                            <img src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/hero-6.jpg" class="d-block w-100" alt="...">
                        </div>

                    </div>
                    <a class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
                <!-- </div> -->
            </section>
            <!-- <section class="elementor-section elementor-top-section elementor-element elementor-element-3766553 elementor-hidden-tablet elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3766553" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-845c598" data-id="845c598" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-d452d18 elementor-widget elementor-widget-image" data-id="d452d18" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img width="1024" height="495" src="{{ asset('website/images/Slide-Photo-min1-1024x495.png') }}" class="attachment-large size-large" alt="" loading="lazy" srcset="{{ asset('website/images/Slide-Photo-min1-1024x495.png') }} 1024w, https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/07/Slide-Photo-min1-300x145.png 300w, https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/07/Slide-Photo-min1-768x371.png 768w, https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/07/Slide-Photo-min1-1536x742.png 1536w, https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/07/Slide-Photo-min1-2048x989.png 2048w" sizes="(max-width: 1024px) 100vw, 1024px" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <section class="elementor-section elementor-top-section elementor-element elementor-element-443ec78 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="443ec78" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7283416c" data-id="7283416c" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-4648e09c elementor-align-right elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-button" data-id="4648e09c" data-element_type="widget" id="hp-ctn-howItWorks" data-settings="{&quot;sticky&quot;:&quot;top&quot;,&quot;sticky_offset&quot;:13,&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_effects_offset&quot;:0}" data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <!-- <a href="https://kkday.me/sffuob" target="_blank" class="elementor-button-link elementor-button elementor-size-sm" role="button"> -->
                                        <a href="https://kkday.me/KKday_SFF_website" target="_blank" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                            <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-text">BUY TICKETS</span>
                                            </span>
                                        </a>
                                        <!--<a href="https://www.kkday.com/en-my/product/131399-singapore-food-festival-2022" class="elementor-button-link elementor-button elementor-size-sm" role="button">-->
                                        <!--    <span class="elementor-button-content-wrapper">-->
                                        <!--        <span class="elementor-button-text">BUY TICKETS</span>-->
                                        <!--    </span>-->
                                        <!--</a>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="elementor-section elementor-top-section elementor-element elementor-element-56ed41b elementor-hidden-desktop elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="56ed41b" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-047427b" data-id="047427b" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated" style="margin: 0; padding: 0;
">
                            <div class="elementor-element elementor-element-bd7cfe7 elementor-hidden-desktop elementor-widget elementor-widget-image" data-id="bd7cfe7" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <!-- slider mobile -->
                                    <div id="carouselmobileslider" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active" style="background-color: #FF6E00;">
                                                <img src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/mobilehero-1.jpg" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/mobilehero-2.jpg" class="d-block w-100" alt="...">

                                                </a>
                                            </div>
                                            <div class="carousel-item">
                                                <a href="https://kkday.me/sffuob" target="_blank"><img src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/mobilehero-3.jpg" class="d-block w-100" alt="...">

                                                </a>
                                            </div>
                                            <div class="carousel-item">
                                                <a href="https://kkday.me/tigerbeer_sff" target="_blank"><img src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/mobilehero-4.jpg" class="d-block w-100" alt="...">

                                                </a>
                                            </div>
                                            <div class="carousel-item">
                                                <a href="https://singaporefoodfestival.sg/virtualmasterclasses/jayce-ho-juan-yi-jun" target="_blank"><img src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/mobilehero-5-1.jpg" class="d-block w-100" alt="...">

                                                </a>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/mobilehero-6.jpg" class="d-block w-100" alt="...">

                                                
                                            </div>

                                        </div>
                                        <a class="carousel-control-prev" type="button" data-bs-target="#carouselmobileslider" data-bs-slide="prev" style="top: 200px;">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" type="button" data-bs-target="#carouselmobileslider" data-bs-slide="next" style="top: 200px;">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </a>
                                    </div>

                                    <!--sini slider chef 1 hehe -->
                                    <div id="carouselChef" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/masterclass-1a-nobg.png" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">

                                                <img src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/masterclass-2a-nobg.png" class="d-block w-100" alt="...">

                                            </div>
                                            <div class="carousel-item">

                                                <img src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/masterclass-3a-nobg.png" class="d-block w-100" alt="...">

                                            </div>
                                            <div class="carousel-item">

                                                <img src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/masterclass-4a-nobg.png" class="d-block w-100" alt="...">

                                            </div>
                                            <div class="carousel-item">

                                            <!-- <img src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/masterclass-5a-nobg.png" class="d-block w-100" alt="..."> -->
                                            <img src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/chef-maira.png" class="d-block w-100" alt="...">

                                            </div>
                                            <div class="carousel-item">

                                                <!-- <img src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/masterchef06-nobg.png" class="d-block w-100" alt="..."> -->
                                                <img src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/masterclass6a-nobg.png" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">

                                                <img src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/masterclass-7a-nobg.png" class="d-block w-100" alt="...">

                                            </div>

                                            <div class="carousel-item">
                                                <img src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/masterclass-2c-chef-Edited.png" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">

                                                <!-- <img src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/masterchef-9a-nobg.png" class="d-block w-100" alt="..."> -->
                                                <img src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/masterchef-3c-chefs-nobg.png" class="d-block w-100" alt="...">

                                            </div>

                                        </div>
                                        <a class="carousel-control-prev" type="button" data-bs-target="#carouselChef" data-bs-slide="prev" style="top: 150px;">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" type="button" data-bs-target="#carouselChef" data-bs-slide="next" style="top: 150px;">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </a>
                                    </div><!-- tutup slider chef 1 no bg -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-ced0f34 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ced0f34" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-138f810" data-id="138f810" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-9f7ee71 elementor-widget elementor-widget-heading" data-id="9f7ee71" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <style>
                                        /*! elementor - v3.6.6 - 08-06-2022 */
                                        .elementor-heading-title {
                                            padding: 0;
                                            margin: 0;
                                            line-height: 1
                                        }

                                        .elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
                                            color: inherit;
                                            font-size: inherit;
                                            line-height: inherit
                                        }

                                        .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                                            font-size: 15px
                                        }

                                        .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                                            font-size: 19px
                                        }

                                        .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                                            font-size: 29px
                                        }

                                        .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                                            font-size: 39px
                                        }

                                        .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                                            font-size: 59px
                                        }
                                    </style>
                                    <h2 class="elementor-heading-title elementor-size-default">VIRTUAL
                                        MASTERCLASSES</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-bb4c1d7 elementor-widget elementor-widget-text-editor" data-id="bb4c1d7" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <style>
                                        /*! elementor - v3.6.6 - 08-06-2022 */
                                        .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                                            background-color: #818a91;
                                            color: #fff
                                        }

                                        .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                                            color: #818a91;
                                            border: 3px solid;
                                            background-color: transparent
                                        }

                                        .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                                            margin-top: 8px
                                        }

                                        .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                                            width: 1em;
                                            height: 1em
                                        }

                                        .elementor-widget-text-editor .elementor-drop-cap {
                                            float: left;
                                            text-align: center;
                                            line-height: 1;
                                            font-size: 50px
                                        }

                                        .elementor-widget-text-editor .elementor-drop-cap-letter {
                                            display: inline-block
                                        }
                                    </style> So you think you&#8217;re a real foodie? Then sharpen your knives, fire up your stoves and get ready to dive deep into the world of local gastronomy taught by some of Singapore&#8217;s most esteemed chefs.<br><br>This year, level up your cooking skills with these exciting overseas 4-hands collaborations:
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-a998c8d elementor-widget elementor-widget-image" data-id="a998c8d" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img width="1024" height="477" src="{{ asset('website/images/key-point-1024x477.png') }}" class="attachment-large size-large" alt="" loading="lazy" srcset="{{ asset('website/images/key-point-1024x477.png') }} 1024w, https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/07/key-point-300x140.png 300w, https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/07/key-point-768x357.png 768w, https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/07/key-point-1536x715.png 1536w, https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/07/key-point.png 1749w" sizes="(max-width: 1024px) 100vw, 1024px" />
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-5111ba5 elementor-align-left e-transform e-transform elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="5111ba5" data-element_type="widget" data-settings="{&quot;_animation_mobile&quot;:&quot;fadeInDown&quot;,&quot;_transform_rotateZ_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_skewX_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_skewX_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_skewX_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_skewY_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_skewY_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_skewY_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <a href="{{ url('virtualmasterclass') }}" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                            <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-icon elementor-align-icon-right">
                                                    <i aria-hidden="true" class="fas fa-arrow-right"></i> </span>
                                                <span class="elementor-button-text">SIGN UP NOW </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f94bf07" data-id="f94bf07" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated" style="display: flex;
justify-content: center;
align-content: end;">
                            <div class="elementor-element elementor-element-c61438c elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-spacer" data-id="c61438c" data-element_type="widget" data-widget_type="spacer.default">
                                <div class="elementor-widget-container">
                                    <!-- <style>
                                        /*! elementor - v3.6.6 - 08-06-2022 */
                                        .e-container.e-container--row .elementor-spacer-inner {
                                            width: var(--spacer-size)
                                        }

                                        .e-container.e-container--column .elementor-spacer-inner,
                                        .elementor-column .elementor-spacer-inner {
                                            height: var(--spacer-size)
                                        }
                                    </style>
                                    <div class="elementor-spacer">
                                        <div class="elementor-spacer-inner"></div>

                                    </div> -->
                                    <!--sini slider chef 2 hehe -->
                                    <div id="carouselChef2" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/masterclass-1a-nobg.png" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">

                                                <img src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/masterclass-2a-nobg.png" class="d-block w-100" alt="...">

                                            </div>
                                            <div class="carousel-item">

                                                <img src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/masterclass-3a-nobg.png" class="d-block w-100" alt="...">

                                            </div>
                                            <div class="carousel-item">

                                                <img src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/masterclass-4a-nobg.png" class="d-block w-100" alt="...">

                                            </div>
                                            <div class="carousel-item">

                                            <!-- <img src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/masterclass-5a-nobg.png" class="d-block w-100" alt="..."> -->
                                                <img src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/chef-maira.png" class="d-block w-100" alt="...">

                                            </div>
                                            <div class="carousel-item">

                                                <!-- <img src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/masterchef06-nobg.png" class="d-block w-100" alt="..."> -->
                                                <img src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/masterclass6a-nobg.png" class="d-block w-100" alt="...">

                                            </div>
                                            <div class="carousel-item">

                                                <img src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/masterclass-7a-nobg.png" class="d-block w-100" alt="...">

                                            </div>
                                            <div class="carousel-item">
                                                <img src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/masterclass-2c-chef-Edited.png" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">

                                                <!-- <img src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/masterchef-9a-nobg.png" class="d-block w-100" alt="..."> -->
                                                <img src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/masterchef-3c-chefs-nobg.png" class="d-block w-100" alt="...">

                                            </div>


                                        </div>
                                        <a class="carousel-control-prev" type="button" data-bs-target="#carouselChef2" data-bs-slide="prev" style="top: 150px;">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" type="button" data-bs-target="#carouselChef2" data-bs-slide="next" style="top: 150px;">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </a>
                                    </div><!-- tutup slider chef 2 no bg -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-632eb6d elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="632eb6d" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ba74f99" data-id="ba74f99" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated" style="background-image: url(' https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/220801_RENDER-VIEW-1.jpg');">
                            <div class="elementor-element elementor-element-c72176e elementor-widget elementor-widget-spacer" data-id="c72176e" data-element_type="widget" data-widget_type="spacer.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-spacer">
                                        <div class="elementor-spacer-inner"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-e7df2d8" data-id="e7df2d8" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-f9433c7 elementor-widget elementor-widget-heading" data-id="f9433c7" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">VIRTUAL<br>MARKETPLACE</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-0dd15ec elementor-widget elementor-widget-text-editor" data-id="0dd15ec" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container" style="font-family: 'Roboto';">
                                    <p>Feast like there&#8217;s no tomorrow. Explore our Virtual Marketplace, order Food Kits to follow along during our Virtual Masterclasses, and get partner F&amp;B merchandise exclusively curated for Singapore Food Festival.</p>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-01f6fe5 elementor-align-left e-transform e-transform elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="01f6fe5" data-element_type="widget" data-settings="{&quot;_animation_mobile&quot;:&quot;fadeInDown&quot;,&quot;_transform_rotateZ_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_skewX_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_skewX_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_skewX_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_skewY_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_skewY_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_skewY_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <span class="elementor-button-text" data-bs-toggle="modal" data-bs-target="#addUserModel">
                                            <a class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                <span class="elementor-button-content-wrapper">
                                                    <span class="elementor-button-icon elementor-align-icon-right">
                                                        <i aria-hidden="true" class="fas fa-arrow-right"></i> </span>
                                                    ENTER
                                                </span>
                                            </a>
                                        </span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-7ba2a198 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7ba2a198" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3fc23a93" data-id="3fc23a93" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-5af13dc0 elementor-widget elementor-widget-heading" data-id="5af13dc0" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h3 class="elementor-heading-title elementor-size-default">FESTIVAL VILLAGE</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-92d2c72 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="92d2c72" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e84fd92" data-id="e84fd92" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-cc343eb elementor-widget elementor-widget-image" data-id="cc343eb" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img width="1024" height="499" src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/Festival-Village-1.png" class="attachment-large size-large" alt="" loading="lazy" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-bc50044 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="bc50044" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-711d200" data-id="711d200" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-cba5287 elementor-widget elementor-widget-heading" data-id="cba5287" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h3 class="elementor-heading-title elementor-size-default">EXPERIENCE</h3>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-b180004 elementor-widget elementor-widget-text-editor" data-id="b180004" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    Indulge in a nine-course dinner at the Chef Arena and savour an extensive menu curated by the chefs from our Virtual Masterclasses.</div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-cf1a300" data-id="cf1a300" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-9f49707 elementor-widget elementor-widget-heading" data-id="9f49707" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h3 class="elementor-heading-title elementor-size-default">FEAST</h3>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-837b8b1 elementor-widget elementor-widget-text-editor" data-id="837b8b1" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    Get ready for hours of unrestrained indulgence guaranteed to satisfy the foodie in you. </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-ecac94a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ecac94a" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4ac19ed" data-id="4ac19ed" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-11c1db9 elementor-widget elementor-widget-heading" data-id="11c1db9" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h3 class="elementor-heading-title elementor-size-default">LEARN</h3>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-5a98e75 elementor-widget elementor-widget-text-editor" data-id="5a98e75" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>Learn how the pros do it by participating in our onsite workshops. We know you want to.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-96328e6" data-id="96328e6" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-ed9724b elementor-widget elementor-widget-heading" data-id="ed9724b" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h3 class="elementor-heading-title elementor-size-default">ENJOY</h3>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-d1af8b7 elementor-widget elementor-widget-text-editor" data-id="d1af8b7" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    Take a break in between feasting and enjoy the entertainment options lined up for you, because even real foodies need a breather.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-51e0940 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="51e0940" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5b04b1b" data-id="5b04b1b" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-202d64a elementor-align-center e-transform e-transform elementor-widget elementor-widget-button" data-id="202d64a" data-element_type="widget" data-settings="{&quot;_animation_mobile&quot;:&quot;fadeInDown&quot;,&quot;_transform_rotateZ_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_skewX_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_skewX_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_skewX_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_skewY_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_skewY_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_skewY_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <a href="{{ url('festivalvillage') }}" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                            <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-icon elementor-align-icon-right">
                                                    <i aria-hidden="true" class="fas fa-arrow-right"></i> </span>
                                                <span class="elementor-button-text">FIND OUT MORE</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-22b2426 elementor-hidden-tablet elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="22b2426" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1b7c130" data-id="1b7c130" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-38100ab8 elementor-widget__width-inherit elementor-widget elementor-widget-heading" data-id="38100ab8" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">FEATURED</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-4dc6a19 elementor-section-full_width elementor-hidden-desktop elementor-section-height-default elementor-section-height-default" data-id="4dc6a19" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-42af486" data-id="42af486" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-b961850 elementor-widget elementor-widget-heading" data-id="b961850" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">FEATURED</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-5894de48 elementor-section-content-middle elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5894de48" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2abb7855" data-id="2abb7855" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-6ae4114b elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="6ae4114b" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-container elementor-column-gap-wide">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-70e769fc" data-id="70e769fc" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated" style="
    position: relative;
    z-index: 10;
">
                                            <div class="elementor-element elementor-element-14baf2bc elementor-widget elementor-widget-image" data-id="14baf2bc" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img width="1112" height="662" src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/Group-457.png" class="attachment-full size-full" alt="" loading="lazy" />
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-576efafe elementor-widget elementor-widget-heading" data-id="576efafe" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-heading-title elementor-size-default">EXPERIENCES</h3>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-11333243 elementor-widget elementor-widget-text-editor" data-id="11333243" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Show us you live to eat by booking our specially-curated tours and workshops happening around Singapore! Singapore Food Festival's fringe events have even more to offer.</p>
                                                </div>
                                            </div>
                                            <div style="
    position: relative;
    z-index:1000;
" class="elementor-element elementor-element-1d1d6d9e elementor-align-left e-transform e-transform elementor-hidden-desktop elementor-widget elementor-widget-button" data-id="1d1d6d9e" data-element_type="widget" data-settings="{&quot;_animation_mobile&quot;:&quot;fadeInDown&quot;,&quot;_transform_rotateZ_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_skewX_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_skewX_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_skewX_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_skewY_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_skewY_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_skewY_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a href="{{ url('experiences') }}" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                            <span class="elementor-button-content-wrapper">
                                                                <span class="elementor-button-icon elementor-align-icon-right">
                                                                    <i aria-hidden="true" class="fas fa-arrow-right"></i> </span>
                                                                <span class="elementor-button-text">FIND OUT MORE</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4b36b0c8" data-id="4b36b0c8" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-75cae3f2 elementor-widget elementor-widget-image" data-id="75cae3f2" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img width="2224" height="1324" src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/Restaurant-Partners.png" class="attachment-full size-full" alt="" loading="lazy" />
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-2641bb3d elementor-widget elementor-widget-heading" data-id="2641bb3d" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-heading-title elementor-size-default">RESTAURANT PARTNERS</h3>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-7e89026c elementor-widget elementor-widget-text-editor" data-id="7e89026c" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    For a limited time only, visit our Restaurant Partners to savour dishes and menus made exclusively for Singapore Food Festival. </div>
                                            </div>
                                            <div class="elementor-element elementor-element-1dbe9bd6 elementor-align-left e-transform e-transform elementor-hidden-desktop elementor-widget elementor-widget-button" data-id="1dbe9bd6" data-element_type="widget" data-settings="{&quot;_animation_mobile&quot;:&quot;fadeInDown&quot;,&quot;_transform_rotateZ_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_skewX_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_skewX_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_skewX_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_skewY_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_skewY_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_skewY_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a href="{{ url('experiences/restaurantpartners') }}" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                            <span class="elementor-button-content-wrapper">
                                                                <span class="elementor-button-icon elementor-align-icon-right">
                                                                    <i aria-hidden="true" class="fas fa-arrow-right"></i> </span>
                                                                <span class="elementor-button-text">FIND OUT MORE</span>
                                                            </span>
                                                        </a>
                                                    </div>
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
            <section class="elementor-section elementor-top-section elementor-element elementor-element-5e78120 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5e78120" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-72c797f" data-id="72c797f" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-65fdd33 elementor-align-left e-transform e-transform elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-button" data-id="65fdd33" data-element_type="widget" data-settings="{&quot;_animation_mobile&quot;:&quot;fadeInDown&quot;,&quot;_transform_rotateZ_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_skewX_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_skewX_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_skewX_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_skewY_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_skewY_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_skewY_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <a href="{{ url('experiences') }}" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                            <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-icon elementor-align-icon-right">
                                                    <i aria-hidden="true" class="fas fa-arrow-right"></i> </span>
                                                <span class="elementor-button-text">FIND OUT MORE</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1cf80c6" data-id="1cf80c6" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-20c1274 elementor-align-left e-transform e-transform elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-button" data-id="20c1274" data-element_type="widget" data-settings="{&quot;_animation_mobile&quot;:&quot;fadeInDown&quot;,&quot;_transform_rotateZ_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_skewX_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_skewX_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_skewX_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_skewY_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_skewY_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_skewY_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <a href="{{ url('experiences/restaurantpartners') }}" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                            <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-icon elementor-align-icon-right">
                                                    <i aria-hidden="true" class="fas fa-arrow-right"></i> </span>
                                                <span class="elementor-button-text">FIND OUT MORE</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- DESKTOP ORGANISER   -->
            <section class="elementor-section elementor-top-section elementor-element elementor-element-6a2f816f elementor-hidden-tablet elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6a2f816f" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5d232b34" data-id="5d232b34" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-215af3ce elementor-widget elementor-widget-heading" data-id="215af3ce" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h3 class="elementor-heading-title elementor-size-default">ORGANISERS</h3>
                                </div>
                            </div>
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-3539fc2d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3539fc2d" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-295d39b6" data-id="295d39b6" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-56563ed2 elementor-widget elementor-widget-image" data-id="56563ed2" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <figure class="wp-caption">
                                                        <img width="150" height="150" src="{{ asset('website/images/Group-631-300x300.png') }}" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" />
                                                        <figcaption class="widget-image-caption wp-caption-text"></figcaption>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-361f3b79" data-id="361f3b79" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-32650257 elementor-widget elementor-widget-image" data-id="32650257" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <figure class="wp-caption">
                                                        <img width="150" height="150" src="{{ asset('website/images/Group-632-300x300.png') }}" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" />
                                                        <figcaption class="widget-image-caption wp-caption-text"></figcaption>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1f8dd590" data-id="1f8dd590" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-31fea374 elementor-widget elementor-widget-image" data-id="31fea374" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <figure class="wp-caption">
                                                        <!--<img width="150" height="150" src="{{ asset('website/images/kanba-4-150x150.png') }}" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" srcset="{{ asset('website/images/kanba-4-150x150.png') }} 150w, https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/07/kanba-4-300x300.png 300w, https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/07/kanba-4-768x768.png 768w, https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/07/kanba-4.png 800w" sizes="(max-width: 150px) 100vw, 150px" />-->

                                                        <img width="150" height="150" src="{{ asset('website/images/124615762_3135858129852790_4650870520683041873_n-300x300.png') }}" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" />
                                                        <figcaption class="widget-image-caption wp-caption-text"></figcaption>
                                                    </figure>
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
            <section class="elementor-section elementor-top-section elementor-element elementor-element-6a2f816f elementor-hidden-tablet elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6a2f816f" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5d232b34" data-id="5d232b34" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-215af3ce elementor-widget elementor-widget-heading" data-id="215af3ce" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h3 class="elementor-heading-title elementor-size-default">OFFICIAL PARTNERS</h3>
                                </div>
                            </div>
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-3539fc2d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3539fc2d" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-295d39b6" data-id="295d39b6" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-56563ed2 elementor-widget elementor-widget-image" data-id="56563ed2" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <figure class="wp-caption">
                                                        <img width="150" height="150" src="{{ asset('website/images/kanba-150x150.png') }}" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" srcset="{{ asset('website/images/kanba-150x150.png') }} 150w, https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/07/kanba-300x300.png 300w, https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/07/kanba-768x768.png 768w, https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/07/kanba.png 800w" sizes="(max-width: 150px) 100vw, 150px" />
                                                        <figcaption class="widget-image-caption wp-caption-text"></figcaption>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-361f3b79" data-id="361f3b79" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-32650257 elementor-widget elementor-widget-image" data-id="32650257" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <figure class="wp-caption">
                                                        <img width="150" height="150" src="{{ asset('website/images/kanba-1-150x150.png') }}" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" srcset="{{ asset('website/images/kanba-1-150x150.png') }} 150w, https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/07/kanba-1-300x300.png 300w, https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/07/kanba-1-768x768.png 768w, https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/07/kanba-1.png 800w" sizes="(max-width: 150px) 100vw, 150px" />
                                                        <figcaption class="widget-image-caption wp-caption-text"></figcaption>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-4eb4ce42" data-id="4eb4ce42" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-65f5e51d elementor-widget elementor-widget-image" data-id="65f5e51d" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <figure class="wp-caption">
                                                        <img width="150" height="150" src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/3-logo-tigerbeer.png" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" style="width: 100px;padding-top: 30px;" />
                                                        <figcaption class="widget-image-caption wp-caption-text"></figcaption>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-52bcaafa" data-id="52bcaafa" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-67a399af elementor-widget elementor-widget-image" data-id="67a399af" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <figure class="wp-caption">
                                                        <img width="150" height="150" src="{{ asset('website/images/kanba-3-150x150.png') }}" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" srcset="{{ asset('website/images/kanba-3-150x150.png') }} 150w, https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/07/kanba-3-300x300.png 300w, https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/07/kanba-3-768x768.png 768w, https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/07/kanba-3.png 800w" sizes="(max-width: 150px) 100vw, 150px" />
                                                        <figcaption class="widget-image-caption wp-caption-text"></figcaption>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-1f8dd590" data-id="1f8dd590" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-31fea374 elementor-widget elementor-widget-image" data-id="31fea374" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <figure class="wp-caption">
                                                        <!--<img width="150" height="150" src="{{ asset('website/images/kanba-4-150x150.png') }}" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" srcset="{{ asset('website/images/kanba-4-150x150.png') }} 150w, https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/07/kanba-4-300x300.png 300w, https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/07/kanba-4-768x768.png 768w, https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/07/kanba-4.png 800w" sizes="(max-width: 150px) 100vw, 150px" />-->

                                                        <img width="150" height="150" src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/logo-ruhen-bigger-hd.png" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" />
                                                        <figcaption class="widget-image-caption wp-caption-text"></figcaption>
                                                    </figure>
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

            <!-- MOBILE ORGANISER SLIDER-->
            <section class="elementor-section elementor-top-section elementor-element elementor-element-3a37f89 elementor-hidden-desktop elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3a37f89" data-element_type="section" style="padding-bottom: 0px;">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a7c201e" data-id="a7c201e" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-54e93c3 elementor-widget elementor-widget-heading" data-id="54e93c3" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">ORGANISERS</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-6375a67 elementor-hidden-desktop elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6375a67" data-element_type="section" style="padding-bottom: 0px;">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a51a9a1" data-id="a51a9a1" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">


                            <div class="elementor-element elementor-element-a7a534f elementor-pagination-position-outside elementor-hidden-desktop elementor--h-position-center elementor--v-position-middle elementor-arrows-position-inside elementor-widget elementor-widget-slides" data-id="a7a534f" data-element_type="widget" data-settings="{&quot;navigation&quot;:&quot;both&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;infinite&quot;:&quot;yes&quot;,&quot;transition&quot;:&quot;slide&quot;,&quot;transition_speed&quot;:500}" data-widget_type="slides.default">

                                <div class="elementor-widget-container">
                                    <!-- <div class="container"> -->
                                    <div id="carouselExampleControls3" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner" style="padding-left: 80px;padding-right: 80px;">
                                            <div class="carousel-item active">
                                                <img src="{{ asset('website/images/Group-631-300x300.png') }}" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ asset('website/images/Group-632-300x300.png') }}" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/mojitologo.png" class="d-block w-100" alt="...">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls3" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls3" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </a>
                                    </div>
                                    <!-- slider mobile -->
                                    <style>
                                        /*! elementor-pro - v3.7.2 - 15-06-2022 */
                                        .elementor-slides .swiper-slide-bg {
                                            background-size: cover;
                                            background-position: 50%;
                                            background-repeat: no-repeat;
                                            min-width: 100%;
                                            min-height: 100%
                                        }

                                        .elementor-slides .swiper-slide-inner {
                                            background-repeat: no-repeat;
                                            background-position: 50%;
                                            position: absolute;
                                            top: 0;
                                            left: 0;
                                            bottom: 0;
                                            right: 0;
                                            padding: 50px;
                                            margin: auto
                                        }

                                        .elementor-slides .swiper-slide-inner,
                                        .elementor-slides .swiper-slide-inner:hover {
                                            color: #fff;
                                            display: -webkit-box;
                                            display: -ms-flexbox;
                                            display: flex
                                        }

                                        .elementor-slides .swiper-slide-inner .elementor-background-overlay {
                                            position: absolute;
                                            z-index: 0;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0
                                        }

                                        .elementor-slides .swiper-slide-inner .elementor-slide-content {
                                            position: relative;
                                            z-index: 1;
                                            width: 100%
                                        }

                                        .elementor-slides .swiper-slide-inner .elementor-slide-heading {
                                            font-size: 35px;
                                            font-weight: 700;
                                            line-height: 1
                                        }

                                        .elementor-slides .swiper-slide-inner .elementor-slide-description {
                                            font-size: 17px;
                                            line-height: 1.4
                                        }

                                        .elementor-slides .swiper-slide-inner .elementor-slide-description:not(:last-child),
                                        .elementor-slides .swiper-slide-inner .elementor-slide-heading:not(:last-child) {
                                            margin-bottom: 30px
                                        }

                                        .elementor-slides .swiper-slide-inner .elementor-slide-button {
                                            border: 2px solid #fff;
                                            color: #fff;
                                            background: transparent;
                                            display: inline-block
                                        }

                                        .elementor-slides .swiper-slide-inner .elementor-slide-button,
                                        .elementor-slides .swiper-slide-inner .elementor-slide-button:hover {
                                            background: transparent;
                                            color: inherit;
                                            text-decoration: none
                                        }

                                        .elementor--v-position-top .swiper-slide-inner {
                                            -webkit-box-align: start;
                                            -ms-flex-align: start;
                                            align-items: flex-start
                                        }

                                        .elementor--v-position-bottom .swiper-slide-inner {
                                            -webkit-box-align: end;
                                            -ms-flex-align: end;
                                            align-items: flex-end
                                        }

                                        .elementor--v-position-middle .swiper-slide-inner {
                                            -webkit-box-align: center;
                                            -ms-flex-align: center;
                                            align-items: center
                                        }

                                        .elementor--h-position-left .swiper-slide-inner {
                                            -webkit-box-pack: start;
                                            -ms-flex-pack: start;
                                            justify-content: flex-start
                                        }

                                        .elementor--h-position-right .swiper-slide-inner {
                                            -webkit-box-pack: end;
                                            -ms-flex-pack: end;
                                            justify-content: flex-end
                                        }

                                        .elementor--h-position-center .swiper-slide-inner {
                                            -webkit-box-pack: center;
                                            -ms-flex-pack: center;
                                            justify-content: center
                                        }

                                        body.rtl .elementor-widget-slides .elementor-swiper-button-next {
                                            left: 10px;
                                            right: auto
                                        }

                                        body.rtl .elementor-widget-slides .elementor-swiper-button-prev {
                                            right: 10px;
                                            left: auto
                                        }

                                        .elementor-slides-wrapper div:not(.swiper-slide)>.swiper-slide-inner {
                                            display: none
                                        }

                                        @media (max-width:767px) {
                                            .elementor-slides .swiper-slide-inner {
                                                padding: 30px
                                            }

                                            .elementor-slides .swiper-slide-inner .elementor-slide-heading {
                                                font-size: 23px;
                                                line-height: 1;
                                                margin-bottom: 15px
                                            }

                                            .elementor-slides .swiper-slide-inner .elementor-slide-description {
                                                font-size: 13px;
                                                line-height: 1.4;
                                                margin-bottom: 15px
                                            }
                                        }
                                    </style>
                                    <!-- old slider -->
                                    <!-- <div class="elementor-swiper">
                                        <div class="elementor-slides-wrapper elementor-main-swiper swiper-container" dir="ltr" data-animation="fadeInUp">
                                            <div class="swiper-wrapper elementor-slides">
                                                <div class="elementor-repeater-item-dd63b8f swiper-slide">
                                                    <div class="swiper-slide-bg"></div>
                                                    <div class="swiper-slide-inner">
                                                        <div class="swiper-slide-contents"></div>
                                                    </div>
                                                </div>
                                                <div class="elementor-repeater-item-9ef1718 swiper-slide">
                                                    <div class="swiper-slide-bg"></div>
                                                    <div class="swiper-slide-inner">
                                                        <div class="swiper-slide-contents"></div>
                                                    </div>
                                                </div>
                                                <div class="elementor-repeater-item-04ec9fc swiper-slide">
                                                    <div class="swiper-slide-bg"></div>
                                                    <div class="swiper-slide-inner">
                                                        <div class="swiper-slide-contents"></div>
                                                    </div>
                                                </div>
                                                <div class="elementor-repeater-item-1160a32 swiper-slide">
                                                    <div class="swiper-slide-bg"></div>
                                                    <div class="swiper-slide-inner">
                                                        <div class="swiper-slide-contents"></div>
                                                    </div>
                                                </div>
                                                <div class="elementor-repeater-item-0cddfcd swiper-slide">
                                                    <div class="swiper-slide-bg"></div>
                                                    <div class="swiper-slide-inner">
                                                        <div class="swiper-slide-contents"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-pagination"></div>
                                            <div class="elementor-swiper-button elementor-swiper-button-prev">
                                                <i aria-hidden="true" class="eicon-chevron-left"></i> <span class="elementor-screen-only">Previous</span>
                                            </div>
                                            <div class="elementor-swiper-button elementor-swiper-button-next">
                                                <i aria-hidden="true" class="eicon-chevron-right"></i> <span class="elementor-screen-only">Next</span>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-3a37f89 elementor-hidden-desktop elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3a37f89" data-element_type="section" style="padding-top: 20px;">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a7c201e" data-id="a7c201e" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-54e93c3 elementor-widget elementor-widget-heading" data-id="54e93c3" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">OFFICIAL PARTNERS</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-6375a67 elementor-hidden-desktop elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6375a67" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a51a9a1" data-id="a51a9a1" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">


                            <div class="elementor-element elementor-element-a7a534f elementor-pagination-position-outside elementor-hidden-desktop elementor--h-position-center elementor--v-position-middle elementor-arrows-position-inside elementor-widget elementor-widget-slides" data-id="a7a534f" data-element_type="widget" data-settings="{&quot;navigation&quot;:&quot;both&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;infinite&quot;:&quot;yes&quot;,&quot;transition&quot;:&quot;slide&quot;,&quot;transition_speed&quot;:500}" data-widget_type="slides.default">

                                <div class="elementor-widget-container">
                                    <!-- <div class="container"> -->
                                    <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner" style="padding-left: 80px;padding-right: 80px;">
                                            <div class="carousel-item active">
                                                <img src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/logo-nets.png" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/logo-uob.png" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/3-logo-tigerbeer-1.png" class="d-block w-100" alt="..." style="width:130px!important;height:auto">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/logo-kkday.png" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">

                                                <img src="https://www.staging.2vr360.online/sff_draft/v1/wp-content/uploads/2022/08/logo-ruhen-bigger-hd.png" class="d-block w-100" alt="...">
                                                <!--<img src="{{ asset('website/images/kanba-4-150x150.png') }}" class="d-block w-100" alt="...">-->
                                            </div>

                                        </div>
                                        <a class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </a>
                                    </div>
                                    <!-- slider mobile -->
                                    <style>
                                        /*! elementor-pro - v3.7.2 - 15-06-2022 */
                                        .elementor-slides .swiper-slide-bg {
                                            background-size: cover;
                                            background-position: 50%;
                                            background-repeat: no-repeat;
                                            min-width: 100%;
                                            min-height: 100%
                                        }

                                        .elementor-slides .swiper-slide-inner {
                                            background-repeat: no-repeat;
                                            background-position: 50%;
                                            position: absolute;
                                            top: 0;
                                            left: 0;
                                            bottom: 0;
                                            right: 0;
                                            padding: 50px;
                                            margin: auto
                                        }

                                        .elementor-slides .swiper-slide-inner,
                                        .elementor-slides .swiper-slide-inner:hover {
                                            color: #fff;
                                            display: -webkit-box;
                                            display: -ms-flexbox;
                                            display: flex
                                        }

                                        .elementor-slides .swiper-slide-inner .elementor-background-overlay {
                                            position: absolute;
                                            z-index: 0;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0
                                        }

                                        .elementor-slides .swiper-slide-inner .elementor-slide-content {
                                            position: relative;
                                            z-index: 1;
                                            width: 100%
                                        }

                                        .elementor-slides .swiper-slide-inner .elementor-slide-heading {
                                            font-size: 35px;
                                            font-weight: 700;
                                            line-height: 1
                                        }

                                        .elementor-slides .swiper-slide-inner .elementor-slide-description {
                                            font-size: 17px;
                                            line-height: 1.4
                                        }

                                        .elementor-slides .swiper-slide-inner .elementor-slide-description:not(:last-child),
                                        .elementor-slides .swiper-slide-inner .elementor-slide-heading:not(:last-child) {
                                            margin-bottom: 30px
                                        }

                                        .elementor-slides .swiper-slide-inner .elementor-slide-button {
                                            border: 2px solid #fff;
                                            color: #fff;
                                            background: transparent;
                                            display: inline-block
                                        }

                                        .elementor-slides .swiper-slide-inner .elementor-slide-button,
                                        .elementor-slides .swiper-slide-inner .elementor-slide-button:hover {
                                            background: transparent;
                                            color: inherit;
                                            text-decoration: none
                                        }

                                        .elementor--v-position-top .swiper-slide-inner {
                                            -webkit-box-align: start;
                                            -ms-flex-align: start;
                                            align-items: flex-start
                                        }

                                        .elementor--v-position-bottom .swiper-slide-inner {
                                            -webkit-box-align: end;
                                            -ms-flex-align: end;
                                            align-items: flex-end
                                        }

                                        .elementor--v-position-middle .swiper-slide-inner {
                                            -webkit-box-align: center;
                                            -ms-flex-align: center;
                                            align-items: center
                                        }

                                        .elementor--h-position-left .swiper-slide-inner {
                                            -webkit-box-pack: start;
                                            -ms-flex-pack: start;
                                            justify-content: flex-start
                                        }

                                        .elementor--h-position-right .swiper-slide-inner {
                                            -webkit-box-pack: end;
                                            -ms-flex-pack: end;
                                            justify-content: flex-end
                                        }

                                        .elementor--h-position-center .swiper-slide-inner {
                                            -webkit-box-pack: center;
                                            -ms-flex-pack: center;
                                            justify-content: center
                                        }

                                        body.rtl .elementor-widget-slides .elementor-swiper-button-next {
                                            left: 10px;
                                            right: auto
                                        }

                                        body.rtl .elementor-widget-slides .elementor-swiper-button-prev {
                                            right: 10px;
                                            left: auto
                                        }

                                        .elementor-slides-wrapper div:not(.swiper-slide)>.swiper-slide-inner {
                                            display: none
                                        }

                                        @media (max-width:767px) {
                                            .elementor-slides .swiper-slide-inner {
                                                padding: 30px
                                            }

                                            .elementor-slides .swiper-slide-inner .elementor-slide-heading {
                                                font-size: 23px;
                                                line-height: 1;
                                                margin-bottom: 15px
                                            }

                                            .elementor-slides .swiper-slide-inner .elementor-slide-description {
                                                font-size: 13px;
                                                line-height: 1.4;
                                                margin-bottom: 15px
                                            }
                                        }
                                    </style>
                                    <!-- old slider -->
                                    <!-- <div class="elementor-swiper">
                                        <div class="elementor-slides-wrapper elementor-main-swiper swiper-container" dir="ltr" data-animation="fadeInUp">
                                            <div class="swiper-wrapper elementor-slides">
                                                <div class="elementor-repeater-item-dd63b8f swiper-slide">
                                                    <div class="swiper-slide-bg"></div>
                                                    <div class="swiper-slide-inner">
                                                        <div class="swiper-slide-contents"></div>
                                                    </div>
                                                </div>
                                                <div class="elementor-repeater-item-9ef1718 swiper-slide">
                                                    <div class="swiper-slide-bg"></div>
                                                    <div class="swiper-slide-inner">
                                                        <div class="swiper-slide-contents"></div>
                                                    </div>
                                                </div>
                                                <div class="elementor-repeater-item-04ec9fc swiper-slide">
                                                    <div class="swiper-slide-bg"></div>
                                                    <div class="swiper-slide-inner">
                                                        <div class="swiper-slide-contents"></div>
                                                    </div>
                                                </div>
                                                <div class="elementor-repeater-item-1160a32 swiper-slide">
                                                    <div class="swiper-slide-bg"></div>
                                                    <div class="swiper-slide-inner">
                                                        <div class="swiper-slide-contents"></div>
                                                    </div>
                                                </div>
                                                <div class="elementor-repeater-item-0cddfcd swiper-slide">
                                                    <div class="swiper-slide-bg"></div>
                                                    <div class="swiper-slide-inner">
                                                        <div class="swiper-slide-contents"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-pagination"></div>
                                            <div class="elementor-swiper-button elementor-swiper-button-prev">
                                                <i aria-hidden="true" class="eicon-chevron-left"></i> <span class="elementor-screen-only">Previous</span>
                                            </div>
                                            <div class="elementor-swiper-button elementor-swiper-button-next">
                                                <i aria-hidden="true" class="eicon-chevron-right"></i> <span class="elementor-screen-only">Next</span>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div> <!-- ast-container -->
</div><!-- #content -->

<!-- Modal enter virtual  -->
<div class="modal hide fade" role="dialog" tabindex="-1" id="addUserModel">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color: #ffd2dc;">
            <div class="modal-header" style="border: none;">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body success hide">
                <div class="">


                    <p class="d-flex justify-content-center bolder" style="
    font-family:  Neue, sans-serif;
    text-transform: uppercase;
    color: #4C269F;
    font-size: 1.8em;
    text-align: center;
    ">
                        <b>To begin, please enter your email address&nbsp;</b>
                    </p>

                </div>

                <div class="formNewsletter">

                    <div class="py-3 d-flex justify-content-center ">
                        <input type="email" name="email" id="email" maxlength="32" style="
                                width: 90%;
                                padding: 10px;">
                    </div>
                    <div class="p-2" id="email_err" style="display: none; color:#ff0000; font-weight:bold">
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" id="btn-save" class="btn btn-lg d-flex justify-content-center mt-2" type="button" style="
                                background-color: #FF6E00;
                                padding-left: 50px;
                                padding-right: 50px;
                                color: white;
                                font-family: 'Fjalla One';
                                ">
                            CONTINUE
                        </button>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="{{ config('app.vr360_url') }}">Skip</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Newsletter Subscription -->
<div class="modal hide fade" role="dialog" tabindex="-1" id="NewsletterModal">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content" style="
                    background-color: #ffd2dc;
                    padding-left: 50px;
                    padding-right: 50px;
                    padding-top: 30px;
                    padding-bottom: 30px;">
            <div class="modal-header" style="border: none;">
                <!-- <h5 class="modal-title">Modal title</h5> -->
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                <button style="display: contents;">
                    <img data-bs-dismiss="modal" src="{{ asset('website/images/close.png') }}" alt="close" width="5%" height="5%" style="position: absolute; top: 2%; right: 2%; ">
                </button>
            </div>
            <div class="modal-body success hide">
                <div class="successNewsletter hide">
                    <div class="d-flex justify-content-center mb-4">
                        <img class="rounded mx-auto d-block" src="{{ asset('website/images/SFF-Logo22-black.png') }}" style="max-width: 30%; height: auto" />
                    </div>
                    <div class="d-flex justify-content-center">
                        <h4 class="modal-title" style="
                                color: #4C269F;
                                font-weight: 400;
                                font-size: 3.5em;
                                font-family: 'Neue';
                                ">
                            <b>SUCCESS</b>
                        </h4>
                    </div>
                    <div class="d-flex justify-content-center align-items-center mx-auto">
                        <img class="tick" style="

    position: relative;
    right: 7px;
" src="{{ asset('website/images/tick.png') }}" alt="tick" width="5%" height="5%">
                        <h5 style="
                        font-size: 1.15em;
                        padding-top: 6px;
                        font-weight: 400px;
                        font-family: 'Fjalla One';
                        text-transform: uppercase;
                        ">Get ready to live and breathe food, like really really good food.</h5>
                    </div>
                    <!-- <p class="d-flex justify-content-center py-4">
                         Get ready to live and breathe food, like really really good
                        food.&nbsp;
                    </p> -->
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-lg btn-primary d-flex justify-content-center" type="button" style="
                                background-color: #6E3CE1;
                                margin-top:20px;
                                padding-left: 50px;
                                padding-right: 50px;
                                font-family: 'Fjalla One';
                                border: none;
                                " onclick="resetModal()">
                            BACK TO HOME
                        </button>
                    </div>
                </div>

                <div class="formNewsletter">
                    <div class="d-flex justify-content-center">
                        <img class="rounded mx-auto d-block" src="{{ asset('website/images/SFF-Logo22-black.png') }}" style="max-width: 30%; height: auto" />
                    </div>
                    <div class="d-flex justify-content-center align-items-center mt-4">
                        <h4 style="
                                color: #4C269F;
                                font-weight: 500;
                                font-family: 'Neue';
                                text-align: center;
                                margin-top: 2%;
                                ">
                            <b>B</b><b>E A REAL FOODIE AND SUBSCRIBE TO GET THE MOST OUT OF</b>
                            <b>SINGAPORE FOOD FESTIVAL 2022!</b>
                        </h4>
                    </div>

                    <div class="d-flex justify-content-center " style="
                    padding-top:4px;
                    padding-right:4px;
                    padding-left:4px;
                    padding-bottom:0px;">
                        <input type="email" name="email" id="newsletter_email" maxlength="32" style="border-style: solid;
                                border-width: 1px;
                                border-color: red;
                                border-radius: 30px;
                                width: 100%;
                                margin: auto;
                                font-family: 'Roboto';
                                padding: 10px;
                                ">
                    </div>
                    <div class="p-2" id="email_err" style="display: none; color:#ff0000; font-weight:bold">
                    </div>
                    <div class="d-flex justify-content-start" style="
                    padding-top:4px;
                    padding-right:4px;
                    padding-left:4px;
                    padding-bottom:40px;">
                        <input type="checkbox" id="agree" name="agree" checked>
                        <label class="px-1" for="agree"><span style="color: red; font: Neue;
                            font-family: 'Fjalla One';font-style: italic;
                            ">
                                Yes, I consent to receiving emails related to Singapore Food Festival 2022.</span></label>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button id="newsletterSubmit" class="btn btn-lg d-flex justify-content-center" type="button">
                            SUBSCRIBE
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--
Event snippet for FR~Page Load _MK~SG_PC~SFF2022 Homepage on https://www.singaporefoodfestival.sg: Please do not remove.
Place this snippet on pages with events you’re tracking.
Creation date: 07/26/2022
-->
<script>
    gtag('event', 'conversion', {
        'allow_custom_scripts': true,
        'send_to': 'DC-6953330/im/frpag054+standard'
    });
</script>
<noscript>
    <img src="https://ad.doubleclick.net/ddm/activity/src=6953330;type=im;cat=frpag054;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;npa=;gdpr=${GDPR};gdpr_consent=${GDPR_CONSENT_755};ord=1?" width="1" height="1" alt="" />
</noscript>
<!-- End of event snippet: Please do not remove -->

@endsection

@section('page-scripts')

<script>
    $('div.successNewsletter').hide();

    var error_emailNewsletter = document.querySelector('#email_err');

    $(window).on('load', function() {
        $('#NewsletterModal').modal('show');
    });

    function resetModal() {
        $('#NewsletterModal').modal('hide');
        $('div.successNewsletter').hide();
        $('div.formNewsletter').show();
        $("#newsletter_email").val('');
        $('#agree').is(':checked');
    }

    $(document).ready(function() {

        $('body').on('click', '#btn-save', function(event) {
            var email = $("#email").val();
            var is_virtualmarketplace = true;
            var url = "{{ config('app.url') }}" + "/api/auth/login"
            var err_email = document.querySelector('#error_email')
            console.log(url)
            $("#btn-save").html('Please Wait...');
            $("#btn-save").attr("disabled", true);

            // TODO - Ajax validation
            if ($('#email').val() == '') {
                console.log('here');
            }

            $.ajax({
                type: "POST",
                url: url,
                header: {
                    'Access-Control-Allow-Origin': ' *'
                },
                data: {
                    "_token": "{{ csrf_token() }}",
                    email: email,
                    is_virtualmarketplace: is_virtualmarketplace
                },
                dataType: 'json',
                success: function(res) {
                    console.log(res);

                    if (res['token']) {
                        const link = "{{ config('app.vr360_url') }}/?u=" + res['token'];

                        const a = document.createElement("a");
                        a.setAttribute('href', link);
                        a.setAttribute('target', '_blank');
                        a.click();
                    } else {

                    }


                    $("#btn-save").html('Submit');
                    $("#btn-save").attr("disabled", false);
                },
                error: function(errors) {
                    $("#btn-save").html('Register');
                    $("#btn-save").attr("disabled", false);
                    $("#btn-save").attr("btn-primary", true);
                    $("#btn-save").attr("btn-success", false);

                    console.log(errors.status, 'errors.status')
                    if (errors.status == 200) {
                        err_email.style.display = 'none';
                        $("#btn-save").html('subscribed');
                        $("#btn-save").attr("disabled", true);
                        $("#btn-save").attr('style', 'border-color:#ff6600');
                        $("#btn-save").attr('style', 'color:#ff6600');
                        $("#btn-save").attr("btn-success", true);
                    } else {
                        // const link = 'http://sff.test/test01/;
                        const a = document.createElement("a");
                        a.setAttribute('href', link);
                        a.setAttribute('target', '_blank');
                        a.click();

                        err_email.style.display = 'block';
                        err_email.style.color = '#fff';
                        err_email.style.border = 'none';
                        // err_email.style.display = 'none';
                        if (errors.message) {
                            err_email.innerText = errors.message;
                        } else {
                            err_email.innerText = "The email must be a valid email address";
                        }
                    }
                }
            });
        });

        function resetForm() {
            $("#newsletterSubmit").attr("disabled", false);
            $("#newsletterSubmit").attr('style', 'color:white');
        }

        $('body').on('click', '#newsletterSubmit', function(event) {
            //check atleat 1 checkbox is checked
            //   var err_email = document.querySelector('#error_email_newsletter')
            //   const note = document.querySelector('#error_newsletter');
            if (!$('#agree').is(':checked')) {
                alert("You must agree to receive newsletter, updates and promotions.");

                resetForm();
            } else {
                var email = $("#newsletter_email").val();

                var token = "{{ csrf_token() }}";
                var formData = new FormData();
                formData.append('_token', token)
                formData.append('email', email)
                // $("#btn-save-newsletter").html('subscribed');
                $("#newsletterSubmit").attr("disabled", true);
                $("#newsletterSubmit").attr('style', 'border-color:#ff6600');
                $("#newsletterSubmit").attr('style', 'color:#ff6600');
                // $("#btn-save-newsletter").attr("btn-success", true);

                // TODO - Ajax validation
                if (email == '') {
                    // alert('You have to enter a valid email to subscribe to newsletter');

                    // resetForm();
                    error_emailNewsletter.style.display = 'block';
                    error_emailNewsletter.style.color = 'red';
                    error_emailNewsletter.style.border = 'none';
                    // error_emailNewsletter.style.display = 'none';
                    error_emailNewsletter.innerText = "The email must be a valid email address";

                    resetForm();
                } else {
                    $.ajax({
                        type: "POST",
                        url: "{{ route('newsletter') }}",
                        data: formData,
                        dataType: 'json',
                        processData: false,
                        contentType: false,
                        cache: false,
                        success: function(res) {
                            console.log(res);

                            if (res.status == 200) {
                                $('div.formNewsletter').hide('slow');
                                $('div.successNewsletter').show('slow');
                            }

                            resetForm();
                        },
                        error: function(errors) {
                            console.log(errors);

                            if (errors.status == 200) {
                                $('div.formNewsletter').hide('slow');
                                $('div.successNewsletter').show('slow');
                            } else {
                                error_emailNewsletter.style.display = 'block';
                                error_emailNewsletter.style.color = 'red';
                                error_emailNewsletter.style.border = 'none';
                                // error_emailNewsletter.style.display = 'none';
                                if (errors.message) {
                                    error_emailNewsletter.innerText = errors.message;
                                } else {
                                    error_emailNewsletter.innerText = "The email must be a valid email address";
                                }
                            }

                            resetForm();
                        }
                    });
                }

            }
        })

    });
</script>

@endsection
