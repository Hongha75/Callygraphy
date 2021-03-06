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
        <h2 class="heading"> ?????C C?????NG TH?? PH??P</h2>
            <p class="text-center">Tranh Th?? Ph??p, Th?? H???a</p>
         <div class="box-container">
           <div class="box">
               <box-icon name='book-open' class='icon'></box-icon>
               <h3>KH??A H???C TH?? PH??P</h3>
               <p style="font-size:18px;">Xem ngay ????? bi???t th??m th??ng tin kh??a h???c luy???n vi???t ch??? th?? ph??p ch??? vi???t c??ng Th?? Ph??p ?????c C?????ng t???i ????y CHI??U SINH L???P TH??</p>
               <a href="" class="link-post">Read More</a>
           </div>
           <div class="box">
               <box-icon name='camera' class='icon'></box-icon>
               <h3>T??C PH???M</h3>
               <p style="font-size:18px;">C??c t??c ph???m ti??u bi???u c???a ?????c C?????ng xem chi ti???t t???i c??c b??i vi???t sau:</p>
               <a href=""  class="link-post">Read More</a>
           </div>
           
           <div class="box">
            <box-icon name='shopping-bag' class='icon'></box-icon>
               <h3> [HOT]D???CH V??? CHO THU?? ??NG ????? T???NG CH??? TH?? PH??P S???</h3>
               <p style="font-size:18px;">B???n ??ang t??m ki???m ??ng ????? vi???t ch??? t???ng ?????i t??c v?? ng?????i th??n cho s??? ki???n s???p t???i?</p>
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
              <h2 class="">?????C C?????NG TH?? QU??N</h2>
              <p>Khai gi???ng th?????ng xuy??n c??c kh??a h???c :</p>
              <ul>
                <li><a href="">KH??A H???C TH?? PH??P</a></li>
                <li><a href="">KH??A H???C V??? HOA M???U ????N</a></li>
                <li><a href="">KH??A H???C V??? HOA SEN</a></li>
                <li><a href="">KH??A H???C V??? TRANH TH???Y M???C</a></li>
              </ul>
            </div>
                  <img src="img/service-post.jpg" alt="" class="ht-service-post">
         </div>
  </section>
   <!-- End contact -->
   <section class="new">
    <h2 class="new-title">TIN T???C - HO???T ?????NG</h2>
      <div class="ht-blog-excerpt">
        <div class="ht-blog-item">
          <img src="img/new-1.jpg" alt="">
          <a href="" class="a-title">Giao L??u Th?? Ph??p v???i kh??ch du l???ch</a>
          <p  class="time-title">6 Th??ng M?????i M???t, 2018</p>
          <p class="p-title">Giao L??u Th?? Ph??p v???i c??c h???c vi??n l?? c??c du kh??ch n?????c ngo??i</p>
          <div class="link-new-big">
            <a href="" class="link-new">Read More</a>
          </div>
        </div>
        <div  class="ht-blog-item">
          <img src="img/new-2.jpg" alt="">
          <a href="" class="a-title">Khai Tr????ng Th?? Qu??n v?? khai gi???ng kh??a h???c Th?? Ph??p Ch??? Vi???t</a>
          <p class="time-title">6 Th??ng M?????i M???t, 2018</p>
          <p class=" p-title">Giao L??u Th?? Ph??p v???i c??c h???c vi??n l?? c??c du kh??ch n?????c ngo??i</p>
          <div  class="link-new-big">
            <a href="" class="link-new">Read More</a>
          </div>
        </div>
        <div  class="ht-blog-item">
          <img src="img/new-3.jpg" alt="">
          <a href="" class="a-title">M??a xu??n bi???n ?????o 2018 ?????n v???i v??ng C???nh s??t bi???n 4</a>
          <p class="time-title">6 Th??ng M?????i M???t, 2018</p>
          <p class="p-title">M??a xu??n bi???n ?????o 2018 ?????n v???i v??ng C???nh s??t bi???n 4</p>
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
