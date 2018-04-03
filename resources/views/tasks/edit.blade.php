@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} のタスク編集ページ</h1>
    @if (Auth::user()->id == $task->user_id)
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status') !!}
        {!! Form::label('content', 'メッセージ:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}
    @else
        <h4>編集権限がありません！</h4>
        
    
    @endif

@endsection