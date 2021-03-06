@extends('layouts.master')

@section('content')
	<h1>Create Todo</h1>
	{!! Form::open(['action' => 'TodosController@store','method'=> 'POST']) !!}
		{{ Form::bsText('text') }}
		{{ Form::bsTextArea('body') }}
		{{ Form::bsText('due') }}
		{{ Form::bsSubmit('Submit', ['class' => 'btn btn-warning']) }}
	{!! Form::close() !!}
@endsection