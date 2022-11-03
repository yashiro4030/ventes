<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'admins'; // nom de la table 

    protected $fillable = [
        'username',
        'email',
        'password',
        'com_code',
    ];
}
