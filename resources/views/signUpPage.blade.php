<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/CSS/signUpPage.css">
</head>
<body>
    <div class="main-container">
        <form action="signUpPage" method="POST">
            @csrf   
            
            <span>Email</span>
            <input type="email" name="sign-email" required>
            <span>Name</span>
            <input type="text" name="sign-name" required>
            <span>Make Password</span>
            <input type="password" name="sign-password" required>
            <button type="submit">Submit</button>
        </form>
        <img src="img\3255474.jpg" alt="">
    </div>
</body>
</html>