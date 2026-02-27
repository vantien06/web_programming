<?php
/**
 * Process Product - Closet Fashion Store
 * 
 * Xử lý form thêm sản phẩm mới.
 * Nhận dữ liệu POST từ resources/add_product.php,
 * validate, lưu vào database, rồi redirect lại form.
 */

require_once __DIR__ . '/Product.php';

// Chỉ chấp nhận phương thức POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../resources/add_product.php?error=' . urlencode('Phương thức không hợp lệ.'));
    exit;
}

// Lấy & sanitize dữ liệu từ form
$name     = trim($_POST['name'] ?? '');
$price    = floatval($_POST['price'] ?? 0);
$image    = trim($_POST['image'] ?? '');
$category = trim($_POST['category'] ?? '');
$isNew    = intval($_POST['is_new'] ?? 0);

// Validate
$errors = [];

if (empty($name)) {
    $errors[] = 'Tên sản phẩm không được để trống.';
}

if ($price <= 0) {
    $errors[] = 'Giá phải lớn hơn 0.';
}

if (empty($image) || !filter_var($image, FILTER_VALIDATE_URL)) {
    $errors[] = 'URL hình ảnh không hợp lệ.';
}

if (empty($category)) {
    $errors[] = 'Vui lòng chọn danh mục.';
}

if (!in_array($isNew, [0, 1])) {
    $errors[] = 'Loại sản phẩm không hợp lệ.';
}

// Nếu có lỗi, redirect lại form với thông báo
if (!empty($errors)) {
    $errorMsg = implode(' ', $errors);
    header('Location: ../resources/add_product.php?error=' . urlencode($errorMsg));
    exit;
}

// Thêm sản phẩm vào database
try {
    $product = new Product();
    $result = $product->add($name, $price, $image, $category, $isNew);

    if ($result) {
        header('Location: ../resources/add_product.php?success=' . urlencode("Đã thêm sản phẩm \"$name\" thành công!"));
    } else {
        header('Location: ../resources/add_product.php?error=' . urlencode('Không thể thêm sản phẩm. Vui lòng thử lại.'));
    }
} catch (Exception $e) {
    header('Location: ../resources/add_product.php?error=' . urlencode('Lỗi: ' . $e->getMessage()));
}

exit;
