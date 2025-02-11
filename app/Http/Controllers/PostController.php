<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post) //インポートしたPostモデルを引数に追加
    {
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit()]); //blade内で使う変数'posts'と設定して、postsの中にgetを使い、インスタンス化した$postを代入
    }

    public function show(Post $post) //インポートしたPostモデルを引数に追加
    {
        return view('posts.show')->with(['post' => $post]); //blade内で使う変数'post'と設定して、postの中にインスタンス化した$postを代入
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request, PostRequest $post)
    {
        $input = $request['post']; //リクエストの中のpostを取得
        $post->fill($input)->save(); //fillメソッドで$postのプロパティを一括代入し、saveメソッドで保存
        return redirect(('posts/' . $post->id)); //保存後、リダイレクト
    }
}
