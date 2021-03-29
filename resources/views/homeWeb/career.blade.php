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
        style="background-image: url({{ asset('assets/images/career.png') }}); padding-top:115px;padding-bottom:85px;">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-10">
                <h2 class="text-white" style="">Career</h2>
            </div>
        </div>
    </div>

    <!-- About -->

    <div class="about">
        <div class="container-fluid">
            <div class="row">

                <!-- About Content -->
                <div class="col-lg-1"></div>
                <div class="col-lg-8">


                    <!--**********************nav pills***********************-->
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-link active" id="nav-presence-tab" data-toggle="tab" href="#nav-presence"
                                role="tab" aria-controls="nav-presence" aria-selected="true" style="font-size: 13px;">Work
                                Culture</a>
                            <a class="nav-link" id="nav-strengths-tab" data-toggle="tab" href="#nav-strengths" role="tab"
                                aria-controls="nav-strengths" aria-selected="false" style="font-size: 13px;">Carrer &
                                Growth</a>
                            <a class="nav-link " id="nav-rankings-tab" data-toggle="tab" href="#nav-rankings" role="tab"
                                aria-controls="nav-rankings" aria-selected="false" style="font-size: 13px;">Employee
                                Benefits</a>
                            <a class="nav-link " id="nav-awards-tab" data-toggle="tab" href="#nav-awards" role="tab"
                                aria-controls="nav-awards" aria-selected="false" style="font-size: 13px;">HR Contact
                                Details</a>
                            <a class="nav-link " id="nav-production-tab" data-toggle="tab" href="#nav-production" role="tab"
                                aria-controls="nav-production" aria-selected="false" style="font-size: 13px;">Current
                                Opening</a>
                            <a class="nav-link " id="nav-break-tab" data-toggle="tab" href="#nav-break" role="tab"
                                aria-controls="nav-break" aria-selected="false" style="font-size: 13px;">Application
                                Form</a>
                            <!-- <a class="nav-link " id="nav-product-tab" data-toggle="tab" href="#nav-product" role="tab" aria-controls="nav-product" aria-selected="false" style="font-size: 13px;">Product In Pipeline</a> -->
                        </div>
                    </nav>

                    <div class="tab-content" style="border-top:2px solid red;" id="nav-tabContent">
                        <div class="tab-pane fade in show active" id="nav-presence" role="tabpanel"
                            aria-labelledby="nav-presence-tab">
                            <div class="section_title mt-5">
                                <h2>Work Culture</h2>
                            </div>
                            <br>
                            <p>In an industry where intellectual capital is the primary business driver, enhancing the
                                quality of such intellect and retaining it over the years, drives sustainable success.
                                Ind-Swift has a strong belief that its employees are its greatest assets. Ind-Swift is a
                                company very well recognized for the fact that it does its best to retain its employees and
                                at the same time bring out their best. It is our endeavour to motivate and develop every
                                employee’s skills in a manner that leads to optimum utilization of Human Resources, which
                                subsequently results in the attainment of the objectives of the organization. An infectious
                                spirit of co operation and mutual trust with an overall orientation towards the achievement
                                of Total Customer Responsiveness has been induced among the employees at Ind-Swift Ltd. It
                                is this spirit which forms the root of the work culture.
                                To achieve such a high level of motivation, efficiency and trust, Ind-Swift has been
                                striving consistently by providing :</p>
                            <p>&raquo;&nbsp;A helpful, healthy and warm environment.</p>
                            <p>&raquo;&nbsp;Maintaining a two-way communication process, keeping the employees well informed
                                about all matters relating to the company.</p>
                            <p>&raquo;&nbsp;Providing competitive salaries, at par with the best in the Industry.</p>
                            <p>&raquo;&nbsp;Instilling a sense of teamwork and mutual trust.</p>
                            <p>&raquo;&nbsp;Treating all employees as one and equal.</p>
                            <p>&raquo;&nbsp;Encouraging employees to come up with suggestions for improving the quality of
                                its services and attaining total customer satisfaction.</p>
                            <p></p>
                            <p> Ind-Swift believes in an open door policy. All employees are free to take their problems to
                                their immediate superiors who are readily available. All employees are also welcome to take
                                any of their problems to the Human Resource Department. An atmosphere of openness and a
                                sense of belonging prevail in the entire length and breadth of Ind-Swift.
                            </p>
                        </div>

                        <div class="tab-pane fade" id="nav-strengths" role="tabpanel" aria-labelledby="nav-strengths-tab">
                            <div class="section_title mt-5">
                                <h2>Carrer & Growth&nbsp;(EMPLOYEE DEVELOPMENT)</h2>
                            </div>
                            <p class="text-danger" style="font-size: 20px;">Training and Development&nbsp;:</p>
                            <p></p>
                            <p>&raquo;&nbsp;After a long and explorative competency mapping the training needs of the
                                employees are analyzed.</p>
                            <p>&raquo;&nbsp;The training programmes are fixed up for every individual on the basis of
                                priority.</p>
                            <p>&raquo;&nbsp;A training calendar is drawn up for the Year, which is open to additions /
                                editions on the basis of business and individual needs.</p>
                            <p>&raquo;&nbsp; The training is primarily of ‘on The Job’ nature, so the employees practice
                                what they learn,immediately.</p>
                            <p>&raquo;&nbsp;Seminars / talks are also arranged/ approved for the employees</p>
                            <p></p>
                            <p class="text-danger" style="font-size: 20px;"> Employee Performance Management&nbsp;:</p>
                            <p></p>
                            <p>&raquo;&nbsp; Key Result Areas of the employees are fixed up by a mutual discussion between
                                the immediate senior and the employee himself/herself.</p>
                            <p>&raquo;&nbsp; The performance is appraised on a quarterly basis to assess the employee’s
                                progress, and to provide him support.</p>
                            <p>&raquo;&nbsp;At the end of the Year the performance of the employee is analyzed.</p>
                            <p>&raquo;&nbsp;Appreciation of and rewarding good performance and motivating the rest to
                                achieve higher levels is the purpose of a good Performance Management System, which ISL
                                practices.</p>
                        </div>

                        <div class="tab-pane fade" id="nav-rankings" role="tabpanel" aria-labelledby="nav-rankings-tab">
                            <div class="section_title mt-5">
                                <h2>Employee Beneifts&nbsp;(
                                    STATUTORY BENEFITS)</h2>
                            </div>
                            <p class="text-danger" style="font-size: 20px;">EMPLOYEES PROVIDENT FUND SCHEME &nbsp;:</p>
                            <p></p>
                            <p>&raquo;&nbsp;As per the Employees Provident Funds & Miscellaneous Provision Act of 1952, 12%
                                of the earned basic will be deducted & an equal amount will be contributed by Company &
                                remitted to each employee’s account.</p>

                            <p></p>

                            <p class="text-danger" style="font-size: 20px;">EMPLOYEES STATE INSURANCE SCHEME&nbsp;:</p>
                            <p></p>
                            <p>&raquo;&nbsp;As per the Employees State Insurance Act of 1948, there will be a deduction of
                                1.75% from the employees gross salary including all allowances and 4.75% will be contributed
                                by the company.</p>

                            <p></p>

                            <p class="text-danger" style="font-size: 20px;">BONUS&nbsp;:</p>
                            <p></p>
                            <p>&raquo;&nbsp; As per the Bonus Act of 1965, all employees who have worked for a period of not
                                less than 30 day.</p>

                            <p></p>

                            <p class="text-danger" style="font-size: 20px;">GRATUITY &nbsp;:</p>
                            <p></p>
                            <p>&raquo;&nbsp;As per the Payment of Gratuity act 1972, gratuity is payable to an employee who
                                has completed 5 years of continuous service with the company.</p>

                            <p></p>

                            <div class="section_title mt-5">
                                <h2>Employee Beneifts&nbsp;(
                                    NON-STATUTORY BENEFITS)</h2>
                            </div>

                            <p class="text-danger" style="font-size: 20px;"> L.T.A&nbsp;:</p>
                            <p></p>
                            <p>&raquo;&nbsp;All confirmed employees will be eligible for leave Travel Allowance once in two
                                years. LTA will be admissible on actual expenditure incurred by the employee but will be
                                limited to maximum one month’s basic salary.</p>

                            <p></p>

                            <p class="text-danger" style="font-size: 20px;">INSURANCE/ Accidental Insurance Policy &nbsp;:
                            </p>
                            <p></p>
                            <p>&raquo;&nbsp;This policy covers all permanent employees and provides insurance against
                                accidental death up to Rs. One Lac for the family of the deceased.</p>

                            <p></p>

                            <p class="text-danger" style="font-size: 20px;"> Group Personal Accidental Policy &nbsp;:</p>
                            <p></p>
                            <p>&raquo;&nbsp;This policy covers all permanent employees and provides medical re-imbursement
                                up to 25-40% of the claimed weekly compensation amount.</p>

                            <p></p>

                            <p class="text-danger" style="font-size: 20px;">LOANS &nbsp;:</p>
                            <p></p>
                            <p>&raquo;&nbsp;Emergency/Medical/Marriage Loan: Can be availed by employees having minimum one
                                year of continuous service with the company</p>
                            <p>&raquo;&nbsp;House Loan: Can be availed with the company by employees having minimum five
                                years of continuous service with the company.</p>
                        </div>


                        <div class="tab-pane fade" id="nav-awards" role="tabpanel" aria-labelledby="nav-awards-tab">
                            <div class="section_title mt-5">
                                <h2>HR Contact Details</h2>
                            </div>
                            <p></p>
                            <p></p>
                            <h4>Human Resources Department</h4>
                            <ul>
                                <li>&raquo;&nbsp;&nbsp;Ind-Swift Ltd</li>
                                <p></p>
                                <li>&raquo;&nbsp;&nbsp;<i class="fa fa-map-marker">&nbsp;&nbsp;</i>781, Industrial Area,
                                    Phase- II, CHANDIGARH</li>
                                <p></p>
                                <li>&raquo;&nbsp;&nbsp;<i class="fa fa-phone">&nbsp;&nbsp;</i>Tel: 0172 - 4680800</li>
                                <p></p>
                                <li>&raquo;&nbsp;&nbsp;<i class="fa fa-fax">&nbsp;&nbsp;</i>Fax : 0172-2652242</li>
                                <p></p>
                                <li>&raquo;&nbsp;&nbsp;<i class="fa fa-envelope">&nbsp;&nbsp;</i>Email: hrd@indswift.com
                                </li>
                                <p></p>
                            </ul>
                        </div>

                        <div class="tab-pane fade" id="nav-production" role="tabpanel" aria-labelledby="nav-production-tab">
                            <div class="section_title mt-5">
                                <h2>Current Openings</h2>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">S.No</th>
                                        <th scope="col">Position Title</th>
                                        <th scope="col">Deptt.</th>
                                        <th scope="col">Qualification</th>
                                        <th scope="col">Required Exp.</th>
                                        <th scope="col">Location</th>
                                        <th scope="col">No. Of Positions</th>
                                        <th scope="col">Apply Now</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Trainee Executives</td>
                                        <td>Marketing</td>
                                        <td>Graduates/ B. Pharma/ M.B.A. with flair for selling & own conveyance</td>
                                        <td>Freshers & Experienced</td>
                                        <td>Various location across India</td>
                                        <td></td>
                                        <td><a href="#">Apply Now</a></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">2</th>
                                        <td>PA to Director</td>
                                        <td>Admin</td>
                                        <td>Master's preferred</td>
                                        <td>3-4 yrs</td>
                                        <td>Chandigarh</td>
                                        <td>1</td>
                                        <td><a href="#">Apply Now</a></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Product Manager (in each Deptt.)</td>
                                        <td>Ayurvedic / Ethical /Generic Division</td>
                                        <td>B.Sc/B.Pharm.M.Pharm./MBA preferred</td>
                                        <td>4-6 yrs</td>
                                        <td>Chandigarh</td>
                                        <td>1</td>
                                        <td><a href="#">Apply Now</a></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Product Executive (in each Deptt.)</td>
                                        <td>Ayurvedic / Ethical /Generic Division</td>
                                        <td>B.Sc/B.Pharm.M.Pharm./MBA preferred</td>
                                        <td>3-4 yrs</td>
                                        <td>Chandigarh</td>
                                        <td>5</td>
                                        <td><a href="#">Apply Now</a></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">5</th>
                                        <td>V.P./G.M </td>
                                        <td>Accounts</td>
                                        <td>CA/ICWA/MBA(finance)</td>
                                        <td>10 yrs</td>
                                        <td>Chandigarh</td>
                                        <td>1</td>
                                        <td><a href="#">Apply Now</a></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Manager </td>
                                        <td>Accounts</td>
                                        <td>CA/ICWA/MBA(finance)</td>
                                        <td>5 yrs</td>
                                        <td>Chandigarh</td>
                                        <td>1</td>
                                        <td><a href="#">Apply Now</a></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">7</th>
                                        <td>G.M.</td>
                                        <td>Business Developer (Pharma)</td>
                                        <td>Graduate </td>
                                        <td>10 yrs in same field</td>
                                        <td>Chandigarh</td>
                                        <td>1</td>
                                        <td><a href="#">Apply Now</a></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">8</th>
                                        <td>Group Product Manager</td>
                                        <td>Generic Division</td>
                                        <td>B.Sc/B.Pharm.
                                            M.Pharm./
                                            MBA preferred</td>
                                        <td>10 yrs</td>
                                        <td>Chandigarh</td>
                                        <td>1</td>
                                        <td><a href="#">Apply Now</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>


                        <div class="tab-pane fade" id="nav-break" role="tabpanel" aria-labelledby="nav-break-tab">
                            <div class="section_title mt-5">
                                <h2>Application Form</h2>
                            </div>

                            <!-- *******application form ***********-->

                            <form>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Applicant Name:</label>
                                    <input type="name" class="form-control" id="exampleFormControlInput1"
                                        placeholder="enter name...">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Email ID:</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="name@example.com">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Adress:</label>
                                    <input type="adress" class="form-control" id="exampleFormControlInput1"
                                        placeholder="enter adress...">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Contact No:</label>
                                    <input type="contact" class="form-control" id="exampleFormControlInput1"
                                        placeholder="enter contact no...">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">State:</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="enter state name...">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Please Specify Position Applied for (If
                                        Any):</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="enter position applied for...">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Comments:</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="comments...">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Your Resume:</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>

                                <button type="submit" class="btn btn-danger">Submit</button>
                            </form>


                            <!-- *******application form ends***********-->

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
                        <div class="box_text" style=" margin-left: -30px; margin-right: -45px;">IND-SWIFT Chandigarh based
                            drug company, established in 1986...</div>
                    </div>

                    <!-- Box -->
                    <div class="box box_appointments" style="height: 250px;">
                        <div class="box_title" style=" margin-left: -30px; margin-right: -45px; margin-top:-10px;">
                            <img src="{{ asset('assets/images/phone-call.svg') }}" alt=""
                                style="width: 29px; height:29px;">
                            Leadership
                        </div>
                        <div class="box_text" style=" margin-left: -30px; margin-right: -25px;">The facilities are built
                            according to the current guidelines of MHRA, EU, WHO
                            and accreditations with ISO 14000 series...</div>
                    </div>

                    <!-- Box -->
                    <div class="box box_emergency" style="height: 240px;">
                        <div class="box_title" style=" margin-left: -30px; margin-right: -45px; margin-top:-10px;">
                            <img src="{{ asset('assets/images/bell.svg') }}" alt="" style="width: 37px; height:37px;">
                            Mission
                        </div>
                        <div class="box_emergency_text" style=" margin-left: -30px; margin-right: -20px;">IND-SWIFT has
                            spread its network across 45 countries. It is an ISO
                            9001-2008, WHO GMP certified company...</div>
                    </div>

                </div>

                <div class="col-lg-1"></div>

            </div>
        </div>
    </div>

@endsection
