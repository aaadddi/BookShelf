@extends('layout')
@section('homebtn')
<a href="account" title="Home"><button class="homebtn"><img src="img/left-arrow.png" alt=""></button></a>
@stop
@section('mainwindow')

<div class="formNameChange">
<form action="addAddress" method="POST">
@csrf   
@if(session("yourAddress"))
<span><b>Your Address</b></span>
    <span>{{session("yourAddress")}}</span>
@endif 
<span>
        Add or update your delivery address
    </span>
        <input type="text" name="addUpdateAddress" required>
       
        
        <button>Add/Update address</button>
        
</form>
</div>
@stop