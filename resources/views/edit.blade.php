@extends('layouts.app')
{{-- to add the navbar --}}

@section('content')

{{-- to add body and subject --}}

<div class="container">

	<h1>Edit Task</h1>

	<form method="POST" action="/task/{{$task->id }}">
		<div class="form-group">
			<textarea name="description" class="form-control">{{ $task->description }}</textarea>
		</div>

		<div class="form-group">
			<button type="submit" name="update" class="btn btn-primary"> Update Task</button>
		</div>
		{{ csrf_field() }}

	</form>
	

</div>

@endsection