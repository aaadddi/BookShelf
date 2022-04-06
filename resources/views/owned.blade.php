<style>
   h1{
      margin:auto;
      color:#ff4f5a;
      text-align:center;
   }
</style>
@extends('layout')
@section('homebtn')
<a href="home" title="Home"><button class="homebtn"><img src="img/left-arrow.png" alt=""></button></a>
@stop
@section('mainwindow')
<div>
   <h1>Owned Books</h1> 
@foreach($cardDatas as $cardData) 
@if($cardData['email'] == session('loggedInId'))

<x-owned-card bookid="{{$cardData['book_id']}}"/>
@endif
@endforeach

</div>
@stop