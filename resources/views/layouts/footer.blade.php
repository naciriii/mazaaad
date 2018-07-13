<!--
        |========================
        |  FOOTER
        |========================
        -->
        <footer class="xt-footer">
            <div class="container">
                <div class="section-separator">
                    <div class="row">
                        <div class="col-md-4 col-sm-4"></div>
                        <div class="col-md-4 col-sm-4">
                            <div class="footer-widget">
                                <h4>@lang('g.MyAccount')</h4>
                                <ul>
                                    <li><a href="{{route('users.profile')}}"><i class="fa fa-caret-right"></i>@lang('g.MyAccount')</a></li>
                                    <li><a href=""><i class="fa fa-caret-right"></i>@lang('g.About')</a></li>
                                    
                                </ul>
                            </div>
                    </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="footer-widget">
                                <h4>@lang('g.CustomService')</h4>
                                <ul>
                                   
                                    <li><a href="{{route('complaints.add')}}"><i class="fa fa-caret-right"></i>@lang('g.Complaints')</a></li>
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