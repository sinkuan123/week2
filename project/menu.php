<?php
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fs-5">
    <div class="container">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item mx-2">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item dropdown mx-2">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Customer
                </a>
                <ul class="dropdown-menu bg-body-tertiary">
                    <li><a class="dropdown-item" href="customer_create.php">Create Customer</a></li>
                    <li><a class="dropdown-item" href="customer_read.php">Read Customer</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown mx-2">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Order
                </a>
                <ul class="dropdown-menu bg-body-tertiary">
                    <li><a class="dropdown-item" href="order_create.php">Create Order</a></li>
                    <li><a class="dropdown-item" href="order_read.php">Read Order</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown mx-2">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Product
                </a>
                <ul class="dropdown-menu bg-body-tertiary">
                    <li><a class="dropdown-item" href="product_create.php">Create Product</a></li>
                    <li><a class="dropdown-item" href="product_read.php">Read Product</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown mx-2">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Product Category
                </a>
                <ul class="dropdown-menu bg-body-tertiary">
                    <li><a class="dropdown-item" href="product_category_create.php">Create Product Category</a></li>
                    <li><a class="dropdown-item" href="product_category_read.php">Read Product Category</a></li>
                </ul>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link" href="contact_us.php">Contact Us</a>
            </li>
        </ul>
        <ul class="navbar-nav text-end">
            <li class="nav-item p-1">
                <a class="nav-link border border-light border-1 rounded" href="?logout=true">Logout</a>
            </li>
        </ul>
    </div>
</nav>