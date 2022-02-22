@extends('master')

@section('title', 'Create')

@section('page-header')
    <i class="fa fa-plus-circle"></i> Create
@stop



@section('main-content')

    <div class="row">
        <div class="col-md-12">

            <div class="widget-box">


                <!-- header -->
                <div class="widget-header">
                    <h4 class="widget-title"> @yield('page-header')</h4>
                    <span class="widget-toolbar">
                        <a href="{{ route('mark-distributions.index') }}" class="">
                            <i class="fa fa-list-alt"></i> List
                        </a>
                    </span>
                </div>



                <!-- body -->
                <div class="widget-body">
                    <div class="widget-main">



                        <form method="POST" action="{{ route('grade-results.store') }}" class="form-horizontal"
                            enctype="multipart/form-data">
                            @csrf




                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3" for="product_name">
                                    Offer course<sup class="text-danger">*</sup> :
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <select name="cid_11" class="chosen-select form-control"
                                        data-selected="{{ old('cid') }}" onchange="cid(this)">
                                        <option></option>
                                        @foreach ($offerCourses as $item)
                                            <option value="{{ $item->id }}">{{ $item->coursecode }}</option>
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
                                            <option value="{{ $item->id }}">{{ $item->studentid }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    Course code<sup class="text-danger">*</sup>:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <input type="text" name="coursecode" class="form-control" autocomplete="off"
                                        value="{{ old('coursecode') }}" placeholder="coursecode" required readonly>
                                </div>
                            </div>




                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    Attendance<sup class="text-danger">*</sup>:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <input type="text" name="attendance" class="form-control att" autocomplete="off"
                                        value="{{ old('attendance') }}" placeholder="attendance" required>
                                </div>
                            </div>




                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    Class performanace<sup class="text-danger">*</sup>:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <input type="text" name="classperformanace" class="form-control cp" autocomplete="off"
                                        value="{{ old('classperformanace') }}" placeholder="classperformanace" required>
                                </div>
                            </div>




                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    Mid exam<sup class="text-danger">*</sup>:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <input type="text" name="midexam" class="form-control mid" autocomplete="off"
                                        value="{{ old('midexam') }}" placeholder="midexam" required>
                                </div>
                            </div>





                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    Final exam<sup class="text-danger">*</sup>:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <input type="text" name="finalexam" class="form-control final" autocomplete="off"
                                        value="{{ old('finalexam') }}" placeholder="finalexam" required>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    Total<sup class="text-danger">*</sup>:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <input type="text" name="total" class="form-control" autocomplete="off"
                                        value="{{ old('total') }}" placeholder="total" required readonly>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    Grade<sup class="text-danger">*</sup>:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <input type="text" name="grade" class="form-control" autocomplete="off"
                                        value="{{ old('grade') }}" placeholder="grade" required readonly>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    Status<sup class="text-danger">*</sup>:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <select name="status_15" class="chosen-select form-control"
                                        data-selected="{{ old('status_15') }}" required>
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

    <script>
        $('.att,.cp,.mid,.final').on('keyup', function() {
            let attendance = Number($('input[name=attendance]').val())
            let classperformanace = Number($('input[name=classperformanace]').val())
            let midexam = Number($('input[name=midexam]').val())
            let finalexam = Number($('input[name=finalexam]').val())

            let total = attendance + classperformanace + midexam + finalexam
            $('input[name=total]').val(total)


            $('input[name=grade]').val(grade(total))

        })

        function cid(obj) {

            $('input[name=coursecode]').val($(obj).text().trim())
        }

        function grade(total) {
            if (total >= 80) {
                return 'A+'
            } else if (total >= 75 && total < 80) {
                return 'A'
            } else if (total >= 70 && total < 75) {
                return 'A-'
            } else if (total >= 60 && total < 70) {
                return 'B'
            } else if (total >= 50 && total < 60) {
                return 'C'
            } else if (total > 39 && total < 50) {
                return 'D'
            } else {
                return 'F'
            }
        }
    </script>
@endsection
