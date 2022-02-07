@extends('master')

@section('title', 'PO Obtained Mark')

@section('page-header')
    <i class="fa fa-plus-circle"></i> PO Obtained Mark
@stop



@section('main-content')

    <div class="row">
        <div class="col-md-12">

            <div class="widget-box">


                <!-- header -->
                <div class="widget-header">
                    <h4 class="widget-title"> @yield('page-header')</h4>
                    <span class="widget-toolbar">
                        <a href="{{ route('po-obtained-mark.index') }}" class="">
                            <i class="fa fa-list-alt"></i> List
                        </a>
                    </span>
                </div>



                <!-- body -->
                <div class="widget-body">
                    <div class="widget-main">



                        <form method="POST" action="{{ route('po-obtained-mark.update', $poObtainedMark->id) }}"
                            class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')



                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3" for="product_name">
                                    Offer course<sup class="text-danger">*</sup> :
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <select name="cid_11" class="chosen-select form-control">
                                        <option></option>
                                        @foreach ($offerCourses as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $poObtainedMark->cid_11 == $item->id ? 'selected' : '' }}>
                                                {{ $item->programcode }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    Course Code<sup class="text-danger">*</sup>:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <input type="text" name="coursecode" class="form-control" autocomplete="off"
                                        value="{{ old('coursecode', $poObtainedMark->coursecode) }}"
                                        placeholder="coursecode" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3" for="product_name">
                                    Student ID<sup class="text-danger">*</sup> :
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <select name="studentid" class="chosen-select form-control">
                                        <option></option>
                                        @foreach ($students as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $poObtainedMark->studentid == $item->id ? 'selected' : '' }}>
                                                {{ $item->studentid }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>



                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    PO<sup class="text-danger">*</sup>:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <input type="text" name="po" class="form-control" autocomplete="off"
                                        value="{{ old('po', $poObtainedMark->po) }}" placeholder="PO" required>
                                </div>
                            </div>



                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    Obtained Mark<sup class="text-danger">*</sup>:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <input type="text" name="obtainedmark" class="form-control" autocomplete="off"
                                        value="{{ old('obtainedmark', $poObtainedMark->obtainedmark) }}"
                                        placeholder="Enroll type" required>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    PO total Mark<sup class="text-danger">*</sup>:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <input type="text" name="pototalmark" class="form-control" autocomplete="off"
                                        value="{{ old('pototalmark', $poObtainedMark->pototalmark) }}"
                                        placeholder="Enroll type" required>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    Obtained Percentage<sup class="text-danger">*</sup>:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <input type="text" name="obtainedpercentage" class="form-control" autocomplete="off"
                                        value="{{ old('obtainedpercentage', $poObtainedMark->obtainedpercentage) }}"
                                        placeholder="Enroll type" required>
                                </div>
                            </div>



                            <!-- Type  -->
                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    Status<sup class="text-danger">*</sup>:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <select name="status_20" class="chosen-select form-control" data-placeholder="--Type--"
                                        required>
                                        <option value=""></option>
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
