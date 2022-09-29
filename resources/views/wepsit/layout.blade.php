<!DOCTYPE html>
<html>
<head>
<title>Scrap Books</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{ asset('css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('css/material-dashboard.css?v=3.0.4')}}" rel="stylesheet" />
<!--[if IE 6]><link rel="stylesheet" type="text/css" href="styles/ie6.css"><![endif]-->
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">

</head>
<body>
<div id="header">
  <div class="section"> <span id="ribbon"></span> <span id="button"></span>
    <div>
      <div id="logo"><a href="index.html"><img src="{{ asset('img/logo.gif')}}" alt=""></a></div>
      <div id="navigation">
        <ul class="primary">
          <li class="current"><a href="index.html">Home</a></li>
          
          <li><a href="join-us.html">Join us</a></li>
        </ul>
        
      </div>
    </div>
  </div>
  
</div>
<div id="content">
  @yield('content')

  <div> <span class="background"></span>
    <div id="section">
      <div id="article">
        <h4>Aenean Vivera Hendrerit Felis, Et Cursus</h4>
        <ul>
          <li class="first">
            <h2><a href="#">This is just a place holder, so you can see what the site would look like.</a></h2>
            <p>This website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text.</p>
            <p>You can remove any link to our website from this website template, you're free to use this website template without linking back to us.</p>
            <div> <a href="#">Sept 21, by Nullam</a> <span class="separator">|</span> <a href="#">99 Views</a> <span class="separator">|</span> <a href="#">69 Comments</a> </div>
          </li>
          <li>
            <h2><a href="#">This is just a place holder, so you can see what the site would look like.</a></h2>
            <a href="#"><img src="images/img-03.jpg" alt=""></a>
            <p>If you're having problems editing this website template, then don't hesitate to ask for help on the Forum.</p>
            <div> <a href="#">Sept 21, by Nullam</a> <span class="separator">|</span> <a href="#">99 Views</a> <span class="separator">|</span> <a href="#">69 Comments</a> </div>
          </li>
        </ul>
      </div>
      <div id="news">
        <h4>Maecenas Norpien</h4>
        <ul>
          <li class="first">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div><a href="#">Sept 21, by Nullam</a></div>
          </li>
          <li>
            <p>Donec porttitor eros eget diam lobortis tincidunt.</p>
            <div><a href="#">Sept 21, by Nullam</a></div>
          </li>
          <li>
            <p>Pellentesque et libero a urna</p>
            <div><a href="#">Sept 21, by Nullam</a></div>
          </li>
          <li>
            <p>Aliquam erat volutpat. Maecenas risus mauris</p>
            <div><a href="#">Sept 21, by Nullam</a></div>
          </li>
        </ul>
      </div>
      <div id="contact">
        <h4>Get In Touch</h4>
        <p>Subscribe to our Newsletter</p>
        <form action="#">
          <input class="inputbox" type="text" name="name" value="Name" onClick="this.value='';" onFocus="this.select()" onBlur="this.value=!this.value?'Name':this.value;">
          <input class="inputbox" type="text" name="email" value="Enter Email Address" onClick="this.value='';" onFocus="this.select()" onBlur="this.value=!this.value?'Enter Email Address':this.value;">
          <input class="submit" type="submit" value="">
        </form>
        <table>
          <tr>
            <td>email</td>
            <td>:</td>
            <td>emailus@ouremail.com</td>
          </tr>
          <tr>
            <td>call</td>
            <td>:</td>
            <td>+ 693 928 000 143 000</td>
          </tr>
          <tr>
            <td>add</td>
            <td>:</td>
            <td>111 Lprem ipsum dolor sit amet consectetu 0000</td>
          </tr>
          <tr>
            <td>connect</td>
            <td>:</td>
            <td><a href="#" class="twitter">Twitter</a><a href="#" class="facebook">Facebook</a></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>
<div id="footer">
  <p>Copyright &copy; <a href="#">Domain Name</a> - All Rights Reserved | Template By <a target="_blank" href="http://www.freewebsitetemplates.com/">FreeWebsiteTemplates.com</a></p>
</div>
</body>
</html>
