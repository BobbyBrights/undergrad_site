<html>
<head>
  <title>Undergraduate Group</title>
  <link rel="shortcut icon" href="{{URL::asset('/pictures/Logo.png')}}" >

  <meta name="viewport" content="width=device-width, initial-scale=1"/>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- fontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- jquery -->
  <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>

  <!-- Latest compiled and minified JavaScript for Bootstraps -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
          integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
          crossorigin="anonymous"></script>

  <link rel="stylesheet" href="{{ URL::asset('/css/frame.css') }}">
  @yield('styles')

</head>
<body>
<!-- sidebar -->
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn">&times;</a>
  <a href="{{url('/')}}">homepage</a>
  <a href="{{url('pre-registration')}}">pre-registration</a>
</div>

<!-- navbar -->
<nav class="navbar navbar-fixed-top">
  <div class="container">
    <a href="{{url('/')}}"><img class="nav-link" src="{{URL::asset('/svg/Logo.svg')}}" width="96" height="96"/></a>
    <i class="fa fa-bars nav-link navbar-right button"></i>
  </div>
</nav>

<div>
  @yield('content')
</div>

<footer>
  &copy; The Undergrad Group. All rights reserved.
</footer>
<script>
    /* Open the sidenav */
    $(".fa-bars").click(function () {
        $("#mySidenav").css("width", "300px");
    });

    /* Close/hide the sidenav */
    $(".closebtn").click(function () {
        $("#mySidenav").css("width", "0");
    });
</script>
</body>
</html>