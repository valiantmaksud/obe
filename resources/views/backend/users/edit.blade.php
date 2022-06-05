@extends('master')

@section('title', 'User Setup')

@section('page-header')
    <i class="fa fa-plus-circle"></i> User Setup
@stop



@section('main-content')

    <div class="row">
        <div class="col-md-12">

            <div class="widget-box">


                <!-- header -->
                <div class="widget-header">
                    <h4 class="widget-title"> @yield('page-header')</h4>
                    <span class="widget-toolbar">
                        <a href="{{ route('users.index') }}" class="">
                            <i class="fa fa-list-alt"></i> User List
                        </a>
                    </span>
                </div>



                <!-- body -->
                <div class="widget-body">
                    <div class="widget-main">



                        <form method="POST" action="{{ route('users.update', $user->userid) }}" class="form-horizontal"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')



                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3" for="product_name">
                                    User name<sup class="text-danger">*</sup> :
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <input class="form-control" type="text" name="username" autocomplete="off"
                                        value="{{ old('username', $user->username) }}" placeholder="username" required />
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3" for="product_name">
                                    User ID<sup class="text-danger">*</sup> :
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <input class="form-control" type="text" name="userid" autocomplete="off" value="{{ old('userid', $user->userid) }}"
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
                                    <select name="usertype" class="chosen-select form-control" data-placeholder="--Type--"
                                        required>
                                        <option value=""></option>
                                        @foreach ($types as $type)
                                            <option value="{{ $type }}"
                                                {{ old('usertype', $user->usertype) == $type ? 'selected' : '' }}>
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
                                    <select name="userrole" class="chosen-select form-control" data-placeholder="--Role--"
                                        required>
                                        <option value=""></option>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role }}"
                                                {{ old('userrole', $user->userrole) == $role ? 'selected' : '' }}>
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
                                    <input type="text" name="email" class="form-control" autocomplete="off"
                                        value="{{ old('email', $user->email) }}" placeholder="email" required>
                                </div>
                            </div>




                            <div class="form-group">
                                <label class="control-label col-sm-3 col-sm-3">
                                    Dept Code<sup class="text-danger">*</sup>:
                                </label>
                                <div class="col-md-5 col-sm-5">
                                    <select name="deptcode" class="form-control chosen-select" data-selected="{{ $user->deptcode }}" required>
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
                                    <select name="institutecode" class="form-control chosen-select" data-selected="{{ $user->institutecode }}" required>
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
                                    <select name="status_02" class="chosen-select form-control" data-placeholder="--Type--"
                                        required>
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
                                        <i class="fa fa-save"></i> Update
                                    </button>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('inline-js')


@endsection
