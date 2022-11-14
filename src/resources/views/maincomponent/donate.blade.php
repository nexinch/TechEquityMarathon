@extends('component.master')

@section('title', 'Donate')

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
                    <h3 class="title text-white">Donate</h3>
                </div>
                </div>
            </div>
            </div>
        </section>
    
        <!-- Section: DonetForm & Testimonials -->
        <section>
            <div class="container">
            <div class="section-content">
                <div class="row">
                {{-- <div class="col-xs-12 col-sm-6 col-md-5"></div> --}}
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
                                            500
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
                {{-- <div class="col-xs-12 col-sm-6 col-md-6">
                    <h3 class="mt-0 line-bottom">Testimonials</h3>
                    <div class="testimonial style1 owl-carousel-1col owl-nav-top">
                    <div class="item">
                        <div class="comment bg-theme-colored">
                        <p>Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis.</p>
                        </div>
                        <div class="content mt-20">
                        <div class="thumb pull-right">
                            <img class="img-circle" alt="" src="http://placehold.it/75x75">
                        </div>
                        <div class="patient-details text-right pull-right mr-20 mt-10">
                            <h5 class="author text-theme-colored">Jonathan Smith</h5>
                            <h6 class="title">cici inc.</h6>
                        </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="comment bg-theme-colored">
                        <p>Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis.</p>
                        </div>
                        <div class="content mt-20">
                        <div class="thumb pull-right">
                            <img class="img-circle" alt="" src="http://placehold.it/75x75">
                        </div>
                        <div class="patient-details text-right pull-right mr-20 mt-10">
                            <h5 class="author text-theme-colored">Jonathan Smith</h5>
                            <h6 class="title">cici inc.</h6>
                        </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="comment bg-theme-colored">
                        <p>Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis.</p>
                        </div>
                        <div class="content mt-20">
                        <div class="thumb pull-right">
                            <img class="img-circle" alt="" src="http://placehold.it/75x75">
                        </div>
                        <div class="patient-details text-right pull-right mr-20 mt-10">
                            <h5 class="author text-theme-colored">Jonathan Smith</h5>
                            <h6 class="title">cici inc.</h6>
                        </div>
                        </div>
                    </div>
                    </div>
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