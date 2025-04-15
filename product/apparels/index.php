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
<div class="accordion sticky-top" id="navToggle">
  <div class="collapse show" id="mainNavbar" data-bs-parent="#navToggle">
    <div class="d-flex align-items-center justify-content-between px-3 py-2" style="background-color: rgb(235, 235, 235);">

      <!-- Back Button -->
      <a href="../index.php" class="btn p-0">
        <i class="bi bi-chevron-left fs-4 text-dark"></i>
      </a>

      <!-- Brand Name -->
      <a href="/chongkhlenggraphics/" class="fw-bold ms-2 me-auto text-dark text-decoration-none">
        CG STORE
      </a>

    <!-- Desktop Search -->
    <form class="d-none d-md-flex align-items-center mx-auto" style="width: 640px; margin-right: 600px;">
  <div class="input-group w-100" style="border-radius: 15px; background-color: #f8f9fa;">
    <span class="input-group-text border-0" style="border-radius: 15px 0 0 15px; background-color:rgb(208, 208, 208);">
      <i class="fas fa-search"></i>
    </span>
    <input type="search" class="form-control bg-light border-0" placeholder="What are you looking for..." style="border-radius: 0 15px 15px 0;">
  </div>
  <i class="bi bi-bag-check ms-3"></i>
</form>

      <!-- Mobile Icons -->
      <div class="d-md-none d-flex align-items-center">
        <!-- Toggle Search Bar and Hide Navbar -->
        <a class="text-dark" data-bs-toggle="collapse" href="#mobileSearch" aria-expanded="false" aria-controls="mobileSearch">
          <i class="bi bi-search fs-6"></i>
        </a>
        <i class="bi bi-bag-check ms-3 fs-6"></i>
      </div>
    </div>
  </div>

  <div class="collapse" id="mobileSearch" data-bs-parent="#navToggle">
    <div class="input-group p-3 bg-white">
      <!-- Back Button to return to navbar -->
      <span class="input-group-text bg-white border-end-0">
        <a data-bs-toggle="collapse" href="#mainNavbar" class="text-dark">
          <i class="bi bi-arrow-left"></i>
        </a>
      </span>
      <input type="text" class="form-control border-start-0" placeholder="Search..." style="height: 48px;">
    </div>
  </div>

</div>

  <!-- Search Bar -->
 <div class="collapse w-100" id="searchNav">
  <form class="w-100">
    <div class="input-group p-3 mt-3 bg-white">
      <!-- Back Icon -->
      <span class="input-group-text bg-white border-end-0" style="cursor: pointer;">
        <a data-bs-toggle="collapse" href="#searchNav" onclick="document.getElementById('normalNav').classList.add('show')" class="text-dark text-decoration-none">
          <i class="bi bi-arrow-left" style="font-size: 1.2rem;"></i>
        </a>
      </span>

      <input type="text" class="form-control border-start-0" placeholder="Search..." style="height: 48px;">
    </div>
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