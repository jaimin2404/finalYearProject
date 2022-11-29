<?php
include "navbar.php";
?>
<div class="form-container">
    <div class="h-1">Update News</div>
    <div class="add-news form">
        <form action="" autocomplete="off">
            <div class="input">
                <label for="cat">Select Category</label>
                <select name="category" id="category">
                    <option value="politics">Politics</option>
                    <option value="sports">Sports</option>
                    <option value="national">National</option>
                    <option value="internation">Internation</option>
                    <option value="business">Business</option>
                </select>
            </div>
            <div class="input">
                <label for="ttl">News title</label>
                <input type="text" name="title" id="title">
            </div>
            <div class="input">
                <label for="dis">News Discription</label>
                <textarea name="discription" id="discription" cols="30" rows="7"></textarea>
            </div>
            <div class="input">
                <label for="img">Select Image</label>
                <input type="file" name="image" id="image">
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