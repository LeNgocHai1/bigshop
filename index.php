<?php
    include 'header.php';
    if(isset($_GET['key'])){
        $keyword = $_GET['key'];
    }
    // $productByPage;
    // $searchresult = $product->getSearchProductResult($key);
    //var_dump($searchresult);
?>
                        <!--Featured Product Part Start-->
                        <div class="box">
                            <div class="box-heading">Sản Phẩm Nổi Bậc</div>
                            <div class="box-content">
                                <div class="box-product">
                                <?php 
                                    foreach($product->lay3SanPhamNoiBat() as $key => $value)
                                    {

                                    //var_dump($value);
                                    
                                    ?>
                                    <div>
                                        <div class="image">
                                            <a href="#"><img src="image/product/<?php echo $value['Image']; ?> " alt="iPhone" style = width="150px" height="150px" /></a>
                                        </div>
                                        <div class="name"><a href="detail.php?id= <?php echo $value['ID']; ?>"><?php echo $value['Name'] ;?></a></div>
                                        <h2><?php  echo number_format($value['Price'])?></h2>                                        
                                        <div class="cart">
                                        <a class="button" href="cart.php?id=<?php echo $value['ID'];?>">Add to Cart</a>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="box-heading">Sản Phẩm Mới</div>
                            
                            <div class="box-content">
                                <div class="box-product">
                                <?php 
                                    foreach($product->get3NewestProducts() as $key => $value)
                                    {

                                    //var_dump($value);
                                    
                                    ?>
                                    <div>
                                        <div class="image">
                                            <a href="#"><img src="image/product/<?php echo $value['Image']; ?> " alt="iPhone" style = width="150px" height="150px" /></a>
                                        </div>
                                        <div class="name"><a href="detail.php?id= <?php echo $value['ID']; ?>"><?php echo $value['Name'] ;?></a></div>
                                        <h2><?php  echo number_format($value['Price'])?></h2>                                        
                                        <div class="cart">
                                        <a class="button" href="addcart?id=<?php echo  $value['ID']?>">Add to Cart</a>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
 
                            </div>
                        </div>
                        <!--Featured Product Part End-->
                    </div>
<?php
include "footer.php";