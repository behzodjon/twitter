<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        return isset($this->image) ? '/storage/'.$this->image : asset('images/No-Image.jpg');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

}
