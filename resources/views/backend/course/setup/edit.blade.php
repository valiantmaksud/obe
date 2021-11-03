@extends('master')

@section('title', 'Edit Course Setup')

@section('page-header')
    <i class="fa fa-edit"></i> Edit Course Setup
@stop



@section('main-content')

    <div class="row">
        <div class="col-md-12">

            <div class="widget-box">


                <!-- header -->
                <div class="widget-header">
                    <h4 class="widget-title"> @yield('page-header')</h4>
                    <span class="widget-toolbar">
                        <a href="{{ route('course-setups.index') }}" class="">
                            <i class="fa fa-list-alt"></i> Setup List
                        </a>
                    </span>
                </div>



                <!-- body -->
                <div class="widget-body">
                    <div class="widget-main">



                        <form method="POST" action="{{ route('course-setups.update', $courseSetup->id) }}"
                            class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row" style="padding:20px">
                                <div class="col-sm-12">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Course Code</th>
                                                <th>Course Name</th>
                                                <th>CO</th>
                                                <th>PO</th>
                                                <th>Total Marks</th>

                                            </tr>
                                        </thead>
                                        <tbody class="table-body">
                                            <tr class="tr-row">
                                                <td>
                                                    <input type="text" name="course_code"
                                                        value="{{ optional($courseSetup->course)->code }}"
                                                        class="form-control input-sm" placeholder="Type Course Code">
                                                </td>
                                                <td>
                                                    <input type="text" name="course_name"
                                                        value="{{ optional($courseSetup->course)->name }}"
                                                        class="form-control input-sm" placeholder="Type Course Name">
                                                </td>
                                                <td>
                                                    <input type="text" name="co" value="{{ $courseSetup->co }}"
                                                        class="form-control input-sm" placeholder="Enter CO">
                                                </td>
                                                <td>
                                                    <input type="text" name="po" value="{{ $courseSetup->po }}"
                                                        class="form-control input-sm" placeholder="Enter PO">
                                                </td>
                                                <td>
                                                    <input type="number" name="marks" value="{{ $courseSetup->marks }}"
                                                        class="form-control input-sm" placeholder="Enter Total Mark">
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>



                                    <!-- Action -->
                                    <div class="form-group">
                                        <label class="control-label col-md-4 col-sm-4 "></label>
                                        <div class="col-md-3 col-sm-3 pull-right">
                                            <button type="submit" class="btn btn-primary col-md-12">
                                                <i class="fa fa-save"></i> Save
                                            </button>
                                        </div>
                                    </div>
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
