<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CustomRespond extends Model
{
    protected $fillable = [
        'user_id',
        'poll_id',
        'question_id',
        'answer',
    ];

    public function poll(): HasOne
    {
        return $this->hasOne(Poll::class);
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }

    public function question(): HasOne
    {
        return $this->hasOne(Question::class);
    }
}
