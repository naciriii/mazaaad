@extends('layouts.master')




@section('content')
<div class="container">
	<br>

	<div class="row">
		@if($errors)
		<ul class="list-group">
			@foreach($errors->all() as $e)
			<li class="list-group-item text-danger">
				{{$e}}
				
			</li>
				@endforeach
			
		</ul>
		@endif
	</div>
	@if(session('success'))
	<div class="alert alert-success"> {{session('success')}}</div>
	@endif
	<div class="row">
	<div class="panel panel-default">
		
		<div class="panel-body">
	<form action="{{route('complaints.store')}}" method="post">
	 {!! csrf_field()!!}

	 <div class="form-group">
	 	<label>@lang('g.Subject')</label>
	 	<select name="subject_id" class="form-control">
	 		<option>@lang('g.ChooseSubject')</option>
	 		@foreach($subjects as $s)
	 		<option value="{{$s->id}}">{{$s->name}}</option>

	 		@endforeach
	 	</select></div>
	 	<div class="form-group">
	 		<label>@lang('g.Content')</label>
	 		<textarea class="form-control" name="content">
	 		</textarea></div>
	 		<div class="form-group pull-right">
	 			<button class="btn btn-fill">
	 				@lang('g.Send')
	 			</button></div>
	</form>
</div>
</div>
</div>
</div>

@stop