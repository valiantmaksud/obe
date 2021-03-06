@extends('master')

@section('title', 'Add')

@section('page-header')
    <i class="fa fa-plus-circle"></i> Add
@stop



@section('main-content')

    <div class="row">
        <div class="col-md-12">

            <div class="widget-box">


                <!-- header -->
                <div class="widget-header">
                    <h4 class="widget-title"> @yield('page-header')</h4>
                    <span class="widget-toolbar">
                        <a href="{{ route('pos.index') }}" class="">
                            <i class="fa fa-list-alt"></i> List
                        </a>
                    </span>
                </div>



                <!-- body -->
                <div class="widget-body">
                    <div class="widget-main">



                        <form method="POST" action="{{ route('pos.store') }}"
                            class="form-horizontal" enctype="multipart/form-data">
                            @csrf



                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    Po<sup class="text-danger">*</sup>:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <input type="text" name="po" class="form-control" autocomplete="off"
                                        value="{{ old('po') }}" placeholder="po" required>
                                </div>
                            </div>



                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    Po keywords<sup class="text-danger">*</sup>:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <input type="text" name="pokeywords" class="form-control" autocomplete="off"
                                        value="{{ old('pokeywords') }}" placeholder="pokeywords" required>
                                </div>
                            </div>




                            <x-programcode-option />




                            <x-instcode-option />



                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    peo
                                    <sup class="text-danger">*</sup>:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <input type="text" name="peo" class="form-control" autocomplete="off"
                                        value="{{ old('peo') }}" placeholder="peo" required>
                                </div>
                            </div>



                            <!-- Type  -->
                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    Status<sup class="text-danger">*</sup>:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <select name="status_06" class="chosen-select form-control" data-placeholder="--Type--"
                                        required>
                                        <option value=""></option>
                                        <option value=1 selected>Active</option>
                                        <option value=0>In Active</option>

                                    </select>
                                </div>
                            </div>






                            <!-- Action -->
                            <div class="form-group">
                                <label class="control-label col-md-4 col-sm-4"></label>
                                <div class="col-md-3 col-sm-3">
                                    <button type="submit" class="btn btn-primary col-md-12">
                                        <i class="fa fa-plus"></i> Add New
                                    </button>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('inline-js')


@endsection
