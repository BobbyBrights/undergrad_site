@extends('layouts.frame')

@section('styles')
<style>
  .header {
    background-image: url('{{ URL::asset('pictures/HomeIMG.jpg') }}');
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    z-index: -1111;
    display: block;
    height: 70vh;
  }

  .jumbotron{
    background-color: #394FE6;
    color: white;
    margin-top: -20vh;
  }

  .container .jumbotron{
    border-radius: 0;
  }

  .jumbotron p{
    font-size: calc(1.6em + (40 - 25)*((100vw - 300px) / (1600 - 300)));
    font-family: SharpGroteskMedium;
    cursor: pointer;
  }

  .jumbotron p>span:hover{
    position: relative;
    top: -2vh;
    padding-bottom: 2vh;
  }

  .header>p{
    font-family: SharpGroteskItalic;
    font-size: calc(4em + (126 - 56)*((100vw - 300px) / (1600 - 300)));
    padding-top: 10vh;
    padding-left: 10vw;
    color: #332B61;
  }

  .half-border {
    border-bottom:0.1em solid white;
    position: relative;
    padding-bottom: 15px;
  }
  .half-border:after {
    padding:0;margin:0;display:block;/* probably not really needed? */
    content: "";
    width:50%;
    height:0.35em;
    background-color:#394FE6;
    position: absolute;
    right:0;
    bottom:-0.3em;
  }
</style>
@endsection
@section('content')
  <div class="header">
    <p>WELCOME <br>2019</p>
  </div>
  <div class="container">
    <div class="jumbotron">
      <div class="row">
        <div class="col-md-4 col-sm-12">
          <p class="half-border"><span>Choose your <br>future <br>University city</span></p>
        </div>
        <div class="col-md-4 col-sm-12">
          <p class="half-border"><span>Buy tickets <br>and <br>wristbands</span></p>
        </div>
        <div class="col-md-4 col-sm-12">
          <p class="half-border"><span>See the festival <br>events <br>programme</span></p>
        </div>
      </div>
    </div>
  </div>
@endsection