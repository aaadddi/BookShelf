<style>
    .homebtn{
        height:2em;
        width:2em;
        background-color:white;
        border-radius:20px;
        padding:4px 4px;
        border:1px solid white;
        cursor:pointer;
        margin:2em 4em;
        transition:all 0.1s ease-in-out; 

    }
    .homebtn:hover{
        background-color:#ff4f5a;
        border : 1px solid red;
        
    }
   
    .homebtn>img{
        height:100%;
        width:100%;
    }
    .container{
        width:70%;
        margin:auto;
        display:flex;
        flex-direction:column;
        /* border:1px solid #ff4f5a; */
    }
    .conatiner>a{
        width:100%;
        height:2rem;
       
    }
    .container>a>button{
        cursor:pointer;
        width:95%;
        color:#ff4f5a;
        text-align:left;
        background:transparent;
        padding:6px 20px;
        border: 0.1px solid #ff4f5a;
        margin:2px 0;
        transition:all 0.1s ease-in-out;
    }
    .container>a>button:hover{
        width:100%;
        background-color:#ff4f5a;
        color:white;
    }
 
    #logbtn>button{
        color:white;
        background-color:#ff4f5a;
        margin-top:20px;
        
    }
</style>
@extends('layout')
@section('homebtn')
<a href="home" title="Home"><button class="homebtn"><img src="img/left-arrow.png" alt=""></button></a>
@stop
@section('mainwindow')
@if(session('loggedIn'))
<div class="container">
    <a href=""><button>Empty Wishlist</button></a>
    <a href=""><button>Change Name</button></a>
    <a href=""><button>Change Password</button></a>
    <a href=""><button>Delete your account</button></a>
    <a href="logout" id="logbtn"><button>Logout</button></a>
</div>
@else 
    <div class="container">
        <a href="loginPage" id="logbtn"><button>Login</button></a>
    </div>

@endif
@stop