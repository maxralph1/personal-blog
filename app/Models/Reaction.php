<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reaction extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'reactionable_id', 'reactionable_type'];

    use SoftDeletes;

    public function reactionable()
    {
        return $this->morphTo();
    }
}
