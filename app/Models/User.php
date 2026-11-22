<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    use HasUuids;

    protected $hidden = [
        'password'
    ];

    public function notes(): HasMany
    {
        return $this->hasMany(Note::class, 'user_id');
    }
}
