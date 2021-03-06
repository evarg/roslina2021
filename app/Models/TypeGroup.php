<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypeGroup extends Model {

    use HasFactory;
    use SoftDeletes;

    public function types() {
        return $this->hasMany(Type::class);
    }
}
