<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Comment extends Model
{
    use HasFactory;
    protected $fillable = [ 
        "user_id",
        "post_id",
        "text",
        'status'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User','user_id');
    }
}
