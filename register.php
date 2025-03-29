<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fullname = htmlspecialchars($_POST['fullname']);
            $email = htmlspecialchars($_POST['email']);
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];

            if (!empty($fullname) && !empty($email) && !empty($password) && !empty($confirm_password)) {
                if ($password === $confirm_password) {
                    echo "<p class='success-msg'>Đăng ký thành công! Vui lòng <a href='login.php'>đăng nhập</a>.</p>";
                } else {
                    echo "<p class='error-msg'>Mật khẩu và xác nhận mật khẩu không khớp!</p>";
                }
            } else {
                echo "<p class='error-msg'>Vui lòng điền đầy đủ thông tin!</p>";
            }
        }
        ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký - Quản Lý Sản Phẩm</title>
    <link rel="stylesheet" href="./styles.css">
</head>
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

    <main class="register-section">
        <h1>Đăng Ký Tài Khoản</h1>
        <p>Vui lòng điền thông tin để tạo tài khoản mới.</p>

        <form method="POST" action="register.php" class="register-form">
            <label for="fullname">Họ tên:</label>
            <input type="text" id="fullname" name="fullname" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Mật khẩu:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm_password">Xác nhận mật khẩu:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>

            <button type="submit" class="btn btn-submit">Đăng Ký</button>
        </form>

        <div class="links">
            <p>Đã có tài khoản? <a href="login.php">Đăng Nhập</a></p>
            <p>Quên mật khẩu? <a href="reset_password.php">Reset Mật Khẩu</a></p>
        </div>
    </main>

    <footer class="footer">
        <p>© <?php echo date("Y"); ?> Quản Lý Sản Phẩm.</p>
    </footer>
</body>
</html>