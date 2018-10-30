@extends('layouts.general')

@section('scripts')
  <script type="text/javascript">
    $(function(){
      // initialize the autosize plugin on the review text area
      $('#new-review').autosize({append: "\n"});
      var reviewBox = $('#post-review-box');
      var newReview = $('#new-review');
      var openReviewBtn = $('#open-review-box');
      var closeReviewBtn = $('#close-review-box');
      var ratingsField = $('#ratings-hidden');
      openReviewBtn.click(function(e)
      {
        reviewBox.slideDown(400, function()
          {
            $('#new-review').trigger('autosize.resize');
            newReview.focus();
          });
        openReviewBtn.fadeOut(100);
        closeReviewBtn.show();
      });
      closeReviewBtn.click(function(e)
      {
        e.preventDefault();
        reviewBox.slideUp(300, function()
          {
            newReview.focus();
            openReviewBtn.fadeIn(200);
          });
        closeReviewBtn.hide();

      });
      // If there were validation errors we need to open the comment form programmatically
      @if($errors->first('comment') || $errors->first('rating'))
        openReviewBtn.click();
      @endif
      // Bind the change event for the star rating - store the rating value in a hidden field
      $('.starrr').on('starrr:change', function(e, value){
        ratingsField.val(value);
      });
    });
  </script>
@endsection
@section('styles')
  <style type="text/css">
     /* Enhance the look of the textarea expanding animation */
     .animated {
        -webkit-transition: height 0.2s;
        -moz-transition: height 0.2s;
        transition: height 0.2s;
      }
      .stars {
        margin: 20px 0;
        font-size: 24px;
        color: #d17581;
      }
  </style>
@endsection
@section('content')
  <div class="container">
    <div class="columns">
          <div class="column is-2">

          </div>
           <aside class="menu">
             <p class="menu-label">
               General
            </p>
            <ul class="menu-list">
              <li><a>Hospital Service</a></li>
              <li><a>Online Medical Service</a></li>
            </ul>
           </aside>

           <div class="column is-8">
             <div class="container">
               <!-- hero-->
               <div class="hero hero-container-setting">
                 <div class="hero-body">
                   <img src="{{$service->service_photo}}" alt="">
                   <div class="caption-full">
                       <h4 class="title">  <a href="{{url('service/'.$service->id)}}">{{$service -> service_name}}</a></h4>
                       <p>{{$service->service_description}}</p>
                   </div>
                   <div class="columns">
                        <div class="column is-half">
                          <p>{{$service->rating_count}} reviews</p>
                        </div>
                        <div class="column is-one-quarter">

                        </div>
                       <div class="column ratings is-2">
                         <div class="ui heart rating disabled" data-rating="{{  $service->rating_cache }}" data-max-rating="5"></div>
                       </div>
                       <div class="column is-2">
                         <p>{{ number_format($service->rating_cache, 0)}} stars</p>
                       </div>
                   </div>
                   <hr>
                 </div>
                 <div class="hero-foot">
                   <!-- review part-->
                   <div class="section posted-review-container" id="reviews-anchor">
                     <div class="">
                       @if(Session::get('errors'))
                         <div class="alert alert-danger">
                           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5>There were errors while submitting this review:</h5>
                            @foreach($errors->all('<li>:message</li>') as $message)
                               {{$message}}
                            @endforeach
                         </div>
                       @endif
                       @if(Session::has('review_posted'))
                         <div class="alert alert-success">
                           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                           <h5>Your review has been posted!</h5>
                         </div>
                       @endif
                       @if(Session::has('review_removed'))
                         <div class="alert alert-success">
                           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                           <h5>Your review has been removed!</h5>
                         </div>
                       @endif
                     </div>
                     <div class="columns">
                       <div class="column">
                          <a href="#reviews-anchor" id="open-review-box" class="button is-info is-outlined">Leave a Review</a>
                          <div id="post-review-box" class="is-full" style="display:none;">
                            <div class="is-full">
                              {{Form::open()}}
                              {{Form::hidden('rating', null, array('id'=>'ratings-hidden'))}}
                              {{Form::textarea('comment', null, array('rows'=>'5','id'=>'new-review','class'=>'form-control is-info animated','placeholder'=>'Enter your review here...'))}}
                              <div class="ui heart rating" data-rating="{{Input::old('rating',0)}}" data-max-rating="5"></div>
                              <div class="">
                                <a href="#" class="button is-danger" id="close-review-box" style="display:none; margin-right:10px;"> <span class="glyphicon glyphicon-remove"></span>Cancel</a>
                                <button class="button is-info" type="submit">Save</button>

                              </div>
                            {{Form::close()}}
                            </div>
                          </div>
                       </div>
                     </div>
                     @foreach($reviews as $review)
                     <hr>
                       <div class="row">
                         <div class="col-md-12">
                           @for ($i=1; $i <= 5 ; $i++)
                             <span class="glyphicon glyphicon-star{{ ($i <= $review->rating) ? '' : '-empty'}}"></span>
                           @endfor

                           {{ $review->user ? $review->user->name : 'Anonymous'}} <span class="pull-right">{{$review->timeago}}</span>

                           <p>{{{$review->comment}}}</p>
                         </div>
                       </div>
                     @endforeach
                     {{ $reviews->links() }}
                   </div>
                 </div>
               </div>


             </div>
           </div>
       </div>

  </div>
@endsection
