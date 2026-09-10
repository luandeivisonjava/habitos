<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Habit extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'user_id',
    ];

    // Relacionamento de um hábito com o usuário
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    // Relacionamento de um hábito com seus registros de hábitos
    public function habitLogs(): HasMany
    {
        return $this->hasMany(HabitLog::class);
    }
}
