<footer class="footer footer-light" id="footer" style="color:black;">
    <div class="footer-middle" >
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="widget widget-about">
                        <a href="/">
                            <img  src="{{ asset('assets/images/demos/demo-4/logofooter.png')}}" style="margin-left:50px;" class="footer-logo" alt="Footer Logo" width="170" height="20">
                        </a>
                        <div class="widget-call">
                            <i class="icon-clock-o"></i>
                            <span class="text-light">Lundi-Samedi</span> <br>8H-17H
                        </div><!-- End .widget-call -->
                        <div class="widget-call">
                            <i class="icon-phone"></i>
                            <a style="font-size:15px;" href="tel:#">{{ $setting->phone }}</a>
                            <a style="font-size:15px;" href="tel:#">{{ $setting->phone2 }}</a>
                        </div><!-- End .widget-call -->
                        <div class="widget-call">
                            <i class="icon-envelope"></i>
                            <span class="text-light">{{ $setting->email}}</span>
                        </div><!-- End .widget-call -->
                    </div><!-- End .widget about-widget -->
                    <div class="social-icons">
                        <a href="{{ $setting->facebook }}" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                        <a href="{{ $setting->twitter }}" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                        <a href="{{ $setting->instagram }}" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                        <a href="{{ $setting->youtube }}" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
                        <a href="{{ $setting->pingterest }}" class="social-icon" target="_blank" title="Pinterest"><i class="icon-pinterest"></i></a>
                    </div>
                </div><!-- End .col-sm-6 col-lg-3 -->

                <div class="col-sm-6 col-lg-3" >
                    <div class="widget">

                    </div><!-- End .widget -->
                    <div class="widget">
                        <div class="map">
                            <iframe src="{{ $setting->map }}" width="250"  height="260" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="widget-list" style="margin-left: 30px;">
                            <i class="icon-map-marker" ></i>
                            <a href="https://www.google.com/maps/place/Media+House+Hammamet/@36.4069163,10.6121512,15z/data=!4m5!3m4!1s0x0:0x209efc5289279676!8m2!3d36.4069163!4d10.6121512" class="text-light" >{{ $setting->adresse }}</a>
                        </div><!-- End .widget-call -->
                    </div><!-- End .widget -->
                </div><!-- End .col-sm-6 col-lg-3 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title">Categories</h4><!-- End .widget-title -->

                        <ul class="widget-list">
                            @foreach($categories as $category)
                            <li><a href="#">{{ $category->name }}</a></li>
                            @endforeach


                        </ul><!-- End .widget-list -->
                    </div><!-- End .widget -->
                </div><!-- End .col-sm-6 col-lg-3 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title">À Propos</h4><!-- End .widget-title -->

                        <ul class="widget-list">

                            <li><a href="/login">Log in</a></li>

                            <li><a href="#footer">Contact</a></li>
                            <li><a href="#about">À propos</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & conditions</a></li>
                            <li><a href="#">Help</a></li>
                        </ul><!-- End .widget-list -->
                    </div><!-- End .widget -->
                </div><!-- End .col-sm-6 col-lg-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .footer-middle -->

    <div class="footer-bottom" style="background-color:black;">
        <div class="container">
            <p class="footer-copyright">Copyright © 2022 Media House. All Rights Reserved.</p><!-- End .footer-copyright -->
            <figure class="footer-payments">
                <img src="{{ asset('assets/images/payments.png')}}" alt="Payment methods" width="272" height="20">
            </figure><!-- End .footer-payments -->
        </div><!-- End .container -->
    </div><!-- End .footer-bottom -->
</footer><!-- End .footer -->
