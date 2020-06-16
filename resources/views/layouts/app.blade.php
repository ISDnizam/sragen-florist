<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
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
        <link rel="stylesheet" id="font_type_1-css" href="https://fonts.googleapis.com/css?family=Roboto+Slab%3A400italic%2C400%2C600%2C700%2C300&#038;subset=latin&#038;ver=4.9.3" type="text/css" media="all" />
        <link rel="stylesheet" id="font_type_2-css" href="https://fonts.googleapis.com/css?family=PT+Sans%3A400italic%2C400%2C600%2C700%2C300&#038;subset=latin-ext%2Clatin&#038;ver=4.9.3" type="text/css" media="all" />
        <link rel="stylesheet" id="theme_main_style-css" href="http://anpsthemes.com/florist-new-demos/2/wp-content/themes/florist/style.css?ver=4.9.3" type="text/css" media="all" />
        <link rel="stylesheet" id="theme_core_style-css" href="http://anpsthemes.com/florist-new-demos/2/wp-content/themes/florist/css/core.css?ver=4.9.3" type="text/css" media="all" />
        <link rel="stylesheet" id="theme_wordpress_style-css" href="http://anpsthemes.com/florist-new-demos/2/wp-content/themes/florist/css/wordpress.css?ver=4.9.3" type="text/css" media="all" />
        <style id="theme_wordpress_style-inline-css" type="text/css">
            ::selection {
                background-color: #292929;
                color: #fff;
            }
            body,
            ol.list > li > *,
            .sidebar .product-categories a:not(:hover):not(:focus) {
                color: #727272;
            } /* Header colors */
            .site-header {
                background: #a2c046;
            }
            @media (max-width: 991px) {
                .site-header {
                    background: #fff;
                }
                .site-header-sticky-active.site-header-style-full-width,
                .site-header-vertical-menu .nav-wrap,
                .site-header-sticky-active .nav-wrap {
                    background: #fff;
                }
            }
            @media (min-width: 992px) {
                .site-navigation a,
                .site-header-style-full-width .site-search-toggle,
                .home .site-header-sticky-active .site-navigation .menu-item-depth-0 > a:not(:hover),
                .site-search.type-2 input[type="text"],
                .site-search-close:not(:hover) {
                    color: #ffffff;
                }
            }
            .paralax-header .site-header-style-transparent.site-header-sticky-active .site-navigation .menu-item-depth-0 > a:not(:hover):not(:focus) {
                color: #ffffff;
            }
            @media (min-width: 992px) {
                .site-header-style-normal .nav-wrap {
                    background-color: ;
                }
            }
            @media (min-width: 992px) {
                .site-navigation .sub-menu {
                    background-color: #fff;
                }
                .site-navigation .sub-menu a {
                    color: #000;
                }
                .site-header-style-full-width .site-logo,
                .site-header-style-boxed .site-logo {
                    color: #ffffff;
                    background-color: #ffffff;
                }
            }
            .heading-left.divider-sm span:before,
            .heading-middle.divider-sm span:before {
                background-color: ;
            }
            .site-navigation a:hover,
            .site-navigation a:focus,
            .site-navigation .current-menu-item > a,
            .site-navigation .menu-item-depth-0.current-menu-ancestor > a,
            .projects-content .projects-item .project-title {
                color: #a2c046;
            }
            @media (min-width: 992px) {
                .site-search-toggle:hover,
                .site-search-toggle:focus {
                    color: #a2c046;
                }
                .nav-type-2 .site-navigation .sub-menu .current-menu-item > a:before {
                    border-bottom-color: #a2c046;
                }
                .nav-type-2 .site-navigation .menu-item-depth-0.menu-item-has-children:after {
                    background-color: #a2c046;
                } /* Boxed header style background color */
                .site-header-style-boxed .nav-bar-wrapper {
                    background-color: #3b3b3b;
                }
            }
            @media (max-width: 991px) {
                .site-search-toggle:hover,
                .site-search-toggle:focus,
                .navbar-toggle:hover,
                .navbar-toggle:focus {
                    background-color: #a2c046;
                }
                .site-search-toggle,
                .navbar-toggle {
                    background-color: #292929;
                }
            } /* footer colors */
            footer.site-footer h2,
            footer.site-footer h3,
            footer.site-footer h3.widget-title,
            footer.site-footer h4,
            footer.site-footer .menu .current_page_item > a,
            .site-footer strong,
            footer.site-footer .tagcloud a {
                color: #a2c046;
            }
            .site-footer,
            .site-footer .copyright-footer,
            .site-footer .searchform input[type="text"],
            .searchform button[type="submit"],
            footer.site-footer .copyright-footer a {
                color: #b3b3b3;
            }
            .working-hours td:after,
            .working-hours th:after {
                background-color: #b3b3b3;
            }
            footer.site-footer {
                color: #b3b3b3;
            }
            footer.site-footer .copyright-footer {
                color: #6c802c;
            } /* Front-Global Colors */
            @media (min-width: 992px) {
                .site-header-style-normal .nav-wrap {
                    background-color: #3b3b3b;
                }
            }
            @media (min-width: 992px) {
                .site-header-style-full-width.site-header-sticky-active .header-wrap,
                .site-header-style-full-width .header-wrap,
                .site-header-style-full-width .site-search,
                .site-header-style-boxed .site-search.type-2 form {
                    background-color: #3b3b3b;
                }
                .home .menu-item-depth-0 > a,
                .home .site-header-style-full-width .site-search-toggle:not(:hover),
                .home .site-search-close:not(:hover),
                .home .site-search.type-2 input[type="text"] {
                    color: #ffffff;
                }
            }
            .site-navigation a:hover,
            .site-navigation a:focus,
            .site-navigation .current-menu-item > a {
                color: #a2c046;
            }
            @media (min-width: 992px) {
                .nav-wrap .woo-header-cart .cart-contents > i,
                .site-search-toggle {
                    color: #ffffff;
                }
                .site-search-toggle:focus,
                .site-search-toggle:hover {
                    color: #a2c046;
                }
            } /* Top bar colors */
            .top-bar {
                background-color: #f9f9f9;
                color: #c1c1c1;
            }
            a,
            .btn-link,
            .error-404 h2,
            .page-heading,
            .statement .style-3,
            .dropcaps.style-2:first-letter,
            .list li:before,
            ol.list,
            .post.style-2 header > span,
            .post.style-2 header .fa,
            .page-numbers span,
            .team .socialize a,
            blockquote.style-2:before,
            .panel-group.style-2 .panel-title a:before,
            .contact-info i,
            blockquote.style-1:before,
            .comment-list .comment header h1,
            .faq .panel-title a.collapsed:before,
            .faq .panel-title a:after,
            .faq .panel-title a,
            .filter button.selected,
            .filter:before,
            .primary,
            .search-posts i,
            .counter .counter-number,
            #wp-calendar th,
            #wp-calendar caption,
            .testimonials blockquote p:before,
            .testimonials blockquote p:after,
            .tab-pane .commentlist .meta strong,
            .widget_recent_comments .recentcomments a,
            .wpcf7-form-control-wrap[class*="date-"]:after,
            .anps-select-wrap:after,
            .get-quote h2,
            footer.site-footer.style-3 .working-hours th,
            .testimonials-style-2 .testimonial-footer,
            h4.testimonial-user,
            .testimonials-style-3 + .owlprev:hover,
            .testimonials-style-3 + .owlprev + .owlnext:hover,
            .timeline-year,
            .price {
                color: #292929;
            }
            .lost_reset_password p.form-row .button,
            body .is-selected .pika-button,
            body .pika-button:hover,
            .heading-middle span:before,
            .heading-left span:before,
            .testimonials-style-2.carousel .carousel-control,
            .timeline-item:before,
            .vc_tta.vc_tta-accordion.vc_tta-style-anps-as-2 .vc_tta-panel.vc_active .vc_tta-panel-heading,
            .woocommerce-product-gallery__trigger {
                background-color: #292929;
            }
            .site-footer,
            .site-footer .copyright-footer,
            .product_meta span span {
                color: #b3b3b3;
            }
            .counter .wrapbox {
                border-color: #292929;
            }
            .nav .open > a:focus,
            body .tp-bullets.simplebullets.round .bullet.selected {
                border-color: #292929;
            }
            .icon i,
            .posts div a,
            .progress-bar,
            .nav-tabs > li.active:after,
            .vc_tta-style-anps_tabs .vc_tta-tabs-list > li.vc_active:after,
            .pricing-table header,
            .table thead th,
            .mark,
            .post .post-meta button,
            blockquote.style-2:after,
            .panel-title a:before,
            .carousel-indicators li,
            .carousel-indicators .active,
            .ls-michell .ls-bottom-slidebuttons a,
            .twitter .carousel-indicators li,
            .twitter .carousel-indicators li.active,
            #wp-calendar td a,
            body .tp-bullets.simplebullets.round .bullet,
            .form-submit #submit,
            .testimonials blockquote header:before,
            .plus,
            .minus,
            .woocommerce-tabs li:before {
                background-color: #292929;
            }
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            .nav-tabs > li > a,
            .nav-tabs > li.active > a,
            .vc_tta-tabs-list > li > a span,
            .statement,
            .page-heading a,
            .page-heading a:after,
            p strong,
            .dropcaps:first-letter,
            .page-numbers a,
            .searchform,
            .searchform input[type="text"],
            .socialize a,
            .widget_rss .rss-date,
            .widget_rss cite,
            .panel-title,
            .panel-group.style-2 .panel-title a.collapsed:before,
            blockquote.style-1,
            .comment-list .comment header,
            .faq .panel-title a:before,
            .faq .panel-title a.collapsed,
            .filter button,
            .carousel .carousel-control,
            #wp-calendar #today,
            input.qty,
            .tab-pane .commentlist .meta,
            .woocommerce-result-count,
            .headings-color,
            .product_meta,
            .woocommerce-review-link,
            .woocommerce-before-loop .woocommerce-ordering:after,
            .widget_price_filter .price_slider_amount .button,
            .widget_price_filter .price_label,
            .product_list_widget li h4 a,
            .shop_table.table thead th,
            .shop_table.table tfoot,
            .product-single-header .variations label,
            .tab-pane .commentlist .meta,
            .woocommerce-tabs .commentlist .meta {
                color: #000000;
            }
            .ls-michell .ls-nav-next,
            .ls-michell .ls-nav-prev {
                color: #fff;
            }
            .contact-form input[type="text"]:focus,
            .contact-form textarea:focus {
                border-color: #000000 !important;
            }
            .pricing-table header h2,
            .mark.style-2,
            .btn.dark,
            .twitter .carousel-indicators li {
                background-color: #000000;
            }
            .price_slider_wrapper .ui-widget-content {
                background-color: #ececec;
            }
            body,
            .alert .close,
            .post header {
                font-family: "PT Sans";
            }
            .site-logo {
                font-family: "Arial", Helvetica, sans-serif;
            }
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            .btn,
            .page-heading,
            .team em,
            blockquote.style-1,
            .tab-pane .commentlist .meta,
            .wpcf7-submit,
            .testimonial-footer span.user,
            .font-1,
            .site-navigation,
            .price,
            input.site-search-input,
            .page-breadcrumbs {
                font-family: "Roboto Slab";
            }
            .wpcf7-form input::-webkit-input-placeholder {
                /* WebKit browsers */
                font-family: "Roboto Slab";
            }
            .wpcf7-form input:-moz-placeholder {
                /* Mozilla Firefox 4 to 18 */
                font-family: "Roboto Slab";
            }
            .wpcf7-form input::-moz-placeholder {
                /* Mozilla Firefox 19+ */
                font-family: "Roboto Slab";
            }
            .wpcf7-form input:-ms-input-placeholder {
                /* Internet Explorer 10+ */
                font-family: "Roboto Slab";
            }
            .wpcf7-form input,
            .wpcf7-form textarea,
            .wpcf7-select {
                font-family: "Roboto Slab";
            }
            .nav-tabs > li > a,
            .vc_tta-tabs-list > li > a,
            .tp-arr-titleholder {
                font-family: "Roboto Slab";
            }
            .pricing-table header h2,
            .pricing-table header .price,
            .pricing-table header .currency,
            .table thead,
            h1.style-3,
            h2.style-3,
            h3.style-3,
            h4.style-3,
            h5.style-3,
            h6.style-3,
            .page-numbers a,
            .page-numbers span,
            .alert,
            .comment-list .comment header,
            .woocommerce-result-count,
            .product_list_widget li > a,
            .product_list_widget li p.total strong,
            .cart_list + .total,
            .shop_table.table tfoot,
            .product-single-header .variations label {
                font-family: "Roboto Slab";
            } /* footer */
            .site-footer {
                background: #292929;
            }
            .site-footer .copyright-footer,
            .site-footer.style-2 .copyright-footer,
            .site-footer.style-3 .copyright-footer {
                background: #a2c046;
                color: #6c802c;
            }
            .site-footer .tagcloud a {
                background: #a2c046;
            } /* Mini Cart color */
            .woo-header-cart .cart-contents > span {
                color: #fff;
            }
            .woo-header-cart .cart-contents > span {
                background-color: #6c802c;
            } /* Footer divider color */
            .site-footer.style-2 .copyright-footer,
            footer.site-footer.style-2 .widget_anpstext:before,
            footer.site-footer.style-2 .working-hours {
                border-color: #fff;
            } /* a:focus { outline: none; } */
            .a:hover,
            .a:focus,
            .icon a:hover h2,
            .icon a:focus h2,
            .nav-tabs > li > a:hover,
            .nav-tabs > li > a:focus,
            .page-heading a:hover,
            .page-heading a:focus,
            .menu a:hover,
            .menu a:focus,
            .menu .is-active a,
            .table tbody tr:hover td,
            .page-numbers a:hover,
            .page-numbers a:focus,
            .widget-categories a:hover,
            .widget-categories a:focus,
            .widget_archive a:hover,
            .widget_archive a:focus,
            .widget_categories a:hover,
            .widget_categories a:focus,
            .widget_recent_entries a:hover,
            .widget_recent_entries a:focus,
            .socialize a:hover,
            .socialize a:focus,
            .faq .panel-title a.collapsed:hover,
            .faq .panel-title a.collapsed:focus,
            .carousel .carousel-control:hover,
            .carousel .carousel-control:focus,
            a:hover h1,
            a:hover h2,
            a:hover h3,
            a:hover h4,
            a:hover h5,
            a:focus h1,
            a:focus h2,
            a:focus h3,
            a:focus h4,
            a:focus h5,
            .site-footer a:not(.btn):hover,
            .site-footer a:not(.btn):focus,
            .ls-michell .ls-nav-next:hover,
            .ls-michell .ls-nav-prev:hover,
            body .tp-leftarrow.default:hover,
            body .tp-leftarrow.default:focus,
            body .tp-rightarrow.default:hover,
            body .tp-rightarrow.default:focus,
            .icon.style-2 a:hover i,
            .icon.style-2 a:focus i,
            .team .socialize a:hover,
            .team .socialize a:focus,
            .recentblog header a:hover h2,
            .recentblog focus a:hover h2,
            .scrollup button:hover,
            .scrollup button:focus,
            .hovercolor,
            i.hovercolor,
            .post.style-2 header i.hovercolor.fa,
            article.post-sticky header::before,
            .wpb_content_element .widget a:hover,
            .wpb_content_element .widget a:focus,
            .star-rating,
            .icon.style-2 i,
            .nav-bar-wrapper .cart-contents > i:hover,
            .nav-bar-wrapper .cart-contents > i:focus,
            .nav-bar-wrapper .mini-cart h4 > a:hover,
            .nav-bar-wrapper .mini-cart h4 > a:focus,
            footer.site-footer.style-2 .widget_anpstext > span.fa,
            footer.site-footer.style-2 .widget_recent_entries .post-date:before,
            footer.site-footer.style-2 .social a:hover,
            footer.site-footer.style-2 .social a:focus,
            .owl-navigation .owlprev:hover,
            .owl-navigation .owlprev:focus,
            .owl-navigation .owlnext:hover,
            .owl-navigation .owlnext:focus,
            .important,
            .top-bar a:hover,
            .top-bar a:focus,
            .page-numbers.current,
            .widget_layered_nav a:hover,
            .widget_layered_nav a:focus,
            .widget_layered_nav .chosen a,
            .widget_layered_nav_filters a:hover,
            .widget_layered_nav_filters a:focus,
            .widget_rating_filter .star-rating:hover,
            .widget_rating_filter .star-rating:focus,
            .site-search-close:hover,
            .site-search-close:focus {
                color: #a2c046;
            }
            .icon > a > i,
            .newsletter-widget .newsletter-submit,
            .tnp-widget .tnp-submit,
            footer.site-footer.style-3 .working-hours td,
            footer.site-footer.style-3 .working-hours th,
            .testimonials-style-2.carousel .carousel-control:hover,
            .testimonials-style-2.carousel .carousel-control:focus,
            .woocommerce-product-gallery__trigger:hover,
            .woocommerce-product-gallery__trigger:focus,
            .sidebar .menu > .current_page_item > a,
            .sidebar .menu .current-menu-item > a,
            .sidebar .menu .current-menu-ancestor > a {
                background: #a2c046;
            }
            .filter button.selected,
            .anps-exposure footer a {
                color: #a2c046 !important;
            }
            .scrollup button:hover,
            .scrollup button:focus,
            .wpcf7-form input.wpcf7-text:focus,
            .wpcf7-form textarea:focus,
            .wpcf7-select:focus,
            .wpcf7-form input.wpcf7-date:focus {
                border-color: #a2c046;
            }
            .tagcloud a:hover,
            .twitter .carousel-indicators li:hover,
            .icon a:hover i,
            .posts div a:hover,
            #wp-calendar td a:hover,
            .plus:hover,
            .minus:hover,
            .widget_price_filter .price_slider_amount .button:hover,
            .form-submit #submit:hover,
            .onsale,
            form .quantity .plus:hover,
            form .quantity .minus:hover,
            #content .quantity .plus:hover,
            #content .quantity .minus:hover,
            .widget_price_filter .ui-slider-horizontal .ui-slider-range,
            .anps-exposure .title {
                background-color: #a2c046;
            }
            body {
                font-size: 14px;
            }
            .nav-bar {
                font-size: 16px;
            }
            h1,
            .h1 {
                font-size: 40px;
            }
            h2,
            .h2 {
                font-size: 24px;
            }
            h3,
            .h3 {
                font-size: 21px;
            }
            h4,
            .h4 {
                font-size: 18px;
            }
            h5,
            .h5 {
                font-size: 16px;
            }
            .page-heading h1 {
                font-size: 42px;
            }
            .triangle-topleft.hovercolor {
                border-top: 60px solid #a2c046;
            }
            h1.single-blog,
            article.post h1.single-blog {
                font-size: 28px;
            }
            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                font-weight: bold;
            } /* Sidebar menu colors */
            .sidebar .menu .current-menu-item .sub-menu a,
            .sidebar .menu .current-menu-ancestor .sub-menu a {
                background: ;
                color: ;
            }
            .sidebar .menu .sub-menu a:hover,
            .sidebar .menu .sub-menu a:focus,
            .sidebar .menu .sub-menu .current_page_item > a,
            .sidebar .menu .sub-menu > .current_page_item > a {
                color: ;
            }
            .woocommerce-product-gallery__trigger {
                color: transparent !important;
                display: inline-block;
                height: 50px;
            }
            .woocommerce-product-gallery__trigger::before {
                color: #fff;
                left: 50%;
                position: absolute;
                top: 50%;
                -webkit-transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
            } /*buttons*/
            .btn,
            .wpcf7-submit,
            button.single_add_to_cart_button,
            .woocommerce-page .button {
                -moz-user-select: none;
                background-image: none;
                border: 0;
                color: #fff;
                cursor: pointer;
                display: inline-block;
                font-weight: normal;
                line-height: 1.5;
                margin-bottom: 0;
                text-align: center;
                text-transform: uppercase;
                text-decoration: none;
                transition: background-color 0.2s ease 0s;
                vertical-align: middle;
                white-space: nowrap;
            }
            .wpcf7-submit:hover,
            .wpcf7-submit:active,
            .wpcf7-submit:focus {
                background-color: #a2c046;
                color: #fff;
                border: 0;
            }
            .btn,
            button.single_add_to_cart_button,
            .woocommerce-page .button,
            .wpcf7-submit {
                border-radius: 0;
                border-radius: 4px;
                background-color: #292929;
                color: #fff;
            }
            .btn,
            .button,
            .site-footer .widget_price_filter .price_slider_amount .button,
            .site-footer .widget_price_filter .price_label {
                border-radius: 0;
                border-radius: 4px;
                background: #292929;
                color: #fff;
            }
            .btn:hover,
            .btn:active,
            .btn:focus,
            .button:hover,
            .button:active,
            .button:focus,
            .site-footer .tagcloud a:hover,
            .site-footer .tagcloud a:focus {
                border-radius: 0;
                border-radius: 4px;
                background: #a2c046;
                color: #fff;
            }
            .btn:hover,
            .btn:active,
            .btn:focus,
            .button:hover,
            .button:active,
            .button:focus {
                background-color: #a2c046;
                color: #fff;
                border: 0;
            }
            .btn.style-1,
            .vc_btn.style-1,
            input#place_order {
                border-radius: 4px;
                background-color: #a2c046;
                color: #fff !important;
            }
            .btn.style-1:hover,
            .btn.style-1:active,
            .btn.style-1:focus,
            .vc_btn.style-1:hover,
            .vc_btn.style-1:active,
            .vc_btn.style-1:focus {
                background-color: #b5d64b;
                color: #fff !important;
            }
            .btn.slider,
            .input#place_order {
                border-radius: 4px;
                background-color: #a2c046;
                color: #fff;
            }
            .btn.slider:hover,
            .btn.slider:active,
            .btn.slider:focus {
                background-color: #a2c046;
                color: #fff;
            }
            .btn.style-2,
            .vc_btn.style-2 {
                border-radius: 4px;
                border: 2px solid #a2c046;
                background-color: #a2c046;
                color: #ffffff !important;
            }
            .btn.style-2:hover,
            .btn.style-2:active,
            .btn.style-2:focus,
            .vc_btn.style-2:hover,
            .vc_btn.style-2:active,
            .vc_btn.style-2:focus {
                background-color: #b5d64b;
                color: #ffffff !important;
                border-color: #a2c046;
                border: 2px solid #a2c046;
            }
            .btn.style-3,
            .vc_btn.style-3 {
                border: 2px solid #a2c046;
                border-radius: 4px;
                background-color: transparent;
                color: #a2c046 !important;
            }
            .btn.style-3:hover,
            .btn.style-3:active,
            .btn.style-3:focus,
            .vc_btn.style-3:hover,
            .vc_btn.style-3:active,
            .vc_btn.style-3:focus {
                border: 2px solid #a2c046;
                background-color: #a2c046;
                color: #ffffff !important;
            }
            .btn.style-4,
            .vc_btn.style-4 {
                padding-left: 0;
                background-color: transparent;
                color: #000 !important;
                border: none;
            }
            .btn.style-4:hover,
            .btn.style-4:active,
            .btn.style-4:focus,
            .vc_btn.style-4:hover,
            .vc_btn.style-4:active,
            .vc_btn.style-4:focus {
                padding-left: 0;
                background: none;
                color: #a2c046 !important;
                border: none;
                border-color: transparent;
                outline: none;
            }
            .btn.style-5,
            .vc_btn.style-5 {
                background-color: #c3c3c3 !important;
                color: #fff !important;
                border: none;
            }
            .btn.style-5:hover,
            .btn.style-5:active,
            .btn.style-5:focus,
            .vc_btn.style-5:hover,
            .vc_btn.style-5:active,
            .vc_btn.style-5:focus {
                background-color: #737373 !important;
                color: #fff !important;
            }
            .menu-button {
                background-color: #a0c031;
                color: #fff;
                border: none;
            }
            .menu-button:hover,
            .menu-button:focus {
                background-color: #b9c812;
                color: #fff;
                border: none;
            }
        </style>
        <link rel="stylesheet" id="custom-css" href="http://anpsthemes.com/florist-new-demos/2/wp-content/themes/florist/custom.css?ver=4.9.3" type="text/css" media="all" />
        <link rel="stylesheet" id="contact-form-7-css" href="http://anpsthemes.com/florist-new-demos/2/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=4.9.2" type="text/css" media="all" />
        <link rel="stylesheet" id="rs-plugin-settings-css" href="http://anpsthemes.com/florist-new-demos/2/wp-content/plugins/revslider/public/assets/css/settings.css?ver=5.4.6.4" type="text/css" media="all" />
        <style id="rs-plugin-settings-inline-css" type="text/css">
            .tp-caption a {
                color: #ff7302;
                text-shadow: none;
                -webkit-transition: all 0.2s ease-out;
                -moz-transition: all 0.2s ease-out;
                -o-transition: all 0.2s ease-out;
                -ms-transition: all 0.2s ease-out;
            }
            .tp-caption a:hover {
                color: #ffa902;
            }
            .tp-caption a {
                color: #ff7302;
                text-shadow: none;
                -webkit-transition: all 0.2s ease-out;
                -moz-transition: all 0.2s ease-out;
                -o-transition: all 0.2s ease-out;
                -ms-transition: all 0.2s ease-out;
            }
            .tp-caption a:hover {
                color: #ffa902;
            }
        </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" type="text/css" media="all" />

        <link rel="stylesheet" id="prettyPhoto-css" href="http://anpsthemes.com/florist-new-demos/2/wp-content/themes/florist/css/prettyPhoto.css?ver=4.9.3" type="text/css" media="all" />
        <link rel="stylesheet" id="font-awesome-css" href="http://anpsthemes.com/florist-new-demos/2/wp-content/plugins/js_composer/assets/lib/bower/font-awesome/css/font-awesome.min.css?ver=5.4.5" type="text/css" media="all" />
        <link rel="stylesheet" id="owl-css-css" href="http://anpsthemes.com/florist-new-demos/2/wp-content/themes/florist/js/owl/assets/owl.carousel.css?ver=4.9.3" type="text/css" media="all" />
        <link rel="stylesheet" id="pikaday-css" href="http://anpsthemes.com/florist-new-demos/2/wp-content/themes/florist/css/pikaday.css?ver=4.9.3" type="text/css" media="all" />
        <link rel="stylesheet" id="florist-css" href="http://anpsthemes.com/florist-new-demos/2/wp-content/themes/florist/css/florist.css?ver=4.9.3" type="text/css" media="all" />
        <link rel="stylesheet" id="transition-css" href="http://anpsthemes.com/florist-new-demos/2/wp-content/themes/florist/css/transitions/transition-4.css?ver=4.9.3" type="text/css" media="all" />
        <link rel="stylesheet" id="js_composer_front-css" href="http://anpsthemes.com/florist-new-demos/2/wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=5.4.5" type="text/css" media="all" />
        <script type="text/javascript" src="http://anpsthemes.com/florist-new-demos/2/wp-includes/js/jquery/jquery.js?ver=1.12.4"></script>
        <script type="text/javascript" src="http://anpsthemes.com/florist-new-demos/2/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1"></script>
        <script type="text/javascript" src="http://anpsthemes.com/florist-new-demos/2/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js?ver=5.4.6.4"></script>
        <script type="text/javascript" src="http://anpsthemes.com/florist-new-demos/2/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js?ver=5.4.6.4"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/fontawesome.min.js"></script>

        <script type="text/javascript">
            /* <![CDATA[ */
            var wc_add_to_cart_params = {
                ajax_url: "\/florist-new-demos\/2\/wp-admin\/admin-ajax.php",
                wc_ajax_url: "http:\/\/anpsthemes.com\/florist-new-demos\/2\/?wc-ajax=%%endpoint%%",
                i18n_view_cart: "View cart",
                cart_url: "http:\/\/anpsthemes.com\/florist-new-demos\/2\/cart\/",
                is_cart: "",
                cart_redirect_after_add: "no",
            };
            /* ]]> */
        </script>
        <script type="text/javascript" src="http://anpsthemes.com/florist-new-demos/2/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=3.2.6"></script>
        <script type="text/javascript" src="http://anpsthemes.com/florist-new-demos/2/wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart.js?ver=5.4.5"></script>
        <link rel="https://api.w.org/" href="http://anpsthemes.com/florist-new-demos/2/wp-json/" />
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://anpsthemes.com/florist-new-demos/2/xmlrpc.php?rsd" />
        <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://anpsthemes.com/florist-new-demos/2/wp-includes/wlwmanifest.xml" />
        <meta name="generator" content="WordPress 4.9.3" />
        <meta name="generator" content="WooCommerce 3.2.6" />
        <link rel="canonical" href="http://anpsthemes.com/florist-new-demos/2/" />
        <link rel="shortlink" href="http://anpsthemes.com/florist-new-demos/2/" />
        <link rel="alternate" type="application/json+oembed" href="http://anpsthemes.com/florist-new-demos/2/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fanpsthemes.com%2Fflorist-new-demos%2F2%2F" />
        <link rel="alternate" type="text/xml+oembed" href="http://anpsthemes.com/florist-new-demos/2/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fanpsthemes.com%2Fflorist-new-demos%2F2%2F&#038;format=xml" />
        <noscript>
            <style>
                .woocommerce-product-gallery {
                    opacity: 1 !important;
                }
            </style>
        </noscript>
        <style type="text/css">
            .recentcomments a {
                display: inline !important;
                padding: 0 !important;
                margin: 0 !important;
            }
        </style>
        <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress." />
        <!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="http://anpsthemes.com/florist-new-demos/2/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen" /><![endif]-->
        <meta name="generator" content="Powered by Slider Revolution 5.4.6.4 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
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
        <style type="text/css" data-type="vc_shortcodes-custom-css">
            .vc_custom_1442566995341 {
                margin-top: -60px !important;
                margin-bottom: 0px !important;
            }
            .vc_custom_1472630244531 {
                padding-top: 20px !important;
                padding-bottom: 60px !important;
                background-color: #f6f6f6 !important;
            }
            .vc_custom_1472806233918 {
                background-color: #262626 !important;
                background-position: center !important;
                background-repeat: no-repeat !important;
                background-size: cover !important;
            }
            .vc_custom_1441876674168 {
                margin-top: 40px !important;
            }
            .vc_custom_1472720566344 {
                padding-top: 50px !important;
                padding-bottom: 50px !important;
                background-image: url(http://anpsthemes.com/florist-new-demos/2/wp-content/uploads/2014/11/statement-new.jpg?id=1038) !important;
                background-position: center !important;
                background-repeat: no-repeat !important;
                background-size: cover !important;
            }
            .vc_custom_1442413201247 {
                padding-top: 30px !important;
                padding-bottom: 30px !important;
            }
            .vc_custom_1472806316892 {
                padding-top: 0px !important;
                padding-bottom: 0px !important;
            }
            .vc_custom_1442828076712 {
                margin-top: 70px !important;
            }
        </style>
        <noscript>
            <style type="text/css">
                .wpb_animate_when_almost_visible {
                    opacity: 1;
                }
            </style>
        </noscript>
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
                                    <i class="fa fa-clock" style="color: #ffffff;"></i><span class="important" style="color: #3f5b03 !important;"> Jam Buka</span><br />
                                    <span style="color: #70862d;">Senin - Sabtu: 08:00 - 17:00</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="header-wrap">
                    <div class="site-search type-2" id="site-search">
                        <div class="container">
                            <form role="search" method="get" class="site-search-form" action="http://anpsthemes.com/florist-new-demos/2">
                                <input name="s" type="text" class="site-search-input" placeholder="type and press &#8216;enter&#8217;" />
                            </form>
                            <button class="site-search-close">&times;</button>
                        </div>
                    </div>
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
                                            <a href="/about">Tentang</a>
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
                                            <a href="http://anpsthemes.com/florist-new-demos/2/contact-us/">{{ Auth::user()->name }}</a>
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
    <div id="app">
     
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <footer class="site-footer style-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-xs-6">
                            <ul>
                                <li id="anpsimages-2" class="widget-container widget_anpsimages">
                                    <img width="225" height="42" src="http://localhost/ib-2020/logo2.png" class="attachment-full size-full" alt="" />
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
                                    <h3 class="widget-title">Jam Operasional</h3>
                                    <table class="working-hours">
                                        <tbody>
                                            <tr>
                                                <th>Senin</th>
                                                <td>08:00-17:00</td>
                                            </tr>
                                            <tr>
                                                <th>Selasa</th>
                                                <td>08:00-17:00</td>
                                            </tr>
                                            <tr>
                                                <th>Rabu</th>
                                                <td>08:00-17:00</td>
                                            </tr>
                                            <tr>
                                                <th>Kamis</th>
                                                <td>08:00-17:00</td>
                                            </tr>
                                            <tr>
                                                <th>Jumat</th>
                                                <td>08:00-17:00</td>
                                            </tr>
                                            <tr>
                                                <th>Sabtu</th>
                                                <td>08:00-15:00</td>
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
                            <div class="col-md-12">
                            <p style="text-align:center">Sragen Florist | © 2020, All rights reserved</p>
                        </div>
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
        <input type="hidden" id="theme-path" value="http://anpsthemes.com/florist-new-demos/2/wp-content/themes/florist" />
        <script type="text/javascript">
            function revslider_showDoubleJqueryError(sliderID) {
                var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
                errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
                errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
                errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
                errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
                jQuery(sliderID).show().html(errorMessage);
            }
        </script>
        <script type="text/javascript" src="http://anpsthemes.com/florist-new-demos/2/wp-includes/js/comment-reply.min.js?ver=4.9.3"></script>
        <script type="text/javascript">
            /* <![CDATA[ */
            var wpcf7 = { apiSettings: { root: "http:\/\/anpsthemes.com\/florist-new-demos\/2\/wp-json\/contact-form-7\/v1", namespace: "contact-form-7\/v1" }, recaptcha: { messages: { empty: "Please verify that you are not a robot." } } };
            /* ]]> */
        </script>
        <script type="text/javascript" src="http://anpsthemes.com/florist-new-demos/2/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=4.9.2"></script>
        <script type="text/javascript" src="http://anpsthemes.com/florist-new-demos/2/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70"></script>
        <script type="text/javascript" src="http://anpsthemes.com/florist-new-demos/2/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4"></script>
        <script type="text/javascript">
            /* <![CDATA[ */
            var woocommerce_params = { ajax_url: "\/florist-new-demos\/2\/wp-admin\/admin-ajax.php", wc_ajax_url: "http:\/\/anpsthemes.com\/florist-new-demos\/2\/?wc-ajax=%%endpoint%%" };
            /* ]]> */
        </script>
        <script type="text/javascript" src="http://anpsthemes.com/florist-new-demos/2/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=3.2.6"></script>
        <script type="text/javascript">
            /* <![CDATA[ */
            var wc_cart_fragments_params = {
                ajax_url: "\/florist-new-demos\/2\/wp-admin\/admin-ajax.php",
                wc_ajax_url: "http:\/\/anpsthemes.com\/florist-new-demos\/2\/?wc-ajax=%%endpoint%%",
                fragment_name: "wc_fragments_4e917ace7e74718bb9f026d94ecadd2d",
            };
            /* ]]> */
        </script>
        <script type="text/javascript" src="http://anpsthemes.com/florist-new-demos/2/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=3.2.6"></script>
        <script type="text/javascript" src="http://anpsthemes.com/florist-new-demos/2/wp-content/plugins/js_composer/assets/lib/bower/isotope/dist/isotope.pkgd.min.js?ver=5.4.5"></script>
        <script type="text/javascript" src="http://anpsthemes.com/florist-new-demos/2/wp-content/themes/florist/js/moment.js?ver=4.9.3"></script>
        <script type="text/javascript" src="http://anpsthemes.com/florist-new-demos/2/wp-content/themes/florist/js/pikaday.js?ver=4.9.3"></script>
        <script type="text/javascript" src="http://anpsthemes.com/florist-new-demos/2/wp-content/themes/florist/js/bootstrap/bootstrap.min.js?ver=4.9.3"></script>
        <script type="text/javascript" src="http://anpsthemes.com/florist-new-demos/2/wp-content/plugins/js_composer/assets/lib/waypoints/waypoints.min.js?ver=5.4.5"></script>
        <script type="text/javascript" src="http://anpsthemes.com/florist-new-demos/2/wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.min.js?ver=3.1.6"></script>
        <script type="text/javascript" src="http://anpsthemes.com/florist-new-demos/2/wp-content/themes/florist/js/parallax.js?ver=4.9.3"></script>
        <script type="text/javascript">
            /* <![CDATA[ */
            var anps = { search_placeholder: "Search..." };
            /* ]]> */
        </script>
        <script type="text/javascript" src="http://anpsthemes.com/florist-new-demos/2/wp-content/themes/florist/js/functions.js?ver=4.9.3"></script>
        <script type="text/javascript" src="http://anpsthemes.com/florist-new-demos/2/wp-includes/js/imagesloaded.min.js?ver=3.2.0"></script>
        <script type="text/javascript" src="http://anpsthemes.com/florist-new-demos/2/wp-content/themes/florist/js/doubletaptogo.js?ver=4.9.3"></script>
        <script type="text/javascript" src="http://anpsthemes.com/florist-new-demos/2/wp-content/themes/florist/js/owl/owl.carousel.js?ver=4.9.3"></script>
        <script type="text/javascript" src="http://anpsthemes.com/florist-new-demos/2/wp-content/themes/florist/js/quantity_woo23.js?ver=4.9.3"></script>
        <script type="text/javascript">
            /* <![CDATA[ */
            var newsletter = {
                messages: { email_error: "The email is not correct", name_error: "The name is not correct", surname_error: "The last name is not correct", privacy_error: "You must accept the privacy statement" },
                profile_max: "20",
            };
            /* ]]> */
        </script>
        <script type="text/javascript" src="http://anpsthemes.com/florist-new-demos/2/wp-content/plugins/newsletter/subscription/validate.js?ver=5.2.1"></script>
        <script type="text/javascript" src="http://anpsthemes.com/florist-new-demos/2/wp-includes/js/wp-embed.min.js?ver=4.9.3"></script>
        <script type="text/javascript" src="http://anpsthemes.com/florist-new-demos/2/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=5.4.5"></script>

</body>
</html>
