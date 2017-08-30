<header>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" type="button" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				@if(!Auth::check())
					<a href="/" class="navbar-brand">Eziblog</a>
				@else
					<a href="/posts" class="navbar-brand">Eziblog</a>
				@endif
			</div>
			<div id="myNavbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					@if (Auth::check())
						<li class="{{ Request::segment(1) === 'posts' ? 'active' : null }}"><a href=" {{ URL::to('/posts') }}">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="{{ url('/posts') }}">{{ Auth::user()->firstname }}</a></li>
						<li>
							<a href="{{ route('logout') }}"
				                onclick="event.preventDefault();
				                         document.getElementById('logout-form').submit();">
				                Logout
				            </a>

				            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				                {{ csrf_field() }}
				            </form>
						</li>
					@else
						<li><a href="/login" id="login-link">Login</a></li>
						<li><a href="/register" id="register-link">Register</a></li>
					@endif
				</ul>
			</div>
		</div>
	</nav>
</header>