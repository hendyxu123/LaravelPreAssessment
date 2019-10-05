@extends('layouts.main')

@section('title', 'Create Task')

@section( 'content')

    <div class="row">
        <div class="col-sm-12">
            <h1>Create Task</h1>

			{!! Form::model($task, ['route' => ['task.update', $task->id], 'method' => 'PUT']) !!}
                @component('component.taskform')
                @endcomponent
            {!! Form::close() !!}
            
        </div>
    </div>

@endsection