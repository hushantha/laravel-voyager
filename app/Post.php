<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    public function Users() {
        return $this->belongsTo('App\User', 'id');
        // return $post = User::find(1);
    }
}
