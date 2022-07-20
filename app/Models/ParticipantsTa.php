<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParticipantsTa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // protected $fillable = ['user_id', 'tabligh_akbar_id', 'instansi', 'absen', 'pertanyaan', 'evaluasi'];

    public function tablighAkbar()
    {
        return $this->belongsTo(TablighAkbar::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
