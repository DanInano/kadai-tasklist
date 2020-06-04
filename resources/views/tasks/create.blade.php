@extends ('layouts.app')

@section('content')

    <h1>タスク追加</h1>
    
    <div class="row">
        <div class="mt-4 col-6">
            {!!Form::model($task,['route'=>'tasks.store'])!!}
                <div class="form-group">
                    {!! Form::label('status','スタッツ:')!!}
                    {!! Form::text('status',null,['class'=>'form-control'])!!}
                    {!! Form::label('content','タスク:') !!}
                    {!! Form::text('content',null,['class'=>'form-control'])!!}
                </div>
                <div class="text-right">   
                    {!! Form::submit('追加',['class'=>'btn btn-primary']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection