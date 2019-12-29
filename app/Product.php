<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'product_tags');
    }

    public function getTagListAttribute()
    {
        return $this->tags->pluck('description'); // ->toArray()
    }
}
