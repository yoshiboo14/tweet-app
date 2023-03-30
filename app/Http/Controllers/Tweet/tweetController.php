<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tweet;

// Requestsの紐付け
use App\Http\Requests\Tweet\createRequest;

class tweetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        // $tweets = Tweet::all();
        // dd($tweets);

        $tweets = Tweet::select('id','content')->get();

        // 第２引数で変数nameにlaravelを渡す

        return view('Tweet.index',['name' => 'laravel'], compact('tweets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  createRequest $request は 
    //  createRequestクラスとそれをインスタンス化したものを$requestに格納したもの
    //  あとは、メソッドの中で $request->プロパティ名 や $request->メソッド名 とすれば、createRequestクラスの中のプロパティやメソッドを呼び出すことができる。
    public function create(createRequest $request)
    {
        $tweet = new Tweet;
        $tweet->content = $request->tweet();
        $tweet->save();
        return redirect()->route('index');
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
        // 選択されたidに該当するテーブルの情報をすべて持ってくる
        $tweet = Tweet::find($id);

        return view('Tweet.edit', compact('tweet'));
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
        $tweet = Tweet::find($id);

        $tweet->content = $request->tweet;

        $tweet->save();

        return redirect()->route('edit',['id' => $tweet->id ])->with('feedback.success',"つぶやきを編集しました");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tweet = Tweet::find($id);

        $tweet->delete();

        return redirect()->route('index');

    }
}
