<?php
include ".././../includes/header.php";
?>

<style>
    /* cart */
    @media (max-width: 991px) {
        .container img {
            max-width: 100%;
            height: auto;
        }
    }
</style>
<!-- back navbar -->
<div class="accordion sticky-top" id="navToggle">
    <div class="collapse show" id="mainNavbar" data-bs-parent="#navToggle">
        <div class="d-flex align-items-center justify-content-between px-3 py-2" style="background-color: rgb(235, 235, 235);">

            <!-- Back Button -->
            <a href="../../orderSummary/" class="btn p-0">
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
                <i class="bi bi-bag-check ms-3"></i>
            </form>

            <!-- Mobile Icons -->
            <div class="d-md-none d-flex align-items-center">
                <!-- Toggle Search Bar and Hide Navbar -->
                <a class="text-dark" data-bs-toggle="collapse" href="#mobileSearch" aria-expanded="false" aria-controls="mobileSearch">
                    <i class="bi bi-search fs-6"></i>
                </a>
                <i class="bi bi-bag-check ms-3 fs-6"></i>
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

<!-- page name -->
<div class="d-flex fw-bold mt-4 mx-lg-5 mx-3"> My Cart </div>

<!-- cart right or up -->
<div class="container mt-4">
    <div class="row gx-4">
        <div class="col-lg-9 col-md-8 col-12 mb-3">
            <div class="card p-4 h-auto bg-body-secondary border-0">
                <div class="d-flex flex-row mb-3 gap-lg-5 gap-md-0">
                    <img src=".././../auth/img/shopping (2).webp" class="rounded-3 " style="width: 100px;" alt="img">
                    <div class="p-2">JOCKEY Solid Men Green Boxer Shorts
                        <div class="review mt-2">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                        </div>
                        <div class="p-1 d-flex gap-5">
                            ₹819
                            <div class="border border-dark d-flex align-items-center justify-content-center gap-2 rounded px-2 py-1" style="height: 25px;">
                                <button class="btn btn-outline-dark d-flex align-items-center justify-content-center p-1 border-0" style="width: 20px; height: 20px;">
                                    <i class="bi bi-dash-lg"></i>
                                </button>
                                <span class="fw-semibold">1</span>
                                <button class="btn btn-outline-dark d-flex align-items-center justify-content-center p-1 border-0" style="width: 20px; height: 20px;">
                                    <i class="bi bi-plus-lg"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="d-flex flex-row justify-content-between mb-4 w-100 gap-2 flex-wrap">
                    <a class="btn btn-secondary fw-medium flex-fill border-0 text-center" style="background-color: #e5e1e1; color:black;" href="../index.php" role="button">Save For later</a>
                    <a class="btn btn-secondary fw-medium flex-fill border-0 text-center" style="background-color: #e5e1e1; color:black;" href="../index.php" role="button">Remove</a>
                    <a class="btn btn-secondary fw-medium flex-fill border-0 text-center" style="background-color: #e5e1e1; color:black;" href="/chongkhlenggraphics/" role="button">Buy Now</a>
                </div>


                <!-- border line -->
                 <div class="border-top mb-4"></div>


                 <!-- another cart -->
                <div class="d-flex flex-row mb-3 gap-lg-5 gap-md-0 mt-2">
                    <img src=".././../auth/img/shopping (3).webp" class="rounded-3 " style="width: 100px;" alt="img">
                    <div class="p-2">JOCKEY Solid Men Green Boxer Shorts
                        <div class="review mt-2">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                        </div>
                        <div class="p-1 d-flex gap-5">
                            ₹819
                            <div class="border border-dark d-flex align-items-center justify-content-center gap-2 rounded px-2 py-1" style="height: 25px;">
                                <button class="btn btn-outline-dark d-flex align-items-center justify-content-center p-1 border-0" style="width: 20px; height: 20px;">
                                    <i class="bi bi-dash-lg"></i>
                                </button>
                                <span class="fw-semibold">1</span>
                                <button class="btn btn-outline-dark d-flex align-items-center justify-content-center p-1 border-0" style="width: 20px; height: 20px;">
                                    <i class="bi bi-plus-lg"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="d-flex flex-row justify-content-between mb-4 w-100 gap-2 flex-wrap">
                    <a class="btn btn-secondary fw-medium flex-fill border-0 text-center" style="background-color: #e5e1e1; color:black;" href="../index.php" role="button">Save For later</a>
                    <a class="btn btn-secondary fw-medium flex-fill border-0 text-center" style="background-color: #e5e1e1; color:black;" href="../index.php" role="button">Remove</a>
                    <a class="btn btn-secondary fw-medium flex-fill border-0 text-center" style="background-color: #e5e1e1; color:black;" href="/chongkhlenggraphics/" role="button">Buy Now</a>
                </div>
                   <!-- border line -->
                   <div class="border-top mb-4"></div>


            </div>
        </div>

        <!-- cart left or down (price)-->
        <div class="col-lg-3 col-md-4 col-12 mb-3">
            <div class="card p-4 h-auto bg-body-secondary border-0">
                <div class="p-2 mb-3 fw-bold border-bottom">Price details:</div>
                <div class="d-flex mb-3">
                    <div class="me-auto p-2">Price (1 item)</div>
                    <div class="p-2">₹819</div>
                </div>
                <div class="d-flex mb-3 border-bottom">
                    <div class="me-auto p-2">Delivery Charges</div>
                    <div class="p-2">free</div>
                </div>
                <div class="d-flex mb-3 fw-bold">
                    <div class="me-auto p-2">Total Amount</div>
                    <div class="p-2">₹819</div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>