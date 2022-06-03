@extends('master')


@section('title', 'Students List')

@section('page-header')
    <i class="fa fa-info-circle"></i> Students List
@stop

@section('main-content')

    <div class="row">
        <div class="col-md-12">



            <div class="widget-box">


                <!-- header -->
                <div class="widget-header">
                    <h4 class="widget-title"> @yield('page-header')</h4>
                    @if (hasPermission('creator'))
                        <span class="widget-toolbar">
                            <a href="{{ route('students.create') }}" class="">
                                <i class="fa fa-plus"></i> Add New
                            </a>
                        </span>
                        <span class="widget-toolbar">
                            <a href="{{ route('students.create') }}?type=upload" class="">
                                <i class="fa fa-upload"></i> Upload Student
                            </a>
                        </span>
                    @endif
                </div>



                <!-- body -->
                <div class="widget-body">
                    <div class="widget-main">


                        <!-- Searching -->
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <form action="">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td style="width: 30%">
                                                    <input type="text" name="studentid" value="{{ request('studentid') }}"
                                                        class="form-control input-sm" placeholder="Student ID">
                                                </td>
                                                <td style="width: 30%">
                                                    <input type="text" name="studentname"
                                                        value="{{ request('studentname') }}" class="form-control input-sm"
                                                        placeholder="Student Name">
                                                </td>
                                                <td>
                                                    <div class="btn-group btn-corner">
                                                        <button type="submit" class="btn btn-sm btn-success">
                                                            <i class="fa fa-search"></i> Search
                                                        </button>
                                                        <a href="{{ request()->url() }}" class="btn btn-sm">
                                                            <i class="fa fa-refresh"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </form>
                            </div>

                        </div>




                        <div class="row">
                            <div class="col-xs-12">

                                <div class="table-responsive" style="border: 1px #cdd9e8 solid;">

                                    <!-- Table -->
                                    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Sl</th>
                                                <th>Student ID</th>
                                                <th>Student Name</th>
                                                <th>Batch</th>
                                                <th>Program Code</th>
                                                <th>Dept. code</th>
                                                <th>Institute code</th>
                                                <th>Status</th>

                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            @forelse ($students as $key => $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->studentid }}</td>
                                                    <td>{{ $item->studentname }}</td>
                                                    <td>{{ $item->batch }}</td>
                                                    <td>{{ $item->programcode }}</td>
                                                    <td>{{ $item->deptcode }}</td>
                                                    <td>{{ $item->institutecode }}</td>
                                                    <td><span class="badge badge-{{ $item->status_07 ? 'success' : 'warning'}}">{{ $item->status_07 ? 'Active' : 'Inactive' }}</span></td>

                                                    <td class="text-center">
                                                        <div class="btn-group btn-corner">


                                                            @if (hasPermission(['editor', 'creator']))
                                                                <!-- edit -->
                                                                <a href="{{ route('students.edit', $item->studentid) }}"
                                                                    role="button" class="btn btn-sm btn-success"
                                                                    title="Edit">
                                                                    <i class="fa fa-pencil-square-o"></i>
                                                                </a>
                                                            @endif

                                                            @if (hasPermission('creator'))
                                                                <!-- delete -->
                                                                <button type="button"
                                                                    onclick="delete_item(`{{ route('students.destroy', $item->studentid) }}`)"
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
