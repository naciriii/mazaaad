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
            
            </style>
@endsection




@section('content')
<div class="container" ng-app="Mazaad" ng-controller="ProfileController as vm"
ng-init="vm.init('{{route('users.updateProfile')}}',{{Auth::user()->toJson()}},'{{csrf_token()}}')">
    <div class="row">

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Basic Details</div>

                <div class="panel-body">
                    <ul class="list-group">
                        <li ng-click="vm.toggle('nameForm')" class="list-group-item default"> Name <i class=" fa pull-right"
                                    ng-class="vm.nameForm==true?'fa-caret-up':'fa-caret-down'"></i> </li>
                        <li ng-show="vm.nameForm" class="list-group-item">
                            <input type="text" ng-model="vm.user.name" class="form-control"  placeholder="[[vm.user.name]]">
                            <small class="form-text text-danger"> hhhj</small>
                            <br> 
                            <button ng-disabled="vm.user.name.length == 0;" class="btn btn-sm btn-fill">Save</button>
                        </li>
                           <li ng-click="vm.toggle('emailForm')" class="list-group-item default"> Email <i class=" fa pull-right"
                                    ng-class="vm.emailForm==true?'fa-caret-up':'fa-caret-down'"></i></li>
                        <li ng-show="vm.emailForm" class="list-group-item">
                            <input type="text" class="form-control" placeholder="[[vm.user.email]]">
                            <br> 
                            <button class="btn btn-sm btn-fill">Save</button>
                        </li>
                           <li ng-click="vm.toggle('passwordForm')" class="list-group-item default"> Password <i class=" fa pull-right"
                                    ng-class="vm.passwordForm==true?'fa-caret-up':'fa-caret-down'"></i> </li>
                        <li ng-show="vm.passwordForm" class="list-group-item">
                            <input type="password" class="form-control" placeholder="Old Password">
                            <input type="password" class="form-control" placeholder="New Password">
                            <br> <
                            button class="btn  btn-sm btn-fill">Save</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

            <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Details</div>

                <div class="panel-body">
                </div>
            </div>
        </div>

        </div>
        </div>
            @endsection