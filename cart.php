<!DOCTYPE php>
<php>
    <?php
  require_once "config.php";
  require_once "models/db.php";
  require_once "models/product.php";
  require_once "models/protype.php";
  require_once "models/manufacture.php";
  $product = new Product;
  $manufacture = new Manufacture;
  $protype = new Protype;
  // var_dump($manufacturer->getAllManufacturers());
  // var_dump(Protype::getAllProtypes());
?>
<?php
    // CHỨC NĂNG CART:
    $unitPrice = 0; // Đơn giá: Số tiền 1 món hàng.
    $price = 0; // Số tiền tính theo số lượng của 1 mặt hàng. 
    $shippingCost = 0;

    // Luôn tính toán lại tổng tiền mỗi khi tải lại trang:
    if(isset($_SESSION['cart'])==TRUE && isset($_SESSION['totalPriceOfCart'])==TRUE) {
        $_SESSION['totalPriceOfCart'] = 0;
        foreach($_SESSION['cart'] as $item => $detail) {
            $product = Product::getProduct_ByID($detail['id']);
            $_SESSION['cart'][$item]['Price'] = ($product['Price']) * $detail['quantity'];
            $_SESSION['totalPriceOfCart'] += $_SESSION['cart'][$item]['Price'];
        }
    }

    // THÊM HÀNG VÀO CART:
    if(isset($_GET['id'])==TRUE) {
        // Nếu khách hàng chưa đặt số lượng hàng thêm vào cart, thì số lượng mặc định là 1.
        $quantity = 1;
        if(isset($_GET['quantity'])==TRUE) {
            $quantity = $_GET['quantity'];
        }

        // Nếu chưa có hàng trong cart, thì tạo cart mới và thêm hàng vào cart:
        if(isset($_SESSION['cart'])==FALSE) {
            // Dữ liệu 1 món hàng trong cart:
            $product = Product::getProduct_ByID($_GET['id']);
            $unitPrice = ($product['Price']); 
            $price = $unitPrice *$quantity;
            // Thêm dữ liệu vào mảng cart:
            $arr = array();
            $detail = array("ID"=>$_GET['id'], "quantity"=>$quantity, "Price"=>$price);
            array_push($arr, $detail);
            $_SESSION['cart'] = $arr;
            // Tạo tổng tiền:
            $_SESSION['totalPriceOfCart'] = $detail['Price'];
        }
        else {
            $count = 0; // Để đếm số lượng 1 món hàng.
            foreach($_SESSION['cart'] as $item => $detail) {
                if($detail['ID'] == $_GET['ID']) {
                    $count++;
                    break;
                }
            }
            // Nếu chưa có hàng trong cart, thì thêm món hàng đó vào cart.
            if($count==0) {
                // Dữ liệu 1 món hàng trong cart:
                $product = Product::getProduct_ByID($_GET['id']);
                $unitPrice = ($product['Price']); 
                $price = $unitPrice * (int)$quantity;
                // Thêm dữ liệu vào mảng cart:
                $arr = array();
                $detail = array("ID"=>$_GET['ID'], "quantity"=>$quantity, "Price"=>$price);
                array_push($_SESSION['cart'], $detail);
                // Cập nhật tổng tiền:
                $_SESSION['totalPriceOfCart'] += $detail['Price'];
            }
        }
        //var_dump($_SESSION['cart']);
    }

    // Khi nhấn nút "UPDATE CART", thì các số lượng của các món hàng sẽ được cập nhật lại:
    if(isset($_SESSION['cart'])==TRUE && isset($_GET['updated_quantity'])==TRUE) {
        // Cập nhật số lượng:
        $i = 0;
        foreach($_SESSION['cart'] as $item => $detail) {
            $product = Product::getProduct_ByID($detail['id']);
            $_SESSION['cart'][$item]['quantity'] = $_GET['updated_quantity'][$i];
            $_SESSION['cart'][$item]['Price'] = ($product['Price']) * $detail['quantity'];
            $i++;
        }

        // Cập nhật tổng tiền:
        $_SESSION['totalPriceOfCart'] = 0;
        foreach($_SESSION['cart'] as $item => $detail) {
            $product = Product::getProduct_ByID($detail['id']);
            $_SESSION['cart'][$item]['Price'] = ($product['Price']) * $detail['quantity'];
            $_SESSION['totalPriceOfCart'] += $_SESSION['cart'][$item]['Price'];
        }

        //var_dump($_SESSION['cart']);

        // Nếu số lượng = 0 thì xóa khỏi cart:
        foreach($_SESSION['cart'] as $item => $detail) {
            if($detail['quantity']==0) {
                unset($_SESSION['cart'][$item]);
            }
        }
    }
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
            <link rel="stylesheet" href="stype.css">
            
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
                        <li><a href="cart.php">Cart</a> </li>
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
    <!--Middle Part Start-->
    <div id="content">
      <!--Breadcrumb Part Start-->
      <div class="breadcrumb"> <a href="index.php">Home</a> » <a href="#">Shopping Cart</a></div>
      <!--Breadcrumb Part End-->
     <!--================Cart Table Area =================-->
     <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            <form method="post" action="#">
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-thumbnail">&nbsp;</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        if(isset($_SESSION['cart'])==TRUE) {
                                        foreach($_SESSION['cart'] as $item => $detail) {
                                        $product = Product::getProduct_ByID($detail['ID']);
                                            ?>
                                        <tr class="cart_item">
                                        <td class="product-remove">
                                <a title="Remove this item" class="remove"
                                    href="removeItemFromCart.php?id=<?php echo $detail['ID']; ?>">X</a>
                            </td>

                                            <td class="product-thumbnail">
                                <a href="details.php?id=<?php echo $product['ID']; ?>"><img
                                        style="width:50%;height:auto;" alt="poster_1_up" class="shop_thumbnail"
                                        src="image/product/<?php echo $product['Image']; ?>"></a>
                            </td>

                            <td class="product-name">
                                <a
                                    href="product-details.php?id=<?php echo $product['ID']; ?>"><?php echo $product['Name']; ?></a>
                            </td>

                            <td class="product-price">
                                <span class="amount"><?php echo $product['Price']; ?>
                                    đ</span>
                            </td>

                            <td class="product-quantity">
                                <div class="quantity buttons_added">
                                    <!-- <input type="button" class="minus" value="-"> -->
                                    <input type="number" size="2" class="input-text qty text" title="Qty"
                                        value="<?php echo $detail['quantity']; ?>" min="0" step="1"
                                        name="updated_quantity[]">
                                    <!-- <input type="button" class="plus" value="+"> -->
                                </div>
                            </td>

                            <td class="product-subtotal">
                                <span class="amount"><?php echo $detail['Price']; ?> đ</span>
                            </td>
                                        </tr>
                                        <tr>
                                            <td class="actions" colspan="6">
                                                
                                                <input type="submit" value="Update Cart" name="update_cart" class="button">
                                                <input type="submit" value="Checkout" name="proceed" class="checkout-button button alt wc-forward">
                                            </td>
                                        </tr>
                                        <?php
                           } }
                        ?>
                                    </tbody>
                                </table>
                            </form>
                            <div class="cart_totals ">
                                <h2>Cart Totals</h2>

                                <table cellspacing="0">
                                    <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Cart Subtotal</th>
                                            <td><span class="amount"><?php echo $product['Price']; ?>đ</span></td>
                                        </tr>

                                        <tr class="shipping">
                                            <th>Shipping and Handling</th>
                                            <td>Free Shipping</td>
                                        </tr>

                                        <tr class="order-total">
                                            <th>Order Total</th>
                                            <td><strong><span class="amount"><?php echo $detail['Price']; ?> đ</span></strong> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>                        
                    </div>                    
                </div>
<?php
include "footer.php";
?>
