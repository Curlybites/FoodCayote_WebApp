<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Food Cayote Login</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    
    <link rel="icon" href="/images/foodcayote_illustration.png">

    <link rel="stylesheet" href="/css/login.css">
</head>

<body>

    <div class="container">
        <div class="illustration">
            <img src="/images/foodcayote_illustration.png" alt="">
        </div>

        <div class="login_side">
            <img src="/images/foodcayote_logo.png" alt="">
            <small>Created By SBIT3M - Group 7</small>

            <form action="" method="">

                <input type="email" placeholder="Email" name="email" required>

                <input type="password" placeholder="Password" name="password" class="pass" id="password" required>

                <span class="material-icons-sharp" id="eye">
                    visibility_off
                </span>

                <input type="submit" value="LOGIN" class="btn">

                <a href="{{ '/FoodCayote/Registration' }}">Registration</a>


            </form>

        </div>

    </div>

    <script src="/js/script.js"></script>

</body>

</html>
