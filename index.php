<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>เว็บไซต์สวนสนุก</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <?php include("css.php") ?>
    <style>
        .card-img-top {
    width: 100%;
    height: 15vw;
    object-fit: cover;
}
    </style>
</head>

<body>
    <?php include("header.php") ?>




    <!-- Hero Start -->
    <div class="container-fluid py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-md-12 col-lg-7">
                    <h4 class="mb-3 text-secondary text-uppercase">สวนสนุก happy land</h4>
                    <h1 class="mb-5 display-3 text-primary">ยินดีต้อนรับ</h1>

                </div>
                <div class="col-md-12 col-lg-5">
                    <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <?php
                            $sql = "SELECT * FROM typeplayer";
                            $result = mysqli_query($conn, $sql);
                            $i = 0;
                            if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while ($row = mysqli_fetch_assoc($result)) {
                                    if ($i == 0) {
                            ?>
                                        <div class="carousel-item active rounded">
                                            <img src="img/<?=$row['t_image']?>" class="img-fluid w-100 h-100 bg-secondary rounded" alt="<?=$i?>">
                                            <a href="#" class="btn px-4 py-2 text-white rounded"><?=$row['t_name']?></a>
                                        </div>
                                    <?php
                                    } else {
                                    ?>
                                        <div class="carousel-item rounded">
                                            <img src="img/<?=$row['t_image']?>" class="img-fluid w-100 h-100 rounded " alt="<?=$i?>">
                                            <a href="#" class="btn px-4 py-2 text-white rounded"><?=$row['t_name']?></a>
                                        </div>
                                    <?php
                                    }
                                    $i++;

                                    ?>
                            <?php
                                }
                            } else {
                                echo "0 results";
                            }
                            ?>


                            
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->



    <!-- Fruits Shop Start-->
    <div class="container-fluid fruite py-3">
        <div class="container py-3">
            <div class="tab-class text-center">
                <div class="row g-4">
                    <div class="col-lg-4 text-start">
                        <h1>ประเภทเครื่องเล่น</h1>
                    </div>
                    <div class="col-lg-8 text-end">
                        <ul class="nav nav-pills d-inline-flex text-center mb-5">
                            <li class="nav-item">
                                <a class="d-flex m-2 py-2 bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                                    <span class="text-dark" style="width: 130px;">ทั้งหมด</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">

                                    <?php
                                    $sql = "SELECT * FROM typeplayer";
                                    $result = mysqli_query($conn, $sql);

                                    if (mysqli_num_rows($result) > 0) {
                                        // output data of each row
                                        while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                            <div class="col-md-6 col-lg-4 col-xl-4">
                                                <div class="rounded position-relative fruite-item">
                                                    <div class="fruite-img" >
                                                        <img src="img/<?= $row['t_image'] ?>" class="img-fluid w-100 rounded-top card-img-top" alt="">
                                                    </div>
                                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">เคริ่องเล่น</div>
                                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                        <h4><?= $row['t_name'] ?></h4>
                                                        <p><?=$row['t_discription']?></p>
                                                        <div class="d-flex justify-content-between flex-lg-wrap mt-4">
                                                            <p class="text-dark fs-5 fw-bold mb-0"><?= $row['t_price'] ?> บาท</p>
                                                            <a href="addorder.php?v=addcart&id=<?= $row['id'] ?>&qty=1" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    ?>







                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fruits Shop End-->















    <!-- Tastimonial Start -->
    <div class="container-fluid testimonial py-5">
        <div class="container py-5">
            <div class="testimonial-header text-center">
                <h1 class="display-5 text-primary">Contact US</h1>
                <h4 class="mb-5 text-dark">ติดต่อพูดคุยกับเรา</h4>
            </div>
            <div class="row g-4">
                <div class="col-lg-12">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4 col-xl-4">
                            <div class="testimonial-item img-border-radius bg-light rounded p-4">
                                <div class="position-relative">
                                    <i class="fa fa-quote-right fa-2x text-secondary position-absolute" style="bottom: 30px; right: 0;"></i>
                                    <div class="mb-4 pb-4 border-bottom border-secondary  text-center">
                                        <p class="mb-0 h5">สมาชิกคนที่ 1
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center flex-nowrap">
                                        <div class="bg-secondary rounded">
                                            <img src="img/avatar.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                        </div>
                                        <div class="ms-4 d-block">
                                            <h5 class="text-dark">นรวิชญ์ วิลาวรรณ์ </h5>
                                            <p class="m-0 pb-3">รหัสนักศึกษา : 6435510007 </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4">
                            <div class="testimonial-item img-border-radius bg-light rounded p-4">
                                <div class="position-relative">
                                    <i class="fa fa-quote-right fa-2x text-secondary position-absolute" style="bottom: 30px; right: 0;"></i>
                                    <div class="mb-4 pb-4 border-bottom border-secondary  text-center">
                                        <p class="mb-0 h5">สมาชิกคนที่ 2
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center flex-nowrap">
                                        <div class="bg-secondary rounded">
                                            <img src="img/avatar.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                        </div>
                                        <div class="ms-4 d-block">
                                            <h5 class="text-dark">ก้องภพ สุภาวงศ์</h5>
                                            <p class="m-0 pb-3">รหัสนักศึกษา : 6435510013 </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4">
                            <div class="testimonial-item img-border-radius bg-light rounded p-4">
                                <div class="position-relative">
                                    <i class="fa fa-quote-right fa-2x text-secondary position-absolute" style="bottom: 30px; right: 0;"></i>
                                    <div class="mb-4 pb-4 border-bottom border-secondary  text-center">
                                        <p class="mb-0 h5">สมาชิกคนที่ 3
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center flex-nowrap">
                                        <div class="bg-secondary rounded">
                                            <img src="img/avatar.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                        </div>
                                        <div class="ms-4 d-block">
                                            <h5 class="text-dark">เธียรเมฆ แสงทอง</h5>
                                            <p class="m-0 pb-3">รหัสนักศึกษา : 6435510014 </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Tastimonial End -->




    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>เว็บไซต์สวนสนุก</a></span>
                </div>

            </div>
        </div>
    </div>
    <!-- Copyright End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>



    <?php include("script.php") ?>
</body>

</html>