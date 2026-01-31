<?php
interface productsint
{
    public function insertProduct($product);
    public function getAllProducts();
    public function getProductById($id);
    public function updateProduct($id, $name, $description, $price, $quantity, $image, $rating_image);
    public function deleteProduct($id);
}
?>
