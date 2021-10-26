<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{

    use SoftDeletes;
    public $table = 'categories';

    protected $appends = ["image_url","num_posts"];
 
    public function getImageUrlAttribute()
    {
        return $this->photo!=""?url("uploads/category/" . $this->photo):url("uploads/category/default.jpg");
    }
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'title',
        'status',
        'created_by_id',
        'parent_category',
        'slug',
        'photo'
    ];

    protected $hidden = [
       
    ];

    protected $attributes = [
        'status' => 1,
        'parent_category'=>'0'
    ];

    protected $casts = [
        'created_at' => 'datetime:d-M-Y',
        'updated_at' => 'datetime:d-M-Y h:i:s',
    ];

    public function getUser() {
        return $this->belongsTo('App\User','created_by_id','id');
    }
    
  
    // protected $appends = ['num_posts'];

    public function getNumPostsAttribute()
    {
        return $this->posts()->count();
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'category_id');
    }

    public function getServices() {
        return $this->hasMany(RequestService::class,'category_id');
    }
}
