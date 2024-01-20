<?php
function productList() {
    
    $productAll = getAllProduct();
    
    require_once './client/views/product/list.php';
}

function productDetail($id) {
    
    $product = getProductByID($id);

    $product ? require_once './client/views/product/detail.php': e404();
   
}