@extends('master')


@section('title', 'User List')

@section('page-header')
    <i class="fa fa-info-circle"></i> User List
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
                            <a href="{{ route('users.create') }}" class="">
                                <i class="fa fa-plus"></i> Add New
                            </a>
                        </span>
                        <span class="widget-toolbar">
                            <a href="{{ route('users.create') }}?type=upload" class="">
                                <i class="fa fa-upload"></i> Upload User
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
                                                    <input type="text" name="username" value="{{ request('username') }}"
                                                        class="form-control input-sm" placeholder="User Name">
                                                </td>

                                                <td class="text-center">
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
                                                <th>User Name</th>
                                                <th>User Type</th>
                                                <th>User role</th>
                                                <th>Email</th>
                                                <th>Dept. code</th>
                                                <th>Institute code</th>
                                                <th>Status</th>

                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            @forelse ($users as $key => $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->username }}</td>
                                                    <td>{{ $item->usertype }}</td>
                                                    <td>{{ $item->userrole }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>{{ $item->deptcode }}</td>
                                                    <td>{{ $item->institutecode }}</td>
                                                    <td>{{ $item->status_02 }}</td>

                                                    <td class="text-center">
                                                        <div class="btn-group btn-corner">

                                                            @if (hasPermission(['editor', 'creator']))
                                                                <!-- edit -->
                                                                <a href="{{ route('users.edit', $item->userid) }}"
                                                                    role="button" class="btn btn-sm btn-success"
                                                                    title="Edit">
                                                                    <i class="fa fa-pencil-square-o"></i>
                                                                </a>
                                                            @endif

                                                            @if (hasPermission('creator'))
                                                                <!-- delete -->
                                                                <button type="button"
                                                                    onclick="delete_item(`{{ route('users.destroy', $item->userid) }}`)"
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
