<style>
   h1{
      margin:auto;
      color:white;
      text-align:center;
   }
</style>
@extends('layout')
@section('homebtn')
<a href="home" title="Home"><button class="homebtn"><img src="img/left-arrow.png" alt=""></button></a>
@stop
@section('mainwindow')
<div>
    <h1>Your Cart</h1>
@foreach($cardDatas as $cardData) 
@if($cardData['email'] == session('loggedInId'))
<x-cart-card bookid="{{$cardData['book_id']}}"/>

@endif
@endforeach

</div>
@stop