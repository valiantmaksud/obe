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
            <span class="menu-text"> Course Setup </span>
            <b class="arrow fa fa-angle-down"></b>
        </a>
        <ul class="submenu">
            <li>
                <a href="{{ route('course-setups.create') }}">
                    <i class="menu-icon fa fa-exchange"></i>
                    <span class="menu-text"> Add New </span>
                </a>
                <b class="arrow"></b>
            </li>
            <li>
                <a href="{{ route('course-setups.index') }}">
                    <i class="menu-icon fa fa-exchange"></i>
                    <span class="menu-text"> List </span>
                </a>
                <b class="arrow"></b>
            </li>
        </ul>
    </li>
    {{-- <li>
        <a href="{{ route('outcomes.index') }}">
            <i class="menu-icon fa fa-exchange"></i>
            <span class="menu-text"> Outcome </span>
        </a>
        <b class="arrow"></b>
    </li> --}}
    <li>
        <a href="{{ route('courses.index') }}">
            <i class="menu-icon fa fa-book"></i>
            <span class="menu-text"> Course List </span>
        </a>
        <b class="arrow"></b>
    </li>

    <li>
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-list-alt"></i>
            <span class="menu-text"> Students </span>
            <b class="arrow fa fa-angle-down"></b>
        </a>
        <ul class="submenu">
            <li>
                <a href="{{ route('students.create') }}">
                    <i class="menu-icon fa fa-exchange"></i>
                    <span class="menu-text"> Add New </span>
                </a>
                <b class="arrow"></b>
            </li>
            <li>
                <a href="{{ route('students.index') }}">
                    <i class="menu-icon fa fa-exchange"></i>
                    <span class="menu-text"> List </span>
                </a>
                <b class="arrow"></b>
            </li>
        </ul>
    </li>
    {{-- <li>
        <a href="{{ route('results.create') }}">
            <i class="menu-icon fa fa-percent"></i>
            <span class="menu-text"> Result </span>
        </a>
        <b class="arrow"></b>
    </li> --}}


</ul>
