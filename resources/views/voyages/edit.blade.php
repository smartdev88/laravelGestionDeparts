
@extends('layouts.app')

@section('content')

<h2>Editer le voyage {{ $voyage->id }}</h2>
  
    <form action="{{ route('voyages.update', $voyage) }}" method="POST">
         @csrf
         @method('PUT')

         <div class="row">
            <div class="col-md-6 form-group {{ $errors->has('startDate') ? 'has-error' : '' }}">
                <label for="startDate" class="control-label sr-only" >Date start</label>
                <input type="date" id="startDate" name="startDate" placeholder="dd/jj/yyyy" value="{{ old('startDate') ?? $voyage->startDate }}" class="form-control">
                {!! $errors->first('startDate', '<span class="help-block">:message</span>') !!}
             </div>
            <div class="col-md-6 form-group {{ $errors->has('endDate') ? 'has-error' : '' }}">
                <label for="endDate" class="control-label sr-only" >Date end</label>
                <input type="date" name="endDate" id="endDate" placeholder="dd/jj/yyyy" 
                class="form-control" value="{{ old('endDate') ?? $voyage->endDate }}">
                {!! $errors->first('endDate', '<span class="help-block">:message</span>') !!}
            </div>
     </div>
     <div class="row">
            <div class="col-md-6 form-group {{ $errors->has('price') ? 'has-error' : '' }}">
                <label for="price" class="control-label sr-only" >Price</label>
                <input type="number" name="price" id="price"
                class="form-control" value="{{ old('price') ?? $voyage->price }}">
                {!! $errors->first('price', '<span class="help-block">:message</span>') !!}
            </div>
            <div class="col-md-6 form-group {{ $errors->has('ville') ? 'has-error' : '' }}">
                <label for="ville" class="control-label sr-only" >Ville</label>
                <select multiple class="form-control" name="ville" id="ville">
                    @foreach ($destinations as $destination)  
                    <option selected value="{{ $destination->id }}">{{ old('ville') ?? $destination->ville }}</option>
                    @endforeach
                </select>
                {!! $errors->first('ville', '<span class="help-block">:message</span>') !!}
            </div>
    </div>
        
        <div class="form-group">
            <input type="submit" value="Modifier le voyage" class="btn btn-primary btn-block">
        </div>
        
    </form>

    <p> <a href="{{ route('voyages.index') }}">Annuler</a></p>
@endsection
