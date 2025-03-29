<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên Hệ - Quản Lý Sản Phẩm</title>
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
                <?php
                session_start();
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
                    echo '<a href="logout.php">Đăng Xuất</a>';
                } else {
                    echo '<a href="login.php">Đăng Nhập</a>';
                }
                ?>
            </li>
        </ul>
    </nav>

    <main class="contact-section">
        <h1>Liên Hệ Với Chúng Tôi</h1>
        <p>Vui lòng điền thông tin dưới đây để gửi ý kiến hoặc câu hỏi của bạn!</p>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $subject = htmlspecialchars($_POST['subject']);
            $message = htmlspecialchars($_POST['message']);

            if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
                echo "<p class='success-msg'>Cảm ơn bạn, $name! Tin nhắn của bạn đã được gửi thành công.</p>";
            } else {
                echo "<p class='error-msg'>Vui lòng điền đầy đủ thông tin!</p>";
            }
        }
        ?>

        <form method="POST" action="contact.php" class="contact-form">
            <label for="name">Họ tên:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="subject">Chủ đề:</label>
            <input type="text" id="subject" name="subject" required>

            <label for="message">Nội dung:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit" class="btn btn-submit">Gửi</button>
        </form>
    </main>

    <footer class="footer">
        <p>© <?php echo date("Y"); ?> Quản Lý Sản Phẩm.</p>
    </footer>
</body>
</html>