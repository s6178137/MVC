<!DOCTYPE html>
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
                <{foreach item=key from=$product_list}>
                    <TR>
                    <TD><input name="product_id" type="radio" value="<{$key.id}>"></TD>
                    <TD><{$key.id}></TD>
                    <TD><{$key.product_name}></TD>
                    <TD><{$key.price}></TD>
                    <TD><{$key.cost}></TD>
                    <TD><{$key.stock}></TD>
                    </TR>
                <{/foreach}>
            </TR>
        </TABLE>
    </form>    

        <select name="product_id">
            <option>請選擇</option>
            <{foreach item=item from=$product_list}>          
                <option value="<{$item.id}>"><{$item.id}></option>
            <{/foreach}>
        </select>
       
    </div>        
    </body>    
</html>