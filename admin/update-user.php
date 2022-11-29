<?php
include "navbar.php";
?>
<div class="form-container">
    <div class="h-1">Update User</div>
    <div class="add-news form">
        <form action="" autocomplete="off">
            <div class="input">
                <label for="nam">Enter Name : </label>
                <input type="text" name="name" id="name">
            </div>
            <div class="input">
                <label for="mail">Enter Email : </label>
                <input type="email" name="email" id="email">
            </div>
            <div class="input">
                <label for="mobil">Enter Mobile no : </label>
                <input type="tel" name="mobile" id="mobile">
            </div>
            <div class="input">
                <label for="usr">Enter Username : </label>
                <input type="text" name="user" id="user">
            </div>
            <div class="input">
                <label for="pass">Enter Password : </label>
                <input type="password" name="password" id="password">
            </div>
            <div class="input">
                <div class="submit">
                    <button type="submit" class="btn">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
    include "footer.php";
?>