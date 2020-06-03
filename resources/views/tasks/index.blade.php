@extends ('layouts.app')

@section('content')

    <h1>タスク一覧</h1>
    
    @if(count($tasks)>0)
    <table class="table table-borderd">
        
        <thead>
            <tr>
                <th>ID</th>
                <th>タスク</th>
                <th></th>
            </tr>
        </thead>
            
        <tbody>
            @foreach($tasks as $task)
            <tr>
                <td>{!! link_to_route('tasks.show',$task->id,['task'=>$task->id]) !!}</td>
                <td>{{$task->content}}</td> 
                <td>
                    {!!Form::model($task,['route'=>['tasks.destroy',$task->id],'method'=>'delete'])!!}
                        {!! Form::submit('完了',['class'=>'btn btn-sm btn-primary'])!!}
                    {!!!Form::close()!!}
                </td>
            </tr>                
            @endforeach
        </tbody>
        
    </table>
    @endif
    <div class="text-center">
    {{--タスクの新規作成ページへ--}}
    {!!link_to_route('tasks.create','新規タスク',[],['class'=>'btn btn-primary rounded-pill'])!!}
    </div>
@endsection