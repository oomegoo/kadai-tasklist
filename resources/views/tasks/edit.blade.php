@extends('layouts.app')
@section('content')
    <h1>id={{ $edit_task->id }}の編集ページ</h1>
    {!! Form::model($edit_task,['route' =>['tasks.update',$edit_task->id],'method'=>'put']) !!}
        {!! Form::label('content','タスク') !!}
        {!! Form::text('content') !!}
        {!! Form::submit('更新') !!}
    {!! Form::close() !!}
@endsection