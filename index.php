<?php
require_once('validation/dbhelper.php');
require_once('validation/utility.php');
$sql = "select * from category";
$cate_List = executeResult($sql);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Slick Slider</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap"
      rel="stylesheet"
    />
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />
    <link rel="stylesheet" href="css/app.css" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
  </head>
  <body>
    <!-- Star header -->
          <?php 
              include "layout/header.php"
            ?>
             <!-- End header -->
              <!-- Star slide -->
    <div class="image-slider">
      <div class="image-item">
        <div class="image">
          <img
           src="img/l3.jpg"
          />
        </div>
      </div>
      <div class="image-item">
        <div class="image">
          <img
            src="img/l2.jpg"
            alt=""
          />
        </div>
      </div>
      <div class="image-item">
        <div class="image">
          <img
            src="img/l1.jpg"
            alt=""
          />
        </div>
      </div>
    </div>
     <!-- End slide -->
      <!-- Star post -->
    <div class="post-section">
      <section class="introduce">
        <h2 class="heading"> ĐỨC CƯỜNG THƯ PHÁP</h2>
            <p class="text-center">Tranh Thư Pháp, Thư Họa</p>
         <div class="box-container">
           <div class="box">
               <box-icon name='book-open' class='icon'></box-icon>
               <h3>KHÓA HỌC THƯ PHÁP</h3>
               <p style="font-size:18px;">Xem ngay để biết thêm thông tin khóa học luyện viết chữ thư pháp chữ việt cùng Thư Pháp Đức Cường tại đây CHIÊU SINH LỚP THƯ</p>
               <a href="" class="link-post">Read More</a>
           </div>
           <div class="box">
               <box-icon name='camera' class='icon'></box-icon>
               <h3>TÁC PHẨM</h3>
               <p style="font-size:18px;">Các tác phẩm tiêu biểu của Đức Cường xem chi tiết tại các bài viết sau:</p>
               <a href=""  class="link-post">Read More</a>
           </div>
           
           <div class="box">
            <box-icon name='shopping-bag' class='icon'></box-icon>
               <h3> [HOT]DỊCH VỤ CHO THUÊ ÔNG ĐỒ TẶNG CHỮ THƯ PHÁP SỰ</h3>
               <p style="font-size:18px;">Bạn đang tìm kiếm Ông Đồ viết chữ tặng đối tác và người thân cho sự kiện sắp tới?</p>
               <a href="" class="link-post">Read More</a>
           </div>
       </div>
   </section>
    </div>
     <!-- End post -->
          <!-- Star contact -->
     <section class="contact" id="contact">
         <div class="row">
            <div class="row-left">
              <h2 class="">ĐỨC CƯỜNG THƯ QUÁN</h2>
              <p>Khai giảng thường xuyên các khóa học :</p>
              <ul>
                <li><a href="">KHÓA HỌC THƯ PHÁP</a></li>
                <li><a href="">KHÓA HỌC VẼ HOA MẪU ĐƠN</a></li>
                <li><a href="">KHÓA HỌC VẼ HOA SEN</a></li>
                <li><a href="">KHÓA HỌC VẼ TRANH THỦY MẶC</a></li>
              </ul>
            </div>
                  <img src="img/service-post.jpg" alt="" class="ht-service-post">
         </div>
  </section>
   <!-- End contact -->
   <section class="new">
    <h2 class="new-title">TIN TỨC - HOẠT ĐỘNG</h2>
      <div class="ht-blog-excerpt">
        <div class="ht-blog-item">
          <img src="img/new-1.jpg" alt="">
          <a href="" class="a-title">Giao Lưu Thư Pháp với khách du lịch</a>
          <p  class="time-title">6 Tháng Mười Một, 2018</p>
          <p class="p-title">Giao Lưu Thư Pháp với các học viên là các du khách nước ngoài</p>
          <div class="link-new-big">
            <a href="" class="link-new">Read More</a>
          </div>
        </div>
        <div  class="ht-blog-item">
          <img src="img/new-2.jpg" alt="">
          <a href="" class="a-title">Khai Trương Thư Quán và khai giảng khóa học Thư Pháp Chữ Việt</a>
          <p class="time-title">6 Tháng Mười Một, 2018</p>
          <p class=" p-title">Giao Lưu Thư Pháp với các học viên là các du khách nước ngoài</p>
          <div  class="link-new-big">
            <a href="" class="link-new">Read More</a>
          </div>
        </div>
        <div  class="ht-blog-item">
          <img src="img/new-3.jpg" alt="">
          <a href="" class="a-title">Mùa xuân biển đảo 2018 đến với vùng Cảnh sát biển 4</a>
          <p class="time-title">6 Tháng Mười Một, 2018</p>
          <p class="p-title">Mùa xuân biển đảo 2018 đến với vùng Cảnh sát biển 4</p>
          <div  class="link-new-big">
            <a href="" class="link-new">Read More</a>
          </div>
        </div>
      </div>
   </section>
   <!-- Star footer -->
    <?php 
      include "layout/footer.php"
    ?>
   <!-- End footer -->
    <!-- Star back-to-top -->
    <?php 
      include "layout/back-to-top.php"
    ?>
   <!-- End  back-to-top -->
    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-1.11.0.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>
    <script src="./js/app.js"></script>
    <script>
    $(document).ready(function(){
        $(window).scroll(function(){
            if($(this).scrollTop()){
                $('#backtop').fadeIn();
            }else{
                $('#backtop').fadeOut();
            }
        });
        $('#backtop').click(function(){
            $('html,body').animate({scrollTop: 0}, 900);
        });
    });
</script>
  </body>
</html>
