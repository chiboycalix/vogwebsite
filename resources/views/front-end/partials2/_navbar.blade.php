    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{route('pages.index')}}" id="vog-text">Vessels of Glory</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" style="position:relative; left:5%;">
          <li class="nav-item active">
          <a class="nav-link" href="{{route('pages.index')}}">Homepage <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{route('members')}}">Vogites <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{route('mwt.index2')}}">Make we talk<span class="sr-only">(current)</span></a>
              </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">

          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="search-button">Search</button>

        </form>
      </div>
    </nav>