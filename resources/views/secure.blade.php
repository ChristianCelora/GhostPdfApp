@extends("layouts.upload_pdf")

@section("form")
<div class="w-50 d-flex">
    <div class="form-control h-auto">
        <div class="d-flex justify-content-center">
            <div class="col-4">
                <label>Password:</label>
            </div>
            <div class="col-6 offset-2">
                <input type="password" name="password" class="ghost-text-input">
            </div>
        </div>
    </div>
</div>
<div class="px-2 w-50">
    <button type="submit" id="formSubmit" form="myDropzone" class="btn dropzone-outliner dropzone-outliner-{{$color}} w-100">
        <div id="submit">
            secure
            <i class="fas fa-arrow-right"></i>
        </div>
        <div id="loading-gif" class="loading-{{$color}}">
            {!! file_get_contents('img/loading.svg') !!}
        </div>
    </button>
</div>
@endsection