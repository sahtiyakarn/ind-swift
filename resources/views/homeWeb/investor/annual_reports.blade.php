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
                            <h3>Financials :</h3>
                        </div>

                    </div>
                    <hr>
                    <br>

                    <!--*********************vertical nav pill ********************-->


                    <div class="row">
                        <div class="col-3">
                            <div class="nav flex-column nav-pills" aria-orientation="vertical">
                                <a class="nav-link " href="/related_party_transaction">Related PartyTransaction</a>
                                <a class="nav-link" href="/quaterly_results">Quaterly Results</a>
                                <a class="nav-link active" href="/annual_reports">Annual Reports</a>
                                <a class="nav-link" href="/unclaimeddividends">Unclaimed Dividends</a>
                                <a class="nav-link" href="/unclaimed_deposit">Unclaimed Deposits</a>
                                <a class="nav-link" href="/share_holding_patterns">Share Holding Pattern</a>
                                <a class="nav-link" href="/voting_results">Voting Results</a>
                                <a class="nav-link" href="/insider_trading_code">Insider Trading Code</a>
                                <a class="nav-link" href="/credit_rating">Credit Ratings</a>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1 mb-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Annual Report:</h4>
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
