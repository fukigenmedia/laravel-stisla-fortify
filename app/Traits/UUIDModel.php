<?php

/**
 * ------------
 * UUID Model
 * ------------
 * 
 * Membuat model support UUID untuk increment primary
 * by Fukigen Media
 * https://github.com/fukigenmedia
 */

namespace App\Traits;

use Illuminate\Support\Str;

trait UUIDModel
{
  protected static function boot()
  {
    parent::boot();
    static::creating(function ($model) {
      if (!$model->getKey()) {
        $model->{$model->getKeyName()} = (string) Str::orderedUuid();
      }
    });
  }
  public function getIncrementing()
  {
    return false;
  }
  public function getKeyType()
  {
    return 'string';
  }
}
