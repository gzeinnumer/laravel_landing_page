<?php

namespace App\Models;

use App\MyApp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TugasModel extends Model
{
    use HasFactory;
    protected $table = "tugas";
    protected $fillable = ["nama_penugasan", "detail", "link_submit", "deadline", "created_at", "updated_at"];
    protected $casts = MyApp::datetime;
}
