<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TablighAkbar extends Model
{
    use HasFactory;
    protected $fillable = ['judul', 'pemateri', 'open', 'close', 'foto'];
}
