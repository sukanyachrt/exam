<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>เว็บไซต์สวนสนุก</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
   

    <?php include("css.php") ?>
</head>

<body>
    <?php include("header.php") ?>


    <!-- Single Page Header start -->
    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">ข้อมูลสินค้าในตะกร้า</h1>

    </div>
    <!-- Single Page Header End -->


    <!-- Cart Page Start -->
    <div class="container-fluid">
        <div class="container py-5">
            
            <div class="row">
            <h3 class="fw-bold mb-2 text-danger">โปรโมชั่น</h3>

                <div class="col-lg-3">
                    <div class="border border-danger rounded position-relative vesitable-item">
                        
                        <div class="p-4 pb-0 rounded-bottom">
                            <h6>ซื้อตั๋วมากกว่า 5 ใบ</h6>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                                <p class="text-danger fs-5 fw-bold">มีส่วนลด 10%</p>
                             </div>
                        </div>
                    </div>


                </div>
                <div class="col-lg-3">
                <div class="border border-danger rounded position-relative vesitable-item">
                        
                        <div class="p-4 pb-0 rounded-bottom">
                            <h6>ซื้อตั๋วมากกว่า 10 ใบ</h6>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                                <p class="text-danger fs-5 fw-bold">มีส่วนลด 20%</p>
                             </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="text-end">
                <a class="btn btn-primary text-white" href="index.php" role="button"><i class="fa fa-arrow-left"></i> สั่งสินค้าเพิ่มเติม</a>
            </div>

            <div class="table-responsive mt-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">รูป</th>
                            <th scope="col">ชือสินค้า</th>
                            <th scope="col">ราคา</th>
                            <th scope="col">จำนวนตั๋ว</th>
                            <th scope="col">รวม</th>
                            <th scope="col">ลบ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $total = 0;
                        $discount = 0;
                        $sumqty = 0;
                        if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $index => $value) {
                                $sql = "SELECT * FROM typeplayer WHERE id ='" . $index . "'";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_array($result);
                                $total += $row['t_price'] * $value;
                                $sumqty += $value;
                        ?>
                                <tr>
                                    <th scope="row">
                                        <div class="d-flex align-items-center">
                                            <img src="img/<?= $row['t_image'] ?>" class="img-fluid me-5 rounded-circle" style="width: 80px; height: 80px;" alt="">
                                        </div>
                                    </th>
                                    <td>
                                        <p class="mb-0 mt-4"><?= $row['t_name'] ?></p>
                                    </td>
                                    <td>
                                        <p class="mb-0 mt-4"><?= $row['t_price'] ?></p>
                                    </td>
                                    <td>
                                        <div class="input-group quantity mt-4" style="width: 100px;">
                                            <div class="input-group-btn">
                                                <a href="addorder.php?v=updatecart&id=<?= $row['id'] ?>&qty=<?= ($value - 1) ?>" class="btn btn-sm btn-plus rounded-circle bg-light border">
                                                    <i class="fa fa-minus"></i>
                                                </a>
                                            </div>
                                            <input type="text" class="form-control form-control-sm text-center border-0" value="<?= $value ?>">
                                            <div class="input-group-btn">
                                                <a href="addorder.php?v=updatecart&id=<?= $row['id'] ?>&qty=<?= ($value + 1) ?>" class="btn btn-sm btn-plus rounded-circle bg-light border">
                                                    <i class="fa fa-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0 mt-4"><?= $row['t_price'] * $value ?></p>
                                    </td>
                                    <td>
                                        <a href="addorder.php?v=removecartByid&id=<?= $row['id'] ?>" class="btn btn-md rounded-circle bg-light border mt-4">
                                            <i class="fa fa-times text-danger"></i>
                                        </a>
                                    </td>

                                </tr>
                            <?php
                            }
                        } else {
                            ?>
                            <tr>

                                <td colspan="6" class="text-center">
                                    <h5 class="mb-0 my-4 ">ยังไม่ได้มีการหยิบสินค้าใดๆ</h5>
                                </td>
                            </tr>
                        <?php
                        }
                        if ($sumqty >= 5 && $sumqty < 10) {
                            $discount = ($total * 10) / 100;
                        } else if ($sumqty >= 10) {
                            $discount = ($total * 20) / 100;
                        }

                        ?>


                    </tbody>
                </table>
            </div>

            <div class="row g-4 justify-content-end">
                <div class="col-8"></div>
                <div class="col-sm-8 col-md-7 col-lg-6 col-xl-4">
                    <div class="bg-light rounded">
                        <div class="p-4">
                            <h1 class="display-6 mb-4"> <span class="fw-normal">รวมทั้งสิ้น </span></h1>
                            <div class="d-flex justify-content-between mb-4">
                                <h5 class="mb-0 me-4">รวมทั้งหมด</h5>
                                <p class="mb-0"><?= $total ?></p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h5 class="mb-0 me-4">ส่วนลด</h5>
                                <p class="mb-0"><?= $discount ?></p>
                            </div>

                        </div>
                        <div class="py-4 mb-4 border-top border-bottom d-flex justify-content-between">
                            <h5 class="mb-0 ps-4 me-4">ราคารวม</h5>
                            <p class="mb-0 pe-4"><?= number_format($total - $discount, 2) ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart Page End -->



    <?php include("footer.php") ?>


    <?php include("script.php") ?>
</body>

</html>