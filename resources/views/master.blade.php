<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title','Web Panel')</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/font-awesome/4.5.0/css/font-awesome.min.css') }}" />


    <link rel="stylesheet" href="{{ asset('assets/css/chosen.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/ace.min.css') }}" class="ace-main-stylesheet"
        id="main-ace-style" />
    <link rel="stylesheet" href="{{ asset('assets/css/ace-skins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/ace-rtl.min.css') }}" />

    <script src="{{ asset('assets/js/ace-extra.min.js') }}"></script>

    @yield('inline-css')
</head>

<body class="no-skin">

    <div id="navbar" class="navbar navbar-default ace-save-state">
        <div class="navbar-container ace-save-state" id="navbar-container">
            <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                <span class="sr-only">Toggle sidebar</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="navbar-header pull-left">
                <a href=" " class="navbar-brand">
                    <small>
                        OBE SYSTEM
                    </small>
                </a>
            </div>

            {{-- @include('backend._partials.topmenu') --}}

        </div>
    </div>

    <div class="main-container ace-save-state" id="main-container">
        <script type="text/javascript">
            try {
                ace.settings.loadState('main-container')
            } catch (e) {}
        </script>
        <div id="sidebar" class="sidebar responsive ace-save-state">
            <script>
                try {
                    ace.settings.loadState('sidebar')
                } catch (e) {}
            </script>

            @include('backend._partials.sidebar')


            <!-- /.nav-list -->
            <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state"
                    data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
            </div>
        </div>
        <div class="main-content">
            <div class="main-content-inner">
                <div class="breadcrumbs ace-save-state no-print" id="breadcrumbs">
                    <ul class="breadcrumb hidden-print">
                        <li>
                            <i class="ace-icon fa fa-home home-icon"></i>
                            <a href="/">Home</a>
                        </li>
                        @yield('breadcum')
                    </ul>
                    <!-- /.breadcrumb -->
                    @yield('breadcum_link')
                </div>
                <!-- Modal -->

                @include('_partials._flash_message')

                @yield('main-content')

            </div><!-- /.row -->
        </div><!-- /.page-content -->

        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
            <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
        </a>

        <script src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

        <script src="{{ asset('assets/js/ace-elements.min.js') }}"></script>
        <script src="{{ asset('assets/js/ace.min.js') }}"></script>

        {{-- datatable --}}
        <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.dataTables.bootstrap.min.js') }}"></script>

        <script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script>
        <script src="{{ asset('assets/custom-js/chosen-box.js') }}"></script>


        <script>
            var path = window.location.href.split('?')[0];

            path = path.replace('#', '')

            let selector = "a[href='" + path + "']"
            let a_tag = $(selector)

            let li_tag = a_tag.closest('li')
            li_tag.addClass('active')


            li_tag.parents('li').add(this).each(function() {
                $(this).addClass('open');
            });
        </script>

        @yield('inline-js')


</body>

</html>
