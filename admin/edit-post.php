<?php
include 'partials/header.php';
?>

    <!-------=====End of Nav========--------->


<section class="form_section">
    <div class="container form_section-container">
        <h2>Edit Post</h2>

        <form action="" enctype="multipart/form-data">
            <input type="text" placeholder="Title">
            <select>
                <option value="1">Men</option>
                <option value="1">Women</option>
                <option value="1">Kids</option>
            </select>
            <textarea rows="10" placeholder="Body"></textarea>

            <div class="form_control inline">
                <input type="checkbox" id="is_featured" checked>
                <label for="is_featured">Featured</label>
            </div>


            <div class="form_control">
                <label for="thumbnail">Update Thumbnail</label>
                <input type="file" id="thumbnail">
            </div>


            <button type="submit" class="btn">Update Post</button>
    </div>
</section>


<?php
include '../partials/footer.php';
?>