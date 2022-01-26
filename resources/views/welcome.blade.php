@extends('Layout.master_layout')
@section('content')
    <style>
        .pix-news-high .backroundColor{
            background-color: #f0f0f0 !important;
        }
        h3{
            text-align: center;
        }
        .loginButton {
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            border: 1px solid #fff;
            padding: 16px 50px;
            border-radius: 4px;
            font-size: 16px;
            font-weight: 600;
        }
        .loginButton:hover,
        .loginButton:active,
        .loginButton:focus {
            background-color: #ffffff;
            transition: all .3s ease-in-out;
        }
    </style>

    <div id="page-preloader"><span class="circle"></span></div>
    <div class="wrapper layout animated-css page-layout-normal woo-layout-default">
        <header class="menu-mobile">
            <div class="row">
                <div class="col-12">
                    <div class="menu-mobile__header black">
                        <a class="navbar-brand scroll text-white" href="">Hackopedia</a>
                        <button class="hamburger hamburger--spring js-mobile-toggle" type="button"
                                onclick="this.classList.toggle('is-active');"><span class="hamburger-box"> <span
                                    class="hamburger-inner"></span> </span></button>

                    </div>
                    <div class="menu-mobile__list">
                        <div class="pix-mobile-menu-container">
                            <ul id="mobile-menu" class="menu">
                                <li id="menu-item-2786"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1952 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-2786 js-mobile-menu">
                                    <a title=" " href="">Home</a>
                                </li>
                                <li id="menu-item-2785"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2785 js-mobile-menu">
                                    <a title=" " href="">Services</a>
                                </li>
                                <li id="menu-item-3626"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3626 js-mobile-menu">
                                    <a href="">Subscription</a>
                                </li>
                                <li id="menu-item-4755"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4755"><a
                                        href="shop/index.html">About Us</a></li>
                                <li id="menu-item-4742"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4742 js-mobile-menu">
                                    <a href="">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="overlay"></div>
                    </div>
                </div>
            </div>
        </header>
        <header class="pix-header black transparent sticky header-topbar-view">
            <div class="pix-top-bar black transparent">
                <div class="container">
                    <div class="header-topbarbox-1">
                        <ul>
                            <li><i class="far fa-envelope"></i><a href="">info@hackopedia.com</a></li>
                            <li style="margin-left: 115px;"><i class="fas fa-map-marker-alt"></i>DHA – Phase 5,Block A,Lahore, 54792 Punjab</li>
                        </ul>
                    </div>
                    <div class="header-topbarbox-2"><span class="pix-header-phone text-muted"> <a href="#"><i
                                    class="fas fa-phone"></i><span style="color: #b1b1b1;">+92 308 1476701</span></a> </span>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="menu-logo">
                    <a class="navbar-brand scroll" href="" style="width:140px;max-width:140px;">
                        {{--                    <img class="pix-header-logo" src="{{asset('wp-content/themes/solutech/images/logo.svg')}}" alt="Logo"/>--}}
                        <h1 class="text-white" style="font-size: 26px;">Hackopedia</h1>
                    </a>
                </div>
                <nav class="pix-main-menu pix-text-center">
                    <ul id="menu-main" class="nav navbar-nav">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1952 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-2786 ">
                            <a title=" " href="">Home</a>

                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2785 ">
                            <a title=" " href="">Services</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4755"><a
                                href="">Subscription</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2787 ">
                            <a title=" " href="">About Us</a>
                        </li>

                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2775">
                            <a title="" href="">Contact Us</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="home-template">
            <div class="container pix-width-1300 pix-container-boxed">
                <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true"
                     class="vc_row wpb_row vc_row-fluid pix-top-no-padding pix-bottom-no-padding default vc_row-no-padding">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper"><p class="rs-p-wp-fix"></p>
                                <rs-module-wrap id="rev_slider_5_1_wrapper" data-source="gallery"
                                                style="background:#1e1e1e;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                                    <rs-module id="rev_slider_5_1" style="" data-version="6.4.2">
                                        <rs-slides>
                                            <rs-slide data-key="rs-10" data-title="Slide" data-anim="f:nodelay;"
                                                      data-filter="b:2;" data-in="o:0;sx:1.5;sy:1.2;m:true;col:6;"><img
                                                    src="{{asset('wp-content/uploads/2019/05/img1.jpg')}}" title="Home"
                                                    data-bg="p:center bottom;" data-panzoom="d:10000;ss:100;se:103%;"
                                                    class="rev-slidebg" data-no-retina>
                                                <p id="slider-5-slide-10-layer-6" class="rs-layer rs-selectable"
                                                   data-type="text" data-rsp_ch="on"
                                                   data-xy="x:c;y:m;yo:-27px,-41px,-39px,-100px;"
                                                   data-text="w:normal;s:45;l:50,50,50,45;fw:700;a:center;"
                                                   data-dim="w:573px,514px,514px,435px;" data-frame_0="rX:70deg;oZ:-50;"
                                                   data-frame_0_chars="d:5;y:cyc(-100||100);o:0;"
                                                   data-frame_1="oZ:-50;e:power4.inOut;sp:2050;"
                                                   data-frame_1_chars="e:power4.inOut;dir:middletoedge;d:10;"
                                                   data-frame_999="o:0;st:w;sR:3990;"
                                                   style="z-index:5;font-family:Jost !important;">Powered by EMRICON and Organized by ITU</p>


                                                <a href="https://itu-hackathon.ctfd.io/" target="_blank" class="loginButton">Register</a>

                                                <rs-layer id="slider-5-slide-10-layer-10" class="rs-selectable"
                                                          data-type="text" data-rsp_ch="on"
                                                          data-xy="x:c;y:m;yo:-129px,-141px,-140px,-200px;"
                                                          data-text="s:14;l:22;fw:400,700,700,700;a:inherit,inherit,center,center;"
                                                          data-padding="t:3;r:15;b:3;l:15;"
                                                          data-border="boc:#ffffff;bow:1px,1px,1px,1px;bor:20px,20px,20px,20px;"
                                                          data-frame_1="sp:2000;" data-frame_999="o:0;st:w;sR:5700;"
                                                          style="z-index:8;background-color:#216fff;font-family:Jost !important;">
                                                    Cyber Security Hackathon
                                                </rs-layer>
                                            </rs-slide>

                                            <rs-slide data-key="rs-16" data-title="Slide" data-anim="f:nodelay;"
                                                      data-filter="b:2;" data-in="o:0;sx:1.5;sy:1.2;m:true;col:6;"><img
                                                    src="{{asset('wp-content/uploads/2019/06/sla1.jpg')}}" title="sla1" width="2000"
                                                    height="1333" data-bg="p:center bottom;"
                                                    data-panzoom="d:10000;ss:100;se:102;" class="rev-slidebg"
                                                    data-no-retina>
                                                <p id="slider-5-slide-16-layer-6" class="rs-layer rs-selectable"
                                                   data-type="text" data-rsp_ch="on"
                                                   data-xy="x:c;y:m;yo:-27px,-41px,-39px,-100px;"
                                                   data-text="w:normal;s:45;l:50,50,50,45;fw:700;a:center;"
                                                   data-dim="w:573px,514px,514px,435px;" data-frame_0="rX:70deg;oZ:-50;"
                                                   data-frame_0_chars="d:5;y:cyc(-100||100);o:0;"
                                                   data-frame_1="oZ:-50;e:power4.inOut;sp:2050;"
                                                   data-frame_1_chars="e:power4.inOut;dir:middletoedge;d:10;"
                                                   data-frame_999="o:0;st:w;sR:3990;"
                                                   style="z-index:5;font-family:Jost !important;">Powered by EMRICON and Organized by ITU</p>
                                                <a href="https://itu-hackathon.ctfd.io/" target="_blank" class="loginButton">Register</a>

                                                <rs-layer id="slider-5-slide-16-layer-10" class="rs-selectable"
                                                          data-type="text" data-rsp_ch="on"
                                                          data-xy="x:c;xo:0,0,-8px,0;y:m;yo:-129px,-141px,-140px,-200px;"
                                                          data-text="s:14;l:22;fw:400,700,700,700;a:inherit,inherit,center,inherit;"
                                                          data-padding="t:3;r:15;b:3;l:15;"
                                                          data-border="boc:#ffffff;bow:1px,1px,1px,1px;bor:20px,20px,20px,20px;"
                                                          data-frame_1="sp:2000;" data-frame_999="o:0;st:w;sR:5700;"
                                                          style="z-index:8;background-color:#216fff;font-family:Jost !important;">
                                                    Cyber Security Hackathon
                                                </rs-layer>
                                            </rs-slide>
                                        </rs-slides>
                                    </rs-module>
                                    <script type="text/javascript">setREVStartSize({
                                            c: 'rev_slider_5_1',
                                            rl: [1240, 1024, 778, 480],
                                            el: [920, 920, 960, 720],
                                            gw: [1300, 1024, 778, 480],
                                            gh: [920, 920, 960, 720],
                                            type: 'standard',
                                            justify: '',
                                            layout: 'fullwidth',
                                            mh: "0"
                                        });
                                        var revapi5,
                                            tpj;

                                        function revinit_revslider51() {
                                            jQuery(function () {
                                                tpj = jQuery;
                                                revapi5 = tpj("#rev_slider_5_1");
                                                if (revapi5 == undefined || revapi5.revolution == undefined) {
                                                    revslider_showDoubleJqueryError("rev_slider_5_1");
                                                } else {
                                                    revapi5.revolution({
                                                        sliderLayout: "fullwidth",
                                                        duration: "6000ms",
                                                        visibilityLevels: "1240,1024,778,480",
                                                        gridwidth: "1300,1024,778,480",
                                                        gridheight: "920,920,960,720",
                                                        perspective: 600,
                                                        perspectiveType: "local",
                                                        editorheight: "920,920,960,720",
                                                        responsiveLevels: "1240,1024,778,480",
                                                        progressBar: {disableProgressBar: true},
                                                        navigation: {
                                                            onHoverStop: false
                                                        },
                                                        fallbacks: {
                                                            allowHTML5AutoPlayOnAndroid: true
                                                        },
                                                    });
                                                }

                                            });
                                        } // End of RevInitScript
                                        var once_revslider51 = false;
                                        if (document.readyState === "loading") {
                                            document.addEventListener('readystatechange', function () {
                                                if ((document.readyState === "interactive" || document.readyState === "complete") && !once_revslider51) {
                                                    once_revslider51 = true;
                                                    revinit_revslider51();
                                                }
                                            });
                                        } else {
                                            once_revslider51 = true;
                                            revinit_revslider51();
                                        }</script>
                                </rs-module-wrap>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row-full-width vc_clearfix"></div>
                <div
                    class="vc_row wpb_row vc_row-fluid pix-top-no-padding pix-bottom-no-padding pix-row-overflow pix-top-offset_345936697 pix-rounded pix_shadow_609611047">
                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill">
                        <div class="vc_column-inner pix-padding-top-xl pix-padding-bottom-xl vc_custom_1562770180110">
                            <div class="wpb_wrapper">
                                <div class="pix-section-title pix-l text-center default ">
                                    <h1 class="">What We Have</h1>
                                    <section class=" pix-gallery pix-service pix-bottom-info-container pix-global">
                                        <div class="row" data-col="3" data-gap="50" data-nav="dots">
                                            <div class="col-md-4">
                                                <div class="pix-news-high pix-overlay-container">
                                                    <div class="pix-box-img">
                                                        <a href="#">
                                                            <img width="650" height="434"
                                                                 src="wp-content/uploads/2019/04/Guided-labs.png"
                                                                 class="attachment-pixtheme-original-col-3 size-pixtheme-original-col-3 wp-post-image"
                                                                 alt="" loading="lazy"/>
                                                        </a>

                                                    </div>
                                                    <div class="news-card-centered__text"><h2>Guided Labs</h2>
                                                        <div class="text-center" >
                                                            <p class="">We have guided labs for the beginner.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="pix-news-high pix-overlay-container">
                                                    <div class="pix-box-img">
                                                        <a href="#">
                                                            <img width="650" height="434"
                                                                 src="wp-content/uploads/2019/04/jeopardy-style-challanges.png"
                                                                 class="attachment-pixtheme-original-col-3 size-pixtheme-original-col-3 wp-post-image"
                                                                 alt="" loading="lazy"/>
                                                        </a>

                                                    </div>
                                                    <div class="news-card-centered__text"><h2>Jeopardy style</h2>
                                                        <div class="text-center" >
                                                            <p class="">Boost your ctf skills with our jeopardy style labs. Where we have crypto,web,osint,forensics etc challnges</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="pix-news-high pix-overlay-container">
                                                    <div class="pix-box-img">
                                                        <a href="#">
                                                            <img width="650" height="434"
                                                                 src="wp-content/uploads/2019/04/boot-to-root-machines.png"
                                                                 class="attachment-pixtheme-original-col-3 size-pixtheme-original-col-3 wp-post-image"
                                                                 alt="" loading="lazy"/>
                                                        </a>

                                                    </div>
                                                    <div class="news-card-centered__text"><h2>Boot to root machines</h2>
                                                        <div class="text-center" >
                                                            <p class="" href="{{url('/upcoming')}}">We made scenarios like real life, where machine will be given and you have to access as root from boot</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-md-4">
                                                <div class="pix-news-high pix-overlay-container">
                                                    <div class="pix-box-img">
                                                        <a href="#">
                                                            <img width="650" height="434"
                                                                 src="wp-content/uploads/2019/04/point-and-ranking-system.png"
                                                                 class="attachment-pixtheme-original-col-3 size-pixtheme-original-col-3 wp-post-image"
                                                                 alt="" loading="lazy"/>
                                                        </a>

                                                    </div>
                                                    <div class="news-card-centered__text"><h2>Ranking and point system</h2>
                                                        <div class="text-center" >
                                                            <p class="">Be at the top by solving as many labs as you can</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="pix-news-high pix-overlay-container">
                                                    <div class="pix-box-img">
                                                        <a href="#">
                                                            <img width="650" height="434"
                                                                 src="wp-content/uploads/2019/04/certificates.png"
                                                                 class="attachment-pixtheme-original-col-3 size-pixtheme-original-col-3 wp-post-image"
                                                                 alt="" loading="lazy"/>
                                                        </a>

                                                    </div>
                                                    <div class="news-card-centered__text"><h2>Get certificate</h2>
                                                        <div class="text-center" >
                                                            <p class="">Earn certificate by completing the pathway.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="vc_row wpb_row vc_row-fluid pix-padding-top-xl pix-padding-bottom-xl default vc_row-o-equal-height vc_row-flex">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="pix-section-title pix-l text-center default pb-3">
                                        <h2 class="">Choose catagory and start learning</h2>
                                    </div>
                                    <div class="mb-4 row">
                                        <div class="col-md-4">
                                            <div class="pix-news-high pix-overlay-container">
                                                <div class="pix-box-img">
                                                    <a href="#">
                                                        <img width="650" height="434"
                                                             src="wp-content/uploads/2019/04/img18-650x434.jpg"
                                                             class="attachment-pixtheme-original-col-3 size-pixtheme-original-col-3 wp-post-image"
                                                             alt="" loading="lazy"/>
                                                    </a>

                                                </div>
                                                <div class="news-card-centered__text"><h3>OFFENSIVE SECURITY PATH</h3>
                                                    <div class="text-center" >
                                                        <a class="btn btn-md btn-primary" href="{{url('/upcoming')}}">Start Module</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="pix-news-high pix-overlay-container">
                                                <div class="pix-box-img"><a
                                                        href="">
                                                        <img width="650" height="434"
                                                             src="wp-content/uploads/2019/04/img26-650x434.jpg"
                                                             class="attachment-pixtheme-original-col-3 size-pixtheme-original-col-3 wp-post-image"
                                                             alt="" loading="lazy"/> </a>
                                                </div>
                                                <div class="news-card-centered__text"><h3>DEFENSIVE CHALLENGES</h3>
                                                    <div class="text-center" >
                                                        <a class="btn btn-md btn-primary" href="{{url('/upcoming')}}">Start Module</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="pix-news-high pix-overlay-container">
                                                <div class="pix-box-img"><a
                                                        href="">
                                                        <img width="650" height="434"
                                                             src="wp-content/uploads/2019/04/img31-1-650x434.jpg"
                                                             class="attachment-pixtheme-original-col-3 size-pixtheme-original-col-3 wp-post-image"
                                                             alt="" loading="lazy"/> </a>
                                                </div>
                                                <div class="news-card-centered__text"><h3>JEOPARDT CALLENGES</h3>
                                                    <div class="text-center" >
                                                        <a class="btn btn-md btn-primary" href="{{url('/upcoming')}}">Start Module</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="pix-news-high pix-overlay-container">
                                                <div class="pix-box-img">
                                                    <a href="#">
                                                        <img width="650" height="434"
                                                             src="{{asset('wp-content/uploads/2019/04/img58-650x433.jpg')}}"
                                                             class="attachment-pixtheme-original-col-3 size-pixtheme-original-col-3 wp-post-image"
                                                             alt="" loading="lazy"/>
                                                    </a>

                                                </div>
                                                <div class="news-card-centered__text"><h3>WEB EXPLOITATION</h3>
                                                    <div class="text-center" >
                                                        <a class="btn btn-md btn-primary" href="{{url('/upcoming')}}">Start Module</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="pix-news-high pix-overlay-container">
                                                <div class="pix-box-img"><a
                                                        href="">
                                                        <img width="650" height="434"
                                                             src="{{asset('wp-content/uploads/2019/04/img57-650x430.jpg')}}"
                                                             class="attachment-pixtheme-original-col-3 size-pixtheme-original-col-3 wp-post-image"
                                                             alt="" loading="lazy"/> </a>
                                                </div>
                                                <div class="news-card-centered__text"><h3>ANDROID EXPLOITATION</h3>
                                                    <div class="text-center" >
                                                        <a class="btn btn-md btn-primary" href="{{url('/upcoming')}}">Start Module</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="pix-news-high pix-overlay-container">
                                                <div class="pix-box-img"><a
                                                        href="">
                                                        <img width="650" height="434"
                                                             src="{{asset('wp-content/uploads/2019/04/img25-650x434.jpg')}}"
                                                             class="attachment-pixtheme-original-col-3 size-pixtheme-original-col-3 wp-post-image"
                                                             alt="" loading="lazy"/> </a>
                                                </div>
                                                <div class="news-card-centered__text"><h3>BOOT TO ROOT MACHINES</h3>
                                                    <div class="text-center" >
                                                        <a class="btn btn-md btn-primary" href="{{url('/upcoming')}}" target="_blank">Start Module</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="vc_row-full-width vc_clearfix"></div>
                    <div data-vc-full-width="true" data-vc-full-width-init="false"
                         class="vc_row wpb_row vc_row-fluid pix-padding-top-xl pix-padding-bottom-xl default vc_custom_1562771349885 vc_row-has-fill" style="padding-top: 10px;padding-bottom: 20px !important;">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <h1 class="text-center">Our Partners</h1>
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="owl-carousel owl-theme pix-tablet-carousel-off pix-mobile-carousel-off "
                                         data-owl-options='{"items":"4","dots":true,"nav":false,"loop":true,"margin":50,"stagePadding":2,"navSpeed":900,"dotsSpeed":900,"autoplay":false,"autoplaySpeed":"1000","autoWidth":false,"responsiveClass":true,"responsive":{"0":{"items":1,"margin":0,"stagePadding":0,"autoWidth":false},"576":{"items":2,"margin":0,"stagePadding":0,"autoWidth":false},"1025":{"items":4,"margin":50,"stagePadding":2,"autoWidth":false}},"navText":["&lt;i class=\"fas fa-chevron-left\"&gt;&lt;\/i&gt;","&lt;i class=\"fas fa-chevron-right\"&gt;&lt;\/i&gt;"]}'>

                                        <div class="pix-box pix-global pix-no-padding ">
                                            <div class="pix-ibox-top pix-text-left">
                                                <div class="pix-block-content">
                                                    <div class="transparent pix-icon-l pix-icon-color pix-icon-bg-main-color ">
                                                        <div class="icon"><img
                                                                src="https://emriconconsulting.com/wp-content/uploads/2021/08/584817d6cef1014c0b5e4999.png"
                                                                alt="Complete Confidentiality"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pix-box pix-global pix-no-padding">
                                            <div class="pix-ibox-top pix-text-left">
                                                <div class="pix-block-content">
                                                    <div class="transparent pix-icon-l pix-icon-color pix-icon-bg-main-color ">
                                                        <div class="icon"><img src="https://emriconconsulting.com/wp-content/uploads/2021/08/FireEye-Logo.wine_.png"
                                                                               alt="Complete Confidentiality"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="pix-box pix-global pix-no-padding">
                                            <div class="pix-ibox-top pix-text-left">
                                                <div class="pix-block-content">
                                                    <div class="transparent pix-icon-l pix-icon-color pix-icon-bg-main-color ">
                                                        <div class="icon"><img src="https://emriconconsulting.com/wp-content/uploads/2021/08/6009e2e6bb19a70004b7c424.png"
                                                                               alt="Full Device Protection"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pix-box pix-global pix-no-padding ">
                                            <div class="pix-ibox-top pix-text-left">
                                                <div class="pix-block-content">
                                                    <div class="transparent pix-icon-l pix-icon-color pix-icon-bg-main-color ">
                                                        <div class="icon"><img src="https://emriconconsulting.com/wp-content/uploads/2021/08/586aae661fdce414493f5101.png"
                                                                               alt="Remote Housing Monitoring"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row-full-width vc_clearfix"></div>


                    <div class="vc_row-full-width vc_clearfix"></div>

                            <div class="row mt-4">
                                <div class="col-lg-6 thumb bg-cover">
                                    <img src="https://emriconconsulting.com/wp-content/uploads/2021/08/alex-kotliarskyi-ourQHRTE2IM-unsplash-scaled-1.jpeg" width="500px" height="300px">
                                </div>
                                <div class="col-lg-6 info">
                                    <div class="row"><div class="col-lg-6 col-md-6 item">
                                            <h4>Our Mission</h4>
                                            <h2 class="text-blur">Mission</h2>
                                            <p>
                                                Our mission at Hacktopedia is to help create a better and more secure world by facilitating a more thorough assessment of an organization’s IT security.
                                            </p></div><div class="col-lg-6 col-md-6 item">
                                            <h4>Our Vision</h4>
                                            <h2 class="text-blur">Vision</h2>
                                            <p>
                                                Our vision at Hactopedia is to help create a better and more secure world with the help of our internationally certified team of professionals.
                                            </p></div></div>
                                </div>
                            </div>

                    <div data-vc-full-width="true" data-vc-full-width-init="false"
                         class="vc_row wpb_row vc_row-fluid pix-top-no-padding pix-padding-bottom-xl default vc_column-gap-25 vc_row-o-content-top vc_row-flex">
                    </div>
                    <div class="vc_row-full-width vc_clearfix"></div>
                </div>
            </div>
            <footer class="pix-footer">
                <div class="container pix-width-1300 pix-container-boxed">
                    <script>jQuery(function ($) {
                            $("head").append("<style>.vc_custom_1563271159658{background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1561025340338{padding-bottom: 10px !important;background-color: #f8f8f8 !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1560869692187{background-color: #ffffff !important;}.vc_custom_1567012506450{margin-bottom: 2em !important;}</style>");
                        });</script>
                    <div
                        class="vc_row wpb_row vc_row-fluid pix-top-no-padding pix-bottom-no-padding pix-row-overflow pix-top-offset_1090613584 pix-rounded pix_shadow_1362665624 vc_custom_1563271159658 vc_row-has-fill">
                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill">
                            <div class="vc_column-inner pix-padding-top-l pix-padding-bottom-m vc_custom_1560869692187">
                                <div class="wpb_wrapper">
                                    <div
                                        class="vc_row wpb_row vc_inner vc_row-fluid pix-top-no-padding pix-bottom-no-padding default">
                                        <div class="wpb_column vc_column_container vc_col-sm-4">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div
                                                        class="wpb_single_image wpb_content_element vc_align_center wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp vc_custom_1567012506450 pix-retina" style="margin-bottom: 0px !important;">
                                                        <figure class="wpb_wrapper vc_figure">
                                                            <div class="vc_single_image-wrapper vc_box_border_grey">
                                                                <h1 class="mt-0" style="font-size: 25px;">Hackopedia</h1>
                                                            </div>
                                                        </figure>
                                                    </div>
                                                    <div class="vc_empty_space" style="height: 15px"><span
                                                            class="vc_empty_space_inner"></span></div>
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper"><p style="text-align: center;">Our aim at Hackopedia is to help create a better and more secure world with the help of our internationally certified team of professionals.</p></div>
                                                    </div>
                                                    <div class="pix-wrap">
                                                        <div
                                                            class="pix_icon_element vc_icon_element vc_icon_element-outer vc_icon_element-align-center">
                                                            <div
                                                                class="vc_icon_element-inner vc_icon_element-color-grey vc_icon_element-size-xs vc_icon_element-style- vc_icon_element-background-color-grey">
                                                                <a class="vc_icon_element-link" href="" title=""
                                                                   target="_self"><span
                                                                        class="vc_icon_element-icon fa fa-facebook"></span></a>
                                                            </div>
                                                            <div class="vc_icon_content"></div>
                                                        </div>
                                                        <div
                                                            class="pix_icon_element vc_icon_element vc_icon_element-outer vc_icon_element-align-center">
                                                            <div
                                                                class="vc_icon_element-inner vc_icon_element-color-grey vc_icon_element-size-xs vc_icon_element-style- vc_icon_element-background-color-grey">
                                                                <a class="vc_icon_element-link" href="" title=""
                                                                   target="_self"><span
                                                                        class="vc_icon_element-icon fa fa-twitter"></span></a>
                                                            </div>
                                                            <div class="vc_icon_content"></div>
                                                        </div>
                                                        <div
                                                            class="pix_icon_element vc_icon_element vc_icon_element-outer vc_icon_element-align-center">
                                                            <div
                                                                class="vc_icon_element-inner vc_icon_element-color-grey vc_icon_element-size-xs vc_icon_element-style- vc_icon_element-background-color-grey">
                                                                <a class="vc_icon_element-link" href="" title=""
                                                                   target="_self"><span
                                                                        class="vc_icon_element-icon fa fa-linkedin"></span></a>
                                                            </div>
                                                            <div class="vc_icon_content"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-4">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div
                                                        class="pix-section-title pix-s pix-title-no-padding text-center default animated wow fadeInUp"
                                                        data-animation="fadeInUp" data-wow-duration="1s"><h2
                                                            class="pix-title-h2 ">Menu</h2></div>
                                                    <div class="vc_empty_space" style="height: 22px"><span
                                                            class="vc_empty_space_inner"></span></div>
                                                    <div
                                                        class="vc_wp_custommenu wpb_content_element pix-no-sign pix-col-2 pix-text-center">
                                                        <div class="widget widget_nav_menu">
                                                            <div class="menu-footer-container">
                                                                <ul id="menu-footer" class="menu">
                                                                    <li id="menu-item-3089"
                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1952 current_page_item menu-item-3089">
                                                                        <a href="" aria-current="page">Home</a></li>
                                                                    <li id="menu-item-2777"
                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2777">
                                                                        <a title=" " href="">About Us</a>
                                                                    </li>
                                                                    <li id="menu-item-2778"
                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2778">
                                                                        <a title=" " href="">Services</a></li>
                                                                    <li id="menu-item-3092"
                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3092">
                                                                        <a href="">Subscription</a></li>
                                                                    <li id="menu-item-2779"
                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2779">
                                                                        <a title=" " href="">Contact Us</a>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-4">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div
                                                        class="pix-section-title pix-s pix-title-no-padding text-center default animated wow fadeInUp"
                                                        data-animation="fadeInUp" data-wow-duration="1s"><h2
                                                            class="pix-title-h2 ">Contacts</h2></div>
                                                    <div class="vc_empty_space" style="height: 20px"><span
                                                            class="vc_empty_space_inner"></span></div>
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper"><h5 style="text-align: center;"><a
                                                                    href="tel:81003645787"> +92 308 1476701
                                                                </a></h5>
                                                            <p style="text-align: center;">
                                                                <span style="color: #000000;">DHA – Phase 5, Block A, Lahore, 54792 Punjab, Pakistan</span>
                                                            </p>
                                                            <p style="text-align: center;"><a href="">info@hackopedia.com</a>
                                                            </p></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-vc-full-width="true" data-vc-full-width-init="false"
                         class="vc_row wpb_row vc_row-fluid pix-padding-top-m pix-bottom-no-padding default vc_custom_1561025340338 vc_row-has-fill">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper"><p style="text-align: center;"><span
                                                    style="color: #000000;"><strong>2022 © Hackopedia.</strong></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row-full-width vc_clearfix"></div>
                </div>
            </footer>
        </div>

@endsection
