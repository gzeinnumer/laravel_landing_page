<?php

namespace App\Models;

use App\MyApp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelompokModel extends Model
{
    protected $table = "kelompok";
    protected $fillable = ["kelompok","link_group","created_at"."updated_at"];
    protected $casts = MyApp::datetime;
}
