<?php

require_once "ProductModel.inc.php";
require_once "ProductView.inc.php";
require_once "/lib/smarty/libs/Smarty.class.php";
require_once "/lib/ezSQL/shared/ez_sql_core.php";
require_once "/lib/ezSQL/mysql/ez_sql_mysql.php";

$tpl = new smarty();
$tpl->left_delimiter = "<{";
$tpl->right_delimiter = "}>";
$tpl->template_dir = "./tmpl";

//初始頁面列表
$show_product_list = new Product_View();
$show_product_list->show_product_list();

//開始POST NULL避免
function _post($control){
    $val = !empty($_POST[$control]) ? $_POST[$control] : null;
    return $val;
}

switch(_post("control")){
    case null;

    break;

    //新增前
    case "insert_product_before";
        $show_insert_product = new Product_View();
        
        $show_insert_product->show_insert_product();
        _post(null);
    break;
        
    //新增後
    case "insert_product_after";
        $insert_product = new Product_Model();

        $product_id = $_POST["product_id"];
        $product_name = $_POST["product_name"];
        $product_price = $_POST["product_price"];
        $product_cost = $_POST["product_cost"];
        $product_stock = $_POST["product_stock"];        
        
        $insert_product->insert_product_model($product_id,$product_name,$product_price,$product_cost,$product_stock);
        _post(null);
    break;

    //修改前
    case "Modify Product";
        $show_update_product = new Product_View();
        
        function update_porduct_id($product_id){
        $val = !empty($_POST[$product_id]) ? $_POST[$product_id] : null;
        return $val;
        }

        if(update_porduct_id("product_id") == ''){
            echo "<script type='text/javascript'>";
            echo "alert('Can not found product id, please re-enter!!');";
            echo "history.back();";
            echo "</script>";
        }
        else{
        $show_update_product->show_update_porduct(update_porduct_id("product_id"));
        _post(null);
        }
    break;
    
    //修改後
    case "update_product_after";
        $update_product = new Product_Model();

        $product_id = $_POST["product_id"];
        $product_name = $_POST["product_name"];
        $product_price = $_POST["product_price"];
        $product_cost = $_POST["product_cost"];
        $product_stock = $_POST["product_stock"];        
        
        $update_product->update_product_model($product_id,$product_name,$product_price,$product_cost,$product_stock);
        _post(null);
    break;

    //刪除前
    case "Delete product";
        $show_delete_product = new Product_View();
 
        function delete_product_id($product_id){
        $val = !empty($_POST[$product_id]) ? $_POST[$product_id] : null;
        return $val;
        }

        if(delete_product_id("product_id") == ''){
            echo "<script type='text/javascript'>";
            echo "alert('Can not found product id, please re-enter!!');";
            echo "history.back();";
            echo "</script>";
        }
        else{
        $show_delete_product->delete_porduct(delete_product_id("product_id"));
        _post(null);
        }
    break;

}

?>
