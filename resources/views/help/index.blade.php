@extends('layouts.app')
@section('title')
Helps
@endsection
@section('content')
<div class="container">
    <div class="row">
    <h1><a href="/Helps/create">Add New Helps</a></h1>
        <table class="table table-hover">
    <thead>
        <tr>
            
            <th>Name</th>
            <th>Ruler_id</th>
            <th>Images</th>
            <th>Min</th>
            <th>Max</th>
            
            <th>Content</th>
            <th>Status</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
    @foreach($h as $t)
        <tr>
            <td>{{$t->name}}</td>
            <td>{{$t->ruler_id}}</td>
            <td>{{$t->images}}</td>
            <td>{{$t->min}}</td>
            <td>{{$t->max}}</td>
            <td>{{$t->content}}</td>
            <td>{{$t->status}}</td>
            <td>{{$t->created_at}}</td>
        
            <td><a href="{{ url('/Helps/' . $t->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Post"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a></td>
        <td>     {!! Form::open([
                'method'=>'DELETE',
                'url' => ['/Helps', $t->id],
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
