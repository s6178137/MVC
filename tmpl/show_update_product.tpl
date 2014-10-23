<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
    </head>
    <body>
    <h1>修改產品資料</h1>
        
    <form method="POST" action="index.php">
        產品編號:<input name="product_id" type=text value="<{$product_id}>" readonly="readonly"><BR>
        產品名稱:<input name="product_name" type=text value="<{$product_name}>"><BR>
        成本:<input name="product_cost" type=text value="<{$product_cost}>"><BR>
        售價:<input name="product_price" type=text value="<{$product_price}>"><BR>
        庫存:<input name="product_stock" type=text value="<{$product_stock}>"><BR>        
        <input type="submit" value="修改產品">
        <input name="control" type="hidden" value="update_product_after">
    </form>
   
    <form method="POST" action="index.php">
        <input type="submit" value="取消">
    </form>
    
    </body>    
</html>