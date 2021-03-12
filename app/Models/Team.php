<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    public function countries()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function players()
    {
        return $this->hasMany(Player::class);
    }
}