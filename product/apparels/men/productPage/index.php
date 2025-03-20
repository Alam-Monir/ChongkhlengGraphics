<?php
include "./../../../../includes/header.php";
?>
<style>
  .card-img-top {
    margin: 20px 0 0 100px;
    width: 25rem;
    border-radius: 20px;
  }
  .card-text{
      margin: 10px 0 0 110px;
      font-size: 16px;
    }
    

  .card1 .card-img-top {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    transition: box-shadow 0.3s ease;
  }


  @media (max-width: 991px) {
    .card-img-top {
      margin: 10px 0 0 40px;
      width: 80%;
      border-radius: 20px;
    }
    .card-text{
      margin: 10px 0 0 40px;
      font-size: 16px;
    }
    .d-flex .card{
      width: 80px;
      font-weight: bolder;
    }
    
  }
</style>
<!-- back button -->
<div class="d-flex flex-row flex-wrap" style="background-color:  rgb(216, 196, 182);">
  <button class="btn">
    <a href="../index.php">
      <i class="bi bi-arrow-left back-icon" style="font-size: 2rem; color:black;"></i>
    </a>
  </button>
  <!-- <h3 class="mt-3 mx-3 fw-boldder">Men's T shirt</h3> -->
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
  <a class="btn btn-primary mt-1 my-3 rounded-3 text-center" style="height: 60px; width:190px;" href="" role="button">Add to Cart</a>
  <a class="btn btn-primary mt-1 my-3 rounded-3 text-center" style="height: 60px; width:190px;" href="#" role="button">Add to Cart</a>
  </div>
</div>



