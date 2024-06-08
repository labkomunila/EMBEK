<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goat extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'name', 'age', 'weight', 'health_status', 'for_sale',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function updates()
    {
        return $this->hasMany(GoatUpdate::class);
    }

    // public function sales()
    // {
    //     return $this->hasMany(Sale::class);
    // }

}
