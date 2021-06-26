<!DOCTYPE php>
<php>
    <?php
  session_start();

  require "config.php";
  require "models/db.php";
  require "models/product.php";
  require "models/manufacture.php";
  require "models/protype.php";
  $product = new Product;
  $manufacture = new Manufacture;
  $protype = new Protype;
?>
        <!-- Mirrored from demo.harnishdesign.net/php/bigshop/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Aug 2015 08:25:06 GMT -->

        <head>
            <meta charset="UTF-8" />
            <title>Bigshop php Template</title>
            <link href="image/favicon.png" rel="icon" />
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">
            <!-- CSS Part Start-->
            <link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
            <link rel="stylesheet" type="text/css" href="css/slideshow.css" media="screen" />
            <link rel="stylesheet" type="text/css" href="css/colorbox.php" media="screen" />
            <link rel="stylesheet" type="text/css" href="css/carousel.css" media="screen" />
            <!-- CSS Part End-->
            <!-- JS Part Start-->
            <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
            <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
            <script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
            <script type="text/javascript" src="js/colorbox/jquery.colorbox-min.js"></script>
            <script type="text/javascript" src="js/tabs.js"></script>
            <script type="text/javascript" src="js/jquery.easing-1.3.min.js"></script>
            <script type="text/javascript" src="js/cloud_zoom.js"></script>
            <script type="text/javascript" src="js/custom.js"></script>
            <script type="text/javascript" src="js/jquery.dcjqaccordion.js"></script>
            <!-- JS Part End-->
        </head>

        <body>
            <div class="main-wrapper">
                <!-- Header Parts Start-->
                <div id="header">
                    <!-- Top Right part Links-->
                    <div id="welcome">
                        <div id="language">Language
                            <ul>
                                <li>
                                    <a title="English"><img src="image/flags/gb.png" alt="English" />English</a>
                                </li>
                            </ul>
                        </div>
                        <div id="currency">Currency
                            <ul>
                                <li><a title="US Dollar"><b>$ - US Dollar</b></a></li>
                                <li><a title="Euro">€ - Euro</a></li>
                                <li><a title="Pound Sterling">£ - Pound Sterling</a></li>
                            </ul>
                        </div>
                        <div class="links">My Account
                            <ul>
                                <li><a href="#">My Account</a></li>
                                <li><a href="#" id="wishlist-total">Wish List (0)</a></li>
                                <li><a href="cart.php">Shopping Cart</a></li>
                                <li><a href="logout.php">Checkout</a></li>
                            </ul>
                        </div>
                        <?php
                            if (isset($_SESSION['user'])){
                                $user = $_SESSION['user'];
                        ?>  
                        <div class="dropdown"><a href="#">Hello <?php echo $user;?><i class="fa fa-angle-down"></i>
                        <ul role="menu" class="sub-menu">
                                    <li><a href="#">Account information</a></li>
                                    <li><a href="logout.php">Log out <i class="fa fa-sign-out" style="font-size:24px"></i></a></li>
                                </ul>
                        </div>
                        <?php
                            }
                            else{
                            ?>
                            <li><a href="mobilelogin.php">Login</a></li>
                            <?php
                            }
                            ?>
                    </div>
                    <div id="logo">
                        <a href="index.php"><img src="image/logo.png" title="ecommerce php Template" alt="ecommerce php Template" /></a>
                    </div>
                    <div id="search">
                    <form action="result.php" method="get">
                        <div class="button-search pull-right"></div>
                        <input type="text" value="" placeholder="Search" id="" name="key">
                    </form>
                    </div>
                </div>
                <!--Top Navigation Start-->
                <div id="menu"><span>Menu</span>
                    <ul>
                        <li class="home"><a title="Home" href="index.php"><span>Home</span></a></li>
                        <li><a href="index.php">Home</a>
                        </li>
                        <li><a href="#">Products</a>
                            <div>
                                <ul>
                                    <?php 
                                        foreach($protype->getAllProtype() as $key => $value){
                                        //var_dump($value);                               
                                        ?>
                                    <li>
                                        <a href="cate.php?id=<?php echo $value['type_ID'] ?>">
                                            <?php echo $value['type_Name'] ?>
                                        </a>
                                    </li>
                                    <?php  } ?>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#">Books</a>
                        </li>
                        <li><a href="#">Clothing</a>
                            <div>
                                <ul>
                                    <li><a href="#">Women Clothing</a></li>
                                    <li><a href="#">Men Clothing</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#">Furniture</a> </li>
                        <li class="dropdown submenu">
                            <a href="cart.php">Cart</a> 
                        </li>
                        <li class="dropdown submenu">
                        <a href="cart.php">Cart</a>
                        </li>
                    </ul>
                </div>
                <!--Top Navigation Start-->
                <div id="container">
                    <!--Left Part-->
                    <div id="column-left">
                        <!--Categories Part Start-->
                        <div class="box">
                            <div class="box-heading">Thể Loại</div>
                            <div class="box-content box-category">
                                <!--category-productsr-->
                                <?php
                                foreach($manufacture->getAllManufactures() as $key => $value){
                            ?>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a href="manu.php?id=<?php echo $value['manu_ID']?>">
                                                    <?php echo $value['manu_Name'] ?>
                                                </a>
                                            </h4>
                                        </div>
                                    </div>
                                    <?php
                                }
                            ?>
                            </div>
                        </div>
                        <!--Categories Part End-->
                        <!--Latest Product Start-->
                        <div class="box">
                            <div class="box-heading">Sản Phẩm Nổi Bậc</div>
                            <div class="box-content">
                                <div class="box-product">
                                    <!--features_items-->
                                    <?php 
                        foreach($product->lay3SanPhamNoiBat() as $key => $value)
                        {

                        //var_dump($value);
                        
                        ?>
                                    <div>
                                        <div class="image"><a href="detail.php"><img src="image/product/<?php echo $value['Image']; ?>"style = width="80px" height="80px"" alt="Chair Swing" /></a></div>
                                        <p>
                                            <a href="detail.php?id=<?php echo $value['ID']; ?>">
                                                <?php echo $value['Name'] ;?>
                                            </a>
                                        </p>
                                        <h2>
                                            <?php  echo number_format($value['Price']) ?>
                                        </h2>
                                        <div class="rating"><img src="image/stars-3.png" alt="Based on 1 reviews." /></div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <!--Latest Product End-->
                        <!--Specials Product Start-->
                        <div class="box">
                            <div class="box-heading">Sản Phẩm Mới</div>
                            <div class="box-content">
                                <div class="box-product">
                                    <!--features_items-->
                                    <?php 
                        foreach($product->getAllFeatureProducts() as $key => $value)
                        {

                        //var_dump($value);
                        
                        ?>
                                    <div>
                                        <div class="image"><a href="detail.php"><img src="image/product/<?php echo $value['Image']; ?>"style = width="80px" height="80px"" alt="Chair Swing" /></a></div>
                                        <p>
                                            <a href="detail.php?id=<?php echo $value['ID']; ?>">
                                                <?php echo $value['Name'] ;?>
                                            </a>
                                        </p>
                                        <h2>
                                            <?php  echo number_format($value['Price']) ?>
                                        </h2>
                                        <div class="rating"><img src="image/stars-3.png" alt="Based on 1 reviews." /></div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <!--Specials Product End-->
                    </div>
                    <!--Left End-->
                    <!--Middle Part Start-->
                    <div id="content">
                        <p class="welcome">"Giao diện sạch sẽ và hiện đại cho phép bạn sử dụng chủ đề cho mọi loại cửa hàng trực tuyến Thương mại điện tử. Giao diện tuyệt vời trên Máy tính để bàn, Máy tính bảng và Điện thoại di động."</p>
                        <script type="text/javascript">
                            $(document).ready(function() {
                                $('#slideshow').nivoSlider();
                            });
                        </script>
                        <!--Slideshow Part End-->