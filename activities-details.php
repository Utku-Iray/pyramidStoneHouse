<?php
include 'php/head.php';
include 'php/header.php';
$activitiesJSON = json_decode(file_get_contents('data/activities.json'));

foreach ($activitiesJSON as $singleActivities) {
    if ($singleActivities->url == $_GET["url"]) {
        $activitiesDetails = $singleActivities;
        break;
    }
}

?>
<!-- Room Page Slider -->
<header class="header slider">
    <div class="owl-carousel owl-theme">
        <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
        <?php foreach ($activitiesDetails->photo_gallery as $photo) { ?>
            <div class="text-center item bg-img" data-overlay-dark="3" data-background="<?= $photo ?>"></div>
        <?php } ?>


    </div>
    <!-- arrow down -->
    <div class="arrow bounce text-center">
        <a href="#" data-scroll-nav="1" class=""> <i class="ti-arrow-down"></i> </a>
    </div>
</header>
<!-- Room Content -->
<section class="rooms-page section-padding" data-scroll-index="1">
    <div class="container">
        <!-- project content -->
        <div class="row">
            <div class="col-md-12">
                <span>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                </span>
                <div class="section-subtitle">Luxury Hotel</div>
                <div class="section-title"><?= $activitiesDetails->name ?></div>
            </div>
            <div class="col-md-8">
                <p class="mb-30"><?= $activitiesDetails->content ?></p>


            </div>
            <div class="col-md-4  ">
                <div class="inBox box-1 mb-3">
                    <div class="title d-flex justify-content-between">
                        <div class="butn-dark">
                            <a href="#" class="text-center mx-auto butn-dark"><span class="flaticon-call"></span> Hemen Ara</a>
                            <a href="#" class="text-center mx-auto butn-dark"><span class="ti-bell">REZERVASYON</a>
                        </div>
                    </div>
                </div>
                <div class="news2-sidebar row">
                    <!-- <div class="col-md-12">
                            <div class="widget search">
                                <form>
                                    <input type="text" name="search" placeholder="Type here ...">
                                    <button type="submit"><i class="ti-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div> -->
                    <div class="col-md-12">
                        <div class="widget">
                            <div class="widget-title">
                                <h6>Aktiviteler</h6>
                            </div>
                            <ul class="recent">
                                <?php foreach ($activitiesJSON as $activity ) { ?>
                                    <li>
                                        <div class="thum"> <img src="<?=$activity->photo?>" alt=""> </div>
                                        <a href="activities-details.php?url=<?=$activity->url?>"><?= $activity->name ?></a>
                                    </li>

                                <?php } ?>


                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Similiar Room -->

<!-- Pricing -->

<!-- Rezervasyon & Booking Form -->
<section class="testimonials">
    <div class="background bg-img bg-fixed section-padding pb-0" data-background="img/slider/2.jpg" data-overlay-dark="2">
        <div class="container">
            <div class="row">
                <!-- Rezervasyon -->
                <div class="col-md-5 mb-30 mt-30">
                    <p><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i></p>
                    <h5>Each of our guest rooms feature a private bath, wi-fi, cable television and include full breakfast.</h5>
                    <div class="reservations mb-30">
                        <div class="icon color-1"><span class="flaticon-call"></span></div>
                        <div class="text">
                            <p class="color-1">Rezervasyon</p> <a class="color-1" href="tel:0384 219 4040">0384 219 4040</a>
                        </div>
                    </div>
                    <p><i class="ti-check"></i><small>Call us, it's toll-free.</small></p>
                </div>
                <!-- Booking From -->
                <div class="col-md-5 offset-md-2">
                    <div class="booking-box">
                        <div class="head-box">
                            <h6>Odalar & Suitler</h6>
                            <h4>Otel Rezervasyon Formu</h4>
                        </div>
                        <div class="booking-inner clearfix">
                            <form action="mail/tesekkurler" method="POST">
                    <!-- form message -->
                    <!-- <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success contact__msg" style="display: none" role="alert"> Your message was sent successfully. </div>
                        </div>
                    </div> -->
                    <!-- form elements -->
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input name="customerNameSurname" type="text" placeholder="Adınız *" required="">
                        </div>
                        <div class="col-md-6 form-group">
                            <input name="customerMail" type="email" placeholder="E-Mail *" required="">
                        </div>
                        <div class="col-md-6 form-group">
                            <input name="customerPhone" type="text" placeholder="Numaranız *" required="">
                        </div>
                        <div class="col-md-6 form-group">
                            <input name="customerSubject" type="text" placeholder="Konu *" required="">
                        </div>
                        <div class="col-md-12 form-group">
                            <textarea name="customerNote" cols="30" rows="4" placeholder="Mesaj *" required=""></textarea>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="butn-dark2"><span>Gönder</span></button>
                        </div>
                    </div>
                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Clients -->
<section class="clients">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="owl-carousel owl-theme">
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/1.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/2.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/3.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/4.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/5.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/6.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer -->
<?php include 'php/footer.php' ?>