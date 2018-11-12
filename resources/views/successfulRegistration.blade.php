@extends('layouts.frame')

@section('styles')
  <style>
    .header {
      background-image: url("{{URL::asset('/pictures/registeredIMG.jpg')}}");
      height: 97vh;
      background-position: center center;
      display: block;
      background-repeat: no-repeat;
      background-size: cover;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      z-index: -1111;
    }

    #title {
      font-family: SharpGroteskItalic;
      font-size: calc(3em + (110 - 40) * ((100vw - 300px) / (1600 - 300)));
      padding-top: 20vh;
      color: #394FE6;
      text-align: center;
    }
  </style>
@endsection

@section('content')
  <div class="header">
    <p id="title">YOU ARE REGISTERED</p>
  </div>
@endsection