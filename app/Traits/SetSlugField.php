<?php

/**
 * ------------
 * Set Slug Field
 * ------------
 * 
 * Membuat field slug pada model terkait menjadi unique pada saat menginput
 * by Fukigen Media
 * https://github.com/fukigenmedia
 */

namespace App\Traits;

use Illuminate\Support\Str;

trait SetSlugField
{
  /**
   * Slug
   * Memanggil slug
   */
  public function setSlugAttribute($value)
  {

    if (static::whereSlug($slug = Str::slug($value))->exists()) {

      $slug = $this->incrementSlug($slug);
    }

    $this->attributes['slug'] = $slug;
  }
  /**
   * Slug
   * Fungsi untuk membuat slug unik
   */
  public function incrementSlug($slug)
  {

    $original = $slug;

    $count = 2;

    while (static::whereSlug($slug)->exists()) {

      $slug = "{$original}-" . $count++;
    }

    return $slug;
  }
  public function getRouteKeyName()
  {
    return 'slug';
  }
}
