@extends('homeWeb/base')
@section('title')
    Board of Director
    {{-- {{ $data['title'] }} --}}
@endsection
@section('description')
    {{-- {{ $data->description }} --}}
@endsection
@section('keyword')
    {{-- {{ $data->keyword }} --}}
@endsection
@section('customcss')
    {{-- <link rel="stylesheet" href="{{ $data->canonical }}"> --}}
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
    <div class="home">
        <div class="home_background parallax-window" data-parallax="scroll"
            data-image-src="{{ asset('assets/images/about.jpg') }}" data-speed="0.8"></div>
        <div class="home_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content">
                            <div class="home_title">About <span>IND-Swift</span></div>
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li>About Ind-Swift</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About -->
    <div class="about" style="padding-top:40px;">
        <div class="container-fluid">
            <div class="row">
                <!-- About Content -->
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <h3>Detailed NCLT Petitions</h3>
                        </div>

                    </div>
                    <hr>
                    <br>

                    <!--*********************vertical nav pill ********************-->


                    <div class="row">
                        <div class="col-3">
                            <div class="nav flex-column nav-pills" aria-orientation="vertical">
                                <a class="nav-link " href="/isl_nclt_petitions">ISL-NCLT Petitions</a>
                                <a class="nav-link " href="/annexure_1st_to_12th_of_petitions">Annexure 1st to 12th of
                                    Petitionsg</a>
                                <a class="nav-link " href="/annexure_13st_list_of_depositors">Annexure 13st List of
                                    Depositors</a>
                                <a class="nav-link " href="/list_of_fd_holder">List of FD Holder</a>
                                <a class="nav-link " href="/annexure_14th_to_16th_of_petitions">Annexure 14th to 16th
                                    of
                                    Petitions
                                </a>
                                <a class="nav-link active" href="/advertisments">Advertisments</a>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1 mb-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Advertisments :</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row justify-content-center">
                                                @foreach ($data as $item)
                                                    <div class="col-lg-3 mb-3">
                                                        <div class="card">
                                                            <div class="card-header text-center">
                                                                <a
                                                                    href="{{ asset('investor_file/' . $item->upload_file) }}">
                                                                    <img src="{{ asset('assets/images/pdf.png') }}"
                                                                        class="rounded-circle" height="100px;" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="card-body text-center font-weight-normal">
                                                                {{ $item->file_name }} <br>
                                                                {{ $item->year }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="card-footer text-muted">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-1"></div>

            </div>
        </div>
    </div>


@endsection
