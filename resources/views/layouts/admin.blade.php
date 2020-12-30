<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Administrator | {{$title}}</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport'/>
    <link rel="icon" type="image/x-icon" href="/assets/img/favicon.png" />
    <!-- Fonts and icons -->
    <script src="{{asset("admin/js/plugin/webfont/webfont.min.js")}}"></script>
    <script>
        WebFont.load({
            google: {"families": ["Lato:300,400,700,900"]},
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['{{asset("admin/css/fonts.min.css")}}']
            },
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <script src="{{asset("admin/js/core/jquery.3.2.1.min.js")}}"></script>
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset("admin/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("admin/css/atlantis.min.css")}}">
    <link rel="stylesheet" href="{{asset("admin/css/admin.css")}}">
    @yield("head")
</head>
<body>
<div class="wrapper">
    <div class="main-header">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="blue2">

            <a href="/" class="logo">
                <img src="{{asset("uploads/images/logo-small.png")}}" alt="navbar brand" class="navbar-brand">
            </a>
            <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
            </button>
            <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="icon-menu"></i>
                </button>
            </div>
        </div>
        <!-- End Logo Header -->

        <!-- Navbar Header -->
        <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue">

            <div class="container-fluid">
                <div class="collapse" id="search-nav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/" target="_blank">
									<span style="font-size:13px; margin-right:5px;">
                                    	<span class="fas fa-home"></span>
									</span>
                                Website
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span style="font-size:13px; margin-right:5px;">
                                    	<span class="fas fa-plus"></span>
                                    </span>
                                New
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{url("/administrator/pages/create")}}">Page</a>
                                <a class="dropdown-item" href="{{url("/administrator/products/create")}}">Product</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                    <li class="nav-item dropdown hidden-caret">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                            <div class="avatar-sm">
                                <img src="{{asset("uploads/images/favicon.png")}}" alt="Casbiz"
                                     class="avatar-img rounded-circle">
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-user animated fadeIn">
                            <div class="dropdown-user-scroll scrollbar-outer">
                                <li>
                                    <div class="user-box">
                                        <div class="avatar-lg"><img src="{{asset("uploads/images/favicon.png")}}" alt="image profile" class="avatar-img rounded-circle"></div>
                                        <div class="u-text">
                                            <h4>{{Auth::user()->name}}</h4>
                                            <p class="text-muted">{{Auth::user()->email}}</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </div>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- End Navbar -->
    </div>
    <!-- Sidebar -->
    <div class="sidebar sidebar-style-2" data-background-color="white">
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
            <div class="sidebar-content">
                <div class="user">
                    <div class="avatar-sm float-left mr-2 avatar-xs">
                        <img src="{{URL::to("uploads/images/favicon.png")}}" alt="navbar brand" class="avatar-img rounded-circle">
                    </div>
                    <div class="info">
                        <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                            <span>
                                {{Auth::user()->name}}
                                <span class="user-level">{{Auth::user()->name}}</span>
                            </span>
                        </a>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <ul class="nav nav-primary">
                    <li class="nav-item @if(in_array($slug,['dashboard'])) active @endif">
                        <a href="{{url("/administrator/dashboard")}}">
                            <i class="fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
                    </li>
                    <li class="nav-item @if(in_array($slug,['category-list','product-list','compare-list','product-create','product-edit'])) active @endif">
                        <a data-toggle="collapse" href="#product">
                            <i class="fab fa-product-hunt"></i>
                            <p>Product</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse @if(in_array($slug,['category-list','product-list','compare-list','product-create','product-edit','compare-list'])) show @endif" id="product">
                            <ul class="nav nav-collapse">
                                <li class="@if(in_array($slug,['category-list'])) active @endif">
                                    <a href="{{url("/administrator/category")}}">
                                        <span class="sub-item">All Category</span>
                                    </a>
                                </li>
                                <li class="@if(in_array($slug,['product-list'])) active @endif">
                                    <a href="{{url("/administrator/products")}}">
                                        <span class="sub-item">All Product</span>
                                    </a>
                                </li>
                                <li class="@if(in_array($slug,['product-create'])) active @endif">
                                    <a href="{{url("/administrator/products/create")}}">
                                        <span class="sub-item">Add New</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item @if(in_array($slug,['tour-list'])) active @endif">
                        <a href="{{url("/administrator/promotion")}}">
                            <i class="fas fa-percent text-danger"></i>
                            <p>Promotion</p>
                        </a>
                    </li>
                    <li class="nav-item @if(in_array($slug,['section-list','section-create'])) active @endif">
                        <a data-toggle="collapse" href="#base">
                            <i class="fas fa-grip-horizontal"></i>
                            <p>Section</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse @if(in_array($slug,['section-list','section-create'])) show @endif" id="base">
                            <ul class="nav nav-collapse">
                                <li class="@if(in_array($slug,['section-list'])) active @endif">
                                    <a href="{{url("/administrator/section")}}">
                                        <span class="sub-item">All Section</span>
                                    </a>
                                </li>
                                <li class="@if(in_array($slug,['section-create'])) active @endif">
                                    <a href="components/buttons.html">
                                        <span class="sub-item">Add New</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item @if(in_array($slug,['page-list','page-create','sub-pages'])) active @endif">
                        <a data-toggle="collapse" href="#pages">
                            <i class="fas fa-swatchbook"></i>
                            <p>Pages</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse  @if(in_array($slug,['page-list','page-create','sub-pages'])) show @endif" id="pages">
                            <ul class="nav nav-collapse">
                                <li class="@if($slug=='page-list')active @endif">
                                    <a href="{{url("/administrator/pages")}}">
                                        <span class="sub-item">All Pages</span>
                                    </a>
                                </li>
                                <li class="@if(in_array($slug,['page-create'])) active @endif">
                                    <a href="{{url("/administrator/pages/create")}}">
                                        <span class="sub-item">New Pages</span>
                                    </a>
                                </li>
                                <li class="@if($slug=='sub-pages')active @endif">
                                    <a href="{{url("/administrator/subpages")}}">
                                        <span class="sub-item">Sub Pages</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item @if(in_array($slug,['menu'])) active @endif">
                        <a href="{{asset("/administrator/menu")}}">
                            <i class="fas fa-stream"></i>
                            <p>Menu</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#settings">
                            <i class="fas fa-cogs"></i>
                            <p>Setting</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="settings">
                            <ul class="nav nav-collapse">
                                    <li>
                                        <a href="{{url("administrator/properties/1")}}">
                                            <span class="sub-item">Properties</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url("administrator/users")}}">
                                            <span class="sub-item">Users</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url("administrator/roles")}}">
                                            <span class="sub-item">
                                                Roles
                                            </span>
                                        </a>
                                    </li>
                            </ul>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <!-- End Sidebar -->
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">{{$title}}</h4>
                </div>
                @yield('content')
            </div>
        </div>
    </div>
</div>
<!--   Core JS Files   -->
<script src="{{asset("admin/js/core/popper.min.js")}}"></script>
<script src="{{asset("admin/js/core/bootstrap.min.js")}}"></script>

<!-- jQuery UI -->
<script src="{{asset("admin/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js")}}"></script>
<script src="{{asset("admin/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js")}}"></script>

<!-- jQuery Scrollbar -->
<script src="{{asset("admin/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js")}}"></script>

<!-- Bootstrap Notify -->
<script src="{{asset("admin/js/plugin/bootstrap-notify/bootstrap-notify.min.js")}}"></script>

<!-- Sweet Alert -->
<script src="{{asset("admin/js/plugin/sweetalert/sweetalert.min.js")}}"></script>

<!-- Atlantis JS -->
<script src="{{asset("admin/js/atlantis.min.js")}}"></script>
<script src="//cdn.jsdelivr.net/npm/nestable2@1.6.0/jquery.nestable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var updateOutput = function (e) {
            var list = e.length ? e : $(e.target), output = list.data('output');

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{url("/administrator/section/sortlist")}}",
                method: "POST",
                data: {
                    list: list.nestable('serialize')
                },
                success: function (data) {
                    msg(data);
                }
            }).fail(function(jqXHR, textStatus, errorThrown){
                alert("Unable to save new list order: " + errorThrown);
            });
        };
        $('#nestable3').nestable({
            maxDepth: 1
        }).on('change', updateOutput);
        $(".btn-section-delete").on("click",function(){
            elem=$(this).parent().parent().parent().parent().parent();
            id=$(this).attr("data-id");
            url="/administrator/section/"+id+"/delete";
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this data!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            url:url,
                            type:'delete',
                            success:function(){
                                swal("testing", {
                                    icon: "success",
                                });
                                elem.remove();
                            }
                        });
                    }
                });
        });
    });
    function msg(data){
        $.notify({
            icon: 'flaticon-alarm-1',
            title:data.title,
            message: data.message,
        },{
            type: 'info',
            placement: {
                from: "bottom",
                align: "right"
            },
            time: 1000,
        });
    }
</script>
@yield("script")
</body>
</html>
