@extends('layouts.master')
@section('content')

@section('content')   
  <style>
    .box h1 {
    font-family:Comic Sans MS, cursive, sans-serif;
    color:#00d5e0;
    background-color:blue;
    border:7px solid black;
    text-align:center;
    margin-left:40%;
    margin-right:40%;
    padding-top:10px;
    padding-bottom:10px;
    text-decoration:none;
  }
  .d10 p {
    margin-left:35%;
  }
  table, tr, th {
    width:20%;
    margin-left:28%;
    padding-top:20px;
    padding-left:3px;
  }
  .table-d10, tr, th a {
    padding-left:7px;
  }
  
  </style>   
       <!-- <section class="content-header">
          <h1>
            {{$PageTitle or "IDS"}}
            <small>{{$PageText or ""}}</small>
          </h1>
        </section>

         Main content -->
  <div class="box">
        <h1>
            D10 TRACON Menu
        </h1>
   </div>

   <div class="d10">
   <p>Graphics Menu</p>
 </div>
 <table class="d10">
  <tr>
    <th><a href="ids/dfw-south">DFW South Apch Menu</a></th>
    <th><a href="ids/dfw-north">DFW North Apch Menu</a></th>
  </tr>
  <tr>
   <th><a href="ids/d10wsat">W-Satellite Apch Menu</a></th>
    <th><a href="ids/d10esat">E-Satellite Apch Menu</a></th>
  </tr>
  <tr>
    <th><a href="ids/d10dep">Departures</a></th>
    <th><a href="ids/d10stars">STARS</a></th>
  </tr>
  <tr>
    <th><a href="ids/d10weather">Weather</a></th>
    <th><a href="d10-tracon-menu/whats-my-airspace.html">What's My Airspace</a></th>
  </tr>
  <tr>
    <th><a href="d10-tracon-menu/touch-screen.html">Touch Screen</a></th>
    <th><a href="d10-tracon-menu/stars-ref.html">STARS Quick Ref.</a></th>
  </tr> 
 </table>
@stop
