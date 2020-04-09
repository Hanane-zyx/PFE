<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<body>

    <div class="wrapper">
        <div class="logo">
            <img src="./img/car.svg"/>
            <h2 class="title">Sign up</h2>
        </div>
        <form method="POST" action="signup.inc.php" class="form">
            <div class="fullName">
                <label class="label">
                    <input class="input" type="text" name="w_last_name" placeholder="Last Name">
                    <span class="border"></span>
                </label>
                <label class="label">
                    <input class="input" type="text" name="w_first_name" placeholder="First Name">
                    <span class="border"></span>
                </label>
            </div>
            <div class="username">
                <label class="label">
                    <input class="input" type="text" name="w_username" placeholder="Username">
                    <span class="border"></span>
                </label>
            </div>

            <div class="phone">
                <label class="label">
                    <input class="input" type="tel" name="w_phone" placeholder="Phone (xx-xx-xx-xx-xx)" pattern="/^0(6|7)-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}$/">
                    <span class="border"></span>
                </label>
            </div>
            <div class="mail">
                <label class="label">
                    <input class="input" type="text" name="w_mail" placeholder="Email">
                    <span class="border"></span>
                </label>
            </div>
 
            <div class="password">
                <label class="label">
                    <input class="input" type="password" name="w_pwd" placeholder="Password">
                    <span class="border"></span>
                </label>
                <label class="label">
                    <input class="input" type="password" name="w_pwd_rep" placeholder="Confirm">
                    <span class="border"></span>
                </label>
            </div>
            <button type="submit" name="w_signup" class="sign">SIGN UP</button>
        </form>  

        <div class="alreadyMember">
            <h2>Already a member ? <span><a href="#">Log in!</a></span></h2>
        </div> 

    </div>

    <script src="./script/script.js"></script>
</body>

</html>