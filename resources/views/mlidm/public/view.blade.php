<div class="m-t" style="padding-top:25px;">	
    <div class="row m-b-lg animated fadeInDown delayp1 text-center">
        <h3> {{ $pageTitle }} <small> {{ $pageNote }} </small></h3>
        <hr />       
    </div>
</div>
<div class="m-t">
	<div class="table-responsive" > 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
			
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Id', (isset($fields['id']['language'])? $fields['id']['language'] : array())) }}</td>
						<td>{{ $row->id}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('No Mypoin', (isset($fields['no_mypoin']['language'])? $fields['no_mypoin']['language'] : array())) }}</td>
						<td>{{ $row->no_mypoin}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Points', (isset($fields['points']['language'])? $fields['points']['language'] : array())) }}</td>
						<td>{{ $row->points}} </td>

					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)" class="btn btn-primary"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	