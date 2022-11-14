@extends('component.master')
@section('content')

     
  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="{{ asset("assets/images/index/osud3.jpg") }}">
      <div class="container pt-100 pb-50">
        <!-- Section Content -->
        <div class="section-content pt-100">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-white">Causes Grid</h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Causes -->
    <section>
      <div class="container">
        <div class="section-content">
          <div class="row multi-row-clearfix">
            @foreach($activities as $activity)
            <div class="col-sm-6 col-md-4 col-lg-4">
              <div class="causes bg-white maxwidth500 mb-30">
                <div class="thumb">
                  <img src="{{ 'storage/'.$activity->image }}" alt="osuder" height="270" class="img-fullwidth">
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
                  <h5 class="font-weight-600 font-16"><a href="{{route('activity.show',[$activity->id])}}">{!! Str::limit(strip_tags($activity->title), 35, '...') !!}</a></h5>
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
    </section>
  </div>
  <!-- end main-content -->

    
@endsection