@extends('client.layout.main')
@section('title', 'Edit Profile')
@section('content')
<!---
Insert Here
--->
<!---
Content
--->
<section id="profile" class="pt-vh">
<div class="container-fluid">
    <div class="card bordered-col-lg px-4">
        <h1 class="mt-4 ml-4 text-left">Profile</h1>
        <hr class="mx-4 mt-0">
        <div class="card-body">
            <div class="profile-container mb-4">
                <img class="border rounded-circle profile-avatar" src="{{asset('projectad/assets/img/profile.jpg')}}">
                <div class="profile-overlay rounded-circle">
                    <span class="text-avatar-profile">Change profile picture</span>
                </div>
            </div>
            <form action="">
            <div class="row profile-show">

                <div class="col-lg-6 col-sm-12 col-md-6 mb-2 user-data">
                    <div class="row">
                        <div class="col-5">
                            <span class="d-inline 600"><i class="fas fa-user-tag mr-2"></i>Access Grant:</span>
                        </div>
                        <div class="col-7">
                            <input class="profile-input" type="text" name="accessgrant" id="accessGrant" placeholder="High Marshall" disabled>
                        </div>
                    </div>
                    <hr class="mt-0">
                </div>
                <div class="col-lg-6 col-sm-12 col-md-6 mb-2 user-data">
                    <div class="row">
                        <div class="col-5">
                            <span class="d-inline 600"><i class="fas fa-user mr-2"></i>Matric No:</span>
                        </div>
                        <div class="col-7">
                            <input type="text" name="matricNo" id="matricNo" class="profile-input" placeholder="A18XX0000">
                        </div>
                    </div>
                    <hr class="mt-0">
                </div>
                <div class="col-lg-6 col-sm-12 col-md-6 mb-2 user-data">
                    <div class="row">
                        <div class="col-5">
                            <span class="d-inline"><i class="fas fa-id-badge mr-2"></i>Full Name:</span>
                        </div>
                        <div class="col-7">
                            @if (session('user_email'))
                            <input type="text" name="fullName" id="fullName" class="profile-input" placeholder="{{ session('user_email') }}">
                            @else
                                <input type="text" name="fullName" id="fullName" class="profile-input" placeholder="Udin Saleh">
                            @endif
                        </div>
                    </div>
                    <hr class="mt-0">
                </div>
                <div class="col-lg-6 col-sm-12 col-md-6 mb-2 user-data">
                    <div class="row">
                        <div class="col-5">
                            <span class="d-inline"><i class="fas fa-envelope mr-2"></i>Email:</span>
                        </div>
                        <div class="col-7">
                            <input type="email" name="email" id="email" class="profile-input" placeholder="lorem@ipsum.dolor">
                        </div>
                    </div>
                    <hr class="mt-0">
                </div>
                <div class="col-lg-6 col-sm-12 col-md-6 mb-2 user-data">
                    <div class="row">
                        <div class="col-5">
                            <span class="d-inline"><i class="fas fa-calendar-alt mr-2"></i>Batch:</span>
                        </div>
                        <div class="col-7">
                            <input type="text" name="batch" id="batch" class="profile-input" placeholder="2069/2077">
                        </div>
                    </div>
                    <hr class="mt-0">
                </div>
                <div class="col-lg-6 col-sm-12 col-md-6 mb-2 user-data">
                    <div class="row">
                        <div class="col-5">
                            <span class="d-inline"><i class="fas fa-university mr-2"></i>Program:</span>
                        </div>
                        <div class="col-7">
                            <input type="text" name="program" id="program" class="profile-input" placeholder="Catfish Breeding">
                        </div>
                    </div>
                    <hr class="mt-0">
                </div>
                <div class="col-lg-6 col-sm-12 col-md-6 mb-2 user-data">
                    <div class="row">
                        <div class="col-5">
                            <span class="d-inline"><i class="fas fa-graduation-cap mr-2"></i>Degree</span>
                        </div>
                        <div class="col-7">
                            <input type="text" name="degree" id="degree" class="profile-input" placeholder="Doctorate">
                        </div>
                    </div>
                    <hr class="mt-0">
                </div>
                <div class="col-12 mb-2 user-data">
                    <div class="row">
                        <div class="col-lg-6 mb-2">
                            <span class="d-inline"><i class="fas fa-map-marker-alt mr-2"></i>Address</span>
                        </div>
                        <div class="col-lg-6">
                            <textarea name="address" id="address" cols="30" rows="10" class="profile-input">12th Setapak Avenue, Memory Lane, Chaotic District, Sleepy City, Mature Prefecture, Tuvalu 69666
                            </textarea>
                        </div>
                    </div>
                    <hr class="mt-0">
                </div>
                <div class="mx-auto">
                    <input type="submit" class="btn btn-red" value="Submit">
                    <a href=""><button class="btn btn-form-cancel">Cancel</button></a>
                </div>

            </div>
            </form>
        </div>
    </div>
</div>
</section>

@endsection