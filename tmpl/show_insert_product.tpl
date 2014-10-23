<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">   
    </head>
    <body>
    <h1>新增產品</h1>
    
    <form method="POST" action="index.php">
        產品編號:<input name="product_id" type=text value="<{$product_id}>" readonly="readonly"><BR>
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
</html>