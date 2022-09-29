@extends('wepsit.layout')
@section('content')

<div id="content">
    <div> <span class="background"></span>
      <div class="section">
        <div>
          <ul class="row">
           @foreach($books as $item)
            <li class="m-2 d-inline col-5"> <a href="#" class="thumbnail">
               
                <div>
                    <span>{{$item->author}}</span>
                    <span>@if($lang=='ar'){{$item->title_ar}}@else{{$item->title_en}}@endif</span>
                    <p>@if($lang=='ar'){{$item->description_ar}}@else{{$item->description_en}}@endif</p> 
                </div>  
            <div >
                @foreach($item->images as $item)
                <img class="card-img-top" src="{{asset('image/'.$item)}}"  height="50px" alt="Card image cap">
            
                @endforeach             
              
            </div>
            
            </li>
          @endforeach
          </ul>
         
        </div>
      </div>
    </div>
  </div>


@endsection
