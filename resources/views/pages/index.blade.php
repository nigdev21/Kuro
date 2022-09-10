@extends('layouts.layout')

@section('title', 'Accueil')

@section('content')
   <h1>Première page</h1>
   @foreach ($posts as $item)
      <p><a href="{{ route('post', ['id' => $item->id]) }}">{{ $item->title }}</a></p>
   @endforeach
   <a href="{{ route('postCreatePage') }}">Créer un post</a>
@stop