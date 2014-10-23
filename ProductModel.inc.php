<?php

require_once "ProductView.inc.php";
require_once "/lib/ezSQL/shared/ez_sql_core.php";
require_once "/lib/ezSQL/mysql/ez_sql_mysql.php";

class Product_Model{

//顯示產品清單
function get_product_list(){
    $db = new ezSQL_mysql('root', '', 'mysql', 'localhost');
    $db->query("SET NAMES UTF8");
    return $db->get_results("SELECT * FROM db_host");
}

//新增產品
function insert_product_model($product_id,$product_name,$product_price,$product_cost,$product_stock){
    $db = new ezSQL_mysql('root', '', 'mysql', 'localhost');
    $db->query("SET NAMES UTF8");
    $db->query("INSERT INTO db_host(id, product_name, price, cost, stock) VALUES ('$product_id', '$product_name', '$product_price', '$product_cost', '$product_stock')");
    
    header("Location:index.php");
}

//修改產品 
function update_product_model($product_id,$product_name,$product_price,$product_cost,$product_stock){
    $db = new ezSQL_mysql('root', '', 'mysql', 'localhost');
    $db->query("SET NAMES UTF8");
    $db->query("UPDATE  db_host SET product_name = '$product_name', price =  '$product_price', cost =  '$product_cost', stock =  '$product_stock' WHERE id = '$product_id'");
    
    header("Location:index.php");
}

//刪除產品
function delete_product_model($product_id){
   $db = new ezSQL_mysql('root', '', 'mysql', 'localhost');
   $db->query("SET NAMES UTF8");
   $db->get_results("DELETE FROM db_host WHERE id = '$product_id'");
   
   header("Location:index.php");
}

}

?>
