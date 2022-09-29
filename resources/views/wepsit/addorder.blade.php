@extends('wepsit.layout')
@section('content')

<div class="card-body">
    <form  method="post" action="{{route('order')}}">
        @csrf
      <div class="input-group input-group-outline mb-3">
        <input type="text" class="form-control" name="book_id" required placeholder="book_id">
      </div>
      <div class="input-group input-group-outline mb-3">
        <input type="text" class="form-control" name="user_id" required placeholder="user_id">
      </div>
      
      <div class="text-center">
        <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Add Book</button>
      </div>
    </form>
  </div>


@endsection
