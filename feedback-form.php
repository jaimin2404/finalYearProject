<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="feedback">
        <div class="form">
            <div class="login-logo h-1">GIVE FEEDBACK</div>
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
                    <label for="description">Feedback Description</label>
                    <textarea name="feedback" id="feedback" rows="4" placeholder="Description"></textarea>
                </div>
                <div class="input submit">
                    <button type="submit" class="btn"> <i class="fas fa-sign-in-alt"></i>Send</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>