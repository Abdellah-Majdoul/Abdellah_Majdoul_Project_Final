<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //
    protected $fillable=[
        "name",
        "description",
        "owner_id",
    ];
    public function owner(){
        return $this->belongsTo(User::class , "owner_id");
    }
    public function members()
    {
        return $this->belongsToMany(User::class, 'team_members')
        ->withPivot('role');
    }
    public function getLengthAttribute()
{
    return $this->members->count(); // Assuming 'members' is a relationship
}

}
