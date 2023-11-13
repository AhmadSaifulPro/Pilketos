<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Riwayat extends Model
{
    use HasFactory;
    protected $table = 'riwayat';
    public $timestamps = false;

    function CalonKetos()
    {
        return $this->belongsTo(CalonKetos::class);
    }

    function siswa()
    {
        return $this->BelongsTo(siswa::class);
    }
}
