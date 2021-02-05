<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\BlogCategory;
use App\Post;
use Image;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PostController extends Controller
{
    public function create(){
      $categories = BlogCategory::all();
      return view('Dashboard.createblog', compact('categories') );
    }

    public function postRequest(Request $request){
      $postrequest = new Post();
      $postrequest->postTitle = $request->postTitle;
      $postrequest->category = $request->category;
      $postrequest->postDes = $request->postDes;
      $postrequest->user_id = $request->user_id;
      $post_image= $request->file('avatar');

      $image_name= hexdec(uniqid()).'.'.$post_image->getClientOriginalExtension();
      Image::make($post_image)->resize(400,240)->save('uploads/'.$image_name);
      $postrequest->avatar='uploads/'.$image_name;

      $postrequest->save();
      return Redirect('/create/post')->with('status', 'your post has been updated successfully wait for the approval');
    }
    public function ShowPendingBlog()
    {
      $Pendingposts = DB::table('posts')->where('status', 0)->get();
      return view('Dashboard.pendingPost',compact('Pendingposts'));
    }
    public function ShowsignleBlog(Request $request)
    {
      $categories = BlogCategory::all();
      $post = DB::table('posts')->where('id', $request->id)->first();
      return view('Dashboard.signleBlog',compact('categories','post'));
    }

    public function postUpdate(Request $request){
      DB::table('posts')
      ->where('id',$request->id)
      ->update([
        'postTitle' => $request->postTitle,
        'category' => $request->category,
        'postDes' => $request->postDes,
        'updated_at' => Carbon::now(),
      ]);
      $postTitle = $request->postTitle;
      return Redirect('pendingPost')->with('status', 'Post has been updated!');
    }
    public function PostDenied(Request $request)
    {
      DB::table('posts')
      ->where('id',$request->id)
      ->update([
        'status' => 2,
      ]);
      return Redirect('pendingPost')->with('danger', 'Post has been denied!');
    }
    public function PostApprove(Request $request)
    {
      DB::table('posts')
      ->where('id',$request->id)
      ->update([
        'status' => 1,
      ]);
      return Redirect('pendingPost')->with('status', 'Post has been Approved!');
    }
}
