<nav class="navbar navbar-expand-lg bg-body-tertiary top-nav-links">
    <div class="container-fluid justify-content-evenly pt-2 ">
        @auth
            @if (auth()->user()->admin == 1)
                <a class="nav-link" href="{{ route('admin.dashboard.index') }}">Admin</a>
            @endif
        @endauth
        <a class="navbar-brand" href="#">
            <img src="{{ asset('logos/logo-best.png') }}" alt="Logo" width="160" height="120" class="d-inline-block align-text-top">
        </a>
        <div class="navbar-nav">
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-end drop-z-index" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('profile.show', auth()->user()) }}">
                            Profile
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
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
            <form action="{{ route('setLocale') }}" method="post">
                @csrf
                <input type="hidden" name="url" value="{{ url()->current() }}">
                <select name="locale" onchange="this.form.submit()">
                    <option value="en" {{ session('locale') == 'en' ? 'selected' : '' }}>English</option>
                    <option value="cz" {{ session('locale') == 'cz' ? 'selected' : '' }}>Čeština</option>
                    <!-- Другие языки -->
                </select>
            </form>
        </div>
    </div>
</nav>

<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-nav ">
    <div class="container-fluid py-4 ">
        <a class="navbar-brand nav-logo-link" href="#">
            <img src="{{ asset('logos/logo-best.png') }}" alt="Logo" width="160" height="120" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center fs-bs" id="navbarNavAltMarkup">
            <div class="navbar-nav text-center">
                <a class="nav-link" href="{{ locale_route('forWomen.index',) }}">{{__('header.For Women')}}</a>
                <a class="nav-link" href="{{ locale_route('forMen.index',) }}">{{__('header.For Men')}}</a>
                <a class="nav-link" href="{{ locale_route('brands.index',) }}">{{__('header.Designers')}}</a>
                <a class="nav-link" href="{{ locale_route('carts.index',) }}">{{__('header.Cart')}}</a>
                <a class="nav-link" href="{{ locale_route('contacts.index',) }}">{{__('header.Contact')}}</a>
                @auth
                    @if (auth()->user()->admin == 1)
                        <a class="nav-link nav-admin-link" href="{{ locale_route('admin.dashboard.index',) }}">Admin</a>
                    @endif
                @endauth
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item nav-user-link">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item nav-user-link">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown nav-user-link">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('profile.show', auth()->user()) }}">
                                Profile
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
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

            </div>
        </div>
    </div>
</nav>




