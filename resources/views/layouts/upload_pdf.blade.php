@extends('layouts.app')

@section('scripts')
<script defer>
    localStorage.setItem("accepted_files", "{{$accepted_files}}");
</script>
<script src="{{ asset('js/upload_pdf.js') }}" defer></script>
@endsection

@section('style')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
<link href="{{ asset('css/forms.css') }}" rel="stylesheet">
<link href="{{ asset('css/dropzone_colors.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="dropzone-container dropzone-container-{{$color}} w-100 p-3">
            <form method="POST" action="{{route($form_action)}}" id="myDropzone" class="dropzone w-100 dropzone-{{$color}}" id="file-uploader" enctype="multipart/form-data">
                @csrf
                <div class="d-flex justify-content-center w-100">
                    <i class="far fa-3x fa-file-pdf"></i>
                </div>
                {{-- <div class="fallback" style="display:none">
                    <input name="file" type="file" />
                </div> --}}
            </form>
        </div>
        <div id="additionaFormData" class="d-flex justify-content-center w-100 mt-2">
            @yield("form")
        </div>
    </div>
</div>
@endsection
