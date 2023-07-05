<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Question extends Model
{
    public function questionType(): HasOne
    {
        return $this->hasOne(QuestionType::class);
    }

    public function answers(): BelongsToMany
    {
        return $this->belongsToMany(Answer::class, 'question_answer');
    }
}
