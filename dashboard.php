<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Quản Lý Sản Phẩm</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <img src="./logo.png" alt="Logo" class="logo-img">
        </div>
        <ul class="nav-links">
            <li><a href="index.php">Trang Chủ</a></li>
            <li><a href="about.php">Giới Thiệu</a></li>
            <li><a href="contact.php">Liên Hệ</a></li>
            <li><a href="logout.php">Đăng Xuất</a></li>
        </ul>
    </nav>

    <main class="dashboard-section">
        <h1>Bảng Điều Khiển</h1>
        <p>Chào mừng bạn đã đăng nhập! Dưới đây là số liệu tổng quan.</p>

        <div class="stats">
            <div class="stat-card">
                <h3>Sản Phẩm</h3>
                <p class="number">50</p>
            </div>
            <div class="stat-card">
                <h3>Người Dùng</h3>
                <p class="number">10</p> 
            </div>
            <div class="stat-card">
                <h3>Đơn Hàng</h3>
                <p class="number">25</p> 
            </div>
        </div>

        <div class="actions">
            <a href="products.php" class="btn btn-products">Danh Sách Sản Phẩm</a>
        </div>
    </main>

    <footer class="footer">
    <p>©<?php echo date("Y"); ?> Technology sales.</p>
    </footer>
</body>
</html>