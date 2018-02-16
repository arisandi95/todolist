@extends('layouts.master')

@section('content')
	<a href="/" class="btn btn-warning">Go Back</a>
	<h2>	
		{{ $todo->text }} 
	</h2>
	<span class="label label-danger"> {{$todo->due }} </span>
	<hr>
	<p>{{$todo->body}}</p>

	<br><br>
	<a href="/todo/{{$todo->id}}/edit"><button class="btn btn-warning">Edit</button></a>

	{!! Form::open(['action' => ['TodosController@destroy', $todo->id],'method'=> 'POST', 'class' => 'pull-right']) !!}
		{{ Form::hidden('_method', 'DELETE') }}
		{{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
	{!! Form::close() !!}
@endsection