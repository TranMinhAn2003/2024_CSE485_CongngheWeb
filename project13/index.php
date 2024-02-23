<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/fontawesome-free-6.3.0-web/css/all.min.css">
    <title>Danh sách khóa học</title>

    <style>
    /* Thêm các định kiểu CSS của bạn ở đây */

    .container {
        width: 100%;
        height: 100%;
    }

    .header_course {
        font-size: 20px;
        font-weight: 900;
        font-family: Arial;
        color: maroon;
        border-left: 5px solid maroon;
        padding-left: 10px;
    }

    .course {
        background-color: #f9f9f9;
        color: #333;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size: 11px;
        margin-bottom: 10px;
        margin-top: 30px;
        margin-bottom: 30px;
        margin-left: 55px;
        padding-top: 135px;
        box-sizing: border-box;
        float: left;
        height: 320px;
        width: 28%;

    }

    .course h2 {
        color: #333;
        margin: 10px;
    }

    .course img {

        width: 393px;
        hight: 200px;
        margin-top: -200px;

    }

    .course p {
        margin: 10px;
        color: #666;
    }

    .info {
        margin-top: 10px;


    }

    .info i {
        margin-right: 5px;
        margin-bottom: 10px;
        padding-top: -5px;
    }

    .fa-solid {
        margin: 10px;
        margin-right: 0px;
        padding-bottom: -1px;
        color: black;
    }
    </style>
</head>

<body>

    <?php
    // Dữ liệu khóa học lưu động trong mảng
    $courses = [
        [
            'img' => '<img src="./images/Screenshot 2024-02-24 005711.png"  alt="">',
            'title' => 'HỌC VIÊN QUỐC TẾ',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'
        ],
        // Thêm các khóa học khác vào đây
        [
            'img' => '<img src="./images/Screenshot 2024-02-24 005747.png"  alt="">',
            'title' => 'LẬP TRÌNH WEB FULLSTACK ',
            'description' => 'Khóa học phù hợp với người bắt đầu lập tình hoặc người chuyển nghề. Trang bị từ fontend đến backend, xây dựng website hoàn chỉnh sau khóa học.',
            'fee' => 'Ưu đã giảm 15% học phí',
            'start_date' => '2/2024',
            'duration' => '6 tháng'
        ],
        [
            'img' => '<img src="./images/Screenshot 2024-02-24 005802.png"  alt="">',
            'title' => 'LẬp TRÌNH JAVA FULLSTACK ',
            'description' => 'Phát triển ứng dụng web từ cơ bản đến nâng cao bằng java, các ứng dụng doanh nghiệp sử dụng J2EE,Servlet,JSP,Sping Framework,EJB...',
            'fee' => 'Ưu đã giảm 15% học phí',
            'start_date' => '2/2024',
            'duration' => '236 giờ'
        ],
        [
            'img' => '<img src="./images/Screenshot 2024-02-24 005815.png"  alt="">',
            'title' => 'LẬp TRÌNH PHP&LARAVEL ',
            'description' => 'PHP là một trong các ngôn ngữ thiêt kế web mạnh nhất. Khóa học trang bị kỹ năng xây dựng web hoàn chỉnh sử dụng PHP kết hợp Laravel Framework',
            'fee' => '9.600.000 VND',
            'start_date' => '5/2/2024',
            'duration' => '36 giờ'
        ],
        [
            'img' => '<img src="./images/Screenshot 2024-02-24 005828.png"  alt="">',
            'title' => 'KHÓA HỌC LẬP TRÌNH .NET',
            'description' => 'Phát triển ứng dụng web sử dụng nền tảng ÁP>NET Core MVC.Để học tốt khóa học yều cầu học viên đã có kiến thức C# và Frontend',
            'start_date' => '2/2024',
            'duration' => '40 giờ',
            'fee' => '6.000.000 VND',
        ],
        [
            'img' => '<img src="./images/Screenshot 2024-02-24 005844.png"  alt="">',
            'title' => 'LẬp TRÌNH SQL SERVER ',
            'description' => 'Trang bị những kiến thức nền tảng vững chắc về SQL Server như csac kỹ thuật lọc dữ liệu , phân tích, thiết kế và quản trị cơ sở dữ liệu ...',
            'fee' => 'Học phí 4.500.000 VND',
            'start_date' => '2/2024',
            'duration' => '30 giờ'
        ],
    ];

    echo '<div class = "container">';
    echo '<div class = "header_course">KHÓA HỌC SẮP KHAI GIẢNG</div>';
    // Hiển thị danh sách khóa học
    foreach ($courses as $course) {
        echo '<div class="course">';
        echo "{$course['img']}";
        echo '<h2>' . $course['title'] . '</h2>';
        echo '<p>' . $course['description'] . '</p>';
        echo '<div class="info">';
        echo '<i class="fas fa-gift fa-solid icon"></i> Học phí: ' . $course['fee'];
        echo '<br><i class="fas fa-clock fa-solid icon"></i> Khai giảng: ' . $course['start_date'];
        echo '<br><i class="fas fa-flag fa-solid icon"></i> Thời lượng: ' . $course['duration'];
        echo '</div>';
        echo '</div>';
    }
    echo '</div>';
    ?>
</body>

</html>