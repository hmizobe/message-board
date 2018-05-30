@extends('layouts.app')

@section('content')

    <h1>メッセージ新規作成ページ</h1>

    {!! Form::model($message, ['route' => 'messages.store']) !!}

        {!! Form::label('content', 'メッセージ:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}

<!-- Write content for each page here -->


    {{ '<p style="color: red;">When passed through htmlentities function</p>' }}
    {!! '<p style="color: red;">When not passed through htmlentities function</p>' !!}

@endsection