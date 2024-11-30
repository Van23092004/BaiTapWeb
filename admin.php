<?php include 'functions.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Quản trị danh sách hoa</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Quản trị danh sách hoa</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Tên hoa</th>
                <th>Mô tả</th>
                <th>Ảnh</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($flowers as $key => $flower): ?>
                <tr>
                    <td><?php echo $flower['name']; ?></td>
                    <td><?php echo $flower['description']; ?></td>
                    <td><img src="<?php echo $flower['image']; ?>" alt="<?php echo $flower['name']; ?>" width="100"></td>
                    <td>
                        <a href="edit.php?id=<?php echo $key; ?>">Sửa</a>
                        <a href="delete.php?id=<?php echo $key; ?>">Xóa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="add.php">Thêm hoa mới</a>
</body>
</html>
