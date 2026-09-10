<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HabitLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'habit_id',
        'completed_at',
    ];
    // Relacionamento de um registro de hábito com o usuário
    public function habit(): BelongsTo
    {
        return $this->belongsTo(Habit::class);
    }
    // Relacionamento de um registro de hábito com o hábito
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
