<?php

namespace App\Http\Controllers;

use App\Models\enquirys;
use Illuminate\Http\Request;
use App\Models\Homepage;
use App\Models\About;
use App\Models\genericproduct;
use App\Models\investor;
use App\Models\boardofdirector;

class Home extends Controller
{
    function index()
    {
        $data = Homepage::orderBy('id', 'desc')->first();
        return view('homeWeb.index', compact('data'));
    }

    function enquiryadd(Request $request)
    {
        $data = new enquirys();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->place = $request->place;
        $data->info = $request->info;
        $data->save();
        return back()->with('alert', 'Thank you for you feedback..');
    }

    function generic(Request $request)
    {
        $data = genericproduct::orderBy('id', 'desc')->first();
        $data1 = genericproduct::all();
        return view('homeWeb.genericproduct', compact('data', 'data1'));
    }

    function about()
    {
        $data = about::orderBy('id', 'desc')->first();
        return view('homeWeb.about', compact('data'));
    }

    function marketing()
    {
        $data = Homepage::orderBy('id', 'desc')->first();
        return view('homeWeb.marketing', compact('data'));
    }

    function randd()
    {
        $data = Homepage::orderBy('id', 'desc')->first();
        return view('homeWeb.randd', compact('data'));
    }

    function herbalplusd()
    {
        $data = Homepage::orderBy('id', 'desc')->first();
        return view('homeWeb.division.herbalplusd', compact('data'));
    }


    // nova division
    function nobledivision()
    {
        $data = Homepage::orderBy('id', 'desc')->first();
        return view('homeWeb.division.nobledivision', compact('data'));
    }
    function novadivision()
    {
        $data = Homepage::orderBy('id', 'desc')->first();
        return view('homeWeb.division.novadivision', compact('data'));
    }

    function ethicaldivision()
    {
        $data = Homepage::orderBy('id', 'desc')->first();
        return view('homeWeb.division.ethicaldivision', compact('data'));
    }
    function genericdivision()
    {
        $data = Homepage::orderBy('id', 'desc')->first();
        return view('homeWeb.division.genericdivision', compact('data'));
    }

    function institutiondivision()
    {
        $data = Homepage::orderBy('id', 'desc')->first();
        return view('homeWeb.division.institutiondivision', compact('data'));
    }

    function proposeddivisions()
    {
        $data = Homepage::orderBy('id', 'desc')->first();
        return view('homeWeb.division.proposeddivisions', compact('data'));
    }

    // end of nova division
    function whyus()
    {
        $data = Homepage::orderBy('id', 'desc')->first();
        return view('homeWeb.whyus', compact('data'));
    }

    // investory start
    function related_party_transaction()
    {
        $data = investor::where('investor_name', 'related_party_transactions')->orderBy('id', 'desc')->get();
        return view('homeWeb.investor.related_party_transaction', compact('data'));
    }

    function quaterly_results()
    {
        $year = investor::select('year')->where('investor_name', 'quaterly_results')->distinct()->orderBy('year', 'desc')->get();
        $year1 = investor::select('year')->where('investor_name', 'quaterly_results')->orderBy('year', 'desc')->first();
        $info = ['investor_name' => 'quaterly_results', 'year' => $year1['year']];
        $data = investor::where($info)->orderBy('id', 'desc')->get();
        return view('homeWeb.investor.quaterly_results', compact('data', 'year1', 'year'));
    }

    function annual_reports()
    {
        $data = investor::where('investor_name', 'annual_reports')->orderBy('id', 'desc')->get();
        return view('homeWeb.investor.annual_reports', compact('data'));
    }

    function unclaimeddividends()
    {
        $data = investor::where('investor_name', 'unclaimed_dividends')->orderBy('id', 'desc')->get();
        return view('homeWeb.investor.unclaimed_dividends', compact('data'));
    }

    function unclaimed_deposit()
    {
        $data = investor::where('investor_name', 'unclaimed_deposits')->orderBy('id', 'desc')->get();
        return view('homeWeb.investor.unclaimed_deposit', compact('data'));
    }
    function share_holding_patterns()
    {

        $year = investor::select('year')->where('investor_name', 'share_holding_patterns')->distinct()->orderBy('year', 'desc')->get();
        $year1 = investor::select('year')->where('investor_name', 'share_holding_patterns')->orderBy('year', 'desc')->first();
        $info = ['investor_name' => 'share_holding_patterns', 'year' => $year1['year']];
        $data = investor::where($info)->orderBy('id', 'desc')->get();
        return view('homeWeb.investor.share_holding_patterns', compact('data', 'year1', 'year'));
    }
    function voting_results()
    {
        $data = investor::where('investor_name', 'voting_results')->orderBy('id', 'desc')->get();
        return view('homeWeb.investor.voting_results', compact('data'));
    }
    function insider_trading_code()
    {
        $data = investor::where('investor_name', 'insider_trading_code')->orderBy('id', 'desc')->get();
        return view('homeWeb.investor.insider_trading_code', compact('data'));
    }
    function credit_rating()
    {
        $data = investor::where('investor_name', 'credit_rating')->orderBy('id', 'desc')->get();
        return view('homeWeb.investor.credit_rating', compact('data'));
    }

    function boardofdirector()
    {
        $data = boardofdirector::all();
        return view('homeWeb.investor.boardofdirector', compact('data'));
    }
    function board_meetings()
    {
        $data = investor::where('investor_name', 'board_meetings')->orderBy('id', 'desc')->get();
        return view('homeWeb.investor.board_meetings', compact('data'));
    }
    function agm()
    {
        $data = investor::where('investor_name', 'agm')->orderBy('id', 'desc')->get();
        return view('homeWeb.investor.agm', compact('data'));
    }
    function egm()
    {
        $data = investor::where('investor_name', 'egm')->orderBy('id', 'desc')->get();
        return view('homeWeb.investor.egm', compact('data'));
    }
    function general_meeting_transcripts()
    {
        $data = investor::where('investor_name', 'general_meeting_transcripts')->orderBy('id', 'desc')->get();
        return view('homeWeb.investor.general_meeting_transcripts', compact('data'));
    }
    function transfer_of_share_to_iepf()
    {
        $data = investor::where('investor_name', 'transfer_of_share_to_iepf')->orderBy('id', 'desc')->get();
        return view('homeWeb.investor.transfer_of_share_to_iepf', compact('data'));
    }

    function isl_nclt_petitions()
    {
        $data = investor::where('investor_name', 'isl_nclt_petitions')->orderBy('id', 'desc')->get();
        return view('homeWeb.investor.isl_nclt_petitions', compact('data'));
    }
    function annexure_1st_to_12th_of_petitions()
    {
        $data = investor::where('investor_name', 'annexure_1st_to_12th_of_petitions')->orderBy('id', 'desc')->get();
        return view('homeWeb.investor.annexure_1st_to_12th_of_petitions', compact('data'));
    }
    function annexure_13th_list_of_depositors()
    {
        $data = investor::where('investor_name', 'annexure_13th_list_of_depositors')->orderBy('id', 'desc')->get();
        return view('homeWeb.investor.annexure_13th_list_of_depositors', compact('data'));
    }
    function list_of_fd_holder()
    {
        $data = investor::where('investor_name', 'list_of_fd_holder')->orderBy('id', 'desc')->get();
        return view('homeWeb.investor.list_of_fd_holder', compact('data'));
    }
    function annexure_14th_to_16th_of_petitions()
    {
        $data = investor::where('investor_name', 'annexure_14th_to_16th_of_petitions')->orderBy('id', 'desc')->get();
        return view('homeWeb.investor.annexure_14th_to_16th_of_petitions', compact('data'));
    }
    function advertisments()
    {
        $data = investor::where('investor_name', 'advertisments')->orderBy('id', 'desc')->get();
        return view('homeWeb.investor.advertisments', compact('data'));
    }

    function policies_on_meteriatity_of_events()
    {
        $data = investor::where('investor_name', 'policies_on_meteriatity_of_events')->orderBy('id', 'desc')->get();
        return view('homeWeb.investor.policies_on_meteriatity_of_events', compact('data'));
    }
    function policies_on_preservations_of_documents()
    {
        $data = investor::where('investor_name', 'policies_on_preservations_of_documents')->orderBy('id', 'desc')->get();
        return view('homeWeb.investor.policies_on_preservations_of_documents', compact('data'));
    }
    function code_of_fair_disclosure()
    {
        $data = investor::where('investor_name', 'code_of_fair_disclosure')->orderBy('id', 'desc')->get();
        return view('homeWeb.investor.code_of_fair_disclosure', compact('data'));
    }
    function t_and_c_of_appointment()
    {
        $data = investor::where('investor_name', 't_and_c_of_appointment')->orderBy('id', 'desc')->get();
        return view('homeWeb.investor.t_and_c_of_appointment', compact('data'));
    }
    function party_transcation_policies()
    {
        $data = investor::where('investor_name', 'party_transcation_policies')->orderBy('id', 'desc')->get();
        return view('homeWeb.investor.party_transcation_policies', compact('data'));
    }
    function risk_management_policies()
    {
        $data = investor::where('investor_name', 'risk_management_policies')->orderBy('id', 'desc')->get();
        return view('homeWeb.investor.risk_management_policies', compact('data'));
    }
    function metrails_subsidiary()
    {
        $data = investor::where('investor_name', 'metrails_subsidiary')->orderBy('id', 'desc')->get();
        return view('homeWeb.investor.metrails_subsidiary', compact('data'));
    }
    function familiarization_programme()
    {
        $data = investor::where('investor_name', 'familiarization_programme')->orderBy('id', 'desc')->get();
        return view('homeWeb.investor.familiarization_programme', compact('data'));
    }
    function whistle_blower_policies()
    {
        $data = investor::where('investor_name', 'whistle_blower_policies')->orderBy('id', 'desc')->get();
        return view('homeWeb.investor.whistle_blower_policies', compact('data'));
    }
    function compostion_of_committees()
    {
        $data = investor::where('investor_name', 'compostion_of_committees')->orderBy('id', 'desc')->get();
        return view('homeWeb.investor.compostion_of_committees', compact('data'));
    }

    // investory end
    function career()
    {
        $data = Homepage::orderBy('id', 'desc')->first();
        return view('homeWeb.career', compact('data'));
    }

    function media()
    {
        $data = Homepage::orderBy('id', 'desc')->first();
        return view('homeWeb.media', compact('data'));
    }

    function csr()
    {
        $data = Homepage::orderBy('id', 'desc')->first();
        return view('homeWeb.csr', compact('data'));
    }

    function contact()
    {
        $data = Homepage::orderBy('id', 'desc')->first();
        return view('homeWeb.contact', compact('data'));
    }

    function network()
    {
        $data = Homepage::orderBy('id', 'desc')->first();
        return view('homeWeb.network', compact('data'));
    }

    function productsegment()
    {
        $data = Homepage::orderBy('id', 'desc')->first();
        return view('homeWeb.productsegment', compact('data'));
    }
    function therapeuticsegments()
    {
        $data = Homepage::orderBy('id', 'desc')->first();
        return view('homeWeb.therapeuticsegments', compact('data'));
    }
}