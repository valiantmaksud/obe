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



                        <form method="POST" action="{{ route('mark-distributions.store') }}" class="form-horizontal"
                            enctype="multipart/form-data">
                            @csrf




                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3" for="product_name">
                                    Offer course<sup class="text-danger">*</sup> :
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <select name="cid_11" class="chosen-select form-control"
                                        data-selected="{{ old('cid_11') }}">
                                        <option></option>
                                        @foreach ($offerCourses as $item)
                                            <option value="{{ $item->cid_11 }}">{{ $item->coursecode }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>




                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    Exam Type<sup class="text-danger">*</sup>:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <select name="markofexam" class="form-control chosen-select"
                                        data-selected="{{ old('markofexam') }}" required>
                                        <option></option>
                                        <option value="Mid Term">Mid Term</option>
                                        <option value="Final Term">Final Term</option>
                                    </select>
                                </div>
                            </div>




                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    QID<sup class="text-danger">*</sup>:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <input type="text" name="qid" class="form-control" autocomplete="off"
                                        value="{{ old('qid') }}" placeholder="qid" required>
                                </div>
                            </div>




                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    Co<sup class="text-danger">*</sup>:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <input type="text" name="co" class="form-control" autocomplete="off"
                                        value="{{ old('co') }}" placeholder="co" required>
                                </div>
                            </div>




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
                                    PO Full mark<sup class="text-danger">*</sup>:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <input type="number" name="fullmark" class="form-control" autocomplete="off"
                                        value="{{ old('fullmark') }}" placeholder="fullmark" required>
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
