@extends('layout')
@section('homebtn')
<a href="account" title="Home"><button class="homebtn"><img src="img/left-arrow.png" alt=""></button></a>
@stop
@section('mainwindow')
@section('mainwindow')
<div class="formNameChange">
<form action="changeName" method="POST">
@csrf    
<span>
        Enter new name:
    </span>
        <input type="text" name="newName" required>
        @error('newName')
            <span style="color:red" style="size=1em">Name not valid</span>
            <br>
            @enderror
        <button>Change Name</button>
</form>
</div>
@stop