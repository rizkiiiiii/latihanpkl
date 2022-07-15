<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// memanggil model Post
use App\models\Post;

class PostController extends Controller
{
    public function tampil()
    {
        //Menampilkan semua data dari model post

        $post =Post::all();
        return view('post.index', compact('post'));
    }
}
