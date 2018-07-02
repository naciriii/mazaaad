@extends('layouts.master')
@section('content')


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
                                    <span class="single-price"><b>Current Price:</b> <span id="current_price">{{$product->topBid()}}</span> TND</span>
                                    <p> <i>Added by:</i> <small> {{$product->owner->name}}</small></p>
                                    
                                    @if(!Auth::check() || $product->user_id != Auth::user()->id)
                                    @if($product->is_available && Auth::check())
                                    <div class="select-quantity">
                                        <input type="text" id="bid"  name="bid" title="" class="input-text qty text" >
                                    </div>
                                    @endif

                                    <div class="product-add-cart">
                                        @if($product->is_available)
                                        <a onclick="addBid(event)" class="btn btn-fill">Add Bid</a>

                                        @elseif($product->winningBid!=null)
                                        <a  class="btn btn-fill-success "><i class=" fa fa-check"></i> Sold !</a>

                                        @else
                                      
                                         <span class="btn btn-fill">Stop Date Reached</span>
                                        @endif
                                       
                                    </div>
                                    @else
                                    <div class="product-add-cart">
                                        @if($product->is_available)
                                        <a onclick="finishAuction(event)" class="btn btn-fill "><i class=" fa fa-close"></i> Finish Auction</a>
                                        @elseif($product->winningBid!=null)
                                        <a  class="btn btn-fill-success "><i class=" fa fa-check"></i> Sold !</a>

                                        @else
                                         <a href="{{route('products.edit',['id'=>$product->id])}}" class="btn btn-fill"> Extend Stop Date !</a>


                                        @endif
                                        
                                    </div>

                                    @endif
                                    <div class="product-additional-info">
                                        <ul>
                                        
                                            <li><b>Category:</b><a href="">{{$product->category->name}}</a></li>
                                            <li><b>Region:</b>{{$product->region->name}}</li>
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
                                    <a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a>
                                </li>
                                <li role="presentation" class="">
                                    <a href="#specification" aria-controls="specification" role="tab" data-toggle="tab">Specification</a>
                                </li>
                                <li role="presentation" class="">
                                    <a href="#seller" aria-controls="seller" role="tab" data-toggle="tab">Seller info</a>
                                </li>
                            </ul>
                            
                            <!-- Tab panes -->
                            <div class="tab-content xt-tab-content">
                                <div role="tabpanel" class="tab-pane xt-pane xt-description fade in active" id="description">
                                    <h3>Product Description</h3>
                                    <b>Description</b>
                                    <p>{!!$product->details->description!!}</p>
                                   
                                </div>
                                <div role="tabpanel" class="tab-pane xt-pane fade" id="specification">
                                    <h3>Product Specification</h3>
                                    
                                    <p>Mustache cliche tempor, williamsburg carles vegan helvetica. 
                                   </p>
                                    <ul>
                                        <li> 73.6% Cotton </li>
                                        <li> 24.5% Polyester </li>
                                        <li> 1.9% Elastane </li>
                                         <li> 73.6% Cotton </li>
                                        <li> 24.5% Polyester </li>
                                     
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane xt-pane fade" id="seller">
                                    aw denim you probably haven't heard of them jean shorts Austin. 
                                    Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. 
                                    Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi
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
        var bid = $('#bid').val();
        console.log(bid);
        $.post(addBidUrl, {
            '_token':"{{csrf_token()}}",
            'product_id':"{{$product->id}}",
            'price':bid
        },function(res) {
            if(res.status) {
                $('#current_price').text(bid);
            }
        });

       }

       </script>
        





@endsection
