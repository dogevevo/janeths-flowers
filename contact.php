<?php include('php/secction/header.php') ?>

<div class="ltn__utilize-overlay"></div>

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner text-center">
                        <h1 class="ltn__page-title">Contact Us</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- CONTACT ADDRESS AREA START -->
    <div class="ltn__contact-address-area mb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="ltn__contact-address-item ltn__contact-address-item-4 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <i class="icon-location-pin"></i>
                        </div>
                        <h3>Address</h3>
                        <p><?php echo $Address ?> <br>
                            </p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="ltn__contact-address-item ltn__contact-address-item-4 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <i class="icon-phone"></i>
                        </div>
                        <h3>Phone Number</h3>
                        <p><?php echo $Phone?><br>
                            </p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="ltn__contact-address-item ltn__contact-address-item-4 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <i class="icon-envelope"></i>
                        </div>
                        <h3>Email & Web</h3>
                        <p><?php echo $Domain ?><br>
                            </p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="ltn__contact-address-item ltn__contact-address-item-4 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <i class="icon-speedometer"></i>
                        </div>
                        <h3>Opening Hours</h3>
                        <p><?php  echo $Schedule?><br>
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTACT ADDRESS AREA END -->

    <!-- GOOGLE MAP AREA START -->
    <div class="ltn_google-map-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2433.7354720194835!2d-97.69643499988803!3d30.38442018154478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8644c95705de03c3%3A0x1840d32c58ff379f!2sRenel%20Dr%2C%20Austin%2C%20TX%2078758%2C%20EE.%20UU.!5e0!3m2!1ses!2sni!4v1677100178663!5m2!1ses!2sni" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- GOOGLE MAP AREA END -->
    
    <!-- CONTACT MESSAGE AREA START -->
    <div class="ltn__contact-message-area mt-100 mb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__form-box contact-form-box box-shadow--- white-bg---">
                        <h3 class="text-center mb-50">Need Our Help! Please Send an Email.</h3>
                        <form id="contact-form" action="mail.php" method="post">
                            <div class="row">
                                <div class="col-md-5">
                                    <input type="text" name="name" placeholder="Name:">
                                    <input type="email" name="email" placeholder="Email:">
                                    <input type="text" name="phone" placeholder="Phone Number:">
                                    <input type="text" name="subject" placeholder="Your Title:">
                                </div>
                                <div class="col-md-7">
                                    <textarea name="message" placeholder="Enter message"></textarea>
                                </div>
                                <div class="col-lg-12">
                                    <div class="btn-wrapper mt-0">
                                        <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Send Message</button>
                                    </div>
                                    <p class="form-messege mb-0 mt-20"></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTACT MESSAGE AREA END -->


<?php include('php/secction/footer.php') ?>
