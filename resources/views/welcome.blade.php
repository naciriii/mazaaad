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
                    
                    <div class="col-md-8 col-sm-10 col-xs-12 xt-header-search">
                        <div class="form-group xt-form search-bar  col-md-4 col-sm-4 col-xs-3 ">
                            <input type="text" class="form-control" placeholder="Search " />
                        </div>
                         <div class="form-group xt-form search-bar  col-md-4 col-sm-4 col-xs-4 ">
                            <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
                                {!! csrf_field() !!}
                                <input type="file" name="picture">
                                <input type="submit" name="">
                                
                            </form>
                            <div class="xt-select xt-search-opt">
                                <select class="xt-dropdown-search select-beast">
                                    <option>All Regions</option>
                                    <option>Tunis</option>
                                    <option>sousse</option>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="form-group xt-form xt-search-cat col-md-4 col-sm-4 col-xs-5  ">
                            <div class="xt-select xt-search-opt">
                                <select class="xt-dropdown-search select-beast">
                                    <option value="0">All Categories</option>
                                    @foreach($categories as $c)
                                    <option value="{{$c->id}}">{{$c->name}}</option>
                                    @endforeach
                                    
                                </select>
                            </div>
                            <div class="xt-search-opt xt-search-btn">
                                <button type="button" class="btn btn-primary btn-search"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-2 col-xs-2">
                        <div class="xt-cart">
                            <ul>
                                <li class="dropdown">
                                  <a href="" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
                                   <i class=" fa fa-bell"></i>
                                  </a>
                                    <ul class="dropdown-menu xt-cart-items">
                                        <li>
                                            <a href="">
                                                <img src="assets/images/4.jpg" alt="">
                                                <h3>Lipstick</h3>
                                                <span class="cart-price">$299</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="" class="subtotal top-checkout">
                                                <h3>Subtotal : </h3>
                                                <span class="total-price">$999</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="process top-checkout">
                                                <h3>Process to Checkout </h3>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span class="xt-item-count">8</span>
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
                                <li><a class="main-a" href="">Shirt</a></li>
                                <li><a class="main-a" href="">Pant</a></li>
                                <li class="active"><a class="main-a" href="#">Bourkha</a>
                                    <ul>
                                        <li><a href="#">Hijab</a></li>
                                        <li><a href="#">Scarf</a></li>
                                        <li><a href="#" class="main-a">Shirt</a>
                                            <ul>
                                                <li><a href="#">T-Shirt</a></li>
                                                <li><a href="#">Trousers</a></li>
                                                <li><a href="#">Jackets & sweater</a></li>
                                                <li><a href="#">3 Piece</a></li>
                                            </ul>
                                        </li>
                                    </ul>	
                                </li>
                                <li><a class="main-a" href="">Shawl</a></li>
                                <li><a class="main-a" href="">Other</a></li>
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
    <section class="xt-slider">
        <div class="container">
            <div class="row">
                <div class="col-md-3 category-hidden padding-right-o"></div>
                <div class="col-md-9 col-md-offset-3 padding-o padding-sm">
                    <div class="flexslider xt-slider-inner">
                      <ul class="slides">
                        <li>
                          <img src="assets/images/model-five.jpg" alt="" />
                          <div class="slide_text">
                            <span class="slide-category">Fashion</span>
                            <h2 class="slide_title">Spring Summer <br> Fashion Collection</h2>
                            <p class="slide_byline "> Lorem ipsum dolor sit amet, consectetur adipis
                                cing elit, sed do eiusmod tempor incididunt ut labore 
                                et dolore magna aliqua ut enim ad minim.</p>
                            <a href="" class="btn btn-fill ">Shop Now</a>
                          </div>
                        </li>
                        <li>
                          <img src="assets/images/model-four.jpg" alt="" />
                          <div class="slide_text">
                            <span class="slide-category">Style</span>
                            <h2 class="slide_title ">Winter Autumn <br> Jacket Collection</h2>
                            <p class="slide_byline "> Usher in the summer months with showerproof jackets
                                and lightweight boys' coats. Items are great to be presented
                                 loved ones and the reasonable price makes the collection suitable.</p>
                            <a href="" class="btn btn-fill ">Shop Now</a>
                          </div>
                        </li>
                        <li>
                          <img src="assets/images/model-three.jpg" alt="" />
                          <div class="slide_text">
                            <span class="slide-category">Spring Collection</span>
                            <h2 class="slide_title ">Spring Upcomming <br> New Collection</h2>
                            <p class="slide_byline "> Bags, Glasses and belts are all of the best quality
                                and are made by famous brands in this area. Vitrine helped 
                                them to show their products better and sell more.</p>
                            <a href="" class="btn btn-fill ">Shop Now</a>
                          </div>
                        </li>
                      </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
      <!--
    |========================
    |  BY CATEGORY 
    |========================
    -->
    <section class="product-category">
        <div class="container">
            <div class="row section-separator">
                
                <div class="col-xs-12">
                    <div class="xt-product-slide">
                        <div class="xt-carousel owl-theme">
                            <div class="xt-item">
                                <i class="fa flaticon-dress-1"></i>
                                <span>Fashion</span>
                            </div>

                            <div class="xt-item">
                                <i class="fa flaticon-jacket-1"></i>
                                <span>Style</span>
                            </div>
                            <div class="xt-item">
                                <i class="fa flaticon-v-neck-shirt"></i>
                                <span>Lipstick</span>
                            </div>
                            <div class="xt-item">
                                <i class="fa flaticon-high-heel"></i>
                                <span>Blezzar</span>
                            </div>
                            <div class="xt-item">
                                <i class="fa flaticon-dress"></i>
                                <span>Jacket</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <!--
    |========================
    |  PRODUCT
    |========================
    -->
    <section class="xt-feature-product">
        <div class="container">
            <div class="row section-separator">
                <div class="section-title">
                    <h2>Featured Product</h2>
                </div>
                <div class="xt-each-feature">
                    <div class="col-md-4 col-sm-4">
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
                    <div class="col-md-4 col-sm-4">
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
                    <div class="col-md-4 col-sm-4">
                        <div class="xt-feature">
                            <div class="product-img">
                                <img src="assets/images/3.jpg" alt="" class="img-responsive">
                                <span class="product-tag xt-uppercase">sale!</span>
                            </div>
                            <div class="product-info">
                                <div class="product-title">
                                    <span class="category xt-uppercase">New Look</span>
                                    <span class="name xt-semibold">2018 Model Coming Soon</span>
                                </div>
                                <div class="price-tag pull-right">
                                    <span class="old-price"><del>$280</del></span>
                                    <span class="new-price xt-semibold">$260</span>
                                </div>
                                <div class="xt-featured-caption">
                                    <div class="product-title">
                                        <span class="category xt-uppercase">New Look</span>
                                        <span class="name xt-semibold">2018 Model Coming Soon</span>
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
                    <div class="col-md-4 col-sm-4">
                        <div class="xt-feature">
                            <div class="product-img">
                                <img src="assets/images/4.jpg" alt="" class="img-responsive">
                                <span class="product-tag xt-uppercase">sale!</span>
                            </div>
                            <div class="product-info">
                                <div class="product-title">
                                    <span class="category xt-uppercase">Lipstick</span>
                                    <span class="name xt-semibold">Imported From U.S.</span>
                                </div>
                                <div class="price-tag pull-right">
                                    <span class="old-price"><del>$280</del></span>
                                    <span class="new-price xt-semibold">$260</span>
                                </div>
                                <div class="xt-featured-caption">
                                    <div class="product-title">
                                        <span class="category xt-uppercase">Lipstick</span>
                                        <span class="name xt-semibold">Imported From U.S.</span>
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
                    <div class="col-md-4 col-sm-4">
                        <div class="xt-feature">
                            <div class="product-img">
                                <img src="assets/images/b2.jpg" alt="" class="img-responsive">
                                <span class="product-tag xt-uppercase">sale!</span>
                            </div>
                            <div class="product-info">
                                <div class="product-title">
                                    <span class="category xt-uppercase">Shirt</span>
                                    <span class="name xt-semibold">Exclusive Design</span>
                                </div>
                                <div class="price-tag pull-right">
                                    <span class="old-price"><del>$280</del></span>
                                    <span class="new-price xt-semibold">$260</span>
                                </div>
                                <div class="xt-featured-caption">
                                    <div class="product-title">
                                        <span class="category xt-uppercase">Shirt</span>
                                        <span class="name xt-semibold">Exclusive Design</span>
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
                    <div class="col-md-4 col-sm-4">
                        <div class="xt-feature">
                            <div class="product-img">
                                <img src="assets/images/b1.jpg" alt="" class="img-responsive">
                                <span class="product-tag xt-uppercase">sale!</span>
                            </div>
                            <div class="product-info">
                                <div class="product-title">
                                    <span class="category xt-uppercase">Tops</span>
                                    <span class="name xt-semibold">Spring Collection</span>
                                </div>
                                <div class="price-tag pull-right">
                                    <span class="old-price"><del>$280</del></span>
                                    <span class="new-price xt-semibold">$260</span>
                                </div>
                                <div class="xt-featured-caption">
                                    <div class="product-title">
                                        <span class="category xt-uppercase">Tops</span>
                                        <span class="name xt-semibold">Spring Collection</span>
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
        </div>
    </section>
  @endsection
    
   
    
    
   
    
  
    
   

   