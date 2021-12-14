<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>{{ config('app.name') }}</title>

    <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/font-awesome/4.5.0/css/font-awesome.min.css') }}" />

    <!-- text fonts -->
    <link rel="stylesheet" href="{{ asset('/assets/css/fonts.googleapis.com.css') }}" />

    <!-- ace styles -->
    <link rel="stylesheet" href="{{ asset('/assets/css/ace.min.css') }}" />


    <link rel="stylesheet" href="{{ asset('/assets/css/ace-rtl.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.css" />


    <style>
        .login-layout {
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .login-layout .login-box .widget-main {
            padding-bottom: 0 !important;
        }

        .login-box .toolbar>div {
            padding: 3px 0 3px;
        }

        .login-layout .widget-box .widget-main {
            padding: 1px 30px 1px 30px;
        }

    </style>


</head>



<body class="login-layout light-login">
    <div class="main-container">
        <div class="main-content">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="login-container">
                        <div class="center" style="margin-top: 50px;">
                            <br>
                            <br>
                        </div>
                        <div class="position-relative">

                            <div id="login-box" class="login-box visible widget-box no-border">
                                <div class="widget-body">
                                    <div class="widget-main">
                                        <h4 class="header blue lighter bigger text-center">
                                            <i class="ace-icon fa fa-sign-in green"></i>
                                            Login Information
                                        </h4>


                                        <form action="" method="post">

                                            @if (session()->get('error'))
                                                <div class="alert alert-danger">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <i class="ace-icon fa fa-times"></i>
                                                    </button>
                                                    {{ session()->get('error') }}
                                                </div>
                                            @endif


                                            @csrf

                                            <fieldset>
                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">

                                                        @if (session()->get('massage'))

                                                            <div class="alert alert-{{ session()->get('type') }}">
                                                                <button type="button" class="close"
                                                                    data-dismiss="alert">
                                                                    <i class="ace-icon fa fa-times"></i>
                                                                </button>

                                                                <strong>
                                                                    @if (session()->get('type') == 'danger')
                                                                        <i class="ace-icon fa fa-times"></i>
                                                                        Error !
                                                                    @else
                                                                        <i class="ace-icon fa fa-check-circle-o"></i>
                                                                        Success !
                                                                    @endif
                                                                </strong>

                                                                {{ session()->get('massage') }}
                                                                <br />
                                                            </div>

                                                        @endif

                                                    </span>
                                                </label>

                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">

                                                        <input id="email" type="text"
                                                            class="form-control input-email @error('email') is-invalid @enderror"
                                                            name="email" value="{{ old('email') }}"
                                                            autocomplete="email" placeholder="Email" autofocus>
                                                        <i class="ace-icon fa fa-envelope"></i>
                                                        @error('email')
                                                            <span class="text-danger" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </span>
                                                </label>

                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input id="password" type="password"
                                                            class="form-control @error('password') is-invalid @enderror"
                                                            name="password" placeholder="Password"
                                                            autocomplete="current-password">
                                                        <i class="ace-icon fa fa-lock"></i>
                                                        @error('password')
                                                            <span class="text-danger" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror

                                                    </span>
                                                </label>

                                                <div class="space"></div>

                                                <div class="clearfix">
                                                    <label class="inline">
                                                        <input type="checkbox" class="ace" />
                                                        <span class="lbl"> Remember Me</span>
                                                    </label>

                                                    <button type="submit"
                                                        class="width-35 pull-right btn btn-sm btn-primary">
                                                        <i class="ace-icon fa fa-key"></i>
                                                        <span class="bigger-110">Login</span>
                                                    </button>
                                                </div>
                                                <div class="space-4"></div>


                                            </fieldset>

                                        </form>


                                        <div class="space-6"></div>


                                    </div>



                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--[if !IE]> -->
    <script src="{{ asset('/assets/js/jquery-2.1.4.min.js') }}"></script>

    <script type="text/javascript">
        if ('ontouchstart' in document.documentElement) document.write(
            "<script src='{{ asset('assets/js/jquery.mobile.custom.min.js') }}'>" + "<" + "/script>");
    </script>

    <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.js" crossorigin="anonymous"></script>
    <!-- inline scripts related to this page -->
    <script type="text/javascript">
        jQuery(function($) {
            $(document).on('click', '.toolbar a[data-target]', function(e) {
                e.preventDefault();
                var target = $(this).data('target');
                $('.widget-box.visible').removeClass('visible'); //hide others
                $(target).addClass('visible'); //show target
            });
        });



        //you don't need this, just used for changing background
        jQuery(function($) {
            $('#btn-login-dark').on('click', function(e) {
                $('body').attr('class', 'login-layout');
                $('#id-text2').attr('class', 'white');
                $('#id-company-text').attr('class', 'blue');

                e.preventDefault();
            });
            $('#btn-login-light').on('click', function(e) {
                $('body').attr('class', 'login-layout light-login');
                $('#id-text2').attr('class', 'grey');
                $('#id-company-text').attr('class', 'blue');

                e.preventDefault();
            });
            $('#btn-login-blur').on('click', function(e) {
                $('body').attr('class', 'login-layout blur-login');
                $('#id-text2').attr('class', 'white');
                $('#id-company-text').attr('class', 'light-blue');

                e.preventDefault();
            });

            @if (session()->get('message'))
                new Noty({
                theme: 'metroui',
                type: 'success',
                text: '{{ session()->get('message') }}'
                }).show();
            @elseif(session()->get('error'))
                new Noty({
                theme: 'metroui',
                type: 'error',
                text: '{{ session()->get('error') }}'
                }).show();
            @endif
        });
    </script>
</body>

</html>
