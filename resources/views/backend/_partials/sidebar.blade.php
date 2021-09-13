<ul class="nav nav-list">
    <li id="dashboard">
        <a href="/">
            <i class="menu-icon fa fa-tachometer"></i>
            <span class="menu-text"> Dashboard </span>
        </a>
        <b class="arrow"></b>
    </li>
    <li class="{{ request()->is('admin/outcome*') ? 'active' : '' }}">
        <a href="{{ route('outcomes.index') }}">
            <i class="menu-icon fa fa-tachometer"></i>
            <span class="menu-text"> Outcome </span>
        </a>
        <b class="arrow"></b>
    </li>
    <li class="{{ request()->is('admin/subject*') ? 'active' : '' }}">
        <a href="{{ route('subjects.index') }}">
            <i class="menu-icon fa fa-tachometer"></i>
            <span class="menu-text"> Subjects </span>
        </a>
        <b class="arrow"></b>
    </li>
    <li class="{{ request()->is('admin/result*') ? 'active' : '' }}">
        <a href="{{ route('results.create') }}">
            <i class="menu-icon fa fa-tachometer"></i>
            <span class="menu-text"> Result </span>
        </a>
        <b class="arrow"></b>
    </li>
    

</ul>
