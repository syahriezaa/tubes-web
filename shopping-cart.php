<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="EduThrift">
    <meta name="keywords" content="EduThrift, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EduThrift</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/67a8ec91d9.js" crossorigin="anonymous"></script>

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        EduThrift@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        +62 675847397
                    </div>
                </div>
                <div class="ht-right">
                    <a href="login.php" class="login-panel"><i class="fa fa-user"></i>Login</a>
                    <div class="lan-selector">
                        <select class="language_drop" name="countries" id="countries" style="width:300px;">
                            <option data-title="Indonesia">Indonesia</option>
                            <option data-title="English">English</option>
                            
                        </select>
                    </div>
                    <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-instagram"></i></a>
                        <a href="#"><i class="ti-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="./index.php">
                                <a class="navbar-brand font-weight-bold">EDUTHRIFT</a>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <button type="button" class="category-btn">All Categories</button>
                            <div class="input-group">
                                <input type="text" placeholder="Apa yang anda cari?">
                                <button type="button"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                            <li class="heart-icon">
                                <a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span>1</span>
                                </a>
                            </li>
                            <li class="cart-icon">
                                <a href="#">
                                    <i class="icon_bag_alt"></i>
                                    <span>3</span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="si-pic"><img src="foto/buku2.jpg" alt="" style="width:70px"></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>50.000 x 1</p>
                                                            <h6>Buku Tulis</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="si-pic"><img src="foto/pastel.jpg" alt="" style="width:70px"></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>55.000 x 1</p>
                                                            <h6>Stationary Set</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>total:</span>
                                        <h5>105.000</h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="#" class="primary-btn view-card">VIEW CARD</a>
                                        <a href="shopping-cart.php" class="primary-btn checkout-btn">CHECK OUT</a>
                                    </div>
                                </div>
                            </li>
                            <li class="cart-price">Rp.105.000</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>Kategori Produk</span>
                        <ul class="depart-hover">
                            <li class="active"><a href="#">Alat Tulis</a></li>
                            <li><a href="#">Mainan Edukatif</a></li>
                            <li><a href="#">Buku</a></li>
                            <li><a href="#">Seragam Sekolah</a></li>
                            <li><a href="#">Peralatan Sekolah</a></li>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="./index.php">Home</a></li>
                        <li><a href="./shop.php">Shop</a></li>
                        <li><a href="#">Koleksi</a>
                            <ul class="dropdown">
                                <li><a href="mainan.php">Mainan</a></li>
                                <li><a href="seragam.php">Seragam</a></li>
                                <li><a href="alat.php">Alat tulis</a></li>
                            </ul>
                        </li>
                        <li><a href="./blog-details.php">About</a></li>
                        <li><a href="./contact.php">Contact</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="./shopping-cart.php">Keranjang</a></li>
                                <li><a href="./check-out.php">Checkout</a></li>
                                <li><a href="./faq.php">Faq</a></li>
                                <li><a href="./register.php">Register</a></li>
                                <li><a href="./login.php">Login</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="./home.php"><i class="fa fa-home"></i> Home</a>
                        <a href="./shop.php">Shop</a>
                        <span>Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Gambar</th>
                                    <th class="p-name">Nama Produk</th>
                                    <th>Harga</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th><i class="ti-close"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="cart-pic first-row"><img src="foto/buku2.jpg" style="width: 200px" alt=""></td>
                                    <td class="cart-title first-row">
                                        <h5>Buku Tulis</h5>
                                    </td>
                                    <td class="p-price first-row">Rp.15.000</td>
                                    <td class="qua-col first-row">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="total-price first-row">Rp.15.000</td>
                                    <td class="close-td first-row"><i class="ti-close"></i></td>
                                </tr>
                                <tr>
                                    <td class="cart-pic first-row"><img src="foto/pastel.jpg" style="width: 200px" alt=""></td>
                                    <td class="cart-title">
                                        <h5>Stationary Set</h5>
                                    </td>
                                    <td class="p-price">Rp.55.000</td>
                                    <td class="qua-col">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="total-price">Rp.55.000</td>
                                    <td class="close-td"><i class="ti-close"></i></td>
                                </tr>
                                <tr>
                                    <td class="cart-pic first-row"><img src="foto/download.jpg" style="width: 200px" alt=""></td>
                                    <td class="cart-title">
                                        <h5>Seragam SMP</h5>
                                    </td>
                                    <td class="p-price">Rp.30.000</td>
                                    <td class="qua-col">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="total-price">Rp.30.000</td>
                                    <td class="close-td"><i class="ti-close"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="cart-buttons">
                                <a href="#" class="primary-btn continue-shop">Continue shopping</a>
                                <a href="#" class="primary-btn up-cart">Update cart</a>
                            </div>
                            <div class="discount-coupon">
                                <h6>Kode Promo</h6>
                                <form action="#" class="coupon-form">
                                    <input type="text" placeholder="Enter your codes">
                                    <button type="submit" class="site-btn coupon-btn">Apply</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                <ul>
                                    <li class="subtotal">Subtotal <span>Rp.100.000</span></li>
                                    <li class="cart-total">Total <span>Rp.100.000</span></li>
                                </ul>
                                <a href="#" class="proceed-btn">PROCEED TO CHECK OUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

    <!-- Footer -->
<footer class="bg-dark text-white p-5">
  <div class="row">
    <div class="col-md-3">
      <h5>LAYANAN PELANGGAN</h5>
      <ul>
        <li>Pusat Bantuan</li>
        <li>Cara Pembelian</li>
        <li>Pengiriman</li>
        <li>Cara Pengembalian</li>
      </ul>
    </div>
    <div class="col-md-3">
      <h5>TENTANG KAMI</h5>
      <p>Kami merupakan lapak penjualan online
      Barang bekas, yang dimana kamu dapat
      Menjual barang edukatif kamu di lapak kami</p>
    </div>
    <div class="col-md-3">
      <h5>MITRA KERJA SAMA</h5>
      <ul>
        <li>JNE</li>
        <li>J&T</li>
        <li>PT. POS INDONESIA</li>
        <li>TIKI</li>
      </ul>
    </div>
    <div class="col-md-3">
      <h5>Hubungi Kami</h5>
      <ul>
        <li>0822-456-432</li>
        <li>Eduthrift@gmail.com</li>
      </ul>
    </div>
</footer>

<div class="copyright text-center text-weight-bold col-md-12 p-2" style="background-color:black">
  <p>Developed by eduthrift copyright<i class="far fa-copyright"></i>2020</p>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/jquery.dd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>