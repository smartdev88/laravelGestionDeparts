{{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{ route('voyages.index') }}">Gestion des départs</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">  
    <ul class="nav navbar-nav navbar-nav-right ">
      <li class="nav-item">
      <p class="navbar-btn">
        <a class="btn btn-primary" href="{{ route('voyages.create') }}" tabindex="-1" aria-disabled="true">
            <i class="fa fa-plus"></i> Créer un départ</a>
      </p>
      </li>
    </ul>
  </div>
</nav> --}}


<hr><br>

<div class="row">
    <div class="col-md-6"> 
      <h1>
        <a href="{{ route('voyages.index') }}">Gestion des départs</a>
      </h1>
    </div>
    <div class="col-md-6">
        <a href="{{ route('voyages.create') }}" class="btn btn-success">
            <i class="fa fa-plus"></i> Nouveau Voyage</a>
    </div>
</div>
<hr>