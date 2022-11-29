<!-- Navbar Start -->
<div class="container-fluid bg-dark mb-30">
    <div class="row px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categories</h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                <div class="navbar-nav w-100">
                    <div class="nav-item dropdown dropright">
                         
                    </div>
                    <a href="" class="nav-item nav-link">Lego Duplo</a>
                    <a href="" class="nav-item nav-link">Lego Juniors</a>
                    <a href="" class="nav-item nav-link">Lego Classic</a>
                    <a href="" class="nav-item nav-link">Lego City</a>
                    <a href="" class="nav-item nav-link">Lego Technic</a>
                    <a href="" class="nav-item nav-link">Lego Mindstorms</a>
                    
                </div>
            </nav>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                <a href="<?php echo e(route('clients.index')); ?>" class="text-decoration-none d-block d-lg-none">
                    <span class="h1 text-uppercase text-dark bg-light px-2">HDL</span>
                    <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">LEGO</span>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="<?php echo e(route('clients.index')); ?>" class="nav-item nav-link active">Home</a>
                        <a href="<?php echo e(route('clients.shop')); ?>" class="nav-item nav-link">Shop</a>
                        <a href="<?php echo e(route('clients.shopdetail')); ?>" class="nav-item nav-link">Shop Detail</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down mt-1"></i></a>
                            <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                <a href="<?php echo e(route('clients.shoppingcart')); ?>" class="dropdown-item">Shopping Cart</a>
                                <a href="<?php echo e(route('clients.checkout')); ?>" class="dropdown-item">Checkout</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                    <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                        <a href="" class="btn px-0">
                            <i class="fas fa-heart text-primary"></i>
                            <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                        </a>
                        <a href="" class="btn px-0 ml-3">
                            <i class="fas fa-shopping-cart text-primary"></i>
                            <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Navbar End --><?php /**PATH C:\xampp\htdocs\HDL-LEGO_Project_Duc\resources\views/Font_end/layout/navbar.blade.php ENDPATH**/ ?>