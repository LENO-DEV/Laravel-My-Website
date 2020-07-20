<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
class PostController extends Controller
{
   //
   public function add_posts() {
      $category = Category::all();
      return view('Admin.Post_content', compact('category'));
   }

   public function store() {
      $input = request()->validate([
         'post_image' => 'file| required',
         'content' => 'required',
         'MainTitle' => 'required',
         'categories_id' => 'required',
         'Status' => 'required'
      ]);

      if(request('post_image')) {
         $input['post_image'] = request('post_image')->store('uploads');
      }
      auth()->user()->posts()->create($input);
      return back();
   }

   public function view_blog() {
      $post = Post::all();
      return view('Admin.view-blog-content',compact('post'));
   }

   public function delete(Post $id) {

      if($id->post_image) {
         if(file_exists($id->post_image)){
            unlink($id->post_image);
         }
      }
      
      $id->delete();
      return back();
   }



















}
