<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $guarded = [];

    public function profileImage()
    {
        # code...
        $imagePath = ($this->image) ? $this->image : '/profile/KTsMgTfq5LjeSDfJjMZ8iU4gLNLmn1EIE5S7zZPG.png';
        return '/storage/' . $imagePath;
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function followers()
    {
        # code...
        return $this->belongsToMany(User::class);
    }
}
