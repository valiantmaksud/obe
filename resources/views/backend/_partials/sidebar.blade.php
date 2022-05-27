<ul class="nav nav-list">
    <li id="dashboard">
        <a href="/">
            <i class="menu-icon fa fa-tachometer"></i>
            <span class="menu-text"> Dashboard </span>
        </a>
        <b class="arrow"></b>
    </li>

    <li>
        <a href="{{ route('institutes.index') }}">
            <i class="menu-icon fa fa-exchange"></i>
            <span class="menu-text"> Institutes </span>
        </a>
        <b class="arrow"></b>
    </li>
    <li>
        <a href="{{ route('departments.index') }}">
            <i class="menu-icon fa fa-exchange"></i>
            <span class="menu-text"> Departments </span>
        </a>
        <b class="arrow"></b>
    </li>
    <li>
        <a href="{{ route('programs.index') }}">
            <i class="menu-icon fa fa-exchange"></i>
            <span class="menu-text"> Programs </span>
        </a>
        <b class="arrow"></b>
    </li>

    <li>
        <a href="{{ route('users.index') }}">
            <i class="menu-icon fa fa-exchange"></i>
            <span class="menu-text"> Users </span>
        </a>
        <b class="arrow"></b>
    </li>


    <li>
        <a href="{{ route('semisters.index') }}">
            <i class="menu-icon fa fa-list"></i>
            <span class="menu-text"> Semisters </span>
        </a>
        <b class="arrow"></b>
    </li>


    <li>
        <a href="{{ route('current_semister.index') }}">
            <i class="menu-icon fa fa-exchange"></i>
            <span class="menu-text"> Current Enroll Semisters </span>
        </a>
        <b class="arrow"></b>
    </li>


    <li>
        <a href="{{ route('current_mark_entry_semister.index') }}">
            <i class="menu-icon fa fa-exchange"></i>
            <span class="menu-text"> Current Mark Entries </span>
        </a>
        <b class="arrow"></b>
    </li>

    <li>
        <a href="{{ route('pos.index') }}">
            <i class="menu-icon fa fa-exchange"></i>
            <span class="menu-text"> Po's </span>
        </a>
        <b class="arrow"></b>
    </li>


    <li>
        <a href="{{ route('students.index') }}">
            <i class="menu-icon fa fa-exchange"></i>
            <span class="menu-text"> Students </span>
        </a>
        <b class="arrow"></b>
    </li>

    <li>
        <a href="{{ route('offer_courses.index') }}">
            <i class="menu-icon fa fa-exchange"></i>
            <span class="menu-text"> Offer Course's </span>
        </a>
        <b class="arrow"></b>
    </li>

    <li>
        <a href="{{ route('mark-distributions.index') }}">
            <i class="menu-icon fa fa-exchange"></i>
            <span class="menu-text"> Mark distributions</span>
        </a>
        <b class="arrow"></b>
    </li>


    <li>
        <a href="{{ route('enroll-students.index') }}">
            <i class="menu-icon fa fa-exchange"></i>
            <span class="menu-text"> Enroll Students </span>
        </a>
        <b class="arrow"></b>
    </li>
    
    <li>
        <a href="{{ route('detail-marks.index') }}">
            <i class="menu-icon fa fa-exchange"></i>
            <span class="menu-text"> Detail Marks </span>
        </a>
        <b class="arrow"></b>
    </li>

    <li>
        <a href="{{ route('grade-results.index') }}">
            <i class="menu-icon fa fa-exchange"></i>
            <span class="menu-text"> Grade Results </span>
        </a>
        <b class="arrow"></b>
    </li>
    {{-- @if (hasPermission('creator'))
                <li>
                    <a href="{{ route('grade-results.create') }}">
                        <i class="menu-icon fa fa-exchange"></i>
                        <span class="menu-text"> Add New </span>
                    </a>
                    <b class="arrow"></b>
                </li>
            @endif --}}
    
    <li>
        <a href="{{ route('pomark-distributions.index') }}">
            <i class="menu-icon fa fa-list-alt"></i>
            <span class="menu-text"> PO mark distribution </span>
        </a>
        <b class="arrow"></b>
    </li>

    <li>
        <a href="{{ route('po-obtained-mark.index') }}">
            <i class="menu-icon fa fa-list-alt"></i>
            <span class="menu-text"> PO obtained Mark </span>
            <b class="arrow"></b>
        </a>
    </li>

    <li>
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-list-alt"></i>
            <span class="menu-text"> Final Outcome </span>
            <b class="arrow fa fa-angle-down"></b>
        </a>
        <ul class="submenu">
            @if (hasPermission('creator'))
                <li>
                    <a href="{{ route('student-po') }}">
                        <i class="menu-icon fa fa-exchange"></i>
                        <span class="menu-text"> Student PO </span>
                    </a>
                    <b class="arrow"></b>
                </li>
                <li>
                    <a href="{{ route('student-po-course-wise') }}">
                        <i class="menu-icon fa fa-exchange"></i>
                        <span class="menu-text"> Student PO Course Wise </span>
                    </a>
                    <b class="arrow"></b>
                </li>
                <li>
                    <a href="{{ route('student-po-batch-wise') }}">
                        <i class="menu-icon fa fa-exchange"></i>
                        <span class="menu-text"> Student PO Batch Wise </span>
                    </a>
                    <b class="arrow"></b>
                </li>
            @endif



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
