<div class="navbar-buttons navbar-header pull-right" role="navigation">
    <ul class="nav ace-nav">

        <li class="light-10 dropdown-modal">
            <a data-toggle="dropdown" href="#" class="dropdown-toggle dark">

                <img class="nav-user-photo" src="{{ asset('assets/images/avatars/avatar.png') }}" alt="User Photo" />

                <span class="user-info">
                    <small>Welcome,</small>
                    {{ auth()->user()->username }}
                </span>

                <i class="ace-icon dark fa fa-caret-down"></i>
            </a>


            <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">

                <li>
                    <a href="{{ route('profile') }}">
                        <i class="ace-icon fa fa-user"></i>
                        Profile
                    </a>
                </li>

                <li class="divider"></li>

                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('tlogout-form').submit();">
                        <i class="ace-icon fa fa-power-off"></i>
                        Logout
                    </a>

                    <form id="tlogout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</div>
