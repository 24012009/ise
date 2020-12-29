<ol class="dd-list">
    {!! $menuList !!}
</ol>
<!-- Modal -->
<div class="modal fade" id="dialogMenu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-sm btn-update" >Update</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#nestable3').nestable({
            group: 1,
        }).on('change', updateOutput);
        /**
         * Event on Click Add New
         * */
        $(".btn-edit").on("click", function () {
            id = $(this).attr("data-id");
            url = "{{asset("administrator/menu")}}/" + id+"/edit";
            dialog_modal("#dialogMenu", url);
        });

        //
        $(".button-delete").on("click", function () {
            id = $(this).attr("data-id");
            swal("Warring!","Are you sure you want to destroy this menu?",'warning', {
                buttons: {
                    cancel: "No",
                    catch: {
                        text: "Yes",
                        value: "yes",
                    }
                },
            }).then((value) => {
                switch (value) {
                    case "No":
                        break;
                    case "yes":
                        url = "menu/destroy/"+id;
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            url: url,
                            type: 'DELETE',
                            dataType: "JSON",
                            success: function (result){
                                reload();
                                msg(result);
                            }
                        });
                        break;
                }
            });
        });
        $(".btn-update").on("click",function(){
           $("#frmUpdate").submit();
        });
    });
    function dialog_modal($element,$url){
        $('.modal-body').html("");
        $('.modal-title').text('Edit Menu ');
        $('.modal-body').load($url);
        $($element).modal('show');
    }
    function frmUpdate(frm){
        $(frm).on('submit', function (e) {
            e.preventDefault();
            formData = new FormData($(this)[0]);
            url = $(this).attr('action');
            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                async: false,
                success: function () {
                    reload();
                    $("#dialogMenu").modal('hide');
                },
                error: function (result) {
                    setTimeout(function () {
                    }, 500);
                    return false;
                },
                cache: false,
                contentType: false,
                processData: false
            });
            return false;
        });
    }
</script>
