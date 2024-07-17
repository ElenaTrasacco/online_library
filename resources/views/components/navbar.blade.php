
  <nav class="navbar navbar-expand-lg fixed-top navbarCustom">
    <div class="container-fluid">
        {{-- <i class="fa-solid fa-book-quran" style="color: #f5deb3;"></i> -> problema con fa--}}
      <button
        data-mdb-collapse-init
        class="navbar-toggler"
        type="button"
        data-mdb-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="/">Home</a>

          <a class="nav-link" href="{{route('book.create')}}">Insert a book</a>

          <a class="nav-link" href="#">List</a>
        </div>

 <div class="navbar-nav">
        <form class="d-flex justify-content-between">
                <input class="searchNav form-control rounded form-control-lg" type="search" placeholder="Search a Book" aria-label="Search">
            <button class="btn navBtn" type="submit">Send</button>
          </form>
 </div>
 
        <div class="navbar-nav">
          @guest
          <a class="nav-link" href="{{route('register')}}">Register</a>
          <a class="nav-link" href="{{route('login')}}">Login</a>
          @endguest
          @auth
          <a class="nav-link" href="{{route('dashboard')}}">{{Auth::user()->name}}'s books</a>
          
          <a class="nav-link" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
          <form action="{{route('logout')}}" method="POST" id="form-logout">
            @csrf
          </form>
          @endauth
        </div>
      </div>
    </div>
  </nav>