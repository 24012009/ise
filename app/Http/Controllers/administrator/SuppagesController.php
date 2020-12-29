<?php

namespace App\Http\Controllers\administrator;

use App\AdminPages;
use App\Http\Controllers\Controller;
use App\Product;
use App\SubPages;
use Illuminate\Http\Request;

class SuppagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $SubPages = SubPages::orderBy('order_by', 'DESC')->paginate(10);
        $AppSetting = array(
            "title" => "Sub Pages List",
            "slug" => "sub-pages"
        );
        return view("administrator.suppages.index", compact("SubPages"), $AppSetting)->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $AppSetting = array(
            "title" => "Sub Pages List",
            "slug" => "sub-pages"
        );
        $pages=AdminPages::where("is_active",1)->pluck("page_name","page_id");
        return view("administrator.suppages.create", compact("pages"), $AppSetting);
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
        $rs=New SubPages();
        $rs->page_id=$request->sl_pages;
        $rs->title_subpage=$request->title_subpage;
        $rs->links=$request->links;
        $rs->is_active=$request->is_active;
        $rs->order_by=$request->order_by;
        $rs->save();
        return redirect('/administrator/subpages/create')->with('success', 'Sub Page Create successfully');
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
            "title" => "Sub Pages Edit",
            "slug" => "sub-pages"
        );
        $pages=AdminPages::where("is_active",1)->pluck("page_name","page_id");
        $sub=SubPages::find($id);
        return view("administrator.suppages.edit", compact("id","pages","sub"), $AppSetting);
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
        $rs=SubPages::find($id);
        $rs->page_id=$request->sl_pages;
        $rs->title_subpage=$request->title_subpage;
        $rs->links=$request->links;
        $rs->is_active=$request->is_active;
        $rs->order_by=$request->order_by;
        $rs->save();
        return redirect('/administrator/subpages')->with('success', 'Sub page Update successfully');
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
        $rs=SubPages::find($id);
        $rs->delete();
        return redirect('/administrator/subpages')->with('success', 'Sub page has been delete success');
    }
}
