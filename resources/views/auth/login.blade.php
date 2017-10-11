@extends('layouts.app')
@section('content)
    <div class="text-center">
        <h1>Log in</h1>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('email','Email') !!}
                    {!! Form::email('email','old('email'),['class' => 'form-control']') !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password','Password') !!}
                    {!! Form::password('password',['class' => 'form-conrol']) !!}
                </div>
                {!! Form::submit('Log in',['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
            <p>New User?{!! link_to_route('singup.get','Sign up now') !!}</p>
        </div>
    </div>
@endsection