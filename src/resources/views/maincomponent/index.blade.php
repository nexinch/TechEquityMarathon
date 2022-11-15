@extends('component.master')

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

  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->
    <section id="home">
      <div class="container-fluid p-0">
        
        <!-- Slider Revolution Start -->
        <div class="rev_slider_wrapper">
          <div class="rev_slider rev_slider_default" data-version="5.0">
            <ul>

              <!-- SLIDE 1 -->
              <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="http://placehold.it/1920x1280" data-rotate="0" data-saveperformance="off" data-title="Slide 2" data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{ asset("assets/images/index/bg1.jpg") }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
                  id="rs-1-layer-1"

                  data-x="['left']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['-110']" 
                  data-fontsize="['110']"
                  data-lineheight="['120']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:700;">Donate
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent pl-20 pr-20"
                  id="rs-1-layer-2"

                  data-x="['left']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['-25']" 
                  data-fontsize="['35']"
                  data-lineheight="['54']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:600;">For the poor children 
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white" 
                  id="rs-1-layer-3"

                  data-x="['left']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['35','35','40']"
                  data-fontsize="['16','18',24']"
                  data-lineheight="['28']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">Every day we bring hope to millions of children in the world's<br>  hardest places as a sign of God's unconditional love.
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme" 
                  id="rs-1-layer-4"

                  data-x="['left']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['95','105','110']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-theme-colored pl-20 pr-20" href="{{ route('donates') }}">Donate Now</a> 
                </div>
              </li>

              <!-- SLIDE 2 -->
              <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="http://placehold.it/1920x1280" data-rotate="0" data-saveperformance="off" data-title="Slide 1" data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{ asset("assets/images/index/osud1.jpg") }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme text-uppercase  bg-dark-transparent text-white font-raleway pl-30 pr-30"
                  id="rs-2-layer-1"
                
                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['-90']" 
                  data-fontsize="['28']"
                  data-lineheight="['54']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:400; border-radius: 30px;">For the poor children 
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-uppercase bg-theme-colored-transparent text-white font-raleway pl-30 pr-30"
                  id="rs-2-layer-2"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['-20']"
                  data-fontsize="['48']"
                  data-lineheight="['70']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:700; border-radius: 30px;">raise your helping hand 
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white text-center" 
                  id="rs-2-layer-3"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['50']"
                  data-fontsize="['16','18',24']"
                  data-lineheight="['28']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">Every day we bring hope to millions of children in the world's<br>  hardest places as a sign of God's unconditional love.
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme" 
                  id="rs-2-layer-4"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['115']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-default btn-circled btn-transparent pl-20 pr-20" href="{{ route('donates') }}">Donate Now</a> 
                </div>
              </li>

              <!-- SLIDE 3 -->
              <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="http://placehold.it/1920x1280" data-rotate="0" data-saveperformance="off" data-title="Slide 3" data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{ asset("assets/images/index/osud2.jpg") }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent pr-20 pl-20"
                  id="rs-3-layer-1"

                  data-x="['right']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['-90']" 
                  data-fontsize="['64']"
                  data-lineheight="['72']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:600;"><span class="">Help</span> The Poor
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
                  id="rs-3-layer-2"

                  data-x="['right']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['-25']" 
                  data-fontsize="['32']"
                  data-lineheight="['54']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:600;">For Their Better Future 
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white text-right" 
                  id="rs-3-layer-3"

                  data-x="['right']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['30']"
                  data-fontsize="['16','18',24']"
                  data-lineheight="['28']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">Every day we bring hope to millions of children in the world's<br>  hardest places as a sign of God's unconditional love.
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme" 
                  id="rs-3-layer-4"

                  data-x="['right']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['95']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-flat btn-theme-colored pl-20 pr-20" href="{{ route('donates') }}">Donate Now</a> 
                </div>
              </li>

            </ul>
          </div>
          <!-- end .rev_slider -->
        </div>
        <!--  Revolution slider scriopt -->
        <script>
          $(document).ready(function(e) {
            $(".rev_slider_default").revolution({
              sliderType:"standard",
              sliderLayout: "auto",
              dottedOverlay: "none",
              delay: 5000,
              navigation: {
                keyboardNavigation: "off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                onHoverStop: "off",
                touch: {
                  touchenabled: "on",
                  swipe_threshold: 75,
                  swipe_min_touches: 1,
                  swipe_direction: "horizontal",
                  drag_block_vertical: false
                },
                arrows: {
                  style:"zeus",
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                  left: {
                    h_align:"left",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  },
                  right: {
                    h_align:"right",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  }
                },
                bullets: {
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  style:"metis",
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  direction:"horizontal",
                  h_align:"center",
                  v_align:"bottom",
                  h_offset:0,
                  v_offset:30,
                  space:5,
                  tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title"></span>'
                }
              },
              responsiveLevels: [1240, 1024, 778],
              visibilityLevels: [1240, 1024, 778],
              gridwidth: [1170, 1024, 778, 480],
              gridheight: [700, 768, 960, 720],
              lazyType: "none",
              parallax: {
                origo: "slidercenter",
                speed: 1000,
                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                type: "scroll"
              },
              shadow: 0,
              spinner: "off",
              stopLoop: "on",
              stopAfterLoops: 0,
              stopAtSlide: -1,
              shuffle: "off",
              autoHeight: "off",
              fullScreenAutoWidth: "off",
              fullScreenAlignForce: "off",
              fullScreenOffsetContainer: "",
              fullScreenOffset: "0",
              hideThumbsOnMobile: "off",
              hideSliderAtLimit: 0,
              hideCaptionAtLimit: 0,
              hideAllCaptionAtLilmit: 0,
              debugMode: false,
              fallbacks: {
                simplifyAll: "off",
                nextSlideOnWindowFocus: "off",
                disableFocusListener: false,
              }
            });
          });
        </script>
        <!-- Slider Revolution Ends -->
      </div>
    </section>

    <!-- Section: home-boxes -->
    <section>
      <div class="container pt-0 pb-0">
        <div class="section-content">
          <div class="row equal-height-inner home-boxes" data-margin-top="-100px">
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay1">
              <div class="sm-height-auto bg-theme-colored">
                <div class="text-center pt-10 pb-30">
                  <i class="flaticon-charity-shaking-hands-inside-a-heart text-white font-64"></i>
                  <h4 class="text-uppercase mt-0"><a href="{{ route('donates') }}" class="text-white">Help The Children</a></h4>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
              <div class="sm-height-auto bg-theme-colored-darker2">
                <div class="text-center pt-10 pb-30">
                  <i class="flaticon-charity-make-an-online-donation text-white font-64"></i>
                  <h4 class="text-uppercase mt-0"><a href="{{ route('donates') }}" class="text-white">Please Donate Us</a></h4>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay3">
              <div class="sm-height-auto bg-theme-colored-darker3">
                <div class="text-center pt-10 pb-30">
                  <i class="flaticon-charity-child-hand-on-adult-hand text-white font-64"></i>
                  <h4 class="text-uppercase mt-0"><a href="#" class="text-white">Become a Volunteer</a></h4>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay4">
              <div class="sm-height-auto bg-theme-colored-darker4">
                <div class="text-center pt-10 pb-30">
                  <i class="flaticon-charity-world-in-your-hands text-white font-64"></i>
                  <h4 class="text-uppercase mt-0"><a href="{{ route('donates') }}" class="text-white">Reduce World Poverty</a></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: About  -->
    <section id="about">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 pb-sm-20">
              <h3 class="line-bottom mt-0">ABOUT<span class="text-theme-colored"> Tech Equity</span></h3>
              <div class="image-box-thum">
                <h1>LOGO</h1>
              </div>
              <div class="image-box-details pt-20 pb-sm-20">
                <p class="lead mb-15">Organization for Sustainable Technological Development<span class="text-theme-colored">, </span></p>
                <p class="desc mb-10">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque rem, cumque asperiores unde voluptate illum veritatis labore praesentium nisi, numquam perferendis magnam temporibus aliquam odit quis consequuntur aliquid, natus ducimus!

                </p>
                <a href="/about" class="btn btn-sm btn-theme-colored mt-10">Read more</a>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 pb-sm-20">
              <h3 class="line-bottom mt-0">Running <span class="text-theme-colored">Causes</span></h3>
             {{-- <div class="owl-carousel-1col owl-nav-top" data-nav="true">
                @foreach ($activitys as $activity)
                <div class="item">
                  <div class="causes bg-white maxwidth500 mb-30">
                    <div class="thumb">
                      <img src="{{ URL::to('/Storage/' . $activity->image) }}" alt="ent" class="img-fullwidth">
                      <div class="overlay-donate-now">
                        <a href="{{ route('donates') }}" class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10">Donate <i class="flaticon-charity-make-a-donation font-16 ml-5"></i></a>
                      </div>
                    </div>
                    <div class="progress-item mt-0">
                      <div class="progress mb-0">
                        <div data-percent="{{ $activity->percentage }}" class="progress-bar"><span class="percent">0</span></div>
                      </div>
                    </div>
                    <div class="causes-details clearfix border-bottom p-15 pt-10 pb-10">
                      <h5 class="font-weight-600 font-16"><a href="page-single-cause.html">{!! Str::limit(strip_tags($activity->title), 20, '...') !!}</a></h5>
                      <p>{!! Str::limit(strip_tags($activity->description), 100, '...') !!}</p>
                      <ul class="list-inline font-weight-600 border-top clearfix mt-20 pt-10">
                        <li class="pull-left pr-0">Raised: FCFA{{ $activity->raised }}</li>
                        <li class="text-theme-colored pull-right pr-0">Goal: FCFA{{ $activity->goal }}</li>
                      </ul>
                    </div>
                  </div>
                </div>
                @endforeach
              </div> --}}
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 pb-sm-20">
              <h3 class="line-bottom mt-0">Upcoming <span class="text-theme-colored">Events</span></h3>
             {{-- <div class="bxslider bx-nav-top" data-count="3">
                @foreach($events as $event)
                <div class="event media mt-0 mb-20 no-bg no-border">
                  <div class="event-date media-left text-center flip bg-theme-colored p-15 pt-20">
                    <ul>
                      <li class="font-24 text-white font-weight-600 border-bottom pb-10">{{\Carbon\Carbon::parse($event->startdate)->format('d')}}</li>
                      <li class="font-18 text-white text-uppercase">{{\Carbon\Carbon::parse($event->startdate)->format('M')}}</li>
                    </ul>
                  </div>
                  <div class="media-body pl-20">
                    <div class="event-content pull-left flip">
                      <h4 class="event-title media-heading font-weight-700 mb-0"><a href="#">{!! Str::limit(strip_tags($event->title), 20, '...') !!}</a></h4>
                      <span class="inline-block text-gray-darkgray mr-10 font-11"><i class="fa fa-clock-o mr-5 text-theme-colored"></i> {{$event->time}}</span>
                      <span class="text-gray-darkgray font-11"><i class="fa fa-map-marker mr-5"></i> {{$event->venue}}</span>
                      <p class="mt-5">{!! Str::limit(strip_tags($event->description), 50, '...') !!}</p>
                    </div>
                  </div>
                </div>
                @endforeach
              </div> --}}
              <a class="text-theme-colored font-weight-600 inline-block mt-15" href="{{ route('event.index') }}">more events →</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Causes -->
    <section class="bg-silver-light">
      <div class="container pb-40">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase line-bottom-center mt-0">Our Causes</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
            </div>
          </div>
        </div>
        
       {{-- <div class="row multi-row-clearfix">
          @foreach($activities as $activity)
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="causes bg-white maxwidth500 mb-30">
              <div class="thumb">
                <img src="{{ URL::to('/Storage/' . $activity->image) }}" height="320" alt="" class="img-fullwidth">
                <div class="overlay-donate-now">
                  <a href="{{ route('donates') }}" class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10">Donate <i class="flaticon-charity-make-a-donation font-16 ml-5"></i></a>
                </div>
              </div>
              <div class="progress-item mt-0">
                <div class="progress mb-0">
                  <div data-percent="{{ $activity->percentage }}" class="progress-bar"><span class="percent">0</span></div>
                </div>
              </div>
              <div class="causes-details clearfix border-bottom p-15 pt-10 pb-10">
                <h5 class="font-weight-600 font-16"><a href="{{route('event.show',[$activity->id])}}">{!! Str::limit(strip_tags($activity->description), 30, '...') !!}</a></h5>
                <p>{!! Str::limit(strip_tags($activity->description), 50, '...') !!}</p>
                <ul class="list-inline font-weight-600 border-top clearfix mt-20 pt-10">
                  <li class="pull-left pr-0">Raised: ${{ $activity->raised }}</li>
                  <li class="text-theme-colored pull-right pr-0">Goal: ${{ $activity->goal }}</li>
                </ul>
              </div>
            </div>
          </div>
          @endforeach
        </div> --}}
       
      </div>
    </section>

    <!-- divider: Emergency Services -->
    <section class="divider parallax layer-overlay overlay-white-9" data-stellar-background-ratio="0.2"  data-bg-img="http://placehold.it/1920x1280">
      <div class="container">
        <div class="section-content text-center">
          <div class="row">
            <div class="col-md-12">
              <h3 class="mt-0">How you can help us</h3>
              <h2>Just call at <span class="text-theme-colored">(+237) 00 00 00 00 00 </span> to make a donation</h2>
            </div>
          </div>
        </div>
      </div>      
    </section>    

    <!-- Section: Mission  -->
    <section>
      <div class="container pb-30">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h3 class="text-center mt-0">Our Mission</h3>
              <p class="mb-30 text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste, architecto. Ea, dolorem! Consequuntur autem ex officia cum voluptatum saepe, ad mollitia atque expedita ipsa, assumenda, asperiores possimus accusamus delectus. Ipsa?</p>
              <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="icon-box p-0 mb-30">
                    <a class="icon icon-sm pull-left sm-pull-none flip bg-theme-colored mb-sm-15 mb-0 mr-10" href="#">
                      <i class="flaticon-charity-shelter text-white font-36"></i>
                    </a>
                    <h4 class="icon-box-title m-0 mb-5">Shelter for Poor</h4>
                    <p class="text-gray mb-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non sapiente ullam maxime. Exercitationem ratione animi autem officia distinctio assumenda aut voluptas. Magnam officia rem illum distinctio laudantium illo voluptas. Aliquid.</p>
                   <a href="/about" class="text-theme-colored font-13">Read More →</a>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="icon-box p-0 mb-30">
                    <a class="icon icon-sm pull-left sm-pull-none flip bg-theme-colored mb-sm-15 mb-0 mr-10" href="#">
                      <i class="flaticon-charity-shaking-hands-inside-a-heart text-white font-36"></i>
                    </a>
                    <h4 class="icon-box-title m-0 mb-5">Help Poor Childreen</h4>
                    <p class="text-gray mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia aliquid ipsa architecto maantium quisquam culpa.\ </p>
                   <a href="/about" class="text-theme-colored font-13">Read More →</a>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="icon-box p-0 mb-30">
                    <a class="icon icon-sm pull-left sm-pull-none flip bg-theme-colored mb-sm-15 mb-0 mr-10" href="#">
                      <i class="flaticon-charity-alms text-white font-36"></i>
                    </a>
                    <h4 class="icon-box-title m-0 mb-5">Funding for Poor</h4>
                    <p class="text-gray mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia aliquid ipsa architecto maantium quisquam culpa.\</p>
                   <a href="/about" class="text-theme-colored font-13">Read More →</a>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="icon-box p-0 mb-30">
                    <a class="icon icon-sm pull-left sm-pull-none flip bg-theme-colored mb-sm-15 mb-0 mr-10" href="#">
                      <i class="flaticon-charity-world-in-your-hands text-white font-36"></i>
                    </a>
                    <h4 class="icon-box-title m-0 mb-5">Reduce World Poverty</h4>
                    <p class="text-gray mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia aliquid ipsa architecto maantium quisquam culpa.\</p>
                   <a href="/about" class="text-theme-colored font-13">Read More →</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    

    <!-- Section: Gallery -->
    <section id="gallery">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase line-bottom-center mt-0">Photo Gallery</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <!-- Portfolio Gallery Grid -->

              <div class="gallery-isotope grid-4 gutter-small clearfix" data-lightbox="gallery">
                <!-- Portfolio Item Start -->
                {{--@foreach ($galleries as $gallery)
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
                @endforeach--}}
                <!-- Portfolio Item End -->
              </div>
              <!-- End Portfolio Gallery Grid -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- divider: Donate Now -->
    <section class="divider parallax layer-overlay overlay-white-6" data-stellar-background-ratio="0.4"  data-bg-img="{{ asset("assets/images/index/bg1.jpg") }}">
        <div class="container">
        <div class="section-content">
            <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <h3 class="mt-0 line-bottom">Make a Donation<span class="font-weight-300"> Now!</span></h3>

                <!-- ===== START: Paypal Both Onetime/Recurring Form ===== -->
                <form action="{{ route('donate.store') }}" method="POST" id="custom_amount">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <img src="images/payment-card-logo-sm.png" alt="">
                            <div class="form-group mt-20 mb-20">
                                <label><strong>Name</strong></label> <br>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group mb-20">
                            <label><strong>Your Email</strong></label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group mb-20">
                                <label><strong>How much do you want to donate?</strong></label>
                                <div class="radio mt-5">
                                    <label class="radio-inline">
                                        <input type="radio" name="amount" value="500" checked>
                                        500898909
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="amount" value="1000">
                                        1000
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="amount" value="2000">
                                        2000
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="amount" value="5000">
                                        5000
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="amount" value="10000">
                                        10000
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="amount" value="other">
                                        Other Amount
                                    </label>
                                </div>
                                <div id="custom_other_amount">
                                    <label><strong>Custom Amount:</strong></label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-flat btn-dark btn-theme-colored mt-10 pl-30 pr-30" data-loading-text="Please wait...">Donate Now</button>
                            </div>
                        </div>
                    </div>
                </form>
                
                <!-- Script for Donation Form Custom Amount -->
                <script type="text/javascript">
                    $(document).ready(function(e) {
                    var $donation_form = $("#custom_amount");
                    //toggle custom amount
                    var $custom_other_amount = $donation_form.find("#custom_other_amount");
                    $custom_other_amount.hide();
                    $donation_form.find("[name='amount']").change(function() {
                        var $this = $(this);
                        if ($this.val() == 'other') {
                            $custom_other_amount.show().append('<div class="input-group"><span class="input-group-addon"></span> <input id="input_other_amount" type="text" name="amount" class="form-control" value="500"/></div>');
                        }
                        else{
                            $custom_other_amount.children( ".input-group" ).remove();
                            $custom_other_amount.hide();
                        }
                    });

                    //toggle donation_type_choice
                    var $donation_type_choice = $donation_form.find("#donation_type_choice");
                    $donation_type_choice.hide();
                    $("input[name='payment_type']").change(function() {
                        if (this.value == 'recurring') {
                            $donation_type_choice.show();
                        }
                        else {
                            $donation_type_choice.hide();
                        }
                    });

                    });
                </script>
                
              </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Section: blog -->
    <section id="blog">
      <div class="container">
        <div class="section-title">
          <div class="row">
            <div class="col-md-6">
              <h5 class="font-weight-300 m-0"></h5>
              <h2 class="mt-0 text-uppercase font-28">Latest <span class="text-theme-colored font-weight-400">News</span> <span class="font-30 text-theme-colored">.</span></h2>
              <div class="icon">
                <i class="fa fa-hospital-o"></i>
              </div>
             
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
          {{--  @foreach ($blogs as $blog)
              <div class="col-xs-12 col-sm-6 col-md-4">
                <article class="post clearfix mb-sm-30 bg-silver-light">
                  <div class="entry-header">
                    <div class="thumb"> 
                      <img src="{{ '/'.$blog->image }}" alt="" class="img-responsive img-fullwidth"> 
                    </div>
                  </div>
                  <div class="entry-content p-20 pr-10">
                    <div class="entry-meta media mt-0 no-bg no-border">
                      <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                        <ul>
                          <li class="font-16 text-white font-weight-600 border-bottom">{{ $blog->created_at->format('d') }}</li>
                          <li class="font-12 text-white text-uppercase">{{ $blog->created_at->format('M') }}</li>
                        </ul>
                      </div>
                      <div class="media-body pl-15">
                        <div class="event-content pull-left flip">
                          <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="{{ route('news.show', $blog->slug) }}">{{ $blog->title }}</a></h4>
                          <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> {{ count($blog->comments->where('valid', 1)) }} Comments</span>                       
                        </div>
                      </div>
                    </div>
                    <p class="mt-10">{!! Str::limit(strip_tags($blog->description), 200, '...') !!}</p>
                    <a href="#" class="btn-read-more">Read more</a>
                    <div class="clearfix"></div>
                  </div>
                </article>
              </div>
            @endforeach --}}
          </div>
        </div>
      </div>
    </section>

    <!-- Section: divider -->
    <section class="bg-theme-colored">
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="col-md-12">
            <div class="call-to-action pt-30 pb-30">
              <div class="col-md-9">
                <h3 class="text-white">Lets Change the world we all together, join us now as a volunteer</h3>
              </div>
              <div class="col-md-3 text-right sm-text-center"> 
                <a href="#" class="btn btn-transparent btn-border btn-circled btn-lg mt-10">Become a Volunteer</a> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
@endsection