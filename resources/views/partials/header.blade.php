<div class="d-flex bg-primary">
  <div class="container">
      <ul class="text-white d-flex list-unstyled justify-content-end m-0 f-size">
          <li class="me-3">DC POWER &trade; VISA &copy;</li>
          <li>Additional dc site</li>
      </ul>
  </div>
</div>
<header class="d-flex align-items-center">
  <div class="container d-flex align-items-center">
      <div class="logo">
          <a href="{{route('home')}}">
              <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo DC">
          </a>
      </div>
      <nav class="navbar-nav container navbar-light">
          <ul class="d-flex list-unstyled justify-content-end gap-5 text-uppercase fw-bold m-0">
              <li class="nav-item">
                 <a class="{{Route::currentRouteName() == 'characters' ? 'active' : ''}}" href="{{route('characters')}}">
                      Characters
                  </a> 
              </li>
              <li>
                 <a class=" {{Route::currentRouteName() == 'comics' ? 'active' : ''}}" href="{{route('comics')}}">
                      Comics
                  </a> 
              </li>
              <li>
                 <a class=" {{Route::currentRouteName() == 'movies' ? 'active' : ''}}" href="{{route('movies')}}">
                      Movies
                  </a> 
              </li>
              <li>
                 <a class=" {{Route::currentRouteName() == 'tv' ? 'active' : ''}}" href="{{route('tv')}}">
                      Tv
                  </a> 
              </li>
              <li>
                 <a class=" {{Route::currentRouteName() == 'games' ? 'active' : ''}}" href="{{route('games')}}">
                      Games
                  </a> 
              </li>
              <li>
                 <a class=" {{Route::currentRouteName() == 'collectibles' ? 'active' : ''}}" href="{{route('collectibles')}}">
                      Collectibles
                  </a> 
              </li>
              <li>
                 <a class=" {{Route::currentRouteName() == 'videos' ? 'active' : ''}}" href="{{route('videos')}}">
                      Videos
                  </a> 
              </li>
              <li>
                 <a class=" {{Route::currentRouteName() == 'fans' ? 'active' : ''}}" href="{{route('fans')}}">
                      Fans
                  </a> 
              </li>
              <li>
                 <a class=" {{Route::currentRouteName() == 'news' ? 'active' : ''}}" href="{{route('news')}}">
                      News
                  </a> 
              </li>
              <li>
                  <a class=" {{Route::currentRouteName() == 'shop' ? 'active' : ''}}" href="{{route('shop')}}">
                      Shop
                  </a>
              </li>
          </ul>
      </nav>
  </div>
</header> 

<div class="jumbo">

</div>


<style>
.f-size {
  font-size: 20px;
}
header {
  height: 120px;
}
</style>