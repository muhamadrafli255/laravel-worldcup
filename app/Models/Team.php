<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public static function getTeams($request)
    {
        $teams = Team::select(
            [
                'id',
                'country_name',
                'name',
                'image'
            ]
            );
        return $teams;
    }
}
