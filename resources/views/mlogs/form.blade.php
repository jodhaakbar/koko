@extends('layouts.app')

@section('content')
<section class="page-header row">
	<h2> {{ $pageTitle }} <small> {{ $pageNote }} </small></h2>
	<ol class="breadcrumb">
		<li><a href="{{ url('') }}"> Dashboard </a></li>
		<li><a href="{{ url($pageModule) }}"> {{ $pageTitle }} </a></li>
		<li class="active"> Form  </li>		
	</ol>
</section>
<div class="page-content row">
	<div class="page-content-wrapper no-margin">

	{!! Form::open(array('url'=>'mlogs?return='.$return, 'class'=>'form-horizontal validated','files' => true )) !!}
	<div class="sbox">
		<div class="sbox-title clearfix">
			<div class="sbox-tools " >
				<a href="{{ url($pageModule.'?return='.$return) }}" class="tips btn btn-sm "  title="{{ __('core.btn_back') }}" ><i class="fa  fa-times"></i></a> 
			</div>
			<div class="sbox-tools pull-left" >
				<button name="apply" class="tips btn btn-sm btn-apply  "  title="{{ __('core.btn_back') }}" ><i class="fa  fa-check"></i> {{ __('core.sb_apply') }} </button>
				<button name="save" class="tips btn btn-sm btn-save"  title="{{ __('core.btn_back') }}" ><i class="fa  fa-paste"></i> {{ __('core.sb_save') }} </button> 
			</div>
		</div>	
		<div class="sbox-content clearfix">
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		
<div class="col-md-12">
						<fieldset><legend> Modul  logs</legend>
				{!! Form::hidden('auditID', $row['auditID']) !!}					
									  <div class="form-group  " >
										<label for="Ipaddress" class=" control-label col-md-4 text-left"> Ipaddress </label>
										<div class="col-md-6">
										  <input  type='text' name='ipaddress' id='ipaddress' value='{{ $row['ipaddress'] }}' 
						     class='form-control input-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="User Id" class=" control-label col-md-4 text-left"> User Id </label>
										<div class="col-md-6">
										  <input  type='text' name='user_id' id='user_id' value='{{ $row['user_id'] }}' 
						     class='form-control input-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Module" class=" control-label col-md-4 text-left"> Module </label>
										<div class="col-md-6">
										  <input  type='text' name='module' id='module' value='{{ $row['module'] }}' 
						     class='form-control input-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Task" class=" control-label col-md-4 text-left"> Task </label>
										<div class="col-md-6">
										  <input  type='text' name='task' id='task' value='{{ $row['task'] }}' 
						     class='form-control input-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Note" class=" control-label col-md-4 text-left"> Note </label>
										<div class="col-md-6">
										  <textarea name='note' rows='5' id='note' class='form-control input-sm '  
				           >{{ $row['note'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Logdate" class=" control-label col-md-4 text-left"> Logdate </label>
										<div class="col-md-6">
										  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('logdate', $row['logdate'],array('class'=>'form-control input-sm datetime', 'style'=>'width:150px !important;')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div>
				 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> </fieldset>
			</div>
			
			

		</div>
	</div>
	<input type="hidden" name="action_task" value="save" />
	{!! Form::close() !!}
	</div>
</div>		
	
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		 		 

		$('.removeMultiFiles').on('click',function(){
			var removeUrl = '{{ url("mlogs/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop