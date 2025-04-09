<!-- all product page -->
<?php
include "../includes/header.php";
?>
<style>
    a{
        text-decoration: none;
        color: black;
    }
    .back-icon{
        font-size: 1.7rem;
    }
    .rounded{
        width: 200px; 
        height:300px;
        object-fit: cover;
    }
    .product-item {
    text-align: center;
    transition: transform 0.3s ease;
  }

  .product-item:hover {
    transform: scale(1.05);
  }

  .product-item img {
    transition: transform 0.3s ease;
  }
    @media (max-width: 991px) {
        .rounded{
        width: 100px; 
        height:150px;
        object-fit: cover;
    }
    }
</style>

<!-- all product page -->

<!-- back button -->
<div class="d-flex flex-row flex-wrap sticky-top" style="background-color: rgb(235, 235, 235); padding: 10px 15px;">
  <button class="btn">
    <a href="../index.php">
      <i class="bi bi-chevron-left" style="font-size: 1.7rem; color:black;"></i>
    </a>
  </button>
  <a href="/chongkhlenggraphics/" class="fw-bold d-inline-block mt-3 ms-2 me-auto">
    All Product
  </a>
  <form class="d-flex align-items-center ms-auto mx-2">
    <i class="fas fa-search d-md-none" aria-label="Search" style="font-size: 1rem;"></i>
    <i class="bi bi-bag-check ms-3 d-md-none" style="font-size: 1rem;"></i>
  </form>
</div>

<!-- product page -->
<div class="d-flex flex-row flex-wrap my-4 mx-3 justify-content-around">
  <a href="./apparels/index.php" class="product-item mb-3">
    <img src="../auth/img/shopping (1).webp" class="rounded" alt="Shopping Image">
    <h4 class="text-center fs-6">Clothing</h4>
  </a>
  <a href="" class="product-item">
    <img src="../auth/img/shopping10.webp" class="rounded" alt="Shopping Image">
    <h4 class="text-center fs-6">stationery</h4>
  </a>
  <a href="" class="product-item">
    <img src="../auth/img/shopping (5).webp" class="rounded" alt="Shopping Image">
    <h4 class="text-center fs-6">Toys</h4>
  </a>
  <a href="" class="product-item">
    <img src="../auth/img/shopping (6).webp" class="rounded" alt="Shopping Image">
    <h4 class="text-center fs-6">Prize</h4>
  </a>
  <a href="" class="product-item">
    <img src="../auth/img/shopping (7).webp" class="rounded" alt="Shopping Image">
    <h4 class="text-center fs-6">Print Cup</h4>
  </a>
  <a href="" class="product-item">
    <img src="../auth/img/shopping.webp" class="rounded" alt="Shopping Image">
    <h4 class="text-center fs-6">Extra Product</h4>
  </a>
  <a href="" class="product-item">
    <img src="../auth/img/shopping.webp" class="rounded" alt="Shopping Image">
    <h4 class="text-center fs-6">Extra Product</h4>
  </a>
</div>











<?php include "../includes/footer.php"; ?>