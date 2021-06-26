<?php
    include 'header.php';
    //var_dump($product->getAllFeatureProducts());
    $manu_id =0;
    if(isset($_GET['id'])){
        $manu_id = $_GET['id'];
    }
    else{
         echo "Khong nhan duoc id";
    }
    $detailProtype = $protype->getProtypeByID($manu_id);
    $productsByProtype = $protype->getAllProductsByProtype($manu_id);
   // var_dump($productsByProtype);
    //var_dump($detailProtype);
?>
                            <!--Featured Product Part Start-->
                            <div class="box">
                            <div class="box-heading"><?php echo $detailProtype[0]['type_Name'] ?></div>
                            <div class="box-content">
                                <div class="box-product">
                                <?php 
                                    foreach($productsByProtype as $key => $value)
                                    {
            
                                   // var_dump($value);
                                    
                                    ?>
                                    <div>
                                        <div class="image">
                                            <a href="#"><img src="image/product/<?php echo $value['Image']; ?> " alt="iPhone" style = width="150px" height="150px" /></a>
                                        </div>
                                        <div class="name"><a href="detail.php?id= <?php echo $value['ID']; ?>"><?php echo $value['Name'] ;?></a></div>
                                        <h2><?php  echo number_format($value['Price'])?></h2>                                        
                                        <div class="cart">
                                        <a class="button" href="addcart?id=<?php echo  $value['ID'];?>">Add to Cart</a>
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