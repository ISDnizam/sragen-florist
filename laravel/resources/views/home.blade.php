<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="robots" content="all,index,follow">
        <meta name="description" content="Sragen florist atau Toko Bunga  Sragen merupakan sebuah Toko menjual berbagai macam keperluan anda yang berkaitan dengan rangkaian bunga/florist." />
        <meta name="robots" content="index, follow" />
        <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
        <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
        <meta property="og:locale" content="id_ID" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Toko bunga sragen" />
        <meta property="og:description" content="Sragen florist atau Toko Bunga  Sragen merupakan sebuah Toko menjual berbagai macam keperluan anda yang berkaitan dengan rangkaian bunga/florist." />
        <meta property="og:url" content="https://sragenflorist.com" />


        <link rel="shortcut icon" href="https://anpsthemes.com/florist/wp-content/uploads/2015/09/favicon.png" type="image/x-icon" />
        <title>Toko Bunga Sragen - Sragen Florist</title>
        <link rel="stylesheet" id="theme_core_style-css" href="/assets/css/core.css?ver=4.9.3" type="text/css" media="all" />
        <link rel="stylesheet" id="theme_wordpress_style-css" href="/assets/css/wordpress.css?ver=4.9.3" type="text/css" media="all" />
        <link rel="stylesheet" id="custom-css" href="/assets/css/custom.css?ver=4.9.3" type="text/css" media="all" />

        <link rel="stylesheet" id="font_type_1-css" href="https://fonts.googleapis.com/css?family=Roboto+Slab%3A400italic%2C400%2C600%2C700%2C300&#038;subset=latin&#038;ver=4.9.3" type="text/css" media="all" />
        <link rel="stylesheet" id="font_type_2-css" href="https://fonts.googleapis.com/css?family=PT+Sans%3A400italic%2C400%2C600%2C700%2C300&#038;subset=latin-ext%2Clatin&#038;ver=4.9.3" type="text/css" media="all" />

        <link rel="stylesheet" id="florist-css" href="/assets/css/florist.css?ver=4.9.3" type="text/css" media="all" />
        <link rel="stylesheet" id="js_composer_front-css" href="/assets/css/js_composer.min.css?ver=5.4.5" type="text/css" media="all" />
        <script type="text/javascript" src="/assets/js/jquery.js?ver=4.9.3"></script>
        <script type="text/javascript" src="/assets/js/jquery.themepunch.tools.min.js?ver=4.9.3"></script>
        <script type="text/javascript" src="/assets/js/jquery.themepunch.revolution.min.js?ver=4.9.3"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
    </head>
    <body class="home page-template-default page page-id-692 responsive wpb-js-composer js-comp-ver-5.4.5 vc_responsive" style="background: url();">
        <!-- Accesibility menu -->
        <a class="sr-shortcut sr-shortcut-content" href="#site-content">Skip to main content</a>
        <a class="sr-shortcut sr-shortcut-search" href="#site-search">Skip to search</a>

        <div class="site-wrapper">
            <header class="site-header site-header-sticky site-header-style-full-width nav-type-2">
                <div class="container preheader-wrap">
                    <div class="site-logo">
                        <a href="/">
                            <img class="logo-sticky" alt="Site logo" src="/assets/images/logo.png" />
                            <img style="width: 263px; height: 42px;" alt="Site logo" src="/assets/images/logo.png" />
                        </a>
                    </div>
                    <div class="large-above-menu-style-2 large-above-menu">
                        <div id="anpstextadvanced-2" class="widget widget_anpstextadvanced">
                            <ul class="contact-info">
                                <li>
                                    <i class="fa fa-envelope" style="color: #ffffff;"></i><span class="important" style="color: #3f5b03 !important;"> Email</span><br />
                                    <span style="color: #70862d;">info@sragenflorist.com</span>
                                </li>
                                <li>
                                    <i class="fa fa-phone" style="color: #ffffff;"></i> <span class="important" style="color: #3f5b03 !important;"> Phone/WA</span><br />
                                    <span style="color: #70862d;">0823402358020</span>
                                </li>
                                <li>
                                    <i class="fa fa-clock" style="color: #ffffff;"></i><span class="important" style="color: #3f5b03 !important;"> Jam Operasional</span><br />
                                    <span style="color: #70862d;">Senin - Minggu: 24 Jam</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="header-wrap">
                    <div class="container">
                        <div class="nav-bar-wrapper">
                            <div class="nav-bar">
                                <nav class="site-navigation">
                                    <ul id="menu-main-menu" class="">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-692 current_page_item menu-item-depth-0">
                                            <a href="/">Home</a>
                                        </li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-depth-0">
                                            <a href="#">Produk</a>
                                            <ul class="sub-menu">
                                            @foreach ($product as $key)
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-depth-1">
                                                <a href="/product/detail/{{$key->id_product}}">{{ ucwords(strtolower($key->title))}}</a>
                                            </li>
											@endforeach
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-depth-0">
                                            <a href="/tentang-toko-bunga-sragen">Tentang</a>
                                        </li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-depth-0">
                                            <a href="/contact">Kontak</a>
                                        </li>
                                        @guest
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-depth-0">
                                            <a  href="{{ route('login') }}">Login</a>
                                        </li>
                                        @else
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-depth-0">
                                            <a href="/admin">{{ Auth::user()->name }}</a>
                                        </li>
                                        @endguest
                                    </ul>
                                </nav>

                                <button class="navbar-toggle" type="button">
                                    <span class="sr-only">Toggle navigation</span>
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <section class="container" id="site-content">
                <div class="normal">
                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1442566995341">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="wpb_revslider_element wpb_content_element">
                                        <link href="http://fonts.googleapis.com/css?family=PT+Sans:500%7CRoboto+Slab:700%2C400" rel="stylesheet" property="stylesheet" type="text/css" media="all" />
                                        <div
                                            id="rev_slider_1_1_wrapper"
                                            class="rev_slider_wrapper fullwidthbanner-container"
                                            data-source="gallery"
                                            style="margin: 0px auto; background: #e9e9e9; padding: 0px; margin-top: 0px; margin-bottom: 0px;"
                                        >
                                            <!-- START REVOLUTION SLIDER 5.4.6.4 fullwidth mode -->
                                            <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display: none;" data-version="5.4.6.4">
                                                <ul>
                                                    <!-- SLIDE  -->
                                                    <li
                                                        data-index="rs-1"
                                                        data-transition="slideright"
                                                        data-slotamount="7"
                                                        data-hideafterloop="0"
                                                        data-hideslideonmobile="off"
                                                        data-easein="default"
                                                        data-easeout="default"
                                                        data-masterspeed="400"
                                                        data-thumb="https://anpsthemes.com/florist-new-demos/2/wp-content/uploads/2016/08/slider1-100x50.jpg"
                                                        data-rotate="0"
                                                        data-saveperformance="off"
                                                        data-title="Slide"
                                                        data-param1=""
                                                        data-param2=""
                                                        data-param3=""
                                                        data-param4=""
                                                        data-param5=""
                                                        data-param6=""
                                                        data-param7=""
                                                        data-param8=""
                                                        data-param9=""
                                                        data-param10=""
                                                        data-description=""
                                                    >
                                                        <!-- MAIN IMAGE -->
                                                        <img
                                                            src="https://anpsthemes.com/florist-new-demos/2/wp-content/uploads/2016/08/slider1.jpg"
                                                            alt=""
                                                            title="slider1"
                                                            width="1920"
                                                            height="600"
                                                            data-bgposition="center top"
                                                            data-bgfit="cover"
                                                            data-bgrepeat="no-repeat"
                                                            class="rev-slidebg"
                                                            data-no-retina
                                                        />
                                                        <!-- LAYERS -->

                                                        <!-- LAYER NR. 1 -->
                                                        <div
                                                            class="tp-caption content-slider-text tp-resizeme"
                                                            id="slide-1-layer-1"
                                                            data-x="['left','left','left','left']"
                                                            data-hoffset="['16','54','54','-561']"
                                                            data-y="['top','top','top','top']"
                                                            data-voffset="['280','246','246','211']"
                                                            data-width="none"
                                                            data-height="none"
                                                            data-whitespace="nowrap"
                                                            data-type="text"
                                                            data-responsive_offset="on"
                                                            data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                                            data-textAlign="['left','left','left','left']"
                                                            data-paddingtop="[0,0,0,0]"
                                                            data-paddingright="[0,0,0,0]"
                                                            data-paddingbottom="[0,0,0,0]"
                                                            data-paddingleft="[0,0,0,0]"
                                                            style="z-index: 5; white-space: nowrap; font-size: 20px; font-weight: 500; color: rgba(255, 255, 255, 1);"
                                                        >
                                                         melayani pesanan karangan bunga untuk daerah Ngawi, Karanganyar dan sekitarnya, <br>barang diantar sampai tempat tujuan
                                                        </div>

                                                        <!-- LAYER NR. 2 -->
                                                        <div
                                                            class="tp-caption large_bold_white tp-resizeme"
                                                            id="slide-1-layer-3"
                                                            data-x="['left','left','left','center']"
                                                            data-hoffset="['14','54','54','0']"
                                                            data-y="['top','top','top','top']"
                                                            data-voffset="['169','130','130','142']"
                                                            data-fontsize="['52','52','52','38']"
                                                            data-width="none"
                                                            data-height="none"
                                                            data-whitespace="nowrap"
                                                            data-type="text"
                                                            data-responsive_offset="on"
                                                            data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"auto:auto;","ease":"nothing"}]'
                                                            data-textAlign="['left','left','left','left']"
                                                            data-paddingtop="[0,0,0,0]"
                                                            data-paddingright="[0,0,0,0]"
                                                            data-paddingbottom="[0,0,0,0]"
                                                            data-paddingleft="[0,0,0,0]"
                                                            style="z-index: 6; white-space: nowrap; font-size: 52px; font-weight: 700; color: rgba(255, 255, 255, 1); font-family: Roboto Slab;"
                                                        >
                                                            SRAGEN FLORIST
                                                        </div>

                                                        <!-- LAYER NR. 3 -->
                                                        <div
                                                            class="tp-caption rev-btn tp-resizeme"
                                                            id="slide-1-layer-5"
                                                            data-x="['left','left','left','left']"
                                                            data-hoffset="['17','57','57','91']"
                                                            data-y="['top','top','top','top']"
                                                            data-voffset="['386','346','346','256']"
                                                            data-width="none"
                                                            data-height="none"
                                                            data-whitespace="nowrap"
                                                            data-type="button"
                                                            data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"","delay":""}]'
                                                            data-responsive_offset="on"
                                                            data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"100","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(10,0,0,1);bg:rgba(237,237,237,1);"}]'
                                                            data-textAlign="['left','left','left','left']"
                                                            data-paddingtop="[12,12,12,12]"
                                                            data-paddingright="[35,35,35,35]"
                                                            data-paddingbottom="[12,12,12,12]"
                                                            data-paddingleft="[35,35,35,35]"
                                                            style="
                                                                z-index: 7;
                                                                white-space: nowrap;
                                                                font-size: 13px;
                                                                line-height: 17px;
                                                                font-weight: 400;
                                                                color: rgba(10, 10, 10, 1);
                                                                font-family: Roboto Slab;
                                                                background-color: rgba(255, 255, 255, 1);
                                                                border-radius: 4px 4px 4px 4px;
                                                                outline: none;
                                                                box-shadow: none;
                                                                box-sizing: border-box;
                                                                -moz-box-sizing: border-box;
                                                                -webkit-box-sizing: border-box;
                                                                cursor: pointer;
                                                            "
                                                        >
                                                            LIHAT PRODUK
                                                        </div>

                                                        <!-- LAYER NR. 4 -->
                                                        <div
                                                            class="tp-caption rev-btn tp-resizeme"
                                                            id="slide-1-layer-7"
                                                            data-x="['left','left','left','left']"
                                                            data-hoffset="['191','231','231','257']"
                                                            data-y="['top','top','top','top']"
                                                            data-voffset="['386','346','346','256']"
                                                            data-width="none"
                                                            data-height="none"
                                                            data-whitespace="nowrap"
                                                            data-type="button"
                                                            data-responsive_offset="on"
                                                            data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"100","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);bg:rgba(185,200,18,1);"}]'
                                                            data-textAlign="['left','left','left','left']"
                                                            data-paddingtop="[12,12,12,12]"
                                                            data-paddingright="[35,35,35,35]"
                                                            data-paddingbottom="[12,12,12,12]"
                                                            data-paddingleft="[35,35,35,35]"
                                                            style="
                                                                z-index: 8;
                                                                white-space: nowrap;
                                                                font-size: 13px;
                                                                line-height: 17px;
                                                                font-weight: 400;
                                                                color: rgba(255, 255, 255, 1);
                                                                font-family: Roboto Slab;
                                                                background-color: rgba(160, 192, 49, 1);
                                                                border-radius: 4px 4px 4px 4px;
                                                                outline: none;
                                                                box-shadow: none;
                                                                box-sizing: border-box;
                                                                -moz-box-sizing: border-box;
                                                                -webkit-box-sizing: border-box;
                                                                cursor: pointer;
                                                            "
                                                        >
                                                        <a href="https://wa.me/+62%20823-4023-58020?text=halo%20saya%20mau%20pesan%20bunga" style="color:white">
                                                            PESAN SEKARANG
                                                        </a>
                                                        </div>

                                                     

                                                        <!-- LAYER NR. 15 -->
                                                        <div
                                                            class="tp-caption tp-resizeme"
                                                            id="slide-6-layer-8"
                                                            data-x="['left','left','left','center']"
                                                            data-hoffset="['16','56','56','0']"
                                                            data-y="['top','top','top','top']"
                                                            data-voffset="['233','198','198','206']"
                                                            data-width="none"
                                                            data-height="none"
                                                            data-whitespace="nowrap"
                                                            data-type="text"
                                                            data-responsive_offset="on"
                                                            data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                                            data-textAlign="['left','left','left','left']"
                                                            data-paddingtop="[0,0,0,0]"
                                                            data-paddingright="[0,0,0,0]"
                                                            data-paddingbottom="[0,0,0,0]"
                                                            data-paddingleft="[0,0,0,0]"
                                                            style="z-index: 19; white-space: nowrap; font-size: 26px; line-height: 22px; font-weight: 400; color: rgba(160, 192, 49, 1); font-family: Roboto Slab;"
                                                        >
                                                            YOUR BUSINESS WITH FLORIST
                                                        </div>
                                                    </li>
                                                </ul>
                                             
                                                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                                            </div>
                                            
                                        </div>
                                        <!-- END REVOLUTION SLIDER -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1472630244531 vc_row-has-fill">
                        <div class="wpb_column vc_column_container vc_col-sm-4">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="anps-exposure">
                                        <div class="wrapper">
                                            <h3 class="subtitle">SELAMAT DATANG</h3>
                                            <h2 class="title">SRAGEN FLORIST</h2>
                                            <p>
                                                Sragen florist merupakan sebuah Toko Bunga di Sragen yang menjual berbagai macam keperluan anda yang berkaitan dengan rangkaian bunga/florist. Kami juga melayani pesanan karangan bunga untuk daerah Ngawi, Karanganyar dan sekitarnya, barang diantar sampai tempat tujuan 
                                            </p>
                                            <footer><a class="font-1" href="/about">Baca Selengkapnya</a></footer>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @foreach ($product as $key)
									        @if($key->id_product < 3)
                        <div class="wpb_column vc_column_container vc_col-sm-4">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="wpb_single_image wpb_content_element vc_align_left">
                                        <figure class="wpb_wrapper vc_figure">
                                            <div class="vc_single_image-wrapper vc_box_border_grey">
                                                <img
                                                    width="100%"
                                                    height="250"
                                                    src="{{$key->image}}"
                                                    class="vc_single_image-img attachment-full"
                                                    alt=""
                                                    style="width:100%; height:250px"
                                                />
                                            </div>
                                        </figure>
                                    </div>
                                    <div class="vc_empty_space" style="height: 15px;"><span class="vc_empty_space_inner"></span></div>
                                    <h3 class="heading-content style-1" style="color: #515151;margin-top:-10px"><span>{{$key->title}}</span></h3>
                                    <div class="wpb_text_column wpb_content_element">
                                        <div class="wpb_wrapper">
                                            <p>{{strip_tags($key->description)}}</p>
                                        </div>
                                    </div>
                                    <div class="vc_empty_space" style="height: 25px;"><span class="vc_empty_space_inner"></span></div>
                                    <a target="_self" href="/product/detail/{{$key->id_product}}" class="btn btn-sm style-1" id="custom-id-1" style="">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        @endif
											@endforeach
                    </div>

                    <div class="vc_row-full-width vc_clearfix"></div>
                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1442413201247">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display: none;">
                            <symbol id="blog-icon" viewBox="0 0 31.643 41.243">
                                <polygon points="2,0.042 0,2.042 2,2.042 " />
                                <polygon fill="#a2c046" points="1.977,41.243 1.977,0 31.643,0 31.643,41.243 16.813,33.625 " />
                            </symbol>
                        </svg>

                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="recent-posts style-1 clearfix">

                                            @foreach ($product as $key)
									        @if($key->id_product > 2)
                                            <article class="recentblog col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                            <header>
                                                <a class="post-hover" href="/product/detail/{{$key->id_product}}">
                                                    <div class="mask"></div>
                                                    <div class="item-info">
                                                        <div class="fa fa-link"></div>
                                                    </div>
                                                </a>
                                                <time class="recentblog-time" datetime="2014-12-12 12:47">12<span>Dec</span></time><svg class="recentblog-icon"><use xlink:href="#blog-icon"></use></svg>
                                                <div class="item-img">
                                                    <img
                                                    src="{{$key->image}}"
                                                    class="vc_single_image-img attachment-full"
                                                    alt=""
                                                    style="width:100%; height:280px"
                                                    />
                                                </div>
                                            </header>
                                            <div class="titlemichelle">
                                                <a href="/product/detail/{{$key->id_product}}"><h2>{{$key->title}}</h2></a>
                                            </div>
                                            <div class="post-content">
                                                <p>
                                                {{strip_tags($key->description)}}
                                                </p>
                                            </div>
                                        </article>
                                        @endif
											@endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <footer class="site-footer style-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-xs-6">
                            <ul>
                                <li id="anpsimages-2" class="widget-container widget_anpsimages">
                                    <img width="225" height="42" src="/assets/images/logo2.png" class="attachment-full size-full" alt="" />
                                </li>
                                <li id="text-5" class="widget-container widget_text">
                                    <div class="textwidget">
                                        Sragen Florist merupakan sebuah Toko Bunga di Sragen yang menjual berbagai macam model bunga yang biasa anda perlukan untuk berbagai keperluan seperti dekorasi pernikahan, peresmian gedung,
                                        peresmian usaha, stike werk, ucapan duka cita, ucapan pernikahan, bungan krans, bouquet, pemesanan mahar 3D dan masih banyak lagi.
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-4 tablets-clear col-xs-6">
                            <ul>
                                <li id="nav_menu-4" class="widget-container widget_nav_menu">
                                    <h3 class="widget-title">Produk Kami</h3>
                                    <div class="menu-side-menu-container">
                                        <ul id="menu-side-menu" class="menu">
                                            @foreach ($product as $key)
                                            <li id="menu-item-704" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-704">
                                                <a href="/product/detail/{{$key->id_product}}">{{ ucwords(strtolower($key->title))}}</a>
                                            </li>
											@endforeach
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <ul>
                                <li id="anpsopeningtime-2" class="widget-container widget_anpsopeningtime">
                                    <h3 class="widget-title">Kontak Kami</h3>
                                    <table class="working-hours">
                                    <tbody>
                                            <tr>
                                                <th>Senin</th>
                                                <td>24 Jam</td>
                                            </tr>
                                            <tr>
                                                <th>Selasa</th>
                                                <td>24 Jam</td>
                                            </tr>
                                            <tr>
                                                <th>Rabu</th>
                                                <td>24 Jam</td>
                                            </tr>
                                            <tr>
                                                <th>Kamis</th>
                                                <td>24 Jam</td>
                                            </tr>
                                            <tr>
                                                <th>Jumat</th>
                                                <td>24 Jam</td>
                                            </tr>
                                            <tr>
                                                <th>Sabtu</th>
                                                <td>24 Jam</td>
                                            </tr>
                                            <tr>
                                                <th>Minggu</th>
                                                <td>24 Jam</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="copyright-footer">
                    <div class="container">
                        <div class="row">
                            <ul class="text-center">
                                <li id="text-2" class="widget-container widget_text"><div class="textwidget">Sragen Florist | © 2020, All rights reserved</div></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>

        <script>
            jQuery(function ($) {
                $("#constructionsite").parallax("50%", 0.6);
            });
        </script>
        </div>

        <div id="scrolltop" class="fixed scrollup">
            <button title="Scroll to top"><i class="fa fa-angle-up"></i></button>
        </div>

        <script type="text/javascript">
            function setREVStartSize(e) {
                try {
                    var i = jQuery(window).width(),
                        t = 9999,
                        r = 0,
                        n = 0,
                        l = 0,
                        f = 0,
                        s = 0,
                        h = 0;
                    if (
                        (e.responsiveLevels &&
                            (jQuery.each(e.responsiveLevels, function (e, f) {
                                f > i && ((t = r = f), (l = e)), i > f && f > r && ((r = f), (n = e));
                            }),
                            t > r && (l = n)),
                        (f = e.gridheight[l] || e.gridheight[0] || e.gridheight),
                        (s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth),
                        (h = i / s),
                        (h = h > 1 ? 1 : h),
                        (f = Math.round(h * f)),
                        "fullscreen" == e.sliderLayout)
                    ) {
                        var u = (e.c.width(), jQuery(window).height());
                        if (void 0 != e.fullScreenOffsetContainer) {
                            var c = e.fullScreenOffsetContainer.split(",");
                            if (c)
                                jQuery.each(c, function (e, i) {
                                    u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u;
                                }),
                                    e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0
                                        ? (u -= (jQuery(window).height() * parseInt(e.fullScreenOffset, 0)) / 100)
                                        : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0));
                        }
                        f = u;
                    } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                    e.c.closest(".rev_slider_wrapper").css({ height: f });
                } catch (d) {
                    console.log("Failure at Presize of Slider:" + d);
                }
            }
        </script>
        <script>
            var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
            var htmlDivCss = "";
            if (htmlDiv) {
                htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
            } else {
                var htmlDiv = document.createElement("div");
                htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
            }
        </script>
        <script>
            var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
            var htmlDivCss =
                '.tp-caption.large_bold_white,.large_bold_white{font-size:58px;line-height:60px;font-weight:800;font-family:"Open Sans";color:rgb(255,255,255);text-decoration:none;background-color:transparent;border-width:0px;border-color:rgb(255,214,88);border-style:none}.tp-caption.content-slider-text,.content-slider-text{font-size:17px;line-height:25px;font-family:"PT Sans";color:rgb(0,0,0);text-decoration:none;background-color:transparent;border-width:0px;border-color:rgb(0,0,0);border-style:none;text-shadow:none}';
            if (htmlDiv) {
                htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
            } else {
                var htmlDiv = document.createElement("div");
                htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
            }
        </script>
        <script type="text/javascript">
            setREVStartSize({ c: jQuery("#rev_slider_1_1"), responsiveLevels: [1240, 1024, 778, 480], gridwidth: [1170, 1024, 778, 480], gridheight: [600, 500, 600, 500], sliderLayout: "fullwidth" });

            var revapi1,
                tpj = jQuery;
            tpj.noConflict();
            tpj(document).ready(function () {
                if (tpj("#rev_slider_1_1").revolution == undefined) {
                    revslider_showDoubleJqueryError("#rev_slider_1_1");
                } else {
                    revapi1 = tpj("#rev_slider_1_1")
                        .show()
                        .revolution({
                            sliderType: "standard",
                            jsFileLocation: "//anpsthemes.com/florist-new-demos/2/wp-content/plugins/revslider/public/assets/js/",
                            sliderLayout: "fullwidth",
                            dottedOverlay: "none",
                            delay: 9000,
                            navigation: {
                                keyboardNavigation: "off",
                                keyboard_direction: "horizontal",
                                mouseScrollNavigation: "off",
                                mouseScrollReverse: "default",
                                onHoverStop: "on",
                                touch: {
                                    touchenabled: "on",
                                    touchOnDesktop: "off",
                                    swipe_threshold: 75,
                                    swipe_min_touches: 1,
                                    swipe_direction: "horizontal",
                                    drag_block_vertical: false,
                                },
                                arrows: {
                                    style: "custom",
                                    enable: true,
                                    hide_onmobile: false,
                                    hide_onleave: true,
                                    hide_delay: 200,
                                    hide_delay_mobile: 1200,
                                    tmp: "",
                                    left: {
                                        h_align: "left",
                                        v_align: "center",
                                        h_offset: 20,
                                        v_offset: 0,
                                    },
                                    right: {
                                        h_align: "right",
                                        v_align: "center",
                                        h_offset: 20,
                                        v_offset: 0,
                                    },
                                },
                            },
                            responsiveLevels: [1240, 1024, 778, 480],
                            visibilityLevels: [1240, 1024, 778, 480],
                            gridwidth: [1170, 1024, 778, 480],
                            gridheight: [600, 500, 600, 500],
                            lazyType: "none",
                            shadow: 0,
                            spinner: "spinner0",
                            stopLoop: "off",
                            stopAfterLoops: -1,
                            stopAtSlide: -1,
                            shuffle: "off",
                            autoHeight: "off",
                            disableProgressBar: "on",
                            hideThumbsOnMobile: "off",
                            hideSliderAtLimit: 0,
                            hideCaptionAtLimit: 0,
                            hideAllCaptionAtLilmit: 0,
                            debugMode: false,
                            fallbacks: {
                                simplifyAll: "off",
                                nextSlideOnWindowFocus: "off",
                                disableFocusListener: false,
                            },
                        });
                }
            }); /*ready*/
        </script>
        <script>
            var htmlDivCss = unescape(
                ".custom.tparrows%20%7B%0A%09cursor%3Apointer%3B%0A%09background%3A%23000%3B%0A%09background%3Argba%280%2C0%2C0%2C0.5%29%3B%0A%09width%3A40px%3B%0A%09height%3A40px%3B%0A%09position%3Aabsolute%3B%0A%09display%3Ablock%3B%0A%09z-index%3A100%3B%0A%7D%0A.custom.tparrows%3Ahover%20%7B%0A%09background%3A%23000%3B%0A%7D%0A.custom.tparrows%3Abefore%20%7B%0A%09font-family%3A%20%22revicons%22%3B%0A%09font-size%3A15px%3B%0A%09color%3A%23fff%3B%0A%09display%3Ablock%3B%0A%09line-height%3A%2040px%3B%0A%09text-align%3A%20center%3B%0A%7D%0A.custom.tparrows.tp-leftarrow%3Abefore%20%7B%0A%09content%3A%20%22%5Ce824%22%3B%0A%7D%0A.custom.tparrows.tp-rightarrow%3Abefore%20%7B%0A%09content%3A%20%22%5Ce825%22%3B%0A%7D%0A%0A%0A"
            );
            var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
            if (htmlDiv) {
                htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
            } else {
                var htmlDiv = document.createElement("div");
                htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
            }
        </script>
        <script type="text/javascript" src="/assets/js/bootstrap.min.js?ver=4.9.3"></script>
        <script type="text/javascript" src="/assets/js/parallax.js?ver=4.9.3"></script>
        <script type="text/javascript" src="/assets/js/js_composer_front.min.js?ver=5.4.5"></script>
    </body>
</html>
