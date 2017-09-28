@extends('layouts.app')
@section('content')
    <h1>タスク管理一覧</h1>
    @if(count($index_tasks) > 0)
    <ul>
        @foreach($index_tasks as $index_task)
        <li>{!! link_to_route('tasks.show',$index_task->id,['id' => $index_task->id]) !!}:{{ $index_task -> content }}</li>
        @endforeach
    </ul>
    @endif
   <p>{!! link_to_route('tasks.create',"新規タスク追加") !!}</p>
@endsection