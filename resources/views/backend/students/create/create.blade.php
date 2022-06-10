<form method="POST" action="{{ route('students.store') }}" class="form-horizontal" enctype="multipart/form-data">
    @csrf




    <div class="form-group">
        <label class="control-label col-sm-3 col-sm-3" for="product_name">
            Student name<sup class="text-danger">*</sup> :
        </label>
        <div class="col-md-5 col-sm-5">
            <input class="form-control" type="text" name="studentname" autocomplete="off"
                value="{{ old('studentname') }}" placeholder="studentname" required />
        </div>
    </div>




    <div class="form-group">
        <label class="control-label col-sm-3 col-sm-3">
            Student ID<sup class="text-danger">*</sup>:
        </label>
        <div class="col-md-5 col-sm-5">
            <input type="text" name="studentid" class="form-control" autocomplete="off"
                value="{{ old('studentid') }}" placeholder="studentid" required>
        </div>
    </div>




    <div class="form-group">
        <label class="control-label col-sm-3 col-sm-3">
            Batch
            <sup class="text-danger">*</sup>:
        </label>
        <div class="col-md-5 col-sm-5">
            <input type="text" name="batch" class="form-control" autocomplete="off" value="{{ old('batch') }}"
                placeholder="batch" required>
        </div>
    </div>


    <x-programcode-option />


    <x-deptcode-option />


    <x-instcode-option />



    <!-- Type  -->
    <div class="form-group">
        <label class="control-label col-sm-3 col-sm-3">
            Status<sup class="text-danger">*</sup>:
        </label>
        <div class="col-md-5 col-sm-5">
            <select name="status_07" class="chosen-select form-control" data-placeholder="--Type--" required>
                <option value=""></option>
                <option value=1 selected>Active</option>
                <option value=0>In Active</option>

            </select>
        </div>
    </div>



    <!-- Action -->
    <div class="form-group">
        <label class="control-label col-md-4 col-sm-4"></label>
        <div class="col-md-3 col-sm-3">
            <button type="submit" class="btn btn-primary col-md-12">
                <i class="fa fa-plus"></i> Add New
            </button>
        </div>
    </div>


</form>
