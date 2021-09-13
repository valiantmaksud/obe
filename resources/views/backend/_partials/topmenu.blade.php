<div class="navbar-buttons navbar-header pull-right" role="navigation">
    <ul class="nav ace-nav">
        <li class="dropdown">
            <a class="app-nav__item" style="background-color:none" href="#" data-toggle="dropdown"
                aria-label="Open Profile Menu" aria-expanded="false">
                <span class="pr-2">{{ __('Admin') }}</span>
                <i class="fa fa-user fa-lg"></i>
            </a>
            <ul id="logout-nav" class="dropdown-menu settings-menu dropdown-menu-right" x-placement="bottom-end">
                <li>
                    <a class="dropdown-item" href="">
                        <i class="fa fa-lock menu-icon"></i>
                        {{ __('Change Password') }}
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route('signout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form2').submit();">
                        <i class="menu-icon fa fa-sign-out"></i>
                        {{ __('Signout') }}
                    </a>
                    <form id="logout-form2" action="{{ route('signout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</div>
