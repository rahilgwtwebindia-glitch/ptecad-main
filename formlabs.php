<!DOCTYPE html>
<html lang="en">

<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formlabs</title>

    <!--=====FAB ICON=======-->
    <link rel="shortcut icon" href="assets/img/logo/titel2.png" type="image/x-icon">


    <!--=====CSS=======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/slick-slider.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/mobile-menu.css">
    <link rel="stylesheet" href="assets/css/main.css">



    <!--=====JQUERY=======-->
    <script src="assets/js/jquery-3-7-1.min.js"></script>
</head>

<body class="body comon-body tg-heading-subheading animation-style3">


    <!--=====progress END=======-->

    <div class="paginacontainer">

        <div class="progress-wrap progress-wrap2">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>

    </div>

    <!--=====progress END=======-->

    <!-- Preloader -->
    <?php include "header.php" ?>
    <!--=====HEADER END=======-->
    <!--=====Mobile header end=======-->



    <!--=====HERO AREA START=======-->

    <div class="common-hero">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-lg-6 m-auto">
                    <div class="main-heading">
                        <h1> Formlabs
                        </h1>
                        <div class="space16"></div>
                        <span class="span"><img src="assets/img/icons/span2.png" alt=""> <a href="index.php">Home</a> <span class="arrow"><i class="fa-regular fa-angle-right"></i></span> Formlabs</span>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--=====HERO AREA END=======-->



    <style>
        /* ========== Base ========== */
        * {
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            color: #212529;
            background: #fff;
            margin: 0;
            line-height: 1.6;
        }

        a {
            color: #0088cc;
            text-decoration: none;
        }

        a:hover {
            color: #006699;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .text-color-light {
            color: #fff !important;
        }

        .text-color-dark {
            color: #212529 !important;
        }

        .text-color-primary {
            color: #0088cc !important;
        }

        .bg-color-light {
            background-color: #f7f7f7 !important;
        }

        .bg-color-light-scale-2 {
            background-color: #f0f0f0 !important;
        }

        .section {
            padding: 3.5rem 0;
        }

        .m-0 {
            margin: 0 !important;
        }

        .border-0 {
            border: 0 !important;
        }

        .appear-animation {
            opacity: 1;
        }

        .visually-hidden {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0;
        }

        .spanErrorClass {
            color: #dc3545;
            font-size: 0.85rem;
            display: none;
        }

        /* ========== Buttons ========== */
        .btn-rounded {
            border-radius: 50px !important;
        }

        .btn-primary,
        .btn-gradient-main {
            background: linear-gradient(90deg, #00a0e3 0%, #00c08b 100%);
            border: none;
            color: #fff !important;
            font-weight: 600;
            letter-spacing: 0.03em;
            padding: 0.65rem 1.75rem;
        }

        .btn-primary:hover,
        .btn-gradient-main:hover {
            background: linear-gradient(90deg, #0088cc 0%, #00a070 100%);
            color: #fff !important;
        }

        .btn-outline.text-color-light,
        .btn-outline-light-opacity-2 {
            border: 1.5px solid rgba(255, 255, 255, 0.85);
            color: #fff !important;
            background: transparent;
            border-radius: 50px;
            padding: 0.6rem 1.75rem;
            font-weight: 600;
            letter-spacing: 0.04em;
        }

        .btn-outline.text-color-light:hover,
        .btn-outline-light-opacity-2:hover {
            background: #fff;
            color: #0a1628 !important;
        }

        /* ========== Brand Intro ========== */
        #brand-intro-section {
            background: #f0f0f0;
            padding: 3.5rem 0;
            text-align: center;
        }

        #brand-intro-section svg {
            margin-bottom: 1.25rem;
        }

        #brand-intro-section .carousel-content {
            color: #444;
            max-width: 820px;
            margin: 0 auto;
            font-size: 0.98rem;
            line-height: 1.7;
        }

        /* ========== About section ========== */
        .brandAboutInfo .row {
            align-items: center;
        }

        .brandAboutInfo h1 {
            font-size: clamp(1.4rem, 2.5vw, 1.9rem);
            font-weight: 700;
            line-height: 1.3;
            margin-bottom: 1.25rem;
        }

        .brandAboutInfo p {
            color: #555;
            font-size: 0.98rem;
            line-height: 1.7;
        }

        .brandAboutInfo .img-fluid {
            border-radius: 0.5rem;
        }

        /* ========== Products section ========== */
        .dolbyProducts h2 {
            font-size: clamp(1.3rem, 2.4vw, 1.7rem);
            font-weight: 600;
            text-align: center;
            margin-bottom: 2rem;
            line-height: 1.4;
        }

        .tabs .nav-tabs {
            border: none;
            justify-content: center;
            gap: 1.5rem;
            margin-bottom: 0.75rem;
        }

        .tabs .nav-tabs .nav-link {
            color: #888;
            border: none;
            border-bottom: 2.5px solid transparent;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 0.04em;
            padding: 0.5rem 0.25rem;
            background: transparent;
        }

        .tabs .nav-tabs .nav-link.active,
        .tabs .nav-tabs .nav-link:hover {
            color: #0088cc;
            border-bottom-color: #0088cc;
        }

        .tab-content .tabs .nav-tabs {
            gap: 1.25rem;
            margin-top: 0.5rem;
            margin-bottom: 1.5rem;
        }

        .tab-content .tabs .nav-tabs .nav-link {
            font-size: 0.8rem;
            color: #aaa;
        }

        .tab-content .tabs .nav-tabs .nav-link.active {
            color: #0088cc;
        }

        /* Product cards */
        .portfolio-item {
            background: #fff;
            border: 1px solid #e8e8e8;
            border-radius: 0.6rem;
            padding: 1.75rem 1rem 1.25rem;
            transition: box-shadow 0.25s ease, transform 0.25s ease, border-color 0.25s ease;
            height: 100%;
            position: relative;
            overflow: hidden;
        }

        .portfolio-item:hover {
            box-shadow: 0 10px 28px rgba(0, 0, 0, 0.1);
            border-color: #cce5f5;
            transform: translateY(-4px);
        }

        .productsImgBox {
            height: 160px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 0.5rem;
        }

        .productsImgBox img {
            max-height: 150px;
            width: auto;
            object-fit: contain;
        }

        .portfolio-item p,
        .productsName {
            font-size: 0.8rem;
            font-weight: 700;
            letter-spacing: 0.04em;
            text-transform: uppercase;
            margin: 0.75rem 0 0;
            color: #333;
        }

        .ribbon {
            position: absolute;
            top: 0;
            right: 0;
            background: #e74c3c;
            color: #fff;
            font-size: 0.65rem;
            font-weight: 700;
            padding: 4px 14px 4px 10px;
            z-index: 2;
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%, 8px 50%);
            letter-spacing: 0.05em;
        }

        .productsBoxLink {
            text-decoration: none;
            display: block;
            color: inherit;
        }

        .productsBoxLink:hover .productsName {
            color: #0088cc;
        }

        button[data-bs-toggle="modal"] {
            background: none;
            border: none;
            padding: 0;
            width: 100%;
            cursor: pointer;
            text-align: center;
        }

        /* ========== Materials Library ========== */
        #brandsProducts+.mateials,
        .mateials {
            padding: 0;
        }

        .mateials button {
            display: block;
            width: 100%;
            border: none;
            padding: 0;
            background: none;
        }

        .mateials img {
            width: 100%;
            display: block;
            border-radius: 0;
        }

        .webViewDesign {
            background: linear-gradient(90deg, #0a1628 0%, #1a2a3a 50%, #0d1a28 100%);
            min-height: 280px;
            position: relative;
        }

        /* ========== FAQ Accordion ========== */
        #faq h2 {
            font-size: 1.6rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }

        .accordion-modern-status .card {
            border: none;
            margin-bottom: 0.5rem;
            border-radius: 0.35rem;
            overflow: hidden;
        }

        .accordion-modern-status .card-header {
            background: #e9ecef;
            padding: 0;
            border: none;
        }

        .accordion-modern-status .accordion-toggle {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 1.25rem;
            color: #333;
            text-decoration: none;
            font-weight: 500;
            font-size: 0.95rem;
            width: 100%;
        }

        .accordion-modern-status .accordion-toggle:not(.collapsed),
        .accordion-modern-status .card-header:has(.accordion-toggle:not(.collapsed)) {
            background: #0088cc !important;
        }

        .accordion-modern-status .accordion-toggle:not(.collapsed) {
            color: #fff !important;
        }

        .accordion-modern-status .card-body {
            padding: 1.1rem 1.25rem 1.35rem;
            background: #fff;
            color: #555;
            font-size: 0.95rem;
            line-height: 1.65;
            border: 1px solid #e9ecef;
            border-top: none;
        }

        .accordion-toggle::after {
            content: "▾";
            font-size: 0.9rem;
            opacity: 0.7;
            transition: transform 0.2s;
        }

        .accordion-toggle:not(.collapsed)::after {
            content: "▴";
            color: #fff;
        }

        /* ========== Related Blogs ========== */
        #blog {
            background: #fff;
            padding: 3rem 0 4rem;
        }

        .custom-highlight-text-1 {
            color: #0088cc;
            font-weight: 700;
            letter-spacing: 0.12em;
            font-size: 0.9rem;
            text-transform: uppercase;
        }

        .list-card {
            background: #fff;
            border-radius: 0.6rem;
            overflow: hidden;
            border: 1px solid #eaeaea;
            transition: box-shadow 0.2s;
            height: 100%;
            display: flex;
            flex-direction: row;
            align-items: stretch;
        }

        .list-card:hover {
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
        }

        .list-card .thumbnail {
            flex: 0 0 140px;
            overflow: hidden;
        }

        .list-img {
            width: 140px;
            height: 100%;
            min-height: 100px;
            object-fit: cover;
            display: block;
        }

        .list-card .card-body {
            padding: 1rem 1.25rem;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .list-card .card-title {
            font-size: 0.95rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #222;
        }

        .featured-footer {
            font-size: 0.8rem;
            color: #888;
        }

        .featured-footer i {
            margin-right: 2px;
        }

        /* ========== Modals ========== */
        .productDetailModal .modal-dialog {
            max-width: 960px;
        }

        .productDetailModal .modal-body {
            max-height: 80vh;
            overflow-y: auto;
            padding: 1.5rem;
        }

        .productDetailModal .modal-title {
            font-size: 1.2rem;
            font-weight: 600;
            letter-spacing: 0.03em;
        }

        .formlabsImgBox {
            width: 100%;
            max-width: 300px;
            height: 280px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
        }

        .formlabsImgBox img {
            max-height: 100%;
            max-width: 100%;
            object-fit: contain;
        }

        .formlabsMiniImgBox {
            width: 72px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            border: 1px solid #dee2e6;
            border-radius: 4px;
            overflow: hidden;
            margin: 0 4px;
        }

        .formlabsMiniImgBox img {
            max-height: 100%;
            max-width: 100%;
            object-fit: contain;
        }

        .formlabsSpec {
            display: flex;
            justify-content: space-between;
            gap: 1.5rem;
            flex-wrap: wrap;
            margin: 1.25rem 0;
            font-size: 0.9rem;
        }

        .formlabsSpec strong {
            display: block;
            margin-bottom: 0.2rem;
        }

        .productInfoCenter h3 {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
        }

        .btn-close {
            font-size: 1.5rem;
            background: none;
            border: none;
            opacity: 0.6;
            line-height: 1;
        }

        .btn-close:hover {
            opacity: 1;
        }


        /* ===== Gallery slider fix ===== */
        .thumb-gallery-wrapper {
            position: relative;
        }

        .thumb-gallery-detail {
            position: relative;
        }

        /* Arrows overlaid on the main image, left and right */
        .thumb-gallery-detail .owl-nav {
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            transform: translateY(-50%);
            display: flex;
            justify-content: space-between;
            margin: 0 !important;
            pointer-events: none;
            /* let clicks pass through the empty middle */
        }

        .thumb-gallery-detail .owl-nav.disabled {
            display: none;
        }

        .thumb-gallery-detail .owl-nav button.owl-prev,
        .thumb-gallery-detail .owl-nav button.owl-next {
            pointer-events: auto;
            width: 34px;
            height: 34px;
            margin: 0 6px !important;
            border-radius: 50%;
            border: 0;
            background: rgba(255, 255, 255, 0.9) !important;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.25);
            color: #222 !important;
            font-size: 20px;
            line-height: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 0 3px;
        }

        .thumb-gallery-detail .owl-nav button:hover {
            background: #0088cc !important;
            color: #fff !important;
        }

        /* Thumbnails: fill the owl item and look clickable */
        .thumb-gallery-thumbs .owl-item {
            cursor: pointer;
        }

        .thumb-gallery-thumbs .formlabsMiniImgBox {
            width: 100%;
            margin: 0;
            opacity: 0.6;
            transition: opacity .2s, border-color .2s;
        }

        .thumb-gallery-thumbs .owl-item.is-active-thumb .formlabsMiniImgBox,
        .thumb-gallery-thumbs .formlabsMiniImgBox:hover {
            opacity: 1;
            border-color: #0088cc;
        }

        .thumb-gallery-thumbs .formlabsMiniImgBox img {
            width: auto;
        }








        /* ========== Responsive ========== */
        @media (max-width: 991px) {
            .list-card {
                flex-direction: column;
            }

            .list-card .thumbnail {
                flex: none;
            }

            .list-img {
                width: 100%;
                height: 160px;
            }
        }

        @media (max-width: 575px) {
            .productsImgBox {
                height: 120px;
            }

            .productsImgBox img {
                max-height: 110px;
            }
        }

        body {
            padding-right: 0 !important;
        }
    </style>
    </head>

    <body>
        <div role="main" class="main" id="home">

            <!-- Brand Intro Section -->
            <section class="section m-0 border-0 bg-color-light-scale-2" id="brand-intro-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 792 176" enable-background="new 0 0 792 176" xml:space="preserve" width="250">
                                <g>
                                    <g>
                                        <path d="M90.418,48.038c-0.137,0.959-0.548,1.644-1.646,1.644c-0.274,0-0.548,0-1.234-0.137c-1.645-0.274-4.936-0.822-8.089-0.822 c-3.153,0-5.073,0.411-6.443,1.508c-1.234,1.097-1.646,2.879-1.646,5.483v7.541H87.95c1.234,0,2.193,0.822,2.193,2.057v12.75 c0,1.234-0.959,1.92-2.193,1.92H71.36v53.194c0,1.234-0.959,2.057-2.331,2.057H49.699c-1.371,0-2.331-0.822-2.331-2.057V79.982 H36.811c-1.371,0-2.331-0.686-2.331-1.92v-12.75c0-1.234,0.96-2.057,2.331-2.057h10.557v-8.638 c0-14.943,7.677-22.484,24.267-22.484c10.694,0,16.863,1.646,18.92,2.331c1.371,0.411,1.645,1.646,1.508,2.331L90.418,48.038z" />
                                        <path d="M129.94,137.016c-31.533,0-35.509-16.452-35.509-37.702c0-21.251,3.976-37.84,35.509-37.84 c31.533,0,35.646,16.589,35.646,37.84C165.587,120.563,161.474,137.016,129.94,137.016z M129.94,77.24 c-10.693,0-11.242,6.307-11.242,22.073c0,15.629,0.549,21.936,11.242,21.936c10.831,0,11.243-6.307,11.243-21.936 C141.183,83.547,140.771,77.24,129.94,77.24z" />
                                        <path d="M214.845,79.022c-7.677,0-14.396,0.822-15.629,1.097v53.058c0,1.234-0.822,2.057-2.193,2.057h-19.468 c-1.234,0-2.194-0.822-2.194-2.057V72.441c0-4.936,4.387-6.443,12.477-8.226c6.581-1.371,15.766-2.468,24.267-2.468h2.331 c1.234,0,1.919,0.273,2.468,0.822c0.412,0.411,0.686,1.097,0.686,2.193v11.105C217.587,77.515,217.587,79.022,214.845,79.022z" />
                                        <path d="M335.766,135.233h-19.468c-1.371,0-2.194-0.822-2.194-2.057V86.562c0-7.266-3.702-9.597-9.048-9.597 c-4.387,0-9.597,0.96-10.831,1.233v54.978c0,1.234-0.959,2.057-2.331,2.057h-19.468 c-1.371,0-2.194-0.822-2.194-2.057V86.562 c0-7.266-3.153-9.597-8.5-9.597c-4.25,0-10.146,0.96-11.517,1.233v54.978c0,1.234-0.822,2.057-2.193,2.057h-19.468 c-1.371,0-2.194-0.822-2.194-2.057V72.578c0-5.072,4.251-6.58,12.613-8.362c6.718-1.371,17.138-2.742,25.775-2.742 c8.637,0,14.533,2.057,18.372,4.524c2.605-0.96,14.258-4.524,25.912-4.524c17.549,0,28.928,3.839,28.928,21.662v50.041 C337.96,134.411,337.137,135.233,335.766,135.233z" />
                                        <path d="M376.619,133.588c0,0.96-0.548,1.097-1.097,1.371c-1.508,0.686-4.798,1.646-9.734,1.646 c-8.226,0-13.71-3.976-13.71-14.121V36.11c0-1.098,0.686-1.782,1.645-2.057l7.403-1.92c0.96-0.274,1.782,0.549,1.782,1.646v88.43 c0,4.936,3.428,5.621,6.169,5.621c1.919,0,3.839-0.274,4.799-0.549l0.548-0.137c0.411,0,0.96,0.137,1.097,0.96l0.96,4.661 C376.619,133.314,376.619,133.451,376.619,133.588z" />
                                        <path d="M430.334,134.959c-3.976,0.96-10.557,2.057-17.822,2.057c-11.791,0-31.396-0.411-31.396-22.621 c0-18.098,9.734-19.331,23.719-21.525l25.912-4.25v-6.443c0-4.388-0.138-7.952-4.936-9.734c-2.605-1.097-6.443-1.646-12.476-1.646 c-10.557,0-19.606,2.605-25.364,3.977c-1.371,0.274-1.919,0.137-2.193-0.96l-1.234-6.17c-0.274-1.233,0.959-1.782,1.371-1.919 c4.387-1.646,16.178-4.25,28.653-4.25c9.734,0,16.041,1.371,20.017,3.565c6.992,3.702,7.13,10.146,7.13,16.589v39.348 C441.714,130.572,439.794,132.766,430.334,134.959z M430.883,97.257l-26.734,4.525c-6.032,1.097-11.791,2.057-11.791,12.064 c0,13.71,11.242,14.67,20.291,14.67c6.032,0,12.477-0.822,18.234-2.742V97.257z" />
                                        <path d="M464.842,65.241c3.686-1.046,14.478-3.768,23.141-3.768c22.759,0,29.066,11.653,29.066,37.566 c0,26.734-7.267,37.976-32.081,37.976c-9.734,0-18.646-1.645-23.17-3.153c-6.855-2.331-7.13-5.758-7.13-10.831V35.836 c0-1.097,0.549-1.508,1.646-1.782l7.403-1.92c1.234-0.411,1.782,0.823,1.782,1.646v23.855 M486.2,70.385 c-7.54,0-18.234,2.605-20.702,3.291v52.234c1.508,0.549,8.775,2.468,19.194,2.468c15.767,0,21.113-7.403,21.113-29.064 C505.806,77.24,501.967,70.385,486.2,70.385z" />
                                        <path d="M549.8,137.016c-12.065,0-22.484-3.701-24.267-4.387c-0.686-0.274-1.371-0.686-0.96-2.194l1.233-5.21 c0.275-0.959,0.686-1.782,2.194-1.233c0.411,0.137,10.419,3.976,22.073,3.976c11.653,0,18.371-3.701,18.371-12.064 c0-11.379-8.774-10.968-19.469-12.613c-6.718-1.097-23.855-2.331-23.855-20.428c0-17.687,15.767-21.388,27.832-21.388 c11.79,0,20.977,2.468,22.484,2.879c0.96,0.274,1.371,0.822,1.233,1.646l-0.959,6.169c-0.138,0.823-0.549,1.097-1.509,1.097 c-1.919-0.274-12.064-2.604-20.153-2.604c-9.871,0-18.098,2.742-18.098,11.379c0,9.323,9.323,10.42,17.823,11.517 c12.339,1.646,25.638,2.605,25.638,21.251C579.413,132.629,565.703,137.016,549.8,137.016z" />
                                    </g>
                                    <g>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M758.519,50.46c-1.566,5.291-5.203,9.391-8.106,13.894 c-7.206,11.18-14.561,22.264-21.854,33.389c-0.153,0.233-0.265,0.494-0.455,0.852c2.424,1.658,4.861,3.232,7.185,4.962 c0.985,0.734,1.968,1.666,2.536,2.73c1.413,2.651,0.549,5.738-1.806,7.688c-8.358,6.922-16.801,13.748-25,20.855 c-4.35,3.771-9.548,1.635-11.084-2.995c-5.864-17.674-11.964-35.269-17.979-52.892c-0.101-0.297-0.236-0.583-0.479-1.172 c-0.455,1.277-0.825,2.278-1.168,3.289c-5.651,16.627-11.3,33.254-16.948,49.882c-0.196,0.58-0.359,1.172-0.573,1.745 c-1.568,4.197-6.474,5.579-9.952,2.758c-3.435-2.786-6.818-5.637-10.227-8.458c-5.047-4.18-10.072-8.386-15.148-12.53 c-4.102-3.353-3.931-8.016,0.466-11.009c2.497-1.7,4.986-3.411,7.59-5.192c-0.981-1.478-1.897-2.872-2.829-4.255 c-8.698-12.896-17.362-25.812-26.115-38.67c-3.146-4.62-2.011-12.186,3.473-14.987c3.021-1.543,5.889-3.38,8.862-5.019 c3.427-1.89,6.875-1.872,10.255,0.155c16.981,10.186,33.963,20.371,50.923,30.59c0.999,0.603,1.709,0.66,2.752,0.027 c16.863-10.221,33.755-20.396,50.645-30.572c3.613-2.178,7.25-2.206,10.913-0.076c2.793,1.623,5.571,3.281,8.439,4.765 c2.974,1.538,4.371,4.167,5.42,7.113c0.107,0.301,0.179,0.612,0.267,0.919C758.519,48.984,758.519,49.723,758.519,50.46z M749.184,54.646c-0.053-0.077-0.106-0.156-0.157-0.234c-19.904,5.846-39.808,11.692-60.03,17.632 c11.447,7.725,22.64,15.278,33.93,22.896C731.737,81.419,740.459,68.033,749.184,54.646z M674.399,71.97 c-20.015-5.911-39.706-11.727-59.395-17.542c-0.047,0.082-0.093,0.164-0.14,0.247c8.907,13.209,17.813,26.417,26.78,39.715 C652.556,86.921,663.343,79.538,674.399,71.97z M657.143,129.732c4.406-13.047,8.752-25.911,13.096-38.774 c-0.43,0.174-0.682,0.436-0.891,0.727c-4.199,5.854-8.395,11.712-12.592,17.567c-0.572,0.799-1.121,1.615-1.735,2.382 c-2.646,3.305-7.718,3.166-10.149-0.299c-1.69-2.406-3.31-4.86-5.039-7.409c-2.553,1.746-5.021,3.433-7.601,5.197 C640.577,116.027,648.773,122.808,657.143,129.732z M613.146,46.768c14.313,4.246,28.338,8.408,42.361,12.568 c-0.118-0.35-0.303-0.557-0.53-0.693c-9.638-5.799-19.276-11.597-28.926-17.379c-1.108-0.664-2.26-0.585-3.379,0.055 c-2.273,1.298-4.551,2.588-6.823,3.884C615.04,45.663,614.237,46.135,613.146,46.768z M663.606,88.036 c-0.081-0.081-0.162-0.162-0.243-0.243c-5.943,4.069-11.886,8.14-17.912,12.266c1.604,2.354,3.098,4.547,4.66,6.84 C654.716,100.463,659.161,94.249,663.606,88.036z" />
                                    </g>
                                </g>
                            </svg>
                            <p class="mb-0 carousel-content">Founded in 2011 and headquartered in Somerville, Massachusetts, Formlabs is dedicated to democratizing digital fabrication. Our cutting-edge portfolio includes the Form 4, Form 4B, and Form 4L SLA printers, along with the Fuse Series SLS printers. With a strong global presence and a focus on innovation, we empower industries to create everything from high-precision parts to fully customized products. Our comprehensive ecosystem of advanced hardware, post-processing solutions, and high-performance materials continues to set the benchmark for professional 3D printing and <span>shape the future of digital fabrication.</span></p>
                        </div>
                    </div>
                </div>
            </section><!-- End Brand Intro Section -->

            <!-- About brand Section -->
            <section class="section m-0 border-0 brandAboutInfo bg-color-light" id="flowCaptureFeatures">
                <div class="container flowCaptureFeaturesRow">
                    <div class="row">
                        <div class="col-lg-6">
                            <img alt="Formlabs 3D printers" class="img-fluid rounded" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/aboutFormlabs.webp" width="100%" height="100%">
                        </div>
                        <div class="col-lg-6">
                            <h1 class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Precise and Versatile 3D Printing for <br>Professionals Across Industries</h1>
                            <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Formlabs 3D printers are engineered to enhance your industry with advanced stereolithography (SLA) and selective laser sintering (SLS) technology, offering high performance at a fraction of the cost of traditional industrial 3D printers or service bureaus. <br>Whether you’re in engineering, manufacturing, automotive, aerospace, dental, medical, education, entertainment, jewelry, or audio, Formlabs provides precise and versatile solutions tailored to meet the needs of your sector. Elevate your business with innovative 3D printing that delivers exceptional results and cost-efficiency. </p>
                            <div class="mobileBtn">
                                <a href="contact.php"
                                    aria-label="Contact Us Formlabs"
                                    class="btn btn-rounded btn-primary btn-gradient-main btn-effect-6 text-uppercase appear-animation"
                                    data-appear-animation="fadeInUpShorter"
                                    data-appear-animation-delay="400">
                                    Contact Us
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- About brand Section -->

            <!-- Products Section -->
            <section class="section m-0 border-0 dolbyProducts" id="brandsProducts" style="background-color: #f8f9fa;">
                <div class="container">
                    <div class="text-center mb-5">
                        <h2 class="px-5" style="line-height: 36px;">Formlabs Professional 3D Printers: Blazing Speed and Precision to <br>Turn Bold Ideas into Full-Scale Reality</h2>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="tabs tabs-bottom tabs-center tabs-simple mb-0">
                                <ul class="nav nav-tabs pb-3" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active text-uppercase" href="#tabsNavigationSLA" data-bs-toggle="tab" aria-selected="true" role="tab">SLA 3D Printers</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link text-uppercase" href="#tabsNavigationSLS" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">SLS 3D Printers</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="autodeskProductsChildTabs">
                                    <div class="tab-pane active" id="tabsNavigationSLA" role="tabpanel">
                                        <div class="tabs tabs-bottom tabs-center tabs-simple mb-0">
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link active" href="#tabsNavigationSLAPrinters" data-bs-toggle="tab" aria-selected="true" role="tab">Printers</a>
                                                </li>
                                                <!-- <li class="nav-item" role="presentation">
                                                    <a class="nav-link" href="#tabsNavigationSLAPostProcessing" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">Post Processing</a>
                                                </li> -->
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tabsNavigationSLAPrinters" role="tabpanel">
                                                    <div class="row d-flex justify-content-center portfolio-list sort-destination sort-destination-margin sort-destination-items-hardware-acc overflow-visible mt-4 ProductsModalBtn" data-sort-id="portfolio">
                                                        <div class="col-sm-6 col-md-4 col-lg-3 mb-3 isotope-item col-6">
                                                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                                                                <button type="button" aria-label="Form 4L Modal" aria-haspopup="dialog" aria-controls="Formlabs3DPrintersInfoModal" data-bs-toggle="modal" data-bs-target="#Form4LModal">
                                                                    <div class="portfolio-item text-center card pt-4 d-flex align-items-center">
                                                                        <div class="productsImgBox">
                                                                            <img src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/f4L.webp" alt="Form 4L" width="176" height="100%" class="img-fluid">
                                                                        </div>
                                                                        <p class="mt-3 font-weight-bold">Form 4L</p>
                                                                    </div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-4 col-lg-3 mb-3 isotope-item col-6">
                                                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                                                                <button type="button" aria-label="Form 4BL Modal" aria-haspopup="dialog" aria-controls="Formlabs3DPrintersInfoModal" data-bs-toggle="modal" data-bs-target="#Form4BLModal">
                                                                    <div class="portfolio-item text-center card pt-4 d-flex align-items-center">
                                                                        <div class="productsImgBox">
                                                                            <img src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/form4BL.png" alt="Form 4BL" width="188" height="100%" class="img-fluid">
                                                                        </div>
                                                                        <p class="mt-3 font-weight-bold">Form 4BL</p>
                                                                    </div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-4 col-lg-3 mb-3 isotope-item col-6">
                                                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                                                                <button type="button" aria-label="Form 4 Modal" aria-haspopup="dialog" aria-controls="Formlabs3DPrintersInfoModal" data-bs-toggle="modal" data-bs-target="#Form4Modal">
                                                                    <div class="portfolio-item text-center card pt-4 d-flex align-items-center">
                                                                        <div class="productsImgBox">
                                                                            <img src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/f4.jpg" alt="Form 4" width="134" height="100%" class="img-fluid">
                                                                        </div>
                                                                        <p class="mt-3 font-weight-bold">Form 4</p>
                                                                    </div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-4 col-lg-3 mb-3 isotope-item col-6">
                                                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                                                                <button type="button" aria-label="Form 4B Modal" aria-haspopup="dialog" aria-controls="Formlabs3DPrintersInfoModal" data-bs-toggle="modal" data-bs-target="#Form4BModal">
                                                                    <div class="portfolio-item text-center card pt-4 d-flex align-items-center">
                                                                        <div class="productsImgBox">
                                                                            <img src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/f4b.jpg" alt="Form 4B" width="134" height="100%" class="img-fluid">
                                                                        </div>
                                                                        <p class="mt-3 font-weight-bold">Form 4B</p>
                                                                    </div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tabsNavigationSLAPostProcessing" role="tabpanel">
                                                    <div class="row portfolio-list sort-destination sort-destination-margin sort-destination-items-hardware-acc overflow-visible mt-4 ProductsModalBtn" data-sort-id="portfolio">
                                                        <div class="col-sm-6 col-md-4 col-lg-4 mb-3 isotope-item">
                                                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                                                                <button type="button" aria-label="Form Cure L V2 Modal" aria-haspopup="dialog" aria-controls="Formlabs3DPrintersInfoModal" data-bs-toggle="modal" data-bs-target="#formCureLV2Modal">
                                                                    <div class="portfolio-item text-center card pt-4 d-flex align-items-center">
                                                                        <div class="productsImgBox">
                                                                            <img src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/FormCureLV2.webp" alt="Form Cure 2nd Gen" width="200" height="100%" class="img-fluid">
                                                                        </div>
                                                                        <p class="mt-3 font-weight-bold">Form Cure L V2</p>
                                                                    </div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-4 col-lg-4 mb-3 isotope-item">
                                                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                                                                <button type="button" aria-label="Form Cure 2 Modal" aria-haspopup="dialog" aria-controls="Formlabs3DPrintersInfoModal" data-bs-toggle="modal" data-bs-target="#formCure2ndGenModal">
                                                                    <div class="portfolio-item text-center card pt-4 d-flex align-items-center">
                                                                        <div class="productsImgBox">
                                                                            <img src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/FormCure2ndGen.png" alt="Form Cure 2nd Gen" width="200" height="100%" class="img-fluid">
                                                                        </div>
                                                                        <p class="mt-3 font-weight-bold">Form Cure 2<sup style="text-transform: lowercase;">nd</sup> Gen</p>
                                                                    </div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-4 col-lg-4 mb-3 isotope-item">
                                                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                                                                <button type="button" aria-label="Form Wash 2 Modal" aria-haspopup="dialog" aria-controls="Formlabs3DPrintersInfoModal" data-bs-toggle="modal" data-bs-target="#formWashModal">
                                                                    <div class="portfolio-item text-center card pt-4 d-flex align-items-center">
                                                                        <div class="productsImgBox">
                                                                            <img src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/formWash.png" alt="Form Wash (2nd Generation)" width="200" height="100%" class="img-fluid">
                                                                        </div>
                                                                        <p class="mt-3 font-weight-bold">Form Wash 2<sup style="text-transform: lowercase;">nd</sup> Gen</p>
                                                                    </div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-4 col-lg-4 mb-3 isotope-item">
                                                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                                                                <button type="button" aria-label="Form Wash L Modal" aria-haspopup="dialog" aria-controls="Formlabs3DPrintersInfoModal" data-bs-toggle="modal" data-bs-target="#formWashLModal">
                                                                    <div class="portfolio-item text-center card pt-4 d-flex align-items-center">
                                                                        <div class="productsImgBox">
                                                                            <img src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/formWashL.png" alt="Form Wash L" width="200" height="100%" class="img-fluid">
                                                                        </div>
                                                                        <p class="mt-3 font-weight-bold">Form Wash L</p>
                                                                    </div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="tabsNavigationSLS" role="tabpanel">
                                        <div class="tabs tabs-bottom tabs-center tabs-simple mb-0">
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link active" href="#tabsNavigationSLSPrinters" data-bs-toggle="tab" aria-selected="true" role="tab">Printers</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" href="#tabsNavigationSLSPostProcessing" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">Post Processing</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tabsNavigationSLSPrinters" role="tabpanel">
                                                    <div class="row d-flex portfolio-list sort-destination sort-destination-margin sort-destination-items-hardware-acc overflow-visible mt-4 ProductsModalBtn" data-sort-id="portfolio">
                                                        <div class="col-sm-6 col-md-4 col-lg-4 mb-3 isotope-item">
                                                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                                                                <a href="PR.PHP" class="productsBoxLink">
                                                                    <div class="portfolio-item text-center card pt-4 d-flex align-items-center">
                                                                        <span class="ribbon">NEW</span>
                                                                        <div class="productsImgBox">
                                                                            <img src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLS/new/FUSEX1.webp" alt="SLS Printer Fuse X1" width="250" height="100%" class="img-fluid">
                                                                        </div>
                                                                        <p class="mt-3 font-weight-bold productsName">Fuse X1</p>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="col-sm-6 col-md-4 col-lg-4 mb-3 isotope-item">
                                                                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                                                                    <button type="button" aria-label="Fuse X1 Build Unit Modal" aria-haspopup="dialog" aria-controls="Formlabs3DPrintersInfoModal" data-bs-toggle="modal" data-bs-target="#fuseX1BuildUnitModal">
                                                                        <div class="portfolio-item text-center card pt-4 d-flex align-items-center">
                                                                            <span class="ribbon">NEW</span>
                                                                            <div class="productsImgBox">
                                                                                <img src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLS/new/FUSEX1BuildUnit.webp" alt="SLS Printer Fuse X1 Build Unit" width="165" height="100%" class="img-fluid">
                                                                            </div>
                                                                            <p class="mt-3 font-weight-bold">Fuse X1 Build Unit</p>
                                                                        </div>
                                                                    </button>
                                                                </div>
                                                        </div> -->
                                                        <!-- <div class="col-sm-6 col-md-4 col-lg-4 mb-3 isotope-item">
                                                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                                                                <button type="button" aria-label="Fuse X1 Vacuum Conveyer Modal" aria-haspopup="dialog" aria-controls="Formlabs3DPrintersInfoModal" data-bs-toggle="modal" data-bs-target="#FuseX1VacuumConveyerModal">
                                                                    <div class="portfolio-item text-center card pt-4 d-flex align-items-center">
                                                                        <span class="ribbon">NEW</span>
                                                                        <div class="productsImgBox">
                                                                            <img src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLS/new/FUSEX1Vacuum.webp" alt="SLS Printer Fuse X1 Vacuum Conveyer" width="130" height="100%" class="img-fluid">
                                                                        </div>
                                                                        <p class="mt-3 font-weight-bold">Fuse X1 Vacuum Conveyer</p>
                                                                    </div>
                                                                </button>
                                                            </div>
                                                        </div> -->
                                                        <!-- <div class="col-sm-6 col-md-4 col-lg-4 mb-3 isotope-item">
                                                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                                                                <button type="button" aria-label="Fuse X1 Mix Kit Modal" aria-haspopup="dialog" aria-controls="Formlabs3DPrintersInfoModal" data-bs-toggle="modal" data-bs-target="#FuseX1MixKitModal">
                                                                    <div class="portfolio-item text-center card pt-4 d-flex align-items-center">
                                                                        <span class="ribbon">NEW</span>
                                                                        <div class="productsImgBox">
                                                                            <img src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLS/new/FuseX1MixKit.webp" alt="SLS Printer Fuse X1 Mix Kit" width="175" height="100%" class="img-fluid">
                                                                        </div>
                                                                        <p class="mt-3 font-weight-bold">Fuse X1 Mix Kit</p>
                                                                    </div>
                                                                </button>
                                                            </div>
                                                        </div> -->
                                                        <div class="col-sm-6 col-md-4 col-lg-4 mb-3 isotope-item">
                                                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                                                                <button type="button" aria-label="Fuse 1+ 30W Modal" aria-haspopup="dialog" aria-controls="Formlabs3DPrintersInfoModal" data-bs-toggle="modal" data-bs-target="#fuse130WModal">
                                                                    <div class="portfolio-item text-center card pt-4 d-flex align-items-center">
                                                                        <div class="productsImgBox">
                                                                            <img src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLS/Fuse130W.webp" alt="SLS Printer Fuse 1+ 30W" width="180" height="100%" class="img-fluid">
                                                                        </div>
                                                                        <p class="mt-3 font-weight-bold">Fuse 1+ 30W</p>
                                                                    </div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tabsNavigationSLSPostProcessing" role="tabpanel">
                                                    <div class="row d-flex portfolio-list sort-destination sort-destination-margin sort-destination-items-hardware-acc overflow-visible mt-4 ProductsModalBtn" data-sort-id="portfolio">
                                                        <!-- <div class="col-sm-6 col-md-4 col-lg-4 mb-3 isotope-item">
                                                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                                                                <button type="button" aria-label="Fuse Sift X1 Modal" aria-haspopup="dialog" aria-controls="Formlabs3DPrintersInfoModal" data-bs-toggle="modal" data-bs-target="#FuseSiftX1Modal">
                                                                    <div class="portfolio-item text-center card pt-4 d-flex align-items-center">
                                                                        <span class="ribbon">NEW</span>
                                                                        <div class="productsImgBox">
                                                                            <img src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLS/new/FUSESiftX1.webp" alt="SLS Post Processing Fuse Sift X1" width="225" height="100%" class="img-fluid">
                                                                        </div>
                                                                        <p class="mt-3 font-weight-bold">Fuse Sift X1</p>
                                                                    </div>
                                                                </button>
                                                            </div>
                                                        </div> -->
                                                        <!-- <div class="col-sm-6 col-md-4 col-lg-4 mb-3 isotope-item">
                                                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                                                                <button type="button" aria-label="Fuse Blast High Capacity Kit Modal" aria-haspopup="dialog" aria-controls="Formlabs3DPrintersInfoModal" data-bs-toggle="modal" data-bs-target="#FuseBlastHighCapacityKitModal">
                                                                    <div class="portfolio-item text-center card pt-4 d-flex align-items-center">
                                                                        <span class="ribbon">NEW</span>
                                                                        <div class="productsImgBox">
                                                                            <img src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLS/new/FuseBlast.webp" alt="SLS Post Processing Fuse Blast High Capacity Kit" width="225" height="100%" class="img-fluid">
                                                                        </div>
                                                                        <p class="mt-3 font-weight-bold">Fuse Blast High Capacity Kit</p>
                                                                    </div>
                                                                </button>
                                                            </div>
                                                        </div> -->
                                                        <div class="col-sm-6 col-md-4 col-lg-4 mb-3 isotope-item">
                                                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                                                                <button type="button" aria-label="Fuse Sift Modal" aria-haspopup="dialog" aria-controls="Formlabs3DPrintersInfoModal" data-bs-toggle="modal" data-bs-target="#fuseSiftModal">
                                                                    <div class="portfolio-item text-center card pt-4 d-flex align-items-center">
                                                                        <div class="productsImgBox">
                                                                            <img src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLS/fuse1.webp" alt="SLS Post Processing Fuse Sift" width="180" height="100%" class="img-fluid">
                                                                        </div>
                                                                        <p class="mt-3 font-weight-bold">Fuse Sift</p>
                                                                    </div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-4 col-lg-4 mb-3 isotope-item">
                                                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                                                                <button type="button" aria-label="Fuse Blast Modal" aria-haspopup="dialog" aria-controls="Formlabs3DPrintersInfoModal" data-bs-toggle="modal" data-bs-target="#fuseBlastModal">
                                                                    <div class="portfolio-item text-center card pt-4 d-flex align-items-center">
                                                                        <div class="productsImgBox">
                                                                            <img src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLS/fuseBlast1.webp" alt="SLS Post Processing Fuse Blast" width="180" height="100%" class="img-fluid">
                                                                        </div>
                                                                        <p class="mt-3 font-weight-bold">Fuse Blast</p>
                                                                    </div>
                                                                </button>
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
                </div>
            </section><!-- End Products Section -->

            <!-- Materials Section -->
            <section class="section m-0 border-0 dolbyProducts bg-color-light" id="brandsMaterials">
                <div class="container">
                    <div class="text-center mb-5">
                        <h2 class="px-5" style="line-height: 36px;">Formlabs Materials Library</h2>
                        <p>Formlabs offers a versatile material library, enabling you to create products ranging from biocompatible medical devices to durable prototypes. Their materials span categories like General Purpose, Engineering, Dental, Medical, and Jewelry. Explore materials by type (SLA or SLS), applications, compatibility, and characteristics. Find options suited to your specific project needs, including biocompatible and high-precision choices.</p>
                    </div>
                </div>
                <div class="mateials ProductsModalBtn">
                    <button type="button" aria-label="Download Formlabs Material Library" aria-haspopup="dialog" aria-controls="downloadPDFModal" class="lg btn-labeled radius alert webViewDesign" onclick="downloadpdf('pdf/formlabs/FormlabsMaterialLibrary.pdf','Formlabs Materials Library','Formlabs Materials Library')" style="cursor: initial;">
                        <img src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/MaterialsBg2.png" alt="Formlabs Material" width="100%" height="100%" class="img-fluid border-radius-0">
                    </button>
                    <!-- <button type="button" aria-label="Download Formlabs Material Library" aria-haspopup="dialog" aria-controls="downloadPDFModal" class="lg btn-labeled radius alert mobileViewDesign" onclick="downloadpdf('pdf/formlabs/FormlabsMaterialLibrary.pdf','Formlabs Materials Library','Formlabs Materials Library')" style="cursor: initial;">
                        <img src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/MaterialMobile.png" alt="Formlabs Material" width="100%" height="100%" class="img-fluid border-radius-0">
                    </button> -->
                </div>
            </section><!-- End Materials Section -->

            <!-- FAQ's Section -->
            <section class="section m-0 border-0" id="faq" style="background-color: #f8f9fa;">
                <div class="container">
                    <div class="row">
                        <div class="col mb-lg-0">
                            <h2>FAQ's</h2>
                            <div class="accordion accordion-modern-status accordion-modern-status-primary" id="accordionAnsysFaq">
                                <div class="card card-default">
                                    <div class="card-header" id="collapse100Heading574">
                                        <h4 class="card-title m-0">
                                            <a class="accordion-toggle text-color-dark font-weight-bold" data-bs-toggle="collapse" data-bs-target="#collapse100574" aria-expanded="true" aria-controls="collapse100574">
                                                <strong>Q.</strong> Who is the authorized Formlabs distributor in India?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse100574" class="collapse show" aria-labelledby="collapse100Heading574" data-bs-parent="#accordionAnsysFaq">
                                        <div class="card-body">
                                            <p>ARK Infosolutions is the authorized value-added distributor and reseller for Formlabs in India. ARK supports customers with Formlabs 3D printer selection, deployment guidance, materials access, training coordination, and post-sales technical support across India.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card card-default">
                                    <div class="card-header" id="collapse100Heading575">
                                        <h4 class="card-title m-0">
                                            <a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse100575" aria-expanded="false" aria-controls="collapse100575">
                                                <strong>Q.</strong> What is Formlabs and what is it used for?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse100575" class="collapse" aria-labelledby="collapse100Heading575" data-bs-parent="#accordionAnsysFaq">
                                        <div class="card-body">
                                            <p>Formlabs is a professional 3D printing company specializing in SLA (stereolithography) and SLS (selective laser sintering) technologies. Formlabs printers are used for prototyping, functional testing, and end-use part production across engineering, manufacturing, healthcare, education, and design workflows.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card card-default">
                                    <div class="card-header" id="collapse100Heading576">
                                        <h4 class="card-title m-0">
                                            <a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse100576" aria-expanded="false" aria-controls="collapse100576">
                                                <strong>Q.</strong> What is the difference between SLA and SLS 3D printing in Formlabs systems?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse100576" class="collapse" aria-labelledby="collapse100Heading576" data-bs-parent="#accordionAnsysFaq">
                                        <div class="card-body">
                                            <p>SLA 3D printing uses a laser to cure liquid resin layer by layer, producing highly detailed parts with smooth surface finishes. SLS 3D printing uses a laser to fuse powdered materials, creating strong and functional parts without support structures. Formlabs offers both technologies to address different prototyping and production needs.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card card-default">
                                    <div class="card-header" id="collapse100Heading577">
                                        <h4 class="card-title m-0">
                                            <a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse100577" aria-expanded="false" aria-controls="collapse100577">
                                                <strong>Q.</strong> What materials are commonly used with Formlabs SLA and SLS 3D printers?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse100577" class="collapse" aria-labelledby="collapse100Heading577" data-bs-parent="#accordionAnsysFaq">
                                        <div class="card-body">
                                            <p>Formlabs SLA printers use photopolymer resins, including standard, engineering, flexible, elastic, and biocompatible materials. Formlabs SLS printers primarily use nylon-based powders such as PA12 and glass-filled nylon, suitable for durable functional parts and low-volume production.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card card-default">
                                    <div class="card-header" id="collapse100Heading578">
                                        <h4 class="card-title m-0">
                                            <a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse100578" aria-expanded="false" aria-controls="collapse100578">
                                                <strong>Q.</strong> Are Formlabs 3D printers suitable for both prototyping and production?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse100578" class="collapse" aria-labelledby="collapse100Heading578" data-bs-parent="#accordionAnsysFaq">
                                        <div class="card-body">
                                            <p>Yes. Formlabs 3D printers are used for rapid prototyping, small-batch manufacturing, and end-use part production. Compact systems support iterative design and testing, while larger-format models enable production of bigger components and higher volumes.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card card-default">
                                    <div class="card-header" id="collapse100Heading579">
                                        <h4 class="card-title m-0">
                                            <a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse100579" aria-expanded="false" aria-controls="collapse100579">
                                                <strong>Q.</strong> How does ARK Infosolutions support Formlabs customers in India?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse100579" class="collapse" aria-labelledby="collapse100Heading579" data-bs-parent="#accordionAnsysFaq">
                                        <div class="card-body">
                                            <p>ARK Infosolutions supports Formlabs customers in India with pre-sales consultation, product demonstrations, installation assistance, materials guidance, workflow support, and coordination of training and technical assistance. This helps organizations adopt Formlabs 3D printing effectively within digital manufacturing environments.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card card-default">
                                    <div class="card-header" id="collapse100Heading580">
                                        <h4 class="card-title m-0">
                                            <a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse100580" aria-expanded="false" aria-controls="collapse100580">
                                                <strong>Q.</strong> How can I buy Formlabs 3D printers in India through Ptecad?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse100580" class="collapse" aria-labelledby="collapse100Heading580" data-bs-parent="#accordionAnsysFaq">
                                        <div class="card-body">
                                            <p>To enquire about Formlabs 3D printers in India, you can contact Ptecad by submitting an enquiry through the website or emailing <strong data-start="4013" data-end="4036"><a class="decorated-link cursor-pointer" rel="noopener" data-start="4015" data-end="4034">formlabs@ptecad.in</a></strong>. The team assists with printer selection, materials, pricing, deployment guidance, and training support.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End FAQ's Section -->

            <!-- Latest Blog Post Section -->
            <!-- <section id="blog" class="section section-height-3 border-0 m-0 appear-animation animated fadeIn bg-color-light" data-appear-animation="fadeIn" style="animation-delay: 100ms">
                <div class="container">
                    <div class="text-center mb-4">
                        <span class="custom-highlight-text-1 d-inline-block text-5 text-color-primary appear-animation p-relative" data-appear-animation="fadeInUpShorter">RELATED BLOGS</span>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                            <div class="row g-3" id="blogContainer">
                                <div class="mb-4 blog-item" data-index="0" style="display: block;">
                                    <div class="article list-card position-relative">
                                        <a href="https://www.arkinfo.in/blog/fdm-vs-sla-a-quick-guide-to-choosing-the-right-3d-printer" target="_blank" class="card-overlay-link">
                                            <span class="visually-hidden"> Guide to Choosing Your 3D Printer: FDM vs SLA Made Simple </span>
                                        </a>
                                        <div class="thumbnail overflow-hidden">
                                            <img src="https://www.arkinfo.in/public/blogimages/1756796846_GuidetoChoosing.webp" alt="Guide to Choosing Your 3D Printer: FDM vs SLA Made Simple" class="list-img">
                                        </div>
                                        <div class="card-body position-relative">
                                            <h3 class="card-title mb-2">Guide to Choosing Your 3D Printer: FDM vs SLA Made Simple</h3>
                                            <div class="featured-footer d-flex justify-content-between align-items-center flex-wrap gap-2 w-100">
                                                <div class="d-flex align-items-center gap-2">
                                                    <span><i class="fa-regular fa-calendar ms-2"></i><small class="ms-1">26 May, 2025</small></span>
                                                    <span title="Audio Play"><i class="fa-solid fa-play ms-2"></i></span>
                                                </div>
                                                <div class="stats d-flex gap-3">
                                                    <span><i class="fa-regular fa-eye"></i><small class="ms-1">6615</small></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4 blog-item" data-index="1" style="display: block;">
                                    <div class="article list-card position-relative">
                                        <a href="https://www.arkinfo.in/blog/transforming-aerospace-with-digital-manufacturing" target="_blank" class="card-overlay-link">
                                            <span class="visually-hidden"> Elevating Aerospace Innovation: The Transformative Power of Digital Manufacturing </span>
                                        </a>
                                        <div class="thumbnail overflow-hidden">
                                            <img src="https://www.arkinfo.in/public/blogimages/1756796774_ElevatingAerospaceInnovation.webp" alt="Elevating Aerospace Innovation: The Transformative Power of Digital Manufacturing" class="list-img">
                                        </div>
                                        <div class="card-body position-relative">
                                            <h3 class="card-title mb-2">Elevating Aerospace Innovation: The Transformative Power of Digital Manufacturing</h3>
                                            <div class="featured-footer d-flex justify-content-between align-items-center flex-wrap gap-2 w-100">
                                                <div class="d-flex align-items-center gap-2">
                                                    <span><i class="fa-regular fa-calendar ms-2"></i><small class="ms-1">03 Mar, 2025</small></span>
                                                    <span title="Audio Play"><i class="fa-solid fa-play ms-2"></i></span>
                                                </div>
                                                <div class="stats d-flex gap-3">
                                                    <span><i class="fa-regular fa-eye"></i><small class="ms-1">3758</small></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

        </div><!-- End Main -->

        <!-- ==================== Modals ==================== -->

        <!-- Form 4L Modal -->
        <div class="modal fade productDetailModal" id="Form4LModal" tabindex="-1" role="dialog" aria-labelledby="Form4LModalLabel" aria-label="Close">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header py-2">
                        <h2 class="modal-title text-uppercase font-weight-normal">Form 4L</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                    </div>
                    <div class="modal-body">
                        <section>
                            <div class="card border-0">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="thumb-gallery-wrapper">
                                            <div class="thumb-gallery-detail owl-carousel owl-theme manual nav-inside nav-style-1 nav-dark mb-3">
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="assets/image/5.jpg" class="img-fluid" alt="Form 4L"></div>
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="assets/image/6.jpg" class="img-fluid" alt="Form 4L"></div>
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="assets/image/7.jpg" class="img-fluid" alt="Form 4L"></div>
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/Printers/form4L/03.webp" class="img-fluid" alt="Form 4L"></div>
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/Printers/form4L/04.webp" class="img-fluid" alt="Form 4L"></div>
                                            </div>
                                            <div class="thumb-gallery-thumbs owl-carousel owl-theme manual thumb-gallery-thumbs mb-0">
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Form 4L" src="assets/image/5.jpg" class="img-fluid"></span></div>
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Form 4L" src="assets/image/6.jpg" class="img-fluid"></span></div>
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Form 4L" src="assets/image/7.jpg" class="img-fluid"></span></div>
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Form 4L" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/Printers/form4L/03.webp" class="img-fluid"></span></div>
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Form 4L" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/Printers/form4L/04.webp" class="img-fluid"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 productInfoCenter ps-3">
                                        <h3>Where speed meets Precision</h3>
                                        <p>The Form 4L's incredible speed is powered by Formlabs’ state-of-the-art Low Force Display™ Print Engine, an ingenious combination of ultra-high-power LEDs, precision collimating lenses, optical filters, and a durable liquid crystal display. <br>This advanced system ensures rapid resin curing for every layer, regardless of the part's size or quantity. With ultra-tight tolerances, every part printed on the Form 4L-no matter the resin-will consistently align with your exact design specifications, every single time.</p>
                                        <div class="formlabsSpec">
                                            <p><strong>Build Volume</strong> <br>35.3 × 19.6 × 35.0 cm <br>13.9 x 7.7 x 13.8 in</p>
                                            <p><strong>Technology</strong> <br>Low Force Display™ (LFD)</p>
                                        </div>
                                        <div class="mobileBtn">
                                           
<a href="contact.php" aria-label="Request a quote for Formlabs Fuse Blast" class="btn btn-primary btn-rounded btn-sm text-uppercase letsConnectBtn">Request a quote</a>

                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col">
                                        <div class="tabs tabs-bottom tabs-center tabs-simple mb-0">
                                            <ul class="nav nav-tabs mb-0">
                                                <li class="nav-item"><a class="nav-link active text-uppercase" href="#tabsNavigation4LKeyFeatures" data-bs-toggle="tab">Key Features</a></li>
                                                <li class="nav-item"><a class="nav-link text-uppercase" href="#tabsNavigation4LIdealFor" data-bs-toggle="tab">Ideal for</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tabsNavigation4LKeyFeatures">
                                                    <ul>
                                                        <li><strong>Blazing Fast:</strong> Large prints in under 6 hours.</li>
                                                        <li><strong>Large Build Area:</strong> 4.6X Larger build volume than form 4.</li>
                                                        <li><strong>User-Friendly:</strong> Automatic resin dispensing and easy-to-use software.</li>
                                                        <li><strong>Reliable:</strong> Large format 3D printing that you can depend on.</li>
                                                        <li><strong>Low Downtime:</strong> Replaceable parts for minimal downtime.</li>
                                                        <li><strong>Big Parts:</strong> Solve big problems with big parts.</li>
                                                    </ul>
                                                </div>
                                                <div class="tab-pane" id="tabsNavigation4LIdealFor">
                                                    <ul>
                                                        <li>Full-size rapid prototyping.</li>
                                                        <li>Large-scale models.</li>
                                                        <li>Rapid tooling and manufacturing aids.</li>
                                                    </ul>
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
        </div>

        <!-- Form 4BL Modal -->
        <div class="modal fade productDetailModal" id="Form4BLModal" tabindex="-1" role="dialog" aria-labelledby="Form4BLModalLabel" aria-label="Close">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header py-2">
                        <h2 class="modal-title text-uppercase font-weight-normal">Form 4BL</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                    </div>
                    <div class="modal-body">
                        <section>
                            <div class="card border-0">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="thumb-gallery-wrapper">
                                            <div class="thumb-gallery-detail owl-carousel owl-theme manual nav-inside nav-style-1 nav-dark mb-3">
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="assets/image/8.jpg" class="img-fluid" alt="Form 4BL"></div>
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="assets/image/9.jpg" class="img-fluid" alt="Form 4BL"></div>
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="assets/image/10.jpg" class="img-fluid" alt="Form 4BL"></div>
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="assets/image/11.jpg" class="img-fluid" alt="Form 4BL"></div>
                                            </div>
                                            <div class="thumb-gallery-thumbs owl-carousel owl-theme manual thumb-gallery-thumbs mb-0">
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Form 4BL" src="assets/image/8.jpg" class="img-fluid"></span></div>
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Form 4BL" src="assets/image/9.jpg" class="img-fluid"></span></div>
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Form 4BL" src="assets/image/10.jpg" class="img-fluid"></span></div>
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Form 4BL" src="assets/image/11.jpg" class="img-fluid"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 productInfoCenter ps-3">
                                        <h3>Blazing Fast with accurate print engine</h3>
                                        <p>The Form 4BL's lightning-fast performance is powered by Formlabs’ cutting-edge Low Force Display™ Print Engine, a sophisticated blend of ultra-high-power LEDs, precision collimating lenses, optical filters, and a durable liquid crystal display. <br>This advanced technology rapidly cures each resin layer, regardless of part size or volume, ensuring flawless surface accuracy. From models to appliances and prosthetics, you can expect a perfect fit every time.</p>
                                        <div class="formlabsSpec">
                                            <p><strong>Build Volume</strong> <br>35.3 × 19.6 × 35.0 cm <br>13.9 x 7.7 x 13.8 in</p>
                                            <p><strong>Technology</strong> <br>Low Force Display™ (LFD)</p>
                                        </div>
                                        <div class="mobileBtn">
                                          
<a href="contact.php" aria-label="Request a quote for Formlabs Fuse Blast" class="btn btn-primary btn-rounded btn-sm text-uppercase letsConnectBtn">Request a quote</a>

                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col">
                                        <div class="tabs tabs-bottom tabs-center tabs-simple mb-0">
                                            <ul class="nav nav-tabs mb-0">
                                                <li class="nav-item"><a class="nav-link active text-uppercase" href="#tabsNavigation4BLKeyFeatures" data-bs-toggle="tab">Key Features</a></li>
                                                <li class="nav-item"><a class="nav-link text-uppercase" href="#tabsNavigation4BLIdealFor" data-bs-toggle="tab">Ideal for</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tabsNavigation4BLKeyFeatures">
                                                    <ul>
                                                        <li><strong>Versatile:</strong> Industry-leading materials and Open Platform.</li>
                                                        <li><strong>Stunning parts:</strong> Stunning parts that always fit.</li>
                                                        <li><strong>Intuitive:</strong> Anyone can learn in 15 minutes.</li>
                                                        <li><strong>Reliable:</strong> Large format 3D printing that you can depend on.</li>
                                                    </ul>
                                                </div>
                                                <div class="tab-pane" id="tabsNavigation4BLIdealFor">
                                                    <ul>
                                                        <li>Large parts needing biocompatibility and sterilization.</li>
                                                        <li>Full-size anatomical models, including pediatric and adult.</li>
                                                        <li>Medical device prototypes, jigs, fixtures, and end-use parts.</li>
                                                        <li>Surgeon-specific or patient-specific surgical tools.</li>
                                                        <li>Surgical planning models for FDA-cleared diagnostics.</li>
                                                    </ul>
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
        </div>

        <!-- Form 4 Modal -->
        <div class="modal fade productDetailModal" id="Form4Modal" tabindex="-1" role="dialog" aria-labelledby="Form4ModalLabel" aria-label="Close">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header py-2">
                        <h2 class="modal-title text-uppercase font-weight-normal">Form 4</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                    </div>
                    <div class="modal-body">
                        <section>
                            <div class="card border-0">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="thumb-gallery-wrapper">
                                            <div class="thumb-gallery-detail owl-carousel owl-theme manual nav-inside nav-style-1 nav-dark mb-3">
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/Printers/form4/01.webp" class="img-fluid" alt="Form 4"></div>
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="assets/image/1.jpg" class="img-fluid" alt="Form 4"></div>
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="assets/image/2.jpg" class="img-fluid" alt="Form 4"></div>
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/Printers/form4/04.webp" class="img-fluid" alt="Form 4"></div>
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/Printers/form4/05.webp" class="img-fluid" alt="Form 4"></div>
                                            </div>
                                            <div class="thumb-gallery-thumbs owl-carousel owl-theme manual thumb-gallery-thumbs mb-0">
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Form 4" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/Printers/form4/01.webp" class="img-fluid"></span></div>
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Form 4" src="assets/image/1.jpg" class="img-fluid"></span></div>
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Form 4" src="assets/image/2.jpg" class="img-fluid"></span></div>
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Form 4" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/Printers/form4/04.webp" class="img-fluid"></span></div>
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Form 4" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/Printers/form4/05.webp" class="img-fluid"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 productInfoCenter ps-3">
                                        <h3>Blazing Speed Meets Industrial Production</h3>
                                        <p>Bring your ideas to life faster than ever with the Form 4 professional 3D printer ecosystem, offering streamlined workflows, exceptional reliability, and outstanding part quality. <br>The Form 4 is a blazing-fast masked SLA 3D printer, combining an industry-leading materials library with a highly accurate and dependable print engine. With tight tolerances, every resin-printed part on the Form 4 consistently matches your design specifications.</p>
                                        <div class="formlabsSpec">
                                            <p><strong>Build Volume</strong> <br>20.0 × 12.5 × 21.0 cm <br>7.9 × 4.9 × 8.3 in</p>
                                            <p><strong>Technology</strong> <br>Masked Stereolithography (MSLA)</p>
                                        </div>
                                        <div class="mobileBtn">
                                           
<a href="contact.php" aria-label="Request a quote for Formlabs Fuse Blast" class="btn btn-primary btn-rounded btn-sm text-uppercase letsConnectBtn">Request a quote</a>

                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col">
                                        <div class="tabs tabs-bottom tabs-center tabs-simple mb-0">
                                            <ul class="nav nav-tabs mb-0">
                                                <li class="nav-item"><a class="nav-link active text-uppercase" href="#tabsNavigationKeyFeatures" data-bs-toggle="tab">Key Features</a></li>
                                                <li class="nav-item"><a class="nav-link text-uppercase" href="#tabsNavigationIdealFor" data-bs-toggle="tab">Ideal for</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tabsNavigationKeyFeatures">
                                                    <ul>
                                                        <li><strong>Blazing Fast:</strong> Complete most prints in under 2 hours</li>
                                                        <li><strong>Versatile:</strong> Wide range of resins for any application</li>
                                                        <li><strong>Intuitive:</strong> Learn to use in just 15 minutes</li>
                                                        <li><strong>Reliable:</strong> Industry-leading print success rate</li>
                                                        <li><strong>Accurate:</strong> Precision that rivals injection-molded parts</li>
                                                    </ul>
                                                </div>
                                                <div class="tab-pane" id="tabsNavigationIdealFor">
                                                    <ul>
                                                        <li>Rapid prototyping and production.</li>
                                                        <li>Rapid tooling and manufacturing aids.</li>
                                                        <li>Patterns for molds and casting.</li>
                                                        <li>High-precision model making.</li>
                                                    </ul>
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
        </div>

        <!-- Form 4B Modal -->
        <div class="modal fade productDetailModal" id="Form4BModal" tabindex="-1" role="dialog" aria-labelledby="Form4BModalLabel" aria-label="Close">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header py-2">
                        <h2 class="modal-title text-uppercase font-weight-normal">Form 4B</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                    </div>
                    <div class="modal-body">
                        <section>
                            <div class="card border-0">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="thumb-gallery-wrapper">
                                            <div class="thumb-gallery-detail owl-carousel owl-theme manual nav-inside nav-style-1 nav-dark mb-3">
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="assets/image/13.jpg" class="img-fluid" alt="Form 4B"></div>
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="assets/image/14.jpg" class="img-fluid" alt="Form 4B"></div>
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="assets/image/15.jpg" class="img-fluid" alt="Form 4B"></div>
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="assets/image/16.jpg" class="img-fluid" alt="Form 4B"></div>
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="assets/image/17.jpg" class="img-fluid" alt="Form 4B"></div>
                                            </div>
                                            <div class="thumb-gallery-thumbs owl-carousel owl-theme manual thumb-gallery-thumbs mb-0">
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Form 4B" src="assets/image/13.jpg" class="img-fluid"></span></div>
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Form 4B" src="assets/image/14.jpg" class="img-fluid"></span></div>
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Form 4B" src="assets/image/15.jpg" class="img-fluid"></span></div>
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Form 4B" src="assets/image/16.jpg" class="img-fluid"></span></div>
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Form 4B" src="assets/image/17.jpg" class="img-fluid"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 productInfoCenter ps-3">
                                        <h3>Blazing Speed Meets Surgical Precision</h3>
                                        <p>Quickly create biocompatible, sterilizable anatomical models and medical devices with the Form 4B, a blazing-fast medical 3D printer designed for healthcare. Offering easy workflows, exceptional reliability, versatile materials, and stunning part quality, the Form 4B provides access to the most diverse materials library in the industry.</p>
                                        <div class="formlabsSpec">
                                            <p><strong>Build Volume</strong> <br>20.0 × 12.5 × 21.0 cm <br>7.9 × 4.9 × 8.3 in</p>
                                            <p><strong>Technology</strong> <br>Masked Stereolithography (MSLA)</p>
                                        </div>
                                        <div class="mobileBtn">
                                            <a href="contact.php" aria-label="Request a quote for Formlabs Form4B" class="btn btn-primary btn-rounded btn-sm text-uppercase letsConnectBtn">Request a quote</a>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col">
                                        <div class="tabs tabs-bottom tabs-center tabs-simple mb-0">
                                            <ul class="nav nav-tabs mb-0">
                                                <li class="nav-item"><a class="nav-link active text-uppercase" href="#tabsNavigationF4bKeyFeatures" data-bs-toggle="tab">Key Features</a></li>
                                                <li class="nav-item"><a class="nav-link text-uppercase" href="#tabsNavigationF4bIdealFor" data-bs-toggle="tab">Ideal for</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tabsNavigationF4bKeyFeatures">
                                                    <ul>
                                                        <li><strong>Fast:</strong> 4x faster with 30% more build volume</li>
                                                        <li><strong>Precise:</strong> Delivers accurate prints, every time</li>
                                                        <li><strong>Reliable:</strong> Industry-leading print success rate</li>
                                                    </ul>
                                                </div>
                                                <div class="tab-pane" id="tabsNavigationF4bIdealFor">
                                                    <ul>
                                                        <li>Small to medium parts requiring biocompatibility and sterilization.</li>
                                                        <li>Medical device prototypes, jigs, fixtures, molds, and end-use parts.</li>
                                                        <li>Patient-specific anatomical models and surgical instruments.</li>
                                                        <li>Visual aids for diagnosis and education.</li>
                                                        <li>Surgical planning models for FDA-cleared diagnostic workflows.</li>
                                                    </ul>
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
        </div>

        <!-- Form Cure L V2 Modal -->
        <!-- <div class="modal fade productDetailModal" id="formCureLV2Modal" tabindex="-1" role="dialog" aria-labelledby="formCureLV2ModalLabel" aria-label="Close">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header py-2">
                        <h2 class="modal-title text-uppercase font-weight-normal">Form Cure L V2</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                    </div>
                    <div class="modal-body">
                        <section>
                            <div class="card border-0">
                                <div class="row">
                                    <div class="col-lg-12 productInfoCenter ps-3">
                                        <h3>Fastest, Most Consistent Large – Format Cure unit ever built by Formlabs</h3>
                                        <p>Form Cure L V2 precisely combines heat and 405 nm light to deliver tough, strong prints with unprecedented speed and consistency. Now you can post-cure large Form 4L/BL prints in as little as 60 seconds, with 5x more UV power, faster heat-up times, and a 26% reduction in overall footprint from the previous generation while curing up to 19% larger parts. To begin curing, just select a validated preset for Formlabs 45+ materials. Advanced users can customize time and temperature to fit their specific needs.</p>
                                    </div>
                                    <div class="col-lg-6 productInfoCenter ps-3 order-2 order-lg-1">
                                        <p>Post-curing completes the chemical reaction started during printing, enhancing final part strength, toughness, heat resistance, and creep resistance while creating a harder, less tacky surface.</p>
                                        <p>For biocompatible materials, post-curing is necessary to achieve the safety standards determined by regulatory agencies.</p>
                                        <p>The new Form Cure L V2 is the fastest, most consistent large-format cure unit ever built by Formlabs — designed to perfectly complement the Form 4 and 4L printers. It delivers production-ready parts in minutes with precision and reliability you can trust.</p>
                                        <div class="mobileBtn">
                                            <button type="button" aria-label="Request a quote for Formlabs Form Cure L V2" class="btn btn-primary btn-rounded btn-sm text-uppercase letsConnectBtn" onclick="arkRequestSubmitModal('Formlabs Form Cure L V2')">Request a quote</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 order-1 order-lg-2">
                                        <div class="thumb-gallery-wrapper">
                                            <div class="thumb-gallery-detail owl-carousel owl-theme manual nav-inside nav-style-1 nav-dark mb-3">
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/PostProcessing/formCureLV2/01.webp" class="img-fluid" alt="Form Cure L V2"></div>
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/PostProcessing/formCureLV2/02.webp" class="img-fluid" alt="Form Cure L V2"></div>
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/PostProcessing/formCureLV2/03.webp" class="img-fluid" alt="Form Cure L V2"></div>
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/PostProcessing/formCureLV2/04.webp" class="img-fluid" alt="Form Cure L V2"></div>
                                            </div>
                                            <div class="thumb-gallery-thumbs owl-carousel owl-theme manual thumb-gallery-thumbs mb-0">
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Form Cure L V2" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/PostProcessing/formCureLV2/01.webp" class="img-fluid"></span></div>
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Form Cure L V2" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/PostProcessing/formCureLV2/02.webp" class="img-fluid"></span></div>
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Form Cure L V2" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/PostProcessing/formCureLV2/03.webp" class="img-fluid"></span></div>
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Form Cure L V2" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/PostProcessing/formCureLV2/04.webp" class="img-fluid"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col">
                                        <div class="tabs tabs-bottom tabs-center tabs-simple mb-0">
                                            <ul class="nav nav-tabs mb-0">
                                                <li class="nav-item"><a class="nav-link active text-uppercase" href="#tabsNavigationformCureLV2Features" data-bs-toggle="tab">Key Features</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tabsNavigationformCureLV2Features">
                                                    <ul>
                                                        <li><strong>Faster, Smarter Post-Processing:</strong> Cures large batches of parts in minutes instead of hours, freeing up operators and printers for more production runs per day.</li>
                                                        <li><strong>Predictable Quality:</strong> Uniform, validated curing eliminates reprints and wasted materials.</li>
                                                        <li><strong>Simplified Operation:</strong> Preset cycles and intuitive controls make curing foolproof.</li>
                                                    </ul>
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
        </div> -->

        <!-- Form Wash 2nd Gen Modal -->
        <!-- <div class="modal fade productDetailModal" id="formWashModal" tabindex="-1" role="dialog" aria-labelledby="formWashModalLabel" aria-label="Close">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header py-2">
                        <h2 class="modal-title text-uppercase font-weight-normal">Form Wash (2nd Generation)</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                    </div>
                    <div class="modal-body">
                        <section>
                            <div class="card border-0">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="thumb-gallery-wrapper">
                                            <div class="thumb-gallery-detail owl-carousel owl-theme manual nav-inside nav-style-1 nav-dark mb-3">
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/PostProcessing/formWash/01.webp" class="img-fluid" alt="Form Wash (2nd Generation)"></div>
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/PostProcessing/formWash/02.webp" class="img-fluid" alt="Form Wash (2nd Generation)"></div>
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/PostProcessing/formWash/03.webp" class="img-fluid" alt="Form Wash (2nd Generation)"></div>
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/PostProcessing/formWash/04.webp" class="img-fluid" alt="Form Wash (2nd Generation)"></div>
                                            </div>
                                            <div class="thumb-gallery-thumbs owl-carousel owl-theme manual thumb-gallery-thumbs mb-0">
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Form Wash (2nd Generation)" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/PostProcessing/formWash/01.webp" class="img-fluid"></span></div>
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Form Wash (2nd Generation)" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/PostProcessing/formWash/02.webp" class="img-fluid"></span></div>
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Form Wash (2nd Generation)" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/PostProcessing/formWash/03.webp" class="img-fluid"></span></div>
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Form Wash (2nd Generation)" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/PostProcessing/formWash/04.webp" class="img-fluid"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 productInfoCenter ps-3">
                                        <h3>Effortless Cleaning and Drying with Form Wash</h3>
                                        <p>Form Wash automates the cleaning of printed parts with IPA or alternative solvents, ensuring thorough and efficient results. Parts can be left on the Build Platform or placed in the wash basket. The impeller provides precise agitation, reaching every detail for a complete clean.</p>
                                        <div class="mobileBtn">
                                            <button type="button" aria-label="Request a quote for Formlabs Form Wash (2nd Generation)" class="btn btn-primary btn-rounded btn-sm text-uppercase letsConnectBtn" onclick="arkRequestSubmitModal('Formlabs Form Wash (2nd Generation)')">Request a quote</button>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col">
                                        <div class="tabs tabs-bottom tabs-center tabs-simple mb-0">
                                            <ul class="nav nav-tabs mb-0">
                                                <li class="nav-item"><a class="nav-link active text-uppercase" href="#tabsNavigationFWashFeatures" data-bs-toggle="tab">Key Features</a></li>
                                                <li class="nav-item"><a class="nav-link text-uppercase" href="#tabsNavigationFWashSpec" data-bs-toggle="tab">Specifications</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tabsNavigationFWashFeatures">
                                                    <ul>
                                                        <li><strong>Adaptable to Build Platforms:</strong> Adjustable mounts accommodate various platform sizes.</li>
                                                        <li><strong>Enhanced Agitation:</strong> Delivers 3x more cleaning power.</li>
                                                        <li><strong>Flexible Solvent Capacity:</strong> Supports 7-15 liters.</li>
                                                        <li><strong>Automated Cleaning:</strong> Set wash time and clean up to 120 prints per refill.</li>
                                                    </ul>
                                                </div>
                                                <div class="tab-pane" id="tabsNavigationFWashSpec">
                                                    <ul>
                                                        <li><strong>Printer Compatibility:</strong> Form 4, Form 4B, Form 3/+, Form 3B/+, Form 2</li>
                                                        <li><strong>Dimensions:</strong> 31.5 x 29.3 x 40.5 cm (12.4 x 11.5 x 15.9 in)</li>
                                                        <li><strong>Bucket Volume:</strong> 14.4 L (3.8 US gal)</li>
                                                        <li><strong>Compatible Solvents:</strong> Formlabs Resin Washing Solution, IPA, TPM, Water</li>
                                                    </ul>
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
        </div> -->

        <!-- Form Cure 2nd Gen Modal -->
        <!-- <div class="modal fade productDetailModal" id="formCure2ndGenModal" tabindex="-1" role="dialog" aria-labelledby="formCure2ndGenModalLabel" aria-label="Close">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header py-2">
                        <h2 class="modal-title text-uppercase font-weight-normal">Form Cure 2<sup>nd</sup> Gen</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                    </div>
                    <div class="modal-body">
                        <section>
                            <div class="card border-0">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="thumb-gallery-wrapper">
                                            <div class="thumb-gallery-detail owl-carousel owl-theme manual nav-inside nav-style-1 nav-dark mb-3">
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/PostProcessing/formCureL2ndGen/01.webp" class="img-fluid" alt="Form Cure 2nd Gen"></div>
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/PostProcessing/formCureL2ndGen/02.webp" class="img-fluid" alt="Form Cure 2nd Gen"></div>
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/PostProcessing/formCureL2ndGen/03.webp" class="img-fluid" alt="Form Cure 2nd Gen"></div>
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/PostProcessing/formCureL2ndGen/04.webp" class="img-fluid" alt="Form Cure 2nd Gen"></div>
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/PostProcessing/formCureL2ndGen/05.webp" class="img-fluid" alt="Form Cure 2nd Gen"></div>
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/PostProcessing/formCureL2ndGen/06.webp" class="img-fluid" alt="Form Cure 2nd Gen"></div>
                                            </div>
                                            <div class="thumb-gallery-thumbs owl-carousel owl-theme manual thumb-gallery-thumbs mb-0">
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Form Cure 2nd Gen" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/PostProcessing/formCureL2ndGen/01.webp" class="img-fluid"></span></div>
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Form Cure 2nd Gen" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/PostProcessing/formCureL2ndGen/02.webp" class="img-fluid"></span></div>
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Form Cure 2nd Gen" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/PostProcessing/formCureL2ndGen/03.webp" class="img-fluid"></span></div>
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Form Cure 2nd Gen" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/PostProcessing/formCureL2ndGen/04.webp" class="img-fluid"></span></div>
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Form Cure 2nd Gen" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/PostProcessing/formCureL2ndGen/05.webp" class="img-fluid"></span></div>
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Form Cure 2nd Gen" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/PostProcessing/formCureL2ndGen/06.webp" class="img-fluid"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 productInfoCenter ps-3">
                                        <h3>Faster, Stronger, and More Precise Post-Curing</h3>
                                        <p>The Form Cure 2<sup>nd</sup> Gen delivers 3-5x faster curing with enhanced UV light and heat exposure, ensuring stronger and more reliable parts with 48 multi-directional LEDs.</p>
                                        <div class="mobileBtn">
                                            <button type="button" aria-label="Request a quote for Formlabs Form Cure 2nd Gen" class="btn btn-primary btn-rounded btn-sm text-uppercase letsConnectBtn" onclick="arkRequestSubmitModal('Formlabs Form Cure 2nd Gen')">Request a quote</button>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col">
                                        <div class="tabs tabs-bottom tabs-center tabs-simple mb-0">
                                            <ul class="nav nav-tabs mb-0">
                                                <li class="nav-item"><a class="nav-link active text-uppercase" href="#tabsNavigationFCure2ndGenFeatures" data-bs-toggle="tab">Key Features</a></li>
                                                <li class="nav-item"><a class="nav-link text-uppercase" href="#tabsNavigationFCure2ndGenSpec" data-bs-toggle="tab">Specifications</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tabsNavigationFCure2ndGenFeatures">
                                                    <ul>
                                                        <li><strong>Nitrogen-Enabled Curing:</strong> Integrated nitrogen port enhances curing efficiency.</li>
                                                        <li><strong>Ultra-Fast Heating:</strong> Rapid heat up for consistent post-curing.</li>
                                                        <li><strong>Advanced Low-Warp Mode:</strong> Reduces warping on rigid/engineering resins.</li>
                                                    </ul>
                                                </div>
                                                <div class="tab-pane" id="tabsNavigationFCure2ndGenSpec">
                                                    <ul style="column-count: 2;">
                                                        <li><strong>Printer Compatibility:</strong> Form 4, Form 4B, Form 3/+, Form 3B/+, Form 2</li>
                                                        <li><strong>Dimensions:</strong> 33.7 × 35.6 × 40.4 cm</li>
                                                        <li><strong>Weight:</strong> 12.1 kg</li>
                                                        <li><strong>LED Wavelength:</strong> 405 nm</li>
                                                    </ul>
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
        </div> -->

        <!-- Form Wash L Modal -->
        <!-- <div class="modal fade productDetailModal" id="formWashLModal" tabindex="-1" role="dialog" aria-labelledby="formWashLModalLabel" aria-label="Close">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header py-2">
                        <h2 class="modal-title text-uppercase font-weight-normal">Form Wash L</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                    </div>
                    <div class="modal-body">
                        <section>
                            <div class="card border-0">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="thumb-gallery-wrapper">
                                            <div class="thumb-gallery-detail owl-carousel owl-theme manual nav-inside nav-style-1 nav-dark mb-3">
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/PostProcessing/formWashL/01.webp" class="img-fluid" alt="Form Wash L"></div>
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/PostProcessing/formWashL/02.webp" class="img-fluid" alt="Form Wash L"></div>
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/PostProcessing/formWashL/03.webp" class="img-fluid" alt="Form Wash L"></div>
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/PostProcessing/formWashL/04.webp" class="img-fluid" alt="Form Wash L"></div>
                                            </div>
                                            <div class="thumb-gallery-thumbs owl-carousel owl-theme manual thumb-gallery-thumbs mb-0">
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Form Wash L" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/PostProcessing/formWashL/01.webp" class="img-fluid"></span></div>
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Form Wash L" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/PostProcessing/formWashL/02.webp" class="img-fluid"></span></div>
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Form Wash L" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/PostProcessing/formWashL/03.webp" class="img-fluid"></span></div>
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Form Wash L" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLA/PostProcessing/formWashL/04.webp" class="img-fluid"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 productInfoCenter ps-3">
                                        <h3>Automate SLA Cleaning with Form Wash L</h3>
                                        <p>Form Wash L ensures thorough cleaning of SLA 3D printed parts by automating the washing process, delivering consistently smooth and high-quality results.</p>
                                        <div class="mobileBtn">
                                            <button type="button" aria-label="Request a quote for Formlabs Form Wash L" class="btn btn-primary btn-rounded btn-sm text-uppercase letsConnectBtn" onclick="arkRequestSubmitModal('Formlabs Form Wash L')">Request a quote</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Fuse X1 Build Unit Modal -->
        <!-- <div class="modal fade productDetailModal" id="fuseX1BuildUnitModal" tabindex="-1" role="dialog" aria-labelledby="fuseX1BuildUnitModalLabel" aria-label="Close">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header py-2">
                        <h2 class="modal-title text-uppercase font-weight-normal">Fuse X1 Build Unit</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                    </div>
                    <div class="modal-body">
                        <section>
                            <div class="card border-0">
                                <div class="row">
                                    <div class="col-lg-6 productInfoCenter ps-3 order-2 order-lg-1 d-flex align-items-center">
                                        <div>
                                            <h3>Mobile Print Transfer and Cooling for Continuous Production</h3>
                                            <p>The Fuse X1 build unit contains and transports prints throughout the Fuse X1 ecosystem. It is wheeled and mobile to easily move between the Fuse X1 during printing and Fuse Sift X1 for breakout.</p>
                                            <div class="mobileBtn">
                                                <button type="button" aria-label="Request a quote for Formlabs SLS 3D Printers Fuse X1 Build Unit" class="btn btn-primary btn-rounded btn-sm text-uppercase letsConnectBtn" onclick="arkRequestSubmitModal('Request for Formlabs SLS 3D Printers Fuse X1 Build Unit')">Request a quote</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 d-flex align-items-center justify-content-center order-1 order-lg-2">
                                        <img width="100%" height="100%" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLS/new/FUSEX1BuildUnit.webp" class="img-fluid w-50" alt="Formlabs SLS 3D Printers Fuse X1 Build Unit">
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Fuse X1 Vacuum Conveyer Modal -->
        <!-- <div class="modal fade productDetailModal" id="FuseX1VacuumConveyerModal" tabindex="-1" role="dialog" aria-labelledby="FuseX1VacuumConveyerModalLabel" aria-label="Close">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header py-2">
                        <h2 class="modal-title text-uppercase font-weight-normal">Fuse X1 Vacuum Conveyer</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                    </div>
                    <div class="modal-body">
                        <section>
                            <div class="card border-0">
                                <div class="row">
                                    <div class="col-lg-6 productInfoCenter ps-3 order-2 order-lg-1 d-flex align-items-center">
                                        <div>
                                            <h3>Automated Powder Transport for a Seamless Workflow</h3>
                                            <p>Fuse X1 Vacuum Conveyor is the building block of the powder transport system. One unit on the Fuse X1 loads refreshed powder into the printer, and a second unit moves sifted reclaimed powder from the Fuse Sift X1.</p>
                                            <div class="mobileBtn">
                                                <button type="button" aria-label="Request a quote for Formlabs SLS 3D Printers Fuse X1 Vacuum Conveyer" class="btn btn-primary btn-rounded btn-sm text-uppercase letsConnectBtn" onclick="arkRequestSubmitModal('Request for Formlabs SLS 3D Printers Fuse X1 Vacuum Conveyer')">Request a quote</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 d-flex align-items-center justify-content-center order-1 order-lg-2">
                                        <img width="100%" height="100%" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLS/new/FUSEX1Vacuum.webp" class="img-fluid w-50" alt="Formlabs SLS 3D Printers Fuse X1 Vacuum Conveyer">
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Fuse X1 Mix Kit Modal -->
        <!-- <div class="modal fade productDetailModal" id="FuseX1MixKitModal" tabindex="-1" role="dialog" aria-labelledby="FuseX1MixKitModallLabel" aria-label="Close">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header py-2">
                        <h2 class="modal-title text-uppercase font-weight-normal">Fuse X1 Mix Kit</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                    </div>
                    <div class="modal-body">
                        <section>
                            <div class="card border-0">
                                <div class="row">
                                    <div class="col-lg-6 productInfoCenter ps-3 order-2 order-lg-1 d-flex align-items-center">
                                        <div>
                                            <h3>Automated Powder Mixing for Consistent Print Quality</h3>
                                            <p>Fuse X1 Mix Kit simplifies powder management by automatically blending reclaimed powder from the Fuse Sift X1 with fresh supply at the precise refresh rate.</p>
                                            <div class="mobileBtn">
                                                <button type="button" aria-label="Request a quote for Formlabs SLS 3D Printers Fuse X1 Mix Kit" class="btn btn-primary btn-rounded btn-sm text-uppercase letsConnectBtn" onclick="arkRequestSubmitModal('Request for Formlabs SLS 3D Printers Fuse X1 Mix Kit')">Request a quote</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 d-flex align-items-center justify-content-center order-1 order-lg-2">
                                        <img width="100%" height="100%" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLS/new/FuseX1MixKit.webp" class="img-fluid w-50" alt="Formlabs SLS 3D Printers Fuse X1 Mix Kit">
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Fuse 1+ 30W Modal -->
        <div class="modal fade productDetailModal" id="fuse130WModal" tabindex="-1" role="dialog" aria-labelledby="fuse130WModalLabel" aria-label="Close">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header py-2">
                        <h2 class="modal-title text-uppercase font-weight-normal">Fuse 1+ 30W</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                    </div>
                    <div class="modal-body">
                        <section>
                            <div class="card border-0">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="thumb-gallery-wrapper">
                                            <div class="thumb-gallery-detail owl-carousel owl-theme manual nav-inside nav-style-1 nav-dark mb-3">
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLS/Printers/Fuse30W/01.webp" class="img-fluid" alt="Fuse 1+ 30W"></div>
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLS/Printers/Fuse30W/02.webp" class="img-fluid" alt="Fuse 1+ 30W"></div>
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLS/Printers/Fuse30W/03.webp" class="img-fluid" alt="Fuse 1+ 30W"></div>
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLS/Printers/Fuse30W/04.webp" class="img-fluid" alt="Fuse 1+ 30W"></div>
                                            </div>
                                            <div class="thumb-gallery-thumbs owl-carousel owl-theme manual thumb-gallery-thumbs mb-0">
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Fuse 1+ 30W" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLS/Printers/Fuse30W/01.webp" class="img-fluid"></span></div>
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Fuse 1+ 30W" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLS/Printers/Fuse30W/02.webp" class="img-fluid"></span></div>
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Fuse 1+ 30W" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLS/Printers/Fuse30W/03.webp" class="img-fluid"></span></div>
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Fuse 1+ 30W" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLS/Printers/Fuse30W/04.webp" class="img-fluid"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 productInfoCenter ps-3">
                                        <h3>Truly Rapid SLS 3D Printing, From Print to Finish</h3>
                                        <p>The Fuse 1+ 30W is a compact, industrial SLS 3D printer designed for high efficiency and minimal waste. It offers exceptional print speeds and broad material compatibility, enabling rapid in-house production.</p>
                                        <div class="formlabsSpec">
                                            <p><strong>Build Volume</strong> <br>16.5 x 16.5 x 30 cm <br>6.5 x 6.5 x 11.8 in</p>
                                            <p><strong>Technology</strong> <br>Selective Laser Sintering (SLS)</p>
                                        </div>
                                        <div class="mobileBtn">
                                           
<a href="contact.php" aria-label="Request a quote for Formlabs Fuse Blast" class="btn btn-primary btn-rounded btn-sm text-uppercase letsConnectBtn">Request a quote</a>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="tabs tabs-bottom tabs-center tabs-simple mb-0">
                                            <ul class="nav nav-tabs mb-0">
                                                <li class="nav-item"><a class="nav-link active text-uppercase" href="#tabsNavigationFuse130WKeyFeatures" data-bs-toggle="tab">Key Features</a></li>
                                                <li class="nav-item"><a class="nav-link text-uppercase" href="#tabsNavigationFuse130WIdealFor" data-bs-toggle="tab">Ideal for</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tabsNavigationFuse130WKeyFeatures">
                                                    <ul>
                                                        <li><strong>Rapid Post-Processing:</strong> Transition from print to finished parts in as little as 15 minutes.</li>
                                                        <li><strong>Fast Printing:</strong> 30W laser enables quick production of prototypes and small-series parts.</li>
                                                        <li><strong>Efficient Workflow:</strong> Hands-off setup and processing streamline the production process.</li>
                                                        <li><strong>Same-Day Prototypes:</strong> Quickly create and test prototypes within the same day.</li>
                                                        <li><strong>Durable Parts:</strong> Manufacture industrial-grade end-use parts in under 24 hours</li>
                                                    </ul>
                                                </div>
                                                <div class="tab-pane" id="tabsNavigationFuse130WIdealFor">
                                                    <ul>
                                                        <li>High-speed printing for maximum throughput and fast turnaround.</li>
                                                        <li>Rapid prototyping and production of industrial-grade, end-use parts.</li>
                                                        <li>In-house manufacturing with complete design freedom.</li>
                                                        <li>Ready-to-use, patient-specific, and biocompatible medical devices.</li>
                                                    </ul>
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
        </div>

        <!-- Fuse Sift X1 Modal -->
        <div class="modal fade productDetailModal" id="FuseSiftX1Modal" tabindex="-1" role="dialog" aria-labelledby="FuseSiftX1ModalLabel" aria-label="Close">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header py-2">
                        <h2 class="modal-title text-uppercase font-weight-normal">Fuse Sift X1</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                    </div>
                    <div class="modal-body">
                        <section>
                            <div class="card border-0">
                                <div class="row">
                                    <div class="col-lg-6 productInfoCenter ps-3 order-2 order-lg-1 d-flex align-items-center">
                                        <div>
                                            <h3>Automated Large-Format Powder Recovery for Uninterrupted Production</h3>
                                            <p>Fuse Sift X1 is a large format powder recovery station that turns post-print into a clean, hands-off workflow. An integrated powder transport system moves used powder from the Sift X1 to the Mix Kit automatically.</p>
                                            <div class="mobileBtn">
                                                <button type="button" aria-label="Request for Formlabs SLS 3D Printers Post Processing Fuse Sift X1" class="btn btn-primary btn-rounded btn-sm text-uppercase letsConnectBtn" onclick="arkRequestSubmitModal('Request for Formlabs SLS 3D Printers Post Processing Fuse Sift X1')">Request a quote</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 d-flex align-items-center justify-content-center order-1 order-lg-2">
                                        <img width="100%" height="100%" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLS/new/FUSESiftX1.webp" class="img-fluid w-75" alt="Formlabs SLS 3D Printers Post Processing Fuse Sift X1">
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <!-- Fuse Blast High Capacity Kit Modal -->
        <div class="modal fade productDetailModal" id="FuseBlastHighCapacityKitModal" tabindex="-1" role="dialog" aria-labelledby="FuseBlastHighCapacityKitModalLabel" aria-label="Close">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header py-2">
                        <h2 class="modal-title text-uppercase font-weight-normal">Fuse Blast High Capacity Kit</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                    </div>
                    <div class="modal-body">
                        <section>
                            <div class="card border-0">
                                <div class="row">
                                    <div class="col-lg-6 productInfoCenter ps-3 order-2 order-lg-1 d-flex align-items-center">
                                        <div>
                                            <h3>50% More Capacity for High-Volume Post-Processing</h3>
                                            <p>Scale your post-processing throughput with the Fuse Blast High Capacity Kit, a drop-in upgrade for Fuse Blast that processes over 50% more parts per cycle than the standard basket.</p>
                                            <div class="mobileBtn">
                                                <button type="button" aria-label="Request for Formlabs SLS 3D Printers Post Processing Fuse Blast High Capacity Kit" class="btn btn-primary btn-rounded btn-sm text-uppercase letsConnectBtn" onclick="arkRequestSubmitModal('Request for Formlabs SLS 3D Printers Post Processing Fuse Blast High Capacity Kit')">Request a quote</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 d-flex align-items-center justify-content-center order-1 order-lg-2">
                                        <img width="100%" height="100%" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLS/new/FuseBlast.webp" class="img-fluid w-75" alt="Formlabs SLS 3D Printers Post Processing Fuse Blast High Capacity Kit">
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <!-- Fuse Sift Modal -->
        <div class="modal fade productDetailModal" id="fuseSiftModal" tabindex="-1" role="dialog" aria-labelledby="fuseSiftModalLabel" aria-label="Close">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header py-2">
                        <h2 class="modal-title text-uppercase font-weight-normal">Fuse Sift</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                    </div>
                    <div class="modal-body">
                        <section>
                            <div class="card border-0">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="thumb-gallery-wrapper">
                                            <div class="thumb-gallery-detail owl-carousel owl-theme manual nav-inside nav-style-1 nav-dark mb-3">
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLS/PostProcessing/fuseSift/01.webp" class="img-fluid" alt="Fuse 1+ 30W"></div>
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLS/PostProcessing/fuseSift/02.webp" class="img-fluid" alt="Fuse 1+ 30W"></div>
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLS/PostProcessing/fuseSift/03.webp" class="img-fluid" alt="Fuse 1+ 30W"></div>
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLS/PostProcessing/fuseSift/04.webp" class="img-fluid" alt="Fuse 1+ 30W"></div>
                                            </div>
                                            <div class="thumb-gallery-thumbs owl-carousel owl-theme manual thumb-gallery-thumbs mb-0">
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Fuse 1+ 30W" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLS/PostProcessing/fuseSift/01.webp" class="img-fluid"></span></div>
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Fuse 1+ 30W" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLS/PostProcessing/fuseSift/02.webp" class="img-fluid"></span></div>
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Fuse 1+ 30W" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLS/PostProcessing/fuseSift/03.webp" class="img-fluid"></span></div>
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Fuse 1+ 30W" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLS/PostProcessing/fuseSift/04.webp" class="img-fluid"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 productInfoCenter ps-3">
                                        <h3>Convenient, Compact Powder Management</h3>
                                        <p>Our comprehensive powder management station, Fuse Sift, integrates part extraction, powder recovery, storage, and mixing into one streamlined device.</p>
                                        <p>It automates the dispensing and blending of used and new powders, helping you minimize waste and maintain precise control over your powder supply. </p>
                                        <div class="mobileBtn">
                                        
<a href="contact.php" aria-label="Request a quote for Formlabs Fuse Blast" class="btn btn-primary btn-rounded btn-sm text-uppercase letsConnectBtn">Request a quote</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <!-- Fuse Blast Modal -->
        <div class="modal fade productDetailModal" id="fuseBlastModal" tabindex="-1" role="dialog" aria-labelledby="fuseBlastModalLabel" aria-label="Close">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header py-2">
                        <h2 class="modal-title text-uppercase font-weight-normal">Fuse Blast</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                    </div>
                    <div class="modal-body">
                        <section>
                            <div class="card border-0">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="thumb-gallery-wrapper">
                                            <div class="thumb-gallery-detail owl-carousel owl-theme manual nav-inside nav-style-1 nav-dark mb-3">
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLS/PostProcessing/fuseBlast/01.webp" class="img-fluid" alt="Fuse Blast"></div>
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLS/PostProcessing/fuseBlast/02.webp" class="img-fluid" alt="Fuse Blast"></div>
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLS/PostProcessing/fuseBlast/03.webp" class="img-fluid" alt="Fuse Blast"></div>
                                                <div class="formlabsImgBox"><img width="100%" height="100%" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLS/PostProcessing/fuseBlast/04.webp" class="img-fluid" alt="Fuse Blast"></div>
                                            </div>
                                            <div class="thumb-gallery-thumbs owl-carousel owl-theme manual thumb-gallery-thumbs mb-0">
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Fuse Blast" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLS/PostProcessing/fuseBlast/01.webp" class="img-fluid"></span></div>
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Fuse Blast" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLS/PostProcessing/fuseBlast/02.webp" class="img-fluid"></span></div>
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Fuse Blast" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLS/PostProcessing/fuseBlast/03.webp" class="img-fluid"></span></div>
                                                <div class="formlabsMiniImgBox"><span class="d-block cur-pointer"><img width="100%" height="100%" alt="Fuse Blast" src="https://www.arkinfo.in/public/assets/images/brands-pages-img/formlabs/SLS/PostProcessing/fuseBlast/04.webp" class="img-fluid"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 productInfoCenter ps-3">
                                        <h3>Fully Automated Part Cleaning And Polishing</h3>
                                        <p>Fuse Blast is a sophisticated automated finishing solution designed for SLS parts. It efficiently removes excess powder and consistently produces professionally clean parts with a smooth, semi-gloss finish.</p>
                                        <p>The Fuse Blast Polishing System ensures your parts are ready for dyeing, delivering exceptional surface quality every time. </p>
                                        <div class="mobileBtn">
                                         
<a href="contact.php" aria-label="Request a quote for Formlabs Fuse Blast" class="btn btn-primary btn-rounded btn-sm text-uppercase letsConnectBtn">Request a quote</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Us Form Modal -->
        <div class="modal fade" id="arkContactUsformModal" tabindex="-1" role="dialog" aria-labelledby="contactUsformModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header" style="padding:10px 20px">
                        <h4 class="modal-title text-uppercase font-weight-normal" id="contactUsformModalLabel">Contact Us</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body py-2 px-4">
                        <div class="row">
                            <div class="col">
                                <form class="contact-form form-fields-rounded" action="" method="POST" id="arkContactForm" data-action="https://www.arkinfo.in/arkInfoSave">
                                    <input type="hidden" name="brand" value="formlabs">
                                    <input type="hidden" name="request_for" id="request_for_quoteq">
                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label for="contactName" class="form-label text-2">Name <span class="text-danger">*</span></label>
                                            <input type="text" id="contactName" placeholder="e.g. Rahul Sharma" class="form-control text-3 h-auto py-2" name="name" required>
                                            <span class="spanErrorClass" id="name_error"></span>
                                        </div>
                                        <div class="form-group col-12 col-lg-6">
                                            <label for="contactPhone" class="form-label text-2">Phone No <span class="text-danger">*</span></label>
                                            <input type="tel" id="contactPhone" placeholder="e.g. 98765 43210" class="form-control text-3 h-auto py-2" name="phone" required>
                                            <span class="spanErrorClass" id="phone_error"></span>
                                        </div>
                                        <div class="form-group col-12 col-lg-6">
                                            <label for="contactEmail" class="form-label text-2">Email <span class="text-danger">*</span></label>
                                            <input type="email" id="contactEmail" placeholder="e.g. you@company.com" class="form-control text-3 h-auto py-2" name="email" required>
                                            <span class="spanErrorClass" id="email_error"></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label for="message" class="form-label text-2">Message <span class="text-danger">*</span></label>
                                            <textarea id="message" maxlength="5000" placeholder="Tell us what you need" class="form-control text-3 h-auto py-2" name="message" required></textarea>
                                            <span class="spanErrorClass" id="message_error"></span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer flex-column align-items-center justify-content-center">
                        <button type="button" onclick="productFormSubmit()" id="arkContactSubmitButton" class="btn btn-primary btn-rounded">Send Enquiry</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

        <script>
            $(document).ready(function() {
                $('.productDetailModal').each(function() {
                    var $modal = $(this);
                    var $main = $modal.find('.thumb-gallery-detail');
                    var $thumbs = $modal.find('.thumb-gallery-thumbs');
                    if (!$main.length) return;

                    $main.owlCarousel({
                        items: 1,
                        nav: true,
                        dots: false,
                        loop: false,
                        navText: ['&#10094;', '&#10095;'] // plain arrows, no FontAwesome needed
                    });

                    $thumbs.owlCarousel({
                        items: 5,
                        margin: 8,
                        nav: false,
                        dots: false,
                        loop: false,
                        mouseDrag: false,
                        touchDrag: false
                    });

                    // Click a thumbnail -> show that image in the main slider
                    $thumbs.on('click', '.owl-item', function() {
                        $main.trigger('to.owl.carousel', [$(this).index(), 300, true]);
                    });

                    // Main slider changes -> highlight matching thumbnail
                    function syncThumbs(index) {
                        $thumbs.find('.owl-item').removeClass('is-active-thumb')
                            .eq(index).addClass('is-active-thumb');
                        $thumbs.trigger('to.owl.carousel', [index, 300, true]);
                    }
                    $main.on('changed.owl.carousel', function(e) {
                        if (e.item) syncThumbs(e.item.index);
                    });
                    syncThumbs(0);

                    // Owl can't measure widths inside a hidden modal, so refresh on open
                    this.addEventListener('shown.bs.modal', function() {
                        $main.trigger('refresh.owl.carousel');
                        $thumbs.trigger('refresh.owl.carousel');
                        syncThumbs(0);
                        $main.trigger('to.owl.carousel', [0, 0]);
                    });
                });
            });
        </script>


        <!--=====SERVICE AREA END=======-->


        <?php include "footer.php" ?>

        </div>

        <!--===== FOOTER AREA END =======-->


        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/aos.js"></script>
        <script src="assets/js/fontawesome.js"></script>
        <script src="assets/js/jquery.countup.js"></script>
        <script src="assets/js/mobile-menu.js"></script>
        <script src="assets/js/jquery.magnific-popup.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/slick-slider.js"></script>
        <script src="assets/js/gsap.min.js"></script>
        <script src="assets/js/ScrollTrigger.min.js"></script>
        <script src="assets/js/Splitetext.js"></script>
        <script src="assets/js/text-animation.js"></script>
        <script src="assets/js/SmoothScroll.js"></script>
        <script src="assets/js/jquery.lineProgressbar.js"></script>
        <script src="assets/js/ripple-btn.js"></script>
        <script src="assets/js/main.js"></script>
    </body>

</html>