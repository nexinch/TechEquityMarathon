@extends('layouts.admin')

@section('title', 'Create Gallery')

@section('content')
    <div class="row">
        <div class="card col-12">
            <form action="{{ route('gallery.store') }}" method="post" class="p-4" enctype="multipart/form-data" files="false">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" aria-describedby="title" placeholder="title">
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group d-flex flex-column">
                            <label for="image">Image</label>
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
