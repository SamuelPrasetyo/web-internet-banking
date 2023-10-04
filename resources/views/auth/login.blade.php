<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Login & Registration Form</title>

    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">



        <div class="login form">
            <header><b>Login User <br> Banking</b></header>
            <form action="{{ url('api/login') }}" method="post">
                <input type="email" required name="email" placeholder="Enter your email">
                <input type="password" required name="password" placeholder="Enter your password">
                <a href="#">Forgot password?</a>
                <input type="submit" class="btn btn-info" value="Login">
            </form>
            <div class="signup">
                <span class="signup">Don't have an account?
                    <label for="check">Signup</label>
                </span>
            </div>
        </div>



        <div class="registration form">
            <header>Signup</header>
            <form action="#">
                <input type="text" placeholder="Enter your email">
                <input type="password" placeholder="Create a password">
                <input type="password" placeholder="Confirm your password">
                <input type="button" class="button" value="Signup">
            </form>
            <div class="signup">
                <span class="signup">Already have an account?
                    <label for="check">Login</label>
                </span>
            </div>
        </div>



    </div>
</body>

</html>