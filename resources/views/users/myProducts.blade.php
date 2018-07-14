@extends('layouts.master')
@section('css')
     <!-- Angular -->
        <script src="{{asset('assets/plugins/js/angular.min.js')}}"></script>
        <script src="{{asset('assets/js/angular/Mazaad.js')}}"></script>
          <script src="{{asset('assets/js/angular/ProfileController.js')}}"></script>
          <style type="text/css">
          .default {
            background: #f5f5f5;
            cursor: pointer;
            }
            .show-success {
                border:2px solid green !important;
            }
            
            </style>
@endsection




@section('content')
<div class="container"
>
    <div class="row">


       
            <div class="panel panel-default">
                <div class="panel-heading">@lang('g.MyProducts')
                    <a href="{{route('products.add')}}" class="pull-right"><i class=" fa fa-plus"></i> @lang('g.AddNew')</a>
                </div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <th>@lang('g.Name')</th>
                            <th>@lang('g.Picture')</th>
                            <th>@lang('g.Category')</th>
                            <th>@lang('g.StartPrice')</th>
                            <th>@lang('g.CurrentPrice')</th>
                            <th>@lang('g.StopDate')</th>
                            <th>@lang('g.Region')</th>
                            <th>@lang('g.Status')</th>
                            <th>@lang('g.IsAvailable')</th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach($products as $p )
                            <tr>
                            <td>{{$p->name}}</td>
                            <td><img src="{{$p->mainPicture->first()->path}}" width="80px" height="80px"></td>
                            <td>{{$p->category->name}}</td>
                            <td>{{$p->start_price}} <small>TND</small></td>
                             <td>{{$p->topBid()}} <small>TND</small></td>
                            <td>{{$p->stop_date}}</td>
                            <td>{{$p->region->name}}</td>
                             <td>@if($p->is_valid)
                                <label class='label label-success'>@lang('g.Valid')</label> @else
                                <label class='label label-warning'>@lang('g.Pending')</label>@endif</td>
                            <td>@if($p->is_available)
                             @lang('g.Yes') @else 
                             @lang('g.No')
                             @endif</td>
                            <td> @if(count($p->bids)) 
                                 <a href="{{route('products.show',['id'=>$p->id])}}"><button class="btn btn-sm btn-fill">@lang('g.Details')</button></a>
                                 @else
        
                                <a href="{{route('products.edit',['id'=>$p->id])}}"><button class="btn btn-sm btn-fill">@lang('g.Details')</button></a>
                               
                                
                                @endif

                            </td>
                            <td>
                                @if(!count($p->bids) ) 
                                <button onclick="showDeleteConfirmation('{{route('products.delete',['product_id'=>$p->id])}}')" class="btn btn-sm btn-danger">@lang('g.Delete')</button>
                                @endif
                            </td>
                        </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
    
        </div>

        </div>
        </div>
        @include('users.modals.deleteProductModal')
            @endsection