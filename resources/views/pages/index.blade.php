@extends('layouts.layout')

@section('title', 'Accueil')

@section('content')
   Première page
   @foreach ($posts as $item)
       <a href="{{ route('post', ['id' => $item->id]) }}">{{ $item->title }}</a>
   @endforeach
@stop