@extends('client.layout.main')
@section('title', 'E-Library')
@section('content')
<!---
Insert Here
--->
<!---
Content
--->
<section id="libraryContent">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <h2>Access our library</h2>
        <p>Centralized repository of academic resources</p>
      </div>
      <div class="col-12">
          <!-- <iframe class="drive-frame" src="https://drive.google.com/embeddedfolderview?id=1eOx3KlGQEfFhvgZ0ESKhtEvr9wuFTORG#grid" width="100%" height="100%" frameborder="0"></iframe> -->
            <iframe id="driveFrame" class="drive-frame" src="https://googledriveembedder.collegefam.com/?key=AIzaSyA4vPL-XFuo9hkZ1-ZW0IBOOupfG0s-FNk&folderid=1lKdRfDLJ6cYO0wFBxGD7x6_8pZcXH7E_" ></iframe>
      </div>
      </div>
  </div>
</section>
@endsection