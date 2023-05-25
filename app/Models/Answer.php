<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Answer extends Model
{
    public function questionType(): HasOne
    {
        return $this->hasOne(QuestionType::class);
    }

    public function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }
}
