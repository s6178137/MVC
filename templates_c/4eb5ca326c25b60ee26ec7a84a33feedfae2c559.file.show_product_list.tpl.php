<?php /* Smarty version Smarty-3.1.13, created on 2013-05-26 02:36:20
         compiled from ".\tmpl\show_product_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:587451452e42091a79-42735269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4eb5ca326c25b60ee26ec7a84a33feedfae2c559' => 
    array (
      0 => '.\\tmpl\\show_product_list.tpl',
      1 => 1363661922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '587451452e42091a79-42735269',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51452e42180ed4_86837285',
  'variables' => 
  array (
    'product_list' => 0,
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51452e42180ed4_86837285')) {function content_51452e42180ed4_86837285($_smarty_tpl) {?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    
    <body>
    <div Align='center'>
    <h1>產品管理</h1>
    
    <form method="POST" action="index.php">
        <input name="control" type="submit" value="Add Product">
        <input name="control" type="hidden" value="insert_product_before">
    </form>
   
    <form method="POST" action="index.php">
        
        <input name="control" type="submit" value="Modify Product">
        <input name="control" type="submit" value="Delete product">
       
        <TABLE BORDER='1' ALIGN='CENTER'>
            <TR ALIGN='CENTER'>
                <TD>選擇</TD>
                <TD>產品編號</TD>
                <TD>產品名稱</TD>
                <TD>產品價格</TD>
                <TD>產品成本</TD>
                <TD>庫存</TD>
                <?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value){
$_smarty_tpl->tpl_vars['key']->_loop = true;
?>
                    <TR>
                    <TD><input name="product_id" type="radio" value="<?php echo $_smarty_tpl->tpl_vars['key']->value['id'];?>
"></TD>
                    <TD><?php echo $_smarty_tpl->tpl_vars['key']->value['id'];?>
</TD>
                    <TD><?php echo $_smarty_tpl->tpl_vars['key']->value['product_name'];?>
</TD>
                    <TD><?php echo $_smarty_tpl->tpl_vars['key']->value['price'];?>
</TD>
                    <TD><?php echo $_smarty_tpl->tpl_vars['key']->value['cost'];?>
</TD>
                    <TD><?php echo $_smarty_tpl->tpl_vars['key']->value['stock'];?>
</TD>
                    </TR>
                <?php } ?>
            </TR>
        </TABLE>
    </form>    

        <select name="product_id">
            <option>請選擇</option>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>          
                <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</option>
            <?php } ?>
        </select>
       
    </div>        
    </body>    
</html><?php }} ?>