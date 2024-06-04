<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>loja</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/Roboto.css">
    <link rel="stylesheet" href="/assets/css/Articles-Cards-images.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="/assets/css/Ludens---Dark-Mode-Admin-Dashboard.css">
    <link rel="stylesheet" href="/assets/css/Navbar-Centered-Brand-Dark-icons.css">
    <link rel="stylesheet" href="/assets/css/navbar-shoppingcart-ecommerce.css">
    <link rel="stylesheet" href="/assets/css/shopping-ecommerce-products.css">
    <link rel="stylesheet" href="/assets/css/Tamplate-SB-Admin-on-BSS.css">
</head>

<body>
    <!-- Start: Navbar Centered Brand (Dark) -->
    <nav class="navbar navbar-expand-md bg-dark py-3" data-bs-theme="dark">
        <div class="container"><a class="btn btn-primary text-center border-0 d-lg-flex justify-content-center align-items-center align-items-lg-center" role="button" style="margin-left: 2px;" href="products.php">Livros</a><a class="navbar-brand d-flex align-items-center" href="#"><span></span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse flex-grow-0 order-md-first" id="navcol-2">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Livraria Camões</a></li>
                </ul>
                <div class="d-md-none my-2"><button class="btn btn-light me-2" type="button">Button</button><button class="btn btn-primary" type="button">Button</button></div>
            </div>
            <div class="d-none d-md-block"><a class="btn btn-light me-2" role="button" href="cart.php">Carrinho</a><a class="btn btn-primary" role="button" href="login.php">Login</a></div>
        </div>
    </nav><!-- End: Navbar Centered Brand (Dark) -->
    <!-- Start: shopping-ecommerce-products -->
    <div class="container mtr-5 mb-2">
        <div class="row">
            <div class="col-md-2 col-12 border">
                <p class="lead text-center mb-0">Max Price:</p><input type="number" class="form-control text-center" value="200"><input class="form-range w-100" type="range" min="0" max="200">
                <hr>
                <p class="lead text-center mb-0">Sort By:</p>
                <hr>
                <p class="lead text-center mb-0">Category:</p><select class="form-control" name="gender">
                    <option value="all" selected="">All</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="unisex">Unisex</option>
                </select>
                <hr>
            </div>
            <div class="col-md-10 col-12">
                <!-- Start: shopping-grid -->
                <div class="shopping-grid">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="product-grid7">
                                    <div class="product-image7"><a href="#"><img src="img-1.jpg" class="pic-1"><img src="img-2.jpg" class="pic-2"></a>
                                        <ul class="social">
                                            <li><a class="fa fa-search"></a></li>
                                            <li><a class="fa fa-shopping-bag"></a></li>
                                            <li><a class="fa fa-shopping-cart"></a></li>
                                        </ul><span class="product-new-label">New</span>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="title"><a href="#">Men's Blazer</a></h3>
                                        <ul class="rating">
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                        </ul>
                                        <div class="price"><span>$15.00</span><span>$20.00</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="product-grid7">
                                    <div class="product-image7"><a href="#"><img src="img-3.jpg" class="pic-1"><img src="img-4.jpg" class="pic-2"></a>
                                        <ul class="social">
                                            <li><a class="fa fa-search"></a></li>
                                            <li><a class="fa fa-shopping-bag"></a></li>
                                            <li><a class="fa fa-shopping-cart"></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="title"><a href="#">Women's White Shirt</a></h3>
                                        <ul class="rating">
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                        </ul>
                                        <div class="price"><span>$15.00</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="product-grid7">
                                    <div class="product-image7"><a href="#"><img src="img-5.jpg" class="pic-1"><img src="img-6.jpg" class="pic-2"></a>
                                        <ul class="social">
                                            <li><a class="fa fa-search"></a></li>
                                            <li><a class="fa fa-shopping-bag"></a></li>
                                            <li><a class="fa fa-shopping-cart"></a></li>
                                        </ul><span class="product-new-label">New</span>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="title"><a href="#">Men's Blazer</a></h3>
                                        <ul class="rating">
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                        </ul>
                                        <div class="price"><span>$15.00</span><span></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="product-grid7">
                                    <div class="product-image7"><a href="#"><img src="img-7.jpg" class="pic-1"><img src="img-8.jpg" class="pic-2"></a>
                                        <ul class="social">
                                            <li><a class="fa fa-search"></a></li>
                                            <li><a class="fa fa-shopping-bag"></a></li>
                                            <li><a class="fa fa-shopping-cart"></a></li>
                                        </ul><span class="product-new-label">New</span>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="title"><a href="#">Men's Blazer</a></h3>
                                        <ul class="rating">
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                        </ul>
                                        <div class="price"><span>$15.00</span><span>$20.00</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End: shopping-grid -->
            </div>
        </div>
    </div><!-- End: shopping-ecommerce-products -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-filter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="/assets/js/Ludens---Dark-Mode-Admin-Dashboard-Ludens---1-Index-Table-with-Search--Sort-Filters-v20-1.js"></script>
    <script src="/assets/js/Ludens---Dark-Mode-Admin-Dashboard-Ludens---1-Index-Table-with-Search--Sort-Filters-v20.js"></script>
    <script src="/assets/js/Ludens---Dark-Mode-Admin-Dashboard-Ludens---Sleek-Image-Input-with-Preview.js"></script>
    <script src="/assets/js/Ludens---Dark-Mode-Admin-Dashboard-main.js"></script>
    <script src="/assets/js/Ludens---Dark-Mode-Admin-Dashboard-modalDelete.js"></script>
    <script src="/assets/js/Ludens---Dark-Mode-Admin-Dashboard-theme.js"></script>
</body>

</html>