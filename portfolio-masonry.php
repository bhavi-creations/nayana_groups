<?php
$path = "./images/backend/"; // Replace this with the correct path to your images

function getCategories($path)
{
    $categories = array_filter(glob($path . '*'), 'is_dir');
    $categoryNames = array_map('basename', $categories);
    return $categoryNames;
}

function getImages($category)
{
    global $path;
    $categoryPath = $path . $category;
    $images = array_diff(scandir($categoryPath), array('.', '..'));
    return $images;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>nayana</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/NayanaGroups-Logo-new-.png" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/lightgallery.css" />
    <link rel="stylesheet" href="css/woocommerce.css" />
    <link rel="stylesheet" href="css/royal-preload.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div id="royal_preloader"></div>
    <div id="page" class="site">
        <header id="site-header" class="site-header header-transparent">
            <!-- Main Header start -->
            <div class="octf-main-header is-fixed">
                <div class="octf-area-wrap">
                    <div class="container-fluid octf-mainbar-container">
                        <div class="octf-mainbar">
                            <div class="octf-mainbar-row octf-row">
                                <div class="octf-col logo-col no-padding">
                                    <div id="site-logo" class="site-logo">
                                        <a href="index.html">
                                            <img src="images/NayanaGroups-Logo-new-.png" alt="Theratio" class="">
                                        </a>
                                    </div>
                                </div>
                                <div class="octf-col menu-col no-padding">
                                    <nav id="site-navigation" class="main-navigation">
                                        <ul class="menu">
                                            <li class=" current-menu-item current-menu-ancestor">
                                                <a href="index.html">Home</a>
                                                <!-- <ul class="sub-menu">
                                                    <li class="current-menu-item"><a href="index.html">Main Home</a></li>
                                                    <li><a href="index-2.html">Interior Design</a></li>
                                                    <li><a href="index-3.html">Studio Home</a></li>
                                                    <li><a href="index-4.html">Architecture Agency</a></li>
                                                    <li><a href="index-5.html">Design Company</a></li>
                                                    <li><a href="index-6.html">Home Video</a></li>
                                                    <li><a href="home-full-screen.html">Home Full Screen</a></li>
                                                    <li><a href="one-page.html">Home One Page</a></li>
                                                    <li><a href="index-sidenav.html">Home with Side Menu</a></li>
                                                </ul> -->
                                            </li>
                                            <li class=""><a href="about-us.html">About Us</a>
                                                <!-- <ul class="sub-menu">
                                                    <li><a href="about-us.html">About Us</a></li>
                                                    <li><a href="our-services.html">Our Services</a></li>
                                                    <li><a href="our-team.html">Our Team</a></li>
                                                    <li><a href="single-team.html">Single Team</a></li>
                                                    <li><a href="our-process.html">Our Process</a></li>
                                                    <li><a href="our-studio.html">Our Stufio</a></li>
                                                    <li class="menu-item-has-children"><a href="shop.html">Shop</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="single-product.html">Single Product</a></li>
                                                            <li><a href="checkout-page.html">Checkout Page</a></li>
                                                            <li><a href="cart-page.html">Cart Page</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="typography.html">Typography</a></li>
                                                    <li><a href="elements.html">Elements</a></li>
                                                    <li><a href="faq.html">FAQS</a></li>
                                                    <li><a href="cooming-soon.html">Coming Soon</a></li>
                                                    <li><a href="404-error.html">404 Error</a></li>
                                                </ul> -->
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Services</a>
                                                <ul class="sub-menu">
                                                    <li><a href="architecture.html">Architecture</a></li>
                                                    <li><a href="interior.html">Interior</a></li>
                                                    <li><a href="project.html">Project Manager</a></li>
                                                </ul>
                                            </li>
                                            <li class=""><a href="portfolio-masonry.php">Portfolio</a>
                                                <!-- <ul class="mega-sub-menu">
                                                    <li class="row">
                                                        <ul class="col">
                                                            <li class="menu-title">Portfolio Types</li>
                                                            <li><a href="portfolio-masonry.php">Portfolio Grid Masonry</a></li>
                                                            <li><a href="portfolio-no-gap.html">Portfolio Grid No Gap</a></li>
                                                            <li><a href="portfolio-under.html">Portfolio Info Under Image</a></li>
                                                            <li><a href="portfolio-metro.html">Portfolio Metro</a></li>
                                                            <li><a href="portfolio-metro-no-gap.html">Portfolio Metro No Space</a></li>
                                                            <li><a href="portfolio-gallery.html">Portfolio Gallery</a></li>
                                                            <li><a href="portfolio-slider.html">Portfolio Slider</a></li>
                                                        </ul>
                                                        <ul class="col">
                                                            <li class="menu-title">Portfolio Layout</li>
                                                            <li><a href="portfolio-two-column.html">Two Columns</a></li>
                                                            <li><a href="portfolio-three-column.html">Three Columns</a></li>
                                                            <li><a href="portfolio-three-column-wide.html">Three Columns Wide</a></li>
                                                            <li><a href="portfolio-four-column-wide.html">Four Columns Wide</a></li>
                                                            <li><a href="portfolio-five-column-wide.html">Five Columns Wide</a></li>
                                                        </ul>
                                                        <ul class="col">
                                                            <li class="menu-title">Single Types</li>
                                                            <li><a href="portfolio-standar.html">Standard</a></li>
                                                            <li><a href="portfolio-detail-slider.html">Slider Images</a></li>
                                                            <li><a href="portfolio-left.html">Left Images</a></li>
                                                            <li><a href="portfolio-right.html">Right Images</a></li>
                                                            <li><a href="portfolio-small.html">Small Images</a></li>
                                                            <li><a href="portfolio-big.html">Big Images</a></li>
                                                        </ul>
                                                        <ul class="col">
                                                            <li class="menu-title">Hover Types</li>
                                                            <li><a href="image-scale.html">Image Scale</a></li>
                                                            <li><a href="show-overlay-info.html">Show Overlay Info</a></li>
                                                            <li><a href="hidden-overlay-info.html">Hidden Overlay Info</a></li>
                                                            <li><a href="background-solid.html">Background Solid</a></li>
                                                            <li><a href="hidden-1.html">Hidden 1</a></li>
                                                            <li><a href="hidden-2.html">Hidden 2</a></li>
                                                        </ul>
                                                    </li>
                                                </ul> -->
                                            </li>
                                            <!-- <li class="menu-item-has-children"><a href="blog.html">Blog</a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog.html">Blog Listing</a></li>
                                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                                    <li><a href="post.html">Blog Single</a></li>
                                                </ul>
                                            </li> -->
                                            <li><a href="contact.html">Contacts</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="octf-col cta-col text-right no-padding">
                                <!-- Call To Action -->
                                    <div class="octf-btn-cta">

                                        <div class="octf-cart octf-cta-header">
                                            <a class="cart-contents" href="cart-page.html" title="View your shopping cart">
                                                <!-- <i class="ot-flaticon-shopping-bag"></i>
                                                <span class="count">2</span> -->
                                            </a>
                    
                                            <div class="site-header-cart">
                                                <div class="widget woocommerce widget_shopping_cart">
                                                    <div class="widget_shopping_cart_content">
                                                        <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                                            <li class="woocommerce-mini-cart-item mini_cart_item">
                                                                <a class="remove remove_from_cart_button" href="#">×</a>                                         
                                                                <a href="single-product.html"><img src="https://via.placeholder.com/720x853.png" class="" alt="">Velvet Teal Blue</a>
                                                                <span class="quantity">1 × <span class="amount"><bdi><span>$</span>195</bdi></span></span>
                                                            </li>
                                                            <li class="woocommerce-mini-cart-item mini_cart_item">
                                                                <a class="remove remove_from_cart_button" href="#">×</a>
                                                                <a href="single-product.html"><img src="https://via.placeholder.com/720x853.png" class="" alt="">Natural Pouffe</a>
                                                                <span class="quantity">1 × <span class="amount"><bdi><span>$</span>145</bdi></span></span>
                                                            </li>
                                                        </ul>

                                                        <p class="woocommerce-mini-cart__total total">
                                                            <strong>Subtotal:</strong> <span class="amount"><bdi><span>$</span>340</bdi></span>
                                                        </p>
                                                        <p class="woocommerce-mini-cart__buttons buttons">
                                                            <a href="cart-page.html" class="button wc-forward">View cart</a>
                                                            <a href="checkout-page.html" class="button checkout wc-forward">Checkout</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>  
                                        </div>

                                        <div class="octf-search octf-cta-header">
                                            <div class="toggle_search octf-cta-icons">
                                                <!-- <i class="ot-flaticon-search"></i> -->
                                            </div>
                                            <!-- Form Search on Header -->
                                            <div class="h-search-form-field collapse">
                                                <div class="h-search-form-inner">
                                                    <form role="search" method="get" class="search-form">
                                                        <input type="search" class="search-field" placeholder="SEARCH..." value="" name="s">
                                                        <button type="submit" class="search-submit">
                                                            <!-- <i class="ot-flaticon-search"></i> -->
                                                        </button>
                                                    </form>
                                                </div>                                  
                                            </div>
                                        </div>

                                        <div class="octf-sidepanel octf-cta-header">
                                            <div class="site-overlay panel-overlay"></div>
                                            <div id="panel-btn" class="panel-btn octf-cta-icons">
                                                <i class="ot-flaticon-menu"></i>
                                            </div>
                                        </div>
                                        
                                    </div>                              
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_mobile">
                <div class="container-fluid">
                    <div class="octf-mainbar-row octf-row">
                        <div class="octf-col">
                            <div class="mlogo_wrapper clearfix">
                                <div class="mobile_logo">
                                    <a href="index.html">
                                        <img src="images/NayanaGroups-Logo-new-.jpeg" alt="Theratio">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="octf-col justify-content-end">
                            <div class="octf-search octf-cta-header">
                                <div class="toggle_search octf-cta-icons">
                                    <!-- <i class="ot-flaticon-search"></i> -->
                                </div>
                                <!-- Form Search on Header -->
                                <div class="h-search-form-field collapse">
                                    <div class="h-search-form-inner">
                                        <form role="search" method="get" class="search-form">
                                            <input type="search" class="search-field" placeholder="SEARCH..." value="" name="s">
                                            <button type="submit" class="search-submit">
                                                <!-- <i class="ot-flaticon-search"></i> -->
                                            </button>
                                        </form>
                                    </div>                                  
                                </div>
                            </div>
                            <div class="octf-menu-mobile octf-cta-header">
                                <div id="mmenu-toggle" class="mmenu-toggle">
                                    <button><i class="ot-flaticon-menu"></i></button>
                                </div>
                                <div class="site-overlay mmenu-overlay"></div>
                                <div id="mmenu-wrapper" class="mmenu-wrapper on-right">
                                    <div class="mmenu-inner">
                                        <a class="mmenu-close" href="#"><i class="ot-flaticon-right-arrow"></i></a>
                                        <div class="mobile-nav">
                                            <ul id="menu-main-menu" class="mobile_mainmenu none-style">
                                                <li class="menu-item-has-children current-menu-item current-menu-ancestor">
                                                    <a href="index.html">Home</a>
                                                  
                                                </li>
                                                <li class="menu-item-has-children"><a href="about-us.html">About Us</a>
                                                   
                                                </li>
                                                <li class="menu-item-has-children"><a href="#">Services</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="architecture.html">Architecture</a></li>
                                                        <li><a href="interior.html">Interior</a></li>
                                                        <li><a href="project.html">Project Manager</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children"><a href="portfolio-masonry.php">Portfolio</a>
                                                    <!-- <ul class="sub-menu">
                                                        <li class="menu-item-has-children"><a href="portfolio-masonry.php">Portfolio Types</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="portfolio-masonry.php">Portfolio Grid Masonry</a></li>
                                                                <li><a href="portfolio-no-gap.html">Portfolio Grid No Gap</a></li>
                                                                <li><a href="portfolio-under.html">Portfolio Info Under Image</a></li>
                                                                <li><a href="portfolio-metro.html">Portfolio Metro</a></li>
                                                                <li><a href="portfolio-metro-no-gap.html">Portfolio Metro No Space</a></li>
                                                                <li><a href="portfolio-gallery.html">Portfolio Gallery</a></li>
                                                                <li><a href="portfolio-slider.html">Portfolio Slider</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item-has-children"><a href="#">Portfolio Layout</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="portfolio-two-column.html">Two Columns</a></li>
                                                                <li><a href="portfolio-three-column.html">Three Columns</a></li>
                                                                <li><a href="portfolio-three-column-wide.html">Three Columns Wide</a></li>
                                                                <li><a href="portfolio-four-column-wide.html">Four Columns Wide</a></li>
                                                                <li><a href="portfolio-five-column-wide.html">Five Columns Wide</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item-has-children"><a href="#">Portfolio Hover Types</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="portfolio-standar.html">Standar</a></li>
                                                                <li><a href="portfolio-detail-slider.html">Slider Images</a></li>
                                                                <li><a href="portfolio-left.html">Left Image</a></li>
                                                                <li><a href="portfolio-right.html">Right Image</a></li>
                                                                <li><a href="portfolio-small.html">Small Image</a></li>
                                                                <li><a href="portfolio-big.html">Big Image</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item-has-children"><a href="image-scale.html">Image-scale</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="image-scale.html">Image Scale</a></li>
                                                                <li><a href="show-overlay-info.html">Show Overlay Info</a></li>
                                                                <li><a href="hidden-overlay-info.html">Hidden Overlay Info</a></li>
                                                                <li><a href="background-solid.html">Background Solid</a></li>
                                                                <li><a href="hidden-1.html">Hidden 1</a></li>
                                                                <li><a href="hidden-2.html">Hidden 2</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul> -->
                                                </li>
                                                <!-- <li class="menu-item-has-children"><a href="blog.html">Blog</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="blog.html">Blog Listing</a></li>
                                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                                        <li><a href="post.html">Blog Single</a></li>
                                                    </ul>
                                                </li> -->
                                                <li><a href="contact.html">Contacts</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <div id="side-panel" class="side-panel">
            <a href="#" class="side-panel-close"><i class="ot-flaticon-close-1"></i></a>
            <div class="side-panel-block">
                <div class="side-panel-wrap">
                    <div class="the-logo">
                        <a href="index-html">
                            <img src="images/NayanaGroups-Logo-new-.jpeg" alt="Theratio">
                        </a>                    
                    </div>
                    <!-- <div class="ot-heading">
                        <h2 class="main-heading">Our Gallery</h2>
                    </div>
                    <div class="image-gallery">
                        <div id="gallery-1" class="gallery galleryid-102 gallery-columns-3 gallery-size-thumbnail">
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a href="https://via.placeholder.com/1440x830.png">
                                        <img src="https://via.placeholder.com/150x150.png" class="" alt="">
                                    </a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a href="https://via.placeholder.com/1440x830.png">
                                        <img src="https://via.placeholder.com/150x150.png" class="" alt="">
                                    </a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a href="https://via.placeholder.com/1440x830.png">
                                        <img src="https://via.placeholder.com/150x150.png" class="" alt="">
                                    </a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a href="https://via.placeholder.com/1440x830.png">
                                        <img src="https://via.placeholder.com/150x150.png" class="" alt="">
                                    </a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a href="https://via.placeholder.com/1440x830.png">
                                        <img src="https://via.placeholder.com/150x150.png" class="" alt="">
                                    </a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a href="https://via.placeholder.com/1440x830.png">
                                        <img src="https://via.placeholder.com/150x150.png" class="" alt="">
                                    </a>
                                </div>
                            </figure>
                        </div>
                    </div> -->
                    <div class="ot-heading ">
                        <h2 class="main-heading">Contact Info</h2>
                    </div>
                    <div class="side-panel-cinfo">
                        <ul class="panel-cinfo">
                            <li class="panel-list-item">
                                <span class="panel-list-icon"><i class="ot-flaticon-place"></i></span>
                                <span class="panel-list-text">Jawaharlal Street, opp.venky residency Kakinada.</span>
                            </li>
                            <li class="panel-list-item">
                                <span class="panel-list-icon"><i class="ot-flaticon-mail"></i></span>
                                <span class="panel-list-text">nayanagroups2022@gmail.com</span>
                            </li>
                            <li class="panel-list-item">
                                <span class="panel-list-icon"><i class="ot-flaticon-phone-call"></i></span>
                                <span class="panel-list-text">+91 96888 87888</span>
                            </li>
                        </ul>
                    </div>
                    <div class="side-panel-social">
                        <ul>
                            <!-- <li><a href="http://twitter.com" target="_self"><i class="fab fa-twitter"></i></a></li> -->
                            <li><a href="https://www.facebook.com/profile.php?id=100089262974955" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <!-- <li><a href="http://linkedin.com" target="_self"><i class="fab fa-linkedin-in"></i></a></li> -->
                            <li><a href="https://www.instagram.com/nayana_groups/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="content" class="site-content">
            <div class="page-header dtable text-center header-transparent pheader-portfolio">
                <div class="dcell">
                    <div class="container">
                        <h1 class="page-title">Portfolio </h1>
                        <ul id="breadcrumbs" class="breadcrumbs none-style">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Portfolio Grid Masonry</li>
                        </ul>    
                    </div>
                </div>
            </div>
        </div>
        <section class="our-portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center theratio-align-center">
                        <div class="ot-heading is-dots">
                            <span>[ our portfolio ]</span>
                            <h2 class="main-heading">Some of Our Works<br>  and Case Studies for Clients</h2>
                        </div>
                        <div class="space-40"></div>


                        <div class="project-filter-wrapper">
                            <ul class="project_filters">
                                <li><a href="#" data-filter="*" class="selected btn-details">All<span class="filter-count"></span></a></li>
                                <?php
                                $categories = getCategories($path);
                                foreach ($categories as $category) {
                                    echo '<li><a class="btn-details" href="#" data-filter=".' . $category . '">' . $category . '<span class="filter-count"></span></a></li>';
                                }
                                ?>
                            </ul>

                            <div class="projects-grid pf_3_cols style-1 img-scale w-auto" id="lightgallery">
                                <div class="grid-sizer"></div>
                                <?php
                                foreach ($categories as $category) {
                                    $images = getImages($category);
                                    foreach ($images as $image) {
                                        echo '<div class="project-item ' . $category . '">
                                                <div class="projects-box">
                                                    <div class="projects-thumbnail">
                                                        <a class="gallery-item" href="' . $path . $category . '/' . $image . '">
                                                            <img class="img-responsive" src="' . $path . $category . '/' . $image . '" alt="' . $category . '">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>';
                                    }
                                }
                                ?>
                            </div>

                        </div>


                        
                    </div>
                </div>
            </div>
        </section>

     
    <section>
            <a href="https://api.whatsapp.com/send?phone=96888878888" class="float" target="_blank">
                <i class="fa-brands fa-whatsapp shadow" style="color: #ffffff; background-color: #23af25; padding: 10px; border-radius: 50px; font-size: 30px; width: 50px; height: 50px;"></i> 
            </a>
        </section>   

    <footer id="site-footer" class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4 mb-xl-0">
                    <div class="widget-footer">
                        <img src="images/NayanaGroups-Logo-new-.png" class="footer-logo" alt="">
                        <p>We provides a full range of interior design, architectural design.</p>
                        <div class="footer-social list-social">
                            <ul>
                                <!-- <li><a href="http://facebook.com" target="_self"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="http://twitter.com" target="_self"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="http://linkedin.com" target="_self"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="http://instagram" target="_self"><i class="fab fa-instagram"></i></a></li> -->
                                <li><a href="https://www.facebook.com/profile.php?id=100089262974955" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <!-- <li><a href="http://linkedin.com" target="_self"><i class="fab fa-linkedin-in"></i></a></li> -->
                                <li><a href="https://www.instagram.com/nayana_groups/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4 mb-xl-0">
                    <div class="widget-footer">
                        <h6>Contacts</h6>
                        <ul class="footer-list">
                            <li class="footer-list-item">
                                <span class="list-item-icon"><i class="ot-flaticon-place"></i></span>
                                <span class="list-item-text">Jawaharlal Street, opp.venky residency Kakinada.</span>
                            </li>
                            <li class="footer-list-item">
                                <span class="list-item-icon"><i class="ot-flaticon-mail"></i></span>
                                <span class="list-item-text">nayanagroups2022@gmail.com</span>
                            </li>
                            <li class="footer-list-item">
                                <span class="list-item-icon"><i class="ot-flaticon-phone-call"></i></span>
                                <span class="list-item-text">+91 96888 87888</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4 mb-md-0">
                    <div class="widget-footer widget-contact">
                        <h6>Services</h6>
                        <ul>
                            <li><a href="architecture.html">Architecture</a></li>
                            <li><a href="interior.html">interior</a></li>
                            <li><a href="project.html">Project Management</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="widget-footer footer-widget-subcribe">
                        <h6>Subscribe</h6>
                        <form class="mc4wp-form" method="post">
                            <div class="mc4wp-form-fields">
                                <div class="subscribe-inner-form">
                                    <input type="email" name="EMAIL" placeholder="YOUR EMAIL" required="">
                                    <button type="submit" class="subscribe-btn-icon"><i class="ot-flaticon-send"></i></button>
                                </div>
                            </div>
                        </form>
                        <p>Follow our newsletter to stay updated about agency.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- #site-footer -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 mb-4 mb-lg-0 text-center">
                    <p>Copyright © 2023 Nayana Groups | Designed by <a class="text-light" target="_blank" href="https://bhavicreations.com">Bhavi Creations</a></p>
                </div>
                <!-- <div class="col-lg-5 col-md-12 align-self-center">
                    <ul class="icon-list-items inline-items justify-content-lg-end">
                        <li class="icon-list-item inline-item">
                            <a href="#"><span class="icon-list-text">Terms of use</span></a>
                        </li>
                        <li class="icon-list-item inline-item">
                            <a href="#"><span class="icon-list-text">Privacy Environmental Policy</span></a>
                        </li>
                    </ul>
                </div> -->
            </div>
        </div>
    </div>
</div><!-- #page -->
<a id="back-to-top" href="#" class="show"><i class="ot-flaticon-left-arrow"></i></a>
        <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/mousewheel.min.js"></script>
    <script src="js/lightgallery-all.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/easypiechart.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/royal_preloader.min.js"></script>
    <script>
        window.jQuery = window.$ = jQuery;  
        (function($) { "use strict";
            //Preloader
            Royal_Preloader.config({
                mode           :   'progress',
                background     :   '#1a1a1a',
            });
        })(jQuery);
    </script>  
    <script src="https://cdn.jsdelivr.net/npm/lightgallery.js/dist/js/lightgallery.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            lightGallery(document.getElementById('lightgallery'), {
                selector: '.gallery-item',
                mode: 'lg-slide',
                download: false // Customize this based on your preference
                // Other options can be configured based on LightGallery documentation
            });
        });
    </script>
</body>
</html>