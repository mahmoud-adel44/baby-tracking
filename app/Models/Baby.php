<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Baby extends Model
{

    public function parent(): BelongsTo
    {
        return $this->belongsTo(User::class , 'user_id');
    }

    public function details(): HasOne
    {
        return $this->hasOne(BabyRecord::class);
    }

    public function babySetter(): BelongsTo
    {
        return $this->belongsTo(User::class , 'baby_setter_id');
    }
}
