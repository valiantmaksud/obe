@extends('master')

@section('title', 'User Setup')

@section('page-header')
    <i class="fa fa-plus-circle"></i> User Setup
@stop



@section('main-content')

    <div class="row">
        <div class="col-md-12">

            <div class="widget-box">


                <!-- header -->
                <div class="widget-header">
                    <h4 class="widget-title"> @yield('page-header')</h4>
                    <span class="widget-toolbar">
                        <a href="{{ route('users.index') }}" class="">
                            <i class="fa fa-list-alt"></i> User List
                        </a>
                    </span>
                </div>



                <!-- body -->
                <div class="widget-body">
                    <div class="widget-main">


                        @if (request('type') == 'upload')

                            @include('backend.users.create.upload')

                        @else

                            @include('backend.users.create.create')

                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('inline-js')

    <script>
        $('.file-uploader').ace_file_input({
            style: 'well',
            btn_choose: 'Drop or choose csv file',
            btn_change: null,
            no_icon: 'ace-icon fa fa-cloud-upload',
            droppable: true,
            thumbnail: 'small',
            preview_error: function(filename, error_code) {}

        }).on('change', function() {

        });
    </script>
@endsection
