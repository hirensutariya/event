<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserEvent extends Model {

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_events';
    protected $fillable = ['user_id', 'event_id'];

//    public function event() {
//        return $this->hasOne("App\Event", 'id', 'event_id');
//    }

}
