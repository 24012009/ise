<?php

namespace App\Http\Controllers\administrator;

use App\Comparation;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class CompareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $compare = Comparation::where(function($q) use($request){
            if(!empty($request->compare_name)){
                $q->where("title_specs_compare","like","%{$request->compare_name}%");
            }
        })->orderBy('is_order', 'DESC')->paginate(10);
        $AppSetting = array(
            "title" => "Compare Specs List",
            "slug" => "compare-list"
        );
        return view("administrator.compare.index", compact("compare"), $AppSetting)->with('i', ($request->input('page', 1) - 1) * 5);
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
            "title" => "Compare Specs Create",
            "slug" => "compare-create"
        );
        return view("administrator.compare.create", $AppSetting);
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
       $rs=New Comparation();
       $rs->title_specs_compare=$request->title_specs_compare;
       $rs->sub_specs_compare=$request->sub_specs_compare;
       $rs->specs_content=$request->specs_content;
       $rs->image_compare=$request->image_compare;
       $rs->custom_field=$request->custom_field;
       $rs->custom_field1=$request->custom_field1;
       $rs->is_active=$request->is_active;
       $rs->is_order=$request->order_by;
       $rs->save();
       return redirect('/administrator/compare/create')->with('success', 'Compare Specs Create successfully');
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
            "title" => "Compare Specs Edit",
            "slug" => "compare-list"
        );
        $compare=Comparation::find($id);
        return view("administrator.compare.edit",compact("id","compare"), $AppSetting);
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
        $rs=Comparation::find($id);
        $rs->title_specs_compare=$request->title_specs_compare;
        $rs->sub_specs_compare=$request->sub_specs_compare;
        $rs->specs_content=$request->specs_content;
        $rs->image_compare=$request->image_compare;
        $rs->custom_field=$request->custom_field;
        $rs->custom_field1=$request->custom_field1;
        $rs->is_active=$request->is_active;
        $rs->is_order=$request->order_by;
        $rs->save();
        return redirect("/administrator/compare/edit/{$id}")->with('success', 'Compare Specs update successfully');
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
