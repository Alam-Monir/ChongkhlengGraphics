<?php
include "includes/header.php";
include "includes/nav.php";
?>

<style>
  .input-group-text {
    display: none;
  }

  .custom-search-bar input {
    display: none;
  }

  .justify-content-evenly img {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    width: 60px;
    height: 60px;
    object-fit: cover;
  }

  .carousel-inner img {
    height: 350px;
    object-fit: cover;
  }

  a {
    text-decoration: none;
  }

  .card {
    border-radius: 20px;
    height: 100%;
    width: 300px;
    margin-top: 15px;
  }

  .card img {
    border-radius: 20px;
  }

  .image-container {
    display: flex;
    text-align: center;
    padding: 20px;
    justify-content: space-evenly;
    gap: 15px;
    flex-wrap: nowrap;
    overflow-x: auto;
    padding: 0 0 10px 5px;
  }

  .custom-img {
    max-width: 100%;
    height: auto;
    border-radius: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    width: 20%;
    height: auto;

  }

  .image-container-1 {
    display: flex;
    padding: 20px;
    justify-content: space-evenly;
    gap: 20px;
    flex-wrap: nowrap;
    overflow-x: auto;
    padding-left: 5px;
  }

  .custom-img1 {
    max-width: 100%;
    height: 400px;
    border-radius: 30px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    width: 20%;
    flex-shrink: 0;
  }
  .slider{
    width: 100%;
    height: var(--height);
    overflow: hidden;
    mask-image: linear-gradient(
      to right,
      transparent,
      #000 10% 90%,
      transparent
    );
  }
  .slider .list{
    display: flex;
    width: 100%;
    min-width: calc(var(--width) * var(--quantity));
    position: relative;
  }
  .slider .list .items{
    width: var(--width);
    height: var(--height);
    position: absolute;
    left: 100%;
    animation: autoRun 10s linear infinite;
    animation-delay: calc((10s / var(--quantity)) * (var(--position) - 1));
  }
  .slider .list .items img{
    width: 100%;
  }
  @keyframes autoRun{
    from{
      left: 100%;
    }
    to{
      left: calc(var(--width) * -5);
    }
  }

  @keyframes appear{
    from{
      opacity: 0;
      scale: 0.5;
    }
    to{
      opacity: 1;
      scale: 1;
    }
  }
  #ani{

    animation: appear linear;
    animation-timeline: view();
    animation-range: entry 0% cover 11%;
  }
  
  @media (max-width: 991px) {
    .navbar-toggler-icon {
      width: 20px;
      height: 20px;
    }

    .shopping-bag {
      position: absolute;
      top: 6px;
      right: 10px;
      font-size: 1.5rem;
    }

    .search {
      display: block;
    }

    .custom-search-bar input {
      display: block;
      width: 10px;
    }

    .input-group-text {
      display: block;
    }

    .carousel-inner img {
      height: 150px;
      object-fit: cover;
    }

    .d-flex {
      flex-wrap: nowrap;

    }

    .card {
      width: 155px;
    }

    .image-container {
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
    }

    .custom-img {
      width: 100px;
    }

    .image-container-1 {
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
    }

    .custom-img1 {
      width: 40%;
      height: 220px;
    }
    .justify-content-evenly img {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    width: 55px;
    height: 55px;
  }

  }
</style>

<!--navbar-->
<!-- <nav class="navbar navbar-expand-lg">
  <div class="container-fluid d-flex justify-content-between align-items-center">
  <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand mx-auto d-lg-none" href="#">
      <h2 class="fw-bold d-inline-block align-text-top" style="margin-right: 50px;">CG STORE</h2>
    </a>
    <a class="navbar-brand d-none d-lg-block" href="#">
      <h2 class="fw-bold d-inline-block align-text-top">CG STORE</h2>
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-3">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contacts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Help</a>
        </li>
      </ul>

      <a class="btn btn-outline-secondary" href="#" role="button">Login</a>
    </div>

    <form class="d-flex gap-4">
      <a href="#" class="btn search d-none d-lg-block">
        <i class="fas fa-search" type="search" aria-label="Search"></i>
      </a>

      <a href="#" class="btn shopping-bag">
        <i class="fas fa-shopping-bag"></i>
      </a>
    </form>
  </div>
</nav> -->


<!--search-icon-->
<div class="input-group mt-3 custom-search-bar p-2">
  <span class="input-group-text bg-body-tertiary p-2 bg-light" style="border-radius: 15px 0 0 15px; margin-left:10px; border-right:none;">
  <i class="bi bi-search"></i>
  </span>
  <input <span class="form-control me-2 bg-body-tertiary" type="search" placeholder="What are you looking for..." aria-label="Search" style="border-radius: 0 15px 15px 0; border-left:none;">
</div>


<!--brands-list-->
<div id="ani">
<div class="d-flex justify-content-evenly mt-5 mb-3 p-3 brand-img">
  <a href="product/">
    <img src="./auth/img/icons8-grid-32.png" class="rounded-circle">
  </a>
  <a href="#">
    <img src="./auth/img/icons8-shirt-48 (1).png" class="rounded-circle">
  </a>
  <a href="#">
    <img src="./auth/img/puma22.png" class="rounded-circle">
  </a>
  <a href="#">
    <img src="./auth/img/download.png" class="rounded-circle">
  </a>
  <a href="#">
    <img src="./auth/img/hm.png" class="rounded-circle">
  </a>
  <a href="#">
    <img src="./auth/img/hm.png" class="rounded-circle">
  </a>
</div>
</div>


<!--img-sliding-->
<div id="ani">
<div id="carouselExampleInterval" class="carousel slide p-2 mx-2" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-inner rounded-4">
      <div class="carousel-item active">
        <img src="./auth/img/img.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./auth/img/bb.webp" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./auth/img/nn.webp" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
</div>

<!--product list name-->
<div id="ani">
<div class="d-flex justify-content-between  mt-5 mx-5">
  <p class="fs-4 d-inline fw-bold">New Arrivel</p>
  <a href="https://www.youtube.com/watch?v=-FP2Cmc7zj4"
    <p class="d-niline float-end" style="color: red;">See All</p>
  </a>
</div>
</div>

<!--product-box-->
<div id="ani">
<div class="d-flex flex-row flex-wrap mb-5 justify-content-evenly" style="border: none;">
  <div class="card">
    <a href="./product/apparels/">
      <img src="./auth/img/1.jpeg" class="card-img-top w-100 h-100" alt="...">
    </a>
    <div class="card-body">
      <div class="d-flex flex-row  fw-bold">
        <p class="p-1 flex-grow-1 col-2 text-truncate" style="font-size: 13px;">adidas Originals T shirt <br>₹819</p>
        <!-- <div class="p-1">1000</div> -->
      </div>
    </div>
  </div>

  <div class="card">
    <a href="path_to_your_target_page_2.html">
      <img src="./auth/img/shopping (2).webp" class="card-img-top w-100 h-100" alt="...">
    </a>
    <div class="card-body">
      <div class="d-flex flex-row mb-1 fw-bold">
      <p class="p-1 flex-grow-1 col-2 text-truncate" style="font-size: 13px;">adidas Originals T shirt <br>₹819</p>
      </div>
    </div>
  </div>

  <div class="card">
    <a href="path_to_your_target_page_3.html">
      <img src="./auth/img/1.jpeg" class="card-img-top w-100 h-100" alt="...">
    </a>
    <div class="card-body">
      <div class="d-flex flex-row mb-1 fw-bold">
      <p class="p-1 flex-grow-1 col-2 text-truncate" style="font-size: 13px;">adidas Originals T shirt <br>₹819</p>
      </div>
    </div>
  </div>

  <div class="card">
    <a href="path_to_your_target_page_4.html">
      <img src="./auth/img/shopping (2).webp" class="card-img-top w-100 h-100" alt="...">
    </a>
    <div class="card-body">
      <div class="d-flex flex-row mb-1 fw-bold">
      <p class="p-1 flex-grow-1 col-2 text-truncate" style="font-size: 13px;">adidas Originals T shirt <br>₹819</p>
      </div>
    </div>
  </div>
</div>
</div>


<!--extra-product1-->
<div id="ani">
<div class="d-flex flex-row flex-wrap  mx-3 mb-3 rounded-5" style="background-color: rgb(216, 196, 182);">
  <div class="container">
    <h2 class="text-center my-2">Baby Point</h2>
    <div class="image-container my-4">
      <img src="./auth/img/baby1.webp" alt="Uploaded Image" class="custom-img">
      <img src="./auth/img/baby2.webp" alt="Uploaded Image" class="custom-img">
      <img src="./auth/img/baby1.webp" alt="Uploaded Image" class="custom-img">
      <img src="./auth/img/1.jpeg" alt="Uploaded Image" class="custom-img">
      <img src="./auth/img/shopping.webp" alt="Uploaded Image" class="custom-img">
      <img src="./auth/img/shopping (3).webp" alt="Uploaded Image" class="custom-img">

    </div>
  </div>
</div>
</div>

<!--extra-product-more-->
<div id="ani">
<div class="container">
  <h2 class="text-center my-4">More offer on T-shirt</h2>
  <div class="image-container-1 my-4">
    <img src="./auth/img/shopping.webp" alt="" class="custom-img1">
    <img src="./auth/img/shopping (2).webp" alt="" class="custom-img1">
    <img src="./auth/img/shopping (4).webp" alt="" class="custom-img1">
    <img src="./auth/img/shopping (3).webp" alt="" class="custom-img1">
    <img src="./auth/img/shopping (4).webp" alt="" class="custom-img1">
    <img src="./auth/img/1.jpeg" alt="" class="custom-img1">
    <img src="./auth/img/1.jpeg" alt="" class="custom-img1">
    <img src="./auth/img/1.jpeg" alt="" class="custom-img1">
  </div>
</div>
</div>


<!-- sliding offer -->
<div class="d-flex justify-content-center mt-5">
  <h4 class="fw-bolder">OFFER</h4>
</div>
<div class="slider mt-1 my-5" style="--width:100px; --height:50px; --quantity:10;">
<div class="list">
  <div class="items" style="--position: 1;"><img src="./auth/img/100.png" alt=""></div>
  <div class="items"  style="--position: 2;"><img src="./auth/img/christmas-text-png-2 (1).png" alt=""></div>
  <div class="items"  style="--position: 3;"><img src="./auth/img/100.png" alt=""></div>
  <div class="items"  style="--position: 4;"><img src="./auth/img/christmas-text-png-2 (1).png" alt=""></div>
  <div class="items"  style="--position: 5;"><img src="./auth/img/100.png" alt=""></div>
  <div class="items"  style="--position: 6;"><img src="./auth/img/christmas-text-png-2 (1).png" alt=""></div>
  <div class="items"  style="--position: 7;"><img src="./auth/img/100.png" alt=""></div>
  <div class="items"  style="--position: 8;"><img src="./auth/img/christmas-text-png-2 (1).png" alt=""></div>
  <div class="items"  style="--position: 9;"><img src="./auth/img/100.png" alt=""></div>
  <div class="items"  style="--position: 10;"><img src="./auth/img/christmas-text-png-2 (1).png" alt=""></div>
</div>
</div>








<?php include "includes/footer.php"; ?>