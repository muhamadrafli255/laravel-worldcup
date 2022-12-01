<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public static function getScores($request)
    {
        $scores = Score::select(
            [
                'id',
                'fixture_id',
                'home',
                'away'
            ]
            );
        return $scores;
    }
}
