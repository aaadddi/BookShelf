<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/loginPage.css">
</head>
<body>
    <div class="main-container">
        <img src="img/6714.jpg" alt="">
       
        <div class="content">
            <form action="loginPage" method="post">
            @csrf    
            <span>Email</span>
                
                <input type="email" name="email" required value={{ Cookie::get('emailFill') }} >
                
                <span>Password</span>
                
                <input type="password" name="password" name="password" required value={{ Cookie::get('passFill') }} >
                
                <button type="submit">Login</button>
            </form>
            <h6>New to BookShelf? <a href="signUpPage">Sign Up</a> for free.</h6>
        </div>
    </div>
</body>
</html>