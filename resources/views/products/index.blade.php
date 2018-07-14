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

         <span id="product_{{$product->id}}" data-available="{{$product->is_available}}" data-product="{{$product->id}}" data-finish="{{$product->stop_date}}" class="defaultCountdown"></span>   
  </span>
<div class="product-img">
       @if($product->pictures->count())

  <img src="{{$product->mainPicture->first()->path}}" alt="" style='height: 100%; width: 100%; object-fit: cover'>
  @else
   <img src="{{$product->pictures->first()->path}}" alt="" class="img-responsive">
   @endif



  <span class=" @if($product->is_available) product-tag-live @else product-tag @endif xt-uppercase">
       @if($product->is_available) @lang('g.Live') @else @lang('g.Out')! @endif</span>
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
          <span class="name xt-semibold">{{$product->region->name}}</span>
      </div>
      <div class="price-tag pull-right">
         
          <span class="new-price xt-semibold">{{$product->start_price}} TND</span>
      </div>
    
       <div 
           class="name xt-semibold text-center">
                     <a href= "{{route('products.show',['id'=>$product->id])}}"><button class="btn btn-fill">@lang('g.View')</button>
                     </a>
       </div>
  </div>
</div>
</div>
</div>
@endforeach

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
@if(session('locale') == 'fr')
<script type="text/javascript" src="{{asset('assets/js/jquery.countdown-fr.js')}}"></script>
@endif
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
       //console.log(finish);
       var product_id = $(this).data('product');
             var is_available = $(this).data('available');
       var el = $(this);
       var time = finish[2].split(' ')[1];
       var hour = time.split(':')[0];
        var mnts = time.split(':')[1];
        var scnds = time.split(':')[2];
       var day = finish[2].split(' ')[0];
    
             var deadLine = new Date(finish[0],finish[1]-1,day,hour,mnts,scnds); 
             //console.log(deadLine);
       
       $(this).countdown({until: deadLine,onExpiry:expiryCallback});
       if(is_available == 0) {
              $(this).countdown('pause');
       }
       function expiryCallback() {
        //console.log(product_id);
      
        
        el.closest('.xt-feature').find('.product-tag-live').removeClass('product-tag-live').addClass('product-tag').text('Out!');
        //notify users and change status
        onExpire(product_id);
        //console.log('expired '+product_id);

       }
});
}
$(document).ready(function() {
       initCounters();
})

</script>
@endsection

