@extends('component.master')

@section('title', 'News Articles')

@section('styles')
   <style>
       .thumb img{          
            width:  300px;
            height: 300px;
            background-size: cover; 
       }
   </style>
@endsection
    
@section('content')
  <div id="wrapper" class="clearfix">

    <!-- Start main-content -->
    <div class="main-content">
  
      <!-- Section: inner-header -->
      <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="{{ asset("assets/images/index/bg1.jpg") }}">
        <div class="container pt-100 pb-50">
          <!-- Section Content -->
          <div class="section-content pt-100">
            <div class="row"> 
              <div class="col-md-12">
                <h3 class="title text-white">Blog</h3>
              </div>
            </div>
          </div>
        </div>
      </section>
  
      <section>
        <div class="container">
          <div class="row multi-row-clearfix">
            <div class="blog-posts">
              @foreach ($blogs as $blog)
                  <div class="col-md-4">
                    <article class="post clearfix mb-30 bg-lighter">
                        <div class="entry-header">
                          <div class="thumb"> 
                            <img src="{{ '/'.$blog->image }}" alt="" class="img-responsive img-fullwidth"> 
                          </div>
                        </div>
                        <div class="entry-content p-20 pr-10">
                          <div class="entry-meta media mt-0 no-bg no-border">
                            <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                              <ul>
                                <li class="font-16 text-white font-weight-600">{{ $blog->created_at->format('d') }}</li>
                                <li class="font-12 text-white text-uppercase">{{ $blog->created_at->format('M') }}</li>
                              </ul>
                            </div>
                            <div class="media-body pl-15">
                              <div class="event-content pull-left flip">
                                <h4 class="entry-title text-black text-uppercase m-0 mt-5"><a href="{{ route('news.show', $blog->slug) }}">{{ $blog->title }}</a></h4>
                                <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> {{ count($blog->comments->where('valid', 1)) }} Comments</span>                       
                                {{-- <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>                        --}}
                              </div>
                            </div>
                          </div>

                          <p class="mt-10">{!! Str::limit(strip_tags($blog->description), 200, '...') !!}</p>
                          <a href="{{ route('news.show', $blog->slug) }}" class="btn-read-more">Read more</a>
                          <div class="clearfix"></div>
                        </div>
                    </article>
                  </div>
              @endforeach
              <div class="col-md-12 mt-3">
                <nav aria-label="Page navigation example">
                  {{ $blogs->links() }}
                  </nav>
              </div>

              {{-- <div class="col-md-12 text-center">
                <nav>
                  <ul class="pagination theme-colored">
                    <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">«</span> </a> </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">...</a></li>
                    <li> <a href="#" aria-label="Next"> <span aria-hidden="true">»</span> </a> </li>
                  </ul>
                </nav>
              </div> --}}
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- end main-content -->
    
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  </div>
@endsection