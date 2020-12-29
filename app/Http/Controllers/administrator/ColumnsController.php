<?php

namespace App\Http\Controllers\administrator;

use App\Http\Controllers\Controller;
use App\Section_template;
use App\Sections;
use Illuminate\Http\Request;
use App\Columns;
use file;
use Illuminate\Support\Facades\DB;
class ColumnsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($page_id)
    {
        $id="";
        $section=Sections::where("page_id",$page_id)->where("is_active",0)->first();
        $partial=Section_template::where("section_temp_id",$section->section_template_id)->first();
        return view($partial->backend_partial,compact("id","page_id",'section'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        //
        $sections = Sections::find($id);
        for ($i = 0; $i < count($request->col_name); $i++) {
            $data = array(
                "section_id" => $id,
                "col_name" => $request->col_name[$i],
                "title_col" => $request->title_col[$i],
                "container" => $request->articlebody[$i],
                "thumbnail" => $request->file_upload[$i],
                "labels_link" => $request->labels_link[$i],
                "link" => $request->link[$i],
                "labels" => $request->label[$i],
                "class" => $request->class[$i],
                "is_order" => 1,
                "is_active" => 1
            );
            Columns::create($data);
        }
        $sections->is_active = 1;
        $sections->save();
        return redirect("/administrator/pages/{$sections->page_id}/section/list/")->with('success', 'Columns created successfully');

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
        $sections=Sections::find($id);
        $cols=Columns::where("section_id",$id)->where("is_active",1)->get();
        //dd($sections,$cols);
        $img=array();
        foreach($cols as $i=>$rows){
            $col_id=$rows->col_id;
            $data = array(
                "col_name" => $request->col_name[$i],
                "title_col" => $request->title_col[$i],
                "container" => $request->articlebody[$i],
                "thumbnail" => !empty($request->file_upload[$i])?$request->file_upload[$i]:"",
                "labels_link" => $request->labels_link[$i],
                "link" => $request->link[$i],
                "labels" => $request->label[$i],
                "class" => $request->class[$i],
                "custom_field" => isset($request->custom_field[$i]) ? $request->custom_field[$i] : '',
            );
			
            $columns=Columns::find($col_id);
			//dd($data);
            $columns->where('col_id',$col_id)->update($data);
        }
        return redirect("/administrator/pages/{$sections->page_id}/section/list/")->with('success', 'Columns update successfully');
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
