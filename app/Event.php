<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model {

    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'events';
    protected $fillable = ['name', 'slug', 'poster', 'location', 'date', 'points', 'description', 'is_active', 'meta_title', 'meta_keywords', 'meta_description'];
    protected $appends = ['image_url', 'image_name'];

    public function users() {
        return $this->hasOne("App\User", 'id', 'user_id');
    }

    public function user_event() {
        return $this->hasOne("App\UserEvent", 'event_id', 'id');
    }

    public function getImageUrlAttribute() {

        $blog_path = asset('public/images/events/' . $this->attributes['poster']);


        return $blog_path;
    }

    public function getImageNameAttribute() {

        $image_name = $this->attributes['poster'];
        return $image_name;
    }

}
