@extends('component.master')
@section('content')

     <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="{{ asset('assets/images/index/e6.jpg') }}">
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

    <!-- Section: Events Grid -->
    <section>
      <div class="container pb-30">
        <div class="section-content">
          <div class="row">
            @foreach($events as $event)
            <div class="col-sm-4 col-md-4 col-lg-4 border shadow ">
                <div class="schedule-box maxwidth-500 bg-lighter mb-30">
					<div class="thumb">
						<img class="img-fullwidth" style="height: 80% ;width:auto"  alt="" src="{{ 'storage/'.$event->image }}">
					</div>
					<div class="schedule-details clearfix p-15 pt-10">
						<div class="text-center pull-left flip bg-theme-colored p-10 pt-5 pb-5 mr-10">
							<ul>
							<li class="font-19 text-white font-weight-600 border-bottom ">{{\Carbon\Carbon::parse($event->startdate)->format('d')}}</li>
							<li class="font-12 text-white text-uppercase">{{\Carbon\Carbon::parse($event->startdate)->format('M')}}</li>
							</ul>
						</div>
						<h4 class="title mt-0"><a href="{{route('event.show',[$event->id])}}">{{$event->title}}</a></h4>
						<ul class="list-inline font-11 text-gray">
							<li><i class="fa fa-calendar mr-5"></i> {{$event->time}}</li>
							<li><i class="fa fa-map-marker mr-5"></i> {{$event->venue}}.</li>
						</ul>
						{{-- <div class="clearfix">
							<p class="mt-10">{!! Str::limit(strip_tags($event->description), 150, '...') !!}</p>

						</div> --}}
						<div class="mt-5 pt-5">
							<p class="mt-10">{!! Str::limit(strip_tags($event->description), 150, '...') !!}</p>

						</div>
						<div class="mt-10">
						{{-- <a class="btn btn-default btn-sm mt-10 " href="#">Register</a> --}}
						<a href="{{route('event.show',[$event->id])}}" class="btn btn-dark btn-theme-colored btn-sm mt-10">Details</a>
						</div>
					</div>
                </div>
            </div>
            @endforeach
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
    
@endsection