<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
Route::get('/', 'HomeController@index');
Route::any('/search','HomeController@search');
Route::group(['prefix'=>'/{slug}'],function() {
    Route::get('/', 'HomeController@content');
    Route::get('/course/{id}', 'HomeController@course');
});
Route::group(['prefix'=>'/student'],function() {
    Route::get('/login', 'StudentController@index');
    Route::post('/checkLogin', 'StudentController@checkLogin');
    Route::get('/register', 'StudentController@register');
    Route::post('/store', 'StudentController@store');
    Route::group(['prefix'=>'/dashboard'],function() {
        Route::get('/', 'StudentController@dashboard');
        Route::get('/course', 'StudentController@course');
        Route::group(['prefix'=>'/profiles'],function() {
            Route::get('/', 'StudentController@profiles');
            Route::post('/{id}', 'StudentController@update');
        });
        Route::group(['prefix'=>'/messages'],function() {
            Route::get('/', 'StudentController@messages');
            Route::any('/{id}', 'StudentController@readmessages');
        });
    });
});
Route::get('/coursetopics', 'CourseController@coursetopics');
Route::get('/practice', 'CourseController@practice');
Route::get('/exam', 'CourseController@exam');
Route::get('/certified', 'CourseController@certified');
Route::get('/onlinecertified', 'CourseController@onlinecertified');
Route::get('/whycertified', 'CourseController@whycertified');
Route::get('/resources', 'CourseController@resources');
Route::get('/about', 'HomeController@about');
Route::get('/register', 'HomeController@register');
Route::get('/contact', 'HomeController@contact');

Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix'=>'administrator'],function(){
        Route::resource('roles','administrator\RoleController');
        Route::resource('users','administrator\UserController');
        Route::group(['prefix'=>'/menu'],function() {
            Route::get('/', 'administrator\MenuController@index');
            Route::get("/show", "administrator\MenuController@show");
            Route::get("/create", "administrator\MenuController@create");
            Route::post("/store",['as' => 'menu.store', 'uses' =>"administrator\MenuController@store"]);
            Route::get("{id}/edit",['as' => 'menu.edit', 'uses' =>"administrator\MenuController@edit"]);
            Route::PUT("/update",['as' => 'menu.update', 'uses' =>"administrator\MenuController@update"]);
            Route::PUT("/eventChange/{id}",['as' => 'menu.eventChange', 'uses' =>"administrator\MenuController@eventChange"]);
            Route::DELETE("/destroy/{id}",['as' => 'menu.destroy', 'uses' =>"administrator\MenuController@destroy"]);

        });
        //dasbhard
        Route::get("/dashboard","administrator\DashboardController@index");
        //pages
		//Route::resource('pages', 'administrator\AdminPagesController');
        Route::group(['prefix'=>'/pages'],function(){
            Route::get("/", ['as' => 'pages.index', 'uses' => "administrator\AdminPagesController@index"]);
            Route::any("/filter", ['as' => 'pages.filter', 'uses' => "administrator\AdminPagesController@index"]);
            Route::get('/create', 'administrator\AdminPagesController@create');
            Route::post("/store", ['as' => 'pages.store', 'uses' => "administrator\AdminPagesController@store"]);
            Route::get("/edit/{id}", ['as' => 'pages.edit', 'uses' => "administrator\AdminPagesController@edit"]);
             Route::patch("/edit/{id}", ['as' => 'pages.update', 'uses' => "administrator\AdminPagesController@update"]);
            Route::delete("/destroy/{id}", ['as' => 'pages.destroy', 'uses' => "administrator\AdminPagesController@destroy"]);
            Route::resource("/{id}/slide", "administrator\SlidepagesController");
			Route::get('/{id}/section/list', 'administrator\SectionController@list');
        });
        //sub pages
        Route::group(['prefix'=>'/subpages'],function(){
            Route::get("/", "administrator\SuppagesController@index");
            Route::get("/create", "administrator\SuppagesController@create");
            Route::post("/store",['as' => 'subpages.store', 'uses' =>"administrator\SuppagesController@store"]);
            Route::get("/edit/{id}",['as' => 'subpages.edit', 'uses' =>"administrator\SuppagesController@edit"]);
            Route::PUT("/edit/{id}",['as' => 'subpages.update', 'uses' =>"administrator\SuppagesController@update"]);
            Route::delete("/destroy/{id}",['as' => 'subpages.destroy', 'uses' =>"administrator\SuppagesController@destroy"]);
        });
        //section

        Route::group(['prefix'=>'/section'],function(){
            Route::get('/', 'administrator\SectionController@listprogress');
            Route::get('/{sectionID}', 'administrator\SectionController@index');
            Route::post('/sortlist', 'administrator\SectionController@sortlist');
            Route::get('/{sectionID}/create', 'administrator\SectionController@create');
            Route::post('/{sectionID}', 'administrator\SectionController@store');
            Route::any('/{sectionID}/edit', 'administrator\SectionController@edit');
            Route::put('/{sectionID}/update', 'administrator\SectionController@update');
            Route::delete('/{sectionID}/delete', 'administrator\SectionController@destroy');
            Route::get('/{sectionID}/checksection', 'administrator\SectionController@checksection');
            Route::get('/{sectionID}/loadpartial', 'administrator\ColumnsController@index');

        });
        Route::get("columns/{id}","administrator\ColumnsController@index");
        Route::post("columns/{id}","administrator\ColumnsController@store");
        Route::put("columns/{id}/{colID}","administrator\ColumnsController@update");
        //category
        Route::get("/category","administrator\CategoriesController@index");
        Route::get("/category/create","administrator\CategoriesController@create");
        Route::post("/category",['as' => 'category.store', 'uses' =>"administrator\CategoriesController@store"]);
        Route::get("/category/edit/{id}","administrator\CategoriesController@edit");
        Route::put("/category/edit/{id}/update","administrator\CategoriesController@update");
        Route::delete("/category/{id}/destroy",['as' => 'category.destroy', 'uses' =>"administrator\CategoriesController@destroy"]);
        //product
        Route::group(['prefix'=>'products'],function(){
            Route::get("/","administrator\ProductController@index");
            Route::Any("/",['as' => 'products.filter', 'uses' =>"administrator\ProductController@index"]);
            Route::get("/create","administrator\ProductController@create");
            Route::post("/store",['as' => 'products.store', 'uses' =>"administrator\ProductController@store"]);
            Route::get("/edit/{id}",['as' => 'products.edit', 'uses' =>"administrator\ProductController@edit"]);
            Route::PATCH("/edit/{id}",['as' => 'products.update', 'uses' =>"administrator\ProductController@update"]);
            Route::delete("/destroy/{id}",['as' => 'products.destroy', 'uses' =>"administrator\ProductController@destroy"]);

            Route::get("/comparation/{id}",['as' => 'products.comparation', 'uses' =>"administrator\ProductController@comparation"]);
            Route::PATCH("/comparation/{id}",['as' => 'products.setup', 'uses' =>"administrator\ProductController@setup"]);

            //version
            Route::group(['prefix'=>'version/{Pid}'],function() {
                Route::get("/", ['as' => 'version.index', 'uses' =>"administrator\VersionController@index"]);
                Route::get("/create", ['as' => 'version.create', 'uses' =>"administrator\VersionController@create"]);
                Route::post("/store", ['as' => 'version.store', 'uses' =>"administrator\VersionController@store"]);
                Route::get("/{id}/edit", ['as' => 'version.edit', 'uses' =>"administrator\VersionController@edit"]);
                Route::PATCH("/{id}/update",['as' => 'version.update', 'uses' =>"administrator\VersionController@update"]);
                Route::delete("/destroy/{id}",['as' => 'version.destroy', 'uses' =>"administrator\VersionController@destroy"]);
            });
            //Feature
            Route::group(['prefix'=>'feature/{Pid}'],function() {
                Route::get("/", ['as' => 'feature.index', 'uses' =>"administrator\FeatureController@index"]);
				Route::Any("/", ['as' => 'feature.filter', 'uses' => "administrator\FeatureController@index"]);
                Route::get("/create", ['as' => 'feature.create', 'uses' =>"administrator\FeatureController@create"]);
                Route::post("/store", ['as' => 'feature.store', 'uses' =>"administrator\FeatureController@store"]);
                Route::get("/{id}/edit", ['as' => 'feature.edit', 'uses' =>"administrator\FeatureController@edit"]);
                Route::PATCH("/{id}/update",['as' => 'feature.update', 'uses' =>"administrator\FeatureController@update"]);
                Route::delete("/destroy/{id}",['as' => 'feature.destroy', 'uses' =>"administrator\FeatureController@destroy"]);
            });
            //matching feature and version
            Route::group(['prefix'=>'matching/{Pid}'],function() {
                Route::get("/", ['as' => 'matching.index', 'uses' =>"administrator\MatchingFeatureVersionController@index"]);
                Route::get("/create", ['as' => 'matching.create', 'uses' =>"administrator\MatchingFeatureVersionController@create"]);
                Route::post("/store", ['as' => 'matching.store', 'uses' =>"administrator\MatchingFeatureVersionController@store"]);
                Route::get("/{id}/edit", ['as' => 'matching.edit', 'uses' =>"administrator\MatchingFeatureVersionController@edit"]);
                Route::PATCH("/{id}/update",['as' => 'matching.update', 'uses' =>"administrator\MatchingFeatureVersionController@update"]);
                Route::delete("/destroy/{id}",['as' => 'matching.destroy', 'uses' =>"administrator\MatchingFeatureVersionController@destroy"]);
            });
        });
        Route::group(['prefix'=>'pricelist'],function(){
            Route::get("/{id}",['as' => 'products.pricelist', 'uses' =>"administrator\PricelistController@index"]);
            Route::get("/{id}/create","administrator\PricelistController@create");
            Route::post("/{id}/store",['as' => 'pricelist.store', 'uses' =>"administrator\PricelistController@store"]);
            Route::Any("/{id}",['as' => 'pricelist.filter', 'uses' =>"administrator\PricelistController@index"]);
            Route::get("/{Pid}/edit/{id}","administrator\PricelistController@edit");
            Route::PATCH("/{Pid}/edit/{id}",['as' => 'pricelist.update', 'uses' =>"administrator\PricelistController@update"]);
            Route::delete("/destroy/{id}",['as' => 'pricelist.destroy', 'uses' =>"administrator\PricelistController@destroy"]);
        });
        Route::group(['prefix'=>'compare'],function(){
            Route::get("/","administrator\CompareController@index");
			Route::Any("/", ['as' => 'compare.filter', 'uses' => "administrator\CompareController@index"]);
            Route::get("/create","administrator\CompareController@create");
            Route::post("/store",['as' => 'compare.store', 'uses' =>"administrator\CompareController@store"]);
            Route::get("/edit/{id}",['as' => 'compare.edit', 'uses' =>"administrator\CompareController@edit"]);
            Route::PATCH("/edit/{id}",['as' => 'compare.update', 'uses' =>"administrator\CompareController@update"]);
        });
        //
        Route::group(['prefix'=>'promotion'],function(){
            Route::post("/tpromotion","administrator\PromotionController@tpromotion");
            Route::get("/","administrator\PromotionController@index");
            Route::get("/create","administrator\PromotionController@create");
            Route::post("/store",['as' => 'promotion.store', 'uses' =>"administrator\PromotionController@store"]);
            Route::get("/edit/{id}","administrator\PromotionController@edit");
            Route::PUT("/edit/{id}/update",['as' => 'promotion.update', 'uses' =>"administrator\PromotionController@update"]);
            Route::delete("/destroy",['as' => 'promotion.destroy', 'uses' =>"administrator\PromotionController@destroy"]);
        });
        //
        Route::get("properties/{id}","administrator\PropertiesController@edit");
        Route::post("properties/{id}","administrator\PropertiesController@update");
    });
});
