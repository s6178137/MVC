<?php /* Smarty version Smarty-3.1.13, created on 2014-04-30 09:49:36
         compiled from ".\tmpl\show_update_product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6056514550a6c573a0-35612656%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b3350f853e6b963a9f35cd0000aa7832611ae57' => 
    array (
      0 => '.\\tmpl\\show_update_product.tpl',
      1 => 1363529110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6056514550a6c573a0-35612656',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_514550a6dc9a88_65552980',
  'variables' => 
  array (
    'product_id' => 0,
    'product_name' => 0,
    'product_cost' => 0,
    'product_price' => 0,
    'product_stock' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514550a6dc9a88_65552980')) {function content_514550a6dc9a88_65552980($_smarty_tpl) {?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
    </head>
    <body>
    <h1>修改產品資料</h1>
        
    <form method="POST" action="index.php">
        產品編號:<input name="product_id" type=text value="<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
" readonly="readonly"><BR>
        產品名稱:<input name="product_name" type=text value="<?php echo $_smarty_tpl->tpl_vars['product_name']->value;?>
"><BR>
        成本:<input name="product_cost" type=text value="<?php echo $_smarty_tpl->tpl_vars['product_cost']->value;?>
"><BR>
        售價:<input name="product_price" type=text value="<?php echo $_smarty_tpl->tpl_vars['product_price']->value;?>
"><BR>
        庫存:<input name="product_stock" type=text value="<?php echo $_smarty_tpl->tpl_vars['product_stock']->value;?>
"><BR>        
        <input type="submit" value="修改產品">
        <input name="control" type="hidden" value="update_product_after">
    </form>
   
    <form method="POST" action="index.php">
        <input type="submit" value="取消">
    </form>
    
    </body>    
</html><?php }} ?>