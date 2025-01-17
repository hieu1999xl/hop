<?php

/*
*
* Frontend Routes
*
* --------------------------------------------------------------------
*/
Route::group(['namespace' => '\Modules\Article\Http\Controllers\Frontend', 'as' => 'frontend.', 'middleware' => ['web','htmlMin'], 'prefix' => ''], function () {

    /*
     *
     *  Posts Routes
     *
     * ---------------------------------------------------------------------
     */
    $module_name = 'posts';
    $controller_name = 'PostsController';
    Route::get("$module_name", ['as' => "$module_name.index", 'uses' => "$controller_name@index"]);
    Route::get("$module_name/{id}/{slug?}", ['as' => "$module_name.show", 'uses' => "$controller_name@show"]);

    /*
     *
     *  Categories Routes
     *
     * ---------------------------------------------------------------------
     */
    $module_name = 'categories';
    $controller_name = 'CategoriesController';
    Route::get("$module_name", ['as' => "$module_name.index", 'uses' => "$controller_name@index"]);
    Route::get("$module_name/{id}/{slug?}", ['as' => "$module_name.show", 'uses' => "$controller_name@show"]);
});

/*
*
* Backend Routes
*
* --------------------------------------------------------------------
*/
Route::group(['namespace' => '\Modules\Article\Http\Controllers\Backend', 'as' => 'backend.', 'middleware' => ['web', 'auth', 'can:view_backend', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath'], 'prefix' => LaravelLocalization::setLocale() . '/admin'], function () {
    /*
    * These routes need view-backend permission
    * (good if you want to allow more than one group in the backend,
    * then limit the backend features by different roles or permissions)
    *
    * Note: Administrator has all permissions so you do not have to specify the administrator role everywhere.
    */

    /*
     *
     *  Posts Routes
     *
     * ---------------------------------------------------------------------
     */
    $module_name = 'posts';
    $controller_name = 'PostsController';
    Route::get("$module_name/index_list",['as' => "$module_name.index_list", 'uses' => "$controller_name@index_list"])->middleware('can:view_posts');
    Route::get("$module_name/index_data", ['as' => "$module_name.index_data", 'uses' => "$controller_name@index_data"]);
    Route::get("$module_name/trashed", ['as' => "$module_name.trashed", 'uses' => "$controller_name@trashed"]);
    Route::patch("$module_name/trashed/{id}", ['as' => "$module_name.restore", 'uses' => "$controller_name@restore"]);
    Route::delete("$module_name/trashed/{id}", ['as' => "$module_name.destroy_trash", 'uses' => "$controller_name@destroy_trash"]);
    Route::resource("$module_name", "$controller_name");

    /*
     *
     *  Categories Routes
     *
     * ---------------------------------------------------------------------
     */
    $module_name = 'categories';
    $controller_name = 'CategoriesController';
    Route::get("$module_name/index_list", ['as' => "$module_name.index_list", 'uses' => "$controller_name@index_list"])->middleware('can:view_categories');
    Route::get("$module_name/index_data", ['as' => "$module_name.index_data", 'uses' => "$controller_name@index_data"]);
    Route::get("$module_name/trashed", ['as' => "$module_name.trashed", 'uses' => "$controller_name@trashed"]);
    Route::patch("$module_name/trashed/{id}", ['as' => "$module_name.restore", 'uses' => "$controller_name@restore"]);
    Route::delete("$module_name/trashed/{id}", ['as' => "$module_name.destroy_trash", 'uses' => "$controller_name@destroy_trash"]);
    Route::resource("$module_name", "$controller_name");

    /*
 *
 *  Menu Routes
 *
 * ---------------------------------------------------------------------
 */
    $module_name = 'menus';
    $controller_name = 'MenuController';
    Route::get("$module_name/index_list", ['as' => "$module_name.index_list", 'uses' => "$controller_name@index_list"]);
    Route::get("$module_name/getMenusParent/{level}", ['as' => "$module_name.menus_parent", 'uses' => "$controller_name@getMenusParent"]);
    Route::get("$module_name/index_data", ['as' => "$module_name.index_data", 'uses' => "$controller_name@index_data"]);
    Route::get("$module_name/trashed", ['as' => "$module_name.trashed", 'uses' => "$controller_name@trashed"]);
    Route::patch("$module_name/trashed/{id}", ['as' => "$module_name.restore", 'uses' => "$controller_name@restore"]);
    Route::delete("$module_name/trashed/{id}", ['as' => "$module_name.destroy_trash", 'uses' => "$controller_name@destroy_trash"]);
    Route::resource("$module_name", "$controller_name");


/*
 *
 *  Menu Routes
 *
 * ---------------------------------------------------------------------
 */
    $module_name = 'jobs';
    $controller_name = 'JobController';
    Route::get("$module_name/index_list", ['as' => "$module_name.index_list", 'uses' => "$controller_name@index_list"]);
    Route::get("$module_name/index_data", ['as' => "$module_name.index_data", 'uses' => "$controller_name@index_data"]);
    Route::get("$module_name/trashed", ['as' => "$module_name.trashed", 'uses' => "$controller_name@trashed"]);
    Route::patch("$module_name/trashed/{id}", ['as' => "$module_name.restore", 'uses' => "$controller_name@restore"]);
    Route::delete("$module_name/trashed/{id}", ['as' => "$module_name.destroy_trash", 'uses' => "$controller_name@destroy_trash"]);
    Route::resource("$module_name", "$controller_name");

/*
 *
 *  Upload Image Routes
 *
 * ---------------------------------------------------------------------
 */
    $module_name = 'imgupload';
    $controller_name = 'ImgUploadController';
    Route::get("$module_name/index_list", ['as' => "$module_name.index_list", 'uses' => "$controller_name@index_list"]);
    Route::get("$module_name/index_data", ['as' => "$module_name.index_data", 'uses' => "$controller_name@index_data"]);
    Route::get("$module_name/trashed", ['as' => "$module_name.trashed", 'uses' => "$controller_name@trashed"]);
    Route::patch("$module_name/trashed/{id}", ['as' => "$module_name.restore", 'uses' => "$controller_name@restore"]);
    Route::delete("$module_name/trashed/{id}", ['as' => "$module_name.destroy_trash", 'uses' => "$controller_name@destroy_trash"]);
    Route::resource("$module_name", "$controller_name");

Route::post("$module_name/set_slide", ['as' => "$module_name.set_slide", 'uses' => "$controller_name@setPositionSlide"]);

});
