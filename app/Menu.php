<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Menu extends Model
{
    //
    protected $table = 'menu';
    protected $primaryKey="menu_id";
    protected $fillable=[
        'parent_id','page_id','link_target_id','block_id','menu_name','base_slug',
        'custom_slug','icon_menu','custom_field','order_by','is_active'];


    public function getMenu($parent_id = null)
    {
        $rs = DB::table("menu")
            ->where("parent_id", $parent_id)
            ->where("is_active", 1)
            ->orderBy("order_by", "asc")
            ->get();
        $menuHtml = "";
        foreach ($rs as $rows) {
            $parent_id = $rows->menu_id;
            $menuHtml .= "<li class='dd-item dd3-item' data-id='{$rows->menu_id}'>
                            <div class=\"dd-handle dd3-handle\">Drag</div>
                            <div class='dd3-content'>
                                <div class=\"row\">
                                    <div class=\"col-lg-9 mt-1\">
                                    {$rows->menu_name}
                                    </div>
                                     <div class=\"col-lg-3 text-right\">
                                        <a href='javascript:void(0);' data-id='{$rows->menu_id}' class='btn btn-primary btn-xs btn-edit mx-2'><i class=\"fas fa-edit\"></i></a>
                                        <a href=\"javascript:void(0);\" data-id='{$rows->menu_id}' class=\"button-delete btn btn-danger btn-xs button-delete pull-right\" data-toggle=\"tooltip\"
                                           data-placement=\"top\" title=\"Remove\">
                                            <i class=\"fas fa-trash\"></i>
                                        </a>
                                     </div>
                                </div>
                            </div>";
            if ($this->checkParent($parent_id) > 0) {
                $menuHtml .= "<ol class='dd-list'>";
                $menuHtml .= $this->getMenu($parent_id);
                $menuHtml .= "</ol>";
            }
            $menuHtml .= "</li>";
        }
        return $menuHtml;
    }

    public function checkParent($parent_id){
        $rs=DB::table("menu")
            ->where("parent_id",$parent_id)
            ->where("is_active",1)
            ->orderBy("order_by","asc")
            ->count();
        return $rs;
    }

    public function saveData($sl_page,$sl_target,$sl_block,$txt_reName,$txt_reURL,$txt_icon,$txt_orderby,$sl_status){
        $current_time = Carbon::now()->toDateTimeString();
        $user = Auth::user();
        $data=array(
            "pages_id"=>$sl_page,
            "parent_id"=>0,
            "target_id"=>$sl_target,
            "block_id"=>$sl_block,
            "reName"=>$txt_reName,
            "reURL"=>$txt_reURL,
            "icon_menu"=>$txt_icon,
            "order_by"=>$txt_orderby,
            "is_active"=>$sl_status,
            "created_by"=>$user->id,
            "created_at"=>$current_time
        );
        DB::table("menu")->insert($data);
    }

    public function updateEvent($list,$parent_id,$m_order){
        if (is_array($list) || is_object($list)) {
            foreach ($list as $item) {
                $m_order++;
                $rs = New Menu();
                $data = array("parent_id" => $parent_id, "order_by" => $m_order);
                DB::table("menu")->where("menu_id", $item["id"])->update($data);
                $rs->updateEvent($item["id"], $parent_id, $m_order);
                if (array_key_exists("children", $item)) {
                    $rs->updateEvent($item["children"], $item["id"], $m_order);
                }
            }
        }
    }
}
