<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\Api\v1\BlogResource;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index(){

            $blogs =  BlogResource::collection(Blog::where('user_id',auth()->id())
                                                ->where('status','1')
                                                ->get()
                                            );
             return response()->json([
                'status' => true,
                'message' => 'User Blogs',
                'data' => $blogs
            ], 200);

    }
}
