<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Spatial;
use Grimzy\LaravelMysqlSpatial\Eloquent\SpatialTrait;

class Customer extends Model
{
    use SpatialTrait;
    use Spatial;


    protected $spatialFields = [
        'location'
    ];

    public function notebooks()
    {
        return $this->hasMany(Notebook::class,'customer_id','id');
    }
    public function website()
    {
        return $this->hasOne(Website::class,'customer_id','id');
    }
    public function design()
    {
        return $this->hasOne(Design::class,'customer_id','id');
    }
    public function social()
    {
        return $this->hasOne(Social::class,'customer_id','id');
    }
    public function legal()
    {
        return $this->hasOne(Legal::class,'customer_id','id');
    }
    public function domains()
    {
        return $this->hasMany(Domain::class,'customer_id','id');
    }
    public function clock()
    {
        return $this->hasOne(Clock::class,'customer_id','id');
    }
    public function section()
    {
        return $this->hasOne(Section::class,'customer_id','id');
    }
    public function logos()
    {
        return $this->hasOne(Logo::class,'customer_id','id');
    }
    public function files()
    {
        return $this->hasOne(File::class,'customer_id','id');
    }
}
