@extends('admin.layout')
@section('content')

@foreach($images as $item)
    <img class="card-img-top" src="{{asset('image/'.$item)}}" width="200px" alt="Card image cap">

@endforeach
@endsection
