@extends('layouts.app')
@section('content')
    @if(Auth::check())
        <?php $user = Auth::user(); ?>
        {{ $user->name }}
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