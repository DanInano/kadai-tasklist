@extends ('layouts.app')

@section('content')

    <h1>タスク詳細</h1>
    
    <table class="table table-borderd">
        <tr>
            <th>ID</th>
            <td>{{$task->id}}</td>
        </tr>
        <tr>
            <th>内容</th>
            <td>{{$task->content}}</td>
        </tr>
        <tr>
            <th>追加日時</th>
            <td>{{$task->created_at}}</td>
        </tr>
    </table>
    <div class="text-center">
    {!! link_to_route('tasks.edit','編集',['task'=> $task->id],['class'=>'btn btn-primary']) !!}
    </div>

@endsection