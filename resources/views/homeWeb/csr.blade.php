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
        style="background-image: url({{ asset('assets/images/csr.png') }}); padding-top:115px;padding-bottom:85px;">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-10">
                <h2 class="text-white" style="">Corporate Social Responsibility</h2>
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
                                        style="font-size: 13px;">csr</a>
                                    <a class="nav-link " id="nav-message-tab" data-toggle="tab" href="#nav-message"
                                        role="tab" aria-controls="nav-message" aria-selected="false"
                                        style="font-size: 13px;">Our Vision</a>
                                    <a class="nav-link " id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                        role="tab" aria-controls="nav-profile" aria-selected="false"
                                        style="font-size: 13px;">Our employees are
                                        our Assets</a>
                                    <a class="nav-link " id="nav-policy-tab" data-toggle="tab" href="#nav-policy" role="tab"
                                        aria-controls="nav-policy" aria-selected="false"
                                        style="font-size: 13px;">Environment
                                        Protection</a>
                                    <a class="nav-link " id="nav-awards-tab" data-toggle="tab" href="#nav-awards" role="tab"
                                        aria-controls="nav-awards" aria-selected="false"
                                        style="font-size: 13px;">Education</a>
                                    <a class="nav-link " id="nav-member-tab" data-toggle="tab" href="#nav-member" role="tab"
                                        aria-controls="nav-member" aria-selected="false"
                                        style="font-size: 13px;">Healthcare</a>
                                    <a class="nav-link " id="nav-approvals-tab" data-toggle="tab" href="#nav-approvals"
                                        role="tab" aria-controls="nav-approvals" aria-selected="false"
                                        style="font-size: 13px;">Partnerships</a>
                                    <a class="nav-link " id="nav-facility-tab" data-toggle="tab" href="#nav-facility"
                                        role="tab" aria-controls="nav-facility" aria-selected="false"
                                        style="font-size: 13px;">Local
                                        Communities</a>
                                </div>
                            </nav>

                            <div class="tab-content" style="border-top:2px solid red;" id="nav-tabContent">

                                <div class="tab-pane fade in show active" id="nav-about" role="tabpanel"
                                    aria-labelledby="nav-about-tab">
                                    <div class="section_title mt-5">
                                        <h2>Corporate Social Responsibility</h2>
                                    </div>
                                    <br>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <td class="text-justify">At Ind-Swift we are fully conscious about our
                                                    responsibility towards society. We
                                                    are not just limited to business, but we strongly believe in giving back
                                                    to
                                                    society what we have got from it. We at Ind-Swift make honest efforts to
                                                    help
                                                    section of society which struggle for basic amenities. Our continuous
                                                    efforts
                                                    are towards making a healthier happier world through our various
                                                    programs and
                                                    activities. Ind-Swift carries out all its activities through the
                                                    Ind-Swift
                                                    charitable trust and Swift Fundamental Research & Education Society
                                                    (SFRES). We
                                                    believe every life on this planet is precious so we take utmost care in
                                                    our
                                                    business processes, by following ethical practices.</td>
                                                <td class="text-justify">
                                                    <h4>Ind-Swift Participated in Multi Specialty Medical Camp </h4>
                                                    With its commitment to provide better health facilities for people and
                                                    an
                                                    obligation to work in the welfare of society and the communities in
                                                    which we
                                                    operate, Ind-Swift - a prominent name in the Pharmaceutical industry
                                                    participated in Multi Specialty Medical Camp organized by the Rotary
                                                    Club,
                                                    Panchkula in collaboration with Barwala Industries Association at
                                                    Barwala under
                                                    the able guidance of the Dr. G Munjal MD & CEO , Ind-Swift . Ind-Swift
                                                    Group an
                                                    active member of Barwala Industries Association provided free medicines
                                                    to the
                                                    patients.
                                                </td>
                                                <td class="text-justify">A team of highly qualified doctors specialized in
                                                    Surgery,
                                                    Gynea, Ortho, Medical
                                                    Specialty, Eyes, Cardiologist and Dentistry examined the patients.
                                                    During the
                                                    free medical checkup camp Ind-Swift made available its top brands such
                                                    as
                                                    Aclofen, Agiflam, Cordimil, Azomax , Truclar , Indcef, Telhim , Angitol,
                                                    Fexidine, Fencol, Cetin, Nelsid, Reeveta , Calswift , Neurobexl,
                                                    Ferritop, Neo
                                                    Swiflox, steaming , Q Sir , Toss K and Acsolve to the patients free of
                                                    cost .
                                                    The residents of the Panchkula highly appreciated the effort of the
                                                    Ind-Swift.
                                                    As said “Chairity begins at home” we at Ind-Swift always believe that
                                                    being a
                                                    responsible member of the society it’s our moral duty to work in the
                                                    development
                                                    of society and bring difference in the lives of people and it was just
                                                    an
                                                    another attempt of Ind-Swift to come up to the expectation of people and
                                                    bring
                                                    smiles on their faces.</td>
                                            </tr>

                                        </thead>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="nav-message" role="tabpanel"
                                    aria-labelledby="nav-message-tab">
                                    <div class="section_title mt-5">
                                        <h2>Our Vision</h2>
                                    </div>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <td class="text-justify">At Ind-Swift we are fully conscious about our
                                                    responsibility towards society. We
                                                    are not just limited to business, but we strongly believe in giving back
                                                    to
                                                    society what we have got from it. We at Ind-Swift make honest efforts to
                                                    help
                                                    section of society which struggle for basic amenities. Our continuous
                                                    efforts
                                                    are towards making a healthier happier world through our various
                                                    programs and
                                                    activities. Ind-Swift carries out all its activities through the
                                                    Ind-Swift
                                                    charitable trust and Swift Fundamental Research & Education Society
                                                    (SFRES). We
                                                    believe every life on this planet is precious so we take utmost care in
                                                    our
                                                    business processes, by following ethical practices.</td>

                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <div class="section_title mt-5">
                                        <h2>Our employees are our Assets</h2>
                                    </div>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <td class="text-justify">No company can be successful without the support of
                                                    their
                                                    employees. At Ind-Swift our employees are our biggest assets, we ensure
                                                    their
                                                    development, value their dedication, and provide them opportunities to
                                                    develop
                                                    and grow. We understand business is important but at the same time
                                                    family is
                                                    also equally important. Our utmost efforts revolve around creating a
                                                    healthy and
                                                    professional environment for employees, which eventually helps them in
                                                    living a
                                                    stress free and balanced life, enjoying work and family. We regularly
                                                    engage our
                                                    employees in recreational activities to ensure and enhance their overall
                                                    growth.
                                                </td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="nav-policy" role="tabpanel" aria-labelledby="nav-policy-tab">
                                    <div class="section_title mt-5">
                                        <h2>Environment Protection</h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th colspan="2">
                                                            <h4>Therefore we ensure:</h4>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th>> </th>
                                                        <th>To use innovative methods and technologies in such a way so as
                                                            to have
                                                            the highest standards of safety, environment and health.</th>
                                                    </tr>
                                                    <tr>
                                                        <th>> </th>
                                                        <th>To reduce hazardous waste contents in the air, water and land
                                                            through
                                                            various effective processes.</th>
                                                    </tr>
                                                    <tr>
                                                        <th>> </th>
                                                        <th>To continuously invest in the up-gradation and growth of our
                                                            facilities
                                                            and manufacturing capabilities so as to ensure better
                                                            environmental
                                                            practices.</th>
                                                    </tr>
                                                    <tr>
                                                        <th>> </th>
                                                        <th>To reduce the possibility of accidents, loss of life, damage to
                                                            machinery or property by providing regular training to the
                                                            employees.
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th>> </th>
                                                        <th>To strictly adhere to CGMP (Current Good Manufacturing
                                                            Practices) and
                                                            FDA (Food & Drug Administration) guidelines for manufacturing
                                                            processes.
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="2">
                                                            <h4>Our Target is to</h4>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th>> </th>
                                                        <th>Reduce energy consumption by 15-20%.</th>
                                                    </tr>
                                                    <tr>
                                                        <th>> </th>
                                                        <th>Reduce travel trip and long distance travel by 30-40%.</th>
                                                    </tr>
                                                    <tr>
                                                        <th>> </th>
                                                        <th>Reduce consumption of paper by 50%.</th>
                                                    </tr>
                                                    <tr>
                                                        <th>> </th>
                                                        <th>Tree plantations.</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                        <div class="col-md-4">
                                            Ind-Swift strongly believes in environmentalism i.e. concern for the
                                            preservation,
                                            restoration or improvement of the natural environment such as the conservation
                                            of
                                            natural resources, prevention of pollution, etc.
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="nav-awards" role="tabpanel" aria-labelledby="nav-awards-tab">
                                    <div class="section_title mt-5">
                                        <h2>Education</h2>
                                    </div>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <td class="text-justify">
                                                    Following the footprints of one of the India’s greatest visionary,
                                                    former
                                                    President A.P.J Abdul Kalam , we are aiming to achieve the goal of
                                                    hundred
                                                    percent literacy by 2020 in the country. We at Ind-Swift understand the
                                                    role and
                                                    significance of knowledge in the development of our society. A nation
                                                    can only
                                                    develop , when its citizen are educated , because education is the only
                                                    means by
                                                    which one’s potential can be used to the maximum extent. We have taken a
                                                    small
                                                    initiative through various programs and activities, to contribute
                                                    towards the
                                                    vision of Dr. APJ Abdul Kalam.
                                                </td>
                                                <td class="text-justify">
                                                    <h4 class="text-center text-dark">Adult Education Program </h4>
                                                    We provide education to adults. Under this program many adults are
                                                    enrolled and
                                                    provided basic education, so that they can face the challenges of life
                                                    in a
                                                    stronger and efficient way, raise the standards of personal living,
                                                    create and
                                                    assist change in the society. The duration of this course is three
                                                    months. As
                                                    there is no age for education, this program too is open to all
                                                    individuals, with
                                                    caste, age and gender being no bar. We have covered many villages under
                                                    this
                                                    education program, and with the unflinching efforts and support of our
                                                    voluntary
                                                    team members we are prepared to cover more demographic areas and spread
                                                    awareness for education in future.
                                                </td>
                                                <td class="text-justify">
                                                    <h4 class="text-center text-dark">Female Education Program</h4>
                                                    "If you educate a man you educate an individual, but if you educate a
                                                    woman you
                                                    educate a family (nation)." Women education is the most important
                                                    concern of
                                                    today. Women play a very significant role in the overall development and
                                                    progress of any country. Thus education to women is the foremost concern
                                                    that
                                                    requires immediate action. Though time is changing now, our society is
                                                    becoming
                                                    more aware and acceptable toward female empowerment and education. Still
                                                    the
                                                    battle is just half won, as there are many segments, who do not want
                                                    females to
                                                    be educated and self dependent. We must keep this battle on till we
                                                    attain 100 %
                                                    literacy and self dependent females. With this vision we are education
                                                    hundreds
                                                    of females in villages; especially surrounding villages of SGOC (Swift
                                                    Group Of
                                                    Colleges).We not only educate them, but also motivate them to join our
                                                    education
                                                    institution. We have especially designed special categories for
                                                    scholarships in
                                                    order to encourage girl child education some of them are:
                                                </td>
                                            </tr>
                                        </thead>
                                    </table>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <table class="table table-sm">
                                                <thead>
                                                    <tr>
                                                        <th class="text-right">
                                                            >
                                                        </th>
                                                        <th>
                                                            Single Girl Child
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-right">
                                                            >
                                                        </th>
                                                        <th>
                                                            Two/Three Sisters
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-right">
                                                            >
                                                        </th>
                                                        <th>
                                                            Fatherless Child
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-right">
                                                            >
                                                        </th>
                                                        <th>
                                                            Disabled and Physically handicapped
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-right">
                                                            >
                                                        </th>
                                                        <th>
                                                            Meritorious Student
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-right">
                                                            >
                                                        </th>
                                                        <th>
                                                            Annual income below 1 Lac
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-right">
                                                            >
                                                        </th>
                                                        <th>
                                                            Freedom Fighters
                                                        </th>
                                                    </tr>
                                                </thead>
                                            </table>

                                        </div>
                                        <div class="col-md-8">
                                            Apart form this we have also motivated and enrolled many of our
                                            employees to
                                            pursue higher education with us, giving them good discounts and
                                            waivers in
                                            fees.
                                            With the help of these various schemes and scholarships we
                                            continously
                                            motivate
                                            and encourage the girl child and their respective families to pursue
                                            education.
                                        </div>
                                    </div>


                                </div>
                                <div class="tab-pane fade" id="nav-member" role="tabpanel" aria-labelledby="nav-member-tab">
                                    <div class="section_title mt-5">
                                        <h2>Healthcare</h2>
                                    </div>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <td class="text-justify">
                                                    Being a pharmaceutical group it is our constant endeavour to provide
                                                    safe,
                                                    quality and affordable medicines to the society. Our unflinching efforts
                                                    support
                                                    and are dedicated towards service of humanity. By consistently working
                                                    on
                                                    innovative and new therapies we would like to contribute to a safe,
                                                    healthy and
                                                    happier world.
                                                </td>
                                                <td class="text-justify">
                                                    <h4 class="text-center text-dark">Free Distribution of Medicines </h4>
                                                    We regularly donate free medicines and health care products to weaker
                                                    sections
                                                    of society as we strongly believe that health and education to all is
                                                    the most
                                                    important right for any individual.
                                                </td>
                                                <td class="text-justify">
                                                    <h4 class="text-center text-dark">Free Medical Health Camps</h4>
                                                    Another activity under health care is that we conduct and organize
                                                    medical camps
                                                    in various remote villages, which do not have access to medical
                                                    facilities. We
                                                    have successfully organized various free eye check up campaign, free
                                                    medical
                                                    checks up, pulse polio campaigns, and we have made it a regular practice
                                                    to
                                                    organize such camps after analyzing the needs of the area.
                                                </td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="nav-approvals" role="tabpanel"
                                    aria-labelledby="nav-approvals-tab">
                                    <div class="section_title mt-5">
                                        <h2>Partnerships</h2>
                                    </div>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <td class="text-justify">
                                                    With various collaborations and partnerships we are poised to help those
                                                    sections of the society which are deprived of even the basic needs. We
                                                    have
                                                    recently collaborated with Roche Diagnostics to expand Trop T rapid
                                                    assay in
                                                    India. Troponin-T is used to measure damage to the heart muscle and to
                                                    differentiate between non-cardiac chest pains and heart attacks. Heart
                                                    Attack is
                                                    one of the major reasons of death now a days with the help of this
                                                    partnership
                                                    Ind-swift will provide these heart attack detecting test kits at a very
                                                    low
                                                    cost, which will be easily affordable by major part of the population in
                                                    India
                                                    and thus masses will get access to this affordable test and save their
                                                    lives.
                                                    This initiative by Ind-Swift will definitely save many lives and
                                                    definitely will
                                                    benefit various segments of the society who cannot afford expensive
                                                    treatment.
                                                </td>
                                                <td class="text-justify">
                                                    <h4 class="text-center text-dark">Free Distribution of Medicines </h4>
                                                    We also have an especially incorporated Institution division which helps
                                                    to
                                                    achieve the government objective of making best quality medicines
                                                    available to
                                                    the common man at affordable prices. Our dedicated team is striving to
                                                    make our
                                                    affordable medicines available at almost every hospital in India.
                                                </td>
                                            </tr>
                                        </thead>
                                    </table>

                                </div>
                                <div class="tab-pane fade " id="nav-facility" role="tabpanel"
                                    aria-labelledby="nav-facility-tab">
                                    <div class="section_title mt-5">
                                        <h2>Local Communities</h2>
                                    </div>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <td class="text-justify">
                                                    "Charity begins at home". We strongly believe in the same and proved it
                                                    right as
                                                    well, by working for the development and empowerment of local
                                                    communities. We
                                                    have various activities and programs especially designed for more than
                                                    15 local
                                                    villages (with a total population of above 51000), which includes health
                                                    care
                                                    programs, education program, and HIV awareness campaigns.
                                                </td>
                                                <td class="text-justify">
                                                    Apart from awareness generation we have also created employment
                                                    opportunities
                                                    for villagers by giving preference to candidates of that particular
                                                    region. In
                                                    addition, as we strongly believe in environmentalism, we have planted
                                                    many
                                                    saplings in and around our office buildings .We will strive and continue
                                                    to give
                                                    our unflinching support to make this world a healthier and happier
                                                    place.
                                                </td>
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
