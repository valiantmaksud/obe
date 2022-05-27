<form method="POST" action="{{ route('users.store') }}" class="form-horizontal" enctype="multipart/form-data">
    @csrf




    <div class="form-group">
        <label class="control-label col-sm-3 col-sm-3" for="product_name">
            User name<sup class="text-danger">*</sup> :
        </label>
        <div class="col-md-5 col-sm-5">
            <input class="form-control" type="text" name="username" autocomplete="off" value="{{ old('username') }}"
                placeholder="username" required />
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3 col-sm-3" for="product_name">
            User ID<sup class="text-danger">*</sup> :
        </label>
        <div class="col-md-5 col-sm-5">
            <input class="form-control" type="text" name="userid" autocomplete="off" value="{{ old('userid') }}"
                placeholder="user id" required />
        </div>
    </div>




    <div class="form-group">
        <label class="control-label col-sm-3 col-sm-3">
            User Type<sup class="text-danger">*</sup>:
        </label>
        <div class="col-md-5 col-sm-5">
            @php
                $types = ['admin', 'examcontroller', 'deptadmin', 'teacher'];
            @endphp
            <select name="usertype" class="chosen-select form-control" data-placeholder="--Type--" required>
                <option value=""></option>
                @foreach ($types as $type)
                    <option value="{{ $type }}" {{ old('usertype') == $type ? 'selected' : '' }}>
                        {{ $type }}</option>
                @endforeach
            </select>

        </div>
    </div>




    <div class="form-group">
        <label class="control-label col-sm-3 col-sm-3">
            User role<sup class="text-danger">*</sup>:
        </label>
        <div class="col-md-5 col-sm-5">
            @php
                $roles = ['viewer', 'editor', 'creator'];
            @endphp
            <select name="userrole" class="chosen-select form-control" data-placeholder="--Role--" required>
                <option value=""></option>
                @foreach ($roles as $role)
                    <option value="{{ $role }}" {{ old('userrole') == $role ? 'selected' : '' }}>
                        {{ $role }}</option>
                @endforeach
            </select>

        </div>
    </div>




    <div class="form-group">
        <label class="control-label col-sm-3 col-sm-3">
            User Email<sup class="text-danger">*</sup>:
        </label>
        <div class="col-md-5 col-sm-5">
            <input type="text" name="email" class="form-control" autocomplete="off" value="{{ old('email') }}"
                placeholder="useremail" required>
        </div>
    </div>




    <div class="form-group">
        <label class="control-label col-sm-3 col-sm-3">
            Dept Code<sup class="text-danger">*</sup>:
        </label>
        <div class="col-md-5 col-sm-5">
            <select name="deptcode" class="form-control chosen-select">
                <option></option>
                @foreach ($depts as $code => $name)
                    <option value="{{ $code }}">{{ $name }}</option>
                @endforeach
            </select>
        </div>
    </div>



    <div class="form-group">
        <label class="control-label col-sm-3 col-sm-3">
            Institute code<sup class="text-danger">*</sup>:
        </label>
        <div class="col-md-5 col-sm-5">
            <select name="institutecode" class="form-control chosen-select">
                <option></option>
                @foreach ($inst as $code => $name)
                    <option value="{{ $code }}">{{ $name }}</option>
                @endforeach
            </select>
        </div>
    </div>




    <!-- Type  -->
    <div class="form-group">
        <label class="control-label col-sm-3 col-sm-3">
            Status<sup class="text-danger">*</sup>:
        </label>
        <div class="col-md-5 col-sm-5">
            <select name="status_02" class="chosen-select form-control" data-placeholder="--Type--" required>
                <option value=""></option>
                <option value=1 selected>Active</option>
                <option value=0>In Active</option>

            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3 col-sm-3">
            Password<sup class="text-danger">*</sup>:
        </label>
        <div class="col-md-5 col-sm-5">
            <input type="password" name="password" class="form-control" autocomplete="off"
                value="{{ old('password') }}" placeholder="password" required>
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
