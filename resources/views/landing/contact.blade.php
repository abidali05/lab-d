            @extends('layouts.app')
          @section('content')
 <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_text">
                    <h2>Contact Us</h2>
                    <p>Get in touch</p>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Get in Touch Area =================-->
        <section class="get_in_touch_area">
            <div class="container">
                <div class="row get_touch_inner">
                    <div class="col-lg-6">
                        <form class="contact_us_form row" action="{{url('contactus')}}" method="post" id="contactForm" novalidate="novalidate">
                            @csrf
                            <div class="form-group col-lg-6">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                            </div>
                            <div class="form-group col-lg-6">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject*">
                            </div>
                            <div class="form-group col-lg-12">
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="submit" value="submit" class="btn submit_btn form-control">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <div class="touch_details">
                            <div class="l_title">
                                <img src="img/labd-menu.png" alt="" style="height: 225px; margin-bottom: -50px; margin-left: -100px;">
                                <h2>Get in touch, send us an e-mail or call us.</h2>
                            </div>
                            <h6>Office 505, Icon1 Plaza, Trade Center, Gulberg Green Islamabad.</h6>
                            <a href="#"><h5>Call us now</h5></a>
                            <h6>Phone: +923114937410</h6> 
                            <br>
                            <h6>WhatsApp: +923114937410</h6>
                            <br>
                            <h6>WeChat: m15572759941</h6>                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Get in Touch Area =================-->
        
        <!--================Map Area =================-->
        <section class="contact_map_area">
            <div id="mapBox1" class="mapBox1 row m0" 
                data-lat="40.701083" 
                data-lon="-74.1522848" 
                data-zoom="15" 
                data-marker="" 
                data-info=""
                data-mlat=""
                data-mlon="">
            </div>
            <div class="map_location_box">
                <div class="container">
                    <div class="map_l_box_inner">
                        <div class="bd-callout">
                            <h3>LabD tech Company</h3>
                            <p>Office 505, Icon1 Plaza, Trade Center, Gulberg Green Islamabad<br/>Pakistan.</p>
                            <h4><a href="#">+923114937410</a> <a href="#">taimoorbadar@gmail.com</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endsection