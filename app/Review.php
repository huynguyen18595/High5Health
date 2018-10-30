<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Service;
class Review extends Model
{
    protected $primarykey = 'id';
    // Validation rules for the ratings
    public function getCreateRules()
    {
      return array(
          'comment'=>'required|min:10',
          'rating'=>'required|integer|between:1,5'
      );
    }
    // here we add methods for the review Model
    //set the relationship for review table to user table and services table
    public function user(){
      $this->belongTo('App\User');
    }
    public function service(){
      $this->belongTo('App\Service');
    }
    //scopes
    public function scopeApproved($query){
      return $query->where('approved',true);
    }
    public function scopeSpam($query){
      return $query->where('spam',true);
    }
    public function scopeNotSpam($query){
      return $query->where('spam',false);
    }
    public function storeReviewForProduct($serviceID,$comment,$rating){
      $serviceID = Service::find($serviceID);
      //$this->user-id = Auth::user()->id
      $this->comment = $comment;
      $this->rating  =$rating;
      $service->reviews()->save($this);

      // recalculate ratings for the specified services
      $service->recalculateRating($rating);
    }
}
