@extends('layouts.app')

@section('content')

    <div class="container" style="opacity: 0.94;"><br><br>
        <div class="card shadow-lg o-hidden border-0 my-5" style="border: 2px solid rgb(5,33,248) ;">
            <div class="card-body p-0">
                <div class="row" style="opacity: 1;border-width: 21px;border-color: rgb(29,49,197);">
                    <div class="col-lg-5 d-none d-lg-flex" style="background: rgb(230,32,43);">
                        <div class="flex-grow-1 bg-register-image"
                            style="background: url({{url("images/logo-ppi-utmcleanputih.png")}}) center / contain no-repeat, rgb(230,32,43);">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5" style="opacity: 1;">
                            <div class="text-center">
                                <h4 class="text-dark mb-4"><strong>Create a PPI UTM-Connect Account!</strong></h4>
                            </div>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input
                                            class="form-control form-control-user @error('firstName') is-invalid @enderror"
                                            value="{{ old('firstName') }}" type="text" id="exampleFirstName"
                                            placeholder="First Name" name="firstName"></div>
                                    <div class="col-sm-6"><input
                                            class="form-control form-control-user @error('lastName') is-invalid @enderror"
                                            value="{{ old('lastName') }}" type="text" id="exampleLastName"
                                            placeholder="Last Name" name="lastName"></div>

                                    @error('firstName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    @error('lastName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group"><input
                                        class="form-control form-control-user @error('email') is-invalid @enderror"
                                        value="{{ old('email') }}" type="email" id="exampleInputEmail"
                                        aria-describedby="emailHelp" placeholder="Email Address" name="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input
                                            class="form-control form-control-user @error('password') is-invalid @enderror"
                                            type="password" id="examplePasswordInput" placeholder="Password"
                                            name="password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="password"
                                            id="password-confirm" placeholder="Repeat Password"
                                            name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                </div><button class="btn btn-primary btn-block text-white btn-user" type="submit"
                                    
                                    style="background: rgb(230,32,43);"> {{ __('Register Account') }}</button>
                                <hr>
                            </form>
                            <div class="text-center"><a class="small" href="forget_password.php">Forgot Password?</a></div>
                            <div class="text-center"><a class="small" href="login.php">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
