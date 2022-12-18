<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div class="login">
    <div class="signin">
        <div class="form">
            <div class="login-logo h-1">LOGIN</div>
            <a class="cls close"><i class="fas fa-times"></i></a>
            <form action="" autocomplete="off">
                <div class="input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" placeholder="Username">
                </div>
                <div class="input">
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password" placeholder="Password">
                </div>
             <div class="fpassword">
             <a href="#">Forgot Password?</a>
             </div>
                <div class="input submit">
                    <button type="submit" class="btn"> <i class="fas fa-sign-in-alt"></i> Login</button>
                </div>
                <div class="input">
                    <span>New user? <a href="#" id="signup">Signup</a></span>
                </div>
            </form>
        </div>
    </div>

    <div class="signup">
        <div class="form">
            <div class="login-logo h-1">SIGNUP</div>
            <a class="cls close"><i class="fas fa-times"></i></a>
            <form action="" autocomplete="off">
                <div class="input">
                    <label for="Nname">Name</label>
                    <input type="text" name="name" id="name" placeholder="name">
                </div>
                <div class="input">
                    <label for="emailid">Email Id</label>
                    <input type="email" name="emailid" id="emailid" placeholder="abc123@gmail.com">
                </div>
                <div class="input">
                    <label for="mobile">Mobile NO</label>
                    <input type="tel" name="mobile" id="mobile" placeholder="+91 123456 78945">
                </div>
                <div class="input">
                    <label for="nusername">Username</label>
                    <input type="text" name="nusername" id="nusername" placeholder="username">
                </div>
                <div class="input">
                    <label for="npassword">Password</label>
                    <input type="text" name="npassword" id="npassword" placeholder="Password">
                </div>
                <div class="input submit">
                    <button type="submit" class="btn"> <i class="fas fa-sign-in-alt"></i> Signup</button>
                </div>
            </form>
        </div>
    </div>

   
</div>
</body>
</html>