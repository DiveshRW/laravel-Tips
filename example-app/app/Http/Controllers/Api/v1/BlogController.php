<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\Api\v1\BlogResource;
use App\Models\User;

class BlogController extends Controller
{
    public function index(){
            $user = User::where('id',auth()->id())->first(['name','id']);
            $blogs =  BlogResource::collection($user->blogs()->where('status','1')->get());
            
            // return $blogs;
            // return User::doesnthave('blogs')->count();
            // return User::has('blogs')->count();
            // return User::has('blogs', '>',1)->get();
                // return User::has('blogs.image')->get();
             return response()->json([
                'status' => true,
                'message' => 'User Blogs',
                'data' => $blogs
            ], 200);

    }
        public function singleBlog($title){

            $blogs =  BlogResource::collection(Blog::where('title',$title)
                                                ->get()
                                            );
             return response()->json([
                'status' => true,
                'message' => 'User Blogs',
                'data' => $blogs
            ], 200);

    }
}
