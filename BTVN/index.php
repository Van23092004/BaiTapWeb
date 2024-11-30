<?php
include "cn.php"; 
include "header.php"; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ten_san_pham = isset($_POST['ten_san_pham']) ? $_POST['ten_san_pham'] : '';
    $gia = isset($_POST['gia']) ? $_POST['gia'] : '';

    if (!empty($ten_san_pham) && !empty($gia)) {
        $sql = "INSERT INTO sanpham (ten_sanpham, gia_thanh) VALUES ('$ten_san_pham', $gia)";
        if ($conn->query($sql) === TRUE) {
            echo "<div class='alert alert-success'>Thêm sản phẩm thành công!</div>";
        } else {
            echo "<div class='alert alert-danger'>Lỗi: " . $conn->error . "</div>";
        }
    }
}

$sql = "SELECT * FROM sanpham";
$result = $conn->query($sql);

echo "<div class='container mt-4'>";
if ($result->num_rows > 0) {
    echo "<table class='table table-striped'>";
    echo "<thead><tr><th>Sản phẩm</th><th>Giá thành</th><th>Sửa</th><th>Xóa</th></tr></thead>";
    echo "<tbody>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row["ten_sanpham"]) . "</td>";
        echo "<td>" . number_format($row["gia_thanh"], 0, ',', '.') . " VND</td>";
        echo "<td><a href='edit.php?id=" . $row["id"] . "'><i class='bi bi-pencil-square'></i></a></td>";
        echo "<td><a href='delete.php?id=" . $row["id"] . "'><i class='bi bi-trash text-danger'></i></a></td>";
        echo "</tr>";
    }

    echo "</tbody></table>";
} else {
    echo "<p class='text-warning'>Không có sản phẩm nào.</p>";
}
echo "</div>";

include "form.php"; 
?>
