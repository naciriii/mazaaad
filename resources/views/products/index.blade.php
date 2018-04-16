@extends('layouts.master')
@section('content')
    
            
        
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
                                        <option>Tunis</option>
                                        <option>sousse</option>
                                        
                                    </select>
                                </div>
                            </div>
                       
                            <div class="form-group xt-form xt-search-cat col-md-4 col-sm-4 col-xs-5  ">
                                <div class="xt-select xt-search-opt">
                                    <select class="xt-dropdown-search select-beast">
                                        <option>All Categories</option>
                                        <option>Boutique</option>
                                        <option>Shirt</option>
                                        <option>Pants</option>
                                        <option>Jeans</option>
                                        <option>Bourkha</option>
                                        <option>Hijab</option>
                                        <option>T-Shirt</option>
                                        <option>Coats</option>
                                        <option>Blezzar</option>
                                        <option>Gilets</option>
                                        <option>3 Piece</option>
                                        <option>Cosmetic</option>
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

        <!--
        |========================
        |  PRODUCT SUB PAGE
        |========================
        -->
        <div class="xt-product-subpage">    
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-12">
                        <!--end singlw item info -->
                        <div class="xt-feature-product">
                            <div class="section-separator">
                                <div class="clearfix"></div>
                                <div class="xt-each-feature">
                                    <div class="col-md-4 col-sm-4">
                                        <div class="xt-feature">
                                            <div class="product-img">
                                                <img src="assets/images/2.jpg" alt="" class="img-responsive">
                                                <span class="product-tag xt-uppercase">sold!</span>
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
                                                <span class="product-tag xt-uppercase">Live!</span>
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
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-12 xt-bottom-hr">
                                    <hr class="xt-hr">
                                </div>
                                
                            </div>
                            <!---->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
       
        