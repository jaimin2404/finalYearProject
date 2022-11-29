<?php
include "navbar.php";
include "nav.php";
?>
<div class="container1">
    <div class="user-container">
        <div class="container">
            <div class="header">
                <span>PUBLISHER</span>
                <a href="add-publisher.php" class="btnradius">Add Publisher</a>
            </div>
            <table border="1">
                <thead>
                    <th>Publisher Id</th>
                    <th>Name</th>
                    <th>Mobile No.</th>
                    <th>Email-id</th>
                    <th>Username</th>
                    <th>News</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <td>Jay</td>
                        <td>+91 8125878911</td>
                        <td>jp4521@gmail.com</td>
                        <td>jay456</td>
                        <td><button class="btn"><a href="publisher-news.php">See more</a></button></td>
                        <td><a href="update-publisher.php"><i class="fa-solid fa-pen-to-square"></i></a></td>
                        <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <td>Rakesh</td>
                        <td>+91 9874561231</td>
                        <td>rakesh3412@gmail.com</td>
                        <td>rakesh7894</td>
                        <td><button href="" class="btn"><a href="publisher-news.php">See more</a></button></td>
                        <td><a href="update-publisher.php"><i class="fa-solid fa-pen-to-square"></i></a></td>
                        <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <td>Jaimin</td>
                        <td>+91 7894561232</td>
                        <td>jaimin2503@gmail.com</td>
                        <td>jaimin564</td>
                        <td><button href="" class="btn"><a href="publisher-news.php">See more</a></button></td>
                        <td><a href="update-publisher.php"><i class="fa-solid fa-pen-to-square"></i></a></td>
                        <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
                    </tr>
                    <tr>
                        <th>4</th>
                        <td>Raj</td>
                        <td>+91 9638527415</td>
                        <td>raj4511@gmail.com</td>
                        <td>raj488</td>
                        <td><button href="" class="btn"><a href="publisher-news.php">See more</a></button></td>
                        <td><a href="update-publisher.php"> <i class="fa-solid fa-pen-to-square"></i></a></td>
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
<?php
    include "footer.php";
?>