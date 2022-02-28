@extends('layouts.auth')

@section('content')
<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-6 px-0">
            <div class="login-container">
                <div class="login-header mb-3">
                    <h3> <img src="{{asset('images/logo.png')}}" width="150px;" alt="">Kindly Reset Your Password</h3>
                    <p class="login-header-title">Welcome back to GetJob Job Portal</p>
                    <p class="text-muted">Enter your Registered E-mail ID & New Password</p>
                </div>
                <div class="login-form">
                    <form action="{{route('reset.password.post')}}" method="POST">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group">

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                </div>
                            <input type="text" id="email_address" placeholder="Your Email Address" class="form-control" name="email" required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                            </div>
                        </div>
                        
                        <p class="mt-3  alert alert-primary">Password must be 8 characters with 1 special character</p>

                        <div class="form-group">  
                        <input type="password" id="password"  placeholder="New Password" class="form-control" name="password" required autofocus>
                                  @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
                           </div>


                           <div class="form-group">
                              <input type="password" id="password-confirm" placeholder="Confirm Password" class="form-control" name="password_confirmation" required autofocus>
                                  @if ($errors->has('password_confirmation'))
                                      <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                  @endif
                               </div>
                                 <div class="line-divider"></div>


                        <button type="submit" class="btn primary-btn btn-block">Reset Password</button>
                         </form>
                        <div class="my-3">
                        <p>Don't have an account? <a href="/register">Register now</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 px-0">
            <div class="login-poster">
                {{-- <img src="" alt=""> --}}
                <h2 class="mb-3 slogon">Mark yourself as <br>Actively Job seeker</h2>
                <p class="text-white lead">We have enabled this feature targeting superheros
                    who lost their jobs during this crisis.</p>
            </div>
        </div>
    </div>
</div>
@endsection

@push('css')
<style>
.login-poster {
   background-image: url('{{asset("images/login-bg.jpg")}}');
    background-image: linear-gradient(
            to bottom,
            rgba(0, 0, 0, 0.5),
            rgba(0, 0, 0, 0.35)
        ),
        url('{{asset("images/login-bg.jpg")}}');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}
</style>
@endpush