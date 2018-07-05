<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="border-radius:0px;">
    <a class="navbar-brand" href="{{route('pages.index')}}" style="font-size:25px;color: #d0ac04 !important;">VOG DASHBOARD</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
        <a class="nav-link" href="{{route('dashboard')}}">Home</span></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{route('dashboard.index-posts')}}">Posts </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">Vogites </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="{{route('dashboard.create-categories')}}">Categories</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="#">Make we talk</a>
                </li>

        <li class="nav-item dropdown" style="position:absolute; left:87%;">
          <a class="nav-link dropdown-toggle"
           href="#" id="navbarDropdown" role="button"
           data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            Manage Contents
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{route('dashboard.create')}}">Add New Member</a>
          <a class="dropdown-item" href="{{route('mwt.create-mwt')}}">Make We Talk</a>
          <a class="dropdown-item" href="{{route('dashboard.create-posts')}}">Create Post</a>
          <a class="dropdown-item" href="{{route('dashboard.create-categories')}}">Create Category</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Logout</a>
          </div>
        </li>

      </ul>
      {{-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form> --}}
    </div>
  </nav>