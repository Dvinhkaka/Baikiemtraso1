<?php
                session_start();
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
                    echo '<a href="logout.php">Đăng Xuất</a>';
                } else {
                    echo '<a href="login.php">Đăng Nhập</a>';
                }
                ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ - Quản Lý Sản Phẩm</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <img src="logo.png" alt="Logo" class="logo-img">
        </div>
        <ul class="nav-links">
            <li><a href="index.php">Trang Chủ</a></li>
            <li><a href="about.php">Giới Thiệu</a></li>
            <li><a href="contact.php">Liên Hệ</a></li>
            <li>
            </li>
        </ul>
    </nav>

    <main class="hero">
        <div class="intro">
            <h1>Chào mừng đến với Quản Lý Sản Phẩm</h1>
            <p>Một giải pháp đơn giản và hiệu quả để quản lý sản phẩm của bạn.</p>
            <div class="cta-buttons">
                <a href="register.php" class="btn btn-register">Đăng Ký</a>
                <a href="login.php" class="btn btn-login">Đăng Nhập</a>
            </div>
        </div>
    </main>

    <footer class="footer">
        <p>&copy; <?php echo date("Y"); ?> Quản Lý Sản Phẩm.</p>
    </footer>
</body>
</html>