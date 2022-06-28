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
                    <h1 class="main-header-h1">INTRODUCE</h1>
                    <p>Các tác phẩm thư pháp, thư họa hoa mẫu đơn, hoa sen, tranh Đạt Ma Sư Tổ trên các chất liệu như giấy, gỗ, vải…do  Đức Cường sáng tác</p>
                    <div class="main-link-home">
                        <a href="index.php">Home</a>
                        <p>/ Giới thiệu</p>
                    </div>
                </section>
               <section class="main-content">
                      <div class="content-left">
                          <div class="blockquocte">
                              <p>“Tôi yêu thích những giá trị truyền thống, đặc biệt là cái cảm giác thư thái nho nhã của một người cầm bút lông viết chữ, vẽ tranh, đó là lý do tôi theo đuổi bộ môn nghệ thuật này.</p>
                              <p>Thư pháp - thủy mặc gắn liền với cuộc sống của tôi, nó như cuốn hút tôi ở cái nhìn đầu tiên bởi vẻ đẹp mộc mạc, giản đơn nhưng tinh túy trong từng đường nét.”</p>
                          </div>
                         <div class="content-bottom">
                             <p class="content-h1">Chàng trai 9x yêu thích văn hóa Á Đông</p>
                             <p>Từ nhỏ Đức Cường đã yêu thích nét đẹp văn hóa của phương Đông qua những bộ phim, những họa tiết, phù điêu, trang phục và kiến trúc… Nó đi sâu vào trong suy nghĩ, tư tưởng và việc làm của một con người hoài cổ khác với bạn bè cùng trang lứa.</p>
                             <p>Sau 5 năm ngồi trên giảng đường đại học, được chọn là cựu sinh viên tiêu biểu khoa kiến trúc – ĐHQT Hồng Bàng, được đề nghị về trường làm việc ngay sau khi ra trường, có thời gian làm kts thiết kế ý tưởng cho dự án cấp 1 quốc gia – nhà thi đấu Phan Đình Phùng mới –TP Hồ Chí Minh với mức lương đáng mơ ước của nhiều người, nhưng sau tất cả anh lại chọn trở thành một nhà thư pháp, một họa sĩ thủy mặc.</p>
                             <img src="img/content-introduce-1.jpg" alt="">
                             <p>Đức Cường chia sẻ vào thời điểm nghỉ công việc kiến trúc để ở nhà vẽ tranh, gia đình và rất nhiều người phản đối, khi đã uổng phí 5 năm học và công việc hiện tại đang ổn định. Anh sẵn sàng tách ra khỏi đám đông để đi một mình miễn sao mình vui với con đường mình lựa chọn thì có gì để hối tiếc.</p>
                             <p>“Với tôi suốt 5 năm đại học nó không hề uổng phí vì những gì tôi học được tại đó là vốn kiến thức, cái tư duy tôi áp dụng trên những sáng tác của mình từ đường nét, bố cục, tỉ lệ, sắc độ…”</p>
                             <p>Không kỳ vọng quá nhiều vào vật chất, thành công hay danh tiếng, Đức Cường vẫn vẽ cho chính mình, đặt những cảm xúc, sự hiểu biết của mình trên từng nét bút như một cách trải lòng mình.</p>
                             <p>Có câu: “Tri túc tâm thường lạc – Vô cầu phẩm tự cao” Tôi hài lòng với cuộc sống hiện tại, tôi vui khi được viết, được vẽ, được có thể sống với đam mê nghiệp cầm bút của mình. Tôi luôn quan niệm “hãy vẽ cho mình trước, chính mình phải thấy nó đẹp rồi sau đó mới để nó tới tay của của những người khác”.</p>
                             <p>Khi nhắc tới tranh thủy mặc, tranh thiền tại Việt Nam nó còn khá xa lạ với đa số mọi người. Anh thừa nhận, sự tìm hiểu và khả năng của mình cũng chỉ như một người học việc giữa cái bao la của bộ môn này.</p>
                             <p class="content-h1">Nét đẹp của tranh thiền- tranh Tổ Đạt Ma</p>
                             <p>Được mọi người biết đến qua những cuộc triển lãm thư pháp, đặc biệt là những bức tranh về Tổ Thiền Đạt Ma đầy sống động. Cái tên Mai Đức Cường không còn xa lạ gì với những người yêu thích bộ môn Thư Pháp Chữ Việt, cũng như những người yêu tranh Tổ Đạt Ma tại Việt Nam.</p>
                             <p>Gặp Đức Cường khi anh đang trong giai đoạn chuẩn bị một không gian riêng cho Trà –Thiền tại TP Hồ Chí Minh. Nếu như ai đó lần đầu gặp anh, chắc cũng sẽ bất ngờ bởi một người với tuổi đời còn khá trẻ lại có thể tạo ra những tác phẩm ngoài sức tưởng tượng.</p>
                             <p>Mọi ý tưởng, cảm hứng của anh đều bắt nguồn từ cuộc sống, từ những tài liệu, tích sử, những bài thi- kệ về Thiền.</p>
                             <img src="img/content-introduce-2.jpg" alt="">
                             <p>Cũng như viết thư pháp, vẽ tranh cũng cần sự tập trung, nhiếp tâm đặt từng nét bút trên mặt giấy. Một bức tranh thiền không phải là viết chữ thiền hay chữ phật mà phải đặt nội tâm mình trong nó, có cái lặng vừa đủ, động nhẹ nhàng.</p>
                             <p>“Người ngồi giữa cuộc đổi thay</p>
                             <p>Lặng nhìn nước chảy mây bay mỉm cười”</p>
                             <p>Sen gắn liền với Phật Giáo nhưng để vẽ ra một bông sen mang chất thiền, đòi hỏi người vẽ cũng cần phải có cảm xúc của thiền, một cành mai trong thơ thiền của Mãn Giác thiền sư, để vẽ nên cái thiền vị khi ấy cũng cần đưa tâm hồn họa sĩ vào trong khung cảnh đó.</p>
                             <p>“Mạc vị xuân tàn hoa lạc tận</p>
                             <p>Đình tiền tạc dạ nhất chi mai”</p>
                             <p>Tranh Tổ Đạt Ma cũng vậy, nếu như không có sự tìm hiểu, không đặt cảm xúc của mình vào nét bút thì cũng chỉ tạo ra những bức tranh vô hồn.</p>
                             <img style="margin-left: 90px;" src="img/content-introduce-3.jpg" alt="">
                             <p>“Thời điểm tôi vẽ 3 bức tranh Tổ Đạt Ma đầu tiên đăng lên nhóm tượng gỗ Đạt Ma rất nhiều người nhắn tin cho tôi, họ còn nghĩ nó là tranh của Trung Quốc. Khi biết nó là tranh do tôi là người Việt Nam vẽ họ rất ngạc nhiên. Tôi còn nhớ câu nói của một người nhắn cho mình: “Mình có thể đi tỉnh nào cũng có thể tìm người tạc tượng Đạt Ma, còn tranh Tổ thì đây là lần đầu mình biết có người ở Việt Nam vẽ”.</p>
                             <p>Quả thực tôi không phải là người đầu tiên vẽ tranh Tổ,  trước tôi có một vài người cũng vẽ và nổi tiếng, nhưng lời nói đó như tiếp thêm động lực cho tôi tại thời điểm đó.”</p>
                             <p>Cho tới hiện tại Đức Cường đã cho ra ra đời hàng trăm bức tranh Tổ Đạt Ma, với anh luôn muốn là sự khác biệt ở mỗi tác phẩm, mỗi bức tranh ra đời là một cột mốc, mỗi cảm xúc, mỗi kỷ niệm khác nhau.</p>
                             <p>“ Tôi không biết từ khi nào tôi lại yêu thích vẽ tranh Thiền, đặc biệt là tranh Tổ Đạt Ma, có thể là sự đồng điệu bởi cái tĩnh lặng trong tâm hồn của tôi. Những tác phẩm để mọi người nhắc về tôi hầu như đều là những sáng tác về Thiền –Phật”.</p>
                             <p>Với những tích sử xung quanh Tổ Thiền Đạt Ma như Cửu Niên Diện Bích, Đạt Ma Quá Hải, Đạt Ma Xé Mí Mắt… hs. Mai Đức Cường với đôi bàn tay tài hoa của mình đã thổi hồn cho từng nét bút, từng tác phẩm với những góc độ và tâm trạng nhân vật khác nhau.</p>
                             <img style="margin-left: 90px;" src="img/content-introduce-4.jpg" alt="">
                             <img style="margin-left: 90px;" src="img/content-introduce-5.jpg" alt="">
                             <img style="margin-left: 200px;margin-top:30px;" src="img/content-introduce-6.jpg" alt="">
                             <p>“Khi vẽ nhân vật nào tôi đều phải dành thời gian nghiên cứu, họ là ai, đến từ đâu, có điểm gì đặc biệt, vóc dáng, khuôn mặt… Tôi đang ấp ủ và tìm hiểu tài liệu để vẽ những thiền sư gắn liền với hình ảnh Việt Nam hơn như: Thiền sư Khương Tăng Hội, Phật Hoàng Trần Nhân Tông, Bồ Tát Thích Quảng Đức…. Hy vọng rằng qua những bức tranh do tôi vẽ, mọi người sẽ có cái nhìn mới, sự tò mò để tìm hiểu nhiều hơn về những nhân vật đó như một cách trợ đạo.”</p>
                             <p>Vừa rồi tranh của anh vinh dự được chọn làm vật phẩm tặng cho các đại biểu quốc tế tham dự đại lễ Vesak 2019 tại chùa Tam Chúc – Hà Nam.</p>
                             <img style="margin-left: 90px;" src="img/content-introduce-7.jpg" alt="">
                             <img style="margin-left: 120px;" src="img/content-introduce-8.jpg" alt="">
                             <p>Hiện Đức Cường đang làm việc trong ban chủ nhiệm CLB Thư Pháp Nhà Văn Hóa Thanh Niên TP Hồ Chí Minh</p>
                             <p>Ngoài thời gian vẽ tranh anh còn tích cực tham gia những hoạt động công tác xã hội hằng năm cùng Nhà Văn Hóa Thanh Niên như: Mùa Xuân Biển Đảo, Gắn Kết Yêu Thương,…</p>
                             <p>Tham gia các chương trình từ thiện phát quà cho trẻ em nghèo cùng với Chùa Minh Đạo TP. Hồ Chí Minh</p>
                             <p>Nguồn: kinhtevadubao.vn/chi-tiet/176-14863-mai-duc-cuongchang-kien-truc-su-ve-tranh-to-dat-ma.html</p>
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
