<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;
    // protected $fillable = ['user_id', 'sub_competition_id', 'univ', 'nim', 'syarat', 'verified', 'submission'];
    protected $guarded = ['id'];

    public function subCompetition()
    {
        return $this->belongsTo(SubCompetition::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
