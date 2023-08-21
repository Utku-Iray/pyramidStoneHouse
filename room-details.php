<?php
include 'php/head.php';
include 'php/header.php';
$roomJSON = json_decode(file_get_contents('data/room.json'));
$activitiesJSON = json_decode(file_get_contents('data/activities.json'));

foreach ($roomJSON as $singleRoom) {
    if ($singleRoom->url == $_GET["url"]) {
        $roomDetails = $singleRoom;
        break;
    }
}

?>
<!-- Room Page Slider -->
<header class="header slider">
    <div class="owl-carousel owl-theme">
        <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
        <?php foreach ($roomDetails->photo_gallery as $photo) { ?>
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
                <div class="section-title"><?= $roomDetails->name ?></div>
            </div>
            <div class="col-md-8">
                <p class="mb-30"><?= $roomDetails->content ?></p>


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
                <div class="oda-detay">
                    <h6>Özellikler</h6>
                    <ul class="list-unstyled page-list mb-30 ">

                        <?php

                        foreach ($roomDetails->ana_features as $singleFeatures) { ?>
                            <li>
                                <div class="page-list-icon"> <span class="flaticon-<?= $singleFeatures->icon ?>"></span> </div>
                                <div class="page-list-text">
                                    <p><?= $singleFeatures->featureName ?></p>
                                </div>
                            </li>

                        <?php
                        }
                        ?>

                    </ul>
                    
                </div>
                <div class="oda-detay" style="margin-top: 10px;">
                    <h6>Özellikler</h6>
                    <ul class="list-unstyled page-list mb-30 ">

                        <?php

                        foreach ($roomDetails->sub_features as $singleFeatures) { ?>
                            <li>
                                <div class="page-list-icon"> <span class="flaticon-<?= $singleFeatures->icon ?>"></span> </div>
                                <div class="page-list-text">
                                    <p><?= $singleFeatures->featureName ?></p>
                                </div>
                            </li>

                        <?php
                        }
                        ?>

                    </ul>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Similiar Room -->
<section class="rooms1 section-padding bg-blck">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-subtitle"><span>Luxury Hotel</span></div>
                <div class="section-title"><span>Odalar</span></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme">
                    <?php foreach ($roomJSON as $room) { ?>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="<?= $room->photo ?>" alt=""> </div> <span class="category"><a href="rooms2.html">Book</a></span>
                            <div class="con">
                                <!-- <h6><a href="room-details.php">150$ / Night</a></h6> -->
                                <h5><a href="room-details.php?url=<?= $room->url ?>"><?= $room->name ?></a> </h5>
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
                                        <div class="permalink"><a href="room-details.php">Detaylar <i class="ti-arrow-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>


                </div>
            </div>
        </div>
    </div>
</section>
<!-- Pricing -->
<section class="pricing section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="section-subtitle"><span>Popüler</span></div>
                <div class="section-title">Aktiviteler</div>
                <p>Pyramid Stone House ile sessizliğin, huzurun ve manzaranın keyfini çıkardınız ama daha fazlası için Kapadokya’nın derinliklerini keşfetmeye ne dersiniz?
                    <br><br>
                    Siz değerleri misafirlerimiz için özel hazırlanan etkinlikler ve fırsatlarla doğa mucizesi peri bacalarının arasında, masallara konu olan balonların içinde gökyüzünden mükemmel manzaralara şahitlik etmeye hazır mısınız?
                </p>
                <div class="reservations mb-30">
                    <div class="icon"><span class="flaticon-call"></span></div>
                    <div class="text">
                        <p>For information</p> <a href="tel:0384 219 4040">0384 219 4040</a>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="owl-carousel owl-theme">
                    <?php foreach ($activitiesJSON as $activity) { ?>
                        <a href="activities-details.php?url=<?= $activity->url ?>">
                            <div class="pricing-card">

                                <img src="<?= $activity->photo ?>" alt="">
                                <div class="desc">
                                    <div class="name"><?= $activity->name ?></div>
                                    <!-- <div class="amount">$50<span>/ month</span></div> -->
                                    <ul class="list-unstyled list">
                                        <li><i class="ti-check"></i> <?= $activity->description ?></li>
                                    </ul>
                                </div>

                            </div>
                        </a>
                    <?php  } ?>



                </div>
            </div>
        </div>
    </div>
</section>
<!-- Rezervasyon & Booking Form -->
<section class="testimonials">
    <div class="background bg-img bg-fixed section-padding pb-0" data-background="img/slider/2.jpg" data-overlay-dark="2">
        <div class="container">
            <div class="row">
                <!-- Rezervasyon -->
                <div class="col-md-5 mb-30 mt-30">
                    <p><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i></p>
                    <h5>Masalların, gerçeküstü öykülerin, kulaktan kulağa yayılan tüm o büyülü anlatılara konu olmuş bir kentin tam ortasında, sevgiye, mutluluğa, güzel anılar biriktirmeye inanan herkes evinde hissetsin diye kesişti yollarımız.</h5>
                    <div class="reservations mb-30">
                        <div class="icon color-1"><span class="flaticon-call"></span></div>
                        <div class="text">
                            <p class="color-1">Rezervasyon</p> <a class="color-1" href="tel:0384 219 4040">0384 219 4040</a>
                        </div>
                    </div>
                    <p><i class="ti-check"></i><small> Ücretsiz şekilde bizi arayabilirsiniz</small></p>
                </div>
                <!-- Booking From -->
                <div class="col-md-5 offset-md-2">
                    <div class="booking-box">
                        <div class="head-box">
                            <h6>Odalar & Suitler</h6>
                            <h4>Otel Rezervasyon Formu</h4>
                        </div>
                        <div class="booking-inner clearfix">
                            <form action="rooms2.html" class="form1 clearfix">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input1_wrapper">
                                            <label>Giriş</label>
                                            <div class="input1_inner">
                                                <input type="text" class="form-control input datepicker" placeholder="Giriş">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input1_wrapper">
                                            <label>Çıkış</label>
                                            <div class="input1_inner">
                                                <input type="text" class="form-control input datepicker" placeholder="Çıkış">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="select1_wrapper">
                                            <label>Kişi</label>
                                            <div class="select1_inner">
                                                <select class="select2 select" style="width: 100%">
                                                    <option value="0">Kişi</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="select1_wrapper">
                                            <label>Çocuk</label>
                                            <div class="select1_inner">
                                                <select class="select2 select" style="width: 100%">
                                                    <option value="0">Çocuk</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn-form1-submit mt-15">Rezervasyon</button>
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
<!-- <section class="clients">
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
</section> -->
<!-- Footer -->
<?php include 'php/footer.php' ?>