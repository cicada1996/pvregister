<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    /** @use HasFactory<\Database\Factories\PlantFactory> */
    use HasFactory;

    /**
     * The user that owns the plant.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The investors that belong to the plant.
     */
    public function investors()
    {
        return $this->belongsToMany(Investor::class)->withPivot('percentage');
    }
}
