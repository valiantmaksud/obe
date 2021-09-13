@extends('master')

@section('breadcum')
    <li>
        <a href="#">Result</a>
    </li>
    <li>
        Create
    </li>
@endsection

@section('breadcum_link')

@endsection

@section('inline-css')
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker3.min.css') }}" />
@endsection

@section('main-content')
    <div class="page-content">
        <div class="row">
            <div class="widget-box">
                <div class="widget-header">
                    <h5 class="widget-title">
                        <i class="ace-icon fa fa-plus"></i>Create Result
                    </h5>
                    <div class="widget-toolbar">
                        <a href="#" class="btn btn-primary btn-xs">
                            <i class="ace-icon fa fa-list"></i>Result Lists</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <form action="">
                            <table class="table table-bordered">
                                <tr>
                                    <td class="text-center">Semister</td>
                                    <td class="text-center">Exam</td>
                                    <td class="text-center">Question</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        @php
                                            $semister = ['Summer', 'Fall', 'Spring'];
                                        @endphp
                                        <select name="semister" id="" class="form-control chosen-select-280"
                                            data-placeholder="--Choose--" required>
                                            <option value=""></option>
                                            @foreach ($semister as $item)
                                                <option value="{{ $item . ' ' . date('Y') }}"
                                                    {{ $item . ' ' . date('Y') == request('semister') ? 'selected' : '' }}>
                                                    {{ $item }} {{ date('Y') }}</option>
                                            @endforeach

                                        </select>
                                    </td>
                                    <td class="text-center">
                                        @php
                                            $exam_types = ['Mid Term', 'Semister Final'];
                                        @endphp
                                        <select name="exam_type" id="" class="form-control chosen-select-280"
                                            data-placeholder="--Semister--" required>
                                            <option value=""></option>
                                            @foreach ($exam_types as $item)
                                                <option value="{{ $item }}"
                                                    {{ $item == request('exam_type') ? 'selected' : '' }}>
                                                    {{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <input type="number" name="total_question" min="1" max="5" value="{{ request('total_question') }}"
                                            class="form-control" placeholder="Type No. of Question" required>
                                    </td>
                                    <td>
                                        <div class="btn-corner btn-group">
                                            <button class="btn btn-sm btn-success" type="submit">Enter</button>
                                            <a class="btn btn-sm btn-danger" type="button"
                                                href="{{ request()->url() }}">Reset</a>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </form>
                        <div>
                            @if (request()->filled('total_question') && request()->filled('exam_type') && request()->filled('semister'))
                                <table class="table table-bordered">
                                    <tr>
                                        @for ($i = 0; $i < request('total_question'); $i++)
                                            <td class="text-center">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        How Many Option:
                                                    </span>
                                                    <input type="number" onkeyup="return addItem(this)" name="" id=""
                                                        class="form-control" placeholder="No. of Option" required>
                                                </div>
                                            </td>
                                        @endfor
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-sm-6">

                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                (a) Marks:
                                                            </span>
                                                            <input type="text" name="" id="" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                Outcome:
                                                            </span>
                                                            <input type="text" name="" id="" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">

                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                (a) Marks:
                                                            </span>
                                                            <input type="text" name="" id="" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                Outcome:
                                                            </span>
                                                            <input type="text" name="" id="" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">

                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                (a) Marks:
                                                            </span>
                                                            <input type="text" name="" id="" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                Outcome:
                                                            </span>
                                                            <input type="text" name="" id="" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-sm-6">

                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                (a) Marks:
                                                            </span>
                                                            <input type="text" name="" id="" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                Outcome:
                                                            </span>
                                                            <input type="text" name="" id="" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">

                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                (a) Marks:
                                                            </span>
                                                            <input type="text" name="" id="" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                Outcome:
                                                            </span>
                                                            <input type="text" name="" id="" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">

                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                (a) Marks:
                                                            </span>
                                                            <input type="text" name="" id="" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                Outcome:
                                                            </span>
                                                            <input type="text" name="" id="" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-sm-6">

                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                (a) Marks:
                                                            </span>
                                                            <input type="text" name="" id="" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                Outcome:
                                                            </span>
                                                            <input type="text" name="" id="" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">

                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                (a) Marks:
                                                            </span>
                                                            <input type="text" name="" id="" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                Outcome:
                                                            </span>
                                                            <input type="text" name="" id="" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">

                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                (a) Marks:
                                                            </span>
                                                            <input type="text" name="" id="" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                Outcome:
                                                            </span>
                                                            <input type="text" name="" id="" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                </table>
                                <div class="row" style="padding: 10px">
                                    <div class="col-sm-2 col-sm-offset-10 text-right">
                                        <button class="btn btn-sm btn-info" type="button">
                                            <i class="fa fa-check"></i> Generate
                                        </button>
                                    </div>
                                </div>
                                <div class="rows">
                                    <div style="overflows-x: scroll;">
                                        <table id="result-table" class="table table-bordered" style="width: 100%">
                                            <thead style="background: bg-dark">
                                                <tr>
                                                    <td rowspan="3" style="width: 20%!important">Student ID</td>
                                                    <td colspan="9">Question</td>
                                                    <td rowspan="3" style="width: 6%">
                                                        <div class="btn-corner btn-group" style="margin-top: 50px">
                                                            <button class="btn btn-xs btn-success" onclick="addTrRow()" type="button">
                                                                <i class="fa fa-plus"></i>
                                                            </button>
                                                           
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3">1</td>
                                                    <td colspan="3">2</td>
                                                    <td colspan="3">3</td>
                                                </tr>
                                                <tr>
                                                    <td>a(3)</td>
                                                    <td>b(3)</td>
                                                    <td>c(3)</td>
                                                    <td>a(3)</td>
                                                    <td>b(3)</td>
                                                    <td>c(3)</td>
                                                    <td>a(3)</td>
                                                    <td>b(3)</td>
                                                    <td>c(3)</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>

                    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
                    </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('inline-js')
<script src="{{ asset('assets/custom-js/results.js') }}"></script>
    <script type="text/javascript">
        function addItem(object) {
            let number = $(object).val();
            if (number != 0 && (!isNaN(number))) {
                for (let index = 0; index < number; index++) {
                    items();
                    console.log(items());
                }
            }
        }

        function items() {
            let option = `
        <div class="row">
            <div class="col-sm-6">

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            Marks:
                        </span>
                        <input type="text" name="" id="" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            Outcome:
                        </span>
                        <input type="text" name="" id="" class="form-control">
                    </div>
                </div>
            </div>
        </div>`;
        }
    </script>
@endsection
