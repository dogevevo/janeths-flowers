<?php include('php/secction/header.php') ?>



<div class="ltn__utilize-overlay"></div>

<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner text-center">
                    <h1 class="ltn__page-title">Gallery</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Portfolio</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- Gallery area start -->
<div class="ltn__gallery-area mb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__gallery-menu ltn__gallery-menu-2">
                    <div class="ltn__gallery-filter-menu text-uppercase mb-40">
                        <button data-bs-filter="*" class="active">all</button>
                        <button data-bs-filter=".filter_category_1">White</button>
                        <button data-bs-filter=".filter_category_2">Red</button>
                        <button data-bs-filter=".filter_category_3">Yellow</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Wrapper Start -->
        <!-- (ltn__gallery-info-hide) Class for 'ltn__gallery-item-info' not showing -->
        <div class="ltn__gallery-active row ltn__gallery-style-2 ltn__gallery-info-hide---">
            <div class="ltn__gallery-sizer col-1"></div>
            <?php for ($b=1; $b <=20; $b++) {?>
            <div class="ltn__gallery-item filter_category_3 col-lg-3 col-sm-6 col-12">
                <div class="ltn__gallery-item-inner">
                    <div class="ltn__gallery-item-img">
                        <a href="img/gall/<?php echo $b?>.jpg" data-rel="lightcase:myCollection">
                            <img src="img/gall/<?php echo $b?>.jpg" alt="Image">
                            <span class="ltn__gallery-action-icon">
                                <i class="fas fa-search"></i>
                            </span>
                        </a>
                    </div>
                    <div class="ltn__gallery-item-info">
                        <h4>Janeths Flowers</h4>
                        <p>Flower Arrangements</p>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>

        <div id="ltn__inline_description_1" style="display: none;">
            <h4 class="first">This content comes from a hidden element on that page</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis mi eu elit tempor facilisis id et neque. Nulla sit amet sem sapien. Vestibulum imperdiet porta ante ac ornare. Nulla et lorem eu nibh adipiscing ultricies nec at lacus. Cras laoreet ultricies sem, at blandit mi eleifend aliquam. Nunc enim ipsum, vehicula non pretium varius, cursus ac tortor.</p>
            <p>Vivamus fringilla congue laoreet. Quisque ultrices sodales orci, quis rhoncus justo auctor in. Phasellus dui eros, bibendum eu feugiat ornare, faucibus eu mi. Nunc aliquet tempus sem, id aliquam diam varius ac. Maecenas nisl nunc, molestie vitae eleifend vel.</p>
        </div>

        <div class="btn-wrapper text-center">
            <a href="#" class="btn btn-transparent btn-effect-3 btn-border">LOAD MORE +</a>
        </div>

        <!-- pagination start -->
        <!-- 
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__pagination text-center margin-top-50">
                    <ul>
                        <li class="arrow-icon"><a href="#"> &leftarrow; </a></li>
                        <li class="active"><a href="blog.html">1</a></li>
                        <li><a href="blog-2.html">2</a></li>
                        <li><a href="blog-2.html">3</a></li>
                        <li><a href="blog-2.html">...</a></li>
                        <li><a href="blog-2.html">10</a></li>
                        <li class="arrow-icon"><a href="#"> &rightarrow; </a></li>
                    </ul>
                </div>
            </div>
        </div>
        -->
        <!-- pagination end -->

    </div>
</div>



<?php include('php/secction/footer.php') ?>