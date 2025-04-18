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

  .text-start {
    margin: 0 0 0 15px;
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
      margin: 0 0 0 20px;
      padding-top: 5px;
    }
  }
</style>


<div class="accordion sticky-top" id="navToggle">
  <div class="collapse show" id="mainNavbar" data-bs-parent="#navToggle">
    <div class="d-flex align-items-center justify-content-between px-3 py-2" style="background-color: rgb(235, 235, 235);">

      <!-- Back Button -->
      <a href="../" class="btn p-0">
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
        <a href="./../../../orderSummary/cart/" class="ms-3 fs-6 text-decoration-none text-dark">
          <i class="bi bi-bag-check"></i>
        </a>
      </form>

      <!-- Mobile Icons -->
      <div class="d-md-none d-flex align-items-center">
        <!-- Toggle Search Bar and Hide Navbar -->
        <a class="text-dark" data-bs-toggle="collapse" href="#mobileSearch" aria-expanded="false" aria-controls="mobileSearch">
          <i class="bi bi-search fs-6"></i>
        </a>
        <a href="./../../../orderSummary/cart/" class="ms-3 fs-6 text-decoration-none text-dark">
          <i class="bi bi-bag-check"></i>
        </a>
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

<!-- add sliding  -->
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


<!-- page name -->
<div class="d-flex fw-bold mt-4" style="margin-left: 20px;">Men</div>



<!-- mens product -->
<div class="d-flex flex-wrap my-3 p-1 justify-content-evenly pro">
  <a href="productPage/" class="product-item text-decoration-none col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
    <img src="../../../auth/img/shopping (2).webp" class="rounded product-img img-fluid" alt="Shopping Image">
    <p class="text-start text-truncate small w-75" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
  adidas Originals t shirtgbnfgncfg<br>
  <span class="fs-6 fw-semibold">₹819</span>
</p>

  </a>

  <a href="productPage/" class="product-item text-decoration-none col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
    <img src="../../../auth/img/shopping (3).webp" class="rounded product-img img-fluid" alt="Shopping Image">
    <p class="text-start text-truncate small w-75" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
      adidas Originals t shirtgbnfgncfg<br>
      <span class="fs-6 fw-semibold">₹819</span>
    </p>
  </a>

 <a href="productPage/" class="product-item text-decoration-none col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
    <img src="../../../auth/img/shopping (4).webp" class="rounded product-img img-fluid" alt="Shopping Image">
    <p class="text-start text-truncate small w-75" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
      adidas Originals t shirtgbnfgncfg<br>
      <span class="fs-6 fw-semibold">₹819</span>
    </p>
  </a>

 <a href="productPage/" class="product-item text-decoration-none col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
    <img src="../../../auth/img/shopping (5).webp" class="rounded product-img img-fluid" alt="Shopping Image">
    <p class="text-start text-truncate small w-75" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
      adidas Originals t shirtgbnfgncfg<br>
      <span class="fs-6 fw-semibold">₹819</span>
    </p>
  </a>

 <a href="productPage/" class="product-item text-decoration-none col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
    <img src="../../../auth/img/shopping (6).webp" class="rounded product-img img-fluid" alt="Shopping Image">
    <p class="text-start text-truncate small w-75" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
      adidas Originals t shirtgbnfgncfg<br>
      <span class="fs-6 fw-semibold">₹819</span>
    </p>
  </a>

 <a href="productPage/" class="product-item text-decoration-none col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
    <img src="../../../auth/img/shopping (7).webp" class="rounded product-img img-fluid" alt="Shopping Image">
    <p class="text-start text-truncate small w-75" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
      adidas Originals t shirtgbnfgncfg<br>
      <span class="fs-6 fw-semibold">₹819</span>
    </p>
  </a>

  <a href="productPage/" class="product-item text-decoration-none col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
    <img src="../../../auth/img/shopping (2).webp" class="rounded product-img img-fluid" alt="Shopping Image">
    <p class="text-start text-truncate small w-75" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
      adidas Originals t shirtgbnfgncfg<br>
      <span class="fs-6 fw-semibold">₹819</span>
    </p>
  </a>

 <a href="productPage/" class="product-item text-decoration-none col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
    <img src="../../../auth/img/shopping (2).webp" class="rounded product-img img-fluid" alt="Shopping Image">
    <p class="text-start text-truncate small w-75" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
      adidas Originals t shirtgbnfgncfg<br>
      <span class="fs-6 fw-semibold">₹819</span>
    </p>
  </a>

  <a href="productPage/" class="product-item text-decoration-none col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
    <img src="../../../auth/img/shopping (2).webp" class="rounded product-img img-fluid" alt="Shopping Image">
    <p class="text-start text-truncate small w-75" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
      adidas Originals t shirtgbnfgncfg<br>
      <span class="fs-6 fw-semibold">₹819</span>
    </p>
  </a>

  <a href="productPage/" class="product-item text-decoration-none col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
    <img src="../../../auth/img/shopping (2).webp" class="rounded product-img img-fluid" alt="Shopping Image">
    <p class="text-start text-truncate small w-75" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
      adidas Originals t shirtgbnfgncfg<br>
      <span class="fs-6 fw-semibold">₹819</span>
    </p>
  </a>

  <a href="productPage/" class="product-item text-decoration-none col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
    <img src="../../../auth/img/shopping (2).webp" class="rounded product-img img-fluid" alt="Shopping Image">
    <p class="text-start text-truncate small w-75" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
      adidas Originals t shirtgbnfgncfg<br>
      <span class="fs-6 fw-semibold">₹819</span>
    </p>
  </a>

  <a href="productPage/" class="product-item text-decoration-none col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
    <img src="../../../auth/img/shopping (2).webp" class="rounded product-img img-fluid" alt="Shopping Image">
    <p class="text-start text-truncate small w-75" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
      adidas Originals t shirtgbnfgncfg<br>
      <span class="fs-6 fw-semibold">₹819</span>
    </p>
  </a>
</div>



<?php include "../../../includes/footer.php"; ?>