@extends('master')


@section('title', 'Dashboard')

@section('page-header')
    <i class="fa fa-info-circle"></i> Dashboard
@stop

@section('main-content')

    <div class="row">
        <div class="col-md-12">



            <div class="widget-box">



                <!-- body -->
                <div class="widget-body">
                    <div class="widget-main" style="border: 1px solid red;height:50vh;padding:20px;margin:20px;">



                        <div class="row">
                            <div class="col-xs-12">

                                <h2 class="text-center" style="margin-top:20vh">{{ auth()->user()->userrole }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
