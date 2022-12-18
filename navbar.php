<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enews</title>
    <!-- css -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- logo -->
    <link rel="shortcut icon" href="./logo/logo_transparent.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="./script/script.js"></script>
    <!-- fontawesom -->
    <script src="https://kit.fontawesome.com/96c97d736b.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav>
        <div class="navbar">
            <div class="logo">
                <a href="index.php">
                    <img src="Logo/logo_transparent.png" alt="Enews">
                    <span>Enews</span>
                </a>
            </div>
            <div class="navitem">
                <ul>
                    <li>
                        <a href="index.php"><i class="fa-solid fa-house"></i><span>Home</span></a>
                    </li>
                    <li>
                        <a href="aboutus.php"><i class="fa-solid fa-users"></i><span>About us</span></a>
                    </li>
                    <li>
                        <!-- changes required later -->
                        <div class="lang">
                            <a href="#"><i class="fa-solid fa-language"></i></a>
                            <div class="show-language">
                                <a href="#">English</a>
                                <a href="#">Hindi</a>
                                <a href="#">Gujarati</a>
                                <a href="#">Marathi</a>
                                <a href="#">Malyalam</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="feedback-form.php"><i class="fa-solid fa-message"></i><span>Feedback</span></a>
                    </li>
                    <li class="searchbox">
                        <form action="" autocomplete="off">
                            <input type="text" name="search" id="search" placeholder="Search here...">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>