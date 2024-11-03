<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Trang chủ</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />

        <style>

        </style>
    </head>
    <body>

    <!-- Gọi header.php vào trang --> 
        <?php
            include '../header.php';
        ?>
            <header class=" bg-dark py-5 ">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h3 class=" custom-title text-white mb-2">Khách sạn Trà Vinh </h3>
                                <i class="lead fw-normal text-white-50 mb-4 margin-bottom: 20px">Khám phá không gian lưu trú đẳng cấp với dịch vụ tận tâm và tiện nghi hiện đại bậc nhất tại đây.!</i>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Đặt phòng ngay</a>
                                    <a class="btn btn-outline-light btn-lg px-4" href="lienhe.php">Liên hệ</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="https://th.bing.com/th/id/R.b9054d682312f6ae7e5165d41ded6399?rik=u%2brz04IcW%2fuZfQ&pid=ImgRaw&r=0" alt="..." /></div>
                    </div>
                </div>
                
            </header>
    <!-- Tìm phòng theo ngày  --> 
            <div class="container mt-5">
                    <div class="row mb-3">
                        <div class="col">
                            <label for="checkin" class="form-label">Nhận phòng:</label>
                            <input type="date" class="form-control" id="checkin" name="checkin">
                        </div>
                        <div class="col">
                            <label for="nights" class="form-label">Số đêm:</label>
                            <select class="form-control" id="nights" name="nights">
                                <option value="1">1 đêm</option>
                                <option value="2">2 đêm</option>
                                <option value="3">3 đêm</option>
                                <!-- Thêm các lựa chọn khác nếu cần -->
                            </select>
                        </div>
                        <div class="col">
                            <label for="checkout" class="form-label">Trả phòng:</label>
                            <input type="date" class="form-control" id="checkout" name="checkout" readonly>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="guests" class="form-label">Khách và Phòng:</label>
                        <select class="form-control" id="guests" name="guests">
                            <option value="2">2 người lớn, 0 trẻ em, 1 phòng</option>
                            <option value="3">3 người lớn, 0 trẻ em, 1 phòng</option>
                            <option value="4">2 người lớn, 2 trẻ em, 1 phòng</option>
                            <!-- Thêm các lựa chọn khác nếu cần -->
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Tìm khách sạn</button>
                </form>
            </div>
        
            <script>
                // Cập nhật ngày trả phòng dựa trên số đêm
                document.getElementById("checkin").addEventListener("change", updateCheckoutDate);
                document.getElementById("nights").addEventListener("change", updateCheckoutDate);
        
                function updateCheckoutDate() {
                    const checkinDate = new Date(document.getElementById("checkin").value);
                    const nights = parseInt(document.getElementById("nights").value);
        
                    if (!isNaN(checkinDate.getTime()) && nights > 0) {
                        const checkoutDate = new Date(checkinDate);
                        checkoutDate.setDate(checkinDate.getDate() + nights);
                        document.getElementById("checkout").value = checkoutDate.toISOString().split("T")[0];
                    } else {
                        document.getElementById("checkout").value = "";
                    }
                }
            </script>

            <!-- Blog preview section-->
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-10 col-xl-7">
                            <div class="text-center">
                                <h2 class="fw-bolder">ĐẶT PHÒNG NGAY</h2>
                                <i class="lead fw-normal text-muted mb-5">Trải nghiệm không gian sang trọng, dịch vụ đẳng cấp và những khoảnh khắc đáng nhớ tại khách sạn của chúng tôi.</i>
                            </div>
                        </div>
                    </div>
                    <div class="hinhanh gx-5">
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="https://th.bing.com/th/id/OIP.-28gg80wL5a6FQMtp3pDYAAAAA?rs=1&pid=ImgDetMain" alt="..." style="style= width: 100%; height: 80%;" />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Phòng đơn</h5></a>
                                    <p class="card-text mb-0">Phòng nghỉ tiện nghi dành cho khách đi công tác hoặc nghỉ ngơi ngắn hạn, đảm bảo sự riêng tư và thoải mái.</p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-8 ">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="https://th.bing.com/th/id/R.1edddf09ee310545cecbc8fd76c2850b?rik=KE4bAq4OjGfu1g&riu=http%3a%2f%2fminhcuonghotel.com%2fupload%2fimages%2fproduct1599556279.JPG&ehk=a%2bwsLOvg3gTwSPLmp7Pf691yQOfWGQF6NWA21hVUy80%3d&risl=&pid=ImgRaw&r=0" alt="..." style="style= width: 100%; height: 100%;" />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">Media</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Phòng đôi</h5></a>
                                    <p class="card-text mb-0">Không gian lý tưởng cho các cặp đôi hoặc bạn bè với thiết kế hiện đại và đầy đủ tiện nghi.</p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="https://www.hancorp.com.vn/wp-content/uploads/2021/10/thiet-ke-phong-gia-dinh-9.jpg" alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Phòng gia đình</h5></a>
                                    <p class="card-text mb-0">Phòng rộng rãi và thoáng đãng, phù hợp cho gia đình cùng tận hưởng khoảnh khắc sum vầy và thư giãn bên nhau.</p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- Gọi footer -->

    </body>
</html>
