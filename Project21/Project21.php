<?php
$products = [
    [
        "id" => 1,
        "name" => "T-Shirt",
        "price" => 15.99,
        "description" => "A comfortable and stylish T-Shirt.",
        'image' =>'<img src="./images/men-light-pink-tshirt-gildan-adult-front1.jpg" alt="Pic1">',

    ],
    [
        "id" => 2,
        "name" => "Jean",
        "price" => 23,
        "description" => "A comfortable and stylish Jean.",
        'image' =>'<img src="./images/R.jpg" alt="Pic1">',

    ],
    // Add more products here with unique IDs
    [
        "id" => 3,
        "name" => "Hoodie",
        "price" => 29.99,
        "description" => "A cozy and warm Hoodie.",
        'image' =>'<img src="./images/OIF.jpg" alt="Pic1">',
    ],
    [
        "id" => 4,
        "name" => "Sneakers",
        "price" => 49.99,
        "description" => "Stylish and comfortable Sneakers.",
        'image' =>'<img src="./images/th.jpg" alt="Pic1">',
    ],
    // Add more products as needed
    [
        "id" => 5,
        "name" => "Dress Shirt",
        "price" => 34.99,
        "description" => "A formal and elegant Dress Shirt.",
        'image' =>'<img src="./images/OIP.jpg" alt="Pic5">',
    ],
    [
        "id" => 6,
        "name" => "Shorts",
        "price" => 19.99,
        "description" => "Comfortable and trendy Shorts.",
        'image' =>'<img src="./images/6.jpg" alt="Pic6">',
    ],
    [
        "id" => 7,
        "name" => "Sweater",
        "price" => 39.99,
        "description" => "Warm and stylish Sweater.",
        'image' =>'<img src="./images/7.jpg" alt="Pic7">',
    ],
    [
        "id" => 8,
        "name" => "Jacket",
        "price" => 59.99,
        "description" => "Fashionable and durable Jacket.",
        'image' =>'<img src="./images/8.jpg" alt="Pic8">',
    ],
    [
        "id" => 9,
        "name" => "Skirt",
        "price" => 29.99,
        "description" => "Stylish and versatile Skirt.",
        'image' =>'<img src="./images/9.jpg" alt="Pic9">',
    ],
    [
        "id" => 10,
        "name" => "Boots",
        "price" => 69.99,
        "description" => "Sturdy and fashionable Boots.",
        'image' =>'<img src="./images/10.jpg" alt="Pic10">',
    ],
];
// Số sản phẩm trên mỗi trang
$itemsPerPage = 4;

// Truy cập số trang hiện tại từ URL
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

// Tính tổng số trang
$totalPages = ceil(count($products) / $itemsPerPage);

// Sử dụng hàm array_slice để lấy các mục cho trang hiện tại
$currentPageItems = array_slice($products, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <!-- Thêm đường dẫn đến tệp CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Shopclothes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Product</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
<div class="container mt-2">
    <div class="row">
        <?php foreach ($currentPageItems as $product): ?>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <?php echo "{$product['image']}"; ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product['name']; ?></h5>
                        <p class="card-text"><?php echo $product['description']; ?></p>
                        <p class="card-text"><?php echo '$' . $product['price']; ?></p>
                        <a href="#" class="btn btn-primary">Buy</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Hiển thị phân trang -->
<?php if ($totalPages > 1): ?>
    <div>
        <?php if ($currentPage > 1): ?>
            <a href="?page=<?php echo $currentPage - 1; ?>">Previous</a>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <?php if ($i == $currentPage): ?>
                <strong><?php echo $i; ?></strong>
            <?php else: ?>
                <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
            <?php endif; ?>
        <?php endfor; ?>

        <?php if ($currentPage < $totalPages): ?>
            <a href="?page=<?php echo $currentPage + 1; ?>">Next</a>
        <?php endif; ?>
    </div>
<?php endif; ?>
</div>

<!-- Thêm đường dẫn đến tệp JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
