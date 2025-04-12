<?php
session_start();
?>
<?php
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
    <link rel="stylesheet" href="style.css">
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
            <li><a href="about.php">Giới Thiệu</a></li>
                
            </li>
        </ul>
    </nav>

    <main class="hero">
        <div class="intro">
            <h1>Welcome to technology sales</h1>
            <p>Một giải pháp đơn giản và hiệu quả để quản lý sản phẩm của bạn.</p>
            
            <div class="cta-buttons">
                <a href="register.php" class="btn btn-register">Đăng Ký</a>
                <a href="login.php" class="btn btn-login">Đăng Nhập</a>
            </div>
        </div>
    </main>
    <footer class="footer">
    <p>©<?php echo date("Y"); ?> Technology sales.</p>
    </footer>
</body>
</html>
<?php
session_start();
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars(trim($_POST["email"] ?? ""));
    $password = $_POST["password"] ?? "";

    if (!$email) $errors["email"] = "Vui lòng nhập email.";
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors["email"] = "Email không hợp lệ.";
    if (!$password) $errors["password"] = "Vui lòng nhập mật khẩu.";

    if (!$errors && isset($_COOKIE["email"], $_COOKIE["password"]) && 
        $email == $_COOKIE["email"] && $password == $_COOKIE["password"]) {
        $_SESSION["username"] = $_COOKIE["username"];
        header("Location: success.php");
        exit();
    } elseif (!$errors) {
        $errors["login"] = "Sai email hoặc mật khẩu!";
    }
}
?>