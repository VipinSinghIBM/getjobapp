@extends('layouts.account')
@section('content')
<div class="account-layout  border">
  <div class="account-hdr bg-primary text-white border">
   Become an employer in {{config('app.name')}}
  </div>
  <div class="account-bdy p-3">
    <div class="row">
      <div class="col-sm-12 col-md-4">
        <p class="lead">Upgrade to Author Role</p>
      </div>
      <div class="col-sm-12 col-md-8">
        <div>
          <p class="text-sm"><i class="fas fa-info-circle"></i> <span class="font-weight-bold">Usually Yor are Registered as A Jobseekar But If you want to Post Job
            And want to Become a Employer so Click on <b> Become Employer </b> Button <i class="fa fa-android" aria-hidden="true"></i></span> </p>
          <div class="my-4">
          <p class="my-3">Click the button to assign <span class="text-primary">Author roles</span> to your account.</p>
            <form action="{{route('account.becomeEmployer')}}" method="POST">
              @csrf
              <div class="form-group">
                <div class="d-flex">
                  <button type="submit" class="btn primary-outline-btn">Become Employer</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection