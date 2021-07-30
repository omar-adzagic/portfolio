<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use SoftDeletes;

    protected $guarded = [];
    

    /**
     * Relations
     */
    public function blogCategory() {
        return $this->belongsTo(BlogCategory::class);
    }
}
