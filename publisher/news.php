<?php
    include "navbar.php";
    ?>
<div class="container1">
    <div class="user-container">
        <div class="container">
            <div class="header">
                <span>NEWS</span>
                <a href="../admin/add-news.php" class="btnradius">Add News</a>
            </div>

            <table border="1">
                <thead>
                    <th>News Id</th>
                    <th>News Category</th>
                    <th>News Title</th>
                    <th>Image</th>
                    <th>Post By</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Politics</td>
                        <td>Lorem ipsum dolor sit amet consectetur.</td>
                        <td></td>
                        <td>Tushar</td>
                        <td><a href="../admin/update-news.php"><i class="fa-solid fa-pen-to-square"></i></a></td>
                        <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Recently</td>
                        <td>Lorem ipsum dolor sit amet consectetur.</td>
                        <td></td>
                        <td>Tushar</td>
                        <td><a href="../admin/update-news.php"><i class="fa-solid fa-pen-to-square"></i></a></td>
                        <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Sports news</td>
                        <td>Lorem ipsum dolor sit amet consectetur.</td>
                        <td></td>
                        <td>Tushar</td>
                        <td><a href="../admin/update-news.php"><i class="fa-solid fa-pen-to-square"></i></a></td>
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