


<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="navbar-style">
    <div class="container">
      <a class="navbar-brand" href="{{route('pages.index')}}" id="vogbtn">VOG BLOG</a>
           <a href="{{route('posts.index')}}" id="modal-btn">HOME</a>
            <button type="button" id="modal-btn" data-toggle="modal" data-target="#exampleModal">
                    CATEGORIES
            </button>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @else

                <div class="dropdown">
                    <a style="color:black;" id="navbarDropdown drop-nav" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Hello {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                          {{-- <a class="dropdown-item" href="{{route('posts.create')}}">New Post</a> --}}
                          <a class="dropdown-item" href="{{route('posts.index')}}">Blog</a>
                          <a class="dropdown-item" href="{{route('pages.index')}}">Main Site</a>
                          <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                          </a>
                        </div>
                  </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
               @endguest

          </ul>

        </div>

      </div>

    </nav>


