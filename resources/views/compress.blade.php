@extends("layouts.upload_pdf")

@section("form")
<div class="d-flex justify-content-center w-100 mt-2">
    <div class="w-50">
        <select class="form-control" name="compression_type">
            <option value="0">Default</option>
            <option value="1">Max Compression</option>
        </select>
    </div>
    <div class="px-2 w-50">
        <button type="submit" id="formSubmit" form="myDropzone" class="btn dropzone-outliner dropzone-outliner-red w-100">
            compress
            <i class="fas fa-arrow-right"></i>
        </button>
    </div>
</div>
@endsection