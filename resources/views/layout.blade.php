<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/layout.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

</head>
<body>
    <div class="nav-bar">
        <a href="home"><h3>BookShelf</h3></a>
        <div class="btns">
            @if(session('displayName'))
            <a href="" id="welcomename">
                <h6>Welcome,</h6>
                <h5><u>{{session('displayName')}}</u></h5>

            </a>
            <a href="wishlistPage"><img src="img/heart.png" alt="" title="Wishlist"> </a>
            <a href="cartPage"><img src="img/scart.png" alt="" title="Your Cart"></a>
            <a href="ownedPage"><img src="img/shopping-bag.png" alt="" title="Books owned"></a>
            @endif
            <a href="account"><img src="img/account.png" alt="" title="Account"></a>
            
</div>
       
    </div>
    @yield('homebtn')
    @yield('mainwindow')
    
    
</body>
</html>