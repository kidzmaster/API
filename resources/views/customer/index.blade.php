@extends('layouts.app')
@section('title')
Customer
@endsection
@section('content')
<div class="container">
	<div class="row">
	<h1><a href="/Customers/create">Add New Customer</a></h1>
		<table class="table table-hover">
	<thead>
		<tr>
			<th>Fullname</th>
			<th>Username</th>
			<th>Password</th>
			<th>Description</th>
			<th>Studient Code</th>
			
			<th>Status</th>
			<th>Action</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
	@foreach($custom as $t)
		<tr>
			<td>{{$t->full_name}}</td>
			<td>{{$t->username}}</td>
			<td>{{$t->password}}</td>
			<td>{{$t->description}}</td>
			
			<td>{{$t->studient_code}}</td>
			<td>{{$t->status}}</td>
		
			<td><a href="{{ url('/Customers/' . $t->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Post"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a></td>
		<td>	 {!! Form::open([
                'method'=>'DELETE',
                'url' => ['/Customers', $t->id],
                'style' => 'display:inline'
            ]) !!}
                {!! Form::button('Delete', array(
                        'type' => 'submit',
                        'class' => 'btn btn-danger btn-xs',
                        'title' => 'Delete Post',
                        'onclick'=>'return confirm("Confirm delete?")'
                )) !!}
            {!! Form::close() !!}</td>
		</tr>
	@endforeach	
	</tbody>
</table>
	</div>
</div>
@endsection
