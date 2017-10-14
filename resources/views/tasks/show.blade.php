@extends('layouts.app')
@section('content')
    <h1>詳細ページ</h1>
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $show_task -> id }}</td>
        </tr>
        <tr>
            <th>ステータス</th>
            <td>{{ $show_task -> status }}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{ $show_task-> content }}</td>
        </tr>
    </table>
   
    {!! link_to_route('tasks.edit','このタスクを編集',['id'=>$show_task->id],['class'=>'btn btn-default']) !!}
    
    {!! Form::model($show_task,['route'=>['tasks.destroy',$show_task->id],'method'=>'delete']) !!}
        {!! Form::submit('削除',['class'=>'btn btn-danger']) !!}
    {!! Form::close() !!}
@endsection