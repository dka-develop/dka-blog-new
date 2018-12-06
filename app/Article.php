<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // Mass assigned
    protected $guarded = [];

    // Mutators
    public function setSlugAttribute($value) {
      $this->attributes['slug'] = str_slug( mb_substr($this->title, 0, 40) . "-" . \Carbon\Carbon::now()->format('dmyHi'), '-');
    }

    // Polymorphic relation with categories
    public function categories()
    {
      return $this->morphToMany('App\Category', 'categoryable');
    }

    public function scopeLastArticles($query, $count)
    {
      return $query->orderBy('created_at', 'desc')->take($count)->get();
    }
}
