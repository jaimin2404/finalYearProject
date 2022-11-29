<?php
include "navbar.php";
?>
<div class="form-container">
    <div class="h-1">Add News</div>
    <div class="add-news form">
        <form action="">
            <div class="input">
                <label for="ttl">Category Name</label>
                <input type="text" name="category" id="category" placeholder="Category Name">
            </div>
            <div class="input">
                <div class="submit">
                    <button type="submit" class="btn">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
include "footer.php";
?>