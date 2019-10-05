@extends('layouts.main')

@section('title', 'Task Lists')

@section( 'content')

    <div class="row">
        <div class="col-sm-12">
            <h1>Task List</h1>
        </div>
    </div>
	
	<div class="row justify-content-;eft mb-3">
		<div class="col-sm-4">
			<a href="{{ route('task.create') }}" class="btn btn-block-sm btn-success">Create Task</a>
		</div>
    </div>
    <table class="table table-sm">
        <thead>
            <tr>
                <th ><strong> Task Name: </strong></th>
                <th ><strong> Description: </strong></th>
                <th ><strong> Due Date: </strong></th>
                <th ><strong> Options: </strong></th>
            </tr>
        </thead>    
        @if ($tasks->count() == 0)
            <p>There is no Task</p>
        @else
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>  {{ $task->name }} <small>{{ $task->created_at }}</small> </td>
                        <td>  {{ $task->description }} </td>
                        <td>  {{ $task->due_date }} </td>
                        <td>
                            {!! Form::model($task, ['route' => ['task.destroy', $task->id], 'method' => 'DELETE']) !!}
                            <a href="{{ route('task.edit', $task->id) }}" class="btn btn-sm btn-primary">Edit</a> ||
                            <button type = 'submit'  class="btn btn-sm btn-danger">Delete</button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        @endif
    </table>
    {{ $tasks->links() }}

@endsection