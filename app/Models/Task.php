<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable=[
        // "team_id",
        "name",
        "description",
        "start",
        "end",
        "priority",
        // "assign_to"
    ];
}
