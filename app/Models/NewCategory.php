<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewCategory extends Model
{
    protected $fillable = [
        'title',
        'slug',
    ];

    public function news()
    {
        //one to many
        return $this->hasMany(News::class);
    }
}
