<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class RoleModel extends Model
{
    use HasFactory;

    protected $table = 'roles';
    protected $guarded = [];

    public function user(){
        return $this->hasMany(User::class);
    }
}
