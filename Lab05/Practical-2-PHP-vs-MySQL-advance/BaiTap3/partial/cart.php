<?php session_start(); ?>
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
                    <div class=" pull-right">
                        <input id="del_session" type="button" class="btn btn-danger" value="Xóa tất cả giỏ hàng"/>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->


<section>
    <div class="container">
        <div class="row">
            <section id="cart_items">
                <div class="container">
                    <div class="breadcrumbs">
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Shopping Cart</li>
                        </ol>
                    </div>
                    <div class="table-responsive cart_info">
                        <table class="table table-condensed">
                            <thead>
                            <tr class="cart_menu">
                                <td class="image">Sản phẩm</td>
                                <td class="description"></td>
                                <td class="price">Giá</td>
                                <td class="quantity">Số lượng</td>
                                <td class="total">Tổng tiền</td>
                                <td></td>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            if (isset($_SESSION['cart'])):
                                foreach ($_SESSION['cart'] as $id => $cartItem) :
                                    $total = 0;
                                    $total += ($cartItem['price'] * $cartItem['quantity']);
                                    ?>
                                    <tr>
                                        <td class="cart_product">
                                            <a href=""><img src="<?php echo $cartItem['image'] ?>"
                                                            style="width: 80px;height: 80px"></a>
                                        </td>
                                        <td class="cart_description">
                                            <h4><a href=""><?php echo $cartItem['name'] ?></a></h4>
                                        </td>
                                        <td class="cart_price">
                                            <p><?php echo number_format($cartItem['price']) ?> VND</p>
                                        </td>
                                        <td class="cart_quantity">
                                            <div class="cart_quantity_button">
                                                <a class="cart_quantity_up" href=""> + </a>
                                                <input class="cart_quantity_input" type="text" name="quantity"
                                                       value="<?php echo $cartItem['quantity'] ?>"
                                                       autocomplete="off" size="2">
                                                <a class="cart_quantity_down" href=""> - </a>
                                            </div>
                                        </td>
                                        <td class="cart_total">
                                            <p class="cart_total_price"><?php echo number_format($total) ?></p>
                                        </td>

                                    </tr>
                                <?php endforeach;
                            endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
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
<script>
    $(function () {
        $('#del_session').on('click', function () {

            $.ajax(
                {
                    type: 'GET',
                    dataType: 'json',
                    url: "delsession.php",
                    success: function (data) {
                        if (data.code == 200) {
                            location.reload();
                        }
                    },
                    error: function () {

                    }
                }
            );
        })
    })
</script>
</body>
</html>