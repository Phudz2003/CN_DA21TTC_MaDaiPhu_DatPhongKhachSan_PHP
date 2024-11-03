<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiện nghi khách sạn</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">

    <style>
        .facility-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out;
        }
        .facility-card:hover {
            transform: translateY(-5px);
        }
        .facility-icon {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .facility-title {
            font-weight: bold;
            font-size: 18px;
        }
        .facility-description {
            font-size: 14px;
            color: #555;
        }
        .my-4{
            font-family:  serif;
             color: #000055;
        }
    </style>
</head> 
<body>
     <?php
        include'../header.php';
    ?>

    <div class="container">
    <h2 class="text-center my-4 ">CÁC TIỆN NGHI CỦA CHÚNG TÔI</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="facility-card text-center">
                <div class="facility-icon">📶</div>
                <div class="facility-title">Wifi</div>
                <div class="facility-description">Wifi tốc độ cao giúp khách hàng dễ dàng kết nối và làm việc hiệu quả.</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="facility-card text-center">
                <div class="facility-icon">❄️</div>
                <div class="facility-title">Điều Hòa</div>
                <div class="facility-description">Khách hàng có thể dễ dàng điều chỉnh nhiệt độ phù hợp để tận hưởng không gian thoải mái.</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="facility-card text-center">
                <div class="facility-icon">📺</div>
                <div class="facility-title">Tivi</div>
                <div class="facility-description">Tivi với nhiều kênh đa dạng, đáp ứng nhu cầu giải trí của quý khách.</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="facility-card text-center">
                <div class="facility-icon">💆</div>
                <div class="facility-title">Spa</div>
                <div class="facility-description">Trải nghiệm các liệu pháp chăm sóc thư giãn và massage chuyên nghiệp.</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="facility-card text-center">
                <div class="facility-icon">🔥</div>
                <div class="facility-title">Máy Sưởi</div>
                <div class="facility-description">Giữ phòng ấm áp và thoải mái trong suốt mùa đông.</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="facility-card text-center">
                <div class="facility-icon">💧</div>
                <div class="facility-title">Nóng Lạnh</div>
                <div class="facility-description">Trang bị hiện đại với nước nóng lạnh, đáp ứng nhu cầu sinh hoạt tiện nghi.</div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
