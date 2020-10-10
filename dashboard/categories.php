<?php

include 'include/connection.php';



?>

  <!-- /#sidebar-wrapper -->

  <!-- Page Content -->

  <!-- Start Delete category -->




  <div class="container-fluid">
    <!-- Start categories section -->
    <div class="categories">

      <div class="add-cat">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
          <div class="form-group">
            <label for="cat">إضافة تصنيف :</label>
            <input type="text" id="cat" class="form-control" name="category">
          </div>
          <button class="custom-btn">إضافة</button>
        </form>
      </div>
      <div class="show-cat">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">الرقم</th>
              <th scope="col">عنوان التصنيف</th>
              <th scope="col">تاريخ الإضافة</th>
              <th scope="col">الإجراء</th>
            </tr>
          </thead>
          <tbody>

          </tbody>
        </table>

  <?php
  include 'include/footer.php';
  ?>

