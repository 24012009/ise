<?php

namespace App\Http\Controllers\administrator;
use App\Http\Controllers\Controller;
use App\Menu;
use App\link_target;
use App\menu_block;
use App\AdminPages;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:menu-list|menu-create|menu-edit', ['only' => ['index','show']]);
         $this->middleware('permission:menu-create', ['only' => ['create','store']]);
         $this->middleware('permission:menu-edit', ['only' => ['edit','update']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $menu=Menu::get();
        $orderby=$menu->count()+1;
        $page=AdminPages::pluck("page_name","page_id");
        $link_target=link_target::pluck("description","target_id");
        $menu_block=menu_block::pluck("block","block_id");
        $AppSetting = array(
            "title" => "Menu Management",
            "slug" => "menu"
        );
        return view('administrator.menu.index',compact('menu','link_target','menu_block','page','orderby'),$AppSetting);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('administrator.menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sl_page=$request->input("sl_page");
        $sl_target=($request->input("sl_target")!="")?$request->input("sl_target"):"none";
        $sl_block=$request->input("sl_block");
        $txt_menuName=$request->input("txt_menuName");
        $txt_reURL=$request->input("txt_baseURL");
        $txt_icon=$request->input('txt_icon');
        $txt_orderby=$request->input("txt_orderby");
        $sl_status=$request->input("sl_status");
        //
        $page=AdminPages::where("page_id",$sl_page)->first();
        $data=array(
            "page_id"=>$sl_page,
            "parent_id"=>0,
            "link_target_id"=>$sl_target,
            "block_id"=>$sl_block,
            "menu_name"=>$txt_menuName,
            "base_slug"=>$page->slug,
            "custom_slug"=>$txt_reURL,
            "icon_menu"=>$txt_icon,
            "order_by"=>$txt_orderby,
            "is_active"=>1
        );
        Menu::create($data);
        $msg = response()->json([
            'title' => "Success",
            'message' => 'Your menu has been Save!',
            'is_status' => 'success'
        ]);
        return $msg;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $rs=New Menu();
        $menuList=$rs->getMenu(0);
        return view("administrator.menu.load",compact("menuList"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($menu_id)
    {
        //
        $menu=Menu::find($menu_id);
        $page=AdminPages::where("is_active",1)->get()->pluck("page_name","page_id");
        $link_target=link_target::get()->pluck("target","target_id");
        $menu_block=menu_block::get()->pluck("block","block_id");
        return view("administrator.menu.frm",compact("menu_id","menu","page","link_target","menu_block"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $list=$request->input("list");
        $rs=New Menu();
        $rs->updateEvent($list,$parent_id=0,$m_order=0);
        $msg = response()->json([
            'title' => "Success",
            'message' => 'Your menu has been moved!',
            'is_status' => 'success'
        ]);
        return $msg;
    }
    public function eventChange(Request $request, $id){
        $rs=Menu::find($id);
        $rs->page_id=$request->sl_page;
        $rs->link_target_id=$request->sl_target;
        $rs->block_id=$request->sl_block;
        $rs->menu_name=$request->txt_menuName;
        $rs->custom_slug=$request->custom_slug;
        $rs->save();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu=Menu::find($id);
        $childs=$menu->where("parent_id",$id)->count();
        if($childs>0){
            $msg = response()->json([
                'title' => "Error",
                'message' => 'You can not remove this menu because it has sub!',
                'is_status' => 'warning'
            ]);
        }else{
            Menu::where("menu_id",$id)->delete();
            $msg = response()->json([
                'title' => "Success",
                'message' => 'Your menu has been remove!',
                'is_status' => 'success'
            ]);
        }
        return $msg;
    }
}
