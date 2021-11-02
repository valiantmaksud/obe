@extends('master')

@section('title', 'Add Student')

@section('page-header')
    <i class="fa fa-plus-circle"></i> Add Student
@stop



@section('main-content')

    <div class="row">
        <div class="col-md-12">

            <div class="widget-box">


                <!-- header -->
                <div class="widget-header">
                    <h4 class="widget-title"> @yield('page-header')</h4>
                    <span class="widget-toolbar">
                        <a href="{{ route('students.index') }}" class="">
                            <i class="fa fa-list-alt"></i> Student List
                        </a>
                    </span>
                </div>



                <!-- body -->
                <div class="widget-body">
                    <div class="widget-main">



                        <form method="POST" action="{{ route('students.store') }}" class="form-horizontal"
                            enctype="multipart/form-data">
                            @csrf


                            <!-- Name -->
                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    Name<sup class="text-danger">*</sup> :
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <input class="form-control" type="text" name="name" autocomplete="off"
                                        value="{{ old('name') }}" placeholder="Course Name" required />
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    Email:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <input class="form-control" type="text" name="email" autocomplete="off"
                                        value="{{ old('email') }}" placeholder="Type email" />
                                </div>
                            </div>


                            <!-- Student ID -->
                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    Student ID:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <input class="form-control" type="text" name="student_id" autocomplete="off"
                                        value="{{ old('student_id') }}" placeholder="Type ID" />
                                </div>
                            </div>


                            <!-- Phone -->
                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    Phone:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <input class="form-control" type="text" name="phone" autocomplete="off"
                                        value="{{ old('phone') }}" placeholder="Type phone" />
                                </div>
                            </div>





                            <!-- Batch -->
                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3" for="batch">Batch :</label>
                                <div class="col-md-5 col-sm-5">
                                    <input class="form-control" type="text" name="batch" value="{{ old('batch') }}"
                                        placeholder="batch" />
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



@section('js')


    <script src="{{ asset('admin/assets/custom_js/file_upload.js') }}"></script>


@endsection
