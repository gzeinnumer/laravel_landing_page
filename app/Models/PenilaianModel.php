<?php

namespace App\Models;

use App\MyApp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenilaianModel extends Model
{
    use HasFactory;
    protected $table = "penilaian";
    protected $fillable = ["id_user", "nilai1", "nilai1","nilai2","nilai3","nilai4","created_at", "updated_at"];
    protected $casts = MyApp::datetime;
}
