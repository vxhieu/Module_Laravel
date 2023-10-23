<?php

namespace Modules\FgcMangeUser\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProfileUser extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\FgcMangeUser\Database\factories\ProfileUserFactory::new();
    }
}
