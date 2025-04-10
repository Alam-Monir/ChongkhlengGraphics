<?php
include "../../../includes/header.php";
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
      width: 149px;
      max-height: 200px;
      object-fit: cover;
    }

    .text-start {
      font-size: 14px;
      margin: 0 0 0 5px;
      padding-top: 5px;
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
    CG STORE
  </a>
  <form class="d-flex align-items-center ms-auto mx-2">
    <i class="fas fa-search d-md-none" aria-label="Search" style="font-size: 1rem;"></i>
    <i class="bi bi-bag-check ms-3 d-md-none" style="font-size: 1rem;"></i>
  </form>
</div>


<div id="carouselExampleCaptions" class="carousel slide d-block d-lg-none" data-bs-ride="carousel" data-bs-interval="3000" style="height: 200px; overflow: hidden;">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" style="height: 300px;">
    <div class="carousel-item active">
      <img src="../../../auth/img/bb.webp" class="d-block w-100" alt="..." style="height: 300px; object-fit: cover; object-position: center;">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../../../auth/img/bb.webp" class="d-block w-100" alt="..." style="height: 300px; object-fit: cover; object-position: center;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../../../auth/img/bb.webp" class="d-block w-100" alt="..." style="height: 300px; object-fit: cover; object-position: center;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
</div>






<!-- mens product -->
<div class="d-flex flex-wrap my-3 justify-content-around pro">
  <a href="productPage/" class="product-item">
    <img src="../../../auth/img/shopping (2).webp" class="rounded product-img" alt="Shopping Image">
    <p class="text-start">adidas Originals t shirt<br> <span class="fs-6 fw-semibold">₹819</span></p>
  </a>
  <a href="" class="product-item">
    <img src="../../../auth/img/shopping (4).webp" class="rounded product-img" alt="Shopping Image">
    <p class="text-start">adidas Originals t shirt<br> <span class="fs-6 fw-semibold">₹819</span></p>
  </a>
  <a href="" class="product-item">
    <img src="../../../auth/img/shopping (3).webp" class="rounded product-img" alt="Shopping Image">
    <p class="text-start">adidas Originals t shirt<br> <span class="fs-6 fw-semibold">₹819</span></p>
  </a>
  <a href="" class="product-item">
    <img src="../../../auth/img/shopping (2).webp" class="rounded product-img" alt="Shopping Image">
    <p class="text-start">adidas Originals t shirt<br> <span class="fs-6 fw-semibold">₹819</span></p>
  </a>
  <a href="" class="product-item">
    <img src="../../../auth/img/shopping (3).webp" class="rounded product-img" alt="Shopping Image">
    <p class="text-start">adidas Originals t shirt<br> <span class="fs-6 fw-semibold">₹819</span></p>
  </a>
  <a href="" class="product-item">
    <img src="../../../auth/img/shopping (4).webp" class="rounded product-img" alt="Shopping Image">
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