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
        <div>
            <div class="center-block" style="width: 300px; text-align:center">
                {!! link_to_route('signup.get','Sign up',null,['class'=>'btn btn-lg btn-primary','style' => 'margin: 0 10px;']) !!}
                <button type="button" style="margin: 0 10px;" class="btn btn-lg btn-primary">Log in</button>
            </div>
    @endif
@endsection