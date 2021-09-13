<div class="modal fade" id="delete-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="" id="deleteItemForm" method="POST">
                @csrf @method("DELETE")
                <!-- Modal Header -->
                <div class="modal-header" style="padding:5px 15px 5px 0px !important; ">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <h3 style="margin: 0;text-align: center;padding-bottom: 20px;">Are you sure, want to delete this
                        record</h3>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer text-right">
                    <div class="btn-group btn-corner">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Yes, Delete</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
