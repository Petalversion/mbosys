<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ObreController;
use App\Models\Obre;
use App\Models\Office;
use App\Models\Account;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/obre', [App\Http\Controllers\PostsController::class, 'obre']);

// Route::get('/obre', [PostsController::class, 'obre']);

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/post/{id}', [App\Http\Controllers\PostsController::class, 'index']);
// Route::resource('post', App\Http\Controllers\PostsController::class);

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



/*
|--------------------------------------------------------------------------
| Database Raw SQL Queries
|--------------------------------------------------------------------------
*/

// Route::get('/create', function(){

//     DB::insert('insert into table_aro(acct_code, auth_appr, office, qtr1, qtr2, qtr3 ,qtr4) values(?, ?, ?, ?, ?, ?, ?)', ['5-01-10-010', '5000000', '1011-1', '1250000', '0', '0', '0']);

// });

// // Route::get('/read', function() {

// //     $results = DB::select('select * from table_aro where id = ?', [1]);

// //     foreach($results as $table_aro){
// //         return $table_aro->acct_code;
// //     }

// // });

// Route::get('/update', function(){

//     $updated = DB::update('update table_aro set acct_code="5-02-02-010" where id = ?',[1]);

//     return $updated;


// });

// Route::get('/delete', function(){
//     $delete = DB::delete('delete from table_aro where id =?', [3]);
//     return $delete;
// });

/*
|--------------------------------------------------------------------------
| ELOQUENT ORM
|--------------------------------------------------------------------------
*/

// Route::get('/read', function(){

//     $table_aro = Post::all();
//     $acct_codes=[];

//     foreach($table_aro as $aro){
//         $acct_codes[] = $aro->acct_code;
//     }
//     return $acct_codes;

// });

// Route::get('/find', function(){

//     $table_aro = Post::find(3);
//     return $table_aro->acct_code;


// });


// Route::get('/findwhere', function(){

//     $table_aro = Post::where('id', 3)->orderBy('id','desc')->take(1)->get();
//     return $table_aro;


// });

// Route::get('/findmore', function(){

//     $table_aro = Post::findOrFail(1);
//     return $table_aro;
//     // $table_aro = Post::where('id', '=', 2)->firstOrFail();
//     // return $table_aro;

// });

// Route::get('/basicinsert', function(){

//     $table_aro = new Post;

//     $table_aro->acct_code = '5-02-02-020';
//     $table_aro->auth_appr = '250000.50';
//     $table_aro->office = '1081';
//     $table_aro->qtr1 = '20000.25';
//     $table_aro->qtr2 ='0';
//     $table_aro->qtr3 = '0';
//     $table_aro->qtr4 = '0';

//     $table_aro->save();

// });

// Route::get('/basicupdate', function(){

//     $table_aro = Post::find(4);

//     $table_aro->acct_code = '5-01-02-020';
//     $table_aro->auth_appr = '25300.50';
//     $table_aro->office = '1071';
//     $table_aro->qtr1 = '20230.25';
//     $table_aro->qtr2 ='21000';
//     $table_aro->qtr3 = '0';
//     $table_aro->qtr4 = '0';

//     $table_aro->save();

// });

// Route::get('/newcreate', function(){

//     Post::create(['acct_code'=>'5-02-03-040','auth_appr'=>'2500000.56','office_code'=>'1071','qtr1'=>'21700.43','qtr2'=>'0','qtr3'=>'0','qtr4'=>'0']);

// });

// Route::get('/newupdate', function(){

//     Post::where('id', 5)->where('office',1051)->update(['qtr2'=>'200.50']);
//     //(['acct_code'=>'5-02-04-010','auth_appr'=>'2500000.56','office'=>'1051','qtr1'=>'21500.43','qtr2'=>'0','qtr3'=>'0','qtr4'=>'0']);

// });

// Route::get('/newdelete', function(){

//     $table_aro = Post::find(2);

//     $table_aro->delete();
//     //delete id 2
// });

// Route::get('/newdelete2', function(){

//     //Post::destroy(3);
//     //delete id 3
//     //Post::destroy([3,4]);
//     //delete id 4 and 3 or anything inside array
//     Post::where('office', 1051)->delete();
//     //delete all where office is 1051
// });

// Route::get('/softdelete', function(){

//     Post::find(4)->delete();

// });

// Route::get('/readsoftdelete', function(){

//     // $table_aro = Post::withTrashed()->where('id',4)->get();
//     // return $table_aro;
//     $table_aro = Post::onlyTrashed()->where('id','>', 0)->get();
//     return $table_aro;

// });

// Route::get('/restoresoftdelete', function(){

//     Post::withTrashed()->where('id', '>', 0)->restore();

// });

// Route::get('/harddelete', function(){
//     //Deletes all
//     Post::withTrashed()->where('id', '>', 0)->forceDelete();
//     //Delete onlyTrashed
//     Post::onlyTrashed()->where('id', '>', 0)->forceDelete();

// });

// /*
// |--------------------------------------------------------------------------
// | ELOQUENT RELATIONSHIPS
// |--------------------------------------------------------------------------
// */


// //One to One Relationship
// Route::get('/office/{code}/aro', function($code){
//     return Office::find($code)->post;
// });

// Route::get('/account/{code}/aro', function($code){
//     return Account::find($code)->post;
// });

// //One to One Relationship using id and office_code
// Route::get('/aro/{code}/office', function($code){
//     return Post::find($code)->office;
// });

// Route::get('/aro/{code}/account', function($code){
//     return Post::find($code)->account;
// });

// //One to Many
// Route::get('/office', function(){
//     $user = Office::find(1071);
//     foreach($user->postmany as $post){
//         echo $post . "<br>";
//     }
// });

// // //Accessing the Intermediate table / Pivot
// // Route::get('/pivot', function(){
// //     Office::find(1);

// //     foreach($aro->)
// // })
Route::group(['middleware' => 'auth'], function () {
    Route::resource('/obre', ObreController::class);
    Route::post('/obre/fetch', [ObreController::class, 'fetch'])->name('autocomplete.fetch');
    Route::get('/search', [ObreController::class, 'search'])->name('obre.search');
});