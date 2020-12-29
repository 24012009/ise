
//set padding top of main slide
$(window).resize(function() {
    var $height=$("#header").height();
    var width = $(window).width();
    var height = $(window).height();
    $("#main-slide").attr("style","padding-top:"+$height+"px");
});

$(window).on('load', function() {
    var $height=$("#header").height();
    var width = $(window).width();
    var height = $(window).height();
    $("#main-slide").attr("style","padding-top:"+$height+"px");
});

$(".ise-custom-tabs li a").on("click",function(){
    $this=$(this);
    $(".ise-custom-tabs li").removeClass("active");
    $(".ise-custom-tabs li a").removeClass("active");
    $(".ise-custom-tabs li a").attr("data-active",0);
    $(this).addClass("active");
    $(this).attr("data-active",1);
    $(this).parent().addClass("active");
});

$.fn.activeccustomizetable=function(){
    $(".ise-custom-tabs li").each(function(i, li){
        $active=  $(li).find("a").attr("data-active");
        if($active==1) {
            $(li).addClass("active");
            $(li).find("a").addClass("active");
        }else{
            $(li).removeClass("active");
            $(li).find("a").removeClass("active");
        }
    });
}
// $(".nav-item").mouseout(function() {
//     $(".nav-item").removeClass("show");
//     $(".nav-item").find("ul").removeClass("show");
// });
// $(".nav-item").hover(function(){
//     $this=$(this);
//     $hasSub=$(this).find("ul");
//     $(".nav-item").removeClass("show");
//     $(".nav-item").find("ul").removeClass("show");
//    if($hasSub.length>0){
//        $this.addClass("show");
//        $hasSub.addClass("show");
//    }
// });
