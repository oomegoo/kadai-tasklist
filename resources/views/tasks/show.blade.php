@extends('layouts.app')
@section('content')
    <h1>id = {{ $show_task->id }}の詳細ページ</h1>
    <p>{{ $show_task-> content }}</p>
    
    {!! link_to_route('tasks.edit','このタスクを編集',['id'=>$show_task->id]) !!}
    
    {!! Form::model($show_task,['route'=>['tasks.destroy',$show_task->id],'method'=>'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}
@endsection