<?php

namespace App\Http\Controllers\administrator;

use App\AdminPages;
use App\Columns;
use App\Http\Controllers\Controller;
use App\Product;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Sections;
use App\Section_template;
use Illuminate\Support\Facades\Redirect;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:section-list|section-create|section-edit|section-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:section-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:section-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:section-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $AppSetting = array(
            "title" => "Section Management",
            "slug" => "section-list"
        );
        $sections = Sections::orderBy("order_by", "desc")->paginate(5);

        return view("administrator.section.index", compact("sections"), $AppSetting)->with('i', ($request->input('section', 1) - 1) * 5);
    }

    public function listprogress(Request $request)
    {
        //
        $AppSetting = array(
            "title" => "Section Management",
            "slug" => "section-list"
        );
        $sections = Sections::where("is_active", 0)->orderBy("order_by", "desc")->paginate(5);

        return view("administrator.section.progresslist", compact("sections"), $AppSetting)->with('i', ($request->input('section', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($page_id)
    {
        //
        $AppSetting = array(
            "title" => "Section new",
            "slug" => "section-list"
        );
        $SectionTemplate = Section_template::all();
        $pages = AdminPages::where("is_active", 1)->pluck("page_name", "page_id");
        $sections = Sections::where("page_id", $page_id)->where("is_active", 0)->first();
        $section_temp = Section_template::where("is_active", 1)->get();
        return view("administrator.section.create", compact("page_id", "SectionTemplate", "pages", "section_temp"), $AppSetting);
    }

    public function checksection($id)
    {
        $sections = Sections::where("page_id", $id)->where("is_active", 0)->get();
        if ($sections->count() > 0) {
            $data = ['status' => true];
        } else {
            $data = ['status' => false];
        }
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $page_id)
    {
        //
        $sections = new Sections;
        try {
            $sections->page_id = $request->sl_page;
            $sections->section_template_id = $request->imagecheck;
            $sections->section_title = $request->txt_sectionName;
            $sections->style = $request->txt_style;
            $sections->class_css = $request->txt_class_css;
            $sections->custom_field1 = $request->txt_custom;
            $sections->custom_field2 = $request->txt_custom1;
            $sections->custom_field3 = $request->txt_custom2;
            $sections->order_by = 1;
            $sections->is_active = 1;
            $sections->save();
            //create column
            $section_template = Section_template::find($request->imagecheck);
            if (!empty($section_template->col_no)) {
                $data = array();
                for ($i = 0; $i < $section_template->col_no; $i++) {
                    $data[] = array(
                        "section_id" => $sections->section_id,
                        "col_name" => "column name {$i}",
                        "is_order" => "{$i}",
                        "is_active" => 1
                    );
                }
                Columns::insert($data);
				return response()->json(['title' => 'success', 'message' => 'New Section has been created.']);
                //return redirect("/administrator/section/{$sections->section_id}/edit")->with('status', 'Profile updated!');
            } else {
                return response()->json(['title' => 'Warning', 'message' => 'Please check Number of Column.']);
            }

        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function list($page_id)
    {
        $page = AdminPages::find($page_id);
        $AppSetting = array(
            "title" => "Section of " . $page->page_name,
            "slug" => "section-list"
        );
        $section = Sections::where("page_id", $page_id)->where("is_active", 1)->orderBy('order_by', 'asc')->get();
		//dd($section);
        return view("administrator.section.list", compact("page_id", "section"), $AppSetting);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $section = Sections::find($id);
        $AppSetting = array(
            "title" => "Section edit " . $section->section_title,
            "slug" => "section-list"
        );
        $SectionTemplate = Section_template::all();
        $pages = AdminPages::where("is_active", 1)->pluck("page_name", "page_id");

        $section_temp = Section_template::where("is_active", 1)->get();
        $product = Product::where("is_active", 1);
        return view("administrator.section.edit", compact("id", "SectionTemplate", "pages", "section_temp", "section", "product"), $AppSetting);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $columns = Columns::where("section_id", $id)->get();
        $section = Sections::where("section_id", $id)->first();
        if ($columns->count() > 0) {
            $section->delete();
            $columns->delete();
        } else {
            $section->delete();
        }
        return Response::json(['title' => 'Success', 'message' => 'Your menu has been remove!']);
    }

    public function sortlist(request $request)
    {
        $this->eventupdate($request->list, 0);
        return response()->json(['title' => 'Success', 'message' => 'Your move is success']);
    }

    public function eventupdate($list, $i)
    {
        foreach ($list as $rows) {
            $i++;
            $rs = Sections::find($rows['id']);
            $rs->update(['order_by' => $i]);
        }
    }
}
