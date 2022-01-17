<form method="POST" action="{{ route('students.store') }}" class="form-horizontal" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="file_upload" value="1">

    <div class="row">
        <div class="col-sm-12">


            <!-- file upload -->
            <div class="col-sm-8 col-sm-offset-2">
                <input type="file" class="form-control file-uploader" name="csv_file">
            </div>



            <!-- Action -->
            <div class="col-sm-8 col-sm-offset-2 text-right">
                <a href="{{ asset('csv/student_sample.csv') }}" download class="btn btn-primary btn-sm">
                    <span class="translate">
                        Download Sample
                    </span>
                    <i class="fa fa-download"></i>
                </a>
                <button class="btn btn-inverse btn-sm" type="submit">
                    <span class="translate">
                        Import Student
                    </span>
                    <i class="fa fa-upload"></i>
                </button>
            </div>
        </div>
    </div>
</form>
