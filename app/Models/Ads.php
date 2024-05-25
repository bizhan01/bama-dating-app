<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
  protected $fillable = [
    'user_id',
    'ads_title',
    'ads_description',
    'ads_img'
    ];

  public function user()
      {
          return $this->belongsTo(User::class);
      }
}
