

<?php $__env->startSection('title', 'Home'); ?>


<?php $__env->startSection('content'); ?>
<section id="title">
    <div class="container-fluid title-container">
      <div class="title-head">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="5000" data-pause="hover">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-lg-6 text-column">
                  <h1 class="carousel-heading">Get the latest news update and announcements!</h1>
                </div>
                <div class="col-lg-6 img-column">
                  <a href='https://pngtree.com/so/news-clipart' style="pointer-events:none"><img class="calendar-carousel-img" src="<?php echo e(asset('projectad/assets/img/news.svg')); ?>" alt="news"/></a>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 button-column">
                    <a class="buttons" href="#news"><button class="btn btn-red btn-lg btn-block"> Check out the hottest news</button></a>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-lg-6 text-column">
                  <h1 class="carousel-heading">Be in the know of the latest events in and around the campus!</h1>
                </div>
                <div class="col-lg-6 img-column">
                  <a href='https://pngtree.com/so/calendar-clipart' style="pointer-events:none"><img class="calendar-carousel-img" src="<?php echo e(asset('projectad/assets/img/calendar.svg')); ?>"/></a>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 button-column">
                  <a class="buttons" href="#events"><button class="btn btn-red btn-lg btn-block">Check out upcoming events</button></a>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-lg-6 text-column">
                  <h1 class="carousel-heading">Step up your learning, share and get resources here!</h1>
                </div>
                <div class="col-lg-6 img-column">
                  <a href=""><img class="calendar-carousel-img" src="<?php echo e(asset('projectad/assets/img/books.svg')); ?>"/></a>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 button-column">
                  <a class="buttons" href="#academics"><button class="btn btn-red btn-lg btn-block">Check out academic support</button></a>
                </div>
              </div>
            </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

  </section>
  <section id="news">
    <div class="container-fluid content-container">
      <div class="content-subheading-container">
        <div class="content-subheading">
          <h2 class="subheading-title">News <span style = "display: block;">&</span><span style = "display: block;">Announcements</span></h2>
          <hr class="separator"/>
        </div>
      </div>
      <div id="carouselNews" class="carousel slide" data-ride="carousel" data-interval="10000" data-pause="hover">
        <div class="carousel-inner">
          <div class="news-item carousel-item active">
            <div class="row news-preview-row">
              <div class="col-lg-6 col-md-6 col-sm-6 news-preview-column">
                <img class="news-content-img img-fluid" src="<?php echo e(asset('projectad/news/img/1.jpg')); ?>" alt="news"/>
                <div class="text-news">
                  <h3 class="news-title-preview">Lorem Ipsum Dolor Sit Amet</h3>
                  <div class="news-paragraph-preview">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      Enim sed faucibus turpis in eu mi bibendum.
                      Habitasse platea dictumst vestibulum rhoncus est.
                      Amet purus gravida quis blandit turpis cursus in hac habitasse.
                      Viverra ipsum nunc aliquet bibendum enim. <a class="read-more" href="">...Read more</a>
                    </p>
                    <div class="news-preview-details ml-auto">
                      <span class="post-details"> Posted by <a class="author-link" href="">Lorem Ipsum</a> on 31 - 02 - 2069</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 news-preview-column">
                <img class="news-content-img img-fluid" src="<?php echo e(asset('projectad/news/img/2.jpg')); ?>" alt="news"/>
                <div class="text-news">
                  <h3 class="news-title-preview">Lorem Ipsum Dolor Sit Amet</h3>
                  <div class="news-paragraph-preview">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      Enim sed faucibus turpis in eu mi bibendum.
                      Habitasse platea dictumst vestibulum rhoncus est.
                      Amet purus gravida quis blandit turpis cursus in hac habitasse.
                      Viverra ipsum nunc aliquet bibendum enim. <a class="read-more" href="">...Read more</a>
                    </p>
                    <div class="news-preview-details ml-auto">
                      <span class="post-details"> Posted by <a class="author-link" href="">Lorem Ipsum</a> on 31 - 02 - 2069</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="news-item carousel-item">
            <div class="row news-preview-row">
              <div class="col-lg-6 col-md-6 col-sm-6 news-preview-column">
                <img class="news-content-img img-fluid" src="<?php echo e(asset('projectad/news/img/2.jpg')); ?>" alt="news"/>
                <div class="text-news">
                  <h3 class="news-title-preview">Lorem Ipsum Dolor Sit Amet</h3>
                  <div class="news-paragraph-preview">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      Enim sed faucibus turpis in eu mi bibendum.
                      Habitasse platea dictumst vestibulum rhoncus est.
                      Amet purus gravida quis blandit turpis cursus in hac habitasse.
                      Viverra ipsum nunc aliquet bibendum enim. <a class="read-more" href="">...Read more</a>
                    </p>
                    <div class="news-preview-details ml-auto">
                      <span class="post-details"> Posted by <a class="author-link" href="">Lorem Ipsum</a> on 31 - 02 - 2069</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 news-preview-column">
                <img class="news-content-img img-fluid" src="<?php echo e(asset('projectad/news/img/1.jpg')); ?>" alt="news"/>
                <div class="text-news">
                  <h3 class="news-title-preview">Lorem Ipsum Dolor Sit Amet</h3>
                  <div class="news-paragraph-preview">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      Enim sed faucibus turpis in eu mi bibendum.
                      Habitasse platea dictumst vestibulum rhoncus est.
                      Amet purus gravida quis blandit turpis cursus in hac habitasse.
                      Viverra ipsum nunc aliquet bibendum enim. <a class="read-more" href="">...Read more</a>
                    </p>
                    <div class="news-preview-details">
                      <span class="post-details"> Posted by <a class="author-link" href="">Lorem Ipsum</a> on 31 - 02 - 2069</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
            <a class="carousel-control-prev" href="#carouselNews" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselNews" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>

        <a href="<?php echo e(url('user-news')); ?>"><button class="btn btn-news-preview btn-lg btn-block">See all news</button></a>
    </div>
  </section>

  <section id="events">
      <div class="container-fluid content-container">
        <div class="content-subheading-container">
          <div class="content-subheading">
            <h2 class="subheading-title">Upcoming <span style = "display: block;">Events</span></h2>
            <hr class="separator"/>
          </div>
        </div>
      </div>
      <div id="carouselEvent" class="carousel slide" data-ride="carousel" data-interval="10000" data-pause="hover">
        <div class="carousel-inner">
          <div class="event-item carousel-item active">
            <div class="row event-preview-row">
              <!--first 3 Event Card-->
              <?php $__currentLoopData = $member['events3']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-lg-4 event-preview-column">
                <div class="card">
                  <div class="card-header event-header">
                    <h4 class="event-title"><a href="<?php echo e(route('user-view-event', $event->event_id)); ?>"><?php echo e($event->event_title); ?></a></h4>

                  </div>
                  <div class="card-body event-body">
                      <img class="img-fluid" src="<?php echo e(asset('images/event/' . $event->event_id . '/' . $event->event_pic1)); ?>" alt="">
                      <div class="event-description">
                        <div class="row">
                          <div class="col-lg-6 col-sm-6 col-md-6 event-subheading">
                            <span style="font-weight:bold;">Date: </span>
                            <span style="display:block;"><?php echo e($event->event_date); ?></span>
                          </div>
                          <div class="col-lg-6 col-sm-6 col-md-6 event-subheading">
                            <span style="font-weight:bold;">Venue:</span>
                            <span style="display:block;"><?php echo e($event->event_venue); ?></span>
                          </div>
                        </div>
                      </div>
                      <div class="text-right">
                        <a href="<?php echo e(route('user-view-event', $event->event_id)); ?>"><button class="btn btn-red">Check out event</button></a>
                      </div>
                  </div>

                </div>
              </div>
              <?php if($index == 2): ?>
                <?php break; ?>
              <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          </div>
          <?php if(count($member['events3']) > 3): ?>
          <div class="event-item carousel-item">
            <div class="row event-preview-row">
              <?php $__currentLoopData = $member['events3']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($index > 2): ?>
              <div class="col-lg-4 event-preview-column">
                <div class="card">
                  <div class="card-header event-header">
                    <h4 class="event-title"><a href="<?php echo e(route('user-view-event', $event->event_id)); ?>"><?php echo e($event->event_title); ?></a></h4>

                  </div>
                  <div class="card-body event-body">
                      <img class="img-fluid" src="<?php echo e(asset('images/event/' . $event->event_id . '/' . $event->event_pic1)); ?>" alt="">
                      <div class="event-description">
                        <div class="row">
                          <div class="col-lg-6 col-sm-6 col-md-6 event-subheading">
                            <span style="font-weight:bold;">Date: </span>
                            <span style="display:block;"><?php echo e($event->event_date); ?></span>
                          </div>
                          <div class="col-lg-6 col-sm-6 col-md-6 event-subheading">
                            <span style="font-weight:bold;">Venue:</span>
                            <span style="display:block;"><?php echo e($event->event_venue); ?></span>
                          </div>
                        </div>
                      </div>
                      <div class="text-right">
                        <a href="<?php echo e(route('user-view-event', $event->event_id)); ?>"><button class="btn btn-red">Check out event</button></a>
                      </div>
                  </div>

                </div>
              </div>
              <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          </div>
          <?php endif; ?>
        </div>
        <a class="carousel-control-prev" href="#carouselEvent" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselEvent" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="text-center">
        <a class="buttons" href="<?php echo e(url('user-events')); ?>"><button class="btn btn-std btn-lg mr-0 ml-0">See all events</button></a>
      </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('client.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH Z:\KULIAH OOO\Sem5\AD\Project\ApplicationDevelopment\ApplicationDevelopment\resources\views/client/index.blade.php ENDPATH**/ ?>