<?php include 'php/head.php';
include 'php/header.php';
$categoryJSON = json_decode(file_get_contents('data/category.json'));
$activitiesJSON = json_decode(file_get_contents('data/activities.json'));
$blogJSON = json_decode(file_get_contents('data/blog.json'));

?>

<!-- Booking Search -->
<!-- Slider -->
<header class="header slider-fade">
    <div class="owl-carousel owl-theme">
        <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
        <div class="text-center item bg-img" data-overlay-dark="2" data-background="img/slider/slider1.jpeg">
            <div class="v-middle caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <span>
                                <i class="star-rating"></i>
                                <i class="star-rating"></i>
                                <i class="star-rating"></i>
                                <i class="star-rating"></i>
                                <i class="star-rating"></i>
                            </span>
                            <h4>Luxury Hotel</h4>
                            <h1>Pyramid Stone House</h1>
                            <div class="butn-light mt-30 mb-30"> <a href="rooms-and-suits.php" data-scroll-nav="1"><span>Odalar & Suitler</span></a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center item bg-img" data-overlay-dark="2" data-background="img/slider/slider2.png">
            <div class="v-middle caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <span>
                                <i class="star-rating"></i>
                                <i class="star-rating"></i>
                                <i class="star-rating"></i>
                                <i class="star-rating"></i>
                                <i class="star-rating"></i>
                            </span>
                            <h4>Unique Place to Relax & Enjoy</h4>
                            <h1>Pyramid Stone House</h1>
                            <div class="butn-light mt-30 mb-30"> <a href="rooms-and-suits.php" data-scroll-nav="1"><span>Odalar & Suitler</span></a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- slider reservation -->
    <div class="reservation">
        <a href="tel:8551004444">
            <div class="icon d-flex justify-content-center align-items-center">
                <i class="flaticon-call"></i>
            </div>
            <div class="call"><span>0384 219 4040</span> <br>Rezervasyon</div>
        </a>
    </div>
</header>



<div class="booking-wrapper">
    <div class="container">
        <div class="booking-inner clearfix">

            <div id='hr_search_widget'></div>
        </div>
    </div>
</div>
<!-- About -->
<section class="about section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                <span>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                </span>
                <div class="section-subtitle">Pyramid Stone House</div>
                <div class="section-title">Hakkımızda</div>
                <p>Masalların, gerçeküstü öykülerin, kulaktan kulağa yayılan tüm o büyülü anlatılara konu olmuş bir kentin tam ortasında, sevgiye, mutluluğa, güzel anılar biriktirmeye inanan herkes evinde hissetsin diye kesişti yollarımız. “Hiçbir şey tesadüf değildir” derler, bu karşılaşma da öyle. Yüzyıllar boyunca sayısız hikayeye tanık olmuş bu sihirli yerde, size masallar diyarı Kapadokya’da bir eviniz olduğunu hissettirme hayaliyle buradayız. Attığınız her adımda farklı öyküler duyacağınız, sizi geçmişle gelecek arasında yolculuklara çıkaracak, her yanı tarih kokan bu kentte, bir masalın baş kahramanı olmaya hazır mısınız? </p>
                <!-- call -->
                <div class="reservations">
                    <div class="icon"><span class="flaticon-call"></span></div>
                    <div class="text">
                        <p>Rezervasyon</p> <a href="tel:0384 219 4040">0384 219 4040</a>
                    </div>
                </div>
            </div>
            <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp">
                <img src="img/rooms/8.jpg" alt="" class="mt-90 mb-30">
            </div>
            <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp">
                <img src="img/rooms/2.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Rooms -->
<section class="rooms1 section-padding bg-cream" data-scroll-index="1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-subtitle">Pyramid Stone House</div>
                <div class="section-title">Odalar & Suitler</div>
            </div>
        </div>
        <div class="row" style="justify-content: center;">
            <?php foreach ($categoryJSON as $category) { ?>
                <div class="col-md-6">
                    <div class="item">
                        <div class="position-re o-hidden"> <img src="<?= $category->image ?>" alt=""> </div> <span class="category"><a href="rooms2.html">Book</a></span>
                        <div class="con">
                            <h5><a href="rooms-and-suits.php"><?= $category->name ?></a></h5>
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
                                    <div class="permalink"><a href="rooms-and-suits.php">Details <i class="ti-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>


        </div>
    </div>
</section>
<!-- Pricing -->
<section class="pricing section-padding bg-blck">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="section-subtitle"><span>Popüler</span></div>
                <div class="section-title"><span>AKTİVİTELER</span></div>
                <p class="color-2">Pyramid Stone House ile sessizliğin, huzurun ve manzaranın keyfini çıkardınız ama daha fazlası için Kapadokya’nın derinliklerini keşfetmeye ne dersiniz?
                    <br><br>
                    Siz değerleri misafirlerimiz için özel hazırlanan etkinlikler ve fırsatlarla doğa mucizesi peri bacalarının arasında, masallara konu olan balonların içinde gökyüzünden mükemmel manzaralara şahitlik etmeye hazır mısınız?
                </p>
                <div class="reservations mb-30">
                    <div class="icon"><span class="flaticon-call"></span></div>
                    <div class="text">
                        <p class="color-2">İletişim</p> <a href="tel:0384 219 4040">0384 219 4040</a>
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
<!-- Promo Video -->
<!-- <section class="video-wrapper video section-padding bg-img bg-fixed" data-overlay-dark="3" data-background="img/slider/2.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
                <span><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i></span>
                <div class="section-subtitle"><span>Pyramid Stone House</span></div>
                <div class="section-title"><span>Promotional Video</span></div>
            </div>
        </div>
        <div class="row">
            <div class="text-center col-md-12">
                <a class="vid" href="https://youtu.be/7BGNAGahig8">
                    <div class="vid-butn">
                        <span class="icon">
                            <i class="ti-control-play"></i>
                        </span>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section> -->
<!-- Facilties -->
<section class="facilties section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-subtitle">Servisler</div>
                <div class="section-title">Hotel Servisleri</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                    <span class="flaticon-world"></span>
                    <h5>Ulaşım</h5>
                    <p>Hava yolu ile gerçekleştireceğiniz seyahatlerde, talebinize göre otelimize transferinizi gerçekleştiriyoruz.</p>
                    <div class="facility-shape"> <span class="flaticon-world"></span> </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                    <span class="flaticon-car"></span>
                    <h5>Otopark</h5>
                    <p>Seyahatiniz süresince, otelimiz dahilinde araçlarınız için güvenli otopark hizmeti sunuyoruz.</p>
                    <div class="facility-shape"> <span class="flaticon-car"></span> </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                    <span class="flaticon-bed"></span>
                    <h5>Oda Servisleri</h5>
                    <p>Kapadokya’nın eşsiz atmosferinde yaşanacak günlerinizi sizler için keyifli hale getirerek tatilinizi unutulmaz kılıyoruz.</p>
                    <div class="facility-shape"> <span class="flaticon-bed"></span> </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                    <span class="flaticon-serving-dish"></span>
                    <h5>Restaurant</h5>
                    <p>Kadim Peri Bacaları Arasında Büyülü Lezzet Deneyimi!</p>
                    <div class="facility-shape"> <span class="flaticon-swimming"></span> </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                    <span class="flaticon-wifi"></span>
                    <h5>İnternet & Wifi</h5>
                    <p>Otelimizde 7/24 faydalanabileceğiniz İnternet & Wifi bağlantısı bulunmaktadır</p>
                    <div class="facility-shape"> <span class="flaticon-wifi"></span> </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                    <span class="flaticon-breakfast"></span>
                    <h5>Kahvaltı</h5>
                    <p>Şeflerimiz tarafından özenle hazırlanan kahvaltımız sizi yeni bir güne keyifle başlatıyor.</p>
                    <div class="facility-shape"> <span class="flaticon-breakfast"></span> </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
                <div class="img left">
                    <a href="#0"><img src="img/balayi.jpg" alt=""></a>
                </div>
            </div>
            <div class="col-md-6 p-0 bg-cream valign animate-box" data-animate-effect="fadeInRight">
                <div class="content">
                    <div class="cont text-left">
                        <div class="info">
                            <h6>Pyramid Stone House</h6>
                        </div>
                        <h4>Balayı Paketimiz</h4>
                        <p>Özel karşılama ve hoş geldin ikramı,
                            <br> Odaya Şarap & meyve tabağı ikramı,
                            <br> Erken giriş ve geç çıkış imkânı (müsaitliğe göre öncelik tanınacaktır),
                            <br> Özel balayı oda süslemesi (istek üzerine, ücretli olacaktır),
                            <br> Odaya sabah kahvaltısı (konaklama boyunca 1 kez ve istek üzerine),
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 bg-cream p-0 order2 valign animate-box" data-animate-effect="fadeInLeft">
                <div class="content">
                    <div class="cont text-left">
                        <div class="info">
                            <h6>Pyramid Stone House</h6>
                        </div>
                        <h4>Evlilik Teklifi</h4>
                        <p>“Benimle evlenir misin?” sorusuna “Evet!” yanıtını verdirecek bir ilişki her yerde güzel. Ama iddialıyız; evlilik teklifinin “torunlara anlatılacak olanı” Pyramıd Stone House yaşanır! Sizler için özel olarak hazırladığımız evlilik teklifi paketimizi inceleyin.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-0 order1 animate-box" data-animate-effect="fadeInRight">
                <div class="img">
                    <a href="#0"><img src="img/evlilik-teklifi.jpg" alt=""></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
                <div class="img left">
                    <a href="#0"><img src="img/dogum-gunu.jpg" alt=""></a>
                </div>
            </div>
            <div class="col-md-6 p-0 bg-cream valign animate-box" data-animate-effect="fadeInRight">
                <div class="content">
                    <div class="cont text-left">
                        <div class="info">
                            <h6>Pyramid Stone House</h6>
                        </div>
                        <h4>Doğum Günü</h4>
                        <p>Yeni bir yaşa sevdiklerinizle ve unutulmayacak bir şekilde girmek kadar keyifli bir şey var mı? Sizin için yılın en özel gününü, en unutulmaz anılarla doldurmak için nasıl bir plan yapalım?</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<section class="news section-padding bg-blck">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-subtitle"><span>Blog</span></div>
                <div class="section-title"><span>Duyurular</span></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme">
                    <?php foreach ($blogJSON as $blog) { ?>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="<?= $blog->blog_first_image ?>" alt="">

                            </div>
                            <div class="con"> <span class="category">
                                    <a href="#0">Pyramid Stone House</a>
                                </span>
                                <h5><a href="blog-details.php?url=<?= $blog->blog_url ?>"><?= $blog->blog_name ?></a></h5>
                            </div>
                        </div>
                    <?php } ?>




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
<?php include 'php/footer.php' ?>