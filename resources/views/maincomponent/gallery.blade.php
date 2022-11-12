@extends('component.master')

@section('title', 'Gallery')

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
        <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="{{ asset("assets/images/gallery/african1.jpg") }}">
            <div class="container pt-100 pb-50">
            <!-- Section Content -->
            <div class="section-content pt-100">
                <div class="row"> 
                <div class="col-md-12">
                    <h3 class="title text-white">Gallery</h3>
                </div>
                </div>
            </div>
            </div>
        </section>
        
        <!-- Gallery Grid 3 -->
        <section>
            <div class="container">
            <div class="section-content">
                <div class="row">
                <div class="col-md-12">
                
                    <!-- Portfolio Gallery Grid -->
                    <div id="grid" class="gallery-isotope grid-3 gutter clearfix">
                        <!-- Portfolio Item Start -->
                        @foreach ($galleries as $gallery)
                            <div class="gallery-item">
                                <div class="thumb">
                                <img alt="project" src="{{ '/'.$gallery->image }}" class="img-fullwidth">
                                <div class="overlay-shade"></div>
                                <div class="icons-holder">
                                    <div class="icons-holder-inner">
                                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                        <a href="{{ '/'.$gallery->image }}"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- Portfolio Item End -->
                        
                    <!-- Portfolio Item Start -->
                    {{-- <div class="gallery-item photography">
                        <div class="thumb">
                        <img class="img-fullwidth" src="{{ asset("assets/images/gallery/african3.jpg") }}" alt="project">
                        <div class="overlay-shade"></div>
                        <div class="icons-holder">
                            <div class="icons-holder-inner">
                            <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                <a data-lightbox="image" href="{{ asset("assets/images/gallery/african3.jpg") }}"><i class="fa fa-plus"></i></a>
                            </div>
                            </div>
                        </div>
                        <a class="hover-link" data-lightbox="image" href="{{ asset("assets/images/gallery/african3.jpg") }}">View more</a>
                        </div>
                    </div> --}}
                    <!-- Portfolio Item End -->
                    
                    <!-- Portfolio Item Start -->
                    {{-- <div class="gallery-item photography">
                        <div class="thumb">
                        <img class="img-fullwidth" src="{{ asset("assets/images/gallery/african5.jpg") }}" alt="project">
                        <div class="overlay-shade"></div>
                        <div class="icons-holder">
                            <div class="icons-holder-inner">
                            <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                <a data-lightbox="image" href="{{ asset("assets/images/gallery/african5.jpg") }}"><i class="fa fa-plus"></i></a>
                            </div>
                            </div>
                        </div>
                        <a class="hover-link" data-lightbox="image" href="{{ asset("assets/images/gallery/african5.jpg") }}">View more</a>
                        </div>
                    </div> --}}
                    <!-- Portfolio Item End -->
                    
                    <!-- Portfolio Item Start -->
                    {{-- <div class="gallery-item photography">
                        <div class="thumb">
                        <img class="img-fullwidth" src="{{ asset("assets/images/gallery/african6.jpg") }}" alt="project">
                        <div class="overlay-shade"></div>
                        <div class="icons-holder">
                            <div class="icons-holder-inner">
                            <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                <a data-lightbox="image" href="{{ asset("assets/images/gallery/african6.jpg") }}"><i class="fa fa-plus"></i></a>
                            </div>
                            </div>
                        </div>
                        <a class="hover-link" data-lightbox="image" href="{{ asset("assets/images/gallery/african6.jpg") }}">View more</a>
                        </div>
                    </div> --}}
                    <!-- Portfolio Item End -->
                    
                    <!-- Portfolio Item Start -->
                    {{-- <div class="gallery-item photography">
                        <div class="thumb">
                        <img class="img-fullwidth" src="{{ asset("assets/images/gallery/african7.jpg") }}" alt="project">
                        <div class="overlay-shade"></div>
                        <div class="icons-holder">
                            <div class="icons-holder-inner">
                            <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                <a data-lightbox="image" href="{{ asset("assets/images/gallery/african7.jpg") }}"><i class="fa fa-plus"></i></a>
                            </div>
                            </div>
                        </div>
                        <a class="hover-link" data-lightbox="image" href="{{ asset("assets/images/gallery/african7.jpg") }}">View more</a>
                        </div>
                    </div> --}}
                    <!-- Portfolio Item End -->
    
                    <!-- Portfolio Item Start -->
                    {{-- <div class="gallery-item photography">
                        <div class="thumb">
                        <img class="img-fullwidth" src="http://placehold.it/470x320" alt="project">
                        <div class="overlay-shade"></div>
                        <div class="icons-holder">
                            <div class="icons-holder-inner">
                            <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                <a class="popup-youtube" href="http://www.youtube.com/watch?v=0O2aH4XLbto"><i class="fa fa-youtube-play"></i></a>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div> --}}
                    <!-- Portfolio Item End -->
                    
                    <!-- Portfolio Item Start -->
                    {{-- <div class="gallery-item photography">
                        <div class="thumb">
                        <img class="img-fullwidth" src="{{ asset("assets/images/gallery/african8.jpg") }}" alt="project">
                        <div class="overlay-shade"></div>
                        <div class="icons-holder">
                            <div class="icons-holder-inner">
                            <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                <a data-lightbox="image" href="{{ asset("assets/images/gallery/african8.jpg") }}"><i class="fa fa-plus"></i></a>
                            </div>
                            </div>
                        </div>
                        <a class="hover-link" data-lightbox="image" href="{{ asset("assets/images/gallery/african8.jpg") }}">View more</a>
                        </div>
                    </div> --}}
                    <!-- Portfolio Item End -->
    
                    <!-- Portfolio Item Start -->
                    {{-- <div class="gallery-item design">
                        <div class="thumb">
                        <div class="flexslider-wrapper">
                            <div class="flexslider">
                            <ul class="slides">
                                <li><a href="http://placehold.it/470x320" title="Portfolio Gallery - Photo 1"><img src="http://placehold.it/470x320" alt=""></a></li>
                                <li><a href="http://placehold.it/470x320" title="Portfolio Gallery - Photo 2"><img src="http://placehold.it/470x320" alt=""></a></li>
                                <li><a href="http://placehold.it/470x320" title="Portfolio Gallery - Photo 3"><img src="http://placehold.it/470x320" alt=""></a></li>
                            </ul>
                            </div>
                        </div>
                        <div class="overlay-shade"></div>
                        <div class="icons-holder">
                            <div class="icons-holder-inner">
                            <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                <a href="#"><i class="fa fa-picture-o"></i></a>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div> --}}
                    <!-- Portfolio Item End -->
    
                    <!-- Portfolio Item Start -->
                    {{-- <div class="gallery-item photography">
                        <div class="thumb">
                        <img class="img-fullwidth" src="{{ asset("assets/images/gallery/african1.jpg") }}" alt="project">
                        <div class="overlay-shade"></div>
                        <div class="icons-holder">
                            <div class="icons-holder-inner">
                            <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                <a data-lightbox="image" href="{{ asset("assets/images/gallery/african1.jpg") }}"><i class="fa fa-plus"></i></a>
                            </div>
                            </div>
                        </div>
                        <a class="hover-link" data-lightbox="image" href="{{ asset("assets/images/gallery/african1.jpg") }}">View more</a>
                        </div>
                    </div> --}}
                    <!-- Portfolio Item End -->

                    <!-- End Portfolio Gallery Grid -->
    
                </div>
                </div>
            </div>
            </div>
        </section>
    
        </div>
        <!-- end main-content -->
        
        <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    </div>
@endsection