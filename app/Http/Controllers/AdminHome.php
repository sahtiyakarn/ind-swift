<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homepage;
use App\Models\About;

class AdminHome extends Controller
{
    function homeshow(Request $request)
    {
        $data = Homepage::orderby('id', 'desc')->get();
        return view('admin.homepages', compact('data'));
    }

    function homeadd(Request $request)
    {
        $data = Homepage::orderby('id', 'desc')->get();
        return view('admin.homepagesadd', compact('data'));
    }

    function homesubmit(Request $request)
    {
        $Home = new Homepage();
        $Home->title = $request->title;
        $Home->description = $request->description;
        $Home->keyword = $request->keyword;
        $Home->canonical = $request->canonical;
        $Home->save();
        return back()->with('success', 'Your Data is Saved');
    }

    public function homeedit($id)
    {
        $data = Homepage::find($id);
        return view('admin.homepagesedit', compact('data'));
    }

    function homeeditsubmit(Request $request)
    {
        // return $request->id;
        $Home = Homepage::find($request->id);
        $Home->title = $request->title;
        $Home->description = $request->description;
        $Home->keyword = $request->keyword;
        $Home->canonical = $request->canonical;
        $Home->save();
        return redirect('admin/home')->with('success', 'Your Data is Saved');
    }

    function homedelete($id)
    {
        $data = Homepage::where('id', $id)->delete();
        return redirect('admin/home')->with('success', 'Your Data is Saved');
    }


    // About us
    function aboutusshow(Request $request)
    {
        $data = About::orderby('id', 'desc')->get();
        return view('admin.aboutus', compact('data'));
    }

    function aboutusadd(Request $request)
    {
        $data = About::orderby('id', 'desc')->get();
        return view('admin.aboutusadd', compact('data'));
    }

    function aboutussubmit(Request $request)
    {

        $Aboutus = new About();
        $Aboutus->title = $request->title;
        $Aboutus->description = $request->description;
        $Aboutus->keyword = $request->keyword;
        $Aboutus->canonical = $request->canonical;
        $Aboutus->save();
        return redirect('/admin/aboutus')->with('success', 'Your Data is Saved');
    }

    public function aboutusedit($id)
    {
        $data = About::find($id);
        return view('/admin.aboutusedit', compact('data'));
    }

    function aboutuseditsubmit(Request $request)
    {
        return $request->id;

        // return $request->input();
        $Aboutus = About::find($request->id);
        // $Aboutus->title = $request->title;
        // $Aboutus->description = $request->description;
        // $Aboutus->keyword = $request->keyword;
        $Aboutus->canonical = $request->canonical;
        $Aboutus->save();
        return redirect('/admin/aboutus')->with('success', 'Your Data is Saved');
    }

    function aboutusdelete($id)
    {
        $data = About::where('id', $id)->delete();
        return redirect('admin/aboutus')->with('success', 'Your Data is Saved');
    }
}