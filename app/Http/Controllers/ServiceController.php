<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;
use App\Review;

class ServiceController  extends Controller
{

    public function index(){
      $services = Service::all();

      return view('service.index')->with('services',$services);
    }

    public function show($id){
      	$service = Service::find($id);
      	// Get all reviews that are not spam for the product and paginate them
      	$reviews = $service->reviews()->with('user')->approved()->notSpam()->orderBy('created_at','desc')->paginate(100);
      	return View('service.show', array('service'=>$service,'reviews'=>$reviews));
    }
    public function store($id){
      $input = array(
        'comment' => Input::get('comment'),
        'rating'  => Input::get('rating')
      );
      // instant rating Model
      $review = new Review;

      // Validate that user insert the right Input
      $validator = Validator::make($input,$review->getCreateRules());
      // If input passes the validation - store the review in DB, otherwise return to the service page with errors
      if($validator -> passes()){
        $review->storeReviewForProduct($id,$input['comment'],$input['rating']);
        return Redirect::to('service/'.$id.'#reviews-anchor')->with('review_posted',true);
      }
       return Redirect::to('service/'.$id.'#reviews-anchor')->withErrors($validator)->withInput();
    }
}
