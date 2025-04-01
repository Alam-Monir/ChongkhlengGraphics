<?php
include "./../../../../includes/header.php";
?>
<style>
  .card-img-top {
    margin: 20px 0 0 90px;
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

  .card .card-img-top {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    transition: box-shadow 0.3s ease;
  }

  .sticky-top form {
    margin-left: 70rem;
  }

  .box1 .img-shadow {
    box-shadow: 10px 10px 9px rgba(9, 9, 9, 0.2);
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

    .d-flex form span i {
      display: none;
    }

    .d-flex form span {
      display: none;
    }

    .d-flex .address {
      max-width: 49vh;
      margin-bottom: 50px;
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
    <!-- <i class="fas fa-search d-none d-md-inline-block" aria-label="Search" style="font-size: 1rem;"></i> -->
    <span class="input-group-text bg-body-tertiary p-2 bg-light" style="height:45px; border-radius: 15px 0 0 15px; margin-left:10px; border-right:none;">
      <i class="fas fa-search"></i>
    </span>
    <input <span class="form-control me-2 bg-body-tertiary" type="search" placeholder="What are you looking for..." aria-label="Search" style=" height:45px; width:500px; border-radius: 0 15px 15px 0; border-left:none;">
    <i class="bi bi-bag-check ms-3 d-none d-md-inline-block" style="font-size: 1rem;"></i>

    <i class="fas fa-search d-md-none" aria-label="Search" style="font-size: 1rem;"></i>
    <i class="bi bi-bag-check ms-3 d-md-none" style="font-size: 1rem;"></i>
  </form>
</div>


<!-- product details right-->
<div class="d-flex flex-column flex-lg-row">
  <div class="card border w-100 w-lg-50 box1">
    <img src="./../../../../auth/img/shopping (2).webp" class="card-img-top img-shadow" alt="...">
    <p class="card-text">adidas Originals T shirt</p>
    <h5 class="card-text fw-bolder">₹819</h5>

    <div class="d-flex justify-content-center gap-3 mt-4 size">
      <a class="card text-center btn btn-primary" href="https://www.youtube.com/watch?v=ag_n6oE3dDY" role="button">S</a>
      <a class="card text-center btn btn-primary" href="#" role="button">M</a>
      <a class="card text-center btn btn-primary" href="#" role="button">L</a>
      <a class="card text-center btn btn-primary" href="#" role="button">XL</a>
    </div>

    <div class="d-flex justify-content-around mt-4">
      <a class="btn mt-1 my-3 rounded-3 text-center align-content-center fw-bolder" style="height: 60px; width:190px; background-color:  rgb(235, 235, 235);" href="" role="button">Add to Cart</a>
      <a class="btn mt-1 my-3 rounded-3 text-center align-content-center fw-bolder" style="height: 60px; width:190px; background-color:  rgb(228, 214, 214);" href="./../../../../orderSummary/" role="button">Buy Now</a>
    </div>
  </div>

  <!-- product  details left -->
  <div class="card border box2 w-100 w-lg-50">
    <div class="mt-5 mx-3">
      <h6> PLAY MK2 PRO Eco-Friendly Advanced 1G+8G Screen Mirroring Wifi Native Full HD Android ODELEE Pedal Accelerator Ride On Sport Bike with Durable Gripped Wheels for Kids Bike Battery Operated Ride On (Black)</h6>
    </div>


    <div class="d-flex mx-4 fs-5 mt-5">Deliver to
      <i class="bi bi-geo-alt-fill mx-3 "></i>

      <!-- Button trigger modal -->
      <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Change address
      </button>

      <!-- address pop up -->
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Your address</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="input-group flex-nowrap">
                <input type="text" class="form-control" placeholder="Address" aria-label="Username" aria-describedby="addon-wrapping">
                <input type="number" class="form-control" placeholder="Pin" aria-label="Username" aria-describedby="addon-wrapping">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save Changes</button>
            </div>
          </div>
        </div>
      </div>
    </div>




    <div class=" card mt-2 mx-3 p-2 d-flex flex-row address" style="width: 98vh;">
      <div class="flex-grow-5 text-truncate">Land debbarma </div>
      <div class="ms-auto text-truncate">durga chowdhury parafdfnnvcnvn</div>
    </div>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>