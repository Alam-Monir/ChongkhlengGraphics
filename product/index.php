<!-- all product page -->
<?php
include "../includes/header.php";
?>
<style>
    a{
        text-decoration: none;
        color: black;
    }
    .back-icon{
        font-size: 2rem;
    }
    .rounded{
        width: 200px; 
        height:300px;
        object-fit: cover;
    }
    @media (max-width: 991px) {
        .rounded{
        width: 100px; 
        height:150px;
        object-fit: cover;
    }
    }
</style>

<!-- all product page -->

<!-- back button -->
<div class="d-flex flex-row flex-wrap" style="background-color:  rgb(216, 196, 182);">
<button class="btn">
    <a href="../index.php">
  <i class="bi bi-arrow-left back-icon"></i> 
</a>
</button>
<h3 class="mt-3 mx-3">All Product</h3>
</div>

<!-- product page -->
<div class="d-flex flex-row flex-wrap my-3 mx-3 justify-content-around">
  <a href="./apparels/index.php">
    <img src="../auth/img/shopping (1).webp" class="rounded" alt="Shopping Image">
    <h4 class="text-center fs-6">Men/women</h4>
  </a>
  <a href="">
    <img src="../auth/img/shopping10.webp" class="rounded" alt="Shopping Image">
    <h4 class="text-center fs-6">stationery</h4>
  </a>
  <a href="">
    <img src="../auth/img/shopping (5).webp" class="rounded" alt="Shopping Image">
    <h4 class="text-center fs-6">Toys</h4>
  </a>
  <a href="">
    <img src="../auth/img/shopping (6).webp" class="rounded" alt="Shopping Image">
    <h4 class="text-center fs-6">Prize</h4>
  </a>
  <a href="">
    <img src="../auth/img/shopping (7).webp" class="rounded" alt="Shopping Image">
    <h4 class="text-center fs-6">Print Cup</h4>
  </a>
  <a href="">
    <img src="../auth/img/shopping.webp" class="rounded" alt="Shopping Image">
    <h4 class="text-center fs-6">Extra Product</h4>
  </a>
</div>












<?php include "../includes/footer.php"; ?>