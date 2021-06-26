<?php

// require_once "db.php";
class Product extends Db{
    //viet phuong thuc lay tat ca san pham
    function getAllProducts(){
        $sql = self::$connection->prepare("SELECT * FROM  products WHERE Feature = 0 LIMIT 10");
        $sql->execute();//return an object;
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    //Viet phuong thuc lay ra tat ca san pham noi bat
    function getAllFeatureProducts(){
        $sql = self::$connection->prepare("SELECT * FROM products WHERE feature = 1 limit 2");
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    //Get Feature Mobile devices
    function getAllFeaturePhone(){
        $per_Page = 3;
        $sql = self::$connection->prepare("SELECT * FROM products WHERE feature = 1 AND `Type_ID` = 1 ");
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    // function getAllFeaturePhonePageSplit($start, $per_Page){
    //     // $per_Page = 3;
    //     // $start = ($page - 1)*$per_Page;
    //     $sql = self::$connection->prepare("SELECT * FROM products WHERE feature = 1 AND `Type_ID` = 1 ORDER BY ID desc limit $start,$per_Page");
    //     $sql->execute();//return an object
    //     $items = array();
    //     $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    //     return $items; //return an array
    // }

    // public function splitFeaturePhonePage($page)
    // {

    //     $perPage = 6;
    //     $total_Row = count($this->getAllFeaturePhone());
    //     $total_Page = ceil($total_Row / $perPage);
    //     for($i = 0 ; $i < $total_Page; $i++)
    //     {
    //         if($i == $page)
    //         {
    //             echo "<li><a class='active' href='?page=".($i+1)."&key=".$key."'>".($i+1)."</a></li>";
    //         }
    //         else
    //         {
    //             echo "<li><a href='?page=".($i+1)."&key=".$key."'>".($i+1)."</a></li>";
    //         }
    //     }
    // }

    /**____________________________________________________________________________________________________
     * LẤY SẢN PHẨM THEO id:
     */
    static function getProduct_ByID($id) {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE ID = ?");
        $sql->bind_param("i", $id);
        $sql->execute();
        $items = $sql->get_result()->fetch_assoc();
        return $items; //return an array.
    }

    function getAllFeatureLaptop(){
        $sql = self::$connection->prepare("SELECT * FROM products WHERE feature = 1 AND `Type_ID` = 2 ");
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    function getAllFeatureTablet(){
        $sql = self::$connection->prepare("SELECT * FROM products WHERE feature = 1 AND `Type_ID` = 3");
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    function getAllFeatureSpeaker(){
        $sql = self::$connection->prepare("SELECT * FROM products WHERE feature = 1 AND `Type_ID` = 4");
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    function getAllFeaturePowerBank(){
        $sql = self::$connection->prepare("SELECT * FROM products WHERE feature = 1 AND `Type_ID` = 5");
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    //viet phuong thuc lay 3 san pham noi bat
    function lay3SanPhamNoiBat(){
        $sql = self::$connection->prepare("SELECT * FROM products WHERE Feature = 0 LIMIT 4");
        $sql->execute();
        $items= array();
        $items= $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    //viet phuong thuc lay 3 san pham mới nhất
    function get3NewestProducts(){
        $sql = self::$connection->prepare("SELECT * FROM products ORDER BY creat_at LIMIT 8");
        $sql->execute();
        $items= array();
        $items= $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    //lay chi tiet san pham 
    function detail($id){
        $sql = self::$connection->prepare("SELECT  * FROM products Where id = ?");
        $sql->bind_param("i",$id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    function getProductAdmin(){
        $sql = self::$connection->prepare("SELECT * FROM  products, manufactures, protypes WHERE products.Manu_ID = manufactures.manu_ID AND products.Type_ID = protypes.type_ID");
        $sql->execute();//return an object;
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    
    function getManuNameFromProduct($id){
        $sql = self::$connection->prepare("SELECT * FROM  products, manufactures, protypes WHERE products.Manu_ID = manufactures.manu_ID AND products.Type_ID = protypes.type_ID");
        $sql->execute();//return an object;
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    //Phân Trang:
    public function splitPageSearchResult($page, $key)
    {

        $perPage = 5;
        $total_Row = count($this->findProduct($key));
        $total_Page = ceil($total_Row / $perPage);
        for($i = 0 ; $i < $total_Page; $i++)
        {
            if($i == $page)
            {
                echo "<li><a class='active' href='?page=".($i+1)."&key=".$key."'>".($i+1)."</a></li>";
            }
            else
            {
                echo "<li><a href='?page=".($i+1)."&key=".$key."'>".($i+1)."</a></li>";
            }
        }
    }

    public function getSearchProductResult($page, $keyword)
    {
        $per_Page = 9;
        $start = ($page - 1)*$per_Page;
        $sql = self::$connection->prepare("SELECT * FROM products 
        WHERE name like '%$keyword%' ORDER BY ID desc limit $start,$per_Page"); 
        $sql->execute();
        // $keyword = "%$keyword%";
        // $sql->bind_param("s",$keyword);
        $items = array();
        
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    
    

    function findProduct($keyword){
        // $keyword = "%o%";
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE `name` LIKE ?");
        $keyword = "%$keyword%";
        $sql->bind_param("s",$keyword);
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    function getTypeManuID($id){
        $sql = self::$connection->prepare("SELECT `Manu_ID`, `Type_ID` FROM `products` WHERE products.ID = ?");
        $sql->bind_param("i",$id);
        $sql->execute();//return an object;
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    function getRelatedProduct($manu_id, $type_id){
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE `products`.`Type_ID` = $type_id AND `products`.`Manu_ID` = $manu_id");
        //$sql->bind_param("i",$id);
        $sql->execute();//return an object;
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    function getDataDuaVaoID($id){
        $sql = self::$connection->prepare("SELECT * FROM products WHERE id = $id");
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
        
    }
    //(SEARCHING) Tìm kiếm sản phẩm:
    static function searchProduct($keyword) {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE name like '%$keyword%'");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array.
    }
    //(SEARCHING + Paging/Pagination) Tìm kiếm sản phẩm và Phân trang:
    static function searchProduct_andCreatePagination($keyword, $page, $resultsPerPage) {
        //Tính xem nên bắt đầu hiển thị từ trang có số thứ tự là bao nhiêu:
        $firstLink = ($page - 1) * $resultsPerPage; //(Trang hiện tại - 1) * (Số kết quả hiển thị trên 1 trang).
        //Dùng LIMIT để giới hạn số lượng kết quả được hiển thị trên 1 trang:
        $sql = self::$connection->prepare("SELECT * FROM products WHERE name like '%$keyword%' LIMIT $firstLink, $resultsPerPage");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array.
    }
    
}