<?php

include 'include/connection.php';



?>

    <!-- /#sidebar-wrapper -->




    <div class="container-fluid">
        <div class="edit-cat">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="cat">تعديل التصنيف</label>
                    <input type="text" class="form-control" id="cat" value="<?php echo $row['categoryName']; ?>" name="category">
                </div>
                <button class="custom-btn">تعديل</button>
            </form>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
    <?php
    include 'include/footer.php';
    ?>

