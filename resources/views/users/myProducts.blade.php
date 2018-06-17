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
                <div class="panel-heading">Products
                    <a href="{{route('products.add')}}" class="pull-right"><i class=" fa fa-pencil"></i> Add New</a>
                </div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <th>Name</th>
                            <th>Picture</th>
                            <th>Category</th>
                            <th>Start Price</th>
                            <th>Current Price</th>
                            <th>Stop Date</th>
                            <th>Region</th>
                            <th>Status</th>
                            <th>Is Available</th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach($products as $p )
                            <tr>
                            <td>{{$p->name}}</td>
                            <td><img src="{{$p->mainPicture->first()->path}}" width="80px" height="80px"></td>
                            <td>{{$p->category->name}}</td>
                            <td>{{$p->start_price}}</td>
                             <td>{{$p->topBid()}}</td>
                            <td>{{$p->stop_date}}</td>
                            <td>{{$p->region->name}}</td>
                             <td>{!!$p->is_valid?"<label class='label label-success'>Valid</label>":"<label class='label label-warning'>Pending</label>"!!}</td>
                            <td>{{$p->is_available?'Yes':'No'}}</td>
                            <td><a href="{{route('products.edit',['id'=>$p->id])}}"><button class="btn btn-sm btn-fill">Details</button></a></td>
                            <td><button onclick="showDeleteConfirmation('{{route('products.delete',['product_id'=>$p->id])}}')" class="btn btn-sm btn-danger">Delete</button>
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