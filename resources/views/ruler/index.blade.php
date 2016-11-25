@extends('layouts.app')
@section('title')
Rulers
@endsection
@section('content')
<div class="container">
	<div class="row">
	<h1><a href="/Rulers/create">Add New Rulers</a></h1>
		<table class="table table-hover">
	<thead>
		<tr>
			<th>id</th>
			<th>Name</th>
			<th>Ruler_id</th>
			<th>Content</th>
			<th>Status</th>
			<th>Action</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
	@foreach($rul as $r)
		<tr>
			<td>{{$r->id}}</td>
			<td>{{$r->name}}</td>
			<td>{{$r->ruler_id}}</td>
			<td>{{$r->content}}</td>
			<td>{{$r->status}}</td>
		
			<td><a href="{{ url('/Rulers/' . $r->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit rulers"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a></td>
		<td>	 {!! Form::open([
                'method'=>'DELETE',
                'url' => ['/Rulers', $r->id],
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
