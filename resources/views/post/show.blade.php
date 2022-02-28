@extends('layouts.post')

@section('content')
<section class="show-page pt-4 mb-5">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-8">
        <div class="job-listing border">
          <div class="company-info">
            <div class="company-banner">
              <div class="banner-overlay"></div>
              
              @if($company->cover_img == 'nocover')
              <img src="{{asset('images/companies/cover.jpg')}}" class="company-banner-img img-fluid" alt="" height="50">
              @else
              <img src="{{asset($company->cover_img)}}" class="company-banner-img img-fluid" alt="">
              @endif
              <div class="company-media">
                <img src="{{asset($company->logo)}}" alt="" class="">

                @if (File::exists(public_path("assets/uploads/".$post->image)))
                        <img src="{{ asset('uploads/' . $post->image) }}" alt="{{ $post->title }}" />
                       @else 
                      <img src="{{ asset('images/jobslogo.jpg') }}" alt="{{ $post->title }}" height="100px" />
                      @endif
                       &nbsp;&nbsp;
                <div>
                  <a href="{{route('account.employer',['employer'=>$company])}}" class="secondary-link">
                    <p class="font-weight-bold">{{$company->title}}</p>
                    <p class="company-category">{{$company->getCategory->category_name}}</p>
                  </a>
                </div>
              </div>
              <div class="company-website">
                <a href="{{$company->website}}" target="_blank"><button class="button-33" role="button">Contact to Employer</button></i></a>&nbsp;&nbsp;
                <a href="#"data-toggle="modal" data-target="#exampleModal1"><i class="fa fa-envelope-square" style="font-size:40px;float:right;green;"></i></a>
              </div>
            </div>

            {{-- company information --}}
            <div class="p-3"> 
              <p>{{$company->description}}</p>
            </div>
          </div>

          {{-- job information --}}
          <div class="job-info">
            <div class="job-hdr p-3">
              <p class="job-title">{{$post->job_title}}</p>
              <div class="">
                <p class="job-views">
                  <span class="text-success">Views: {{$post->views}} </span> |
                  <span class="text-danger">Apply Before: {{date('d',$post->remainingDays())}} days</span>
                </p>
              </div>
            </div>
            <div class="job-bdy p-3 my-3">
              <div class="job-level-description">
                <p class="font-weight-bold">Basic job level description</p>
                <table class="table table-hover">
                  <tbody>
                    <tr>
                      <td width="33%">Job Category</td>
                      <td width="3%">:</td>
                      <td width="64%"><a href="/jobs">{{$company->getCategory->category_name}}</a></td>
                    </tr>
                    <tr>
                      <td width="33%">Job Level</td>
                      <td width="3%">:</td>
                      <td width="64%">{{$post->job_level}}</td>
                    </tr>
                    <tr>
                      <td width="33%">No of vacancy[s]</td>
                      <td width="3%">:</td>
                      <td width="64%">[ <strong>{{$post->vacancy_count}}</strong> ]</td>
                    </tr>
                    <tr>
                      <td width="33%">Employment type</td>
                      <td width="3%">:</td>
                      <td width="64%">{{$post->employment_type}}</td>
                    </tr>
                    <tr>
                      <td width="33%">Offered Salary(Monthly)</td>
                      <td width="3%">:</td>
                      <td width="64%">{{$post->salary}}</td>
                    </tr>
                    <tr>
                      <td width="33%">Apply before(Deadline)</td>
                      <td width="3%">:</td>
                      <td width="64%" class="text-danger">{{date('l, jS \of F Y',$post->deadlineTimestamp())}}, ({{ date('d',$post->remainingDays())}} days from now)</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="job-level-description">
                <p class="font-weight-bold">Job Specification</p>
                <table class="table table-hover">
                  <tbody>
                    <tr>
                      <td width="33%">Education level</td>
                      <td width="3%">:</td>
                      <td width="64%"><a href="/jobs"> {{$post->education_level}}</a></td>
                    </tr>
                    <tr>
                      <td width="33%">Experience Required</td>
                      <td width="3%">:</td>
                      <td width="64%">{{$post->experience}}</td>
                    </tr>
                    <tr>
                      <td width="33%">Professional Skill Required</td>
                      <td width="3%">:</td>
                      <td width="64%">
                        @foreach($post->getSkills() as $skill)
                        <span class="badge badge-primary">{{$skill}}</span>
                        @endforeach
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="job-level-description">
                {{-- <p class="font-weight-bold">More Specifications</p> --}}
                <p class="py-2">{!!$post->specifications!!}</p>
              </div>
              <br>
              <hr>
              <div class="d-flex justify-content-between">
                <div>
                  <a href="{{route('account.applyJob',['post_id'=>$post])}}" class="btn primary-btn">Apply now</a>
                  <a href="{{route('savedJob.store',['id'=>$post])}}" class="btn primary-outline-btn"><i class="fas fa-star"></i> Save job</a>
                </div>
                <div class="social-links">
                  <a href="https://www.facebook.com"  target="_blank" class="btn btn-primary"><i class="fab fa-facebook"></i></a>
                  <a href="https://www.twitter.com" target="_blank"  class="btn btn-primary"><i class="fab fa-twitter"></i></a>
                  <a href="https://www.linkedin.com"  target="_blank" class="btn btn-primary"><i class="fab fa-linkedin"></i></a>
                  <a href="https://www.gmail.com" target="_blank"  class="btn btn-primary"><i class="fas fa-envelope"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-sm-12 col-md-4">
        <div class="card d-none d-md-block mb-3">
          <div class="card-header">
            Job Action
          </div>
          <div class="card-body">
            <div class="btn-group w-100">
              <a href="{{route('account.applyJob',['post_id'=>$post->id])}}" class="btn primary-outline-btn float-left">Apply Now</a>
              <a href="{{route('savedJob.store',['id'=>$post->id])}}" class="btn primary-btn"><i class="fas fa-star"></i> Save job</a>
            </div>
          </div>
        </div>
        <div class="card ">
          <div class="card-header">
            Similar Jobs
          </div>
          <div class="card-body">
            <div class="similar-jobs">
              @foreach ($similarJobs as $job)
              @if($similarJobs)
                <div class="job-item border-bottom row">
                  <div class="col-4">
                    <img src="{{asset($job->company->logo)}}"  alt="">

                    @if (File::exists(public_path("assets/uploads/".$post->image)))
                        <img src="{{ asset('uploads/' . $post->image) }}" alt="{{ $post->title }}" />
                       @else 
                      <img src="{{ asset('images/job1.jpg') }}" alt="{{ $post->title }}" height="100px" />
                      @endif
                  </div>
                  <div class="job-desc col-8">
                    <a href="{{route('post.show',['job'=>$post])}}" class="job-category text-muted font-weight-bold">
                      <p class="text-muted h6">{{$job->job_title}}</p>
                      <p class="small">{{$job->company->title}}</p>
                      <p class="font-weight-normal small text-danger">Deadline: {{date('d',$job->remainingDays())}} days</p>
                    </a>
                  </div>
                </div>
                @else
                <div class="card">
                  <div class="card-header">
                    <p>No similar jobs</p>
                  </div>
                </div>
                @endif
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
          <h3 style=" font-family: Book Antiqua; text-align:center; color: Black; background-color:rgb(17, 169, 240);">Before Apply Job</h3>
          <marquee style="font-family: Book Antiqua; color: Red" height="100%" direction="left" behavior="scroll"> <h4> <img src="{{asset('images/alert.gif')}}" width="50px" alt="Natural"/> We do not take any money or your personal details for any job, if someone demands money or anything else for job, then contact us immediately! <a href="{{$company->website}}" target="_blank"><button class="button-33" role="button">Contact Us</button></i></a> </h4> </marquee>

@endsection

@push('css')
<style>
  .company-banner {
    min-height: 20vh;
    position: relative;
    overflow: hidden;
  }

  .company-banner-img {
    width: 100%;
    height: auto;
    overflow: hidden;
  }

  .banner-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(to bottom, transparent, rgba(0, 0, 0, .3));
    width: 100%;
    height: 200px;
  }

  .company-website {
    position: absolute;
    right: 50px;
    height: 50px;
    bottom: 20px;
    color: white;
  }

  .company-media {
    position: absolute;
    display: flex;
    align-items: center;
    left: 2rem;
    bottom: 1rem;
    color: #333;
    padding-right: 2rem;
    background-color:rgba(255,255,255,.8);
  }

  .company-logo {
    max-width: 100px;
    height: auto;
    margin-right: 1rem;
    padding: 1rem;
    background-color: rgb(113, 201, 252);
  }

  .company-category {
    font-size: 1.3rem;
  }

  .company-link:hover {
    color: rgb(230, 52, 52);
  }

  .job-title {
    font-size: 1.3rem;
    font-weight: bold;
  }

  .job-hdr {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: linear-gradient(to right, #e1edf7, #EDF2F7)
  }

  .job-item{
    margin-bottom: .5rem;
    padding:.5rem 0;
  }
  .job-item:hover {
    background-color:#eee;
  } 

  .button-33 {
  background-color: #c2fbd7;
  border-radius: 100px;
  box-shadow: rgba(44, 187, 99, .2) 0 -25px 18px -14px inset,rgba(44, 187, 99, .15) 0 1px 2px,rgba(44, 187, 99, .15) 0 2px 4px,rgba(44, 187, 99, .15) 0 4px 8px,rgba(44, 187, 99, .15) 0 8px 16px,rgba(44, 187, 99, .15) 0 16px 32px;
  color: green;
  cursor: pointer;
  display: inline-block;
  font-family: CerebriSans-Regular,-apple-system,system-ui,Roboto,sans-serif;
  padding: 7px 20px;
  text-align: center;
  text-decoration: none;
  transition: all 250ms;
  border: 0;
  font-size: 16px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-33:hover {
  box-shadow: rgba(7, 235, 94, 0.35) 0 -25px 18px -14px inset,rgba(44,187,99,.25) 0 1px 2px,rgba(44,187,99,.25) 0 2px 4px,rgba(44,187,99,.25) 0 4px 8px,rgba(44,187,99,.25) 0 8px 16px,rgba(44,187,99,.25) 0 16px 32px;
  transform: scale(1.05) rotate(-1deg);
}

</style>
@endpush

@push('js')

@endpush