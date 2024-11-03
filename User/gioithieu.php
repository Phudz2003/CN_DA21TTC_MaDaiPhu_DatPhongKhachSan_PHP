<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Giới thiệu</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />    
</head>
    <style>
        .my-class {
            text-align: center;
            font-family: Georgia, serif;
            margin-top: 25px;
    }   
        .lichsu{
           margin-top:50px;
           margin-left:20px;
        }
        .hinhanh{
             width: 60% ;
             height: 100%;
             margin: 0 auto;
             display: block;
        }
    </style>

<body>
        <!-- Gọi header.php vào trang --> 
        <?php
            include '../header.php';
        ?>

     <h1 class="my-class">Giới thiệu </h1>
           
        <!-- Product section-->
            <section class="py-5">
            <div class="container px-10 px-lg-5 my-1">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6">
                        <img class="card-img-top mb-5 mb-md-0" src="https://th.bing.com/th/id/R.6f75d041d1b70079d3887b63b6cb9994?rik=R%2feNih2yHGMlIg&pid=ImgRaw&r=0" alt="..." /></div>
                        <div class="col-md-6">
                           <h1 class="display-5 fw-bolder">Khách sạn Trà Vinh</h1>
                           <p class="lead">Khách sạn Trà Vinh là ngôi nhà thứ hai ấm cúng dành cho gia đình bạn. Nằm ngay trung tâm thành phố Trà Vinh, khách sạn cung cấp các phòng nghỉ rộng rãi, tiện nghi và nhiều hoạt động vui chơi giải trí dành cho trẻ em. Với đội ngũ nhân viên thân thiện và chuyên nghiệp, chúng tôi cam kết mang đến cho bạn kỳ nghỉ thật sự ý nghĩa.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lichsu">
               <h3>Lịch sử hình thành và phát triển</h3>  
               <h5 style="font-family:serif;">"Khách sạn Trà Vinh chính thức ra mắt và hoạt động vào cuối năm 2024, ngay tại trung tâm thành phố Trà Vinh – một khu vực sầm uất, đầy tiềm năng phát triển trong ngành du lịch. Với sứ mệnh mang đến cho khách hàng một điểm dừng chân đẳng cấp, sang trọng và tiện nghi, khách sạn đã đầu tư kỹ lưỡng từ thiết kế hiện đại, không gian thoáng đãng đến chất lượng dịch vụ chuyên nghiệp. 

Trong năm đầu tiên hoạt động, khách sạn đã đón tiếp hàng nghìn lượt khách trong và ngoài nước, không chỉ bởi vị trí đắc địa, mà còn nhờ vào các dịch vụ chăm sóc khách hàng tận tình và chu đáo. Đội ngũ nhân viên luôn nỗ lực nâng cao chất lượng phục vụ, tạo cảm giác thoải mái, dễ chịu và sự hài lòng tối đa cho khách hàng. 

Qua từng tháng, khách sạn Trà Vinh đã liên tục cải tiến và mở rộng các tiện ích nội khu như nhà hàng, quầy bar, khu vực spa – làm đẹp, và phòng hội nghị, tạo ra môi trường lý tưởng cho mọi đối tượng khách hàng từ du khách đến doanh nhân. Thông qua đó, khách sạn không chỉ góp phần vào sự phát triển của du lịch Trà Vinh mà còn xây dựng được một vị thế vững chắc trong lòng khách hàng.</h5>
                <img class="hinhanh" src="../hinhanh/hianh6.jpg" alt="..." /></div>
            </div>

</body>
</html>