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
        <div >
            {{$name}}
        </div>
        @switch($color)
            @case("red")
                @php 
                $dropzone_style = "dropzone-1"; 
                $drop_container_style = "dropzone-container-1";
                @endphp
                @break

            @case("orange")
                @php 
                $dropzone_style = "dropzone-2"; 
                $drop_container_style = "dropzone-container-2";
                @endphp
                @break

            @case("yellow")
                @php 
                $dropzone_style = "dropzone-3"; 
                $drop_container_style = "dropzone-container-3";
                @endphp
                @break
        @endswitch
        <div class="dropzone-container {{$drop_container_style}} w-100 p-3">
            <form action="{{route($form_action)}}" class="dropzone w-100 {{$dropzone_style}}" id="file-uploader">
                <div class="d-flex justify-content-center w-100">
                    <i class="far fa-3x fa-file-pdf"></i>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
