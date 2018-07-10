@extends('layouts.master')




@section('content')
<script src="https://cdn.ckeditor.com/ckeditor5/10.0.1/classic/ckeditor.js"></script>
<script type="text/javascript">
window.addEventListener('load',function() {
ClassicEditor
    .create( document.getElementById('description') )
    .then( function(editor) {
        console.log( 'Editor was initialized', editor );
    } )
    .catch( function(err){
        console.error( err.stack );
    } );
});
</script>
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery.datetimepicker.min.css')}}"/>
<style type="text/css">

input[type="file"] {
	display:none;
	
}
#pics_error{
	display:none;
}
</style>

<div class="container">
	<div class="row">
		@if($errors)
		<ul class="list-group">
			@foreach($errors->all() as $e)
			<li class="list-group-item text-error">
				{{$e}}
				
			</li>
				@endforeach
			
		</ul>
		@endif
	</div>

  
        <form role="form" id="productForm" action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
        	{!!csrf_field()!!}
        	<div class="row">
        	<div class="col-md-5">
 
             
    				<div class="form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="Name" required value="{{Request::old('name')}}">
					</div>
					<div class="form-group">
						<select value="{{Request::old('region_id')}}" name="region_id" class="form-control">
							@foreach($regions as $r)
							<option value="{{$r->id}}">{{$r->name}}</option>
							@endforeach
							
						</select>
					</div>
					<div class="form-group">
						<select value="{{Request::old('category_id')}}" name="category_id" class="form-control">
							@foreach($categories as $r)
							<option value="{{$r->id}}">{{$r->name}}</option>
							@endforeach
							
						</select>
					</div>
					<div class="form-group">
						<input value="{{Request::old('start_price')}}" placeholder="start_price" type="text" class="form-control" name="start_price" required>
					</div>
                    <div class="form-group">
                    <textarea class="form-control" type="textarea"  placeholder="Description" id="description"  name="description">
                    	{{Request::old('description')}}
                    </textarea>
                                          
                    </div>
            
       
          </div>
          <div class="col-md-5 col-md-offset-2">
          	<div class="form-group"><label>End:</label> <br>
          		<div class="row"> <div class='input-group date' >
                    <input id='stopdatetime' type='text' name="stop_date" value="{{Request::old('stop_date')}}" required class="form-control" />
                    <span class="input-group-addon">
                        <span class="fa fa-calendar"></span>
                    </span>
                </div></div>
					</div>
          	<div class="form-group"><label>Main :</label> <br>
          		<div class="row">
          			
          		<label class="btn btn-sm btn-fill-success" ><input type="file" name="main_pic" onchange="show(this)" >Upload  <i class="fa fa-cloud"></i> </label>
          			<img src="" id="preview" class="hidden" height="50px" width="50px">
          	</div>
          	</div>
          	<div class="form-group" id="pictures">
          		<label>Additional Pics: </label> <br>
          		<p class="text-danger" id="pics_error" > Can't add more than 3 pics</p>
          		<div class="row">
          		
          		<label class="btn btn-sm btn-fill" >
      <input type="file"  name="pictures[]" onchange="show(this)" >
     Upload <i class='fa fa-cloud '></i>
    </label>	<img src="" id="preview" class="hidden" height="50px" width="50px">
    <button  type="button" onclick="addNewPic()" class="btn btn-info pull-right">Add</button>
    </div>
          		
          	</div>
          	
          </div>
          </div>
          <div class="row">
          	<div class="form-group pull-right">
          		<input type="submit" class="btn btn-primary " value="Save">
          	</div>
          </div>


        </form>
  

</div>
@section('js')
<script src="{{asset('assets/js/jquery.datetimepicker.full.min.js')}}"></script>
<script type="text/javascript">
function getFormattedDate(date) {
    var day = date.getDate();
    var month = date.getMonth() + 1;
    var year = date.getFullYear().toString().slice(2);
    return year + '-' + month + '-' + day;
}
 $(function () {
                $('#stopdatetime').datetimepicker({
                	   format:'Y-m-d H:i',
                	minDate: getFormattedDate(new Date())
                });
            });
            </script>
<script type="text/javascript">
	var counter =1 ;
	function addNewPic() {
		if(counter<3) {
		var html = '<br>	<div class="row"><label class="btn btn-sm btn-fill" ><input type="file" name="pictures[]" onchange="show(this)" >Upload <i class="fa fa-cloud"></i> </label> <img src="" id="preview" class="hidden" height="50px" width="50px"></div>';
		$('#pictures').append(html);
		counter++;
	} else {
		$('#pics_error').fadeIn();
	}

	}
	$('#productForm').submit(function() {

	});
	function show(file) {

		console.log(file.files[0]);

		$(file).closest('.row').find('#preview').attr('src',URL.createObjectURL(file.files[0])).removeClass('hidden');

	}
</script>
@endsection


@endsection