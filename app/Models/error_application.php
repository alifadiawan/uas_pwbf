<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class error_application extends Model
{
    use HasFactory;

    protected $table = 'error_applications';
    protected $guarded = [];
}