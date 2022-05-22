@extends('master')

@section('title', 'Program Setup')

@section('page-header')
    <i class="fa fa-plus-circle"></i> Program Setup
@stop



@section('main-content')

    <div class="row">
        <div class="col-md-12">

            <div class="widget-box">


                <!-- header -->
                <div class="widget-header">
                    <h4 class="widget-title"> @yield('page-header')</h4>
                    <span class="widget-toolbar">
                        <a href="{{ route('programs.index') }}" class="">
                            <i class="fa fa-list-alt"></i> Program List
                        </a>
                    </span>
                </div>



                <!-- body -->
                <div class="widget-body">
                    <div class="widget-main">



                        <form method="POST" action="{{ route('programs.store') }}" class="form-horizontal"
                            enctype="multipart/form-data">
                            @csrf




                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3" for="product_name">
                                    Program code<sup class="text-danger">*</sup> :
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <input class="form-control" type="text" name="programcode" autocomplete="off"
                                        value="{{ old('programcode') }}" placeholder="programcode" required />
                                </div>
                            </div>




                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    Program Name<sup class="text-danger">*</sup>:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <input type="text" name="programname" class="form-control" autocomplete="off"
                                        value="{{ old('programname') }}" placeholder="programname" required>
                                </div>
                            </div>




                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    Dept Code<sup class="text-danger">*</sup>:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <select name="deptcode" class="form-control chosen-select">
                                        <option></option>
                                        @foreach ($depts as $code => $name)
                                            <option value="{{ $code }}">{{ $name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>




                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    Institute Code<sup class="text-danger">*</sup>:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <select name="institutecode" class="form-control chosen-select">
                                        <option></option>
                                        @foreach ($inst as $code => $name)
                                            <option value="{{ $code }}">{{ $name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>




                            <!-- Type  -->
                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    Status<sup class="text-danger">*</sup>:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <select name="status_01" class="chosen-select form-control" data-placeholder="--Type--"
                                        required>
                                        <option></option>
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
