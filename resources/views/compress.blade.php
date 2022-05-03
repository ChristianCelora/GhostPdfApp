@extends("layouts.upload_pdf")

@section("form")
<div class="w-50">
    <select class="form-control" name="compression_type">
        <option value="0">Default</option>
        <option value="1">Max Compression (-50% size)</option>
    </select>
</div>
<div class="px-2 w-50 d-flex justify-content-center">
    <button type="submit" id="formSubmit" form="myDropzone" class="btn dropzone-outliner dropzone-outliner-red w-100">
        <div id="submit">
            compress
            <i class="fas fa-arrow-right"></i>
        </div>
        <div id="loading-gif" class="loading-{{$color}}">
            {!! file_get_contents('img/loading.svg') !!}
        </div>
    </button>
</div>
@endsection