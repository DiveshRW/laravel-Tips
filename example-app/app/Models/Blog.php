<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'title',
        'text',
        'status'
    ];

    public function user(){
        return $this->belongsTo(\App\Models\User::class);
    }
    public function image(){
        return $this->hasMany(\App\Models\Image::class);
    }
}
