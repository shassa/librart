@extends('admin.layout')
@section('content')

@if(!empty($successMsg))
  <div class="alert alert-success"> {{ $successMsg }}</div>
@endif


<a class="btn btn primary" href="{{route('addbook')}}">Add Book</a>
<div class="card-body px-0 pb-2">
    <div class="table-responsive">
      <table class="table align-items-center mb-0">
        <thead>
          <tr>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Book</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">User</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">State</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
 
          </tr>
        </thead>
        <tbody >
         @foreach ($orders as $item)
             
          <tr>
            <td>
              <div class="d-flex px-2 py-1">
               
                <div class="d-flex flex-column justify-content-center">
                  <h2 class="mb-0 text-sm">{{$item->book_id}}</h2>
                </div>
              </div>
            </td>
          
            <td class="align-middle text-center text-sm">
              <div class="d-flex flex-column justify-content-center">
                <h2 class="mb-0 text-sm">{{$item->user_id}}</h2>
              </div>       
                 </td>
            <td class="align-middle">
              <div class="d-flex flex-column justify-content-center">
                <h2 class="mb-0 text-sm ">{{$item->accept}}</h2>

                </div>
            </td>
            <td class="align-middle">
              <div class="d-flex flex-column justify-content-center">
               <a href="{{route('accept',$item->id)}}" class="btn btn primary">accept</a>
                </div>
            </td>
          </tr>
          @endforeach


        </tbody>
      </table>
    </div>
  </div>

@endsection
