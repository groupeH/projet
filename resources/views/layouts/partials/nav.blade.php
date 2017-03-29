<div class="navbar-fixed">
    <nav>
        <div id="navbar" class="nav-wrapper col s12 red accent-4">

                <a href="#" class="brand-logo center">@yield('nomPage')</a>


            <ul id="nav-mobile" class="right hide-on-med-and-down">
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Connexion</a></li>
                    <li><a href="{{ route('register') }}">Inscription</a></li>
                @else
                    <ul>
                        <li>{{ Auth::user()->login }}</li>

                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">Déconnexion
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                @endif
            </ul>
        </div>
    </nav>
</div>