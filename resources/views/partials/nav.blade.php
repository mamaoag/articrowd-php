<nav class="nav has-shadow" style="height:6.3em">
  <div class="container">
    <div class="nav-left">
      <div class="nav-item">
        <a href="/"><h3 class="subtitle"><i class="fa fa-user-secret fa-lg"></i> Articrowd <span class="menu-label">by meraki</span></h3></a>
      </div>
      <li class="nav-item">
        <form action="/search" method="get">
          <p class="control has-addons"><input name="search" type="text" class="input is-small" placeholder="Search"><button class="button is-small is-primary">Search</button></p>
          {{csrf_field()}}
        </form>
      </li>
    </div>
    <div class="nav-center">
      <a href="//www.facebook.com/meraki.articrowd" class="nav-item"><i class="fa fa-facebook fa-lg"></i></a>
      <a href="//www.instagram.com/meraki.team" class="nav-item"><i class="fa fa-instagram fa-lg"></i></a>
      <a href="//www.twitter.com/meraki_support" class="nav-item"><i class="fa fa-twitter fa-lg"></i></a>
    </div>
    <div class="nav-right nav-menu">
    @if(Auth::guest())
      <a href="/about" class="nav-item">About Us</a>
      <a href="/register" class="nav-item">Sign Up</a>
      <a href="/login" class="nav-item">Sign In</a>
      @else
      <a href="/post/new" class="nav-item"><i class="fa fa-pencil fa-lg"></i></a>
      <a href="/u/{{Auth::user()->username}}" class="nav-item">
                <figure class="image is-16x16">
                    <img src="{{Auth::user()->image}}" alt="">
                </figure>&nbsp;
                {{Auth::user()->fname}} {{Auth::user()->lname}}
      </a>
      <a href="/logout" class="nav-item">
        Logout
      </a>
      @endif
    </div>
  </div>
</nav>