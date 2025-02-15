<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tsak extends Model
{
    protected $table = "task";
    protected $primaryKey = "id_task";
    protected $fillable = ["nama","status","tanggal","prioritas","id_list"];
}
