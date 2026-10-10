<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investor extends Model
{
    /** @use HasFactory<\Database\Factories\InvestorFactory> */
    use HasFactory;

    /**
     * The user that owns the investor.
     */
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);   
    }

    /**
     * The plants that belong to the investor.
     */
    public function plants()
    {
        return $this->belongsToMany(Plant::class)->withPivot('percentage');
    }

}
