<?php

namespace App\Http\Controllers;

use App\Models\Homepage;
use App\Models\boardofdirector;
use Illuminate\Http\Request;
use App\Models\investor;

class InvertorController extends Controller
{


    function investor()
    {
        $data = investor::all();
        return view('admin.investor', compact('data'));
    }

    function investoradd()
    {
        $data = investor::all();
        return view('admin.investoradd', compact('data'));
    }

    function create_investor(Request $request)
    {
        $upload_file1 =  $request->file_name . $request->year . '.' . $request->upload_file->extension();
        $request->upload_file->move(public_path('/investor_file'), $upload_file1);
        $investor = new investor;
        $investor->file_name = $request->file_name;
        $investor->year = $request->year;
        $investor->investor_name = $request->investor_name;
        $investor->upload_file = $upload_file1;
        $investor->save();
        return back()->with('success', 'Data is Saved');
    }
    function investordelete($id)
    {
        $data = investor::find($id);
        $data->delete();
        return redirect('/admin/investor')->with('success', 'Data has Deleted');
    }
}