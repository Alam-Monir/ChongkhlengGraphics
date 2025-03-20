<?php
include "../../includes/header.php";
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
    width: 200px;
    height: 300px;
    object-fit: cover;
  }

  .category-item {
    text-align: center;
    margin-bottom: 20px;
    transition: all 0.3s ease;
  }

  .category-img {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .category-item:hover .category-img {
    transform: scale(1.05);
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
<div class="d-flex flex-row flex-wrap" style="background-color:  rgb(216, 196, 182);">
  <button class="btn">
    <a href="../index.php">
      <i class="bi bi-arrow-left back-icon"></i>
    </a>
  </button>
  <h3 class="mt-3 mx-3">Fashion</h3>
</div>

<!-- product section -->
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
    <img src="../../auth/img/shopping (5).webp" class="rounded category-img" alt="Shopping Image">
    <h4 class="text-center fs-6">Toys</h4>
  </a>
  <a href="" class="category-item">
    <img src="../../auth/img/shopping (6).webp" class="rounded category-img" alt="Shopping Image">
    <h4 class="text-center fs-6">Prize</h4>
  </a>
  <a href="" class="category-item">
    <img src="../../auth/img/shopping (7).webp" class="rounded category-img" alt="Shopping Image">
    <h4 class="text-center fs-6">Print Cup</h4>
  </a>
  <a href="" class="category-item">
    <img src="../../auth/img/shopping.webp" class="rounded category-img" alt="Shopping Image">
    <h4 class="text-center fs-6">Extra Product</h4>
  </a>
</div>


<?php include "../../includes/footer.php"; ?>