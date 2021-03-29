@extends('/admin/base')
@section('customcss')

@endsection
@section('customjs')

@endsection
@section('content-body')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
            </div>
        </div>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <div class="float-left">
                                    <h2>Investort Add</h2>
                                </div>
                                <div class="float-right">
                                    <a href="/admin/investor" class="btn btn-danger">Closed</a>

                                </div>
                            </div>
                            <div class="card-body">
                                <p>
                                <form action="/admin/create_investor" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label for="">File Name</label>
                                                <input type="text" name="file_name" id="" class="form-control"
                                                    placeholder="Enter File name" aria-describedby="helpId" required>
                                                <small id="helpId" class="text-muted">Help text</small>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Year</label>
                                                <select class="form-control" name="year" id="">
                                                    <option>2021</option>
                                                    <option>2020</option>
                                                    <option>2019</option>
                                                    <option>2018</option>
                                                    <option>2017</option>
                                                    <option>2016</option>
                                                    <option>2015</option>
                                                    <option>2014</option>
                                                    <option>2013</option>
                                                    <option>2012</option>
                                                    <option>2011</option>
                                                    <option>2010</option>
                                                    <option>2009</option>
                                                    <option>2008</option>
                                                    <option>2007</option>
                                                    <option>2006</option>
                                                    <option>2005</option>
                                                    <option>2004</option>
                                                    <option>2003</option>
                                                    <option>2002</option>
                                                    <option>2001</option>
                                                    <option>2000</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">upload_file</label>
                                                <input type="file" class="form-control-file" name="upload_file" id=""
                                                    placeholder="" aria-describedby="fileHelpId">
                                                <small id="fileHelpId" class="form-text text-muted">Help text</small>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Information</label>
                                                <select class="form-control" name="investor_name" id="">
                                                    <option>advertisments</option>
                                                    <option>agm</option>
                                                    <option>annexure_13th_list_of_depositors</option>
                                                    <option>annexure_14th_to_16th_of_petitions</option>
                                                    <option>annexure_1st_to_12th_of_petitions</option>
                                                    <option>annual_reports</option>
                                                    <option>board_meetings</option>
                                                    <option>code_of_fair_disclosure</option>
                                                    <option>compostion_of_committees</option>
                                                    <option>credit_rating</option>
                                                    <option>egm</option>
                                                    <option>familiarization_programme</option>
                                                    <option>general_meeting_transcripts</option>
                                                    <option>insider_trading_code</option>
                                                    <option>isl_nclt_petitions</option>
                                                    <option>metrails_subsidiary</option>
                                                    <option>party_transcation_policies</option>
                                                    <option>policies_on_meteriatity_of_events</option>
                                                    <option>policies_on_preservations_of_documents</option>
                                                    <option>quaterly_results</option>
                                                    <option>related_party_transactions</option>
                                                    <option>risk_management_policies</option>
                                                    <option>share_holding_patterns</option>
                                                    <option>transfer_of_share_to_iepf</option>
                                                    <option>t_and_c_of_appointment</option>
                                                    <option>unclaimed_deposits</option>
                                                    <option>unclaimed_dividends</option>
                                                    <option>voting_results</option>
                                                    <option>whistle_blower_policies</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 offset-lg-9">
                                            <button type="submit" class="btn btn-primary">Save Data</button>
                                        </div>
                                    </div>
                                </form>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
