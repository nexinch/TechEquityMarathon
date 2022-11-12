@extends('component.master')

@section('content')

  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="{{ asset('assets/images/index/e3.jpg') }}">
      <div class="container pt-100 pb-50">
        <!-- Section Content -->
        <div class="section-content pt-100">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-white">Events</h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        @auth
            <div class="col-12 col-md-6 text-right">
                <a href="{{ route('event.edit',$events->id) }}" class="btn btn-primary"> Edit</a>
                {{-- <button  onclick="events.preventDefault(); document.getElementById('delete').submit();" class="btn btn-danger">Delete</button>
                <form action="{{ route('event.destroy',$events->id) }}" id="delete" class="d-none" method="post">
                    @csrf
                    @method('DELETE')
                </form> --}}
                <button type="button" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete').submit();">Delete</i></button>
                <form action="{{ route('event.destroy', $events->id) }}" class="d-none" id="delete" method="POST">
                    @csrf
                    @method('DELETE')
                </form>
            </div>
        @endauth
        <div class="row">
          <div class="col-md-8">
              <h2>TITLE:  {{$events->title}}</h2>
            <div class="owl-carousel-1col" data-nav="true">
              <div class="item">
                <img src="{{ URL::to('/Storage/' . $events->image) }}" alt="Event image">
                {{-- <img src="{{ URL::to('/Storage/' . $events->image) }}" alt="Event image" style="width:100%; height:40vh; object-fit:fill "> --}}
              </div>
              <div class="item">
                <img src="{{ asset('assets/images/index/e3.jpg') }}" alt="">
              </div>
              <div class="item">
                <img src="{{ asset('assets/images/index/e7.jpg') }}" alt="">
              </div>
            </div>
          </div>
          <div class="col-md-4 mt-60">
            <ul>
              <li>
                <h5>Topics: </h5>
                <p>Children around the world are not enrolled in school</p>
              </li>
              <li>
                <h5>Host:</h5>
                <p>Kodesolution Lmd.</p>
              </li>
              <li>
                <h5>Location:</h5>
                <p>{{ $events->venue }}</p>
                {{-- <p>#405, Lan Streen, Los Vegas, USA</p> --}}
              </li>
              <li>
                <h5>Start Date:</h5>
                <p>{{\Carbon\Carbon::parse($events->startdate)->format('d M Y')}}</p>
              </li>
              <li>
                <h5>End Date:</h5>
                <p>{{\Carbon\Carbon::parse($events->startdate)->format('d M Y')}}</p>
              </li>
              <li>
                <h5>Event Time:</h5>
                <p>{{ $events->time }}</p>
              </li>
              <li>
                <h5>Share:</h5>
                <div class="styled-icons icon-dark icon-theme-colored icon-sm icon-circled">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="row mt-60">
          <div class="col-md-6">
            <h4 class="mt-0">Event Description</h4>
            <p>{{$events->description}}</p>
          </div>
          <div class="col-md-6">
            <blockquote>
              <p>In many countries, there are masses who don’t even have excess to basic day-to-day requirements. 
                  There are also people who have so much in excess, that the amounts if distributed, 
                  would solve many problems plaguing most areas around the world.</p>
              <footer>“In charity <cite title="Source Title">there is no excess.”</cite></footer>
            </blockquote>
          </div>
        </div>
        {{-- <div class="row">
          <div class="col-md-12">
            <h3 class="text-theme-colored mb-30">Keynote Speakers</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-3 col-lg-3 pb-sm-30">
            <div class="team-member">
              <div class="volunteer-thumb"> <img src="http://placehold.it/270x270" alt="" class="img-fullwidth img-responsive"> </div>
              <div class="member-info mb-20">
                <div class="member-biography p-20">
                  <h3 class="text-white mt-0 mb-10">Steve Smith</h3>
                  <h5 class="text-white">Student</h5>
                </div>
                <div class="social-network bg-white text-center">
                  <ul class="styled-icons icon-hover-theme-colored icon-circled pt-5">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3 pb-sm-30">
            <div class="team-member">
              <div class="volunteer-thumb"> <img src="http://placehold.it/270x270" alt="" class="img-fullwidth img-responsive"> </div>
              <div class="member-info mb-20">
                <div class="member-biography p-20">
                  <h3 class="text-white mt-0 mb-10">Steve Smith</h3>
                  <h5 class="text-white">Businessman</h5>
                </div>
                <div class="social-network bg-white text-center">
                  <ul class="styled-icons icon-hover-theme-colored icon-circled pt-5">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3 pb-sm-30">
            <div class="team-member">
              <div class="volunteer-thumb"> <img src="http://placehold.it/270x270" alt="" class="img-fullwidth img-responsive"> </div>
              <div class="member-info mb-20">
                <div class="member-biography p-20">
                  <h3 class="text-white mt-0 mb-10">Steve Smith</h3>
                  <h5 class="text-white">Student</h5>
                </div>
                <div class="social-network bg-white text-center">
                  <ul class="styled-icons icon-hover-theme-colored icon-circled pt-5">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3 pb-sm-30">
            <div class="team-member">
              <div class="volunteer-thumb"> <img src="http://placehold.it/270x270" alt="" class="img-fullwidth img-responsive"> </div>
              <div class="member-info mb-20">
                <div class="member-biography p-20">
                  <h3 class="text-white mt-0 mb-10">Steve Smith</h3>
                  <h5 class="text-white">Student</h5>
                </div>
                <div class="social-network bg-white text-center">
                  <ul class="styled-icons icon-hover-theme-colored icon-circled pt-5">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
      </div>
    </section>

    <!-- Divider: Call To Action -->
    <section class="bg-theme-colored">
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="col-md-12">
            <div class="call-to-action pt-30 pb-30">
              <div class="col-md-9">
                <h3 class="text-white">Lets Change the world we all together, join us now as a volunteer</h3>
              </div>
              <div class="col-md-3 text-right sm-text-center"> 
                <a class="btn btn-transparent btn-border btn-circled btn-lg mt-15" href="#">Become a Volunteer</a> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
@endsection
