@extends('layouts.app')
@section('content')
    <h1>id={{ $edit_task->id }}の編集ページ</h1>
    <div class="row">
        <div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
        {!! Form::model($edit_task,['route' =>['tasks.update',$edit_task->id],'method'=>'put']) !!}
            <div class="form-group">
                {!! Form::label('status','ステータス') !!}
                {!! Form::text('status',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('content','タスク') !!}
                {!! Form::text('content',null,['class'=>'form-control']) !!}
            </div>
            {!! Form::submit('更新',['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
        </div>
    </div>
@endsection