<?php

namespace App\Http\Controllers\administrator;

use App\Http\Controllers\Controller;
use App\Tour;
use App\Tourgallery;
use Illuminate\Http\Request;
use App\AdminPages;
use App\Slidepages;
use App\Http\Requests;
use File;
use Image;
class SlidepagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id)
    {
        //
        $page_id=$id;
        $slidepages= Slidepages::where("page_id",$id)->orderBy('slide_id', 'DESC')->paginate(5);
        $page_name=AdminPages::find($id)->page_name;
        $AppSetting = array(
            "title" => "Slide Page: {$page_name}",
            "slug" => "gallery-tour-list"
        );
        return view("administrator.slidepages.index", compact("slidepages",'page_id'), $AppSetting)
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($page_id)
    {
        //
        $page_name=AdminPages::find($page_id)->page_name;
        $AppSetting = array(
            "title" => "Slide Page: {$page_name}",
            "slug" => "page-list-create"
        );
        return view("administrator.slidepages.create", compact('page_id'), $AppSetting);
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
        $input=$request->all();
        $this->validate($request, [
            'slide_name' => 'required'
        ]);
        $data=array(
            "page_id"=>$input['page_id'],
            "slider_name"=>$input['slide_name'],
            "thumbnail"=>$input['file_upload'],
            "images"=>$input['file_upload'],
            "slide_title"=>$input['slide_title'],
            "details"=>$input['content'],
            "position"=>$input['sl_position'],
            "custom_field"=>$input['custom_field'],
            "is_active"=>$input['is_active'],
            "is_order"=>$input['order_by']
        );
        Slidepages::create($data);
        return back()
            ->with('success','Image Upload successful');
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
    public function edit($page_id,$id)
    {
        //
        $page = AdminPages::find($page_id);
        $slide=Slidepages::find($id);
        $AppSetting = array(
            "title" => "Slide Edit: {$page->page_name}",
            "slug" => "page-slide-edit"
        );
        return view("administrator.slidepages.edit", compact('slide','page','page_id'), $AppSetting);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $page_id, $id)
    {
        //
        $input=$request->all();
        $this->validate($request, [
            'slide_name' => 'required'
        ]);
        $slide=Slidepages::find($id);
        $slide->slider_name=$input['slide_name'];
        $slide->images=$input['file_upload'];
        $slide->thumbnail=$input['file_upload'];
        $slide->is_active=$input['is_active'];
        $slide->is_order=$input['order_by'];
        $slide->slide_title=$input['slide_title'];
        $slide->details=$input['content'];
        $slide->position=$input['sl_position'];
        $slide->custom_field=$input['custom_field'];
        $slide->save();
        return back()
            ->with('success','Slide Upload successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($page_id,$id)
    {
        //
        $slide=Slidepages::find($id);
        if($slide->images!=""){
            $image_path = $slide->images;
            $thumbnail_path=$slide->thumbnail;
            if (File::exists($image_path)) {
                File::delete($image_path);
                File::delete($thumbnail_path);
            }
        }
        $slide->delete();
        return back()
            ->with('success', 'slide deleted successfully');
    }
}
