<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{'/'}}">Codehacking</a>
        </div>
      @guest
        <li><a style="color:#fff;" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>

     @if (Route::has('register'))
         <li class=""><a style="color:#fff;" class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>

     @endif
     @else
           <li class=" "><a style="color:#fff;" href="#" >Welcome {{ Auth::user()->name }}</a></li>

            <li> <a style="color:#fff;" href="/admin" >Admin</a></li>

            <li><a style="color:#fff;" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              {{ __('Logout') }} </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">  @csrf  </form>
              </li>
     @endguest


        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<div class="container">
