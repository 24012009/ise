<?php

namespace App;

use App\properties;
use App\Menu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class Module extends Model
{
    //get properties data
    public static function getProperties()
    {
        return properties::first();
    }

    //get menu data
    public static function getMenu($parent_id = null, $slug_url=null,$is_sub)
    {
        $menu = new Menu();
        $rs = DB::table('menu')
            ->where('parent_id', $parent_id)
            ->where('is_active', 1)
            ->orderBy('order_by', 'asc')
            ->get();
            $menuHtml = "";
            $fullpath=$slug_url;
            foreach ($rs as $i=>$row) {
                $parent_id = $row->menu_id;
                $haschild=($menu->checkParent($parent_id)>0)?"":"";
                $url=!empty($row->custom_slug)?url("{$row->custom_slug}"):url("{$row->base_slug}");
                $class=($fullpath==$url)?"nav-link active":"nav-link";
                if($menu->checkParent($parent_id) > 0) {
                    $menuHtml.="<li class='{$class}'>
                    <a href='#'>{$row->menu_name} <i class='bi bi-caret-down-fill'></i></a>";
                    $menuHtml .= "<div class='dropdown'><ul>";
                    $menuHtml .= (new static)->getMenu($parent_id,$slug_url,1);
                    $menuHtml .= "</ul><div class='arrow'></div></div>";
                }else{
                    $sub=($is_sub==1)?'dropdown-link':'nav-link';
                    $menuHtml.="<li class='{$sub}'>
                    <a href='{$url}'>{$row->menu_name}</a>";
                }
                $menuHtml .= "</li>";
            }
        return $menuHtml;
    }
}
