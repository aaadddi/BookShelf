@extends('layout')
@section('homebtn')
<a href="home" title="Home"><button class="homebtn"><img src="img/left-arrow.png" alt=""></button></a>
@stop
@section('mainwindow')
   <x-buy-card bookid={{$bookid}}/>
@stop