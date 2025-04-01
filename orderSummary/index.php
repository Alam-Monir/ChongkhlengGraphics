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
    border:none;color:black;
  }
</style>

<div class="d-flex flex-row flex-wrap sticky-top" style="background-color: rgb(235, 235, 235); padding: 10px 15px;">
  <button class="btn">
    <a href="./../product/apparels/men/productPage">
      <i class="bi bi-chevron-left" style="font-size: 1.7rem;"></i>
    </a>
  </button>
  <a href="/chongkhlenggraphics/" class="fw-bold d-inline-block mt-3 ms-2 me-auto">
    CG STORE
  </a>
</div>

<!-- order summary page -->
<div class=" d-flex flex-row mt-3">
  <div class="fs-5 mt-4 mx-4 flex-grow-1 fw-bolder">Deliver to :</div>
  <a class="btn btn-secondary align-items-center mt-4 mx-4 mb-4" href="#" role="button">Add Address</a>
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
    <a class="btn btn-secondary custom-btn fw-bolder" style="background-color: #D8C4B6;" href="#" role="button">699</a>
  </div>
  <div class="align-items-center">
    <a class="btn btn-secondary custom-btn fw-bolder" style="background-color :#F5EFE7;" href="#" role="button">Continue</a>
  </div>
</div>










<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>