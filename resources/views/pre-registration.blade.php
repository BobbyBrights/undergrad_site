@extends('layouts.frame')

@section('styles')
  <style>
    .header {
      background-image: url("{{URL::asset('/pictures/preregimg.jpg')}}");
      height: 70vh;
      background-position: center center;
      display: block;
      background-repeat: no-repeat;
      background-size: cover;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      z-index: -1111;
    }

    #title{
      font-family: SharpGroteskItalic;
      font-size: calc(2em + (95 - 28)*((100vw - 300px) / (1600 - 300)));
      padding-top: 20vh;
      color: #394FE6;
      text-align: center;
    }

    #subtitle{
      font-family: SharpGroteskMedium;
      font-size: calc(0.8em + (33 - 10)*((100vw - 300px) / (1600 - 300)));
      color: #394FE6;
      text-align: center;
    }

    #signup{
      font-family: SharpGroteskMedium;
      font-size: calc(1.2em + (50 - 16)*((100vw - 300px) / (1600 - 300)));
      margin-bottom: 2vh;
    }

    .container>.row{
      margin-top: 4vh;
      padding-top: 1em;
      border-top: 0.5em solid black;
      margin-bottom: 4vh;
    }

    label{
      font-family: CircularMedium;
      font-size: 1.2em;
    }

    input[type="text"], input[type="email"]{
      background-color: #EBFEFE;
      border: 0;
      border-radius: 0;
      border-bottom: 1px solid black;
      box-shadow: unset;
    }

    button[type="submit"]{
      float: right;
      border: 0.3em solid black;
      border-radius: 0;
      background-color: #EBFEFE;
      font-family: CircularMedium;
      font-size: 1.2em;
      margin-top: 1vh;
      padding-right: 3vw;
      padding-left: 3vw
    }

    .form-check-label{
      display: inline;
    }
  </style>
@endsection

@section('content')
  <div class="header">
    <p id="title">PRE-REGISTRATION NOW LIVE</p>
    <p id="subtitle">Event programme, part time work, accommodation and more.<br>Stay connected.</p>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-7 col-sm-12" id="signup">
        Sign-up for the latest updates on freshers 2019!
      </div>
      <form class="col-md-5 col-sm-12" method="POST" action="/registered">
        @if($fail)
          <div style="color:red">
            The email, phone or instagram username is already in use!
          </div>
        @endif
        @csrf
        <div class="form-group">
          <label for="uniCourse">University and course*</label>
          <input type="text" class="form-control" id="uniCourse" name="uniCourse" maxlength="128" required>
        </div>
        <div class="form-group">
          <label for="name">Full name*</label>
          <input type="text" class="form-control" id="name" name="name" max="128" required>
        </div>
        <div class="form-group">
          <label for="phone">Mobile number*</label>
          <input type="text" class="form-control" id="phone" name="phone" pattern="^[\d+]{5,16}" required>
        </div>
        <div class="form-group">
          <label for="email">Email*</label>
          <input type="email" class="form-control" id="email" name="email" maxlength="128" required>
        </div>
        <div class="form-group">
          <label for="igUsername">Instagram username*</label>
          <input type="text" class="form-control" id="igUsername" name="igUsername" maxlength="30" required>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="1" id="informCheck" name="informCheck" required>
          <label class="form-check-label" for="informCheck">
            I'd like to be updated with the latest updates on events, accommodation and part-time work.
          </label>
        </div>
        <button class="btn" type="submit">Register</button>
      </form>
    </div>
  </div>
@endsection