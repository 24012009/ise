{!! Form::open(array('route' =>['menu.eventChange',$menu_id],'method'=>'PUT',"id"=>'frmUpdate',"name"=>"frmUpdate")) !!}
<div class="form-row">
    <div class="form-group col-md-12">
        <label for="email2">Choose page</label>
        {!! Form::select('sl_page',$page,$menu->page_id, array('class' =>'selectpicker show-menu-arrow form-control','data-style'=>'btn-light btn-border','data-live-search'=>'true')) !!}
    </div>
    <div class="form-group col-md-12">
        <label for="lbl_menuName">Menu name</label>
        <input type="text" name="txt_menuName" value="{{$menu->menu_name}}" class="form-control" id="menuName">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="email2">Link target</label>
        {!! Form::select('sl_target',$link_target,$menu->link_target_id, array('class' =>'selectpicker show-menu-arrow form-control','data-style'=>'btn-light btn-border')) !!}
    </div>
    <div class="form-group col-md-6">
        <label for="email2">Menu position</label>
        {!! Form::select('sl_block',$menu_block,$menu->block_id, array('class' =>'selectpicker show-menu-arrow form-control','data-style'=>'btn-light btn-border','data-live-search'=>'true')) !!}
    </div>
    <div class="form-group col-md-6">
        <label for="lbl_baseURL">Customize URL</label>
        <input type="text" name="custom_slug" value="{{$menu->custom_slug}}" class="form-control">
    </div>
    <div class="form-group col-md-6">
        <label for="lbl_icon">Icon</label>
        <input type="text" name="txt_icon" class="form-control">
        <input type="hidden" name="txt_orderby" value="{{$menu->order_by}}" class="form-control">
    </div>
</div>
{!! Form::close() !!}
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('select').selectpicker();
        frmUpdate("#frmUpdate");
    });

</script>
