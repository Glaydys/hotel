<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <title>Khách sạn Ánh Sao</title>
</head>
<body class="body" style=margin:0%>
    <header class="index">
        <?php include("view/logo.php"); ?>
        <nav>
            <ul>
                <li><a href="index.php">TRANG CHỦ</a></li>
                <li><a href="">GIỚI THIỆU</a></li>
                <li><a href="">PHÒNG KHÁCH SẠN</a></li>
                <li><a href="">DỊCH VỤ</a></li>
            </ul>
        </nav>
    </header>
    <div class="intro">
    <?php include("view/home.php")?>
    </div>
    <div class="lct">
        <?php include("view/location.php")?>
    </div>

    <div class="footer"><p><br><a href="index.php"style="text-decoration:none;color:white">Ⓗ2024.Khách sạn Ánh Sao</a></p></div>
    <script src="./index.js"></script>
</body>
</html>