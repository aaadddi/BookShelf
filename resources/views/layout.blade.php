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
        <h3>BookShelf</h3>
        <div class="btns">
            
            <a href="wishlist"><img src="img/heart.png" alt="" title="Wishlist">
        
        </a>
            <a href="cart"><img src="img/scart.png" alt="" title="Your Cart"></a>
            <a href="owned"><img src="img/shopping-bag.png" alt="" title="Books owned"></a>
            <a href="account"><img src="img/account.png" alt="" title="Account"></a>
            
        </div>
       
    </div>
    @yield('homebtn')
    @yield('mainwindow')
    
    <div class="hello-div"></div>
        <div class="hello-div"></div>
        <div class="hello-div"></div>
        <div class="hello-div"></div>
        <div class="hello-div"></div>
</body>
</html>