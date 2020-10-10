<?php

include 'include/connection.php';


?>




    <div class="container-fluid">
        <!-- Start new book -->
        <div class="new-book">

            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">عنوان الكتاب</label>
                    <input type="text" id="title" class="form-control" name="bookTitle" value="<?php if (isset($bookTitle)) {
                                                                                                    echo $bookTitle;
                                                                                                } ?>">
                </div>
                <div class="form-group">
                    <label for="author">إسم الكتاب</label>
                    <input type="text" id="author" class="form-control" name="authorName" value="<?php if (isset($bookAuther)) {
                                                                                                        echo $bookAuther;
                                                                                                    } ?>">
                </div>
                <div class="form-group">
                    <label for="title">التصنيف</label>
                    <select class="form-control" name="bookCat">
                        <option></option>

                    </select>
                </div>
                <div class="form-group">
                    <label for="img">غلاف الكتاب</label>
                    <input type="file" class="form-control" name="bookCover">
                </div>
                <div class="form-group">
                    <label for="img">ملف الكتاب</label>
                    <input type="file" class="form-control" name="book">
                </div>
                <div class="form-group">
                    <label for="img">نبذة عن الكتاب</label>
                    <textarea name="bookContent" id="" cols="30" rows="10" class="form-control"><?php if (isset($bookContent)) {
                                                                                                    echo $bookContent;
                                                                                                } ?></textarea>
                </div>
                <button class="custom-btn">نشر الكتاب</button>
            </form>
        </div>
        <!-- End new book -->
    </div>
    <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
    <?php
    include 'include/footer.php';
    ?>

