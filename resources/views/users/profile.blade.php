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
<br>
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
                            <input type="text" ng-class="{'show-success':vm.success}" ng-model="vm.user.name" class="form-control "  placeholder="[[vm.user.name]]">
                            <small ng-show="vm.nameError.length>0" class="form-text text-danger">[[vm.nameError]]</small>
                            <br> 
                            <button ng-click="vm.update('name')" ng-disabled="vm.user.name.length == 0;" class="btn btn-sm btn-fill">Save</button>
                             <i ng-show="vm.loading" class="fa fa-spinner fa-spin fa-2x"></i>
                        </li>
                           <li ng-click="vm.toggle('emailForm')" class="list-group-item default"> Email <i class=" fa pull-right"
                                    ng-class="vm.emailForm==true?'fa-caret-up':'fa-caret-down'"></i></li>
                        <li ng-show="vm.emailForm" class="list-group-item">
                            <input ng-class="{'show-success':vm.success}"  ng-focus="vm.emailError=''" ng-model="vm.user.email" type="text" class="form-control" value="[[vm.user.email]]">
                            <small ng-show="vm.emailError.length>0" class="form-text text-danger">[[vm.emailError]]</small>
                            <br> 
                            <button ng-click="vm.update('email')" ng-disabled="vm.user.email.length == 0;"  class="btn btn-sm btn-fill">Save</button>
                              <i ng-show="vm.loading" class="fa fa-spinner fa-spin fa-2x"></i>
                        </li>
                           <li ng-click="vm.toggle('passwordForm')" class="list-group-item default"> Password <i class=" fa pull-right"
                                    ng-class="vm.passwordForm==true?'fa-caret-up':'fa-caret-down'"></i> </li>
                        <li ng-show="vm.passwordForm" class="list-group-item">
                            <input ng-class="{'show-success':vm.success}"  ng-focus="vm.passwordError=''" ng-model="vm.user.old_password" type="password" class="form-control" placeholder="Old Password">
                            <input ng-class="{'show-success':vm.success}" ng-focus="vm.passwordError=''" ng-model="vm.user.new_password" type="password" class="form-control" placeholder="New Password">
                            <small ng-show="vm.passwordError.length>0" class="form-text text-danger">[[vm.passwordError]]</small>
                            <br> 
                            <button ng-click="vm.update('password')" ng-disabled="vm.user.new_password.length == 0 || vm.user.old_password.length == 0 ;"  class="btn  btn-sm btn-fill">Save</button>
                            <i ng-show="vm.loading" class="fa fa-spinner fa-spin fa-2x"></i>
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