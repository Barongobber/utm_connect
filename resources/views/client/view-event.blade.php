@extends('client.layout.main')

@section('title', 'Event')

@section('content')

<section id="header">
  <div class="container-fluid header-container">
    <div class="header-head">
      <h1 class="header-title">Elegant Event</h1>
    </div>
  </div>
</section>
<!--
    CONTENT
--->
<section id="stdContent">
  <div class="container-fluid list-container">
    <div class="row justify-content-center">
      <!-- Event Cards-->
      <div class="col-lg-12 col-md-12 col-12 card-column">
        <div class="card mb-3 list-card view-event-card">
          <div class="row no-gutters event-card">
            <div class="col-lg-4 col-md-4 col-sm-4">
              <img class="img-fluid event-card-img text-left" src="{{asset('projectad/events/img/event.jpg')}}" class="card-img-right" alt="">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8">
              <div class="card-body event-card-body">
                <h4 class="event-title">Elegant Event</h4>
                <div class="event-card-details">
                      <span class="post-details"> Category: <p class="event-category">Volunteer</p></span>
                </div>
                <div class="row event-description justify-content-center">
                  <div class="col-lg-6 col-sm-6 col-md-6 mb-2 event-subheading">
                    <span style="font-weight:bold;">Date: </span>
                    <span style="display:block;">The date</span>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-md-6 event-subheading">
                    <span style="font-weight:bold;">Venue:</span>
                    <span style="display:block;">The venue</span>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-md-6 mb-2 event-subheading">
                    <span style="font-weight:bold;">Time: </span>
                    <span style="display:block;">The time</span>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-md-6 mb-2 event-subheading">
                    <span style="font-weight:bold;">Link:</span>
                    <span style="display:block;">The link if any</span>
                  </div>

                  <div class="col-lg-12 col-md-12 col-md-12">
                    <h6>Event Description</h6>
                    <p class="card-text event-desc">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      Enim sed faucibus turpis in eu mi bibendum.
                    </p>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="text-right event-button">
            <a class="btn btn-red typeform-share button" href="https://form.typeform.com/to/kX2o9C6n?typeform-medium=embed-snippet" data-mode="popup" data-size="100" target="_blank">Apply as participant </a> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm_share", b="https://embed.typeform.com/"; if(!gi.call(d,id)){ js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script>
            <a class="btn btn-red typeform-share button" href="https://form.typeform.com/to/kX2o9C6n?typeform-medium=embed-snippet" data-mode="popup" data-size="100" target="_blank">Apply as committee </a> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm_share", b="https://embed.typeform.com/"; if(!gi.call(d,id)){ js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script>
          </div>
        </div>
      </div>
<!-- For past events- Documentation and Feedback -->
      <div class="container-fluid list-container">
      <div class="row justify-content-center">
        <div class="col-12">
            <div class="card mb-3 list-card view-event-card">
              <h4 class="text-align-left mt-3">Documentation</h4>
              <hr class="mt-1 dotted-ruler width-1">
              <div id="imgCarousel" class="carousel slide event-slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img
                      class="event-slide-img"
                      src="{{asset('projectad/news/img/1.jpg')}}"
                      alt="news"
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      class="event-slide-img"
                      src="{{asset('projectad/news/img/2.jpg')}}"
                      alt="news"
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      class="event-slide-img"
                      src="{{asset('projectad/news/img/3.jpg')}}"
                      alt="news"
                    />
                  </div>
                </div>
                <ol class="carousel-indicators list-inline">
                  <li class="list-inline-item active">
                    <a
                      id="carousel-selector-0"
                      class="selected"
                      data-slide-to="0"
                      data-target="#imgCarousel"
                      ><img class="img-fluid" src="{{asset('projectad/news/img/1.jpg')}}" alt=""
                    /></a>
                  </li>
                  <li class="list-inline-item">
                    <a
                      id="carousel-selector-1"
                      data-slide-to="1"
                      data-target="#imgCarousel"
                      ><img class="img-fluid" src="{{asset('projectad/news/img/2.jpg')}}" alt=""
                    /></a>
                  </li>
                  <li class="list-inline-item">
                    <a
                      id="carousel-selector-2"
                      data-slide-to="2"
                      data-target="#imgCarousel"
                      ><img class="img-fluid" src="{{asset('projectad/news/img/3.jpg')}}" alt=""
                    /></a>
                  </li>
                </ol>
              </div>
              <div class="spacer mt-1"> </div>
              <h4 class="mb-0">Feedback</h4>
              <hr class="mt-1 dotted-ruler width-1">
              <div class="px-5 mb-3">
                <button class="btn btn-red btn-md mt-2" data-toggle="modal" data-target="#feedbackModal">Submit your feedback</button>
              </div>
              <div class="feedback-list" id="comments-logout"> 
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-3 feedback-profile">
                        <span class="d-block text-gray-600 small mx-auto mb-2" >Udin Saleh</span>
                        <img class="border rounded-circle img-profile avatar mx-auto" src="{{asset('projectad/assets/img/profile.jpg')}}"></a>
                      </div>
                      <div class="col-9">
                        <div class="d-block">
                          <span class="d-inline star">★</span>
                          <span class="d-inline star">★</span>
                          <span class="d-inline star">★</span>
                          <span class="d-inline star">★</span>
                          <span class="d-inline star">★</span>
                          <p class="feedback-content mx-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      Enim sed faucibus turpis in eu mi bibendum.
                      Habitasse platea dictumst vestibulum rhoncus est.
                      Amet purus gravida quis blandit turpis cursus in hac habitasse.
                      Viverra ipsum nunc aliquet bibendum enim.</p>
                          <span class="d-block text-gray-600 small text-right mr-3 mt-2">Posted on: 31 - 02 - 2069</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>               
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-3 feedback-profile">
                        <span class="d-block text-gray-600 small mx-auto mb-2" >Udin Saleh</span>
                        <img class="border rounded-circle img-profile avatar mx-auto" src="{{asset('projectad/assets/img/profile.jpg')}}"></a>
                      </div>
                      <div class="col-9">
                        <div class="d-block">
                          <span class="d-inline star">★</span>
                          <span class="d-inline star">★</span>
                          <span class="d-inline star">★</span>
                          <span class="d-inline star">★</span>
                          <span class="d-inline star">★</span>
                          <p class="feedback-content mx-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      Enim sed faucibus turpis in eu mi bibendum.
                      Habitasse platea dictumst vestibulum rhoncus est.
                      Amet purus gravida quis blandit turpis cursus in hac habitasse.
                      Viverra ipsum nunc aliquet bibendum enim.</p>
                          <span class="d-block text-gray-600 small text-right mr-3 mt-2">Posted on: 31 - 02 - 2069</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>               
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-3 feedback-profile">
                        <span class="d-block text-gray-600 small mx-auto mb-2" >Udin Saleh</span>
                        <img class="border rounded-circle img-profile avatar mx-auto" src="{{asset('projectad/assets/img/profile.jpg')}}"></a>
                      </div>
                      <div class="col-9">
                        <div class="d-block">
                          <span class="d-inline star">★</span>
                          <span class="d-inline star">★</span>
                          <span class="d-inline star">★</span>
                          <span class="d-inline star">★</span>
                          <span class="d-inline star">★</span>
                          <p class="feedback-content mx-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      Enim sed faucibus turpis in eu mi bibendum.
                      Habitasse platea dictumst vestibulum rhoncus est.
                      Amet purus gravida quis blandit turpis cursus in hac habitasse.
                      Viverra ipsum nunc aliquet bibendum enim.</p>
                          <span class="d-block text-gray-600 small text-right mr-3 mt-2">Posted on: 31 - 02 - 2069</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>               
              </div>
            </div>
        </div>
      </div>
    </div>
</section>
<div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-title text-center">
            <h4>Give your feedback</h4>
          </div>
          <div class="d-flex flex-column text-center">
            <form action="">
              <div class="rate">
                <input type="radio" name="rate" value="5" id="star5">
                <label for="star5" title="text"></label>
                <input type="radio" name="rate" value="4" id="star4">
                <label for="star4" title="text"></label>
                <input type="radio" name="rate" value="3" id="star3">
                <label for="star3" title="text"></label>
                <input type="radio" name="rate" value="2" id="star2">
                <label for="star2" title="text"></label>
                <input type="radio" name="rate" value="1" id="star1">
                <label for="star1" title="text"></label>
              </div>
              <div class="form-group">
                <textarea name="feedback" cols="30" rows="10" placeholder="Enter your feedback here"></textarea>
              </div>
              <input type="submit" class="btn btn-std btn-block btn-round" value="Submit">
            </form>
          </div>
        </div>
    </div>
  </div>
</div>



@endsection