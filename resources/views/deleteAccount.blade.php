@extends('layout')
@section('homebtn')
<a href="account" title="Home"><button class="homebtn"><img src="img/left-arrow.png" alt=""></button></a>
@stop
@section('mainwindow')

<div class="formNameChange">
<form action="deleteAccount" method="POST">
@csrf    
<span>
        Type "YES" in caps to delete your account permanently
    </span>
        <input type="text" name="confirmDeleteAccount" required>
       
        
        <button>Delete Account</button>
        
</form>
</div>
@stop