@extends('layouts.layout')

@section('title', 'Créer Post')

@section('content')
    <form action="{{ route('postCreate') }}" method="post">
    @csrf
        <input type="text" name="title">
        <textarea name="content" cols="30" rows="10"></textarea>
        <input type="submit" value="Valider">
    </form>
    <a href="{{ route('index') }}">Accueil</a>
@stop