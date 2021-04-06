<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Blog extends Model {

    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'blogs';
    protected $fillable = [ 'user_id', 'name', 'description', 'image_url', 'is_active','slug','meta_title','meta_keywords','meta_description'];
 
    protected $appends = ['image_url','image_name'];

    public function users() {
        return $this->hasOne("App\User", 'id', 'user_id');
    }

    public function getImageUrlAttribute() {

        $blog_path = asset('/public/images/blogs/' .$this->attributes['image_url']);


        return $blog_path;
    }
    
    public function getImageNameAttribute() {

        $image_name = $this->attributes['image_url'];
        return $image_name;
    }

}
