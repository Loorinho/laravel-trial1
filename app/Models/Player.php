<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Player extends Model
{
    use HasFactory;

    protected $table = "players";

    protected $fillable = ['name', 'age', 'shirt_number', 'club', "team_id"];

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
}
