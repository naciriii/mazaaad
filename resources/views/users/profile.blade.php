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
                <div class="panel-heading">@lang('g.BasicDetails')</div>

                <div class="panel-body">
                    <ul class="list-group">
                        <li ng-click="vm.toggle('nameForm')" class="list-group-item default"> @lang('g.Name') <i class=" fa pull-right"
                                    ng-class="vm.nameForm==true?'fa-caret-up':'fa-caret-down'"></i> </li>
                        <li ng-show="vm.nameForm" class="list-group-item">
                            <input type="text" ng-class="{'show-success':vm.success}" ng-model="vm.user.name" class="form-control "  placeholder="[[vm.user.name]]">
                            <small ng-show="vm.nameError.length>0" class="form-text text-danger">[[vm.nameError]]</small>
                            <br> 
                            <button ng-click="vm.update('name')" ng-disabled="vm.user.name.length == 0;" class="btn btn-sm btn-fill">@lang('g.Save')</button>
                             <i ng-show="vm.loading" class="fa fa-spinner fa-spin fa-2x"></i>
                        </li>
                           <li ng-click="vm.toggle('emailForm')" class="list-group-item default"> @lang('g.Email') <i class=" fa pull-right"
                                    ng-class="vm.emailForm==true?'fa-caret-up':'fa-caret-down'"></i></li>
                        <li ng-show="vm.emailForm" class="list-group-item">
                            <input ng-class="{'show-success':vm.success}"  ng-focus="vm.emailError=''" ng-model="vm.user.email" type="text" class="form-control" value="[[vm.user.email]]">
                            <small ng-show="vm.emailError.length>0" class="form-text text-danger">[[vm.emailError]]</small>
                            <br> 
                            <button ng-click="vm.update('email')" ng-disabled="vm.user.email.length == 0;"  class="btn btn-sm btn-fill">@lang('g.Save')</button>
                              <i ng-show="vm.loading" class="fa fa-spinner fa-spin fa-2x"></i>
                        </li>
                           <li ng-click="vm.toggle('passwordForm')" class="list-group-item default"> @lang('g.Password') <i class=" fa pull-right"
                                    ng-class="vm.passwordForm==true?'fa-caret-up':'fa-caret-down'"></i> </li>
                        <li ng-show="vm.passwordForm" class="list-group-item">
                            <input ng-class="{'show-success':vm.success}"  ng-focus="vm.passwordError=''" ng-model="vm.user.old_password" type="password" class="form-control" placeholder="@lang('g.OldPassword')">
                            <input ng-class="{'show-success':vm.success}" ng-focus="vm.passwordError=''" ng-model="vm.user.new_password" type="password" class="form-control" placeholder="@lang('g.NewPassword')">
                            <small ng-show="vm.passwordError.length>0" class="form-text text-danger">[[vm.passwordError]]</small>
                            <br> 
                            <button ng-click="vm.update('password')" ng-disabled="vm.user.new_password.length == 0 || vm.user.old_password.length == 0 ;"  class="btn  btn-sm btn-fill">@lang('g.Save')</button>
                            <i ng-show="vm.loading" class="fa fa-spinner fa-spin fa-2x"></i>
                        </li>
                         <li ng-click="vm.toggle('identifierForm')" class="list-group-item default"> @lang('g.Identifier') : Cin<i class=" fa pull-right"
                                    ng-class="vm.identifierForm==true?'fa-caret-up':'fa-caret-down'"></i> </li>
                                      <li ng-show="vm.identifierForm" class="list-group-item">
                            <input type="text" ng-class="{'show-success':vm.success}" ng-model="vm.user.details.identifier" class="form-control "  placeholder="[[vm.user.details.identifier]]">
                            <small ng-show="vm.identifierError.length>0" class="form-text text-danger">[[vm.identifierError]]</small>
                            <br> 
                            <button ng-click="vm.update('identifier')" ng-disabled="vm.user.details.identifier.length == 0;" class="btn btn-sm btn-fill">@lang('g.Save')</button>
                             <i ng-show="vm.loading" class="fa fa-spinner fa-spin fa-2x"></i>
                        </li>

                        <li ng-click="vm.toggle('birthdayForm')" class="list-group-item default"> @lang('g.Birthday') <i class=" fa pull-right"
                                    ng-class="vm.birthdayForm==true?'fa-caret-up':'fa-caret-down'"></i> </li>
                                      <li ng-show="vm.birthdayForm" class="list-group-item">
                            <input type="date" ng-class="{'show-success':vm.success}" ng-model="vm.user.details.birthday" class="form-control " value="[[vm.user.details.birthday]]">
                            <small ng-show="vm.birthdayError.length>0" class="form-text text-danger">[[vm.birthdayError]]</small>
                            <br> 
                            <button ng-click="vm.update('birthday')" ng-disabled="vm.user.details.birthday.length == 0;" class="btn btn-sm btn-fill">@lang('g.Save')</button>
                             <i ng-show="vm.loading" class="fa fa-spinner fa-spin fa-2x"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

            <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">@lang('g.Details')</div>

                <div class="panel-body">

                    <ul class="list-group">
                        <li ng-click="vm.toggle('firstNameForm')" class="list-group-item default"> @lang('g.FirstName') <i class=" fa pull-right"
                                    ng-class="vm.firstNameForm==true?'fa-caret-up':'fa-caret-down'"></i> </li>
                                      <li ng-show="vm.firstNameForm" class="list-group-item">
                            <input type="text" ng-class="{'show-success':vm.success}" ng-model="vm.user.details.first_name" class="form-control "  placeholder="[[vm.user.details.first_name]]">
                            <small ng-show="vm.firstNameError.length>0" class="form-text text-danger">[[vm.firstNameError]]</small>
                            <br> 
                            <button ng-click="vm.update('first_name')" ng-disabled="vm.user.details.first_name.length == 0;" class="btn btn-sm btn-fill">@lang('g.Save')</button>
                             <i ng-show="vm.loading" class="fa fa-spinner fa-spin fa-2x"></i>
                        </li>
                         <li ng-click="vm.toggle('lastNameForm')" class="list-group-item default"> @lang('g.LastName') <i class=" fa pull-right"
                                    ng-class="vm.lastNameForm==true?'fa-caret-up':'fa-caret-down'"></i> </li>
                                      <li ng-show="vm.lastNameForm" class="list-group-item">
                            <input type="text" ng-class="{'show-success':vm.success}" ng-model="vm.user.details.last_name" class="form-control "  placeholder="[[vm.user.details.last_name]]">
                            <small ng-show="vm.lastNameError.length>0" class="form-text text-danger">[[vm.lastNameError]]</small>
                            <br> 
                            <button ng-click="vm.update('last_name')" ng-disabled="vm.user.details.last_name.length == 0;" class="btn btn-sm btn-fill">@lang('g.Save')</button>
                             <i ng-show="vm.loading" class="fa fa-spinner fa-spin fa-2x"></i>
                        </li>
                         <li ng-click="vm.toggle('mobileForm')" class="list-group-item default"> @lang('g.Mobile') <i class=" fa pull-right"
                                    ng-class="vm.mobileForm==true?'fa-caret-up':'fa-caret-down'"></i> </li>
                                      <li ng-show="vm.mobileForm" class="list-group-item">
                            <input type="text" ng-class="{'show-success':vm.success}" ng-model="vm.user.details.phone" class="form-control "  placeholder="[[vm.user.details.phone]]">
                            <small ng-show="vm.mobileError.length>0" class="form-text text-danger">[[vm.mobileError]]</small>
                            <br> 
                            <button ng-click="vm.update('mobile')" ng-disabled="vm.user.details.phone.length == 0;" class="btn btn-sm btn-fill">@lang('g.Save')</button>
                             <i ng-show="vm.loading" class="fa fa-spinner fa-spin fa-2x"></i>
                        </li>
                        <li ng-click="vm.toggle('secondaryEmailForm')" class="list-group-item default"> @lang('g.SecondaryEmail') <i class=" fa pull-right"
                                    ng-class="vm.secondaryEmailForm==true?'fa-caret-up':'fa-caret-down'"></i> </li>
                                      <li ng-show="vm.secondaryEmailForm" class="list-group-item">
                            <input type="text" ng-class="{'show-success':vm.success}" ng-model="vm.user.details.email" class="form-control "  placeholder="[[vm.user.details.email]]">
                            <small ng-show="vm.secondaryEmailError.length>0" class="form-text text-danger">[[vm.secondaryEmailError]]</small>
                            <br> 
                            <button ng-click="vm.update('secondaryEmail')" ng-disabled="vm.user.details.email.length == 0;" class="btn btn-sm btn-fill">@lang('g.Save')</button>
                             <i ng-show="vm.loading" class="fa fa-spinner fa-spin fa-2x"></i>
                        </li>
                        <li ng-click="vm.toggle('pictureForm')" class="list-group-item default"> @lang('g.Picture') <i class=" fa pull-right"
                                    ng-class="vm.pictureForm==true?'fa-caret-up':'fa-caret-down'"></i> </li>
                                      <li ng-show="vm.pictureForm" class="list-group-item">
                            <input id="pic" type="file" ng-class="{'show-success':vm.success}" ng-model="vm.user.details.picture" class="form-control " >
                            <small ng-show="vm.pictureError.length>0" class="form-text text-danger">[[vm.PictureError]]</small>
                            <br> 
                            <img   class="pull-right" ng-src="[[vm.user.details.picture]]" height="50px" width="50px"> <br>
                            <button ng-click="vm.update('picture')" ng-disabled="vm.user.details.picture.length == 0;" class="btn btn-sm btn-fill">@lang('g.Save')</button>
                             <i ng-show="vm.loading" class="fa fa-spinner fa-spin fa-2x"></i>
                        </li>
                       
                </div>
            </div>
        </div>

        </div>
        </div>
            @endsection