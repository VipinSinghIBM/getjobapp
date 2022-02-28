@extends('layouts.post')

@section('content')
  <section class="home-page pt-4">
    <div class="container">
      <form action="{{route('job.index')}}">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <div class="px-4">
              <div class="rounded-text">
                <p>
                  Find jobs, Vacancy, career online. 
                </p>
              </div>
              <div class="home-search-bar">
                  <input type="text" name="q" placeholder="Search Job By Title" class="home-search-input form-control">
                  <button type="submit" class="secondary-btn"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6">
            <div class="py-5 px-5 text-center">
              <div class="text-light">
                <h4>A dream doesn't become reality through magic, it takes sweat, determination and hard work.
              </h4>
                    
              </div>
            </div>
            </div>
        </div>   
      </form>
    </div>
  </section>
                
                <marquee style="font-family: Book Antiqua;" width="100%" behavior="alternate"> <h5> Find Your Dream Job Here! We Update Daily New Jobs For You!! </h5></marquee>&nbsp; &nbsp;
                <marquee style="font-family: Book Antiqua;" width="100%" behavior="alternate"> <h5> We Are The Best Informal Job Provider in the Market </h5> </marquee>
                
                
                  <div class="containerimg">
                    <div class="box">
                  <img src="{{asset('images/category/tailor.jpg')}}"  alt="Natural" /> 
                  </div>

                <div class="box">
                  <img src="{{asset('images/category/agreeculture.jpg')}}"  alt="Natural" /> 
                </div>
                  <div class="box">
                  <img src="{{asset('images/category/call.png')}}"  alt="Natural" /> 
                </div>
                  <div class="box">
                  <img src="{{asset('images/category/cook.jpg')}}"  alt="Natural" /> 
                </div>
                  <div class="box">
                  <img src="{{asset('images/category/carpenter.jpg')}}"  alt="Natural" /> 
                </div>
                  <div class="box">
                  <img src="{{asset('images/category/dairy.jpg')}}"  alt="Natural" /> 
                </div>
                  <div class="box">
                  <img src="{{asset('images/category/security.jpg')}}" alt="Natural" /> 
                </div>
                  <div class="box">
                  <img src="{{asset('images/category/mason.jpg')}}" alt="Natural" /> 
                </div>
                </marquee>  
            </div>
                <div class="animation-function">        
                &nbsp; <h4 class="animated animated-text">
                  <span class="mr-2">You Can Find Job's Like</span>
                      <div class="animated-info">
                          <span class="animated-item">BPO Jobs</span>
                          <span class="animated-item">Agriculture Jobs</span>
                          <span class="animated-item">Carpenter's Jobs</span>
                          <span class="animated-item">& Many More...</span>
                          
                      </div>
              </h4>
      </div>
  {{-- jobs list --}}
  <section class="jobs-section py-5">
    <div class="container-fluid px-0">
      <div class="row ">
        <div class="col-sm-12 col-md-7 ml-auto">
          <div class="card">
            <div class="card-header">
              <p class="card-title font-weight-bold"><i class="fas fa-briefcase"></i> New jobs</p>
            </div>
            <div class="card-body">
              <div class="top-jobs" >
                <div class="row">

                  @foreach ($posts as $post)
                    @if ($post->company)
                    <div class="col-sm-6 col-md-6 col-lg-4 col-sm-6 mb-sm-3">
                      <a href="{{route('post.show',['job'=>$post->id])}}">
                      <div class="job-item border row h-100">
                        <div class="col-xs-3 col-sm-4 col-md-5">
                          <img src="{{asset($post->company->logo)}}" alt="" class="img-fluid p-2">

                          @if (File::exists(public_path("assets/uploads/".$post->image)))
                        <img src="{{ asset('uploads/' . $post->image) }}" alt="{{ $post->title }}" />
                          @else 
                      <img src="{{ asset('images/job1.jpg') }}" alt="{{ $post->title }}" height="100px" />
                          @endif

                        </div>
                        <div class="job-description col-xs-9 col-sm-8 col-md-7">
                        <p class="company-name" title="{{$post->company->title}}">{{$post->company->title}}</p>
                          <ul class="company-listings">
                            <li>•{{substr($post->job_title, 0, 50)}}</li>
                        </ul>
                        </div>
                      </div>
                      </a>
                    </div>
                    @endif
                  @endforeach

                </div>
              </div>
              </div>
              <a class="btn secondary-btn" href="{{route('job.index')}}">Show all jobs</a>
            </div>
          </div>
      
        <div class="col-sm-12 col-md-3 mr-auto">

          <div class="card mb-4">
            <div class="card-header">
              <p class="font-weight-bold"><i class="fas fa-building"></i> Top Employers</p>
            </div>
            <div class="card-body">
              <div class="top-employers">
              @foreach ($topEmployers as $employer)
                <div class="top-employer">
                  <a href="{{route('account.employer',['employer'=>$employer])}}">
                    <img src="{{asset($employer->logo)}}"  class="img-fluid" alt="">

                    @if (File::exists(public_path("assets/uploads/".$post->image)))
                        <img src="{{ asset('uploads/' . $post->image) }}" alt="{{ $post->title }}" />
                       @else 
                      <img src="{{ asset('images/jobslogo.jpg') }}" alt="{{ $post->title }}" height="100px" width="120px"/>
                      @endif
                  </a>
                </div> 
              @endforeach
              </div>
            </div>
          </div>

            <div class="card mb-4 job-by-category">
              <div class="card-header">
                <p class="font-weight-bold"><i class="fab fa-typo3"></i> Jobs By Category</p>
              </div>
              <div class="card-body">
                <div class="jobs-category mb-3 mt-0">
                  @foreach ($categories as $category)
                  <div class="hover-shadow p-1"><a href="{{URL::to('search?category_id='.$category->id)}}" class="text-muted">{{$category->category_name}}</a> </div>
                  @endforeach
                  <a class="p-1 text-info" href="{{route('job.index')}}">More..</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <h3 style=" font-family: Book Antiqua; text-align:center; color: Black; background-color:#4775d1;">We Are Availble in</h3>
  <div class="marquee">
    <ul class="marquee-content">
      <li><img src="{{asset('images/city/lko.png')}}"  alt="Natural" /></li>
      <li><img src="{{asset('images/city/ahmd.png')}}"  alt="Natural" /></li>
      <li><img src="{{asset('images/city/bang.png')}}"  alt="Natural" /></li>
      <li><img src="{{asset('images/city/clt.png')}}"  alt="Natural" /></li>
      <li><img src="{{asset('images/city/delhi.png')}}"  alt="Natural" /></li>
      <li><img src="{{asset('images/city/hybd.png')}}"  alt="Natural" /></li>
      <li><img src="{{asset('images/city/jai.png')}}"  alt="Natural" /></li>
      <li><img src="{{asset('images/city/mumbai.png')}}"  alt="Natural" /></li>
      <li><img src="{{asset('images/city/pune.png')}}"  alt="Natural" /></li>
    </ul>
    <script>

      const root = document.documentElement;
      const marqueeElementsDisplayed = getComputedStyle(root).getPropertyValue("--marquee-elements-displayed");
      const marqueeContent = document.querySelector("ul.marquee-content");
      
      root.style.setProperty("--marquee-elements", marqueeContent.children.length);
      
      for(let i=0; i<marqueeElementsDisplayed; i++) {
        marqueeContent.appendChild(marqueeContent.children[i].cloneNode(true));
      }
      </script>
  </div>

@endsection

<style>
.animation-function{
  position: relative;
  margin-left: 20px;
}


.animated {
  position: relative;
}

.animated-info {
  display: inline-block;
  vertical-align: top;
  margin-top: 5px;
  min-width: 260px;
  position: relative;
}

.animated-item {
  color: hsl(202, 78%, 27%);
}

.animated-item {
  font-size: 22px;
  line-height: inherit;
  display: block;
  opacity: 0;
  overflow: hidden;
  font-weight: bold;
  position: absolute;
  text-emphasis: font;
  top: 0px;
  right: 0;
  left: 0;
  animation: BottomTotop 6s linear infinite 1s;
}
.animated-item:nth-child(2n+2) {
  animation-delay: 2s;
}
.animated-item:nth-child(3n+3) {
  animation-delay: 4s;
}

.animated-item:nth-child(4n+4) {
  animation-delay: 6s;
}
.animated-item:nth-child(5n+5) {
  animation-delay: 8s;
}




@keyframes BottomTotop {
  0% {
    opacity: 0;
  }
  5% {
    opacity: 0;
    transform: translateY(5px);
  }
  10% {
    opacity: 1;
    transform: translateY(0px);
  }
  25% {
    opacity: 1;
    transform: translateY(0px);
  }
  30% {
    opacity: 0;
    transform: translateY(5px);
  }
  80% {
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}

@import url('https://fonts.googleapis.com/css?family=Montserrat');


:root {
  --marquee-width: 100vw;
  --marquee-height: 20vh;
  /* --marquee-elements: 12; */ /* defined with JavaScript */
  --marquee-elements-displayed: 5;
  --marquee-element-width: calc(var(--marquee-width) / var(--marquee-elements-displayed));
  --marquee-animation-duration: calc(var(--marquee-elements) * 3s);
}

.marquee {
  width: var(--marquee-width);
  height: var(--marquee-height);
  background-color: #f8faf8;
  color: rgb(8, 17, 10);
  overflow: hidden;
  position: relative;
}
.marquee:before, .marquee:after {
  position: absolute;
  top: 0;
  width: 8rem;
  height: 80%;
  content: "";
  z-index: 1;
}
.marquee:before {
  left: 0;
  background: linear-gradient(to right, #4775d1 0%, transparent 80%);
}
.marquee:after {
  right: 0;
  background: linear-gradient(to left, #4775d1 0%, transparent 80%);
}
.marquee-content {
  list-style: none;
  height: 100%;
  display: flex;
  animation: scrolling var(--marquee-animation-duration) linear infinite;
}
/* .marquee-content:hover {
  animation-play-state: paused;
} */
@keyframes scrolling {
  0% { transform: translateX(0); }
  100% { transform: translateX(calc(-1 * var(--marquee-element-width) * var(--marquee-elements))); }
}
.marquee-content li {
  display: flex;
  justify-content: center;
  align-items: center;
  /* text-align: center; */
  flex-shrink: 0;
  width: var(--marquee-element-width);
  max-height: 80%;
  font-size: calc(var(--marquee-height)*3/4); /* 5rem; */
  white-space: nowrap;
}

.marquee-content li img {
  width: 40%;
  /* height: 100%; */
  border: 2px solid rgb(126, 128, 243);
}

@media (max-width: 600px) {
  html { font-size: 12px; }
  :root {
    --marquee-width: 100vw;
    --marquee-height: 16vh;
    --marquee-elements-displayed: 3;
  }
  .marquee:before, .marquee:after { width: 5rem; }
}

.containerimg{
    width: 100%;
		padding: 1px;
		margin: 5px auto;	 
		display: flex;
		flex-direction: row;
		
	}
	

	.box{
		width: 250px;
		margin: 0 10px;
		box-shadow: 0 0 20px 2px rgba(61, 59, 223, 0.1);
		transition: 1s;

	}
	.box img{
		display: block;
		width:100%;
		border-radius: 10px;
	}
	.box:hover{
		transform: scale(1.3);
		z-index: 2;
	}
</style>

