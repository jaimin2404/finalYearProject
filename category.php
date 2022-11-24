<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Table</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../Style1.css">
</head>

<body>
    <div class="container1">

        <div class="navcontainer1">
            <nav class="navitem">
                <div class="logo">
                    <img src="../Logo/logo_transparent.png" alt="">
                    <h3>Enews</h3>
                </div>
                <div class="logoutitem">
                    <span>admin123</span>
                    <a href="#" class="btn">Logout<i class="fa-solid fa-right-to-bracket"></i></a>
                </div>
            </nav>
        </div>

        <div class="navcontainer2">
            <ul>
                <li><a href="../publisher/publisher.html">Publisher</a></li>
                <li><a href="category.html">Category</a></li>
                <li><a href="../News/news.html">News</a></li>
                <li><a href="../News/news.html">User</a></li>
                <li><a href="../News/news.html">Publish</a></li>
            </ul>
        </div>

        <div class="user-container">
            <div class="container">
                <div class="header">
                    <span>ALL CATEGORY</span>
                    <a href="#" class="btnradius">Add Category</a>
                </div>

                <table border="1">
                    <thead>
                        <th>Category Id</th>
                        <th>Category Name</th>
                        <th>No. of News</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Latest news</td>
                            <td>2</td>
                            <td><a href=""><i class="fa-solid fa-pen-to-square"></i></a></td>
                            <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>International</td>
                            <td>5</td>
                            <td><a href=""><i class="fa-solid fa-pen-to-square"></i></a></td>
                            <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Share market</td>
                            <td>6</td>
                            <td><a href=""><i class="fa-solid fa-pen-to-square"></i></a></td>
                            <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Technology</td>
                            <td>7</td>
                            <td><i class="fa-solid fa-pen-to-square"></i></td>
                            <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Business</td>
                            <td>10</td>
                            <td><a href=""><i class="fa-solid fa-pen-to-square"></i></a></td>
                            <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>National</td>
                            <td>2</td>
                            <td><i class="fa-solid fa-pen-to-square"></i></td>
                            <td><i class="fa-solid fa-trash"></i></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Politics</td>
                            <td>5</td>
                            <td><a href=""><i class="fa-solid fa-pen-to-square"></i></a></td>
                            <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Sports</td>
                            <td>4</td>
                            <td><a href=""><i class="fa-solid fa-pen-to-square"></i></a></td>
                            <td><i class="fa-solid fa-trash"></i></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Entertainment</td>
                            <td>8</td>
                            <td><a href=""><i class="fa-solid fa-pen-to-square"></i></a></td>
                            <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
                        </tr>
                    </tbody>
                </table>
                <div class="pagination">
                    <a href="" class="btn">Prev</a>
                    <a href="" class="btn">1</a>
                    <a href="" class="btn">2</a>
                    <a href="" class="btn">3</a>
                    <a href="" class="btn">Next</a>
                </div>
            </div>
        </div>

       
    </div>
    <div class="footer">
        <footer class="table_footer">
            <a href="#"> <i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a><br>
            <span>Copyright © 2022-23 Enews, All Rights Reserved</span>

        </footer>
    </div>
</body>

</html>