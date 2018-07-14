@extends('layouts.master')
@section('content')

  


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
                    @foreach($products as $p)
                    <div class="col-md-3">


                        <div class="xt-feature">
                            <div class="product-img">
                                <img height="200px" width="198px" src="{{$p->mainPicture->first()->path}}" alt="" class="">
                                @if($p->winningBid != null)
                                <span class="product-tag-live xt-uppercase">@lang('g.Sold')!</span> @else
                                 <span class="product-tag xt-uppercase">@lang('g.Over')!</span>

                                @endif
                            </div>
                            <div class="product-info">
                                <div class="product-title">
                                    <span class="category xt-uppercase">{{$p->name}}</span>
                                    <span class="name xt-semibold">{{$p->category->name}}</span>
                                </div>
                                <div class="price-tag pull-right">
                                    <span class="new-price xt-semibold">{{$p->start_price}} Tnd</span>
                                  
                                </div>
                                <div class="xt-featured-caption text-center">
                                    @if($p->winningBid != null)
                                    <div class="product-title">
                                        <span class="category xt-uppercase">@lang('g.SoldFor')</span>
                                        <span class="name xt-semibold"><b>{{$p->winningBid->price or 0}} Tnd</b> </span>
                                    </div>
                                    <div class="price-tag text-center">
                                        <span class="new-price xt-semibold">@lang('g.To') <small>{{$p->winningBid->bidder->name or '' }}</small> </span>
                                    </div>
                                    @else
                                     <div class="product-title">
                                        <span class="category xt-uppercase">@lang('g.PastStopDate')</span>
                                       
                                    </div>
                                    @endif
                                    <div class="add-cart">
                                        <a href="{{route('products.show',['id'=>$p->id])}}" class="btn btn-fill">@lang('g.Details')</a>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
                
                </div>
            
            </div>
           
            <div class="row col-md-3 col-md-offset-7">
                <button class="btn btn-fill">@lang('g.ShowMore')</button></div>
        </div>
    </section>
  @endsection
    
   
    
    
   
    
  
    
   

   