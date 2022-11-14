@extends('layouts.admin')

@section('name', 'Events')

@section('nav')
    Events
@endsection

@section('content')
<div class="text-danger">
    @if($errors->any())
        @foreach($errors->all() as $error)
            {{$error}}
        @endforeach
    @endif
</div>
<form action="{{ route('event.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="form-group bmd-form-group">
                <label for="title" class="bmd-label-floating">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" name="title" required id="title">
            </div>
            @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="topic" class="bmd-label-floating">Topic</label>
                <input type="text" class="form-control @error('topic') is-invalid @enderror" value="{{ old('topic') }}" name="topic" id="topic" required>
                @error('topic')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="host" class="bmd-label-floating">Host</label>
                <input type="text" class="form-control @error('host') is-invalid @enderror" value="{{ old('host') }}" name="host" id="host" required>
                @error('host')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="venue" class="bmd-label-floating">Venue</label>
                <input type="text" class="form-control @error('venue') is-invalid @enderror" value="{{ old('venue') }}" name="venue" id="venue" required>
                @error('venue')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="startdate" class="bmd-label-foating">Start Date</label>
                <input type="date" class="form-control @error('startdate') is-invalid @enderror" value="{{ old('startdate') }}" name="startdate" id="startdate" required>
                @error('startdate')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="enddate" class="bmd-label-foating">End Date</label>
                <input type="date" class="form-control @error('enddate') is-invalid @enderror" value="{{ old('enddate') }}" name="enddate" id="enddate" required>
                @error('enddate')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="time" class="bmd-label-foating">Time</label>
                <input type="time" class="form-control @error('time') is-invalid @enderror" value="{{ old('time') }}" name="time" id="time" required>
                @error('time')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-12 col-md-6">
            <h4 class="pl-4">Regular Image</h4>
            <div class="fileinput text-center fileinput-new" data-provides="fileinput">
              <div class="fileinput-new thumbnail img-raised">
                <img src="{{ asset('assets/images/image_placeholder.jpg') }}" alt="..." style="width:50%">
              </div>
              <div class="fileinput-preview fileinput-exists thumbnail img-raised" style=""></div>
              <div>
                <span class="btn btn-raised btn-round btn-default btn-file">
                  <span class="fileinput-new">Select image</span>
                  <span class="fileinput-exists">Change</span>
                  <input type="hidden" value="">
                  <input type="file" class="@error('image') is-invalid @enderror" value="{{ old('image') }}" name="image">
                <div class="ripple-container"></div></span>
                <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove<div class="ripple-container"><div class="ripple-decorator ripple-on ripple-out" style="left: 99.7813px; top: 17.3281px; background-color: rgb(255, 255, 255); transform: scale(14.418);"></div></div></a>
              </div>
            </div>
            @error('image')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        {{-- <div class="col-12">
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea rows="5" class="form-control @error('description') is-invalid @enderror" name="description" id="description" placeholder="Description">{{ old('description') }}</textarea>
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
        </div> --}}
        <div class="col-md-12">
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" cols="30" rows="7" class="form-control @error('description') is-invalid @enderror" value="{{ old('description') }}" id="editor" required placeholder='Enter description' id="description" placeholder="Description">{{ Request::old('description') }}</textarea>
            </div>
            @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
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