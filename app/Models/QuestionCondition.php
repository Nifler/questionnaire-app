<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class QuestionCondition extends Model
{
    public function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }

    public function polls(): HasMany
    {
        return $this->hasMany(Poll::class);
    }
}
