@extends('master')

@section('title', 'Semister')
@section('page-header')
    <i class="fa fa-ge"></i> Semister
@stop



@section('main-content')

    <div id="add-new" class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="blue bigger"><i class="fa fa-plus-circle"></i> Add New @yield('title') </h4>
                </div>

                <div class="modal-body">
                    <div class="row">

                        <div class="col-sm-12">

                            <form action="{{ route('semisters.store') }}" method="post" class="form-horizontal">
                                @csrf


                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="form-field-1-1"> Semister </label>

                                    <div class="col-xs-12 col-sm-8 @error('semister') has-error @enderror">
                                        <input type="text" class="form-control" name="semister"
                                            value="{{ old('semisters') }}" placeholder="Semister">

                                        @error('semisters')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror

                                    </div>

                                </div>





                                <div class="form-group">
                                    <label class="col-sm-3 control-label"></label>

                                    <div class="col-xs-12 col-sm-8">
                                        <button class="btn btn-sm btn-success"><i class="fa fa-save"></i> Save</button>
                                    </div>

                                </div>


                            </form>

                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-sm" data-dismiss="modal">
                        <i class="ace-icon fa fa-times"></i>
                        Cancel
                    </button>

                </div>
            </div>
        </div>

    </div>

    <div class="page-header">
        @if (hasPermission('creator'))
            <a href="#add-new" role="button" data-toggle="modal" class="btn btn-xs btn-info"
                style="float: right; margin: 0 2px;">
                <i class="fa fa-plus"></i> Add @yield('title')
            </a>
        @endif
        <h1>
            @yield('page-header')
        </h1>
    </div>



    <div class="row">
        <div class="col-xs-12">

            <div class="table-responsive" style="border: 1px #cdd9e8 solid;">
                <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Sl.</th>
                            <th class="text-center">Semister</th>

                            <th></th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($semisters as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td class="text-center">{{ $item->semister }}</td>

                                <td>
                                    <div class="btn-group btn-corner">

                                        @if (hasPermission(['editor', 'creator']))
                                            <a href="#edit{{ $item->id }}" role="button" data-toggle="modal"
                                                class="btn btn-sm btn-success" title="Edit">
                                                <i class="fa fa-pencil-square-o"></i>
                                            </a>
                                        @endif

                                        @if (hasPermission('creator'))
                                            <button type="button"
                                                onclick="delete_item(`{{ route('semisters.destroy', $item->id) }}`)"
                                                data-toggle="modal" data-target="#delete-modal"
                                                class="btn btn-sm btn-danger" title="Delete">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        @endif
                                    </div>


                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>


        </div>
    </div>

    @foreach ($semisters as $item)

        <div id="edit{{ $item->id }}" class="modal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="blue bigger"><i class="fa fa-pencil-square-o"></i> Edit @yield('title') </h4>
                    </div>

                    <div class="modal-body">
                        <div class="row">

                            <div class="col-sm-12">

                                <form action="{{ route('semisters.update', $item->id) }}" method="post"
                                    class="form-horizontal">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-field-1-1"> Semister </label>

                                        <div class="col-xs-12 col-sm-8 @error('semister') has-error @enderror">
                                            <input type="text" class="form-control" name="semister"
                                                value="{{ $item->semister ?: old('semister') }}" placeholder="semister">

                                            @error('semister')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror

                                        </div>

                                    </div>



                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"></label>

                                        <div class="col-xs-12 col-sm-8">
                                            <button class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o"></i>
                                                Update</button>
                                        </div>

                                    </div>


                                </form>

                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-sm" data-dismiss="modal">
                            <i class="ace-icon fa fa-times"></i>
                            Cancel
                        </button>

                    </div>
                </div>
            </div>

        </div>

    @endforeach



    @include('_partials.delete-modal')

@endsection


@section('inline-js')
    <script>
        function delete_item(url) {
            $('#deleteItemForm').attr('action', url)
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

@stop
