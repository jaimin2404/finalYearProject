<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Navbar</title>

</head>

<body>

    <!--Navbar-->
    <div class="navmenu">
        <ul>

            <!--Logo-->
            <div>
                <li><img src="Icon/logo_transparent.png" alt="logo" height="100px" width="140px"
                        style="margin-left: 25px;cursor: pointer;"></li>
            </div>

            <!--Translate's Icon-->
            <div>
                <li class="translater">
                    <a href="#"><i class="fa-solid fa-language"></i></a>

                    <ul class="dropdown">
                        <li><i class="fa-solid fa-e"></i><a href="#">English</a></li>
                        <li><i class="fa-solid fa-h"></i><a href="#">Hindi</a></li>
                        <li><i class="fa-solid fa-g"></i><a href="#">Gujarati</a></li>
                        <li><i class="fa-solid fa-m"></i><a href="#">Marathi</a></li>
                        <li><i class="fa-solid fa-t"></i><a href="#">Tamil</a></li>
                        <li><i class="fa-solid fa-b"></i><a href="#">Bangali</a></li>
                        <li><i class="fa-solid fa-t"></i><a href="#">Telugu</a></li>
                        <li><i class="fa-solid fa-p"></i><a href="#">Punjabi</a></li> 
                        <li><i class="fa-solid fa-k"></i><a href="#">Kannada</a></li>
                        <li><i class="fa-solid fa-u"></i><a href="#">Urdu</a></li>
                    </ul>

                </li>
            </div>

            <!--Facebook's Icon-->
            <div class="socialmedia">
                <li class="facebook"><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
            </div>

            <!--Instagram's Icon-->

            <div class="socialmedia">
                <li class="insta"><a href="#"><i class="fa-brands fa-square-instagram"></i></a></li>
            </div>

            <!--Twitter's Icon-->
            <div class="socialmedia">
                <li class="twitter"><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
            </div>

            <!--Dark-light mode's Icon-->
            <div class="darklightmode">
                <i class="fa-solid fa-moon"></i>
            </div>

        </ul>
    </div>


</body>

</html>