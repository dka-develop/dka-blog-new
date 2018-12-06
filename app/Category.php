<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Mass assigned
    protected $guarded = [];

    // Mutators
    public function setSlugAttribute($value) {
      $this->attributes['slug'] = str_slug( mb_substr($this->title, 0, 40) . "-" . \Carbon\Carbon::now()->format('dmyHi'), '-');
    }

    // Get children category
    public function children() {
      return $this->hasMany(self::class, 'parent_id');
    }

    // Polymorphic relation with articles
    public function articles()
    {
      return $this->morphedByMany('App\Article', 'categoryable');
    }

    public function scopeLastCategories($query, $count)
    {
      return $query->orderBy('created_at', 'desc')->take($count)->get();
    }
}
