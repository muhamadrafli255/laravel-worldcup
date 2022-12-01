<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fixture extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public static function getFixtures($request)
    {
        $fixtures = Fixture::select(
            [
                'id',
                'group_name',
                'home',
                'away',
                'time'
            ]
            );
        return $fixtures;
    }
}
