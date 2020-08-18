<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\News;
use phpDocumentor\Reflection\Types\Null_;

class NewsController extends Controller
{
    /**
     * 顯示hello world訊息
     *
     * @return view('hello')
     */
    public function hello()
    {
        return view('hello');
    }
    /**
     * 傳遞參數測試
     *
     * @return view('hello')
     */
    public function hello_test($id=Null)
    {
       //第一種傳變數進view的方法
        //return view('hello')->with('id',$id);
        //第二種方法
        //return view('hello',compact('id',$id));
        $data=[
            'name' => 'JohnsonLu',
            'gender' => 'Man',
            'items' => ['Milk', 'Tea']
        ];
        $data['id']=$id;
        return view('helloTest',$data);
    }
    /**
     * 顯示layout套表內容
     *
     * @return view('test')
     */
    public function layout_test()
    {
        return view('test');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $post = News::find(5);
        $results = json_decode(json_encode($post), true);
        $str="";
        foreach($results as $key=>$value)
        {
            $str.="$key:$value<br>";
        }
        return  $str;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
