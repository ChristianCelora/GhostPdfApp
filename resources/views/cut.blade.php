@extends("layouts.upload_pdf")

@section("form")
<div class="w-50 d-flex">
    <div class="form-control px-2" id="ranges-container">
        <div id="first-input-row" class="d-flex w-100 my-2">
            <div class="col-4 offset-1">
                <input class="ghost-text-input w-100 h-100" type="text" name="pages_from[]" placeholder="from"/>
            </div>
            <div class="col-4 mx-1">
                <input class="ghost-text-input w-100 h-100" type="text" name="pages_to[]" placeholder="to"/>
            </div>
            <div class="add-range col-2 mx-1 btn dropzone-outliner-{{$color}}" style="cursor: pointer">
                <i class="fas fa-plus"></i>
            </div>
        </div>
    </div>
</div>
<div class="px-2 w-50">
    <button type="submit" id="formSubmit" form="myDropzone" class="btn dropzone-outliner dropzone-outliner-{{$color}} w-100">
        <div id="submit">
            slim
            <i class="fas fa-arrow-right"></i>
        </div>
        <div id="loading-gif" class="loading-{{$color}}">
            {!! file_get_contents('img/loading.svg') !!}
        </div>
    </button>
</div>
@endsection