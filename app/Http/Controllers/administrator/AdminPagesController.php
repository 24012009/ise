<?php

namespace App\Http\Controllers\administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;
use App\Rules\pages;
use Spatie\Permission\Models\Permission;
use App\AdminPages;
use App\Template;
use DB;
use File;
class AdminPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
//        $this->middleware('permission:pages-list|pages-create|pages-edit|pages-delete', ['only' => ['index', 'store']]);
//        $this->middleware('permission:pages-create', ['only' => ['create', 'store']]);
//        $this->middleware('permission:pages-edit', ['only' => ['edit', 'update']]);
//        $this->middleware('permission:pages-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      //
      $input=$request->all();
      $pages = AdminPages::where(function ($q) use ($input) {
          if(!empty($input['pageName'])){
			  $pageName=isset($input['pageName'])?$input['pageName']:"";
              $q->where("page_name","like","%{$pageName}%");
          }
          if(!empty($input['sl_template'])){
              $q->where("temp_id",$input['sl_template']);
          }
      })->orderBy('page_id', 'DESC')->paginate(10)->setPath ( '' );

	  $pages->appends (['q' =>isset($input['page'])?$input['page']:null]);
      $template=Template::where("is_active",1)->pluck("template_name","temp_id");
      $AppSetting = array(
          "title" => "Pages Management",
          "slug" => "page-list"
      );
	if ($pages->count()> 0){
		return view ( 'administrator.pages.index',compact('template'),$AppSetting)->with("data",$pages);
	}else{
		return view ( 'administrator.pages.index',compact('template'),$AppSetting)->withMessage ( 'No Details found. Try to search again !' );
	}
  }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $permission = Permission::get();
        $template = Template::orderBy("order_by",'asc')->pluck("template_name", "temp_id");
        $AppSetting = array(
            "title" => "Pages Management",
            "slug" => "page-create"
        );
        return view("administrator.pages.create", compact("permission", "template"), $AppSetting);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        $request->validate([
            'page_name' => 'required|unique:pages',
            'order_by' => 'required',
            'is_active' => 'required'
        ]);
        if ($request->hasFile('og_image') == true) {
            $imagePath = $request->file('og_image');
            $imageName = time() . '.' . $imagePath->getClientOriginalName();
            $imagePath->move(public_path('uploads/seo'), $imageName);
            $data = array(
                "temp_id" => $input['temp_id'],
                "page_name" => $input['page_name'],
                "sub_title" => $input['sub_title'],
                "slug" => $this->sluggenerator($input['slug']),
                "base_url" =>$this->sluggenerator($input['sub_title']),
                'og_image' => 'uploads/seo/' . $imageName,
                'og_title' => $input['title_social'],
                'og_description' => $input['txt_description'],
                'meta_keyword' => $input['tags'],
                'order_by' => $input['order_by'],
                'is_active' => $input['is_active']
            );
        } else {
            $data = array(
                "temp_id" => $input['temp_id'],
                "page_name" => $input['page_name'],
                "sub_title" => $input['sub_title'],
                "slug" => $this->sluggenerator($input['slug']),
                "base_url" => $this->baseURL($input['sub_title']),
                'og_title' => $input['title_social'],
                'og_description' => $input['txt_description'],
                'meta_keyword' => $input['tags'],
                'order_by' => $input['order_by'],
                'is_active' => $input['is_active']
            );
        }
        AdminPages::create($data);
        return redirect('/administrator/pages')->with('success', 'Page created successfully');
    }

    public function sluggenerator($subtitle)
    {
        $slug = str_replace(" ", "-", strtolower($subtitle));
        return $slug;
    }

    public function baseURL($subtitle)
    {
        $slug = str_replace(" ", "-", strtolower($subtitle));
        $domain = $_SERVER['SERVER_NAME'];
        $basURL = $domain . '/' . $slug;
        return $basURL;
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $pages = AdminPages::where("page_id", $id)->first();
        $template = Template::orderBy("order_by",'asc')->pluck("template_name", "temp_id");
        $AppSetting = array(
            "title" => "Edit page",
            "slug" => "pages"
        );
        return view("administrator.pages.edit", compact("pages", "template"), $AppSetting);
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
        //
        $input = $request->all();
        $page = AdminPages::find($id);
        $request->validate([
            'page_name' =>'required',
            'order_by' => 'required',
            'is_active' => 'required'
        ]);
        if ($request->hasFile('og_image') == true) {
            //delete old image
            if(!empty($page->og_image)) {
                $image_path = $page->og_image;
                if(File::exists($image_path)) {
                    File::delete($image_path);
                }
            }
            //update new image
            $imagePath = $request->file('og_image');
            $imageName = time() . '.' . $imagePath->getClientOriginalName();
            $imagePath->move(public_path('uploads/seo'), $imageName);

            $page->temp_id = $input['temp_id'];
            $page->page_name = $input['page_name'];
            $page->sub_title = $input['sub_title'];
            $page->slug = $this->sluggenerator($input['slug']);
            $page->base_url =$this->sluggenerator($input['sub_title']);
            $page->og_image='uploads/seo/' . $imageName;
            $page->og_title = $input['title_social'];
            $page->og_description = $input['txt_description'];
            $page->meta_keyword = $input['tags'];
            $page->order_by = $input['order_by'];
            $page->is_active = $input['is_active'];
        } else {
            $page->temp_id = $input['temp_id'];
            $page->page_name = $input['page_name'];
            $page->sub_title = $input['sub_title'];
            $page->slug = $this->sluggenerator($input['slug']);
            $page->base_url = $this->baseURL($input['sub_title']);
            $page->og_title = $input['title_social'];
            $page->og_description = $input['txt_description'];
            $page->meta_keyword = $input['tags'];
            $page->order_by = $input['order_by'];
            $page->is_active = $input['is_active'];
        }
        $page->save();
        return redirect('/administrator/pages')->with('success', 'Page updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $pages=AdminPages::find($id);

            $pages->delete();
        return redirect()->route('pages.index')
            ->with('success','Page deleted successfully');
    }
}
