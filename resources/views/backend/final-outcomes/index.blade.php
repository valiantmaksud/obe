@extends('master')


@section('title', 'Student PO')

@section('page-header')
    <i class="fa fa-info-circle"></i> Student PO
@stop

@section('main-content')

    <div class="row">
        <div class="col-md-12">



            <div class="widget-box">


                <!-- header -->
                <div class="widget-header">
                    <h4 class="widget-title"> @yield('page-header')</h4>

                </div>



                <!-- body -->
                <div class="widget-body">
                    <div class="widget-main">

                        <div class="row">
                            <form action="">

                            </form>
                        </div>

                        <div class="row">
                            <div class="col-xs-12">

                                @if (request()->filled('student_id'))
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
                                                        <td>{{ $item->po }}</td>

                                                        <td>{{ $item->pototalmark }}</td>
                                                        <td>{{ $item->obtainedmark }}</td>
                                                        <td>{{ $item->obtainedmark > 200 ? 'T' : 'F' }}</td>
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
    <script>
        function delete_item(url) {
            $('#deleteItemForm').attr('action', url)
        }
    </script>

@stop
