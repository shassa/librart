@extends('admin.layout')
@section('content')

<div class="card-body">
    <form enctype="multipart/form-data" method="post" action="{{route('storebook')}}">
        @csrf
      <div class="input-group input-group-outline mb-3">
        <input type="text" class="form-control" name="title_ar" required placeholder="Arabic Title">
      </div>
      <div class="input-group input-group-outline mb-3">
        <input type="text" class="form-control" name="title_en" required placeholder="English Title">
      </div>
      <div class="input-group input-group-outline mb-3">
        <textarea type="text" class="form-control" name="description_ar" placeholder="Arabic Description"></textarea>
      </div>
      <div class="input-group input-group-outline mb-3">
        <textarea type="text" class="form-control" name="description_en" required placeholder="English Description"></textarea>
      </div>
      <div class="input-group input-group-outline mb-3">
        <input type="text" class="form-control" name="author" required placeholder="Author">
      </div>
      <div class="input-group input-group-outline mb-3">
        <input  type="file" class="form-control" name="images[]" required placeholder="Images" multiple>
      </div>
      
      <div class="text-center">
        <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Add Book</button>
      </div>
    </form>
  </div>


@endsection
