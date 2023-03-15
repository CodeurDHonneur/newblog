@extends('layouts.master')

@section('title')
    Articles
@endsection

@section('content')

    @foreach($articles as $article)
        <p>{{$article['title']}}</p>
        <p>{{$article['body']}}</p>
    @endforeach

@endsection
