@extends('layouts.master')
@section('content')

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

    </header>
    <!--
    |========================
    |  MOBILE MENU
    |========================
    -->
    <div class="menu-spacing">
        <div class="container">
            <div class="row">
                <div class="mobile-menu-area visible-xs visible-sm">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
                            <ul class="main">
                                 @if(count($categories))

                                            @for($i=0;$i<$categories->count();$i++)
                                           @if($i<5)
                                             <li><a class="main-a" <a href="{{route('products.getByCategory',['category'=>$categories[$i]->id])}}">
                                                    <i class="{{$categories[$i]->icon}}"></i> 
                                                 {{$categories[$i]->name}}</a></li>
                                           @endif
                                           @endfor
                                           @if($categories->count()>8)
                                           <li class="active"><a class="main-a" href="#"><i class="fa flaticon-menu"></i> More</a>
                                            <ul>
                                            @for($i=8;$i<$categories->count();$i++)
                                             <li> 
                                                 {{$categories[$i]->name}}</a></li>


                                            @endfor
                                        </ul>
                                           @endif
                                           @endif
                            </ul>
                        </nav>
                    </div>	
                </div>
            </div>
        </div>
    </div>

    <!--
    |========================
    |  SLIDER
    |========================
    -->
      <!--
    |========================
    |  BY CATEGORY 
    |========================
    -->
   
    <!--
    |========================
    |  PRODUCT
    |========================
    -->
    <section class="xt-feature-product">
        <div class="container">
            <div class="row  col-md-10 col-md-offset-3">

               
                <div class="xt-each-feature">
                    <div class="col-md-3">


                        <div class="xt-feature">
                            <div class="product-img">
                                <img src="assets/images/2.jpg" alt="" class="img-responsive">
                                <span class="product-tag xt-uppercase">sale!</span>
                            </div>
                            <div class="product-info">
                                <div class="product-title">
                                    <span class="category xt-uppercase">Sweater</span>
                                    <span class="name xt-semibold">Red Color</span>
                                </div>
                                <div class="price-tag pull-right">
                                    <span class="old-price"><del>$280</del></span>
                                    <span class="new-price xt-semibold">$260</span>
                                </div>
                                <div class="xt-featured-caption">
                                    <div class="product-title">
                                        <span class="category xt-uppercase">Sweater</span>
                                        <span class="name xt-semibold">Red Color</span>
                                    </div>
                                    <div class="price-tag pull-right">
                                        <span class="old-price"><del>$280</del></span>
                                        <span class="new-price xt-semibold">$260</span>
                                    </div>
                                    <div class="add-cart">
                                        <a href="" class="btn btn-fill">Add to cart</a>
                                        <ul class="reaction">
                                            <li><a href=""><i class="fa fa-search"></i></a></li>
                                            <li><a href=""><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href=""><i class="fa fa-bar-chart-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">

                        <div class="xt-feature">
                            <div class="product-img">
                                <img src="assets/images/2.jpg" alt="" class="img-responsive">
                                <span class="product-tag xt-uppercase">sale!</span>
                            </div>
                            <div class="product-info">
                                <div class="product-title">
                                    <span class="category xt-uppercase">Sweater</span>
                                    <span class="name xt-semibold">Red Color</span>
                                </div>
                                <div class="price-tag pull-right">
                                    <span class="old-price"><del>$280</del></span>
                                    <span class="new-price xt-semibold">$260</span>
                                </div>
                                <div class="xt-featured-caption">
                                    <div class="product-title">
                                        <span class="category xt-uppercase">Sweater</span>
                                        <span class="name xt-semibold">Red Color</span>
                                    </div>
                                    <div class="price-tag pull-right">
                                        <span class="old-price"><del>$280</del></span>
                                        <span class="new-price xt-semibold">$260</span>
                                    </div>
                                    <div class="add-cart">
                                        <a href="" class="btn btn-fill">Add to cart</a>
                                        <ul class="reaction">
                                            <li><a href=""><i class="fa fa-search"></i></a></li>
                                            <li><a href=""><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href=""><i class="fa fa-bar-chart-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="xt-feature">
                            <div class="product-img">
                                <img src="assets/images/2.jpg" alt="" class="img-responsive">
                                <span class="product-tag xt-uppercase">sale!</span>
                            </div>
                            <div class="product-info">
                                <div class="product-title">
                                    <span class="category xt-uppercase">Sweater</span>
                                    <span class="name xt-semibold">Red Color</span>
                                </div>
                                <div class="price-tag pull-right">
                                    <span class="old-price"><del>$280</del></span>
                                    <span class="new-price xt-semibold">$260</span>
                                </div>
                                <div class="xt-featured-caption">
                                    <div class="product-title">
                                        <span class="category xt-uppercase">Sweater</span>
                                        <span class="name xt-semibold">Red Color</span>
                                    </div>
                                    <div class="price-tag pull-right">
                                        <span class="old-price"><del>$280</del></span>
                                        <span class="new-price xt-semibold">$260</span>
                                    </div>
                                    <div class="add-cart">
                                        <a href="" class="btn btn-fill">Add to cart</a>
                                        <ul class="reaction">
                                            <li><a href=""><i class="fa fa-search"></i></a></li>
                                            <li><a href=""><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href=""><i class="fa fa-bar-chart-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="xt-feature">
                            <div class="product-img">
                                <img src="assets/images/1.jpg" alt="" class="img-responsive">
                                <span class="product-tag xt-uppercase">sale!</span>
                            </div>
                            <div class="product-info">
                                <div class="product-title">
                                    <span class="category xt-uppercase">T-Shirt</span>
                                    <span class="name xt-semibold">2017 Model</span>
                                </div>
                                <div class="price-tag pull-right">
                                    <span class="old-price"><del>$280</del></span>
                                    <span class="new-price xt-semibold">$260</span>
                                </div>
                                <div class="xt-featured-caption">
                                    <div class="product-title">
                                        <span class="category xt-uppercase">T-Shirt</span>
                                        <span class="name xt-semibold">2017 Model</span>
                                    </div>
                                    <div class="price-tag pull-right">
                                        <span class="old-price"><del>$280</del></span>
                                        <span class="new-price xt-semibold">$260</span>
                                    </div>
                                    <div class="add-cart">
                                        <a href="" class="btn btn-fill">Add to cart</a>
                                        <ul class="reaction">
                                            <li><a href=""><i class="fa fa-search"></i></a></li>
                                            <li><a href=""><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href=""><i class="fa fa-bar-chart-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
            <div class="row col-md-10 col-md-offset-3">

               
                <div class="xt-each-feature">
                    <div class="col-md-3">


                        <div class="xt-feature">
                            <div class="product-img">
                                <img src="assets/images/2.jpg" alt="" class="img-responsive">
                                <span class="product-tag xt-uppercase">sale!</span>
                            </div>
                            <div class="product-info">
                                <div class="product-title">
                                    <span class="category xt-uppercase">Sweater</span>
                                    <span class="name xt-semibold">Red Color</span>
                                </div>
                                <div class="price-tag pull-right">
                                    <span class="old-price"><del>$280</del></span>
                                    <span class="new-price xt-semibold">$260</span>
                                </div>
                                <div class="xt-featured-caption">
                                    <div class="product-title">
                                        <span class="category xt-uppercase">Sweater</span>
                                        <span class="name xt-semibold">Red Color</span>
                                    </div>
                                    <div class="price-tag pull-right">
                                        <span class="old-price"><del>$280</del></span>
                                        <span class="new-price xt-semibold">$260</span>
                                    </div>
                                    <div class="add-cart">
                                        <a href="" class="btn btn-fill">Add to cart</a>
                                        <ul class="reaction">
                                            <li><a href=""><i class="fa fa-search"></i></a></li>
                                            <li><a href=""><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href=""><i class="fa fa-bar-chart-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">

                        <div class="xt-feature">
                            <div class="product-img">
                                <img src="assets/images/2.jpg" alt="" class="img-responsive">
                                <span class="product-tag xt-uppercase">sale!</span>
                            </div>
                            <div class="product-info">
                                <div class="product-title">
                                    <span class="category xt-uppercase">Sweater</span>
                                    <span class="name xt-semibold">Red Color</span>
                                </div>
                                <div class="price-tag pull-right">
                                    <span class="old-price"><del>$280</del></span>
                                    <span class="new-price xt-semibold">$260</span>
                                </div>
                                <div class="xt-featured-caption">
                                    <div class="product-title">
                                        <span class="category xt-uppercase">Sweater</span>
                                        <span class="name xt-semibold">Red Color</span>
                                    </div>
                                    <div class="price-tag pull-right">
                                        <span class="old-price"><del>$280</del></span>
                                        <span class="new-price xt-semibold">$260</span>
                                    </div>
                                    <div class="add-cart">
                                        <a href="" class="btn btn-fill">Add to cart</a>
                                        <ul class="reaction">
                                            <li><a href=""><i class="fa fa-search"></i></a></li>
                                            <li><a href=""><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href=""><i class="fa fa-bar-chart-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="xt-feature">
                            <div class="product-img">
                                <img src="assets/images/2.jpg" alt="" class="img-responsive">
                                <span class="product-tag xt-uppercase">sale!</span>
                            </div>
                            <div class="product-info">
                                <div class="product-title">
                                    <span class="category xt-uppercase">Sweater</span>
                                    <span class="name xt-semibold">Red Color</span>
                                </div>
                                <div class="price-tag pull-right">
                                    <span class="old-price"><del>$280</del></span>
                                    <span class="new-price xt-semibold">$260</span>
                                </div>
                                <div class="xt-featured-caption">
                                    <div class="product-title">
                                        <span class="category xt-uppercase">Sweater</span>
                                        <span class="name xt-semibold">Red Color</span>
                                    </div>
                                    <div class="price-tag pull-right">
                                        <span class="old-price"><del>$280</del></span>
                                        <span class="new-price xt-semibold">$260</span>
                                    </div>
                                    <div class="add-cart">
                                        <a href="" class="btn btn-fill">Add to cart</a>
                                        <ul class="reaction">
                                            <li><a href=""><i class="fa fa-search"></i></a></li>
                                            <li><a href=""><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href=""><i class="fa fa-bar-chart-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="xt-feature">
                            <div class="product-img">
                                <img src="assets/images/1.jpg" alt="" class="img-responsive">
                                <span class="product-tag xt-uppercase">sale!</span>
                            </div>
                            <div class="product-info">
                                <div class="product-title">
                                    <span class="category xt-uppercase">T-Shirt</span>
                                    <span class="name xt-semibold">2017 Model</span>
                                </div>
                                <div class="price-tag pull-right">
                                    <span class="old-price"><del>$280</del></span>
                                    <span class="new-price xt-semibold">$260</span>
                                </div>
                                <div class="xt-featured-caption">
                                    <div class="product-title">
                                        <span class="category xt-uppercase">T-Shirt</span>
                                        <span class="name xt-semibold">2017 Model</span>
                                    </div>
                                    <div class="price-tag pull-right">
                                        <span class="old-price"><del>$280</del></span>
                                        <span class="new-price xt-semibold">$260</span>
                                    </div>
                                    <div class="add-cart">
                                        <a href="" class="btn btn-fill">Add to cart</a>
                                        <ul class="reaction">
                                            <li><a href=""><i class="fa fa-search"></i></a></li>
                                            <li><a href=""><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href=""><i class="fa fa-bar-chart-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
            <div class="row col-md-3 col-md-offset-7">
                <button class="btn btn-fill">Show More</button></div>
        </div>
    </section>
  @endsection
    
   
    
    
   
    
  
    
   

   