@extends('master')


@section('title', 'Student PO')

@section('page-header')
    <i class="fa fa-info-circle"></i> Student PO
@stop

@section('main-content')

    <div class="row" style="margin-top: 10px">
        <div class="col-md-12">



            <div class="widget-box">


                <!-- header -->
                <div class="widget-header hidden_print">
                    <h4 class="widget-title"> @yield('page-header')</h4>

                </div>



                <!-- body -->
                <div class="widget-body">
                    <div class="widget-main">


                        <form action="" class="hidden_print">
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <table class="table table-bordered">

                                        <tr>
                                            <td>
                                                <input type="text" name="student_id" class="form-control"
                                                    value="{{ request('student_id') }}" placeholder="Student ID">
                                            </td>

                                            <td class="text-center">
                                                <div class="btn-group btn-corner">
                                                    <button class="btn btn-primary btn-sm"><i class="fa fa-search"></i>
                                                        Search</button>
                                                    <a href="{{ request()->url() }}" class="btn btn-default btn-sm"><i
                                                            class="fa fa-refresh"></i>
                                                        Refresh
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1">

                                @if (request()->filled('student_id'))
                                    <div class="row" style="margin-bottom: 20px">
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <div class="row">
                                                <div class="col-sm-6 text-center">Name:
                                                    <strong>{{ $student->studentname }}</strong>
                                                </div>
                                                <div class="col-sm-6 text-center">Dept Code:
                                                    <strong>{{ $student->deptcode }}</strong>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 text-center">ID:
                                                    <strong>{{ $student->studentid }}</strong>
                                                </div>
                                                <div class="col-sm-6 text-center">Batch:
                                                    <strong>{{ $student->batch }}</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive" style="border: 1px #cdd9e8 solid;">

                                        <!-- Table -->
                                        <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>PO</th>

                                                    <th>Total PO Marks</th>
                                                    <th>Obtain PO Marks</th>
                                                    <th>Attendant</th>
                                                </tr>
                                            </thead>

                                            <tbody>

                                                @forelse ($poObtainedMarks as $key => $item)
                                                    <tr>
                                                        <td>{{ $item->first()->po }}</td>

                                                        <td>{{ $pototal = $item->sum('pototalmark') }}</td>
                                                        <td>{{ $obtainedtotal = $item->sum('obtainedmark') }}</td>
                                                        <td>
                                                            {{ ($obtainedtotal * 100) / $pototal > 40 ? 'True' : 'False' }}
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="30" class="text-center text-danger py-3"
                                                            style="background: #eaf4fa80 !important; font-size: 18px">
                                                            <strong>No records found!</strong>
                                                        </td>
                                                    </tr>
                                                @endforelse
                                            </tbody>

                                            <tfoot class="hidden_print">
                                                <tr class="noExl">
                                                    <td colspan="30" class="text-right">
                                                        <div class="btn-group btn-corner">

                                                            <a href="javascript:void(0)" class="btn btn-purple btn-lg"
                                                                onclick="exportToExcel()">
                                                                <i class="fa fa-file-pdf-o"></i>
                                                                Export To Excel
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


@section('inline-js')
    <script src="{{ asset('assets/custom-js/jquery.table2excel.js') }}"></script>

    <script>
        function exportToExcel() {
            $("#dynamic-table").table2excel({
                exclude: ".noExl",
                name: "Final Outcome",
                filename: "final-outcome",
                fileext: ".xls",
                preserveColors: true
            });
        }
    </script>

@stop
