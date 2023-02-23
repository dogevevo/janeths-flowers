<?php @session_start();?>
<!DOCTYPE html>
<?php include 'php/text.php';?>
<html lang="en">

<head>
<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/> 
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="<?php echo $ExDescription;?>" />
<meta name="author" content="MAVEN" />

<!-- Page Title -->
<title><?php if($page_name=='index.php'){echo "$Company";}
elseif ($page_name=='about.php') {echo "$Company | About";}
elseif ($page_name=='services.php') {echo "$Company | Services";}
elseif ($page_name=='gallery.php') {echo "$Company | Gallery";}
elseif ($page_name=='testimonials.php') {echo "$Company | Testimonials";}
elseif ($page_name=='thank-you.php') {echo "$Company";}
elseif ($page_name=='contact.php') {echo "$Company | Contact";}?>
</title>    
<link rel="stylesheet" href="css/css_minified.css">
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">


<!-- links css -->

<!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="css/font-icons.css">
    <!-- plugins css -->
    <link rel="stylesheet" href="css/plugins.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">

</head>


    <!-- All JS Plugins -->
    <script src="js/plugins.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>
  



<body>
<?php $_SESSION['token'] = md5(microtime()); ?>

    <script type="text/javascript">
        (function() {
            var options = {
                facebook: "00201220", // Facebook page ID
                whatsapp: "<?php echo $PhoneName.$Phone;?>", // WhatsApp number
                call_to_action: "Message us", // Call to action
                button_color: "#c7102a", // Color of button
                position: "left", // Position may be 'right' or 'left'
                order: "facebook,whatsapp", // Order of buttons
            };
            var proto = document.location.protocol,
                host = "getbutton.io",
                url = proto + "//static." + host;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url + '/widget-send-button/js/init.js';
            s.onload = function() {
                WhWidgetSendButton.init(host, proto, options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();
    </script>
    



<!-- Body main wrapper start -->
<div class="body-wrapper">

    <!-- HEADER AREA START (header-3) -->
    <header class="ltn__header-area ltn__header-3 section-bg-6">        
        <!-- ltn__header-middle-area start -->
        <div class="ltn__header-middle-area">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="site-logo">
                            <a href="index.php"><img class="logo-header" src="img/logo-r.png" alt="Logo"></a>
                        </div>
                    </div>
                    <div class="col header-contact-serarch-column d-none d-xl-block">
                        <div class="header-contact-search">


                            <!-- header-feature-item -->
                            <div class="header-feature-item">
                                <div class="header-feature-icon">
                                    <i class="icon-phone"></i>
                                </div>
                                <div class="header-feature-info">
                                    <h6>Phone</h6>
                                    <p><a href="tel:0123456789"><?php echo $Phone?></a></p>
                                </div>
                            </div>
                            
                           
                            <!-- header-feature-item -->
                            <div class="header-feature-item">
                                <div class="header-feature-icon">
                                    <i class="fa-regular fa-location-dot"></i>
                                </div>
                                <div class="header-feature-info">
                                    <h6>direccion</h6>
                                    <p><a href="tel:0123456789"><?php echo $Address?></a></p>
                                </div>
                            </div>


                            <div class="header-feature-item">
                                <div class="header-feature-icon">
                                    <i class="fa-regular fa-location-dot"></i>
                                </div>
                                <div class="header-feature-info">
                                    <h6>Correo</h6>
                                    <p><a href="tel:0123456789"><?php echo $Mail?></a></p>
                                </div>
                            </div>
                            <!-- header-search-2 -->

                            <!-- CORREO  -->

                            <!-- <div class="header-search-2">
                                <form id="#123" method="get"  action="#">
                                    <input type="text" name="search" value="" placeholder="Search here..."/>
                                    <button type="submit">
                                        <span><i class="icon-magnifier"></i></span>
                                    </button>
                                </form>
                            </div> -->
                        </div>
                    </div>
                    <div class="col">
                        <div class="ltn__header-options">
                            <ul>
                                <li class="d-none">
                                    <!-- ltn__currency-menu -->
                                    
                                </li>
                                <li class="d-none">
                                    <!-- header-search-1 -->
                                    
                                </li>
                                <li class="d-none"> 
                                    <!-- user-menu -->
                                    <div class="ltn__drop-menu user-menu">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="icon-user"></i></a>
                                                <ul>
                                                    <li><a href="login.html">Sign in</a></li>
                                                    <li><a href="register.html">Register</a></li>
                                                    <li><a href="account.html">My Account</a></li>
                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                
                                <li>      
                                    <!-- Mobile Menu Button -->
                                    <div class="mobile-menu-toggle d-lg-none">
                                        <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                                            <svg viewBox="0 0 800 600">
                                                <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                                <path d="M300,320 L540,320" id="middle"></path>
                                                <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                            </svg>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__header-middle-area end -->
        
        <!-- header-bottom-area start -->
        <div class="header-bottom-area ltn__border-top ltn__header-sticky  ltn__sticky-bg-white ltn__primary-bg---- menu-color-white---- d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col header-menu-column justify-content-center">
                        <div class="sticky-logo">
                            <div class="site-logo">
                                
                            </div>
                        </div>
                        <div class="header-menu header-menu-2">
                            <nav>
                                <div class="ltn__main-menu">
                                    <ul>
                                        <li class="menu-icon"><a href="index.php">Home</a>
                                           
                                        </li>
                                        <li class="menu-icon"><a href="about.php">about</a>
                                            
                                        </li>
                                        
                                        <li class="menu-icon"><a href="gallery.php">Gallery</a>
                                            
                                        </li>
                                        
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-bottom-area end -->
    </header>
    <!-- HEADER AREA END -->

    <!-- Utilize Cart Menu Start -->
    

    <!-- Utilize Cart Menu End -->

    <!-- Utilize Mobile Menu Start -->
    <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu-head">
                <div class="site-logo">
                    <a href="index.php"><img class="logo-movil" src="img/logo-r.png" alt="Logo"></a>
                </div>
                <button class="ltn__utilize-close">×</button>
            </div>
            <div class="ltn__utilize-menu-search-form">
                <form action="#">
                    <input type="text" placeholder="Search...">
                    <button><i class="icon-magnifier"></i></button>
                </form>
            </div>
            <div class="ltn__utilize-menu">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>

                    <li>
                        <a href="about.php">About Us</a>
                    </li>

                    <li>
                        <a href="Gallery.php">Gallery</a> 
                    </li>

                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            

            <div class="ltn__social-media-2">
                <ul>
                    <li><a href="#" title="Facebook"><i class="icon-social-facebook"></i></a></li>
                    <li><a href="#" title="Twitter"><i class="icon-social-twitter"></i></a></li>
                    <li><a href="#" title="Pinterest"><i class="icon-social-pinterest"></i></a></li>
                    <li><a href="#" title="Instagram"><i class="icon-social-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Utilize Mobile Menu End -->