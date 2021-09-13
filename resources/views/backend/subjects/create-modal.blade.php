<!-- Modal -->
<div id="createModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue bigger"><i class="fa fa-plus-circle"></i> Add New District </h4>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <form action="{{ route('subjects.store') }}" method="post" class="form-horizontal">
                            @csrf
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-field-1-1"> Subject Name </label>

                                <div class="col-xs-12 col-sm-8 @error('name') has-error @enderror">
                                    <input type="text" class="form-control" name="name"
                                           value="{{ old('name') }}" placeholder="Subject Name" autocomplete="off">
                                    @error('name')
                                    <span class="text-danger">
                                         {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-field-1-1"> Subject Code </label>

                                <div class="col-xs-12 col-sm-8 @error('name') has-error @enderror">
                                    <input type="text" class="form-control" name="code"
                                           value="{{ old('code') }}" placeholder="Subject Name" autocomplete="off">
                                    @error('code')
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
