<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{ route('home') }}">EventBrote</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">  
    <ul class="nav navbar-nav navbar-nav-right ">
      <li class="nav-item">
      <p class="navbar-btn">
        <a class="btn btn-primary" href="{{ route('events.create') }}" tabindex="-1" aria-disabled="true">
            <i class="fa fa-plus"></i> Créer un évenement</a>
      </p>
      </li>
    </ul>
  </div>
</nav>