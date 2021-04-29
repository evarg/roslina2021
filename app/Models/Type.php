<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Type extends Model {

    use HasFactory;
    use SoftDeletes;

    public function typeGroup() {
        return $this->belongsTo(TypeGroup::class);
    }

    public function variants() {
        return $this->hasMany(Variant::class);
    }

}
