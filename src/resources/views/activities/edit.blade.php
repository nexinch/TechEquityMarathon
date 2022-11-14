@extends('layouts.admin')
@section('name', 'Activities')
@section('nav')
   Edit Activity
@endsection
@section('content')
<div class="col-12 text-center">
        <h3 class="title">{{ 'Edit '. $activity->title }}</h3>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        @endif
    </div>
<form action="{{ route('activity.update',$activity->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="row">
        .
        <div class="col-md-6">
            <div class="form-group bmd-form-group">
                <label for="title" class="bmd-label-floating">Title</label>
                <input type="text" class="form-control" value="{{ $activity->title }}" name="title" required id="title">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group bmd-form-group">
                <label for="goal" class="bmd-label-floating">Gaol </label>
                <input type="number" class="form-control" value="{{ $activity->goal }}" name="goal" required id="goal">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group bmd-form-group">
                <label for="raised" class="bmd-label-floating">Money Raised So Far</label>
                <input type="number" class="form-control" value="{{ $activity->raised }}" name="raised" required id="raised">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group bmd-form-group">
                <label for="percentage" class="bmd-label-floating">Percentage Raised So Far</label>
                <input type="number" class="form-control" value="{{ $activity->percentage }}" name="percentage" required id="percentage">
            </div>
        </div>
        <div class="col-md-9">
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" cols="30" rows="12" class="form-control" id="editor" required placeholder='Enter description'>{{$activity->description}}</textarea>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <h4>Regular Image</h4>
            <div class="fileinput text-center fileinput-new" data-provides="fileinput">
              <div class="fileinput-new thumbnail img-raised">
                    @if (empty($activity->image))
                        <img src="{{ asset('assets/img/image_placeholder.jpg') }}" alt="...">
                    @else
                        <img src="{{ asset('storage/'.$activity->image) }}" alt="..." style="width:100%; object-fit:cover">                            
                    @endif 
                </div>
              <div class="fileinput-preview fileinput-exists thumbnail img-raised" style=""></div>
              <div>
                <span class="btn btn-raised btn-round btn-default btn-file">
                  <span class="fileinput-new">Select image</span>
                  <span class="fileinput-exists">Change</span>
                  <input type="hidden" value="">
                  <input type="file" name="image">
                <div class="ripple-container"></div></span>
                <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove<div class="ripple-container"><div class="ripple-decorator ripple-on ripple-out" style="left: 99.7813px; top: 17.3281px; background-color: rgb(255, 255, 255); transform: scale(14.418);"></div></div></a>
              </div>
            </div>
        </div>
        <div class="col-12 text-center">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </div>
</form>
@endsection