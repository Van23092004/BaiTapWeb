<?php
include "cn.php";
include "header.php"; 

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM sanpham WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();
    } else {
        echo "<p style='color: red;'>Sản phẩm không tồn tại.</p>";
        exit();
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ten_san_pham = $_POST['ten_san_pham'];
    $gia = $_POST['gia'];

    if (!empty($ten_san_pham) && !empty($gia)) {
        $sql = "UPDATE sanpham SET ten_sanpham = '$ten_san_pham', gia_thanh = $gia WHERE id = $id";
        if ($conn->query($sql) === TRUE) {
            echo "<p style='color: green;'>Cập nhật sản phẩm thành công!</p>";
            header("Location: index.php"); 
            exit();
        } else {
            echo "<p style='color: red;'>Lỗi: " . $conn->error . "</p>";
        }
    } else {
        echo "<p style='color: red;'>Vui lòng nhập đầy đủ thông tin.</p>";
    }
}
?>

<h2>Sửa sản phẩm</h2>
<form method="POST" action="">
    <label for="ten_san_pham">Tên sản phẩm:</label>
    <input type="text" id="ten_san_pham" name="ten_san_pham" value="<?php echo $product['ten_sanpham']; ?>" required>
    <br>
    <label for="gia">Giá thành:</label>
    <input type="number" id="gia" name="gia" value="<?php echo $product['gia_thanh']; ?>" required>
    <br>
    <button type="submit">Cập nhật</button>
</form>

