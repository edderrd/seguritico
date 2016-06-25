<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                Seguritico
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->

            @if (Auth::check())
                <ul class="nav navbar-nav">
                    <li class="{{ (Route::is('home') ? 'active' : '') }}">
                        <a href="{{ route('home') }}"><i class="fa fa-home"></i> {{trans('messages.home')}}</a>
                    </li>
                    <li class="{{ (Route::is('clients*') ? 'active' : '') }}">
                        <a href="{{ route('clients.index') }}"><i class="fa fa-users"></i> {{trans('messages.clients')}}</a>
                    </li>
                    <li class="{{ (Route::is('insurers*') ? 'active' : '') }}">
                        <a href="{{ route('insurers.index') }}"><i class="fa fa-building"></i> {{trans('messages.insurers')}}</a>
                    </li>
                    <li class="{{ (Route::is('policies*') ? 'active' : '') }}">
                        <a href="{{ route('policies.index') }}"><i class="fa fa-file-text-o"></i> {{trans('messages.policies')}}</a>
                    </li>
                </ul>
            @endif

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}"><i class="fa fa-sign-in"></i> {{trans('messages.login')}}</a></li>
                    @if(config('app.register_enabled'))
                        <li><a href="{{ url('/register') }}"><i class="fa fa-user-plus"></i> {{trans('messages.register')}}</a></li>
                    @endif
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>{{trans('messages.logout')}}</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
