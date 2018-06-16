<!DOCTYPE html>
<!--[if IE 7]> <html class="no-js ie7 oldie" lang="en-US"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 oldie" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
    <head>
        <!-- TITLE OF SITE -->
        <title> Mazaad</title>
        @if(Auth::check())
         <script src="https://js.pusher.com/4.1/pusher.min.js"></script>
  <script>
   var showProductUrl = "{{url('products/')}}";
    var markNotificationViewedUrl = "{{route('users.viewNotifications')}}";
 function  markNotificationasViewed() {
    $.get(markNotificationViewedUrl,function(res) {
            $('#notifications_count').text('0').addClass('hidden');
    })

 }
  var user_channel = 'user-'+'{{ Auth::user()->id }}';
 

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('f7c8d6d70765043719d2', {
      cluster: 'eu',
      encrypted: true
    });

    var channel = pusher.subscribe(user_channel);
    channel.bind('bidPutHandler', function(data) {
        //console.log('data gotten');
      //console.log(data);
      var count  = parseInt($('#notifications_count').text());
      if($('#notifications_count').hasClass('hidden')) {
        $('#notifications_count').removeClass('hidden');
      }
      $('#notifications_count').text(++count);
      var html =`
      <li>
       <a href="`+showProductUrl+'/'+data.notification.product_id+`">
                                                <img src="`+data.notification.product_picture+`" alt="">
                          <h3>`+data.notification.bid.product.name+`</h3>
              <span class="cart-price">`+data.notification.bidPrice+` </span>
            
                     <div style="clear:both;"></div>
                &nbsp;&nbsp;<sup>`+data.notification.text+`</sup>
                  <sub class="pull-right">`+data.datetime+`</sub>
                                                

      </a>
                                            

                                        </li> <li class="divider"></li>`;
                                        $('#notifications_list').prepend(html);

    });
    </script>
    <style type="text/css">
    #notifications_list::-webkit-scrollbar {

        width: 0 !important;
    
        }</style>
    @endif
        
        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="description" content="mazaad bid web application" />
        <meta name="keywords" content="tunisia, mazaad, vente,bid, selling" />
        <meta name="developer" content="Nsiri nacer">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        @yield('css')

        <!-- FAV AND ICONS   -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
        <link rel="shortcut icon" href="{{asset('assets/images/apple-icon.png')}}">
        <link rel="shortcut icon" sizes="72x72" href="{{asset('assets/images/apple-icon-72x72.png')}}">
        <link rel="shortcut icon" sizes="114x114" href="{{asset('assets/images/apple-icon-114x114.png')}}">

        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7cPlayfair+Display:400,400i,700,900" rel="stylesheet">

        <!-- FONT ICONS -->
        <link rel="stylesheet" href="{{asset('assets/icons/font-awesome-4.7.0/css/font-awesome.min.css')}}">
        
        <!-- Custom Icon Font -->
        <link rel="stylesheet" href="{{asset('assets/fonts/flaticon.css')}}">
        <!-- Bootstrap-->
        <link rel="stylesheet" href="{{asset('assets/plugins/css/bootstrap.min.css')}}">
        <!-- Fancybox-->
        <link rel="stylesheet" href="{{asset('assets/plugins/css/jquery.fancybox.min.css')}}">

        <!-- Animation -->
        <link rel="stylesheet" href="{{asset('assets/plugins/css/animate.css')}}">
        <!-- owl -->
        <link rel="stylesheet" href="{{asset('assets/plugins/css/owl.css')}}">
        <!--flexslider-->
        <link rel="stylesheet" href="{{asset('assets/plugins/css/flexslider.min.css')}}">
        <!-- selectize -->
        <link rel="stylesheet" href="{{asset('assets/plugins/css/selectize.css')}}">
        <link rel="stylesheet" href="{{asset('assets/plugins/css//selectize.bootstrap3.css')}}">
        <link rel="stylesheet" href="{{asset('assets/plugins/css/jquery-ui.min.css')}}">
        <!--dropdown -->
        <link rel="stylesheet" href="{{asset('assets/plugins/css/bootstrap-dropdownhover.min.css')}}">
        <!-- mobile nav-->
        <link rel="stylesheet" href="{{asset('assets/plugins/css/meanmenu.css')}}">

        <!-- COUSTOM CSS link  -->
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

        <!--[if lt IE 9]>
            <script src="{{asset('js/plagin-js/html5shiv.js')}}"></script>
            <script src="{{asset('js/plagin-js/respond.min.js')}}"></script>
        <![endif]-->

    </head>
     <body>
        <!--
        |========================
        |  HEADER
        |========================
        -->
        <header id="xt-home" class="xt-header">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="xt-language col-md-5 col-sm-5 col-xs-12">
                            <div class="each-nav">
                                <ul>
                                    <li class="dropdown">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">English <span class="fa fa-angle-down"></span> </a>
                                        <ul class="dropdown-menu xt-lang-dropdown">
                                            <li><a href="">Frensh</a></li>
                                            
                                            
                                        </ul>
                                    </li>
                                   
                                </ul>
                            </div>
                        </div>
                        
                        <div class="user-nav  col-md-6 col-sm-6 col-xs-12">
                           @if(Auth::guest())
                            <ul>
                                <li><a href="{{asset('/register')}}">Sign up</a></li>
                                <li><a href="{{asset('/login')}}">login</a></li>
                            </ul>
                            @else

                            <ul>

                                
                               <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" style="z-index:1050;" role="menu">
                                    <li>
                                        <a href="{{ route('products.myProducts') }}"
                                           >
                                            My Products
                                        </a>
                                    </li>
                                    <li>
                                             <a href="{{ route('users.profile') }}">
                                                Profile
                                         </a>
                                    </li> <br>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            </ul>
                            @endif
                        
                  
                   
                        </div>
                        <div class="clear"></div>
                         @if(Auth::check())
                          <div class="col-md-1 col-sm-1 col-xs-12 pull-right">
                        <div class="xt-cart">
                            <ul>
                                <li  onclick="markNotificationasViewed()" class="dropdown">
                                  <a href="" onmouseover="return false;" class="dropdown-toggle" data-toggle="dropdown" data-hover="">
                                   <i class=" fa fa-bell"></i>
                                  </a>
                                    <ul id="notifications_list" style="height:400px; left:-150px; overflow:scroll;" class="dropdown-menu xt-cart-items">
                                        @foreach(Auth::user()->unseenNotifications as $un)
                                        <li>
                                            <a href="{{route('products.show',[$un->bid->product->id])}}">
                                                <img src="{{asset($un->bid->product->mainPicture->first()->path)}}" alt="">
                                                <h3>{{$un->bid->product->name}}</h3>
                                                <span class="cart-price">{{$un->bid->price}} </span>
                                              
                                                <div style="clear:both;"></div>
                                            &nbsp;&nbsp;<sup>{{$un->text}}</sup>
                                              <sub class="pull-right" id="datetime">{{str_limit($un->created_at,16,'')}}</sub>
                                                

                                            </a>
                                            

                                        </li>
                                        <li class="divider"></li>
                                        
                                        @endforeach

                                       
                                    </ul>
                                </li>
                            </ul>
                           @if(Auth::user()->unseenNotifications->count())
                            <span  id="notifications_count" class="xt-item-count"> {{Auth::user()->unseenNotifications->count()}}</span>
                            @endif
                        </div>
                    </div>
                    @endif
                    </div>
                </div>
            </div>
            
            <div class="main-navigation">
                <nav class="navbar navbar-fixed-top nav-scroll">
                    <div class="container">
                        <div class="row">
                            <div class="navbar-header">
                              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span aria-hidden="true" class="icon"></span>
                              </button>
                              <a class="navbar-brand" href="{{route('home.index')}}"><img src="{{asset('assets/images/flogo.png')}}" alt="" class="img-responsive"></a>
                            </div>
                            
                            <div class="collapse navbar-collapse" id="js-navbar-menu">
                                <ul class="nav navbar-nav navbar-right ep-mobile-menu" id="navbar-nav">
                                    <li class="active"><a href="{{route('home.index')}}">Home</a></li>
                                    <li><a href="{{route('products.index')}}">Products</a></li>
                                    <li><a href="single-shop.html">Single Product</a></li>
                                    <li><a href="">About</a></li>
                                    <li><a href="">Live Auctions</a></li>
                                    <li><a href="contact-us.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            @if(url()->getRequest()->route()->getName() == 'home.index')
                   <!--Mobile Menu-->
        <div class="main-color-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 left-menu-wrapper">
                        <div class="xt-sidenav hidden-xs hidden-sm">
                            <nav>
                                <ul class="xt-side-menu">
                                    <li>
                                        <a href="#">All Category</a>
                                        <ul class="xt-dropdown">
                                            @if(count($categories))

                                            @for($i=0;$i<$categories->count();$i++)
                                           @if($i<8)


                                            <li>
                                                <a class="xt-nav-link" <a href="{{route('products.getByCategory',['category'=>$categories[$i]->id])}}">
                                                    <i class="{{$categories[$i]->icon}}"></i> 
                                                 {{$categories[$i]->name}}</a>
                                                
                                            </li>
                                            @endif
                                            @endfor
                                           @if($categories->count()>8)

                                            <li>
                                                <a class="xt-nav-link" href="single-shop.html"><i class="fa flaticon-menu"></i>More</a>
                                                <ul class="mega-menu xt-column">
                                                    @for($i=8;$i<$categories->count();$i++)
                                                    <li>
                                                        <ul class="xt-single-mega">
                                                            <li><a href="{{route('products.getByCategory',['category'=>$categories[$i]->id])}}">{{$categories[$i]->name}}</a></li>
                                                            @endfor
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li> 
                                            @endif
                                        </ul>
                                        @endif
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    
                    <div class="col-md-9 col-sm-10 col-xs-12 xt-header-search">
                        <div class="form-group xt-form search-bar  col-md-3 col-sm-3 col-xs-3 ">
                            <input type="text" class="form-control" placeholder="Search " />
                        </div>
                         <div class="form-group xt-form search-bar  col-md-3 col-sm-3 col-xs-4 ">
                            
                            <div class="xt-select xt-search-opt">
                                <select class="xt-dropdown-search select-beast">
                                    <option>All Regions</option>
                                    <option>Tunis</option>
                                    <option>sousse</option>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="form-group xt-form xt-search-cat col-md-3 col-sm-3 col-xs-5  ">
                            <div class="xt-select xt-search-opt">
                                <select class="xt-dropdown-search select-beast">
                                    <option value="0">All Categories</option>
                                    @foreach($categories as $c)
                                    <option value="{{$c->id}}">{{$c->name}}</option>
                                    @endforeach
                                    
                                </select>
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <div class="xt-search-opt xt-search-btn ">
                                <button type="button" class="btn btn-primary btn-search"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

            @else
            <!--Mobile Menu-->
<div class="main-color-bg">
<div class="container">
<div class="row">


<div class="col-md-11 col-sm-10 col-xs-12 xt-header-search">
<div class="form-group xt-form search-bar  col-md-2 col-sm-2 col-xs-1 ">
<input type="text" class="form-control" placeholder="Search " />

</div>
<div class="form-group xt-form search-bar  col-md-1 col-sm-1 col-xs-1 ">
<input type="text" class="form-control" placeholder="Min " />


</div>
<div class="form-group xt-form search-bar  col-md-1 col-sm-1 col-xs-1 ">
<input type="text" class="form-control" placeholder="Max " />

</div>
<div class="form-group xt-form search-bar  col-md-4 col-sm-4 col-xs-4 ">
<div class="xt-select xt-search-opt">
<select class="xt-dropdown-search select-beast">
<option>All Regions</option>
@foreach($regions as $r)
<option value ="{{$r->id}}">{{$r->name}}</option>
@endforeach


</select>
</div>
</div>

<div class="form-group xt-form xt-search-cat col-md-4 col-sm-4 col-xs-5  ">
<div class="xt-select xt-search-opt">
<select class="xt-dropdown-search select-beast">
<option value='0'>All Categories</option>
@foreach($categories as $c )
<option value="{{$c->id}}">{{$c->name}}</option>
@endforeach

<option>Cosmetic</option>
</select>
</div>
<div class="xt-search-opt xt-search-btn">
<button onclick="searchProducts()" type="button" class="btn btn-primary btn-search"><i class="fa fa-search"></i></button>
</div>
</div>
</div>
</div>
</div>
</div>
            @endif
        </header>