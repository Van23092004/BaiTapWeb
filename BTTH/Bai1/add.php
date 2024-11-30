<?php
include 'functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];
    $target_dir = "images/";
    $target_file = $target_dir . basename($image);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
        $flowers[] = [
            'name' => $name,
            'description' => $description,
            'image' => $image
        ];
        header('Location: index.php');
        exit;
    } else {
        echo "Lỗi khi tải lên hình ảnh!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm hoa mới</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Thêm hoa mới</h1>
    <form action="add.php" method="post" enctype="multipart/form-data">
        <label for="name">Tên hoa:</label>
        <input type="text" name="name" required><br><br>

        <label for="description">Mô tả:</label>
        <textarea name="description" required></textarea><br><br>

        <label for="image">Chọn hình ảnh:</label>
        <input type="file" name="image" required><br><br>

        <button type="submit">Thêm hoa</button>
    </form>
    <br>
    <a href="index.php">Quay lại danh sách hoa</a>
</body>
</html>
