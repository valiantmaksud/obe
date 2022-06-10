<div class="form-group">
    <label class="control-label col-sm-3 col-sm-3">
        Program code<sup class="text-danger">*</sup>:
    </label>
    <div class="col-md-5 col-sm-5">
        <select name="programcode" class="form-control chosen-select" data-selected="{{ $value }}">
            <option></option>
            @foreach ($programs as $code => $name)
                <option value="{{ $code }}">{{ $name }}</option>
            @endforeach
        </select>
    </div>
</div>