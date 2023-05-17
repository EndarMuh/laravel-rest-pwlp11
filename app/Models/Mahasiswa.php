<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table="mahasiswas";
    public $timestamps=false;
    protected $primaryKey = 'nim';
    public $incrementing = false;
    /**
     * The attributes that are mass assignable.
     * 
     * @var array
     */
    protected $fillable = [
        'nim',
        'nama',
        'tanggal_lahir',
        'jurusan',
        'no_handphone',
        'email',
        'kelas_id'
    ];
}
