<form action="index.php" method="POST" class="container mt-4">
    <div class="mb-3">
        <label for="ten_san_pham" class="form-label">Tên sản phẩm:</label>
        <input type="text" id="ten_san_pham" name="ten_san_pham" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="gia" class="form-label">Giá thành:</label>
        <input type="number" id="gia" name="gia" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Thêm sản phẩm</button>
</form>
