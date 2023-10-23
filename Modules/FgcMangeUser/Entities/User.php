<?php

namespace Modules\FgcMangeUser\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Model
{
    use HasFactory;

    protected $table = 'manage_user';
    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'address',
        'email',
        'password',
        'created_by',
        'updated_by'
    ];

    protected $hidden = [
        'password',
    ];


    protected static function newFactory()
    {
        return \Modules\FgcMangeUser\Database\factories\UserFactory::new();
    }
}
