@extends('master')


@section('title', 'grade result List')

@section('page-header')
    <i class="fa fa-info-circle"></i> grade result List
@stop

@section('main-content')

    <div class="row">
        <div class="col-md-12">



            <div class="widget-box">


                <!-- header -->
                <div class="widget-header">
                    <h4 class="widget-title"> @yield('page-header')</h4>
                    <span class="widget-toolbar">
                        <a href="{{ route('grade-results.create') }}" class="">
                            <i class="fa fa-plus"></i> Add New
                        </a>
                    </span>
                </div>



                <!-- body -->
                <div class="widget-body">
                    <div class="widget-main">


                        <div class="row">
                            <div class="col-xs-12">

                                <div class="table-responsive" style="border: 1px #cdd9e8 solid;">

                                    <!-- Table -->
                                    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Sl</th>
                                                <th>Course Code</th>
                                                <th>Student ID</th>
                                                <th>Attendance</th>
                                                <th>Class Performance</th>
                                                <th>Mid exam</th>
                                                <th>Final exam</th>
                                                <th>Total</th>
                                                <th>Grade</th>
                                                <th>Status</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            @forelse ($gradeResult as $key => $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ optional($item->offer)->coursecode }}</td>
                                                    <td>{{ $item->student->studentid }}</td>
                                                    <td>{{ $item->attendance }}</td>
                                                    <td>{{ $item->classperformanace }}</td>
                                                    <td>{{ $item->midexam }}</td>
                                                    <td>{{ $item->finalexam }}</td>
                                                    <td>{{ $item->total }}</td>
                                                    <td>{{ $item->grade }}</td>
                                                    <td>
                                                        <span class="badge badge-{{ $item->status_15 ? 'success' : 'warning'}}">{{ $item->status_15 ? 'Active' : 'Inactive' }}</span>

                                                    </td>

                                                    <td class="text-center">
                                                        <div class="btn-group btn-corner">


                                                            @if (hasPermission(['editor', 'creator']))
                                                                <!-- edit -->
                                                                <a href="{{ route('grade-results.edit', $item->cid_11) }}"
                                                                    role="button" class="btn btn-sm btn-success"
                                                                    title="Edit">
                                                                    <i class="fa fa-pencil-square-o"></i>
                                                                </a>
                                                            @endif

                                                            @if (hasPermission('creator'))
                                                                <!-- delete -->
                                                                <button type="button"
                                                                    onclick="delete_item(`{{ route('grade-results.destroy', $item->cid_11) }}`)"
                                                                    data-toggle="modal" data-target="#delete-modal"
                                                                    class="btn btn-sm btn-danger" title="Delete">
                                                                    <i class="fa fa-trash"></i>
                                                                </button>
                                                            @endif
                                                        </div>
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
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- The Modal -->
    @include('_partials.delete-modal')

@endsection


@section('inline-js')
    <script>
        function delete_item(url) {
            $('#deleteItemForm').attr('action', url)
        }
    </script>

@stop
