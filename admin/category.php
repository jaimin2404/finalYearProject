<?php
include "navbar.php";
include "nav.php";
?>
<div class="container1">
    <div class="user-container">
        <div class="container">
            <div class="header">
                <span>ALL CATEGORY</span>
                <a href="add-category.php" class="btnradius">Add Category</a>
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
                        <td><a href="update-category.php"><i class="fa-solid fa-pen-to-square"></i></a></td>
                        <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>International</td>
                        <td>5</td>
                        <td><a href="update-category.php"><i class="fa-solid fa-pen-to-square"></i></a></td>
                        <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Share market</td>
                        <td>6</td>
                        <td><a href="update-category.php"><i class="fa-solid fa-pen-to-square"></i></a></td>
                        <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Technology</td>
                        <td>7</td>
                        <td><a href="update-category.php"><i class="fa-solid fa-pen-to-square"></i></a></td>
                        <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Business</td>
                        <td>10</td>
                        <td><a href="update-category.php"><i class="fa-solid fa-pen-to-square"></i></a></td>
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
                        <td><a href="update-category.php"><i class="fa-solid fa-pen-to-square"></i></a></td>
                        <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Sports</td>
                        <td>4</td>
                        <td><a href="update-category.php"><i class="fa-solid fa-pen-to-square"></i></a></td>
                        <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Entertainment</td>
                        <td>8</td>
                        <td><a href="update-category.php"><i class="fa-solid fa-pen-to-square"></i></a></td>
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