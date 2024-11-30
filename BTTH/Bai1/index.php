<?php
include 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị danh sách hoa</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Quản trị danh sách hoa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Tên hoa</th>
                <th>Mô tả</th>
                <th>Hình ảnh</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($flowers as $index => $flower): ?>
                <tr>
                    <td><?= $flower['name'] ?></td>
                    <td><?= $flower['description'] ?></td>
                    <td><img src="images/<?= $flower['image'] ?>" alt="<?= $flower['name'] ?>" width="100"></td>
                    <td>
                        <a href="edit.php?id=<?= $index ?>">Sửa</a> |
                        <a href="delete.php?id=<?= $index ?>">Xóa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="add.php">Thêm hoa mới</a>
</body>
</html>
