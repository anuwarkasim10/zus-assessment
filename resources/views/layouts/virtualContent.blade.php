<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
     <meta name="viewport" id="metaViewport" content="user-scalable=no, initial-scale=1, width=device-width, viewport-fit=cover, maximum-scale=1" data-tdv-general-scale="1.0" />
  <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title')</title>
  <!-- Scripts -->
  <!-- <script src="{{-- asset('js/app.js') --}}" defer></script> -->

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->

  <meta name="robots" content="noindex, nofollow" />
  <link rel="dns-prefetch" href="//fonts.googleapis.com" />
  <link rel="dns-prefetch" href="//s.w.org" />
  <link rel="alternate" type="application/rss+xml" title="SINGAPORE FOOD FESTIVAL &raquo; Feed" href="https://www.staging.2vr360.online/sff_draft/v1/feed/" />
  <link rel="alternate" type="application/rss+xml" title="SINGAPORE FOOD FESTIVAL &raquo; Comments Feed" href="https://www.staging.2vr360.online/sff_draft/v1/comments/feed/" />

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


  <!-- Ajax  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>

  <!-- Alertify Bootstrap theme -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />

  <!-- jquery-cookie js -->

  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js">
  </script>
  <!-- Alertify js -->
  
  <!-- Moment js -->
  <script src="https://cdn.jsdelivr.net/npm/moment@2.29.4/moment.min.js"></script>

  <!-- International Phone -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
  <script>
    window._wpemojiSettings = {
      baseUrl: "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
      ext: ".png",
      svgUrl: "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
      svgExt: ".svg",
      source: {
        concatemoji: "https:\/\/www.staging.2vr360.online\/sff_draft\/v1\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.0.1",
      },
    };
    /*! This file is auto-generated */
    !(function(e, a, t) {
      var n,
        r,
        o,
        i = a.createElement("canvas"),
        p = i.getContext && i.getContext("2d");

      function s(e, t) {
        var a = String.fromCharCode,
          e =
          (p.clearRect(0, 0, i.width, i.height),
            p.fillText(a.apply(this, e), 0, 0),
            i.toDataURL());
        return (
          p.clearRect(0, 0, i.width, i.height),
          p.fillText(a.apply(this, t), 0, 0),
          e === i.toDataURL()
        );
      }

      function c(e) {
        var t = a.createElement("script");
        (t.src = e),
        (t.defer = t.type = "text/javascript"),
        a.getElementsByTagName("head")[0].appendChild(t);
      }
      for (
        o = Array("flag", "emoji"),
        t.supports = {
          everything: !0,
          everythingExceptFlag: !0
        },
        r = 0; r < o.length; r++
      )
        (t.supports[o[r]] = (function(e) {
          if (!p || !p.fillText) return !1;
          switch (
            ((p.textBaseline = "top"), (p.font = "600 32px Arial"), e)
          ) {
            case "flag":
              return s(
                  [127987, 65039, 8205, 9895, 65039],
                  [127987, 65039, 8203, 9895, 65039]
                ) ?
                !1 :
                !s(
                  [55356, 56826, 55356, 56819],
                  [55356, 56826, 8203, 55356, 56819]
                ) &&
                !s(
                  [
                    55356, 57332, 56128, 56423, 56128, 56418, 56128,
                    56421, 56128, 56430, 56128, 56423, 56128, 56447,
                  ],
                  [
                    55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418,
                    8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128,
                    56423, 8203, 56128, 56447,
                  ]
                );
            case "emoji":
              return !s(
                [129777, 127995, 8205, 129778, 127999],
                [129777, 127995, 8203, 129778, 127999]
              );
          }
          return !1;
        })(o[r])),
        (t.supports.everything = t.supports.everything && t.supports[o[r]]),
        "flag" !== o[r] &&
        (t.supports.everythingExceptFlag =
          t.supports.everythingExceptFlag && t.supports[o[r]]);
      (t.supports.everythingExceptFlag =
        t.supports.everythingExceptFlag && !t.supports.flag),
      (t.DOMReady = !1),
      (t.readyCallback = function() {
        t.DOMReady = !0;
      }),
      t.supports.everything ||
        ((n = function() {
            t.readyCallback();
          }),
          a.addEventListener ?
          (a.addEventListener("DOMContentLoaded", n, !1),
            e.addEventListener("load", n, !1)) :
          (e.attachEvent("onload", n),
            a.attachEvent("onreadystatechange", function() {
              "complete" === a.readyState && t.readyCallback();
            })),
          (e = t.source || {}).concatemoji ?
          c(e.concatemoji) :
          e.wpemoji && e.twemoji && (c(e.twemoji), c(e.wpemoji)));
    })(window, document, window._wpemojiSettings);
  </script>

  <style id="elementor-icons-inline-css">
    .elementor-add-new-section .elementor-add-templately-promo-button {
      background-color: #5d4fff;
      background-image: url(https://www.staging.2vr360.online/sff_draft/v1/wp-content/plugins/essential-addons-for-elementor-lite/assets/admin/images/templately/logo-icon.svg);
      background-repeat: no-repeat;
      background-position: center center;
      margin-left: 5px;
      position: relative;
      bottom: 5px;
    }
  </style>

  <style>
    img.wp-smiley,
    img.emoji {
      display: inline !important;
      border: none !important;
      box-shadow: none !important;
      height: 1em !important;
      width: 1em !important;
      margin: 0 0.07em !important;
      vertical-align: -0.1em !important;
      background: none !important;
      padding: 0 !important;
    }
  </style>



  {{-- Include core + vendor Styles --}}
  @include('website/styles')

  <script>
    /* <![CDATA[ */
    var rcewpp = {
      ajax_url: "https://www.staging.2vr360.online/sff_draft/v1/wp-admin/admin-ajax.php",
      nonce: "f4d515eff8",
      home_url: "https://www.staging.2vr360.online/sff_draft/v1/",
      settings_icon: "https://www.staging.2vr360.online/sff_draft/v1/wp-content/plugins/export-wp-page-to-static-html-pro-premium/admin/images/settings.png",
      settings_hover_icon: "https://www.staging.2vr360.online/sff_draft/v1/wp-content/plugins/export-wp-page-to-static-html-pro-premium/admin/images/settings_hover.png",
    };
    /* ]]\> */
  </script>
  <!--[if IE]>
      <script src="./js/flexibility.min.js" id="astra-flexibility-js"></script>
      <script id="astra-flexibility-js-after">
        flexibility(document.documentElement);
      </script>
    <![endif]-->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


  <!-- <script src="{{ asset('website/js/jquery.min.js') }}" id="jquery-core-js"></script> -->
  <!-- <script src="{{ asset('website/js/jquery-migrate.min.js') }}" id="jquery-migrate-js"></script> -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.22.0/axios.min.js" integrity="sha512-m2ssMAtdCEYGWXQ8hXVG4Q39uKYtbfaJL5QMTbhl2kc6vYyubrKHhr6aLLXW4ITeXSywQLn1AhsAaqrJl8Acfg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <meta name="robots" content="noindex, nofollow" />
  <link rel="dns-prefetch" href="//fonts.googleapis.com" />
  <link rel="dns-prefetch" href="//s.w.org" />
  <link rel="alternate" type="application/rss+xml" title="SINGAPORE FOOD FESTIVAL &raquo; Feed" href="https://www.staging.2vr360.online/sff_draft/v1/feed/" />
  <link rel="alternate" type="application/rss+xml" title="SINGAPORE FOOD FESTIVAL &raquo; Comments Feed" href="https://www.staging.2vr360.online/sff_draft/v1/comments/feed/" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="{{ asset('website/js/export-wp-page-to-static-html-public.js') }}" id="export-wp-page-to-static-html-js"></script>
  <link rel="https://api.w.org/" href="https://www.staging.2vr360.online/sff_draft/v1/wp-json/" />
  <link rel="alternate" type="application/json" href="https://www.staging.2vr360.online/sff_draft/v1/wp-json/wp/v2/pages/364" />
  <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.staging.2vr360.online/sff_draft/v1/xmlrpc.php?rsd" />
  <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://www.staging.2vr360.online/sff_draft/v1/wp-includes/wlwmanifest.xml" />
  <meta name="generator" content="WordPress 6.0.1" />
  <link rel="canonical" href="./index.html" />
  <link rel="shortlink" href="https://www.staging.2vr360.online/sff_draft/v1/?p=364" />
  <link rel="alternate" type="application/json+oembed" href="https://www.staging.2vr360.online/sff_draft/v1/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.staging.2vr360.online%2Fsff_draft%2Fv1%2Fexperiences%2F" />
  <link rel="alternate" type="text/xml+oembed" href="https://www.staging.2vr360.online/sff_draft/v1/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.staging.2vr360.online%2Fsff_draft%2Fv1%2Fexperiences%2F&#038;format=xml" />
</head>

@if (Request::path() == 'experiences')

<body itemtype="https://schema.org/WebPage" itemscope="itemscope" class="page-template-default page page-id-364 wp-custom-logo ast-single-post ast-inherit-site-logo-transparent ast-hfb-header ast-desktop ast-page-builder-template ast-no-sidebar astra-3.8.5 ast-full-width-primary-header elementor-default elementor-template-full-width elementor-kit-18 elementor-page elementor-page-364">

  @elseif (Request::path() == 'fringe-events')

  <body itemtype="https://schema.org/WebPage" itemscope="itemscope" class="page-template-default page page-id-442 wp-custom-logo ast-single-post ast-inherit-site-logo-transparent ast-hfb-header ast-desktop ast-page-builder-template ast-no-sidebar astra-3.8.5 ast-full-width-primary-header elementor-default elementor-template-full-width elementor-kit-18 elementor-page elementor-page-442">

    @elseif (Request::path() == 'onlinemasterclass')

    <body itemtype="https://schema.org/WebPage" itemscope="itemscope" class="page-template-default page page-id-432 wp-custom-logo ast-single-post ast-inherit-site-logo-transparent ast-hfb-header ast-desktop ast-page-builder-template ast-no-sidebar astra-3.8.5 ast-full-width-primary-header elementor-default elementor-template-full-width elementor-kit-18 elementor-page elementor-page-432">

      @elseif (Request::path() == 'onlinemasterclass/daniel-sia')

      <body itemtype="https://schema.org/WebPage" itemscope="itemscope" class="page-template-default page page-id-1182 wp-custom-logo ast-single-post ast-inherit-site-logo-transparent ast-hfb-header ast-desktop ast-page-builder-template ast-no-sidebar astra-3.8.5 ast-full-width-primary-header elementor-default elementor-template-full-width elementor-kit-18 elementor-page elementor-page-1182">

        @elseif (Request::path() == 'virtualmarketplace')

        <body itemtype="https://schema.org/WebPage" itemscope="itemscope" class="page-template-default page page-id-354 wp-custom-logo ast-single-post ast-inherit-site-logo-transparent ast-hfb-header ast-desktop ast-page-builder-template ast-no-sidebar astra-3.8.5 ast-full-width-primary-header elementor-default elementor-template-full-width elementor-kit-18 elementor-page elementor-page-354">

          @elseif (Request::path() == 'experiences/workshops')

          <body itemtype="https://schema.org/WebPage" itemscope="itemscope" class="page-template-default page page-id-1520 wp-custom-logo ast-single-post ast-inherit-site-logo-transparent ast-hfb-header ast-desktop ast-page-builder-template ast-no-sidebar astra-3.8.5 ast-full-width-primary-header elementor-default elementor-template-full-width elementor-kit-18 elementor-page elementor-page-1520">

            @elseif (Request::path() == 'experiences/workshops/chocolate-appreciation')

            <body itemtype="https://schema.org/WebPage" itemscope="itemscope" class="page-template-default page page-id-1528 wp-custom-logo ast-single-post ast-inherit-site-logo-transparent ast-hfb-header ast-desktop ast-page-builder-template ast-no-sidebar astra-3.8.5 ast-full-width-primary-header elementor-default elementor-template-full-width elementor-kit-18 elementor-page elementor-page-1528">

              @elseif (Request::path() == 'experiences/tours')

              <body itemtype="https://schema.org/WebPage" itemscope="itemscope" class="page-template-default page page-id-1407 wp-custom-logo ast-single-post ast-inherit-site-logo-transparent ast-hfb-header ast-desktop ast-page-builder-template ast-no-sidebar astra-3.8.5 ast-full-width-primary-header elementor-default elementor-template-full-width elementor-kit-18 elementor-page elementor-page-1407">

                @elseif (Request::path() == 'experiences/tours/brass-lion-ginspired')

                <body itemtype="https://schema.org/WebPage" itemscope="itemscope" class="page-template-default page page-id-1426 wp-custom-logo ast-single-post ast-inherit-site-logo-transparent ast-hfb-header ast-desktop ast-page-builder-template ast-no-sidebar astra-3.8.5 ast-full-width-primary-header elementor-default elementor-template-full-width elementor-kit-18 elementor-page elementor-page-1426">

                  @elseif (Request::path() == 'experiences/restaurantpartners')

                  <body itemtype="https://schema.org/WebPage" itemscope="itemscope" class="page-template-default page page-id-440 wp-custom-logo ast-single-post ast-inherit-site-logo-transparent ast-hfb-header ast-desktop ast-page-builder-template ast-no-sidebar astra-3.8.5 ast-full-width-primary-header elementor-default elementor-template-full-width elementor-kit-18 elementor-page elementor-page-440">

                    @elseif (Request::path() == 'stories')

                    <body itemtype="https://schema.org/WebPage" itemscope="itemscope" class="page-template-default page page-id-1667 wp-custom-logo ast-single-post ast-inherit-site-logo-transparent ast-hfb-header ast-desktop ast-page-builder-template ast-no-sidebar astra-3.8.5 ast-full-width-primary-header elementor-default elementor-template-full-width elementor-kit-18 elementor-page elementor-page-1667">

                      @elseif (Request::path() == 'festivalvillage')

                      <body itemtype="https://schema.org/WebPage" itemscope="itemscope" class="page-template-default page page-id-1748 wp-custom-logo ast-single-post ast-inherit-site-logo-transparent ast-hfb-header ast-desktop ast-page-builder-template ast-no-sidebar astra-3.8.5 ast-full-width-primary-header elementor-default elementor-template-full-width elementor-kit-18 elementor-page elementor-page-1748">

                        @else

                        <body itemtype="https://schema.org/WebPage" itemscope="itemscope" class="home page-template-default page page-id-1913 wp-custom-logo ast-single-post ast-inherit-site-logo-transparent ast-hfb-header ast-desktop ast-page-builder-template ast-no-sidebar astra-3.8.5 ast-full-width-primary-header elementor-default elementor-template-full-width elementor-kit-18 elementor-page elementor-page-1913">

                          @endif

                          <div class="hfeed site" id="page">

                            <!--  headers !cannot be shared with each pages -->


                            <!-- Main Content -->
                            @yield('WebContent')

                            <!-- @yield('SingleProductContent') -->


                          </div>
                          <!-- @stack('body-scripts') -->

                          @include('website/scripts')

                        </body>

                        <!-- <script src="{{ asset('website/js/jquery.min.js') }}" id="jquery-core-js">
        </script> -->
                        <!-- <script src="{{ asset('website/js/jquery-migrate.min.js') }}" id="jquery-migrate-js"></script> -->

</html>
