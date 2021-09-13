function addTrRow() {
    let tr = `
    <tr class="tr-row">
    <td>
        <div class="input-group">
            <span class="input-group-addon">
                UG02
            </span>
            <input type="text" name="student_ids[]" id="" class="form-control">
        </div>
    </td>
    <td>
        <input type="text" name="" id="" class="form-control">
    </td>
    <td>
        <input type="text" name="" id="" class="form-control">
    </td>
    <td>
        <input type="text" name="" id="" class="form-control">
    </td>
    <td>
        <input type="text" name="" id="" class="form-control">
    </td>
    <td>
        <input type="text" name="" id="" class="form-control">
    </td>
    <td>
        <input type="text" name="" id="" class="form-control">
    </td>
    <td>
        <input type="text" name="" id="" class="form-control">
    </td>
    <td>
        <input type="text" name="" id="" class="form-control">
    </td>
    <td>
        <input type="text" name="" id="" class="form-control">
    </td>
    <td>
        <div class="btn-corner btn-group">
            <button class="btn btn-xs btn-success" onclick="addTrRow()" type="button">
                <i class="fa fa-plus"></i>
            </button>
            <button class="btn btn-xs btn-danger" onclick="removeTr(this)" type="reset">
                <i class="fa fa-trash"></i>
            </button>
        </div>
    </td>
</tr>`;

$('#result-table tbody').append(tr)
}

$(document).ready(function(){
    // addTrRow();
})

function removeTr(object) {
    $(object).closest('.tr-row').remove();
}