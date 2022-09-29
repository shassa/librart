@extends('wepsit.layout')
@section('content')
<div class="card-body px-0 pb-2">
  <div class="table-responsive">
    <table class="table align-items-center mb-0">
      <thead>
        <tr>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Title</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Describtion</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Images</th>
        </tr>
      </thead>
      <tbody >
       @foreach ($books as $item)
           
        <tr>
          <td>
            <div class="d-flex px-2 py-1">
             
              <div class="d-flex flex-column justify-content-center">
                <h2 class="mb-0 text-sm">@if($lang=='ar'){{$item->title_ar}}@else{{$item->title_en}}@endif</h2>
              </div>
            </div>
          </td>
          <td>
            <div class="avatar-group mt-2">
              <div class="d-flex flex-column justify-content-center">
                <h2 class="mb-0 text-sm">@if($lang=='ar'){{$item->description_ar}}@else{{$item->description_en}}@endif</h2>
              </div>
            </div>
          </td>
          <td class="align-middle text-center text-sm">
            <div class="d-flex flex-column justify-content-center">
              <h2 class="mb-0 text-sm">{{$item->author}}</h2>
            </div>            </td>
         
          <td class="align-left">
              <div class="progress-wrapper w-75 mx-auto">
                <div class="progress-info">
                  <div class="d-flex flex-column justify-content-center">
                    <a href={{route('images',$item->id)}}> <i class="material-icons opacity-10 ">view_in_ar</i>
                    </a>
                  </div>
                </div>
              </div>
            </td>
        </tr>
        @endforeach


      </tbody>
    </table>
  </div>
</div>

@endsection
