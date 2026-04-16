<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {
    protected $keyType = 'string';
    public $incrementing = false;

    public function notes() {
        return $this->hasMany(Note::class);
    }
}
