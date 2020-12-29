<?php

namespace App\Http\Controllers\administrator;

use App\Http\Controllers\Controller;
use App\properties;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $AppSetting = array(
            "title" => "Properties",
            "slug" => "Properties-update"
        );
        $pro=properties::find($id);
        return view("administrator.properties.create",compact('pro'),$AppSetting);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $rs=properties::find($id);
        $rs->site_name=$request->site_name;
        $rs->site_url=$request->site_url;
        $rs->address=$request->address;
        $rs->phone=$request->phone;
        $rs->email=$request->email;
        $rs->email_send=$request->email_send;
        $rs->fb_url=$request->fb_url;
        $rs->instagram_url=$request->instagram_url;
        $rs->twitter_url=$request->twitter_url;
        $rs->agoda_url=$request->agoda_url;
        $rs->booking_url=$request->booking_url;
        $rs->trip_url=$request->trip_url;
        $rs->exp_url=$request->exp_url;
        $rs->logo=$request->thumbnail01;

        $rs->update();
        return back()
            ->with('success', 'Page update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
