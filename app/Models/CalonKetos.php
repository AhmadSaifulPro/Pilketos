<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalonKetos extends Model
{
    use HasFactory;
    protected $table = 'calon_ketos';
    protected $primayKey = 'id';
    protected $fillable = ['nama', 'kelas', 'jumlah_suara'];
    public $timestamps = false;
}
