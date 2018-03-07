
<!-- First product box start here-->
<div class="prod-info-main prod-wrap clearfix">
    <div class="row">
        <div class="col-md-5 col-sm-12 col-xs-12">
            <div id="productSlider" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="<?php echo $BASE_URL; ?>/img/slider1.jpg" class="img-responsive"> 
                    </div>

                    <div class="item">
                        <img src="<?php echo $BASE_URL; ?>/img/slider1.jpg" class="img-responsive"> 
                    </div>

                    <div class="item">
                        <img src="<?php echo $BASE_URL; ?>/img/slider1.jpg" class="img-responsive"> 
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#productSlider" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#productSlider" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-md-7 col-sm-12 col-xs-12">
            <div class="product-deatil">
                <h5 class="name">
                    <a href="#">
                        Product Code/Name here <?php echo!empty($id) ? $id : ''; ?>
                    </a>
                    <a href="#">
                        <span>Product Category</span>
                    </a>                            

                </h5>
                <p class="price-container">
                    <span>$199</span>
                </p>
                <span class="tag1"></span> 
            </div>
            <div class="description">
                <p>A Short product description here </p>
            </div>
            <div class="product-info smart-form">
                <div class="row">
                    <div class="col-md-12"> 
                        <a href="javascript:void(0);" class="btn btn-danger">Add to cart</a>
                        <a href="javascript:void(0);" class="btn btn-info btn-view-more">More info</a>
                    </div>
                    <div class="col-md-12">
                        <div class="rating">Rating:
                            <label for="stars-rating-5"><i class="fa fa-star text-danger"></i></label>
                            <label for="stars-rating-4"><i class="fa fa-star text-danger"></i></label>
                            <label for="stars-rating-3"><i class="fa fa-star text-danger"></i></label>
                            <label for="stars-rating-2"><i class="fa fa-star text-warning"></i></label>
                            <label for="stars-rating-1"><i class="fa fa-star text-warning"></i></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end product -->
