<div class="form-group">
    <label class="control-label col-sm-3 col-sm-3">
        Semester<sup class="text-danger">*</sup>:
    </label>
    <div class="col-md-5 col-sm-5">
        <select name="semister" class="form-control chosen-select" data-selected="{{ $value }}">
            <option></option>
            @foreach ($semisters as $semister)
                <option value="{{ $semister }}">{{ $semister }}</option>
            @endforeach
        </select>
    </div>
</div>