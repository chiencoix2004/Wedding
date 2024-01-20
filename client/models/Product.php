<?php
function getAllProduct() {
    try {
        // Câu truy vấn thường
        $sql = "SELECT * FROM products";
        // Chuẩn bị câu truy vấn
        $stmt = $GLOBALS['conn']->prepare($sql);
        // Thực hiện câu truy vấn
        $stmt->execute();
        // fetchAll để lấy ra dữ liệu
        // PDO::FETCH_ASSOC - chuyển đổi dữ liệu lấy ra thành kiểu mảng column_name => value
        return   $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}
function getProductByID($id)
{
    try {
        // Câu truy vấn thường
        $sql = "SELECT * FROM products WHERE id = :id";
        // Chuẩn bị câu truy vấn
        $stmt = $GLOBALS['conn']->prepare($sql);
        // Liên kết dữ liệu vào câu truy vấn
        // Để tránh lỗi SQLInjection
        $stmt->bindParam(':id', $id);
        // Thực hiện câu truy vấn
        $stmt->execute();
        // fetch để lấy 1 ra dữ liệu
        // PDO::FETCH_ASSOC - chuyển đổi dữ liệu lấy ra thành kiểu mảng column_name => value
        return  $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}