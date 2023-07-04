<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Poll extends Model
{
    public function questions()
    {
        return $this->belongsToMany(Question::class)
            ->withPivot('order');
    }
}
