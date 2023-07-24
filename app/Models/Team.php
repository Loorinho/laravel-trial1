<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Team extends Model
{
    use HasFactory;

    protected $table = "teams";

    protected $fillable = ['name', 'found_date', 'country', 'city'];

    public function players(): HasMany
    {
        return $this->hasMany(Player::class);
    }

    public function manager(): HasOne
    {
        return $this->hasOne(Manager::class);
    }
}
