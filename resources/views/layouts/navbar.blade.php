<nav class="navbar navbar-expand-lg navbar-dark " style="background-color:#1b1b1b;">
  <div class="container-fluid" style="width:70%;">
    <a class="navbar-brand" href="/">
      <img src="{{asset('img/youtube_logo.jpg')}}">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <form class="d-flex" method="GET" action="{{ route('results') }}">
        <input autofocus class="form-control" style="border-radius:10px 0px 0px 10px;border:none;width:100%;" type="search" name="search_query" placeholder="Search" aria-label="Search">
        <span class="input-group-btn">
        <button class="btn btn-default" style="background-color:#ff933e;border-radius:0px 10px 10px 0px;" type="submit"><img src="{{asset('img/search-icon.png')}}"></button>
      </span>
      </form>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#"><button style="background-color:#ff9900;border:none;border-radius:6px;color:black;"><img style="margin-bottom:3px;" src="{{asset('img/black-star.png')}}">Shop</button></a>
        </li>
      </ul>
    </div>
  </div>
</nav>