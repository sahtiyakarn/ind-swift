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
@endsection
@section('customjs')
    <style>
        .blink a {
            animation: blinker 0.6s linear infinite;
            color: red;
            font-size: 18px;
            font-weight: bold;
            font-family: sans-serif;
        }

        @keyframes blinker {
            50% {
                opacity: 0;
            }
        }

        .blink-one {
            animation: blinker-one 1s linear infinite;
        }

        @keyframes blinker-one {
            0% {
                opacity: 0;
            }
        }

        .blink-two {
            animation: blinker-two 1.4s linear infinite;
        }

        @keyframes blinker-two {
            100% {
                opacity: 0;
            }
        }

        /* image hover effect */

        .img-hover img {
            -webkit-transition: all .3s ease;
            /* Safari and Chrome */
            -moz-transition: all .3s ease;
            /* Firefox */
            -o-transition: all .3s ease;
            /* IE 9 */
            -ms-transition: all .3s ease;
            /* Opera */
            transition: all .3s ease;
            position: relative;
        }

        .img-hover img:hover {
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-transform: translateZ(0) scale(2.20);
            /* Safari and Chrome */
            -moz-transform: scale(2.20);
            /* Firefox */
            -ms-transform: scale(2.20);
            /* IE 9 */
            -o-transform: translatZ(0) scale(2.20);
            /* Opera */
            transform: translatZ(0) scale(2.20);
            z-index: 1000;
        }


        .grayscale {
            -webkit-filter: brightness(1.10) grayscale(100%) contrast(90%);
            -moz-filter: brightness(1.10) grayscale(100%) contrast(90%);
            filter: brightness(1.10) grayscale(100%);
        }

    </style>
@endsection

@section('body-content')
    <div style="margin-top: 98px;"></div>

    <div class="home">

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
                style="cursor:default;position:relative;top:0px;left:0px;width:1600px;height:260px;overflow:hidden;">

                <div style="background-color:#000000;">
                    <img data-u="image" style="opacity:0.8;" data-src="{{ asset('assets/img/divisions.png') }}" />
                    <div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1600px;height:560px;position:absolute;">
                        <svg viewbox="0 0 600 400" data-ts="preserve-3d" width="600" height="300" data-tchd="jssor_1_msk_3"
                            style="left:255px;top:0px;display:block;position:absolute;overflow:visible;">
                            <g mask="url(#jssor_1_msk_3)">
                                <path data-to="300px -180px" fill="none" stroke="rgba(250,251,252,0.5)" stroke-width="20"
                                    d="M410-350L410-10L190-10L190-350Z" x="190" y="-350" data-t="10"
                                    style="position:absolute;overflow:visible;"></path>
                            </g>
                        </svg>
                        <svg viewbox="0 0 800 72" data-to="50% 50%" width="800" height="72" data-t="11"
                            style="left:-800px;top:78px;display:block;position:absolute;font-family:'Roboto Condensed',sans-serif;font-size:50px;font-weight:900;overflow:visible;">
                            <text fill="#fafbfc" text-anchor="middle" x="400" y="72">IND-Swift
                            </text>
                        </svg>
                        <svg viewbox="0 0 800 72" data-to="50% 50%" width="800" height="72" data-t="12"
                            style="left:1600px;top:153px;display:block;position:absolute;font-family:'Roboto Condensed',sans-serif;font-size:40px;font-weight:900;overflow:visible;">
                            <text fill="#fafbfc" text-anchor="middle" x="400" y="72">Noble Division

                            </text>
                        </svg>
                    </div>
                </div>
                <!-- same slider -->
                <div style="background-color:#000000;">
                    <img data-u="image" style="opacity:0.8;" data-src="{{ asset('assets/img/divisions.png') }}" />
                    <div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1600px;height:560px;position:absolute;">
                        <svg viewbox="0 0 600 400" data-ts="preserve-3d" width="600" height="300" data-tchd="jssor_1_msk_3"
                            style="left:255px;top:0px;display:block;position:absolute;overflow:visible;">
                            <g mask="url(#jssor_1_msk_3)">
                                <path data-to="300px -180px" fill="none" stroke="rgba(250,251,252,0.5)" stroke-width="20"
                                    d="M410-350L410-10L190-10L190-350Z" x="190" y="-350" data-t="10"
                                    style="position:absolute;overflow:visible;"></path>
                            </g>
                        </svg>
                        <svg viewbox="0 0 800 72" data-to="50% 50%" width="800" height="72" data-t="11"
                            style="left:-800px;top:78px;display:block;position:absolute;font-family:'Roboto Condensed',sans-serif;font-size:50px;font-weight:900;overflow:visible;">
                            <text fill="#fafbfc" text-anchor="middle" x="400" y="72">IND-Swift
                            </text>
                        </svg>
                        <svg viewbox="0 0 800 72" data-to="50% 50%" width="800" height="72" data-t="12"
                            style="left:1600px;top:153px;display:block;position:absolute;font-family:'Roboto Condensed',sans-serif;font-size:40px;font-weight:900;overflow:visible;">
                            <text fill="#fafbfc" text-anchor="middle" x="400" y="72">Noble Division
                        </svg>
                    </div>
                </div>
                <!-- same slider -->
                <div style="background-color:#000000;">
                    <img data-u="image" style="opacity:0.8;" data-src="{{ asset('assets/img/divisions.png') }}" />
                    <div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1600px;height:560px;position:absolute;">
                        <svg viewbox="0 0 600 400" data-ts="preserve-3d" width="600" height="300" data-tchd="jssor_1_msk_3"
                            style="left:255px;top:0px;display:block;position:absolute;overflow:visible;">
                            <g mask="url(#jssor_1_msk_3)">
                                <path data-to="300px -180px" fill="none" stroke="rgba(250,251,252,0.5)" stroke-width="20"
                                    d="M410-350L410-10L190-10L190-350Z" x="190" y="-350" data-t="10"
                                    style="position:absolute;overflow:visible;"></path>
                            </g>
                        </svg>
                        <svg viewbox="0 0 800 72" data-to="50% 50%" width="800" height="72" data-t="11"
                            style="left:-800px;top:78px;display:block;position:absolute;font-family:'Roboto Condensed',sans-serif;font-size:50px;font-weight:900;overflow:visible;">
                            <text fill="#fafbfc" text-anchor="middle" x="400" y="72">IND-Swift
                            </text>
                        </svg>
                        <svg viewbox="0 0 800 72" data-to="50% 50%" width="800" height="72" data-t="12"
                            style="left:1600px;top:153px;display:block;position:absolute;font-family:'Roboto Condensed',sans-serif;font-size:40px;font-weight:900;overflow:visible;">
                            <text fill="#fafbfc" text-anchor="middle" x="400" y="72">Noble Division
                        </svg>
                    </div>
                </div>
                <!-- same slider -->
                <div style="background-color:#000000;">
                    <img data-u="image" style="opacity:0.8;" data-src="{{ asset('assets/img/divisions.png') }}" />
                    <div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1600px;height:560px;position:absolute;">
                        <svg viewbox="0 0 600 400" data-ts="preserve-3d" width="600" height="300" data-tchd="jssor_1_msk_3"
                            style="left:255px;top:0px;display:block;position:absolute;overflow:visible;">
                            <g mask="url(#jssor_1_msk_3)">
                                <path data-to="300px -180px" fill="none" stroke="rgba(250,251,252,0.5)" stroke-width="20"
                                    d="M410-350L410-10L190-10L190-350Z" x="190" y="-350" data-t="10"
                                    style="position:absolute;overflow:visible;"></path>
                            </g>
                        </svg>
                        <svg viewbox="0 0 800 72" data-to="50% 50%" width="800" height="72" data-t="11"
                            style="left:-800px;top:78px;display:block;position:absolute;font-family:'Roboto Condensed',sans-serif;font-size:50px;font-weight:900;overflow:visible;">
                            <text fill="#fafbfc" text-anchor="middle" x="400" y="72">IND-Swift
                            </text>
                        </svg>
                        <svg viewbox="0 0 800 72" data-to="50% 50%" width="800" height="72" data-t="12"
                            style="left:1600px;top:153px;display:block;position:absolute;font-family:'Roboto Condensed',sans-serif;font-size:40px;font-weight:900;overflow:visible;">
                            <text fill="#fafbfc" text-anchor="middle" x="400" y="72">Noble Division
                        </svg>
                    </div>
                </div>
                <!-- same slider -->
                <div style="background-color:#000000;">
                    <img data-u="image" style="opacity:0.8;" data-src="{{ asset('assets/img/divisions.png') }}" />
                    <div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1600px;height:560px;position:absolute;">
                        <svg viewbox="0 0 600 400" data-ts="preserve-3d" width="600" height="300" data-tchd="jssor_1_msk_3"
                            style="left:255px;top:0px;display:block;position:absolute;overflow:visible;">
                            <g mask="url(#jssor_1_msk_3)">
                                <path data-to="300px -180px" fill="none" stroke="rgba(250,251,252,0.5)" stroke-width="20"
                                    d="M410-350L410-10L190-10L190-350Z" x="190" y="-350" data-t="10"
                                    style="position:absolute;overflow:visible;"></path>
                            </g>
                        </svg>
                        <svg viewbox="0 0 800 72" data-to="50% 50%" width="800" height="72" data-t="11"
                            style="left:-800px;top:78px;display:block;position:absolute;font-family:'Roboto Condensed',sans-serif;font-size:50px;font-weight:900;overflow:visible;">
                            <text fill="#fafbfc" text-anchor="middle" x="400" y="72">IND-Swift
                            </text>
                        </svg>
                        <svg viewbox="0 0 800 72" data-to="50% 50%" width="800" height="72" data-t="12"
                            style="left:1600px;top:153px;display:block;position:absolute;font-family:'Roboto Condensed',sans-serif;font-size:40px;font-weight:900;overflow:visible;">
                            <text fill="#fafbfc" text-anchor="middle" x="400" y="72">Herbal Division
                        </svg>
                    </div>
                </div>




            </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">slider html</a>
            <!-- Bullet Navigator -->
            <!--  <div data-u="navigator" class="jssorb132" style="position:absolute;bottom:24px;right:16px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                                                                    <div data-u="prototype" class="i" style="width:12px;height:12px;">
                                                                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                                                            <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                                                                        </svg>
                                                                    </div>
                                                                </div> -->
            <!-- Arrow Navigator -->
            <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2"
                data-scale="0.75" data-scale-left="0.75">
                <!--   <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                                                        <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                                                                    </svg> -->
            </div>
            <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;"
                data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                <!-- <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                                                        <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                                                                    </svg> -->
            </div>
        </div>
        <script type="text/javascript">
            jssor_1_slider_init();

        </script>
        <!-- #endregion Jssor Slider End -->
    </div>
    <!-- About -->
    <div class="about" style="margin-top:-200px;">
        <div class="container-fluid">
            <div class="row">
                <!-- About Content -->
                <div class="col-lg-1"></div>


                <div class="col-lg-8">

                    <!--********************* start Body ********************-->





                    <!-- sansktit content -->

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-4">
                                        <p>Welcome to <span class="text-danger" style="font-size: 20px;"><q>Ind-Swift
                                                    Limited</q></span> >></p>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="button dept_button"><a href="#">Order Our Products Now</a></div>
                                    </div>
                                    <div class="col-lg-2"></div>
                                </div>
                                <br>
                                <p class="blink text-center" style="color: #FF0030 !important;"><a><q>Noble Division (A
                                            Franchisee Division)</q></a></p>
                                <p class="text-center" style="font-size: 20px;">The Noble Division being a multispecialty
                                    division, its portfolio covers all the therapeutic segments which are available in all
                                    the other divisions like respiratory inclusive of ENT, dentistry, anti-infective,
                                    cardio-diabetic and orthopaedic therapies. After being tested and certified for quality,
                                    these medicines are packed in appropriate packing material. The range of medicines
                                    produced by the Noble Division is recognized for its effectiveness, long-shelf life and
                                    exact compositions catering to the ever increasing demand. This division produces a wide
                                    range of products, amongst which the most popular and the best selling are: Zoxiclav,
                                    Glypar, Olmiswif, Telhim, Ozodom-DSR, Cefextil-O, Swiclo-Sp, Swifix-O, Swifix 200,
                                    Stemin & Stemin Forte.</p>
                                <br>
                                <p class="text-center text-danger" style="font-size: 17px;"><q>FRANCHISEE ENQUIRES ARE
                                        SOLICITED FROM ALL STATES/DISTRICTS EXCEPT RAJASTHAN AND ORISSA FOR OUR PCD
                                        DIVISION</q></p>
                            </div>
                        </div>
                    </div>

                    <!-- catalougue button -->

                    <div class="container-fluid  my-5" style="background-color: #283290;">
                        <div class="container py-3">
                            <div class="row">
                                <div class="col-lg-4"></div>
                                <div class="col-lg-4">
                                    <a href="#"><button type="button" class="btn btn-light btn-lg btn-block">Herbal Products
                                            Catalogue</button></a>
                                </div>
                                <div class="col-lg-4"></div>
                            </div>
                        </div>
                    </div>


                    <!-- herbal product image -->

                    <div class="container-fluid py-5" style="background-color: #283290;">
                        <div class="row">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-2 img-hover"><img src="{{ asset('assets/images/nb-1.png') }}" alt="...">
                            </div>
                            <div class="col-lg-2 img-hover"><img src="{{ asset('assets/images/nb-2.png') }}"
                                    class="rounded mx-auto d-block" alt="..."></div>
                            <div class="col-lg-2 img-hover"><img src="{{ asset('assets/images/nb-3.png') }}"
                                    class="rounded mx-auto d-block" alt="..."></div>
                            <div class="col-lg-2 img-hover"><img src="{{ asset('assets/images/nb-4.png') }}"
                                    class="rounded mx-auto d-block" alt="..."></div>
                            <div class="col-lg-2 img-hover"><img src="{{ asset('assets/images/nb-5.png') }}"
                                    class="rounded mx-auto d-block" alt="..."></div>

                            <div class="col-lg-1"></div>
                        </div>
                    </div>




                    <!-- ******************End of Body **************************-->




                </div>

                <!-- Boxes -->
                <div class="col-lg-2 boxes_col">
                    <!-- Box -->
                    <div class="box working_hours" style="height: 200px;">
                        <div class="box_title" style=" margin-left: -30px; margin-right: -45px; margin-top:-10px;">
                            <img src="{{ asset('assets/images/alarm-clock.svg') }}" alt=""
                                style="width:29px; height:29px;">
                            Our Timing
                        </div>
                        <div class="box_text" style=" margin-left: -30px; margin-right: -45px;">
                            <ul style="list-style: none;">
                                <li class="text-white">&raquo;&nbsp;7 Days Open </li>
                                <li class="text-white">&raquo;&nbsp;10am&nbsp;-&nbsp;7pm</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Box -->
                    <div class="box box_appointments" style="height: 250px;">
                        <div class="box_title" style=" margin-left: -30px; margin-right: -45px; margin-top:-10px;">
                            <img src="{{ asset('assets/images/phone-call.svg') }}" alt=""
                                style="width: 29px; height:29px;">
                            Our Contact
                        </div>
                        <div class="box_text" style=" margin-left: -30px; margin-right: -25px;">
                            <ul style="list-style: none;">
                                <li class="text-white">&raquo;&nbsp;+91-9216501461 </li>
                                <li class="text-white">&raquo;&nbsp;mohinderawasthi<br>@indswift.com</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Box -->
                    <div class="box box_emergency" style="height: 220px;">
                        <div class="box_title" style=" margin-left: -30px; margin-right: -45px; margin-top:-10px;">
                            <img src="{{ asset('assets/images/bell.svg') }}" alt="" style="width: 37px; height:37px;">
                            Our Address
                        </div>
                        <div class="box_emergency_text" style=" margin-left: -30px; margin-right: -20px;">&raquo;&nbsp;781,
                            Industrial Area,
                            Phase II,
                            Chandigarh, India</div>
                    </div>

                </div>

                <div class="col-lg-1"></div>

            </div>
        </div>
    </div>



@endsection
