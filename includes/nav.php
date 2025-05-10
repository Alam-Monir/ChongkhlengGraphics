<nav class="navbar navbar-expand-lg sticky-top bg-body">
  <div class="container-fluid d-flex justify-content-between align-items-center">

    <button class="navbar-toggler d-lg-none border-0 p-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" style="width: 1.6em; height: 1.6em;"></span>
    </button>

    <!-- Brand on mobile -->
    <a class="navbar-brand mx-auto d-lg-none" href="#">
      <h2 class="fw-bold d-inline-block align-text-top" style="margin-left: 50px;">CG STORE</h2>
    </a>

    <!-- Brand on desktop -->
    <a class="navbar-brand d-none d-lg-block p-3" href="#">
      <h3 class="fw-bold d-inline-block align-text-top">CG STORE</h3>
    </a>

    <!-- Only show on mobile -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-3 d-lg-none">
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

        <a class="btn btn-outline-secondary d-lg-inline-block" href="#" role="button">Login</a>

      </ul>

      <!-- show on desktop -->
      <div class="d-none d-lg-flex mx-auto" style="width: 700px; height:45px;">
        <form class="d-flex w-100">
          <div class="input-group w-100">
            <span class="rounded bg-body-tertiary" style=" padding:14px;">
              <i class="bi bi-search"></i>
            </span>
            <input type="search" class="form-control border-0 bg-body-tertiary" placeholder="Search" aria-label="Search">
          </div>
        </form>
      </div>

      <!-- account dropdwon -->
      <div class="dropdown d-flex align-items-center d-none">
        <button class="btn bg-body-tertiary dropdown-toggle d-flex align-items-center gap-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-person"></i>
          Account
        </button>
        <!-- Dropdown Menu -->
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">My Account</a></li>
          <li><a class="dropdown-item" href="#">My Order</a></li>
          <li><a class="dropdown-item" href="#">Log oout</a></li>
        </ul>
      </div>


    </div>

    <!-- Cart and Login buttons desktop-->
    <form class="d-flex gap-3 align-items-center" style="margin-right: 100px;">
      <a href="./orderSummary/cart/" class="btn shopping-bag">
        <i class="bi bi-bag-check"></i>
      </a>
      <a class="btn btn-outline-secondary d-none d-lg-inline-block border-0" href="#" role="button">Login</a>
    </form>
  </div>
</nav>