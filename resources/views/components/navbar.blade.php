<nav class="navbar is-dark is-fixed-top" role="navigation" aria-label="main navigation">
    <div class="container">
      <div class="navbar-brand">
        <a class="navbar-item" href="https://www.facebook.com/dandy.co.20" target="_blank">
          <img src="img/logo.png" width="30" height="55">
        </a>
        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>
      <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
          <a class="navbar-item {{ Route::currentRouteName() == 'home' ? 'is-active' : '' }}" href='/' style="color: white" >
            <i class='fas fa-home'>
              Home
            </i>
          </a>
          <a class="navbar-item" href="https://bulma.io/documentation" target="_blank" style="color: white">
            <i class='fas fa-file-alt'>
            <span>Documentation</span>
            </i>
          </a>
          <a class="navbar-item {{ Route::currentRouteName() == 'posts.index' ? 'is-active' : '' }}" href='/posts' style="color: white">
            <i class='fas fa-archive'>
              <span>Posts</span>
            </i>
          </a>
          <a class="navbar-item {{ Route::currentRouteName() == 'categories.index' ? 'is-active' : '' }}" href='/categories' style="color: white">
            <i class='fas fa-bars'>
            <span>Categories</span>
            </i>
          </a>
          <a class="navbar-item {{ Route::currentRouteName() == 'tabs.index' ? 'is-active' : '' }}" href='/tags' style="color: white">
            <i class='fas fa-tags'>
            <span>Tags</span>
            </i>
          </a>
          <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link" style="color: white">
              <i class="fas fa-plus">
                More
              </i>
            </a>
            <div class="navbar-dropdown">
              <a class="navbar-item" style="color: black">
                <i class='fas fa-users'>
                  About us
                </i>
              </a>
              <a class="navbar-item" href="{{route('contact')}}" style="color: black">
                <i class='fas fa-portrait'>
                  Contact us
                </i>
              </a>
              <hr style="color: black">
              <a class="navbar-item" style="color: black">
                <i class='fas fa-flag'>
                  Report an issue
                </i>
              </a>
            </div>
          </div>
        </div>
        <div class="navbar-end">

          <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link" style="color: white">
              <i class="fas fa-user">
                {{ Auth::user()->name }}
              </i>
            </a>
            <div class="navbar-dropdown">
              <a class="navbar-item" style="color: black">
                <i class='fas fa-address-card'>
                  Profile
                </i>
              </a>
              <a class="navbar-item" style="color: black">
                <i class='fas fa-user-shield'>
                  Become an admin
                </i>
              </a>
              <a class="navbar-item" href={{route('settings')}} style="color: black">
                <i class='fas fa-gear'>
                  Settings
                </i>
              </a>
              <hr style="color: black">
              {{-- <a class="navbar-item" href="{{ route('logout') }}">
                <i class='fas fa-gear'>
                  Sign out
                </i>
              </a> --}}
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        <i class='fa fa-sign-out' style="color: red">
                          <strong style="color: red">Sign out</strong>
                        </i>
                    </x-dropdown-link>
                  </form>
            </div>
          </div>

          <div class="navbar-item">
            {{-- <form method="POST" action="{{ route('logout') }}">
              @csrf
                <button type="submit" class="button is-dark hover:text-gray-900">
                  <i class="fa fa-sign-out" style="color:white"><strong> Log out</strong></i>
                </button>
            </form>
            <a class="button is-dark" href="/register">
            <strong>Sign up</strong>
            </a> --}}
          </div>
        </div>
      </div>
    </div>
  </nav>
