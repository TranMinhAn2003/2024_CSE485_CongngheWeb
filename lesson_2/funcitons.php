<?php
function getAllCategories(){

//B1. Kết nối Database Server (MySQL)
    $conn = mysqli_connect('localhost', 'root', '', 'lesson_2');
    if (!$conn) {
        die('Không thể kết nối');
    }
//B2. Viết câu SQL
    $sql = "SELECT * FROM categories";
//B3. Thực thi câu SQL
    $result = mysqli_query($conn, $sql);
//B4. Tạo mảng chứa dữ liệu
    $categories = [];
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $categories[] = $row;
        }
    }
//B5. Đóng kết nối
    mysqli_close($conn);
    return $categories;
}
function getAllProduct(){

//B1. Kết nối Database Server (MySQL)
    $conn = mysqli_connect('localhost', 'root', '', 'lesson_2');
    if (!$conn) {
        die('Không thể kết nối');
    }
//B2. Viết câu SQL
    $sql = "SELECT * FROM  list_product";
//B3. Thực thi câu SQL
    $result = mysqli_query($conn, $sql);
//B4. Tạo mảng chứa dữ liệu
    $product = [];
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $product[] = $row;
        }
    }
//B5. Đóng kết nối
    mysqli_close($conn);
    return $product;
}


