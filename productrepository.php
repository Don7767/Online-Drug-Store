<?php
require_once "productsint.php";

class ProductRepository implements productsint
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function insertProduct($product)
    {
        $stmt = $this->conn->prepare("INSERT INTO medicines (name, price) VALUES (?, ?, ?)");
        return $stmt->execute([$product['name'], $product['price']]);
    }

    public function getAllProducts()
    {
        $stmt = $this->conn->query("SELECT * FROM medicines");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductById($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM medicines WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateProduct($id, $name, $price)
    {
        $stmt = $this->conn->prepare("UPDATE medicines SET name=?, price=?,  WHERE id=?");
        return $stmt->execute([$name, $price, $id]);
    }



    public function deleteProduct($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM medicines WHERE id=?");
        return $stmt->execute([$id]);
    }
}
?>
