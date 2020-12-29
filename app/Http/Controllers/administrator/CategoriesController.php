<?php

namespace App\Http\Controllers\administrator;

use App\Categories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $categories = Categories::orderBy('order_by', 'DESC')->paginate(5);
        $AppSetting = array(
            "title" => "Category List",
            "slug" => "category-list"
        );
        return view("administrator.category.index", compact("categories"), $AppSetting)->with('i', ($request->input('page', 1) - 1) * 5);
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
            "title" => "Category New",
            "slug" => "category-create"
        );
        return view("administrator.category.create", $AppSetting);
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
        $data = array(
            "category_name" => $request->category_name,
            "icon_category" => $request->icon_category,
            "is_active" => $request->is_active,
            "order_by" => $request->order_by
        );
        Categories::create($data);
        return redirect('/administrator/category')->with('success', 'Category created successfully');
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
        $AppSetting = array(
            "title" => "Category Edit",
            "slug" => "category-edit"
        );
        $categories = Categories::find($id);
        return view("administrator.category.edit", compact('id', 'categories'), $AppSetting);
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
        $categories = Categories::find($id);
        $categories->category_name = $request->category_name;
        $categories->icon_category = $request->icon_category;
        $categories->is_active = $request->is_active;
        $categories->order_by = $request->order_by;
        $categories->save();
        return redirect('/administrator/category')->with('success', 'Category has been update successfully');
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
        $rs=Categories::find($id);
        $rs->delete();
        return redirect('/administrator/category')->with('success', 'Category has been delete successfully');
    }
}
