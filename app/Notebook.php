<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notebook extends Model
{
    protected $fillable= ['body','customer_id','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
