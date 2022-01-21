@extends('Layout.master_layout')
@section('content')
    <style>
        .pix-news-high .news-card-centered__text {
            background-color: #f0f0f0 !important;
        }
    </style>

<div id="page-preloader"><span class="circle"></span></div>
<div class="wrapper layout animated-css page-layout-normal woo-layout-default">
    <header class="menu-mobile ">
        <div class="row">
            <div class="col-12">
                <div class="menu-mobile__header black"><a class="navbar-brand scroll" href="index.html"> <img
                            class="normal-logo" src="{{asset('wp-content/themes/solutech/images/logo-w.svg')}}" alt="Logo"/> </a>
                    <button class="hamburger hamburger--spring js-mobile-toggle" type="button"
                            onclick="this.classList.toggle('is-active');"><span class="hamburger-box"> <span
                                class="hamburger-inner"></span> </span></button>
                    <div class="cart-container"><a href="cart/index.html">
                            <div class="pix-cart-items"><i class="fas fa-shopping-basket"></i> <span
                                    class="pix-cart-count">0</span></div>
                        </a></div>
                </div>
                <div class="menu-mobile__list">
                    <div class="pix-mobile-menu-container">
                        <ul id="mobile-menu" class="menu">
                            <li id="menu-item-2786"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1952 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-2786 js-mobile-menu">
                                <a title=" " href="index.html">Home</a>
                                <ul class="mobile-submenu">
                                    <li id="menu-item-4970"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1952 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-4970 js-mobile-menu">
                                        <a href="index.html">Cyber security</a>
                                        <ul class="mobile-submenu">
                                            <li id="menu-item-4979"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1952 current_page_item menu-item-4979">
                                                <a href="index.html">Home 1</a></li>
                                            <li id="menu-item-4980"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4980">
                                                <a href="digital/index.html">Home 2</a></li>
                                            <li id="menu-item-4971"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4971">
                                                <a href="home-2/index.html">Home 3</a></li>
                                            <li id="menu-item-4976"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4976">
                                                <a href="home-7/index.html">Home 4</a></li>
                                            <li id="menu-item-4981"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4981">
                                                <a href="defender/index.html">Home 5</a></li>
                                            <li id="menu-item-4982"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4982">
                                                <a href="defender/home-2/index.html">Home 6</a></li>
                                            <li id="menu-item-5176"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5176">
                                                <a href="digital/home-2/index.html">Home 7</a></li>
                                            <li id="menu-item-5238"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5238">
                                                <a href="home-12/index.html">Home 8</a></li>
                                            <li id="menu-item-5391"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5391">
                                                <a href="home-13/index.html">Home 9</a></li>
                                            <li id="menu-item-5705"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5705">
                                                <a href="home-16/index.html">Home 10 + Calculator</a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-4983"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4983 js-mobile-menu">
                                        <a href="home-5/index.html">CCTV security</a>
                                        <ul class="mobile-submenu">
                                            <li id="menu-item-4974"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4974">
                                                <a href="home-5/index.html">Home 1</a></li>
                                            <li id="menu-item-4977"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4977">
                                                <a href="home-8/index.html">Home 2</a></li>
                                            <li id="menu-item-4972"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4972">
                                                <a href="home-3/index.html">Home 3</a></li>
                                            <li id="menu-item-5322"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5322">
                                                <a href="home-11/index.html">Home 4</a></li>
                                            <li id="menu-item-5169"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5169">
                                                <a href="home-10/index.html">Home 5</a></li>
                                            <li id="menu-item-5455"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5455">
                                                <a href="home-14/index.html">Home 6</a></li>
                                            <li id="menu-item-5664"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5664">
                                                <a href="home-15/index.html">Home 7 + Calculator</a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-4984"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4984 js-mobile-menu">
                                        <a href="home-6/index.html">Bodyguard</a>
                                        <ul class="mobile-submenu">
                                            <li id="menu-item-4978"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4978">
                                                <a href="home-9/index.html">Home 1</a></li>
                                            <li id="menu-item-4973"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4973">
                                                <a href="home-4/index.html">Home 2</a></li>
                                            <li id="menu-item-4975"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4975">
                                                <a href="home-6/index.html">Home 3</a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-4985"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4985">
                                        <a href="preview/index.html">All in one page</a></li>
                                </ul>
                            </li>
                            <li id="menu-item-2785"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2785 js-mobile-menu">
                                <a title=" " href="our-services/index.html">Services</a>
                                <ul class="mobile-submenu">
                                    <li id="menu-item-5068"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5068">
                                        <a href="our-services/services-carousel/index.html">Services carousel</a></li>
                                    <li id="menu-item-5077"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5077">
                                        <a href="our-services/services-1/index.html">Services 1</a></li>
                                    <li id="menu-item-5054"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5054">
                                        <a href="our-services/services-2/index.html">Services 2</a></li>
                                    <li id="menu-item-5053"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5053">
                                        <a href="our-services/services-3/index.html">Services 3</a></li>
                                </ul>
                            </li>
                            <li id="menu-item-3626"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3626 js-mobile-menu">
                                <a href="projects/index.html">Projects</a>
                                <ul class="mobile-submenu">
                                    <li id="menu-item-5065"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5065">
                                        <a href="projects/projects-1/index.html">Projects 1</a></li>
                                    <li id="menu-item-5057"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5057">
                                        <a href="projects/projects-2/index.html">Projects 2</a></li>
                                    <li id="menu-item-5056"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5056">
                                        <a href="projects/projects-3/index.html">Projects 3</a></li>
                                    <li id="menu-item-5061"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5061">
                                        <a href="projects/projects-4/index.html">Projects 4</a></li>
                                </ul>
                            </li>
                            <li id="menu-item-4755"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4755"><a
                                    href="shop/index.html">Shop</a></li>
                            <li id="menu-item-4742"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4742 js-mobile-menu">
                                <a href="booking/index.html">Pages</a>
                                <ul class="mobile-submenu">
                                    <li id="menu-item-2774"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2774">
                                        <a title=" " href="about-us/index.html">About Us</a></li>
                                    <li id="menu-item-5654"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5654">
                                        <a href="calculator/index.html">Calculator</a></li>
                                    <li id="menu-item-4743"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4743">
                                        <a href="booking/index.html">Booking</a></li>
                                    <li id="menu-item-4783"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4783">
                                        <a href="team/index.html">Team</a></li>
                                    <li id="menu-item-4744"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4744 js-mobile-menu">
                                        <a href="elements/index.html">Elements</a>
                                        <ul class="mobile-submenu">
                                            <li id="menu-item-4746"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4746">
                                                <a href="elements/icons/index.html">Icons</a></li>
                                            <li id="menu-item-4747"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4747">
                                                <a href="elements/isotope/index.html">Isotope</a></li>
                                            <li id="menu-item-4750"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4750">
                                                <a href="elements/services/index.html">Services</a></li>
                                            <li id="menu-item-4748"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4748">
                                                <a href="elements/post-block/index.html">Post block</a></li>
                                            <li id="menu-item-4745"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4745">
                                                <a href="elements/buttons/index.html">Buttons</a></li>
                                            <li id="menu-item-4749"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4749">
                                                <a href="elements/reviews-block/index.html">Reviews-block</a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-4751"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4751 js-mobile-menu">
                                        <a href="projects/index.html">Portfolio</a>
                                        <ul class="mobile-submenu">
                                            <li id="menu-item-4754"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4754">
                                                <a href="projects/projects-4/index.html">Portfolio 1</a></li>
                                            <li id="menu-item-4753"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4753">
                                                <a href="projects/projects-2/index.html">Portfolio 2</a></li>
                                            <li id="menu-item-4752"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4752">
                                                <a href="projects/projects-3/index.html">Portfolio 3</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li id="menu-item-2787"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2787 js-mobile-menu">
                                <a title=" " href="prices/index.html">Prices</a>
                                <ul class="mobile-submenu">
                                    <li id="menu-item-5045"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5045">
                                        <a href="prices/index.html">Prices 1</a></li>
                                    <li id="menu-item-5046"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5046">
                                        <a href="prices/prices-2/index.html">Prices 2</a></li>
                                    <li id="menu-item-5047"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5047">
                                        <a href="prices/prices-3/index.html">Prices 3</a></li>
                                </ul>
                            </li>
                            <li id="menu-item-2773"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2773"><a
                                    title=" " href="blog/index.html">Blog</a></li>
                            <li id="menu-item-2775"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2775"><a
                                    title=" " href="contacts/index.html">Contacts</a></li>
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
                        <li><i class="far fa-envelope"></i><a href="mailto:info@solutech.com">info@heackopedia.com</a></li>
                        <li><i class="fas fa-map-marker-alt"></i>DHA – Phase 5,Block A,Lahore, 54792 Punjab</li>
                    </ul>
                </div>
                <div class="header-topbarbox-2"><span class="pix-header-phone text-muted"> <a href="#"><i
                                class="fas fa-phone"></i><span>+92 308 1476701</span></a> </span>
                    <ul class="header-socials">
                        <li class="header-social-link"><a href="#" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a></li>
                        <li class="header-social-link"><a href="#" target="_blank"><i
                                    class="fab fa-twitter"></i></a></li>
                        <li class="header-social-link"><a href="#" target="_blank"><i
                                    class="fab fa-youtube"></i></a></li>
                        <li class="header-social-link"><a href="#" target="_blank"><i
                                    class="fab fa-github"></i></a></li>
                        <li class="header-social-link"><a href="#" target="_blank"><i
                                    class="fab fa-linkedin"></i></a></li>
                    </ul>
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
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1952 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-2786 arrow">
                        <a title=" " href="">Home</a>
                        <ul class="submenu js-menu">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1952 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-4970 arrow">
                                <a href="">Cyber security</a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4983 arrow">
                                <a href="">CCTV security</a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4984 arrow">
                                <a href="">Bodyguard</a>
                            </li>

                        </ul>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2785 ">
                        <a title=" " href="">Services</a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4755"><a
                            href="">Shop</a></li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2787 ">
                        <a title=" " href="">Prices</a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2773"><a title=" "
                                                                                                           href="">Blog</a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2775"><a title=" "
                                                                                                           href="">Contacts</a>
                    </li>
                </ul>
            </nav>
{{--            <nav>--}}
{{--                <ul class="main-menu-elements">--}}
{{--                    <li class="pix-header-phone"><a href="tel:+81003545787"><i class="fas fa-phone"></i><span>+ 8 100 354 57 87</span></a>--}}
{{--                    </li>--}}
{{--                    <li class="cart"><a href="cart/index.html">--}}
{{--                            <div class="pix-cart-items"><i class="fas fa-shopping-basket"></i> <span--}}
{{--                                    class="pix-cart-count">0</span></div>--}}
{{--                        </a></li>--}}
{{--                </ul>--}}
{{--            </nav>--}}
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
                                               style="z-index:5;font-family:Jost !important;">Protect yourself and your
                                                business online</p>
                                            <rs-layer id="slider-5-slide-10-layer-8" class="rev-btn rs-selectable"
                                                      data-type="button" data-color="rgba(255,255,255,1)"
                                                      data-xy="x:c;xo:113px,113px,0,0;y:m;yo:95px,70px,79px,20px;"
                                                      data-text="s:18,18,17,17;l:12,12,17,17;fw:600,600,500,500;a:inherit;"
                                                      data-rsp_bd="off" data-padding="t:22;r:45;b:22;l:45;"
                                                      data-border="bor:4px,4px,4px,4px;" data-frame_1="sp:2000;"
                                                      data-frame_999="o:0;st:w;sR:5700;"
                                                      data-frame_hover="c:#000;bgc:#fff;boc:#000;bor:4px,4px,4px,4px;bos:solid;oX:50;oY:50;"
                                                      style="z-index:6;background-color:#216fff;font-family:Jost;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                                                Join us
                                            </rs-layer>
                                            <rs-layer id="slider-5-slide-10-layer-9" class="rev-btn rs-selectable"
                                                      data-type="button" data-color="rgba(255,255,255,1)"
                                                      data-xy="x:c;xo:-111px,-114px,-609px,-338px;y:m;yo:95px,71px,75px,24px;"
                                                      data-text="s:18,18,17,17;l:12,12,17,17;fw:600,600,500,500;a:inherit,inherit,inherit,center;"
                                                      data-rsp_bd="off" data-padding="t:21;r:50;b:21;l:50;"
                                                      data-border="bos:solid;boc:#ffffff;bow:1px,1px,1px,1px;bor:4px,4px,4px,4px;"
                                                      data-frame_1="sp:2000;" data-frame_999="o:0;st:w;sR:5700;"
                                                      data-frame_hover="c:#000;bgc:#fff;boc:rgba(0,0,0,0);bor:4px,4px,4px,4px;bos:solid;bow:1px,1px,1px,1px;oX:50;oY:50;"
                                                      style="z-index:7;background-color:rgba(50,115,234,0);font-family:Jost;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                                                Login
                                            </rs-layer>
                                            <rs-layer id="slider-5-slide-10-layer-10" class="rs-selectable"
                                                      data-type="text" data-rsp_ch="on"
                                                      data-xy="x:c;y:m;yo:-129px,-141px,-140px,-200px;"
                                                      data-text="s:14;l:22;fw:400,700,700,700;a:inherit,inherit,center,center;"
                                                      data-padding="t:3;r:15;b:3;l:15;"
                                                      data-border="boc:#ffffff;bow:1px,1px,1px,1px;bor:20px,20px,20px,20px;"
                                                      data-frame_1="sp:2000;" data-frame_999="o:0;st:w;sR:5700;"
                                                      style="z-index:8;background-color:#216fff;font-family:Jost !important;">
                                                Cyber Security Company
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
                                               style="z-index:5;font-family:Jost !important;">A team of professionals to
                                                protect your privacy</p>
                                            <rs-layer id="slider-5-slide-16-layer-8" class="rev-btn rs-selectable"
                                                      data-type="button" data-color="rgba(255,255,255,1)"
                                                      data-xy="x:c;xo:113px,113px,102px,0;y:m;yo:95px,70px,79px,125px;"
                                                      data-text="s:18,18,17,17;l:12,12,17,17;fw:600,600,500,500;a:inherit;"
                                                      data-rsp_bd="off" data-padding="t:22;r:45;b:22;l:45;"
                                                      data-border="bor:4px,4px,4px,4px;" data-frame_1="sp:2000;"
                                                      data-frame_999="o:0;st:w;sR:5700;"
                                                      data-frame_hover="c:#000;bgc:#fff;boc:#000;bor:4px,4px,4px,4px;bos:solid;oX:50;oY:50;"
                                                      style="z-index:6;background-color:#216fff;font-family:Jost;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                                                Join us
                                            </rs-layer>
                                            <rs-layer id="slider-5-slide-16-layer-9" class="rev-btn rs-selectable"
                                                      data-type="button" data-color="rgba(255,255,255,1)"
                                                      data-xy="x:c;xo:-111px,-114px,-114px,0;y:m;yo:95px,71px,78px,25px;"
                                                      data-text="s:18,18,17,17;l:12,12,17,17;fw:600,600,500,500;a:inherit,inherit,inherit,center;"
                                                      data-rsp_bd="off" data-padding="t:21;r:50;b:21;l:50;"
                                                      data-border="bos:solid;boc:#ffffff;bow:1px,1px,1px,1px;bor:4px,4px,4px,4px;"
                                                      data-frame_1="sp:2000;" data-frame_999="o:0;st:w;sR:5700;"
                                                      data-frame_hover="c:#000;bgc:#fff;boc:rgba(0,0,0,0);bor:4px,4px,4px,4px;bos:solid;bow:1px,1px,1px,1px;oX:50;oY:50;"
                                                      style="z-index:7;background-color:rgba(50,115,234,0);font-family:Jost;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                                                Login
                                            </rs-layer>
                                            <rs-layer id="slider-5-slide-16-layer-10" class="rs-selectable"
                                                      data-type="text" data-rsp_ch="on"
                                                      data-xy="x:c;xo:0,0,-8px,0;y:m;yo:-129px,-141px,-140px,-200px;"
                                                      data-text="s:14;l:22;fw:400,700,700,700;a:inherit,inherit,center,inherit;"
                                                      data-padding="t:3;r:15;b:3;l:15;"
                                                      data-border="boc:#ffffff;bow:1px,1px,1px,1px;bor:20px,20px,20px,20px;"
                                                      data-frame_1="sp:2000;" data-frame_999="o:0;st:w;sR:5700;"
                                                      style="z-index:8;background-color:#216fff;font-family:Jost !important;">
                                                Professional Team
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
                            <section class="pix-carousel pix-gallery pix-service pix-bottom-info-container pix-global">
                                <div class="pix-gallery-slider owl-carousel" data-col="3" data-gap="50" data-nav="dots">
                                    <div
                                        class="pix-gallery-item pix-bottom-info pix-service pix-overlay-container security-applications antiviral-app">
                                        <div class="pix-box-img"><a href="" class="pix-image-link">
                                                <div class="pix-overlay "></div>
                                                <div class="pix-img-wrapper"><img width="650" height="430"
                                                                                  src="{{asset('wp-content/uploads/2019/04/img57-650x430.jpg')}}"
                                                                                  class="img-responsive wp-post-image"
                                                                                  alt="" loading="lazy"/></div>
                                            </a>

                                        </div>
                                        <div class="pix-box-name">
                                            <a class="pix-title-link" href="">Guided Labs</a>
                                            <p class="text-muted font-weight-normal">We have guided labs for the beginner.</p>
                                        </div>
                                    </div>
                                    <div
                                        class="pix-gallery-item pix-bottom-info pix-service pix-overlay-container security-applications protection-app">
                                        <div class="pix-box-img"><a href=""
                                                                    class="pix-image-link">
                                                <div class="pix-overlay "></div>
                                                <div class="pix-img-wrapper"><img width="650" height="433"
                                                                                  src="{{asset('wp-content/uploads/2019/04/img40-650x433.jpg')}}"
                                                                                  class="img-responsive wp-post-image"
                                                                                  alt="" loading="lazy"/></div>
                                            </a>
                                        </div>
                                        <div class="pix-box-name">
                                            <a class="pix-title-link" href="">Jeopardy style</a>
                                            <p class="text-muted font-weight-normal">Boost your ctf skills with our jeopardy style labs. Where we have crypto,web,osint,forensics etc challnges</p>
                                        </div>
                                    </div>
                                    <div
                                        class="pix-gallery-item pix-bottom-info pix-service pix-overlay-container control-applications protection-app">
                                        <div class="pix-box-img"><a href=""
                                                                    class="pix-image-link">
                                                <div class="pix-overlay "></div>
                                                <div class="pix-img-wrapper"><img width="650" height="433"
                                                                                  src="{{asset('wp-content/uploads/2019/04/img58-650x433.jpg')}}"
                                                                                  class="img-responsive wp-post-image"
                                                                                  alt="" loading="lazy"/></div>
                                            </a>
                                        </div>
                                        <div class="pix-box-name">
                                            <a class="pix-title-link" href="">Boot to root machines</a>
                                            <p class="text-muted font-weight-normal">We made scenarios like real life, where machine will be given and you have to access as root from boot
                                            </p>
                                        </div>
                                    </div>
                                    <div
                                        class="pix-gallery-item pix-bottom-info pix-service pix-overlay-container control-applications mobile-app">
                                        <div class="pix-box-img">
                                            <a href="" class="pix-image-link">
                                                <div class="pix-overlay "></div>
                                                <div class="pix-img-wrapper"><img width="650" height="434"
                                                                                  src="{{asset('wp-content/uploads/2019/04/img25-650x434.jpg')}}"
                                                                                  class="img-responsive wp-post-image"
                                                                                  alt="" loading="lazy"/></div>
                                            </a>
                                        </div>
                                        <div class="pix-box-name">
                                            <a class="pix-title-link" href="">Ranking and point system</a>
                                            <p class="text-muted font-weight-normal">Be at the top by solving as many labs as you can</p>
                                        </div>
                                    </div>
                                    <div
                                        class="pix-gallery-item pix-bottom-info pix-service pix-overlay-container antiviral-app mobile-app">
                                        <div class="pix-box-img"><a href="services/mobile-security-system/index.html"
                                                                    class="pix-image-link">
                                                <div class="pix-overlay "></div>
                                                <div class="pix-img-wrapper"><img width="650" height="433"
                                                                                  src="wp-content/uploads/2019/04/img11-650x433.jpg"
                                                                                  class="img-responsive wp-post-image"
                                                                                  alt="" loading="lazy"/></div>
                                            </a>
                                        </div>
                                        <div class="pix-box-name"><a class="pix-title-link" href="">Get certificate</a>
                                            <p class="text-muted font-weight-normal">Earn certificate by completing the pathway.</p>
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
                                                    <a class="btn btn-md btn-primary" href="#">Start Module</a>
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
                                                    <a class="btn btn-md btn-primary" href="#">Start Module</a>
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
                                                    <a class="btn btn-md btn-primary" href="#">Start Module</a>
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
                                                    <a class="btn btn-md btn-primary" href="#">Start Module</a>
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
                                                    <a class="btn btn-md btn-primary" href="#">Start Module</a>
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
                                                    <a class="btn btn-md btn-primary" href="#">Start Module</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="vc_row wpb_row vc_row-fluid pix-padding-top-xl pix-padding-bottom-xl default vc_row-o-equal-height vc_row-flex pt-0">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="pix-section-title pix-l text-center default pb-3 mb-2">
                                    <h2 class="">Improving Global Cyber Security Posture</h2>
                                    <p>Aims to Build World Largest Cyber Security Community 1500+ Challenges Learning Skill Development and Build Career </p>
                                </div>
                                <div class="mb-4 row">
                                    <div class="col-md-6 mb-3">
                                        <div class="pix-news-high pix-overlay-container">
                                            <div class="">

                                            </div>
                                            <div class="news-card-centered__text" style="border-top: 1px solid #f0f0f0 !important;"><h3 class="text-center">OFFENSIVE SECURITY CHALLENGES</h3>
                                                <div class="text-center" >
                                                    <a class="btn btn-md btn-primary py-1 px-5" href="#">Join</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <div class="pix-news-high pix-overlay-container">
                                            <div class="pix-box-img">
                                            </div>
                                            <div class="news-card-centered__text" style="border-top: 1px solid #f0f0f0 !important;"><h3 class="text-center">CTF/HAKATHON</h3>
                                                <div class="text-center" >
                                                    <a class="btn btn-md btn-primary py-1 px-5" href="#">Join</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <div class="pix-news-high pix-overlay-container">
                                            <div class="pix-box-img">
                                            </div>
                                                <div class="news-card-centered__text" style="border-top: 1px solid #f0f0f0 !important;"><h3 class="text-center">DEFENSIVE SECURITY CHALLENGES</h3>

                                                    <p class="text-center"style="font-size: 13px;padding-bottom:10px;">Blue Team</p>
                                                <div class="text-center" >
                                                    <a class="btn btn-md btn-primary py-1 px-5" href="#">Join</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-6 mb-3">
                                        <div class="pix-news-high pix-overlay-container">
                                            <div class="pix-box-img">
                                            </div>
                                            <div class="news-card-centered__text" style="border-top: 1px solid #f0f0f0 !important; "><h3 class="text-center">COMPLIANCE</h3>
                                                <p class="text-center"style="font-size: 13px;padding-bottom:10px;">Assessments</p>
                                                <div class="text-center" >
                                                    <a class="btn btn-md btn-primary py-1 px-5" href="#">Join</a>
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
                    <h1 class="text-center">Our Partner</h1>
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
            <div
                class="vc_row wpb_row vc_row-fluid pix-top-no-padding pix-bottom-no-padding pix-row-overflow pix-top-offset_1600211667 pix-rounded pix_shadow_1688436472">
                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill">
                </div>
            </div>
            <div class="vc_row wpb_row vc_row-fluid pix-padding-top-xl pix-padding-bottom-xl default vc_row-o-equal-height vc_row-flex" style="padding-bottom: 0px;">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="row">
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
                                                                class="vc_icon_element-icon fa fa-github"></span></a>
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
                                                                <a title=" " href="">Blog</a></li>
                                                            <li id="menu-item-3092"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3092">
                                                                <a href="">Prices</a></li>
                                                            <li id="menu-item-2779"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2779">
                                                                <a title=" " href="">Contacts</a>
                                                            </li>
                                                            <li id="menu-item-3091"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3091">
                                                                <a href="">Services</a></li>
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
                                                    <p style="text-align: center;"><a href="mailto:info@solutech.com">info@heackopedia.com</a>
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
