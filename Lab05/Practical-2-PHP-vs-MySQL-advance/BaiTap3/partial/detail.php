<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="../eshopper/css/bootstrap.min.css" rel="stylesheet">
    <link href="../eshopper/css/font-awesome.min.css" rel="stylesheet">
    <link href="../eshopper/css/prettyPhoto.css" rel="stylesheet">
    <link href="../eshopper/css/price-range.css" rel="stylesheet">
    <link href="../eshopper/css/animate.css" rel="stylesheet">
    <link href="../eshopper/css/main.css" rel="stylesheet">
    <link href="../eshopper/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="../eshopper/js/htlogo pull-leftml5shiv.js"></script>
    <script src="../eshopper/js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="../eshopper/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="../eshopper/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="../eshopper/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="../eshopper/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../eshopper/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="../index.php"><img src="../eshopper/images/home/logo.png" alt=""/></a>
                    </div>

                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">

                            <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="../index.php" class="active">Home</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <input type="text" placeholder="Search"/>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->


<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">


                    <div class="shipping text-center"><!--shipping-->
                        <img src="../eshopper/images/home/shipping.jpg" alt="" style="height: 450px;object-fit:cover ">
                    </div><!--/shipping-->

                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="col-sm-5">
                        <div class="view-product">
                            <?php
                            isset($_GET['id']) ? $id = $_GET['id'] : $id = 0;
                            require_once '../model/sua.php';
                            $sua = new Sua('cuahangsua');
                            $result = $sua->GetByID($id);
                            ?>
                            <img src="<?php echo $result['image_path'] ?>" style="object-fit: cover">

                        </div>


                    </div>
                    <div class="col-sm-7">
                        <div class="product-information"><!--/product-information-->
                            <img src="images/product-details/new.jpg" class="newarrival" alt="">
                            <h2><?php echo $result['TenSua'] ?></h2>
                            <p>Loại: <?php echo $result['LoaiSua'] ?></p>
                            <img src="../eshopper/images/product-details/rating.png" alt="">
                            <span>
									<span><?php echo number_format($result['DonGia']) ?> VND</span>

								</span>
                            <p><b>Trọng lượng:</b> <?php echo $result['TrongLuong'] ?> gram</p>
                            <p><input type="button" class="btn btn-info" onclick="window.history.go(-1)" value="Quay lại"></input></p>

                        </div><!--/product-information-->
                    </div>
                </div><!--/product-details-->


            </div>
        </div>
    </div>
</section>

<footer id="footer"><!--Footer-->


    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
                <p class="pull-right">Designed by <span><a target="_blank"
                                                           href="http://www.themeum.com">Themeum</a></span></p>
            </div>
        </div>
    </div>

</footer><!--/Footer-->


<script src="../eshopper/js/jquery.js"></script>
<script src="../eshopper/js/bootstrap.min.js"></script>
<script src="../eshopper/js/jquery.scrollUp.min.js"></script>
<script src="../eshopper/js/price-range.js"></script>
<script src="../eshopper/js/jquery.prettyPhoto.js"></script>
<script src="../eshopper/js/main.js"></script>
</body>
</html>