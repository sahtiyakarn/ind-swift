@extends('homeWeb/base')
@section('title')
    {{ $data['title'] }}
@endsection
@section('description')
    {{ $data->description }}
@endsection
@section('keyword')
    {{ $data->keyword }}
@endsection
@section('customcss')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/recent.css') }}">
    <link rel="stylesheet" href="{{ $data->canonical }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <link rel="stylesheet" href="{{ asset('assets/assets/css/responsive.css') }}">

    <style>
        <!-- slick slider css
        -->
        .brands

        {

        width:100%;

        padding-top:

        0px;

        padding-bottom:0px

        }

        .brands_slider_container

        {

        height:

        130px;

        box-shadow:

        0px

        1px

        5px

        rgba(0,

        0,

        0,

        0.1);

        padding-left:

        0px;

        padding-right:

        0px;

        }

        .brands_slider

        {

        height:

        100%;

        margin-top:

        0px

        }

        .brands_item

        {

        height:

        100%

        }

        .brands_item

        img

        {

        max-width:

        100%

        }

        .brands_nav

        {

        position:

        absolute;

        top:

        50%;

        -webkit-transform:

        translateY(-50%);

        -moz-transform:

        translateY(-50%);

        -ms-transform:

        translateY(-50%);

        -o-transform:

        translateY(-50%);

        transform:

        translateY(-50%);

        padding:

        5px;

        cursor:

        pointer

        }

        .brands_nav

        i

        {

        color:

        #e5e5e5;

        -webkit-transition:

        all

        200ms

        ease;

        -moz-transition:

        all

        200ms

        ease;

        -ms-transition:

        all

        200ms

        ease;

        -o-transition:

        all

        200ms

        ease;

        transition:

        all

        200ms

        ease

        }

        .brands_nav:hover

        i

        {

        color:

        #676767

        }































    </style>
@endsection

@section('customjs')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
@endsection

@section('customjq')
    <script>
        AOS.init({
            offset: 120,
            duration: 1000,
        });

    </script>

    <!-- java scripts code starts from  here -->


    <script>
        $(document).ready(function() {

            if ($('.brands_slider').length) {
                var brandsSlider = $('.brands_slider');

                brandsSlider.owlCarousel({
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 2000,
                    nav: false,
                    dots: false,
                    autoWidth: true,
                    items: 6,
                    margin: 42
                });

                if ($('.brands_prev').length) {
                    var prev = $('.brands_prev');
                    prev.on('click', function() {
                        brandsSlider.trigger('prev.owl.carousel');
                    });
                }

                if ($('.brands_next').length) {
                    var next = $('.brands_next');
                    next.on('click', function() {
                        brandsSlider.trigger('next.owl.carousel');
                    });
                }
            }
        });

    </script>
@endsection

@section('body-content')

    {{-- start slider --}}

    <div style="margin-top: 150px;"></div>

    <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Composer -->
    <!-- Source: https://www.jssor.com/demos/full-width-slider.slider/=edit -->
    <script src="{{ asset('assets/js/jssor.slider-28.0.0.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        window.jssor_1_slider_init = function() {

            var jssor_1_SlideoTransitions = [
                [{
                    b: -1,
                    d: 1,
                    ls: 0.5
                }, {
                    b: 0,
                    d: 1000,
                    y: 5,
                    e: {
                        y: 6
                    }
                }],
                [{
                    b: -1,
                    d: 1,
                    ls: 0.5
                }, {
                    b: 200,
                    d: 1000,
                    y: 25,
                    e: {
                        y: 6
                    }
                }],
                [{
                    b: -1,
                    d: 1,
                    ls: 0.5
                }, {
                    b: 400,
                    d: 1000,
                    y: 45,
                    e: {
                        y: 6
                    }
                }],
                [{
                    b: -1,
                    d: 1,
                    ls: 0.5
                }, {
                    b: 600,
                    d: 1000,
                    y: 65,
                    e: {
                        y: 6
                    }
                }],
                [{
                    b: -1,
                    d: 1,
                    ls: 0.5
                }, {
                    b: 800,
                    d: 1000,
                    y: 85,
                    e: {
                        y: 6
                    }
                }],
                [{
                    b: -1,
                    d: 1,
                    ls: 0.5
                }, {
                    b: 500,
                    d: 1000,
                    y: 195,
                    e: {
                        y: 6
                    }
                }],
                [{
                    b: 0,
                    d: 2000,
                    y: 30,
                    e: {
                        y: 3
                    }
                }],
                [{
                    b: -1,
                    d: 1,
                    rY: -15,
                    tZ: 100
                }, {
                    b: 0,
                    d: 1500,
                    y: 30,
                    o: 1,
                    e: {
                        y: 3
                    }
                }],
                [{
                    b: -1,
                    d: 1,
                    rY: -15,
                    tZ: -100
                }, {
                    b: 0,
                    d: 1500,
                    y: 100,
                    o: 0.8,
                    e: {
                        y: 3
                    }
                }],
                [{
                    b: 500,
                    d: 1500,
                    o: 1
                }],
                [{
                    b: 0,
                    d: 1000,
                    y: 380,
                    e: {
                        y: 6
                    }
                }],
                [{
                    b: 300,
                    d: 1000,
                    x: 80,
                    e: {
                        x: 6
                    }
                }],
                [{
                    b: 300,
                    d: 1000,
                    x: 330,
                    e: {
                        x: 6
                    }
                }],
                [{
                    b: -1,
                    d: 1,
                    r: -110,
                    sX: 5,
                    sY: 5
                }, {
                    b: 0,
                    d: 2000,
                    o: 1,
                    r: -20,
                    sX: 1,
                    sY: 1,
                    e: {
                        o: 6,
                        r: 6,
                        sX: 6,
                        sY: 6
                    }
                }],
                [{
                    b: 0,
                    d: 600,
                    x: 150,
                    o: 0.5,
                    e: {
                        x: 6
                    }
                }],
                [{
                    b: 0,
                    d: 600,
                    x: 1140,
                    o: 0.6,
                    e: {
                        x: 6
                    }
                }],
                [{
                    b: -1,
                    d: 1,
                    sX: 5,
                    sY: 5
                }, {
                    b: 600,
                    d: 600,
                    o: 1,
                    sX: 1,
                    sY: 1,
                    e: {
                        sX: 3,
                        sY: 3
                    }
                }]
            ];

            var jssor_1_options = {
                $AutoPlay: 1,
                $LazyLoading: 1,
                $CaptionSliderOptions: {
                    $Class: $JssorCaptionSlideo$,
                    $Transitions: jssor_1_SlideoTransitions
                },
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$
                },
                $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$,
                    $SpacingX: 20,
                    $SpacingY: 20
                }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 3000;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                } else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };

    </script>
    <link
        href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,regular,italic,700,700italic&subset=latin-ext,greek-ext,cyrillic-ext,greek,vietnamese,latin,cyrillic"
        rel="stylesheet" type="text/css" />
    <style>


    </style>
    <svg viewbox="0 0 0 0" width="0" height="0" style="display:block;position:relative;left:0px;top:0px;">
        <defs>
            <filter id="jssor_1_flt_1" x="-50%" y="-50%" width="200%" height="200%">
                <feGaussianBlur stddeviation="4"></feGaussianBlur>
            </filter>
            <radialGradient id="jssor_1_grd_2">
                <stop offset="0" stop-color="#fff"></stop>
                <stop offset="1" stop-color="#000"></stop>
            </radialGradient>
            <mask id="jssor_1_msk_3">
                <path fill="url(#jssor_1_grd_2)" d="M600,0L600,400L0,400L0,0Z" x="0" y="0"
                    style="position:absolute;overflow:visible;"></path>
            </mask>
        </defs>
    </svg>
    <div id="jssor_1"
        style="position:relative;margin:0 auto;top:0px;left:0px;width:1600px;height:560px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin"
            style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">

        </div>
        <div data-u="slides"
            style="cursor:default;position:relative;top:0px;left:0px;width:1600px;height:560px;overflow:hidden;">

            <div style="background-color:#000000;">
                <img data-u="image" style="opacity:0.8;" data-src="{{ asset('assets/img/Ayurveda_02_1.png') }}" />
                <div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1600px;height:560px;position:absolute;">
                    <svg viewbox="0 0 600 400" data-ts="preserve-3d" width="600" height="400" data-tchd="jssor_1_msk_3"
                        style="left:255px;top:0px;display:block;position:absolute;overflow:visible;">
                        <g mask="url(#jssor_1_msk_3)">
                            <path data-to="300px -180px" fill="none" stroke="rgba(250,251,252,0.5)" stroke-width="20"
                                d="M410-350L410-10L190-10L190-350Z" x="190" y="-350" data-t="10"
                                style="position:absolute;overflow:visible;"></path>
                        </g>
                    </svg>
                    <svg viewbox="0 0 800 72" data-to="50% 50%" width="800" height="72" data-t="11"
                        style="left:-800px;top:78px;display:block;position:absolute;font-family:'Roboto Condensed',sans-serif;font-size:50px;font-weight:900;overflow:visible;">
                        <text fill="#fafbfc" text-anchor="middle" x="400" y="72">AYUVEDAHERBS.COM
                        </text>
                    </svg>
                    <svg viewbox="0 0 800 72" data-to="50% 50%" width="800" height="72" data-t="12"
                        style="left:1600px;top:153px;display:block;position:absolute;font-family:'Roboto Condensed',sans-serif;font-size:40px;font-weight:900;overflow:visible;">
                        <text fill="#fafbfc" text-anchor="middle" x="400" y="72">WELLNESS | IMMUNITY | HEALTH

                        </text>
                    </svg>
                </div>
            </div>
            <!-- same slider -->
            <div style="background-color:#000000;">
                <img data-u="image" style="opacity:0.8;" data-src="{{ asset('assets/img/Heritage_02_1.png') }}" />
                <div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1600px;height:560px;position:absolute;">
                    <svg viewbox="0 0 600 400" data-ts="preserve-3d" width="600" height="400" data-tchd="jssor_1_msk_3"
                        style="left:255px;top:0px;display:block;position:absolute;overflow:visible;">
                        <g mask="url(#jssor_1_msk_3)">
                            <path data-to="300px -180px" fill="none" stroke="rgba(250,251,252,0.5)" stroke-width="20"
                                d="M410-350L410-10L190-10L190-350Z" x="190" y="-350" data-t="10"
                                style="position:absolute;overflow:visible;"></path>
                        </g>
                    </svg>
                    <svg viewbox="0 0 800 72" data-to="50% 50%" width="800" height="72" data-t="11"
                        style="left:-800px;top:78px;display:block;position:absolute;font-family:'Roboto Condensed',sans-serif;font-size:50px;font-weight:900;overflow:visible;">
                        <text fill="#fafbfc" text-anchor="middle" x="400" y="72">36 YEARS OF
                        </text>
                    </svg>
                    <svg viewbox="0 0 800 72" data-to="50% 50%" width="800" height="72" data-t="12"
                        style="left:1600px;top:153px;display:block;position:absolute;font-family:'Roboto Condensed',sans-serif;font-size:40px;font-weight:900;overflow:visible;">
                        <text fill="#fafbfc" text-anchor="middle" x="400" y="72">HERITAGE
                        </text>
                    </svg>
                </div>
            </div>
            <!-- same slider -->
            <div style="background-color:#000000;">
                <img data-u="image" style="opacity:0.8;" data-src="{{ asset('assets/img/HumanitY_02_1.png') }}" />
                <div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1600px;height:560px;position:absolute;">
                    <svg viewbox="0 0 600 400" data-ts="preserve-3d" width="600" height="400" data-tchd="jssor_1_msk_3"
                        style="left:255px;top:0px;display:block;position:absolute;overflow:visible;">
                        <g mask="url(#jssor_1_msk_3)">
                            <path data-to="300px -180px" fill="none" stroke="rgba(250,251,252,0.5)" stroke-width="20"
                                d="M410-350L410-10L190-10L190-350Z" x="190" y="-350" data-t="10"
                                style="position:absolute;overflow:visible;"></path>
                        </g>
                    </svg>
                    <svg viewbox="0 0 800 72" data-to="50% 50%" width="800" height="72" data-t="11"
                        style="left:-800px;top:78px;display:block;position:absolute;font-family:'Roboto Condensed',sans-serif;font-size:50px;font-weight:900;overflow:visible;">
                        <text fill="#fafbfc" text-anchor="middle" x="400" y="72">IN SERVICE OF HUMANITY
                        </text>
                    </svg>
                    <svg viewbox="0 0 800 72" data-to="50% 50%" width="800" height="72" data-t="12"
                        style="left:1600px;top:153px;display:block;position:absolute;font-family:'Roboto Condensed',sans-serif;font-size:40px;font-weight:900;overflow:visible;">
                        <text fill="#fafbfc" text-anchor="middle" x="400" y="72">BECAUSE LIFE IS PRECIOUS
                        </text>
                    </svg>
                </div>
            </div>
            <!-- same slider -->
            <div style="background-color:#000000;">
                <img data-u="image" style="opacity:0.8;" data-src="{{ asset('assets/img/Pan_India_02_1.png') }}" />
                <div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1600px;height:560px;position:absolute;">
                    <svg viewbox="0 0 600 400" data-ts="preserve-3d" width="600" height="400" data-tchd="jssor_1_msk_3"
                        style="left:255px;top:0px;display:block;position:absolute;overflow:visible;">
                        <g mask="url(#jssor_1_msk_3)">
                            <path data-to="300px -180px" fill="none" stroke="rgba(250,251,252,0.5)" stroke-width="20"
                                d="M410-350L410-10L190-10L190-350Z" x="190" y="-350" data-t="10"
                                style="position:absolute;overflow:visible;"></path>
                        </g>
                    </svg>
                    <svg viewbox="0 0 800 72" data-to="50% 50%" width="800" height="72" data-t="11"
                        style="left:-800px;top:78px;display:block;position:absolute;font-family:'Roboto Condensed',sans-serif;font-size:50px;font-weight:900;overflow:visible;">
                        <text fill="#fafbfc" text-anchor="middle" x="400" y="72">PAN INDIA
                        </text>
                    </svg>
                    <svg viewbox="0 0 800 72" data-to="50% 50%" width="800" height="72" data-t="12"
                        style="left:1600px;top:153px;display:block;position:absolute;font-family:'Roboto Condensed',sans-serif;font-size:40px;font-weight:900;overflow:visible;">
                        <text fill="#fafbfc" text-anchor="middle" x="400" y="72">PRESENCE
                        </text>
                    </svg>
                </div>
            </div>
            <!-- same slider -->
            <div style="background-color:#000000;">
                <img data-u="image" style="opacity:0.8;" data-src="{{ asset('assets/img/R&D_02_1.png') }}" />
                <div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1600px;height:560px;position:absolute;">
                    <svg viewbox="0 0 600 400" data-ts="preserve-3d" width="600" height="400" data-tchd="jssor_1_msk_3"
                        style="left:255px;top:0px;display:block;position:absolute;overflow:visible;">
                        <g mask="url(#jssor_1_msk_3)">
                            <path data-to="300px -180px" fill="none" stroke="rgba(250,251,252,0.5)" stroke-width="20"
                                d="M410-350L410-10L190-10L190-350Z" x="190" y="-350" data-t="10"
                                style="position:absolute;overflow:visible;"></path>
                        </g>
                    </svg>
                    <svg viewbox="0 0 800 72" data-to="50% 50%" width="800" height="72" data-t="11"
                        style="left:-800px;top:78px;display:block;position:absolute;font-family:'Roboto Condensed',sans-serif;font-size:50px;font-weight:900;overflow:visible;">
                        <text fill="#fafbfc" text-anchor="middle" x="400" y="72">STATE OF THE ART
                        </text>
                    </svg>
                    <svg viewbox="0 0 800 72" data-to="50% 50%" width="800" height="72" data-t="12"
                        style="left:1600px;top:153px;display:block;position:absolute;font-family:'Roboto Condensed',sans-serif;font-size:40px;font-weight:900;overflow:visible;">
                        <text fill="#fafbfc" text-anchor="middle" x="400" y="72">R&D FACILITY
                        </text>
                    </svg>
                </div>
            </div>




        </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">slider html</a>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb132" style="position:absolute;bottom:24px;right:16px;" data-autocenter="1"
            data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:12px;height:12px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2"
            data-scale="0.75" data-scale-left="0.75">
            <!--   <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                                                                                                                        <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                                                                                                                                    </svg> -->
        </div>
        <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2"
            data-scale="0.75" data-scale-right="0.75">
            <!-- <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                                                                                                                        <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                                                                                                                                    </svg> -->
        </div>
    </div>
    <script type="text/javascript">
        jssor_1_slider_init();

    </script>
    {{-- slider end --}}
    <!-- 3 Boxes -->

    <div class="boxes">
        <div class="container">
            <div class="row">

                <!-- Box -->
                <div class="col-lg-4 box_col">
                    <div class="box working_hours">
                        <div class="box_icon d-flex flex-column align-items-start justify-content-center">
                            <div style="width:29px; height:29px;"><i class="fa fa-user-md fa-2x text-white"></i>
                            </div>
                        </div>
                        <div class="box_title">Our Profile</div>
                        <div class="box_text">IND-SWIFT is Chandigarh based pharmaceutical company, established in
                            1986 with a mission of winning global customers through innovative pharmaceutical
                            products...</div>
                        <div class="working_hours_list">

                        </div>
                    </div>
                </div>

                <!-- Box -->
                <div class="col-lg-4 box_col">
                    <div class="box box_appointments">
                        <div class="box_icon d-flex flex-column align-items-start justify-content-center">
                            <div style="width: 29px; height:29px;"><i class="fa fa-users fa-2x text-white"></i></div>
                        </div>
                        <div class="box_title">Leadership</div>
                        <div class="box_text">The facilities are built according to the current guidelines of MHRA,
                            EU, WHO and accreditations with ISO 14000 series standards. The company has world class
                            expertise...</div>
                    </div>
                </div>

                <!-- Box -->
                <div class="col-lg-4 box_col">
                    <div class="box box_emergency">
                        <div class="box_icon d-flex flex-column align-items-start justify-content-center">
                            <div style="width: 37px; height:37px; margin-left:-4px;"><i
                                    class="fa fa-eye fa-2x text-white"></i></div>
                        </div>
                        <div class="box_title">Mission & Vision</div>
                        <div class="box_text">IND-SWIFT has spread its network across 45 countries. It is an ISO
                            9001-2008, WHO GMP certified company. It is also listed on the Bombay Stock Exchange and
                            National Stock Exchange...</div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- About -->
    <div class="about">
        <div class="container">
            <div class="row row-lg-eq-height">

                <!-- About Content -->
                <div class="col-lg-7">
                    <div class="about_content">
                        <div class="section_title">
                            <h2>About Us</h2>
                        </div>
                        <div class="about_text">
                            <p>Established in 1986 by the Jains, Mehtas and Munjals, Ind-Swift is a leading
                                pharmaceutical manufacturing and marketing company in India, based in Chandigarh.
                                Its strength lies in innovative pharmaceutical products. Ind-Swift has been ranked
                                35th in the Indian pharma industry and is the second largest among the drug
                                manufacturers in India (north India). It has spread its network across 45 countries.
                                It is an ISO 9001-2008, WHO GMP certified company. It is also listed on the Bombay
                                Stock Exchange and National Stock Exchange. It has 5 plants in India which include
                                multi-purpose, multi-location facilities spread across northern India...</p>
                        </div>
                        <div class="button about_button">
                            <a href="/about">read more</a>
                        </div>
                    </div>
                </div>

                <!-- About Image -->
                <div class="col-lg-5">
                    <div class="about_image"><img src="{{ asset('assets/images/about.png') }}" alt=""></div>
                </div>
            </div>
        </div>
    </div>


    <!-- Division  -->
    <div class="departments">
        <div class="departments_background parallax-window" data-parallax="scroll"
            data-image-src="{{ asset('assets/images/departments.jpg') }}" data-speed="0.8"></div>
        <section class="recent-posts">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section_title">
                            <h2 class="text-white">Our Featured Divisions</h2>
                        </div>
                    </div>
                </div>
                <div class="row services_row">
                    <!-- Service -->
                    <div class="col-lg-4 col-md-6 service_col" data-aos="flip-right">
                        <a href="/herbalplusd">
                            <div class="service text-center trans_200">
                                <div class="service_icon"><img class="svg" src="{{ asset('assets/images/hERBAL.png') }}"
                                        alt="">
                                </div>
                                <div class="service_title trans_200">Herbal Plus Division</div>
                                <div class="service_text">
                                    <p>The Sanskrit root Ayur means “Longevity” or “Life” and veda means “Science”.
                                        Ayurveda Provide as with the knowledge of how to prevent disease and how to
                                        eliminate its root cause if it does occur. The division of Ayurveda has been an
                                        integral...</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Service -->
                    <div class="col-lg-4 col-md-6 service_col">
                        <a href="nobledivision">
                            <div class="service text-center trans_200">
                                <div class="service_icon"><img class="svg" src="{{ asset('assets/images/Noble.png') }}"
                                        alt="">
                                </div>
                                <div class="service_title trans_200">Noble Division</div>
                                <div class="service_text">
                                    <p>The Noble Division being a multispecialty division, its portfolio covers all the
                                        therapeutic segments which are available in all the other divisions like
                                        respiratory inclusive of ENT, dentistry, anti-infective, cardio-diabetic and
                                        orthopaedic therapies...</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Service -->
                    <div class="col-lg-4 col-md-6 service_col" data-aos="flip-left">
                        <a href="/novadivision">
                            <div class="service text-center trans_200">
                                <div class="service_icon"><img class="svg" src="{{ asset('assets/images/Nova.png') }}"
                                        alt="">
                                </div>
                                <div class="service_title trans_200">Nova Division</div>
                                <div class="service_text">
                                    <p>The Nova Division being a multispecialty division, its portfolio covers all the
                                        therapeutic segments which are available in all the other divisions like
                                        respiratory inclusive of ENT, dentistry, anti-infective, cardio-diabetic and
                                        orthopaedic therapies...</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Service -->
                    <div class="col-lg-3 col-md-6 service_col" data-aos="fade-right">
                        <a href="/ethicaldivision">
                            <div class="service text-center trans_200">
                                <div class="service_icon"><img class="svg"
                                        src="{{ asset('assets/images/Ethical Medicine.png') }}" alt="">
                                </div>
                                <div class="service_title trans_200">Ethical Division</div>
                                <div class="service_text">
                                    <p>The Ethical division is dedicated to Gynaecology, Paediatrics, Dermatology and GP
                                        and its ambit extends to a wide range of medicines. These drugs are
                                        formulated...</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Service -->
                    <div class="col-lg-3 col-md-6 service_col" data-aos="fade-right">
                        <a href="/genericdivision">
                            <div class="service text-center trans_200">
                                <div class="service_icon"><img class="svg"
                                        src="{{ asset('assets/images/service_5.svg') }}" alt=""></div>
                                <div class="service_title trans_200">Generic Division</div>
                                <div class="service_text">
                                    <p>Helping those who cannot afford costly branded medicines has always been on the
                                        Ind-Swift agenda and the Generics division provides the same active
                                        ingredients...</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Service -->

                    <!-- Service -->
                    <div class="col-lg-3 col-md-6 service_col" data-aos="fade-left">
                        <a href="/institutiondivision">
                            <div class="service text-center trans_200">
                                <div class="service_icon"><img class="svg"
                                        src="{{ asset('assets/images/iNSTITUTION.png') }}" alt=""></div>
                                <div class="service_title trans_200">Institutional Division</div>
                                <div class="service_text">
                                    <p>Ind-Swift is a prominent organization and very well known amongst lakhs of
                                        employees of the railways, police force, armed forces and paramilitary...</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Service -->
                    <div class="col-lg-3 col-md-6 service_col" data-aos="fade-left">
                        <a href="/proposeddivisions">
                            <div class="service text-center trans_200">
                                <div class="service_icon"><img class="svg"
                                        src="{{ asset('assets/images/service_6.svg') }}" alt=""></div>
                                <div class="service_title trans_200">Proposed Division</div>
                                <div class="service_text">
                                    <p>Today Ind-Swift is at a reigning pedestal and it enjoys a dominant position in
                                        various therapeutic segments. Ind-Swift believes that quality healthcare...</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>



    <!-- darpartment  -->
    {{-- <div class="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-right" data-aos-duration="800">
                        <div class="post-content text-sm-right">
                            <h3><a href="#" class="text-white">Therapeutic Segments:</a></h3>
                            <ul>
                                <li> &raquo; Gynaecology</li>
                                <li> &raquo; Cardiology</li>
                                <li> &raquo; Paedology</li>
                            </ul>
                        </div>
                        <div class="post-thumb">
                            <img class="img-fluid" src="assets/images/thero1.jpg" alt="Post 1">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-left" data-aos-duration="800">
                        <div class="post-thumb">
                            <img class="img-fluid" src="assets/images/nut1.jpg" alt="Post 1">
                        </div>
                        <div class="post-content">
                            <h3><a href="#" class="text-white">Product Segments :</a></h3>
                            <ul>
                                <li> &raquo; Pain Mangement/Anti-Inflammatory</li>
                                <li> &raquo; Ayurveda/State of Art Products</li>
                                <li> &raquo; Anti--Infectives</li>
                                <li> &raquo; Nutraceuticals</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-right" data-aos-delay="200"
                        data-aos-duration="800">
                        <div class="post-content text-sm-right">
                            <h3><a href="#" class="text-white">Therapeutic Segments:</a></h3>
                            <ul>
                                <li> &raquo; Gastroenterology</li>
                                <li> &raquo; Dermatology</li>
                                <li> &raquo; Diabetology</li>
                                <li> &raquo; Urology</li>
                            </ul>
                        </div>
                        <div class="post-thumb">
                            <img class="img-fluid" src="assets/images/thero2.jpg" alt="Post 1">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-left" data-aos-delay="200"
                        data-aos-duration="800">
                        <div class="post-thumb">
                            <img class="img-fluid" src="assets/images/nut2.jpg" alt="Post 1">
                        </div>
                        <div class="post-content">
                            <h3><a href="#" class="text-white">Product Segments :</a></h3>
                            <ul>
                                <li> &raquo; Food Product</li>
                                <li> &raquo; Female Care</li>
                                <li> &raquo; Anti-Biotics</li>
                                <li> &raquo; Baby Care</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center" style="color: #2323233">Thrapeutic Segments</h2>
                </div>
            </div>

            <div class="row">
                <!-- About Content -->
                <div class="col-lg-4 offset-lg-2 " data-aos="fade-right" data-aos-duration="800">
                    <div class="about_content">
                        <div class="about_text" style="padding-right:0px; text-align:right">
                            <p class="">Established in 1986 by the Jains, Mehtas and Munjals, Ind-Swift is a leading
                                pharmaceutical
                                manufacturing and marketing company in India, based in Chandigarh.
                                northern India...</p>
                            <ul class="text-right">
                                <li><a href="/therapeuticsegments">&raquo;&nbsp;Urology</a></li>
                                <li><a href="/productsegment">&raquo;&nbsp;Paedology</a></li>
                                <li><a href="/productsegment">&raquo;&nbsp;Cardiology</a></li>
                                <li><a href="/productsegment">&raquo;&nbsp;Gynaecology</a></li>
                                <li><a href="/productsegment">&raquo;&nbsp;Dermatology</a></li>
                                <li><a href="/productsegment">&raquo;&nbsp;Diabetology</a></li>
                                <li><a href="/productsegment">&raquo;&nbsp;Gastroenterology</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- About Image -->
                <div class="col-lg-4" data-aos="fade-left" data-aos-duration="800">
                    <div class="" style="margin-top: 32px;">
                        <img src="{{ asset('assets/images/th1.png') }}" alt="" class="img-fluid img-thumbnail">
                    </div>
                </div>
            </div>

            <br><br><br><br>

            <div class="row">
                <div class=" col-lg-12 text-center mb-3">
                    <h2 class="text-center">Products Segments</h2>
                </div>
            </div>
            <div class="row">
                <!-- About Image -->
                <div class="col-lg-4 offset-lg-2 " style="margin-top: 32px;" data-aos="fade-right" data-aos-duration="800">
                    <div class="about_image"><img src="{{ asset('assets/images/cer1.png') }}" alt=""
                            class="img-thumbnail img-fluid"></div>
                </div>
                <!-- About Content -->
                <div class="col-lg-5" data-aos="fade-left" data-aos-duration="800">
                    <div class="about_content ml-2">
                        <div class="about_text">
                            <p>hich include multi-purpose, multi-location facilities spread across
                                northern India...</p>
                            <ul>
                                <li><a href="#">&raquo;&nbsp;Baby Care</a></li>
                                <li><a href="/productsegment">&raquo;&nbsp;Anti-Biotics</a></li>
                                <li><a href="/productsegment">&raquo;&nbsp;Female Care</a></li>
                                <li><a href="/productsegment">&raquo;&nbsp;Food Product</a></li>
                                <li><a href="/productsegment">&raquo;&nbsp;Nutraceuticals</a></li>
                                <li><a href="/productsegment">&raquo;&nbsp;Anti--Infectives</a></li>
                                <li><a href="/productsegment">&raquo;&nbsp;Ayurveda/State of Art
                                        Products</a></li>
                                <li><a href="/productsegment">&raquo;&nbsp;Pain
                                        Mangement/Anti-Inflammatory</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Our product -->
    <div class="cta" style="padding-bottom: 20px;">
        <div class="cta_background parallax-window" data-parallax="scroll"
            data-image-src="{{ asset('assets/images/cta.jpg') }}" data-speed="0.8"></div>
        <div class="container" style="margin-top: -100px">
            <div class="row">
                <div class="col">
                    <div class="section_title section_title_light">
                        <h2>Our Products</h2>
                    </div>
                </div>
            </div>
            <div class="row departments_row row-md-eq-height" style="margin-top: 0px;">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 dept_col">
                                <a href="/ethicaldivision">
                                    <div class="dept">
                                        <div class="dept_image"><img src="{{ asset('assets/images/dethi.jpg') }}" alt="">
                                        </div>
                                        <div class=" dept_content text-center">
                                            <div class="dept_title">Ethical Medicine</div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- Department -->
                            <div class="col-lg-3 col-md-6 dept_col">
                                <a href="https://www.ayuvedaherbs.com/">
                                    <div class="dept">
                                        <div class="dept_image"><img src="{{ asset('assets/images/desi.jpg') }}" alt="">
                                        </div>
                                        <div class="dept_content text-center">
                                            <div class="dept_title">Ayurveda Products</div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- Department -->
                            <div class="col-lg-3 col-md-6 dept_col">
                                <a href="http://indswift.in/">
                                    <div class="dept">
                                        <div class="dept_image"><img src="{{ asset('assets/images/dcovid.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="dept_content text-center">
                                            <div class="dept_title">Covid-19 Products</div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- Department -->
                            <div class="col-lg-3 col-md-6 dept_col">
                                <a href="/generic">
                                    <div class="dept">
                                        <div class="dept_image"><img src="{{ asset('assets/images/Generic.png') }}"
                                                alt="">
                                        </div>
                                        <div class="dept_content text-center">
                                            <div class="dept_title">Generic Medicine</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 dept_col">
                        <div class="dept">
                            <div class="dept_text">
                                <p style=" text-align: justify;line-height: 1.2;"> A talented team of research scientists,
                                    formulation
                                    experts, clinical development
                                    and regulatory affairs professionals support the company's marketing efforts not
                                    only across the country but also around the globe. Ind-Swift pharmaceutical products
                                    are safe...</p>
                            </div>
                            <div class="button dept_button"><a href="#">read more</a></div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <!-- slick slider -->
                <div class="col">
                    <div class="brands_slider_container">
                        <div class="owl-carousel owl-theme brands_slider">
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="{{ asset('assets/images/oliade.jpg') }}" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="{{ asset('assets/images/Succee.jpg') }}" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="{{ asset('assets/images/SUPROX-SR.jpg') }}" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="{{ asset('assets/images/SWIFTIN-VA2-ok.jpg') }}" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="{{ asset('assets/images/UTGARD.jpg') }}" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="{{ asset('assets/images/Anaproct.jpg') }}" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="{{ asset('assets/images/Angiguard.jpg') }}" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="{{ asset('assets/images/Fewash-VA-Pages.jpg') }}" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="{{ asset('assets/images/fixit.jpg') }}" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="{{ asset('assets/images/hangover.jpg') }}" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ends here -->
            </div>
        </div>
    </div>

@endsection
