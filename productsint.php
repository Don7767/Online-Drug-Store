<?php
interface productsint
{
    public function insertProduct($product);
    public function getAllProducts();
    public function getProductById($id);
    public function updateProduct($id, $name, $price);
    public function deleteProduct($id);
}
?>
