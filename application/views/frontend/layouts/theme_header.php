<?php
  $is_login = $this->session->userdata('auth_is_login'); 
  $role = $this->session->userdata('auth_id_role'); 
?>

<!-- LOADER -->
<!-- <div class="preloader">
    <div class="lds-ellipsis">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div> -->
<!-- END LOADER -->

<!-- Home Popup Section -->
<!-- <div class="modal fade subscribe_popup" id="onload-popup" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="ion-ios-close-empty"></i></span>
                </button>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="popup_content">
                        <a href="#"><img src="<?= base_url('assets/images/promo.png') ?>" alt="logo" /></a>
                        </div>
                    </div>
                </div>
            </div>
    	</div>
    </div>
</div> -->
<!-- End Screen Load Popup Section --> 



<!-- START HEADER -->
<header class="header_wrap fixed-top dd_dark_skin transparent_header">
    <div class="light_skin main_menu_uppercase">
    	<div class="container">
            <nav class="navbar navbar-expand-lg"> 
                <a class="navbar-brand" href="index.html">
                    <img class="logo_light" src="<?= base_url('assets/images/logo---.png') ?>" alt="logo" />
                    <img class="logo_dark" src="<?= base_url('assets/images/logo--.png') ?>" alt="logo" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false"> 
                    <span class="ion-android-menu"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li><a class="nav-link nav_item" href="Home">Home</a></li> 
                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Kami</a>
                            <div class="dropdown-menu">
                                <ul> 
                                    <li><a class="dropdown-item nav-link nav_item" href="<?= site_url('/Tentang') ?>">About Us</a></li> 
                                    <li><a class="dropdown-item nav-link nav_item" href="<?= site_url('/Kontak') ?>">Contact Us</a></li> 
                                    <li><a class="dropdown-item nav-link nav_item" href="<?= site_url('/Costumer') ?>">Customer Us</a></li> 
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Jasa</a>
                            <div class="dropdown-menu">
                                <ul> 
                                    <li><a class="dropdown-item nav-link nav_item" href="<?= site_url('/Berlangganan') ?>">Berlangganan</a></li> 
                                    <li><a class="dropdown-item nav-link nav_item" href="<?= site_url('/Gowaste') ?>">GO-WASTE</a></li> 
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Produk</a>
                            <div class="dropdown-menu">
                                <ul> 
                                    <li><a class="dropdown-item nav-link nav_item" href="<?= site_url('/Pendampingan') ?>">Pendampingan Bank Sampah dan Kader Lingkungan</a></li> 
                                    <li><a class="dropdown-item nav-link nav_item" href="<?= site_url('/Mentoring') ?>">Menthoring Siswa Sekolah</a></li> 
                                    <li><a class="dropdown-item nav-link nav_item" href="<?= site_url('/Pengolahan') ?>">Pengolahan Sampah X TPST</a></li> 
                                </ul>
                            </div>
                        </li>
                        <li><a class="nav-link nav_item" href="contact.html">Artikel</a></li> 
                        <li><a class="nav-link nav_item" href="contact.html">Berita</a></li> 
                    </ul>
                </div>
                <ul class="navbar-nav attr-nav align-items-center">
                    <li><a href="javascript:void(0);" class="nav-link search_trigger"><i class="linearicons-magnifier"></i></a>
                        <div class="search_wrap">
                            <span class="close-search"><i class="ion-ios-close-empty"></i></span>
                            <form>
                                <input type="text" placeholder="Search" class="form-control" id="search_input">
                                <button type="submit" class="search_icon"><i class="ion-ios-search-strong"></i></button>
                            </form>
                        </div><div class="search_overlay"></div><div class="search_overlay"></div>
                    </li>
                    <li class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="#" data-toggle="dropdown"><i class="linearicons-cart"></i><span class="cart_count">2</span></a>
                        <div class="cart_box dropdown-menu dropdown-menu-right">
                            <ul class="cart_list">
                                <li>
                                    <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                    <a href="#"><img src="assets/images/cart_thamb1.jpg" alt="cart_thumb1">Variable product 001</a>
                                    <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">$</span></span>78.00</span>
                                </li>
                                <li>
                                    <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                    <a href="#"><img src="assets/images/cart_thamb2.jpg" alt="cart_thumb2">Ornare sed consequat</a>
                                    <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">$</span></span>81.00</span>
                                </li>
                            </ul>
                            <div class="cart_footer">
                                <p class="cart_total"><strong>Subtotal:</strong> <span class="cart_price"> <span class="price_symbole">$</span></span>159.00</p>
                                <p class="cart_buttons"><a href="#" class="btn btn-fill-line view-cart">View Cart</a><a href="#" class="btn btn-fill-out checkout">Checkout</a></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- END HEADER -->

<script>
// $(document).on('submit', '#form-pencarian', function(event) {
//     event.preventDefault();
//     var q = $('#keyword_produk').val();

// });
</script>