<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\Api\v1\ProfileResource;
use App\Models\User;

class ProfileController extends Controller
{
    public function profile(){
       $profile =  new ProfileResource(User::find(auth()->id()));
                    return response()->json([
                'status' => true,
                'message' => 'User Details',
                'data' => $profile
            ], 200);

    }
}
