@extends("layouts.upload_pdf")

@section("form")
<div class="px-2 w-100 d-flex justify-content-center">
    <button type="submit" id="formSubmit" form="myDropzone" class="btn dropzone-outliner dropzone-outliner-{{$color}} w-100">
        <div id="submit">
            Convert
            <i class="fas fa-arrow-right"></i>
        </div>
        <div id="loading-gif" class="loading-{{$color}}">
            {!! file_get_contents('img/loading.svg') !!}
        </div>
    </button>
</div>
@endsection