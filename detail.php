<?php
include 'header.php';
$id=0;
if(isset($_GET['id'])){
    $id = $_GET['id'];            
}
else{
    echo "Khong nhan duoc gi ";
}
$allProducts = $product->detail($id);
$getManuTypeID = $product->getTypeManuID($id);
$getManuName = $manufacture->getManuNameByID($getManuTypeID[0]['Manu_ID']);
$getRelatedProduct = $product->getRelatedProduct($getManuTypeID[0]['Manu_ID'], $getManuTypeID[0]['Type_ID']);
 //var_dump($getRelatedProduct);
 //$cart = new Cart;
//$_SESSION['cart'] = $cart->getCart($_SESSION['user']);
//var_dump($allProducts);
?>
<!--Middle Part Start-->
<div id="content">
  <!--Breadcrumb Part Start-->
  <div class="breadcrumb"> <a href="index.php">Home</a> » <a href="#">iPhone</a></div>
  <!--Breadcrumb Part End-->
  <div class="product-info">
    <div class="left">
      <div class="image"> <a href="image/product/<?php echo $allProducts[0]['Image'] ?>" title="iPhone" class="cloud-zoom colorbox" id='zoom1' rel="adjustX: 0, adjustY:0, tint:'#000000',tintOpacity:0.2, zoomWidth:360, position:'inside', showTitle:false"> 
      
      <img src="image/product/<?php echo $allProducts[0]['Image'] ?>"
    height="300" width="300" alt="Example of resizing an image" /><span id="zoom-image"><i class="zoom_bttn"></i> Zoom</span></a> </div>
      
    </div>
    
    <div class="right">
      <h1><?php echo $allProducts[0]['Name'] ?></h1>
      <div class="description"> <span>Brand:</span><?php echo $getManuName[0]['manu_Name']?><br>
      <p><b>Availability:</b> In Stock</p>
        <p><b>Condition:</b> New</p>
      <div class="price">Price: <span><?php echo $allProducts[0]['Price'] ?> Đ</span>
        <br>
        <span class="price-tax">$<?php echo $allProducts[0]['Price'] ?></span><br>
      </div>
      <div class="cart">
        <div>
                        <form action="cart.php" class="cart" style="text-align:center;" method="get">
                            <div style="display:inline-block;">
                                <input type="text" name="id" value="<?php echo $_GET['id']; ?>" readonly
                                    style="display:none;">
                                <div class="quantity" style="with:25px">
                                    <input type="number" size="4" class="input-text qty text" title="Qty" value="1"
                                        name="quantity" min="1" step="1">
                                </div>
								<br>
                <button class="add_to_cart_button pink_more" type="submit">Add to cart</button>
                            </div>
                        </form>
          
        </div>
        <div><span>&nbsp;&nbsp;&nbsp;- OR -&nbsp;&nbsp;&nbsp;</span></div>
        <div><a href="#" class="wishlist">Add to Wish List</a><br>
          <a href="#" class="wishlist">Add to Compare</a></div>
      </div>
      <div class="review">
        <div><img alt="0 reviews" src="image/stars-3.png">&nbsp;&nbsp;<a onClick="$('a[href=\'#tab-review\']').trigger('click');">0 reviews</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a onClick="$('a[href=\'#tab-review\']').trigger('click');">Write a review</a></div>
      </div>
      <!-- AddThis Button BEGIN -->
      <div class="addthis_toolbox addthis_default_style "> <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_pinterest_pinit"></a> <a class="addthis_counter addthis_pill_style"></a> </div>
      <script type="text/javascript" src="../../../s7.addthis.com/js/300/addthis_widget.js#pubid=xa-506f325f57fbfc95"></script>
      <!-- AddThis Button END -->
      <div class="tags"> <b>Tags:</b> <a href="#">Apple</a>, <a href="#">Mobile</a>, <a href="#">Latest</a> </div>
      <div class="fb-like" data-href="https://www.facebook.com/tdc.fit" data-width="" data-layout="standard" data-action="like" data-size="large" data-share="false"></div>
    </div>
  </div>
  <!-- Tabs Start -->
  <div id="tabs" class="htabs"> <a href="#tab-description">Description</a> </div>
  <div id="tab-description" class="tab-content">
  <?php echo $allProducts[0]['Description']?>

  </div>
  <!-- Tabs End -->
  <!-- Related Products Start -->
  <div class="box">
    <div class="box-heading">Related Products </div>
     
    <div class="box-content">
      <div class="box-product">
    <?php 
    foreach($getRelatedProduct as $key => $value)
    {

    //var_dump($value);
                        
    ?>
        <div>
          <div class="image"><a href="result.php"><img src="image/product/<?php echo $value['Image']; ?>" height="250" width="250" </a></div>
          <div class="name"><a href="detail.php?id=<?php echo $value['ID']; ?>"><?php echo $value['Name'] ;?></a></div>
          <div class="price"> <?php  echo number_format($value['Price']) ?> </div>
          <a class="button" href="cart.php?id=<?php echo  $value['ID']?>">Add to Cart</a></div>
          <?php } ?>
    </div>
  </div>
  <!-- Related Products End -->
</div>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v11.0" nonce="hpn5lKg6"></script>
<?php
include "footer.php";