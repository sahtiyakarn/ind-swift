<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="@yield('description')">
    <meta name="keyword" content="@yield('keyword')">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/bootstrap4/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/about.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/about_responsive.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        @media (max-width:1366px) {
            .myscreen {
                margin-left: 320px !important;
            }
        }

        @media (min-width:1500px) {
            .myscreen {
                margin-left: 440px !important;
            }
        }


        .sidebar-form {
            position: fixed;
            top: 50%;
            right: -350px;
            width: 350px;
            box-shadow: 0 0 5px rgba(0, 0, 0, .3);
            border-radius: 8px 0 0 8px;
            background-color: white;
            padding: 20px;
            transform: translatey(-50%);
            transition: right .4s linear;
            z-index: 1000;

        }

        .sidebar-form.show {
            right: 0;
        }

        .sidebar-form .call-action {
            position: absolute;
            background-color: #f83737;
            /* font-family: 'Courier New', Courier, monospace; */
            border-top-right-radius: 1.5625rem;
            border-bottom-left-radius: 1.5625rem;
            font-weight: 400;
            letter-spacing: 1px;
            color: white;
            width: 150px;
            height: 40px;
            text-align: center;
            line-height: 40px;
            cursor: pointer;
            left: -95px;
            top: 50%;
            transform: translateY(-50%) rotate(-90deg);
        }

    </style>
    @yield('customcss')
    @yield('customjs')
</head>

<body>

    <div class="super_container">
        {{-- side enquiry --}}

        <div class="sidebar-form">
            <div class="call-action">
                <span>ENQUIRY</span>
            </div>
            <h3 class="text-center text-dark">Enquiry Form</h3>
            <form action="enquiryadd" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" id="" class="form-control" placeholder="Enter your Name">
                </div>
                <div class="form-group">
                    <input type="text" name="email" id="" class="form-control" placeholder="Enter Email Id">
                </div>
                <div class="form-group">
                    <input type="text" name="phone" id="" class="form-control" placeholder="Enter Phone no">
                </div>
                <div class="form-group">
                    @php
                        $list = ['Delhi' => 'Delhi', 'Chandigarh' => 'Chandigarh', 'UP' => 'UP', 'Bihar' => 'Bihar', 'Punjab' => 'Punjab'];
                    @endphp
                    {!! Form::select('place', $list, '', ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="info" id="" rows="3" placeholder="write "></textarea>
                </div>
                <input type="submit" value="send enquiry" id="submit-btn" class="btn btn-danger" style="border-top-right-radius: 1.5625rem;
                border-bottom-left-radius: 1.5625rem;">

            </form>
        </div>
        {{-- end enquiry --}}
        <!-- Header -->
        <header class="header trans_200">
            <!-- Top Bar -->
            <div class="top_bar">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
                                <div class="top_bar_item"><a href="/network">Networks</a></div>
                                <div class="top_bar_item"><a
                                        href="https://www1.nseindia.com/live_market/dynaContent/live_watch/get_quote/GetQuote.jsp?symbol=INDSWFTLTD">NSE</a>&nbsp;<span
                                        class="text-white">/</span>&nbsp;<a
                                        href="https://www.bseindia.com/stock-share-price/ind-swift-ltd/indswift/524652/">BSE</a>
                                </div>

                                <div class="top_bar_item"><a href="#">Blog</a></div>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        style="color: white;margin-bottom: 20px;">
                                        Download
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown"
                                        style="margin-top: -20px;">
                                        <a class="dropdown-item" href="#">Corporate Brochure</a>
                                        <a class="dropdown-item" href="#">ISL Empire 2014</a>
                                    </div>
                                </li>
                                <div
                                    class="emergencies  d-flex flex-row align-items-center justify-content-start ml-auto">
                                    Call Us @ 0172 - 4680800 | info@indswift.com</div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <!-- Header menu -->
            <div class="header_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header_content d-flex flex-row align-items-center justify-content-start">

                                <nav class="main_nav ml-auto">
                                    <ul>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link myh" href="/about"> About us</a>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link myh" href="/marketing">Marketing </a>
                                        </li>


                                        <li class="nav-item dropdown">
                                            <a class="nav-link myh" href="/randd">R&D</a>
                                        </li>


                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle myh" href="#" id="navbarDropdown"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                Division
                                            </a>
                                            <div class="dropdown-menu myh" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="/herbalplusd">Harba Plus Divisions</a>
                                                <a class="dropdown-item" href="/nobledivision">Noble Division</a>
                                                <a class="dropdown-item" href="/novadivision">Nova Division</a>
                                                <a class="dropdown-item" href="/ethicaldivision">Ethical Division</a>
                                                <a class="dropdown-item" href="/genericdivision">Generic Division</a>
                                                <a class="dropdown-item" href="/institutiondivision">Institution
                                                    Division</a>
                                                <a class="dropdown-item" href="/proposeddivisions">Proposed
                                                    Divisions</a>
                                            </div>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link myh" href="/whyus"> Why us </a>
                                        </li>


                                        <li>
                                            <a class="nav-link dropdown-toggle myh" href="#" id="investor Dropdown"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">Investor</a>

                                            <!-- your mega menu starts here! -->
                                            <div class="dropdown-menu dropdown-menu-right myscreen"
                                                aria-labelledby="investorDropdown" style="margin-left:403px;">

                                                <!-- finally, using flex to create your layout -->
                                                <div class="d-md-flex align-items-start justify-content-start myh">
                                                    <div>
                                                        <div class="dropdown-header">Financials</div>
                                                        <a class="dropdown-item"
                                                            href="/related_party_transaction">&raquo;&nbsp;Related Party
                                                            Transaction</a>
                                                        <a class="dropdown-item "
                                                            href="/quaterly_results">&raquo;&nbsp;Quaterly
                                                            Results</a>
                                                        <a class="dropdown-item"
                                                            href="/annual_reports">&raquo;&nbsp;Annual Report</a>
                                                        <a class="dropdown-item"
                                                            href="/unclaimeddividends">&raquo;&nbsp;Unclaimed
                                                            Dividends</a>
                                                        <a class="dropdown-item"
                                                            href="/unclaimed_deposit">&raquo;&nbsp;Unclaimed
                                                            Deposits</a>
                                                        <a class="dropdown-item"
                                                            href="/share_holding_patterns">&raquo;&nbsp;Share Holding
                                                            Patterns</a>
                                                        <a class="dropdown-item"
                                                            href="/voting_results">&raquo;&nbsp;Voting Result</a>
                                                        <a class="dropdown-item"
                                                            href="/insider_trading_code">&raquo;&nbsp;Insider Trading
                                                            Code</a>
                                                        <a class="dropdown-item"
                                                            href="/credit_rating">&raquo;&nbsp;Credit Rating</a>
                                                    </div>
                                                    <div>
                                                        <div class="dropdown-header">Company Announcements</div>
                                                        <a class="dropdown-item"
                                                            href="/boardofdirector">&raquo;&nbsp;Board
                                                            of Director</a>
                                                        <a class="dropdown-item"
                                                            href="board_meetings">&raquo;&nbsp;Board
                                                            Meetings</a>
                                                        <a class="dropdown-item" href="/agm">&raquo;&nbsp;AGM Notice</a>
                                                        <a class="dropdown-item" href="/egm">&raquo;&nbsp;EGM Notice</a>
                                                        <a class="dropdown-item"
                                                            href="/general_meeting_transcripts">&raquo;&nbsp;General
                                                            Meetings
                                                            Transcripts</a>
                                                        <a class="dropdown-item"
                                                            href="/transfer_of_share_to_iepf">&raquo;&nbsp;Transfer of
                                                            Shares to IEPF</a>
                                                    </div>

                                                    <div>
                                                        <div class="dropdown-header">Detailed NCLT Petitions</div>
                                                        <a class="dropdown-item"
                                                            href="/isl_nclt_petitions">&raquo;&nbsp;ISL-NCLT
                                                            Petitions</a>
                                                        <a class="dropdown-item"
                                                            href="/annexure_1st_to_12th_of_petitions">&raquo;&nbsp;Annexure
                                                            1st to
                                                            12th of Petitions </a>
                                                        <a class="dropdown-item"
                                                            href="/annexure_13th_list_of_depositors">&raquo;&nbsp;Annexure
                                                            13th
                                                            List of Depositors </a>
                                                        <a class="dropdown-item"
                                                            href="/list_of_fd_holder">&raquo;&nbsp;List of FD Holder
                                                        </a>
                                                        <a class="dropdown-item"
                                                            href="/annexure_14th_to_16th_of_petitions">&raquo;&nbsp;Annexure
                                                            14th to
                                                            16th of Petitions </a>
                                                        <a class="dropdown-item"
                                                            href="/advertisments">&raquo;&nbsp;Advertisments
                                                        </a>

                                                    </div>
                                                    <div>
                                                        <div class="dropdown-header">Corporate Governance</div>
                                                        <a class="dropdown-item"
                                                            href="/policies_on_meteriatity_of_events">&raquo;&nbsp;Policies
                                                            on
                                                            Meteriatity of Events</a>
                                                        <a class="dropdown-item"
                                                            href="/policies_on_preservations_of_documents">&raquo;&nbsp;Policies
                                                            on
                                                            Preservation of Documents</a>
                                                        <a class="dropdown-item"
                                                            href="/code_of_fair_disclosure">&raquo;&nbsp;Code Of
                                                            Fair Disclosure</a>
                                                        <a class="dropdown-item"
                                                            href="/t_and_c_of_appointment">&raquo;&nbsp;T & C of
                                                            Appointment</a>
                                                        <a class="dropdown-item"
                                                            href="/party_transcation_policies">&raquo;&nbsp;Party
                                                            Transction
                                                            Policies</a>
                                                        <a class="dropdown-item"
                                                            href="/risk_management_policies">&raquo;&nbsp;Risk
                                                            Management
                                                            Policies</a>
                                                        <a class="dropdown-item"
                                                            href="/metrails_subsidiary">&raquo;&nbsp;Metrails
                                                            subsidiary</a>
                                                        <a class="dropdown-item"
                                                            href="/familiarization_programme">&raquo;&nbsp;Familiarization
                                                            Programme</a>
                                                        <a class="dropdown-item"
                                                            href="/whistle_blower_policies">&raquo;&nbsp;Whistle Blower
                                                            Policies</a>
                                                        <a class="dropdown-item"
                                                            href="/compostion_of_committees">&raquo;&nbsp;Compostion of
                                                            Committees </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- mega-menu ends here -->
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link myh" href="/career"> Career </a>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link myh" href="/media"> Media </a>
                                        </li>


                                        <li class="nav-item dropdown">
                                            <a class="nav-link myh" href="/csr"> CSR </a>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link myh" href="/contact"> Contact </a>
                                        </li>

                                    </ul>
                                </nav>
                                <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Logo -->
            <div class="logo_container_outer">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="logo_container" data-aos="slide-down">
                                <a href="/">
                                    <div
                                        class="logo_content d-flex flex-column align-items-start justify-content-center">
                                        <div class="logo_line"></div>
                                        <img src="{{ asset('assets/images/logo6.png') }}" class="img-fluid"
                                            alt="Responsive image" style="padding-top: 10px;padding-right: 15px;">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>

        <!-- Menu -->

        <div class="menu_container menu_mm">

            <!-- Menu Close Button -->
            <div class="menu_close_container">
                <div class="menu_close"></div>
            </div>

            <!-- Mobile Menu Items -->
            <div class="menu_inner menu_mm">
                <div class="menu menu_mm">
                    <ul class="menu_list menu_mm">
                        <!-- <li class="menu_item menu_mm"><a href="index.html">Home</a></li> -->
                        <li class="drop-down"><a href="/">Home</a></li>
                        <li><a href="/about">About us</a></li>
                        <li><a href="">Marketing</a></li>
                        <li><a href="">R&D</a></li>
                        <li><a href="">Division</a></li>
                        <li><a href="">Why Us</a></li>
                        <li><a href="">Investors</a></li>
                        <li><a href="">Career</a></li>
                        <li><a href="">Media</a></li>
                        <li><a href="">CSR</a></li>
                        <li><a href="">Contact</a></li>
                    </ul>
                </div>
                <div class="menu_extra">
                    <div class="menu_networks"><a href="#">Networks</a></div>
                    <div class="menu_nse"><a href="#">NSE</a></div>
                    <div class="menu_bse"><a href="#">BSE</a></div>
                    <div class="menu_blog"><a href="#">Blog</a></div>
                    <div class="menu_emergencies">Call Us @ 0172 - 4680800 | info@indswift.com</div>
                </div>

            </div>

        </div>

        <!-- end of menu  -->
        <!-- start Body -->
        <div class="body-content">
            @yield('body-content')
        </div>
        <!-- end of body -->
        <!-- Footer -->
        <footer class="footer">
            <div class="footer_container">
                <div class="container">
                    <div class="row">

                        <!-- Footer - About -->
                        <div class="col-lg-4 footer_col">
                            <div class="footer_about">
                                <div class="footer_logo_container">
                                    <a href="#" class="d-flex flex-column align-items-center justify-content-center">
                                        <img src="{{ asset('assets/images/logo6.png') }}"> </a>
                                </div>
                                <div class="footer_about_text">
                                    <p>Established in 1986 by the Jains, Mehtas and Munjals, Ind-Swift is a leading
                                        pharmaceutical manufacturing and marketing company in India.</p>
                                </div>
                                <ul class="footer_about_list">
                                    <li>
                                        <div class="footer_about_icon"><img
                                                src="{{ asset('assets/images/phone-call.svg') }}" alt=""></div>
                                        <span>+0172 - 4680800</span>
                                    </li>
                                    <li>
                                        <div class="footer_about_icon"><img
                                                src="{{ asset('assets/images/envelope.svg') }}" alt=""></div>
                                        <span>info@indswift.com</span>
                                    </li>
                                    <li>
                                        <div class="footer_about_icon">
                                            <a href="/contact">
                                                <img src="{{ asset('assets/images/placeholder.svg') }}" alt="">
                                        </div>
                                        <span>Industrial Area Phase-II Chandigarh-160 002</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Footer - Links -->
                        <div class="col-lg-4 footer_col">
                            <div class="footer_links footer_column">
                                <div class="footer_title">Useful Links</div>
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="'/about">About</a></li>
                                    <li><a href="/contact">Contact Us</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">FAQ</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Footer - News -->
                        <div class="col-lg-4 footer_col">
                            <div class="footer_news footer_column">
                                <div class="footer_title">Other Links</div>
                                <ul>
                                    <li>
                                        <div class="footer_news_title"><a href="">Networks Links</a></div>
                                        <div class="footer_news_date">May 10, 2015</div>
                                    </li>
                                    <li>
                                        <div class="footer_news_title"><a
                                                href="https://www1.nseindia.com/live_market/dynaContent/live_watch/get_quote/GetQuote.jsp?symbol=INDSWFTLTD">NSE
                                                Links</a></div>
                                        <div class="footer_news_date">Feb 10, 2018</div>
                                    </li>
                                    <li>
                                        <div class="footer_news_title"><a
                                                href="https://www.bseindia.com/stock-share-price/ind-swift-ltd/indswift/524652/">BSE
                                                Links</a></div>
                                        <div class="footer_news_date">Jan 10, 2016</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div
                                class="copyright_content d-flex flex-lg-row flex-column align-items-lg-center justify-content-start">
                                <div class="cr">
                                    Copyright &copy;<script>
                                        document.write(new Date().getFullYear());

                                    </script> All rights reserved | Designed & Devloped by <i class="fa fa-heart-o"
                                        aria-hidden="true"></i> by <a href="https://confianzamedia.com/" target="_blank"
                                        class="text-danger">Confianzamedia.com</a>
                                </div>
                                <div class="footer_social ml-lg-auto">
                                    <ul>

                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/styles/bootstrap4/popper.js') }}"></script>
    <script src="{{ asset('assets/styles/bootstrap4/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/plugins/easing/easing.js') }}"></script>
    <script src="{{ asset('assets/plugins/parallax-js-master/parallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    @yield('customjs')
    @yield('customjq')

    <script>
        $(document).ready(function() {
            $(".sidebar-form .call-action").click(function() {
                $(this).parents(".sidebar-form").toggleClass("show")
            })
        })

    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 120,
            duration: 1000,
        });

    </script>

</body>

</html>
