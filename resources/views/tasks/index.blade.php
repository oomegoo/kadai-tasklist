@extends('layouts.app')
@section('content')
    <h1>タスク管理一覧</h1>
    @if(count($index_tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>ステータス</th>
                    <th>タスク</th>
                </tr>
            </thead>
            <tbody>
                @foreach($index_tasks as $index_task)
                <tr>
                <td>{!! link_to_route('tasks.show',$index_task->id,['id' => $index_task->id]) !!}</td>
                <td>{{ $index_task -> status }}</td>
                <td>{{ $index_task -> content }}</td>
                </tr>
        @endforeach
            </tbody>
        </table>
    @endif
   {!! link_to_route('tasks.create',"新規タスク追加",null,['class'=>'btn btn-primary']) !!}
@endsection