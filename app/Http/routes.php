<?php
/*
  |--------------------------------------------------------------------------
  | Routes File
  |--------------------------------------------------------------------------
  |
  | Here is where you will register all of the routes in an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */



/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | This route group applies the "web" middleware group to every route
  | it contains. The "web" middleware group is defined in your HTTP
  | kernel and includes session state, CSRF protection, and more.
  |
 */

Route::group(['middleware' => ['web']], function () {
    Route::get('/login', array('uses' => 'UsersController@Login'));
    Route::post('/login', array('uses' => 'UsersController@auth'));

    Route::get('/login1', array('uses' => 'UsersController@Login1'));
    Route::post('/login1', array('uses' => 'UsersController@auth1'));

    Route::get('/confirmation/{token}', array('uses' => 'UsersController@getConfirmation','as'=>'confirmation'));
    Route::get('/register', array('uses' => 'UsersController@register'));
    Route::post('/register', array('uses' => 'UsersController@RegisterPost'));
    Route::get('/install', array('uses' => 'InstallController@index'));
    Route::post('/install', array('uses' => 'InstallController@InstallProcess','as'=>'InstallProcess'));
    Route::get('/InstallstepTow', array('uses' => 'InstallController@InstallStepTow','as'=>'InstallStepTow'));
    Route::post('/InstallMigration', array('uses' => 'InstallController@InstallMigration','as'=>'InstallMigration'));
    Route::get('/RegisterUserToAdmin', array('uses' => 'UsersController@RegisterUserToAdmin'));
    Route::get('/consultarApiCicoh', array('uses' => 'MasterControler@index'));

});

Route::group(['middleware' => ['web', 'auth','permission:users','XSS']], function () {
    // List - create - Edit/id - Update/id - Delete/
    //Users Routes
    require(app_path() . '/Http/Routes/users.php');
});
Route::group(['middleware' => ['web', 'auth','permission:filemanager']], function () {
    Route::get('/filemanage', array('uses' => 'DashBoardController@FileManage'));
});
Route::group(['middleware' => ['web', 'auth','permission:roles','XSS']], function () {
    //Mange Roles
    require(app_path() . '/Http/Routes/roles.php');
});
Route::group(['middleware' => ['web', 'auth','permission:permissions','XSS']], function () {
    //Manage Permissions
    require(app_path() . '/Http/Routes/permissions.php');
});
Route::group(['middleware' => ['web', 'auth','permission:valoresacumuladosporfasefenologicas','XSS']], function () {
  //Manage Permissions
  require(app_path() . '/Http/Routes/valoresacumuladosporfasefenologicas.php');
});
Route::group(['middleware' => ['web', 'auth','permission:regionesestaciones','XSS']], function () {
  //Manage Permissions
  require(app_path() . '/Http/Routes/regionesestaciones.php');
});

Route::group(['middleware' => ['web', 'auth','permission:pronostico','XSS']], function () {
  //Manage Permissions
  require(app_path() . '/Http/Routes/consultasgenerales.php');
});
Route::group(['middleware' => ['web', 'auth','permission:regiones','XSS']], function () {
  //Manage Permissions
  require(app_path() . '/Http/Routes/regiones.php');
});
Route::group(['middleware' => ['web', 'auth','permission:tipodeproducto','XSS']], function () {
  //Manage Permissions
  require(app_path() . '/Http/Routes/tipodeproducto.php');
});
Route::group(['middleware' => ['web', 'auth','permission:fasefenologica','XSS']], function () {
  //Manage Permissions
  require(app_path() . '/Http/Routes/fasefenologica.php');
});
Route::group(['middleware' => ['web', 'auth','permission:correlacionmaestros','XSS']], function () {
  //Manage Permissions
  require(app_path() . '/Http/Routes/correlacionmaestro.php');
});
Route::group(['middleware' => ['web', 'auth','permission:correlaciondetalles','XSS']], function () {
  //Manage Permissions
  require(app_path() . '/Http/Routes/correlaciondetalle.php');
});

Route::group(['middleware' => ['web', 'auth','permission:alertasgenerales','XSS']], function () {
  //Manage Permissions
  require(app_path() . '/Http/Routes/alertasgenerales.php');
});


Route::group(['middleware' => ['web', 'auth','permission:productofaseelementorangos','XSS']], function () {
  //Manage Permissions
  require(app_path() . '/Http/Routes/productofaseelementorangos.php');
});

Route::group(['middleware' => ['web', 'auth','permission:modulebuilder_modules|modulebuilder_menu','XSS']], function () {
    //ModuleBuilder
    require(app_path() . '/Http/Routes/modulebuilder.php');
});



Route::group(['middleware' => ['web', 'auth']], function () {
    Route::get('/', ['uses' => 'DashBoardController@DashBoard']);

      Route::get('/logout', array('uses' => 'UsersController@Logout', 'as' => 'logout'));
    //Credit Controller
    Route::controllers(['auth' => 'Auth\AuthController', 'password' => 'Auth\PasswordController']);
    //Crud Routes
    require(app_path() . '/Http/Routes/CrudRoutes.php');

});
