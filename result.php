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
    <div class="box-heading">Search Result</div>               
        <div class="box-content">
            <div class="box-product">
            <?php

                if(isset($_GET['page']))
                {
                    $searchProductResult = $product->getSearchProductResult($_GET['page'], $keyword);
                }
                else{
                    //$page=1;
                    $searchProductResult = $product->getSearchProductResult(1, $keyword);
                    $_GET['page'] = 1;
                }
                //echo count($searchDescriptionForAdmin)." RESULTS";
                    foreach($searchProductResult as $key => $value){
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
            <ul class="pagination">
                <!--  <li class="active"><a href="">1</a>  </li> -->
                <?php 
                    $product->splitPageSearchResult($_GET['page'], $keyword);
                ?>
            </ul>
        </div>
    </div>
</div>
<?php
include "footer.php";