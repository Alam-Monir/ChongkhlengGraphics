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

  .container {
    margin: 20px 0 20px 5px;
    max-width: 100%;
    width: 700px;
    height: 450px;
    background-color: rgb(235, 235, 235);
    border-radius: 42px;
    position: relative;

    & .highlight {
      position: absolute;
      content: "";
      height: 90px;
      background-color: #fff;
      width: 50%;
      bottom: 0;
      right: 0;
      border-top-left-radius: 24px;

      &:before,
      &:after {
        position: absolute;
        content: "";
        width: 24px;
        aspect-ratio: 1;
        background: radial-gradient(circle 24px at top left,
            #0000 98%,
            #fff);
      }

      &:before {
        bottom: 0;
        left: -24px;
      }

      &:after {
        right: 0;
        top: -24px;
      }
    }
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
      max-width: 100%;
      width: 22rem;
      margin-bottom: 50px;
    }

    .container {
      max-width: 100%;
      width: 380px;
      height: 300px;
    }
  }
</style>

<!-- Navbar -->
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
        <a href="./../../../../orderSummary/cart/" class="ms-3 fs-6 text-decoration-none text-dark">
          <i class="bi bi-bag-check"></i>
        </a>
      </form>


      <!-- Mobile search -->
      <div class="d-md-none d-flex align-items-center">
        <a class="text-dark" data-bs-toggle="collapse" href="#mobileSearch" aria-expanded="false" aria-controls="mobileSearch">
          <i class="bi bi-search fs-6"></i>
        </a>
        <a href="./../../../../orderSummary/cart/" class="ms-3 fs-6 text-decoration-none text-dark">
          <i class="bi bi-bag-check"></i>
        </a>
      </div>
    </div>
  </div>

  <!-- Mobile Search -->
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




    <div class="d-flex mt-5 mx-1" style="border: solid 0.1px black; border-radius:10px;">
      <div class="p-2 flex-fill text-truncate">Land Debbarma</div>
      <div class="p-2 text-truncate">Durga chowdhury para</div>
    </div>



    <!-- highlight product -->
    <div class="container">
      <div class="d-flex mt-3 p-1">
        <div class="p-2 flex-grow-1 fw-bold">Highlight</div>
        <div class="p-1">
          <ul class="mx-2">
            <li class="mt-2 ">Panel Type: IPS Panel</li>
            <li class="mt-2">Screen Resolution</li>
            <li class="mt-2">Morbi leo risus</li>
            <li class="mt-2">Porta ac consectetur ac</li>
            <li class="mt-2">Vestibulum at </li>
          </ul>
        </div>
      </div>

      <div class="highlight align-content-center">
        <a class="btn mt-2 mx-2 rounded-3 text-center align-content-center fw-bolder" style="height: 60px; width:170px; background-color:  rgb(228, 214, 214);" href="" role="button">All Details</a>
      </div>
    </div>

  </div>
</div>

<script src="/chongkhlenggraphics/assets/js/bootstrap.bundle.min.js"></script>
<script src="/chongkhlenggraphics/assets/js/jquery-3.7.1.min.js"></script>