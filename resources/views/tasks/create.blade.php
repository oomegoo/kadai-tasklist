@extends('layouts.app')
@section('content')
    <h1>新規タスク追加</h1>
    
    {!! Form::model($new_task,['route' => 'tasks.store']) !!}
        {!! Form::label('status','ステータス') !!}
        {!! Form::text('status') !!}
        {!! Form::label('content','タスク') !!}
        {!! Form::text('content') !!}
        {!! Form::submit('登録') !!}
    {!! Form::close() !!}
@endsection