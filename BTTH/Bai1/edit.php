<?php
include 'functions.php';

$index = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];

    if ($image) {
        $target_dir = "images/";
        $target_file = $target_dir . basename($image);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
            $flowers[$index]['image'] = $image;
        } else {
            echo "Lỗi khi tải lên hình ảnh!";
        }
    }

    $flowers[$index]['name'] = $name;
    $flowers[$index]['description'] = $description;

    header('Location: index.php');
    exit;
}

$flower = $flowers[$index];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa hoa</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Sửa hoa: <?= $flower['name'] ?></h1>
    <form action="edit.php?id=<?= $index ?>" method="post" enctype="multipart/form-data">
        <label for="name">Tên hoa:</label>
        <input type="text" name="name" value="<?= $flower['name'] ?>" required><br><br>

        <label for="description">Mô tả:</label>
        <textarea name="description" required><?= $flower['description'] ?></textarea><br><br>

        <label for="image">Chọn hình ảnh mới:</label>
        <input type="file" name="image"><br><br>

        <button type="submit">Lưu thay đổi</button>
    </form>
    <br>
    <a href="index.php">Quay lại danh sách hoa</a>
</body>
</html>
