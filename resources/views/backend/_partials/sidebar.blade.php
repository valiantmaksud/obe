<ul class="nav nav-list">
    <li id="dashboard">
        <a href="/">
            <i class="menu-icon fa fa-tachometer"></i>
            <span class="menu-text"> Dashboard </span>
        </a>
        <b class="arrow"></b>
    </li>

    <li>
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-list-alt"></i>
            <span class="menu-text"> Programs </span>
            <b class="arrow fa fa-angle-down"></b>
        </a>
        <ul class="submenu">
            @if (hasPermission('creator'))

                <li>
                    <a href="{{ route('programs.create') }}">
                        <i class="menu-icon fa fa-exchange"></i>
                        <span class="menu-text"> Add New </span>
                    </a>
                    <b class="arrow"></b>
                </li>
            @endif
            <li>
                <a href="{{ route('programs.index') }}">
                    <i class="menu-icon fa fa-exchange"></i>
                    <span class="menu-text"> List </span>
                </a>
                <b class="arrow"></b>
            </li>
        </ul>
    </li>

    <li>
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-list-alt"></i>
            <span class="menu-text"> Users </span>
            <b class="arrow fa fa-angle-down"></b>
        </a>
        <ul class="submenu">
            @if (hasPermission('creator'))
                <li>
                    <a href="{{ route('users.create') }}">
                        <i class="menu-icon fa fa-exchange"></i>
                        <span class="menu-text"> Add New </span>
                    </a>
                    <b class="arrow"></b>
                </li>
            @endif
            <li>
                <a href="{{ route('users.index') }}">
                    <i class="menu-icon fa fa-exchange"></i>
                    <span class="menu-text"> List </span>
                </a>
                <b class="arrow"></b>
            </li>

        </ul>
    </li>

    <li>
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-list-alt"></i>
            <span class="menu-text"> Current Enroll Sem. </span>
            <b class="arrow fa fa-angle-down"></b>
        </a>
        <ul class="submenu">
            @if (hasPermission('creator'))
                <li>
                    <a href="{{ route('current_semister.create') }}">
                        <i class="menu-icon fa fa-exchange"></i>
                        <span class="menu-text"> Add New </span>
                    </a>
                    <b class="arrow"></b>
                </li>
            @endif
            <li>
                <a href="{{ route('current_semister.index') }}">
                    <i class="menu-icon fa fa-exchange"></i>
                    <span class="menu-text"> List </span>
                </a>
                <b class="arrow"></b>
            </li>
        </ul>
    </li>

    <li>
        <a href="{{ route('semisters.index') }}">
            <i class="menu-icon fa fa-list"></i>
            <span class="menu-text"> Semister </span>
        </a>
        <b class="arrow"></b>
    </li>

    <li>
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-list-alt"></i>
            <span class="menu-text"> Po </span>
            <b class="arrow fa fa-angle-down"></b>
        </a>
        <ul class="submenu">
            @if (hasPermission('creator'))
                <li>
                    <a href="{{ route('pos.create') }}">
                        <i class="menu-icon fa fa-exchange"></i>
                        <span class="menu-text"> Add New </span>
                    </a>
                    <b class="arrow"></b>
                </li>
            @endif
            <li>
                <a href="{{ route('pos.index') }}">
                    <i class="menu-icon fa fa-exchange"></i>
                    <span class="menu-text"> List </span>
                </a>
                <b class="arrow"></b>
            </li>
        </ul>
    </li>


    <li>
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-list-alt"></i>
            <span class="menu-text">Mark Entry </span>
            <b class="arrow fa fa-angle-down"></b>
        </a>
        <ul class="submenu">
            @if (hasPermission('creator'))
                <li>
                    <a href="{{ route('current_mark_entry_semister.create') }}">
                        <i class="menu-icon fa fa-exchange"></i>
                        <span class="menu-text"> Add New </span>
                    </a>
                    <b class="arrow"></b>
                </li>
            @endif
            <li>
                <a href="{{ route('current_mark_entry_semister.index') }}">
                    <i class="menu-icon fa fa-exchange"></i>
                    <span class="menu-text"> List </span>
                </a>
                <b class="arrow"></b>
            </li>
        </ul>
    </li>


    <li>
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-list-alt"></i>
            <span class="menu-text"> Students </span>
            <b class="arrow fa fa-angle-down"></b>
        </a>
        <ul class="submenu">
            @if (hasPermission('creator'))
                <li>
                    <a href="{{ route('students.create') }}">
                        <i class="menu-icon fa fa-exchange"></i>
                        <span class="menu-text"> Add New </span>
                    </a>
                    <b class="arrow"></b>
                </li>
            @endif
            <li>
                <a href="{{ route('students.index') }}">
                    <i class="menu-icon fa fa-exchange"></i>
                    <span class="menu-text"> List </span>
                </a>
                <b class="arrow"></b>
            </li>

        </ul>
    </li>


    <li>
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-list-alt"></i>
            <span class="menu-text"> Offer Course </span>
            <b class="arrow fa fa-angle-down"></b>
        </a>
        <ul class="submenu">
            @if (hasPermission('creator'))
                <li>
                    <a href="{{ route('offer_courses.create') }}">
                        <i class="menu-icon fa fa-exchange"></i>
                        <span class="menu-text"> Add New </span>
                    </a>
                    <b class="arrow"></b>
                </li>
            @endif

            <li>
                <a href="{{ route('offer_courses.index') }}">
                    <i class="menu-icon fa fa-exchange"></i>
                    <span class="menu-text"> List </span>
                </a>
                <b class="arrow"></b>
            </li>

        </ul>
    </li>

    <li>
        <a href="{{ route('profile') }}">

            <i class="fa fa-users"></i>
            <span class="menu-text">Profile</span>
        </a>
        <b class="arrow"></b>
    </li>
    <li>
        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">

            <i class="fa fa-sign-out"></i>
            <span class="menu-text">Logout</span>
        </a>
        <b class="arrow"></b>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </li>


</ul>
