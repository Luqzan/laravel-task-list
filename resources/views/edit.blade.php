@extends("layouts.app")

{{-- @section("title", "Edit Task")

@section("styles")
	<style>
		.error-message {
			color: red;
			font-size: 0.8rem;
		}
	</style>
@endsection --}}

@section("content")
	@include("form", ["task" => $task])
	{{-- {{ $errors }} --}}
	{{-- <form action="{{ route("tasks.update", ["task" => $task->id]) }}" method="POST">

		@csrf
		@method("PUT")

		<div>
			<label for="title">Title</label>
			<input type="text" name="title" id="title" value="{{ $task->title }}">

			@error("title")
				<p class="error-message"> {{ $message }} </p>
			@enderror
		</div>

		<div>
			<label for="description">Description</label>
			<textarea name="description" id="description" rows="2">{{ $task->description }}</textarea>

			@error("description")
				<p class="error-message"> {{ $message }} </p>
			@enderror
		</div>

		<div>
			<label for="description">Long Description</label>
			<textarea name="long_description" id="long_description" rows="10">{{ $task->long_description }}</textarea>

			@error("long_description")
				<p class="error-message"> {{ $message }} </p>
			@enderror
		</div>

		<div>
			<button type="submit">Edit Task</button>
		</div>

	</form> --}}
@endsection
