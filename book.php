<?php require_once './inc/header.php' ?>



<div class="books">
    <div class="container">
        <div class="book">
            <div class="row">
                <div class="col-md-4 ">
                    <div class="book-cover">

                        <img src="layouts/images/book1.jpg" alt="">
                    </div>
                </div>
                
                <div class="col-md-8">
                    <div class="book-content">
                        <h4><a href="#">عنوان الكتاب</a></h4>
                        <hr>
                        <p class='lead'>هذا الكتب بببببببببببببببببببببببببببببببببببببببببببببببببببب</p>
                        <button class="btn btn-info text-white">
                            <a class="text-white" href="#">تحميل الكتاب</a>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<hr>
<hr>
<div class="related-books">
    <div class="container">
        <h4>كتب ذات صلة</h4>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-6">
                <div class="related-book text-center">
                    <div class="cover">
                       <a href="#">
                       <img src="layouts/images/book2.jpg" alt="book2">
                       </a>
                    </div>
                    <div class="title">
                        <h5><a href="#">عنوان</a></h5>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<?php require_once './inc/footer.php' ?>