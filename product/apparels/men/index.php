<?php
include "../../../includes/header.php";
?>

<style>
  a {
    text-decoration: none;
    color: black;
  }

  .back-icon {
    font-size: 2rem;
  }

  .rounded {
    margin-right: 10px;
    width: 200px;
    height: 300px;
    object-fit: cover;
  }

  .text-center {
    margin-top: 5px;
    font-size: 15px;
  }

  .product-item {
    text-align: center;
    margin-bottom: 20px;
    transition: all 0.3s ease;
  }

  .product-img {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .product-item:hover .product-img {
    transform: scale(1.05);
  }


  @media (max-width: 991px) {
    .rounded {
      margin-left: 5px;
      width: 179px;
      height: 150px;
      object-fit: cover;
    }

    .text-start {
      font-size: 14px;
      margin: 0 0 40px 30px;
      padding-top: 5px;
    }
  }
</style>

<!-- back button -->
<div class="d-flex flex-row flex-wrap" style="background-color:  rgb(216, 196, 182);">
  <button class="btn">
    <a href="../index.php">
      <i class="bi bi-arrow-left back-icon"></i>
    </a>
  </button>
  <h3 class="mt-3 mx-3">Men's T shirt</h3>
</div>


<!-- mens product -->
<div class="d-flex flex-wrap my-3 justify-content-around">
  <a href="./../men/productPage/index.php" class="product-item">
    <img src="../../../auth/img/shopping (1).webp" class="rounded product-img" alt="Shopping Image">
    <p class="text-start">adidas Originals t shirt<br> <span class="fs-6 fw-semibold">₹819</span></p>
  </a>
  <a href="" class="product-item">
    <img src="../../../auth/img/shopping (1).webp" class="rounded product-img" alt="Shopping Image">
    <p class="text-start">adidas Originals t shirt<br> <span class="fs-6 fw-semibold">₹819</span></p>
  </a>
  <a href="" class="product-item">
    <img src="../../../auth/img/shopping (1).webp" class="rounded product-img" alt="Shopping Image">
    <p class="text-start">adidas Originals t shirt<br> <span class="fs-6 fw-semibold">₹819</span></p>
  </a>
  <a href="" class="product-item">
    <img src="../../../auth/img/shopping (1).webp" class="rounded product-img" alt="Shopping Image">
    <p class="text-start">adidas Originals t shirt<br> <span class="fs-6 fw-semibold">₹819</span></p>
  </a>
  <a href="" class="product-item">
    <img src="../../../auth/img/shopping (1).webp" class="rounded product-img" alt="Shopping Image">
    <p class="text-start">adidas Originals t shirt<br> <span class="fs-6 fw-semibold">₹819</span></p>
  </a>
  <a href="" class="product-item">
    <img src="../../../auth/img/shopping (1).webp" class="rounded product-img" alt="Shopping Image">
    <p class="text-start">adidas Originals t shirt<br> <span class="fs-6 fw-semibold">₹819</span></p>
  </a>
  <a href="" class="product-item">
    <img src="../../../auth/img/shopping (1).webp" class="rounded product-img" alt="Shopping Image">
    <p class="text-start">adidas Originals t shirt<br> <span class="fs-6 fw-semibold">₹819</span></p>
  </a>
  <a href="" class="product-item">
    <img src="../../../auth/img/shopping (1).webp" class="rounded product-img" alt="Shopping Image">
    <p class="text-start">adidas Originals t shirt<br> <span class="fs-6 fw-semibold">₹819</span></p>
  </a>
  <a href="" class="product-item">
    <img src="../../../auth/img/shopping (1).webp" class="rounded product-img" alt="Shopping Image">
    <p class="text-start">adidas Originals t shirt<br> <span class="fs-6 fw-semibold">₹819</span></p>
  </a>
  <a href="" class="product-item">
    <img src="../../../auth/img/shopping (1).webp" class="rounded product-img" alt="Shopping Image">
    <p class="text-start">adidas Originals t shirt<br> <span class="fs-6 fw-semibold">₹819</span></p>
  </a>
  <a href="" class="product-item">
    <img src="../../../auth/img/shopping (1).webp" class="rounded product-img" alt="Shopping Image">
    <p class="text-start">adidas Originals t shirt<br> <span class="fs-6 fw-semibold">₹819</span></p>
  </a>
  <a href="" class="product-item">
    <img src="../../../auth/img/shopping (1).webp" class="rounded product-img" alt="Shopping Image">
    <p class="text-start">adidas Originals t shirt<br> <span class="fs-6 fw-semibold">₹819</span></p>
  </a>
  <a href="" class="product-item">
    <img src="../../../auth/img/shopping (1).webp" class="rounded product-img" alt="Shopping Image">
    <p class="text-start">adidas Originals t shirt<br> <span class="fs-6 fw-semibold">₹819</span></p>
  </a>
</div>



<?php include "../../../includes/footer.php"; ?>