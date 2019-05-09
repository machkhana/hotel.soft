<?php

namespace App;

use App\Model\Eats;
use App\Model\Guests;
use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    //
    protected $fillable=['room_number','guest_id','family_person','childrem_quantity','eat_status','start_time'];

    public function guests(){
        return $this->belongsTo(Guests::class,'guest_id','id');
    }
    public function eats(){
        return $this->belongsTo(Eats::class,'id','room_id');
    }
}
