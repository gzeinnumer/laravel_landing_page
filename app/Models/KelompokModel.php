<?php

namespace App\Models;

use App\MyApp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelompokModel extends Model
{
    use HasFactory;
    protected $table = "kelompok";
    protected $fillable = ["kelompok", "link_grup", "created_at", "updated_at"];
    protected $casts = MyApp::datetime;
}
