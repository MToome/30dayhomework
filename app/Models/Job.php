<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Job extends Model{
    use HasFactory;

    protected $table = 'job_listing';

    protected $guarded = [];

    public function employer(){
        return $this->belongsTo(Employer::class);
    }

    public function tag(){
        return $this->belongsToMany(Tag::class, foreignPivotKey:"job_listing_id" );
    }
}


