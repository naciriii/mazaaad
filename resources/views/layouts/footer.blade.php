<!--
        |========================
        |  FOOTER
        |========================
        -->
        <footer class="xt-footer">
            <div class="container">
                <div class="section-separator">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="footer-widget footer-contact">
                                <img src="{{asset('assets/images/flogo.png')}}" alt="" class="img-responsive">
                                <ul>
                                    <li><i class="fa fa-mobile-phone"></i><a href="">+(1234) 456 7896</a></li>
                                    <li><i class="fa fa-envelope-o"></i><a href="">info@xootheme.com</a></li>
                                    <li>
                                        <i class="fa fa-location-arrow"></i>
                                       <address>Address: 42/1, dariapara road, New york city, New york. USA</address> 
                                    </li>
                                </ul>
                            </div>
                    </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="footer-widget">
                                <h4>My account</h4>
                                <ul>
                                    <li><a href="{{route('users.profile')}}"><i class="fa fa-caret-right"></i>My account</a></li>
                                    <li><a href=""><i class="fa fa-caret-right"></i>about us</a></li>
                                    
                                </ul>
                            </div>
                    </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="footer-widget">
                                <h4>Custom Service</h4>
                                <ul>
                                   
                                    <li><a href=""><i class="fa fa-caret-right"></i>contact</a></li>
                                </ul>
                            </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </footer>

        <!--
        |========================
        |      Script
        |========================
        -->
        
        <!-- jquery -->
        <script src="{{asset('assets/plugins/js/jquery-1.11.3.min.js')}}"></script>

        <!-- Bootstrap -->
        <script src="{{asset('assets/plugins/js/bootstrap.min.js')}}"></script>
        @yield('js')
        <!-- mean menu nav-->
        <script src="{{asset('assets/plugins/js/meanmenu.js')}}"></script>
        <!-- ajaxchimp -->
        <script src="{{asset('assets/plugins/js/jquery.ajaxchimp.min.js')}}"></script>
        <!-- wow -->
        <script src="{{asset('assets/plugins/js/wow.min.js')}}"></script>
        <!-- Owl carousel-->
        <script src="{{asset('assets/plugins/js/owl.carousel.js')}}"></script>
        <!--flexslider-->
        <script src="{{asset('assets/plugins/js/jquery.flexslider-min.js')}}"></script>
        <!--dropdownhover-->
        <script src="{{asset('assets/plugins/js/bootstrap-dropdownhover.min.js')}}"></script>
        <!--jquery-ui.min-->
        <script src="{{asset('assets/plugins/js/jquery-ui.min.js')}}"></script>
        <!--validator -->
        <script src="{{asset('assets/plugins/js/validator.min.js')}}"></script>
        <!--smooth scroll-->
        <script src="{{asset('assets/plugins/js/smooth-scroll.js')}}"></script>
        <!-- Fancybox js-->
        <script src="{{asset('assets/plugins/js/jquery.fancybox.min.js')}}"></script>
        <!-- selectize -->
        <script src="{{asset('assets/plugins/js/standalone/selectize.js')}}"></script>
        <!-- init -->
        <script src="{{asset('assets/js/init.js')}}"></script>

    </body>
</html>