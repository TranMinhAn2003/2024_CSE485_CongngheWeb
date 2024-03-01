<?php
require_once 'funcitons.php';
$categories = getAllCategories();
$product = getAllProduct();
?>
<?php
require '.\assets\layout\header.php'
?>
<?php
$itemsPerPage = 4;
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$totalProducts = count($product);
$totalPages = ceil($totalProducts / $itemsPerPage);
$currentPageItems = array_slice($product, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
?>
    <div class="container-fluid mt-2">
        <div class="row">
            <?php foreach($currentPageItems as $product): ?>
                <div class="col-md-3">
                    <div class="card my-2">
                        <img src="<?php echo $product['product_images_url']; ?>" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <a  class="text-decoration-none" href="#"><h5 class="card-title "><?php echo $product['title_product'];?></h5></a>
                            <p class="card-text"><?php echo $product['price']."$"?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<div class="pagination">
    <ul class="pagination">
        <?php if ($currentPage > 1): ?>
            <li class="page-item">
                <a class="page-link" href="?page=<?php echo $currentPage - 1; ?>">Previous</a>
            </li>
        <?php endif; ?>
        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <?php if ($i == $currentPage): ?>
                <li class="page-item active">
                    <span class="page-link"><?php echo $i; ?></span>
                </li>
            <?php else: ?>
                <li class="page-item">
                    <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                </li>
            <?php endif; ?>
        <?php endfor; ?>
        <?php if ($currentPage < $totalPages): ?>
            <li class="page-item">
                <a class="page-link" href="?page=<?php echo $currentPage + 1; ?>">Next</a>
            </li>
        <?php endif; ?>
    </ul>
</div>
</main>


