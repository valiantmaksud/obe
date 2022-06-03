@extends('master')

@section('title', 'Current Semister Mark Entry List')

@section('page-header')
    <i class="fa fa-plus-circle"></i> Current Semister Mark Entry List
@stop



@section('main-content')

    <div class="row">
        <div class="col-md-12">

            <div class="widget-box">


                <!-- header -->
                <div class="widget-header">
                    <h4 class="widget-title"> @yield('page-header')</h4>
                    <span class="widget-toolbar">
                        <a href="{{ route('current_mark_entry_semister.index') }}" class="">
                            <i class="fa fa-list-alt"></i> List
                        </a>
                    </span>
                </div>



                <!-- body -->
                <div class="widget-body">
                    <div class="widget-main">



                        <form method="POST"
                            action="{{ route('current_mark_entry_semister.update', $currentMarkEntrySemister->institutecode) }}"
                            class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')




                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    Institute code<sup class="text-danger">*</sup>:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <input type="text" name="institutecode" class="form-control" autocomplete="off"
                                        value="{{ old('institutecode', $currentMarkEntrySemister->institutecode) }}"
                                        placeholder="institutecode" required>
                                </div>
                            </div>





                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    Program Code
                                    <sup class="text-danger">*</sup>:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <input type="text" name="programcode" class="form-control" autocomplete="off"
                                        value="{{ old('programcode', $currentMarkEntrySemister->programcode) }}"
                                        placeholder="programcode" required>
                                </div>
                            </div>




                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    Semester<sup class="text-danger">*</sup>:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <input type="text" name="semester" class="form-control" autocomplete="off"
                                        value="{{ old('semester', $currentMarkEntrySemister->semester) }}"
                                        placeholder="semester" required>
                                </div>
                            </div>



                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    Year
                                    <sup class="text-danger">*</sup>:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <input type="text" name="year" class="form-control" autocomplete="off"
                                        value="{{ old('year', $currentMarkEntrySemister->year) }}" placeholder="year"
                                        required>
                                </div>
                            </div>





                            <!-- Action -->
                            <div class="form-group">
                                <label class="control-label col-md-4 col-sm-4"></label>
                                <div class="col-md-3 col-sm-3">
                                    <button type="submit" class="btn btn-primary col-md-12">
                                        <i class="fa fa-edit"></i> Update
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
