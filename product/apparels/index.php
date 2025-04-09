<?php
include "../../includes/header.php";
?>

<style>
  a {
    text-decoration: none;
    color: black;
  }

  .back-icon {
    font-size: 1.7rem;
  }

  .rounded {
    width: 200px;
    height: 300px;
    object-fit: cover;
  }

  .category-item {
    text-align: center;
    transition: all 0.3s ease;
  }

  .category-img {
    transition: transform 0.3s ease;
  }

  .category-item:hover .category-img {
    transform: scale(1.1);
  }


  @media (max-width: 991px) {
    .rounded {
      width: 100px;
      height: 150px;
      object-fit: cover;
    }
  }
</style>


<!-- back button -->
<div class="d-flex flex-row flex-wrap sticky-top" style="background-color: rgb(235, 235, 235); padding: 10px 15px;">
  <button class="btn">
    <a href="../index.php">
      <i class="bi bi-chevron-left" style="font-size: 1.7rem; color:black;"></i>
    </a>
  </button>
  <a href="/chongkhlenggraphics/" class="fw-bold d-inline-block mt-3 ms-2 me-auto">
   Fashion
  </a>
  <form class="d-flex align-items-center ms-auto mx-2">
    <i class="fas fa-search d-md-none" aria-label="Search" style="font-size: 1rem;"></i>
    <i class="bi bi-bag-check ms-3 d-md-none" style="font-size: 1rem;"></i>
  </form>
</div>

<!-- product -->
<div class="d-flex flex-row flex-wrap my-3 mx-3 justify-content-around">
  <a href="./men/index.php" class="category-item">
    <img src="../../auth/img/shopping (1).webp" class="rounded category-img" alt="Shopping Image">
    <h4 class="text-center fs-6">Men</h4>
  </a>
  <a href="" class="category-item">
    <img src="../../auth/img/shopping (8).webp" class="rounded category-img" alt="Shopping Image">
    <h4 class="text-center fs-6">Women</h4>
  </a>
  <a href="" class="category-item">
    <img src="../../auth/img/download.webp" class="rounded category-img" alt="Shopping Image">
    <h4 class="text-center fs-6">kids</h4>
  </a>
  <a href="" class="category-item">
    <img src="../../auth/img/shopping (6).webp" class="rounded category-img" alt="Shopping Image">
    <h4 class="text-center fs-6">Men Topwear</h4>
  </a>
  <a href="" class="category-item">
    <img src="../../auth/img/shopping (7).webp" class="rounded category-img" alt="Shopping Image">
    <h4 class="text-center fs-6">Women topwear</h4>
  </a>
  <a href="" class="category-item">
    <img src="../../auth/img/shopping.webp" class="rounded category-img" alt="Shopping Image">
    <h4 class="text-center fs-6">Extra Product</h4>
  </a>
</div>


<?php include "../../includes/footer.php"; ?>