@extends('layouts.layout')

@section('title', 'Accueil')

@section('content')
   <h1>{{ $post->title }}</h1>
   <p>{{ $post->content }}</p>
@stop