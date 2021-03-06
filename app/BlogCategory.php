<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogCategory extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function blogs() {
        return $this->hasMany(Blog::class);
    }
}
