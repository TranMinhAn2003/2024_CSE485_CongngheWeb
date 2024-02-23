
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar</title>
    <style>      
        nav {
            background-color: #0000CC

;
        }
        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            overflow: hidden;
        }
        li {
            float: left;
        }
        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        li a:hover {
            background-color: #00FF33;
        }
    </style>
</head>
<body>

<?php
$navItems = [
    "GIỚI THIỆU",
    "TIN TỨC & THÔNG BÁO",
    "TUYỂN SINH",
    "ĐÀO TẠO",
    "NGHIÊN CỨU",
    "ĐỐI NGOẠI",
    "VĂN BẢN",
    "SINH VIÊN",
    "LIÊN HỆ"
];
?>

<nav>
    <ul>
        <?php foreach ($navItems as $item): ?>
            <li><a href="#"><?php echo $item; ?></a></li>
        <?php endforeach; ?>
    </ul>
</nav>

</body>
</html>

