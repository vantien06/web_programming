<?php
/**
 * Product Model - Closet Fashion Store
 * 
 * Chứa các hàm thao tác với bảng products trong database.
 * Sử dụng PDO prepared statements để chống SQL Injection.
 */

require_once __DIR__ . '/../config/database.php';

class Product
{
    private PDO $db;

    public function __construct()
    {
        $this->db = getConnection();
    }

    /**
     * Lấy tất cả Featured Products (is_new = 0)
     * 
     * @return array
     */
    public function getFeatured(): array
    {
        $stmt = $this->db->query("SELECT * FROM products WHERE is_new = 0 ORDER BY created_at DESC");
        return $stmt->fetchAll();
    }

    /**
     * Lấy tất cả New Arrivals (is_new = 1)
     * 
     * @return array
     */
    public function getNewArrivals(): array
    {
        $stmt = $this->db->query("SELECT * FROM products WHERE is_new = 1 ORDER BY created_at DESC");
        return $stmt->fetchAll();
    }

    /**
     * Lấy tất cả sản phẩm
     * 
     * @return array
     */
    public function getAll(): array
    {
        $stmt = $this->db->query("SELECT * FROM products ORDER BY created_at DESC");
        return $stmt->fetchAll();
    }

    /**
     * Lấy sản phẩm theo ID
     * 
     * @param int $id
     * @return array|false
     */
    public function getById(int $id): array|false
    {
        $stmt = $this->db->prepare("SELECT * FROM products WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    /**
     * Thêm sản phẩm mới vào database
     * 
     * @param string $name      Tên sản phẩm
     * @param float  $price     Giá
     * @param string $image     URL hình ảnh
     * @param string $category  Danh mục (T-Shirts, Jeans, Jackets, Dresses, Accessories)
     * @param int    $isNew     1 = New Arrival, 0 = Featured
     * @return bool
     */
    public function add(string $name, float $price, string $image, string $category, int $isNew = 0): bool
    {
        $stmt = $this->db->prepare(
            "INSERT INTO products (name, price, image, category, is_new) 
             VALUES (:name, :price, :image, :category, :is_new)"
        );
        return $stmt->execute([
            'name'     => $name,
            'price'    => $price,
            'image'    => $image,
            'category' => $category,
            'is_new'   => $isNew,
        ]);
    }

    /**
     * Cập nhật sản phẩm
     * 
     * @param int    $id
     * @param string $name
     * @param float  $price
     * @param string $image
     * @param string $category
     * @param int    $isNew
     * @return bool
     */
    public function update(int $id, string $name, float $price, string $image, string $category, int $isNew): bool
    {
        $stmt = $this->db->prepare(
            "UPDATE products SET name = :name, price = :price, image = :image, 
             category = :category, is_new = :is_new WHERE id = :id"
        );
        return $stmt->execute([
            'id'       => $id,
            'name'     => $name,
            'price'    => $price,
            'image'    => $image,
            'category' => $category,
            'is_new'   => $isNew,
        ]);
    }

    /**
     * Xóa sản phẩm theo ID
     * 
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        $stmt = $this->db->prepare("DELETE FROM products WHERE id = :id");
        return $stmt->execute(['id' => $id]);
    }
}
