<?php
require_once('validation/dbhelper.php');
require_once('validation/utility.php');

if(!empty($_POST)) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
  $describe = $_POST['describe'];

	$sql = "insert into advises(name,email, phone, address,content,created_at,update_at) values ('$name', '$email', '$phone', '$address', '$describe','".date('y/m/d H:i:s')."','".date('y/m/d H:i:s')."')";
	execute($sql);
  
}
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
         <!-- Star main header -->
                <section class="main-header">
                    <h1 class="main-header-h1">[HOT]DỊCH VỤ CHO THUÊ ÔNG ĐỒ TẶNG CHỮ THƯ PHÁP SỰ KIỆN</h1>
                    <div class="main-link-home">
                        <a href="index.php">Home</a>
                        <p>/ [HOT]DỊCH VỤ CHO THUÊ ÔNG ĐỒ TẶNG CHỮ THƯ PHÁP SỰ KIỆN</p>
                    </div>
                </section>
               <section class="main-content">
                      <div class="content-left">
                         <div class="content-service">
                             <h2 class="content-service-h2">DỊCH VỤ CHO THUÊ ÔNG ĐỒ TẶNG CHỮ THƯ PHÁP SỰ KIỆN</h2>
                             <strong>
                                 <p>Bạn đang tìm kiếm thuê Ông Đồ viết chữ thư pháp tặng đối tác và người thân cho sự kiện sắp tới?</p>
                                 <p>Hay bạn đang tìm số lượng lớn các nghệ sĩ thư pháp cho các hội chợ triển lãm, các gian hàng vào các ngày cuối tuần?</p>
                             </strong>
                             <p>Vào dịp cuối năm, cũng là thời điểm mà có rất nhiều doanh nghiệp, công ty tổ chức các event, sự kiện, tiệc tất niên có nhu cầu cao về dịch vụ thuê ông đồ viết thư pháp cho sự kết thúc và tổng kết 1 năm phát triển với những thành quả tốt đẹp cũng như hướng đến các mục tiêu lớn hơn vào năm sau hoặc có thể là để nhằm mục đích giới thiệu và quảng bá sản phẩm, thương hiệu, hình ảnh đẹp của công ty đến với mọi người.</p>
                             <p>Với nhiều năm kinh nghiệm thiết kế và thực hiện ông đồ sự kiện của Đức Cường cùng các ông đồ thư pháp tại Hồ Chí Minh, chúng tôi luôn mang đến cho các khách hàng những hình ảnh đẹp về ông đồ viết thư pháp, tặng chữ,quà tặng cùng những lời chúc tốt đẹp đến những đối tác của các doanh nghiệp trong những event, sự kiện…</p>
                             <img src="img/content-service-1.jpg" alt="">
                              <h3 class="content-service-h3">Dịch vụ ông đồ thư pháp ngày tết</h3>
                              <p>Đức Cường Thư Pháp là địa chỉ cung cấp các <b>dịch vụ thuê ông đồ tặng chữ thư pháp</b> CHUYÊN NGHIỆP cho các sự kiện hội chợ, triển lãm, gian hàng, tiệc tất niên, tiệc mừng hằng tuần và đăc biệt với những sự kiện trọng đại cuối năm</p>
                              <p>Đến với <b>Đức Cường Thư Pháp</b>, chúng tôi sẽ mang đến cho sự kiện của bạn một không gian truyền thống với mực tàu giấy đỏ cùng các tác phẩm đẹp mắt và ý nghĩa dành cho người thân, đối tác và bạn bè của mình.</p>
                             <p>Với áo dài khăn đóng truyền thống cùng với không gian thư pháp cổ kính, <b>dịch vụ thuê ông đồ viết thư pháp</b> của Đức Cường luôn đồng hành cùng các khách hàng trong từng sự kiện quan trọng.</p>
                            <i> <u><p>” Chúng tôi không chắc chắn có thể cung cấp ông đồ giá rẻ nhất hiện nay, nhưng chắc chắn là dịch vụ ông đồ chuyên nghiệp bậc nhất hiện nay!”</p></u></i>
                             <p>Liên hệ ngay với Đức Cường Thư Pháp theo Hotline để được tư vấn và chuẩn bị nhanh chóng nhất cho sự kiện của mình sắp tới nhé :</p>
                             <strong class="content-service-strong">
                                <p>Đức Cường Thư Pháp</p>
                                <p>Hotline/Zalo: 0938800758</p>
                                <p>Website: <a href="">https://duccuongthuphap.com/</a></p>
                                <p>Facebook cá nhân: <a href="">https://www.facebook.com/duccuongakan</a></p>
                                <p>Fanpage: <a href="">https://www.facebook.com/ThuPhapDucCuong/</a></p>
                             </strong>
                         </div>
                      </div>
                      <div class="content-right">
                      <h4>Bài viết mới</h4>
                          <a href=""> tranh phật</a>
                          <ul>
                            <li><a href="">Giao Lưu Thư Pháp với khách du lịch</a></li>
                            <li><a href="">Khai Trương Thư Quán và khai giảng khóa học Thư Pháp Chữ Việt</a></li>
                            <li><a href="">Làm thế nào để vẽ 1 bức tranh hoa mẫu đơn?</a></li>
                            <li><a href="">Mùa xuân biển đảo 2018 đến với vùng Cảnh sát biển 4</a></li>
                          </ul>
                          <h4 style="margin-top:30px;">Chuyên mục</h4>
                          <a href=""> tranh phật</a>
                          <ul>
                            <li><a href="">Các loại tranh thư pháp</a></li>
                            <li><a href="">Hoạt Động</a></li>
                            <li><a href="">Hướng dẫn thư pháp</a></li>
                            <li><a href="">Tin Tức</a></li>
                          </ul>
                          <form class="form" method="post" >
                              <h2 class="form-add">SUPPORT CONSULTANCY</h2>
                              <p type="Name:"><input name="name"placeholder="Write your name here.."></input></p>
                              <p type="Email:"><input name="email" placeholder="Let us know how to contact you back.."></input></p>
                              <p type="Phone:"><input name="phone" placeholder="Write your phone number here.."></input></p>
                              <p type="Address:"><input name="address" placeholder="Write your address here.."></input></p>
                              <p type="Describe:"><input name="describe" placeholder="Write your describe here.."></input></p>
                              <button>Consulting</button>
                           </form>
                      </div>
               </section>
         <!-- End main header -->
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
    <script src="./app.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
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
