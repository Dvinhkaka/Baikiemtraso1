<?php
session_start();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập - Quản Lý Sản Phẩm</title>
    <link rel="stylesheet" href="/style.css"> 
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
            <li><a href="register.php">Đăng Ký</a></li>
        </ul>
    </nav>

    <main class="login-section">
        <h1>Đăng Nhập</h1>
        <p>Vui lòng nhập thông tin để đăng nhập vào hệ thống.</p>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = htmlspecialchars($_POST['email']);
            $password = $_POST['password'];

            if (!empty($email) && !empty($password)) {
                $valid_email = "test@example.com"; 
                $valid_password = "123456"; 

                if ($email === $valid_email && $password === $valid_password) {
                    $_SESSION['loggedin'] = true;
                    echo "<p class='success-msg'>Đăng nhập thành công! Chuyển hướng về <a href='index.php'>Trang Chủ</a>.</p>";
                } else {
                    echo "<p class='error-msg'>Email hoặc mật khẩu không đúng!</p>";
                }
            } else {
                echo "<p class='error-msg'>Vui lòng điền đầy đủ thông tin!</p>";
            }
        }
        ?>

        <form method="POST" action="login.php" class="login-form">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Mật khẩu:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" class="btn btn-submit">Đăng Nhập</button>
        </form>

        <div class="links">
            <p>Chưa có tài khoản? <a href="register.php">Đăng Ký</a></p>
            <p>Quên mật khẩu? <a href="reset_password.php">Reset Mật Khẩu</a></p>
        </div>
    </main>

    <footer class="footer">
        <p>© <?php echo date("Y"); ?> Quản Lý Sản Phẩm.</p>
    </footer>
</body>
</html>