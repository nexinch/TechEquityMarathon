@extends('component.master')

@section('title', 'Contact')

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
                    <h3 class="title text-white">Contact</h3>
                </div>
                </div>
            </div>
            </div>
        </section>
    
        <!-- Section: Have Any Question -->
        <section class="divider">
            <div class="container pt-60 pb-60">
            <div class="section-title mb-60">
                <div class="row">
                <div class="col-md-12">
                    <div class="esc-heading small-border text-center">
                    <h3>Have any Questions?</h3>
                    </div>
                </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="contact-info text-center">
                    <i class="fa fa-phone font-36 mb-10 text-theme-colored"></i>
                    <h4>Call Us</h4>
                    <h6 class="text-gray">Phone: + 237 677 952 787</h6>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="contact-info text-center">
                    <i class="fa fa-map-marker font-36 mb-10 text-theme-colored"></i>
                    <h4>Address</h4>
                    <h6 class="text-gray">Bamenda, North West, CAMEROON</h6>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="contact-info text-center">
                    <i class="fa fa-envelope font-36 mb-10 text-theme-colored"></i>
                    <h4>Email</h4>
                    <h6 class="text-gray">contact@websitw.org</h6>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </section>
        
        <!-- Divider: Contact -->
        <section class="divider bg-lighter">
            <div class="container">
            <div class="row pt-30">
                <div class="col-md-7">
                    <h3 class="line-bottom mt-0 mb-30">Interested in discussing?</h3>

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                    @endif
                    
                    <!-- Contact Form -->
                    <form id="contact_form" name="contact_form" class="" action="#" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label>Name <small>*</small></label>
                            <input name="name" class="form-control" type="text" placeholder="Enter Name" required="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label>Email <small>*</small></label>
                            <input name="email" class="form-control required email" type="email" placeholder="Enter Email">
                            </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label>Subject <small>*</small></label>
                            <input name="subject" class="form-control required" type="text" placeholder="Enter Subject">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label>Phone</label>
                            <input name="contact" class="form-control" type="text" placeholder="Enter Phone">
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label>Message</label>
                        <textarea name="message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                        </div>
                        <div class="form-group">
                        <input name="form_botcheck" class="form-control" type="hidden" value="" />
                        <button type="submit" class="btn btn-dark btn-theme-colored btn-flat" data-loading-text="Please wait...">Send your message</button>
                        </div>
                    </form>
                    <!-- Contact Form Validation-->
                    <script type="text/javascript">
                        $("#contact_form").validate({
                        submitHandler: function(form) {
                            var form_btn = $(form).find('button[type="submit"]');
                            var form_result_div = '#form-result';
                            $(form_result_div).remove();
                            form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                            var form_btn_old_msg = form_btn.html();
                            form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                            $(form).ajaxSubmit({
                            dataType:  'json',
                            success: function(data) {
                                if( data.status == 'true' ) {
                                $(form).find('.form-control').val('');
                                }
                                form_btn.prop('disabled', false).html(form_btn_old_msg);
                                $(form_result_div).html(data.message).fadeIn('slow');
                                setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                            }
                            });
                        }
                        });
                    </script>
    
                </div>
                <div class="col-md-5">
    
                    <!-- Google Map HTML Codes -->
                    <div class="mapouter"><div class="gmap_canvas">
                        <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Biyem-Assi%20yaounde&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        <a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">google embed maps</a>
                        <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
                     <div class="col-md-5">
                    {{-- <div 
                        id="map-canvas-multipointer"
                        data-mapstyle="style3"
                        data-height="470"
                        data-zoom="14"
                        data-marker="images/map-marker.png">
                    </div> --}}
                    <!-- Google Map Javascript Codes -->
                    {{-- <script src="http://maps.google.com/maps/api/js?key=AIzaSyAYWE4mHmR9GyPsHSOVZrSCOOljk8DU9B4"></script>
                    <script src="js/google-map-init-multilocation.js"></script> --}}
                
                </div>
            </div>
            </div>
        </section>
        </div>
        <!-- end main-content -->
    
        <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    </div>
@endsection