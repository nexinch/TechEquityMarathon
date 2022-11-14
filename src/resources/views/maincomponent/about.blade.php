@extends('component.master')

@section('title', 'About')

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
                    <h3 class="title text-white">About</h3>
                </div>
                </div>
            </div>
            </div>
        </section>    
    
        <!-- Section: About Us -->
        <section id="about">
            <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-5">
                        <h2>About Tech Equity</h2>
                        <p class="">
                           Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet atque cupiditate at est, maxime veniam natus eos saepe adipisci! Exercitationem minima eligendi dolores quam esse consequuntur non recusandae alias veniam.
                        </p>
                        
                    </div>
                    <div class="col-md-3">
                        <div class="icon-box text-center p-0 mb-sm-60 p-60 border-1px border-theme-colored">
                                <i class="flaticon-charity-shaking-hands-inside-a-heart font-54 text-theme-colored"></i>
                                {{-- <div>
                                    <h4 class="icon-box-title mt-15 mb-10 text-uppercase letter-space-2"><strong>Become a Volunteer</strong></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum diam tortor, egestas varius erat aliquam a. </p>
                                    <a href="#" class="btn btn-dark btn-theme-colored btn-sm mt-10">Sing Up Today!</a>
                                </div> --}}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="donate-thumb">
                            <h1>LOGO</h1>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    
        <section class="divider parallax layer-overlay overlay-deep" data-bg-img="{{ asset("assets/images/gallery/african1.jpg") }}">
            <div class="container">
                <div class="row text-justify">
                    <div class="col-md-6">
                    <h3 class="line-bottom">Purpose & Goals</h3>
                    <p>
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis libero, esse eos quas accusamus, atque quasi tempore eligendi repellendus quisquam omnis iure quibusdam sit voluptatibus! Nihil quidem et corrupti temporibus.                    </p>
                    </div>
                    <div class="col-md-6">
                    <h3 class="line-bottom">Our Vision</h3>
                    <p>
                        We are a non profit, apolitical, without distinction of race, tribe, sex and religion organization
                    </p>
                    </div>
                </div>
                <div class="col-lg-12 mb-3 mb-lg-0">
                    <h3 class="line-bottom">Our Objectives</h3>
                    <div class="row">
                        <div class="col-lg-6 text-justify">
                            <ul style="list-style-type: circle">
                                <li>We promote and support capacity of poor and vulnurable women</li>
                                <li>Provide access to health service to poor communities</li>
                                <li>Promote and support gender equality</li>
                                <li>Improve livelihood amongst the poorer folks of the population</li>
                                <li>Support refugees and internally displaced persons in Cameroon</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul style="list-style-type: circle">
                                <li>Empower unemployed youths</li>
                                <li>Promote Quality education</li>
                                <li>Supports persons with special needs to participate fully in the developement of thier communities</li>
                                <li>Provide portable water to communities in need</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Section: volunteers -->
        <section>
            <div class="container">
            <div class="section-title">
                <div class="row">
                <div class="col-md-6">
                    <h2 class="mt-0 text-uppercase font-28">Our <span class="text-theme-colored font-weight-400">Team</span> <span class="font-30 text-theme-colored">.</span></h2>
                    <div class="icon">
                        <i class="fa fa-hospital-o"></i>
                    </div>
                </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                <div class="col-sm-6 col-md-3 col-lg-3 pb-sm-30">
                    <div class="team-member">
                    <div class="volunteer-thumb"> <img src="http://placehold.it/270x270" alt="" class="img-fullwidth img-responsive"> </div>
                    <div class="bg-lighter text-center pt-20">
                        <div class="member-biography">
                        <h3 class="mt-0">Steve Smith</h3>
                        </div>
                        <ul class="styled-icons icon-theme-colored icon-circled pt-5">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 pb-sm-30">
                    <div class="team-member">
                    <div class="volunteer-thumb"> <img src="http://placehold.it/270x270" alt="" class="img-fullwidth img-responsive"> </div>
                    <div class="bg-lighter text-center pt-20">
                        <div class="member-biography">
                        <h3 class="mt-0">Steve Smith</h3>
                        </div>
                        <ul class="styled-icons icon-theme-colored icon-circled pt-5">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 pb-sm-30">
                    <div class="team-member">
                    <div class="volunteer-thumb"> <img src="http://placehold.it/270x270" alt="" class="img-fullwidth img-responsive"> </div>
                    <div class="bg-lighter text-center pt-20">
                        <div class="member-biography">
                        <h3 class="mt-0">Steve Smith</h3>
                        </div>
                        <ul class="styled-icons icon-theme-colored icon-circled pt-5">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 pb-sm-30">
                    <div class="team-member">
                    <div class="volunteer-thumb"> <img src="http://placehold.it/270x270" alt="" class="img-fullwidth img-responsive"> </div>
                    <div class="bg-white text-center pt-20">
                        <div class="member-biography">
                        <h3 class="mt-0">Steve Smith</h3>
                        </div>
                        <ul class="styled-icons icon-theme-colored icon-circled pt-5">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </section>
        <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    </div>
@endsection