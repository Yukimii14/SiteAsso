<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Association name') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  	<script src="{{ asset('js/main.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/77a63b4cd3.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <!-- Styles/CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/podcast.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
</head>
<body>

 <!-- navmenu -->

    
  <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
                      

     <div id="navmenu" class="navbar-menu">

        <!-- Left Side Of Navbar -->
        <div class="navbar-start">
              <div class="navbar-item ">
                    <button class="button is-link">
                        <a href="{{ url('/') }}" class="btn">Home</a>
                        </button>
                    <button class="button is-link">
                        <a href="#" class="btn">News</a>
                        </button>
                    <button class="button is-link">
                        <a href="/podcasts" class="btn">Podcast</a>
                        </button>

                    <div class="dropdown" id="dropdown-menu">
                        <div class="dropdown-trigger">
                          <button class="button is-link open_dropdown" aria-haspopup="true" aria-controls="dropdown-menu">
                            <a href="/journal">Journal</a>
                            <span class="icon is-small">
                              <i class="fas fa-angle-down" aria-hidden="true"></i>
                            </span>
                          </button>
                        </div>
                            <div class="dropdown-menu" role="menu">
                              <div class="dropdown-content">
                                <a href="#" class="dropdown-item is-link">
                                  Essays
                                </a>
                                <hr class="divider">
                                <a href="#" class="dropdown-item is-link">
                                  Research papers
                                </a>
                              </div>
                            </div>
                        </div>

                    <button class="button is-link open_contact">
                    Contact Us
                    </button>
                    <button class="button is-link">
                        <a class="nav-link" href="/podcasts/create">Create a comment</a>
                        </button>
              </div>
        </div>
                    <!-- Right Side Of Navbar -->
                <div class="navbar-end">
                    <div class="navbar-item ">
                            <button class="button is-link">
                            <span><a href="facebook" class="m-link"><i class="fab fa-facebook-f"></i></a></span>
                            </button>
                            <button class="button is-link">
                            <span><a href="twitter" class="m-link"><i class="fab fa-twitter"></i></a></span>
                            </button>
                            <button class="button is-link">
                            <span><a href="instagrame" class="m-link"><i class="fab fa-instagram"></i></a></span>
                            </button>
                            <button class="button is-link">
                            <span><a href="spotify" class="m-link"><i class="fab fa-spotify"></i></a></span>
                            </button>
                        
                                @guest
                                        @if (Route::has('login'))
                                            <button class="button is-link">
                                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </button>
                                        @endif
                                        
                                        @if (Route::has('register'))
                                            <button class="button is-link">
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </button>
                                        @endif
                                    @else
                                        <li class="nav-item  dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item " href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                @endguest
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Associationname') }}
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        
                    </div>
                 </div>  
     </div>
              <div class="navbar-brand">

                              <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navmenu">
                              <span aria-hidden="true"></span>
                              <span aria-hidden="true"></span>
                              <span aria-hidden="true"></span>
                              </a>
                  </div>
  </nav>  
    

    <!-- navmenu -->

    <!-- modal : contact us -->	

    <div class="modal modal-contact" id="contact">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Contact Us</p>
      <button class="delete" aria-label="close" id="close_contact"></button>
    </header>
    <section class="modal-card-body">
		<div class="field">
								  <label class="label">Name</label>
								  <div class="control">
								    <input class="input" type="text" placeholder="Text input">
								  </div>
								</div>

								<div class="field">
								  <label class="label">Username</label>
								  <div class="control has-icons-left has-icons-right">
								    <input class="input is-success" type="text" placeholder="Text input" value="...">
								    <span class="icon is-small is-left">
								      <i class="fas fa-user"></i>
								    </span>
								    <span class="icon is-small is-right">
								      <i class="fas fa-check"></i>
								    </span>
								  </div>
								  <p class="help is-success">This username is available</p>
								</div>

								<div class="field">
								  <label class="label">Email</label>
								  <div class="control has-icons-left has-icons-right">
								    <input class="input is-danger" type="email" placeholder="Email input" value="hello@">
								    <span class="icon is-small is-left">
								      <i class="fas fa-envelope"></i>
								    </span>
								    <span class="icon is-small is-right">
								      <i class="fas fa-exclamation-triangle"></i>
								    </span>
								  </div>
								  <p class="help is-danger">This email is invalid</p>
								</div>

								<div class="field">
								  <label class="label">Subject</label>
								  <div class="control">
								    <div class="select">
								      <select>
								        <option>Select dropdown</option>
								        <option>With options</option>
								      </select>
								    </div>
								  </div>
								</div>

								<div class="field">
								  <label class="label">Message</label>
								  <div class="control">
								    <textarea class="textarea" placeholder="Textarea"></textarea>
								  </div>
								</div>

								<div class="field is-grouped">
								  <div class="control">
								    <button class="button is-link">Submit</button>
								  </div>
								  <div class="control">
								    <button class="button is-link is-light">Cancel</button>
								  </div>
								</div>
		   				</form>
		   			</div>

    </section>
  </div>
    
     <!-- modal -->	
     
     <main class="py-4 container">
            @include('inc.messages')
            @yield('content')
        </main>
</body>
</html>