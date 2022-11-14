@extends('component.master')
@section('content')

     <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="{{ asset("assets/images/index/bg2.jpg") }}">
      <div class="container pt-100 pb-50">
        <!-- Section Content -->
        <div class="section-content pt-100">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-white">Single Cause</h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Causes -->
    <section>
      <div class="container">
        @auth
        <div class="col-12 col-md-6 text-right">
            <a href="{{ route('activity.edit',$activity->id) }}" class="btn btn-primary"> Edit</a>
            <button onclick="event.preventDefault(); document.getElementById('delete').submit();" class="btn btn-danger">Delete</button>
            <form action="{{ route('activity.destroy',$activity->id) }}" id="delete" class="d-none" method="POST">
                @csrf
                @method('DELETE')
            </form>
        </div>
        @endauth
        <div class="row mtli-row-clearfix">
          <div class="col-sm-6 col-md-8 col-lg-8">
            <div class="causes bg-white maxwidth500 mb-30">
              <div class="thumb">
                <img src="{{ URL::to('/Storage/' . $activity->image) }}" alt="" class="img-fullwidth">
                <div class="overlay-donate-now">
                  <a href="page-donate.html" class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10">Donate <i class="flaticon-charity-make-a-donation font-16 ml-5"></i></a>
                </div>
              </div>
              <div class="progress-item mt-0">
                <div class="progress mb-0">
                  <div data-percent="{{$activity->percentage}}" class="progress-bar"><span class="percent">0</span></div>
                </div>
              </div>
              <div class="causes-details clearfix border-bottom p-15 pt-10 pb-10">
                <h3 class="font-weight-600"><a href="page-single-cause.html">{{$activity->title}}</a></h3>
                {{-- <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Praesent quos sit.</p> --}}
                <ul class="list-inline font-weight-600 border-top clearfix mt-20 pt-10">
                  <li class="pull-left pr-0">Raised: ${{$activity->raised}}</li>
                  <li class="text-theme-colored pull-right pr-0">Goal: ${{$activity->goal}}</li>
                </ul>
              </div>
            </div>
            <div class="event-details">
              <p class="mb-20 mt-20"> {{$activity->description}}</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="sidebar sidebar-right mt-sm-30">
              <div class="widget">
                <h4 class="widget-title line-bottom">{{$activity->title}}</h4>
                <ul class="list-divider list-border list check">
                  <li><a href="{{ route('donates') }}">{{$activity->goal}}</a></li>
                  <li><a href="{{ route('donates') }}">{{$activity->raised}}</a></li>
                  <li><a href="{{ route('donates') }}">{{$activity->percentage}}%</a></li>
                  <li><a href="{{ route('donates') }}">Please Volunteer</a></li>
                  <li><a href="{{ route('donates') }}">Please Donate</a></li>
                </ul>
              </div>
              <div class="widget">
                <h5 class="widget-title line-bottom">Images From gallery</h5>
                <div class="owl-carousel-1col">
                  @foreach ($image as $images)                  
                  <div class="item">
                    <img src="{{ '/'.$images->image }}" alt="">
                    <h4 class="title">{{ $images->title }}</h4>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Upcoming Events -->
    <section class="bg-lighter">
      <div class="container">
        <div class="section-content">
          <div class="row">
            
            <div class="col-md-5">
              <h3 class="text-uppercase title line-bottom mt-0 mb-30"><i class="fa fa-calendar text-gray-darkgray mr-10"></i>Upcoming <span class="text-theme-colored">Events</span></h3>
              @foreach($events as $event)
              <article class="post media-post clearfix pb-0 mb-10">
                <a href="#" class="post-thumb mr-20"><img alt="osuder" src="{{ URL::to('/Storage/' . $activity->image) }}"></a>
                <div class="post-right">
                  <h4 class="mt-0 mb-5"><a href="{{route('event.show',[$event->id])}}">{!! Str::limit(strip_tags($event->title), 30, '...') !!}</a></h4>
                  <ul class="list-inline font-12 mb-5">
                    <li class="pr-0"><i class="fa fa-calendar mr-5"></i> {{\Carbon\Carbon::parse($event->startdate)->format('M d Y')}}</li>
                    <li class="pl-5"><i class="fa fa-map-marker mr-5"></i>{{ $event->location }}</li>
                  </ul>
                  <p class="mb-0 font-13">{!! Str::limit(strip_tags($event->description), 50, '...') !!}</p>
                  <a class="text-theme-colored font-13" href="{{route('event.show',[$event->id])}}">Read More →</a>
                </div>
              </article>
              @endforeach
            </div>
            <div class="col-md-7">
              <h3 class="text-uppercase title line-bottom mt-0 mb-30 mt-sm-40"><i class="fa fa-thumb-tack text-gray-darkgray mr-10"></i>Latest <span class="text-theme-colored">Causes</span></h3>
              <div class="owl-carousel-2col">
                @foreach($activities as $activity)
                <div class="item">
                  <div class="causes bg-white maxwidth500 mb-sm-30">
                    <div class="thumb">
                      <img src="{{ URL::to('/Storage/' . $activity->image) }}" alt="osuder" class="img-fullwidth">
                      <div class="overlay-donate-now">
                        <a href="page-donate.html" class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10">Donate <i class="flaticon-charity-make-a-donation font-16 ml-5"></i></a>
                      </div>
                    </div>
                    <div class="progress-item mt-0">
                      <div class="progress mb-0">
                        <div data-percent="{{$activity->percentage}}" class="progress-bar"><span class="percent">0</span></div>
                      </div>
                    </div>
                    <div class="causes-details clearfix border-bottom p-15 pt-10 pb-10">
                <h5 class="font-weight-600 font-16"><a href="{{route('activity.show',[$activity->id])}}">{{$activity->title}}</a></h5>
                      <p>{!! Str::limit(strip_tags($activity->description), 90, '...') !!}</p>
                      <ul class="list-inline font-weight-600 border-top clearfix mt-20 pt-10">
                        <li class="pull-left pr-0">Raised: ${{$activity->raised}}</li>
                        <li class="text-theme-colored pull-right pr-0">Goal: ${{$activity->goal}}</li>
                      </ul>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Divider: Clients -->
    {{-- <section class="clients bg-theme-colored">
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="col-md-12">
            <!-- Section: Clients -->
            <div class="owl-carousel-6col clients-logo transparent text-center">
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}
  </div>
  <!-- end main-content -->
    
@endsection

