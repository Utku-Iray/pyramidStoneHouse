<?php
include 'php/head.php';
include 'php/header.php';


$categoryJSON = json_decode(file_get_contents('data/category.json'));
$roomJSON = json_decode(file_get_contents('data/room.json'));

$index = 0;
$index2 = 0;
?>
<div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="img/slider/5.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left caption mt-90">
                <h5>Luxury</h5>
                <h1>Odalar & Suitler</h1>
            </div>
        </div>
    </div>
</div>
<!-- Restaurant Content -->

<!-- Restaurant Menu -->
<section id="menu" class="restaurant-menu menu section-padding ">
    <div class="container">
        <div class="row">

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="tabs-icon col-md-10 offset-md-1 text-center">
                        <div class="owl-carousel owl-theme">
                            <?php
                            foreach ($categoryJSON as $singleCategory) {
                                $index++;    ?>
                                <div id="<?= $singleCategory->id ?>" class="<?php if ($index === 1) echo "active"; ?> item">
                                    <h6><?= $singleCategory->name ?></h6>
                                </div>
                            <?php  }
                            ?>
                        </div>
                    </div>
                    <div class="restaurant-menu-content col-md-12 rooms1">
                        <?php foreach ($categoryJSON as $singleCategory) {
                            $index2++;
                        ?>
                            <div id="<?= $singleCategory->id ?>-content" class="cont <?php if ($index2 === 1) echo "active"; ?>">
                                <div class="row">
                                    <?php foreach ($roomJSON as $singleRoom) {
                                        if ($singleRoom->category_id == $singleCategory->id) { ?>
                                            <div class="col-md-6">
                                                <div class="item">
                                                    <div class="position-re o-hidden"> <img src="<?= $singleRoom->photo ?>" alt=""> 
                                                </div>
                                                 <!-- <span class="category"><a href="rooms2.html">Book</a></span> -->
                                                    <div class="con">
                                                        <h5><a href="room-details.php?url=<?= $singleRoom->url ?>"><?= $singleRoom->name ?></a></h5>
                                                        <div class="line"></div>
                                                        <div class="row facilities">
                                                            <div class="col col-md-7">
                                                                <ul>
                                                                    <li><i class="flaticon-bed"></i></li>
                                                                    <li><i class="flaticon-bath"></i></li>
                                                                    <li><i class="flaticon-breakfast"></i></li>
                                                                    <li><i class="flaticon-towel"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col col-md-5 text-end">
                                                                <div class="permalink"><a href="room-details.php?url=<?= $singleRoom->url ?>">Detaylar <i class="ti-arrow-right"></i></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php          }
                                    }   ?>
                                </div>
                            </div>
                        <?php   } ?>







                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testiominals -->
<!-- <section class="testimonials">
    <div class="background bg-img bg-fixed section-padding pb-0" data-background="img/slider/2.jpg" data-overlay-dark="3">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="testimonials-box">
                        <div class="head-box">
                            <h6>Testimonials</h6>
                            <h4>What Client's Say?</h4>
                            <div class="line"></div>
                        </div>
                        <div class="owl-carousel owl-theme">
                            <div class="item"> <span class="quote"><img src="img/quot.png" alt=""></span>
                                <p>Hotel dapibus asue metus the nec feusiate eraten miss hendreri net ve ante the lemon sanleo nectan feugiat erat hendrerit necuis ve ante otel inilla duiman at finibus viverra neca the sene on satien the miss drana inc
                                    fermen norttito sit space, mus nellentesque habitan.</p>
                                <div class="info">
                                    <div class="author-img"> <img src="img/team/4.jpg" alt=""> </div>
                                    <div class="cont"> <span><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i></span>
                                        <h6>Emily Brown</h6> <span>Guest review</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item"> <span class="quote"><img src="img/quot.png" alt=""></span>
                                <p>Hotel dapibus asue metus the nec feusiate eraten miss hendreri net ve ante the lemon sanleo nectan feugiat erat hendrerit necuis ve ante otel inilla duiman at finibus viverra neca the sene on satien the miss drana inc
                                    fermen norttito sit space, mus nellentesque habitan.</p>
                                <div class="info">
                                    <div class="author-img"> <img src="img/team/1.jpg" alt=""> </div>
                                    <div class="cont"> <span><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i></span>
                                        <h6>Nolan White</h6> <span>Guest review</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item"> <span class="quote"><img src="img/quot.png" alt=""></span>
                                <p>Hotel dapibus asue metus the nec feusiate eraten miss hendreri net ve ante the lemon sanleo nectan feugiat erat hendrerit necuis ve ante otel inilla duiman at finibus viverra neca the sene on satien the miss drana inc
                                    fermen norttito sit space, mus nellentesque habitan.</p>
                                <div class="info">
                                    <div class="author-img"> <img src="img/team/5.jpg" alt=""> </div>
                                    <div class="cont"> <span><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i></span>
                                        <h6>Olivia Martin</h6> <span>Guest review</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Footer -->
<?php include 'php/footer.php' ?>