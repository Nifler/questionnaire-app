<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class QuestionType extends Model
{

    public function answers(): HasMany
    {
        return $this->hasMany(Answer::class);
    }

    public function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }
}
