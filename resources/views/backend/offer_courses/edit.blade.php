@extends('master')

@section('title', 'Offer Course List')

@section('page-header')
    <i class="fa fa-plus-circle"></i> Offer Course List
@stop



@section('main-content')

    <div class="row">
        <div class="col-md-12">

            <div class="widget-box">


                <!-- header -->
                <div class="widget-header">
                    <h4 class="widget-title"> @yield('page-header')</h4>
                    <span class="widget-toolbar">
                        <a href="{{ route('offer_courses.index') }}" class="">
                            <i class="fa fa-list-alt"></i> List
                        </a>
                    </span>
                </div>



                <!-- body -->
                <div class="widget-body">
                    <div class="widget-main">



                        <form method="POST" action="{{ route('offer_courses.update', $offerCourse->id) }}"
                            class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')






                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3" for="product_name">
                                    Program code<sup class="text-danger">*</sup> :
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <input class="form-control" type="text" name="programcode" autocomplete="off"
                                        value="{{ old('programcode', $offerCourse->programcode) }}"
                                        placeholder="programcode" required />
                                </div>
                            </div>




                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    Semister<sup class="text-danger">*</sup>:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <input type="text" name="semister" class="form-control" autocomplete="off"
                                        value="{{ old('semister', $offerCourse->semister) }}" placeholder="semister"
                                        required>
                                </div>
                            </div>




                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    Year<sup class="text-danger">*</sup>:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <input type="text" name="year" class="form-control" autocomplete="off"
                                        value="{{ old('year', $offerCourse->year) }}" placeholder="year" required>
                                </div>
                            </div>




                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    Course Code<sup class="text-danger">*</sup>:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <input type="text" name="coursecode" class="form-control" autocomplete="off"
                                        value="{{ old('coursecode', $offerCourse->coursecode) }}" placeholder="coursecode"
                                        required>
                                </div>
                            </div>




                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    Teacher ID<sup class="text-danger">*</sup>:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <input type="text" name="teacherid" class="form-control" autocomplete="off"
                                        value="{{ old('teacherid', $offerCourse->teacherid) }}" placeholder="teacherid"
                                        required>
                                </div>
                            </div>




                            <!-- Type  -->
                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    Final Status<sup class="text-danger">*</sup>:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <select name="finalized_status" class="chosen-select form-control"
                                        data-placeholder="--Type--" required>
                                        <option value=""></option>
                                        <option value=1 selected>Active</option>
                                        <option value=0>In Active</option>

                                    </select>
                                </div>
                            </div>




                            <!-- Type  -->
                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    Status<sup class="text-danger">*</sup>:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <select name="status_11" class="chosen-select form-control"
                                        data-selected="{{ old('status_11') }}" required>
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
