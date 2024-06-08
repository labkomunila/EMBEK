<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoatUpdate extends Model
{
    use HasFactory;
    protected $fillable = [
        'goat_id', 'weight', 'health_status', 'note',
    ];

    public function goat()
    {
        return $this->belongsTo(Goat::class);
    }
}
