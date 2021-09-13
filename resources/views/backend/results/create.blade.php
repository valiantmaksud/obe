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
                                        <input type="number" name="total_question" min="1" max="5"
                                            value="{{ request('total_question') }}" class="form-control"
                                            placeholder="Type No. of Question" required>
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
                                <div class="option">
                                    <form action="" id="option-form">
                                        <input type="hidden" name="total_question"
                                            value="{{ request('total_question') }}">
                                        <input type="hidden" name="exam_type" value="{{ request('exam_type') }}">
                                        <input type="hidden" name="semister" value="{{ request('semister') }}">
                                        <table class="table table-bordered" id="option-table">
                                            <tr>
                                                @for ($i = 0; $i < request('total_question'); $i++)
                                                    <td class="text-center">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                How Many Option:
                                                            </span>
                                                            <input type="number" min="1" max="5"
                                                                onkeyup="addItem(this,{{ $i }})"
                                                                name="options[]" 
                                                class="form-control question-option"
                                                placeholder="No. of Option" required>
                                </div>
                                </td>
                            @endfor
                            </tr>
                            <tfoot>
                                <tr>
                                        @for ($i = 0; $i < request('total_question'); $i++)
                                            <td id="option{{ $i }}"
                                                style="width: {{ 100 / request('total_question') }}%">
                                                @if (request()->filled('options'))
                                                    @for ($j = 0; $j < request('options')[$i]; $j++)
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            Marks:
                                                                        </span>
                                                                        <input type="text"
                                                                            name="option_marks[{{ $i }}][{{ $j }}]"
                                                                            value="{{ request('option_marks')[$i][$j] }}"
                                                                            class="form-control question-option">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            Outcome:
                                                                        </span>
                                                                        <select
                                                                            name="option_outcome[{{ $i }}][{{ $j }}]"
                                                                            class="form-control question-option"
                                                                            data-placeholder="--Select Outcome--">
                                                                            <option value=""></option>
                                                                            @foreach ($outcomes as $key => $item)
                                                                                <option value="{{ $key }}"
                                                                                    {{ request('option_outcome')[$i][$j] == $key ? 'selected' : '' }}>
                                                                                    {{ $item }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endfor
                                                @endif
                                            </td>
                                        @endfor

                                </tr>
                            </tfoot>
                            </table>
                            <div class="row" style="padding: 10px">
                                <div class="col-sm-6 text-right">
                                    <span id="alert"></span>
                                </div>
                                <div class="col-sm-2 col-sm-offset-4 text-right">
                                    <button class="btn btn-sm btn-info" type="button" onclick="generate()">
                                        <i class="fa fa-check"></i> Generate
                                    </button>
                                </div>
                            </div>
                            </form>
                        </div>
                        <div class="rows">
                            <div style="overflows-x: scroll;">
                                @if (request()->filled('option_marks'))

                                    <table id="result-table" class="table table-bordered" style="width: 100%">
                                        <thead style="background: bg-dark">
                                            <tr>
                                                <td rowspan="{{ $total = request('total_question') }}"
                                                    style="width: 20%!important">Student ID</td>
                                                <td colspan="{{ count(request('options')) * $total }}"
                                                    class="text-center">Question</td>
                                                <td rowspan="{{ $total }}" style="width: 6%">
                                                    <div class="btn-corner btn-group" style="margin-top: 50px">
                                                        <button class="btn btn-xs btn-success" onclick="addTrRow()"
                                                            type="button">
                                                            <i class="fa fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                @for ($i = 0; $i < $total; $i++)
                                                    <td colspan="{{ request('options')[$i] }}" class="text-center">
                                                        {{ $i + 1 }}</td>

                                                @endfor
                                            </tr>
                                            <tr class="result-tr-3">
                                                @php
                                                    $range = range('a', 'z');
                                                @endphp
                                                @for ($i = 0; $i < $total; $i++)
                                                    @for ($j = 0; $j < request('options')[$i]; $j++)
                                                        <td class="text-center">
                                                            {{ $range[$j] }}.({{ request('option_marks')[$i][$j] }} )
                                                        </td>
                                                    @endfor
                                                @endfor
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                @endif

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
    <script src="{{ asset('assets/custom-js/chosen-box.js') }}"></script>
    <script type="text/javascript">
        function addItem(object, id) {
            let number = $(object).val();
            if (number != 0 ) {
                let option = '';
                for (let index = 0; index < number; index++) {
                    option += `<div class="row">
            <div class="col-sm-6">

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            Marks:
                        </span>
                        <input type="text" name="option_marks[${id}][${index}]" class="form-control question-option">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            Outcome:
                        </span>
                        <select name="option_outcome[${id}][${index}]" class="form-control chosen-select-100-percent question-option" data-placeholder="--Select Outcome--">
                        <option value=""></option>
                        @foreach ($outcomes as $key => $item)
                            <option value="{{ $key }}">{{ $item }}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
            </div>
        </div>`
                }
                $('#option' + id).html(option)
                // $(".question-option").chosen().trigger("chosen:updated");
            }
        }

        function generate() {
            let warn = 0;
            $('.question-option').each(function(index) {
                if ($(this).val() == '') {
                    warn = 1;
                } else {
                    warn = 0;
                }
            })
            if (warn != 0) {
                alert('Please fill all option first');
                // $('#alert').text('Please fill all option first').fadeOut(1000)
            } else {
                console.log(111);
                $('#option-form').submit();
            }
        }
    </script>
@endsection
