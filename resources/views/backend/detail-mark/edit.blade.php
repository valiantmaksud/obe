@extends('master')

@section('title', 'Detail Mark List')

@section('page-header')
    <i class="fa fa-plus-circle"></i>Detail Mark List
@stop



@section('main-content')

    <div class="row">
        <div class="col-md-12">

            <div class="widget-box">


                <!-- header -->
                <div class="widget-header">
                    <h4 class="widget-title"> @yield('page-header')</h4>
                    <span class="widget-toolbar">
                        <a href="{{ route('detail-marks.index') }}" class="">
                            <i class="fa fa-list-alt"></i> List
                        </a>
                    </span>
                </div>



                <!-- body -->
                <div class="widget-body">
                    <div class="widget-main">



                        <form method="POST" action="{{ route('detail-marks.update', $detailMark->id) }}"
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
                                                {{ $item->id == $detailMark->cid_11 ? 'selected' : '' }}>
                                                {{ $item->coursecode }}</option>
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
                                                {{ $item->id == $detailMark->studentid ? 'selected' : '' }}>
                                                {{ $item->studentid }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    Exam Type<sup class="text-danger">*</sup>:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <select name="examtype" class="form-control chosen-select"
                                        data-selected="{{ old('examtype', $detailMark->examtype) }}" required
                                        onchange="getQID(this)">
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
                                        value="{{ old('qid', $detailMark->qid) }}" placeholder="qid" required>
                                </div>
                            </div>




                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    Co<sup class="text-danger">*</sup>:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <input type="text" name="co" class="form-control" autocomplete="off"
                                        value="{{ old('co', $detailMark->co) }}" placeholder="co" required>
                                </div>
                            </div>




                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    Po<sup class="text-danger">*</sup>:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <input type="text" name="po" class="form-control" autocomplete="off"
                                        value="{{ old('po', $detailMark->po) }}" placeholder="po" required>
                                </div>
                            </div>




                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    Obtain mark<sup class="text-danger">*</sup>:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <input type="text" name="obtainedmark" class="form-control" autocomplete="off"
                                        value="{{ old('obtainedmark', $detailMark->obtainedmark) }}"
                                        placeholder="obtainedmark" required>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    Status<sup class="text-danger">*</sup>:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <select name="status_14" class="chosen-select form-control"
                                        data-selected="{{ old('status_14') }}" required>
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

    <script>
        function getQID(obj) {
            let cid = $('.cid option:selected').val();

            let examtype = $(obj).val();
            console.log(cid, examtype);
            $.get('{{ route('get-qid') }}', {
                qid: cid,
                examtype: examtype
            }, function(response) {
                $('input[name=qid]').val(response.qid)
                $('input[name=co]').val(response.co)
                $('input[name=po]').val(response.po)
                $('input[name=fullmark]').val(response.fullmark)
                console.log(response);
            })
        }
    </script>
@endsection
