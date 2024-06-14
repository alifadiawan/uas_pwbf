<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class menu extends Model
{
    use HasFactory;
    protected $table = 'menus';
    protected $guarded = [];
    public function users()
    {
        return $this->belongsToMany(User::class, 'menu_user', 'menu_id', 'user_id');
    }

}
