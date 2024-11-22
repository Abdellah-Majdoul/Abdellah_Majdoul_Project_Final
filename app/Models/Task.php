<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //

    protected $fillable=[
        "user_id",
        "team_id",
        "name",
        "description",
        "start",
        "end",
        "priority",
        "status",
        // "assign_to"
    ];
    public function userrs(){
        return $this->belongsTo(User::class);
    }
    public function team(){
        return $this->belongsTo(Team::class);
    }
}
