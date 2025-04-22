<?php
include "./../includes/header.php";
?>
<style>
  a {
    text-decoration: none;
    color: black;
  }

  .custom-btn {
    height: 60px;
    width: 190px;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0;
    border-radius: 17px;
    border: none;
    color: black;
  }
</style>

<!-- back navbar -->
<div class="accordion sticky-top" id="navToggle">
  <div class="collapse show" id="mainNavbar" data-bs-parent="#navToggle">
    <div class="d-flex align-items-center justify-content-between px-3 py-2" style="background-color: rgb(235, 235, 235);">

      <!-- Back Button -->
      <a href="./../product/apparels/men/productPage/" class="btn p-0">
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
        <a href="/chongkhlenggraphics/">
        <i class="bi bi-bag-check ms-3 fs-6"></i>
        </a>
      </form>

      <!-- Mobile Icons -->
      <div class="d-md-none d-flex align-items-center">
        <!-- Toggle Search Bar and Hide Navbar -->
        <a class="text-dark" data-bs-toggle="collapse" href="#mobileSearch" aria-expanded="false" aria-controls="mobileSearch">
          <i class="bi bi-search fs-6"></i>
        </a>
        <a href="/chongkhlenggraphics/">
        <i class="bi bi-bag-check ms-3 fs-6"></i>
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


<!-- order summary page -->
<div class=" d-flex flex-row mt-3">
  <div class="fs-5 mt-4 mx-4 flex-grow-1 fw-bolder">Deliver to :</div>
  <a class="btn btn-secondary align-items-center mt-4 mx-4 mb-4 btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" role="button">Add Address</a>

  <!-- add address -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add Address</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="">
            <label for="floatingInput"> Add address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingInput" placeholder="">
            <label for="floatingInput"> Phone Number</label>
          </div>
          <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingInput" placeholder="">
            <label for="floatingInput">Zip Code</label>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>

</div>

<div class="d-flex flex-column mx-3">
  <div class="p-1 fs-4">Land Debbarma</div>
  <div class="p-1">Durga chowdhury para</div>
  <div class="p-1">1234567890</div>
  <div class="p-1">78067</div>
</div>

<!-- product details -->
<div class="card d-flex flex-row mt-3 mx-3 rounded-3" style="background-color: #F5EFE7;border:none">
  <img src="./../auth/img/shopping (2).webp" class="img-fluid rounded-3 my-3 mx-2" style="height: 150px;">
  <div class="p-4">adidas Originals T shirt
    <div class="size mt-2">Size : M</div>
    <div class="review mt-2">
      <i class="bi bi-star-fill"></i>
      <i class="bi bi-star-fill"></i>
      <i class="bi bi-star-fill"></i>
      <i class="bi bi-star-half"></i>
    </div>
    <div class="mt-2 d-flex flex-row">
      <div class="flex-grow-1">₹819</div>
      <div class="text-danger">60% off</div>

    </div>
  </div>
</div>


<!-- Price Details -->
<div class=" d-flex flex-row mt-3">
  <div class="fs-5 mt-4 mx-4 flex-grow-1 fw-bolder">Price Details</div>
</div>

<div class="d-flex flex-column mx-4 mt-2">
  <div class=" mt-2 d-flex flex-row">
    <p class="flex-grow-1 ">Price (1 item)</p>
    <p>Price (1 item)</p>
  </div>
  <div class="d-flex flex-row">
    <p class="flex-grow-1">Discount</p>
    <p>Price (1 item)</p>
  </div>
  <div class=" d-flex flex-row">
    <p class="flex-grow-1">Delivery Charges</p>
    <p>Price (1 item)</p>
  </div>
  <div class="d-flex flex-row">
    <p class="flex-grow-1">Total Amount</p>
    <p>Price (1 item)</p>
  </div>
</div>



<!-- buy button -->
<div class="d-flex justify-content-around flex-row mt-5 mb-2 button">
  <div class="align-items-center">
    <a class="btn btn-secondary custom-btn fw-bolder" style="background-color: #D8C4B6;">Price : 577</a>
  </div>
  <div class="align-items-center">
    <a class="btn btn-secondary custom-btn fw-bolder" style="background-color :#F5EFE7;" href="" role="button">Continue</a>
  </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>