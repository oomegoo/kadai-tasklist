@extends('layouts.app')
@section('content')
    @if(Auth::check())
        <?php $user = Auth::user(); ?>
        <h1>{{ $user->name }}：タスク管理一覧</h1>
    
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
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Task List</h1>
            </div>
        </div>
        <div class="center-block" style="width: 300px; text-align:center">
            {!! link_to_route('signup.get','Sign up',null,['class'=>'btn btn-lg btn-primary','style' => 'margin: 0 10px;']) !!}
            {!! link_to_route('login.get','Log in',null,['class'=>'btn btn-lg btn-primary','style' => 'margin: 0 10px;']) !!}
        </div>
    @endif
@endsection