@extends('client.layout.main')
@section('title', 'News')
@section('content')

<!-- Header -->
<section id="header">
    <div class="container-fluid header-container">
        <div class="header-head">
            <h1 class="header-title">News</h1>
        </div>
    </div>
</section>
<!-- News Navbar -->
<nav class="navbar bg-light navbar-expand-lg news-nav">
    <button class="navbar-toggler news-nav-toggle mr-auto float-right mt-2" type="button" data-toggle="collapse" data-target="#navbarCategory" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon news-bars">Categories</span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCategory">
    <ul class="navbar-nav mx-auto">
        <li class="nav-item"><a class="nav-link" href="">All</a></li>
        <li class="nav-item"><a class="nav-link" href="">Sports</a></li>
        <li class="nav-item"><a class="nav-link" href="">Academic</a></li>
        <li class="nav-item"><a class="nav-link" href="">Arts</a></li>
        <li class="nav-item"><a class="nav-link" href="">Music</a></li>
        <li class="nav-item"><a class="nav-link" href="">Strategic Studies</a></li>
        <li class="nav-item"><a class="nav-link" href="">Human Development</a></li>
    </ul>
    </div>
</nav>
<!-- News Content -->
<section id="news" class="news-list">
    <div class="container-fluid">
    <div class="row news-list-row justify-content-center">
              <div class="col-lg-4 col-md-6 mb-3 news-preview-column">
                <div class="card bordered-col">
                  <div class="card-body">
                    <img class="news-content-img img-fluid" src="{{asset('projectad/news/img/2.jpg')}}" alt="news"/>
                    <div class="text-news">
                      <h3 class="news-list-title"><a class="title-anchor" href="/user/view-news/"> Lorem Ipsum Dolor Sit Amet</a></h3>
                    <div class="news-paragraph-preview">
                      <p class="preview-para">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      Enim sed faucibus turpis in eu mi bibendum.
                      Habitasse platea dictumst vestibulum rhoncus est.
                      Amet purus gravida quis blandit turpis cursus in hac habitasse.
                      Viverra ipsum nunc aliquet bibendum enim.</p>
                    </div>
                    <div class="news-preview-details ml-auto">
                      <span class="post-details"> Posted by <a class="author-link" href="">Lorem Ipsum</a> on 31 - 02 - 2069</span>
                      <span class="post-details"> Category: <a class="category-anchor" href="">Sports</a></span>
                    </div>
                  </div>
                  </div>
                </div>
                
              </div>
              <div class="col-lg-4 col-md-6 mb-3 news-preview-column">
                <div class="card bordered-col">
                  <div class="card-body">
                    <img class="news-content-img img-fluid" src="{{asset('projectad/news/img/1.jpg')}}" alt="news"/>
                    <div class="text-news">
                      <h3 class="news-list-title"><a class="title-anchor" href=""> Lorem Ipsum Dolor Sit Amet</a></h3>
                      <div class="news-paragraph-preview">
                        <p class="preview-para">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      Enim sed faucibus turpis in eu mi bibendum.
                      Habitasse platea dictumst vestibulum rhoncus est.
                      Amet purus gravida quis blandit turpis cursus in hac habitasse.
                      Viverra ipsum nunc aliquet bibendum enim.</p>
                    
                      </div>
                      <div class="news-preview-details ml-auto">
                        <span class="post-details"> Posted by <a class="author-link" href="">Lorem Ipsum</a> on 31 - 02 - 2069</span>
                        <span class="post-details"> Category: <a class="category-anchor" href="">Academic</a></span>
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>
              <div class="col-lg-4 col-md-6 mb-3 news-preview-column">
                <div class="card bordered-col">
                  <div class="card-body">
                    <img class="news-content-img img-fluid" src="{{asset('projectad/news/img/2.jpg')}}" alt="news"/>
                    <div class="text-news">
                      <h3 class="news-list-title"><a class="title-anchor" href=""> Lorem Ipsum Dolor Sit Amet</a></h3>
                    <div class="news-paragraph-preview">
                      <p class="preview-para">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      Enim sed faucibus turpis in eu mi bibendum.
                      Habitasse platea dictumst vestibulum rhoncus est.
                      Amet purus gravida quis blandit turpis cursus in hac habitasse.
                      Viverra ipsum nunc aliquet bibendum enim.</p>
                    </div>
                    <div class="news-preview-details ml-auto">
                      <span class="post-details"> Posted by <a class="author-link" href="">Lorem Ipsum</a> on 31 - 02 - 2069</span>
                      <span class="post-details"> Category: <a class="category-anchor" href="">Sports</a></span>
                    </div>
                  </div>
                  </div>
                </div>
                
              </div>
              <div class="col-lg-4 col-md-6 mb-3 news-preview-column">
                <div class="card bordered-col">
                  <div class="card-body">
                    <img class="news-content-img img-fluid" src="{{asset('projectad/news/img/1.jpg')}}" alt="news"/>
                    <div class="text-news">
                      <h3 class="news-list-title"><a class="title-anchor" href=""> Lorem Ipsum Dolor Sit Amet</a></h3>
                      <div class="news-paragraph-preview">
                        <p class="preview-para">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      Enim sed faucibus turpis in eu mi bibendum.
                      Habitasse platea dictumst vestibulum rhoncus est.
                      Amet purus gravida quis blandit turpis cursus in hac habitasse.
                      Viverra ipsum nunc aliquet bibendum enim.</p>
                    
                      </div>
                      <div class="news-preview-details ml-auto">
                        <span class="post-details"> Posted by <a class="author-link" href="">Lorem Ipsum</a> on 31 - 02 - 2069</span>
                        <span class="post-details"> Category: <a class="category-anchor" href="">Academic</a></span>
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>
              <div class="col-lg-4 col-md-6 mb-3 news-preview-column">
                <div class="card bordered-col">
                  <div class="card-body">
                    <img class="news-content-img img-fluid" src="{{asset('projectad/news/img/2.jpg')}}" alt="news"/>
                    <div class="text-news">
                      <h3 class="news-list-title"><a class="title-anchor" href=""> Lorem Ipsum Dolor Sit Amet</a></h3>
                    <div class="news-paragraph-preview">
                      <p class="preview-para">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      Enim sed faucibus turpis in eu mi bibendum.
                      Habitasse platea dictumst vestibulum rhoncus est.
                      Amet purus gravida quis blandit turpis cursus in hac habitasse.
                      Viverra ipsum nunc aliquet bibendum enim.</p>
                    </div>
                    <div class="news-preview-details ml-auto">
                      <span class="post-details"> Posted by <a class="author-link" href="">Lorem Ipsum</a> on 31 - 02 - 2069</span>
                      <span class="post-details"> Category: <a class="category-anchor" href="">Sports</a></span>
                    </div>
                  </div>
                  </div>
                </div>
                
              </div>
              
              
            </div>
          </div>
    </div>
</section>

@endsection