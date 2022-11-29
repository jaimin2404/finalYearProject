<?php
include "navbar.php";
include "nav.php";
?>
<div class="container1">
    <div class="user-container">
        <div class="container">
            <div class="header">
                <span>USER</span>
                <a href="add-user.php" class="btnradius">Add User</a>
            </div>

            <table border="1">
                <thead>
                    <th>User Id</th>
                    <th>Name</th>
                    <th>Mobile Number</th>
                    <th>Email Id</th>
                    <th>Username</th>
                    <th>News</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Rajesh</td>
                        <td>+91 8125878911</td>
                        <td>jp4521@gmail.com</td>
                        <td>Rajesh123</td>
                        <td><button class="btn"><a href="user-publish.php">See more</a></button></td>
                        <td><a href="update-user.php"><i class="fa-solid fa-pen-to-square"></i></a></td>
                        <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Harsh</td>
                        <td>+91 9978546131</td>
                        <td>harsh6598@gmail.com</td>
                        <td>harsh4268</td>
                        <td><button class="btn"><a href="user-publish.php">See more</a></button></td>
                        <td><a href="update-user.php"><i class="fa-solid fa-pen-to-square"></i></a></td>
                        <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
                    </tr>


                    <tr>
                        <td>3</td>
                        <td>Rajesh</td>
                        <td>+91 8125878911</td>
                        <td>jp4521@gmail.com</td>
                        <td>Rajesh123</td>
                        <td><button class="btn"><a href="user-publish.php">See more</a></button></td>
                        <td><a href="update-user.php"><i class="fa-solid fa-pen-to-square"></i></></td>
                        <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>Mayank</td>
                        <td>+91 8529637414</td>
                        <td>mayank8972@gmail.com</td>
                        <td>mayank3635</td>
                        <td><button class="btn"><a href="user-publish.php">See more</a></button></td>
                        <td><a href="update-user.php"><i class="fa-solid fa-pen-to-square"></i></a></td>
                        <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
                    </tr>
                </tbody>
            </table>
            <div class="pagination">
                <button href="" class="btn">Prev</button>
                <button href="" class="btn">1</button>
                <button href="" class="btn">2</button>
                <button href="" class="btn">3</button>
                <button href="" class="btn">Next</button>
            </div>
        </div>
    </div>
</div>
<?php
    include "footer.php";
?>