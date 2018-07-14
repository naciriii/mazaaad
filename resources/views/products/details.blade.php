@extends('layouts.master')
@section('content')
<style type="text/css">
 .show-success {
                border:2px solid green !important;
            }

</style>


        <section class="xt-xt-single-product" id="details_page">
                <div class="container-fluid">
                    <div class="col-md-3 visible-xs visible-sm padding-right-o"></div>
                    <div class="col-md-7  padding-o">
                        <div class="xt-product-inner ">
                            <div class="col-md-6">
                                <div role="tabpanel" class="tab-pane active xt-product-tab">
                                    <div class="tab-content xt-pro-small-image">
                                        <!-- Tab panel-->
                                        <div role="tabpanel" id="xt-pro-1" class="tab-pane fade active in">
                                            <a class="grouped_elements" data-fancybox="gallery" href="{{$product->mainPicture->first()->path}}">
                                                <img src="{{$product->mainPicture->first()->path}}" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        @foreach($product->pictures as $p)
                                        <div role="tabpanel" id="xt-pro-{{$p->id}}" class="tab-pane fade">
                                            <a class="grouped_elements" data-fancybox="gallery" href="{{$p->path}}">
                                                <img src="{{$p->path}}" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        @endforeach
                                        
                                    </div>
                                    <!-- Nav tabs -->
                                    <ul id="tablist" class="xt-pro-thumbs-list" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#xt-pro-1" role="tab" data-toggle="tab" aria-expanded="false">
                                               <img src="{{$product->mainPicture->first()->path}}" alt="product thumbs"> 
                                            </a>
                                        </li>
                                        @foreach($product->pictures as $p)
                                        <li role="presentation" class="">
                                            <a href="#xt-pro-{{$p->id}}" role="tab" data-toggle="tab" aria-expanded="false">
                                               <img src="{{$p->path}}" alt="product thumbs"> 
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 text-center">
                                <div class="each-product-info">
                                    <h3>{{$product->name}}</h3>
                                    <span class="single-price"><b>@lang('g.CurrentPrice'):</b> <span id="current_price">{{$product->topBid()}}</span> <small>TND</small></span>
                                    <p> <i>@lang('g.AddBy'):</i> <small> {{$product->owner->name}}</small></p>
                                    
                                    @if(!Auth::check() || $product->user_id != Auth::user()->id)
                                    @if($product->is_available && Auth::check())
                                    <div  class="select-quantity bid-adding">
                                        <input type="text" id="bid"  name="bid" title="" class="input-text qty text" >
                                       
                                    </div>
                                     <small id='errorMessage' class="form-text text-danger hidden"></small>
                                 
                                    @endif

                                    <div  id="todisplay" class="product-add-cart">
                                        @if($product->is_available && Auth::check())
                                        <a onclick="addBid(event)" class="btn btn-fill">@lang('g.AddBid')</a>

                                        @elseif($product->winningBid!=null)
                                        <a  class="btn btn-fill-success "><i class=" fa fa-check"></i> @lang('g.Sold') !</a>
                                        <br><small>@lang('g.To') <b>{{$product->winningBid->bidder->name}}</b> </small>

                                        @elseif(Auth::check())
                                      
                                         <span class="btn btn-fill">@lang('g.StopDateReached')</span>
                                        @endif
                                       
                                    </div>
                                    @else
                                    <div id="bid-info" class="product-add-cart">
                                        @if($product->is_available)
                                        <form id="expiryForm" method="post" action="{{route('bids.expire')}}">
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                             <input type="hidden" name="from_owner" value="true">
                                            <input type="hidden" name="product_id" value="{{$product->id}}">
                        <button type="submit" class="btn btn-fill "><i class=" fa fa-close"></i> @lang('g.FinishAuction')</button>
                                        </form>
                                        
                                        @elseif($product->winningBid!=null)
                                        <a  class="btn btn-fill-success "><i class=" fa fa-check"></i> @lang('g.Sold') !</a>
                                        <br><small>@lang('g.To') <b>{{$product->winningBid->bidder->name}}</b> </small>

                                        @else
                                         <a href="{{route('products.edit',['id'=>$product->id])}}" class="btn btn-fill"> @lang('g.ExtendStopDate') !</a>


                                        @endif
                                        
                                    </div>

                                    @endif
                                    <div class="product-additional-info">
                                        <ul>
                                        
                                            <li><b>@lang('g.Category'):</b><a href="">{{$product->category->name}}</a></li>
                                            <li><b>@lang('g.Region'):</b>{{$product->region->name or ''}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5  padding-o">
                <div class="row section-separator">
                    <div class="col-md-12">
                        <div class="xt-single-item-info">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs xt-single-item-tab" role="tablist" id="xt-product-dec-nav">
                                <li role="presentation" class="active">
                                    <a href="#description" aria-controls="description" role="tab" data-toggle="tab">@lang('g.Description')</a>
                                </li>
                                <li role="presentation" class="">
                                    <a href="#specification" aria-controls="specification" role="tab" data-toggle="tab">@lang('g.Specification')</a>
                                </li>
                                <li role="presentation" class="">
                                    <a href="#seller" aria-controls="seller" role="tab" data-toggle="tab">@lang('g.SellerInfo')</a>
                                </li>
                            </ul>
                            
                            <!-- Tab panes -->
                            <div class="tab-content xt-tab-content">
                                <div role="tabpanel" class="tab-pane xt-pane xt-description fade in active" id="description">
                                    <h3>@lang('g.ProductDescription')</h3>
                                    <b>@lang('g.Description')</b>
                                    <p>{!!$product->details->description or '' !!}</p>
                                   
                                </div>
                                <div role="tabpanel" class="tab-pane xt-pane fade" id="specification">
                                    <h3>@lang('g.ProductSpecification')</h3>

                                    
                                    <p><b>{{$product->name}}</b>
                                   </p>
                                    <ul>
                                        <li> <label>@lang('g.Category') :</label> {{$product->category->name}}</li>
                                             <li> <label>@lang('g.Region') :</label></label> {{$product->region->name}}</li>
                                        <li><label>@lang('g.HighestPrice') :</label> {{$product->topBid()}} <small> TND</small></li>
                                     
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane xt-pane fade" id="seller">
                                          <h3>@lang('g.SellerInfo')</h3>
                                          @if($product->owner->details)
                                          @if($product->owner->details->picture)
                                          <img class="pull-right" src="{{$product->owner->details->picture}}" height="100px" width="100px">
                                          @endif
                                          @endif
                                          <ul>
                                          <li> <label>@lang('g.Name') :</label> {{$product->owner->name}}</li>
                                          <li>
                                          <label>@lang('g.FirstName') :</label> {{$product->owner->details->first_name or ''}}</li>
                                          <li>
                                           <label>@lang('g.LastName') :</label> {{$product->owner->details->last_name or '' }}</li>
                                             <li> <label>@lang('g.Email') :</label></label> {{$product->owner->details->email or '' }}</li>
                                        <li><label>@lang('g.Mobile') :</label> {{$product->owner->details->phone or ''}} </li>
                                    </ul>


                                </div>
                            </div>
                        </div>
                        
                        <!--end singlw item info -->
                    </div>
                </div>
</div>
                </div>
        </section>
        
        
        
               <script type="text/javascript">
       var addBidUrl="{{route('bids.addBid')}}";
       function addBid() {
         $('#errorMessage').addClass('hidden');
         $('#bid').removeClass('show-success');
         $('#bid').removeClass('alert-danger');
        var bid = $('#bid').val();
        console.log(bid);
        $.post(addBidUrl, {
            '_token':"{{csrf_token()}}",
            'product_id':"{{$product->id}}",
            'price':bid
        },function(res) {
            if(res.status) {
                $('#current_price').text(bid);
                 $('#bid').addClass('show-success');
                 setTimeout(function() {
                    $('#bid').removeClass('show-success');

                 },1500);
            } else {
                //price must be bigger
                $('#bid').addClass('alert-danger');
                $('#errorMessage').text("@lang('g.PriceMustBeBigger')");
                $('#errorMessage').removeClass('hidden');
            }
        });

       }

       </script>
        





@endsection
