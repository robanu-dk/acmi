<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCompetition extends Model
{
    use HasFactory;
    protected $fillable = ['competition_id', 'gelombang', 'open_registration', 'close_registration', 'open_submission', 'close_submission', 'visibility'];

    public function competition()
    {
        return $this->belongsTo(Competition::class);
    }
}
