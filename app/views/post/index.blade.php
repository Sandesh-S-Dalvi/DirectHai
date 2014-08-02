@extends('layout.master')

@section('content')

@if (Session::has('message'))
	<div class="alert alert-warning alert-dismissible">
		<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		<strong>{{ Session::get('message') }}</strong>
	</div>
@endif

{{ Notification::showAll() }}

<table class="table table-striped" >
	<thead>
		<tr>
			<th>Agency</th>
			<th>Locality</th>
			<th>Plus</th>
			<th>Deal Type</th>
			<th>For</th>
			<th>Size</th>
			<th>Rent/Price</th>
			<th>Deposit</th>
			<th>Floor</th>
			<th>Amenities</th>
			<th>Posted</th>
			<th>Action</th>
		</tr>
	</thead>
	@foreach ($postss as $post) 
	<tr>
		<td>@if($post->entity){{ $post->entity->entityname }}@endif</td>
		<td>@if($post->locality){{ $post->locality->locality }}@endif</td>
		<td>@if($post->plus){{ $post->plus->filter_op }}@endif</td>
		<td>@if($post->dealtype){{ $post->dealtype->filter_op }}@endif</td>
		<td>@if($post->fortype){{ $post->fortype->filter_op }}@endif</td>
		<td>@if($post->size){{ $post->size->filter_op }}@endif</td>
		<td>@if($post->rentprice){{ $post->rentprice->filter_op }}@endif</td>
		<td>@if($post->deposit){{ $post->deposit->filter_op }}@endif</td>
		<td>@if($post->floor){{ $post->floor->filter_op }}@endif</td>
		<td>@if($post->amenity){{ $post->amenity->filter_op }}@endif</td>
		<td>@if($post->updated_at){{ $post->updated_at->diffForHumans() }}@endif</td>
		<td><a class="btn btn-small btn-info" href="{{ URL::to('post/' . $post->id.'/edit') }}"><strong>Edit</strong></a>
			{{ Form::open(array('url' => 'post/' . $post->id, 'class' => 'pull-right')) }}
			{{ Form::hidden('_method', 'DELETE') }}
			{{ Form::submit('Delete', array('class' => 'btn btn-small btn-danger')) }}
			{{ Form::close() }}
			</td>
	</tr>
	@endforeach
</table>

{{ $postss->links() }}


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">Create New Post</h4>
			</div>

			<div class="modal-body">
				
				{{ Form::open(array('action' => 'PostController@store')) }}
				
				<table>
					
					<tr>

					<td> {{ Form::label('locality','Area : ')}} </td>
					<td> {{ Form::select('locality',array(
						'0' => '-- Select --',
						'1' => 'Golden Nest',
						'5' => 'Kanakia',
						'9' => 'GCC',
						'13' => 'Hatkesh',
						'17' => 'Silver Park'
						), '0')}} </td>
					
					</tr>
					<tr>

					<td> {{ Form::label('entity','Entity : ')}} </td>
					<td> {{ Form::select('entity',array(
						'0' => '-- Select --',
						'1' => 'Harish Real Estate Consultant',
						'5' => 'Ajay Real Estate Agency',
						'9' => 'Shirish Real Estate Consultant',
						'13' => 'Ramesh Real Estate Agency',
						'17' => 'Suresh Real Estate Agency',
						'21' => '5star Real Estate Agency'
						), '0')}} </td>
					
					</tr>
					<tr>

					<td> {{ Form::label('plus','Plus : ')}} </td>
					<td> {{ Form::radio('plus','1') }} Direct <br> 
						 {{ Form::radio('plus','5') }} Plus 1  <br>
						 {{ Form::radio('plus','9') }} Plus	2  <br>
						 {{ Form::radio('plus','13') }} Plus 3 </td>
					
					</tr>				
					<tr>

					<td> {{ Form::label('dealtype','Deal Type : ')}} </td>
					<td> {{ Form::radio('dealtype','17') }} Residential   
						 {{ Form::radio('dealtype','21') }} Commercial </td>
					
					</tr>
					<tr>

					<td> {{ Form::label('for','For : ')}} </td>
					<td> {{ Form::radio('for','25') }} Rental  
						 {{ Form::radio('for','29') }} Outright </td>
					
					</tr>
					<tr>

					<td> {{ Form::label('size','Size : ')}} </td>
					<td> {{ Form::radio('size','33') }} 1 RK  <br>
						 {{ Form::radio('size','37') }} 1 BHK  <br>
						 {{ Form::radio('size','41') }} 2 BHK <br> 
						 {{ Form::radio('size','45') }} 3 BHK  <br>
						 {{ Form::radio('size','49') }} Bunglow </td>
					
					</tr>
					<!-- <tr>
					
					<td> {{ Form::label('rent_type','Rent Type : ')}} </td>
					<td> {{ Form::radio('rent_type','14') }} Monthly Rent 
						 {{ Form::radio('rent_type','15') }} Heavy Deposit </td>
					


					</tr> -->
					<tr>

					<td> {{ Form::label('rent','Rent : ')}} </td>
					<td> {{ Form::radio('rent','61') }} Rs.5000 - Rs.7000<br>
						 {{ Form::radio('rent','65') }} Rs.7001 - Rs.10000 <br>
						 {{ Form::radio('rent','69') }} Rs.10001 - Rs.15000  <br>
						 {{ Form::radio('rent','73') }} Rs.15001 - Rs.25000<br>
						 {{ Form::radio('rent','77') }} Rs.25000+ </td>
					
					</tr>
					<tr>

					<td> {{ Form::label('deposit','Deposit : ')}} </td>
					<td> {{ Form::radio('deposit','81') }} Rs.50000 – Rs.70000	<br>
						 {{ Form::radio('deposit','85') }} Rs.70001 - Rs.100000 <br>
						 {{ Form::radio('deposit','89') }} Rs.100001 – Rs.150000 <br>
						 {{ Form::radio('deposit','93') }} Rs.150001 – Rs.250000<br>  
						 {{ Form::radio('deposit','97') }} Rs.250000+ </td>
					
					</tr>
					<tr>

					<td> {{ Form::label('floor','Floor : ')}} </td>
					<td> {{ Form::radio('floor','133') }} Any Floor <br>
						 {{ Form::radio('floor','137') }} Ground Floor <br>
						 {{ Form::radio('floor','141') }} First Floor <br>
						 {{ Form::radio('floor','145') }} 2nd - 3rd Floor<br>
						 {{ Form::radio('floor','149') }} 4nd - 8rd Floor<br>
						 {{ Form::radio('floor','153') }} Above 8th Floor </td>
					
					</tr>
					<tr>

					<td> {{ Form::label('amenities','Amenities : ')}} </td>
					<td> {{ Form::radio('amenities','157') }} Unfurnished  
						 {{ Form::radio('amenities','161') }} Furnished </td>
					
					</tr>	

					</table>

					<br>
					
					{{ Form::submit('Create', array('class' => 'btn btn-primary btn-lg btn-block')) }}

					{{ Form::close() }}

				<!-- </div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-primary" value="Create">Create</button>
				</div> -->

				

			</div>
		</div>
	</div>

	@stop




