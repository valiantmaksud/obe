@extends('master')

@section('title', 'Course Setup')

@section('page-header')
    <i class="fa fa-plus-circle"></i> Course Setup
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



                        <form method="POST" action="{{ route('course-setups.store') }}" class="form-horizontal"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-sm-11 col-sm-offset-1">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Course Code</th>
                                                <th>Course Name</th>
                                                <th>CO</th>
                                                <th>PO</th>
                                                <th>Total Marks</th>
                                                <th>
                                                    <div class="btn-group btn-corner">
                                                        <button type="button" onclick="addItem()"
                                                            class="btn btn-xs btn-success">
                                                            <i class="fa fa-plus-circle"></i>
                                                        </button>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-body">

                                        </tbody>
                                    </table>



                                    <!-- Action -->
                                    <div class="form-group">
                                        <label class="control-label col-md-4 col-sm-4 "></label>
                                        <div class="col-md-3 col-sm-3 pull-right">
                                            <button type="submit" class="btn btn-primary col-md-12">
                                                <i class="fa fa-plus"></i> Add New
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



    <script>
        $(document).ready(function() {
            addItem()
        })

        function addItem() {
            let tr = ` <tr class="tr-row">
                        <td>
                            <input type="text" name="course_codes[]" class="form-control input-sm"
                                placeholder="Type Course Code">
                        </td>
                        <td>
                            <input type="text" name="course_names[]" class="form-control input-sm"
                                placeholder="Type Course Name">
                        </td>
                        <td>
                            <input type="text" name="cos[]" class="form-control input-sm"
                                placeholder="Enter CO">
                        </td>
                        <td>
                            <input type="text" name="pos[]" class="form-control input-sm"
                                placeholder="Enter PO">
                        </td>
                        <td>
                            <input type="number" name="total_marks[]" class="form-control input-sm"
                                placeholder="Enter Total Mark">
                        </td>
                        <td class="td-row-0">
                            <div class="btn-group btn-corner">
                                <button type="button" onclick="cloneItem(this)" class="btn btn-xs btn-success">
                                    <i class="fa fa-clone"></i>
                                </button>
                                <button type="button" onclick="removeItem(this)" class="btn btn-xs btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>`
            $('.table-body').append(tr);
        }


        function removeItem(object) {
            $(object).parents('.tr-row').remove();
        }


        function cloneItem(object) {
            let clone = $(object).parents('.tr-row').clone();
            $('.table-body').append(clone);
        }
    </script>
@endsection
