<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Respond extends Model
{

    public function poll(): HasOne
    {
        return $this->hasOne(Poll::class);
    }

    public function answer(): HasOne
    {
        return $this->hasOne(Answer::class);
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }

    public function questionType(): HasOne
    {
        return $this->hasOne(QuestionType::class);
    }

    public function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }


}
