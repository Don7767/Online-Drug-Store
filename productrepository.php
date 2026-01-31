<?php
include_once "database.php";
include_once "productsint.php";

class ProductRepository implements productsint
{
    private $conn;
    private $tableName = 'medicines';

    function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function insertProduct($product)
    {
        $sql = "INSERT INTO {$this->tableName} (name, description, price, quantity, image, rating_image)
                VALUES (?,?,?,?,?,?)";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            $product->getName(),
            $product->getDescription(),
            $product->getPrice(),
            $product->getQuantity(),
            $product->getImage(),
            $product->getRating_image()
        ]);
    }

    public function getAllProducts()
    {
        $sql = "SELECT * FROM {$this->tableName}";
        return $this->conn->query($sql)->fetchAll();
    }

    public function getProductById($id)
    {
        $sql = "SELECT * FROM {$this->tableName} WHERE id=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function updateProduct($id, $name, $description, $price, $quantity, $image, $rating_image)
    {
        $sql = "UPDATE {$this->tableName}
                SET name=?, description=?, price=?, quantity=?, image=?, rating_image=?
                WHERE id=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$name, $description, $price, $quantity, $image, $rating_image, $id]);
    }

    public function deleteProduct($id)
    {
        $sql = "DELETE FROM {$this->tableName} WHERE id=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
    }
}

?>
