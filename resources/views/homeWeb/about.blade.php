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
    <link rel="stylesheet" href="{{ $data->canonical }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/about.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/about_responsive.css') }}">

    <style>
        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            color: #ffff;
            background-color: #007BFF;
        }

    </style>

@endsection

@section('body-content')
    <!-- start Body -->

    <div style="padding-top: 130px;"></div>
    <div class="container-fluid"
        style="background-image: url({{ asset('assets/images/aboutus.png') }}); padding-top:115px;padding-bottom:85px;">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-10">
                <h2 class="text-white" style="">About us</h2>
            </div>
        </div>
    </div>

    <!-- About -->
    <div class="about ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12  pr-5 pl-5">
                    <div class="row">
                        <!-- About Content -->
                        <div class="col-lg-10">
                            <!--**********************nav pills***********************-->
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-link active" id="nav-about-tab" data-toggle="tab" href="#nav-about"
                                        role="tab" aria-controls="nav-about" aria-selected="true"
                                        style="font-size: 13px;">About</a>
                                    <a class="nav-link " id="nav-message-tab" data-toggle="tab" href="#nav-message"
                                        role="tab" aria-controls="nav-message" aria-selected="false"
                                        style="font-size: 13px;">Chairman's
                                        Msg</a>
                                    <a class="nav-link " id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                        role="tab" aria-controls="nav-profile" aria-selected="false"
                                        style="font-size: 13px;">Company
                                        Profile</a>
                                    <a class="nav-link " id="nav-policy-tab" data-toggle="tab" href="#nav-policy" role="tab"
                                        aria-controls="nav-policy" aria-selected="false" style="font-size: 13px;">Quality
                                        Policy</a>
                                    <a class="nav-link " id="nav-awards-tab" data-toggle="tab" href="#nav-awards" role="tab"
                                        aria-controls="nav-awards" aria-selected="false" style="font-size: 13px;">Awards &
                                        Achieved</a>
                                    <a class="nav-link " id="nav-member-tab" data-toggle="tab" href="#nav-member" role="tab"
                                        aria-controls="nav-member" aria-selected="false"
                                        style="font-size: 13px;">Membership</a>
                                    <a class="nav-link " id="nav-approvals-tab" data-toggle="tab" href="#nav-approvals"
                                        role="tab" aria-controls="nav-approvals" aria-selected="false"
                                        style="font-size: 13px;">Approvals</a>
                                    <a class="nav-link " id="nav-facility-tab" data-toggle="tab" href="#nav-facility"
                                        role="tab" aria-controls="nav-facility" aria-selected="false"
                                        style="font-size: 13px;">Manufacturing
                                        Facilities</a>
                                </div>
                            </nav>

                            <div class="tab-content" style="border-top:2px solid red;" id="nav-tabContent">
                                <div class="tab-pane fade in show active" id="nav-about" role="tabpanel"
                                    aria-labelledby="nav-about-tab">
                                    <div class="section_title mt-5">
                                        <h2>About Us</h2>
                                    </div>
                                    <br>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Swift is the fastest flying bird on earth. It is the
                                                    philosophy
                                                    behind the genesis of the name Ind-Swift Ltd. Incepted in 1986 when
                                                    three
                                                    visionaries the Mehtas, the Munjals and the Jains, all 1st generation
                                                    entrepreneurs visualized the business.It is indeed a proud moment for us
                                                    today,
                                                    starting as a small domestic company in 1986 we have transformed into a
                                                    truly
                                                    global organisation with its operations and product range in more than
                                                    50
                                                    countries.</th>
                                                <th scope="col">Even with limited resources, the vision was to develop a
                                                    Pharma
                                                    enterprise with its body spread internationally and soul rooted in
                                                    ethics. Today
                                                    with strong business acumen, apart from pharmaceutical business
                                                    Ind-swift has
                                                    also progressively forayed in diversification into multifarious fields
                                                    viz
                                                    Infrastructure, Printing, Packaging & Stationary, Education, and Media
                                                    Publication with its every unit as an independent profit earning centre.
                                                </th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>


                                <div class="tab-pane fade" id="nav-message" role="tabpanel"
                                    aria-labelledby="nav-message-tab">
                                    <div class="section_title mt-5">
                                        <h2>Chairman's Message</h2>
                                    </div>
                                    <p>Welcome to Ind-Swift. For more than two decades we are dedicated to work for
                                        humanity’s quest
                                        for longer happier and healthier lives. We have been at forefront of developing
                                        innovative
                                        therapies and processes to produce safe, effective and consistent quality products.
                                    </p>

                                    <p>Indian Pharmaceutical industry is one of the fast growing sectors of the Indian
                                        economy,
                                        contributing to around 20 Billion USD. Our group too is growing Ind-Swift has
                                        created name
                                        for itself in Pharma industry by ensuring value for money, delivering customer
                                        satisfaction
                                        globally, giving long term profitable returns to our investors, value to our
                                        partners and
                                        rewarding careers to employees.</p>

                                    <p>At Ind-Swift we have internalized sound principles of corporate governance
                                        incorporating the
                                        higher standard of professionalism, integrity, accountability and fairness. These
                                        are
                                        aligned to corporate values of transparency at all levels, social responsiveness,
                                        and high
                                        business ethics while accomplishing the business objectives. Not only
                                        pharmaceuticals but
                                        with our foresightedness , we have progressively forayed into forward & backward
                                        integration
                                        and diversification into multifarious fields viz infrastructure, printing packaging
                                        &
                                        stationery, media publication and education . As we are marching ahead ,we are
                                        committed to
                                        capitalize on the new opportunities based on our strong innovations, discoveries,
                                        technologies, research and marketing strategies.</p>

                                    <p>At Ind-Swift we will continue to push forward, to break new boundaries and to seize
                                        emerging
                                        opportunities inresearch, design and implementation for the welfare of humanity.
                                        <span style="color:#DA241C;font-size: 20px;font-weight: bold;"></colgroup>
                                            <q>Mr.S.R.Mehta</q></span>
                                    </p>
                                </div>


                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <div class="section_title mt-5">
                                        <h2>Company Profile</h2>
                                    </div>
                                    <p>IND-SWIFT is Chandigarh based pharmaceutical company, established in 1986 with a
                                        mission of
                                        winning global customers through innovative pharmaceutical products. Three
                                        visionaries
                                        Jains, Mehtas and Munjals, dedicated themselves to work for humanity’s quest for
                                        longer,
                                        happier and healthier lives.</p>


                                    <p>Ind-swift is a research driven forward looking pharmaceutical company with world
                                        class
                                        expertise in finished goods dosage and active pharmaceutical ingredients (API’s)and
                                        herbal
                                        products Ind-swift is ISO 9001-2008, WHO GMP certified and is listed on Bombay Stock
                                        Exchange and National Stock Exchange. Ind-swift has been ranked 35th among top
                                        Indian
                                        Pharmaceutical companies. At Ind-swift we ensure value for money and customer
                                        satisfaction
                                        globally , in doing so we have delivered long term profitable returns to our
                                        investors,
                                        value to our partners and rewarding careers to our employees. Ind-swift is proud to
                                        be the
                                        second largest drug manufacturers of North India. Our multipurpose; multiplication
                                        manufacturing set-ups are spread across the lush-green plains of northern India. The
                                        facilities are built according to current guidelines of MHRA, EU, WHO, and
                                        accreditations
                                        with ISO 14000.</p>


                                    <p>The company has dedicated research and development department well equipped with the
                                        latest
                                        equipments and supported by a large pool, of scientists who continuously work
                                        towards new
                                        pharma products.</p>


                                    <p>he company possess portfolio of 750 products with presence in high growth therapeutic
                                        segments of Cardiology, Diabetology, Anti depressant, anti-allergic, Anti-
                                        infective,
                                        Neurology & Oncology with a nationwide distribution network. Apart from being among
                                        top
                                        Indian pharma companies, Ind-swift has also progressively embarked in
                                        diversification into
                                        multifarious fields viz infrastructure, printing packaging and stationery,
                                        education, and
                                        media publication with its every unit as an independent profit earning centre.</p>

                                    <p>Life is the most precious thing on earth, to serve the same, we at Ind-swift are
                                        committed to
                                        give our unflinching efforts, support and dedication for the service of humanity by
                                        developing innovative, therapies and process to produce safe effective and
                                        consistent
                                        quality pharmaceutical products delivering across the globe hence making healthier
                                        and
                                        happier world <span style="color: #DA241C;">"Because Life is precious"</span>.</p>
                                </div>

                                <div class="tab-pane fade" id="nav-policy" role="tabpanel" aria-labelledby="nav-policy-tab">
                                    <div class="section_title mt-5">
                                        <h2>Quality Policy</h2>
                                    </div>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">
                                                    <p>&raquo;&nbsp;<q>We at IND-SWIFT deliver customer satisfaction by
                                                            providing
                                                            quality products for the health of mankind</q></p>
                                                </th>
                                                <th scope="col">
                                                    <p>&raquo;&nbsp;<q>We ensure value for money by developing innovative
                                                            therapies
                                                            and processes to produce safe, effective and consistent quality
                                                            products</q></p>
                                                </th>
                                                <th scope="col">
                                                    <p>&raquo;&nbsp;<q>We endeavour for continual improvement in our
                                                            management
                                                            system to create an environment of the mutual respect,
                                                            transparency and
                                                            teamwork</q></p>
                                                </th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>

                                <div class="tab-pane fade" id="nav-awards" role="tabpanel" aria-labelledby="nav-awards-tab">
                                    <div class="section_title mt-5">
                                        <h2>Awards & Achievements</h2>
                                    </div>
                                    <p>&raquo;&nbsp;<q>MOST PROMISING ENTRANT INTO THE BIG LEAGUE, AWARD at 5th Annual
                                            Pharmaceutical Leadership Summit & Business Leadership Award 2012 held in Mumbai
                                            on 21
                                            September 2012</q></p>
                                    <p>&raquo;&nbsp;<q>ISO 9001-2008 by BSI (British Standards Institution)</q></p>
                                    <p>&raquo;&nbsp;<q>R&D Centre approved & recognized by DSIR and is also USFDA
                                            Registered</q></p>
                                    <p>&raquo;&nbsp;<q>IDMA Quality Excellence Certified</q></p>
                                    <p>&raquo;&nbsp;<q>Winner of Pharma Pulse Awards for 3 consecutive year 2002-2005</q>
                                    </p>
                                    <p>&raquo;&nbsp;<q>Punjab Rattan Award</q></p>
                                    <p>&raquo;&nbsp;<q>Ludhiana Management Association Award</q></p>
                                    <p>&raquo;&nbsp;<q>Bharat Udyog Rattan Award</q></p>
                                    <p>&raquo;&nbsp;<q>Ranked 2nd in the Pharma Generics Business</q></p>
                                    <p>&raquo;&nbsp;<q>Ranked No 35 among top Indian Pharmaceuticals companies</q></p>
                                    <p class="text-danger" style="font-size: 15px;font-weight: bold;"><q>Ind-Swift Limited
                                            is
                                            Awarded as the most promising Pharmaceutical Company at 8th Healthcare Forum
                                            held at
                                            Chandigarh on 27th April 2018.</q></p>
                                    <br>
                                    <img src="{{ asset('assets/images/certificate.png') }}"><img
                                        src="{{ asset('assets/images/award.jpg') }}"><img
                                        src="{{ asset('assets/images/award1.jpg') }}">
                                </div>

                                <div class="tab-pane fade" id="nav-member" role="tabpanel" aria-labelledby="nav-member-tab">
                                    <div class="section_title mt-5">
                                        <h2>Membership</h2>
                                    </div>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">
                                                    <p>&raquo;&nbsp;<q>IAOC(Industries Association of Chandigarh)</q></p>
                                                    <p>&raquo;&nbsp;<q>BBNA (Baddi Barotiwala Nalagarh Association)</q></p>
                                                    <p>&raquo;&nbsp;<q>ASSOCHAM (Association Chambers of Commerce &
                                                            Industry)</q>
                                                    </p>
                                                    <p>&raquo;&nbsp;<q>FIEO (Federation of Indian Export Organisations )</q>
                                                    </p>
                                                    <p>&raquo;&nbsp;<q>PHARMEXCIL (Pharmaceutical Export Promotion
                                                            Council)</q></p>
                                                </th>
                                                <th scope="col">
                                                    <p>&raquo;&nbsp;<q>Indo-German Chamber of Commerce</q></p>
                                                    <p>&raquo;&nbsp;<q>PHDCCI (PHD Chamber of Commerce & Industry)</q></p>
                                                    <p>&raquo;&nbsp;<q>CII (Confederation of Indian Industry)</q></p>
                                                    <p>&raquo;&nbsp;<q>FICCI (Federation of Indian Chamber of Commerce &
                                                            Industry)</q></p>
                                                    <p>&raquo;&nbsp;<q>IDMA (Indian Drug Manufacturers Association)</q></p>
                                                </th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>

                                <div class="tab-pane fade" id="nav-approvals" role="tabpanel"
                                    aria-labelledby="nav-approvals-tab">
                                    <div class="section_title mt-5">
                                        <h2>Approvals</h2>
                                    </div>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">
                                                    <p>&raquo;&nbsp;<q>TGA- Australia</q></p>
                                                    <p>&raquo;&nbsp;<q>USFDA</q></p>
                                                    <p>&raquo;&nbsp;<q>WHO-GMP</q></p>
                                                    <p>&raquo;&nbsp;<q>MHRA UK</q></p>
                                                    <p>&raquo;&nbsp;<q>NDA- UGANDA</q></p>
                                                </th>
                                                <th scope="col">
                                                    <p>&raquo;&nbsp;<q>TFDA –TANZANIA</q></p>
                                                    <p>&raquo;&nbsp;<q>UAEC Registration</q></p>
                                                    <p>&raquo;&nbsp;<q>DACA –ETHIOPIA</q></p>
                                                    <p>&raquo;&nbsp;<q>YEMEN – GMP</q></p>
                                                    <p>&raquo;&nbsp;<q>IVORY COAST-GMP</q></p>
                                                </th>
                                            </tr>
                                        </thead>
                                    </table>

                                </div>

                                <div class="tab-pane fade " id="nav-facility" role="tabpanel"
                                    aria-labelledby="nav-facility-tab">
                                    <div class="section_title mt-5">
                                        <h2>Facilities</h2>
                                    </div>
                                    <p>A unique and unmatched excellence in pharmaceuticals manufacturing with highest
                                        reliance of
                                        product quality attributes is our corporate strength . Ind-Swift's multipurpose,
                                        multilocation manufacturing set-ups are acrossspread across the lush-green plains of
                                        northern Indian states viz Himachal Pradesh, Haryana and Jammu and Kashmir. The
                                        locations
                                        are environmental pollution free and together offer approx.12 lacs sq. ft of newly
                                        constructed plants with state of the art facilities for pharma manufacturing.</p>

                                    <p>The facilities are built according to current guidelines of USFDA, MHRA, EU, and WHO,
                                        and
                                        accreditations with ISO 14000 series standard.</p>

                                    <p>A strong and ever vigilant Quality Assurance System forms the backbone of our
                                        continuing
                                        compliance to stringent regulatory guidelines, backed by latest equipments and
                                        instrumentation system. We achieve constant compliance to product quality.attributes
                                        with an
                                        enviable cost of efficiency. It is always our strong endeavor to continuously invest
                                        in
                                        newer products, process technologies and look out for new horizons in pharmaceutical
                                        business to establish our well earned leadership.</p>
                                    <br>
                                    <h6>EQUIPMENTS</h6>
                                    <p>All of the above facilities house the latest, automated equipments, operating with
                                        pre-programmed logic controllers and a highly qualified and trained staff to produce
                                        products conforming to defined quality attribute .
                                        Some of the examples of these equipments are&nbsp;:</p>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">
                                                    <p>&raquo;&nbsp;Fully automatic and integrated lines for filling of
                                                        Ampoules and
                                                        vials</p>
                                                    <p>&raquo;&nbsp;Dehydrogenating and Sterilizing tunnel.</p>
                                                    <p>&raquo;&nbsp;Bottles (Glass/ PET) washing, filling and sealing
                                                        machines</p>
                                                    <p>&raquo;&nbsp;Herbal and Neutraceuticals</p>
                                                    <p>&raquo;&nbsp;High speed tablet compression machine</p>
                                                </th>
                                                <th scope="col">
                                                    <p>&raquo;&nbsp;Tablet Auto coaters</p>
                                                    <p>&raquo;&nbsp;Heavy duty granulation, blenders</p>
                                                    <p>&raquo;&nbsp;Capsule Filling Inspection and Polishing machines</p>
                                                    <p>&raquo;&nbsp;Blister packaging machine (PVC and ALU-ALU)</p>
                                                    <p>&raquo;&nbsp;Product processing under Isolators (for Oncologicals)
                                                    </p>
                                                </th>
                                            </tr>
                                        </thead>
                                    </table>
                                    <p style="font-size: 12px;">All the operations are complementary by a highly efficient
                                        classified Air Handling System with pressure gradients and an continuously operating
                                        water
                                        generating, storage and distribution system to supply high
                                        purity water.</p>
                                    <p style="font-size: 12px;font-weight: bold;">The Manufacturing facilities are
                                        strategically
                                        grouped so as to offer dedicated environment for the manufacturing of&nbsp;:</p>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">
                                                    <p>&raquo;&nbsp;General category formulations</p>
                                                    <p>&raquo;&nbsp;Beta lactum</p>
                                                    <p>&raquo;&nbsp;Steroids and hormones</p>
                                                </th>
                                                <th scope="col">
                                                    <p>&raquo;&nbsp;Cephalosporins</p>
                                                    <p>&raquo;&nbsp;Oncologicals</p>
                                                    <p>&raquo;&nbsp;Soft Gelatin capsules</p>
                                                </th>
                                            </tr>
                                        </thead>
                                    </table>
                                    <p style="font-size: 12px;font-weight: bold;">These facilities together produce a
                                        diverse range
                                        of dosage forms like
                                        &nbsp;:</p>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">
                                                    <p>&raquo;&nbsp;Oral solutions and suspensions</p>
                                                    <p>&raquo;&nbsp;Dry syrups (General, beta lactum and Cephalosporins)</p>
                                                    <p>&raquo;&nbsp;Tablets with all different technologies</p>
                                                    <p>&raquo;&nbsp;Hard Gelatin Capsules</p>
                                                </th>

                                                <th scope="col">
                                                    <p>&raquo;&nbsp;Soft Gelatin Capsules</p>
                                                    <p>&raquo;&nbsp;Liquid and Dry powder injectables</p>
                                                    <p>&raquo;&nbsp;Dermatological</p>
                                                    <p>&raquo;&nbsp;Eye/ Ear drops</p>
                                                </th>
                                            </tr>
                                        </thead>
                                    </table>
                                    <br>
                                    <h6>CAPACITY</h6>
                                    <p><span style="font-size: 12px;font-weight: bold;">Ind-Swift Ltd</span> is proud to
                                        have an
                                        enviable manufacturing capacity to process above range of products</p>
                                    <p>The current annualized capacity is
                                        &nbsp;:</p>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">
                                                    <p>&raquo;&nbsp;2300 million Tablets</p>
                                                    <p>&raquo;&nbsp;64 million Ampoules</p>
                                                    <p>&raquo;&nbsp;27 million Vialss</p>
                                                    <p>&raquo;&nbsp;84 million Capsules</p>
                                                </th>

                                                <th scope="col">
                                                    <p>&raquo;&nbsp;Soft Gelatin Capsules</p>
                                                    <p>&raquo;&nbsp;18 million Dermatological products</p>
                                                    <p>&raquo;&nbsp;62 million Oral liquid bottles</p>
                                                    <p>&raquo;&nbsp;Soft Gelatin Capsules</p>
                                                </th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>


                            </div>


                            <!--**********************nav pills ends here***********************-->

                        </div>
                        <!-- Boxes -->
                        <div class="col-lg-2 boxes_col">
                            <!-- Box -->
                            <div class="box working_hours" style="height: 200px;">
                                <div class="box_title" style=" margin-left: -30px; margin-right: -45px; margin-top:-10px;">
                                    <img src="{{ asset('assets/images/alarm-clock.svg') }}" alt=""
                                        style="width:29px; height:29px;">
                                    Our Profile
                                </div>
                                <div class="box_text" style=" margin-left: -30px; margin-right: -45px;">IND-SWIFT Chandigarh
                                    based
                                    drug company, established in 1986...</div>
                            </div>

                            <!-- Box -->
                            <div class="box box_appointments" style="height: 250px;">
                                <div class="box_title" style=" margin-left: -30px; margin-right: -45px; margin-top:-10px;">
                                    <img src="{{ asset('assets/images/phone-call.svg') }}" alt=""
                                        style="width: 29px; height:29px;">
                                    Leadership
                                </div>
                                <div class="box_text" style=" margin-left: -30px; margin-right: -25px;">The facilities are
                                    built
                                    according to the current guidelines of MHRA, EU, WHO
                                    and accreditations with ISO 14000 series...</div>
                            </div>

                            <!-- Box -->
                            <div class="box box_emergency" style="height: 220px;">
                                <div class="box_title" style=" margin-left: -30px; margin-right: -45px; margin-top:-10px;">
                                    <img src="{{ asset('assets/images/bell.svg') }}" alt=""
                                        style="width: 37px; height:37px;">
                                    <span style="">Mission</span>
                                </div>
                                <div class="box_emergency_text" style=" margin-left: -30px; margin-right: -20px;">IND-SWIFT
                                    has
                                    spread its network across 45 countries. It is an ISO
                                    9001-2008, WHO GMP certified company...</div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
