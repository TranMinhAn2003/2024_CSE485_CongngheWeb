<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./css/style2.css">
</head>

<body>
  <?php
  $courses = [
    [
      'img' => './img/banner2.jpg',
      'title' => 'Học viên quốc tế',
      'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
        Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
        quốc tế.',
      'fee' => '15.000.000 VND',
      'start_date' => '2/2/24',
      'duration' => '2 - 2.5 năm'
    ],

    [
      'img' => './img/banner2.jpg',
      'title' => 'Học viên quốc tế',
      'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
        Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
        quốc tế.',
      'fee' => '15.000.000 VND',
      'start_date' => '2/2/24',
      'duration' => '2 - 2.5 năm'
    ],

    [
      'img' => './img/banner2.jpg',
      'title' => 'Học viên quốc tế',
      'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
        Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
        quốc tế.',
      'fee' => '15.000.000 VND',
      'start_date' => '2/2/24',
      'duration' => '2 - 2.5 năm'
    ],

    [
      'img' => './img/banner2.jpg',
      'title' => 'Học viên quốc tế',
      'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
        Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
        quốc tế.',
      'fee' => '15.000.000 VND',
      'start_date' => '2/2/24',
      'duration' => '2 - 2.5 năm'
    ],

    [
      'img' => './img/banner2.jpg',
      'title' => 'Học viên quốc tế',
      'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
        Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
        quốc tế.',
      'fee' => '15.000.000 VND',
      'start_date' => '2/2/24',
      'duration' => '2 - 2.5 năm'
    ],

    [
      'img' => './img/banner2.jpg',
      'title' => 'Học viên quốc tế',
      'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
        Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
        quốc tế.',
      'fee' => '15.000.000 VND',
      'start_date' => '2/2/24',
      'duration' => '2 - 2.5 năm'
    ],
  ];
  ?>

  <div class="container">
    <div class="h1-text">
      <h2 class="h1">Khóa học sắp khai giảng</h2>
    </div>

    <div class="content-course">
      <?php
      foreach ($courses as $course) {
      ?>
        <div class="course">
          <img src="<?php echo $course['img'] ?>" alt="">
          <div class="content">
            <h3><?php echo $course['title'] ?></h3>
          <p><?php echo $course['description'] ?></p>
          <div class="course-info">
            <div class="course-fee">
              <p>Học phí: <?php echo $course['fee'] ?></p>
            </div>
            <div class="course-date">
              <p>Ngày khai giảng: <?php echo $course['start_date'] ?></p>
            </div>
            <div class="course-duration">
              <p>Thời lượng: <?php echo $course['duration'] ?></p>
            </div>
          </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>

</body>

</html>