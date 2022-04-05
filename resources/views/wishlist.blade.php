@extends('layout')
@section('homebtn')
<a href="home" title="Home"><button class="homebtn"><img src="img/left-arrow.png" alt=""></button></a>
@stop
@section('mainwindow')
<div>
    
@foreach($cardDatas as $cardData) 
@if($cardData['email'] == session('loggedInId'))
<x-wishlist-card bookid="{{$cardData['book_id']}}"/>
@endif
@endforeach

</div>
@stop