@extends('layouts.master')
@section('css')


@endsection
@section('content')




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

         <span data-product="{{$product->id}}" data-finish="{{$product->stop_date}}" class="defaultCountdown"></span>   
  </span>
<div class="product-img">
       @if($product->pictures->count())

  <img src="{{$product->mainPicture->first()->path}}" alt="" style='height: 100%; width: 100%; object-fit: cover'>
  @else
   <img src="{{$product->pictures->first()->path}}" alt="" class="img-responsive">
   @endif



  <span class=" @if($product->is_available) product-tag-live @else product-tag @endif xt-uppercase">
       @if($product->is_available) Live @else Out! @endif</span>
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
                     <a href= "{{route('products.show',['id'=>$product->id])}}"><button class="btn btn-fill">Bid</button>
                     </a>
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
var bidExpireUrl = "{{route('bids.expire')}}";
function onExpire(product) {
  var data = {
    _token:"{{csrf_token()}}",
    product_id:product
  }
  $.post(bidExpireUrl,data,function(res) {

  });
}
 
function initCounters() {
$('.defaultCountdown').each(function() {
       var finish = $(this).data('finish').split('-');
       var product_id = $(this).data('product');
       var el = $(this);
    
             var deadLine = new Date(finish[0],finish[1]-1,finish[2]); 
             console.log(deadLine);
       
       $(this).countdown({until: deadLine,onExpiry:expiryCallback});
       function expiryCallback() {
        //console.log(product_id);
        
        el.closest('.xt-feature .product-tag-live').removeClass('product-tag-live').addClass('product-tag').text('Out!');
        //notify users and change status
        onExpire(product_id);

       }
});
}
$(document).ready(function() {
       initCounters();
})

</script>
@endsection

