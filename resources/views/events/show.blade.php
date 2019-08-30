@extends('layouts.app')

@section('content')

    <h2>{{ $event->title }}</h2>
    <p>{{ $event->description }}</p>
    <br>
    <a href="{{ route('events.edit', $event) }}" class="btn btn-warning">Modifier</a>
    <form action="{{ route('events.destroy', $event) }}" method="POST" class="inline-block">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <input type="submit" value="Supprimer" class="btn btn-danger">
    </form>
    <hr>
    <a href="{{ route('home') }}">Tous les événements</a>

@endsection

