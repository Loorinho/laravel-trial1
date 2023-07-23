<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Manager extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        // 'team_id',
    ];

    protected $hidden = [
        'password',
    ];


    public function team(): HasOne
    {
        return $this->hasOne(Team::class);
    }
}
