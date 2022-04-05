<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
     public function insert()
     {

        return view("post.insert");
        //  $title = "This is My First Post";
        //  $description = "This is My First Post Description";

        // //  ORM
        // $data = [
        //     'title' => $title ,
        //     'description' => $description ,
        // ];
        // $post = Post::create($data);
        // echo "post insert successfully ". $post->id;

     }

     public function savePost(Request $req)
     {
        $post = Post::create([
            "title" => $req->title,
            "description" => $req->description
        ]);
        return redirect()->back();
     }

     public function list()
     {
         $posts = Post::where('id','>=',8)
                        ->where('id','<=',12)->get();
         return view("posts")->with(['posts' => $posts]);
        // return view("posts")->withPosts($posts);
     }
}
