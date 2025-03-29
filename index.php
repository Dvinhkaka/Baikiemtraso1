<?php
session_start();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ - Quản Lý Sản Phẩm</title>
    <link rel="stylesheet" href="/styles.css">
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <img src="logo.png" alt="Logo" class="logo-img">
        </div>
        <ul class="nav-links">
            <li><a href="index.php">Trang Chủ</a></li>
            <li><a href="products/index.php">Sản phẩm</a></li>
            <li><a href="contact.php">Liên Hệ</a></li>
            <li>
                <?php
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
                    echo '<a href="logout.php">Đăng Xuất</a>';
                } else {
                    echo '<a href="login.php">Đăng Nhập</a>';
                }
                ?>
            </li>
        </ul>
    </nav>

    <main class="hero">
        <div class="intro">
            <h1>Chào Mừng Đến Với Quản Lý Sản Phẩm</h1>
            <p>Một giải pháp đơn giản và hiệu quả để quản lý sản phẩm của bạn.</p>
            <div class="cta-buttons">
                <a href="register.php" class="btn btn-register">Đăng Ký</a>
                <a href="login.php" class="btn btn-login">Đăng Nhập</a>
            </div>
        </div>
    </main>
    <footer class="footer">
        <p>© <?php echo date("Y"); ?> Quản Lý Sản Phẩm.</p>
    </footer>
</body>
</html>