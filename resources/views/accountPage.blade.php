
@extends('layout')
@section('homebtn')
<a href="home" title="Home"><button class="homebtn"><img src="img/left-arrow.png" alt=""></button></a>
@stop
@section('mainwindow')
@if(session('loggedIn'))
<div class="container-A">
    <a href="addAddressPage"><button>Add address</button></a>
    <a href="changeNamePage"><button>Change Name</button></a>
    <a href="changePasswordPage"><button>Change Password</button></a>
    <a href="deleteAccountPage"><button>Delete your account</button></a>
    <a href="logout" id="logbtn"><button>Logout</button></a>
</div>
@else 
    <div class="container-A">
        <a href="loginPage" id="logbtn"><button>Login</button></a>
    </div>

@endif
@stop