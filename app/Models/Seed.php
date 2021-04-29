<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Seed extends Model {

    use HasFactory;
    use SoftDeletes;

    public function variant() {
        return $this->belongsTo(Variant::class);
    }

    public function seedProducer() {
        return $this->belongsTo(SeedProducer::class);
    }

}
