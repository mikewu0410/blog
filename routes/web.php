<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\News;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/insert',function(){
    DB::insert('insert into members(title,description) values(?, ?)',['最新消息','這是一則勁爆的消息']);
});
Route::get('/read', function(){
    $results = DB::select('select * from news where id = ?',[1]);
    foreach($results as $new){
        return $new->title;
    }
});
Route::get('/update',function(){
    $updated = DB::update('update news set title = "更新最新消息" where id = ?',[2]);
    return $updated;
});

Route::get('/read_news',function(){
    $posts = News::all();
    $str="";
    foreach($posts as $post){
        $results = json_decode(json_encode($post), true);
        foreach($results as $key=>$value)
        {
          $str.=$key.":".$value."<br>";
        }
        $str.="<hr>";
        //return $post->title;
    };
    return $posts;
});
Route::get('/find',function(){
    $post = News::find(5);
    $results = json_decode(json_encode($post), true);
    $str="";
    foreach($results as $key=>$value)
    {
        $str.="$key:$value<br>";
    }
    //return  $results;
    return $post;
});
Route::get('/insertdata',function(){
    $post = new News;
    $post->title = 'goodjob';
    $post->description = '這是一則描述';
    $post->save();
});
Route::get('/create', function(){
    News::create(['title'=>'利用create新增的','description'=>'create的描述']);
});
Route::get('/news','NewsController@index');
//Route::resource('news','XYsController');
Route::get('/hello','NewsController@hello');
Route::get('/news/{id}','NewsController@hello_test');
Route::get('/layout','NewsController@layout_test');
