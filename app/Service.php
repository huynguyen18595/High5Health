<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Review;
class Service extends Model
{
    protected $primarykey = 'id';
    public function reviews(){
      return $this->hasMany('App\Review');
    }
    // The way average rating is calculated (and stored) is by getting an average of all ratings,
// storing the calculated value in the rating_cache column (so that we don't have to do calculations later)
// and incrementing the rating_count column by 1
  public function recalculateRating($rating)
  {
    $reviews = $this->reviews()->notSpam()->approved();
    $avgRating = $reviews->avg('rating');
      $this->rating_cache = round($avgRating,1);
      $this->rating_count = $reviews->count();
    $this->save();
  }
}