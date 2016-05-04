<?php

namespace Leoalmar\CodeTags\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = "codetags_tags";

    protected $fillable = [
        'name'
    ];

    public function taggable()
    {
        return $this->morphTo();
    }

}