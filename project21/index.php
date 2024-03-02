<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project21</title>
    <link rel="stylesheet" href="./assets/css/bootstrap-5.3.3/dist/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/css/bootstrap-5.3.3/dist/css/bootstrap.min.css">
</head>
<body style="font-family: Arial">
<?php
$products = [
    [
        "img" => "./assets/img/anh1.jpg",
        "id" => 1,
        "name" => "T-Shirt",
        "price" => 15.99,
        "description" => "A comfortable and stylish T-Shirt."
    ],
    [
        "img" => "./assets/img/anh2.jpg",
        "id" => 2,
        "name" => "Jean",
        "price" => 23,
        "description" => "A comfortable and stylish Jean."
    ],
    [
        "img" => "./assets/img/anh3.jpg",
        "id" => 3,
        "name" => "Sweatshirt",
        "price" => 30,
        "description" => "A comfortable and stylish Sweatshirt."
    ],
    [
        "img" => "./assets/img/anh4.jpg",
        "id" => 4,
        "name" => "Hoodie",
        "price" => 35,
        "description" => "A comfortable and stylish Hoodie."
    ],
    [
        "img" => "./assets/img/anh1.jpg",
        "id" => 5,
        "name" => "Jacket",
        "price" => 40,
        "description" => "A comfortable and stylish Jacket."
    ],
    [
        "img" => "./assets/img/anh1.jpg",
        "id" => 6,
        "name" => "Coat",
        "price" => 50,
        "description" => "A comfortable and stylish Coat."
    ],
    [
        "img" => "./assets/img/anh1.jpg",
        "id" => 7,
        "name" => "Suit",
        "price" => 60,
        "description" => "A comfortable and stylish Suit."
    ],
    [
        "img" => "./assets/img/anh1.jpg",
        "id" => 8,
        "name" => "Shirt",
        "price" => 20,
        "description" => "A comfortable and stylish Shirt."
    ],
    [
        "img" => "./assets/img/anh1.jpg",
        "id" => 9,
        "name" => "Polo",
        "price" => 25,
        "description" => "A comfortable and stylish Polo."
    ],
    [
        "img" => "./assets/img/anh1.jpg",
        "id" => 10,
        "name" => "Blazer",
        "price" => 45,
        "description" => "A comfortable and stylish Blazer."
    ],
    [
        "img" => "./assets/img/anh1.jpg",
        "id" => 11,
        "name" => "Sweater",
        "price" => 30,
        "description" => "A comfortable and stylish Sweater."
    ],
    [
        "img" => "./assets/img/anh1.jpg",
        "id" => 12,
        "name" => "Cardigan",
        "price" => 35,
        "description" => "A comfortable and stylish Cardigan."
    ],


];
?>
<?php
//require_once 'dbconnection.php';
//$db = new dbconnection();
//$conn = $db->getConnection();
//
//$sql = "SELECT * FROM products";
//$stmt = $conn->query($sql);
//$products = [];
//while ($row = $stmt->fetch()) {
//    $products[] = $row;
//}


$itemPerPage = 4;
$totalPages = ceil(count($products) / $itemPerPage);
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$currentPageItems = array_slice($products, ($currentPage - 1) * $itemPerPage, $itemPerPage)
?>

<div class="container">
    <div class="row">
        <?php foreach ($currentPageItems as $item) { ?>
            <div class="col-3">
                <div class="card">
                    <img src="<?php echo $item['img'] ?>" class="card-img-top" alt="card 01">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold text-uppercase "><?php echo $item['name'] ?></h5>
                        <p class="card-text"><?php echo $item['price'] ?></p>
                        <p class="card-text"><?php echo $item['description'] ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
        <nav class="mt-3" >
            <ul class="pagination">
                <?php if ($currentPage > 1): ?>
                    <li class="page-item">
                        <a class="page-link" href="?page=<?php echo $currentPage - 1 ?>" aria-label="Previous">
                            <span aria-hidden="true">Previous</span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                    <li class="page-item">
                        <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                    </li>
                <?php endfor; ?>
                <?php if ($currentPage < $totalPages): ?>
                    <li class="page-item">
                        <a class="page-link" href="?page=<?php echo $currentPage + 1 ?>" aria-label="Next">
                            <span aria-hidden="true">Next</span>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>

    </div>
</div>

</body>
<script src=" ./assets/css/bootstrap-5.3.3/dist/js/bootstrap.bundle.js"></script>
<script src="./assets/css/bootstrap-5.3.3/dist/js/bootstrap.min.js"></script>
</html>