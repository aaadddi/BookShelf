@extends('layout')
@section('homebtn')
<a href="account" title="Home"><button class="homebtn"><img src="img/left-arrow.png" alt=""></button></a>
@stop
@section('mainwindow')

<div class="formNameChange">
<form action="changePassword" method="POST">
@csrf    
<span>
        Enter current Password
    </span>
        <input type="password" name="oldPassword" required>
        <span>
        Enter new Password
    </span>
        <input type="password" name="newPassword" required>
        
        <button>Change Password</button>
        
</form>
</div>
@stop