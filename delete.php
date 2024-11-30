<?php
include "cn.php"; 

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM sanpham WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success'>Sản phẩm đã được xóa thành công.</div>";
    } else {
        echo "<div class='alert alert-danger'>Lỗi khi xóa sản phẩm: " . $conn->error . "</div>";
    }
}
header("Location: index.php");
exit();
?>
