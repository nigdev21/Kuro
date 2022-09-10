@extends('layouts.layout')

@section('title', 'Post')

@section('content')
   <h1>{{ $post->title }}</h1>
   <p>{{ $post->content }}</p>
   <a href="{{ route('index') }}">Accueil</a>
@stop