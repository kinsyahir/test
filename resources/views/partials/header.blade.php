<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" style="color:#00cc00" href="{{ route('shop.index') }}"><strong>udemy</strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('shop.index') }}><span class="sr-only">Home</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Categories</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('shop.shoppingCartTry') }}">Shopping Cart 
          <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span>
        </a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          User
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
         <li><a class="dropdown-item" href="#">Sign In</a></li>
         <li><a class="dropdown-item" href="#">Sign up</a></li>
         <li><a class="dropdown-item" href="#">Profile</a></li>
        </ul>
      </li>

      @if (Auth::check())
        <a class="nav-link al-auto" href=""> {{Auth::user()->name}}</a>
      @endif

    </ul>
  </div>

</nav>