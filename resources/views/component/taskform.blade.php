{{ Form::label('name', 'Task Name', ['class' => 'control-label'])}}
{{ Form::text('name', null, ['class' => 'form-control form-control-lg', 'placeholder' => 'Task  Name'])}}

{{ Form::label('des', 'Task Description', ['class' => 'control-label mt-3'])}}
{{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Task  Name'])}}

{{ Form::label('date', 'Due Date', ['class' => 'control-label mt-3'])}}
{{ Form::date('due_date', null, ['class' => 'form-control'])}}

<div class="row justify-content-left mt-3">
    <div class="col-sm-6">
        <button class="btn btn-block-sm btn-success">Save Task</button>
        <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
    </div>
</div>