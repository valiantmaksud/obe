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

                                <table class="table table-striped table-bordered table-hover">
                                    <tr>
                                        <th>Name</th>
                                        <td>{{ auth()->user()->username }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{ auth()->user()->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>User Type</th>
                                        <td>{{ auth()->user()->usertype }}</td>
                                    </tr>
                                    <tr>
                                        <th>Role</th>
                                        <td>{{ auth()->user()->userrole }}</td>
                                    </tr>
                                    <tr>
                                        <th>Dept. code</th>
                                        <td>{{ auth()->user()->deptcode }}</td>
                                    </tr>
                                    <tr>
                                        <th>Institute code</th>
                                        <td>{{ auth()->user()->institutecode }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
