<?php
include "./../../../../includes/header.php";
?>
<style>
  .card-img-top {
    margin: 20px 0 0 100px;
    width: 25rem;
    border-radius: 20px;
  }

  .card-text {
    margin: 10px 0 0 110px;
    font-size: 16px;
  }

  .d-flex .fw-bold {
    text-decoration: none;
    color: black;
  }

  .card1 .card-img-top {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    transition: box-shadow 0.3s ease;
  }

  .sticky-top form {
    margin-left: 70rem;
  }



  @media (max-width: 991px) {
    .card-img-top {
      margin: 10px 0 0 40px;
      width: 80%;
      border-radius: 20px;
    }

    .card-text {
      margin: 10px 0 0 40px;
      font-size: 16px;
    }

    .d-flex .card {
      width: 80px;
      font-weight: bolder;
    }

    .d-flex form .form-control {
      display: none;
    }
    .d-flex form span i{
      display: none;
    }
    .d-flex form span{
      display: none;
    }
  }
</style>
<!-- back button -->
<div class="d-flex flex-row flex-wrap sticky-top" style="background-color: rgb(235, 235, 235); padding: 10px 15px;">
  <button class="btn">
    <a href="../index.php">
      <i class="bi bi-arrow-left back-icon" style="font-size: 1.7rem; color:black;"></i>
    </a>
  </button>
  <a href="/chongkhlenggraphics/" class="fw-bold d-inline-block mt-3 ms-2 me-auto">
    CG STORE
  </a>
  <form class="d-flex align-items-center ms-auto mx-2">
    <!-- <i class="fas fa-search d-none d-md-inline-block" aria-label="Search" style="font-size: 1rem;"></i> -->
    <span class="input-group-text bg-body-tertiary p-2 bg-light" style="height:45px; border-radius: 15px 0 0 15px; margin-left:10px; border-right:none;">
      <i class="fas fa-search"></i>
    </span>
    <input <span class="form-control me-2 bg-body-tertiary" type="search" placeholder="What are you looking for..." aria-label="Search" style=" height:45px; width:500px; border-radius: 0 15px 15px 0; border-left:none;">
    <i class="fas fa-shopping-bag ms-3 d-none d-md-inline-block" style="font-size: 1rem;"></i>

    <i class="fas fa-search d-md-none" aria-label="Search" style="font-size: 1rem;"></i>
    <i class="fas fa-shopping-bag ms-3 d-md-none" style="font-size: 1rem;"></i>
  </form>
</div>





<div class="card1">
  <img src="./../../../../auth/img/shopping (3).webp" class="card-img-top" alt="...">
  <p class="card-text">adidas Originals T shirt</p>
  <h5 class="card-text fw-bolder">₹819 </h5>

  <div class="d-flex justify-content-around mt-4">
    <a class="card text-center btn btn-primary" href="https://www.youtube.com/watch?v=ag_n6oE3dDY" role="button">S</a>
    <a class="card text-center btn btn-primary" href="#" role="button">M</a>
    <a class="card text-center btn btn-primary" href="#" role="button">L</a>
    <a class="card text-center btn btn-primary" href="#" role="button">XL</a>
  </div>

  <div class="d-flex justify-content-around mt-4">
    <a class="btn mt-1 my-3 rounded-3 text-center align-content-center" style="height: 60px; width:190px; background-color:  rgb(235, 235, 235);" href="" role="button">Add to Cart</a>
    <a class="btn mt-1 my-3 rounded-3 text-center align-content-center" style="height: 60px; width:190px; background-color:  rgb(228, 214, 214);" href="#" role="button">Buy Now</a>
  </div>
</div>