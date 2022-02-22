@extends('master')

@section('title', 'Enroll Student List')

@section('page-header')
    <i class="fa fa-plus-circle"></i> Enroll Student List
@stop



@section('main-content')

    <div class="row">
        <div class="col-md-12">

            <div class="widget-box">


                <!-- header -->
                <div class="widget-header">
                    <h4 class="widget-title"> @yield('page-header')</h4>
                    <span class="widget-toolbar">
                        <a href="{{ route('enroll-students.index') }}" class="">
                            <i class="fa fa-list-alt"></i> List
                        </a>
                    </span>
                </div>



                <!-- body -->
                <div class="widget-body">
                    <div class="widget-main">



                        <form method="POST" action="{{ route('enroll-students.update', $enrollStudent->id) }}"
                            class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')






                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3" for="product_name">
                                    Offer course<sup class="text-danger">*</sup> :
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <select name="cid_11" class="chosen-select form-control"
                                        data-selected="{{ old('cid') }}">
                                        <option></option>
                                        @foreach ($offerCourses as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $item->id == $enrollStudent->cid_11 ? 'selected' : '' }}>
                                                {{ $item->programcode }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>







                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3" for="product_name">
                                    Student ID<sup class="text-danger">*</sup> :
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <select name="studentid" class="chosen-select form-control"
                                        data-selected="{{ old('studentid') }}">
                                        <option></option>
                                        @foreach ($students as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $item->id == $enrollStudent->studentid ? 'selected' : '' }}>
                                                {{ $item->studentid }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    Enroll type<sup class="text-danger">*</sup>:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <input type="text" name="enrolltype" class="form-control" autocomplete="off"
                                        value="{{ old('enrolltype', $enrollStudent->enrolltype) }}"
                                        placeholder="Enroll type" required>
                                </div>
                            </div>




                            <!-- Type  -->
                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    Status<sup class="text-danger">*</sup>:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <select name="status_13" class="chosen-select form-control"
                                        data-selected="{{ old('status_13') }}" required>
                                        <option></option>
                                        <option value="Active" selected>Active</option>
                                        <option value="Inactive">In Active</option>

                                    </select>
                                </div>
                            </div>



                            <!-- Action -->
                            <div class="form-group">
                                <label class="control-label col-md-4 col-sm-4"></label>
                                <div class="col-md-3 col-sm-3">
                                    <button type="submit" class="btn btn-primary col-md-12">
                                        <i class="fa fa-save"></i> Update
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
