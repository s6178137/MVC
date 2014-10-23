<?php

require_once "ProductModel.inc.php";
require_once "index.php";
require_once "/lib/smarty/libs/Smarty.class.php";
require_once "/lib/ezSQL/shared/ez_sql_core.php";
require_once "/lib/ezSQL/mysql/ez_sql_mysql.php";

class Product_View{
    private $tpl;

    public function __construct() {
        $this->inittpl();
    }
    
    //初始化
    function inittpl() {
        $this->tpl = new Smarty();
        $this->tpl->left_delimiter = "<{";
        $this->tpl->right_delimiter = "}>";
        $this->tpl->template_dir = "./tmpl";    
    }

    function show_product_list(){
        $product_model = new Product_Model();
        $product_list = $product_model->get_product_list();
        $product_view = NULL;

        foreach($product_list as $packet){
            $product_view[] = array(
                'id' => $packet->id,
                'product_name' => $packet->product_name,
                'price' => $packet->price,
                'cost' => $packet->cost,
                'stock' => $packet->stock
            );
        }

        $this->tpl->assign("product_list", $product_view);
        return $this->tpl->display("show_product_list.tpl");
    }
    
    //新增產品前
    function show_insert_product(){
        $db = new ezSQL_mysql('root', '', 'mysql', 'localhost');
        
        $product_number = $db->get_var("SELECT count(*) FROM db_host");

        $product_id = $product_number+1;
        if($product_id<10)
                $this->tpl->assign("product_id", 'A000'.$product_id);
            elseif ($product_id>=10 & $product_id<100)
                $this->tpl->assign("product_id", 'A00'.$product_id);
            elseif ($product_id >= 100 & $product_id<1000)
                $this->tpl->assign("product_id", 'A0'.$product_id);
            elseif ($product_id >= 1000 & $product_id<10000)
                $this->tpl->assign("product_id", 'A'.$product_id);
        
        $this->tpl->display("show_insert_product.tpl");
    }
        
    //修改產品前
    function show_update_porduct($product_id){
        $db = new ezSQL_mysql('root', '', 'mysql', 'localhost');

        $product_check = $db->get_var("SELECT id FROM db_host WHERE id='$product_id'");

        if($product_check == $product_id){
           $product_infor = $db->get_results("SELECT * FROM db_host WHERE id='$product_id'");
           foreach($product_infor as $packet){
               $this->tpl->assign("product_id", $packet->id);
               $this->tpl->assign("product_name", $packet->product_name);
               $this->tpl->assign("product_price", $packet->price);
               $this->tpl->assign("product_cost", $packet->cost);
               $this->tpl->assign("product_stock", $packet->stock);
           }     
           $this->tpl->display("show_update_product.tpl");
        }
        else{
            echo "<script type='text/javascript'>";
            echo "alert('Can not found product id, please re-enter!!');";
            echo "history.back();";
            echo "</script>";
        }
    }
    
    //刪除產品
    function delete_porduct($product_id){
        $db = new ezSQL_mysql('root', '', 'mysql', 'localhost');

        $product_check = $db->get_var("SELECT id FROM db_host WHERE id='$product_id'");

        if($product_check == $product_id){
            $delete_product = new Product_Model();
            $delete_product->delete_product_model($product_id);
        }
        else{
            echo "<script type='text/javascript'>";
            echo "alert('Can not found product id, please re-enter!!');";
            echo "history.back();";
            echo "</script>";
        }
    }
    
}
?>
