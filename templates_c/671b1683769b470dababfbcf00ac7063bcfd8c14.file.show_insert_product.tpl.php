<?php /* Smarty version Smarty-3.1.13, created on 2013-05-26 02:38:53
         compiled from ".\tmpl\show_insert_product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3263751452e4c3d8f86-83080365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '671b1683769b470dababfbcf00ac7063bcfd8c14' => 
    array (
      0 => '.\\tmpl\\show_insert_product.tpl',
      1 => 1363529058,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3263751452e4c3d8f86-83080365',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51452e4c44a409_26956562',
  'variables' => 
  array (
    'product_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51452e4c44a409_26956562')) {function content_51452e4c44a409_26956562($_smarty_tpl) {?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">   
    </head>
    <body>
    <h1>新增產品</h1>
    
    <form method="POST" action="index.php">
        產品編號:<input name="product_id" type=text value="<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
" readonly="readonly"><BR>
        產品名稱:<input name="product_name" type=text value=""><BR>
        成本:<input name="product_cost" type=text value=""><BR>
        售價:<input name="product_price" type=text value=""><BR>
        庫存:<input name="product_stock" type=text value=""><BR>
        <input type="submit" value="新增產品">
        <input name="control" type="hidden" value="insert_product_after">
    </form>
        
    <form method="POST" action="index.php">
        <input type="submit" value="取消">
    </form>
    
    </body>    
</html><?php }} ?>