<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post) //インポートしたPostモデルを引数に追加
    {
        return $post->get(); //Postの中身を戻り値として返す
    }
}
