<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fixture extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function HomeTeam()
    {
        return $this->belongsTo(Team::class, 'home');
    }

    public function AwayTeam()
    {
        return $this->belongsTo(Team::class, 'away');
    }

    public function Score()
    {
        return $this->belongsTo(Score::class);
    }

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
