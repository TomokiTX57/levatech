<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post) //インポートしたPostモデルを引数に追加
    {
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit()]); //blade内で使う変数'posts'と設定して、postsの中にgetを使い、インスタンス化した$postを代入
    }
}
