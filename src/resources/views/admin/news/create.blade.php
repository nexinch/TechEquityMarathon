@extends('layouts.admin')

@section('title', 'Create News Article')
    
@section('name', 'Create News Article')

@section('nav', 'Dashboard / Create News Article')

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endsection

@section('content')

<div class="row">
    <div class="card col-12">
        <form action="{{ route('news.store') }}" method="post" class="p-4" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" aria-describedby="title" placeholder="News Headline">
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea rows="5" class="form-control @error('description') is-invalid @enderror" name="description" id="description" placeholder="Description">{{ old('description') }}</textarea>
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="form-group d-flex flex-column">
                        <label for="image">Featured Image</label>
                        <input type="file" class="@error('image') is-invalid @enderror" name="image" id="image">
                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary btn-round">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
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
