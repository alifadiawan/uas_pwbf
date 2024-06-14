<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu_user extends Model
{
    use HasFactory;
    protected $table = 'menu_users';
    protected $guarded = [];

    public function menu()
    {
        return $this->belongsTo(menu::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
