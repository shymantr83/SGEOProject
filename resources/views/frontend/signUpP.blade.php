<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>engineer sign up </title>
    <link href="css/external/all.min.css" rel="stylesheet">
    <link href="css/external/bootstrap.css" rel="stylesheet">
    <link href="css/external/slick.css" rel="stylesheet">
    <link href="css/style1.css" rel="stylesheet">

<body>

    <div class="container">
        <div class="form-box">
            <img src="img/IMG-20231218-WA0022.jpg">
            <h1>Sign Up as User</h1>
            <form>
                <div class="input-group">
                    <div class="input-field">
                        <i class="fa-solid fa-address-book"></i>
                        <input type="text" placeholder="User Name">
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" placeholder="Email address">
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" placeholder="password">
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" placeholder="Confirm password">
                    </div>
                    
                </div>
                <div class="btn-field">
                    <button class="butt1" onclick="opendialog()" type="submit"><a href="#">sign up</a></button>
                </div><br>
                <a href="#">Already have an account? </a>
                <a href="file:///E:/SGEO/login.html" class="log">log in</a>
                <div class="infro">
                    <i class="fas fa-home"></i>
                    <i class="fa-solid fa-envelope"></i>
                    <i class="fa-solid fa-address-book"></i>
                </div>
            </form>

        </div>
    </div>
    <!-- <div class="container">
    <div class="dialog" id="dialog">
        <h2> Sign Up as</h2>
        <div class="but">
            <button type="button"onclick="closedialog()">User</button>
            <button type="button"onclick="closedialog()">Company</button>
        </div>

    </div>
     -->



    <script src="Js/external/jquery.slim.min.js"></script>
    <script src="Js/external/bootstrap.bundle.js"></script>
    <script src="Js/external/slick.min.js"></script>
    <script src="Js/main.js"></script>
</body>

</html>