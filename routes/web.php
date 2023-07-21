<?php

use App\Models\Dashboard\Menu_panel;
use App\Models\Dashboard\Submenu_panel;
use App\Models\Menu;
use App\Models\Submenu;
use Illuminate\Support\Facades\Route;

Route::prefix('/')->group(function (){

    $menus    =  Menu::select('slug' , 'class' , 'submenu_route')->get();
    $submenus =  Submenu::select('id' , 'slug' , 'class')->get();

    foreach ($menus as $menu)
    {
        Route::get($menu->slug, [App\Http\Controllers\Site\IndexController::class, $menu->class])->name($menu->slug);

        if($menu->submenu_route == 1){
            foreach($submenus as $submenu) {
                if ($menu->id == $submenu->menu_id) {
                    Route::get($menu->slug.'/'.'{slug}', [App\Http\Controllers\Site\IndexController::class, $submenu->class])->name($submenu->slug);
                }
            }
        }
    }

    Route::get('شرایط-ضوابط'        , [App\Http\Controllers\Site\IndexController::class   , 'terms'])           ->name('شرایط-ضوابط');
    Route::get('course'             , [App\Http\Controllers\Site\CourseController::class  , 'index'])           ->name('course');
    Route::get('contact'            , [App\Http\Controllers\Site\IndexController::class   , 'contact'])         ->name('contact');
    Route::get('privacypolicy'      , [App\Http\Controllers\Site\IndexController::class   , 'privacypolicy'])   ->name('privacypolicy');
    Route::get('careers'            , [App\Http\Controllers\Site\IndexController::class   , 'careers'])         ->name('careers');
    Route::get('categories'         , [App\Http\Controllers\Site\IndexController::class   , 'categories'])      ->name('categories');
    Route::get('faq'                , [App\Http\Controllers\Site\IndexController::class   , 'faq'])             ->name('faq');
    Route::get('lessondetails'      , [App\Http\Controllers\Site\IndexController::class   , 'lessondetails'])   ->name('lessondetails');
    Route::get('shoppingcart'       , [App\Http\Controllers\Site\PriceController::class   , 'shoppingcart'])    ->name('shoppingcart');
    Route::get('checkout'           , [App\Http\Controllers\Site\PriceController::class   , 'checkout'])        ->name('checkout');
    Route::get('pricetable'         , [App\Http\Controllers\Site\PriceController::class   , 'pricetable'])      ->name('pricetable');
    Route::get('recover'            , [App\Http\Controllers\Site\PriceController::class   , 'recover'])         ->name('recover');
    Route::get('mycourse'           , [App\Http\Controllers\Site\CourseController::class  , 'my'])              ->name('mycourse');
    Route::get('coursemain'         , [App\Http\Controllers\Site\CourseController::class  , 'coursemain'])      ->name('coursemain');
    Route::get('coursedetail'       , [App\Http\Controllers\Site\CourseController::class  , 'coursedetail'])    ->name('coursedetail');
    Route::get('coursegrid'         , [App\Http\Controllers\Site\CourseController::class  , 'coursegrid'])      ->name('coursegrid');
    Route::get('studentdetail'      , [App\Http\Controllers\Site\StudentController::class , 'studentdetail'])   ->name('studentdetail');


});


Route::prefix('admin')->middleware(['auth:web' , 'checkAdmin'])->group(function (){


    $menu_panels    =  Menu_panel::select('slug' , 'controller' , 'class' , 'submenu')->whereStatus(4)->get();
    $submenu_panels =  Submenu_panel::select('id' , 'slug' , 'class' , 'controller' , 'method')->whereStatus(4)->get();

    foreach ($menu_panels as $menu_panel)
    {
        Route::get($menu_panel->slug, ['App\Http\Controllers\Admin\\'.$menu_panel->controller, $menu_panel->class])->name($menu_panel->slug);

        if($menu_panel->submenu == 1){
            foreach($submenu_panels as $submenu_panel) {
                if ($menu_panel->id == $submenu_panel->menu_id) {
                    if($submenu_panel->method == 'resource')
                        Route::resource($submenu_panel->slug                , 'App\Http\Controllers\Admin\\'.$submenu_panel->controller);
                    elseif ($submenu_panel->method == 'get')
                        Route::get($submenu_panel->slug.'/'.'{slug}'    , [$submenu_panel->controller.'::class' , $submenu_panel->class])->name($submenu_panel->slug);
                    elseif ($submenu_panel->method == 'post')
                        Route::post($submenu_panel->slug.'/'.'{slug}'   , [$submenu_panel->controller.'::class' , $submenu_panel->class])->name($submenu_panel->slug);
                    elseif ($submenu_panel->method == 'put')
                        Route::put($submenu_panel->slug.'/'.'{slug}'    , [$submenu_panel->controller.'::class' , $submenu_panel->class])->name($submenu_panel->slug);
                    elseif ($submenu_panel->method == 'patch')
                        Route::patch($submenu_panel->slug.'/'.'{slug}'  , [$submenu_panel->controller.'::class' , $submenu_panel->class])->name($submenu_panel->slug);
                    elseif ($submenu_panel->method == 'delete')
                        Route::delete($submenu_panel->slug.'/'.'{slug}' , [$submenu_panel->controller.'::class' , $submenu_panel->class])->name($submenu_panel->slug);
                }
            }
        }
    }

//    Route::get('panel'                            , [App\Http\Controllers\Admin\PanelController::class   , 'index'])->name('/');


    Route::delete('menudashboards'          , [App\Http\Controllers\Admin\MenudashboardController::class    , 'deletemenudashboards'])   ->name('deletemenudashboards');
    Route::delete('submenudashboards'       , [App\Http\Controllers\Admin\SubmenudashboardController::class , 'deletesubmenudashboards'])->name('deletesubmenudashboards');
    Route::delete('permissions'             , [App\Http\Controllers\Admin\PermissionController::class       , 'deletepermissions'])      ->name('deletepermissions');
    Route::delete('roles'                   , [App\Http\Controllers\Admin\RoleController::class             , 'deleteroles'])            ->name('deleteroles');
    Route::delete('deleteadminlevel'        , [App\Http\Controllers\Admin\RoleController::class             , 'deleteadminlevel'])       ->name('deleteadminlevel');
    Route::delete('deleteuser'              , [App\Http\Controllers\Admin\UserController::class             , 'deleteuser'])             ->name('deleteuser');
    Route::delete('deleteslide'             , [App\Http\Controllers\Admin\slideController::class            , 'deleteslide'])            ->name('deleteslide');
    Route::delete('deleteblugs'             , [App\Http\Controllers\Admin\BlugController::class             , 'deleteblugs'])             ->name('deleteblugs');
    Route::delete('deletemenus'             , [App\Http\Controllers\Admin\MenuController::class             , 'deletemenus'])            ->name('deletemenus');
    Route::delete('deletesubmenus'          , [App\Http\Controllers\Admin\SubmenuController::class          , 'deletesubmenus'])         ->name('deletesubmenus');
    Route::delete('deletecustomers'         , [App\Http\Controllers\Admin\CustomerController::class         , 'deletecustomers'])        ->name('deletecustomers');
    Route::delete('deleteportfolios'        , [App\Http\Controllers\Admin\PortfolioController::class        , 'deleteportfolios'])       ->name('deleteportfolios');
    Route::delete('deletecompany'           , [App\Http\Controllers\Admin\CompanyController::class          , 'deletecompany'])          ->name('deletecompany');
    Route::delete('deletecustomertypes'     , [App\Http\Controllers\Admin\CustomertypeController::class     , 'deletecustomertypes'])    ->name('deletecustomertypes');

    Route::post('slides/img'                , [App\Http\Controllers\Admin\MediaController::class            , 'imgupload'])              ->name('img');
    Route::post('gallerypicmanage/img'      , [App\Http\Controllers\Admin\MediaController::class            , 'imgupload'])              ->name('img');
    Route::post('panel/id'                  , [App\Http\Controllers\Admin\PanelController::class            , 'getsubmenu'])             ->name('getsubmenu');
    Route::post('profile/createuser'        , [App\Http\Controllers\Admin\UserController::class             , 'createuser'])             ->name('createuser');

    Route::PATCH('profile/update'           , [App\Http\Controllers\Admin\ProfileController::class          , 'update'])                 ->name('edituser');

});

Route::prefix('/')->group(function (){

    Route::get('login'                  , [App\Http\Controllers\Auth\LoginController::class     , 'showLoginuserForm'])         ->name('login');
    Route::get('logout'                 , [App\Http\Controllers\Auth\LoginController::class     , 'logout'])                    ->name('logout');
    Route::post('login'                 , [App\Http\Controllers\Auth\LoginController::class     , 'userlogin'])                 ->name('userlogin');
    Route::get('register'               , [App\Http\Controllers\Auth\RegisterController::class  , 'showRegistrationuserForm'])  ->name('register');
    Route::get('login/{provider}'           , [App\Http\Controllers\Auth\LoginController::class     , 'redirectToProvider']);
    Route::get('login/{provider}/callback'  , [App\Http\Controllers\Auth\LoginController::class     , 'handleProviderCallback']);
});

Route::prefix('admin')->group(function (){

    Route::get('login'      , [App\Http\Controllers\Auth\LoginController::class , 'showLoginForm']) ->name('panellogin');
    Route::post('login'     , [App\Http\Controllers\Auth\LoginController::class , 'panellogin'])    ->name('panellogin');
    Route::get('logout'     , [App\Http\Controllers\Auth\LoginController::class , 'logout'])        ->name('panellogout');

});

//Auth::routes();
