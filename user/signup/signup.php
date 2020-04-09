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
            <img src="./img/user.svg"/>
            <h2 class="title">Sign up</h2>
        </div>
        <form method="POST" action="signup.inc.php" class="form">
            <div class="fullName">
                <label class="label">
                    <input class="input" type="text" name="u_last_name" placeholder="Last Name">
                    <span class="border"></span>
                </label>
                <label class="label">
                    <input class="input" type="text" name="u_first_name" placeholder="First Name">
                    <span class="border"></span>
                </label>
            </div>
            <div class="username">
                <label class="label">
                    <input class="input" type="text" name="u_username" placeholder="Username">
                    <span class="border"></span>
                </label>
            </div>

            <div class="phone">
                <label class="label">
                    <input class="input" type="tel" name="u_phone" placeholder="Phone (xx-xx-xx-xx-xx)" pattern="/^0(6|7)-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}$/">
                    <span class="border"></span>
                </label>
            </div>
            <div class="mail">
                <label class="label">
                    <input class="input" type="text" name="u_mail" placeholder="Email">
                    <span class="border"></span>
                </label>
            </div>
 
            <div class="password">
                <label class="label">
                    <input class="input" type="password" name="u_pwd" placeholder="Password">
                    <span class="border"></span>
                </label>
                <label class="label">
                    <input class="input" type="password" name="u_pwd_rep" placeholder="Confirm">
                    <span class="border"></span>
                </label>
            </div>
            <button href="" class="sign">SIGN UP</button>
        </form>  

        <div class="alreadyMember">
            <h2>Already a member ? <span><a href="#">Log in!</a></span></h2>
        </div> 

    </div>

    <script src="./script/script.js"></script>
</body>

</html>