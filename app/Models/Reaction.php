<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'reactionable_id', 'reactionable_type'];

    public function reactionable()
    {
        return $this->morphTo();
    }
}
