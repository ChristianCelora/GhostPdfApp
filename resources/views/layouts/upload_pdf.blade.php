@extends('layouts.app')

@section('scripts')
<script src="{{ asset('js/upload_pdf.js') }}" defer></script>
@endsection

@section('style')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
<link href="{{ asset('css/forms.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @switch($color)
            @case("red")
                @php 
                $dropzone_style = "dropzone-red"; 
                $drop_container_style = "dropzone-container-red";
                @endphp
                @break

            @case("orange")
                @php 
                $dropzone_style = "dropzone-orange"; 
                $drop_container_style = "dropzone-container-orange";
                @endphp
                @break

            @case("yellow")
                @php 
                $dropzone_style = "dropzone-yellow"; 
                $drop_container_style = "dropzone-container-yellow";
                @endphp
                @break
        @endswitch
        <div class="dropzone-container {{$drop_container_style}} w-100 p-3">
            <form method="POST" action="{{route($form_action)}}" id="myDropzone" class="dropzone w-100 {{$dropzone_style}}" id="file-uploader" enctype="multipart/form-data">
                @csrf
                <div class="d-flex justify-content-center w-100">
                    <i class="far fa-3x fa-file-pdf"></i>
                </div>
                {{-- <div class="fallback" style="display:none">
                    <input name="file" type="file" />
                </div> --}}
            </form>
        </div>
        @yield("form")
    </div>
</div>
@endsection
