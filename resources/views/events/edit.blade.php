
@extends('layouts.app')

@section('content')

<h2>Editer l'événement {{ $event->id }}</h2>
  
    <form action="{{ route('events.update', $event) }}" method="POST">
         {{ csrf_field() }}

         <!--<input type="hidden" name="_method" value="PUT">-->
         {{ method_field('PUT') }}
         <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
            <label for="title" class="control-label sr-only" >Titre</label>
            <input type="text" id="title" name="title" placeholder="Titre de l'événement" value="{{ old('title') ?? $event->title }}" class="form-control">
            {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
         </div>

        <!--
            //opérateur ternaire
            {{ old('title') ? old('title') : $event->title }}"

            //mieux avec php 7 :
            ?? ca teste l'existance 
            {{ old('title') ?? $event->title }}"
        -->

        <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
            <label for="description" class="control-label sr-only" >Description</label>
            <textarea name="description" id="description" cols="30" rows="10" placeholder="Description de l'événement" 
            class="form-control">{{ old('description') ?? $event->description }}</textarea>
            {!! $errors->first('description', '<span class="help-block">:message</span>') !!}
        </div>
        
        <div class="form-group">
            <input type="submit" value="Modifier l'événement" class="btn btn-primary btn-block">
        </div>
        
    </form>

    <p> <a href="{{ route('home') }}">Annuler</a></p>
@endsection
