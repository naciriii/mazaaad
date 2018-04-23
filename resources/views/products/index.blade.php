@extends('layouts.master')
@section('css')


@endsection
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
       @foreach($products as $product)
<div class="col-md-4 col-sm-4">
<div class="xt-feature">
          <span class="btn btn-block btn-fill-success countdown-container">

         <span data-finish="{{$product->stop_date}}" class="defaultCountdown"></span>   
  </span>
<div class="product-img">
       @if($product->pictures->count())

  <img src="{{$product->mainPicture->first()->path}}" alt="" style='height: 100%; width: 100%; object-fit: cover'>
  @else
   <img src="{{$product->pictures->first()->path}}" alt="" class="img-responsive">
   @endif



  <span class=" @if($product->is_available) product-tag-live @else product-tag @endif xt-uppercase">
       @if($product->is_available) Live @else Sold! @endif</span>
</div>
<div class="product-info">
  <div class="product-title">
      <span class="category xt-uppercase">{{$product->name}}</span>
      <span class="name xt-semibold">{{$product->category->name}} </span>
  </div>
  <div class="price-tag pull-right">
      
      <span class="new-price xt-semibold">{{$product->start_price}} TND</span>
  </div>
  <div class="xt-featured-caption">
      <div class="product-title">
          <span class="category xt-uppercase">{{$product->name}}</span>
          <span class="name xt-semibold">{{$product->category->name}}</span>
      </div>
      <div class="price-tag pull-right">
         
          <span class="new-price xt-semibold">{{$product->start_price}} TND</span>
      </div>
    
       <div 
           class="name xt-semibold text-center">
                     <button class="btn btn-fill">Bid</button>
       </div>
  </div>
</div>
</div>
</div>
@endforeach
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
      
      <span class="new-price xt-semibold">$260</span>
  </div>
  
  <div class="xt-featured-caption">
      <div class="product-title">
          <span class="category xt-uppercase">T-Shirt</span>
          <span class="name xt-semibold">2017 Model</span>
      </div>
      <div class="price-tag pull-right">
       
          <span class="new-price xt-semibold">$260</span>
      </div>
      
      <span class="btn btn-block btn-fill-success">

         
  </span>
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
@section('js')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery.countdown.css')}}"> 
<script type="text/javascript" src="{{asset('assets/js/jquery.plugin.js')}}"></script> 
<script type="text/javascript" src="{{asset('assets/js/jquery.countdown.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.countdown-fr.js')}}"></script>
<script type="text/javascript">
 
function initCounters() {
$('.defaultCountdown').each(function() {
       var finish = $(this).data('finish').split('-');
       console.log(finish);
             var deadLine = new Date(finish[0],finish[1]-1,finish[2]); 
             console.log(deadLine);
       
       $(this).countdown({until: deadLine});
});
}
$(document).ready(function() {
       initCounters();
})

</script>
@endsection

