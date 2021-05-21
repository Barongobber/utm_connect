@extends('client.layout.main')

@section('title', 'Events')

@section('content')
<section id="header">
  <div class="container-fluid header-container">
    <div class="header-head">
      <h1 class="header-title">Events</h1>
    </div>
  </div>
</section>

<!-- Content -->
<!-- Kurang search bar/filter bar-->
<section id="listEvents">
  <div class="container-fluid">
    <div class="filter-bar">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <form class="filter-form">

              <div class="input-group">
                <input type="search" class="form-control" placeholder="Search for events" name="" id="">
              </div>
              <div class="input-group">
                <label class="filter-label" for="eventcategories">Filter category: </label>
                <select class="form-control" name="eventcategories" id="eventcategories">
                  <option value="All" default>All</option>
                  <option value="Career">Career</option>
                  <option value="Award">Award</option>
                  <option value="Sport">Sport</option>
                  <option value="Innovation">Innovation</option>
                  <option value="Cultural">Cultural</option>
                  <option value="Academic">Academic</option>
                  <option value="Volunteer">Volunteer</option>
                  <option value="Entrepreneurship">Entrepreneurship</option>
                  <option value="Leadership">Leadership</option>
                </select>
              </div>
              <div class="input-group">
                <label class="filter-label" for="eventdate">Filter by date: </label>
                <input class="form-control" type="date" name="eventdate" id="eventdate">
              </div>

          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid list-container">
    <div class="row justify-content-center">
      <!-- Event Cards-->
      <div class="col-lg-12 col-md-12 col-12 card-column">
        <div class="card mb-3 list-card">
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
              </div>
            </div>
          </div>
        </div>
        <div class="text-right event-button">
                  <a href="{{url('user-view-event')}}"><button class="btn btn-red">Check out event</button></a>
              </div>
      </div>
    </div>
      <div class="col-lg-12 col-md-12 col-12 card-column">
        <div class="card mb-3 list-card">
          <div class="row no-gutters event-card">
            <div class="col-lg-4 col-md-4 col-sm-4">
              <img class="img-fluid event-card-img text-left" src="{{asset('projectad/events/img/musicevent.jpg')}}" class="card-img-right" alt="">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8">
              <div class="card-body event-card-body">
                <h4 class="event-title">Music Event</h4>
                <div class="event-card-details">
                      <span class="post-details"> Category: <p class="event-category">Leadership</p></span>
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
                </div>
              </div>
            </div>
          </div>
          <div class="text-right event-button">
                  <a href=""><button class="btn btn-red">Check out event</button></a>
              </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-12 card-column">
        <div class="card mb-3 list-card">
          <div class="row no-gutters event-card">
            <div class="col-lg-4 col-md-4 col-sm-4">
              <img class="img-fluid event-card-img text-left" src="{{asset('projectad/events/img/musicfest.jpg')}}" class="card-img-right" alt="">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8">
              <div class="card-body event-card-body">
                <h4 class="event-title">Musicfest</h4>
                <div class="event-card-details">
                      <span class="post-details"> Category: <p class="event-category">Sport</p></span>
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
                </div>
              </div>
            </div>
          </div>
          <div class="text-right event-button">
                  <a href=""><button class="btn btn-red">Check out event</button></a>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-12 card-column">
        <div class="card mb-3 list-card">
          <div class="row no-gutters event-card">
            <div class="col-lg-4 col-md-4 col-sm-4">
              <img class="img-fluid event-card-img text-left" src="{{asset('projectad/events/img/mainevent.png')}}" class="card-img-right" alt="">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8">
              <div class="card-body event-card-body">
                <h4 class="event-title">Summer Event</h4>
                <div class="event-card-details">
                      <span class="post-details"> Category: <p class="event-category">Award</p></span>
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
                </div>
              </div>
            </div>
          </div>
          <div class="text-right event-button">
                  <a href=""><button class="btn btn-red">Check out event</button></a>
              </div>
        </div>
      </div>
    </div>
  </div>
</section>



@endsection