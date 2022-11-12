@extends('layouts.admin')

@section('name', 'Activities')

@section('nav')
   Create Activity
@endsection

@section('content')
<div class="text-danger">
    @if($errors->any())
        @foreach($errors->all() as $error)
            {{$error}}
        @endforeach
    @endif
</div>
<form action="{{ route('activity.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group bmd-form-group">
                <label for="title" class="bmd-label-floating">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" name="title" required id="title">
                @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group bmd-form-group">
                <label for="goal" class="bmd-label-floating">Goal</label>
                <input type="number" class="form-control @error('goal') is-invalid @enderror" value="{{ old('goal') }}" name="goal" required id="goal">
                @error('goal')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                 @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group bmd-form-group">
                <label for="raised" class="bmd-label-floating">Money Raised Already</label>
                <input type="number" class="form-control @error('raised') is-invalid @enderror" value="{{ old('raised') }}" name="raised" required id="raised">
                @error('raised')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group bmd-form-group">
                <label for="percentage" class="bmd-label-floating">Percentage So Far</label>
                <input type="number" class="form-control @error('percentage') is-invalid @enderror" value="{{ old('percentage') }}" name="percentage" required id="percentage">
                @error('percentage')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
        </div>
        <div class="col-md-8">
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" cols="30" rows="12" class="form-control @error('description') is-invalid @enderror" id="editor" required placeholder='Enter description' id="description" placeholder="Description">{{ Request::old('description') }}</textarea>
                @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
        </div>
        <div class="col-12 col-md-3">
            <h4 class="">Regular Image</h4>
            <div class="fileinput  fileinput-new" data-provides="fileinput">
              <div class="fileinput-new thumbnail img-raised">
                <img src="{{ asset('assets/images/image_placeholder.jpg') }}" alt="osuder" style="width:100%">
              </div>
              <div class="fileinput-preview fileinput-exists thumbnail img-raised" style=""></div>
              <div>
                <span class="btn btn-raised btn-round btn-default btn-file">
                  <span class="fileinput-new">Select image</span><br>
                  {{-- <span class="fileinput-exists">Change</span> --}}
                  <input type="hidden" value="">
                  <input type="file" class= "@error('title') is-invalid @enderror" value="{{ old('title') }}" name="image">
                {{-- <div class="ripple-container"></div></span> --}}
                <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove<div class="ripple-container"><div class="ripple-decorator ripple-on ripple-out" style="left: 99.7813px; top: 17.3281px; background-color: rgb(255, 255, 255); transform: scale(14.418);"></div></div></a>
              </div>
              @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
             @enderror
            </div>
        </div>
        <div class="col-12 text-center">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </div>
</form>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
      $('#description').summernote({
        placeholder: 'Description',
        tabsize: 4,
        height: 200,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'help']]
        ]
      });
    </script>

@endsection