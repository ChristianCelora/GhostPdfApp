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
                @php $dropzone_style = "dropzone-1"; @endphp
                @break

            @case("orange")
                @php $dropzone_style = "dropzone-2"; @endphp
                @break

            @case("yellow")
                @php $dropzone_style = "dropzone-3"; @endphp
                @break
        @endswitch
        <form action="{{route($form_action)}}" class="dropzone w-100 {{$dropzone_style}}" id="file-uploader">
        </form>
    </div>
</div>
@endsection
