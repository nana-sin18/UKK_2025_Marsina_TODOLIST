<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lists extends Model
{
    // nama table

    protected $table = "list";
    // kolom kolom nya

    protected $fillable = ["nama"];
    // relasi nya
}
