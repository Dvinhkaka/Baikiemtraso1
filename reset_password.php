<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Mật Khẩu - Quản Lý Sản Phẩm</title>
    <link rel="stylesheet" href="styles.css">
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
            <li><a href="login.php">Đăng Nhập</a></li>
        </ul>
    </nav>

    <main class="reset-section">
        <h1>Reset Mật Khẩu</h1>
        <p>Nhập email của bạn để nhận hướng dẫn reset mật khẩu.</p>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = htmlspecialchars($_POST['email']);

            
            if (!empty($email)) {
                echo "<p class='success-msg'>Yêu cầu reset mật khẩu đã được gửi đến $email. Vui lòng kiểm tra hộp thư của bạn!</p>";
            } else {
                echo "<p class='error-msg'>Vui lòng nhập email!</p>";
            }
        }
        ?>

        <form method="POST" action="reset_password.php" class="reset-form">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <button type="submit" class="btn btn-submit">Gửi Yêu Cầu</button>
        </form>

        <div class="links">
            <p>Quay lại <a href="login.php">Đăng Nhập</a></p>
        </div>
    </main>

    <footer class="footer">
        <p>© <?php echo date("Y"); ?> Quản Lý Sản Phẩm.</p>
    </footer>
</body>
</html>