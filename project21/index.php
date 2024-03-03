<?php
$products = [
    [
        'img' => '<img src="./images/images.jpg"  alt="">',
        "id" => 1,
        "name" => "T-Shirt",
        "price" => 15.99,
        "description" => "A comfortable and stylish T-Shirt."
    ],
    [
        'img' => '<img src="./images/images.jpg"  alt="">',
        "id" => 2,
        "name" => "Jean",
        "price" => 23,
        "description" => "A comfortable and stylish Jean."
    ],
    // ... add more products
    [
        'img' => '<img src="./images/images.jpg"  alt="">',
        "id" => 3,
        "name" => "T-Shirt",
        "price" => 15.99,
        "description" => "A comfortable and stylish T-Shirt."
    ],
    [
        'img' => '<img src="./images/images.jpg"  alt="">',
        "id" => 4,
        "name" => "Jean",
        "price" => 23,
        "description" => "A comfortable and stylish Jean."
    ],
    [
        'img' => '<img src="./images/images.jpg"  alt="">',
        "id" => 5,
        "name" => "T-Shirt",
        "price" => 15.99,
        "description" => "A comfortable and stylish T-Shirt."
    ],
    [
        'img' => '<img src="./images/images.jpg"  alt="">',
        "id" => 6,
        "name" => "Jean",
        "price" => 23,
        "description" => "A comfortable and stylish Jean."
    ],
];
$itemsPerPage = 4;
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$totalPages = ceil(count($products) / $itemsPerPage);
$currentPageItems = array_slice($products, ($currentPage - 1) * $itemsPerPage, $itemsPerPage); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .product-list {
        display: flex;
        margin-left: 40px;
    }

    .product {
        margin-left: 100px;
        height: auto;
        width: 15%;
    }

    .pagination {
        margin-left: 140px;
    }
    </style>
</head>

<body>
    <div class="product-list">
        <?php foreach ($currentPageItems as $products) : ?>
        <div class="product">
            <?php echo "{$products['img']}"; ?>
            <p> <?php echo "ID: " . $products['id']; ?></p>
            <p> <?php echo "Name: " . $products['name']; ?></p>
            <p> <?php echo "Price: " . $products['price'] . "$"; ?></p>
            <p> <?php echo "Description: " . $products['description']; ?></p>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="pagination">
        <?php if ($currentPage > 1) : ?>
        <a href="?page=<?php echo $currentPage - 1; ?>">Previous</a>
        <?php endif; ?>
        <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
        <?php if ($i == $currentPage) : ?>
        <span class="active"><?php echo $i; ?></span>
        <?php else : ?>
        <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php endif; ?>
        <?php endfor; ?>
        <?php if ($currentPage < $totalPages) : ?>
        <a href="?page=<?php echo $currentPage + 1; ?>">Next</a>
        <?php endif; ?>
    </div>
</body>

</html>