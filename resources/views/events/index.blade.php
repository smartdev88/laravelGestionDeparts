@extends('layouts.app')

@section('content')

    <h1>{{ $events->count() }} {{ str_plural('Evénement', $events->count()) }}</h1>

    @if(count($events) > 0)
    <ul>
        @foreach($events as $event)
            <!--<li><a href="/events/{{$event->id}}">{{ $event->title }}</a></li>-->
            <!--<li><a href="{{ route('events.show', ['event' => $event->id]) }}">{{ $event->title }}</a></li>-->
            <li><a href="{{ route('events.show', $event) }}">{{ $event->title }}</a></li>
        @endforeach
    </ul>
    @else
    <p>Aucun n'évenement pour le moment.</p>
    @endif

    
@endsection

