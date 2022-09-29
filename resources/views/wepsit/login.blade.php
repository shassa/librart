@extends('wepsit.layout')
@section('content')

@if(!empty($successMsg))
  <div class="alert alert-info"> {{ $successMsg }}</div>
@endif

<div id="content">
    <div> <span class="background"></span>
      <div class="section">
        <h3><span>Join Us</span></h3>
        <div>
          <p>This website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text. You can remove any link to our website from this website template, you're free to use this website template without linking back to us. If you're having problems editing this website template, then don't hesitate to ask for help on the Forum.</p>
          <form  method="post" action="{{route('Signin')}}">
            @csrf
            <table>
             <tr>
                <td>Email</td>
                <td><input type="email" name="email"></td>
              </tr>
              <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
              </tr>        
            </table>
             <button class="btn btn-primary" type="submit">log in </button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
