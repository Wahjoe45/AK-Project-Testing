<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipsKerja extends Model
{
    use HasFactory;

    protected $fillable = [
        'judulTipsKerja',
        'gambarTipsKerja',
        'contentTipsKerja'
    ];

}
