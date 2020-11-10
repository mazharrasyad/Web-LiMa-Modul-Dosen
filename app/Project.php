<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public $table = 'project';

    protected $guarded = [];

    // protected $fillable = [
    //     'nama', 'deskripsi', 'username', 'password', 'email', 'foto', 'no_hp', 'fingerprint_pin', 'remember_token',
    // ];

    // public function semester()
    // {
    //     return $this->belongsTo(Semester::class);
    // }

    // public function scrummaster()
    // {
    //     return $this->belongsTo(Scrummaster::class);
    // }

    // public function tim()
    // {
    //     return $this->belongsTo(Tim::class);
    // }

    // public function mvps()
    // {
    //     return $this->hasMany(Mvp::class, 'project_id', 'id');        
    // }
}
