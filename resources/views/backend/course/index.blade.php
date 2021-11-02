@extends('master')

@section('breadcum')
    <li>Subject List</li>
@endsection

@section('breadcum_link')
    <a href="#" data-toggle="modal" data-target="#createModal" style="float: right; margin-top: 5px;"
        class="btn btn-primary btn-xs"><i class="ace-icon fa fa-plus"></i> Add New</a>
@endsection


@section('main-content')

    <div class="page-content">
        <div class="row">
            <div class="col-xs-12">
                @include('backend.subjects.create-modal')
                @include('backend.subjects.edit-modal')

                <div class="table-responsive">
                    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Code</th>
                                <th class="text-center">Created At</th>
                                <th class="text-center">Updated At</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subjects as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $item->name }}</td>
                                    <td class="text-center">{{ $item->code }}</td>
                                    <td class="text-center">{{ $item->created_at }}</td>
                                    <td class="text-center">{{ $item->updated_at }}</td>
                                    <td class="text-center">
                                        <div class="btn-group btn-corner">
                                            <a href="#editModal" onclick="editModal(`{{ $item->name }}`,`{{ $item->code }}`,`{{ route('subjects.destroy', $item->id) }}`)" 
                                             role="button" data-toggle="modal"
                                                class="btn btn-sm btn-success" title="Edit">
                                                <i class="fa fa-pencil-square-o"></i>
                                            </a>
                                            <a class="btn btn-sm btn-danger" href="#"
                                                onclick="delete_item(`{{ route('subjects.destroy', $item->id) }}`)"
                                                data-toggle="modal" data-target="#delete-modal">
                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                            </a>
                                        </div>

                                        
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <!-- The Modal -->
        @include('_partials.delete-modal')
    </div>
@endsection

@section('inline-js')
    {{-- <script src="{{ asset('assets/custom-js/datatable.js') }}"></script> --}}

    <script type="text/javascript">
        function delete_item(url) {
            $('#deleteItemForm').attr('action', url)
        }

        function editModal(name,code,url) {
            $('#sname').val(name)
            $('#scode').val(code)
            $('#editForm').attr('action', url)
        }
    </script>
     <script type="text/javascript">
        jQuery(function($) {
            $('#dynamic-table').DataTable({
                "ordering": false,
                "bPaginate": true,
                "lengthChange": false,
                "info": false
            });
        })
    </script>
@endsection
