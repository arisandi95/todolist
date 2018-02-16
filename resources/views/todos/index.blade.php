@extends('layouts.master')

@section('content')
<h1>Todos</h1>
@if(count($todos) > 0 )
	@foreach($todos as $todo)
		<div class="well">
			<h4>	
				<a href="todo/{{$todo->id}}">{{ $todo->text }}  </a>
				<span class="label label-danger"> {{$todo->due }} </span>
			</h4>
		</div>
	@endforeach
@endif
@endsection